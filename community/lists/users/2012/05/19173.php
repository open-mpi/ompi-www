<?
$subject_val = "Re: [OMPI users] Segmentation fault on master task";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 10:12:35 2012" -->
<!-- isoreceived="20120503141235" -->
<!-- sent="Thu, 03 May 2012 16:14:28 +0200" -->
<!-- isosent="20120503141428" -->
<!-- name="Eduardo Morras" -->
<!-- email="nec556_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault on master task" -->
<!-- id="4EFDA80601FD901D_at_" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFAE9jikdWQ8Y-oZV8PQjXaJZ+pH8ET4jFBbkprYwaVwGpJgWw_at_mail.g mail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault on master task<br>
<strong>From:</strong> Eduardo Morras (<em>nec556_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 10:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19174.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19172.php">Bj&#246;rn Adlerborn: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Maybe in reply to:</strong> <a href="19164.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 12:51 03/05/2012, you wrote:
<br>
<span class="quotelev1">&gt;Thanks for the reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When I modify the code it still fails with segmentation error.
</span><br>
<p>You run it on different servers or runs in the same server?
<br>
<p>If you are testing on one server, perhaps your gpu is out of memory. 
<br>
Check your cudaMalloc calls, perhaps memory isn't initialized and the 
<br>
cudaMemCopy fails. You can use something like this:
<br>
<p>if (cudaSuccess != cudaMalloc((void **) &amp;gpudata, sizeof(int) * nelements))
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error allocating memory on gpu %d &quot;, __LINE__);
<br>
{
<br>
<p>You need to include cutil.h, that i see you already has...
<br>
<p><p><span class="quotelev1">&gt;Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ROHAN DESHPANDE
</span><br>
<p>HTH
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19174.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19172.php">Bj&#246;rn Adlerborn: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Maybe in reply to:</strong> <a href="19164.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
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
