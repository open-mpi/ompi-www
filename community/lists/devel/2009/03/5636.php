<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 13:34:23 2009" -->
<!-- isoreceived="20090312173423" -->
<!-- sent="Thu, 12 Mar 2009 12:34:17 -0500" -->
<!-- isosent="20090312173417" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="44079e5f0903121034ua25058ajdb9ee1eb8bd76617_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0919344E-5CEE-49AA-A633-BEC740C8EB22_at_cisco.com" -->
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
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 13:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5637.php">Brad Benton: "Re: [OMPI devel] 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="5635.php">Richard Graham: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?"</a>
<li><strong>In reply to:</strong> <a href="5613.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that this is relatively contained and has not been seen out of MTT
<br>
under normal operating conditions.  Also, as Jeff has argued, it doesn't
<br>
appear to be a regression against 1.3.  George &amp; I talked about this and we
<br>
are in agreement that we should go ahead and release 1.3.1 as it currently
<br>
stands.
<br>
--brad
<br>
<p><p>On Wed, Mar 11, 2009 at 7:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So -- Brad/George -- this technically isn't a regression against v1.3.0 (do
</span><br>
<span class="quotelev1">&gt; we know if this can happen in 1.2?  I don't recall seeing it there, but if
</span><br>
<span class="quotelev1">&gt; it's so elusive...  I haven't been MTT testing the 1.2 series in a long
</span><br>
<span class="quotelev1">&gt; time).  But it is a nonzero problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we release 1.3.1 without a fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2009, at 7:30 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I actually wasn't implying that Eugene's changes -caused- the problem,
</span><br>
<span class="quotelev2">&gt;&gt; but rather that I thought they might have -fixed- the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 11, 2009, at 4:34 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I forgot to mention that since I ran into this issue so long ago I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; really doubt that Eugene's SM changes has caused this issue.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --td
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hey!!!  I ran into this problem many months ago but its been so
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; elusive that I've haven't nailed it down.  First time we saw this
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; was last October.  I did some MTT gleaning and could not find
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; anyone but Solaris having this issue under MTT.  What's interesting
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; is I gleaned Sun's MTT results and could not find any of these
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; failures as far back as last October.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; What it looked like to me was that the shared memory segment might
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; not have been initialized with 0's thus allowing one of the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; processes to start accessing addresses that did not have an
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; appropriate address.  However, when I was looking at this I was
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; told the mmap file was created with ftruncate which essentially
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; should 0 fill the memory.  So I was at a loss as to why this was
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; happening.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I was able to reproduce this for a little while manually setting up
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; a script that ran and small np=2 program over and over for sometime
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; under 3-4 days.  But around November I was unable to reproduce the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; issue after 4 days of runs and threw up my hands until I was able
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; to find more failures under MTT which for Sun I haven't.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Note that I was able to reproduce this issue with both SPARC and
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Intel based platforms.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Hey Jeff
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I seem to recall seeing the identical problem reported on the user
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; list not long ago...or may have been the devel list. Anyway, it
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; was during btl_sm_add_procs, and the code was segv'ing.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I don't have the archives handy here, but perhaps you might search
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; them and see if there is a common theme here. IIRC, some of
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Eugene's fixes impacted this problem.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Mar 10, 2009, at 7:49 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; On Mar 10, 2009, at 9:13 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Doh -- I'm seeing intermittent sm btl failures on Cisco 1.3.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; MTT.  :-
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; (  I can't reproduce them manually, but they seem to only happen
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; in a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; very small fraction of overall MTT runs.  I'm seeing at least 3
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; classes of errors:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; 1. btl_sm_add_procs.c:529 which is this:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;       if(mca_btl_sm_component.fifo[j][my_smp_rank].head_lock !=
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; NULL) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; j = 3, my_smp_rank = 1.  mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; appears to have a valid value in it (i.e., .fifo[3][0] =
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; x, .fifo[3]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; [1] = x+offset, .fifo[3][2] = x+2*offset, .fifo[3][3] = x
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; +3*offset.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; But gdb says:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; (gdb) print mca_btl_sm_component.fifo[j][my_smp_rank]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Cannot access memory at address 0x2a96b73050
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Bah -- this is a red herring; this memory is in the shared memory
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; segment, and that memory is not saved in the corefile.  So of
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; course gdb can't access it (I just did a short controlled test
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; and proved this to myself).
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; But I don't understand why I would have a bunch of tests that all
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; segv at btl_sm_add_procs.c:529.  :-(
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5637.php">Brad Benton: "Re: [OMPI devel] 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="5635.php">Richard Graham: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?"</a>
<li><strong>In reply to:</strong> <a href="5613.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
