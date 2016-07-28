<?
$subject_val = "Re: [OMPI users] OMPI yalla vs impi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 04:21:13 2015" -->
<!-- isoreceived="20150603082113" -->
<!-- sent="Wed, 03 Jun 2015 11:21:09 +0300" -->
<!-- isosent="20150603082109" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI yalla vs impi" -->
<!-- id="1433319669.64435110_at_f394.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADGp0BTAdijUg-j-8G0K+sMTWGwgHR4BwByxSMoU3pPLreyrqw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI yalla vs impi<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-03 04:21:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27039.php">René Oertel: "[OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27037.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. Here is my&#194;&#160;
<br>
ompi_yalla&#194;&#160;command line:
<br>
$HPCX_MPI_DIR/bin/mpirun -mca coll_hcoll_enable 1 -x HCOLL_MAIN_IB=mlx4_0:1 -x MXM_IB_PORTS=mlx4_0:1 -x MXM_SHM_KCOPY_MODE=off --mca pml yalla --hostfile hostlist $@
<br>
echo $HPCX_MPI_DIR 
<br>
/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/ ompi-mellanox-fca-v1.8.5
<br>
This mpi was configured with: --with-mxm=/path/to/mxm --with-hcoll=/path/to/hcoll --with-platform=contrib/platform/mellanox/optimized --prefix=/path/to/ ompi-mellanox-fca-v1.8.5
<br>
ompi_clear command line:
<br>
HPCX_MPI_DIR/bin/mpirun &#194;&#160;--hostfile hostlist $@
<br>
echo $HPCX_MPI_DIR 
<br>
/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/ ompi-clear-v1.8.5
<br>
This mpi was configured with: --with-platform=contrib/platform/mellanox/optimized --prefix=/path/to /ompi-clear-v1.8.5
<br>
2. I will run ompi_yalla with&#194;&#160;&quot;-x MXM_TLS=self,shm,rc&quot; and I will send you results in a few days.
<br>
3. I have alredy run ompi_yalla without hcoll &#194;&#160;in IMB_alltoall test. hcoll&#194;&#160;provides a performance boost about 10%. You can find this results in&#194;&#160;mvs10p_mpi.xls: list IMB_MPI1 Alltoall.
<br>
<p><p>&#208;&#161;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;,  3 &#208;&#184;&#209;&#142;&#208;&#189;&#209;&#143; 2015, 10:29 +03:00 &#208;&#190;&#209;&#130; Alina Sklarevich &lt;alinas_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;Hello Timur,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I will review your results and try to reproduce them in our lab.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You are using an old OFED -&#194;&#160;OFED-1.5.4.1 and we suspect that this may be causing the performance issues you are seeing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In the meantime, could you please:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. send us the exact command lines that you were running when you got these results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. add the following to the command line that you are running with 'pml yalla' and attach the results?
</span><br>
<span class="quotelev1">&gt;&quot;-x MXM_TLS=self,shm,rc&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3. run your command line with yalla and without hcoll?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;Alina.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, Jun 2, 2015 at 4:56 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;Hi, Mike!
</span><br>
<span class="quotelev2">&gt;&gt;I have impi v 4.1.2 (- impi)
</span><br>
<span class="quotelev2">&gt;&gt;I build ompi 1.8.5 with MXM and hcoll (- ompi_yalla)
</span><br>
<span class="quotelev2">&gt;&gt;I build ompi 1.8.5 without MXM and hcoll (- ompi_clear)
</span><br>
<span class="quotelev2">&gt;&gt;I start osu p2p: osu_mbr_mr test with this MPIs.
</span><br>
<span class="quotelev2">&gt;&gt;You can find the result of benchmark in attached file(mvs10p_mpi.xls: list osu_mbr_mr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On 64 nodes (and 1024 mpi processes) ompi_yalla get 2 time worse perf than ompi_clear.
</span><br>
<span class="quotelev2">&gt;&gt;Is mxm with yalla  reduces performance in p2p  compared with ompi_clear(and impi)?
</span><br>
<span class="quotelev2">&gt;&gt;Am  I&#194;&#160; doing something wrong?
</span><br>
<span class="quotelev2">&gt;&gt;P.S. My colleague Alexander Semenov is in CC
</span><br>
<span class="quotelev2">&gt;&gt;Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;Timur
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#208;&#167;&#208;&#181;&#209;&#130;&#208;&#178;&#208;&#181;&#209;&#128;&#208;&#179;, 28 &#208;&#188;&#208;&#176;&#209;&#143; 2015, 20:02 +03:00 &#208;&#190;&#209;&#130; Mike Dubman &lt; miked_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;it is not apples-to-apples comparison.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;yalla/mxm is point-to-point library, it is not collective library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;collective algorithm happens on top of yalla.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Intel collective algorithm for a2a is better than OMPI built-in collective algorithm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;To see benefit of yalla - you should run p2p benchmarks (osu_lat/bw/bibw/mr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Thu, May 28, 2015 at 7:35 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I compare ompi-1.8.5 (hpcx-1.3.3-icc) with impi v 4.1.4.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I build ompi with MXM but without HCOLL and without&#194;&#160; knem (I work on it). Configure options are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&#194;&#160;./configure&#194;&#160; --prefix=my_prefix&#194;&#160;&#194;&#160; --with-mxm=path/to/hpcx/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/mxm&#194;&#160;&#194;&#160; --with-platform=contrib/platform/mellanox/optimized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;As a result of the IMB-MPI1 Alltoall test, I have got disappointing&#194;&#160; results: for the most message sizes on 64 nodes and 16 processes per&#194;&#160; node impi is much (~40%) better.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;You can look at the results in the file &quot;mvs10p_mpi.xlsx&quot;, I attach it. System configuration is also there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;What do you think about? Is there any way to improve ompi yalla performance results?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I attach the output of&#194;&#160; &quot;IMB-MPI1 Alltoall&quot; for yalla and impi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;P.S. My colleague Alexander Semenov is in CC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Timur
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Kind Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;M.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;Link to this post:  <a href="http://www.open-mpi.org/community/lists/users/2015/06/27029.php">http://www.open-mpi.org/community/lists/users/2015/06/27029.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/vnd.openxmlformats-officedocument.spreadsheetml.sheet attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27038/mvs10p_mpi.xlsx">mvs10p_mpi.xlsx</a>
</ul>
<!-- attachment="mvs10p_mpi.xlsx" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27039.php">René Oertel: "[OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27037.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
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
