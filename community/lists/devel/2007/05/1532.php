<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 10:42:16 2007" -->
<!-- isoreceived="20070510144216" -->
<!-- sent="Thu, 10 May 2007 10:42:01 -0400" -->
<!-- isosent="20070510144201" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ewg] Re:  Re: OMPI over ofed	udapl -	bugs	opened" -->
<!-- id="D8150EE2-F521-43C2-8B31-04655933E96A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070510142826.GE22029_at_mellanox.co.il" -->
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
<strong>Date:</strong> 2007-05-10 10:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1533.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] Re: [ewg] Re: Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1531.php">Gleb Natapov: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2007, at 10:28 AM, Michael S. Tsirkin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What is the advantage of this approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current ipoib cm uses this approach to simplify the implementation.
</span><br>
<span class="quotelev1">&gt; Overhead seems insignificant.
</span><br>
<p>I think MPI's requirements are a bit different than IPoIB.  See  
<br>
Gleb's response. It is not uncommon for MPI apps to have connections  
<br>
open to many peers simultaneously.  Registered memory / internal  
<br>
buffering usage is a Big Deal in the MPI / HPC community.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1533.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] Re: [ewg] Re: Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1531.php">Gleb Natapov: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
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
