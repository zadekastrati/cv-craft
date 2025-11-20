@push('scripts')
    @once
        <script>
            window.cvCraftBuilder = function (config) {
                return {
                    templates: config.templates,
                    defaults: config.defaults,
                    form: {
                        title: config.form.title || '',
                        template: config.form.template || 'aura',
                        summary: config.form.summary || '',
                        experience: config.form.experience || '',
                        skills: config.form.skills || '',
                        education: config.form.education || '',
                    },
                    setTemplate(value) {
                        this.form.template = value;
                    },
                    lines(value) {
                        return (value || '')
                            .split(/\r?\n/)
                            .map(line => line.trim())
                            .filter(Boolean);
                    },
                    get experienceLines() {
                        return this.lines(this.form.experience);
                    },
                    get skillLines() {
                        return this.lines(this.form.skills);
                    },
                    get educationLines() {
                        return this.lines(this.form.education);
                    },
                    display(value, fallback) {
                        return value && value.trim().length ? value : fallback;
                    },
                };
            };
        </script>
    @endonce
@endpush

