<?
$subject_val = "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 06:17:42 2010" -->
<!-- isoreceived="20100107111742" -->
<!-- sent="Thu, 07 Jan 2010 12:17:29 +0100" -->
<!-- isosent="20100107111729" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3" -->
<!-- id="1262863049.5752.83.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="201001071158.00948.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 06:17:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11707.php">Dennis Schridde: "[OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Previous message:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>In reply to:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11708.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Reply:</strong> <a href="11708.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-01-07 at 11:57 +0100, Peter Kjellstrom wrote:
<br>
<span class="quotelev1">&gt; On Wednesday 06 January 2010, Tim Miller wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to compile OpenMPI 1.4 with PGI 9.0-3 and am getting the
</span><br>
<span class="quotelev2">&gt; &gt; following error in configure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking for functional offsetof macro... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Your compiler does not support offsetof macro
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Configure: Cannot continue
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have searched around and found that this error occurs because of a
</span><br>
<span class="quotelev2">&gt; &gt; problem in the configure scripts when PGI 10 is used, but I'm using 9.0-3
</span><br>
<span class="quotelev2">&gt; &gt; which should not have the configure script issue. Here is the output of
</span><br>
<span class="quotelev2">&gt; &gt; pgcc -V:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pgcc 9.0-3 64-bit target on x86-64 Linux -tp k8-64e
</span><br>
<span class="quotelev2">&gt; &gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt; &gt; Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure what's wrong here as other people have reported being able to
</span><br>
<span class="quotelev2">&gt; &gt; build OpenMPI with PGI 9. Does anyone have any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe a late enough PGI-9 behaves like PGI-10. You could try the 1.4.1-rc1 
</span><br>
<span class="quotelev1">&gt; which should work with PGI-10 and see if it fixes your problems too.
</span><br>
<p>Our PGI 9.0-3 doesn't have any problems building openmpi 1.3.3 or 1.4
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11707.php">Dennis Schridde: "[OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Previous message:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>In reply to:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11708.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Reply:</strong> <a href="11708.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
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
