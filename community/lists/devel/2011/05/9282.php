<?
$subject_val = "Re: [OMPI devel] F90 open-mpi module bug";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 06:13:48 2011" -->
<!-- isoreceived="20110521101348" -->
<!-- sent="21 May 2011 11:13:43 +0100" -->
<!-- isosent="20110521101343" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] F90 open-mpi module bug" -->
<!-- id="Prayer.1.3.3.1105211113430.20095_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT136-w258D9916BE40BC208360DFA1700_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI devel] F90 open-mpi module bug<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-21 06:13:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9281.php">Dan Reynolds: "[OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9281.php">Dan Reynolds: "[OMPI devel] F90 open-mpi module bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Reply:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21 2011, Dan Reynolds wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./test_driver.F90:12.39: call mpi_abort(MPI_COMM_WORLD, -1, 0)
</span><br>
<p>It's unlikely to provoke that particular error, but that call is erroneous.
<br>
It should be something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierror
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_abort(MPI_COMM_WORLD, 1, ierror)
<br>
<p>Negative error numbers aren't forbidden, but aren't advisable.  However,
<br>
passing a constant to an INTENT(OUT) argument is a serious no-no.
<br>
<p>I can imagine compilers where it might provoke that error, but I doubt
<br>
that it is the cause.  It's worth fixing and retrying, anyway.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9281.php">Dan Reynolds: "[OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9281.php">Dan Reynolds: "[OMPI devel] F90 open-mpi module bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Reply:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
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
