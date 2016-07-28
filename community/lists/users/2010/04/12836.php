<?
$subject_val = "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 13:26:07 2010" -->
<!-- isoreceived="20100428172607" -->
<!-- sent="Wed, 28 Apr 2010 13:26:01 -0400" -->
<!-- isosent="20100428172601" -->
<!-- name="kishore kumar" -->
<!-- email="kishoreguptaos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0." -->
<!-- id="p2z67ee8d951004281026qe51ad5e5j1e332497225a36_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA17056771_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0.<br>
<strong>From:</strong> kishore kumar (<em>kishoreguptaos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 13:26:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12837.php">Pooja Varshneya: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Previous message:</strong> <a href="12835.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12842.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Getting the following error if I remove  --mca btl tcp,self option from the
<br>
mpirun
<br>
<p>kishore_at_cache-aware[23]; mpirun -np 2 su3imp_base.solaris
<br>
--------------------------------------------------------------------------
<br>
[[16283,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: uDAPL
<br>
&nbsp;&nbsp;Host: cache-aware
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
SU3 with improved KS action
<br>
Microcanonical simulation with refreshing
<br>
MIMD version 6
<br>
Machine =
<br>
R algorithm
<br>
type 0 for no prompts  or 1 for prompts
<br>
nflavors 2
<br>
nx 30
<br>
ny 30
<br>
nz 56
<br>
nt 84
<br>
iseed 1234
<br>
LAYOUT = Hypercubes, options = EVENFIRST,
<br>
[cache-aware:00758] 1 more process has sent help message
<br>
help-mpi-btl-base.txt / btl:no-nics
<br>
[cache-aware:00758] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
NODE 1: no room for t_longlink
<br>
Termination: node 1, status = 1
<br>
NODE 0: no room for t_longlink
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 1 in communicator MPI_COMM_WORLD
<br>
with errorcode 0.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
termination: Wed Apr 28 10:23:32 2010
<br>
<p>Termination: node 0, status = 1
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 759 on
<br>
node cache-aware exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>Best,
<br>
Kishore Kumar Pusukuri
<br>
<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
<br>
<p><p><p>On 28 April 2010 06:32, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't know much about specmpi, but it seems like it is choosing to abort.
</span><br>
<span class="quotelev1">&gt; Maybe the &quot;no room for lattice&quot; has some meaning...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;  *From*: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To*: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent*: Wed Apr 28 01:47:01 2010
</span><br>
<span class="quotelev1">&gt; *Subject*: [OMPI users] MPI_ABORT was invoked on rank 0 in
</span><br>
<span class="quotelev1">&gt; communicatorMPI_COMM_WORLD with errorcode 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to run SPEC MPI 2007 workload on a quad-core machine. However
</span><br>
<span class="quotelev1">&gt; getting this error message. I also tried to use hostfile option by
</span><br>
<span class="quotelev1">&gt; specifying localhost slots=4, but still getting the following error. Please
</span><br>
<span class="quotelev1">&gt; help me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun  --mca btl tcp,sm,self -np 4 su3imp_base.solaris
</span><br>
<span class="quotelev1">&gt; SU3 with improved KS action
</span><br>
<span class="quotelev1">&gt; Microcanonical simulation with refreshing
</span><br>
<span class="quotelev1">&gt; MIMD version 6
</span><br>
<span class="quotelev1">&gt; Machine =
</span><br>
<span class="quotelev1">&gt; R algorithm
</span><br>
<span class="quotelev1">&gt; type 0 for no prompts  or 1 for prompts
</span><br>
<span class="quotelev1">&gt; nflavors 2
</span><br>
<span class="quotelev1">&gt; nx 30
</span><br>
<span class="quotelev1">&gt; ny 30
</span><br>
<span class="quotelev1">&gt; nz 56
</span><br>
<span class="quotelev1">&gt; nt 84
</span><br>
<span class="quotelev1">&gt; iseed 1234
</span><br>
<span class="quotelev1">&gt; LAYOUT = Hypercubes, options = EVENFIRST,
</span><br>
<span class="quotelev1">&gt; NODE 0: no room for lattice
</span><br>
<span class="quotelev1">&gt; termination: Tue Apr 27 23:41:44 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Termination: node 0, status = 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 17239 on
</span><br>
<span class="quotelev1">&gt; node cache-aware exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Kishore Kumar Pusukuri
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a> &lt;<a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12837.php">Pooja Varshneya: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Previous message:</strong> <a href="12835.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12842.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
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
