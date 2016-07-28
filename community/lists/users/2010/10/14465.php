<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 12:46:25 2010" -->
<!-- isoreceived="20101014164625" -->
<!-- sent="Thu, 14 Oct 2010 12:46:19 -0400" -->
<!-- isosent="20101014164619" -->
<!-- name="Kalin Kanov" -->
<!-- email="kalin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application" -->
<!-- id="4CB733DB.2080000_at_cs.jhu.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7A7BA6A9-91DA-432D-967C-1B0A006D1361_at_cisco.com" -->
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
<strong>From:</strong> Kalin Kanov (<em>kalin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 12:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14466.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Previous message:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>In reply to:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14629.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>Reply:</strong> <a href="14629.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the quick response and I am looking forward to Shiqing's 
<br>
reply.
<br>
<p>Additionally, I noticed that I get the following warnings whenever I run 
<br>
an OpenMPI application. I am not sure if this has anything to do with 
<br>
the error that I am getting for MPI_Comm_accept:
<br>
<p>[Lazar:03288] mca_oob_tcp_create_listen: unable to disable v4-mapped 
<br>
addresses
<br>
[Lazar:00576] mca_oob_tcp_create_listen: unable to disable v4-mapped 
<br>
addresses
<br>
[Lazar:00576] mca_btl_tcp_create_listen: unable to disable v4-mapped 
<br>
addresses
<br>
<p>Kalin
<br>
<p>On 14.10.2010 &#208;&#179;. 08:47, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Just FYI -- the main Windows Open MPI guy (Shiqing) is out for a little while.  He's really the best person to answer your question.  I'm sure he'll reply when he can, but I just wanted to let you know that there may be some latency in his reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 13, 2010, at 5:09 PM, Kalin Kanov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to create a client/server application with OpenMPI, which has been installed on a Windows machine, by following the instruction (with CMake) in the README.WINDOWS file in the OpenMPI distribution (version 1.4.2). I have ran other test application that compile file under the Visual Studio 2008 Command Prompt. However I get the following errors on the server side when accepting a new client that is trying to connect:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file ..\..\orte\mca\grp
</span><br>
<span class="quotelev2">&gt;&gt; comm\base\grpcomm_base_allgather.c at line 222
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file ..\..\orte\mca\grp
</span><br>
<span class="quotelev2">&gt;&gt; comm\basic\grpcomm_basic_module.c at line 530
</span><br>
<span class="quotelev2">&gt;&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file ..\..\ompi\mca\dpm
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
<span class="quotelev2">&gt;&gt; The server and client code is attached. I have straggled with this problem for quite a while, so please let me know what the issue might be. I have looked at the archives and the FAQ, and the only thing similar that I have found had to do with different version of OpenMPI installed, but I only have one version, and I believe it is the one being used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Kalin
</span><br>
<span class="quotelev2">&gt;&gt; &lt;server.cpp&gt;&lt;client.cpp&gt;_______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14466.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Previous message:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>In reply to:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14629.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>Reply:</strong> <a href="14629.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
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
