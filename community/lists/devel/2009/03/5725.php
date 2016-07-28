<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 19:59:52 2009" -->
<!-- isoreceived="20090327235952" -->
<!-- sent="Fri, 27 Mar 2009 16:59:43 -0700" -->
<!-- isosent="20090327235943" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49CD686F.4090907_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39F07694-2E7E-4F1A-9D1F-00675F49ABC1_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 19:59:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quoting from a different manpage for ftruncate:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[T]he POSIX standard allows two behaviours for ftruncate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;when length exceeds the file length [...]: either returning an 
<br>
error, or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extending the file.
<br>
So, if that is to be trusted, it is not legal by POSIX to *silently* not 
<br>
extend the file.
<br>
<p>-Paul
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Talking with Aurelien here @ UT we think we came-up with a possible 
</span><br>
<span class="quotelev1">&gt; way to get such an error. Before explaining this let me set the bases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are 2 critical functions used in setting up the shared memory 
</span><br>
<span class="quotelev1">&gt; file. One is ftruncate the other one mmap. Here are two snippets from 
</span><br>
<span class="quotelev1">&gt; these functions documentation (with the interesting part between _).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ftruncate: . If it was _previously shorter than length, it is 
</span><br>
<span class="quotelev1">&gt; unspecified whether the file is changed or its size increased_. If the 
</span><br>
<span class="quotelev1">&gt; file is extended, the extended area appears as if it were zero-filled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - mmap: _The range of bytes starting at off and continuing for len 
</span><br>
<span class="quotelev1">&gt; bytes shall be legitimate for the possible (not necessarily current) 
</span><br>
<span class="quotelev1">&gt; offsets in the file_, shared memory object, or [TYM] typed memory 
</span><br>
<span class="quotelev1">&gt; object represented by fildes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see ftruncate can succeed without increasing the size of 
</span><br>
<span class="quotelev1">&gt; the file to what we specified. Moreover, there is no way to know if 
</span><br>
<span class="quotelev1">&gt; the size was really increased or not, as ftruncate will return zero in 
</span><br>
<span class="quotelev1">&gt; all cases (except the really fatal ones). On the other hand, mmap 
</span><br>
<span class="quotelev1">&gt; suppose that the len is a legitimate length (as I guess it has no way 
</span><br>
<span class="quotelev1">&gt; to check that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our specific case, if the file system is full then ftruncate might 
</span><br>
<span class="quotelev1">&gt; not do what we expect it to do, and mmap will be just happy to map the 
</span><br>
<span class="quotelev1">&gt; file to some memory. Later on when we really access the memory ... 
</span><br>
<span class="quotelev1">&gt; guess what ... we lamentably fail with a segfault as there is no such 
</span><br>
<span class="quotelev1">&gt; address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We only see one way around this. It will not prevent us from 
</span><br>
<span class="quotelev1">&gt; segfaulting but at least we can segfault in a known place, and we can 
</span><br>
<span class="quotelev1">&gt; put a message in the FAQ about this. The solution is to touch the last 
</span><br>
<span class="quotelev1">&gt; byte in the mmaped region which will force the operating system to 
</span><br>
<span class="quotelev1">&gt; really allocate the whole memory region. If this cannot succeed then 
</span><br>
<span class="quotelev1">&gt; we segfault, and if it can then we're good for the remaining of the 
</span><br>
<span class="quotelev1">&gt; execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2009, at 13:30 , Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene,
</span><br>
<span class="quotelev2">&gt;&gt; I think I remember setting up the MTT tests on Sif so that tests
</span><br>
<span class="quotelev2">&gt;&gt; are run both with and without the coll_hierarch component selected.
</span><br>
<span class="quotelev2">&gt;&gt; The coll_hierarch component stresses code paths and potential
</span><br>
<span class="quotelev2">&gt;&gt; race conditions in its own way.  So, if the problems are showing up
</span><br>
<span class="quotelev2">&gt;&gt; more frequently for the test runs with the coll_hierarch component
</span><br>
<span class="quotelev2">&gt;&gt; enabled, then I would check the communicator creation code paths.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that I'm at SiCortex, I don't have time to look into these IU MTT
</span><br>
<span class="quotelev2">&gt;&gt; failures not that I had a bunch of time while at IU ;-), but you can get
</span><br>
<span class="quotelev2">&gt;&gt; to a lot of information with some work in the MTT reporter web page.
</span><br>
<span class="quotelev2">&gt;&gt; Also, hopefully Josh will have a little time to look into it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good luck!    -- Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 27, 2009 at 10:15 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sif is also running the coll_hierarch component on some of those  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which has caused some additional problems. I don't know if that  is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; related
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed.  Many of the MTT stack traces (for both 1.3.1 and 1.3.2 and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have seg faults and call out mca_btl_sm.so) do involve collectives 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and/or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have mca_coll_hierarch.so in their stack traces.  I could well 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imagine this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is the culprit, though I do not know for sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm...Eugene, you need to be a tad less sensitive. Nobody was  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to indict you or in any way attack you or your code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I know, though thank you for saying so.  I was overdoing the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defensive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rhetoric trying to be funny, but I confess it's nervous humor.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stuff in the sm code that I couldn't see how it was 100% robust.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Nevertheless, I let that style remain in the code with my changes...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perhaps even pushing it a little bit.  My putbacks include a comment 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to that effect.  E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774#523">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774#523</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .  I understand why the occasional failures that Jeff and Terry saw 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hold up 1.3.1, but I'd really like to understand them and fix them.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0.01% fail rate (&lt;0.001% for me... I've never seen it in 100Ks of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runs), all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can do about etiology and fixes is speculate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, joke overdone and nervousness no longer funny.  Indeed, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; annoying.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since we clearly see problems on sif, and Josh has indicated a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  willingness to help with debugging, this might be a place to start 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  investigation. If asked nicely, they might even be willing to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grant  access
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the machine, if that would help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe a starting point would be running IU_Sif without coll_hierarch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seeing where we stand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And, again, my gut feel is that the failures are unrelated to the 0.01%
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failures that Jeff and Terry were seeing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; timattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
