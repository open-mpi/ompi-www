<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 15:31:15 2007" -->
<!-- isoreceived="20070710193115" -->
<!-- sent="Tue, 10 Jul 2007 15:31:06 -0400" -->
<!-- isosent="20070710193106" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="AB0468A8-23A8-497C-8A1E-C99E609754E8_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707101524.48449.tprins_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-10 15:31:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3633.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3631.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3631.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4519.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4519.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 3:24 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; On Tuesday 10 July 2007 03:11:45 pm Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2007, at 2:58 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim, starting with the recently released 1.2.1, it is the default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To clarify, MX_RCACHE=1 is the default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be good for the default to be something where there is no  
</span><br>
<span class="quotelev1">&gt; warning
</span><br>
<span class="quotelev1">&gt; printed (i.e. 0 or 2). I see the warning on the current trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<p>After further discussion in-house, the warning can be avoided if - 
<br>
lmyriexpress is included when linking the app (i.e. if it is in mpicc  
<br>
when linking).
<br>
<p>Another clarification, the regache does work with several replacement  
<br>
malloc libraries. If the user application overloads mmap(), munmap()  
<br>
and sbrk(), then it may or may not work. In this case, the user  
<br>
should use MX_RCACHE=0.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3633.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3631.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3631.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4519.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4519.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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
