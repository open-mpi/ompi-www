<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 07:13:20 2007" -->
<!-- isoreceived="20070723111320" -->
<!-- sent="Mon, 23 Jul 2007 13:10:40 +0200" -->
<!-- isosent="20070723111040" -->
<!-- name="Per Madsen" -->
<!-- email="Per.Madsen_at_[hidden]" -->
<!-- subject="[OMPI users] Problems starting mpi program via a system call from within a mpi program" -->
<!-- id="EA09C4B2B0F16E44B8F3311629493C0DCCD09C_at_DJFPOST01.djf.agrsci.dk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EA09C4B2B0F16E44B8F3311629493C0DCCD09A_at_DJFPOST01.djf.agrsci.dk" -->
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
<strong>From:</strong> Per Madsen (<em>Per.Madsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 07:10:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3733.php">Derrick Kondo: "[OMPI users] EuroPVM/MPI'07 -- Call for Participation"</a>
<li><strong>Previous message:</strong> <a href="3731.php">Biagio Cosenza: "[OMPI users] Performance tuning: focus on latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3767.php">Per Madsen: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>Maybe reply:</strong> <a href="3767.php">Per Madsen: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am in the process of moving a parallel program from our old 32 bit based (Xeon @ 2.8 GHz) Linux cluster to a new EM64T (Intel Xeon  5160  @ 3.00GHz) base linux cluster. 
<br>
<p>OS on the old cluster is Redhat 9 and Fedora 7 on the new cluster.
<br>
<p>I have installed the Intel Fortran compiler version 10.0 and openmpi-1.2.3.
<br>
<p>I configured openmpi with &#147;--prefix=/opt/openmpi &#150;F77=ifort &#150;FC=ifort.
<br>
config.log and the output from ompi_info --all are in the attached files.
<br>
<p><p><p>/opt/ is mounted on all nodes in the cluster.
<br>
<p>The program causing me problems, is a program that solves two large interrelated systems of equations (+200.000.000 eq.) using PCG iteration. The program starts to iterate on the first system until a certain degree of convergence is reached, then the master node executes a shell script which starts the parallel solver on the second system. Again the iteration is continued until certain degree of convergence, some parameters from solving the second system is stored in different files. After the solving of the second system, the stored parameters is used in the solver for the first system. Both before and after the master node makes the system call the nodes are synchronized via  calls of MPI_BARRIER.
<br>
<p>This setup has worked fine on the old cluster, but on the new cluster, The system call do not start the parallel solver for the second system. The solver program is very complex, so I have med some small Fortran programs and shell scripts that illustrates the problem.
<br>
<p>The setup is as follows:
<br>
<p>mpi_master starts mpi on a number of nodes and checks that the nodes is alive. The master then executes the shell script serial.sh via a system call, thats starts a serial Fortran program serial_subprog). After return from the system call, the master executes the shell script mpi.sh. This script tries to start 
<br>
mpi_subprog via mpirun. 
<br>
<p>I have used mpif90 to compile the mpi programs and ifort to compile the serial program.
<br>
<p>Mpi_main starts as expected, the call of serial.sh starts the serial program as expected. However, the system call to execute the mpi.sh do not start mpi_subprog.
<br>
<p>The Fortran programs and scripts are in the attached file test.tar.gz. 
<br>
<p><p>When I run the setup via:
<br>
&nbsp;
<br>
mpirun -np 4 -hostfile nodelist ./mpi_main 
<br>
<p>I get the following:
<br>
<p>MPI_INIT return code:            0
<br>
&nbsp;MPI_INIT return code:            0
<br>
&nbsp;MPI_COMM_RANK return code:            0
<br>
&nbsp;MPI_COMM_SIZE return code:            0
<br>
&nbsp;Process            1  of            2  is alive - Hostname= c01b04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1  :           19
<br>
&nbsp;MPI_COMM_RANK return code:            0
<br>
&nbsp;MPI_COMM_SIZE return code:            0
<br>
&nbsp;Process            0  of            2  is alive - Hostname= c01b05
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0  :           19
<br>
&nbsp;MYID:            1  MPI_REDUCE 1 red_chk_sum=           0  rc=           0
<br>
&nbsp;MYID:            0  MPI_REDUCE 1 red_chk_sum=           2  rc=           0
<br>
&nbsp;MYID:            1  MPI_BARRIER 1 RC=            0
<br>
&nbsp;MYID:            0  MPI_BARRIER 1 RC=            0
<br>
<p>&nbsp;Master will now execute the shell script serial.sh
<br>
<p>This is from serial.sh
<br>
<p>&nbsp;We are now in the serial subprogram
<br>
<p>&nbsp;Master back from the shell script serial.sh
<br>
&nbsp;IERR=            0
<br>
<p>&nbsp;Master will now execute the shell script mpi.sh
<br>
<p>This is from mpi.sh
<br>
/nav/denmark/navper19/mpi_test
<br>
[c01b05.ctrl.ghpc.dk:25337] OOB: Connection to HNP lost
<br>
<p>&nbsp;Master back from the shell script mpi.sh
<br>
&nbsp;IERR=            0
<br>
<p>&nbsp;MYID:            0  MPI_BARRIER 2 RC=            0
<br>
&nbsp;MYID:            0  MPI_REDUCE 2 red_chk_sum=          20  rc=           0
<br>
&nbsp;MYID:            1  MPI_BARRIER 2 RC=            0
<br>
&nbsp;MYID:            1  MPI_REDUCE 2 red_chk_sum=           0  rc=           0
<br>
<p>As you can see, the execution on the serial program works, while the mpi program is not started.
<br>
<p>I have checked that mpirun is in the PATH in the shell started by the system call, and I have checked the the mpi.sh script works if it is executed from the command prompt. Output from a run with mpirun options -v -d are in the attached file test.tar.gz.
<br>
<p>Is there anyone out there that have tried to do some thing similar? 
<br>
<p>Regards
<br>
<p>Per Madsen
<br>
Senior scientist
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AARHUS UNIVERSITET / UNIVERSITY OF AARHUS     
<br>
Det Jordbrugsvidenskabelige Fakultet / Faculty of Agricultural Sciences
<br>
Forskningscenter Foulum / Research Centre Foulum       
<br>
Genetik og Bioteknologi / Dept. of Genetics and Biotechnology  
<br>
Blichers All&#233; 20, P.O. BOX 50  
<br>
DK-8830 Tjele  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p><p>



<br><hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3732/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3732/ifconfig.log">ifconfig.log</a>
</ul>
<!-- attachment="ifconfig.log" -->
<hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3732/ompi_info.log.gz">ompi_info.log.gz</a>
</ul>
<!-- attachment="ompi_info.log.gz" -->
<hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3732/test.tar.gz">test.tar.gz</a>
</ul>
<!-- attachment="test.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3733.php">Derrick Kondo: "[OMPI users] EuroPVM/MPI'07 -- Call for Participation"</a>
<li><strong>Previous message:</strong> <a href="3731.php">Biagio Cosenza: "[OMPI users] Performance tuning: focus on latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3767.php">Per Madsen: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>Maybe reply:</strong> <a href="3767.php">Per Madsen: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
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
