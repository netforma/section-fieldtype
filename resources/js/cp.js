import SectionFieldtype from "./fieldtypes/Section.vue";

Statamic.booting(() => {
    Statamic.$components.register("section-fieldtype", SectionFieldtype);
});
