<?
$subject_val = "Re: [OMPI docs] Docs suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 24 14:44:57 2013" -->
<!-- isoreceived="20130924184457" -->
<!-- sent="Tue, 24 Sep 2013 20:42:26 +0200" -->
<!-- isosent="20130924184226" -->
<!-- name="manday_at_[hidden]" -->
<!-- email="manday_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Docs suggestions" -->
<!-- id="20130924184224.GD12647_at_slate" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEjxLRGvRrghnRP2vC+mqtp++ag1FtHqhAA5T=BAET72byK-Eg_at_mail.gmail.com" -->
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
<strong>From:</strong> <a href="mailto:manday_at_[hidden]?Subject=Re:%20[OMPI%20docs]%20Docs%20suggestions"><em>manday_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-09-24 14:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0188.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0189.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0189.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sphinx is one of the most awful and dysfunctional documentation systems
<br>
that I've ever seen. Admitted, I only had to deal with it in the context
<br>
of Python and associates, but that was enough to seriously traumatize
<br>
me.
<br>
<p>Considering documentation, your primary concern should be that of
<br>
finding a powerful and yet easy-to-write markup language. Presentation
<br>
is a subordinate matter - tools like pandoc will eventually always allow
<br>
you to render any kind of presentation you prefer.
<br>
<p>In my opinion, HTML and EPUB are the best things we have for writing
<br>
technical documents at the moment. EPUB still suffers from not being
<br>
able to display mathematical contents, but that should be of little
<br>
meaning for OpenMPI. HTML5 on the other hand, is a bit lacking with
<br>
regard to defining meta data.
<br>
<p>Writing HTML isn't that bad. It may be not as convenient as writing TeX,
<br>
but it offers the considerable advantage of being a clearly structured
<br>
and readily available markup language.
<br>
<p>I've had only good experiences writing documents in HTML5, so if I were
<br>
to give a vote, I'd opt for HTML.
<br>
<p>On Tue, Sep 24, 2013 at 09:53:06AM -0700, Shao-Ching Huang wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding the source format, if LaTeX is out of the table, may I
</span><br>
<span class="quotelev1">&gt; suggest Sphinx, <a href="http://sphinx-doc.org/">http://sphinx-doc.org/</a>. Sphinx can generate outputs in
</span><br>
<span class="quotelev1">&gt; HTML, latex, texinfo, pdf, etc. formats. The source is mostly
</span><br>
<span class="quotelev1">&gt; reStructuredText, so like asciidoc and markdown, it is less burden for
</span><br>
<span class="quotelev1">&gt; writers. Embedded code examples can be highlighted by pygment
</span><br>
<span class="quotelev1">&gt; (<a href="http://pygments.org/">http://pygments.org/</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shao-Ching Huang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 24, 2013 at 9:07 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On the weekly Open MPI engineering call today, we talked about the docs project.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The developer community had a few suggestions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Affirmation of focusing on user-level documentation of Open MPI-specific issues.  E.g., here's how OMPI's wrapper compilers work; here's how to use --showme, here's how to use OMPI's mpirun, here's how to set OMPI MCA params, ...etc.  A short MPI programming tutorial would be ok, but keep it short/high level, and use it as a gateway to explaining the OMPI tools surrounding an MPI source code (because there's books and lots of google material on writing MPI code).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. Additionally, try to make docs that can be fairly stable over time: stuff that won't need to be updated frequently, because documentation tends to suffer from bit rot.  So if we can intentionally write fairly stable docs to start with, they'll have a longer shelf life.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Meaning: don't document every OMPI detail.  Rather, (at least to start with) document all the high-level OMPI concepts that haven't changed in a long time: ./configure &amp;&amp; make -j 32 install, wrapper compilers, mpirun, MCA params, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. The community suggested that PDF might not be a good primary format (this surprised me).  For example, Google scores PDFs lower than HTML -- that's a good point; I didn't know that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Put differently: apparently, kids these days want to read web pages, not PDFs.  So the question naturally of source code format was raised -- the old &quot;latex can render into both PDF and HTML&quot; issue came up.  I don't know if anyone has tried it recently, but the HTML emitted by latex2html is actually pretty awful/horrible/ugly.  Some suggestions were floated that might be good instead of latex (because they can render
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Asciidoc, which renders to both HTML and PDF (and others), <a href="http://www.methods.co.nz/asciidoc/">http://www.methods.co.nz/asciidoc/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Pandoc, which will let you convert arbitrarily between different markup/markdown formats: <a href="http://johnmacfarlane.net/pandoc/">http://johnmacfarlane.net/pandoc/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Markdown, a markup language: <a href="http://daringfireball.net/projects/markdown/">http://daringfireball.net/projects/markdown/</a> (probably need to route through Pandoc to get PDF from Markdown)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Docbook, but that's basically writing XML, which feels kinda ugly/blech.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thoughts?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; docs mailing list
</span><br>
<span class="quotelev2">&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
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
<li><strong>Next message:</strong> <a href="0188.php">manday_at_[hidden]: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="0186.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0189.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0189.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
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
