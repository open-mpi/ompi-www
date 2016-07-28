<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 17:17:43 2009" -->
<!-- isoreceived="20090327211743" -->
<!-- sent="Fri, 27 Mar 2009 17:17:32 -0400" -->
<!-- isosent="20090327211732" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="39F07694-2E7E-4F1A-9D1F-00675F49ABC1_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220903271030w3fb56b9flcc2bb6abd10ed096_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 17:17:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5723.php">Brad Benton: "[OMPI devel] Fwd: [Open MPI Announce] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5734.php">Christian Siebert: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Talking with Aurelien here @ UT we think we came-up with a possible  
<br>
way to get such an error. Before explaining this let me set the bases.
<br>
<p>There are 2 critical functions used in setting up the shared memory  
<br>
file. One is ftruncate the other one mmap. Here are two snippets from  
<br>
these functions documentation (with the interesting part between _).
<br>
<p>- ftruncate: . If it was _previously shorter than length, it is  
<br>
unspecified whether the file is changed or its size increased_. If the  
<br>
file is extended, the extended area appears as if it were zero-filled.
<br>
<p>- mmap: _The range of bytes starting at off and continuing for len  
<br>
bytes shall be legitimate for the possible (not necessarily current)  
<br>
offsets in the file_, shared memory object, or [TYM] typed memory  
<br>
object represented by fildes.
<br>
<p>As you can see ftruncate can succeed without increasing the size of  
<br>
the file to what we specified. Moreover, there is no way to know if  
<br>
the size was really increased or not, as ftruncate will return zero in  
<br>
all cases (except the really fatal ones). On the other hand, mmap  
<br>
suppose that the len is a legitimate length (as I guess it has no way  
<br>
to check that).
<br>
<p>In our specific case, if the file system is full then ftruncate might  
<br>
not do what we expect it to do, and mmap will be just happy to map the  
<br>
file to some memory. Later on when we really access the memory ...  
<br>
guess what ... we lamentably fail with a segfault as there is no such  
<br>
address.
<br>
<p>We only see one way around this. It will not prevent us from  
<br>
segfaulting but at least we can segfault in a known place, and we can  
<br>
put a message in the FAQ about this. The solution is to touch the last  
<br>
byte in the mmaped region which will force the operating system to  
<br>
really allocate the whole memory region. If this cannot succeed then  
<br>
we segfault, and if it can then we're good for the remaining of the  
<br>
execution.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 27, 2009, at 13:30 , Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Eugene,
</span><br>
<span class="quotelev1">&gt; I think I remember setting up the MTT tests on Sif so that tests
</span><br>
<span class="quotelev1">&gt; are run both with and without the coll_hierarch component selected.
</span><br>
<span class="quotelev1">&gt; The coll_hierarch component stresses code paths and potential
</span><br>
<span class="quotelev1">&gt; race conditions in its own way.  So, if the problems are showing up
</span><br>
<span class="quotelev1">&gt; more frequently for the test runs with the coll_hierarch component
</span><br>
<span class="quotelev1">&gt; enabled, then I would check the communicator creation code paths.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now that I'm at SiCortex, I don't have time to look into these IU MTT
</span><br>
<span class="quotelev1">&gt; failures not that I had a bunch of time while at IU ;-), but you can  
</span><br>
<span class="quotelev1">&gt; get
</span><br>
<span class="quotelev1">&gt; to a lot of information with some work in the MTT reporter web page.
</span><br>
<span class="quotelev1">&gt; Also, hopefully Josh will have a little time to look into it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck!    -- Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 27, 2009 at 10:15 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sif is also running the coll_hierarch component on some of those   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which has caused some additional problems. I don't know if that   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is related
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Indeed.  Many of the MTT stack traces (for both 1.3.1 and 1.3.2 and  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; have seg faults and call out mca_btl_sm.so) do involve collectives  
</span><br>
<span class="quotelev2">&gt;&gt; and/or
</span><br>
<span class="quotelev2">&gt;&gt; have mca_coll_hierarch.so in their stack traces.  I could well  
</span><br>
<span class="quotelev2">&gt;&gt; imagine this
</span><br>
<span class="quotelev2">&gt;&gt; is the culprit, though I do not know for sure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...Eugene, you need to be a tad less sensitive. Nobody was   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to indict you or in any way attack you or your code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I know, though thank you for saying so.  I was overdoing the  
</span><br>
<span class="quotelev2">&gt;&gt; defensive
</span><br>
<span class="quotelev2">&gt;&gt; rhetoric trying to be funny, but I confess it's nervous humor.   
</span><br>
<span class="quotelev2">&gt;&gt; There was
</span><br>
<span class="quotelev2">&gt;&gt; stuff in the sm code that I couldn't see how it was 100% robust.
</span><br>
<span class="quotelev2">&gt;&gt;  Nevertheless, I let that style remain in the code with my changes...
</span><br>
<span class="quotelev2">&gt;&gt; perhaps even pushing it a little bit.  My putbacks include a  
</span><br>
<span class="quotelev2">&gt;&gt; comment or two
</span><br>
<span class="quotelev2">&gt;&gt; to that effect.  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774</a> 
</span><br>
<span class="quotelev2">&gt;&gt; #523
</span><br>
<span class="quotelev2">&gt;&gt; .  I understand why the occasional failures that Jeff and Terry saw  
</span><br>
<span class="quotelev2">&gt;&gt; did not
</span><br>
<span class="quotelev2">&gt;&gt; hold up 1.3.1, but I'd really like to understand them and fix  
</span><br>
<span class="quotelev2">&gt;&gt; them.  But at
</span><br>
<span class="quotelev2">&gt;&gt; 0.01% fail rate (&lt;0.001% for me... I've never seen it in 100Ks of  
</span><br>
<span class="quotelev2">&gt;&gt; runs), all
</span><br>
<span class="quotelev2">&gt;&gt; I can do about etiology and fixes is speculate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, joke overdone and nervousness no longer funny.  Indeed,  
</span><br>
<span class="quotelev2">&gt;&gt; annoying.  I
</span><br>
<span class="quotelev2">&gt;&gt; stop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since we clearly see problems on sif, and Josh has indicated a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  willingness to help with debugging, this might be a place to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  investigation. If asked nicely, they might even be willing to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grant  access
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the machine, if that would help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe a starting point would be running IU_Sif without  
</span><br>
<span class="quotelev2">&gt;&gt; coll_hierarch and
</span><br>
<span class="quotelev2">&gt;&gt; seeing where we stand.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And, again, my gut feel is that the failures are unrelated to the  
</span><br>
<span class="quotelev2">&gt;&gt; 0.01%
</span><br>
<span class="quotelev2">&gt;&gt; failures that Jeff and Terry were seeing.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; timattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5723.php">Brad Benton: "[OMPI devel] Fwd: [Open MPI Announce] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5734.php">Christian Siebert: "Re: [OMPI devel] SM init failures"</a>
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
