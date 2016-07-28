<?
$subject_val = "Re: [OMPI devel] GNU Automake 1.14 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 19:01:35 2013" -->
<!-- isoreceived="20130903230135" -->
<!-- sent="Tue, 3 Sep 2013 16:01:30 -0700" -->
<!-- isosent="20130903230130" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GNU Automake 1.14 released" -->
<!-- id="48389DF6-4411-4F2A-903D-441F041822E3_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F86465E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GNU Automake 1.14 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 19:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12856.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>In reply to:</strong> <a href="12854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12878.php">Matthias Jurenz: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Reply:</strong> <a href="12878.php">Matthias Jurenz: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still don't see an issue with just detecting the version of automake being used, and setting a conditional that indicates whether or not to use explicitly include the subdir. Seems like a pretty trivial solution.
<br>
<p><p>On Sep 3, 2013, at 3:49 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 3, 2013, at 6:45 PM, Fabr&#237;cio Zimmerer Murta &lt;fabricio_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think autotools has a concept of disallowing symlinks as it seems symlinks can't be done in a portable way, and the goal of autotools is making projects portable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, if the autotools user feels like using symlinks, then it must be expected to break portability wherever you take your autoconfiscated code to. A choice to the user. Maybe in the case, as the project is bound to specific compilers, it would not be a problem to loose portability a bit more by considering symbolic linking around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fair enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've been using sym links in the OMPI project for years in order to compile a series of .c files in 2 different ways.  It's portable to all the places that we need/want it.
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12856.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>In reply to:</strong> <a href="12854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12878.php">Matthias Jurenz: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Reply:</strong> <a href="12878.php">Matthias Jurenz: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
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
