<?
$subject_val = "Re: [OMPI devel] sm BTL &quot;extra procs&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 09:05:27 2008" -->
<!-- isoreceived="20081223140527" -->
<!-- sent="Tue, 23 Dec 2008 09:05:16 -0500" -->
<!-- isosent="20081223140516" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL &amp;quot;extra procs&amp;quot;" -->
<!-- id="C5765A4C.2C9B1%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="494FC494.6060205_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm BTL &quot;extra procs&quot;<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 09:05:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5084.php">Lenny Verkhovsky: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Previous message:</strong> <a href="5082.php">Eugene Loh: "[OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>In reply to:</strong> <a href="5082.php">Eugene Loh: "[OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5084.php">Lenny Verkhovsky: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Reply:</strong> <a href="5084.php">Lenny Verkhovsky: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Reply:</strong> <a href="5085.php">Eugene Loh: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not needed now.  Since we did not want to deal with trying to grow the
<br>
shared memory file after it's allocation, with all the required
<br>
synchronization, we allocated extra memory up front - for dynamic process
<br>
control.  Since this has never been enabled, we really don't need this extra
<br>
memory.
<br>
<p>Rich
<br>
<p><p>On 12/22/08 11:47 AM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Why does the sm BTL allocate &quot;extra procs&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_s">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_s</a>
</span><br>
<span class="quotelev1">&gt; m.c?version=19785#L403
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In particular:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) sm_max_procs is -1 (so there is no max)
</span><br>
<span class="quotelev1">&gt; *) sm_sm_extra_procs (sic, this is the ompi_info name) is 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, if there are n procs on the node, it allocates FIFOs for n*(n+2)
</span><br>
<span class="quotelev1">&gt; connections.  Why?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5084.php">Lenny Verkhovsky: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Previous message:</strong> <a href="5082.php">Eugene Loh: "[OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>In reply to:</strong> <a href="5082.php">Eugene Loh: "[OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5084.php">Lenny Verkhovsky: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Reply:</strong> <a href="5084.php">Lenny Verkhovsky: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Reply:</strong> <a href="5085.php">Eugene Loh: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
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
