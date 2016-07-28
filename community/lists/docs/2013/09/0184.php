<?
$subject_val = "Re: [OMPI docs] Jump starting the Open MPI documentation project";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 21:11:03 2013" -->
<!-- isoreceived="20130921011103" -->
<!-- sent="Sat, 21 Sep 2013 01:10:59 +0000" -->
<!-- isosent="20130921011059" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Jump starting the Open MPI documentation project" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8BED4A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4067C93A-D927-43FC-B718-7175C1FB82A1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Jump starting the Open MPI documentation project<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 21:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0185.php">Jeff Squyres (jsquyres): "[OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0183.php">Ralph Castain: "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>In reply to:</strong> <a href="0183.php">Ralph Castain: "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on this: documenting the OMPI particulars would be a good way to go.
<br>
<p>That being said, if documenting basic MPI usage is of interest, that would also be fine - but I'd cleanly separate it from the OMPI particulars.  For example, the first chapter can be an overview of OMPI particulars (installation, compiling MPI applications, mpirun and friends, etc.), and then use that knowledge in a more in-depth set of MPI programming tutorials.
<br>
<p><p>On Sep 18, 2013, at 12:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I assume you are documenting how to run MPI programs based on OMPI as opposed to how to develop code inside of OMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached looks like you are targeting the former. There are many good books on MPI programming that explain in depth how to write and execute MPI programs, so I wouldn't bother explaining things like MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would instead focus on providing details on all the OMPI options, which go beyond basic MPI programming and can be confusing to users. You'd have to present a breakdown of how OMPI is structured as a way of introducing the MCA param naming scheme, and then discuss what those params actually do, when to use them, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2013, at 2:59 PM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have briefly spoken with Jeff Squyres and Joshua Hersey about the Open MPI documentation project. Based on feedback from them a rough draft of an outline has been created.  Open MPI is a great resource, and it can benefit from a central resource that describes how to use it. There is a lot of information out there, but it can be difficult to find. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will attach a copy of the current document here. It is quite rough, and the important thing at this point is the outline that can be found at the beginning of the document. In terms of the big picture the opening chapter should contain a broad overview but should also offer a quick start guide that gives a basic introduction on how to compile and run a program as well as perform some very basic tasks. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The thinking on the other chapters is that they will be more focused and provide documentation that  ranges from basic, intermediate and advanced usage of the Open MPI library. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The files are written in LaTeX, and they can be found at <a href="https://github.com/open-mpi/docs">https://github.com/open-mpi/docs</a> The document that is attached here was made from the development branch. At this point there is not much in the master branch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, the document is rough and needs more thought. Insights and ideas at this point are welcome.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; kel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev2">&gt;&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev2">&gt;&gt; Department of Math. &amp; C.S.      
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 5815
</span><br>
<span class="quotelev2">&gt;&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev2">&gt;&gt; USA
</span><br>
<span class="quotelev2">&gt;&gt; &lt;OpenMPIUserManual.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; docs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0185.php">Jeff Squyres (jsquyres): "[OMPI docs] Docs suggestions"</a>
<li><strong>Previous message:</strong> <a href="0183.php">Ralph Castain: "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>In reply to:</strong> <a href="0183.php">Ralph Castain: "Re: [OMPI docs] Jump starting the Open MPI documentation project"</a>
<!-- nextthread="start" -->
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
