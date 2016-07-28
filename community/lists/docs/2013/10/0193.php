<?
$subject_val = "Re: [OMPI docs] Docs suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 10 09:07:52 2013" -->
<!-- isoreceived="20131010130752" -->
<!-- sent="Thu, 10 Oct 2013 09:07:51 -0400" -->
<!-- isosent="20131010130751" -->
<!-- name="Kelly Black" -->
<!-- email="kjblack_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Docs suggestions" -->
<!-- id="CAC2Zy4M6-CeqPam6j6_g=nYnw3LtvL5w7BOhm2p_cn7R40VL3Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEjxLRHLPDXba8Bq0NLDg1-Netah4JEZJgynmMG9j=aCCxA58A_at_mail.gmail.com" -->
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
<strong>From:</strong> Kelly Black (<em>kjblack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-10 09:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/09/0192.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/09/0192.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0194.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0194.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Shao-Ching,
<br>
<p>Sorry for the delay in responding to this. I took some time play around
<br>
with sphinx and try some things with it. It is very easy to set up, and the
<br>
mark up language is easy to use.  There are a few unhappy quirks, but
<br>
overall I kind of like it. It makes it easy to create large html documents
<br>
with cross referenced links.
<br>
<p>I made a new branch, sphinx, in the Open MPI document repo and have
<br>
converted the first two latex files over to rst format. It was a bit clumsy
<br>
at first as I learned some of the details, but I am happy with the results.
<br>
<p>I would like to just keep moving forward and use this to generate the html.
<br>
<p>Sincerely,
<br>
Kel
<br>
<p>_______________________________________________________
<br>
Kelly Black                     Phone: (315) 600-8334
<br>
Clarkson University             Fax:   (315) 268-2371
<br>
Department of Math. &amp; C.S.
<br>
PO Box 5815
<br>
Potsdam, NY 13699-5815
<br>
USA
<br>
<p><p>On Thu, Sep 26, 2013 at 3:46 PM, Shao-Ching Huang &lt;huangsc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Like many other systems, the conveniences of using Sphinx also come
</span><br>
<span class="quotelev1">&gt; with all the baggage it carries. It uses a certain template system. It
</span><br>
<span class="quotelev1">&gt; comes with a few certain default layouts (&quot;themes&quot;,
</span><br>
<span class="quotelev1">&gt; <a href="http://sphinx-doc.org/theming.html">http://sphinx-doc.org/theming.html</a>). Many things are configurable, but
</span><br>
<span class="quotelev1">&gt; one will have to manipulate within Sphinx's framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My experiences with Sphinx are that if the what you want is close to
</span><br>
<span class="quotelev1">&gt; one of the default layouts, then things are really easy, time-saving
</span><br>
<span class="quotelev1">&gt; and smooth -- it allows you to totally focus on content texts in clean
</span><br>
<span class="quotelev1">&gt; plain texts and get good-looking &quot;for free&quot;. On the other hand, if you
</span><br>
<span class="quotelev1">&gt; want a dramatically different layout, some hacking may be required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another possibility is just write in LaTeX (which seems to be the
</span><br>
<span class="quotelev1">&gt; original plan). If there are concerns about latex2html, how about
</span><br>
<span class="quotelev1">&gt; tex4ht (<a href="http://tug.org/applications/tex4ht/mn.html">http://tug.org/applications/tex4ht/mn.html</a>) which seems much
</span><br>
<span class="quotelev1">&gt; more flexible in controlling the HTML output? Any comments on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My sense is there is no one source format that will satisfy all
</span><br>
<span class="quotelev1">&gt; requirements. At some point, we will have to just pick up a reasonable
</span><br>
<span class="quotelev1">&gt; format and just start using it. Say, a few months into the project, if
</span><br>
<span class="quotelev1">&gt; the choice turns out to be really bad, it is not impossible to switch
</span><br>
<span class="quotelev1">&gt; with the help of some tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shao-Ching
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 26, 2013 at 11:26 AM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just took a quick look at the documentation on Sphinx at their website.
</span><br>
<span class="quotelev2">&gt; &gt; My first reaction is that it did not seem like something that would eat
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev2">&gt; &gt; cats and lay waste to the surrounding town. It seems to have the
</span><br>
<span class="quotelev1">&gt; facilities
</span><br>
<span class="quotelev2">&gt; &gt; to create a well structured system of documents, and the markeup appears
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; be relatively straight forward. Is there anything really wrong with it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Besides if we judged HTML by the documents some people create with it we
</span><br>
<span class="quotelev2">&gt; &gt; would have banned  it a long time ago.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sincerely,
</span><br>
<span class="quotelev2">&gt; &gt; Kel
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev2">&gt; &gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev2">&gt; &gt; Department of Math. &amp; C.S.
</span><br>
<span class="quotelev2">&gt; &gt; PO Box 5815
</span><br>
<span class="quotelev2">&gt; &gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev2">&gt; &gt; USA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Sep 24, 2013 at 8:38 PM, Shao-Ching Huang &lt;huangsc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There are some projects using sphinx:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://docs.openstack.org/developer/swift/">http://docs.openstack.org/developer/swift/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://fenicsproject.org/">http://fenicsproject.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://ipython.org/">http://ipython.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Authors write plain text that looks like this (without the HTML tags
</span><br>
<span class="quotelev3">&gt; &gt;&gt; explicitly):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/fenics-project/fenics-web/raw/262ac46e900d3ed81fb01e7c8efb050be9c70d9b/source/documentation/tutorial/materials.rst">https://bitbucket.org/fenics-project/fenics-web/raw/262ac46e900d3ed81fb01e7c8efb050be9c70d9b/source/documentation/tutorial/materials.rst</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; One useful feature of a system like Sphinx is, like latex, it can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automatically generates links and indices across source files.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IMHO, there is probably no perfect solution in choosing a source
</span><br>
<span class="quotelev3">&gt; &gt;&gt; format. If the OpenMPI docs project is to be a collaborative effort,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it may be useful to pick a format/system that is easy to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; write/contribute/maintain among OpenMPI users (I suppose many of them
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are computational/application scientists who may have deep knowledge
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in MPI/OpenMPI but not necessarily so in web site rendering).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Something can can support a document consisting of multiple chapters
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (think latex &quot;book&quot; class), can easily output (reasonably modern-look)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HTML for web viewing, can generate a PDF for offline reading,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; somewhat-&quot;easy&quot;-to-write source format, in plain text files (version
</span><br>
<span class="quotelev3">&gt; &gt;&gt; control), automatic index/cross-link (think latex &quot;label&quot;) generation,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would be a good candidate.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Shao-Ching
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Sep 24, 2013 at 2:47 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; If you want output in HTML then just using HTML is a good choice. It
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; would
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; be relatively straightforward to use a template system to make it
</span><br>
<span class="quotelev1">&gt; easier
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; maintain and ensure uniformity over multiple pages with options for
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; different page lengths. Working in HTML is relatively straight forward
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; and
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; there are multiple choices with respect to authoring tools to appeal
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; more
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; people.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; It is a good idea to make the Open MPI aspects  the primary material
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; document. I think it is important to have the simple examples and
</span><br>
<span class="quotelev1">&gt; broad
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; overview of MPI programming. I recently came back to MPI after a long
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; hiatus, and I found it difficult to find good material to get
</span><br>
<span class="quotelev1">&gt; started. I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ended up having to collect material from a wide variety of sources
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; was
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; frustrating.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -Kel
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Department of Math. &amp; C.S.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; PO Box 5815
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; USA
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Tue, Sep 24, 2013 at 2:42 PM, &lt;manday_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Sphinx is one of the most awful and dysfunctional documentation
</span><br>
<span class="quotelev1">&gt; systems
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; that I've ever seen. Admitted, I only had to deal with it in the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; context
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; of Python and associates, but that was enough to seriously traumatize
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; me.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Considering documentation, your primary concern should be that of
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; finding a powerful and yet easy-to-write markup language.
</span><br>
<span class="quotelev1">&gt; Presentation
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; is a subordinate matter - tools like pandoc will eventually always
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; allow
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; you to render any kind of presentation you prefer.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; In my opinion, HTML and EPUB are the best things we have for writing
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; technical documents at the moment. EPUB still suffers from not being
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; able to display mathematical contents, but that should be of little
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; meaning for OpenMPI. HTML5 on the other hand, is a bit lacking with
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; regard to defining meta data.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Writing HTML isn't that bad. It may be not as convenient as writing
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; TeX,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; but it offers the considerable advantage of being a clearly
</span><br>
<span class="quotelev1">&gt; structured
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; and readily available markup language.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I've had only good experiences writing documents in HTML5, so if I
</span><br>
<span class="quotelev1">&gt; were
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; to give a vote, I'd opt for HTML.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Tue, Sep 24, 2013 at 09:53:06AM -0700, Shao-Ching Huang wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; Regarding the source format, if LaTeX is out of the table, may I
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; suggest Sphinx, <a href="http://sphinx-doc.org/">http://sphinx-doc.org/</a>. Sphinx can generate
</span><br>
<span class="quotelev1">&gt; outputs
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; in
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; HTML, latex, texinfo, pdf, etc. formats. The source is mostly
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; reStructuredText, so like asciidoc and markdown, it is less burden
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; for
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; writers. Embedded code examples can be highlighted by pygment
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; (<a href="http://pygments.org/">http://pygments.org/</a>).
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; Shao-Ching Huang
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; On Tue, Sep 24, 2013 at 9:07 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; On the weekly Open MPI engineering call today, we talked about
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; docs project.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; The developer community had a few suggestions:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; 1. Affirmation of focusing on user-level documentation of Open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; MPI-specific issues.  E.g., here's how OMPI's wrapper compilers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; work; here's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; how to use --showme, here's how to use OMPI's mpirun, here's how
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; set OMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; MCA params, ...etc.  A short MPI programming tutorial would be
</span><br>
<span class="quotelev1">&gt; ok,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; but keep
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; it short/high level, and use it as a gateway to explaining the
</span><br>
<span class="quotelev1">&gt; OMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; tools
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; surrounding an MPI source code (because there's books and lots of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; google
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; material on writing MPI code).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; 2. Additionally, try to make docs that can be fairly stable over
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; time:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; stuff that won't need to be updated frequently, because
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; documentation tends
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; to suffer from bit rot.  So if we can intentionally write fairly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; stable docs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; to start with, they'll have a longer shelf life.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; Meaning: don't document every OMPI detail.  Rather, (at least to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; start
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; with) document all the high-level OMPI concepts that haven't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; changed in a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; long time: ./configure &amp;&amp; make -j 32 install, wrapper compilers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; mpirun, MCA
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; params, etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; 3. The community suggested that PDF might not be a good primary
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; format
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; (this surprised me).  For example, Google scores PDFs lower than
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; HTML --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; that's a good point; I didn't know that.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; Put differently: apparently, kids these days want to read web
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; pages,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; not PDFs.  So the question naturally of source code format was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; raised -- the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; old &quot;latex can render into both PDF and HTML&quot; issue came up.  I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; don't know
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; if anyone has tried it recently, but the HTML emitted by
</span><br>
<span class="quotelev1">&gt; latex2html
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; actually pretty awful/horrible/ugly.  Some suggestions were
</span><br>
<span class="quotelev1">&gt; floated
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; might be good instead of latex (because they can render
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; - Asciidoc, which renders to both HTML and PDF (and others),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; <a href="http://www.methods.co.nz/asciidoc/">http://www.methods.co.nz/asciidoc/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; - Pandoc, which will let you convert arbitrarily between
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; markup/markdown formats: <a href="http://johnmacfarlane.net/pandoc/">http://johnmacfarlane.net/pandoc/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; - Markdown, a markup language:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; <a href="http://daringfireball.net/projects/markdown/">http://daringfireball.net/projects/markdown/</a> (probably need to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; route through
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; Pandoc to get PDF from Markdown)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; - Docbook, but that's basically writing XML, which feels kinda
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; ugly/blech.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; Thoughts?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; docs mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; docs mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; docs mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/09/0192.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/09/0192.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0194.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
<li><strong>Reply:</strong> <a href="0194.php">Shao-Ching Huang: "Re: [OMPI docs] Docs suggestions"</a>
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
