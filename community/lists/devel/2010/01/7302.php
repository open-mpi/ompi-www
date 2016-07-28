<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 12:00:20 2010" -->
<!-- isoreceived="20100111170020" -->
<!-- sent="Mon, 11 Jan 2010 11:52:17 -0500" -->
<!-- isosent="20100111165217" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="9A3B2937-7382-4D4A-995E-8AB123DF9CA6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D094A28F6B31745BE7B844EA0FF60962C3D952BBF_at_ES04SNLNT.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 11:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Previous message:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7321.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7321.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arrgh -- if only the Linux kernel community had accepted ummunotify, this would now be a moot point (i.e., the argument would be solely with the OS/glibc, not the MPI!).
<br>
<p><p>On Jan 9, 2010, at 10:45 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; We should absolutely not change this.  For simple applications, yes, things work if large blocks are allocated on the heap.  However, ptmalloc (and most allocators, really), can't rationally cope with repeated allocations and deallocations of large blocks.  It would be *really bad* (as we've seen before) to change the behavior of our version of ptmalloc from that which is provided by Linux.  Pain and suffering is all that path has ever lead to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just my $0.02, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] On Behalf Of Eugene Loh [Eugene.Loh_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, January 09, 2010 9:55 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I'm not sure I follow -- are you saying that Open MPI is disabling the large mmap allocations, and we shouldn't?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Basically the reverse.  The default (I think this means Linux, whether
</span><br>
<span class="quotelev1">&gt; with gcc, gfortran, Sun f90, etc.) is to use mmap to malloc large
</span><br>
<span class="quotelev1">&gt; allocations.  We don't change this, but arguably we should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;   size_t size, nextsize;
</span><br>
<span class="quotelev1">&gt;   void  *ptr, *nextptr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   size = 1;
</span><br>
<span class="quotelev1">&gt;   ptr  = malloc(size);
</span><br>
<span class="quotelev1">&gt;   while ( size &lt; 1000000 ) {
</span><br>
<span class="quotelev1">&gt;     nextsize = 1.1 * size + 1;
</span><br>
<span class="quotelev1">&gt;     nextptr  = malloc(nextsize);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%9ld %18lx %18lx %18lx\n&quot;, size, size, nextptr - ptr, ptr);
</span><br>
<span class="quotelev1">&gt;     size = nextsize;
</span><br>
<span class="quotelev1">&gt;     ptr  = nextptr ;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is sample output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    # bytes         #bytes (hex)           #bytes          ptr (hex)
</span><br>
<span class="quotelev1">&gt;                                        to next ptr
</span><br>
<span class="quotelev1">&gt;                                           (hex)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     58279               e3a7               e3b0             58f870
</span><br>
<span class="quotelev1">&gt;     64107               fa6b               fa80             59dc20
</span><br>
<span class="quotelev1">&gt;     70518              11376              11380             5ad6a0
</span><br>
<span class="quotelev1">&gt;     77570              12f02              12f10             5bea20
</span><br>
<span class="quotelev1">&gt;     85328              14d50              14d60             5d1930
</span><br>
<span class="quotelev1">&gt;     93861              16ea5              16eb0             5e6690
</span><br>
<span class="quotelev1">&gt;    103248              19350              19360             5fd540
</span><br>
<span class="quotelev1">&gt;    113573              1bba5              1bbb0             6168a0
</span><br>
<span class="quotelev1">&gt;    124931              1e803       2b3044655bc0             632450
</span><br>
<span class="quotelev1">&gt;    137425              218d1              22000       2b3044c88010
</span><br>
<span class="quotelev1">&gt;    151168              24e80              25000       2b3044caa010
</span><br>
<span class="quotelev1">&gt;    166285              2898d              29000       2b3044ccf010
</span><br>
<span class="quotelev1">&gt;    182914              2ca82              2d000       2b3044cf8010
</span><br>
<span class="quotelev1">&gt;    201206              311f6             294000       2b3044d25010
</span><br>
<span class="quotelev1">&gt;    221327              3608f              37000       2b3044fb9010
</span><br>
<span class="quotelev1">&gt;    243460              3b704              3c000       2b3044ff0010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, below 128K allocations, pointers are allocated at successively
</span><br>
<span class="quotelev1">&gt; higher addresses, each one just barely far enough to make room for the
</span><br>
<span class="quotelev1">&gt; allocation.  E.g., an allocation of 0xE3A7 will push the &quot;high-water
</span><br>
<span class="quotelev1">&gt; mark&quot; up 0xE3B0 further.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Beyond 128K allocations, allocations are page aligned.  The pointers all
</span><br>
<span class="quotelev1">&gt; end in 0x010.  That is, whole numbers of pages are allocated and the
</span><br>
<span class="quotelev1">&gt; returned address is 16 bytes (0x10) into the first page.  The size of
</span><br>
<span class="quotelev1">&gt; the allocations are the requested amount, plus a few bytes of padding,
</span><br>
<span class="quotelev1">&gt; rounded up to the nearest whole page size multiple.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The motivation to change, in my case, is performance.  I don't know how
</span><br>
<span class="quotelev1">&gt; widespread this problem is, but...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;On Jan 8, 2010, at 9:25 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On Thu, 7 Jan 2010, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;setenv MALLOC_MMAP_MAX_        0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;setenv MALLOC_TRIM_THRESHOLD_ -1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;But yes, this set of settings is the number one tweak on HPC code that I'm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;aware of.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; Wow!  I might vote for &quot;compiling with -O&quot;, but let's not pick nits here.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Previous message:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7321.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7321.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
