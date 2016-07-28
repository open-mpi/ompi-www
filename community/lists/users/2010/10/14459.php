<?
$subject_val = "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 13 17:09:13 2010" -->
<!-- isoreceived="20101013210913" -->
<!-- sent="Wed, 13 Oct 2010 17:09:03 -0400" -->
<!-- isosent="20101013210903" -->
<!-- name="Kalin Kanov" -->
<!-- email="kalin_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application" -->
<!-- id="4CB61FEF.8000301_at_cs.jhu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application<br>
<strong>From:</strong> Kalin Kanov (<em>kalin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-13 17:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14460.php">Jeff Squyres: "Re: [OMPI users] Problem in installing; lib files missing"</a>
<li><strong>Previous message:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="14628.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I am trying to create a client/server application with OpenMPI, which 
<br>
has been installed on a Windows machine, by following the instruction 
<br>
(with CMake) in the README.WINDOWS file in the OpenMPI distribution 
<br>
(version 1.4.2). I have ran other test application that compile file 
<br>
under the Visual Studio 2008 Command Prompt. However I get the following 
<br>
errors on the server side when accepting a new client that is trying to 
<br>
connect:
<br>
<p>[Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file 
<br>
..\..\orte\mca\grp
<br>
comm\base\grpcomm_base_allgather.c at line 222
<br>
[Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file 
<br>
..\..\orte\mca\grp
<br>
comm\basic\grpcomm_basic_module.c at line 530
<br>
[Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file 
<br>
..\..\ompi\mca\dpm
<br>
\orte\dpm_orte.c at line 363
<br>
[Lazar:2716] *** An error occurred in MPI_Comm_accept
<br>
[Lazar:2716] *** on communicator MPI_COMM_WORLD
<br>
[Lazar:2716] *** MPI_ERR_INTERN: internal error
<br>
[Lazar:2716] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 476 on
<br>
node Lazar exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>The server and client code is attached. I have straggled with this 
<br>
problem for quite a while, so please let me know what the issue might 
<br>
be. I have looked at the archives and the FAQ, and the only thing 
<br>
similar that I have found had to do with different version of OpenMPI 
<br>
installed, but I only have one version, and I believe it is the one 
<br>
being used.
<br>
<p>Thank you,
<br>
Kalin
<br>
<p>

<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14459/server.cpp">server.cpp</a>
</ul>
<!-- attachment="server.cpp" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14459/client.cpp">client.cpp</a>
</ul>
<!-- attachment="client.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14460.php">Jeff Squyres: "Re: [OMPI users] Problem in installing; lib files missing"</a>
<li><strong>Previous message:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="14628.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
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
