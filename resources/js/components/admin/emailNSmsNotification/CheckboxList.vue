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
          v-model="selectedUsers"
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
      selectedUsers: [],
      containerHeight: 200, 
      filteredOptions: [],
      searchText: "",
    };
  },
  watch: {
    options: {
      immediate: true,
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