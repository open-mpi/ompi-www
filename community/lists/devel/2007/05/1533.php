<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 13:02:45 2007" -->
<!-- isoreceived="20070510170245" -->
<!-- sent="Thu, 10 May 2007 20:02:40 +0300" -->
<!-- isosent="20070510170240" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: [ewg] Re: Re: OMPI over ofed	udapl -	bugs	opened" -->
<!-- id="20070510170240.GA32053_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070510145613.GR13655_at_mellanox.co.il" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 13:02:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1532.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re:  Re: OMPI over ofed	udapl -	bugs	opened"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 10, 2007 at 05:56:13PM +0300, Michael S. Tsirkin wrote:
<br>
<span class="quotelev2">&gt; &gt; Quoting Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [ewg] Re: [OMPI devel] Re: OMPI over ofed?udapl -?bugs?opened
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 10, 2007, at 10:28 AM, Michael S. Tsirkin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;What is the advantage of this approach?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Current ipoib cm uses this approach to simplify the implementation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Overhead seems insignificant.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think MPI's requirements are a bit different than IPoIB.  See  
</span><br>
<span class="quotelev2">&gt; &gt; Gleb's response. It is not uncommon for MPI apps to have connections  
</span><br>
<span class="quotelev2">&gt; &gt; open to many peers simultaneously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You mean, hundreds of QPs between the same pair of hosts?
</span><br>
<span class="quotelev1">&gt; Yes, in this case you might start running out of QPs.
</span><br>
<p>Why is it matters that QPs between the same pair of hosts or not.
<br>
QPs are global resource, aren't they?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Registered memory / internal  
</span><br>
<span class="quotelev2">&gt; &gt; buffering usage is a Big Deal in the MPI / HPC community.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see the connection with the # of QPs.
</span><br>
<span class="quotelev1">&gt; They are very cheap in memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
4K is cheap?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1532.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re:  Re: OMPI over ofed	udapl -	bugs	opened"</a>
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
