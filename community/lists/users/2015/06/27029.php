<?
$subject_val = "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 09:56:34 2015" -->
<!-- isoreceived="20150602135634" -->
<!-- sent="Tue, 02 Jun 2015 16:56:30 +0300" -->
<!-- isosent="20150602135630" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd[2]: OMPI yalla vs impi" -->
<!-- id="1433253390.299419508_at_f228.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAO1KyZ5MUMFV1x+ZcaQfvMszeysn1xf4UiBK5hXctrgrvA93w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-06-02 09:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27030.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27028.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27040.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Maybe reply:</strong> <a href="27040.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Maybe reply:</strong> <a href="27138.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Maybe reply:</strong> <a href="27140.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Maybe reply:</strong> <a href="27162.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Mike!
<br>
I have impi v 4.1.2 (- impi)
<br>
I build ompi 1.8.5 with MXM and hcoll (- ompi_yalla)
<br>
I build ompi 1.8.5 without MXM and hcoll (- ompi_clear)
<br>
I start osu p2p: osu_mbr_mr test with this MPIs.
<br>
You can find the result of benchmark in attached file(mvs10p_mpi.xls: list osu_mbr_mr)
<br>
<p>On 64 nodes (and 1024 mpi processes) ompi_yalla get 2 time worse perf than ompi_clear.
<br>
Is mxm with yalla  reduces performance in p2p  compared with ompi_clear(and impi)?
<br>
Am  I&#194;&#160; doing something wrong?
<br>
P.S. My colleague Alexander Semenov is in CC
<br>
Best regards,
<br>
Timur
<br>
<p>&#208;&#167;&#208;&#181;&#209;&#130;&#208;&#178;&#208;&#181;&#209;&#128;&#208;&#179;, 28 &#208;&#188;&#208;&#176;&#209;&#143; 2015, 20:02 +03:00 &#208;&#190;&#209;&#130; Mike Dubman &lt;miked_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;it is not apples-to-apples comparison.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;yalla/mxm is point-to-point library, it is not collective library.
</span><br>
<span class="quotelev1">&gt;collective algorithm happens on top of yalla.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Intel collective algorithm for a2a is better than OMPI built-in collective algorithm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To see benefit of yalla - you should run p2p benchmarks (osu_lat/bw/bibw/mr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Thu, May 28, 2015 at 7:35 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;I compare ompi-1.8.5 (hpcx-1.3.3-icc) with impi v 4.1.4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I build ompi with MXM but without HCOLL and without&#194;&#160; knem (I work on it). Configure options are:
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160;./configure&#194;&#160; --prefix=my_prefix&#194;&#160;&#194;&#160; --with-mxm=path/to/hpcx/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/mxm&#194;&#160;&#194;&#160; --with-platform=contrib/platform/mellanox/optimized
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;As a result of the IMB-MPI1 Alltoall test, I have got disappointing&#194;&#160; results: for the most message sizes on 64 nodes and 16 processes per&#194;&#160; node impi is much (~40%) better.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;You can look at the results in the file &quot;mvs10p_mpi.xlsx&quot;, I attach it. System configuration is also there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;What do you think about? Is there any way to improve ompi yalla performance results?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I attach the output of&#194;&#160; &quot;IMB-MPI1 Alltoall&quot; for yalla and impi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;P.S. My colleague Alexander Semenov is in CC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;Timur
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Kind Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;M.
</span><br>
<p>
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/vnd.openxmlformats-officedocument.spreadsheetml.sheet attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27029/mvs10p_mpi.xlsx">mvs10p_mpi.xlsx</a>
</ul>
<!-- attachment="mvs10p_mpi.xlsx" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27030.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27028.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27040.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Maybe reply:</strong> <a href="27040.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Maybe reply:</strong> <a href="27138.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Maybe reply:</strong> <a href="27140.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Maybe reply:</strong> <a href="27162.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
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
