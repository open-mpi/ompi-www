<?
$subject_val = "Re: [OMPI devel] RFC: remove opal_trace macro";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 14 14:59:26 2013" -->
<!-- isoreceived="20130714185926" -->
<!-- sent="Sun, 14 Jul 2013 11:59:19 -0700" -->
<!-- isosent="20130714185919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove opal_trace macro" -->
<!-- id="07F7C19D-F0B1-46B4-A05A-381AF2678B48_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57odCEEji1YW9y0fdGtdQyZPDCkKf-ait0W4Tm8xNoyM6xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove opal_trace macro<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-14 14:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12601.php">Vasiliy: "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>Previous message:</strong> <a href="12599.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12587.php">Ralph Castain: "[OMPI devel] RFC: remove opal_trace macro"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I went ahead and committed this after finding only *one* reference to OPAL_TRACE anywhere in the ompi code base.
<br>
<p>On Jul 11, 2013, at 9:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: remove the old and stale &quot;OPAL_TRACE&quot; macro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: it is old, stale, no longer needed, and largely unused
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: since it is virtually unused, a short timeout seems appropriate
</span><br>
<span class="quotelev1">&gt;             so let's set it for Tues 7/16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12601.php">Vasiliy: "[OMPI devel] 'make re-install' : remove 'ortecc' symlink also"</a>
<li><strong>Previous message:</strong> <a href="12599.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12587.php">Ralph Castain: "[OMPI devel] RFC: remove opal_trace macro"</a>
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
