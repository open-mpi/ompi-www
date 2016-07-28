<?
$subject_val = "Re: [OMPI users] Reinitialize MPI_COMM_WORLD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 13:00:36 2007" -->
<!-- isoreceived="20071129180036" -->
<!-- sent="Thu, 29 Nov 2007 12:00:31 -0600" -->
<!-- isosent="20071129180031" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Reinitialize MPI_COMM_WORLD" -->
<!-- id="474EFE3F.3030504_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41935ab00711290913r111b25cardafaad910a19b3ea_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Reinitialize MPI_COMM_WORLD<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 13:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4567.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4565.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>In reply to:</strong> <a href="4564.php">Rajesh Sudarsan: "[OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
no, unfortunately there is no way to do that. In fact, each set of child 
<br>
processes which you spawn has its own MPI_COMM_WORLD. MPI_COMM_WORLD is 
<br>
static and there is no way to change it at runtime...
<br>
<p>Edgar
<br>
<p>Rajesh Sudarsan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have simple MPI program that uses MPI_comm_spawn to create additional 
</span><br>
<span class="quotelev1">&gt; child processes. 
</span><br>
<span class="quotelev1">&gt; Using  MPI_Intercomm_merge, I merge the child and the parent communicator resulting in a single expanded user 
</span><br>
<span class="quotelev1">&gt; defined intracommunicator. I know MPI_COMM_WORLD is a constant which is 
</span><br>
<span class="quotelev1">&gt; statically initialized during MPI_Init call. But 
</span><br>
<span class="quotelev1">&gt; is there a way to update the value of MPI_COMM_WORLD at runtime 
</span><br>
<span class="quotelev1">&gt; to reflect this expanded set of processes? Is it possible to some how 
</span><br>
<span class="quotelev1">&gt; reinitialize MPI_COMM_WORLD using ompi_comm_init() function?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rajesh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4567.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4565.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>In reply to:</strong> <a href="4564.php">Rajesh Sudarsan: "[OMPI users] Reinitialize MPI_COMM_WORLD"</a>
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
