<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 18:43:31 2007" -->
<!-- isoreceived="20070627224331" -->
<!-- sent="Wed, 27 Jun 2007 18:42:55 -0400" -->
<!-- isosent="20070627224255" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] max_np on multi-processor nodes" -->
<!-- id="20070627224254.GH10255_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-06-27 18:42:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Jeff Squyres: "Re: [MTT users] OMPI C++ tests just split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Reply:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Maybe reply:</strong> <a href="0340.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] max_np on multi-processor nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
env_max_procs uses this order of precedence to get a
<br>
&quot;max_np&quot;.
<br>
<p>&nbsp;&nbsp;1. Various resource managers
<br>
&nbsp;&nbsp;2. If a global hostfile was specified
<br>
&nbsp;&nbsp;3. If a global hostlist was specified
<br>
&nbsp;&nbsp;4. If a global max_np was specified
<br>
<p>Shouldn't 4 be at the top of the list?
<br>
<p>I'm doing single node testing, but the fact that I have only
<br>
one node listed in hostlist causes env_max_procs to return
<br>
&quot;1&quot;. I'd like to override the 1 value with the number of
<br>
CPU's on the single node I'm running on.
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Jeff Squyres: "Re: [MTT users] OMPI C++ tests just split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Reply:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Maybe reply:</strong> <a href="0340.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] max_np on multi-processor nodes"</a>
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
