<?
$subject_val = "[OMPI users] a single build of Open MPI that can be used with multiple GCC versions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 12:58:54 2016" -->
<!-- isoreceived="20160210175854" -->
<!-- sent="Wed, 10 Feb 2016 10:58:52 -0700" -->
<!-- isosent="20160210175852" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="[OMPI users] a single build of Open MPI that can be used with multiple GCC versions" -->
<!-- id="56BB7A5C.5060200_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] a single build of Open MPI that can be used with multiple GCC versions<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 12:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28499.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28497.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28500.php">Douglas L Reeder: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>Reply:</strong> <a href="28500.php">Douglas L Reeder: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>Reply:</strong> <a href="28501.php">David Shrader: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Is it possible to use a single build of Open MPI against multiple 
<br>
versions of GCC if the versions of GCC are from the same release series? 
<br>
I was under the assumption that as long as a binary-compatible compiler 
<br>
was used, it was possible to &quot;swap out&quot; the compiler from underneath 
<br>
Open MPI.
<br>
<p>That is the general question I have, but here is the specific scenario 
<br>
that prompted it:
<br>
<p>&nbsp;&nbsp;* built Open MPI 1.10.1 against GCC 5.2.0 with a directory name of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.10.1-gcc-5
<br>
&nbsp;&nbsp;* installed GCC 5.3.0
<br>
&nbsp;&nbsp;* removed GCC 5.2.0
<br>
<p>I now have users who are getting errors like the following when using 
<br>
mpicxx:
<br>
<p>/bin/grep: 
<br>
/usr/projects/hpcsoft/toss2/common/gcc/5.2.0/lib/../lib64/libstdc++.la: 
<br>
No such file or directory
<br>
<p>I can see several references to my previous GCC 5.2.0 installation in 
<br>
the &lt;install dir&gt;/lib/*.la files, including a reference to 
<br>
/usr/projects/hpcsoft/toss2/common/gcc/5.2.0/lib/../lib64/libstdc++.la.
<br>
<p>This is all disconcerting as users of GCC 5.3.0 were using 5.3.0's 
<br>
binaries but were getting some 5.2.0 library configs before I removed 
<br>
5.2.0, but no one knew it.
<br>
<p>If it should be possible to use a single build of Open MPI with multiple 
<br>
binary-compatible compilers, is there a way to fix my above situation or 
<br>
prevent it from happening at build time?
<br>
<p>Thanks,
<br>
David
<br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28499.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28497.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28500.php">Douglas L Reeder: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>Reply:</strong> <a href="28500.php">Douglas L Reeder: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>Reply:</strong> <a href="28501.php">David Shrader: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
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
