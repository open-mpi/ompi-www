<?
$subject_val = "Re: [OMPI users] Where to start with MPI on OSX?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 05:32:22 2012" -->
<!-- isoreceived="20121109103222" -->
<!-- sent="Fri, 9 Nov 2012 11:32:11 +0100" -->
<!-- isosent="20121109103211" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where to start with MPI on OSX?" -->
<!-- id="3F473E41-E907-42D2-8488-5B6DB9701C10_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0ED62E64-EC37-473B-B27C-124AFC806004_at_me.com" -->
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
<strong>Date:</strong> 2012-11-09 05:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20685.php">Jeff Squyres: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20683.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20683.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20697.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20697.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 09.11.2012 um 08:47 schrieb shiny knight:
<br>
<p><span class="quotelev1">&gt; Thanks for your replies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use Snow Leopard, running ompi_info returns an error (command not found).
</span><br>
<p>I'm on this version too. Which version of Xcode do you use - &quot;Xcode 3.2.6 and iOS SDK 4.3&quot;? Attached is a small file which I can compile with the mentioned command.
<br>
<p>$ mpicc demo.m -o demo -O0 -ObjC -framework Foundation -framework CoreLocation
<br>
$ mpiexec -np 2 ./demo
<br>
<p><p><span class="quotelev1">&gt; I was looking for installers and I remember that I have installed MPICH2 if I recall correctly (I didn't knew about openMPI until today), so I have mpicc installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I remove MPICH2 and install OpenMPI?
</span><br>
<p>Yes.
<br>
<p>Different MPI implementations have to be installed in different locations and the paths set accordingly. Also note, that an application compiled with Open MPI can't be started with MPICH2 `mpiexec` and vice versa. Well, yes - it could be started but it will only run in serial in all instances like you can start any application with `mpiexec`. As `mpicc` is only a wrapper to provide additonal paths arguments to -I/-L/-l, all usual options apply. In principle MPI applications can also be compiled by a plain gcc, but then you have to take care of all the necessary libraries on your own.
<br>
<p>-- Reuti
<br>
<p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20684/demo.m">demo.m</a>
</ul>
<!-- attachment="demo.m" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20685.php">Jeff Squyres: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20683.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20683.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20697.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20697.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
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
