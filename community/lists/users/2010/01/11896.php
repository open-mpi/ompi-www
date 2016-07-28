<?
$subject_val = "Re: [OMPI users] How to check OMPI is using IB or not?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 05:14:13 2010" -->
<!-- isoreceived="20100127101413" -->
<!-- sent="Wed, 27 Jan 2010 15:44:08 +0530" -->
<!-- isosent="20100127101408" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check OMPI is using IB or not?" -->
<!-- id="cb60cbc41001270214r11a0df62ha144824409946c95_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45441544.886661264576251036.JavaMail.root_at_mail.vpac.org" -->
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
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 05:14:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11897.php">Eugene Loh: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Previous message:</strong> <a href="11895.php">Brett Pemberton: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>In reply to:</strong> <a href="11895.php">Brett Pemberton: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11897.php">Eugene Loh: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brett for the useful information.
<br>
<p>On Wed, Jan 27, 2010 at 12:40 PM, Brett Pemberton &lt;brett_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Sangamesh B&quot; &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If an infiniband network is configured successfully, how to confirm
</span><br>
<span class="quotelev2">&gt; &gt; that Open MPI is using infiniband, not other ethernet network
</span><br>
<span class="quotelev2">&gt; &gt; available?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At a low level simplistic way, how about:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_tango003 ~]# lsof | grep /dev/infiniband
</span><br>
<span class="quotelev1">&gt; namd2      7271      weimin  mem       CHR            231,192
</span><br>
<span class="quotelev1">&gt;            8306 /dev/infiniband/uverbs0
</span><br>
<span class="quotelev1">&gt; namd2      7271      weimin   13u      CHR            231,192
</span><br>
<span class="quotelev1">&gt;            8306 /dev/infiniband/uverbs0
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here i can see that the namd that I compiled with openmpi is using IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     / Brett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brett Pemberton - VPAC HPC Team Leader
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11897.php">Eugene Loh: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>Previous message:</strong> <a href="11895.php">Brett Pemberton: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>In reply to:</strong> <a href="11895.php">Brett Pemberton: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11897.php">Eugene Loh: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
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
