<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 13:40:34 2007" -->
<!-- isoreceived="20070710174034" -->
<!-- sent="Tue, 10 Jul 2007 13:40:24 -0400" -->
<!-- isosent="20070710174024" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="884B2CEC-B86B-4A1A-A57D-5D080DF570D4_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0707101111250.7006_at_ferret.srn.sandia.gov" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 13:40:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>In reply to:</strong> <a href="3621.php">Christopher D. Maestas: "[OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 1:14 PM, Christopher D. Maestas wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone seen the following message with Open MPI:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't see this message with mpich-mx-1.2.7..4
</span><br>
<p>Hi Chris,
<br>
<p>MX has an internal registration cache that can be enabled with  
<br>
MX_RCACHE=1 or disabled with MX_RCACHE=0 (the default before MX-1.2.1  
<br>
was off, and starting with 1.2.1 the default is on). If it is on, MX  
<br>
checks to see if the application is trying to override malloc() and  
<br>
other memory handling functions. If so, it prints the error that you  
<br>
are seeing and fails to use the registration cache.
<br>
<p>Open MPI can use the regcache if you set MX_RCACHE=2. This tells MX  
<br>
to skip the malloc() check and use the cache regardless. In the case  
<br>
of Open MPI, this is believed to be safe. That will not be true for  
<br>
all applications.
<br>
<p>MPICH-MX does not manage memory, so MX_RCACHE=1 is safe to use unless  
<br>
the user's application manages memory.
<br>
<p>Scott
<br>
<p><pre>
--
Scott Atchley
Myricom Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3622.php">Ralph H Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<li><strong>In reply to:</strong> <a href="3621.php">Christopher D. Maestas: "[OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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
