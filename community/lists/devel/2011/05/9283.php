<?
$subject_val = "Re: [OMPI devel] F90 open-mpi module bug";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 06:46:25 2011" -->
<!-- isoreceived="20110521104625" -->
<!-- sent="Sat, 21 May 2011 06:46:15 -0400" -->
<!-- isosent="20110521104615" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] F90 open-mpi module bug" -->
<!-- id="EE01AA7A-4032-407E-9F4D-D23801162B27_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.3.1105211113430.20095_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-21 06:46:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Reply:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nick's right - changing your test program to use ierr instead of 0 makes it compile on OMPI for me.  Hence, the F90 module is actually doing exactly what it is supposed to do: tell you when you have a compile time error in your code. :)
<br>
<p>I'm not sure why it compiles for you on MPICH - perhaps they don't have an explicit F90 interface for MPI_ABORT...?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On May 21, 2011, at 6:14 AM, &quot;N.M. Maclaren&quot; &lt;nmm1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 21 2011, Dan Reynolds wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./test_driver.F90:12.39: call mpi_abort(MPI_COMM_WORLD, -1, 0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's unlikely to provoke that particular error, but that call is erroneous.
</span><br>
<span class="quotelev1">&gt; It should be something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer :: ierror
</span><br>
<span class="quotelev1">&gt;   call mpi_abort(MPI_COMM_WORLD, 1, ierror)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Negative error numbers aren't forbidden, but aren't advisable.  However,
</span><br>
<span class="quotelev1">&gt; passing a constant to an INTENT(OUT) argument is a serious no-no.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can imagine compilers where it might provoke that error, but I doubt
</span><br>
<span class="quotelev1">&gt; that it is the cause.  It's worth fixing and retrying, anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Reply:</strong> <a href="9284.php">Dan Reynolds: "Re: [OMPI devel] F90 open-mpi module bug"</a>
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
