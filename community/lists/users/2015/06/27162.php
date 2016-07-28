<?
$subject_val = "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 04:54:14 2015" -->
<!-- isoreceived="20150619085414" -->
<!-- sent="Fri, 19 Jun 2015 11:54:10 +0300" -->
<!-- isosent="20150619085410" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd[2]: OMPI yalla vs impi" -->
<!-- id="1434704050.48886665_at_f84.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADGp0BT+CHc-n_f9a3Hw02sm-tw2Zyo1bH-2rYAWd3SOjQRgrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd[2]: OMPI yalla vs impi<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-19 04:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27163.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27161.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Maybe in reply to:</strong> <a href="27029.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Alina!
<br>
<p>I use &quot;OSU MPI Multiple Bandwidth / Message Rate Test v4.4.1&quot;. 
<br>
I downloaded it from the website: <a href="http://mvapich.cse.ohio-state.edu/benchmarks/">http://mvapich.cse.ohio-state.edu/benchmarks/</a>
<br>
I have attached &quot;osu_mbw_mr.c&quot; to this letter.
<br>
Best regards,
<br>
Timur
<br>
<p>&#208;&#167;&#208;&#181;&#209;&#130;&#208;&#178;&#208;&#181;&#209;&#128;&#208;&#179;, 18 &#208;&#184;&#209;&#142;&#208;&#189;&#209;&#143; 2015, 18:23 +03:00 &#208;&#190;&#209;&#130; Alina Sklarevich &lt;alinas_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;Hi Timur,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you please tell me which osu version you are using?
</span><br>
<span class="quotelev1">&gt;Unless it is from HPCX, please attach the source file of&#194;&#160;osu_mbw_mr.c you are using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you,
</span><br>
<span class="quotelev1">&gt;Alina.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, Jun 16, 2015 at 7:10 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;I'm sorry, I'm forget to attach results.
</span><br>
<span class="quotelev2">&gt;&gt;With ' --bind-to socket' i get the same results as '--bind-to-core' : 3813 MB/s.
</span><br>
<span class="quotelev2">&gt;&gt;I have attached ompi_yalla_socket.out and ompi_yalla_socket.err files to this letter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;Timur
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#208;&#146;&#209;&#130;&#208;&#190;&#209;&#128;&#208;&#189;&#208;&#184;&#208;&#186;, 16 &#208;&#184;&#209;&#142;&#208;&#189;&#209;&#143; 2015, 18:15 +03:00 &#208;&#190;&#209;&#130; Alina Sklarevich &lt; alinas_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hi Timur,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Can you please try running your&#194;&#160; ompi_yalla cmd with ' --bind-to socket' (instead of binding to core) and check if it affects the results?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We saw that it made a difference on the performance in our lab so that's why I asked you to try the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Alina.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Tue, Jun 16, 2015 at 5:53 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello, Alina!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;If I use&#194;&#160; --map-by node I will get only intranode communications on osu_mbw_mr. I use --map-by core instead.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I have 2 nodes, each node has 2 sockets with 8 cores per socket.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;When I run osu_mbw_mr on 2 nodes with 32 MPI procs (command see below), I&#194;&#160; expect to see the unidirectional bandwidth of 4xFDR&#194;&#160; link as a result&#194;&#160; of this test.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;With IntelMPI I get 6367 MB/s, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;With ompi_yalla I get about 3744 MB/s (problem: it is a half of impi result)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;With openmpi without mxm (ompi_clear) I get 6321 MB/s.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;How can I increase yalla results?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;IntelMPI cmd:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/opt/software/intel/impi/ 4.1.0.030/intel64/bin/mpiexec.hydra &#194;&#160; -machinefile machines.pYAvuK -n 32 -binding domain=core&#194;&#160; ../osu_impi/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_mbw_mr -v -r=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;ompi_yalla cmd:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/ompi-mellanox-fca-v1.8.5/bin/mpirun&#194;&#160; -report-bindings -display-map -mca coll_hcoll_enable 1 -x&#194;&#160; HCOLL_MAIN_IB=mlx4_0:1 -x&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; MXM_IB_PORTS=mlx4_0:1 -x&#194;&#160; MXM_SHM_KCOPY_MODE=off --mca pml yalla --map-by core --bind-to core&#194;&#160; --hostfile hostlist&#194;&#160; ../osu_ompi_hcoll/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_mbw_mr -v&#194;&#160; -r=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;ompi_clear cmd:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/ompi-clear-v1.8.5/bin/mpirun&#194;&#160; -report-bindings -display-map --hostfile hostlist --map-by core&#194;&#160; --bind-to core&#194;&#160; ../osu_ompi_clear/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_mbw_mr -v&#194;&#160; -r=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I have attached output files to this letter:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;ompi_clear.out, ompi_clear.err - contains ompi_clear results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;ompi_yalla.out, ompi_yalla.err - contains ompi_yalla results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;impi.out, impi.err - contains intel MPI results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Timur
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&#208;&#146;&#208;&#190;&#209;&#129;&#208;&#186;&#209;&#128;&#208;&#181;&#209;&#129;&#208;&#181;&#208;&#189;&#209;&#140;&#208;&#181;,  7 &#208;&#184;&#209;&#142;&#208;&#189;&#209;&#143; 2015, 16:11 +03:00 &#208;&#190;&#209;&#130; Alina Sklarevich &lt; alinas_at_[hidden] &gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Hi Timur,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;After running the&#194;&#160;osu_mbw_mr benchmark in our lab, we obsereved that the binding policy made a difference on the performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Can you please rerun your ompi tests with the following added to your command line? (one of them in each run)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;1.&#194;&#160;--map-by node --bind-to socket
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;2.&#194;&#160;--map-by node --bind-to core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Please attach your results.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Alina.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;On Thu, Jun 4, 2015 at 6:53 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Hello, Alina.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;1. Here is my&#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;ompi_yalla&#194;&#160;command line:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;$HPCX_MPI_DIR/bin/mpirun -mca coll_hcoll_enable 1 -x HCOLL_MAIN_IB=mlx4_0:1 -x MXM_IB_PORTS=mlx4_0:1 -x MXM_SHM_KCOPY_MODE=off --mca pml yalla --hostfile hostlist $@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;echo $HPCX_MPI_DIR 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/ ompi-mellanox-fca-v1.8.5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;This mpi was configured with: --with-mxm=/path/to/mxm --with-hcoll=/path/to/hcoll --with-platform=contrib/platform/mellanox/optimized --prefix=/path/to/ ompi-mellanox-fca-v1.8.5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;ompi_clear command line:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;HPCX_MPI_DIR/bin/mpirun &#194;&#160;--hostfile hostlist $@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;echo $HPCX_MPI_DIR 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/ ompi-clear-v1.8.5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;This mpi was configured with: --with-platform=contrib/platform/mellanox/optimized --prefix=/path/to /ompi-clear-v1.8.5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;2. When i run osu_mbr_mr with key &quot;-x MXM_TLS=self,shm,rc&quot; . It fails with segmentation fault : 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;stdout log is in attached file osu_mbr_mr_n-2_ppn-16.out; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;stderr log is in attached file osu_mbr_mr_n-2_ppn-16.err;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;cmd line:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;$HPCX_MPI_DIR/bin/mpirun -mca coll_hcoll_enable 1 -x HCOLL_MAIN_IB=mlx4_0:1 -x MXM_IB_PORTS=mlx4_0:1 -x MXM_SHM_KCOPY_MODE=off --mca pml yalla -x MXM_TLS=self,shm,rc --hostfile hostlist osu_mbw_mr -v -r=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;osu_mbw_mr.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;I have changed WINDOW_SIZES in osu_mbw_mr.c:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;#define WINDOW_SIZES {8, 16, 32, 64,  128, 256, 512, 1024 }&#194;&#160; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;3. I add results of running osu_mbw_mr with yalla and without hcoll on 32 and 64 nodes (512 and 1024 mpi procs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;) to  mvs10p_mpi.xls : list osu_mbr_mr.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;The results are 20 percents smaller than old results (with hcoll).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&#208;&#161;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;,  3 &#208;&#184;&#209;&#142;&#208;&#189;&#209;&#143; 2015, 10:29 +03:00 &#208;&#190;&#209;&#130; Alina Sklarevich &lt; alinas_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hello Timur,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;I will review your results and try to reproduce them in our lab.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;You are using an old OFED -&#194;&#160;OFED-1.5.4.1 and we suspect that this may be causing the performance issues you are seeing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;In the meantime, could you please:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;1. send us the exact command lines that you were running when you got these results?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;2. add the following to the command line that you are running with 'pml yalla' and attach the results?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&quot;-x MXM_TLS=self,shm,rc&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;3. run your command line with yalla and without hcoll?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Alina.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Tue, Jun 2, 2015 at 4:56 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hi, Mike!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I have impi v 4.1.2 (- impi)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I build ompi 1.8.5 with MXM and hcoll (- ompi_yalla)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I build ompi 1.8.5 without MXM and hcoll (- ompi_clear)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I start osu p2p: osu_mbr_mr test with this MPIs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;You can find the result of benchmark in attached file(mvs10p_mpi.xls: list osu_mbr_mr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On 64 nodes (and 1024 mpi processes) ompi_yalla get 2 time worse perf than ompi_clear.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Is mxm with yalla  reduces performance in p2p  compared with ompi_clear(and impi)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Am  I&#194;&#160; doing something wrong?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;P.S. My colleague Alexander Semenov is in CC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Timur
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#208;&#167;&#208;&#181;&#209;&#130;&#208;&#178;&#208;&#181;&#209;&#128;&#208;&#179;, 28 &#208;&#188;&#208;&#176;&#209;&#143; 2015, 20:02 +03:00 &#208;&#190;&#209;&#130; Mike Dubman &lt; miked_at_[hidden] &gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;it is not apples-to-apples comparison.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;yalla/mxm is point-to-point library, it is not collective library.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;collective algorithm happens on top of yalla.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Intel collective algorithm for a2a is better than OMPI built-in collective algorithm.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;To see benefit of yalla - you should run p2p benchmarks (osu_lat/bw/bibw/mr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Thu, May 28, 2015 at 7:35 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I compare ompi-1.8.5 (hpcx-1.3.3-icc) with impi v 4.1.4.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I build ompi with MXM but without HCOLL and without&#194;&#160; knem (I work on it). Configure options are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&#194;&#160;./configure&#194;&#160; --prefix=my_prefix&#194;&#160;&#194;&#160; --with-mxm=path/to/hpcx/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/mxm&#194;&#160;&#194;&#160; --with-platform=contrib/platform/mellanox/optimized
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;As a result of the IMB-MPI1 Alltoall test, I have got disappointing&#194;&#160; results: for the most message sizes on 64 nodes and 16 processes per&#194;&#160; node impi is much (~40%) better.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;You can look at the results in the file &quot;mvs10p_mpi.xlsx&quot;, I attach it. System configuration is also there.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;What do you think about? Is there any way to improve ompi yalla performance results?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I attach the output of&#194;&#160; &quot;IMB-MPI1 Alltoall&quot; for yalla and impi.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;P.S. My colleague Alexander Semenov is in CC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Timur
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Kind Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;M.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Link to this post:  <a href="http://www.open-mpi.org/community/lists/users/2015/06/27029.php">http://www.open-mpi.org/community/lists/users/2015/06/27029.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27162/osu_mbw_mr.c">osu_mbw_mr.c</a>
</ul>
<!-- attachment="osu_mbw_mr.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27163.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27161.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Maybe in reply to:</strong> <a href="27029.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
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
