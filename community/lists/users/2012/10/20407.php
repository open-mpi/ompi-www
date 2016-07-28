<?
$subject_val = "[OMPI users] MPI_Comm_accept randomly gives errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 01:36:47 2012" -->
<!-- isoreceived="20121004053647" -->
<!-- sent="Thu, 4 Oct 2012 14:36:37 +0900" -->
<!-- isosent="20121004053637" -->
<!-- name="Valentin Clement" -->
<!-- email="valentin.clement_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_accept randomly gives errors" -->
<!-- id="C53F7E62-D58B-4193-BEDB-D3A2C42C0861_at_riken.jp" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_accept randomly gives errors<br>
<strong>From:</strong> Valentin Clement (<em>valentin.clement_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 01:36:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20408.php">Siegmar Gross: "[OMPI users] remark on process mapping"</a>
<li><strong>Previous message:</strong> <a href="20406.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20488.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<li><strong>Reply:</strong> <a href="20488.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<li><strong>Maybe reply:</strong> <a href="20492.php">Valentin Clement: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone, 
<br>
<p>I'm currently implementing communication based on MPI in our parallel language middle-ware POP-C++. It was using TCP/IP socket before but due to a project to port the language on a supercomputer, I have to use OpenMPI for the communication. I successfully change the old communication by MPI communication. Anyway I having the following error sometimes during the execution of my program. 
<br>
<p>MPI-COMBOX(client): Want to get a connection to 3461939200.0;tcp://172.19.76.219:52876;tcp://172.19.7.128:52876;tcp://172.16.162.1:52876;tcp://192.168.59.1:52876+3461939202.0;tcp://172.19.76.219:52879;tcp://172.19.7.128:52879;tcp://172.16.162.1:52879;tcp://192.168.59.1:52879:300
<br>
[clementon:58465] [[52825,3],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file dpm_orte.c at line 315
<br>
[clementon:58465] *** An error occurred in MPI_Comm_accept
<br>
[clementon:58465] *** on communicator MPI_COMM_WORLD
<br>
[clementon:58465] *** MPI_ERR_UNKNOWN: unknown error
<br>
[clementon:58465] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
<p>Sometimes I have to MPI_Comm_connect that failed :
<br>
<p>MPI-COMBOX(client): Want to get a connection to 1318912000.0;tcp://192.168.59.176:33956+1318912002.0;tcp://192.168.59.176:54394:300
<br>
[ubuntu:19666] [[20125,3],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file dpm_orte.c at line 315
<br>
[ubuntu:19666] *** An error occurred in MPI_Comm_accept
<br>
[ubuntu:19666] *** on communicator MPI_COMM_WORLD
<br>
[ubuntu:19666] *** MPI_ERR_UNKNOWN: unknown error
<br>
[ubuntu:19666] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
<p>So basically, I have a process waiting for connection with MPI_Comm_accept (Comm.Accept as I used C++). And another process want to connect to it with the MPI_Comm_connect (MPI::COMM_WORLD.Connect(port_name) ... ). It works fine most of the time. I'm suspecting a problem with multiple threads. The process who receives connection as a second thread to serve request. 
<br>
<p>* The process 1 connects to the process 2 
<br>
* process 2 thread 1 register the request
<br>
* process 2 thread 1 will wait for a new connection
<br>
* process 2 thread 2 will server the pending request and might send data
<br>
* A another process might start again a connection to the process 2
<br>
<p>I'm running this code on an Ubuntu 12.04 with OpenMPI 1.6.2 configured with --enable-mpi-thread-multiple. I joined ompi_info -all output. 
<br>
I'm running also the same code on a Mac OS X 10.8.2 with OpenMPI 1.6.2 also configured with --enable-mpi-thread-multiple. 
<br>
<p>I don't run on multiple node for the moment. Just one node and already experiencing this. As I said I'm suspecting a problem with multiple thread but my configuration should allow multiple thread to use MPI calls. 
<br>
<p><p><p>Any help much appreciated 
<br>
<p><p><p>Valentin Clement
<br>
<p><pre>
--
Valentin Clement
Student trainee
Advanced Institute for Computational Science
Programming environnement research team 
RIKEN Institute
Kobe, Japan
 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20407/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20407/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20407/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20408.php">Siegmar Gross: "[OMPI users] remark on process mapping"</a>
<li><strong>Previous message:</strong> <a href="20406.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20488.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<li><strong>Reply:</strong> <a href="20488.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<li><strong>Maybe reply:</strong> <a href="20492.php">Valentin Clement: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
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
