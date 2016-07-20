<?
$subject_val = "[hwloc-users] Creating a D wrapper around hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 16:18:03 2010" -->
<!-- isoreceived="20100416201803" -->
<!-- sent="Fri, 16 Apr 2010 14:17:58 -0600" -->
<!-- isosent="20100416201758" -->
<!-- name="Jim Burnes" -->
<!-- email="jvburnes_at_[hidden]" -->
<!-- subject="[hwloc-users] Creating a D wrapper around hwloc" -->
<!-- id="m2tb3ec41ba1004161317vef583711oa9245dda296dbbd2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] Creating a D wrapper around hwloc<br>
<strong>From:</strong> Jim Burnes (<em>jvburnes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 16:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>Previous message:</strong> <a href="0052.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>Reply:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>Reply:</strong> <a href="0056.php">Fawzi Mohamed: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm creating a D wrapper around hwloc and so far it's going well, but
<br>
I need some advice...
<br>
<p>One of the last issues I running into is at link time.
<br>
<p>Since a number of functions (especially in helper.h) are define as
<br>
&quot;static __inline&quot; they are essentially macros.  This is why they don't
<br>
appear in the compiled libraries.
<br>
<p>I can make these available to D in several different ways, but I need
<br>
to know the true intent of marking them as &quot;static __inline&quot;.
<br>
<p>1. Are they marked that way simply to increase performance?
<br>
2. Are they marked that way to avoid some sort of thread safety issue?
<br>
<p>If the answer is (1) then I can safely remove their &quot;static __inline&quot;
<br>
markup and compile them into the library.
<br>
<p>If the answer is closer to (2) and you truly need them inlined into
<br>
the source code where they are referenced then I can create a template
<br>
mixin in D for them and include them like that.
<br>
<p>This is a cool library.  Thanks for the extensive work.
<br>
<p>J Burnes
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>Previous message:</strong> <a href="0052.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>Reply:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>Reply:</strong> <a href="0056.php">Fawzi Mohamed: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
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
