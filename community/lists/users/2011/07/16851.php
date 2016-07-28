<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 20:39:01 2011" -->
<!-- isoreceived="20110708003901" -->
<!-- sent="Thu, 7 Jul 2011 20:38:56 -0400" -->
<!-- isosent="20110708003856" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="2DAE024D-1094-4581-A2A9-910BCB228084_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110705202453.GA63411_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 20:38:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16852.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16850.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>In reply to:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16862.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16862.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you able to run simple MPI applications with 1.4.3 or 1.4.4 on your OS?  E.g., the &quot;ring_c&quot; program in the example/ directory?  This might be a good test to see if OMPI's TCP is working at all.
<br>
<p>Assuming that works... Have you tried attaching debuggers to see where your process is hanging?  There might be a logic issue in your app that isn't-quite-legal-MPI but works with some amount of buffering, but fails if the amount of buffering is reduced.
<br>
<p><p>On Jul 5, 2011, at 4:24 PM, Steve Kargl wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Jul 05, 2011 at 01:14:06PM -0700, Steve Kargl wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have an application that appears to function as I expect
</span><br>
<span class="quotelev2">&gt;&gt; when compiled with openmpi-1.4.2 on FreeBSD 9.0.  But, it
</span><br>
<span class="quotelev2">&gt;&gt; appears to hang during communication between nodes.  What
</span><br>
<span class="quotelev2">&gt;&gt; follows is the long version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Argh I messed up.  It should read &quot;But, it appears to hang
</span><br>
<span class="quotelev1">&gt; during communication between nodes when using 1.4.3 or 1.4.4.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16852.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16850.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>In reply to:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16862.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16862.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
