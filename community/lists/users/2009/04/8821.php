<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 14:31:13 2009" -->
<!-- isoreceived="20090407183113" -->
<!-- sent="Tue, 7 Apr 2009 11:31:10 -0700" -->
<!-- isosent="20090407183110" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090407183110.GA91737_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49DB7AED.6030005_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 14:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8822.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8820.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8822.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8822.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8823.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 07, 2009 at 09:10:21AM -0700, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Steve Kargl wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I can rebuild 1.2.9 and 1.3.1. Is there any particular configure 
</span><br>
<span class="quotelev2">&gt; &gt;options that I should enable/disable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope someone else will chime in here, because I'm somewhat out of 
</span><br>
<span class="quotelev1">&gt; ideas.  All I'm saying is that 10-usec latencies on sm with 1.3.0 or 
</span><br>
<span class="quotelev1">&gt; 1.3.1 are out of line with what other people see and I don't think it's 
</span><br>
<span class="quotelev1">&gt; simply a 1.2.9/1.3.0 issue here.  I'm stumped.
</span><br>
<p>With 1.3.2 pre-release, I ran
<br>
<p>/usr/local/openmpi-1.3.2/bin/mpiexec --mca btl sm,self \
<br>
--mca mpi_show_mca_params all -machinefile mf_ompi_2 -n 2 ./z | &amp; tee sgk.log
<br>
<p>I've placed a file with the output from '--mca mpi_show_mca_params all' at
<br>
<p><a href="http://troutmask.apl.washington.edu/~kargl/mca_all_params.txt">http://troutmask.apl.washington.edu/~kargl/mca_all_params.txt</a>
<br>
<p>Perhaps, someone with more knowledge of the parameters can take a
<br>
quick look.  I do observe
<br>
<p>[node20.cimu.org:90002] btl_sm_bandwidth=900 (default value)
<br>
[node20.cimu.org:90002] btl_sm_latency=100 (default value)
<br>
<p>Are these values tunable?
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8822.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8820.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8822.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8822.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8823.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
