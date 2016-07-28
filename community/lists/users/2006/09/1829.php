<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 11:23:45 2006" -->
<!-- isoreceived="20060906152345" -->
<!-- sent="Wed, 06 Sep 2006 08:53:46 -0600" -->
<!-- isosent="20060906145346" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Probable MPI2 bug?" -->
<!-- id="1157554426.22686.24.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="44FC69E9.4070507_at_reachone.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-06 10:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1830.php">Jeff Squyres: "Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>Previous message:</strong> <a href="1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="1818.php">Tom Rosmond: "[OMPI users] Probable MPI2 bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>Reply:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-09-04 at 11:01 -0700, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; Attached is some error output from my tests of 1-sided message
</span><br>
<span class="quotelev1">&gt; passing, plus my info file.  Below are two copies of a simple fortran
</span><br>
<span class="quotelev1">&gt; subroutine that mimics mpi_allgatherv using  mpi-get calls.  The top
</span><br>
<span class="quotelev1">&gt; version fails, the bottom runs OK.  It seems clear from these
</span><br>
<span class="quotelev1">&gt; examples, plus the 'self_send' phrases in the error output, that there
</span><br>
<span class="quotelev1">&gt; is a problem internally with a processor sending data to itself.  I
</span><br>
<span class="quotelev1">&gt; know that your 'mpi_get' implementation is simply a wrapper around
</span><br>
<span class="quotelev1">&gt; 'send/recv' calls, so clearly this shouldn't happen.  However, the
</span><br>
<span class="quotelev1">&gt; problem does not happen in all cases; I tried to duplicate it in a
</span><br>
<span class="quotelev1">&gt; simple stand-alone program with mpi_get calls and was unable to make
</span><br>
<span class="quotelev1">&gt; it fail.  Go figure.
</span><br>
<p>That is an odd failure and at first glance it does look like there is
<br>
something wrong with our one-sided implementation.  I've filed a bug in
<br>
our tracker about the issue and you should get updates on the ticket as
<br>
we work on the issue.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1830.php">Jeff Squyres: "Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>Previous message:</strong> <a href="1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="1818.php">Tom Rosmond: "[OMPI users] Probable MPI2 bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>Reply:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
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
