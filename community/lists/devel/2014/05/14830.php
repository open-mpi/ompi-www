<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 23:01:47 2014" -->
<!-- isoreceived="20140520030147" -->
<!-- sent="Tue, 20 May 2014 12:02:09 +0900" -->
<!-- isosent="20140520030209" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2" -->
<!-- id="537AC5B1.308_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140519190655.GJ25411_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-19 23:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14831.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4645: Move r31786, 31829, r31830, r31833, r31834, r31835 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()) (was: Move r31786, 31829, r31830 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()))"</a>
<li><strong>Previous message:</strong> <a href="14829.php">Nathan Hjelm: "[OMPI devel] RFC: extend the BTL interface to include atomic operations"</a>
<li><strong>In reply to:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>r31829 caused many sigsegv :-(
<br>
/* i am testing on a RHEL6.3 like VM with --mca btl,tcp */
<br>
<p>this is now fixed in r31830,
<br>
i think i get the intent of the code and i believe we are all set now.
<br>
<p>bottom line :
<br>
- we agree on line 487 (e.g. use btl_send)
<br>
- your update of line 485 is correct (e.g. use btl_send)
<br>
- my suggested update of line 498 (e.g. use btl_send) was correct.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/05/20 4:06, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; On Mon, May 19, 2014 at 02:14:57PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    Nathan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    do you mean the bug/typo was not at line 487
</span><br>
<span class="quotelev2">&gt;&gt;    (e.g. btl_send was ok)
</span><br>
<span class="quotelev2">&gt;&gt;    but at line 498 ?
</span><br>
<span class="quotelev2">&gt;&gt;    (e.g. btl_send must be used instead of btl_eager)
</span><br>
<span class="quotelev1">&gt; Yup. If you look at the next loop (L497) it looks through the btl_send
</span><br>
<span class="quotelev1">&gt; list and then calls del_procs if it finds the btl in that list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    at first sight, that make sense.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    i'd rather let the author/maintainer of this part comment on that
</span><br>
<span class="quotelev1">&gt; I don't know if the original author still works on Open MPI. I think we
</span><br>
<span class="quotelev1">&gt; will have to guess the intent of the code. Let me take a closer look and
</span><br>
<span class="quotelev1">&gt; see if I can determine for sure what was intended. If I can determine
</span><br>
<span class="quotelev1">&gt; for sure I will include this change with another bml fix that needs to
</span><br>
<span class="quotelev1">&gt; go in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14828.php">http://www.open-mpi.org/community/lists/devel/2014/05/14828.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14831.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4645: Move r31786, 31829, r31830, r31833, r31834, r31835 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()) (was: Move r31786, 31829, r31830 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()))"</a>
<li><strong>Previous message:</strong> <a href="14829.php">Nathan Hjelm: "[OMPI devel] RFC: extend the BTL interface to include atomic operations"</a>
<li><strong>In reply to:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
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
