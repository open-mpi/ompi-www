<?
$subject_val = "Re: [OMPI users] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 16:52:12 2010" -->
<!-- isoreceived="20100927205212" -->
<!-- sent="Mon, 27 Sep 2010 13:52:03 -0700" -->
<!-- isosent="20100927205203" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory affinity" -->
<!-- id="4CA103F3.1080904_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinbVEk-ZRJsmHpJppj9+sbxZ7zBdqAUMWbhowL=_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory affinity<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 16:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14347.php">David Singleton: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="14345.php">Gabriele Fatigati: "Re: [OMPI users] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="14345.php">Gabriele Fatigati: "Re: [OMPI users] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14347.php">David Singleton: "Re: [OMPI users] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 9/27/2010 12:21 PM, Gabriele Fatigati wrote:
<br>
<span class="quotelev1">&gt; HI Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have read that link, but I haven't understood if enabling processor
</span><br>
<span class="quotelev1">&gt; affinity are enabled also memory affinity because is written that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Note that memory affinity support is enabled only when processor
</span><br>
<span class="quotelev1">&gt; affinity is enabled&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can i set processory affinity without memory affinity? This is my question..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/9/27 Tim Prince&lt;n8tm_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   On 9/27/2010 9:01 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if OpenMPI is numa-compiled, memory affinity is enabled by default? Because I didn't find memory affinity alone ( similar)  parameter to set at 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   The FAQ <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a> has a useful introduction to affinity.  It's available in a default build, but not enabled by default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Memory affinity is implied by processor affinity.  Your system libraries 
<br>
are set up so as to cause any memory allocated to be made local to the 
<br>
processor, if possible.  That's one of the primary benefits of processor 
<br>
affinity.  Not being an expert in openmpi, I assume, in the absence of 
<br>
further easily accessible documentation, there's no useful explicit way 
<br>
to disable maffinity while using paffinity on platforms other than the 
<br>
specified legacy platforms.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14347.php">David Singleton: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="14345.php">Gabriele Fatigati: "Re: [OMPI users] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="14345.php">Gabriele Fatigati: "Re: [OMPI users] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14347.php">David Singleton: "Re: [OMPI users] Memory affinity"</a>
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
