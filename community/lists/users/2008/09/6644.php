<?
$subject_val = "[OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 21:37:54 2008" -->
<!-- isoreceived="20080922013754" -->
<!-- sent="Sun, 21 Sep 2008 18:37:50 -0700 (PDT)" -->
<!-- isosent="20080922013750" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="[OMPI users] conflict among differenv MPIs" -->
<!-- id="959060.22087.qm_at_web34801.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] conflict among differenv MPIs<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-21 21:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6643.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have both openmpi and MPICH on my cluster, the problem is that mpi.h of MPICH is in /usr/local/include and I dont have permission to rename or remove it from there. In my source code I am including the mpi.h of openmpi and this works fine, but then mpi.h itself includes mpicxx.h which it again includes openmpi's mpi.h and this is my problem becase the system goes and takes the mpi.h file of MPICH which is in /usr/local/include and thus i get errors segfaults! I am using mpicc wrapper to compile my code and i think my problem is due to having other mpi.h files. Am I right?? What should I do to make /usr/local/include in-accesible from my code??? Please help me!
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6643.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
