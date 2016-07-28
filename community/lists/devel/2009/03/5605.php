<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 21:49:37 2009" -->
<!-- isoreceived="20090311014937" -->
<!-- sent="Tue, 10 Mar 2009 21:49:29 -0400" -->
<!-- isosent="20090311014929" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="9FE5116A-D945-4A8E-AC04-B7BD46E518D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6D85BFAE-F9C3-4DD1-8C1A-E7956AF5FB97_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 21:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5606.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5604.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5603.php">Jeff Squyres: "[OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5606.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5606.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2009, at 9:13 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Doh -- I'm seeing intermittent sm btl failures on Cisco 1.3.1 MTT.  :-
</span><br>
<span class="quotelev1">&gt; (  I can't reproduce them manually, but they seem to only happen in a
</span><br>
<span class="quotelev1">&gt; very small fraction of overall MTT runs.  I'm seeing at least 3
</span><br>
<span class="quotelev1">&gt; classes of errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. btl_sm_add_procs.c:529 which is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if(mca_btl_sm_component.fifo[j][my_smp_rank].head_lock !=
</span><br>
<span class="quotelev1">&gt; NULL) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; j = 3, my_smp_rank = 1.  mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev1">&gt; appears to have a valid value in it (i.e., .fifo[3][0] = x, .fifo[3]
</span><br>
<span class="quotelev1">&gt; [1] = x+offset, .fifo[3][2] = x+2*offset, .fifo[3][3] = x+3*offset.
</span><br>
<span class="quotelev1">&gt; But gdb says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) print mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev1">&gt; Cannot access memory at address 0x2a96b73050
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Bah -- this is a red herring; this memory is in the shared memory  
<br>
segment, and that memory is not saved in the corefile.  So of course  
<br>
gdb can't access it (I just did a short controlled test and proved  
<br>
this to myself).
<br>
<p>But I don't understand why I would have a bunch of tests that all segv  
<br>
at btl_sm_add_procs.c:529.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5606.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5604.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5603.php">Jeff Squyres: "[OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5606.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5606.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
