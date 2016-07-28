<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  1 08:56:15 2010" -->
<!-- isoreceived="20100301135615" -->
<!-- sent="Mon, 1 Mar 2010 14:55:50 +0100" -->
<!-- isosent="20100301135550" -->
<!-- name="TRINH Minh Hieu" -->
<!-- email="mhtrinh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)" -->
<!-- id="698a35c61003010555w4a4c7ea2xb0e837904334914e_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="698a35c61002281022x5758df43v9dfc5077ca3b286a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)<br>
<strong>From:</strong> TRINH Minh Hieu (<em>mhtrinh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-01 08:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12189.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12187.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12182.php">TRINH Minh Hieu: "[OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The problem is not there.
<br>
I put a &quot;free&quot; and check for return value of malloc but still have the
<br>
segfault. (source code updated in attach)
<br>
<p>I discovered that array size to send is limited to 64kB. If I send
<br>
8192 x double : it's ok. But more will cause segfault. I also changed
<br>
in order to send float than double: In that case, I can send an array
<br>
of 16384 float (64kB) but no more.
<br>
Is there a parameter when building OpenMPI about packet size ??
<br>
<p>Regards,
<br>
<p><p><span class="quotelev1">&gt; From: Timur Magomedov (timur.magomedov_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2010-03-01 05:55:44
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt; It looks like you allocate memory in every loop iteration on process #0
</span><br>
<span class="quotelev1">&gt; and doesn't free it so malloc fails on some iteration.
</span><br>
<p><p><pre>
-- 
============================================
   M. TRINH Minh Hieu
   CEA, IBEB, SBTN/LIRM,
   F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
============================================

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12188/hetero.c">hetero.c</a>
</ul>
<!-- attachment="hetero.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12189.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12187.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12182.php">TRINH Minh Hieu: "[OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
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
