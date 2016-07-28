<?
$subject_val = "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 22:11:12 2011" -->
<!-- isoreceived="20110902021112" -->
<!-- sent="Thu, 01 Sep 2011 19:06:36 -0700" -->
<!-- isosent="20110902020636" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS" -->
<!-- id="4E603A2C.6080100_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1314859689.30340.YahooMailNeo_at_web121018.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 22:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17134.php">bhimesh akula: "[OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>Previous message:</strong> <a href="17132.php">Fabien: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>In reply to:</strong> <a href="17130.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17136.php">Jeff Squyres: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Reply:</strong> <a href="17136.php">Jeff Squyres: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/31/2011 11:48 PM, Randolph Pullen wrote:
<br>
<span class="quotelev1">&gt; I recall a discussion some time ago about yield, the Completely F%&#226;&#128;&#153;d 
</span><br>
<span class="quotelev1">&gt; Scheduler (CFS) and OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My system is currently suffering from massive CPU use while busy 
</span><br>
<span class="quotelev1">&gt; waiting.  This gets worse as I try to bump up user concurrency.
</span><br>
Yup.
<br>
<span class="quotelev1">&gt; I am running with yield_when_idle but its not enough.
</span><br>
Yup.
<br>
<span class="quotelev1">&gt; Is there anything else I can do to release some CPU resource?
</span><br>
<span class="quotelev1">&gt; I recall seeing one post where usleep(1) was inserted around the 
</span><br>
<span class="quotelev1">&gt; yields, is this still feasible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using 1.4.1 - is there a fix to be found in upgrading?
</span><br>
<span class="quotelev1">&gt; Unfortunately I am stuck  with the CFS as I need Linux.  Currently its 
</span><br>
<span class="quotelev1">&gt; Ubuntu 10.10 with 2.6.32.14
</span><br>
I think OMPI doesn't yet do (much/any) better than what you've 
<br>
observed.  You might be able to hack something up yourself.  In 
<br>
something I did recently, I replaced blocking sends and receives with 
<br>
test/nanosleep loops.  An &quot;optimum&quot; solution (minimum latency, optimal 
<br>
performance at arbitrary levels of under and oversubscription) might be 
<br>
elusive, but hopefully you'll quickly be able to piece together 
<br>
something for your particular purposes.  In my case, I was lucky and the 
<br>
results were very gratifying... my bottleneck vaporized for modest 
<br>
levels of oversubscription (2-4 more processes than processors).
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-17133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17134.php">bhimesh akula: "[OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>Previous message:</strong> <a href="17132.php">Fabien: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>In reply to:</strong> <a href="17130.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17136.php">Jeff Squyres: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Reply:</strong> <a href="17136.php">Jeff Squyres: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
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
