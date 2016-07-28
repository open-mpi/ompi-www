<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 10:29:01 2009" -->
<!-- isoreceived="20090413142901" -->
<!-- sent="Mon, 13 Apr 2009 07:28:39 -0700" -->
<!-- isosent="20090413142839" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k, Performance 	degradation ???" -->
<!-- id="49E34C17.8000503_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990904120611v7305910cp4f057bd9df1db96e_at_mail.gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 10:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5811.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>In reply to:</strong> <a href="5807.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, guys, I tested it on 1.3 branch, trunk version(1.4a1r20980) 
</span><br>
<span class="quotelev1">&gt; seems to be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Great.
<br>
<p><span class="quotelev1">&gt; BUT,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the default value of mpool_sm_min_size in 1.4a1r20980 is 67108864
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I set it to 0, there is a performance degradation, is it OK ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Depends on what matters for you!  :^)
<br>
<p>Anyhow:
<br>
<p>1)  I think many bandwidth tests won't see this problem, but osu_bw is 
<br>
different since it pumps so many messages into the system concurrently.
<br>
<p>2)  For the sake of osu_bw, I think leaving the default at 64M is good.
<br>
<p><span class="quotelev1">&gt; $LD_LIBRARY_PATH=~/work/svn/ompi/trunk/build_x86-64/install/lib/ 
</span><br>
<span class="quotelev1">&gt; install/bin/mpirun -np 2 -mca btl sm,self -mca mpool_sm_min_size 0 
</span><br>
<span class="quotelev1">&gt; ~/work/svn/hpc/tools/benchmarks/OMB-3.1.1/osu_bw
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1 1.20
</span><br>
<span class="quotelev1">&gt; 2 3.39
</span><br>
<span class="quotelev1">&gt; 4 6.93
</span><br>
<span class="quotelev1">&gt; 8 14.09
</span><br>
<span class="quotelev1">&gt; 16 27.80
</span><br>
<span class="quotelev1">&gt; 32 50.58
</span><br>
<span class="quotelev1">&gt; 64 101.08
</span><br>
<span class="quotelev1">&gt; 128 173.23
</span><br>
<span class="quotelev1">&gt; 256 257.81
</span><br>
<span class="quotelev1">&gt; 512 436.86
</span><br>
<span class="quotelev1">&gt; 1024 674.51
</span><br>
<span class="quotelev1">&gt; 2048 856.80
</span><br>
<span class="quotelev1">&gt; 4096 573.87
</span><br>
<span class="quotelev1">&gt; 8192 607.55
</span><br>
<span class="quotelev1">&gt; 16384 660.58
</span><br>
<span class="quotelev1">&gt; 32768 685.23
</span><br>
<span class="quotelev1">&gt; 65536 687.45
</span><br>
<span class="quotelev1">&gt; 131072 690.52
</span><br>
<span class="quotelev1">&gt; 262144 687.48
</span><br>
<span class="quotelev1">&gt; 524288 676.77
</span><br>
<span class="quotelev1">&gt; 1048576 675.74
</span><br>
<span class="quotelev1">&gt; 2097152 676.89
</span><br>
<span class="quotelev1">&gt; 4194304 677.28
</span><br>
<span class="quotelev1">&gt; lennyb_at_dellix7 ~/work/svn/ompi/trunk/build_x86-64 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH=~/work/svn/ompi/trunk/build_x86-64/install/lib/ 
</span><br>
<span class="quotelev1">&gt; install/bin/mpirun -np 2 -mca btl sm,self 
</span><br>
<span class="quotelev1">&gt; ~/work/svn/hpc/tools/benchmarks/OMB-3.1.1/osu_bw
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1 1.72
</span><br>
<span class="quotelev1">&gt; 2 3.70
</span><br>
<span class="quotelev1">&gt; 4 7.43
</span><br>
<span class="quotelev1">&gt; 8 13.45
</span><br>
<span class="quotelev1">&gt; 16 29.83
</span><br>
<span class="quotelev1">&gt; 32 52.66
</span><br>
<span class="quotelev1">&gt; 64 105.08
</span><br>
<span class="quotelev1">&gt; 128 181.16
</span><br>
<span class="quotelev1">&gt; 256 288.16
</span><br>
<span class="quotelev1">&gt; 512 426.83
</span><br>
<span class="quotelev1">&gt; 1024 690.21
</span><br>
<span class="quotelev1">&gt; 2048 867.00
</span><br>
<span class="quotelev1">&gt; 4096 567.53
</span><br>
<span class="quotelev1">&gt; 8192 667.35
</span><br>
<span class="quotelev1">&gt; 16384 806.97
</span><br>
<span class="quotelev1">&gt; 32768 892.95
</span><br>
<span class="quotelev1">&gt; 65536 989.62
</span><br>
<span class="quotelev1">&gt; 131072 1009.25
</span><br>
<span class="quotelev1">&gt; 262144 1018.35
</span><br>
<span class="quotelev1">&gt; 524288 1037.32
</span><br>
<span class="quotelev1">&gt; 1048576 1048.75
</span><br>
<span class="quotelev1">&gt; 2097152 1057.51
</span><br>
<span class="quotelev1">&gt; 4194304 1062.16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5811.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>In reply to:</strong> <a href="5807.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
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
