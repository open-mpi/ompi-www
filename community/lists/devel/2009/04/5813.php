<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 10:46:52 2009" -->
<!-- isoreceived="20090413144652" -->
<!-- sent="Mon, 13 Apr 2009 10:46:46 -0400" -->
<!-- isosent="20090413144646" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k, Performance 	degradation ???" -->
<!-- id="CC31F770-5070-46BD-96D3-20DBF21000AE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E34C17.8000503_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 10:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5814.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>In reply to:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5814.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5814.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5815.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I [unfortunately] think that our benchmark performance is  
<br>
important.  :-(
<br>
<p>So I don't know if 64mb is too big, but it should probably be above  
<br>
zero to avoid the performance degregation.
<br>
<p><p>On Apr 13, 2009, at 10:28 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, guys, I tested it on 1.3 branch, trunk version(1.4a1r20980)
</span><br>
<span class="quotelev2">&gt; &gt; seems to be fixed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; BUT,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the default value of mpool_sm_min_size in 1.4a1r20980 is 67108864
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when I set it to 0, there is a performance degradation, is it OK ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Depends on what matters for you!  :^)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1)  I think many bandwidth tests won't see this problem, but osu_bw is
</span><br>
<span class="quotelev1">&gt; different since it pumps so many messages into the system  
</span><br>
<span class="quotelev1">&gt; concurrently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2)  For the sake of osu_bw, I think leaving the default at 64M is  
</span><br>
<span class="quotelev1">&gt; good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; $LD_LIBRARY_PATH=~/work/svn/ompi/trunk/build_x86-64/install/lib/
</span><br>
<span class="quotelev2">&gt; &gt; install/bin/mpirun -np 2 -mca btl sm,self -mca mpool_sm_min_size 0
</span><br>
<span class="quotelev2">&gt; &gt; ~/work/svn/hpc/tools/benchmarks/OMB-3.1.1/osu_bw
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt; &gt; 1 1.20
</span><br>
<span class="quotelev2">&gt; &gt; 2 3.39
</span><br>
<span class="quotelev2">&gt; &gt; 4 6.93
</span><br>
<span class="quotelev2">&gt; &gt; 8 14.09
</span><br>
<span class="quotelev2">&gt; &gt; 16 27.80
</span><br>
<span class="quotelev2">&gt; &gt; 32 50.58
</span><br>
<span class="quotelev2">&gt; &gt; 64 101.08
</span><br>
<span class="quotelev2">&gt; &gt; 128 173.23
</span><br>
<span class="quotelev2">&gt; &gt; 256 257.81
</span><br>
<span class="quotelev2">&gt; &gt; 512 436.86
</span><br>
<span class="quotelev2">&gt; &gt; 1024 674.51
</span><br>
<span class="quotelev2">&gt; &gt; 2048 856.80
</span><br>
<span class="quotelev2">&gt; &gt; 4096 573.87
</span><br>
<span class="quotelev2">&gt; &gt; 8192 607.55
</span><br>
<span class="quotelev2">&gt; &gt; 16384 660.58
</span><br>
<span class="quotelev2">&gt; &gt; 32768 685.23
</span><br>
<span class="quotelev2">&gt; &gt; 65536 687.45
</span><br>
<span class="quotelev2">&gt; &gt; 131072 690.52
</span><br>
<span class="quotelev2">&gt; &gt; 262144 687.48
</span><br>
<span class="quotelev2">&gt; &gt; 524288 676.77
</span><br>
<span class="quotelev2">&gt; &gt; 1048576 675.74
</span><br>
<span class="quotelev2">&gt; &gt; 2097152 676.89
</span><br>
<span class="quotelev2">&gt; &gt; 4194304 677.28
</span><br>
<span class="quotelev2">&gt; &gt; lennyb_at_dellix7 ~/work/svn/ompi/trunk/build_x86-64
</span><br>
<span class="quotelev2">&gt; &gt; $LD_LIBRARY_PATH=~/work/svn/ompi/trunk/build_x86-64/install/lib/
</span><br>
<span class="quotelev2">&gt; &gt; install/bin/mpirun -np 2 -mca btl sm,self
</span><br>
<span class="quotelev2">&gt; &gt; ~/work/svn/hpc/tools/benchmarks/OMB-3.1.1/osu_bw
</span><br>
<span class="quotelev2">&gt; &gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev2">&gt; &gt; # Size Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt; &gt; 1 1.72
</span><br>
<span class="quotelev2">&gt; &gt; 2 3.70
</span><br>
<span class="quotelev2">&gt; &gt; 4 7.43
</span><br>
<span class="quotelev2">&gt; &gt; 8 13.45
</span><br>
<span class="quotelev2">&gt; &gt; 16 29.83
</span><br>
<span class="quotelev2">&gt; &gt; 32 52.66
</span><br>
<span class="quotelev2">&gt; &gt; 64 105.08
</span><br>
<span class="quotelev2">&gt; &gt; 128 181.16
</span><br>
<span class="quotelev2">&gt; &gt; 256 288.16
</span><br>
<span class="quotelev2">&gt; &gt; 512 426.83
</span><br>
<span class="quotelev2">&gt; &gt; 1024 690.21
</span><br>
<span class="quotelev2">&gt; &gt; 2048 867.00
</span><br>
<span class="quotelev2">&gt; &gt; 4096 567.53
</span><br>
<span class="quotelev2">&gt; &gt; 8192 667.35
</span><br>
<span class="quotelev2">&gt; &gt; 16384 806.97
</span><br>
<span class="quotelev2">&gt; &gt; 32768 892.95
</span><br>
<span class="quotelev2">&gt; &gt; 65536 989.62
</span><br>
<span class="quotelev2">&gt; &gt; 131072 1009.25
</span><br>
<span class="quotelev2">&gt; &gt; 262144 1018.35
</span><br>
<span class="quotelev2">&gt; &gt; 524288 1037.32
</span><br>
<span class="quotelev2">&gt; &gt; 1048576 1048.75
</span><br>
<span class="quotelev2">&gt; &gt; 2097152 1057.51
</span><br>
<span class="quotelev2">&gt; &gt; 4194304 1062.16
</span><br>
<span class="quotelev2">&gt; &gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5814.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>In reply to:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5814.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5814.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5815.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
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
