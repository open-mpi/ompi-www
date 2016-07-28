<?
$subject_val = "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 04:47:34 2016" -->
<!-- isoreceived="20160310094734" -->
<!-- sent="Thu, 10 Mar 2016 10:47:30 +0100 (CET)" -->
<!-- isosent="20160310094730" -->
<!-- name="Vincent Diepeveen" -->
<!-- email="diep_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
<!-- id="alpine.DEB.2.02.1603101039470.23977_at_xs9.xs4all.nl" -->
<!-- charset="ISO-8859-7" -->
<!-- inreplyto="E6B38372B5A4894D811264E60EFF51E82E7E8011_at_UUSNWE1K.na.utcmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?<br>
<strong>From:</strong> Vincent Diepeveen (<em>diep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 04:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28669.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28670.php">Gilles Gouaillardet: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're trying to read absurd huge message sizes considering you're busy 
<br>
testing the memory bandwidth of your system in this manner.
<br>
<p>As soon as the message gets larger than your CPU's caching 
<br>
system it has to copy the message several times via your RAM, falls 
<br>
outside CPU's L2 or L3 cache and bandwidth drops.
<br>
<p>This has nothing to do with OpenMPI i'd say.
<br>
<p><p><p><p>On Thu, 10 Mar 2016, BRADLEY, PETER C PW wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#162;m curious what causes the hump in the pingpong bandwidth curve when running on shared memory.&#160; Here&#162;s an example running on a fairly antiquated
</span><br>
<span class="quotelev1">&gt; single-socket 4 core laptop with linux (2.6.32 kernel).&#160; Is this a cache effect?&#160; Something in OpenMPI itself, or a combination?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Macintosh HD:Users:up:Pictures:bandwidth_onepair_onenode.png
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28669.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28670.php">Gilles Gouaillardet: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
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
