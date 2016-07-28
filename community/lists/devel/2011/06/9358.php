<?
$subject_val = "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 12:56:15 2011" -->
<!-- isoreceived="20110610165615" -->
<!-- sent="Fri, 10 Jun 2011 12:56:11 -0400" -->
<!-- isosent="20110610165611" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions" -->
<!-- id="BANLkTinfPvFB73_GvUB9_xcsVHduwYgzfQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="350C7F54-BEEC-46AA-A7E9-03A0400CA9B8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-10 12:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9359.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9357.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9360.php">Josh Hursey: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>Reply:</strong> <a href="9360.php">Josh Hursey: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reminder that this RFC goes in later today.
<br>
<p>On Wed, Jun 8, 2011 at 10:32 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This one's a no-brainer, folks. &#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh [re]discovered that we didn't initially support Fortran interfaces for the extensions when he was trying to make a complete implementation for an MPI-3 Forum proposal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2011, at 10:11 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Fortran 77 and 90 support for the Open MPI Extensions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Trunk only supports C.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: build system updates, ompi/mpiext
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Open MPI trunk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Friday, June 10, 2011 COB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details:
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A bitbucket branch is available here (last sync to r24757 of trunk)
</span><br>
<span class="quotelev2">&gt;&gt; &#160;<a href="https://bitbucket.org/jjhursey/ompi-ext-fortran">https://bitbucket.org/jjhursey/ompi-ext-fortran</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current Open MPI trunk supports only C interfaces to Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; interface extensions. This branch adds support for f77 and f90.
</span><br>
<span class="quotelev2">&gt;&gt; Supporting these three language interfaces enables Fortran
</span><br>
<span class="quotelev2">&gt;&gt; applications to take advantage of available interface extensions.
</span><br>
<span class="quotelev2">&gt;&gt; Configure detects if the extension supports C, f77, and/or f90 and
</span><br>
<span class="quotelev2">&gt;&gt; takes the appropriate action. The C interfaces are required, and the
</span><br>
<span class="quotelev2">&gt;&gt; f77/f90 interfaces are optional. This fix does not require changes to
</span><br>
<span class="quotelev2">&gt;&gt; any existing extensions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9359.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9357.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9360.php">Josh Hursey: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>Reply:</strong> <a href="9360.php">Josh Hursey: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
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
