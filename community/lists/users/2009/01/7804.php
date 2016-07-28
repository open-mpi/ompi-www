<?
$subject_val = "Re: [OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 13:32:51 2009" -->
<!-- isoreceived="20090123183251" -->
<!-- sent="Fri, 23 Jan 2009 13:32:45 -0500" -->
<!-- isosent="20090123183245" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="32B7FD8B-1EE7-4D62-9EC9-799E3077DA20_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4979EF40.1050304_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Asynchronous behaviour of MPI Collectives<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 13:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7805.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7803.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="7802.php">Eugene Loh: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 11:24 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you have notes, MPI_Barrier is the *only* collective operation  
</span><br>
<span class="quotelev2">&gt;&gt; that MPI guarantees to have any synchronization properties (and  
</span><br>
<span class="quotelev2">&gt;&gt; it's a  fairly weak guarantee at that; no process will exit the  
</span><br>
<span class="quotelev2">&gt;&gt; barrier until  every process has entered the barrier -- but there's  
</span><br>
<span class="quotelev2">&gt;&gt; no guarantee that  all processes leave the barrier at the same time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, many collectives have that property due to data-causality  
</span><br>
<span class="quotelev1">&gt; conditions.  E.g., MPI_Allreduce cannot exit from any process until  
</span><br>
<span class="quotelev1">&gt; every process has finished.
</span><br>
<p>MPI_Allreduce is a bad example. Depending on the algorithm, this  
<br>
collective can finish on some nodes, way before the others (allreduce  
<br>
might be a reduce followed by a broadcast). However, there is one  
<br>
thing that will _ALWAYS_ be true, all processes have reached the  
<br>
MPI_Allreduce call because they had provided their data.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Jeff mentions, however, exit times can be &quot;ragged&quot; (and  
</span><br>
<span class="quotelev1">&gt; unfortunately often are).
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
<li><strong>Next message:</strong> <a href="7805.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7803.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="7802.php">Eugene Loh: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
