<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 18:32:30 2010" -->
<!-- isoreceived="20101129233230" -->
<!-- sent="Mon, 29 Nov 2010 18:32:07 -0500" -->
<!-- isosent="20101129233207" -->
<!-- name="Kalin Kanov" -->
<!-- email="kalin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application" -->
<!-- id="4CF437F7.1090708_at_cs.jhu.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CC7F658.3060101_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application<br>
<strong>From:</strong> Kalin Kanov (<em>kalin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 18:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14940.php">Luis Kornblueh: "[OMPI users] write out mca parameters after mpi_init"</a>
<li><strong>Previous message:</strong> <a href="14938.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14628.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14962.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14962.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>I must have missed your response among all the e-mails that get sent to 
<br>
the mailing list. Here are a little more details about the issues that I 
<br>
am having. My client/server programs seem to run sometimes, but then 
<br>
after a successful run I always seem to get the error that I included in 
<br>
my first post. The way that I run the programs is by running the server 
<br>
application first, which generates the port string, etc. I then proceed 
<br>
to run the client application with a new call to mpirun. After getting 
<br>
the errors that I e-mailed about I also tried to run ompi-clean, but the 
<br>
results are the following:
<br>
<p><span class="quotelev1"> &gt;ompi-clean
</span><br>
[Lazar:05984] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
..\..\orte\r
<br>
untime\orte_init.c at line 125
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p>Any help with this issue will be greatly appreciated.
<br>
<p>Thank you,
<br>
Kalin
<br>
<p><p>On 27.10.2010 &#208;&#179;. 05:52, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt;   Hi Kalin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the late reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the code and got confused. (I'm not and MPI expert) I'm just
</span><br>
<span class="quotelev1">&gt; wondering how to start the server and client in the same mpirun command
</span><br>
<span class="quotelev1">&gt; while the client needs a hand-input port name, which is given by the
</span><br>
<span class="quotelev1">&gt; server at runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found a similar program on the Internet (see attached), that works
</span><br>
<span class="quotelev1">&gt; well on my Windows. In this program, the generated port name will be
</span><br>
<span class="quotelev1">&gt; send among the processes by MPI_Send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-10-13 11:09 PM, Kalin Kanov wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to create a client/server application with OpenMPI, which
</span><br>
<span class="quotelev2">&gt;&gt; has been installed on a Windows machine, by following the instruction
</span><br>
<span class="quotelev2">&gt;&gt; (with CMake) in the README.WINDOWS file in the OpenMPI distribution
</span><br>
<span class="quotelev2">&gt;&gt; (version 1.4.2). I have ran other test application that compile file
</span><br>
<span class="quotelev2">&gt;&gt; under the Visual Studio 2008 Command Prompt. However I get the
</span><br>
<span class="quotelev2">&gt;&gt; following errors on the server side when accepting a new client that
</span><br>
<span class="quotelev2">&gt;&gt; is trying to connect:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ..\..\orte\mca\grp
</span><br>
<span class="quotelev2">&gt;&gt; comm\base\grpcomm_base_allgather.c at line 222
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ..\..\orte\mca\grp
</span><br>
<span class="quotelev2">&gt;&gt; comm\basic\grpcomm_basic_module.c at line 530
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ..\..\ompi\mca\dpm
</span><br>
<span class="quotelev2">&gt;&gt; \orte\dpm_orte.c at line 363
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:2716] *** An error occurred in MPI_Comm_accept
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:2716] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:2716] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:2716] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 476 on
</span><br>
<span class="quotelev2">&gt;&gt; node Lazar exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The server and client code is attached. I have straggled with this
</span><br>
<span class="quotelev2">&gt;&gt; problem for quite a while, so please let me know what the issue might
</span><br>
<span class="quotelev2">&gt;&gt; be. I have looked at the archives and the FAQ, and the only thing
</span><br>
<span class="quotelev2">&gt;&gt; similar that I have found had to do with different version of OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; installed, but I only have one version, and I believe it is the one
</span><br>
<span class="quotelev2">&gt;&gt; being used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Kalin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;    Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email:fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14940.php">Luis Kornblueh: "[OMPI users] write out mca parameters after mpi_init"</a>
<li><strong>Previous message:</strong> <a href="14938.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14628.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14962.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14962.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
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
