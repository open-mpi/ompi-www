<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 13:21:21 2006" -->
<!-- isoreceived="20061103182121" -->
<!-- sent="Fri, 3 Nov 2006 13:21:03 -0500" -->
<!-- isosent="20061103182103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="188F8CC4-01AC-44A5-91E1-B31D57B36833_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061103170833.GD59192_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-11-03 13:21:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Jeff Squyres: "Re: [MTT users] &quot;testing&quot; flag"</a>
<li><strong>In reply to:</strong> <a href="0188.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2006, at 12:08 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Point taken about being literal. My thinking is that most
</span><br>
<span class="quotelev1">&gt; will be only guessing about the quoting mechanism of
</span><br>
<span class="quotelev1">&gt; funclets (as I was for a bit), and there would never be a
</span><br>
<span class="quotelev1">&gt; real case for sending '&quot;cmd&quot;' to exec().
</span><br>
<p>How about a doc fix then?
<br>
<p>I'm not so worried about a '&quot;cmd&quot;' to exec(), but more about other  
<br>
fields.  Remember  that shell commands are a very small portion of  
<br>
the fields used in MTT - there's others that are explicitly used as  
<br>
portions of commands.  For example you could do something like this:
<br>
<p>shell_command = ./configure @foo@
<br>
foo = &quot;CFLAGS=-g -O&quot;
<br>
<p>which then wouldn't work.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Jeff Squyres: "Re: [MTT users] &quot;testing&quot; flag"</a>
<li><strong>In reply to:</strong> <a href="0188.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
