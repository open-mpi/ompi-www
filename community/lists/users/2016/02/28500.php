<?
$subject_val = "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 15:59:12 2016" -->
<!-- isoreceived="20160210205912" -->
<!-- sent="Wed, 10 Feb 2016 13:59:05 -0700" -->
<!-- isosent="20160210205905" -->
<!-- name="Douglas L Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions" -->
<!-- id="5F5A6321-A5BA-4E0A-846A-CF2A6DC81FEE_at_centurylink.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56BB7A5C.5060200_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions<br>
<strong>From:</strong> Douglas L Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 15:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28501.php">David Shrader: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>Previous message:</strong> <a href="28499.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>In reply to:</strong> <a href="28498.php">David Shrader: "[OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28501.php">David Shrader: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David,
<br>
<p>I you use modules to mange your PATH and LD_LIBRARY_PATH and  load only the gcc tht you want when you build openmpi and your applications that sould fix it going forward.
<br>
<p>Doug
<br>
<span class="quotelev1">&gt; On Feb 10, 2016, at 10:58 AM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to use a single build of Open MPI against multiple versions of GCC if the versions of GCC are from the same release series? I was under the assumption that as long as a binary-compatible compiler was used, it was possible to &quot;swap out&quot; the compiler from underneath Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is the general question I have, but here is the specific scenario that prompted it:
</span><br>
<span class="quotelev1">&gt; built Open MPI 1.10.1 against GCC 5.2.0 with a directory name of openmpi-1.10.1-gcc-5
</span><br>
<span class="quotelev1">&gt; installed GCC 5.3.0
</span><br>
<span class="quotelev1">&gt; removed GCC 5.2.0
</span><br>
<span class="quotelev1">&gt; I now have users who are getting errors like the following when using mpicxx:
</span><br>
<span class="quotelev1">&gt; /bin/grep: /usr/projects/hpcsoft/toss2/common/gcc/5.2.0/lib/../lib64/libstdc++.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; I can see several references to my previous GCC 5.2.0 installation in the &lt;install dir&gt;/lib/*.la files, including a reference to /usr/projects/hpcsoft/toss2/common/gcc/5.2.0/lib/../lib64/libstdc++.la.
</span><br>
<span class="quotelev1">&gt; This is all disconcerting as users of GCC 5.3.0 were using 5.3.0's binaries but were getting some 5.2.0 library configs before I removed 5.2.0, but no one knew it.
</span><br>
<span class="quotelev1">&gt; If it should be possible to use a single build of Open MPI with multiple binary-compatible compilers, is there a way to fix my above situation or prevent it from happening at build time?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Shrader
</span><br>
<span class="quotelev1">&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28498.php">http://www.open-mpi.org/community/lists/users/2016/02/28498.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28501.php">David Shrader: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>Previous message:</strong> <a href="28499.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>In reply to:</strong> <a href="28498.php">David Shrader: "[OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28501.php">David Shrader: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
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
