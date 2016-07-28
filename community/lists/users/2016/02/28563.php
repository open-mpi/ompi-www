<?
$subject_val = "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 21 21:28:16 2016" -->
<!-- isoreceived="20160222022816" -->
<!-- sent="Mon, 22 Feb 2016 11:28:12 +0900" -->
<!-- isosent="20160222022812" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X" -->
<!-- id="56CA723C.6070606_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="etPan.56ca6e83.81f7db9.16cc_at_Tylers-MBP.T-mobile.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-21 21:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28564.php">Tyler Benster: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>Previous message:</strong> <a href="28562.php">Tyler Benster: "[OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>In reply to:</strong> <a href="28562.php">Tyler Benster: "[OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28564.php">Tyler Benster: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>Reply:</strong> <a href="28564.php">Tyler Benster: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tyler,
<br>
<p>can you please confirm you are using ompi v1.8 or v1.10 ?
<br>
<p>this should be fixed in v2.x or master, and it seems a backport was missing.
<br>
<p>can you please give a try to this patch and check whether it fixes your 
<br>
problem ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On 2/22/2016 11:12 AM, Tyler Benster wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe Open MPI is looking for a linux binary (.so) when it should 
</span><br>
<span class="quotelev1">&gt; look for a Mach-O (.dylib) on OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steps to reproduce:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. build Open MPI with CUDA-aware support on OS X (&#145;./configure
</span><br>
<span class="quotelev1">&gt;     &#151;with-cuda&#146;)
</span><br>
<span class="quotelev1">&gt;  2. run job that supports CUDA libraries
</span><br>
<span class="quotelev1">&gt;  3. The following error is generated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The library attempted to open the following supporting CUDA
</span><br>
<span class="quotelev1">&gt;     libraries, but each of them failed. CUDA-aware support is
</span><br>
<span class="quotelev1">&gt;     disabled. dlopen(libcuda.so.1, 9): image not found
</span><br>
<span class="quotelev1">&gt;     dlopen(/usr/lib64/libcuda.so.1, 9): image not found If you are not
</span><br>
<span class="quotelev1">&gt;     interested in CUDA-aware support, then run with &#150;mca
</span><br>
<span class="quotelev1">&gt;     mpi_cuda_support 0 to suppress this message. If you are interested
</span><br>
<span class="quotelev1">&gt;     in CUDA-aware support, then try setting LD_LIBRARY_PATH to the
</span><br>
<span class="quotelev1">&gt;     location of libcuda.so.1 to get passed this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do have libcuda.dylib in my path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is much appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28562.php">http://www.open-mpi.org/community/lists/users/2016/02/28562.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28563/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28563/libcuda_dylib.patch">libcuda_dylib.patch</a>
</ul>
<!-- attachment="libcuda_dylib.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28564.php">Tyler Benster: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>Previous message:</strong> <a href="28562.php">Tyler Benster: "[OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>In reply to:</strong> <a href="28562.php">Tyler Benster: "[OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28564.php">Tyler Benster: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>Reply:</strong> <a href="28564.php">Tyler Benster: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
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
