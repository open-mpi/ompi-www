<?
$subject_val = "Re: [OMPI users] mpicc command not found - Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 13:12:45 2012" -->
<!-- isoreceived="20120329171245" -->
<!-- sent="Thu, 29 Mar 2012 13:12:41 -0400 (EDT)" -->
<!-- isosent="20120329171241" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc command not found - Fedora" -->
<!-- id="alpine.LRH.2.02.1203291307440.31702_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAFAE9jjJ4ZrYJj_p4tv1ZqrbRHqzAKvtesxEG9+JfhxAAv66Bg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc command not found - Fedora<br>
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 13:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18873.php">Linton, Tom: "[OMPI users] Segmentation fault when checkpointing"</a>
<li><strong>Previous message:</strong> <a href="18871.php">Tom Bryan: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 29 Mar 2012 at 7:45pm, Rohan Deshpande wrote
<br>
<p><span class="quotelev1">&gt; I have installed mpi successfully on fedora using *yum install openmpi
</span><br>
<span class="quotelev1">&gt; openmpi-devel openmpi-libs*
</span><br>
<p>What version of Fedora are you using, and on what architecture (i.e. i686 
<br>
or x86_64)?  As far as I can see, the last Fedora distro to use 
<br>
openmpi-libs was Fedora 11, which is rather old and unsupported.
<br>
<p><span class="quotelev1">&gt; I have also added */usr/lib/openmpi/bin* to *PATH *and*
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH*variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I try to complie my program using *mpicc hello.c*
</span><br>
<span class="quotelev1">&gt; or*/usr/lib/openmpi/bin/mpicc hello.c
</span><br>
<span class="quotelev1">&gt; * I get error saying *mpicc: command not found*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; I checked the contents of /user/lib/openmpi/bin and there is no mpicc...
</span><br>
<span class="quotelev1">&gt; here is the screenshot
</span><br>
<p>Current versions of Fedora use the &quot;module&quot; command to load the proper 
<br>
environment for Open MPI.  On a 64bit machine, e.g., one would run
<br>
&quot;module load openmpi-x86_64&quot; to get all the env variables properly set. 
<br>
But I don't know what Fedora version that started with.
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18873.php">Linton, Tom: "[OMPI users] Segmentation fault when checkpointing"</a>
<li><strong>Previous message:</strong> <a href="18871.php">Tom Bryan: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
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
