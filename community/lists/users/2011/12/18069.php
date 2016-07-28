<?
$subject_val = "Re: [OMPI users] Problems when running open-MPI on OFED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 29 05:36:23 2011" -->
<!-- isoreceived="20111229103623" -->
<!-- sent="Thu, 29 Dec 2011 12:36:14 +0200" -->
<!-- isosent="20111229103614" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems when running open-MPI on OFED" -->
<!-- id="4EFC429E.5000700_at_dev.mellanox.co.il" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CACiOAODJBWTjsQrDV5it-9peQu+Bapg58=B=S+tLDh=NYWAw2w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems when running open-MPI on OFED<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-29 05:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18070.php">Lloyd Brown: "[OMPI users] segfault when resuming on different host"</a>
<li><strong>Previous message:</strong> <a href="18068.php">Venkateswara Rao Dokku: "[OMPI users] Problems when running open-MPI on OFED"</a>
<li><strong>In reply to:</strong> <a href="18068.php">Venkateswara Rao Dokku: "[OMPI users] Problems when running open-MPI on OFED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Does OMPI with IMP work OK on the official OFED release?
<br>
Do the usual ibv performance tests (ibv_rc_*) work on your customized OFED?
<br>
<p>-- YK
<br>
<p>On 29-Dec-11 9:34 AM, Venkateswara Rao Dokku wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;      We tried running the Intel Benchmarks(IMB_3.2) on the customized OFED(that was build by us).. While executing the tests we are getting the following errors
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics stack has reported a network error event.  Open MPI
</span><br>
<span class="quotelev1">&gt; will try to continue, but your job may end up failing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Local host:        localhost.localdomain
</span><br>
<span class="quotelev1">&gt;    MPI process PID:   5259
</span><br>
<span class="quotelev1">&gt;    Error number:      2 (IBV_EVENT_QP_REQ_ERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev1">&gt; please contact your system administrator.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2.
</span><br>
<span class="quotelev1">&gt; While executing the Reduce_scatter benchmark..
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:04437] *** An error occurred in MPI_Reduce_scatter
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:04437] *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:04437] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:04437] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the root cause for those errors??, and any suggestions on how to remove those errors..!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your reply..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; D.Venkateswara Rao,
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18070.php">Lloyd Brown: "[OMPI users] segfault when resuming on different host"</a>
<li><strong>Previous message:</strong> <a href="18068.php">Venkateswara Rao Dokku: "[OMPI users] Problems when running open-MPI on OFED"</a>
<li><strong>In reply to:</strong> <a href="18068.php">Venkateswara Rao Dokku: "[OMPI users] Problems when running open-MPI on OFED"</a>
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
