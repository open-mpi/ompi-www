<?
$subject_val = "[OMPI devel] recomended software stack for development?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 06:20:29 2014" -->
<!-- isoreceived="20140930102029" -->
<!-- sent="Tue, 30 Sep 2014 12:20:07 +0200" -->
<!-- isosent="20140930102007" -->
<!-- name="Manuel Rodr&#195;&#173;guez Pascual" -->
<!-- email="manuel.rodriguez.pascual_at_[hidden]" -->
<!-- subject="[OMPI devel] recomended software stack for development?" -->
<!-- id="CAE_0zedT21LAn_kDgKsKsrEMVRcfYcyNd9CG6YWbsQ0RGEGEMQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] recomended software stack for development?<br>
<strong>From:</strong> Manuel Rodr&#195;&#173;guez Pascual (<em>manuel.rodriguez.pascual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 06:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15944.php">Ralph Castain: "Re: [OMPI devel] recomended software stack for development?"</a>
<li><strong>Previous message:</strong> <a href="15942.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15944.php">Ralph Castain: "Re: [OMPI devel] recomended software stack for development?"</a>
<li><strong>Reply:</strong> <a href="15944.php">Ralph Castain: "Re: [OMPI devel] recomended software stack for development?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I kind of broke something with mail mail configuration so I haven't
<br>
been able to properly answer to this earlier, sorry.
<br>
<p>@Jsquyres We are planning to work on fault tolerance and improved
<br>
scheduling cappabilities for HPC. To do so, we are first focusing on
<br>
serial tasks, and in a next step we will work with parallel jobs.  In
<br>
particular, I will be working on job migration, so tasks composing an
<br>
MPI job can be re-allocated inside a cluster. Anyway, this is
<br>
anticipating too much, now we are in the the first steps of the
<br>
project. Also, thanks for the videos and the environment
<br>
recommendations, it has been really helpful.
<br>
<p>@Ralph Castain: Of course :) Our objective is to create open software
<br>
adopting the existing Open-MPI license, and make it available to the
<br>
community. i am not in charge of the &quot;paperwork&quot;, but I will make sure
<br>
that someone relevant in my organization looks at this contributor
<br>
agreement-
<br>
<p><p>Thanks again for your recommendations and warmth welcome. Best regards,
<br>
<p><p>Manuel
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 9
</span><br>
<span class="quotelev1">&gt; Date: Fri, 29 Aug 2014 14:40:08 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Fwd: recomended software stack for
</span><br>
<span class="quotelev1">&gt;         development?
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;632D2995-EA78-4AA2-BA94-BC77F05AE186_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2014, at 5:36 AM, Manuel Rodr?guez Pascual &lt;supermanue_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are a small development team that will soon start working in open-mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Welcome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Being total newbies on the area (both on open-mpi and in this kind of
</span><br>
<span class="quotelev2">&gt;&gt; large projects), we are seeking for advise in which tools to use on the
</span><br>
<span class="quotelev2">&gt;&gt; development. Any suggestion on IDE, compiler, regression testing software
</span><br>
<span class="quotelev2">&gt;&gt; and everything else is more than welcome. Of course this is highly personal,
</span><br>
<span class="quotelev2">&gt;&gt; but it would be great to know what you folks are using to help us decide and
</span><br>
<span class="quotelev2">&gt;&gt; start working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you'll find us all over the map on IDE.  I personally use
</span><br>
<span class="quotelev1">&gt; emacs+terminal.  I know others who use vim+terminal.  Many of us use ctags
</span><br>
<span class="quotelev1">&gt; and the like, but it's not quite as helpful as usual because of OMPI's heavy
</span><br>
<span class="quotelev1">&gt; use of pointers.  I don't think many developers use a full-blown IDE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For compiler, I'm guessing most of us develop with gcc most of the time,
</span><br>
<span class="quotelev1">&gt; although a few may have non-gcc as the default.  We test across a wide
</span><br>
<span class="quotelev1">&gt; variety of compilers, so portability is important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For regression testing, we use the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org/trac/mtt/">https://svn.open-mpi.org/trac/mtt/</a> and <a href="http://mtt.open-mpi.org/">http://mtt.open-mpi.org/</a>).  Many of
</span><br>
<span class="quotelev1">&gt; us have it configured to do builds of the nightly tarballs; some of us push
</span><br>
<span class="quotelev1">&gt; our results to the public database at mtt.open-mpi.org.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help. We are really looking to cooperate with the project,
</span><br>
<span class="quotelev2">&gt;&gt; so we'll hopefully see you around here for a while!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just curious: what do you anticipate working on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It might be a good idea to see our &quot;intro to the OMPI code base&quot; videos:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/video/?category=internals">http://www.open-mpi.org/video/?category=internals</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 11
</span><br>
<span class="quotelev1">&gt; Date: Fri, 29 Aug 2014 07:53:46 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Fwd: recomended software stack for
</span><br>
<span class="quotelev1">&gt;         development?
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;FF0760FF-1A7A-49F4-A8A0-5358C8A19FB5_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, welcome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make things smoother: are you planning to contribute your work back
</span><br>
<span class="quotelev1">&gt; to the community? If so, we'll need a signed contributor agreement - see
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/contribute/corporate.php">http://www.open-mpi.org/community/contribute/corporate.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Dr. Manuel Rodr&#195;&#173;guez-Pascual
skype: manuel.rodriguez.pascual
phone: (+34) 913466173 // (+34) 679925108
CIEMAT-Moncloa
Edificio 22, desp. 1.25
Avenida Complutense, 40
28040- MADRID
SPAIN
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15944.php">Ralph Castain: "Re: [OMPI devel] recomended software stack for development?"</a>
<li><strong>Previous message:</strong> <a href="15942.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15944.php">Ralph Castain: "Re: [OMPI devel] recomended software stack for development?"</a>
<li><strong>Reply:</strong> <a href="15944.php">Ralph Castain: "Re: [OMPI devel] recomended software stack for development?"</a>
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
