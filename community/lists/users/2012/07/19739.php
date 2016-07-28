<?
$subject_val = "Re: [OMPI users] ompi mca mxm version";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 10:23:18 2012" -->
<!-- isoreceived="20120705142318" -->
<!-- sent="Thu, 5 Jul 2012 14:22:27 +0000" -->
<!-- isosent="20120705142227" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi mca mxm version" -->
<!-- id="814E6D361B66804FBF146E8AB57FE1CC280EF9D2_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAL3GGtrdV5oD=zqB+92rdx6BGBUZYZxP4rdRMJ_SJ93c4CHzfg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi mca mxm version<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 10:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19740.php">Gus Correa: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>Previous message:</strong> <a href="19738.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19256.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Do you have any details about the performance of mxm, e.g. for real applications?
<br>
<p>Thanks
<br>
<p>Henk
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Mike Dubman
<br>
Sent: 11 May 2012 19:23
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] ompi mca mxm version
<br>
<p>ob1/openib is RC based which have scalability issues, mxm 1.1 is ud based and kicks in at scale.
<br>
We observe mxm outperforms ob1 on 8+ nodes.
<br>
<p>We will update docs as you mentioned, thanks
<br>
<p>Regards
<br>
<p><p><p><p>On Thu, May 10, 2012 at 4:30 PM, Derek Gerstmann &lt;derek.gerstmann_at_[hidden]&lt;mailto:derek.gerstmann_at_[hidden]&gt;&gt; wrote:
<br>
On May 9, 2012, at 7:41 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; you need latest OMPI 1.6.x and latest MXM (<a href="ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar">ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar</a>)
</span><br>
Excellent!  Thanks for the quick response!  Using the MXM v1.1.1067 against OMPI v1.6.x did the trick.  Please (!!!) add a note to the docs for OMPI 1.6.x to help out other users -- there's zero mention of this anywhere that I could find from scouring the archives and source code.
<br>
<p>Sadly, performance isn't what we'd expect.  OB1 is outperforming CM MXM (consistently).
<br>
<p>Are there any suggested configuration settings?  We tried all the obvious ones listed in the OMPI Wiki and mailing list archives, but few have had much of an effect.
<br>
<p>We seem to do better with the OB1 openib btl, than the lower level CM MXM.  Any suggestions?
<br>
<p>Here's numbers from the OSU MicroBenchmarks (for the MBW_MR test) running on 2x pairs, aka 4 separate hosts, each using Mellanox ConnectX, one card per host, single port, single switch):
<br>
<p>-- OB1
<br>
<span class="quotelev1">&gt; /opt/openmpi/1.6.0/bin/mpiexec -np 4 --mca pml ob1 --mca btl ^tcp --mca mpi_use_pinned 1 -hostfile all_hosts ./osu-micro-benchmarks/osu_mbw_mr
</span><br>
# OSU MPI Multiple Bandwidth / Message Rate Test v3.6
<br>
# [ pairs: 2 ] [ window size: 64 ]
<br>
# Size                  MB/s        Messages/s
<br>
1                       2.91        2909711.73
<br>
2                       5.97        2984274.11
<br>
4                      11.70        2924292.78
<br>
8                      23.00        2874502.93
<br>
16                     44.75        2796639.64
<br>
32                     89.49        2796639.64
<br>
64                    175.98        2749658.96
<br>
128                   292.41        2284459.86
<br>
256                   527.84        2061874.61
<br>
512                   961.65        1878221.77
<br>
1024                 1669.06        1629943.87
<br>
2048                 2220.43        1084193.45
<br>
4096                 2906.57         709611.68
<br>
8192                 3017.65         368365.70
<br>
16384                5225.97         318967.95
<br>
32768                5418.98         165374.23
<br>
65536                5998.07          91523.27
<br>
131072               6031.69          46018.16
<br>
262144               6063.38          23129.97
<br>
524288               5971.77          11390.24
<br>
1048576              5788.75           5520.59
<br>
2097152              5791.39           2761.55
<br>
4194304              5820.60           1387.74
<br>
<p>-- MXM
<br>
<span class="quotelev1">&gt; /opt/openmpi/1.6.0/bin/mpiexec -np 4 --mca pml cm --mca mtl mxm --mca btl ^tcp --mca mpi_use_pinned 1 -hostfile all_hosts ./osu-micro-benchmarks/osu_mbw_mr
</span><br>
# OSU MPI Multiple Bandwidth / Message Rate Test v3.6
<br>
# [ pairs: 2 ] [ window size: 64 ]
<br>
# Size                  MB/s        Messages/s
<br>
1                       2.07        2074863.43
<br>
2                       4.14        2067830.81
<br>
4                      10.57        2642471.39
<br>
8                      23.16        2895275.37
<br>
16                     38.73        2420627.22
<br>
32                     66.77        2086718.41
<br>
64                    147.87        2310414.05
<br>
128                   284.94        2226109.85
<br>
256                   537.27        2098709.64
<br>
512                  1041.91        2034989.43
<br>
1024                 1930.93        1885676.34
<br>
2048                 1998.68         975916.00
<br>
4096                 2880.72         703299.77
<br>
8192                 3608.45         440484.17
<br>
16384                4027.15         245797.51
<br>
32768                4464.85         136256.47
<br>
65536                4594.22          70102.23
<br>
131072               4655.62          35519.55
<br>
262144               4671.56          17820.58
<br>
524288               4604.16           8781.74
<br>
1048576              4635.51           4420.77
<br>
2097152              3575.17           1704.78
<br>
4194304              2828.19            674.29
<br>
<p>Thanks!
<br>
<p>-[dg]
<br>
<p>Derek Gerstmann, PhD Student
<br>
The University of Western Australia (UWA)
<br>
<p>w: <a href="http://local.ivec.uwa.edu.au/~derek">http://local.ivec.uwa.edu.au/~derek</a>
<br>
e: derek.gerstmann [at] icrar.org&lt;<a href="http://icrar.org">http://icrar.org</a>&gt;
<br>
On May 9, 2012, at 7:41 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; you need latest OMPI 1.6.x and latest MXM (<a href="ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar">ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 9, 2012 at 6:02 AM, Derek Gerstmann &lt;derek.gerstmann_at_[hidden]&lt;mailto:derek.gerstmann_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; What versions of OpenMPI and the Mellanox MXM libraries have been tested and verified to work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are currently trying to build OpenMPI v1.5.5 against the MXM 1.0.601 (included in the MLNX_OFED_LINUX-1.5.3-3.0.0 distribution) and are getting build errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, there's a single undefined type (mxm_wait_t) being used in the OpenMPI tree:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       openmpi-1.5.5/ompi/mca/mtl/mxm/mtl_mxm_send.c:44        mxm_wait_t wait;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no mxm_wait_t defined anywhere in the current MXM API (/opt/mellanox/mxm/include/mxm/api), which suggests a version mismatch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OpenMPI v1.6 branch has a note in the readme saying &quot;Minor Fixes for Mellanox MXM&quot; were added, but the same undefined mxm_wait_t is still being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What versions of OpenMPI and MXM are verified to work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -[dg]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Derek Gerstmann, PhD Student
</span><br>
<span class="quotelev1">&gt; The University of Western Australia (UWA)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; w: <a href="http://local.ivec.uwa.edu.au/~derek">http://local.ivec.uwa.edu.au/~derek</a>
</span><br>
<span class="quotelev1">&gt; e: derek.gerstmann [at] icrar.org&lt;<a href="http://icrar.org">http://icrar.org</a>&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>-[dg]
<br>
<p>Derek Gerstmann, PhD Student
<br>
The University of Western Australia (UWA)
<br>
<p>w: <a href="http://local.ivec.uwa.edu.au/~derek">http://local.ivec.uwa.edu.au/~derek</a>
<br>
e: derek.gerstmann [at] icrar.org&lt;<a href="http://icrar.org">http://icrar.org</a>&gt;
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19739/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19740.php">Gus Correa: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>Previous message:</strong> <a href="19738.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19256.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
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
