<?
$subject_val = "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  4 14:34:58 2011" -->
<!-- isoreceived="20110704183458" -->
<!-- sent="Mon, 4 Jul 2011 15:34:54 -0300" -->
<!-- isosent="20110704183454" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG" -->
<!-- id="CABm3_qo2+fEKHWAVq1prBgSBOQFtJNOFu9Cy4+ZmR_LLv1nyHQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41D6C038-2C58-414E-9758-FA8BBB5F3BD8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG<br>
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-04 14:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16779.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the response, Ralph.
<br>
<p>I checked my application and it seems not have a race condition in the
<br>
accept stage. The server is started and it stores the port name in a file.
<br>
When a client is started, it gets this port name and tries to connect. In my
<br>
tests the error happens about 1 time in 10 executions.
<br>
<p>It still working without confidence.
<br>
<p>On Tue, Jun 28, 2011 at 11:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looking deeper, I believe we may have a race condition in the code. Sadly,
</span><br>
<span class="quotelev1">&gt; that error message is actually irrelevant, but causes the code to abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It can be triggered by race conditions in the app as well, but ultimately
</span><br>
<span class="quotelev1">&gt; is something we need to clean up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 27, 2011, at 9:29 AM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am developing a server/client application using Open MPI 1.5.3. In a point of the server code I open a port to receive connections from a client. After that, I call the function MPI_Comm_accept and on the client side I call MPI_Comm_connect. Sometimes I get an ORTE_ERROR_LOG, as showed bellow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; before accept in host hydra9 port name = 4108386304.0;tcp://150.164.3.204:48761;tcp://192.168.63.9:48761+4108386305.0tcp://150.164.3.204:49211;tcp://192.168.63.9:49211:300
</span><br>
<span class="quotelev1">&gt; [hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file base/grpcomm_base_allgather.c at line 220
</span><br>
<span class="quotelev1">&gt; [hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file base/grpcomm_base_modex.c at line 116
</span><br>
<span class="quotelev1">&gt; [hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file grpcomm_bad_module.c at line 608
</span><br>
<span class="quotelev1">&gt; [hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file dpm_orte.c at line 379
</span><br>
<span class="quotelev1">&gt; MPI 2 C++ exception throwing is disabled, MPI::mpi_errno has the error code
</span><br>
<span class="quotelev1">&gt; after accept in host hydra9 error code = 17
</span><br>
<span class="quotelev1">&gt; MPI 2 C++ exception throwing is disabled, MPI::mpi_errno has the error code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpi_errno is 17 and I could not find a clear explanation about this error. It occurs sporadically. Sometimes the application works, sometimes does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16810/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16809.php">hi: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16779.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
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
