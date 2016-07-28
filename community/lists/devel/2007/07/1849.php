<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 08:43:57 2007" -->
<!-- isoreceived="20070711124357" -->
<!-- sent="Wed, 11 Jul 2007 08:43:56 -0400" -->
<!-- isosent="20070711124356" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="4694D08C.6050208_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AB0468A8-23A8-497C-8A1E-C99E609754E8_at_myri.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 08:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1850.php">Joshua Hursey: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1848.php">Gleb Natapov: "Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;moving this to devel, as it really belongs there&gt;
<br>
Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; On Jul 10, 2007, at 3:24 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 10 July 2007 03:11:45 pm Scott Atchley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 10, 2007, at 2:58 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim, starting with the recently released 1.2.1, it is the default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To clarify, MX_RCACHE=1 is the default.
</span><br>
<span class="quotelev2">&gt;&gt; It would be good for the default to be something where there is no  
</span><br>
<span class="quotelev2">&gt;&gt; warning
</span><br>
<span class="quotelev2">&gt;&gt; printed (i.e. 0 or 2). I see the warning on the current trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After further discussion in-house, the warning can be avoided if - 
</span><br>
<span class="quotelev1">&gt; lmyriexpress is included when linking the app (i.e. if it is in mpicc  
</span><br>
<span class="quotelev1">&gt; when linking).
</span><br>
We cannot do this since we create network agnostic executables so that 
<br>
users can select networks at runtime. Doing -lmyriexpress would put an 
<br>
artificial dependency on the myrinet library, even if the user does not 
<br>
want to use it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another clarification, the regache does work with several replacement  
</span><br>
<span class="quotelev1">&gt; malloc libraries. If the user application overloads mmap(), munmap()  
</span><br>
<span class="quotelev1">&gt; and sbrk(), then it may or may not work. In this case, the user  
</span><br>
<span class="quotelev1">&gt; should use MX_RCACHE=0.
</span><br>
This sounds to me like a lot to ask the user to do...
<br>
<p>My opinion is that if MX_RCACHE is not explicitly set by the user, Open 
<br>
MPI should set it to either 0 or 2 automatically. An explicit goal Open 
<br>
MPI is for it to automatically do the right thing in most cases. Letting 
<br>
a ton of warnings be spit out at the user, in my opinion, is the wrong 
<br>
thing.
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1850.php">Joshua Hursey: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1848.php">Gleb Natapov: "Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
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
