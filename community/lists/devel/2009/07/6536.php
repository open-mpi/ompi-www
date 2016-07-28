<?
$subject_val = "[OMPI devel] Allgather failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 21:07:09 2009" -->
<!-- isoreceived="20090729010709" -->
<!-- sent="Tue, 28 Jul 2009 19:06:54 -0600" -->
<!-- isosent="20090729010654" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Allgather failures?" -->
<!-- id="E33BFBCC-46A8-4D22-BCF8-C930C61BD2DF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Allgather failures?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 21:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6537.php">Jeff Squyres: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>Previous message:</strong> <a href="6535.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6537.php">Jeff Squyres: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>Reply:</strong> <a href="6537.php">Jeff Squyres: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>Reply:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I was reviewing the trunk MTT results tonight and found a ton of  
<br>
failures in the Intel test suite on IU's odin cluster. That cluster - 
<br>
usually- runs pretty clean, so I took a closer look.
<br>
<p>What I found was that the errors were all typified by the following:
<br>
<p>&nbsp;&nbsp;MPITEST_INFO (         0): Starting test MPI_Allgather()
<br>
[odin001:31038] *** Process received signal ***
<br>
[odin001:31038] Signal: Floating point exception (8)
<br>
[odin001:31038] Signal code: Integer divide-by-zero (1)
<br>
[odin001:31038] Failing at address: 0x804c8c9
<br>
[odin001:31039] *** Process received signal ***
<br>
[odin001:31039] Signal: Floating point exception (8)
<br>
[odin001:31039] Signal code: Integer divide-by-zero (1)
<br>
[odin001:31039] Failing at address: 0x804c8c9
<br>
[odin001:31040] *** Process received signal ***
<br>
[odin001:31040] Signal: Floating point exception (8)
<br>
[odin001:31040] Signal code: Integer divide-by-zero (1)
<br>
[odin001:31040] Failing at address: 0x804c8c9
<br>
[odin001:31038] [ 0] [0xffffe600]
<br>
[odin001:31038] [ 1] src/MPI_Allgather_f(MAIN__+0x2db) [0x804b30f]
<br>
[odin001:31038] [ 2] src/MPI_Allgather_f(main+0x27) [0x805aa57]
<br>
[odin001:31038] [ 3] /lib/libc.so.6(__libc_start_main+0xdc) [0xf7c32dec]
<br>
[odin001:31038] [ 4] src/MPI_Allgather_f [0x804af81]
<br>
[odin001:31038] *** End of error message ***
<br>
<p><p>In other words, a divide-by-zero floating point exception on a  
<br>
collective test.
<br>
<p>Any ideas what might be causing this?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6537.php">Jeff Squyres: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>Previous message:</strong> <a href="6535.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6537.php">Jeff Squyres: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>Reply:</strong> <a href="6537.php">Jeff Squyres: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>Reply:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
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
