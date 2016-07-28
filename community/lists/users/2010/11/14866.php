<?
$subject_val = "Re: [OMPI users] launching the mpi runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 11:52:02 2010" -->
<!-- isoreceived="20101122165202" -->
<!-- sent="Mon, 22 Nov 2010 16:52:52 -0000" -->
<!-- isosent="20101122165252" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launching the mpi runtime" -->
<!-- id="003501cb8a65$b4af2be0$1e0d83a0$_at_org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="62A0B6A1-88A0-4472-8E93-107BABB307F9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] launching the mpi runtime<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 11:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14867.php">Rob Latham: "Re: [OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<li><strong>Previous message:</strong> <a href="14865.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="14861.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14869.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Reply:</strong> <a href="14869.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i have now a application with a gui. The gui launches the calculations
<br>
in-process serially.
<br>
No MPI involved. Fine. The objective is to parallelize.
<br>
<p>I want to keep the GUI(windows) as the control to start calcs and display
<br>
results.
<br>
<p>The GUI could be the master process of the mpi processes.
<br>
That's bad because the executable image has deps on the GUI library and
<br>
there's no need for all the mpi processes (the same executable) to have
<br>
anything to do with the display.
<br>
<p>besides, i have a win box and a couple of linux boxes, and openmpi cannot
<br>
mix both in the same group of mpi processes.
<br>
<p>therefore, I guess I need to separate the GUI binary from the mpi-processes
<br>
binary and have the GUI process talk to the &quot;master&quot; mpi process (on linux)
<br>
for calc requests.
<br>
<p>I was hoping I wouldn't have to write a custom code to do that.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: 22 November 2010 15:53
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] launching the mpi runtime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other than MPI_COMM_SPAWN[_MULTIPLE], we don't expose the underlying
</span><br>
<span class="quotelev1">&gt; run-time to MPI applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a whole programatic interface for the layer under MPI (the
</span><br>
<span class="quotelev1">&gt; Open MPI Runtime Environment -- ORTE), though.  We don't advise mixing
</span><br>
<span class="quotelev1">&gt; ORTE calls in MPI applications, but it is certainly feasible to use
</span><br>
<span class="quotelev1">&gt; ORTE for non-MPI things (some of the OMPI community member
</span><br>
<span class="quotelev1">&gt; organizations do so).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are you trying to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2010, at 11:37 AM, David Zhang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; you could spawn more processes from currently running processes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Nov 18, 2010 at 3:05 AM, Hicham Mouline &lt;hicham_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One typically uses mpirun to launch a set of mpi processes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there some programmatical interface to launching the runtime and
</span><br>
<span class="quotelev1">&gt; having the process that launched the runtime becoming part of the list
</span><br>
<span class="quotelev1">&gt; of mpi processes,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; David Zhang
</span><br>
<span class="quotelev2">&gt; &gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14867.php">Rob Latham: "Re: [OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<li><strong>Previous message:</strong> <a href="14865.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="14861.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14869.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Reply:</strong> <a href="14869.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
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
