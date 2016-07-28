<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 04:39:18 2009" -->
<!-- isoreceived="20090520083918" -->
<!-- sent="Wed, 20 May 2009 10:39:09 +0200" -->
<!-- isosent="20090520083909" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="200905201039.13535.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200905191719.20891.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2009-05-20 04:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9399.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9397.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9399.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9399.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 19 May 2009, Peter Kjellstrom wrote:
<br>
<span class="quotelev1">&gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 19, 2009 at 3:29 PM, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; openmpi-1.3.2 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; time per one MD step is 3.66 s
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &#160; &#160;ELAPSED TIME : &#160; &#160;0 HOURS &#160;1 MINUTES 25.90 SECONDS
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; 102033. BYTES &#160; &#160; &#160; &#160; &#160; &#160; &#160; 4221. &#160;=
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; &#160; 7.802 &#160;MB/S &#160; &#160; &#160; &#160; &#160;55.200 SEC &#160;=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; With TASKGROUP=2 the summary looks as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  = ALL TO ALL COMM           231821. BYTES               4221.  =
</span><br>
<span class="quotelev2">&gt; &gt;  = ALL TO ALL COMM            82.716  MB/S          11.830 SEC  =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wow, according to this it takes 1/5th the time to do the same number (4221)
</span><br>
<span class="quotelev1">&gt; of alltoalls if the size is (roughly) doubled... (ten times better
</span><br>
<span class="quotelev1">&gt; performance with the larger transfer size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something is not quite right, could you possibly try to run just the
</span><br>
<span class="quotelev1">&gt; alltoalls like I suggested in my previous e-mail?
</span><br>
<p>I was curious so I ran som tests. First it seems that the size reported by 
<br>
CPMD is the total size of the data buffer not the message size. Running 
<br>
alltoalls with 231821/64 and 102033/64 gives this (on a similar setup):
<br>
<p>bw for   4221    x 1595 B :  36.5 Mbytes/s       time was:  23.3 s
<br>
bw for   4221    x 3623 B : 125.4 Mbytes/s       time was:  15.4 s
<br>
bw for   4221    x 1595 B :  36.4 Mbytes/s       time was:  23.3 s
<br>
bw for   4221    x 3623 B : 125.6 Mbytes/s       time was:  15.3 s
<br>
<p>So it does seem that OpenMPI has some problems with small alltoalls. It is 
<br>
obviously broken when you can get things across faster by sending more...
<br>
<p>As a reference I ran with a commercial MPI using the same program and node-set 
<br>
(I did not have MVAPICH nor IntelMPI on this system):
<br>
<p>bw for   4221    x 1595 B :  71.4 Mbytes/s       time was:  11.9 s
<br>
bw for   4221    x 3623 B : 125.8 Mbytes/s       time was:  15.3 s
<br>
bw for   4221    x 1595 B :  71.1 Mbytes/s       time was:  11.9 s
<br>
bw for   4221    x 3623 B : 125.5 Mbytes/s       time was:  15.3 s
<br>
<p>To see when OpenMPI falls over I ran with an increasing packet size:
<br>
<p>bw for   10      x 2900 B :  59.8 Mbytes/s       time was:  61.2 ms
<br>
bw for   10      x 2925 B :  59.2 Mbytes/s       time was:  62.2 ms
<br>
bw for   10      x 2950 B :  59.4 Mbytes/s       time was:  62.6 ms
<br>
bw for   10      x 2975 B :  58.5 Mbytes/s       time was:  64.1 ms
<br>
bw for   10      x 3000 B : 113.5 Mbytes/s       time was:  33.3 ms
<br>
bw for   10      x 3100 B : 116.1 Mbytes/s       time was:  33.6 ms
<br>
<p>The problem seems to be for packets with 1000Bytes &lt; size &lt; 3000Bytes with a 
<br>
hard edge at 3000Bytes. Your CPMD was communicating at more or less the worst 
<br>
case packet size.
<br>
<p>These are the figures for my &quot;reference&quot; MPI:
<br>
<p>bw for   10      x 2900 B : 110.3 Mbytes/s       time was:  33.1 ms
<br>
bw for   10      x 2925 B : 110.4 Mbytes/s       time was:  33.4 ms
<br>
bw for   10      x 2950 B : 111.5 Mbytes/s       time was:  33.3 ms
<br>
bw for   10      x 2975 B : 112.4 Mbytes/s       time was:  33.4 ms
<br>
bw for   10      x 3000 B : 118.2 Mbytes/s       time was:  32.0 ms
<br>
bw for   10      x 3100 B : 114.1 Mbytes/s       time was:  34.2 ms
<br>
<p>Setup-details:
<br>
hw: dual socket quad core harpertowns with ConnectX IB and 1:1 2-level tree
<br>
sw: CentOS-5.3 x86_64 with OpenMPI-1.3b2 (did not have time to try 1.3.2) on 
<br>
OFED from CentOS (1.3.2-ish I think).
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9398/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9399.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9397.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9399.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9399.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
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
