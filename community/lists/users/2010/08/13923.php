<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  7 09:01:07 2010" -->
<!-- isoreceived="20100807130107" -->
<!-- sent="Sat, 7 Aug 2010 09:01:01 -0400" -->
<!-- isosent="20100807130101" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="7C358508-DA6B-480B-98AB-DA43377086D0_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="914097.96007.qm_at_web50808.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-07 09:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13924.php">David Zhang: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13922.php">Randolph Pullen: "[OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13922.php">Randolph Pullen: "[OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13924.php">David Zhang: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13924.php">David Zhang: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should consider reading about communicators in MPI. 
<br>
<p>Aurelien
<br>
<pre>
--
Aurelien Bouteiller, Ph.D.
Innovative Computing Laboratory, The University of Tennessee.
Envoy&#195;&#169; de mon iPad
Le Aug 7, 2010 &#195;&#160; 1:05, Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; a &#195;&#169;crit :
&gt; I seem to be having a problem with MPI_Bcast.
&gt; My massive I/O intensive data movement program must broadcast from n to n nodes. My problem starts because I require 2 processes per node, a sender and a receiver and I have implemented these using MPI processes rather than tackle the complexities of threads on MPI.
&gt; 
&gt; Consequently, broadcast and calls like alltoall are not completely helpful.  The dataset is huge and each node must end up with a complete copy built by the large number of contributing broadcasts from the sending nodes.  Network efficiency and run time are paramount.
&gt; 
&gt; As I don&#226;&#128;&#153;t want to needlessly broadcast all this data to the sending nodes and I have a perfectly good MPI program that distributes globally from a single node (1 to N), I took the unusual decision to start N copies of this program by spawning the MPI system from the PVM system in an effort to get my N to N concurrent transfers.
&gt; 
&gt; It seems that the broadcasts running on concurrent MPI environments collide and cause all but the first process to hang waiting for their broadcasts.  This theory seems to be confirmed by introducing a sleep of n-1 seconds before the first MPI_Bcast  call on each node, which results in the code working perfectly.  (total run time 55 seconds, 3 nodes, standard TCP stack)
&gt; 
&gt; My guess is that unlike PVM, OpenMPI implements broadcasts with broadcasts rather than multicasts.  Can someone confirm this?  Is this a bug?
&gt; 
&gt; Is there any multicast or N to N broadcast where sender processes can avoid participating when they don&#226;&#128;&#153;t need to?
&gt; 
&gt; Thanks in advance
&gt; Randolph
&gt; 
&gt; 
&gt;  
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13924.php">David Zhang: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13922.php">Randolph Pullen: "[OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13922.php">Randolph Pullen: "[OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13924.php">David Zhang: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13924.php">David Zhang: "Re: [OMPI users] MPI_Bcast issue"</a>
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
