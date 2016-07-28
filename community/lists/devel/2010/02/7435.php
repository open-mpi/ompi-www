<?
$subject_val = "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 05:37:04 2010" -->
<!-- isoreceived="20100212103704" -->
<!-- sent="Fri, 12 Feb 2010 11:36:54 +0100" -->
<!-- isosent="20100212103654" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90" -->
<!-- id="20100212103653.GA13187_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D85B3872-6A3E-4546-9C61-1207826829BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 05:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7436.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7434.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7403.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7436.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7436.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Thu, Feb 11, 2010 at 12:41:15PM CET:
<br>
<span class="quotelev1">&gt; On Feb 11, 2010, at 1:00 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; * Jeff Squyres wrote on Wed, Feb 10, 2010 at 10:02:27PM CET:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WHAT: Add -DOPEN_MPI=1 to the mpif77 and mpif90 command lines
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It won't work with IBM xlf which needs -WF,-D.  I'm sure there are other
</span><br>
<span class="quotelev2">&gt; &gt; Fortran compilers that don't grok -D either (and may not have any other
</span><br>
<span class="quotelev2">&gt; &gt; flag), but I'm not sure whether OpenMPI cares about them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, good!  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we care, it is easy enough to add a configure test to figure this
</span><br>
<span class="quotelev1">&gt; kind of stuff out.  
</span><br>
<p>Sure.
<br>
<p><span class="quotelev1">&gt; Are you aware of any other Fortran compilers that don't accept -D, and
</span><br>
<span class="quotelev1">&gt; if so, what flags they *do* accept?
</span><br>
<p>I've come across old Fortran 77 compilers that don't do any preprocessing
<br>
and thus don't accept any related flags.  I don't remember details
<br>
though, and I'm not aware of any currently-used ones; my experience with
<br>
Fortran compilers is limited though.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7436.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7434.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7403.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7436.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7436.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
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
