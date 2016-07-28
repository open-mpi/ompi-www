<?
$subject_val = "[OMPI devel] parallel make install";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 17:07:46 2008" -->
<!-- isoreceived="20080603210746" -->
<!-- sent="Tue, 3 Jun 2008 23:07:25 +0200" -->
<!-- isosent="20080603210725" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] parallel make install" -->
<!-- id="20080603210725.GC31122_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> [OMPI devel] parallel make install<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 17:07:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4079.php">George Bosilca: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there,
<br>
<p>a change recently mentions this:
<br>
<p>| r18552 | timattox | 2008-05-30 06:39:48 +0200 (Fri, 30 May 2008) | 4 lines
<br>
| Changed paths:
<br>
|    M /trunk/contrib/nightly/create_tarball.sh
<br>
| 
<br>
| Apparently &quot;make -j 4 distcheck&quot; has a race condition when &quot;installing&quot; in
<br>
| parallel.  Remove the &quot;-j 4&quot; so we don't get random tarball build failures.
<br>
| Hopefully this won't take all that much longer to make the tarball each night.
<br>
<p><p>Can you fill me in on details here, like the nature of the race or a
<br>
build log showing the failure, the Automake version used to autogen.sh,
<br>
and so on?  Because if that turns out to be a race within Automake code,
<br>
it'd be nice to fix it; well, and if it turns out to be a race in OMPI
<br>
code, it'd be nice to fix it, too.  ;-)
<br>
<p>Thanks!
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4079.php">George Bosilca: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
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
