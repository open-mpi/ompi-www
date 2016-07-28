<?
$subject_val = "Re: [OMPI users] ompi mca mxm version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 11 14:23:18 2012" -->
<!-- isoreceived="20120511182318" -->
<!-- sent="Fri, 11 May 2012 21:22:52 +0300" -->
<!-- isosent="20120511182252" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi mca mxm version" -->
<!-- id="CAL3GGtrdV5oD=zqB+92rdx6BGBUZYZxP4rdRMJ_SJ93c4CHzfg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="260A43B5-7EFE-4E6A-B348-CC51FC935804_at_uwa.edu.au" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-11 14:22:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19257.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Previous message:</strong> <a href="19255.php">Dmitry N. Mikushin: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>In reply to:</strong> <a href="19247.php">Derek Gerstmann: "Re: [OMPI users] ompi mca mxm version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19739.php">SLIM H.A.: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19739.php">SLIM H.A.: "Re: [OMPI users] ompi mca mxm version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ob1/openib is RC based which have scalability issues, mxm 1.1 is ud based
<br>
and kicks in at scale.
<br>
We observe mxm outperforms ob1 on 8+ nodes.
<br>
<p>We will update docs as you mentioned, thanks
<br>
<p>Regards
<br>
<p><p><p><p>On Thu, May 10, 2012 at 4:30 PM, Derek Gerstmann &lt;derek.gerstmann_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On May 9, 2012, at 7:41 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; you need latest OMPI 1.6.x and latest MXM (
</span><br>
<span class="quotelev1">&gt; <a href="ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar">ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excellent!  Thanks for the quick response!  Using the MXM v1.1.1067
</span><br>
<span class="quotelev1">&gt; against OMPI v1.6.x did the trick.  Please (!!!) add a note to the docs for
</span><br>
<span class="quotelev1">&gt; OMPI 1.6.x to help out other users -- there's zero mention of this anywhere
</span><br>
<span class="quotelev1">&gt; that I could find from scouring the archives and source code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sadly, performance isn't what we'd expect.  OB1 is outperforming CM MXM
</span><br>
<span class="quotelev1">&gt; (consistently).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any suggested configuration settings?  We tried all the obvious
</span><br>
<span class="quotelev1">&gt; ones listed in the OMPI Wiki and mailing list archives, but few have had
</span><br>
<span class="quotelev1">&gt; much of an effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We seem to do better with the OB1 openib btl, than the lower level CM MXM.
</span><br>
<span class="quotelev1">&gt;  Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's numbers from the OSU MicroBenchmarks (for the MBW_MR test) running
</span><br>
<span class="quotelev1">&gt; on 2x pairs, aka 4 separate hosts, each using Mellanox ConnectX, one card
</span><br>
<span class="quotelev1">&gt; per host, single port, single switch):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- OB1
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.6.0/bin/mpiexec -np 4 --mca pml ob1 --mca btl ^tcp --mca
</span><br>
<span class="quotelev1">&gt; mpi_use_pinned 1 -hostfile all_hosts ./osu-micro-benchmarks/osu_mbw_mr
</span><br>
<span class="quotelev1">&gt; # OSU MPI Multiple Bandwidth / Message Rate Test v3.6
</span><br>
<span class="quotelev1">&gt; # [ pairs: 2 ] [ window size: 64 ]
</span><br>
<span class="quotelev1">&gt; # Size                  MB/s        Messages/s
</span><br>
<span class="quotelev1">&gt; 1                       2.91        2909711.73
</span><br>
<span class="quotelev1">&gt; 2                       5.97        2984274.11
</span><br>
<span class="quotelev1">&gt; 4                      11.70        2924292.78
</span><br>
<span class="quotelev1">&gt; 8                      23.00        2874502.93
</span><br>
<span class="quotelev1">&gt; 16                     44.75        2796639.64
</span><br>
<span class="quotelev1">&gt; 32                     89.49        2796639.64
</span><br>
<span class="quotelev1">&gt; 64                    175.98        2749658.96
</span><br>
<span class="quotelev1">&gt; 128                   292.41        2284459.86
</span><br>
<span class="quotelev1">&gt; 256                   527.84        2061874.61
</span><br>
<span class="quotelev1">&gt; 512                   961.65        1878221.77
</span><br>
<span class="quotelev1">&gt; 1024                 1669.06        1629943.87
</span><br>
<span class="quotelev1">&gt; 2048                 2220.43        1084193.45
</span><br>
<span class="quotelev1">&gt; 4096                 2906.57         709611.68
</span><br>
<span class="quotelev1">&gt; 8192                 3017.65         368365.70
</span><br>
<span class="quotelev1">&gt; 16384                5225.97         318967.95
</span><br>
<span class="quotelev1">&gt; 32768                5418.98         165374.23
</span><br>
<span class="quotelev1">&gt; 65536                5998.07          91523.27
</span><br>
<span class="quotelev1">&gt; 131072               6031.69          46018.16
</span><br>
<span class="quotelev1">&gt; 262144               6063.38          23129.97
</span><br>
<span class="quotelev1">&gt; 524288               5971.77          11390.24
</span><br>
<span class="quotelev1">&gt; 1048576              5788.75           5520.59
</span><br>
<span class="quotelev1">&gt; 2097152              5791.39           2761.55
</span><br>
<span class="quotelev1">&gt; 4194304              5820.60           1387.74
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- MXM
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/1.6.0/bin/mpiexec -np 4 --mca pml cm --mca mtl mxm --mca
</span><br>
<span class="quotelev1">&gt; btl ^tcp --mca mpi_use_pinned 1 -hostfile all_hosts
</span><br>
<span class="quotelev1">&gt; ./osu-micro-benchmarks/osu_mbw_mr
</span><br>
<span class="quotelev1">&gt; # OSU MPI Multiple Bandwidth / Message Rate Test v3.6
</span><br>
<span class="quotelev1">&gt; # [ pairs: 2 ] [ window size: 64 ]
</span><br>
<span class="quotelev1">&gt; # Size                  MB/s        Messages/s
</span><br>
<span class="quotelev1">&gt; 1                       2.07        2074863.43
</span><br>
<span class="quotelev1">&gt; 2                       4.14        2067830.81
</span><br>
<span class="quotelev1">&gt; 4                      10.57        2642471.39
</span><br>
<span class="quotelev1">&gt; 8                      23.16        2895275.37
</span><br>
<span class="quotelev1">&gt; 16                     38.73        2420627.22
</span><br>
<span class="quotelev1">&gt; 32                     66.77        2086718.41
</span><br>
<span class="quotelev1">&gt; 64                    147.87        2310414.05
</span><br>
<span class="quotelev1">&gt; 128                   284.94        2226109.85
</span><br>
<span class="quotelev1">&gt; 256                   537.27        2098709.64
</span><br>
<span class="quotelev1">&gt; 512                  1041.91        2034989.43
</span><br>
<span class="quotelev1">&gt; 1024                 1930.93        1885676.34
</span><br>
<span class="quotelev1">&gt; 2048                 1998.68         975916.00
</span><br>
<span class="quotelev1">&gt; 4096                 2880.72         703299.77
</span><br>
<span class="quotelev1">&gt; 8192                 3608.45         440484.17
</span><br>
<span class="quotelev1">&gt; 16384                4027.15         245797.51
</span><br>
<span class="quotelev1">&gt; 32768                4464.85         136256.47
</span><br>
<span class="quotelev1">&gt; 65536                4594.22          70102.23
</span><br>
<span class="quotelev1">&gt; 131072               4655.62          35519.55
</span><br>
<span class="quotelev1">&gt; 262144               4671.56          17820.58
</span><br>
<span class="quotelev1">&gt; 524288               4604.16           8781.74
</span><br>
<span class="quotelev1">&gt; 1048576              4635.51           4420.77
</span><br>
<span class="quotelev1">&gt; 2097152              3575.17           1704.78
</span><br>
<span class="quotelev1">&gt; 4194304              2828.19            674.29
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
<span class="quotelev1">&gt; e: derek.gerstmann [at] icrar.org
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 9, 2012, at 7:41 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; you need latest OMPI 1.6.x and latest MXM (
</span><br>
<span class="quotelev1">&gt; <a href="ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar">ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar</a>)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, May 9, 2012 at 6:02 AM, Derek Gerstmann &lt;
</span><br>
<span class="quotelev1">&gt; derek.gerstmann_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; What versions of OpenMPI and the Mellanox MXM libraries have been tested
</span><br>
<span class="quotelev1">&gt; and verified to work?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are currently trying to build OpenMPI v1.5.5 against the MXM 1.0.601
</span><br>
<span class="quotelev1">&gt; (included in the MLNX_OFED_LINUX-1.5.3-3.0.0 distribution) and are getting
</span><br>
<span class="quotelev1">&gt; build errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Specifically, there's a single undefined type (mxm_wait_t) being used in
</span><br>
<span class="quotelev1">&gt; the OpenMPI tree:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       openmpi-1.5.5/ompi/mca/mtl/mxm/mtl_mxm_send.c:44        mxm_wait_t
</span><br>
<span class="quotelev1">&gt; wait;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is no mxm_wait_t defined anywhere in the current MXM API
</span><br>
<span class="quotelev1">&gt; (/opt/mellanox/mxm/include/mxm/api), which suggests a version mismatch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The OpenMPI v1.6 branch has a note in the readme saying &quot;Minor Fixes for
</span><br>
<span class="quotelev1">&gt; Mellanox MXM&quot; were added, but the same undefined mxm_wait_t is still being
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What versions of OpenMPI and MXM are verified to work?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -[dg]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Derek Gerstmann, PhD Student
</span><br>
<span class="quotelev2">&gt; &gt; The University of Western Australia (UWA)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; w: <a href="http://local.ivec.uwa.edu.au/~derek">http://local.ivec.uwa.edu.au/~derek</a>
</span><br>
<span class="quotelev2">&gt; &gt; e: derek.gerstmann [at] icrar.org
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; e: derek.gerstmann [at] icrar.org
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19257.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Previous message:</strong> <a href="19255.php">Dmitry N. Mikushin: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>In reply to:</strong> <a href="19247.php">Derek Gerstmann: "Re: [OMPI users] ompi mca mxm version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19739.php">SLIM H.A.: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19739.php">SLIM H.A.: "Re: [OMPI users] ompi mca mxm version"</a>
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
