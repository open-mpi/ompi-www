<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 05:54:42 2010" -->
<!-- isoreceived="20101027095442" -->
<!-- sent="Wed, 27 Oct 2010 11:56:28 +0200" -->
<!-- isosent="20101027095628" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application" -->
<!-- id="4CC7F74C.6050803_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CB733DB.2080000_at_cs.jhu.edu" -->
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
<strong>Date:</strong> 2010-10-27 05:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14630.php">Shiqing Fan: "Re: [OMPI users] Some problems"</a>
<li><strong>Previous message:</strong> <a href="14628.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>In reply to:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14628.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kalin,
<br>
<p>These warning messages are harmless, some of the IPv6 feature is not yet 
<br>
supported on Windows, but it can still run with IPv4. If you want to get 
<br>
rid of these messages, just disable the IPv6 support in CMake.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2010-10-14 6:46 PM, Kalin Kanov wrote:
<br>
<span class="quotelev1">&gt; Thank you for the quick response and I am looking forward to Shiqing's 
</span><br>
<span class="quotelev1">&gt; reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, I noticed that I get the following warnings whenever I 
</span><br>
<span class="quotelev1">&gt; run an OpenMPI application. I am not sure if this has anything to do 
</span><br>
<span class="quotelev1">&gt; with the error that I am getting for MPI_Comm_accept:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Lazar:03288] mca_oob_tcp_create_listen: unable to disable v4-mapped 
</span><br>
<span class="quotelev1">&gt; addresses
</span><br>
<span class="quotelev1">&gt; [Lazar:00576] mca_oob_tcp_create_listen: unable to disable v4-mapped 
</span><br>
<span class="quotelev1">&gt; addresses
</span><br>
<span class="quotelev1">&gt; [Lazar:00576] mca_btl_tcp_create_listen: unable to disable v4-mapped 
</span><br>
<span class="quotelev1">&gt; addresses
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kalin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14.10.2010 &#208;&#179;. 08:47, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just FYI -- the main Windows Open MPI guy (Shiqing) is out for a 
</span><br>
<span class="quotelev2">&gt;&gt; little while.  He's really the best person to answer your question.  
</span><br>
<span class="quotelev2">&gt;&gt; I'm sure he'll reply when he can, but I just wanted to let you know 
</span><br>
<span class="quotelev2">&gt;&gt; that there may be some latency in his reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 13, 2010, at 5:09 PM, Kalin Kanov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to create a client/server application with OpenMPI, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which has been installed on a Windows machine, by following the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instruction (with CMake) in the README.WINDOWS file in the OpenMPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution (version 1.4.2). I have ran other test application that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile file under the Visual Studio 2008 Command Prompt. However I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get the following errors on the server side when accepting a new 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; client that is trying to connect:
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
<span class="quotelev3">&gt;&gt;&gt; The server and client code is attached. I have straggled with this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem for quite a while, so please let me know what the issue 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might be. I have looked at the archives and the FAQ, and the only 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing similar that I have found had to do with different version of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI installed, but I only have one version, and I believe it is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the one being used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kalin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;server.cpp&gt;&lt;client.cpp&gt;_______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14630.php">Shiqing Fan: "Re: [OMPI users] Some problems"</a>
<li><strong>Previous message:</strong> <a href="14628.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>In reply to:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14628.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
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
