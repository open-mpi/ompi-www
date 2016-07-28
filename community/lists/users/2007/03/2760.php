<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 10:24:44 2007" -->
<!-- isoreceived="20070306152444" -->
<!-- sent="Tue, 6 Mar 2007 10:24:16 -0500" -->
<!-- isosent="20070306152416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance question" -->
<!-- id="4138AEB3-6AFB-472C-9676-A0752A56F440_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c84311bb0702191053ocb0042ej12718089146e76ba_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 10:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2761.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Previous message:</strong> <a href="2759.php">&#197;ke Sandgren: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2716.php">Mark Kosmowski: "[OMPI users] performance question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2007, at 1:53 PM, Mark Kosmowski wrote:
<br>
<p><span class="quotelev1">&gt; [snipped good description of cluster]
</span><br>
<p>Sorry for the delay in replying -- traveling for a week-long OMPI  
<br>
developer meeting and trying to get v1.2 out the door has sucked up  
<br>
all of our time recently.  :-(
<br>
<p><span class="quotelev1">&gt; For just the one system with two processors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CPU time: 32:43
</span><br>
<span class="quotelev1">&gt; Elapsed time: 36:52
</span><br>
<span class="quotelev1">&gt; Peak memory: 373 Mb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For just the cluster:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CPU time: 12:23
</span><br>
<span class="quotelev1">&gt; Elapsed time: 20:30
</span><br>
<span class="quotelev1">&gt; Peak memory: 131 Mb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a typical scaling or should I be thinking about doing some
</span><br>
<span class="quotelev1">&gt; sort of tweaking to the [network / ompi] system at some point?  The
</span><br>
<p>Unfortunately, there is no &quot;typical&quot; scaling -- every application is  
<br>
different.  I'm unfortunately unfamiliar with the application you  
<br>
mentioned (CPMD), so I don't know how it runs (memory footprint,  
<br>
communication pattern, etc.).
<br>
<p><span class="quotelev1">&gt; cpu time is scaling about right, but elapsed time is getting hammered
</span><br>
<span class="quotelev1">&gt; - with the low memory overhead it has to be a communications issue
</span><br>
<span class="quotelev1">&gt; rather than a swap issue, right?
</span><br>
<p>Possibly.  But even with low memory usage, there can be other factors  
<br>
that create low CPU utilization (e.g., other IO, such as disk),  
<br>
processor/memory hierarchy issues (are your motherboards NUMA?), etc.
<br>
<p><span class="quotelev1">&gt; Would it be helpful to see a serial time point using the same
</span><br>
<span class="quotelev1">&gt; executable (if so, I'd probably repeat all the runs with a smaller job
</span><br>
<span class="quotelev1">&gt; - I don't know that I want to spend half a week just for
</span><br>
<span class="quotelev1">&gt; benchmarking)?
</span><br>
<p>I'm not sure what you mean -- see *what* at a serial point in time?
<br>
<p><span class="quotelev1">&gt; I have included the appropriate btl_tcp_if_include configuration so
</span><br>
<span class="quotelev1">&gt; that OMPI only uses the gigabit ports (and not the internet
</span><br>
<span class="quotelev1">&gt; connections that some of the machines have).
</span><br>
<p>Gotcha.
<br>
<p>OMPI's TCP support is &quot;ok&quot; -- it's not great (we've spent much more  
<br>
time optimizing the low latency/high bandwidth interconnects).  We do  
<br>
intend to go back to optimize TCP, but it's one of those time and  
<br>
monkeys issues (don't have enough time or monkeys to do it...).  But  
<br>
it shouldn't be a major slowdown, particularly over a 12 or 32 hour run.
<br>
<p>Do you have any idea what the communication pattern is for CPMD?   
<br>
Does it send a little data, or a lot?  How often does it communicate  
<br>
between the MPI processes, and how big are the messages?  Etc.
<br>
<p><span class="quotelev1">&gt; I am already planning on doing some benchmark comparisons to determine
</span><br>
<span class="quotelev1">&gt; the effect of compiler / math library on speed.
</span><br>
<p>Depending on the app, this can have a big impact.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2761.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Previous message:</strong> <a href="2759.php">&#197;ke Sandgren: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2716.php">Mark Kosmowski: "[OMPI users] performance question"</a>
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
