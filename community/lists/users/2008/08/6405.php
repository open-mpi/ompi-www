<?
$subject_val = "[OMPI users]  Memory allocation with PGI compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 12:43:55 2008" -->
<!-- isoreceived="20080821164355" -->
<!-- sent="Thu, 21 Aug 2008 18:43:40 +0200" -->
<!-- isosent="20080821164340" -->
<!-- name="Francesco Iannone" -->
<!-- email="francesco.iannone_at_[hidden]" -->
<!-- subject="[OMPI users]  Memory allocation with PGI compiler" -->
<!-- id="C4D367DC.5323%francesco.iannone_at_frascati.enea.it" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users]  Memory allocation with PGI compiler<br>
<strong>From:</strong> Francesco Iannone (<em>francesco.iannone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-21 12:43:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6406.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6404.php">Mehdi Bozzo-Rey: "[OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
<p>Some people (Michele Martone Rome University Tor Vergata) found a bug
<br>
present in openmpi (1.2.5 and 1.2.6) compiled with PGI (7.1-4 and 7.2).
<br>
<p>This bug doesn&#185;t involve fabric interconnection (infiniband or GE or other)
<br>
because is regard just only a simple memory allocation.
<br>
<p>You can reproduce the bug with this simple code:
<br>
<p>#include &lt;stdio.h&gt;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int * p;
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
<p><p>So we test:
<br>
<p>1. the above code compiled with gcc4 and PGI (7.1-4 or 7.2) is ok
<br>
2. the above code compiled with openmpi (1.2.5 or 1.2.6) with gcc4 is ok
<br>
3. the above code compiled with openmpi (1.2.5 or 1.2.6) with PGI (7.1-4 or
<br>
7.2) the test doesn&#185;t  pass  (Segmentation fault)
<br>
<p>Some output of ldd:
<br>
<p><span class="quotelev2">&gt; &gt;         libmpi.so.0 =&gt; /opt/mpi/openmpi-1.2.5/pgi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; (0x0000002a95558000)
</span><br>
<span class="quotelev2">&gt; &gt;         libopen-rte.so.0 =&gt; /opt/mpi/openmpi-1.2.5/pgi/lib/libopen-rte.so.0
</span><br>
<span class="quotelev2">&gt; &gt; (0x0000002a957b2000)
</span><br>
<span class="quotelev2">&gt; &gt;         libopen-pal.so.0 =&gt; /opt/mpi/openmpi-1.2.5/pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; (0x0000002a9599c000)
</span><br>
<span class="quotelev2">&gt; &gt;         libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x0000003d7b600000)
</span><br>
<span class="quotelev2">&gt; &gt;         librt.so.1 =&gt; /lib64/tls/librt.so.1 (0x0000003d80d00000)
</span><br>
<span class="quotelev2">&gt; &gt;         libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x0000002a95b30000)
</span><br>
<span class="quotelev2">&gt; &gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003d7bd00000)
</span><br>
<span class="quotelev2">&gt; &gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003d81500000)
</span><br>
<span class="quotelev2">&gt; &gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a95c35000)
</span><br>
<span class="quotelev2">&gt; &gt;         libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0 (0x0000003d7c100000)
</span><br>
<span class="quotelev2">&gt; &gt;         libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000003d7bb00000)
</span><br>
<span class="quotelev2">&gt; &gt;         libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000003d7b800000)
</span><br>
<span class="quotelev2">&gt; &gt;         libpgc.so =&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /afs/efda-itm.eu/project/compilers/pgi/linux86-64/7.1-4/libso/libpgc.so
</span><br>
<span class="quotelev2">&gt; &gt; (0x0000002a95d3a000)
</span><br>
<span class="quotelev2">&gt; &gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003d7b400000
</span><br>
<p>I think it is a bug to wrap the calloc function.
<br>
<p>greetings 
<br>
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
<p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6405/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6406.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6404.php">Mehdi Bozzo-Rey: "[OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
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
