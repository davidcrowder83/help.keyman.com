<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Get some language data",
    'css' => ['template.css', 'prism.css', 'dev-lexical-models.css']
  ]);
?>

<h1>Step 3: Get some language data</h1>

<p>To predict words in your language, a lexical model needs to know the words in your language!</p>


<p> Keyman Developer understands how to read words in a <a href="../../../reference/file-types/tsv.php">TSV file</a>.
This kind of file can be saved from a <strong>spreadsheet</strong> application like <a
href="https://sheets.google.com/">Google Sheets</a> or
<a href="https://products.office.com/en/excel">Microsoft Excel</a>.
Other users may also use <strong>language data management software</strong>
like <a href="https://software.sil.org/fieldworks/">SIL FieldWorks Language
Explorer (FLEx)</a> to export an appropriate <strong>TSV</strong> file.</p>

<p>One simple way to create your TSV file is to use the <strong>PrimerPrep</string> tool:</p>
<ol>
  <li>Install PrimerPrep (info at <a href="http://lingtransoft.info/apps/primerprep">http://lingtransoft.info/apps/primerprep</a>)</li>
  <li>Run PrimerPrep (note that on the first run it often takes a couple of minutes; subsequent starts are faster)</li>
  <li>Click on the Add Text(s) button; select one or more plain text (UTF-8) files in the language to analyze</li>
  <li>The word list with frequency counts appears in the pane to the right</li>
  <li>From the File menu, select Save Word List… and specify the file name and location (a .tsv extension is recommended)</li>
</ol>

<aside>
  <p><strong>For advanced users</strong>: Ultimately, what Keyman Developer
  requires is a tab-separated values (TSV) file in a specfic format described in
  the <a href="../../../reference/file-types/tsv.php">file types reference</a>.
  Refer to this reference file if you are coding your own exporter.
  </p>
</aside>

<h2>Example Wordlist</h2>

<p>I have words in my language of choice, SENĆOŦEN.
Here is my list of words, with the count of how many times I’ve seen the word:</p>

<table class="wordlist">
  <caption> List of ten SENĆOŦEN words, with counts </caption>
  <thead>
    <tr> <th scope="col">Word</th> <th scope="col">Count</th> </tr>
  </thead>
  <tbody>
    <tr> <td>TŦE</td> <td class="number">13644</td> </tr>
    <tr> <td>E</td>   <td class="number">9134</td> </tr>
    <tr> <td>SEN</td> <td class="number">4816</td> </tr>
    <tr> <td>Ȼ</td>   <td class="number">3479</td> </tr>
    <tr> <td>SW̱</td>  <td class="number">2621</td> </tr>
    <tr> <td>NIȽ</td> <td class="number">2314</td> </tr>
    <tr> <td>U¸</td>  <td class="number">2298</td> </tr>
    <tr> <td>I¸</td>  <td class="number">1988</td> </tr>
    <tr> <td>ȻSE</td> <td class="number">1925</td> </tr>
    <tr> <td>I</td>   <td class="number">1884</td> </tr>
  </tbody>
</table>

<h2>Editing the .TSV in Keyman Developer</h2>
<p>If you plan to only edit a few entries for your wordlist, you can use the TSV editor in Keyman Developer. The project
template created a wordlist named <strong>wordlist.tsv</strong> that we will now edit. This file is referenced by the 
model definition file <strong>nrc.str.sencoten.model.ts</strong>, which we will need to open in order to see the wordlist.</p>

<p>In Keyman Developer project view, select the <strong>Models</strong> tab and double-click on <strong>nrc.str.sencoten.model.ts</strong>.</p>

<figure>
  <img src="<?= cdn('img/developer/130/lm/developer-open-model-ts.png') ?>"
       alt="Open .model.ts file in Keyman Developer" />
  <figcaption>Open a .model.ts file in Keyman Developer</figcaption>
</figure>

<p>Once you open the model file, you will see some metadata about the model which you can edit, including:</p>

<ul>
  <li><strong>Model format:</strong> Wordlist or Custom (we'll use Wordlist for now)</li>
  <li><strong>Word breaker:</strong> Default or Custom (we'll use Default)</li>
  <li><strong>Comments:</strong> Your notes about the model, not shown to users</li>
  <li>A list of <strong>wordlist files</strong> referenced by the model file. You'll also see a separate tab on the left for each of the wordlists.
  When we start this project, there will be just one wordlist, called <strong>wordlist.tsv</strong></li>
</ul>

<p>Click on the <strong>wordlist.tsv</strong> tab to start editing the wordlist.</p>

<figure>
  <img src="<?= cdn('img/developer/130/lm/developer-model-editor.png') ?>"
       alt="Keyman Developer Lexical Model Editor" />
  <figcaption>Keyman Developer Lexical Model Editor</figcaption>
</figure>

<p>Keyman Developer already generated a few example words when it created the template wordlist.tsv file.<p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/template-tsv.png') ?>"
       alt="Example wordlist.tsv generated by template" />
  <figcaption>Template wordlist.tsv</figcaption>
</figure>

<p>We will replace these entries with SENĆOŦEN words from our wordlist. For each row, edit the "Word Form" and "Count".
Counts are optional for each word: that is, some words may specify counts in the second column, while other words may
leave the second column blank. To create a new entry at the bottom, click "Add word...".
When you are finished, you'll have a wordlist that looks like this:</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/edited-tsv.png') ?>"
       alt="Editing wordlist.tsv in Keyman Developer" />
  <figcaption>Edited wordlist.tsv for SENĆOŦEN</figcaption>
</figure>

<p>After saving your wordlist file, you can move on to Step 4.</p>

<h2>Editing the .TSV in Google Sheets</h2>
<p>Alternatively, you may want to use a different spreadsheet tool for editing large wordlists.
  I’ve entered this information into my spreadsheet of choice, <a
href="https://sheets.google.com/">Google Sheets</a>. I’ve shared this
spreadsheet publicly
<a href="https://docs.google.com/spreadsheets/d/10zhIc439BCSSooL_-HeJ6TUHd-ovkiXYcIGe-pHDTSg/edit?usp=sharing">here</a>.
The order of the columns matters:</p>

<p>The first column (column A) <strong>must</strong> be the “words”. If
provided, the second column (column B) <strong>must</strong> be the “counts”.
Counts are optional for each word: that is, some words may specify counts in
the second column, while other words may leave the second column blank. The
third column (column C) is always ignored. You may use this column as a
comment. The spreadsheet can be as simple as a single column of all of the
words in the language, with each word being separated by a line break.</p>

<p>This is what my word list looks like in Google Sheets:</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/sencoten-sheets-full.png') ?>"
       class="macos-screenshot"
       alt="screenshot of the word list in Google Sheets" />
  <figcaption> The word list, as it appears in Google Sheets </figcaption>
</figure>

<p>Now, we download the spreadsheet in the
<a href="../../../reference/file-types/tsv.php">required format</a>.
To do this, in Google Sheets, select “File” » “Download as” » “Tab-separated
values (.tsv, current sheet)”.</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/sencoten-sheets-save-as.png') ?>" alt="screenshot of “Save as…” menu in Google Sheets, selecting ”TSV”" />
  <figcaption>Exporting the TSV file from Google Sheets</figcaption>
</figure>

<p>I’ll save mine as <strong>wordlist.tsv</strong>.</p>

<p>Now that we have our word list, exported in the correct format, let's
edit the model definition file.</p>

<p><a href="step-4.php" title="Step 4: Editing a model definition file">Step 4: Editing a model definition file</a></p>
