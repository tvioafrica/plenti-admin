
export default {
    plotSingleLineAreaChat: function (name, categories, data, xTitle, yTitle) {
       return {
            chart: {
                type: 'area'
            },
            title: {
                text: xTitle
            },
            xAxis: {
                categories:categories
            },
            yAxis: {
                title: {
                    text: yTitle
                }
            },
            series: [{
                name: name,
                data:data
            }]
        };
    },
    plotColumnChat: function (name, categories, data, xTitle, yTitle) {
        return {
             chart: {
                 type: 'column'
             },
             title: {
                align: 'left',
                text: xTitle
             },
             accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
             xAxis: {
                type: 'category'
             },
             legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },
             yAxis: {
                 title: {
                     text: yTitle
                 }
             },
             series: {
                name: name,
                colorByPoint: true,
                data: data
             }
         };
     },
     formatNumber: function (amount, decimalCount = 2, decimal = ".", thousands = ",") {
        try {
            decimalCount = Math.abs(decimalCount);
            decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

            const negativeSign = amount < 0 ? "-" : "";

            let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
            let j = (i.length > 3) ? i.length % 3 : 0;

            return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands);
        } catch (e) {
            console.log(e)
        }
    },
    plotGenderDistributionChart: function(dataMerch,total,Highcharts){

        return {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: "pie"
            },
            title: {
                text: "<p style='font-size:20pt;'> Total <br>" + total + "</p>",
                align: 'center',
                verticalAlign: 'middle',

            },
            tooltip: {
                // /pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>",
                useHTML: true,
               /*  formatter: function () {
                    //console.log(this); // just to see , what data you can access
                    return this.key + '<br>'
                        + '</b> Persentase: <b>' + this.percentage.toFixed(2) + '% </b>(' + this.point.y + ' Transaction)<br>'
                        + 'Rp.' + this.point.money;
                } */
            },
           plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: "pointer",
                    dataLabels: {
                        enabled: true,
                        //format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                        formatter: function () {
                            return this.key + " " +this.y + " " + '<br>(' + this.percentage.toFixed(2) + '%)'
                        },
                        style: {
                            color:
                                (Highcharts.theme && Highcharts.theme.contrastTextColor) ||
                                "black"
                        }
                    }
                }
            },
            series:
                [
                    {
                        name: "Gender Distribution",
                        colorByPoint: true,
                        innerSize: '50%',
                        data: dataMerch,
                    }
                ]
        }

    }

}
