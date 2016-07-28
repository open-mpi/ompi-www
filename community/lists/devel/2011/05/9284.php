<?
$subject_val = "Re: [OMPI devel] F90 open-mpi module bug";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 10:20:31 2011" -->
<!-- isoreceived="20110521142031" -->
<!-- sent="Sat, 21 May 2011 07:20:25 -0700" -->
<!-- isosent="20110521142025" -->
<!-- name="Dan Reynolds" -->
<!-- email="dannoryan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] F90 open-mpi module bug" -->
<!-- id="SNT136-w36264388F799B70C7096AA1700_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EE01AA7A-4032-407E-9F4D-D23801162B27_at_cisco.com" -->
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
<strong>From:</strong> Dan Reynolds (<em>dannoryan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-21 10:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Reply:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rightly so.  Sorry for posting a bug to the developer list.  It's just that the bug was years old and had compiled on so many systems, plus the gfortran error message was entirely unhelpful, so I hadn't realized to look at the arguments as the cause of the error. My guess is that the F90 module in other distrubutions (MPICH, MVAPICH, IBM, ...) don't declare &quot;intent&quot; on the variables, so it always just went through.
<br>
<p>Thanks again,
<br>
Dan
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 21 May 2011 06:46:15 -0400
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; CC: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] F90 open-mpi module bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nick's right - changing your test program to use ierr instead of 0 makes it compile on OMPI for me.  Hence, the F90 module is actually doing exactly what it is supposed to do: tell you when you have a compile time error in your code. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure why it compiles for you on MPICH - perhaps they don't have an explicit F90 interface for MPI_ABORT...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 21, 2011, at 6:14 AM, &quot;N.M. Maclaren&quot; &lt;nmm1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 21 2011, Dan Reynolds wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./test_driver.F90:12.39: call mpi_abort(MPI_COMM_WORLD, -1, 0)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's unlikely to provoke that particular error, but that call is erroneous.
</span><br>
<span class="quotelev2">&gt; &gt; It should be something like:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: ierror
</span><br>
<span class="quotelev2">&gt; &gt;   call mpi_abort(MPI_COMM_WORLD, 1, ierror)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Negative error numbers aren't forbidden, but aren't advisable.  However,
</span><br>
<span class="quotelev2">&gt; &gt; passing a constant to an INTENT(OUT) argument is a serious no-no.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can imagine compilers where it might provoke that error, but I doubt
</span><br>
<span class="quotelev2">&gt; &gt; that it is the cause.  It's worth fixing and retrying, anyway.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nick Maclaren.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>In reply to:</strong> <a href="9283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Reply:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI devel] F90 open-mpi module bug"</a>
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
