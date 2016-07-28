<?
$subject_val = "Re: [OMPI users] is there an equiv of iprove for bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 21:19:20 2011" -->
<!-- isoreceived="20110504011920" -->
<!-- sent="Tue, 3 May 2011 21:19:12 -0400" -->
<!-- isosent="20110504011912" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is there an equiv of iprove for bcast?" -->
<!-- id="34DA53A6-A294-4668-9FD7-C6A7C288ECAB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="330077.44385.qm_at_web121020.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2011-05-03 21:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16439.php">Ahsan Ali: "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)"</a>
<li><strong>Previous message:</strong> <a href="16437.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<li><strong>In reply to:</strong> <a href="16419.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16440.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Reply:</strong> <a href="16440.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't quite understand your architecture enough to answer your question.  E.g., someone pointed out to me off-list that if you only have 1 listener, a send is effectively the same thing as a broadcast (for which you could test/wait on a non-blocking receive, for example).
<br>
<p>MPI broadcasts only work on fixed communicators -- meaning that you effectively have to know the root and the receivers ahead of time.  If the receivers don't know who the root will be beforehand, that's unfortunately not a good match for the MPI_Bcast operation.
<br>
<p><p><p>On May 3, 2011, at 4:07 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: Re: [OMPI users] is there an equiv of iprove for bcast?
</span><br>
<span class="quotelev1">&gt; To: users_at_open-mpi.or
</span><br>
<span class="quotelev1">&gt; Received: Monday, 2 May, 2011, 12:53 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Non blocking Bcasts or tests would do it.
</span><br>
<span class="quotelev1">&gt; I currently have the clearing-house solution working but it is unsatisfying because of its serial node. - As it scales it will overload this node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem rephrased:
</span><br>
<span class="quotelev1">&gt; Instead of n*2 processes, I am having to use n*2+1 with the extra process serially receiving listener messages on behalf of the workers before transmitting these messages to workers in its comm_group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to Bcast directly from each listener to the worker pool?  (listeners must monitor their ports most of the time and cant participate in global bcasts)
</span><br>
<span class="quotelev1">&gt; Not knowing which listener is going to transmit prevents the correct comm_group being used with Bcast calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Sat, 30/4/11, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] is there an equiv of iprove for bcast?
</span><br>
<span class="quotelev1">&gt; To: randolph_pullen_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Received: Saturday, 30 April, 2011, 7:17 AM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2011, at 1:21 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am having a design issue:
</span><br>
<span class="quotelev2">&gt; &gt; My server application has 2 processes per node, 1 listener and 1 worker.
</span><br>
<span class="quotelev2">&gt; &gt; Each listener monitors a specified port for incoming TCP connections with the goal that on receipt of a request it will distribute it over the workers in a SIMD fashion.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My problem is this: how can I get the workers to accept work from any of the listeners?
</span><br>
<span class="quotelev2">&gt; &gt; Making a separate communicator does not help as the sender is unknown.  Other than making a serial 'clearing house' process I cant think of a way  - Iprobe for Bcast would be useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite sure I understand your question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There currently is no probe for collectives, but MPI-3 has non-blocking collectives which you could MPI_Test for.  There's a 3rd party library implementation called libNBC (non-blocking collectives) that you could use until such things become natively available.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="16439.php">Ahsan Ali: "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)"</a>
<li><strong>Previous message:</strong> <a href="16437.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<li><strong>In reply to:</strong> <a href="16419.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16440.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Reply:</strong> <a href="16440.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
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
