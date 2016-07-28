<?
$subject_val = "Re: [OMPI users] is there an equiv of iprove for bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 04:07:43 2011" -->
<!-- isoreceived="20110503080743" -->
<!-- sent="Tue, 3 May 2011 01:07:38 -0700 (PDT)" -->
<!-- isosent="20110503080738" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is there an equiv of iprove for bcast?" -->
<!-- id="330077.44385.qm_at_web121020.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] is there an equiv of iprove for bcast?" -->
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
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 04:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16420.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16418.php">Ahsan Ali: "[OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16392.php">Randolph Pullen: "[OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16438.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Reply:</strong> <a href="16438.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
<br>
Subject: Re: Re: [OMPI users] is there an equiv of iprove for bcast?
<br>
To: users_at_open-mpi.or
<br>
Received: Monday, 2 May, 2011, 12:53 PM
<br>
<p>Non blocking Bcasts or tests would do it.I currently have the clearing-house solution working but it is unsatisfying because of its serial node. - As it scales it will overload this node.
<br>
<p>The problem rephrased:Instead of n*2 processes, I am having to use n*2+1 with the extra process serially receiving listener messages on behalf of the workers before transmitting these messages to workers in its comm_group.
<br>
Is there a way to Bcast directly from each listener to the worker pool? &#160;(listeners must monitor their ports most of the time and cant participate in global bcasts)Not knowing which listener is going to transmit prevents the correct comm_group being used with Bcast calls.
<br>
--- On Sat, 30/4/11, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] is there an equiv of iprove for bcast?
<br>
To: randolph_pullen_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Saturday, 30 April, 2011, 7:17 AM
<br>
<p>On Apr 29, 2011, at 1:21 AM, Randolph Pullen wrote:
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
<span class="quotelev1">&gt; Making a separate communicator does not help as the sender is unknown.&#160; Other than making a serial 'clearing house' process I cant think
 of a way&#160; - Iprobe for Bcast would be useful.
</span><br>
<p>I'm not quite sure I understand your question.
<br>
<p>There currently is no probe for collectives, but MPI-3 has non-blocking collectives which you could MPI_Test for.&#160; There's a 3rd party library implementation called libNBC (non-blocking collectives) that you could use until such things become natively available.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16420.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16418.php">Ahsan Ali: "[OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16392.php">Randolph Pullen: "[OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16438.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Reply:</strong> <a href="16438.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
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
