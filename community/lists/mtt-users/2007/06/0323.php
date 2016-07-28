<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 16:53:33 2007" -->
<!-- isoreceived="20070612205333" -->
<!-- sent="Tue, 12 Jun 2007 16:53:21 -0400" -->
<!-- isosent="20070612205321" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;if funclet and quoting" -->
<!-- id="8283F7E9-BED3-455C-8398-21CA279F7D34_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070612145043.GA57432_at_sun.com" -->
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
<strong>Date:</strong> 2007-06-12 16:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 12, 2007, at 10:50 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; eval $btls = MTT::Functions::if(MTT::Functions::regexp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-2|v20z-2&quot;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MTT::Functions::enumerate(&quot;self,sm,tcp&quot;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MTT::Functions::if(&quot;MTT::Functions::regexp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&quot;MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-6&quot;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      MTT::Functions::enumerate(&quot;udapl&quot;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      MTT::Functions::enumerate(&quot;sm&quot;, &quot;tcp&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah -- I had to think about this a bit before I figured it out/
</span><br>
<span class="quotelev2">&gt;&gt; remembered.  I think we won't get the expansion effect if you do it
</span><br>
<span class="quotelev2">&gt;&gt; this way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No expansion effect? As long as the perl code evaluates to
</span><br>
<span class="quotelev1">&gt; an array, couldn't it to work? E.g.,
</span><br>
<p>We'll need to revamp all the current funclets to accept arrays and  
<br>
return [potentially] arrays of arrays.  What if, as a  
<br>
counterproposal, we have a &amp;perl() funclet?  Then you could do the  
<br>
following:
<br>
<p><p><p>btls = &amp;perl(&quot;if ($hostname =~ /foo/) {                         \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (&quot;self,sm,tcp&quot;);                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} elsif ($hostname =~ /bar/) {                           \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (&quot;udapl&quot;);                                    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {                                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&quot;)
<br>
<p><p><p>(or something like that)
<br>
<p><p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0324.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
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
