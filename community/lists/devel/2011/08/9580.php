<?
$subject_val = "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 09:13:07 2011" -->
<!-- isoreceived="20110802131307" -->
<!-- sent="Tue, 2 Aug 2011 09:13:03 -0400" -->
<!-- isosent="20110802131303" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications" -->
<!-- id="CAANzjEkGfL3YFisA5_MWE_Q+SDaZOw6UsHzY-OtFpF7tz8t3qA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110727195246.GC1924_at_iocane.lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 09:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Previous message:</strong> <a href="9579.php">Josh Hursey: "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9562.php">Eric Roman: "[OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>Thanks for the great work on this integration. I filed a ticket for
<br>
the problem areas that you highlighted with the Open MPI side of the
<br>
integration so we do not lose track of them.
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2842">https://svn.open-mpi.org/trac/ompi/ticket/2842</a>
<br>
<p>Hopefully we will get some cycles to address these issues in the near term.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Wed, Jul 27, 2011 at 3:52 PM, Eric Roman &lt;ERoman_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Open MPI Developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've been working on using Torque's checkpoint/restart support, along with BLCR
</span><br>
<span class="quotelev1">&gt; and Open MPI's C/R support, to perform C/R on parallel jobs running under
</span><br>
<span class="quotelev1">&gt; Torque. &#160;The main issue here is that Open MPI requires the use of
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint and ompi-restart commands to checkpoint the application, but
</span><br>
<span class="quotelev1">&gt; Torque uses cr_checkpoint and cr_restart to checkpoint job scripts, so an
</span><br>
<span class="quotelev1">&gt; adapter is required between the two interfaces. &#160;I've written a small program,
</span><br>
<span class="quotelev1">&gt; called cr_mpirun, that meets this purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code is now available on the BLCR web site that should enable you to use
</span><br>
<span class="quotelev1">&gt; BLCR cr_checkpoint and cr_restart commands to checkpoint Open MPI applications.
</span><br>
<span class="quotelev1">&gt; You can download it at the following URL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://upc-bugs.lbl.gov/blcr-dist/cr_mpirun/cr_mpirun-210.tar.gz">https://upc-bugs.lbl.gov/blcr-dist/cr_mpirun/cr_mpirun-210.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code can be used fairly reliably to invoke cr_checkpoint and cr_restart on
</span><br>
<span class="quotelev1">&gt; Open MPI applications. &#160;In turn, this enables you to use Torque's
</span><br>
<span class="quotelev1">&gt; checkpoint/restart support on parallel jobs. &#160;I've tested mainly with qhold and
</span><br>
<span class="quotelev1">&gt; qrls, but have also experimented with using Maui's preemptee and preemptor
</span><br>
<span class="quotelev1">&gt; classes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This release is intended as a development release, meaning that this release is
</span><br>
<span class="quotelev1">&gt; not suitable for general production use, but should be used for testing. &#160;There
</span><br>
<span class="quotelev1">&gt; are a number of issues that need to be worked out, and we need feedback from
</span><br>
<span class="quotelev1">&gt; Torque and Open MPI developers, and from users interested in testing or filing
</span><br>
<span class="quotelev1">&gt; bug reports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a list of known issues documented in the BUGS file in the release.
</span><br>
<span class="quotelev1">&gt; There are HOWTO files in the release that describe the implementation,
</span><br>
<span class="quotelev1">&gt; workarounds for current problems, and usage of cr_mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your interest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Eric Roman
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Previous message:</strong> <a href="9579.php">Josh Hursey: "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9562.php">Eric Roman: "[OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
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
