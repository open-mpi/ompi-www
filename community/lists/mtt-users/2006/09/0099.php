<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 18 12:55:10 2006" -->
<!-- isoreceived="20060918165510" -->
<!-- sent="Mon, 18 Sep 2006 12:57:39 -0400" -->
<!-- isosent="20060918165739" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] &amp;amp;shell funclet with stderr" -->
<!-- id="20060918165739.GA14716_at_burl-ct-v440-2" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="057.b8ae0913764be4bd7931cdc07cbd2b93_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-09-18 12:57:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0100.php">Jeff Squyres: "Re: [MTT users] &amp;shell funclet with stderr"</a>
<li><strong>Previous message:</strong> <a href="0098.php">Jeff Squyres: "Re: [MTT users] New stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0100.php">Jeff Squyres: "Re: [MTT users] &amp;shell funclet with stderr"</a>
<li><strong>Reply:</strong> <a href="0100.php">Jeff Squyres: "Re: [MTT users] &amp;shell funclet with stderr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally got the &amp;shell funclet to grab the Sun Studio compiler
<br>
version.  The below one worked from the shell, but not in the mtt
<br>
client (because the cc -V output goes to stderr?). 
<br>
<p>compiler_version = &amp;shell(&quot;cc -V |&amp; head -n 1 | nawk '{print \$4}'&quot;);
<br>
<p>The workaround was to have the 'cc -V' output and the head/nawk
<br>
utilities rendezvous in a file instead of a pipe.
<br>
<p>compiler_version = &amp;shell(&quot;cc -V 2&gt; /tmp/cc.out; cat /tmp/cc.out | head -n 1 | nawk '{print \$4}'&quot;);
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0100.php">Jeff Squyres: "Re: [MTT users] &amp;shell funclet with stderr"</a>
<li><strong>Previous message:</strong> <a href="0098.php">Jeff Squyres: "Re: [MTT users] New stuff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0100.php">Jeff Squyres: "Re: [MTT users] &amp;shell funclet with stderr"</a>
<li><strong>Reply:</strong> <a href="0100.php">Jeff Squyres: "Re: [MTT users] &amp;shell funclet with stderr"</a>
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
