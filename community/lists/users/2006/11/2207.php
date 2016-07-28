<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 20:10:19 2006" -->
<!-- isoreceived="20061122011019" -->
<!-- sent="Tue, 21 Nov 2006 20:10:10 -0500" -->
<!-- isosent="20061122011010" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build OpenMPI for SHM only" -->
<!-- id="200611212010.12068.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="45639E90.6090107_at_llnl.gov" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 20:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2208.php">Iannetti, Anthony C. \(GRC-RTB0\): "[OMPI users] MX performance problem on two processor nodes"</a>
<li><strong>Previous message:</strong> <a href="2206.php">Brian W. Barrett: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>In reply to:</strong> <a href="2205.php">Adam Moody: "[OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2213.php">Adam Moody: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Reply:</strong> <a href="2213.php">Adam Moody: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I don't know if there is a way to do it in configure, but after installing you 
<br>
can go into the $prefix/lib/openmpi directory and delete mca_btl_tcp.*
<br>
<p>This will remove the tcp component and thus users will not be able to use it. 
<br>
Note that you must NOT delete the mca_oob_tcp.* files, as these are used for 
<br>
our internal administrative messaging and we currently require it to be 
<br>
there.
<br>
<p>Thanks,
<br>
<p>Tim Prins
<br>
<p><p>On Tuesday 21 November 2006 07:49 pm, Adam Moody wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; We have some clusters which consist of a large pool of 8-way nodes
</span><br>
<span class="quotelev1">&gt; connected via ethernet.  On these particular machines, we'd like our
</span><br>
<span class="quotelev1">&gt; users to be able to run 8-way MPI jobs on node, but we *don't* want them
</span><br>
<span class="quotelev1">&gt; to run MPI jobs across nodes via the ethernet.  Thus, I'd like to
</span><br>
<span class="quotelev1">&gt; configure and build OpenMPI to provide shared memory support (or TCP
</span><br>
<span class="quotelev1">&gt; loopback) but disable general TCP support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize that you can run without tcp via something like &quot;mpirun --mca
</span><br>
<span class="quotelev1">&gt; btl ^tcp&quot;, but this is up to the user's discretion.  I need a way to
</span><br>
<span class="quotelev1">&gt; disable it systematically.  Is there a way to configure it out at build
</span><br>
<span class="quotelev1">&gt; time or is there some runtime configuration file I can modify to turn it
</span><br>
<span class="quotelev1">&gt; off?  Also, when we configure &quot;--without-tcp&quot;, the configure script
</span><br>
<span class="quotelev1">&gt; doesn't complain, but TCP support is added anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Adam Moody
</span><br>
<span class="quotelev1">&gt; MPI Support @ LLNL
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
<li><strong>Next message:</strong> <a href="2208.php">Iannetti, Anthony C. \(GRC-RTB0\): "[OMPI users] MX performance problem on two processor nodes"</a>
<li><strong>Previous message:</strong> <a href="2206.php">Brian W. Barrett: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>In reply to:</strong> <a href="2205.php">Adam Moody: "[OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2213.php">Adam Moody: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Reply:</strong> <a href="2213.php">Adam Moody: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
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
