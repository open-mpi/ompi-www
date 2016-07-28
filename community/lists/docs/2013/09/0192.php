<?
$subject_val = "Re: [OMPI docs] Docs suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 26 15:46:02 2013" -->
<!-- isoreceived="20130926194602" -->
<!-- sent="Thu, 26 Sep 2013 12:46:01 -0700" -->
<!-- isosent="20130926194601" -->
<!-- name="Shao-Ching Huang" -->
<!-- email="huangsc_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Docs suggestions" -->
<!-- id="CAEjxLRHLPDXba8Bq0NLDg1-Netah4JEZJgynmMG9j=aCCxA58A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC2Zy4N_Ot_gCb5eEDmTwkXGrSai7P32N47FdwMKaLmN80d4ag_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-09-26 15:46:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0193.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0193.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0193.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Like many other systems, the conveniences of using Sphinx also come
<br>
with all the baggage it carries. It uses a certain template system. It
<br>
comes with a few certain default layouts (&quot;themes&quot;,
<br>
<a href="http://sphinx-doc.org/theming.html">http://sphinx-doc.org/theming.html</a>). Many things are configurable, but
<br>
one will have to manipulate within Sphinx's framework.
<br>
<p>My experiences with Sphinx are that if the what you want is close to
<br>
one of the default layouts, then things are really easy, time-saving
<br>
and smooth -- it allows you to totally focus on content texts in clean
<br>
plain texts and get good-looking &quot;for free&quot;. On the other hand, if you
<br>
want a dramatically different layout, some hacking may be required.
<br>
<p>Another possibility is just write in LaTeX (which seems to be the
<br>
original plan). If there are concerns about latex2html, how about
<br>
tex4ht (<a href="http://tug.org/applications/tex4ht/mn.html">http://tug.org/applications/tex4ht/mn.html</a>) which seems much
<br>
more flexible in controlling the HTML output? Any comments on this?
<br>
<p>My sense is there is no one source format that will satisfy all
<br>
requirements. At some point, we will have to just pick up a reasonable
<br>
format and just start using it. Say, a few months into the project, if
<br>
the choice turns out to be really bad, it is not impossible to switch
<br>
with the help of some tools.
<br>
<p>Shao-Ching
<br>
<p>On Thu, Sep 26, 2013 at 11:26 AM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just took a quick look at the documentation on Sphinx at their website.
</span><br>
<span class="quotelev1">&gt; My first reaction is that it did not seem like something that would eat my
</span><br>
<span class="quotelev1">&gt; cats and lay waste to the surrounding town. It seems to have the facilities
</span><br>
<span class="quotelev1">&gt; to create a well structured system of documents, and the markeup appears to
</span><br>
<span class="quotelev1">&gt; be relatively straight forward. Is there anything really wrong with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides if we judged HTML by the documents some people create with it we
</span><br>
<span class="quotelev1">&gt; would have banned  it a long time ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Kel
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
<span class="quotelev1">&gt; On Tue, Sep 24, 2013 at 8:38 PM, Shao-Ching Huang &lt;huangsc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are some projects using sphinx:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://docs.openstack.org/developer/swift/">http://docs.openstack.org/developer/swift/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://fenicsproject.org/">http://fenicsproject.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://ipython.org/">http://ipython.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Authors write plain text that looks like this (without the HTML tags
</span><br>
<span class="quotelev2">&gt;&gt; explicitly):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/fenics-project/fenics-web/raw/262ac46e900d3ed81fb01e7c8efb050be9c70d9b/source/documentation/tutorial/materials.rst">https://bitbucket.org/fenics-project/fenics-web/raw/262ac46e900d3ed81fb01e7c8efb050be9c70d9b/source/documentation/tutorial/materials.rst</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One useful feature of a system like Sphinx is, like latex, it can
</span><br>
<span class="quotelev2">&gt;&gt; automatically generates links and indices across source files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMHO, there is probably no perfect solution in choosing a source
</span><br>
<span class="quotelev2">&gt;&gt; format. If the OpenMPI docs project is to be a collaborative effort,
</span><br>
<span class="quotelev2">&gt;&gt; it may be useful to pick a format/system that is easy to
</span><br>
<span class="quotelev2">&gt;&gt; write/contribute/maintain among OpenMPI users (I suppose many of them
</span><br>
<span class="quotelev2">&gt;&gt; are computational/application scientists who may have deep knowledge
</span><br>
<span class="quotelev2">&gt;&gt; in MPI/OpenMPI but not necessarily so in web site rendering).
</span><br>
<span class="quotelev2">&gt;&gt; Something can can support a document consisting of multiple chapters
</span><br>
<span class="quotelev2">&gt;&gt; (think latex &quot;book&quot; class), can easily output (reasonably modern-look)
</span><br>
<span class="quotelev2">&gt;&gt; HTML for web viewing, can generate a PDF for offline reading,
</span><br>
<span class="quotelev2">&gt;&gt; somewhat-&quot;easy&quot;-to-write source format, in plain text files (version
</span><br>
<span class="quotelev2">&gt;&gt; control), automatic index/cross-link (think latex &quot;label&quot;) generation,
</span><br>
<span class="quotelev2">&gt;&gt; would be a good candidate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shao-Ching
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 24, 2013 at 2:47 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If you want output in HTML then just using HTML is a good choice. It
</span><br>
<span class="quotelev3">&gt;&gt; &gt; would
</span><br>
<span class="quotelev3">&gt;&gt; &gt; be relatively straightforward to use a template system to make it easier
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; maintain and ensure uniformity over multiple pages with options for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; different page lengths. Working in HTML is relatively straight forward
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; there are multiple choices with respect to authoring tools to appeal to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; more
</span><br>
<span class="quotelev3">&gt;&gt; &gt; people.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It is a good idea to make the Open MPI aspects  the primary material for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; document. I think it is important to have the simple examples and broad
</span><br>
<span class="quotelev3">&gt;&gt; &gt; overview of MPI programming. I recently came back to MPI after a long
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hiatus, and I found it difficult to find good material to get started. I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ended up having to collect material from a wide variety of sources which
</span><br>
<span class="quotelev3">&gt;&gt; &gt; was
</span><br>
<span class="quotelev3">&gt;&gt; &gt; frustrating.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Kel
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Department of Math. &amp; C.S.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PO Box 5815
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev3">&gt;&gt; &gt; USA
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tue, Sep 24, 2013 at 2:42 PM, &lt;manday_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sphinx is one of the most awful and dysfunctional documentation systems
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; that I've ever seen. Admitted, I only had to deal with it in the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; context
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; of Python and associates, but that was enough to seriously traumatize
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; me.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Considering documentation, your primary concern should be that of
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; finding a powerful and yet easy-to-write markup language. Presentation
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; is a subordinate matter - tools like pandoc will eventually always
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; allow
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; you to render any kind of presentation you prefer.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; In my opinion, HTML and EPUB are the best things we have for writing
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; technical documents at the moment. EPUB still suffers from not being
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; able to display mathematical contents, but that should be of little
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; meaning for OpenMPI. HTML5 on the other hand, is a bit lacking with
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; regard to defining meta data.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Writing HTML isn't that bad. It may be not as convenient as writing
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; TeX,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; but it offers the considerable advantage of being a clearly structured
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; and readily available markup language.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I've had only good experiences writing documents in HTML5, so if I were
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; to give a vote, I'd opt for HTML.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Tue, Sep 24, 2013 at 09:53:06AM -0700, Shao-Ching Huang wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Regarding the source format, if LaTeX is out of the table, may I
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; suggest Sphinx, <a href="http://sphinx-doc.org/">http://sphinx-doc.org/</a>. Sphinx can generate outputs
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; in
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; HTML, latex, texinfo, pdf, etc. formats. The source is mostly
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; reStructuredText, so like asciidoc and markdown, it is less burden
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; for
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; writers. Embedded code examples can be highlighted by pygment
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; (<a href="http://pygments.org/">http://pygments.org/</a>).
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Shao-Ching Huang
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; On Tue, Sep 24, 2013 at 9:07 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; On the weekly Open MPI engineering call today, we talked about the
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; docs project.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; The developer community had a few suggestions:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; 1. Affirmation of focusing on user-level documentation of Open
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; MPI-specific issues.  E.g., here's how OMPI's wrapper compilers
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; work; here's
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; how to use --showme, here's how to use OMPI's mpirun, here's how to
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; set OMPI
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; MCA params, ...etc.  A short MPI programming tutorial would be ok,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; but keep
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; it short/high level, and use it as a gateway to explaining the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; tools
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; surrounding an MPI source code (because there's books and lots of
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; google
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; material on writing MPI code).
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; 2. Additionally, try to make docs that can be fairly stable over
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; time:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; stuff that won't need to be updated frequently, because
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; documentation tends
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; to suffer from bit rot.  So if we can intentionally write fairly
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; stable docs
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; to start with, they'll have a longer shelf life.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Meaning: don't document every OMPI detail.  Rather, (at least to
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; start
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; with) document all the high-level OMPI concepts that haven't
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; changed in a
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; long time: ./configure &amp;&amp; make -j 32 install, wrapper compilers,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; mpirun, MCA
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; params, etc.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; 3. The community suggested that PDF might not be a good primary
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; format
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; (this surprised me).  For example, Google scores PDFs lower than
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; HTML --
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; that's a good point; I didn't know that.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Put differently: apparently, kids these days want to read web
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; pages,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; not PDFs.  So the question naturally of source code format was
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; raised -- the
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; old &quot;latex can render into both PDF and HTML&quot; issue came up.  I
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; don't know
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; if anyone has tried it recently, but the HTML emitted by latex2html
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; is
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; actually pretty awful/horrible/ugly.  Some suggestions were floated
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; that
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; might be good instead of latex (because they can render
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; - Asciidoc, which renders to both HTML and PDF (and others),
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; <a href="http://www.methods.co.nz/asciidoc/">http://www.methods.co.nz/asciidoc/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; - Pandoc, which will let you convert arbitrarily between different
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; markup/markdown formats: <a href="http://johnmacfarlane.net/pandoc/">http://johnmacfarlane.net/pandoc/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; - Markdown, a markup language:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; <a href="http://daringfireball.net/projects/markdown/">http://daringfireball.net/projects/markdown/</a> (probably need to
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; route through
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Pandoc to get PDF from Markdown)
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; - Docbook, but that's basically writing XML, which feels kinda
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; ugly/blech.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; docs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; docs mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; docs mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; docs mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0193.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0193.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/10/0193.php">Kelly Black: "Re: [OMPI docs] Docs suggestions"</a>
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
