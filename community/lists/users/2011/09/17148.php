<?
$subject_val = "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  3 08:43:41 2011" -->
<!-- isoreceived="20110903124341" -->
<!-- sent="Sat, 3 Sep 2011 05:43:36 -0700 (PDT)" -->
<!-- isosent="20110903124336" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS" -->
<!-- id="1315053816.59614.YahooMailNeo_at_web121006.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="89D5FDEC-FE99-4461-B3BB-C93720826CBD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-03 08:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17149.php">Yevgeny Kliteynik: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>Previous message:</strong> <a href="17147.php">alibeck: "[OMPI users] problem with MPI-IO at filesizes greater then the 32 Bit limit..."</a>
<li><strong>In reply to:</strong> <a href="17144.php">Jeff Squyres: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have already&#194;&#160;implemented&#194;&#160;test/sleep code but the main problem is with the broadcasts that send out the SIMD instructions, because these are blocking and when the system is idle, its these guys who consume the CPU while waiting for work.
Implementing&#194;&#160;&#194;&#160;
echo &quot;1&quot;
&gt; /proc/sys/kernel/sched_compat_yield
Helps quite a bit (thanks Jeff) in that it makes yield more&#194;&#160;aggressive&#194;&#160;but the&#194;&#160;fundamental&#194;&#160;problem still remains.

A non-blocking broadcast would fix it, and/or a good scheduler.

Do other MPI's use busy loops so extensively in there comms?


________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Friday, 2 September 2011 9:45 PM
Subject: Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS

This might also be in reference to the issue that shed_yield() really does nothing in recent Linux kernels (there was big debate about this at kernel.org).&#194;&#160; 

IIRC, there's some kernel parameter that you can tweak to make it behave better, but I'm afraid I don't remember what it is.&#194;&#160; Some googling might find it...?


On Sep 1, 2011, at 10:06 PM, Eugene Loh wrote:

&gt; On 8/31/2011 11:48 PM, Randolph Pullen wrote:
&gt;&gt; I recall a discussion some time ago about yield, the Completely F%&#226;&#128;&#153;d Scheduler (CFS) and OpenMPI.
&gt;&gt; 
&gt;&gt; My system is currently suffering from massive CPU use while busy waiting.&#194;&#160; This gets worse as I try to bump up user concurrency.
&gt; Yup.
&gt;&gt; I am running with yield_when_idle but its not enough.
&gt; Yup.
&gt;&gt; Is there anything else I can do to release some CPU resource?
&gt;&gt; I recall seeing one post where usleep(1) was inserted around the yields, is this still feasible?
&gt;&gt; 
&gt;&gt; I'm using 1.4.1 - is there a fix to be found in upgrading?
&gt;&gt; Unfortunately I am stuck&#194;&#160; with the CFS as I need Linux.&#194;&#160; Currently its Ubuntu 10.10 with 2.6.32.14
&gt; I think OMPI doesn't yet do (much/any) better than what you've observed.&#194;&#160; You might be able to hack something up yourself.&#194;&#160; In something I did recently, I replaced blocking sends and receives with test/nanosleep loops.&#194;&#160; An &quot;optimum&quot; solution (minimum latency, optimal performance at arbitrary levels of under and oversubscription) might be elusive, but hopefully you'll quickly be able to piece together something for your particular purposes.&#194;&#160; In my case, I was lucky and the results were very gratifying... my bottleneck vaporized for modest levels of oversubscription (2-4 more processes than processors).
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17149.php">Yevgeny Kliteynik: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>Previous message:</strong> <a href="17147.php">alibeck: "[OMPI users] problem with MPI-IO at filesizes greater then the 32 Bit limit..."</a>
<li><strong>In reply to:</strong> <a href="17144.php">Jeff Squyres: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
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
