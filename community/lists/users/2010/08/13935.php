<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 07:12:42 2010" -->
<!-- isoreceived="20100809111242" -->
<!-- sent="Mon, 09 Aug 2010 06:12:35 -0500" -->
<!-- isosent="20100809111235" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="4C5FE2A3.3040700_at_cs.uh.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="276641.98799.qm_at_web50807.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 07:12:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13936.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13934.php">Nysal Jan: "Re: [OMPI users] Bug in POWERPC32.asm?"</a>
<li><strong>In reply to:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13936.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/8/2010 8:13 PM, Randolph Pullen wrote:
<br>
<span class="quotelev1">&gt; Thanks,  although &#226;&#128;&#156;An intercommunicator cannot be used for collective
</span><br>
<span class="quotelev1">&gt; communication.&#226;&#128;&#157; i.e ,  bcast calls., 
</span><br>
<p>yes it can. MPI-1 did not allow for collective operations on
<br>
intercommunicators, but the MPI-2 specification did introduce that notion.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><span class="quotelev1">&gt; I can see how the MPI_Group_xx
</span><br>
<span class="quotelev1">&gt; calls can be used to produce a useful group and then communicator;  -
</span><br>
<span class="quotelev1">&gt; thanks again but this is really the side issue to my main question
</span><br>
<span class="quotelev1">&gt; about MPI_Bcast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I seem to have duplicate concurrent processes interfering with each
</span><br>
<span class="quotelev1">&gt; other.  This would appear to be a breach of the MPI safety dictum, ie
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORD is supposed to only include the processes started by a
</span><br>
<span class="quotelev1">&gt; single mpirun command and isolate these processes from other similar
</span><br>
<span class="quotelev1">&gt; groups of processes safely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, it would appear to be a bug.  If so this has significant
</span><br>
<span class="quotelev1">&gt; implications for environments such as mine, where it may often occur
</span><br>
<span class="quotelev1">&gt; that the same program is run by different users simultaneously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is really this issue that it concerning me, I can rewrite the code
</span><br>
<span class="quotelev1">&gt; but if it can crash when 2 copies run at the same time, I have a much
</span><br>
<span class="quotelev1">&gt; bigger problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My suspicion is that a within the MPI_Bcast handshaking, a
</span><br>
<span class="quotelev1">&gt; syncronising broadcast call may be colliding across the environments.
</span><br>
<span class="quotelev1">&gt; My only evidence is an otherwise working program waits on broadcast
</span><br>
<span class="quotelev1">&gt; reception forever when two or more copies are run at [exactly] the
</span><br>
<span class="quotelev1">&gt; same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone else seen similar behavior in concurrently running
</span><br>
<span class="quotelev1">&gt; programs that perform lots of broadcasts perhaps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Randolph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Sun, 8/8/10, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt; Subject: Re: [OMPI users]
</span><br>
<span class="quotelev1">&gt; MPI_Bcast issue To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt; Received:
</span><br>
<span class="quotelev1">&gt; Sunday, 8 August, 2010, 12:34 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In particular, intercommunicators
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/7/10, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You should consider reading about communicators in MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien -- Aurelien Bouteiller, Ph.D. Innovative Computing
</span><br>
<span class="quotelev2">&gt;&gt; Laboratory, The University of Tennessee.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Envoy&#195;&#169; de mon iPad
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le Aug 7, 2010 &#195;&#160; 1:05, Randolph Pullen
</span><br>
<span class="quotelev2">&gt;&gt; &lt;randolph_pullen_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I seem to be having a problem with MPI_Bcast. My massive I/O
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intensive data movement program must broadcast from n to n nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My problem starts because I require 2 processes per node, a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sender and a receiver and I have implemented these using MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes rather than tackle the complexities of threads on MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Consequently, broadcast and calls like alltoall are not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completely helpful.  The dataset is huge and each node must end
</span><br>
<span class="quotelev3">&gt;&gt;&gt; up with a complete copy built by the large number of contributing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broadcasts from the sending nodes.  Network efficiency and run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time are paramount.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I don&#226;&#128;&#153;t want to needlessly broadcast all this data to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending nodes and I have a perfectly good MPI program that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distributes globally from a single node (1 to N), I took the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unusual decision to start N copies of this program by spawning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI system from the PVM system in an effort to get my N to N
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concurrent transfers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the broadcasts running on concurrent MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environments collide and cause all but the first process to hang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; waiting for their broadcasts.  This theory seems to be confirmed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by introducing a sleep of n-1 seconds before the first MPI_Bcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call on each node, which results in the code working perfectly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (total run time 55 seconds, 3 nodes, standard TCP stack)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that unlike PVM, OpenMPI implements broadcasts with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broadcasts rather than multicasts.  Can someone confirm this?  Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this a bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any multicast or N to N broadcast where sender processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can avoid participating when they don&#226;&#128;&#153;t need to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance Randolph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ users mailing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13936.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13934.php">Nysal Jan: "Re: [OMPI users] Bug in POWERPC32.asm?"</a>
<li><strong>In reply to:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13936.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
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
