<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 15:57:44 2007" -->
<!-- isoreceived="20071127205744" -->
<!-- sent="Tue, 27 Nov 2007 12:57:39 -0800" -->
<!-- isosent="20071127205739" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="474C84C3.1030005_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4126B8A6-BED3-4FCD-B200-F80C7C526EB8_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problems<br>
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-27 15:57:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4525.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4525.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<span class="quotelev1">&gt; On Nov 27, 2007, at 10:49 AM, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 21, 2007, at 3:39 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If this is what I think it is, try using this MCA parameter:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca btl_openib_ib_timeout 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The user used this option and it allowed the run to complete.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You say its a issue with the fabric ibshowerrors does not show any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Its topspin (cisco) gear, nic's, switch,cables.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should I follow up with cisco more?
</span><br>
<span class="quotelev2">&gt;&gt; Sure why not, if you think it'd be useful.  FWIW, I see this on
</span><br>
<span class="quotelev2">&gt;&gt; Voltaire/Mellanox hardware with Open MPI; others here at LLNL tell me
</span><br>
<span class="quotelev2">&gt;&gt; they've seen it with MVAPICH as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What would be a place to look?  Should this just be default then for  
</span><br>
<span class="quotelev1">&gt; OMPI?  ompi_info shows the default as 10 seconds?  Is that right  
</span><br>
<span class="quotelev1">&gt; 'seconds' ?
</span><br>
<p>The other IB guys can probably answer better than I can -- I'm not an 
<br>
expert in this part of IB (or really any part I guess :).  Not sure why 
<br>
a larger value isn't the default.  No, its not seconds -- check the 
<br>
description of the MCA parameter:
<br>
<p>4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4525.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4525.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4527.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
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
