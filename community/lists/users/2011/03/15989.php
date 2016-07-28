<?
$subject_val = "Re: [OMPI users] MPI_AllReduce() deadlock on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 09:49:16 2011" -->
<!-- isoreceived="20110325134916" -->
<!-- sent="Fri, 25 Mar 2011 09:49:09 -0400" -->
<!-- isosent="20110325134909" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllReduce() deadlock on IB" -->
<!-- id="496FA905-C0A8-476C-983E-CD41CF81F0DF_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7EE182B5-2754-4405-B17E-1D23CC9197DD_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-25 09:49:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15990.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15988.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15887.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running with rdmacm the problem does seam to resolve its self,
<br>
The code is large and complicated, but the problem does appear to arise regularly when ran.
<br>
<p>Just FYI, can I collect extra information to help find a fix?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Mar 16, 2011, at 8:38 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This could be related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/2714">https://svn.open-mpi.org/trac/ompi/ticket/2714</a> and/or <a href="https://svn.open-mpi.org/trac/ompi/ticket/2722">https://svn.open-mpi.org/trac/ompi/ticket/2722</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There isn't much info in the ticket, but we've been talking about it a bunch offline.  IBM and Mellanox have had reports of the error, but haven't been able to reproduce it reliably.  It *seems* to be a race condition in the &quot;oob&quot; connection model of the openib BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you run with --mca btl_openib_cpc_include rdmacm, does the problem go away?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2011, at 11:27 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a user whos code when ran on ethernet performs fine. When ran on verbs based IB the code deadlocks in an MPI_AllReduce() call.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are using openmpi/1.4.3  with the intel compilers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I poked at the running code with padb and I get the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 0....5....1....5....2....5....3....5....4....5....
</span><br>
<span class="quotelev2">&gt;&gt; ,,---,-,-,----,--,--,,-,RRRRRRRR,---,----,,--,-,-,
</span><br>
<span class="quotelev2">&gt;&gt; ,,-,-,,,-,,--,-,,-,-,-,-RRRRRRRR-,-,---,,,--,,---,
</span><br>
<span class="quotelev2">&gt;&gt; ,,---,-,,,,-,-,,-,-,----RRRRRRRR,----,-,--,,-----,
</span><br>
<span class="quotelev2">&gt;&gt; --,,-,-,,,,-,,------,,--RRRRRRRR,,----,,--,------,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For multiple runs which ranks are stuck in AllReduce() changes, 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any open bugs?  I found one but only on shared memory and our version should be new enough (from what I could tell) to avoid it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,  what should I look for to diagnose the issue?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15990.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15988.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15887.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
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
