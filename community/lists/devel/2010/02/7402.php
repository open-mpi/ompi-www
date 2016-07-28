<?
$subject_val = "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 01:00:31 2010" -->
<!-- isoreceived="20100211060031" -->
<!-- sent="Thu, 11 Feb 2010 07:00:23 +0100" -->
<!-- isosent="20100211060023" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90" -->
<!-- id="20100211060021.GA11570_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="440A7301-CE9B-447F-AE48-A095F80A8A6A_at_cisco.com" -->
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
<strong>Date:</strong> 2010-02-11 01:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7403.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7401.php">Jeff Squyres: "[OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>In reply to:</strong> <a href="7401.php">Jeff Squyres: "[OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7403.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7403.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Wed, Feb 10, 2010 at 10:02:27PM CET:
<br>
<span class="quotelev1">&gt; WHAT: Add -DOPEN_MPI=1 to the mpif77 and mpif90 command lines
</span><br>
<p><span class="quotelev1">&gt; But we can put -DOPEN_MPI=1 in the argv that the wrapper adds.  This
</span><br>
<span class="quotelev1">&gt; seems like a safe way to add it; it makes no difference whether the
</span><br>
<span class="quotelev1">&gt; Fortran file is set to the preprocessor or not when it is compiled.
</span><br>
<p>It won't work with IBM xlf which needs -WF,-D.  I'm sure there are other
<br>
Fortran compilers that don't grok -D either (and may not have any other
<br>
flag), but I'm not sure whether OpenMPI cares about them.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7403.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7401.php">Jeff Squyres: "[OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>In reply to:</strong> <a href="7401.php">Jeff Squyres: "[OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7403.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7403.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
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
