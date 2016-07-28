<?
$subject_val = "Re: [OMPI users] Number of file handles limiting the number off processes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 08:14:56 2008" -->
<!-- isoreceived="20080710121456" -->
<!-- sent="Thu, 10 Jul 2008 06:14:46 -0600" -->
<!-- isosent="20080710121446" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of file handles limiting the number off processes?" -->
<!-- id="C49B5956.576C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4875FABC.1020500_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Number of file handles limiting the number off processes?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 08:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6043.php">Joe Landman: "[OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="6041.php">Samuel Sarholz: "[OMPI users] Number of file handles limiting the number off processes?"</a>
<li><strong>In reply to:</strong> <a href="6041.php">Samuel Sarholz: "[OMPI users] Number of file handles limiting the number off processes?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, that is indeed true for the 1.2 series. It is significantly
<br>
better in 1.3, but still not perfect.
<br>
<p>Basically, in 1.2, every process has to &quot;call home&quot; to mpirun (or mpiexec -
<br>
same thing) when it starts up. This is required in order to exchange
<br>
connection info so that the MPI comm subsystem can wire itself up. Thus,
<br>
every process creates a TCP connection to the node where mpirun sits.
<br>
<p>In 1.3, this is reduced to one connection per node as all non-MPI comm is
<br>
routed through the local daemon on each node. Still not ideal, but a
<br>
significant reduction.
<br>
<p>In 1.4, we will further reduce this for systems with static IP addresses to
<br>
perhaps as little as a single connection to mpirun. But that remains to be
<br>
done.
<br>
<p>Regards
<br>
Ralph
<br>
<p><p><p>On 7/10/08 6:04 AM, &quot;Samuel Sarholz&quot; &lt;sarholz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec seems to need a file handle per started process.
</span><br>
<span class="quotelev1">&gt; By default the number of file handles is set to 1024 here, thus I can
</span><br>
<span class="quotelev1">&gt; start about 900 something processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With higher numbers I get
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_accept: accept() failed: Too many open files (24).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I decrease the file handles on the shell I run mpiexec from, I get
</span><br>
<span class="quotelev1">&gt; the error with less processes. However no MPI process is started on the
</span><br>
<span class="quotelev1">&gt; local machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first thing I am wondering about is the TCP because Infiniband is
</span><br>
<span class="quotelev1">&gt; used for communication.
</span><br>
<span class="quotelev1">&gt; And secondly what are the files/connections used for?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do I really have to set the file handles to 5000 (and to 32000 in a few
</span><br>
<span class="quotelev1">&gt; years) for large MPI programs or is there a workaround?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another thing that I don't get is that the problem only arises if I
</span><br>
<span class="quotelev1">&gt; start an MPI program.
</span><br>
<span class="quotelev1">&gt; mpiexec -np 2000 hostname
</span><br>
<span class="quotelev1">&gt; works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Samuel
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
<li><strong>Next message:</strong> <a href="6043.php">Joe Landman: "[OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="6041.php">Samuel Sarholz: "[OMPI users] Number of file handles limiting the number off processes?"</a>
<li><strong>In reply to:</strong> <a href="6041.php">Samuel Sarholz: "[OMPI users] Number of file handles limiting the number off processes?"</a>
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
