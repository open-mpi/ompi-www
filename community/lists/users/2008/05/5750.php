<?
$subject_val = "Re: [OMPI users] Help: Program Terminated";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 10:59:03 2008" -->
<!-- isoreceived="20080529145903" -->
<!-- sent="Thu, 29 May 2008 16:59:08 +0200" -->
<!-- isosent="20080529145908" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Program Terminated" -->
<!-- id="20080529145908.GA1980_at_hex.inf-ra.uni-jena.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="289665360805290110j7e904185x8de4915c1e38f624_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Program Terminated<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 10:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5751.php">Jim Kusznir: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Previous message:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>In reply to:</strong> <a href="5747.php">Lee Amy: "[OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5763.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Reply:</strong> <a href="5763.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Amy,
<br>
<p>On 16:10 Thu 29 May     , Lee Amy wrote:
<br>
<span class="quotelev1">&gt; MicroTar parallel version was terminated after 463 minutes with following
</span><br>
<span class="quotelev1">&gt; error messages:
</span><br>
<span class="quotelev1">&gt; ================================================
</span><br>
<span class="quotelev1">&gt; [gnode5:31982] [ 0] /lib64/tls/libpthread.so.0 [0x345460c430]
</span><br>
<span class="quotelev1">&gt; [gnode5:31982] [ 1] microtar(LocateNuclei+0x137) [0x403037]
</span><br>
<span class="quotelev1">&gt; [gnode5:31982] [ 2] microtar(main+0x4ac) [0x40431c]
</span><br>
<span class="quotelev1">&gt; [gnode5:31982] [ 3] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x3453b1c3fb]
</span><br>
<span class="quotelev1">&gt; [gnode5:31982] [ 4] microtar [0x402e6a]
</span><br>
<span class="quotelev1">&gt; [gnode5:31982] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 18710 on node gnode1 exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 19 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; ================================================
</span><br>
<p>if I'm not mistaken, signal 15 is SIGTERM, which is sent to processes
<br>
to terminate them. To me this sounds like your application is
<br>
terminated from an external instance, maybe because your job exceeded
<br>
the wall clock time limit of your scheduling system. Does the job
<br>
repeatedly fail at the same time? Do shorter jobs finish successfully?
<br>
<p>Just my 0.02 Euros (-8
<br>
<p>Cheers
<br>
-Andreas
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5750/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5751.php">Jim Kusznir: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Previous message:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>In reply to:</strong> <a href="5747.php">Lee Amy: "[OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5763.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Reply:</strong> <a href="5763.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
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
