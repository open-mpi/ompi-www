<?
$subject_val = "Re: [OMPI users] OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 05:07:17 2016" -->
<!-- isoreceived="20160310100717" -->
<!-- sent="Thu, 10 Mar 2016 19:07:03 +0900" -->
<!-- isosent="20160310100703" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
<!-- id="vaveq6k43nycjc0c4bgb4p3a.1457604423316_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 05:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28670.php">Gilles Gouaillardet: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28668.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fwiw,you might want to try compare sm and vader
<br>
mpirun --mca btl self,sm ...
<br>
And with and without knem
<br>
(modprobe knem should do the trick)
<br>
<p>&nbsp;Cheers,
<br>
<p>Gilles
<br>
<p>Vincent Diepeveen &lt;diep_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You're trying to read absurd huge message sizes considering you're busy 
</span><br>
<span class="quotelev1">&gt;testing the memory bandwidth of your system in this manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As soon as the message gets larger than your CPU's caching 
</span><br>
<span class="quotelev1">&gt;system it has to copy the message several times via your RAM, falls 
</span><br>
<span class="quotelev1">&gt;outside CPU's L2 or L3 cache and bandwidth drops.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This has nothing to do with OpenMPI i'd say.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Thu, 10 Mar 2016, BRADLEY, PETER C PW wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m curious what causes the hump in the pingpong bandwidth curve when running on shared memory.&#194;&#160; Here&#226;&#128;&#153;s an example running on a fairly antiquated
</span><br>
<span class="quotelev2">&gt;&gt; single-socket 4 core laptop with linux (2.6.32 kernel).&#194;&#160; Is this a cache effect?&#194;&#160; Something in OpenMPI itself, or a combination?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Macintosh HD:Users:up:Pictures:bandwidth_onepair_onenode.png
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pete
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28670.php">Gilles Gouaillardet: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28668.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
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
