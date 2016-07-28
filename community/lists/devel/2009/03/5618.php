<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 11:48:07 2009" -->
<!-- isoreceived="20090311154807" -->
<!-- sent="Wed, 11 Mar 2009 09:47:58 -0600" -->
<!-- isosent="20090311154758" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="8E63AB08-C2FC-46A5-866F-30058830EC15_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="882E6022-71B7-4406-95DE-E4C3ACD88E1A_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-11 11:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5619.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5617.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5616.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5619.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5619.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You know, this isn't the first time we have encountered errors that - 
<br>
only- appear when running under MTT. As per my other note, we are not  
<br>
seeing these failures here, even though almost all our users run under  
<br>
batch/scripts.
<br>
<p>This has been the case with at least some of these other MTT-only  
<br>
errors as well. It can't help but make one wonder if there isn't  
<br>
something about MTT that is causing these failures to occur. It just  
<br>
seems too bizarre that a true code problem would -only- show itself  
<br>
when executing under MTT. You would think that it would have to appear  
<br>
in a script and/or batch environment as well.
<br>
<p>Just something to consider.
<br>
<p><p>On Mar 11, 2009, at 9:38 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; As Terry stated, I think this bugger is quite rare.  I'm having a  
</span><br>
<span class="quotelev1">&gt; helluva time trying to reproduce it manually (over 5k runs this  
</span><br>
<span class="quotelev1">&gt; morning and still no segv).  Ugh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking through the sm startup code, I can't see exactly what the  
</span><br>
<span class="quotelev1">&gt; problem would be.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2009, at 11:34 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll run some tests with 1.3.1 on one of our systems and see if it
</span><br>
<span class="quotelev2">&gt;&gt; shows up there. If it is truly rare and was in 1.3.0, then I
</span><br>
<span class="quotelev2">&gt;&gt; personally don't have a problem with it. Got bigger problems with
</span><br>
<span class="quotelev2">&gt;&gt; hanging collectives, frankly - and we don't know how the sm changes
</span><br>
<span class="quotelev2">&gt;&gt; will affect this problem, if at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 11, 2009, at 7:50 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; So -- Brad/George -- this technically isn't a regression against
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; v1.3.0 (do we know if this can happen in 1.2?  I don't recall
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; seeing it there, but if it's so elusive...  I haven't been MTT
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; testing the 1.2 series in a long time).  But it is a nonzero  
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have not seen 1.2 fail with this problem but I honestly don't  
</span><br>
<span class="quotelev2">&gt;&gt; know
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if that is a fluke or not.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --td
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Should we release 1.3.1 without a fix?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Mar 11, 2009, at 7:30 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I actually wasn't implying that Eugene's changes -caused- the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; problem,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; but rather that I thought they might have -fixed- the problem.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; :-)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Mar 11, 2009, at 4:34 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; I forgot to mention that since I ran into this issue so long  
</span><br>
<span class="quotelev2">&gt;&gt; ago I
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; really doubt that Eugene's SM changes has caused this issue.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; Hey!!!  I ran into this problem many months ago but its been  
</span><br>
<span class="quotelev2">&gt;&gt; so
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; elusive that I've haven't nailed it down.  First time we saw  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; was last October.  I did some MTT gleaning and could not find
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; anyone but Solaris having this issue under MTT.  What's
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; interesting
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; is I gleaned Sun's MTT results and could not find any of these
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; failures as far back as last October.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; What it looked like to me was that the shared memory segment
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; might
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; not have been initialized with 0's thus allowing one of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; processes to start accessing addresses that did not have an
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; appropriate address.  However, when I was looking at this I  
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; told the mmap file was created with ftruncate which  
</span><br>
<span class="quotelev2">&gt;&gt; essentially
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; should 0 fill the memory.  So I was at a loss as to why this  
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; happening.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; I was able to reproduce this for a little while manually
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; setting up
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; a script that ran and small np=2 program over and over for
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; sometime
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; under 3-4 days.  But around November I was unable to reproduce
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; issue after 4 days of runs and threw up my hands until I was  
</span><br>
<span class="quotelev2">&gt;&gt; able
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; to find more failures under MTT which for Sun I haven't.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; Note that I was able to reproduce this issue with both SPARC  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; Intel based platforms.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Hey Jeff
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; I seem to recall seeing the identical problem reported on the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; user
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; list not long ago...or may have been the devel list.  
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, it
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; was during btl_sm_add_procs, and the code was segv'ing.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; I don't have the archives handy here, but perhaps you might
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; search
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; them and see if there is a common theme here. IIRC, some of
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Eugene's fixes impacted this problem.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; On Mar 10, 2009, at 7:49 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; On Mar 10, 2009, at 9:13 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Doh -- I'm seeing intermittent sm btl failures on Cisco  
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; MTT.  :-
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; (  I can't reproduce them manually, but they seem to only
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; happen
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; in a
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; very small fraction of overall MTT runs.  I'm seeing at
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; least 3
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; classes of errors:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; 1. btl_sm_add_procs.c:529 which is this:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;       if(mca_btl_sm_component.fifo[j]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; [my_smp_rank].head_lock !=
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; NULL) {
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; j = 3, my_smp_rank = 1.  mca_btl_sm_component.fifo[j]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; [my_smp_rank]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; appears to have a valid value in it (i.e., .fifo[3][0] =
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; x, .fifo[3]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; [1] = x+offset, .fifo[3][2] = x+2*offset, .fifo[3][3] = x
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; +3*offset.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; But gdb says:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; (gdb) print mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Cannot access memory at address 0x2a96b73050
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; Bah -- this is a red herring; this memory is in the shared
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; memory
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; segment, and that memory is not saved in the corefile.  So  
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; course gdb can't access it (I just did a short controlled  
</span><br>
<span class="quotelev2">&gt;&gt; test
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; and proved this to myself).
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; But I don't understand why I would have a bunch of tests  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; segv at btl_sm_add_procs.c:529.  :-(
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5619.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5617.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5616.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5619.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5619.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
