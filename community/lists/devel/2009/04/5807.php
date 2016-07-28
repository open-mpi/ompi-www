<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 12 09:11:14 2009" -->
<!-- isoreceived="20090412131114" -->
<!-- sent="Sun, 12 Apr 2009 16:11:09 +0300" -->
<!-- isosent="20090412131109" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k, Performance 	degradation ???" -->
<!-- id="453d39990904120611v7305910cp4f057bd9df1db96e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k, Performance 	degradation ???" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-12 09:11:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5808.php">Timothy Hayes: "[OMPI devel] A Couple of Questions"</a>
<li><strong>Previous message:</strong> <a href="5806.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, guys, I tested it on 1.3 branch, trunk version(1.4a1r20980) seems to
<br>
be fixed.
<br>
<p>BUT,
<br>
<p>the default value of mpool_sm_min_size in 1.4a1r20980 is 67108864
<br>
<p>when I set it to 0, there is a performance degradation, is it OK ?
<br>
<p>$LD_LIBRARY_PATH=~/work/svn/ompi/trunk/build_x86-64/install/lib/
<br>
install/bin/mpirun -np 2 -mca btl sm,self -mca mpool_sm_min_size 0
<br>
~/work/svn/hpc/tools/benchmarks/OMB-3.1.1/osu_bw
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size Bandwidth (MB/s)
<br>
1 1.20
<br>
2 3.39
<br>
4 6.93
<br>
8 14.09
<br>
16 27.80
<br>
32 50.58
<br>
64 101.08
<br>
128 173.23
<br>
256 257.81
<br>
512 436.86
<br>
1024 674.51
<br>
2048 856.80
<br>
4096 573.87
<br>
8192 607.55
<br>
16384 660.58
<br>
32768 685.23
<br>
65536 687.45
<br>
131072 690.52
<br>
262144 687.48
<br>
524288 676.77
<br>
1048576 675.74
<br>
2097152 676.89
<br>
4194304 677.28
<br>
lennyb_at_dellix7 ~/work/svn/ompi/trunk/build_x86-64
<br>
$LD_LIBRARY_PATH=~/work/svn/ompi/trunk/build_x86-64/install/lib/
<br>
install/bin/mpirun -np 2 -mca btl sm,self
<br>
~/work/svn/hpc/tools/benchmarks/OMB-3.1.1/osu_bw
<br>
# OSU MPI Bandwidth Test v3.1.1
<br>
# Size Bandwidth (MB/s)
<br>
1 1.72
<br>
2 3.70
<br>
4 7.43
<br>
8 13.45
<br>
16 29.83
<br>
32 52.66
<br>
64 105.08
<br>
128 181.16
<br>
256 288.16
<br>
512 426.83
<br>
1024 690.21
<br>
2048 867.00
<br>
4096 567.53
<br>
8192 667.35
<br>
16384 806.97
<br>
32768 892.95
<br>
65536 989.62
<br>
131072 1009.25
<br>
262144 1018.35
<br>
524288 1037.32
<br>
1048576 1048.75
<br>
2097152 1057.51
<br>
4194304 1062.16
<br>
<p>Lenny.
<br>
<p>On 4/12/09, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r20980 It still get stacked
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=~/work/svn/hpc/dev/ompi_1_3_trunk/build_x86-64/install/lib/
</span><br>
<span class="quotelev1">&gt; ~/work/svn/hpc/dev/ompi_1_3_trunk/build_x86-64/install/bin/mpirun -np 2 -mca
</span><br>
<span class="quotelev1">&gt; btl self,sm ./osu_bw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1 1.46
</span><br>
<span class="quotelev1">&gt; 2 3.66
</span><br>
<span class="quotelev1">&gt; 4 7.29
</span><br>
<span class="quotelev1">&gt; 8 14.64
</span><br>
<span class="quotelev1">&gt; 16 29.44
</span><br>
<span class="quotelev1">&gt; 32 56.94
</span><br>
<span class="quotelev1">&gt; 64 112.25
</span><br>
<span class="quotelev1">&gt; 128 189.02
</span><br>
<span class="quotelev1">&gt; 256 278.26
</span><br>
<span class="quotelev1">&gt; 512 448.58
</span><br>
<span class="quotelev1">&gt; 1024 686.25
</span><br>
<span class="quotelev1">&gt; 2048 865.27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/8/09, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ditto -- works for me too.  Huzzah!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 7, 2009, at 8:39 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This is interesting. I cannot trigger this deadlock on my AMD cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; even when I set the sm_min_size to zero. However, on a Intel cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; this can be triggered pretty easily.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Anyway, I think I finally understood where the problem is coming
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; from.  r20952 and r20953 are commits that, in addition to the ones
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; from  yesterday, fix the problem. Please read the log on r20953 to see
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; how  this happens.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Of course, please stress it before we move it to the 1.3 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, this fix works for me.
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5808.php">Timothy Hayes: "[OMPI devel] A Couple of Questions"</a>
<li><strong>Previous message:</strong> <a href="5806.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
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
