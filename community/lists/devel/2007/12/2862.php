<?
$subject_val = "Re: [OMPI devel] pointer_array";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 16 00:01:16 2007" -->
<!-- isoreceived="20071216050116" -->
<!-- sent="Sun, 16 Dec 2007 00:01:12 -0500" -->
<!-- isosent="20071216050112" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pointer_array" -->
<!-- id="ea86ce220712152101t5b16feebu45183b7f6c8a8e6d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5DD6B56B-CFD2-4FD6-AB3E-DFDE0F21D646_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pointer_array<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-16 00:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2863.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Previous message:</strong> <a href="2861.php">George Bosilca: "[OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2861.php">George Bosilca: "[OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2865.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2865.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The patch looks good to my eyeballs, though I've not done any testing with it.
<br>
I presume a follow on patch would remove the orte_pointer_array.[ch] files?
<br>
<p>On Dec 15, 2007 4:01 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have a patch that unify the pointer array implementations into just
</span><br>
<span class="quotelev1">&gt; one. Right now, we have 2 pointer array implementations: one for ORTE
</span><br>
<span class="quotelev1">&gt; and one for OMPI. The differences are small and mostly insignificant
</span><br>
<span class="quotelev1">&gt; (there is no way to add more than 2^31 elements in the pointer array
</span><br>
<span class="quotelev1">&gt; anyway). The following patch propose to merge these two pointer array
</span><br>
<span class="quotelev1">&gt; into one, implemented in OPAL (and called opal_pointer_array).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If nobody has complained before Wednesday noon I'll commit the patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2863.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Previous message:</strong> <a href="2861.php">George Bosilca: "[OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2861.php">George Bosilca: "[OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2865.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2865.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
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
