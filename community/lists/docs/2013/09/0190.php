<?
$subject_val = "Re: [OMPI docs] Docs suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 24 20:38:08 2013" -->
<!-- isoreceived="20130925003808" -->
<!-- sent="Tue, 24 Sep 2013 17:38:07 -0700" -->
<!-- isosent="20130925003807" -->
<!-- name="Shao-Ching Huang" -->
<!-- email="huangsc_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Docs suggestions" -->
<!-- id="CAEjxLREmk9SASF04Y4LNZCJzTQT5-KHSaoXLwdTtg2zZeziq4A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC2Zy4PzuRrbqUaeZf2fzis51S3Y=pJiz=kUD2CcsVEMEbHnrg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-09-24 20:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0189.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="0189.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are some projects using sphinx:
<br>
<a href="http://docs.openstack.org/developer/swift/">http://docs.openstack.org/developer/swift/</a>
<br>
<a href="http://fenicsproject.org/">http://fenicsproject.org/</a>
<br>
<a href="http://ipython.org/">http://ipython.org/</a>
<br>
<p>Authors write plain text that looks like this (without the HTML tags
<br>
explicitly):
<br>
<a href="https://bitbucket.org/fenics-project/fenics-web/raw/262ac46e900d3ed81fb01e7c8efb050be9c70d9b/source/documentation/tutorial/materials.rst">https://bitbucket.org/fenics-project/fenics-web/raw/262ac46e900d3ed81fb01e7c8efb050be9c70d9b/source/documentation/tutorial/materials.rst</a>
<br>
<p>One useful feature of a system like Sphinx is, like latex, it can
<br>
automatically generates links and indices across source files.
<br>
<p>IMHO, there is probably no perfect solution in choosing a source
<br>
format. If the OpenMPI docs project is to be a collaborative effort,
<br>
it may be useful to pick a format/system that is easy to
<br>
write/contribute/maintain among OpenMPI users (I suppose many of them
<br>
are computational/application scientists who may have deep knowledge
<br>
in MPI/OpenMPI but not necessarily so in web site rendering).
<br>
Something can can support a document consisting of multiple chapters
<br>
(think latex &quot;book&quot; class), can easily output (reasonably modern-look)
<br>
HTML for web viewing, can generate a PDF for offline reading,
<br>
somewhat-&quot;easy&quot;-to-write source format, in plain text files (version
<br>
control), automatic index/cross-link (think latex &quot;label&quot;) generation,
<br>
would be a good candidate.
<br>
<p>Thanks,
<br>
<p>Shao-Ching
<br>
<p><p>On Tue, Sep 24, 2013 at 2:47 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want output in HTML then just using HTML is a good choice. It would
</span><br>
<span class="quotelev1">&gt; be relatively straightforward to use a template system to make it easier to
</span><br>
<span class="quotelev1">&gt; maintain and ensure uniformity over multiple pages with options for
</span><br>
<span class="quotelev1">&gt; different page lengths. Working in HTML is relatively straight forward and
</span><br>
<span class="quotelev1">&gt; there are multiple choices with respect to authoring tools to appeal to more
</span><br>
<span class="quotelev1">&gt; people.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a good idea to make the Open MPI aspects  the primary material for the
</span><br>
<span class="quotelev1">&gt; document. I think it is important to have the simple examples and broad
</span><br>
<span class="quotelev1">&gt; overview of MPI programming. I recently came back to MPI after a long
</span><br>
<span class="quotelev1">&gt; hiatus, and I found it difficult to find good material to get started. I
</span><br>
<span class="quotelev1">&gt; ended up having to collect material from a wide variety of sources which was
</span><br>
<span class="quotelev1">&gt; frustrating.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Kel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________________
</span><br>
<span class="quotelev1">&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev1">&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev1">&gt; Department of Math. &amp; C.S.
</span><br>
<span class="quotelev1">&gt; PO Box 5815
</span><br>
<span class="quotelev1">&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev1">&gt; USA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 24, 2013 at 2:42 PM, &lt;manday_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sphinx is one of the most awful and dysfunctional documentation systems
</span><br>
<span class="quotelev2">&gt;&gt; that I've ever seen. Admitted, I only had to deal with it in the context
</span><br>
<span class="quotelev2">&gt;&gt; of Python and associates, but that was enough to seriously traumatize
</span><br>
<span class="quotelev2">&gt;&gt; me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Considering documentation, your primary concern should be that of
</span><br>
<span class="quotelev2">&gt;&gt; finding a powerful and yet easy-to-write markup language. Presentation
</span><br>
<span class="quotelev2">&gt;&gt; is a subordinate matter - tools like pandoc will eventually always allow
</span><br>
<span class="quotelev2">&gt;&gt; you to render any kind of presentation you prefer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my opinion, HTML and EPUB are the best things we have for writing
</span><br>
<span class="quotelev2">&gt;&gt; technical documents at the moment. EPUB still suffers from not being
</span><br>
<span class="quotelev2">&gt;&gt; able to display mathematical contents, but that should be of little
</span><br>
<span class="quotelev2">&gt;&gt; meaning for OpenMPI. HTML5 on the other hand, is a bit lacking with
</span><br>
<span class="quotelev2">&gt;&gt; regard to defining meta data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Writing HTML isn't that bad. It may be not as convenient as writing TeX,
</span><br>
<span class="quotelev2">&gt;&gt; but it offers the considerable advantage of being a clearly structured
</span><br>
<span class="quotelev2">&gt;&gt; and readily available markup language.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've had only good experiences writing documents in HTML5, so if I were
</span><br>
<span class="quotelev2">&gt;&gt; to give a vote, I'd opt for HTML.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 24, 2013 at 09:53:06AM -0700, Shao-Ching Huang wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regarding the source format, if LaTeX is out of the table, may I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; suggest Sphinx, <a href="http://sphinx-doc.org/">http://sphinx-doc.org/</a>. Sphinx can generate outputs in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; HTML, latex, texinfo, pdf, etc. formats. The source is mostly
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reStructuredText, so like asciidoc and markdown, it is less burden for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; writers. Embedded code examples can be highlighted by pygment
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (<a href="http://pygments.org/">http://pygments.org/</a>).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Shao-Ching Huang
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tue, Sep 24, 2013 at 9:07 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On the weekly Open MPI engineering call today, we talked about the
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; docs project.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The developer community had a few suggestions:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 1. Affirmation of focusing on user-level documentation of Open
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; MPI-specific issues.  E.g., here's how OMPI's wrapper compilers work; here's
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; how to use --showme, here's how to use OMPI's mpirun, here's how to set OMPI
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; MCA params, ...etc.  A short MPI programming tutorial would be ok, but keep
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; it short/high level, and use it as a gateway to explaining the OMPI tools
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; surrounding an MPI source code (because there's books and lots of google
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; material on writing MPI code).
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 2. Additionally, try to make docs that can be fairly stable over time:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; stuff that won't need to be updated frequently, because documentation tends
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; to suffer from bit rot.  So if we can intentionally write fairly stable docs
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; to start with, they'll have a longer shelf life.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Meaning: don't document every OMPI detail.  Rather, (at least to start
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; with) document all the high-level OMPI concepts that haven't changed in a
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; long time: ./configure &amp;&amp; make -j 32 install, wrapper compilers, mpirun, MCA
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; params, etc.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 3. The community suggested that PDF might not be a good primary format
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; (this surprised me).  For example, Google scores PDFs lower than HTML --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; that's a good point; I didn't know that.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Put differently: apparently, kids these days want to read web pages,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; not PDFs.  So the question naturally of source code format was raised -- the
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; old &quot;latex can render into both PDF and HTML&quot; issue came up.  I don't know
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; if anyone has tried it recently, but the HTML emitted by latex2html is
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; actually pretty awful/horrible/ugly.  Some suggestions were floated that
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; might be good instead of latex (because they can render
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; - Asciidoc, which renders to both HTML and PDF (and others),
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.methods.co.nz/asciidoc/">http://www.methods.co.nz/asciidoc/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; - Pandoc, which will let you convert arbitrarily between different
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; markup/markdown formats: <a href="http://johnmacfarlane.net/pandoc/">http://johnmacfarlane.net/pandoc/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; - Markdown, a markup language:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://daringfireball.net/projects/markdown/">http://daringfireball.net/projects/markdown/</a> (probably need to route through
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Pandoc to get PDF from Markdown)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; - Docbook, but that's basically writing XML, which feels kinda
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ugly/blech.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thoughts?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; docs mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; docs mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; docs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0189.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="0189.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
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
