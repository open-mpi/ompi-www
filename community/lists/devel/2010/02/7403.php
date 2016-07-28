<?
$subject_val = "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 06:41:22 2010" -->
<!-- isoreceived="20100211114122" -->
<!-- sent="Thu, 11 Feb 2010 06:41:15 -0500" -->
<!-- isosent="20100211114115" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90" -->
<!-- id="D85B3872-6A3E-4546-9C61-1207826829BB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100211060021.GA11570_at_gmx.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 06:41:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7404.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure with zero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>In reply to:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7428.php">Chris Samuel: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7428.php">Chris Samuel: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7435.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2010, at 1:00 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * Jeff Squyres wrote on Wed, Feb 10, 2010 at 10:02:27PM CET:
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Add -DOPEN_MPI=1 to the mpif77 and mpif90 command lines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It won't work with IBM xlf which needs -WF,-D.  I'm sure there are other
</span><br>
<span class="quotelev1">&gt; Fortran compilers that don't grok -D either (and may not have any other
</span><br>
<span class="quotelev1">&gt; flag), but I'm not sure whether OpenMPI cares about them.
</span><br>
<p>Ah, good!  
<br>
<p>If we care, it is easy enough to add a configure test to figure this kind of stuff out.  
<br>
<p>Are you aware of any other Fortran compilers that don't accept -D, and if so, what flags they *do* accept?  I would imagine a configure test that tries to compile a fortran program that requires some preprocessor symbol to be set and then tries a few different command line flags (e.g., -D, -WF,-D, ...etc.) to figure out which one works (if any).  Hence, having a list of possible flags to check would be most useful.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7404.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure with zero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>In reply to:</strong> <a href="7402.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7428.php">Chris Samuel: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7428.php">Chris Samuel: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Reply:</strong> <a href="7435.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
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
