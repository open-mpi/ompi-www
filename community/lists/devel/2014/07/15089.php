<?
$subject_val = "Re: [OMPI devel] trunk and fortran errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 05:41:40 2014" -->
<!-- isoreceived="20140710094140" -->
<!-- sent="Thu, 10 Jul 2014 18:41:59 +0900" -->
<!-- isosent="20140710094159" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk and fortran errors" -->
<!-- id="53BE5FE7.3050108_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC146769-ED59-4860-91D2-3749DA58BDD3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk and fortran errors<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 05:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15090.php">Mike Dubman: "[OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15088.php">George Bosilca: "Re: [OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<li><strong>In reply to:</strong> <a href="15081.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Reply:</strong> <a href="15092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On CentOS 5.x, gfortran is unable to compile this simple program :
<br>
<p>subroutine foo ()
<br>
&nbsp;&nbsp;use, intrinsic :: iso_c_binding, only : c_ptr
<br>
end subroutine foo
<br>
<p>an other workaround is to install gfortran 4.4
<br>
(yum install gcc44-gfortran)
<br>
and configure with
<br>
FC=gfortran44
<br>
<p><p>On 2014/07/09 19:46, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; This is almost certainly due to r32162 (Fortran commit from last night).
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; For the moment/as a workaround, use --disable-mpi-fortran in your builds if you are building with an older gfortran.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15090.php">Mike Dubman: "[OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15088.php">George Bosilca: "Re: [OMPI devel] [patch] man and FUNC_NAME corrections"</a>
<li><strong>In reply to:</strong> <a href="15081.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Reply:</strong> <a href="15092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
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
