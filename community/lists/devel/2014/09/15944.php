<?
$subject_val = "Re: [OMPI devel] recomended software stack for development?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 09:59:25 2014" -->
<!-- isoreceived="20140930135925" -->
<!-- sent="Tue, 30 Sep 2014 06:59:21 -0700" -->
<!-- isosent="20140930135921" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] recomended software stack for development?" -->
<!-- id="B57AD9D5-AE13-4325-8F6D-00E79A05668D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAE_0zedT21LAn_kDgKsKsrEMVRcfYcyNd9CG6YWbsQ0RGEGEMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] recomended software stack for development?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 09:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15945.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15943.php">Manuel Rodr&#195;&#173;guez Pascual: "[OMPI devel] recomended software stack for development?"</a>
<li><strong>In reply to:</strong> <a href="15943.php">Manuel Rodr&#195;&#173;guez Pascual: "[OMPI devel] recomended software stack for development?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl. FWIW: we already have the ability to migrate processes in the ORTE code. You can tell the system to try and restart the process in its existing location N number of times before requesting relocation. Of course, if a node fails, then we automatically relocate the procs to other nodes.
<br>
<p>The relocation algorithm (i.e., where to put the relocating process) is in the &quot;resilient&quot; mapper component (see orte/mca/rmaps/resilient). It tries to ensure that we don't relocate the proc to an inappropriate place.
<br>
<p>I can provide more details if you like.
<br>
Ralph
<br>
<p>On Sep 30, 2014, at 3:20 AM, Manuel Rodr&#237;guez Pascual &lt;manuel.rodriguez.pascual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I kind of broke something with mail mail configuration so I haven't
</span><br>
<span class="quotelev1">&gt; been able to properly answer to this earlier, sorry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Jsquyres We are planning to work on fault tolerance and improved
</span><br>
<span class="quotelev1">&gt; scheduling cappabilities for HPC. To do so, we are first focusing on
</span><br>
<span class="quotelev1">&gt; serial tasks, and in a next step we will work with parallel jobs.  In
</span><br>
<span class="quotelev1">&gt; particular, I will be working on job migration, so tasks composing an
</span><br>
<span class="quotelev1">&gt; MPI job can be re-allocated inside a cluster. Anyway, this is
</span><br>
<span class="quotelev1">&gt; anticipating too much, now we are in the the first steps of the
</span><br>
<span class="quotelev1">&gt; project. Also, thanks for the videos and the environment
</span><br>
<span class="quotelev1">&gt; recommendations, it has been really helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Ralph Castain: Of course :) Our objective is to create open software
</span><br>
<span class="quotelev1">&gt; adopting the existing Open-MPI license, and make it available to the
</span><br>
<span class="quotelev1">&gt; community. i am not in charge of the &quot;paperwork&quot;, but I will make sure
</span><br>
<span class="quotelev1">&gt; that someone relevant in my organization looks at this contributor
</span><br>
<span class="quotelev1">&gt; agreement-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for your recommendations and warmth welcome. Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manuel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 9
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 29 Aug 2014 14:40:08 +0000
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers List &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Fwd: recomended software stack for
</span><br>
<span class="quotelev2">&gt;&gt;        development?
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;632D2995-EA78-4AA2-BA94-BC77F05AE186_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2014, at 5:36 AM, Manuel Rodr?guez Pascual &lt;supermanue_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are a small development team that will soon start working in open-mpi.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Welcome!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Being total newbies on the area (both on open-mpi and in this kind of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; large projects), we are seeking for advise in which tools to use on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; development. Any suggestion on IDE, compiler, regression testing software
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and everything else is more than welcome. Of course this is highly personal,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it would be great to know what you folks are using to help us decide and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start working.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think you'll find us all over the map on IDE.  I personally use
</span><br>
<span class="quotelev2">&gt;&gt; emacs+terminal.  I know others who use vim+terminal.  Many of us use ctags
</span><br>
<span class="quotelev2">&gt;&gt; and the like, but it's not quite as helpful as usual because of OMPI's heavy
</span><br>
<span class="quotelev2">&gt;&gt; use of pointers.  I don't think many developers use a full-blown IDE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For compiler, I'm guessing most of us develop with gcc most of the time,
</span><br>
<span class="quotelev2">&gt;&gt; although a few may have non-gcc as the default.  We test across a wide
</span><br>
<span class="quotelev2">&gt;&gt; variety of compilers, so portability is important.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For regression testing, we use the MPI Testing Tool
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://svn.open-mpi.org/trac/mtt/">https://svn.open-mpi.org/trac/mtt/</a> and <a href="http://mtt.open-mpi.org/">http://mtt.open-mpi.org/</a>).  Many of
</span><br>
<span class="quotelev2">&gt;&gt; us have it configured to do builds of the nightly tarballs; some of us push
</span><br>
<span class="quotelev2">&gt;&gt; our results to the public database at mtt.open-mpi.org.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help. We are really looking to cooperate with the project,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so we'll hopefully see you around here for a while!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just curious: what do you anticipate working on?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It might be a good idea to see our &quot;intro to the OMPI code base&quot; videos:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/video/?category=internals">http://www.open-mpi.org/video/?category=internals</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 11
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 29 Aug 2014 07:53:46 -0700
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Fwd: recomended software stack for
</span><br>
<span class="quotelev2">&gt;&gt;        development?
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;FF0760FF-1A7A-49F4-A8A0-5358C8A19FB5_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, welcome!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just to make things smoother: are you planning to contribute your work back
</span><br>
<span class="quotelev2">&gt;&gt; to the community? If so, we'll need a signed contributor agreement - see
</span><br>
<span class="quotelev2">&gt;&gt; here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/contribute/corporate.php">http://www.open-mpi.org/community/contribute/corporate.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Manuel Rodr&#237;guez-Pascual
</span><br>
<span class="quotelev1">&gt; skype: manuel.rodriguez.pascual
</span><br>
<span class="quotelev1">&gt; phone: (+34) 913466173 // (+34) 679925108
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CIEMAT-Moncloa
</span><br>
<span class="quotelev1">&gt; Edificio 22, desp. 1.25
</span><br>
<span class="quotelev1">&gt; Avenida Complutense, 40
</span><br>
<span class="quotelev1">&gt; 28040- MADRID
</span><br>
<span class="quotelev1">&gt; SPAIN
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15943.php">http://www.open-mpi.org/community/lists/devel/2014/09/15943.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15945.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15943.php">Manuel Rodr&#195;&#173;guez Pascual: "[OMPI devel] recomended software stack for development?"</a>
<li><strong>In reply to:</strong> <a href="15943.php">Manuel Rodr&#195;&#173;guez Pascual: "[OMPI devel] recomended software stack for development?"</a>
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
