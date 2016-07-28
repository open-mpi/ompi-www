<?
$subject_val = "[OMPI users] mpirun hangs when used on more than 2 CPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 05:56:04 2012" -->
<!-- isoreceived="20120116105604" -->
<!-- sent="Mon, 16 Jan 2012 10:55:19 +0000" -->
<!-- isosent="20120116105519" -->
<!-- name="Theiner, Andre" -->
<!-- email="andre.theiner_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs when used on more than 2 CPUs" -->
<!-- id="088B9CB56632924D9EAE7A408BB76580845A95D37D_at_GVW1102EXC.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> [OMPI users] mpirun hangs when used on more than 2 CPUs<br>
<strong>From:</strong> Theiner, Andre (<em>andre.theiner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 05:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Previous message:</strong> <a href="18166.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
may I have your help on a strange problem?
<br>
High performance computing is new to me and I have not much idea about OpenMPI and OpenFoam (OF) which uses the &quot;mpirun&quot; command.
<br>
I have to support the OF application in my company and have been trying to find the problem since about 1 week.
<br>
The versions are openmpi-1.3.2 and OF 2.0.1 which are running on openSUSE 11.3 x86_64.
<br>
The computer is brand new, has 96 GB RAM, 12 CPUs and was installed with Linux some weeks ago.
<br>
I installed OF 2.0.1 according to the vendors instructions at <a href="http://www.openfoam.org/archive/2.0.1/download/suse.php">http://www.openfoam.org/archive/2.0.1/download/suse.php</a>.
<br>
<p>Here the problem:
<br>
The experienced user tested the OF with a test case out of one of the vendors tutorials.
<br>
He only used the computing power of his local machine &quot;caelde04&quot; , no other computers were accessed by mpirun.
<br>
<p>He found no problem when testing in single &quot;processor mode&quot; but in &quot;multiprocessor mode&quot; his calculations hangs when he distributes
<br>
the calculations to more than 2 CPUs. The OF vendor thinks this is an OpenMPI problem somehow and that is why I am trying to get
<br>
help from this forum here.
<br>
I attached 2 files, one is the &quot;decomposeParDict&quot; which resides in the &quot;system&quot; subdirectory of his test case and the other is the log file
<br>
from the &quot;decomposePar&quot; command and the mpirun command &quot;mpirun -np 9 interFoam -parallel&quot;.
<br>
Do you have an idea where the problem is or how I can narrow it down?
<br>
Thanks much for any help.
<br>
<p>Andre
<br>
<p><p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18167/mpirun_logfile.txt">mpirun_logfile.txt</a>
</ul>
<!-- attachment="mpirun_logfile.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18167/decomposeParDict.txt">decomposeParDict.txt</a>
</ul>
<!-- attachment="decomposeParDict.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Previous message:</strong> <a href="18166.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
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
