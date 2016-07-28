<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 13:29:43 2013" -->
<!-- isoreceived="20130719172943" -->
<!-- sent="Fri, 19 Jul 2013 17:29:11 +0000" -->
<!-- isosent="20130719172911" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup" -->
<!-- id="CE0ED16D.12355%bwbarre_at_sandia.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C10C61AC-26EF-49D2-BBD8-D6D7DBEBD7A9_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 13:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12668.php">Jeff Squyres (jsquyres): "[OMPI devel] New SVN commit message tokens for CMRs"</a>
<li><strong>Previous message:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12669.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12669.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/19/13 10:58 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;1. The BML endpoint structure (aka. BML proc) is well known and defined
</span><br>
<span class="quotelev1">&gt;in the bml.h. So it is not technically opaque&#138;
</span><br>
<p>It's opaque in that outside of the R2 BML, users were not supposed to poke
<br>
at what's in proc_bml without using the BML interface.  Some do, although
<br>
that was easy to accommodate.
<br>
<p><span class="quotelev1">&gt;2. When allocating an ompi_proc_t structure you will always have to
</span><br>
<span class="quotelev1">&gt;allocate for an array large enough to contain up to the max size detected
</span><br>
<span class="quotelev1">&gt;during configure. There is significant potential for oversized arrays in
</span><br>
<span class="quotelev1">&gt;one of the most space critical structure.
</span><br>
<p>It could, if we're not careful with our tag requests.  In the prototype I
<br>
wrote up, the sizes of endpoint storage in ompi_proc_t are as follows:
<br>
<p>&nbsp;&nbsp;* Current trunk: 16 bytes
<br>
&nbsp;&nbsp;* Proposed trunk, no dynamic support, no MTLs: 8 bytes
<br>
&nbsp;&nbsp;* Proposed trunk, dynamic support, no MTLs: 16 bytes
<br>
&nbsp;&nbsp;* Proposed trunk, dynamic support, MXM, PSM, or MX: 24 bytes
<br>
&nbsp;&nbsp;* Proposed trunk, Portals, no dynamic support: 16 bytes
<br>
&nbsp;&nbsp;* Proposed trunk, Portals, dynamic support: 24 bytes
<br>
&nbsp;&nbsp;* Proposed trunk, Portals, MX, PSM, or MXM, dynamic support: 32 bytes
<br>
<p>So, yes, you're right.  But the situations where you see growth are not
<br>
normal OMPI builds (for example, Portals &amp; MXM support).  In the common
<br>
cases, we could actually shrink by 8 bytes by disabling dynamic support.
<br>
It would also (finally) allow us to run the MTLs and BTLs simultaneously,
<br>
which is something we haven't been able to do previously.
<br>
<p><span class="quotelev1">&gt;3. I don't know at which point this really matter but with this change
</span><br>
<span class="quotelev1">&gt;two Open MPI libraries might become binary incompatible (if the #define
</span><br>
<span class="quotelev1">&gt;is exchanged between nodes).
</span><br>
<p>The #defines are local process only.  ompi_proc_ts aren't global
<br>
structures (the pointer to them is), so there's no binary incompatibility.
<br>
<p>I hacked up a prototype in tmp-public/snl-proc-tags/ last night.  It
<br>
currently lacks dynamic support (since we have no users for that), but
<br>
otherwise works.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12667/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12668.php">Jeff Squyres (jsquyres): "[OMPI devel] New SVN commit message tokens for CMRs"</a>
<li><strong>Previous message:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12669.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12669.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
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
