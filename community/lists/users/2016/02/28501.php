<?
$subject_val = "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 17:08:02 2016" -->
<!-- isoreceived="20160210220802" -->
<!-- sent="Wed, 10 Feb 2016 15:08:01 -0700" -->
<!-- isosent="20160210220801" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions" -->
<!-- id="56BBB4C1.4020704_at_lanl.gov" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 17:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28502.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28500.php">Douglas L Reeder: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>In reply to:</strong> <a href="28498.php">David Shrader: "[OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A bit of an update:
<br>
<p>I was mistaken when I said users were reporting 1.10.1 was throwing an 
<br>
error. The error occurs for 1.6.5 (which I still have to keep on my 
<br>
production systems). Users report that they do not see the error with 
<br>
1.10.1.
<br>
<p>That being said, I do see references to my GCC 5.2.0 installation in the 
<br>
&lt;install dir&gt;/lib/*.la 1.10.1 files and would like to ask if I need to 
<br>
worry at all? It seems the way files were named and organized in 
<br>
&lt;install dir&gt;/lib changed in 1.7 which may be why 1.10.1 is working.
<br>
<p>Thank you very much for your time,
<br>
David
<br>
<p>On 02/10/2016 10:58 AM, David Shrader wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to use a single build of Open MPI against multiple 
</span><br>
<span class="quotelev1">&gt; versions of GCC if the versions of GCC are from the same release 
</span><br>
<span class="quotelev1">&gt; series? I was under the assumption that as long as a binary-compatible 
</span><br>
<span class="quotelev1">&gt; compiler was used, it was possible to &quot;swap out&quot; the compiler from 
</span><br>
<span class="quotelev1">&gt; underneath Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is the general question I have, but here is the specific scenario 
</span><br>
<span class="quotelev1">&gt; that prompted it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * built Open MPI 1.10.1 against GCC 5.2.0 with a directory name of
</span><br>
<span class="quotelev1">&gt;     openmpi-1.10.1-gcc-5
</span><br>
<span class="quotelev1">&gt;   * installed GCC 5.3.0
</span><br>
<span class="quotelev1">&gt;   * removed GCC 5.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now have users who are getting errors like the following when using 
</span><br>
<span class="quotelev1">&gt; mpicxx:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/grep: 
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpcsoft/toss2/common/gcc/5.2.0/lib/../lib64/libstdc++.la: No 
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see several references to my previous GCC 5.2.0 installation in 
</span><br>
<span class="quotelev1">&gt; the &lt;install dir&gt;/lib/*.la files, including a reference to 
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpcsoft/toss2/common/gcc/5.2.0/lib/../lib64/libstdc++.la.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is all disconcerting as users of GCC 5.3.0 were using 5.3.0's 
</span><br>
<span class="quotelev1">&gt; binaries but were getting some 5.2.0 library configs before I removed 
</span><br>
<span class="quotelev1">&gt; 5.2.0, but no one knew it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it should be possible to use a single build of Open MPI with 
</span><br>
<span class="quotelev1">&gt; multiple binary-compatible compilers, is there a way to fix my above 
</span><br>
<span class="quotelev1">&gt; situation or prevent it from happening at build time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28501/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28502.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28500.php">Douglas L Reeder: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>In reply to:</strong> <a href="28498.php">David Shrader: "[OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
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
