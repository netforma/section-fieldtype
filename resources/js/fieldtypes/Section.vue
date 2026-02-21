<script setup>
defineProps({
    config: Object,
});
</script>

<template>
    <div class="w-full py-3 px-3 bg-gray-100 dark:bg-gray-800 rounded-lg">
        <div class="font-semibold text-gray-800 dark:text-gray-200 text-sm">
            {{ config.display }}
        </div>
    </div>
</template>
