<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 13:39:00 2010" -->
<!-- isoreceived="20100824173900" -->
<!-- sent="Tue, 24 Aug 2010 12:38:35 -0500" -->
<!-- isosent="20100824173835" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTinGn2b+xeN-fbv8RzY+uh_r6qy1pbk-YvZ+xQ5O_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="276291.50350.qm_at_web50802.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 13:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14109.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14107.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>In reply to:</strong> <a href="14093.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14118.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14118.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 23, 2010 at 8:39 PM, Randolph Pullen
<br>
&lt;randolph_pullen_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have had a similar load related problem with Bcast.
</span><br>
<p>Thanks Randolph! That's interesting to know! What was the hardware you
<br>
were using? Does your bcast fail at the exact same point too?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what caused it though.&#160; With this one, what about the possibility of a buffer overrun or network saturation?
</span><br>
<p>How can I test for a buffer overrun?
<br>
<p>For network saturation I guess I could use something like mrtg to
<br>
monitor the bandwidth used. On the other hand, all 32 servers are
<br>
connected to a single dedicated Nexus5000. The back-plane carries no
<br>
other traffic. Hence I am skeptical that just 41943040 saturated what
<br>
Cisco rates as a 10GigE fabric. But I might be wrong.
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14109.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14107.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>In reply to:</strong> <a href="14093.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14118.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14118.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
