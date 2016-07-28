<?
$subject_val = "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 17:25:53 2009" -->
<!-- isoreceived="20091124222553" -->
<!-- sent="Tue, 24 Nov 2009 23:26:05 +0100" -->
<!-- isosent="20091124222605" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)" -->
<!-- id="9A036B3B-0A88-40A5-9A9A-D2548A51D139_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B0C5A21.5050806_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 17:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11275.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>In reply to:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Reply:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 24.11.2009 um 23:11 schrieb Scott Beardsley:
<br>
<p><span class="quotelev2">&gt;&gt; pgcc v9 has problem to compile the above test program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not for me (pgcc v9.0-3):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat c.c
</span><br>
<span class="quotelev1">&gt; #include&lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main ()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; struct foo {int a, b;}; size_t offset = offsetof(struct foo, b);
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; $ pgcc -V
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgcc 9.0-3 64-bit target on x86-64 Linux -tp gh-64
</span><br>
<span class="quotelev1">&gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; $ pgcc c.c
</span><br>
<span class="quotelev1">&gt; $ echo $?
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PGC/x86-64 Linux 9.0-4: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahh it looks like you have a slightly newer version of pgcc than I do.
</span><br>
<span class="quotelev1">&gt; That might explain the difference.
</span><br>
<p>For me also 9.0-4 works with the above program.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11275.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>In reply to:</strong> <a href="11273.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Reply:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
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
