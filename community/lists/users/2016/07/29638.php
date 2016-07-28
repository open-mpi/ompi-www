<?
$subject_val = "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 09:52:42 2016" -->
<!-- isoreceived="20160711135242" -->
<!-- sent="Mon, 11 Jul 2016 15:52:39 +0200" -->
<!-- isosent="20160711135239" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.10.2 and PGI 15.9" -->
<!-- id="5783A4A7.8030902_at_hpc2n.umu.se" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CABOsP2NT8u75yykCCGn3=3RH1PGzr35kUD4v_cb5UoC6y9RjSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.10.2 and PGI 15.9<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-11 09:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29639.php">Josh Hursey: "Re: [OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?"</a>
<li><strong>Previous message:</strong> <a href="29637.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29635.php">Michael Di Domenico: "[OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like you are compiling with slurm support.
<br>
<p>If so, you need to remove the &quot;-pthread&quot; from libslurm.la and libpmi.la
<br>
<p>On 07/11/2016 02:54 PM, Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; I'm trying to get openmpi compiled using the PGI compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the configure goes through and the code starts to compile, but then
</span><br>
<span class="quotelev1">&gt; gets hung up with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; entering: openmpi-1.10.2/opal/mca/common/pmi
</span><br>
<span class="quotelev1">&gt; CC common_pmi.lo
</span><br>
<span class="quotelev1">&gt; CCLD libmca_common_pmi.la
</span><br>
<span class="quotelev1">&gt; pgcc-Error-Unknown switch: - pthread
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29635.php">http://www.open-mpi.org/community/lists/users/2016/07/29635.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29639.php">Josh Hursey: "Re: [OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?"</a>
<li><strong>Previous message:</strong> <a href="29637.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29635.php">Michael Di Domenico: "[OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
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
