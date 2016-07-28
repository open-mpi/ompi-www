<?
$subject_val = "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 04:13:46 2008" -->
<!-- isoreceived="20081017081346" -->
<!-- sent="Fri, 17 Oct 2008 10:14:05 +0200" -->
<!-- isosent="20081017081405" -->
<!-- name="Francesco Iannone" -->
<!-- email="francesco.iannone_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI 1.2.7 &amp;amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk" -->
<!-- id="C51E15ED.65CE%francesco.iannone_at_frascati.enea.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C51CFA8E.655C%francesco.iannone_at_frascati.enea.it" -->
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
<strong>Date:</strong> 2008-10-17 04:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7008.php">Teng Lin: "[OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<li><strong>Previous message:</strong> <a href="7006.php">Mostyn Lewis: "[OMPI users] --mca btl_openib_if_include"</a>
<li><strong>In reply to:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Sorry to disturb you
<br>
<p>I send you the Stack Frame captured with Totalview.
<br>
<p>The example program &quot;callocrash&quot; goes in Segmentation Violation on sYMALLOc
<br>
function:
<br>
<p>set_head(remainder, remainder_size | PREV_INUSE);
<br>
<p><p>The Stack frame is
<br>
<p>Function &quot;sYSMALLOc&quot;:
<br>
&nbsp;&nbsp;nb:                        0x000000025216d050 (9967161424)
<br>
&nbsp;&nbsp;av:                        0x2a95c1ef00 (&amp;main_arena) -&gt; (struct
<br>
malloc_state)
<br>
Local variables:
<br>
&nbsp;&nbsp;old_top:                   0x0b8bc110 -&gt; (struct malloc_chunk)
<br>
&nbsp;&nbsp;old_size:                  0x0000000000020ef0 (134896)
<br>
&nbsp;&nbsp;old_end:                   0x0b8dd000 -&gt; &quot;&quot;
<br>
&nbsp;&nbsp;size:                      0x000000025218def0 (9967296240)
<br>
&nbsp;&nbsp;correction:                0x0000000000000000 (0)
<br>
&nbsp;&nbsp;brk:                       0x0b8dd000 -&gt; &quot;&quot;
<br>
&nbsp;&nbsp;snd_brk:                   0xffffffffffffffff -&gt; &lt;Bad address:
<br>
0xffffffffffffffff&gt;
<br>
&nbsp;&nbsp;front_misalign:            0x0000000000000000 (0)
<br>
&nbsp;&nbsp;end_misalign:              0x000000000b8dd000 (193843200)
<br>
&nbsp;&nbsp;aligned_brk:               0x00507000 -&gt; &quot;&quot;
<br>
&nbsp;&nbsp;p:                         0x0b8bc110 -&gt; (struct malloc_chunk)
<br>
&nbsp;&nbsp;remainder:                 0x25da29160 -&gt; &lt;Bad address: 0x25da29160&gt;
<br>
(struct malloc_chunk)
<br>
&nbsp;&nbsp;remainder_size:            0x0000000000020ea0 (134816)
<br>
&nbsp;&nbsp;sum:                       0x000000003828b000 (942190592)
<br>
&nbsp;&nbsp;pagemask:                  0x0000000000000fff (4095)
<br>
<p><p>On 16/10/08 14:05, &quot;Francesco Iannone&quot; &lt;francesco.iannone_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt; I used the configure option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-ptmalloc2-opt-sbrk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To solve a segmentation fault in memory allocation with openmpi.1.2.x and
</span><br>
<span class="quotelev1">&gt; PGI 7.1-4 and 7.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a simple source code (Callocrash.c) as example of this (see belowe).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you test this code on a node with 8 Gbyte of RAM and RedHat enterprise
</span><br>
<span class="quotelev1">&gt; 4+ openmpi 1.2.x, PGI 7.1-4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled it with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  pgcc -o Callocrash Callocreash.c   (it's ok)
</span><br>
<span class="quotelev1">&gt;  gnu4 -o Callocrash Callocreash.c   (it's ok)
</span><br>
<span class="quotelev1">&gt;  mpicc -o Callocrash Callocreash.c   (Segmentation fault in sysMALLOC when
</span><br>
<span class="quotelev1">&gt; it has to allocate 622947588 bytes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; greetings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Callocrash.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         /*
</span><br>
<span class="quotelev1">&gt;          *  memory allocations simulation for ~50M nonzeros:
</span><br>
<span class="quotelev1">&gt;          *  nd=180 md=350 mdy=420
</span><br>
<span class="quotelev1">&gt;          *
</span><br>
<span class="quotelev1">&gt;          *  if this program crashes, there is a compiler problem
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         printf(&quot;memory allocations simulation for ~50M nonzeros:  nd=180
</span><br>
<span class="quotelev1">&gt; md=350 mdy=420\n&quot;);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;if this program crashes, there check your
</span><br>
<span class="quotelev1">&gt; compiler/environment configuration\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         printf(&quot;sizeof(int)    %d\n&quot;,sizeof(int));
</span><br>
<span class="quotelev1">&gt;         printf(&quot;sizeof(int*)   %d\n&quot;,sizeof(int*));
</span><br>
<span class="quotelev1">&gt;         printf(&quot;sizeof(size_t) %d\n&quot;,sizeof(size_t));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if( sizeof(size_t)&lt;8 || sizeof(int*)&lt;8 )
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 printf(&quot;please compile this program for a 64 bit
</span><br>
<span class="quotelev1">&gt; environment!\n&quot;);
</span><br>
<span class="quotelev1">&gt;         return -1;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;         int *p;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;         printf(&quot;allocation 1/4..\n&quot;);
</span><br>
<span class="quotelev1">&gt;         p = calloc(47109185,16);
</span><br>
<span class="quotelev1">&gt;         if(!p)printf(&quot;..failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;allocation 2/4..\n&quot;);
</span><br>
<span class="quotelev1">&gt;         p = calloc(47109185,4);
</span><br>
<span class="quotelev1">&gt;         if(!p)printf(&quot;..failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;allocation 3/4..\n&quot;);
</span><br>
<span class="quotelev1">&gt;         p = calloc(47109185,4);
</span><br>
<span class="quotelev1">&gt;         if(!p)printf(&quot;..failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;allocation 4/4..\n&quot;);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;         p = calloc(622947588,16);
</span><br>
<span class="quotelev1">&gt;         if(!p)printf(&quot;..failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;         if(!p) return -1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         printf(&quot;allocations test passed (no crash)\n&quot;);
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 15/10/08 19:42, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 15, 2008, at 9:35 AM, Francesco Iannone wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a cluster of 16 nodes DualCPU DualCore AMD  RAM 16 GB with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; InfiniBand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CISCO HCA and switch InfiniBand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It uses Linux RH Enterprise 4  64 bit , OpenMPI 1.2.7, PGI 7.1-4 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib-1.2-7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence it means that the option &#139;disable-ptmalloc2 is catastrophic in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above configuration.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I notice that in your original message, you said &quot;--disable-
</span><br>
<span class="quotelev2">&gt;&gt; ptmalloc2-opt-sbrk&quot;, but here you said &quot;--disable-ptmalloc2&quot;.  The
</span><br>
<span class="quotelev2">&gt;&gt; former is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                            Only trigger callbacks when sbrk is used
</span><br>
<span class="quotelev2">&gt;&gt; for small
</span><br>
<span class="quotelev2">&gt;&gt;                            allocations, rather than every call to
</span><br>
<span class="quotelev2">&gt;&gt; malloc/free.
</span><br>
<span class="quotelev2">&gt;&gt;                            (default: enabled)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it should be fine to disable; it shouldn't affect overall MPI
</span><br>
<span class="quotelev2">&gt;&gt; performance too much.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The latter disables ptmalloc2 entirely (and you'll likely get lower
</span><br>
<span class="quotelev2">&gt;&gt; benchmark bandwidth for large messages).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm unaware of either of these options leading to problems with the
</span><br>
<span class="quotelev2">&gt;&gt; PGI compiler suite; I have tested OMPI v1.2.x with several versions of
</span><br>
<span class="quotelev2">&gt;&gt; the PGI compiler without problem (although my latest version is PGI
</span><br>
<span class="quotelev2">&gt;&gt; 7.1-4).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Francesco Iannone
</span><br>
<span class="quotelev1">&gt; Associazione EURATOM-ENEA sulla Fusione
</span><br>
<span class="quotelev1">&gt; C.R. ENEA Frascati
</span><br>
<span class="quotelev1">&gt; Via E. Fermi 45
</span><br>
<span class="quotelev1">&gt; 00044 Frascati (Roma) Italy
</span><br>
<span class="quotelev1">&gt; phone 00-39-06-9400-5124
</span><br>
<span class="quotelev1">&gt; fax 00-39-06-9400-5524
</span><br>
<span class="quotelev1">&gt; mailto:francesco.iannone_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.afs.enea.it/iannone">http://www.afs.enea.it/iannone</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7008.php">Teng Lin: "[OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<li><strong>Previous message:</strong> <a href="7006.php">Mostyn Lewis: "[OMPI users] --mca btl_openib_if_include"</a>
<li><strong>In reply to:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
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
