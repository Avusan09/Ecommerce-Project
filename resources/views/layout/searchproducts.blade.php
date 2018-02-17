<ais-index
        app-id="HRI7P97C9Z"
        api-key="f8c5161de71e4bb53f33b0e94fcfffa1"
        index-name="products">
    <ais-search-box style="margin-top:200px"></ais-search-box>

    <ais-results>
        <template slot-scope="{ result }">
            <h2>
                <ais-highlight :result="result" attribute-name="Title"></ais-highlight>
            </h2>
        </template>
    </ais-results>
</ais-index>