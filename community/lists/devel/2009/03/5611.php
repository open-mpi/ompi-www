<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 07:30:10 2009" -->
<!-- isoreceived="20090311113010" -->
<!-- sent="Wed, 11 Mar 2009 05:30:00 -0600" -->
<!-- isosent="20090311113000" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="5DCABF72-EBF7-42F6-8147-04F889881394_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B793D2.9060509_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-11 07:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5613.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually wasn't implying that Eugene's changes -caused- the problem,  
<br>
but rather that I thought they might have -fixed- the problem.
<br>
<p>:-)
<br>
<p><p>On Mar 11, 2009, at 4:34 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; I forgot to mention that since I ran into this issue so long ago I  
</span><br>
<span class="quotelev1">&gt; really doubt that Eugene's SM changes has caused this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hey!!!  I ran into this problem many months ago but its been so  
</span><br>
<span class="quotelev2">&gt;&gt; elusive that I've haven't nailed it down.  First time we saw this  
</span><br>
<span class="quotelev2">&gt;&gt; was last October.  I did some MTT gleaning and could not find  
</span><br>
<span class="quotelev2">&gt;&gt; anyone but Solaris having this issue under MTT.  What's interesting  
</span><br>
<span class="quotelev2">&gt;&gt; is I gleaned Sun's MTT results and could not find any of these  
</span><br>
<span class="quotelev2">&gt;&gt; failures as far back as last October.
</span><br>
<span class="quotelev2">&gt;&gt; What it looked like to me was that the shared memory segment might  
</span><br>
<span class="quotelev2">&gt;&gt; not have been initialized with 0's thus allowing one of the  
</span><br>
<span class="quotelev2">&gt;&gt; processes to start accessing addresses that did not have an  
</span><br>
<span class="quotelev2">&gt;&gt; appropriate address.  However, when I was looking at this I was  
</span><br>
<span class="quotelev2">&gt;&gt; told the mmap file was created with ftruncate which essentially  
</span><br>
<span class="quotelev2">&gt;&gt; should 0 fill the memory.  So I was at a loss as to why this was  
</span><br>
<span class="quotelev2">&gt;&gt; happening.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to reproduce this for a little while manually setting up  
</span><br>
<span class="quotelev2">&gt;&gt; a script that ran and small np=2 program over and over for sometime  
</span><br>
<span class="quotelev2">&gt;&gt; under 3-4 days.  But around November I was unable to reproduce the  
</span><br>
<span class="quotelev2">&gt;&gt; issue after 4 days of runs and threw up my hands until I was able  
</span><br>
<span class="quotelev2">&gt;&gt; to find more failures under MTT which for Sun I haven't.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that I was able to reproduce this issue with both SPARC and  
</span><br>
<span class="quotelev2">&gt;&gt; Intel based platforms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I seem to recall seeing the identical problem reported on the user  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list not long ago...or may have been the devel list. Anyway, it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was during btl_sm_add_procs, and the code was segv'ing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have the archives handy here, but perhaps you might search  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them and see if there is a common theme here. IIRC, some of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene's fixes impacted this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 10, 2009, at 7:49 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 10, 2009, at 9:13 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Doh -- I'm seeing intermittent sm btl failures on Cisco 1.3.1  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MTT.  :-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (  I can't reproduce them manually, but they seem to only happen  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; very small fraction of overall MTT runs.  I'm seeing at least 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; classes of errors:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. btl_sm_add_procs.c:529 which is this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       if(mca_btl_sm_component.fifo[j][my_smp_rank].head_lock !=
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NULL) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; j = 3, my_smp_rank = 1.  mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; appears to have a valid value in it (i.e., .fifo[3][0] =  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; x, .fifo[3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1] = x+offset, .fifo[3][2] = x+2*offset, .fifo[3][3] = x 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +3*offset.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But gdb says:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) print mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cannot access memory at address 0x2a96b73050
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bah -- this is a red herring; this memory is in the shared memory  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; segment, and that memory is not saved in the corefile.  So of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; course gdb can't access it (I just did a short controlled test  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and proved this to myself).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I don't understand why I would have a bunch of tests that all  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; segv at btl_sm_add_procs.c:529.  :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5610.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5613.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
