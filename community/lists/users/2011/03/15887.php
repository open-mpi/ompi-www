<?
$subject_val = "Re: [OMPI users] MPI_AllReduce() deadlock on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 20:38:13 2011" -->
<!-- isoreceived="20110317003813" -->
<!-- sent="Wed, 16 Mar 2011 20:38:06 -0400" -->
<!-- isosent="20110317003806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllReduce() deadlock on IB" -->
<!-- id="7EE182B5-2754-4405-B17E-1D23CC9197DD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE635A09-26AA-4539-AB19-F158590BA2F8_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_AllReduce() deadlock on IB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 20:38:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15888.php">Jeff Squyres: "Re: [OMPI users] Issues in 1.4.3 version and system cpu usage"</a>
<li><strong>Previous message:</strong> <a href="15886.php">Jeff Squyres: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>In reply to:</strong> <a href="15883.php">Brock Palen: "[OMPI users] MPI_AllReduce() deadlock on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15989.php">Brock Palen: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Reply:</strong> <a href="15989.php">Brock Palen: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This could be related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/2714">https://svn.open-mpi.org/trac/ompi/ticket/2714</a> and/or <a href="https://svn.open-mpi.org/trac/ompi/ticket/2722">https://svn.open-mpi.org/trac/ompi/ticket/2722</a>.
<br>
<p>There isn't much info in the ticket, but we've been talking about it a bunch offline.  IBM and Mellanox have had reports of the error, but haven't been able to reproduce it reliably.  It *seems* to be a race condition in the &quot;oob&quot; connection model of the openib BTL.
<br>
<p>If you run with --mca btl_openib_cpc_include rdmacm, does the problem go away?
<br>
<p><p>On Mar 16, 2011, at 11:27 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I have a user whos code when ran on ethernet performs fine. When ran on verbs based IB the code deadlocks in an MPI_AllReduce() call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using openmpi/1.4.3  with the intel compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I poked at the running code with padb and I get the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0....5....1....5....2....5....3....5....4....5....
</span><br>
<span class="quotelev1">&gt; ,,---,-,-,----,--,--,,-,RRRRRRRR,---,----,,--,-,-,
</span><br>
<span class="quotelev1">&gt; ,,-,-,,,-,,--,-,,-,-,-,-RRRRRRRR-,-,---,,,--,,---,
</span><br>
<span class="quotelev1">&gt; ,,---,-,,,,-,-,,-,-,----RRRRRRRR,----,-,--,,-----,
</span><br>
<span class="quotelev1">&gt; --,,-,-,,,,-,,------,,--RRRRRRRR,,----,,--,------,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For multiple runs which ranks are stuck in AllReduce() changes, 
</span><br>
<span class="quotelev1">&gt; Is there any open bugs?  I found one but only on shared memory and our version should be new enough (from what I could tell) to avoid it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,  what should I look for to diagnose the issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="15888.php">Jeff Squyres: "Re: [OMPI users] Issues in 1.4.3 version and system cpu usage"</a>
<li><strong>Previous message:</strong> <a href="15886.php">Jeff Squyres: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>In reply to:</strong> <a href="15883.php">Brock Palen: "[OMPI users] MPI_AllReduce() deadlock on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15989.php">Brock Palen: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Reply:</strong> <a href="15989.php">Brock Palen: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
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
