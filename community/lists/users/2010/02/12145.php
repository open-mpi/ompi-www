<?
$subject_val = "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 20:52:24 2010" -->
<!-- isoreceived="20100225015224" -->
<!-- sent="Wed, 24 Feb 2010 18:52:12 -0700" -->
<!-- isosent="20100225015212" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using dynamic process management without mpirun/mpiexec" -->
<!-- id="4B85D7CC.3080008_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F59E5C05-6DAB-4AC3-B9FF-30CC90462F4A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using dynamic process management without mpirun/mpiexec<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 20:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12146.php">Jeff Squyres: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Previous message:</strong> <a href="12144.php">Terry Frankcombe: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>In reply to:</strong> <a href="12143.php">Ralph Castain: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that's right.  It will launch a singleton, and then add slaves as 
<br>
required.  Thank you.
<br>
<p>Damien
<br>
<p>On 24/02/2010 6:17 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Let me see if I understand your question. You want to launch an initial MPI code using mpirun or as a singleton. This code will then determine available resources and use MPI_Comm_spawn to launch the &quot;real&quot; MPI job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, then yes - you can do that. When you do the comm_spawn, you need to include an MPI_Info key of &quot;add-host&quot; that specifies the host(s) (comma-delimited list) to be used for launching the specified app. Or you can do &quot;add-hostfile&quot; - either or both are supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2010, at 5:39 PM, Damien Hocking wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does OpenMPI support dynamic process management without launching through mpirun or mpiexec?  I need to use some MPI code in a shared-memory environment where I don't know the resources in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12146.php">Jeff Squyres: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Previous message:</strong> <a href="12144.php">Terry Frankcombe: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>In reply to:</strong> <a href="12143.php">Ralph Castain: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
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
