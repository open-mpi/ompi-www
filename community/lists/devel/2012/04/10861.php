<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 12:07:32 2012" -->
<!-- isoreceived="20120413160732" -->
<!-- sent="Fri, 13 Apr 2012 16:06:57 +0000" -->
<!-- isosent="20120413160657" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms" -->
<!-- id="CBADA97D.D9AA%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F8846F3.7080605_at_oracle.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 12:06:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10862.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10860.php">Alex Margolin: "[OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10863.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Reply:</strong> <a href="10863.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Reply:</strong> <a href="10864.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r2655 is awful as a patch.  It doesn't work on any non-Linux platform,
<br>
which is unpleasant.  But worse, what does it possibly accomplish?  In
<br>
codes other than benchmarks, there's no advantage to aligning the pointer
<br>
to 32 or 64 byte boundaries, as the malloced buffer very rarely is exactly
<br>
what is sent.  So you've done a whole lot of work, screwed with the memory
<br>
allocator (which always bites OMPI in the butt), and accomplished nothing
<br>
useful.  Mellanox should fix the hardware, not make everyone's life
<br>
miserable with crappy workarounds.
<br>
<p>MEMORY_LINUX_PTMALLOC2 is the wrong define for what they want.  They
<br>
should check for __malloc_hook and only use that code if __malloc_hook is
<br>
found.
<br>
<p>Brian
<br>
<p>On 4/13/12 9:32 AM, &quot;TERRY DONTJE&quot; &lt;terry.dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    I am thinking MEMORY_LINUX_PTMALLOC2 is probably the right define to
</span><br>
<span class="quotelev1">&gt;    key off of but this is really going to look gross ifdef'ing out the
</span><br>
<span class="quotelev1">&gt;    lines that are accessing the Linux memory module.  One other idea I
</span><br>
<span class="quotelev1">&gt;    have is to create a dummy __malloc_hook in the Solaris memory module
</span><br>
<span class="quotelev1">&gt;    but might there be other OSes that could run into the same
</span><br>
<span class="quotelev1">&gt;    problem?   Or what happens if PTMALLOC2 is not used (does that
</span><br>
<span class="quotelev1">&gt;    happen)?
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    --td
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    On 4/13/2012 10:45 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      r26255 is forcing the use of __malloc_hook which is implemented in
</span><br>
<span class="quotelev1">&gt;      opal/mca/memory/linux however that is not compiled in the library
</span><br>
<span class="quotelev1">&gt;      when built on Solaris thus causing a referenced symbol not found
</span><br>
<span class="quotelev1">&gt;      when libmpi tries to load the openib btl.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      I am looking how to fix this now but if someone has a good idea
</span><br>
<span class="quotelev1">&gt;      how to detect when __malloc_hook is used (or not) I'd be
</span><br>
<span class="quotelev1">&gt;      interested in hearing it.
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
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    -- 
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
<span class="quotelev1">&gt;            
</span><br>
<span class="quotelev1">&gt;              Terry D. Dontje | Principal
</span><br>
<span class="quotelev1">&gt;                Software Engineer
</span><br>
<span class="quotelev1">&gt;                Developer
</span><br>
<span class="quotelev1">&gt;                    Tools
</span><br>
<span class="quotelev1">&gt;                    Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                  Oracle
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                      - Performance
</span><br>
<span class="quotelev1">&gt;                      Technologies
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                    95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;                    Email terry.dontje_at_[hidden]
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10862.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10860.php">Alex Margolin: "[OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10863.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Reply:</strong> <a href="10863.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Reply:</strong> <a href="10864.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
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
