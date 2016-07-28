<?
$subject_val = "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 19:42:54 2011" -->
<!-- isoreceived="20110609234254" -->
<!-- sent="Fri, 10 Jun 2011 01:42:52 +0200" -->
<!-- isosent="20110609234252" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008" -->
<!-- id="4DF15A7C.9040506_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CCC13BC82DE1884E80B95641984EFFA71A312DD5_at_ex2a.awr.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 19:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16700.php">AMARNATH, Balachandar: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16698.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16694.php">Alan Nichols: "[OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16702.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Reply:</strong> <a href="16702.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alan,
<br>
<p>It looks like a problem of using a wrong generator in CMake GUI. I 
<br>
double tested a fresh new downloaded 1.4.3 on my win7 machine with 
<br>
VS2010, everything worked well.
<br>
<p>Please check:
<br>
1.  a proper CMake generator is used.
<br>
2.  the CMAKE_BUILD_TYPE in CMake GUI and the build type in VS are both 
<br>
Release
<br>
<p>If the error still happens, please provide me the file name and  line 
<br>
number where triggers the error when compiling it.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-06-07 5:37 PM, Alan Nichols wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently trying to build OpenMPI v. 1.4.3 from source, in 
</span><br>
<span class="quotelev1">&gt; VS2008.  Platform is Win7, SP1 installed ( I realize that this is 
</span><br>
<span class="quotelev1">&gt; possibly not an ideal approach as v. 1.5.3 has installers for Windows 
</span><br>
<span class="quotelev1">&gt; binaries.  However for compatibility with other programs I need to use 
</span><br>
<span class="quotelev1">&gt; v. 1.4.3 if at all possible;  also as I have many other libraries 
</span><br>
<span class="quotelev1">&gt; build under VS2008, I need to use the VS2008 compiler if at all possible).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following the README.WINDOWS file I found, I used CMake to build a 
</span><br>
<span class="quotelev1">&gt; Windows .sln file.  I accepted the default CMake settings, with the 
</span><br>
<span class="quotelev1">&gt; exception that I only created a Release build of OpenMPI.  Upon my 
</span><br>
<span class="quotelev1">&gt; first attempt to build the solution, I got an error about a missing 
</span><br>
<span class="quotelev1">&gt; file stdint.h.  I was able to fix this by including the stdint.h from 
</span><br>
<span class="quotelev1">&gt; VS2010.  However I now get new errors referencing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __attribute__((__always_inline__))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __asm____volatile__(&quot;&quot;: : :&quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These look to me like linux-specific problems -- is it even possible 
</span><br>
<span class="quotelev1">&gt; to do what I'm attempting, or are the code bases and compiler 
</span><br>
<span class="quotelev1">&gt; fundamentally at odds here?  If it is possible can you explain where 
</span><br>
<span class="quotelev1">&gt; my error lies?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alan Nichols
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16700.php">AMARNATH, Balachandar: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16698.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16694.php">Alan Nichols: "[OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16702.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Reply:</strong> <a href="16702.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
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
