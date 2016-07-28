<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 14:10:18 2009" -->
<!-- isoreceived="20090311181018" -->
<!-- sent="Wed, 11 Mar 2009 13:10:13 -0500" -->
<!-- isosent="20090311181013" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="20090311181012.GD26920_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 14:10:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5625.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5623.php">Andrew Lumsdaine: "[OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>In reply to:</strong> <a href="5616.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5625.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5625.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar/11/2009 11:38:19AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; As Terry stated, I think this bugger is quite rare.  I'm having a helluva 
</span><br>
<span class="quotelev1">&gt; time trying to reproduce it manually (over 5k runs this morning and still 
</span><br>
<span class="quotelev1">&gt; no segv).  Ugh.
</span><br>
<p>5k of which test(s)? Can this error happen on any test? I am wondering
<br>
if we could narrow down to a smaller subset of the nightly tests to
<br>
reproduce this (the way Terry did by looping over the same test(s) for
<br>
a looong time). I see the following over the past 30 days:
<br>
<p>&nbsp;&nbsp;# | Date range          | Org   | Hostname          | Platform name  | Hardware | OS    | MPI name          | MPI version    | Suite    | Test                       | np | Stdout           | Pass | Fail | Skip | Timed | Perf
<br>
&nbsp;&nbsp;1 | 2009-02-12 06:47:56 | sun   | burl-ct-v440-2    | burl-ct-v440-2 | sun4u    | SunOS | ompi-nightly-v1.3 | 1.3.1a0r20508  | ibm-64   | cxx_create_disp            | 8  | btl_sm_add_procs | 0    | 1    | 0    | 0     | 0
<br>
&nbsp;&nbsp;2 | 2009-02-27 23:37:02 | sun   | burl-ct-v20z-2    | burl-ct-v20z-2 | i86pc    | SunOS | ompi-nightly-v1.3 | 1.3.1rc1r20628 | ibm-64   | lbub                       | 4  | btl_sm_add_procs | 0    | 1    | 0    | 0     | 0
<br>
&nbsp;&nbsp;3 | 2009-03-05 00:15:39 | sun   | burl-ct-v20z-2    | burl-ct-v20z-2 | i86pc    | SunOS | ompi-nightly-v1.3 | 1.3.1rc3r20684 | ibm-32   | loop                       | 4  | btl_sm_add_procs | 0    | 1    | 0    | 0     | 0
<br>
&nbsp;&nbsp;4 | 2009-03-05 22:31:43 | sun   | burl-ct-v20z-2    | burl-ct-v20z-2 | i86pc    | SunOS | ompi-nightly-v1.3 | 1.3.1rc4r20704 | intel-64 | MPI_Type_size_MPI_LB_UB_c  | 4  | btl_sm_add_procs | 0    | 1    | 0    | 0     | 0
<br>
&nbsp;&nbsp;5 | 2009-03-10 14:47:36 | cisco | svbu-mpi[035-036] | svbu-mpi       | x86_64   | Linux | ompi-nightly-v1.3 | 1.3.1rc5r20730 | intel    | MPI_Test_cancelled_false_c | 8  | btl_sm_add_procs | 0    | 1    | 0    | 0     | 0
<br>
<p>What do these tests have in common?
<br>
<p>&nbsp;&nbsp;./intel_tests/src/MPI_Test_cancelled_false_c.c
<br>
&nbsp;&nbsp;./intel_tests/src/MPI_Type_size_MPI_LB_UB_c.c
<br>
&nbsp;&nbsp;./ibm/onesided/cxx_create_disp.cc
<br>
&nbsp;&nbsp;./ibm/datatype/lbub2.c
<br>
&nbsp;&nbsp;./ibm/datatype/loop.c
<br>
&nbsp;&nbsp;./ibm/datatype/lbub.c
<br>
<p>It almost looks like the problem is more likely to occur if MPI_UB or
<br>
MPI_LB is involved or am I just imagining things?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking through the sm startup code, I can't see exactly what the problem 
</span><br>
<span class="quotelev1">&gt; would be.  :-(
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
<span class="quotelev4">&gt;&gt; &gt;&gt; testing the 1.2 series in a long time).  But it is a nonzero problem.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have not seen 1.2 fail with this problem but I honestly don't know
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
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt; I forgot to mention that since I ran into this issue so long ago I
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
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; Hey!!!  I ran into this problem many months ago but its been so
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; elusive that I've haven't nailed it down.  First time we saw this
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
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; appropriate address.  However, when I was looking at this I was
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; told the mmap file was created with ftruncate which essentially
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; should 0 fill the memory.  So I was at a loss as to why this was
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
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; issue after 4 days of runs and threw up my hands until I was able
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; to find more failures under MTT which for Sun I haven't.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt; &gt;&gt; Note that I was able to reproduce this issue with both SPARC and
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
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; list not long ago...or may have been the devel list. Anyway, it
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
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Doh -- I'm seeing intermittent sm btl failures on Cisco 1.3.1
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
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; segment, and that memory is not saved in the corefile.  So of
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; course gdb can't access it (I just did a short controlled test
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; and proved this to myself).
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; But I don't understand why I would have a bunch of tests that
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
<li><strong>Next message:</strong> <a href="5625.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5623.php">Andrew Lumsdaine: "[OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>In reply to:</strong> <a href="5616.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5625.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5625.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
