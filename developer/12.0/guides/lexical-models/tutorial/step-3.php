<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Get some language data"
  ]);
?>

<style type="text/css">
  figure > img {
    max-width: 100%;
  }

  figure {
    text-align: center;
    margin: 0 10px 10px 10px;
  }

  table.wordlist {
    margin: 0 auto 10px ;
  }

  table.wordlist thead tr {
    background-color: #333;
    color: #fff;
  }
  table.wordlist tbody tr:nth-child(odd) { background-color: #fff }
  table.wordlist tbody tr:nth-child(even) { background-color: #eee }
  table.wordlist td {
    padding: .25em .5em;
  }
  table.wordlist th {
    padding: .25em 1em;
  }
  table.wordlist caption {
    caption-side: bottom-outside;
    margin-top: .5em;
  }
  td.number { text-align: right }

</style>

<h1>Step 3: Get some language data</h1>

<p>To predict words in your language, a lexical model needs to know the words in your language!</p>

<p>Ultimately, the <strong>lexical model compiler</strong> requires a tab-separated values (TSV) file, described in the <a href="./#appendix:tsv">appendix</a>. However, most users will use a <strong>spreadsheet</strong> app like <a href="https://sheets.google.com/">Google Sheets</a> or <a href="https://products.office.com/en/excel">Microsoft Excel</a> to create this TSV file.</p>

<h2>Example</h2>

<p>I have words in my language of choice, SENĆOŦEN.</p>
<p>Here is my list of words, with the count of how many times I’ve seen the word:</p>

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

<p>I’ve entered this information into my spreadsheet of choice, <a href="https://sheets.google.com/">Google Sheets</a>. I’ve shared this spreadsheet publicly <a href="https://docs.google.com/spreadsheets/d/10zhIc439BCSSooL_-HeJ6TUHd-ovkiXYcIGe-pHDTSg/edit?usp=sharing">here</a>. The order of the columns matters:</p>
<p>The first column <strong>MUST</strong> be the words, and the second column <strong>MUST</strong> be the counts. Additional columns are ignored. The spreadsheet can also be a single column of all of the words in the language.</p>
<p>This is what my word list looks like in Google Sheets:</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/sencoten-sheets-full.png') ?>" alt="screenshot of the word list in Google Sheets" />
  <figcaption> The word list, as it appears in Google Sheets </figcaption>
</figure>

<p>Now, we download the spreadsheet in the <a href="#appendix:tsv">required format</a>. To do this, in Google Sheets, select “File” » “Download as” » “Tab-separated values (.tsv, current sheet)”.</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/sencoten-sheets-save-as.png') ?>" alt="screenshot of “Save as…” menu in Google Sheets, selecting ”TSV”" />
  <figcaption>Exporting the TSV file from Google Sheets</figcaption>
</figure>
<p>I’ll save mine as <strong>wordlist.tsv</strong>.</p>

<p>Now that we have… TODO</p>

<p><a href="step-4.php" title="TODO">TODO</a></p>
