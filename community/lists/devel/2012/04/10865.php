<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 13:34:54 2012" -->
<!-- isoreceived="20120413173454" -->
<!-- sent="Fri, 13 Apr 2012 11:34:47 -0600" -->
<!-- isosent="20120413173447" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms" -->
<!-- id="D34FACBB-4DD1-437D-AA04-134D1F588050_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL3GGtrchACCVX=f5Wi6mewcAJAT5wrxGeMzfkT+_EHZ-rGyHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 13:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10866.php">Ralph Castain: "[OMPI devel] Non-zero exit status"</a>
<li><strong>Previous message:</strong> <a href="10864.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>In reply to:</strong> <a href="10864.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know about &quot;drama&quot;, but people did clearly explain to you why this approach was unacceptable. You simply cannot cross-link at the component level. If you need something from the opal/mca/memory framework, you have to get it from the framework level.
<br>
<p>Doesn't seem that hard a concept to grasp and follow - failing to do so breaks things for a bunch of people, which is why we don't allow it. So I hope your &quot;configure&quot; approach also takes this into account, or we'll have to revert it again :-(
<br>
<p><p>On Apr 13, 2012, at 11:13 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Too many drama - we will fix it to detect hooks availability at configure stage, this will make your life back to normal.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The problem is not a Mellanox hw, but Intel PCI bus implementation, which charge extra latency if buffers are not aligned.
</span><br>
<span class="quotelev1">&gt; The patch is a workaround for this problem and help to non-benchmark code as well.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 13, 2012 at 7:06 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; r2655 is awful as a patch.  It doesn't work on any non-Linux platform,
</span><br>
<span class="quotelev1">&gt; which is unpleasant.  But worse, what does it possibly accomplish?  In
</span><br>
<span class="quotelev1">&gt; codes other than benchmarks, there's no advantage to aligning the pointer
</span><br>
<span class="quotelev1">&gt; to 32 or 64 byte boundaries, as the malloced buffer very rarely is exactly
</span><br>
<span class="quotelev1">&gt; what is sent.  So you've done a whole lot of work, screwed with the memory
</span><br>
<span class="quotelev1">&gt; allocator (which always bites OMPI in the butt), and accomplished nothing
</span><br>
<span class="quotelev1">&gt; useful.  Mellanox should fix the hardware, not make everyone's life
</span><br>
<span class="quotelev1">&gt; miserable with crappy workarounds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MEMORY_LINUX_PTMALLOC2 is the wrong define for what they want.  They
</span><br>
<span class="quotelev1">&gt; should check for __malloc_hook and only use that code if __malloc_hook is
</span><br>
<span class="quotelev1">&gt; found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/13/12 9:32 AM, &quot;TERRY DONTJE&quot; &lt;terry.dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am thinking MEMORY_LINUX_PTMALLOC2 is probably the right define to
</span><br>
<span class="quotelev2">&gt; &gt;    key off of but this is really going to look gross ifdef'ing out the
</span><br>
<span class="quotelev2">&gt; &gt;    lines that are accessing the Linux memory module.  One other idea I
</span><br>
<span class="quotelev2">&gt; &gt;    have is to create a dummy __malloc_hook in the Solaris memory module
</span><br>
<span class="quotelev2">&gt; &gt;    but might there be other OSes that could run into the same
</span><br>
<span class="quotelev2">&gt; &gt;    problem?   Or what happens if PTMALLOC2 is not used (does that
</span><br>
<span class="quotelev2">&gt; &gt;    happen)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    --td
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    On 4/13/2012 10:45 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      r26255 is forcing the use of __malloc_hook which is implemented in
</span><br>
<span class="quotelev2">&gt; &gt;      opal/mca/memory/linux however that is not compiled in the library
</span><br>
<span class="quotelev2">&gt; &gt;      when built on Solaris thus causing a referenced symbol not found
</span><br>
<span class="quotelev2">&gt; &gt;      when libmpi tries to load the openib btl.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I am looking how to fix this now but if someone has a good idea
</span><br>
<span class="quotelev2">&gt; &gt;      how to detect when __malloc_hook is used (or not) I'd be
</span><br>
<span class="quotelev2">&gt; &gt;      interested in hearing it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Terry D. Dontje | Principal
</span><br>
<span class="quotelev2">&gt; &gt;                Software Engineer
</span><br>
<span class="quotelev2">&gt; &gt;                Developer
</span><br>
<span class="quotelev2">&gt; &gt;                    Tools
</span><br>
<span class="quotelev2">&gt; &gt;                    Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  Oracle
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                      - Performance
</span><br>
<span class="quotelev2">&gt; &gt;                      Technologies
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt; &gt;                    Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10866.php">Ralph Castain: "[OMPI devel] Non-zero exit status"</a>
<li><strong>Previous message:</strong> <a href="10864.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>In reply to:</strong> <a href="10864.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
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
