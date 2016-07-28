<?
$subject_val = "[OMPI users] mpirun hangs: &quot;hello&quot; test in single machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 10 14:57:43 2013" -->
<!-- isoreceived="20130410185743" -->
<!-- sent="Wed, 10 Apr 2013 20:57:35 +0200" -->
<!-- isosent="20130410185735" -->
<!-- name="Rodrigo G&#243;mez V&#225;zquez" -->
<!-- email="rodrigoggv_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs: &amp;quot;hello&amp;quot; test in single machine" -->
<!-- id="5165B61F.1030101_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine<br>
<strong>From:</strong> Rodrigo G&#243;mez V&#225;zquez (<em>rodrigoggv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-10 14:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21705.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21703.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21705.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Reply:</strong> <a href="21705.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am having troubles with the program in a simulation server.
<br>
The system consists of several processors but all in the same node (more 
<br>
information of the specs. is in the attachments).
<br>
The system is quite new (few months) and a user reported me that it was 
<br>
not possible to run simulations on multiple processors in parallel.
<br>
We are using it for CFD-Simulations with OpenFOAM, which comes along 
<br>
with an own 1.5.3-version of OpenMPI (for more details you can look 
<br>
inside the &quot;ThirdParty software folder&quot; following this link: 
<br>
<a href="http://www.openfoam.org/archive/2.1.1/download/source.php">http://www.openfoam.org/archive/2.1.1/download/source.php</a>). The OS is an 
<br>
Ubuntu 12.04 Server distro (see uname.out in the attachments).
<br>
He tried to start a simulation in parallel using the following command:
<br>
<p>~: mpirun -np 4 &lt;solver-with-its-corresponding-parameters&gt;
<br>
<p>As a result the simulation does not start and there is no error message. 
<br>
It looks like the program is just waiting/looking for something. We can 
<br>
see shortly the 4 processes with their PIDs in the &quot;top&quot; processes list, 
<br>
but only for few tenths of second and with 0% use of CPU and 0.0% use of 
<br>
memory as well. In order to recover the command terminal we have to kill 
<br>
the process.
<br>
<p>The same happens with the &quot;hello&quot; scripts that come along with the 
<br>
OpenMPI's sources:
<br>
<p>:~$mpicc hello_c.c -o hello
<br>
:~$mpirun -np 4 hello
<br>
... and here it hangs again.
<br>
<p>I tried to execute other simpler processes, as recommended to check the 
<br>
installation. Let's see:
<br>
<p>:~$mpirun -np 4 hostname
<br>
simserver
<br>
simserver
<br>
simserver
<br>
simserver
<br>
:~$
<br>
<p>Works, as well as &quot;ompi_info&quot; does.
<br>
<p>Since we use the same OpenFOAM version without problems in several 
<br>
computers over ubuntu-based distros, I supposed that there must be any 
<br>
kind of incompatibility problem, due to the hardware, but...
<br>
<p>Anyway, I repeated the tests with the OpenMPI version from the ubuntu 
<br>
repositories (1.4.3) and got the same result.
<br>
<p>It would be wonderful if anyone could give me a hint.
<br>
<p>I am afraid, it may result a complicated issue, so please, let me know 
<br>
whatever relevant information missing.
<br>
<p>Thanks in advance, guys
<br>
<p>Rodrigo (Europe, GMT+2:00)
<br>
<p>


<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21704/openmpi1.4.3_ompi_info.out.bz2">openmpi1.4.3_ompi_info.out.bz2</a>
</ul>
<!-- attachment="openmpi1.4.3_ompi_info.out.bz2" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21704/uname.out">uname.out</a>
</ul>
<!-- attachment="uname.out" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21704/cat_-proc-cpuinfo.out.bz2">cat_-proc-cpuinfo.out.bz2</a>
</ul>
<!-- attachment="cat_-proc-cpuinfo.out.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21705.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21703.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21705.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Reply:</strong> <a href="21705.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
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
