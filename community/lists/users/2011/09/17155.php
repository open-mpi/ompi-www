<?
$subject_val = "[OMPI users] error on malloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 03:49:18 2011" -->
<!-- isoreceived="20110905074918" -->
<!-- sent="Mon, 5 Sep 2011 03:48:53 -0400" -->
<!-- isosent="20110905074853" -->
<!-- name="Jai Dayal" -->
<!-- email="dayalsoap_at_[hidden]" -->
<!-- subject="[OMPI users] error on malloc" -->
<!-- id="CAMJ-YiTBqK4mo1jb6ugGvdbmLjO-HK7UnTzn8_8S=aQNxVUdhw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] error on malloc<br>
<strong>From:</strong> Jai Dayal (<em>dayalsoap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 03:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17156.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17154.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17218.php">Jeff Squyres: "Re: [OMPI users] error on malloc"</a>
<li><strong>Reply:</strong> <a href="17218.php">Jeff Squyres: "Re: [OMPI users] error on malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
&nbsp;&nbsp;I've been beating my head on this for quite a while now.  I don't have
<br>
this problem when running with 1,2, or 3 procs, however, once I get to 4 or
<br>
beyond, I have a problem.
<br>
<p>When I call malloc, I get this error:
<br>
<p>txserver:11055 terminated with signal 11 at PC=2b46886bc18a
<br>
SP=7fff20f51030.  Backtrace:
<br>
/apps/x86_64/mpi/openmpi/gcc-4.3.4/openmpi-1.4.3_oobpr/lib/libopen-pal.so.0(
<br>
*opal_memory_ptmalloc2_int_malloc+0x54a*)[0x2b46886bc18a]
<br>
/apps/x86_64/mpi/openmpi/gcc-4.3.4/openmpi-1.4.3_oobpr/lib/libopen-pal.so.0[0x2b46886bd4f3]
<br>
txserver[0x415769]
<br>
txserver[0x40da8c]
<br>
txserver[0x4344bb]
<br>
txserver[0x4351cd]
<br>
txserver[0x40e3d4]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x2b468a5af994]
<br>
txserver(_ZNSt8ios_base4InitD1Ev+0x39)[0x40c889]
<br>
<p>However, only rank 0 calls this function.  Which is strange.  I can just put
<br>
a dummy malloc in there (int * dummy = (int *)malloc(10);) for example, and
<br>
it will still crash.
<br>
<p>Again, this does not happen with n &lt; 4 procs.  The crash happens on rank 0,
<br>
as it's the only rank that calls this code...
<br>
<p>I'm perplexed.
<br>
<p>Thanks a lot,
<br>
J.D.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17156.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17154.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17218.php">Jeff Squyres: "Re: [OMPI users] error on malloc"</a>
<li><strong>Reply:</strong> <a href="17218.php">Jeff Squyres: "Re: [OMPI users] error on malloc"</a>
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
