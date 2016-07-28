<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 06:29:53 2009" -->
<!-- isoreceived="20090311102953" -->
<!-- sent="Wed, 11 Mar 2009 06:29:47 -0400" -->
<!-- isosent="20090311102947" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="49B7929B.1000105_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5442AED8-42BB-4A41-8A0D-460EFAAA1F39_at_lanl.gov" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 06:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5608.php">Richard Graham: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5606.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey!!!  I ran into this problem many months ago but its been so elusive 
<br>
that I've haven't nailed it down.  First time we saw this was last 
<br>
October.  I did some MTT gleaning and could not find anyone but Solaris 
<br>
having this issue under MTT.  What's interesting is I gleaned Sun's MTT 
<br>
results and could not find any of these failures as far back as last 
<br>
October. 
<br>
<p>What it looked like to me was that the shared memory segment might not 
<br>
have been initialized with 0's thus allowing one of the processes to 
<br>
start accessing addresses that did not have an appropriate address.  
<br>
However, when I was looking at this I was told the mmap file was created 
<br>
with ftruncate which essentially should 0 fill the memory.  So I was at 
<br>
a loss as to why this was happening.
<br>
<p>I was able to reproduce this for a little while manually setting up a 
<br>
script that ran and small np=2 program over and over for sometime under 
<br>
3-4 days.  But around November I was unable to reproduce the issue after 
<br>
4 days of runs and threw up my hands until I was able to find more 
<br>
failures under MTT which for Sun I haven't.
<br>
<p>Note that I was able to reproduce this issue with both SPARC and Intel 
<br>
based platforms.
<br>
<p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hey Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I seem to recall seeing the identical problem reported on the user 
</span><br>
<span class="quotelev1">&gt; list not long ago...or may have been the devel list. Anyway, it was 
</span><br>
<span class="quotelev1">&gt; during btl_sm_add_procs, and the code was segv'ing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have the archives handy here, but perhaps you might search 
</span><br>
<span class="quotelev1">&gt; them and see if there is a common theme here. IIRC, some of Eugene's 
</span><br>
<span class="quotelev1">&gt; fixes impacted this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2009, at 7:49 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2009, at 9:13 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doh -- I'm seeing intermittent sm btl failures on Cisco 1.3.1 MTT.  :-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (  I can't reproduce them manually, but they seem to only happen in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very small fraction of overall MTT runs.  I'm seeing at least 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; classes of errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. btl_sm_add_procs.c:529 which is this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if(mca_btl_sm_component.fifo[j][my_smp_rank].head_lock !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NULL) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; j = 3, my_smp_rank = 1.  mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears to have a valid value in it (i.e., .fifo[3][0] = x, .fifo[3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1] = x+offset, .fifo[3][2] = x+2*offset, .fifo[3][3] = x+3*offset.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But gdb says:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) print mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cannot access memory at address 0x2a96b73050
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bah -- this is a red herring; this memory is in the shared memory 
</span><br>
<span class="quotelev2">&gt;&gt; segment, and that memory is not saved in the corefile.  So of course 
</span><br>
<span class="quotelev2">&gt;&gt; gdb can't access it (I just did a short controlled test and proved 
</span><br>
<span class="quotelev2">&gt;&gt; this to myself).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I don't understand why I would have a bunch of tests that all 
</span><br>
<span class="quotelev2">&gt;&gt; segv at btl_sm_add_procs.c:529.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5608.php">Richard Graham: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5606.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
