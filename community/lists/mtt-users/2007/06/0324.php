<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 17:59:48 2007" -->
<!-- isoreceived="20070612215948" -->
<!-- sent="Tue, 12 Jun 2007 18:00:23 -0400" -->
<!-- isosent="20070612220023" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;if funclet and quoting" -->
<!-- id="20070612220023.GC57432_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8283F7E9-BED3-455C-8398-21CA279F7D34_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 18:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0325.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0325.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0325.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun/12/2007 04:53:21PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 12, 2007, at 10:50 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; eval $btls = MTT::Functions::if(MTT::Functions::regexp
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-2|v20z-2&quot;),
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                  MTT::Functions::enumerate(&quot;self,sm,tcp&quot;),
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                  MTT::Functions::if(&quot;MTT::Functions::regexp
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (&quot;MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-6&quot;),
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                      MTT::Functions::enumerate(&quot;udapl&quot;),
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                      MTT::Functions::enumerate(&quot;sm&quot;, &quot;tcp&quot;,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                  )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ah -- I had to think about this a bit before I figured it out/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; remembered.  I think we won't get the expansion effect if you do it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this way.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No expansion effect? As long as the perl code evaluates to
</span><br>
<span class="quotelev2">&gt; &gt; an array, couldn't it to work? E.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'll need to revamp all the current funclets to accept
</span><br>
<span class="quotelev1">&gt; arrays and  return [potentially] arrays of arrays.  What
</span><br>
<span class="quotelev1">&gt; if, as a  counterproposal, we have a &amp;perl() funclet?
</span><br>
<span class="quotelev1">&gt; Then you could do the  following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btls = &amp;perl(&quot;if ($hostname =~ /foo/) {                         \
</span><br>
<span class="quotelev1">&gt;             return (&quot;self,sm,tcp&quot;);                              \
</span><br>
<span class="quotelev1">&gt;         } elsif ($hostname =~ /bar/) {                           \
</span><br>
<span class="quotelev1">&gt;             return (&quot;udapl&quot;);                                    \
</span><br>
<span class="quotelev1">&gt;         } else {                                                 \
</span><br>
<span class="quotelev1">&gt;             return (&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;); \
</span><br>
<span class="quotelev1">&gt;         }&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (or something like that)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I like that. Is that in anticipation of having &amp;ksh(),
<br>
&amp;zsh(), &amp;python(), &amp;php(), &amp;tcl(), ... ?  To reduce some
<br>
clutter, maybe a param like this would be fun, e.g.,
<br>
<p>&nbsp;&nbsp;default_ini_evaluator = perl
<br>
<p>So MTT will assume you mean &amp;perl() if there's
<br>
no leading '&amp;'.
<br>
<p>Other legal options being ...
<br>
<p>&nbsp;&nbsp;default_ini_evaluator = python
<br>
&nbsp;&nbsp;default_ini_evaluator = sh
<br>
&nbsp;&nbsp;default_ini_evaluator = tcl
<br>
&nbsp;&nbsp;default_ini_evaluator = ...
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0325.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0325.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0325.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
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
