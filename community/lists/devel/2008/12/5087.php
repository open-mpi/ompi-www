<?
$subject_val = "Re: [OMPI devel] sm BTL &quot;extra procs&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 02:58:08 2008" -->
<!-- isoreceived="20081224075808" -->
<!-- sent="Wed, 24 Dec 2008 02:58:02 -0500" -->
<!-- isosent="20081224075802" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL &amp;quot;extra procs&amp;quot;" -->
<!-- id="EBA0EE81-DDFC-4E27-8754-F8B94B960461_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="495128A4.2080609_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 02:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5088.php">Jeff Squyres: "[OMPI devel] ohloh.net and CIA.vc stats"</a>
<li><strong>Previous message:</strong> <a href="5086.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] [Fwd: CS server downtime 12/30/08]"</a>
<li><strong>In reply to:</strong> <a href="5085.php">Eugene Loh: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Rich stated, the original design of the SM BTL included [some]  
<br>
support for dynamic processes. Over the years, by lack of interest and  
<br>
man-power this support was more or less dropped. Some pieces of the  
<br>
code were removed or disabled, but apparently not everything.
<br>
<p>However, lately the interest for dynamic support over SM was revived  
<br>
at UTK. We are currently working on a new version of the SM BTL that  
<br>
will support MPI-2 dynamics over SM. Therefore, I think the safest  
<br>
approach right now is to keep the code and back the default value to  
<br>
zero (and eventually make the corresponding MCA parameter hidden and/ 
<br>
or read-only).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 23, 2008, at 13:06 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Well, and we only allocate extra FIFOs, but we don't initialize  
</span><br>
<span class="quotelev1">&gt; them.  Also, the eager free list is initially set up to grow with  
</span><br>
<span class="quotelev1">&gt; the number of connections (some attempt to avoid deadlock, I  
</span><br>
<span class="quotelev1">&gt; imagine), but this initial eager free list size doesn't account for  
</span><br>
<span class="quotelev1">&gt; the extra procs either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, shall we remove that code and associated MCA parameters?  Or, as  
</span><br>
<span class="quotelev1">&gt; Lenny suggests, just back the default down to 0 and leave the code in?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not needed now.  Since we did not want to deal with trying to grow  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; shared memory file after it's allocation, with all the required
</span><br>
<span class="quotelev2">&gt;&gt; synchronization, we allocated extra memory up front - for dynamic  
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; control.  Since this has never been enabled, we really don't need  
</span><br>
<span class="quotelev2">&gt;&gt; this extra
</span><br>
<span class="quotelev2">&gt;&gt; memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/22/08 11:47 AM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why does the sm BTL allocate &quot;extra procs&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_s">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_s</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m.c?version=19785#L403
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In particular:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *) sm_max_procs is -1 (so there is no max)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *) sm_sm_extra_procs (sic, this is the ompi_info name) is 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, if there are n procs on the node, it allocates FIFOs for n*(n+2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections.  Why?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5088.php">Jeff Squyres: "[OMPI devel] ohloh.net and CIA.vc stats"</a>
<li><strong>Previous message:</strong> <a href="5086.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] [Fwd: CS server downtime 12/30/08]"</a>
<li><strong>In reply to:</strong> <a href="5085.php">Eugene Loh: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
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
