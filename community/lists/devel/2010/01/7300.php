<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  9 11:53:54 2010" -->
<!-- isoreceived="20100109165354" -->
<!-- sent="Sat, 09 Jan 2010 08:55:33 -0800" -->
<!-- isosent="20100109165533" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="4B48B505.5080704_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="17A63099-7D68-45AF-A515-F4681770EB0D_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-09 11:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7299.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7299.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7350.php">Chris Samuel: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;I'm not sure I follow -- are you saying that Open MPI is disabling the large mmap allocations, and we shouldn't?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Basically the reverse.  The default (I think this means Linux, whether 
<br>
with gcc, gfortran, Sun f90, etc.) is to use mmap to malloc large 
<br>
allocations.  We don't change this, but arguably we should.
<br>
<p>Try this:
<br>
<p>#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;size_t size, nextsize;
<br>
&nbsp;&nbsp;void  *ptr, *nextptr;
<br>
<p>&nbsp;&nbsp;size = 1;
<br>
&nbsp;&nbsp;ptr  = malloc(size);
<br>
&nbsp;&nbsp;while ( size &lt; 1000000 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nextsize = 1.1 * size + 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nextptr  = malloc(nextsize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%9ld %18lx %18lx %18lx\n&quot;, size, size, nextptr - ptr, ptr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size = nextsize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ptr  = nextptr ;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Here is sample output:
<br>
<p>&nbsp;&nbsp;&nbsp;# bytes         #bytes (hex)           #bytes          ptr (hex)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to next ptr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(hex)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;58279               e3a7               e3b0             58f870
<br>
&nbsp;&nbsp;&nbsp;&nbsp;64107               fa6b               fa80             59dc20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;70518              11376              11380             5ad6a0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;77570              12f02              12f10             5bea20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;85328              14d50              14d60             5d1930
<br>
&nbsp;&nbsp;&nbsp;&nbsp;93861              16ea5              16eb0             5e6690
<br>
&nbsp;&nbsp;&nbsp;103248              19350              19360             5fd540
<br>
&nbsp;&nbsp;&nbsp;113573              1bba5              1bbb0             6168a0
<br>
&nbsp;&nbsp;&nbsp;124931              1e803       2b3044655bc0             632450
<br>
&nbsp;&nbsp;&nbsp;137425              218d1              22000       2b3044c88010
<br>
&nbsp;&nbsp;&nbsp;151168              24e80              25000       2b3044caa010
<br>
&nbsp;&nbsp;&nbsp;166285              2898d              29000       2b3044ccf010
<br>
&nbsp;&nbsp;&nbsp;182914              2ca82              2d000       2b3044cf8010
<br>
&nbsp;&nbsp;&nbsp;201206              311f6             294000       2b3044d25010
<br>
&nbsp;&nbsp;&nbsp;221327              3608f              37000       2b3044fb9010
<br>
&nbsp;&nbsp;&nbsp;243460              3b704              3c000       2b3044ff0010
<br>
<p>So, below 128K allocations, pointers are allocated at successively 
<br>
higher addresses, each one just barely far enough to make room for the 
<br>
allocation.  E.g., an allocation of 0xE3A7 will push the &quot;high-water 
<br>
mark&quot; up 0xE3B0 further.
<br>
<p>Beyond 128K allocations, allocations are page aligned.  The pointers all 
<br>
end in 0x010.  That is, whole numbers of pages are allocated and the 
<br>
returned address is 16 bytes (0x10) into the first page.  The size of 
<br>
the allocations are the requested amount, plus a few bytes of padding, 
<br>
rounded up to the nearest whole page size multiple.
<br>
<p>The motivation to change, in my case, is performance.  I don't know how 
<br>
widespread this problem is, but...
<br>
<p><span class="quotelev1">&gt;On Jan 8, 2010, at 9:25 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Thu, 7 Jan 2010, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;setenv MALLOC_MMAP_MAX_        0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;setenv MALLOC_TRIM_THRESHOLD_ -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;But yes, this set of settings is the number one tweak on HPC code that I'm
</span><br>
<span class="quotelev2">&gt;&gt;aware of.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Wow!  I might vote for &quot;compiling with -O&quot;, but let's not pick nits here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7299.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7299.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7350.php">Chris Samuel: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
