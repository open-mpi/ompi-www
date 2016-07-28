<?
$subject_val = "Re: [OMPI devel] sm BTL &quot;extra procs&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 13:02:53 2008" -->
<!-- isoreceived="20081223180253" -->
<!-- sent="Tue, 23 Dec 2008 10:06:28 -0800" -->
<!-- isosent="20081223180628" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL &amp;quot;extra procs&amp;quot;" -->
<!-- id="495128A4.2080609_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5765A4C.2C9B1%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 13:06:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5086.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] [Fwd: CS server downtime 12/30/08]"</a>
<li><strong>Previous message:</strong> <a href="5084.php">Lenny Verkhovsky: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>In reply to:</strong> <a href="5083.php">Richard Graham: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5087.php">George Bosilca: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Reply:</strong> <a href="5087.php">George Bosilca: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, and we only allocate extra FIFOs, but we don't initialize them.  
<br>
Also, the eager free list is initially set up to grow with the number of 
<br>
connections (some attempt to avoid deadlock, I imagine), but this 
<br>
initial eager free list size doesn't account for the extra procs either.
<br>
<p>So, shall we remove that code and associated MCA parameters?  Or, as 
<br>
Lenny suggests, just back the default down to 0 and leave the code in?
<br>
<p>Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt;Not needed now.  Since we did not want to deal with trying to grow the
</span><br>
<span class="quotelev1">&gt;shared memory file after it's allocation, with all the required
</span><br>
<span class="quotelev1">&gt;synchronization, we allocated extra memory up front - for dynamic process
</span><br>
<span class="quotelev1">&gt;control.  Since this has never been enabled, we really don't need this extra
</span><br>
<span class="quotelev1">&gt;memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 12/22/08 11:47 AM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Why does the sm BTL allocate &quot;extra procs&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;E.g.,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;<a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_s">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_s</a>
</span><br>
<span class="quotelev2">&gt;&gt;m.c?version=19785#L403
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In particular:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;*) sm_max_procs is -1 (so there is no max)
</span><br>
<span class="quotelev2">&gt;&gt;*) sm_sm_extra_procs (sic, this is the ompi_info name) is 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;So, if there are n procs on the node, it allocates FIFOs for n*(n+2)
</span><br>
<span class="quotelev2">&gt;&gt;connections.  Why?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5086.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] [Fwd: CS server downtime 12/30/08]"</a>
<li><strong>Previous message:</strong> <a href="5084.php">Lenny Verkhovsky: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>In reply to:</strong> <a href="5083.php">Richard Graham: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5087.php">George Bosilca: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Reply:</strong> <a href="5087.php">George Bosilca: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
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
