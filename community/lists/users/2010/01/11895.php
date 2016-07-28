<?
$subject_val = "Re: [OMPI users] How to check OMPI is using IB or not?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 02:11:11 2010" -->
<!-- isoreceived="20100127071111" -->
<!-- sent="Wed, 27 Jan 2010 18:10:51 +1100 (EST)" -->
<!-- isosent="20100127071051" -->
<!-- name="Brett Pemberton" -->
<!-- email="brett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check OMPI is using IB or not?" -->
<!-- id="45441544.886661264576251036.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="cb60cbc41001262208s40c52b70hb3c55cca9b40cc9d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to check OMPI is using IB or not?<br>
<strong>From:</strong> Brett Pemberton (<em>brett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 02:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11896.php">Sangamesh B: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Previous message:</strong> <a href="11894.php">Sangamesh B: "[OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>In reply to:</strong> <a href="11894.php">Sangamesh B: "[OMPI users] How to check OMPI is using IB or not?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11896.php">Sangamesh B: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Reply:</strong> <a href="11896.php">Sangamesh B: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Reply:</strong> <a href="11897.php">Eugene Loh: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Sangamesh B&quot; &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If an infiniband network is configured successfully, how to confirm
</span><br>
<span class="quotelev1">&gt; that Open MPI is using infiniband, not other ethernet network
</span><br>
<span class="quotelev1">&gt; available?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>At a low level simplistic way, how about:
<br>
<p>[root_at_tango003 ~]# lsof | grep /dev/infiniband
<br>
namd2      7271      weimin  mem       CHR            231,192                          8306 /dev/infiniband/uverbs0
<br>
namd2      7271      weimin   13u      CHR            231,192                          8306 /dev/infiniband/uverbs0
<br>
...
<br>
<p>Here i can see that the namd that I compiled with openmpi is using IB.
<br>
<p>cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ Brett
<br>
<p><pre>
-- 
Brett Pemberton - VPAC HPC Team Leader
<a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11896.php">Sangamesh B: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Previous message:</strong> <a href="11894.php">Sangamesh B: "[OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>In reply to:</strong> <a href="11894.php">Sangamesh B: "[OMPI users] How to check OMPI is using IB or not?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11896.php">Sangamesh B: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Reply:</strong> <a href="11896.php">Sangamesh B: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Reply:</strong> <a href="11897.php">Eugene Loh: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
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
