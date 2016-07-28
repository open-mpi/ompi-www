<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 04:48:51 2009" -->
<!-- isoreceived="20090330084851" -->
<!-- sent="Mon, 30 Mar 2009 10:48:45 +0200" -->
<!-- isosent="20090330084845" -->
<!-- name="Christian Siebert" -->
<!-- email="christian.siebert_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="20090330104845.136775hipaxjrtyl_at_mail.tu-chemnitz.de" -->
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
<strong>From:</strong> Christian Siebert (<em>christian.siebert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 04:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5735.php">Hartmut Häfner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Previous message:</strong> <a href="5733.php">Steve Wise: "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5759.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>as you all have noticed already, ftruncate() does NOT extend the size  
<br>
of a file on all systems. Instead, the preferred way to set a file to  
<br>
a specific size is to call lseek() and then write() one byte (see e.g.  
<br>
[1]).
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Christian
<br>
<p>[1] Richard Stevens: Advanced Programming in the UNIX Environment
<br>
<p>Quoting George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Talking with Aurelien here @ UT we think we came-up with a possible  
</span><br>
<span class="quotelev1">&gt; way to get such an error. Before explaining this let me set the bases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are 2 critical functions used in setting up the shared memory  
</span><br>
<span class="quotelev1">&gt; file. One is ftruncate the other one mmap. Here are two snippets  
</span><br>
<span class="quotelev1">&gt; from these functions documentation (with the interesting part  
</span><br>
<span class="quotelev1">&gt; between _).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ftruncate: . If it was _previously shorter than length, it is  
</span><br>
<span class="quotelev1">&gt; unspecified whether the file is changed or its size increased_. If  
</span><br>
<span class="quotelev1">&gt; the file is extended, the extended area appears as if it were  
</span><br>
<span class="quotelev1">&gt; zero-filled.
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
<span class="quotelev1">&gt; the size was really increased or not, as ftruncate will return zero  
</span><br>
<span class="quotelev1">&gt; in all cases (except the really fatal ones). On the other hand, mmap  
</span><br>
<span class="quotelev1">&gt; suppose that the len is a legitimate length (as I guess it has no  
</span><br>
<span class="quotelev1">&gt; way to check that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our specific case, if the file system is full then ftruncate  
</span><br>
<span class="quotelev1">&gt; might not do what we expect it to do, and mmap will be just happy to  
</span><br>
<span class="quotelev1">&gt; map the file to some memory. Later on when we really access the  
</span><br>
<span class="quotelev1">&gt; memory ... guess what ... we lamentably fail with a segfault as  
</span><br>
<span class="quotelev1">&gt; there is no such address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We only see one way around this. It will not prevent us from  
</span><br>
<span class="quotelev1">&gt; segfaulting but at least we can segfault in a known place, and we  
</span><br>
<span class="quotelev1">&gt; can put a message in the FAQ about this. The solution is to touch  
</span><br>
<span class="quotelev1">&gt; the last byte in the mmaped region which will force the operating  
</span><br>
<span class="quotelev1">&gt; system to really allocate the whole memory region. If this cannot  
</span><br>
<span class="quotelev1">&gt; succeed then we segfault, and if it can then we're good for the  
</span><br>
<span class="quotelev1">&gt; remaining of the execution.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Sif is also running the coll_hierarch component on some of those  tests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which has caused some additional problems. I don't know if that   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is related
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed.  Many of the MTT stack traces (for both 1.3.1 and 1.3.2 and that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have seg faults and call out mca_btl_sm.so) do involve collectives and/or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have mca_coll_hierarch.so in their stack traces.  I could well imagine this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is the culprit, though I do not know for sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm...Eugene, you need to be a tad less sensitive. Nobody was  attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to indict you or in any way attack you or your code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I know, though thank you for saying so.  I was overdoing the defensive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rhetoric trying to be funny, but I confess it's nervous humor.  There was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stuff in the sm code that I couldn't see how it was 100% robust.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nevertheless, I let that style remain in the code with my changes...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perhaps even pushing it a little bit.  My putbacks include a comment or two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to that effect.  E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774#523">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774#523</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .  I understand why the occasional failures that Jeff and Terry saw did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hold up 1.3.1, but I'd really like to understand them and fix them.  But at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0.01% fail rate (&lt;0.001% for me... I've never seen it in 100Ks of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runs), all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can do about etiology and fixes is speculate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, joke overdone and nervousness no longer funny.  Indeed, annoying.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since we clearly see problems on sif, and Josh has indicated a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; willingness to help with debugging, this might be a place to start the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; investigation. If asked nicely, they might even be willing to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grant  access
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the machine, if that would help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe a starting point would be running IU_Sif without coll_hierarch and
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
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5735.php">Hartmut Häfner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Previous message:</strong> <a href="5733.php">Steve Wise: "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5759.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
