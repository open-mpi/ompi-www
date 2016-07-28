<?
$subject_val = "Re: [OMPI users] mpiexec option for node failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 04:38:54 2011" -->
<!-- isoreceived="20110913083854" -->
<!-- sent="Tue, 13 Sep 2011 10:38:42 +0200" -->
<!-- isosent="20110913083842" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec option for node failure" -->
<!-- id="ACB4083C-2252-4C42-A337-6F0ADED5EC1B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="806F77DA-7A0D-4B08-BC1D-CFD7658C71F6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec option for node failure<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 04:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>In reply to:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17313.php">George Bosilca: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.09.2011 um 02:43 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; We don't have anything similar in OMPI. There are fault tolerance modes, but not like the one you describe.
</span><br>
<p>You can join mpi3-ft at <a href="http://lists.mpi-forum.org/mailman/listinfo.cgi/mpi3-ft">http://lists.mpi-forum.org/mailman/listinfo.cgi/mpi3-ft</a>, there is also an archive <a href="http://lists.mpi-forum.org/mpi3-ft/">http://lists.mpi-forum.org/mpi3-ft/</a> which covers fault tolerance.
<br>
<p>I was pointed to it here <a href="http://www.open-mpi.org/community/lists/users/2011/01/15440.php">http://www.open-mpi.org/community/lists/users/2011/01/15440.php</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; On Sep 12, 2011, at 5:52 PM, Rob Stewart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have implemented a simple fault tolerant ping pong C program with MPI, here: <a href="http://pastebin.com/7mtmQH2q">http://pastebin.com/7mtmQH2q</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 offers a parameter with mpiexec:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -disable-auto-cleanup
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; .. as described here: <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1421">http://trac.mcs.anl.gov/projects/mpich2/ticket/1421</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is fault tolerant in the respect that, when I ssh to one of the nodes in the hosts file, and kill the relevant process, the MPI job is not terminated. Simply, the ping will not prompt a pong from the dead node, but the ping-pong runs forever on the remaining live nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is such an feature available for openMPI, either via mpiexec or some other means?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Rob Stewart
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
<li><strong>Next message:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>In reply to:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17313.php">George Bosilca: "Re: [OMPI users] mpiexec option for node failure"</a>
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
