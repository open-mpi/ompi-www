<?
$subject_val = "[OMPI users] Open MPI fails to open CUDA libraries on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 21 21:12:21 2016" -->
<!-- isoreceived="20160222021221" -->
<!-- sent="Sun, 21 Feb 2016 18:12:18 -0800" -->
<!-- isosent="20160222021218" -->
<!-- name="Tyler Benster" -->
<!-- email="benster_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI fails to open CUDA libraries on OS X" -->
<!-- id="etPan.56ca6e83.81f7db9.16cc_at_Tylers-MBP.T-mobile.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI fails to open CUDA libraries on OS X<br>
<strong>From:</strong> Tyler Benster (<em>benster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-21 21:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>Previous message:</strong> <a href="28561.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>Reply:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe Open MPI is looking for a linux binary (.so) when it should look for a Mach-O (.dylib) on OS X.
<br>
<p>Steps to reproduce:
<br>
<p>build Open MPI with CUDA-aware support on OS X (&#226;&#128;&#152;./configure &#226;&#128;&#148;with-cuda&#226;&#128;&#153;)
<br>
run job that supports CUDA libraries
<br>
The following error is generated:
<br>
The library attempted to open the following supporting CUDA libraries, but each of them failed. CUDA-aware support is disabled. dlopen(libcuda.so.1, 9): image not found dlopen(/usr/lib64/libcuda.so.1, 9): image not found If you are not interested in CUDA-aware support, then run with &#226;&#128;&#147;mca mpi_cuda_support 0 to suppress this message. If you are interested in CUDA-aware support, then try setting LD_LIBRARY_PATH to the location of libcuda.so.1 to get passed this issue.
<br>
I do have libcuda.dylib in my path.
<br>
<p>Any help is much appreciated!
<br>
<p><p><p>&#194;&#160;
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28562/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>Previous message:</strong> <a href="28561.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>Reply:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
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
