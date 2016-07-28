<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 08:04:21 2014" -->
<!-- isoreceived="20140326120421" -->
<!-- sent="Wed, 26 Mar 2014 08:04:13 -0400" -->
<!-- isosent="20140326120413" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="5332C23D.1050006_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140326104531.GB16514_at_neuromancer" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 08:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23971.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/26/2014 6:45 AM, Andreas Sch&#228;fer wrote:
<br>
<span class="quotelev1">&gt; On 10:27 Wed 26 Mar     , Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Be aware of a few facts, though:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. There is a fundamental difference between disabling
</span><br>
<span class="quotelev2">&gt;&gt; hyperthreading in the BIOS at power-on time and simply running one
</span><br>
<span class="quotelev2">&gt;&gt; MPI process per core.  Disabling HT at power-on allocates more
</span><br>
<span class="quotelev2">&gt;&gt; hardware resources to the remaining HT that is left is each core
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., deeper queues).
</span><br>
<span class="quotelev1">&gt; Oh, I didn't know that. That's interesting! Do you have any links with
</span><br>
<span class="quotelev1">&gt; in-depth info on that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
On certain Intel CPUs, the full size instruction TLB was available to a 
<br>
process when HyperThreading was disabled on the BIOS setup menu, and 
<br>
that was the only way to make all the Write Combine buffers available to 
<br>
a single process.  Those CPUs are no longer in widespread use.
<br>
<p>At one time, at Intel, we did a study to evaluate the net effect (on a 
<br>
later CPU where this did not recover ITLB size).   The result was buried 
<br>
afterwards; possibly it didn't meet an unspecified marketing goal. 
<br>
Typical applications ran 1% faster with HyperThreading disabled by BIOS 
<br>
menu even with affinities carefully set to use just one process per 
<br>
core.  Not all applications showed a loss on all data sets when leaving 
<br>
HT enabled.
<br>
There are a few MPI applications with specialized threading which could 
<br>
gain 10% or more by use of HT.
<br>
<p>In my personal opinion, SMT becomes less interesting as the number of 
<br>
independent cores increases.
<br>
Intel(r) Xeon Phi(tm) is an exception, as the vector processing unit 
<br>
issues instructions from a single thread only on alternate cycles. This 
<br>
capability is used more effectively by running OpenMP threads under MPI, 
<br>
e.g. 6 ranks per coprocessor of 30 threads each, spread across 10 cores 
<br>
per rank (exact optimum depending on the application; MKL libraries use 
<br>
all available hardware threads for sufficiently large data sets).
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23971.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
