<?
$subject_val = "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 20:14:57 2009" -->
<!-- isoreceived="20090210011457" -->
<!-- sent="Mon, 9 Feb 2009 19:14:48 -0600" -->
<!-- isosent="20090210011448" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi" -->
<!-- id="18832.54536.265124.762656_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="76348907-AF81-47F1-9323-3C357C083CE9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-09 20:14:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8002.php">Brian W. Barrett: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Previous message:</strong> <a href="8000.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>In reply to:</strong> <a href="7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To bring closure to this thread, we found that the following simple patch to
<br>
Rmpi/src/Rmpi.c fixes the problem:
<br>
<p><p>--- rmpi-0.5-6.orig/src/Rmpi.c
<br>
+++ rmpi-0.5-6/src/Rmpi.c
<br>
@@ -63,7 +63,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;
<br>
&nbsp;#ifdef OPENMPI
<br>
-	dlopen(&quot;libmpi.so.0&quot;, RTLD_GLOBAL);
<br>
+	dlopen(&quot;libmpi.so.0&quot;, RTLD_GLOBAL | RTLD_LAZY);
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;#ifndef MPI2
<br>
<p><p>The fix has been applied to Debian's package and should also be forthcoming
<br>
in future releases of Rmpi.  Big thanks to Jeff Squyres for patient help with
<br>
the debugging.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8002.php">Brian W. Barrett: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Previous message:</strong> <a href="8000.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>In reply to:</strong> <a href="7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
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
