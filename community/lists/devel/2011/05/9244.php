<?
$subject_val = "Re: [OMPI devel] One orted for each process on the same host - any problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 17:29:01 2011" -->
<!-- isoreceived="20110504212901" -->
<!-- sent="Wed, 4 May 2011 15:28:52 -0600" -->
<!-- isosent="20110504212852" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] One orted for each process on the same host - any problem?" -->
<!-- id="70BC4BF5-11A5-4C6B-95EB-0A16D77171D0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DC1AE5A.3090102_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] One orted for each process on the same host - any problem?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 17:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9245.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Previous message:</strong> <a href="9243.php">Tony Lam: "[OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>In reply to:</strong> <a href="9243.php">Tony Lam: "[OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9245.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2011, at 1:51 PM, Tony Lam wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand a single orted is shared by all MPI processes from the same communicator on each execution host, does anyone see any problem that MPI/OMPI may have problem with each process has its owner orted? My guess it is less efficient in terms of MPI communication and memory foot print, but for simplification of our integration with OMPI, launching one orted for each MPI process is much easier to do.
</span><br>
<p>The orteds won't care, but the mapper may get confused, and the MPI apps definitely will. Locality is based on being connected to the same orted, so the MPI apps will all declare themselves to be on different nodes - which means shared memory will be disabled. If you don't plan to use shared memory, then this won't matter.
<br>
<p>You'll also see some inefficiencies in out-of-band messaging, for example when infiniband connections are being opened, but that's pretty minor.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will appreciate if someone can confirm this setup will or will not work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9245.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Previous message:</strong> <a href="9243.php">Tony Lam: "[OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>In reply to:</strong> <a href="9243.php">Tony Lam: "[OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9245.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
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
