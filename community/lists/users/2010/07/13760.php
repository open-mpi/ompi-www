<?
$subject_val = "Re: [OMPI users] OpenMPI killed by signal 9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 20:29:01 2010" -->
<!-- isoreceived="20100723002901" -->
<!-- sent="Thu, 22 Jul 2010 20:29:38 -0400" -->
<!-- isosent="20100723002938" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI killed by signal 9" -->
<!-- id="AF34FAD6-D8AD-43EC-A69A-E0666FECC606_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w1842A79693CB9E346177EFCBA30_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI killed by signal 9<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 20:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13759.php">Jeff Squyres: "Re: [OMPI users] MPI process dies with a route error when usingdynamic process calls to connect more than 2 clients to aserver with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13758.php">Jack Bryan: "[OMPI users] OpenMPI killed by signal 9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Signal 9 more than likely means that some external entity killed your MPI job (e.g., a resource manager determined that your process took too much time / CPU / whatever and killed it).  That also makes sense since you say that short jobs complete with no problem, but (assumedly) longer jobs get killed like you described below -- with signal 9.
<br>
<p>You might want to check with your system administrator and see if there are any resource limits on user-run applications.
<br>
<p><p>On Jul 22, 2010, at 8:18 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Dear All:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run a parallel job on 6 nodes of an OpenMPI cluster. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I got error: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0 in job 82  system.cluster_37948   caused collective abort of all ranks
</span><br>
<span class="quotelev1">&gt;   exit status of rank 0: killed by signal 9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that there is segmentation fault on node 0. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, if the program is run for a short time, no problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; July 22  2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The New Busy is not the old busy. Search, chat and e-mail from your inbox. Get started. _______________________________________________
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
<li><strong>Next message:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13759.php">Jeff Squyres: "Re: [OMPI users] MPI process dies with a route error when usingdynamic process calls to connect more than 2 clients to aserver with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13758.php">Jack Bryan: "[OMPI users] OpenMPI killed by signal 9"</a>
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
