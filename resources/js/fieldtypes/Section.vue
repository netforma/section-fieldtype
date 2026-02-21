<script setup>
defineProps({
    config: Object,
});
</script>

<template>
    <div class="w-full py-2 px-3 bg-gray-100 dark:bg-gray-800">
        <div class="font-bold text-gray-900 dark:text-gray-100 uppercase tracking-wide text-sm">
            {{ config.display }}
        </div>
    </div>
</template>
