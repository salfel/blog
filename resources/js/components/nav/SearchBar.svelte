<script lang="ts">
    import Glass from '@inqling/svelte-icons/heroicon-24-solid/magnifying-glass.svelte'

    let search: string = "";

    const handleSubmit = (e: SubmitEvent) => {
        if (!search.trim()) {
            search = "";
            e.preventDefault();
        }
    }
</script>

<form class="join" action="/" method="GET" on:submit={handleSubmit}>
    <input name="q" class="input input-bordered join-item" placeholder="Search..." type="search" bind:value={search} />
    <button type="submit" class="btn join-item">
        <Glass class="w-4 h-4" />
    </button>
</form>


