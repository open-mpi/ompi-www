<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 19 03:52:18 2006" -->
<!-- isoreceived="20060919075218" -->
<!-- sent="Tue, 19 Sep 2006 09:52:12 +0200" -->
<!-- isosent="20060919075212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;shell funclet with stderr" -->
<!-- id="C1356E4C.2786B%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060918165739.GA14716_at_burl-ct-v440-2" -->
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
<strong>Date:</strong> 2006-09-19 03:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0101.php">Ethan Mallove: "[MTT users] How goes the MTT?"</a>
<li><strong>Previous message:</strong> <a href="0099.php">Ethan Mallove: "[MTT users] &amp;shell funclet with stderr"</a>
<li><strong>In reply to:</strong> <a href="0099.php">Ethan Mallove: "[MTT users] &amp;shell funclet with stderr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ew.  I believe that that is because &amp;shell() is going to use sh/bash, not
<br>
csh, so the |&amp; wouldn't work.
<br>
<p>I also notice that /tmp/cc.out is not removed.
<br>
<p>Can you just use sh syntax for grabbing stderr, something like:
<br>
<p>compiler_version = &amp;shell(&quot;cc -V 2&gt;&amp;1 | head -n 1 | nawk '{print \$4}'&quot;);
<br>
<p><p>On 9/18/06 6:57 PM, &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I finally got the &amp;shell funclet to grab the Sun Studio compiler
</span><br>
<span class="quotelev1">&gt; version.  The below one worked from the shell, but not in the mtt
</span><br>
<span class="quotelev1">&gt; client (because the cc -V output goes to stderr?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compiler_version = &amp;shell(&quot;cc -V |&amp; head -n 1 | nawk '{print \$4}'&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The workaround was to have the 'cc -V' output and the head/nawk
</span><br>
<span class="quotelev1">&gt; utilities rendezvous in a file instead of a pipe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compiler_version = &amp;shell(&quot;cc -V 2&gt; /tmp/cc.out; cat /tmp/cc.out | head -n 1 |
</span><br>
<span class="quotelev1">&gt; nawk '{print \$4}'&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0101.php">Ethan Mallove: "[MTT users] How goes the MTT?"</a>
<li><strong>Previous message:</strong> <a href="0099.php">Ethan Mallove: "[MTT users] &amp;shell funclet with stderr"</a>
<li><strong>In reply to:</strong> <a href="0099.php">Ethan Mallove: "[MTT users] &amp;shell funclet with stderr"</a>
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
