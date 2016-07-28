<?
$subject_val = "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 15:14:49 2011" -->
<!-- isoreceived="20110705191449" -->
<!-- sent="Tue, 5 Jul 2011 16:14:44 -0300" -->
<!-- isosent="20110705191444" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG" -->
<!-- id="CABm3_qrtWnvuWQu_dCAzyOP4z9SNMj+awvS9t6NhTpvThLezQg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4A96220-784E-4D62-8CB1-B925F22B4BA4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-07-05 15:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16823.php">Chaudhari, Mangesh I: "[OMPI users] Running MPI jobs from external Hard Disk"</a>
<li><strong>Previous message:</strong> <a href="16821.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph. The version you have suggested works properly.
<br>
<p>Thank you so much for the attention.
<br>
<p><p>On Mon, Jul 4, 2011 at 3:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you download a 1.5 tarball tagged at r24853 or above, the problem should
</span><br>
<span class="quotelev1">&gt; be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 4, 2011, at 12:34 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the response, Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked my application and it seems not have a race condition in the
</span><br>
<span class="quotelev1">&gt; accept stage. The server is started and it stores the port name in a file.
</span><br>
<span class="quotelev1">&gt; When a client is started, it gets this port name and tries to connect. In my
</span><br>
<span class="quotelev1">&gt; tests the error happens about 1 time in 10 executions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It still working without confidence.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 28, 2011 at 11:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking deeper, I believe we may have a race condition in the code. Sadly,
</span><br>
<span class="quotelev2">&gt;&gt; that error message is actually irrelevant, but causes the code to abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It can be triggered by race conditions in the app as well, but ultimately
</span><br>
<span class="quotelev2">&gt;&gt; is something we need to clean up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 27, 2011, at 9:29 AM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am developing a server/client application using Open MPI 1.5.3. In a point of the server code I open a port to receive connections from a client. After that, I call the function MPI_Comm_accept and on the client side I call MPI_Comm_connect. Sometimes I get an ORTE_ERROR_LOG, as showed bellow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; before accept in host hydra9 port name = 4108386304.0;tcp://150.164.3.204:48761;tcp://192.168.63.9:48761+4108386305.0tcp://150.164.3.204:49211;tcp://192.168.63.9:49211:300
</span><br>
<span class="quotelev2">&gt;&gt; [hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file base/grpcomm_base_allgather.c at line 220
</span><br>
<span class="quotelev2">&gt;&gt; [hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file base/grpcomm_base_modex.c at line 116
</span><br>
<span class="quotelev2">&gt;&gt; [hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file grpcomm_bad_module.c at line 608
</span><br>
<span class="quotelev2">&gt;&gt; [hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file dpm_orte.c at line 379
</span><br>
<span class="quotelev2">&gt;&gt; MPI 2 C++ exception throwing is disabled, MPI::mpi_errno has the error code
</span><br>
<span class="quotelev2">&gt;&gt; after accept in host hydra9 error code = 17
</span><br>
<span class="quotelev2">&gt;&gt; MPI 2 C++ exception throwing is disabled, MPI::mpi_errno has the error code
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpi_errno is 17 and I could not find a clear explanation about this error. It occurs sporadically. Sometimes the application works, sometimes does not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16823.php">Chaudhari, Mangesh I: "[OMPI users] Running MPI jobs from external Hard Disk"</a>
<li><strong>Previous message:</strong> <a href="16821.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
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
