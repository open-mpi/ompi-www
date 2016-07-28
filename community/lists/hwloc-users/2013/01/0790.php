<?
$subject_val = "[hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 22:50:16 2013" -->
<!-- isoreceived="20130104035016" -->
<!-- sent="Thu, 3 Jan 2013 22:50:08 -0500" -->
<!-- isosent="20130104035008" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="[hwloc-users] &amp;quot;-lnuma&amp;quot; missing from pkg-config information?" -->
<!-- id="CADKQjjcNbrbYTQFj3N11fb3nOJ9ytSDQs7x=9je5b=iXV0hiWg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 22:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just installed hwloc 1.6 on a Linux Red Hat system. libnuma is required
<br>
for linking -- I receive linker errors if I omit -lnuma, and I see that
<br>
-lnuma is listed in libhwloc.la under &quot;dependency_libs&quot;. However,
<br>
pkgconfig/hwloc.pc does not mention libnuma. It does mention libpci, though.
<br>
<p>Does this sound like an error when hwloc.pc is generated, or am I
<br>
misunderstanding how pkg-config works? If you give me a pointer, I'd be
<br>
happy to try an provide a patch.
<br>
<p>-erik
<br>
<p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0790/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
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
