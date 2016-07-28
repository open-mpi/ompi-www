<?
$subject_val = "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 06:00:12 2011" -->
<!-- isoreceived="20110919100012" -->
<!-- sent="Mon, 19 Sep 2011 13:00:01 +0300" -->
<!-- isosent="20110919100001" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?" -->
<!-- id="4E7712A1.5010605_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F0A1D0B7-621A-47E8-8D14-4D6B74151C20_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 06:00:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17331.php">devendra rai: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17284.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14-Sep-11 12:59 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 13, 2011, at 6:33 PM, Kevin.Buckley_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; there have been two runs of jobs that invoked the mpirun using these
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI parameter setting flags (basically, these mimic what I have
</span><br>
<span class="quotelev2">&gt;&gt; in the global config file)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_openib_ib_timeout 20 -mca btl_openib_ib_min_rnr_timer 25
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when both of the job failed, the error output was
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
</span><br>
<span class="quotelev2">&gt;&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev2">&gt;&gt; respect to the retry count:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev2">&gt;&gt;   attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev2">&gt;&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev2">&gt;&gt;   to 10).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev2">&gt;&gt; -----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that the error output it still showing that mysterious &quot;10&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in there for btl_openib_ib_timeout value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That text message is hard-coded (and apparently out of date); it does not show the current value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that that is misleading.  This error message needs to be improved.
</span><br>
<p>Indeed, this error message is out of date.
<br>
It has the right value in OMPI 1.5 and trunk, but not in 1.4 series.
<br>
<p>-- YK
<br>
<p><span class="quotelev2">&gt;&gt; I have noticed that the same node is apearing in the error output
</span><br>
<span class="quotelev2">&gt;&gt; each time, so I'll try taking that one out of the test PE that the
</span><br>
<span class="quotelev2">&gt;&gt; jobs are executing in and seeing if I can tie it to hardware.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This might suggest a hardware issue; let us know what you find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17331.php">devendra rai: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17284.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
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
