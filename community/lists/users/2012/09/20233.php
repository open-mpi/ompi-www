<?
$subject_val = "Re: [OMPI users] Newbie question?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 16 16:07:43 2012" -->
<!-- isoreceived="20120916200743" -->
<!-- sent="Sun, 16 Sep 2012 13:10:11 -0700" -->
<!-- isosent="20120916201011" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question?" -->
<!-- id="C85571FD-14C2-4F27-80DB-864B1EBAD126_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABftzegjJY_a9cJ3EB93r0v2GbDqM3VxSiOrBWDOvHMRm2a81A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question?<br>
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-16 16:10:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20234.php">toufik hadjazi: "[OMPI users] How to make a connection uninterruptible"</a>
<li><strong>Previous message:</strong> <a href="20232.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20232.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20220.php">Reuti: "Re: [OMPI users] Newbie question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; On a side note, do you have an RDMA supporting device ( Infiniband/RoCE/iWarp) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm just an engineer trying to get something to work on an AMD dual core notebook for the powers-that-be at a small engineering concern (all MEs) in Huntsville, AL - i.e., NASA work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
If on a unix box,
<br>
&nbsp;lspci | grep -i infiniband
<br>
&nbsp;should tell you if u have an infiniband device 
<br>
lspci | grep -i eth
<br>
Should list list of all eth devices. Google them to see if one is them is an iWarp or RoCE device.
<br>
<p><pre>
--
Sent from my iPhone 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20234.php">toufik hadjazi: "[OMPI users] How to make a connection uninterruptible"</a>
<li><strong>Previous message:</strong> <a href="20232.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20232.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20220.php">Reuti: "Re: [OMPI users] Newbie question?"</a>
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
