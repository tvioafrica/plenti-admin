<template>
  <div class="checkbox-list">

    <div class="search-container">
      <input
        type="text"
        v-model="searchText"
        placeholder="Search..."
        @input="filterOptions"
      />
    </div>

    <div class="checkbox-container" :style="{ maxHeight: containerHeight + 'px', overflowY: 'auto' }">
      <div v-for="(option, index) in filteredOptions" :key="index" class="checkbox-item">
        <input
          type="checkbox"
          :id="'checkbox-' + index"
          :value="option.id"
          @change="onChangeCheckbox(option)"
        />
        <label :for="'checkbox-' + index">{{ option.name }}</label>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: "CheckboxList",
  props: {
      options: Array,
  },
  data() {
    return {
      selectedValues: [],
      containerHeight: 200, 
      /*options: [
        { value: 1, label: "Option 1" },
        { value: 2, label: "Option 2" },
        { value: 3, label: "Option 3" },
        { value: 4, label: "Option 4" },
        { value: 5, label: "Option 5" },
        { value: 6, label: "Option 6" },
        { value: 7, label: "Option 7" },
        { value: 8, label: "Option 8" },
        { value: 9, label: "Option 9" },
        { value: 10, label: "Option 10" },
        { value: 11, label: "Option 11" },
        { value: 12, label: "Option 12" },
        { value: 13, label: "Option 13" },
        { value: 14, label: "Option 14" },
        { value: 15, label: "Option 15" },
      ],
          v-model="selectedValues"
          @change="onChangeCheckbox"
      */
      filteredOptions: [],
      searchText: "",
    };
  },
 /* created(){
    this.filteredOptions = this.$props.options;
    console.log("option3" + JSON.stringify(this.$props.options))
  },*/
  watch: {
    options: {
      immediate: true, // Trigger the watcher immediately on component creation
      handler(newVal) {
        this.filteredOptions = newVal;
      }
    }
  },
  
  methods: {
    filterOptions() {
      this.filteredOptions = this.$props.options.filter((option) =>
        option.name.toLowerCase().includes(this.searchText.toLowerCase())
      );
    },
    onChangeCheckbox(option) {
      const optionIndex = this.selectedValues.findIndex((item) => item.id === option.id);
      if (optionIndex === -1) {
        
        this.selectedValues.push({id: option.id, nameo: option.name});
      } else {
        
        this.selectedValues.splice(optionIndex, 1);
      }
      this.$emit("update:selectedValues", this.selectedValues);
      console.log("nnnnn" + JSON.stringify(this.selectedValues))
    },
  },
};
</script>

<style scoped>

.search-container {
  margin-bottom: 10px;
}

.checkbox-list {
  width: 200px;
  display: flex;
  flex-direction: column;
}

.checkbox-container {
  overflow-y: auto; 
  flex: 1;
}

.checkbox-item {
  display: flex;
  align-items: center;
  margin-bottom: 8px;
}

.checkbox-item label {
  margin-left: 8px; 
}

</style>