<?
$subject_val = "[OMPI users] Building OpenMPI v. 1.4.3 in VS2008";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 11:37:28 2011" -->
<!-- isoreceived="20110607153728" -->
<!-- sent="Tue, 7 Jun 2011 15:37:22 +0000" -->
<!-- isosent="20110607153722" -->
<!-- name="Alan Nichols" -->
<!-- email="anichols_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI v. 1.4.3 in VS2008" -->
<!-- id="CCC13BC82DE1884E80B95641984EFFA71A312DD5_at_ex2a.awr.local" -->
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
<strong>Subject:</strong> [OMPI users] Building OpenMPI v. 1.4.3 in VS2008<br>
<strong>From:</strong> Alan Nichols (<em>anichols_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 11:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16695.php">vaibhav dutt: "[OMPI users] HWLOC problem"</a>
<li><strong>Previous message:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Reply:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm currently trying to build OpenMPI v. 1.4.3 from source, in VS2008.  Platform is Win7, SP1 installed ( I realize that this is possibly not an ideal approach as v. 1.5.3 has installers for Windows binaries.  However for compatibility with other programs I need to use v. 1.4.3 if at all possible;  also as I have many other libraries build under VS2008, I need to use the VS2008 compiler if at all possible).
<br>
<p>Following the README.WINDOWS file I found, I used CMake to build a Windows .sln file.  I accepted the default CMake settings, with the exception that I only created a Release build of OpenMPI.  Upon my first attempt to build the solution, I got an error about a missing file stdint.h.  I was able to fix this by including the stdint.h from VS2010.  However I now get new errors referencing
<br>
<p>__attribute__((__always_inline__))
<br>
<p>__asm__ __volatile__(&quot;&quot;: : :&quot;memory&quot;)
<br>
<p>These look to me like linux-specific problems -- is it even possible to do what I'm attempting, or are the code bases and compiler fundamentally at odds here?  If it is possible can you explain where my error lies?
<br>
<p>Thanks for your help,
<br>
<p>Alan Nichols
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16695.php">vaibhav dutt: "[OMPI users] HWLOC problem"</a>
<li><strong>Previous message:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Reply:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
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
