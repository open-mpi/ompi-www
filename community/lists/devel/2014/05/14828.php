<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 15:06:56 2014" -->
<!-- isoreceived="20140519190656" -->
<!-- sent="Mon, 19 May 2014 13:06:55 -0600" -->
<!-- isosent="20140519190655" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2" -->
<!-- id="20140519190655.GJ25411_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5t_50qmiCJC5YJE2U-g04nqeC13ezREDKnt1PFck-D7YA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-19 15:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14829.php">Nathan Hjelm: "[OMPI devel] RFC: extend the BTL interface to include atomic operations"</a>
<li><strong>Previous message:</strong> <a href="14827.php">Ralph Castain: "[OMPI devel] RFC: refactor PMI support"</a>
<li><strong>In reply to:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14830.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Reply:</strong> <a href="14830.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 19, 2014 at 02:14:57PM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;    Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    do you mean the bug/typo was not at line 487
</span><br>
<span class="quotelev1">&gt;    (e.g. btl_send was ok)
</span><br>
<span class="quotelev1">&gt;    but at line 498 ?
</span><br>
<span class="quotelev1">&gt;    (e.g. btl_send must be used instead of btl_eager)
</span><br>
<p>Yup. If you look at the next loop (L497) it looks through the btl_send
<br>
list and then calls del_procs if it finds the btl in that list.
<br>
<p><span class="quotelev1">&gt;    at first sight, that make sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    i'd rather let the author/maintainer of this part comment on that
</span><br>
<p>I don't know if the original author still works on Open MPI. I think we
<br>
will have to guess the intent of the code. Let me take a closer look and
<br>
see if I can determine for sure what was intended. If I can determine
<br>
for sure I will include this change with another bml fix that needs to
<br>
go in.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14828/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14829.php">Nathan Hjelm: "[OMPI devel] RFC: extend the BTL interface to include atomic operations"</a>
<li><strong>Previous message:</strong> <a href="14827.php">Ralph Castain: "[OMPI devel] RFC: refactor PMI support"</a>
<li><strong>In reply to:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14830.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Reply:</strong> <a href="14830.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
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
