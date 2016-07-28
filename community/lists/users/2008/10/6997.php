<?
$subject_val = "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 08:04:52 2008" -->
<!-- isoreceived="20081016120452" -->
<!-- sent="Thu, 16 Oct 2008 14:05:02 +0200" -->
<!-- isosent="20081016120502" -->
<!-- name="Francesco Iannone" -->
<!-- email="francesco.iannone_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI 1.2.7 &amp;amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk" -->
<!-- id="C51CFA8E.655C%francesco.iannone_at_frascati.enea.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7599328F-C015-4D4C-A5B6-BD22CAB11BAD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk<br>
<strong>From:</strong> Francesco Iannone (<em>francesco.iannone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 08:05:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>In reply to:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7007.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Reply:</strong> <a href="7007.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
I used the configure option:
<br>
<p>--enable-ptmalloc2-opt-sbrk
<br>
<p>To solve a segmentation fault in memory allocation with openmpi.1.2.x and
<br>
PGI 7.1-4 and 7.2.
<br>
<p>I have a simple source code (Callocrash.c) as example of this (see belowe).
<br>
<p>Could you test this code on a node with 8 Gbyte of RAM and RedHat enterprise
<br>
4+ openmpi 1.2.x, PGI 7.1-4.
<br>
<p>I compiled it with:
<br>
<p>&nbsp;pgcc -o Callocrash Callocreash.c   (it's ok)
<br>
&nbsp;gnu4 -o Callocrash Callocreash.c   (it's ok)
<br>
&nbsp;mpicc -o Callocrash Callocreash.c   (Segmentation fault in sysMALLOC when
<br>
it has to allocate 622947588 bytes)
<br>
<p>However thanks in advance
<br>
<p>greetings
<br>
<p><p>Callocrash.c
<br>
<p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main( int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*  memory allocations simulation for ~50M nonzeros:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*  nd=180 md=350 mdy=420
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*  if this program crashes, there is a compiler problem
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;memory allocations simulation for ~50M nonzeros:  nd=180
<br>
md=350 mdy=420\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;if this program crashes, there check your
<br>
compiler/environment configuration\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;sizeof(int)    %d\n&quot;,sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;sizeof(int*)   %d\n&quot;,sizeof(int*));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;sizeof(size_t) %d\n&quot;,sizeof(size_t));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( sizeof(size_t)&lt;8 || sizeof(int*)&lt;8 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;please compile this program for a 64 bit
<br>
environment!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;allocation 1/4..\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = calloc(47109185,16);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!p)printf(&quot;..failed.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;allocation 2/4..\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = calloc(47109185,4);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!p)printf(&quot;..failed.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;allocation 3/4..\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = calloc(47109185,4);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!p)printf(&quot;..failed.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;allocation 4/4..\n&quot;);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = calloc(622947588,16);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!p)printf(&quot;..failed.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!p) return -1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;allocations test passed (no crash)\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>On 15/10/08 19:42, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 15, 2008, at 9:35 AM, Francesco Iannone wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a cluster of 16 nodes DualCPU DualCore AMD  RAM 16 GB with
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt; CISCO HCA and switch InfiniBand.
</span><br>
<span class="quotelev2">&gt;&gt; It uses Linux RH Enterprise 4  64 bit , OpenMPI 1.2.7, PGI 7.1-4 and
</span><br>
<span class="quotelev2">&gt;&gt; openib-1.2-7.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence it means that the option &#139;disable-ptmalloc2 is catastrophic in
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; above configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I notice that in your original message, you said &quot;--disable-
</span><br>
<span class="quotelev1">&gt; ptmalloc2-opt-sbrk&quot;, but here you said &quot;--disable-ptmalloc2&quot;.  The
</span><br>
<span class="quotelev1">&gt; former is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                            Only trigger callbacks when sbrk is used
</span><br>
<span class="quotelev1">&gt; for small
</span><br>
<span class="quotelev1">&gt;                            allocations, rather than every call to
</span><br>
<span class="quotelev1">&gt; malloc/free.
</span><br>
<span class="quotelev1">&gt;                            (default: enabled)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it should be fine to disable; it shouldn't affect overall MPI
</span><br>
<span class="quotelev1">&gt; performance too much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The latter disables ptmalloc2 entirely (and you'll likely get lower
</span><br>
<span class="quotelev1">&gt; benchmark bandwidth for large messages).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unaware of either of these options leading to problems with the
</span><br>
<span class="quotelev1">&gt; PGI compiler suite; I have tested OMPI v1.2.x with several versions of
</span><br>
<span class="quotelev1">&gt; the PGI compiler without problem (although my latest version is PGI
</span><br>
<span class="quotelev1">&gt; 7.1-4).
</span><br>
<p>Dr. Francesco Iannone
<br>
Associazione EURATOM-ENEA sulla Fusione
<br>
C.R. ENEA Frascati
<br>
Via E. Fermi 45
<br>
00044 Frascati (Roma) Italy
<br>
phone 00-39-06-9400-5124
<br>
fax 00-39-06-9400-5524
<br>
mailto:francesco.iannone_at_[hidden]
<br>
<a href="http://www.afs.enea.it/iannone">http://www.afs.enea.it/iannone</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6998.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6996.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>In reply to:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7007.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Reply:</strong> <a href="7007.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
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
