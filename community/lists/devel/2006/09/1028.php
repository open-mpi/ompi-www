<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 19:19:26 2006" -->
<!-- isoreceived="20060905231926" -->
<!-- sent="Tue, 5 Sep 2006 16:19:19 -0700" -->
<!-- isosent="20060905231919" -->
<!-- name="Ben Byer" -->
<!-- email="bbyer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] include file locations" -->
<!-- id="33BE0135-3C0E-43D4-A502-321E6FF2F772_at_apple.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1157487675.5599.30.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Ben Byer (<em>bbyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 19:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1029.php">Ralf Wildenhues: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run	OpenIB BTL"</a>
<li><strong>Previous message:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
<li><strong>In reply to:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2006, at 1:21 PM, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Tue, 2006-09-05 at 12:07 -0700, Ben Byer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason that those 7 include files installed in /usr/
</span><br>
<span class="quotelev2">&gt;&gt; include shouldn't be installed in /usr/include/openmpi instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI users generally expect to find mpi.h and mpif.h in $prefix/ 
</span><br>
<span class="quotelev1">&gt; include.
</span><br>
<span class="quotelev1">&gt; The mpif-common.h and mpif-config.h are artifacts of the way we deal
</span><br>
<span class="quotelev1">&gt; with the mixture of Fortran 77 and Fortran 90 bindings.  Thinking  
</span><br>
<span class="quotelev1">&gt; about
</span><br>
<span class="quotelev1">&gt; it, mpif.h, mpif-common.h, and mpif-config.h really shouldn't be
</span><br>
<span class="quotelev1">&gt; installed if you don't have Fortran 77 / Fortran 90 bindings.  This
</span><br>
<span class="quotelev1">&gt; needs to be fixed in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; constants.h, totalview.h, and types.h should not have been  
</span><br>
<span class="quotelev1">&gt; installed in
</span><br>
<span class="quotelev1">&gt; $prefix/include.  This was a mistake in the 1.1 release that was fixed
</span><br>
<span class="quotelev1">&gt; in 1.1.1.
</span><br>
<p>Okay -- I'll upgrade to 1.1.1 and nuke the mpif* files, and I guess  
<br>
it makes sense to have /usr/include/mpi.h.
<br>
<p>Thanks for the help!
<br>
Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1029.php">Ralf Wildenhues: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run	OpenIB BTL"</a>
<li><strong>Previous message:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
<li><strong>In reply to:</strong> <a href="1027.php">Brian Barrett: "Re: [OMPI devel] include file locations"</a>
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
