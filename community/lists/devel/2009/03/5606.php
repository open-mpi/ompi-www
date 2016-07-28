<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 22:24:09 2009" -->
<!-- isoreceived="20090311022409" -->
<!-- sent="Tue, 10 Mar 2009 20:23:57 -0600" -->
<!-- isosent="20090311022357" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="5442AED8-42BB-4A41-8A0D-460EFAAA1F39_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9FE5116A-D945-4A8E-AC04-B7BD46E518D1_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 22:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5607.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5607.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5607.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5609.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Jeff
<br>
<p>I seem to recall seeing the identical problem reported on the user  
<br>
list not long ago...or may have been the devel list. Anyway, it was  
<br>
during btl_sm_add_procs, and the code was segv'ing.
<br>
<p>I don't have the archives handy here, but perhaps you might search  
<br>
them and see if there is a common theme here. IIRC, some of Eugene's  
<br>
fixes impacted this problem.
<br>
<p>Ralph
<br>
<p><p>On Mar 10, 2009, at 7:49 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 10, 2009, at 9:13 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doh -- I'm seeing intermittent sm btl failures on Cisco 1.3.1  
</span><br>
<span class="quotelev2">&gt;&gt; MTT.  :-
</span><br>
<span class="quotelev2">&gt;&gt; (  I can't reproduce them manually, but they seem to only happen in a
</span><br>
<span class="quotelev2">&gt;&gt; very small fraction of overall MTT runs.  I'm seeing at least 3
</span><br>
<span class="quotelev2">&gt;&gt; classes of errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. btl_sm_add_procs.c:529 which is this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        if(mca_btl_sm_component.fifo[j][my_smp_rank].head_lock !=
</span><br>
<span class="quotelev2">&gt;&gt; NULL) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; j = 3, my_smp_rank = 1.  mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev2">&gt;&gt; appears to have a valid value in it (i.e., .fifo[3][0] = x, .fifo[3]
</span><br>
<span class="quotelev2">&gt;&gt; [1] = x+offset, .fifo[3][2] = x+2*offset, .fifo[3][3] = x+3*offset.
</span><br>
<span class="quotelev2">&gt;&gt; But gdb says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) print mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev2">&gt;&gt; Cannot access memory at address 0x2a96b73050
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bah -- this is a red herring; this memory is in the shared memory  
</span><br>
<span class="quotelev1">&gt; segment, and that memory is not saved in the corefile.  So of course  
</span><br>
<span class="quotelev1">&gt; gdb can't access it (I just did a short controlled test and proved  
</span><br>
<span class="quotelev1">&gt; this to myself).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I don't understand why I would have a bunch of tests that all  
</span><br>
<span class="quotelev1">&gt; segv at btl_sm_add_procs.c:529.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5607.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5607.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5607.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5609.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
