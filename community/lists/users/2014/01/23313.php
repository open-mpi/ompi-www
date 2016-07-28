<?
$subject_val = "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 08:24:54 2014" -->
<!-- isoreceived="20140102132454" -->
<!-- sent="Thu, 2 Jan 2014 21:24:53 +0800" -->
<!-- isosent="20140102132453" -->
<!-- name="Hongyi Zhao" -->
<!-- email="hongyi.zhao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred" -->
<!-- id="CAGP6PO+zkQho-kRn+cRD-50gBjTpWstN_ZM3DL16ddjmiU_BGg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52C53EE8.9070902_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred<br>
<strong>From:</strong> Hongyi Zhao (<em>hongyi.zhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 08:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23314.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23312.php">Siegmar Gross: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>In reply to:</strong> <a href="23309.php">&#197;ke Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sandgren,
<br>
<p>Thanks a lot,
<br>
The siesta compiled by me is the lastest release, i.e., siesta-3.2-pl3.
<br>
All of the stuff used for my compulations are attached here, thanks again.
<br>
<p>Regards
<br>
<p><p><p>2014/1/2 &#197;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On 01/02/2014 11:08 AM, Hongyi Zhao wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compiled openmpi-1.6.5 with ifort-14.0.0, then I use the mpif90
</span><br>
<span class="quotelev2">&gt;&gt; wrapper of  openmpi to compile the siesta package - a DFT package,
</span><br>
<span class="quotelev2">&gt;&gt; obtain from here:<a href="http://departments.icmab.es/leem/siesta/">http://departments.icmab.es/leem/siesta/</a>  .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After I successfully compile the   siesta package, then I use it to do
</span><br>
<span class="quotelev2">&gt;&gt; some compuations like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 transiesta &lt; INPUT.fdf &gt; OUTPUT.fdf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this phase, I meet the followig error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ****************
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev2">&gt;&gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev2">&gt;&gt; Source
</span><br>
<span class="quotelev2">&gt;&gt; transiesta         00000000019A8A59  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt;  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; transiesta         00000000019A73D0  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt;  Unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cann't figure out the reason for this issue,  any hints will be
</span><br>
<span class="quotelev2">&gt;&gt; highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you give me the INPUT.fdf and i can try running it with our build
</span><br>
<span class="quotelev1">&gt; (which contains a bunch of bugfixes for siesta/transiesta)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<p><p><p><pre>
-- 
Hongyi Zhao &lt;hongyi.zhao_at_[hidden]&gt;
Xinjiang Technical Institute of Physics and Chemistry
Chinese Academy of Sciences
GnuPG DSA: 0xD108493

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23313/angr8-transiesta.tar.gz">angr8-transiesta.tar.gz</a>
</ul>
<!-- attachment="angr8-transiesta.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23314.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23312.php">Siegmar Gross: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>In reply to:</strong> <a href="23309.php">&#197;ke Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
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
