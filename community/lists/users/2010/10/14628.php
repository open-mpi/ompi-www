<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 05:50:40 2010" -->
<!-- isoreceived="20101027095040" -->
<!-- sent="Wed, 27 Oct 2010 11:52:24 +0200" -->
<!-- isosent="20101027095224" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application" -->
<!-- id="4CC7F658.3060101_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CB61FEF.8000301_at_cs.jhu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 05:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14629.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>Previous message:</strong> <a href="14627.php">Jeremiah Willcock: "Re: [OMPI users] MPI-2.2: do you care?"</a>
<li><strong>In reply to:</strong> <a href="14459.php">Kalin Kanov: "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14939.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14939.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kalin,
<br>
<p>Sorry for the late reply.
<br>
<p>I checked the code and got confused. (I'm not and MPI expert)  I'm just 
<br>
wondering how to start the server and client in the same mpirun command 
<br>
while the client needs a hand-input port name, which is given by the 
<br>
server at runtime.
<br>
<p>I found a similar program on the Internet (see attached), that works 
<br>
well on my Windows. In this program, the generated port name will be 
<br>
send among the processes by MPI_Send.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>On 2010-10-13 11:09 PM, Kalin Kanov wrote:
<br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to create a client/server application with OpenMPI, which 
</span><br>
<span class="quotelev1">&gt; has been installed on a Windows machine, by following the instruction 
</span><br>
<span class="quotelev1">&gt; (with CMake) in the README.WINDOWS file in the OpenMPI distribution 
</span><br>
<span class="quotelev1">&gt; (version 1.4.2). I have ran other test application that compile file 
</span><br>
<span class="quotelev1">&gt; under the Visual Studio 2008 Command Prompt. However I get the 
</span><br>
<span class="quotelev1">&gt; following errors on the server side when accepting a new client that 
</span><br>
<span class="quotelev1">&gt; is trying to connect:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ..\..\orte\mca\grp
</span><br>
<span class="quotelev1">&gt; comm\base\grpcomm_base_allgather.c at line 222
</span><br>
<span class="quotelev1">&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ..\..\orte\mca\grp
</span><br>
<span class="quotelev1">&gt; comm\basic\grpcomm_basic_module.c at line 530
</span><br>
<span class="quotelev1">&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ..\..\ompi\mca\dpm
</span><br>
<span class="quotelev1">&gt; \orte\dpm_orte.c at line 363
</span><br>
<span class="quotelev1">&gt; [Lazar:2716] *** An error occurred in MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; [Lazar:2716] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [Lazar:2716] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [Lazar:2716] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 476 on
</span><br>
<span class="quotelev1">&gt; node Lazar exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The server and client code is attached. I have straggled with this 
</span><br>
<span class="quotelev1">&gt; problem for quite a while, so please let me know what the issue might 
</span><br>
<span class="quotelev1">&gt; be. I have looked at the archives and the FAQ, and the only thing 
</span><br>
<span class="quotelev1">&gt; similar that I have found had to do with different version of OpenMPI 
</span><br>
<span class="quotelev1">&gt; installed, but I only have one version, and I believe it is the one 
</span><br>
<span class="quotelev1">&gt; being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Kalin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14628/mpi_accept.c">mpi_accept.c</a>
</ul>
<!-- attachment="mpi_accept.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14629.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>Previous message:</strong> <a href="14627.php">Jeremiah Willcock: "Re: [OMPI users] MPI-2.2: do you care?"</a>
<li><strong>In reply to:</strong> <a href="14459.php">Kalin Kanov: "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14939.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14939.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
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
