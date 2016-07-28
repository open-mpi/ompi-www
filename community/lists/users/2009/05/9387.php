<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 11:19:24 2009" -->
<!-- isoreceived="20090519151924" -->
<!-- sent="Tue, 19 May 2009 17:19:13 +0200" -->
<!-- isosent="20090519151913" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="200905191719.20891.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="d21ea44c0905190642j15b16bafg755c0ba8ed2b6c3a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-19 11:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 19 May 2009, Roman Martonak wrote:
<br>
<span class="quotelev1">&gt; On Tue, May 19, 2009 at 3:29 PM, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openmpi-1.3.2 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; time per one MD step is 3.66 s
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &#160; &#160;ELAPSED TIME : &#160; &#160;0 HOURS &#160;1 MINUTES 25.90 SECONDS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; 102033. BYTES &#160; &#160; &#160; &#160; &#160; &#160; &#160; 4221. &#160;=
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; &#160; 7.802 &#160;MB/S &#160; &#160; &#160; &#160; &#160;55.200 SEC &#160;=
</span><br>
...
<br>
<span class="quotelev1">&gt; With TASKGROUP=2 the summary looks as follows
</span><br>
...
<br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM           231821. BYTES               4221.  =
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM            82.716  MB/S          11.830 SEC  =
</span><br>
<p>Wow, according to this it takes 1/5th the time to do the same number (4221) of 
<br>
alltoalls if the size is (roughly) doubled... (ten times better performance 
<br>
with the larger transfer size)
<br>
<p>Something is not quite right, could you possibly try to run just the alltoalls 
<br>
like I suggested in my previous e-mail?
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9387/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
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
