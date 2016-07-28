<?
$subject_val = "Re: [OMPI docs] Docs suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 24 12:53:06 2013" -->
<!-- isoreceived="20130924165306" -->
<!-- sent="Tue, 24 Sep 2013 09:53:06 -0700" -->
<!-- isosent="20130924165306" -->
<!-- name="Shao-Ching Huang" -->
<!-- email="huangsc_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Docs suggestions" -->
<!-- id="CAEjxLRGvRrghnRP2vC+mqtp++ag1FtHqhAA5T=BAET72byK-Eg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8C5360_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Docs suggestions<br>
<strong>From:</strong> Shao-Ching Huang (<em>huangsc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-24 12:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0187.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0185.php">Jeff Squyres (jsquyres): "[OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="0185.php">Jeff Squyres (jsquyres): "[OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0187.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0187.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0188.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Regarding the source format, if LaTeX is out of the table, may I
<br>
suggest Sphinx, <a href="http://sphinx-doc.org/">http://sphinx-doc.org/</a>. Sphinx can generate outputs in
<br>
HTML, latex, texinfo, pdf, etc. formats. The source is mostly
<br>
reStructuredText, so like asciidoc and markdown, it is less burden for
<br>
writers. Embedded code examples can be highlighted by pygment
<br>
(<a href="http://pygments.org/">http://pygments.org/</a>).
<br>
<p>Shao-Ching Huang
<br>
<p><p>On Tue, Sep 24, 2013 at 9:07 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On the weekly Open MPI engineering call today, we talked about the docs project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The developer community had a few suggestions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Affirmation of focusing on user-level documentation of Open MPI-specific issues.  E.g., here's how OMPI's wrapper compilers work; here's how to use --showme, here's how to use OMPI's mpirun, here's how to set OMPI MCA params, ...etc.  A short MPI programming tutorial would be ok, but keep it short/high level, and use it as a gateway to explaining the OMPI tools surrounding an MPI source code (because there's books and lots of google material on writing MPI code).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Additionally, try to make docs that can be fairly stable over time: stuff that won't need to be updated frequently, because documentation tends to suffer from bit rot.  So if we can intentionally write fairly stable docs to start with, they'll have a longer shelf life.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meaning: don't document every OMPI detail.  Rather, (at least to start with) document all the high-level OMPI concepts that haven't changed in a long time: ./configure &amp;&amp; make -j 32 install, wrapper compilers, mpirun, MCA params, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. The community suggested that PDF might not be a good primary format (this surprised me).  For example, Google scores PDFs lower than HTML -- that's a good point; I didn't know that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Put differently: apparently, kids these days want to read web pages, not PDFs.  So the question naturally of source code format was raised -- the old &quot;latex can render into both PDF and HTML&quot; issue came up.  I don't know if anyone has tried it recently, but the HTML emitted by latex2html is actually pretty awful/horrible/ugly.  Some suggestions were floated that might be good instead of latex (because they can render
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Asciidoc, which renders to both HTML and PDF (and others), <a href="http://www.methods.co.nz/asciidoc/">http://www.methods.co.nz/asciidoc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pandoc, which will let you convert arbitrarily between different markup/markdown formats: <a href="http://johnmacfarlane.net/pandoc/">http://johnmacfarlane.net/pandoc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Markdown, a markup language: <a href="http://daringfireball.net/projects/markdown/">http://daringfireball.net/projects/markdown/</a> (probably need to route through Pandoc to get PDF from Markdown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Docbook, but that's basically writing XML, which feels kinda ugly/blech.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0187.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0185.php">Jeff Squyres (jsquyres): "[OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="0185.php">Jeff Squyres (jsquyres): "[OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0187.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0187.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0188.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
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
