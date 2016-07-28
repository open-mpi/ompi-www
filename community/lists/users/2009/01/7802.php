<?
$subject_val = "Re: [OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 11:20:36 2009" -->
<!-- isoreceived="20090123162036" -->
<!-- sent="Fri, 23 Jan 2009 08:24:32 -0800" -->
<!-- isosent="20090123162432" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="4979EF40.1050304_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="995A152A-151D-4282-8F85-009B5E2AD7B5_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 11:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7803.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Previous message:</strong> <a href="7801.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7804.php">George Bosilca: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7804.php">George Bosilca: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; As you have notes, MPI_Barrier is the *only* collective operation that 
</span><br>
<span class="quotelev1">&gt; MPI guarantees to have any synchronization properties (and it's a  
</span><br>
<span class="quotelev1">&gt; fairly weak guarantee at that; no process will exit the barrier until  
</span><br>
<span class="quotelev1">&gt; every process has entered the barrier -- but there's no guarantee 
</span><br>
<span class="quotelev1">&gt; that  all processes leave the barrier at the same time). 
</span><br>
<p>Actually, many collectives have that property due to data-causality 
<br>
conditions.  E.g., MPI_Allreduce cannot exit from any process until 
<br>
every process has finished.
<br>
<p>As Jeff mentions, however, exit times can be &quot;ragged&quot; (and unfortunately 
<br>
often are).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7803.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Previous message:</strong> <a href="7801.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7804.php">George Bosilca: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7804.php">George Bosilca: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
