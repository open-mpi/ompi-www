<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 08:47:38 2010" -->
<!-- isoreceived="20101014124738" -->
<!-- sent="Thu, 14 Oct 2010 08:47:34 -0400" -->
<!-- isosent="20101014124734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application" -->
<!-- id="7A7BA6A9-91DA-432D-967C-1B0A006D1361_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 08:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>Previous message:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>In reply to:</strong> <a href="14459.php">Kalin Kanov: "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>Reply:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just FYI -- the main Windows Open MPI guy (Shiqing) is out for a little while.  He's really the best person to answer your question.  I'm sure he'll reply when he can, but I just wanted to let you know that there may be some latency in his reply.
<br>
<p><p>On Oct 13, 2010, at 5:09 PM, Kalin Kanov wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to create a client/server application with OpenMPI, which has been installed on a Windows machine, by following the instruction (with CMake) in the README.WINDOWS file in the OpenMPI distribution (version 1.4.2). I have ran other test application that compile file under the Visual Studio 2008 Command Prompt. However I get the following errors on the server side when accepting a new client that is trying to connect:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file ..\..\orte\mca\grp
</span><br>
<span class="quotelev1">&gt; comm\base\grpcomm_base_allgather.c at line 222
</span><br>
<span class="quotelev1">&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file ..\..\orte\mca\grp
</span><br>
<span class="quotelev1">&gt; comm\basic\grpcomm_basic_module.c at line 530
</span><br>
<span class="quotelev1">&gt; [Lazar:02716] [[47880,1],0] ORTE_ERROR_LOG: Not found in file ..\..\ompi\mca\dpm
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
<span class="quotelev1">&gt; The server and client code is attached. I have straggled with this problem for quite a while, so please let me know what the issue might be. I have looked at the archives and the FAQ, and the only thing similar that I have found had to do with different version of OpenMPI installed, but I only have one version, and I believe it is the one being used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Kalin
</span><br>
<span class="quotelev1">&gt; &lt;server.cpp&gt;&lt;client.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>Previous message:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>In reply to:</strong> <a href="14459.php">Kalin Kanov: "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>Reply:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
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
