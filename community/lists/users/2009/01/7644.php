<?
$subject_val = "Re: [OMPI users] mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 09:31:25 2009" -->
<!-- isoreceived="20090106143125" -->
<!-- sent="Tue, 6 Jan 2009 07:31:17 -0700" -->
<!-- isosent="20090106143117" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="C37197F8-D12C-47F6-87B6-C2BE8B87B0C5_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C6C068C2-D645-4FF5-98AF-A24E7C01475C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 09:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7645.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>Previous message:</strong> <a href="7643.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>In reply to:</strong> <a href="7637.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7649.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="7649.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2009, at 5:19 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 5, 2009, at 5:01 PM, Maciej Kazulak wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting though. I thought in such a simple scenario shared  
</span><br>
<span class="quotelev2">&gt;&gt; memory would be used for IPC (or whatever's fastest) . But nope.  
</span><br>
<span class="quotelev2">&gt;&gt; Even with one process still it wants to use TCP/IP to communicate  
</span><br>
<span class="quotelev2">&gt;&gt; between mpirun and orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct -- we only have TCP enabled for MPI process &lt;--&gt; orted  
</span><br>
<span class="quotelev1">&gt; communication.  There are several reasons why; the simplest is that  
</span><br>
<span class="quotelev1">&gt; this is our &quot;out of band&quot; channel and it is only used to setup and  
</span><br>
<span class="quotelev1">&gt; tear down the job.  As such, we don't care that it's a little slower  
</span><br>
<span class="quotelev1">&gt; than other possible channels (such as sm).  MPI traffic will use  
</span><br>
<span class="quotelev1">&gt; shmem, OpenFabrics-based networks, Myrinet, ...etc.  But not MPI  
</span><br>
<span class="quotelev1">&gt; process &lt;--&gt; orted communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What's even more surprising to me it won't use loopback for that.  
</span><br>
<span class="quotelev2">&gt;&gt; Hence my maybe a little bit over-restrictive iptables rules were  
</span><br>
<span class="quotelev2">&gt;&gt; the problem. I allowed traffic from 127.0.0.1 to 127.0.0.1 on lo  
</span><br>
<span class="quotelev2">&gt;&gt; but not from &lt;eth0_addr&gt; to &lt;eth0_addr&gt; on eth0 and both processes  
</span><br>
<span class="quotelev2">&gt;&gt; ended up waiting for IO.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I somehow configure it to use something other than TCP/IP here?  
</span><br>
<span class="quotelev2">&gt;&gt; Or at least switch it to loopback?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't remember how it works in the v1.2 series offhand; I think  
</span><br>
<span class="quotelev1">&gt; it's different in the v1.3 series (where all MPI processes *only*  
</span><br>
<span class="quotelev1">&gt; talk to the local orted, vs. MPI processes making direct TCP  
</span><br>
<span class="quotelev1">&gt; connections back to mpirun and any other MPI process with which it  
</span><br>
<span class="quotelev1">&gt; needs to bootstrap other communication channels).  I'm *guessing*  
</span><br>
<span class="quotelev1">&gt; that the MPI process &lt;--&gt; orted communication either uses a named  
</span><br>
<span class="quotelev1">&gt; unix socket or TCP loopback.  Ralph -- can you explain the details?
</span><br>
<p>In the 1.2 series, mpirun spawns a local orted to handle all local  
<br>
procs. The code that discovers local interfaces specifically ignores  
<br>
any interfaces that are not up or are just local loopbacks. My guess  
<br>
is that the person who wrote that code long, long ago was assuming  
<br>
that the sole purpose was to talk to remote nodes, not to loop back  
<br>
onto yourself.
<br>
<p>I imagine it could be changed to include loopback, but I would first  
<br>
need to work with other developers to ensure there are no unexpected  
<br>
consequences in doing so. Since no TCP interface is found, mpirun fails.
<br>
<p>In the 1.3 series, mpirun handles the local procs itself. Thus, this  
<br>
issue does not appear and things run just fine.
<br>
<p><p>Ralph
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="7645.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>Previous message:</strong> <a href="7643.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>In reply to:</strong> <a href="7637.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7649.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="7649.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
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
