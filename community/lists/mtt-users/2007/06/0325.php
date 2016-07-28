<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 06:52:34 2007" -->
<!-- isoreceived="20070614105234" -->
<!-- sent="Thu, 14 Jun 2007 06:52:10 -0400" -->
<!-- isosent="20070614105210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;if funclet and quoting" -->
<!-- id="AFCC3848-0B90-4255-93B7-30A2910D32EA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070612220023.GC57432_at_sun.com" -->
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
<strong>Date:</strong> 2007-06-14 06:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0326.php">Tim Prins: "[MTT users] Differentiating builds in the reporter"</a>
<li><strong>Previous message:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 12, 2007, at 6:00 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; We'll need to revamp all the current funclets to accept
</span><br>
<span class="quotelev2">&gt;&gt; arrays and  return [potentially] arrays of arrays.  What
</span><br>
<span class="quotelev2">&gt;&gt; if, as a  counterproposal, we have a &amp;perl() funclet?
</span><br>
<span class="quotelev2">&gt;&gt; Then you could do the  following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btls = &amp;perl(&quot;if ($hostname =~ /foo/) {                         \
</span><br>
<span class="quotelev2">&gt;&gt;             return (&quot;self,sm,tcp&quot;);                              \
</span><br>
<span class="quotelev2">&gt;&gt;         } elsif ($hostname =~ /bar/) {                           \
</span><br>
<span class="quotelev2">&gt;&gt;             return (&quot;udapl&quot;);                                    \
</span><br>
<span class="quotelev2">&gt;&gt;         } else {                                                 \
</span><br>
<span class="quotelev2">&gt;&gt;             return (&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;); \
</span><br>
<span class="quotelev2">&gt;&gt;         }&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I like that. Is that in anticipation of having &amp;ksh(),
</span><br>
<span class="quotelev1">&gt; &amp;zsh(), &amp;python(), &amp;php(), &amp;tcl(), ... ?
</span><br>
<p>Well, I wasn't really thinking of adding all those other  
<br>
languages...  :-)
<br>
<p><span class="quotelev1">&gt; To reduce some
</span><br>
<span class="quotelev1">&gt; clutter, maybe a param like this would be fun, e.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   default_ini_evaluator = perl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So MTT will assume you mean &amp;perl() if there's
</span><br>
<span class="quotelev1">&gt; no leading '&amp;'.
</span><br>
<p>Hrm.  How would you reconcile this with today's evaluation?  E.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foo = bar
<br>
<p>This is not legal perl, and would cause an error if we subject that  
<br>
to an internal perl eval.  This is why I was suggesting a &amp;perl()  
<br>
funclet -- we would know that the entire contents were perl and safe  
<br>
to submit to eval.
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
<li><strong>Next message:</strong> <a href="0326.php">Tim Prins: "[MTT users] Differentiating builds in the reporter"</a>
<li><strong>Previous message:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
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
