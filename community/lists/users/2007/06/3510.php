<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 02:13:48 2007" -->
<!-- isoreceived="20070620061348" -->
<!-- sent="Wed, 20 Jun 2007 09:13:41 +0300" -->
<!-- isosent="20070620061341" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="20070620061340.GO1164_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A39F5E5E-DDF3-44D1-95E8-5EA12CCC9866_at_cs.utk.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 02:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3511.php">Marcin Skoczylas: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>In reply to:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3506.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 19, 2007 at 11:24:24AM -0700, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 1. I don't believe the OS to release the binding when we close the  
</span><br>
<span class="quotelev1">&gt; socket. As an example on Linux the kernel sockets are release at a  
</span><br>
<span class="quotelev1">&gt; later moment. That means the socket might be still in use for the  
</span><br>
<span class="quotelev1">&gt; next run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
This is not Linux specific. This is required by TCP RFC. Socket that
<br>
initiated close will remain in TIME_WAIT state for round-trip time.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3511.php">Marcin Skoczylas: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>In reply to:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3506.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
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
