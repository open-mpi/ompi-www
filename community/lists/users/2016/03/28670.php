<?
$subject_val = "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 07:27:28 2016" -->
<!-- isoreceived="20160310122728" -->
<!-- sent="Thu, 10 Mar 2016 21:27:27 +0900" -->
<!-- isosent="20160310122727" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
<!-- id="CAAkFZ5vzHQ0Jb7683OvVMd7dkFC+MqYc2Hw8sqKThj5z0toKhA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 07:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28671.php">Joshua Wall: "[OMPI users] Failed Flash run on Pleiades with OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28669.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pete,
<br>
<p>how did you measure the bandwidth ?
<br>
iirc, IMB benchmark does not reuse send and recv buffers, so the results
<br>
could be different.
<br>
also, you might want to use a logarithmic scale for the message size, so
<br>
information for small messages is easier to read.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, March 10, 2016, BRADLEY, PETER C PW &lt;peter.c.bradley_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m curious what causes the hump in the pingpong bandwidth curve when
</span><br>
<span class="quotelev1">&gt; running on shared memory.  Here&#226;&#128;&#153;s an example running on a fairly antiquated
</span><br>
<span class="quotelev1">&gt; single-socket 4 core laptop with linux (2.6.32 kernel).  Is this a cache
</span><br>
<span class="quotelev1">&gt; effect?  Something in OpenMPI itself, or a combination?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [image: Macintosh HD:Users:up:Pictures:bandwidth_onepair_onenode.png]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pete
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28670/image003.png" alt="image003.png">
<!-- attachment="image003.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28671.php">Joshua Wall: "[OMPI users] Failed Flash run on Pleiades with OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28669.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28667.php">BRADLEY, PETER C          PW: "[OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
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
