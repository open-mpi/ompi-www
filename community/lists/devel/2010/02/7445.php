<?
$subject_val = "Re: [OMPI devel] 1.5.0 could be soon";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 08:56:04 2010" -->
<!-- isoreceived="20100217135604" -->
<!-- sent="Wed, 17 Feb 2010 14:55:49 +0100" -->
<!-- isosent="20100217135549" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.0 could be soon" -->
<!-- id="201002171455.58049.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F38DBDB-B280-44CB-A29C-D1F2C269B0EF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.0 could be soon<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 08:55:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7446.php">Greg Watson: "Re: [OMPI devel] configure question"</a>
<li><strong>Previous message:</strong> <a href="7444.php">Pavel Shamis (Pasha): "Re: [OMPI devel] v1.4 broken"</a>
<li><strong>In reply to:</strong> <a href="7439.php">Jeff Squyres: "[OMPI devel] 1.5.0 could be soon"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 16 February 2010, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; We've only got 2 &quot;critical&quot; 1.5.0 bugs left, and I think that those will
</span><br>
<span class="quotelev1">&gt; both be closed out pretty soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/report/15">https://svn.open-mpi.org/trac/ompi/report/15</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rainer and I both feel that a RC for 1.5.0 could be pretty soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any heartburn with this?  Does anyone have any things they
</span><br>
<span class="quotelev1">&gt; still need to get in v1.5.0?
</span><br>
<p>I noticed that 1.5a1r22627 still has a very suboptimal default selection of 
<br>
(at least) alltoall algorithms. This has been mentioned several times since 
<br>
the first major discussion[1] but nothing seems to have improved.
<br>
<p>A short re-cap of the situation is that by default ompi switches from bruck to 
<br>
basic-linear at ~100 bytes pkg size and this is bad&lt;tm&gt;. The first set of 
<br>
figures below are with vanilla ompi and the second set is with a dynamic 
<br>
rules file [2] that foreces bruck for all pkg sizes. For details on the 
<br>
system see [3].
<br>
<p>The problem is equally visible on tcp as on openib. A concrete result is that 
<br>
OpenMPI on IB is way slower than other MPIs on 1G eth (for the affected pkg 
<br>
sizes (100-3000 bytes)).
<br>
<p>[cap_at_n115 mpi]$ mpirun --host $(hostlist --expand -s',' 
<br>
$SLURM_JOB_NODELIST) --bind-to-core  ./alltoall.ompi15a1r22627 
<br>
profile.ompibadness
<br>
running in profile-from-file mode
<br>
bw for   400     x 1 B :   2.0 Mbytes/s          time was:  24.9 ms
<br>
bw for   400     x 25 B :  52.8 Mbytes/s         time was:  23.9 ms
<br>
bw for   400     x 50 B :  82.2 Mbytes/s         time was:  30.7 ms
<br>
bw for   400     x 75 B :  90.4 Mbytes/s         time was:  41.8 ms
<br>
bw for   400     x 100 B : 109.2 Mbytes/s        time was:  46.1 ms
<br>
bw for   400     x 200 B :   4.8 Mbytes/s        time was:   2.1 s
<br>
bw for   400     x 300 B :   7.0 Mbytes/s        time was:   2.2 s
<br>
bw for   400     x 400 B :   9.8 Mbytes/s        time was:   2.1 s
<br>
bw for   400     x 500 B :  12.3 Mbytes/s        time was:   2.0 s
<br>
bw for   400     x 750 B :  18.5 Mbytes/s        time was:   2.0 s
<br>
bw for   400     x 1000 B :  24.6 Mbytes/s       time was:   2.0 s
<br>
bw for   400     x 1250 B :  29.9 Mbytes/s       time was:   2.1 s
<br>
bw for   400     x 1500 B :  35.1 Mbytes/s       time was:   2.2 s
<br>
bw for   400     x 2000 B :  45.5 Mbytes/s       time was:   2.2 s
<br>
bw for   400     x 2500 B :  51.0 Mbytes/s       time was:   2.5 s
<br>
bw for   400     x 3000 B : 113.6 Mbytes/s       time was:   1.3 s
<br>
bw for   400     x 3500 B : 123.3 Mbytes/s       time was:   1.4 s
<br>
bw for   400     x 4000 B : 135.7 Mbytes/s       time was:   1.5 s
<br>
totaltime was:  25.8 s
<br>
[cap_at_n115 mpi]$ mpirun --host $(hostlist --expand -s',' 
<br>
$SLURM_JOB_NODELIST) --bind-to-core -mca coll_tuned_use_dynamic_rules 1 -mca 
<br>
coll_tuned_dynamic_rules_filename ./dyn_rules ./alltoall.ompi15a1r22627 
<br>
profile.ompibadness
<br>
running in profile-from-file mode
<br>
bw for   400     x 1 B :   2.1 Mbytes/s          time was:  24.3 ms
<br>
bw for   400     x 25 B :  55.1 Mbytes/s         time was:  22.9 ms
<br>
bw for   400     x 50 B :  82.6 Mbytes/s         time was:  30.5 ms
<br>
bw for   400     x 75 B :  89.4 Mbytes/s         time was:  42.3 ms
<br>
bw for   400     x 100 B : 109.9 Mbytes/s        time was:  45.9 ms
<br>
bw for   400     x 200 B : 115.1 Mbytes/s        time was:  87.6 ms
<br>
bw for   400     x 300 B : 117.8 Mbytes/s        time was: 128.3 ms
<br>
bw for   400     x 400 B : 105.4 Mbytes/s        time was: 191.2 ms
<br>
bw for   400     x 500 B : 113.4 Mbytes/s        time was: 222.1 ms
<br>
bw for   400     x 750 B : 119.3 Mbytes/s        time was: 316.9 ms
<br>
bw for   400     x 1000 B : 120.9 Mbytes/s       time was: 416.9 ms
<br>
bw for   400     x 1250 B : 121.0 Mbytes/s       time was: 520.6 ms
<br>
bw for   400     x 1500 B : 120.3 Mbytes/s       time was: 628.2 ms
<br>
bw for   400     x 2000 B : 118.0 Mbytes/s       time was: 854.1 ms
<br>
bw for   400     x 2500 B :  96.5 Mbytes/s       time was:   1.3 s
<br>
bw for   400     x 3000 B : 107.4 Mbytes/s       time was:   1.4 s
<br>
bw for   400     x 3500 B : 109.1 Mbytes/s       time was:   1.6 s
<br>
bw for   400     x 4000 B : 109.2 Mbytes/s       time was:   1.8 s
<br>
totaltime was:   9.7 s
<br>
<p>[1] [OMPI users] scaling problem with openmpi
<br>
From: Roman Martonak &lt;r.martonak_at_[hidden]&gt;
<br>
&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;Date: 2009-05-16 00.20
<br>
<p>[2]:
<br>
&nbsp;1 # num of collectives
<br>
&nbsp;3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
<br>
&nbsp;1 # number of com sizes
<br>
&nbsp;32 # comm size 8
<br>
&nbsp;1 # number of msg sizes
<br>
&nbsp;0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
<br>
&nbsp;# end of first collective
<br>
<p>[3]:
<br>
&nbsp;OpenMPI: Built with intel-11.1.074 only configure options used were:
<br>
&nbsp;&nbsp;--enable-orterun-prefix-by-default
<br>
&nbsp;&nbsp;--prefix
<br>
&nbsp;OS: CentOS-5.4 x86_64
<br>
&nbsp;HW: Dual E5520 nodes with IB (ConnectX)
<br>
&nbsp;Size of job: 8 nodes (that is 64 cores/ranks)
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7445/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7446.php">Greg Watson: "Re: [OMPI devel] configure question"</a>
<li><strong>Previous message:</strong> <a href="7444.php">Pavel Shamis (Pasha): "Re: [OMPI devel] v1.4 broken"</a>
<li><strong>In reply to:</strong> <a href="7439.php">Jeff Squyres: "[OMPI devel] 1.5.0 could be soon"</a>
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
