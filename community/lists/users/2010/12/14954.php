<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 08:40:00 2010" -->
<!-- isoreceived="20101201134000" -->
<!-- sent="Wed, 01 Dec 2010 14:42:08 +0100" -->
<!-- isosent="20101201134208" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application" -->
<!-- id="4CF650B0.9050102_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CF437F7.1090708_at_cs.jhu.edu" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 08:42:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14955.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Previous message:</strong> <a href="14953.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>In reply to:</strong> <a href="../../2010/11/14931.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14956.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="14956.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kalin,
<br>
<p>Which version of Open MPI did you use? It seems that the ess component 
<br>
couldn't be selected. Could you please send me the output of ompi_info?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2010-11-30 12:32 AM, Kalin Kanov wrote:
<br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I must have missed your response among all the e-mails that get sent 
</span><br>
<span class="quotelev1">&gt; to the mailing list. Here are a little more details about the issues 
</span><br>
<span class="quotelev1">&gt; that I am having. My client/server programs seem to run sometimes, but 
</span><br>
<span class="quotelev1">&gt; then after a successful run I always seem to get the error that I 
</span><br>
<span class="quotelev1">&gt; included in my first post. The way that I run the programs is by 
</span><br>
<span class="quotelev1">&gt; running the server application first, which generates the port string, 
</span><br>
<span class="quotelev1">&gt; etc. I then proceed to run the client application with a new call to 
</span><br>
<span class="quotelev1">&gt; mpirun. After getting the errors that I e-mailed about I also tried to 
</span><br>
<span class="quotelev1">&gt; run ompi-clean, but the results are the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;ompi-clean
</span><br>
<span class="quotelev1">&gt; [Lazar:05984] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; ..\..\orte\r
</span><br>
<span class="quotelev1">&gt; untime\orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help with this issue will be greatly appreciated.
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
<span class="quotelev1">&gt; On 27.10.2010 &#208;&#179;. 05:52, Shiqing Fan wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Hi Kalin,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the late reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checked the code and got confused. (I'm not and MPI expert) I'm just
</span><br>
<span class="quotelev2">&gt;&gt; wondering how to start the server and client in the same mpirun command
</span><br>
<span class="quotelev2">&gt;&gt; while the client needs a hand-input port name, which is given by the
</span><br>
<span class="quotelev2">&gt;&gt; server at runtime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found a similar program on the Internet (see attached), that works
</span><br>
<span class="quotelev2">&gt;&gt; well on my Windows. In this program, the generated port name will be
</span><br>
<span class="quotelev2">&gt;&gt; send among the processes by MPI_Send.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2010-10-13 11:09 PM, Kalin Kanov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to create a client/server application with OpenMPI, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has been installed on a Windows machine, by following the instruction
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (with CMake) in the README.WINDOWS file in the OpenMPI distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (version 1.4.2). I have ran other test application that compile file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under the Visual Studio 2008 Command Prompt. However I get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following errors on the server side when accepting a new client that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is trying to connect:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..\..\orte\mca\grp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm\base\grpcomm_base_allgather.c at line 222
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..\..\orte\mca\grp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm\basic\grpcomm_basic_module.c at line 530
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..\..\ompi\mca\dpm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \orte\dpm_orte.c at line 363
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Lazar:2716] *** An error occurred in MPI_Comm_accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Lazar:2716] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Lazar:2716] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Lazar:2716] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 476 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node Lazar exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The server and client code is attached. I have straggled with this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem for quite a while, so please let me know what the issue might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be. I have looked at the archives and the FAQ, and the only thing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar that I have found had to do with different version of OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed, but I only have one version, and I believe it is the one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kalin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev2">&gt;&gt;    Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev2">&gt;&gt; Address:Allmandring 30               email:fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14955.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Previous message:</strong> <a href="14953.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>In reply to:</strong> <a href="../../2010/11/14931.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14956.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Reply:</strong> <a href="14956.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
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
