<?
$subject_val = "Re: [OMPI users] is there an equiv of iprove for bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 17:17:21 2011" -->
<!-- isoreceived="20110429211721" -->
<!-- sent="Fri, 29 Apr 2011 17:17:14 -0400" -->
<!-- isosent="20110429211714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is there an equiv of iprove for bcast?" -->
<!-- id="6179323A-607E-41FC-A4E1-B847DC4E7D52_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="66011.54479.qm_at_web121008.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] is there an equiv of iprove for bcast?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-29 17:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16400.php">Jack Bryan: "[OMPI users] OMPI vs. network socket communcation"</a>
<li><strong>Previous message:</strong> <a href="16398.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16392.php">Randolph Pullen: "[OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16419.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2011, at 1:21 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; I am having a design issue:
</span><br>
<span class="quotelev1">&gt; My server application has 2 processes per node, 1 listener and 1 worker.
</span><br>
<span class="quotelev1">&gt; Each listener monitors a specified port for incoming TCP connections with the goal that on receipt of a request it will distribute it over the workers in a SIMD fashion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem is this: how can I get the workers to accept work from any of the listeners?
</span><br>
<span class="quotelev1">&gt; Making a separate communicator does not help as the sender is unknown.  Other than making a serial 'clearing house' process I cant think of a way  - Iprobe for Bcast would be useful.
</span><br>
<p>I'm not quite sure I understand your question.
<br>
<p>There currently is no probe for collectives, but MPI-3 has non-blocking collectives which you could MPI_Test for.  There's a 3rd party library implementation called libNBC (non-blocking collectives) that you could use until such things become natively available.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="16400.php">Jack Bryan: "[OMPI users] OMPI vs. network socket communcation"</a>
<li><strong>Previous message:</strong> <a href="16398.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16392.php">Randolph Pullen: "[OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16419.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
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
