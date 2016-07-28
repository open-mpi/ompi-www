<?
$subject_val = "[OMPI devel] Porting the underlying fabric interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 00:20:10 2016" -->
<!-- isoreceived="20160204052010" -->
<!-- sent="Thu, 4 Feb 2016 00:20:09 -0500" -->
<!-- isosent="20160204052009" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] Porting the underlying fabric interface" -->
<!-- id="CAHXxYDj1e2-6mwog2Q1vNmgpBMAaJf9kwi2eujQ42Kdn7M1A9w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Porting the underlying fabric interface<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 00:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18545.php">Gilles Gouaillardet: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Previous message:</strong> <a href="18543.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18545.php">Gilles Gouaillardet: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Reply:</strong> <a href="18545.php">Gilles Gouaillardet: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi developers
<br>
<p>I am trying to add support for a new (proprietary) RDMA capable fabric
<br>
to OpenMPI and have the following question:
<br>
<p>As I understand, some networks are implemented as a PML framework and
<br>
some are implemented as a BTL framework. It seems there is even
<br>
overlap as Myrinet seems to exist in both.
<br>
<p>My question is: what is the difference between these two frameworks?
<br>
When adding support for a new fabric, what factors one should consider
<br>
when choosing between one type of framework over the other?
<br>
<p>And, with apologies for asking a summary question: is there any kind
<br>
of documentation and/or book that explains all the internal details of
<br>
the implementation (which looks little like voodoo to a newcomer like
<br>
me)?
<br>
<p>Thanks for your help.
<br>
<p>Durga Choudhury
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18545.php">Gilles Gouaillardet: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Previous message:</strong> <a href="18543.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18545.php">Gilles Gouaillardet: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Reply:</strong> <a href="18545.php">Gilles Gouaillardet: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
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
