<?
$subject_val = "Re: [OMPI devel] build problem, autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 06:08:37 2009" -->
<!-- isoreceived="20090828100837" -->
<!-- sent="Fri, 28 Aug 2009 06:08:32 -0400" -->
<!-- isosent="20090828100832" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem, autogen" -->
<!-- id="5FB5CF4F-86FD-4795-9D17-2386181294D8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A9736A3.8090101_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] build problem, autogen<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 06:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6736.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6734.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6740.php">Nifty Tom Mitchell: "Re: [OMPI devel] build problem, autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2009, at 9:45 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Good point.  I'm a dummy about these things.  Assuming I know how to  
</span><br>
<span class="quotelev1">&gt; fix
</span><br>
<span class="quotelev1">&gt; what you're saying, I inserted a &quot;rehash&quot; in my script after &quot;make
</span><br>
<span class="quotelev1">&gt; install&quot;, but still got the same problem.  That is, the relevent  
</span><br>
<span class="quotelev1">&gt; part of
</span><br>
<span class="quotelev1">&gt; the script now says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>And I think that Tim pointed out that you forgot Libtool in this  
<br>
list.  If you're going to install a set of Autotools, you have to  
<br>
install *all* of them in a single tree, not just *some* of them.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6736.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6734.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6740.php">Nifty Tom Mitchell: "Re: [OMPI devel] build problem, autogen"</a>
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
