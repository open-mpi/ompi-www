<?
$subject_val = "Re: [OMPI users] Segmentation fault during MPI initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 14:29:33 2012" -->
<!-- isoreceived="20120424182933" -->
<!-- sent="Tue, 24 Apr 2012 14:29:24 -0400" -->
<!-- isosent="20120424182924" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault during MPI initialization" -->
<!-- id="4F96F104.6070902_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 14:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19096.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<li><strong>In reply to:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19101.php">Jeffrey Squyres: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeffrey
<br>
<p>Assuming you are on Linux,
<br>
a frequent cause of out-of-nowhere segfaults
<br>
is a limited/small stack size.
<br>
They can happen if you [ab]use big automatic arrays, etc.
<br>
<p>You can set the stacksize bigger/unlimited
<br>
with the ulimit/limit command,
<br>
or edit the /etc/security/limits.conf.
<br>
<p>Of course, there is always a chance of a bug in the code
<br>
itself, leading to a memory violation.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 04/24/2012 01:57 PM, Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; I've been having an intermittent failure during MPI initialization (v
</span><br>
<span class="quotelev1">&gt; 1.4.3) for several months. It comes and goes as I make changes to my
</span><br>
<span class="quotelev1">&gt; application, that is changes unrelated to MPI calls. Even when I have a
</span><br>
<span class="quotelev1">&gt; version of my app which shows the problem, it doesn't happen on every
</span><br>
<span class="quotelev1">&gt; submittal. This is a representative stack trace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *[mtcompute-6-6:05845] *** Process received signal ***
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
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib/libopen-pal.so.0(opal_progress+0x5a) [0x2b2b3fa694ea]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 3] /opt/openmpi/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0x2b2b3f80913c]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 4] /opt/openmpi/lib/libmpi.so.0 [0x2b2b3d3f160c]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 5] /opt/openmpi/lib/libmpi.so.0(MPI_Init+0xf0)
</span><br>
<span class="quotelev1">&gt; [0x2b2b3d40eb00]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/cummings/DART/DARTHome/bin/linux/DebrisProp [0x418610]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x31df41d994]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/cummings/DART/DARTHome/bin/linux/DebrisProp [0x417992]
</span><br>
<span class="quotelev1">&gt; [mtcompute-6-6:05845] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 5845 on node
</span><br>
<span class="quotelev1">&gt; mtcompute-6-6.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *Any suggestions would be welcome.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *- Jeff Cummings*
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19096.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<li><strong>In reply to:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19101.php">Jeffrey Squyres: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
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
