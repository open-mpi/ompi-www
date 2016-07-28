<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 14:39:52 2009" -->
<!-- isoreceived="20090520183952" -->
<!-- sent="Wed, 20 May 2009 20:39:44 +0200" -->
<!-- isosent="20090520183944" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="200905202039.49431.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="d21ea44c0905201127s7786d194i2163f7ab5987fbaf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 14:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 20 May 2009, Roman Martonak wrote:
<br>
<span class="quotelev1">&gt; I tried to run with the first dynamic rules file that Pavel proposed
</span><br>
<span class="quotelev1">&gt; and it works, the time per one MD step on 48 cores decreased from 2.8
</span><br>
<span class="quotelev1">&gt; s to 1.8 s as expected. It was clearly the basic linear algorithm that
</span><br>
<span class="quotelev1">&gt; was causing the problem. I will check the performance of bruck and
</span><br>
<span class="quotelev1">&gt; pairwise on my HW. It would be nice if it could be tuned further.
</span><br>
<p>I'm guessing you'll see even better performance if you change 8192 to 131072 
<br>
in that config file. That moves up the cross over point between &quot;bruck&quot; 
<br>
and &quot;pair wise&quot;.
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roman
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9412/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
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
