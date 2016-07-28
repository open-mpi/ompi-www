<?
$subject_val = "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  2 07:45:24 2011" -->
<!-- isoreceived="20110902114524" -->
<!-- sent="Fri, 2 Sep 2011 07:45:17 -0400" -->
<!-- isosent="20110902114517" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS" -->
<!-- id="89D5FDEC-FE99-4461-B3BB-C93720826CBD_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4E603A2C.6080100_at_oracle.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-02 07:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17145.php">Tru Huynh: "[OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64)"</a>
<li><strong>Previous message:</strong> <a href="17143.php">Jeff Squyres: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>In reply to:</strong> <a href="17141.php">Eugene Loh: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17148.php">Randolph Pullen: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Reply:</strong> <a href="17148.php">Randolph Pullen: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This might also be in reference to the issue that shed_yield() really does nothing in recent Linux kernels (there was big debate about this at kernel.org).  
<br>
<p>IIRC, there's some kernel parameter that you can tweak to make it behave better, but I'm afraid I don't remember what it is.  Some googling might find it...?
<br>
<p><p>On Sep 1, 2011, at 10:06 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; On 8/31/2011 11:48 PM, Randolph Pullen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I recall a discussion some time ago about yield, the Completely F%&#146;d Scheduler (CFS) and OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My system is currently suffering from massive CPU use while busy waiting.  This gets worse as I try to bump up user concurrency.
</span><br>
<span class="quotelev1">&gt; Yup.
</span><br>
<span class="quotelev2">&gt;&gt; I am running with yield_when_idle but its not enough.
</span><br>
<span class="quotelev1">&gt; Yup.
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything else I can do to release some CPU resource?
</span><br>
<span class="quotelev2">&gt;&gt; I recall seeing one post where usleep(1) was inserted around the yields, is this still feasible?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm using 1.4.1 - is there a fix to be found in upgrading?
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I am stuck  with the CFS as I need Linux.  Currently its Ubuntu 10.10 with 2.6.32.14
</span><br>
<span class="quotelev1">&gt; I think OMPI doesn't yet do (much/any) better than what you've observed.  You might be able to hack something up yourself.  In something I did recently, I replaced blocking sends and receives with test/nanosleep loops.  An &quot;optimum&quot; solution (minimum latency, optimal performance at arbitrary levels of under and oversubscription) might be elusive, but hopefully you'll quickly be able to piece together something for your particular purposes.  In my case, I was lucky and the results were very gratifying... my bottleneck vaporized for modest levels of oversubscription (2-4 more processes than processors).
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17145.php">Tru Huynh: "[OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64)"</a>
<li><strong>Previous message:</strong> <a href="17143.php">Jeff Squyres: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<li><strong>In reply to:</strong> <a href="17141.php">Eugene Loh: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17148.php">Randolph Pullen: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>Reply:</strong> <a href="17148.php">Randolph Pullen: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
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
