<?
$subject_val = "[OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 10:54:25 2015" -->
<!-- isoreceived="20150429145425" -->
<!-- sent="Wed, 29 Apr 2015 10:54:18 -0400" -->
<!-- isosent="20150429145418" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1" -->
<!-- id="20150429145418.GU22930_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-29 10:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>Previous message:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>Reply:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build/package OpenMPI 1.8.4 with CUDA support enabled on Linux
<br>
x86_64 so that the compiled software can be downloaded/installed as one of the
<br>
dependencies of a project I'm working on with no further user configuration.  I
<br>
noticed that MPI programs built with the above will try to access
<br>
/usr/lib/i386-linux-gnu/libcuda.so.1 (and obviously complain about it being the
<br>
wrong ELF class) if /usr/lib/i386-linux-gnu precedes /usr/lib/x86_64-linux-gnu
<br>
in one's ld.so cache. While one can get around this by modifying one's ld.so
<br>
configuration (or tweaking LD_LIBRARY_PATH), is there some way to compile
<br>
OpenMPI such that programs built with it (on x86_64) look for the full soname of
<br>
libcuda.so.1 - i.e., /usr/lib/x86_64-linux-gnu/libcuda.so.1 - rather than fall
<br>
back on ld.so? I tried setting the rpath of MPI programs built with the above
<br>
(by modifying the OpenMPI compiler wrappers to include -Wl,-rpath
<br>
-Wl,/usr/lib/x86_64-linux-gnu), but that doesn't seem to help.
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>Previous message:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>Reply:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
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
