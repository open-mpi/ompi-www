<?
$subject_val = "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 22 00:19:27 2016" -->
<!-- isoreceived="20160222051927" -->
<!-- sent="Sun, 21 Feb 2016 21:19:16 -0800" -->
<!-- isosent="20160222051916" -->
<!-- name="Tyler Benster" -->
<!-- email="benster_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X" -->
<!-- id="etPan.56ca9a54.4a85cfb.16cc_at_Tylers-MBP.T-mobile.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56CA723C.6070606_at_rist.or.jp" -->
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
<strong>From:</strong> Tyler Benster (<em>benster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-22 00:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28565.php">Mark Potter: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>In reply to:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using v1.10.&#194;&#160;Thanks for the patch and timely response! Problem fixed.
<br>
<p>&#194;&#160;
<br>
<p>On February 21, 2016 at 6:29:30 PM, Gilles Gouaillardet (gilles_at_[hidden]) wrote:
<br>
<p>Tyler,
<br>
<p>can you please confirm you are using ompi v1.8 or v1.10 ?
<br>
<p>this should be fixed in v2.x or master, and it seems a backport was missing.
<br>
<p>can you please give a try to this patch and check whether it fixes your problem ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On 2/22/2016 11:12 AM, Tyler Benster wrote:
<br>
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
<p>I do have libcuda.dylib in my path.
<br>
<p>Any help is much appreciated!
<br>
<p><p><p>&#194;&#160;
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28562.php">http://www.open-mpi.org/community/lists/users/2016/02/28562.php</a>
<br>
<p>_______________________________________________  
<br>
users mailing list  
<br>
users_at_[hidden]  
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>  
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28563.php">http://www.open-mpi.org/community/lists/users/2016/02/28563.php</a>
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28565.php">Mark Potter: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<li><strong>In reply to:</strong> <a href="28563.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<!-- nextthread="start" -->
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
