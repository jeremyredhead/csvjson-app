<div class="container px-4 py-5">
  <div class="row">
    <div class="description col-md-12">
      <h1 class="text-primary fw-bold">CSVJSON <small class="bi bi-chevron-right"></small>CSV</h1>
			<p>To get started, upload or paste your JSON data.
    </div>
  </div>

  <div class="row">
    <div class="col-md-5 more-bottom-margin">
      <div class="mb-5">
        <label class="form-label">Upload a CSVJSON file</label>
          <input id="fileupload" type="file" name="file" class="form-control"/>
      </div>
      <div class="mb-3">
        <label class="form-label">Or paste your CSVJSON here</label>
<textarea id="csv" class="form-control input save" rows="18" spellcheck="false">
"index","value1","value2"
"number",1,2
"boolean",false,true
"null",null,"non null"
"array of numbers",[1],[1,2]
"simple object",{"a": 1},{"a":1, "b":2}
"array with mixed objects",[1,null,"ball"],[2,{"a": 10, "b": 20},"cube"]
"string with quotes","a\"b","alert(\"Hi!\")"
"string with bell&newlines","bell is \u0007","multi\nline\ntext"
</textarea>
      </div>
      <button id="convert" type="submit" class="btn btn-primary">
        	<i class="bi bi-chevron-right"></i> Convert
      </button>
      <button id="clear" type="submit" class="btn btn-light">
        <i class="bi bi-backspace"></i> Clear
      </button>
    </div>

    <div class="col-md-7 more-bottom-margin">
      <div class="mb-5">
        <div class="mb-2">Options</div>
        <div class="form-check-inline">
          <label class="form-label mb-3 mt-2" title="Minify or compact result by removing spaces and new lines.">
            <input type="checkbox" id="minify" name="minify" class="form-check-input save" /> Minify
          </label>
        </div>
      </div>
      <?php $this->load->view('result_textarea_buttons_view', array('result_title' => 'JSON', 'download' => 'csvjson.json')); ?>
    </div>
  </div>
</div>

<div class="container px-4 py-5" id="about-flatfile">

  <h2 class="pb-2 border-bottom">Needing more?</h2>

  <div class="row row-cols-1 row-cols-sm-1 row-cols-md-12 row-cols-lg-12 g-4 py-5">
    <div class="col d-flex align-items-start">
      <div>
        <p>
          Embed all the functionality of csv<strong>json</strong> in any web application with <a href="https://flatfile.com/get-started?utm_source=csvjson-tools&amp;utm_medium=header&amp;utm_campaign=q1-2022-csvjson-redesign&amp;ajs_event=came_from_csvjson&amp;ajs_prop_ccf_id=b8cdef6a-602c-4993-890c-752924b5ac2a&amp;__hstc=191284213.17efec156b05b5f65379d478482fed10.1642435230343.1643637413336.1644345002104.7&amp;__hssc=191284213.2.1644345002104&amp;__hsfp=668737353">Flatfile</a>. Auto-match columns, validate data fields, and provide an intuitive CSV import experience.
        </p>
      </div>
    </div>
  </div>

</div>

<div class="container px-4 py-5" id="about-csvjson">

  <h2 class="pb-2 border-bottom">More Details</h2>

  <div class="row row-cols-1 row-cols-sm-1 row-cols-md-12 row-cols-lg-12 g-4 py-5">
    <div class="col d-flex align-items-start">
      <div>
        <ul>
          <li>CSVJSON is a CSV-like text format where each line is a JSON array without the surrounding brackets.</li>
          <li>For data made of numbers and 'simple' strings, CSVJSON looks just like CSV.</li>
          <li>Parsing CSVJSON is done by processing one line at a time. Wrap a line with square brackets [] and use JSON.parse() to convert to a JSON array.</li>
          <li>An explanation of CSVJSON and its benefits can be found at the specification website: <a href="http://csvjson.org" target="_blank">csvjson.org</a></li>
          <li>
            CSVJSON is ideal as a common format for dumping database tables because:
            <ol>
              <li>Being based on UTF-8 it can reliably maintain text from different languages.</li>
              <li>It has a standard concept of nulls.</li>
              <li>It can deal with modern database features like objects and arrays.</li>
              <li>Being based on JSON, there is large variety of high quality formatters and parsers in virtually every programming language.</li>
            </ol>
          </li>
          <li>
            CSVJSON is more expressive than CSV (whose common use is documented by <a href="https://tools.ietf.org/html/rfc4180" tagrget="_blank">RFC-4180</a>. As a result, there are many cases where products and libraries that can read CSV would fail to read CSVJSON due, for example, to escaping rules and embedded objects. Given CSVJSON's simplicity and utility more tools and libraries will support it over time.
          </li>
          <li>
            To convert JSON back to CSVJSON format, use the companion tool <a href="/json2csv">JSON to CSV</a> and toogle the <em>Output CSVJSON variant</em> switch.
          </li>
        </ul>
        <blockquote>
          <p>
            The reason why we came up with CSVJSON was not to allow embedding of JSON objects in a CSV line, that's a nice benefit but our main reason was to have the very well defined encoding semantics of JSON (as per json.org) be used to describe CSV lines (just taking out the [ and ]).
          </p>
          <footer>Dror Harari, <em>author of the CSVJSON format</em></footer>
        </blockquote>
				<p>
					<a class="btn btn-light" data-bs-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseExample">
						View Change Log
					</a>
				</p>
      </div>
    </div>


		<div id="collapseOne" class="accordion-collapse collapse showclass row row-cols-1 row-cols-sm-1 row-cols-md-12 row-cols-lg-12 g-4">
			    <div class="col d-flex align-items-start">
						<div>
                <h5>Jan 26, 2019</h5> <p>Improvement: Removed 65k limit on download button.</p>
                <h5>Apr 6, 2016</h5> <p>Bug fixes and help text improvements.</p>
                <h5>Apr 2, 2018</h5> <p>First release.</p>
						</div>

			      </div>
			    </div>

  </div>

</div>
