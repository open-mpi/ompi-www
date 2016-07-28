<?
$subject_val = "Re: [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 14:28:03 2009" -->
<!-- isoreceived="20090205192803" -->
<!-- sent="Thu, 05 Feb 2009 14:27:52 -0500" -->
<!-- isosent="20090205192752" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;unknown&amp;quot; in-coming fragment in sm BTL" -->
<!-- id="C5B0A7E8.2F380%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498B224B.1020402_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 14:27:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5379.php">Eugene Loh: "[OMPI devel] add_procs"</a>
<li><strong>Previous message:</strong> <a href="5377.php">Terry Dontje: "[OMPI devel] OMPI Developer meeting on 02/12/09"</a>
<li><strong>In reply to:</strong> <a href="5376.php">Eugene Loh: "[OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the pt-2-pt code, the default case should never be hit - it would be a
<br>
bug in the code.  Don't know about other uses of the sm btl.
<br>
<p>Rich
<br>
<p><p>On 2/5/09 12:30 PM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In btl_sm_component.c, mca_btl_sm_component_progress() polls on FIFOs.
</span><br>
<span class="quotelev1">&gt; If it gets something, it has a &quot;switch&quot; statement with cases for send
</span><br>
<span class="quotelev1">&gt; fragments, returned fragments (ACKs) to be returned to the freelist, and
</span><br>
<span class="quotelev1">&gt; default/unknown.  What's that default/unknown case about?  What behavior
</span><br>
<span class="quotelev1">&gt; should it produce?  What assumptions does/can it make?  Is this a panic
</span><br>
<span class="quotelev1">&gt; code path that should never be exercised?  Is it all right to let this
</span><br>
<span class="quotelev1">&gt; code path break since it should never be encountered anyhow and the
</span><br>
<span class="quotelev1">&gt; behavior doesn't even make sense?  (Someone sent me something.  They
</span><br>
<span class="quotelev1">&gt; weren't supposed to and I don't know what to do with it.  So, I'm going
</span><br>
<span class="quotelev1">&gt; to send it back to them.)
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
<li><strong>Next message:</strong> <a href="5379.php">Eugene Loh: "[OMPI devel] add_procs"</a>
<li><strong>Previous message:</strong> <a href="5377.php">Terry Dontje: "[OMPI devel] OMPI Developer meeting on 02/12/09"</a>
<li><strong>In reply to:</strong> <a href="5376.php">Eugene Loh: "[OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL"</a>
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
