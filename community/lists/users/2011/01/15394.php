<?
$subject_val = "[OMPI users] A problem with running a 32-bit program on a 64-bit machine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 14:22:48 2011" -->
<!-- isoreceived="20110121192248" -->
<!-- sent="Fri, 21 Jan 2011 19:22:39 +0000" -->
<!-- isosent="20110121192239" -->
<!-- name="Avinash Malik" -->
<!-- email="amalik_at_[hidden]" -->
<!-- subject="[OMPI users] A problem with running a 32-bit program on a 64-bit machine" -->
<!-- id="m21v46awow.fsf_at_scss.tcd.ie" -->
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
<strong>Subject:</strong> [OMPI users] A problem with running a 32-bit program on a 64-bit machine<br>
<strong>From:</strong> Avinash Malik (<em>amalik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 14:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15395.php">Gus Correa: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15393.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Reply:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have compiled openmpi-1.5.1 as a 32-bit binary on a 64-bit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;architecture. I have a problem using MPI_Comm_spawn and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn_multiple, when MPI_Info is used as a non NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(MPI_INFO_NULL) parameter. I get a segmentation fault. I have
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the exact same code running fine on a 32-bit machine. I cannot
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use the 64-bit openmpi due to problems with other software,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which uses openmpi, but can only be compiled in the 32-bit mode.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am attaching all the information, in a .tgz file. The .tgz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file consists of: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1) The c-code for a small example two files parent.c and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;child.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2) The compile_command that I ran on a 64-bit machine.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(3) The run command to run the system
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiling openmpi-1.5.1.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(4) ompi_info_all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(5) The error that I get, it's a segmentation fault.
<br>
<p>Regards,
<br>
<p><p>
<br>
<br><p>
<p><p><pre>
-- 
Avinash Malik
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15394/information.tgz">information.tgz</a>
</ul>
<!-- attachment="information.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15395.php">Gus Correa: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15393.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Reply:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
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
