<?
$subject_val = "[OMPI docs] Docs suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 24 12:07:11 2013" -->
<!-- isoreceived="20130924160711" -->
<!-- sent="Tue, 24 Sep 2013 16:07:09 +0000" -->
<!-- isosent="20130924160709" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI docs] Docs suggestions" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8C5360_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI docs] Docs suggestions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-24 12:07:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0184.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the weekly Open MPI engineering call today, we talked about the docs project.  
<br>
<p>The developer community had a few suggestions:
<br>
<p>1. Affirmation of focusing on user-level documentation of Open MPI-specific issues.  E.g., here's how OMPI's wrapper compilers work; here's how to use --showme, here's how to use OMPI's mpirun, here's how to set OMPI MCA params, ...etc.  A short MPI programming tutorial would be ok, but keep it short/high level, and use it as a gateway to explaining the OMPI tools surrounding an MPI source code (because there's books and lots of google material on writing MPI code).
<br>
<p>2. Additionally, try to make docs that can be fairly stable over time: stuff that won't need to be updated frequently, because documentation tends to suffer from bit rot.  So if we can intentionally write fairly stable docs to start with, they'll have a longer shelf life.
<br>
<p>Meaning: don't document every OMPI detail.  Rather, (at least to start with) document all the high-level OMPI concepts that haven't changed in a long time: ./configure &amp;&amp; make -j 32 install, wrapper compilers, mpirun, MCA params, etc.
<br>
<p>3. The community suggested that PDF might not be a good primary format (this surprised me).  For example, Google scores PDFs lower than HTML -- that's a good point; I didn't know that.  
<br>
<p>Put differently: apparently, kids these days want to read web pages, not PDFs.  So the question naturally of source code format was raised -- the old &quot;latex can render into both PDF and HTML&quot; issue came up.  I don't know if anyone has tried it recently, but the HTML emitted by latex2html is actually pretty awful/horrible/ugly.  Some suggestions were floated that might be good instead of latex (because they can render 
<br>
<p>- Asciidoc, which renders to both HTML and PDF (and others), <a href="http://www.methods.co.nz/asciidoc/">http://www.methods.co.nz/asciidoc/</a>
<br>
<p>- Pandoc, which will let you convert arbitrarily between different markup/markdown formats: <a href="http://johnmacfarlane.net/pandoc/">http://johnmacfarlane.net/pandoc/</a>
<br>
<p>- Markdown, a markup language: <a href="http://daringfireball.net/projects/markdown/">http://daringfireball.net/projects/markdown/</a> (probably need to route through Pandoc to get PDF from Markdown)
<br>
<p>- Docbook, but that's basically writing XML, which feels kinda ugly/blech.
<br>
<p>Thoughts?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0184.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
