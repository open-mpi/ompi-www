<?
$subject_val = "Re: [OMPI users] Segmentation fault during MPI initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 15:14:46 2012" -->
<!-- isoreceived="20120424191446" -->
<!-- sent="Tue, 24 Apr 2012 15:14:41 -0400" -->
<!-- isosent="20120424191441" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault during MPI initialization" -->
<!-- id="494AD197-F047-40E1-82CF-5923A0BC9D0B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF594FACFA.16A51C6D-ON852579EA.0062238D-852579EA.0062A692_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault during MPI initialization<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 15:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19100.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>In reply to:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19097.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's very odd, indeed -- it's listed as being inside MPI_INIT, but we don't get any further details from there.  :-\
<br>
<p>Any chance you could try upgrading to OMPI 1.4.5 and/or 1.5.5?
<br>
<p>On Apr 24, 2012, at 1:57 PM, Jeffrey A Cummings wrote:
<br>
<p><span class="quotelev1">&gt; I've been having an intermittent failure during MPI initialization (v 1.4.3) for several months.  It comes and goes as I make changes to my application, that is changes unrelated to MPI calls.  Even when I have a version of my app which shows the problem, it doesn't happen on every submittal.  This is a representative stack trace: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] Failing at address: 0x2ac352e0bd80
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 0] /lib64/libpthread.so.0 [0x314ee0eb10]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 1] /opt/openmpi/lib/libmpi.so.0 [0x2b2b3d42fa70]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 2] /opt/openmpi/lib/libopen-pal.so.0(opal_progress+0x5a) [0x2b2b3fa694ea]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 3] /opt/openmpi/lib/libopen-rte.so.0 [0x2b2b3f80913c]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 4] /opt/openmpi/lib/libmpi.so.0 [0x2b2b3d3f160c]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 5] /opt/openmpi/lib/libmpi.so.0(MPI_Init+0xf0) [0x2b2b3d40eb00]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 6] /home/cummings/DART/DARTHome/bin/linux/DebrisProp [0x418610]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x31df41d994]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 8] /home/cummings/DART/DARTHome/bin/linux/DebrisProp [0x417992]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 5845 on node mtcompute-6-6.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions would be welcome. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Jeff Cummings_______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19100.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>In reply to:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19097.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
