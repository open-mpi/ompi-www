<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 14:37:35 2007" -->
<!-- isoreceived="20070710183735" -->
<!-- sent="Tue, 10 Jul 2007 12:37:13 -0600" -->
<!-- isosent="20070710183713" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="45D909C1-37DF-4E03-B1A4-46256F476A0B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="884B2CEC-B86B-4A1A-A57D-5D080DF570D4_at_myri.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 14:37:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3625.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3625.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3625.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3628.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 11:40 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 10, 2007, at 1:14 PM, Christopher D. Maestas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone seen the following message with Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We don't see this message with mpich-mx-1.2.7..4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MX has an internal registration cache that can be enabled with
</span><br>
<span class="quotelev1">&gt; MX_RCACHE=1 or disabled with MX_RCACHE=0 (the default before MX-1.2.1
</span><br>
<span class="quotelev1">&gt; was off, and starting with 1.2.1 the default is on). If it is on, MX
</span><br>
<span class="quotelev1">&gt; checks to see if the application is trying to override malloc() and
</span><br>
<span class="quotelev1">&gt; other memory handling functions. If so, it prints the error that you
</span><br>
<span class="quotelev1">&gt; are seeing and fails to use the registration cache.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI can use the regcache if you set MX_RCACHE=2. This tells MX
</span><br>
<span class="quotelev1">&gt; to skip the malloc() check and use the cache regardless. In the case
</span><br>
<span class="quotelev1">&gt; of Open MPI, this is believed to be safe. That will not be true for
</span><br>
<span class="quotelev1">&gt; all applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPICH-MX does not manage memory, so MX_RCACHE=1 is safe to use unless
</span><br>
<span class="quotelev1">&gt; the user's application manages memory.
</span><br>
<p>Scott -
<br>
<p>I'm having trouble getting the warning to go away with Open MPI.   
<br>
I've disabled our copy of ptmalloc2, so we're not providing a malloc  
<br>
anymore.  I'm wondering if there's also something with the use of  
<br>
DSOs to load libmyriexpress?  Is your belief that MX_RCACHE=2 is safe  
<br>
just for the BTL or for the MTL as well?
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3625.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3623.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3625.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3625.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="3628.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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
