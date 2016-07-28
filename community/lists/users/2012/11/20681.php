<?
$subject_val = "Re: [OMPI users] Where to start with MPI on OSX?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 18:08:46 2012" -->
<!-- isoreceived="20121108230846" -->
<!-- sent="Fri, 9 Nov 2012 00:08:37 +0100" -->
<!-- isosent="20121108230837" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where to start with MPI on OSX?" -->
<!-- id="1B5688F9-9927-495A-ACA1-C4D6FE6EA1A8_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DADD5FBF-35A9-4A0D-AE41-A7ED1069B621_at_me.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Where to start with MPI on OSX?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 18:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20680.php">shiny knight: "[OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20680.php">shiny knight: "[OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 08.11.2012 um 23:25 schrieb shiny knight:
<br>
<p><span class="quotelev1">&gt; I've discovered MPI recently, and I would like to start to write some applications to use it's potential.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the problem is that I use a mac, and I see no tutorials or books that are targeting OSX, so I was wondering if you could give me some pointers about where to find info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use Xcode; from what I can understand, MPI uses C, so I need to use a console application template for Xcode. I do not see any wrapper for Objective-C, so I assume that C is the only language used for MPI?
</span><br>
<p>There is also C++ and Fortran support, while the C++ interface is deprecated as the C one will do here too.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; Thanks in advance for any info that you can give me; I really like the idea to use MPI for scientific applications, but I am totally new to this (I have experience in C++ on Windows, and a bit of Objective-C on mac). I would love to see tutorials that explains how to do simple apps on mac using MPI, but if they exist, they are very well hidden :)
</span><br>
<p>With some versions of OS X it's installed already - well an older version. Can you issue:
<br>
<p>$ ompi_info
<br>
<p>on the command line? As MPI is a standard which is not targeting any specific platform, most of the tutorials should apply here too, as long as they don't access any OS specific functions.
<br>
<p>For an Objective-C application:
<br>
<p>$ mpicc -ObjC -framework Foundation -framework CoreLocation ....
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20680.php">shiny knight: "[OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20680.php">shiny knight: "[OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
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
