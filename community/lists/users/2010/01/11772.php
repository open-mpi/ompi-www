<?
$subject_val = "[OMPI users] More NetBSD fixes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 11:54:42 2010" -->
<!-- isoreceived="20100114165442" -->
<!-- sent="Thu, 14 Jan 2010 19:54:15 +0300" -->
<!-- isosent="20100114165415" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="[OMPI users] More NetBSD fixes" -->
<!-- id="87vdf4mxu0.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> [OMPI users] More NetBSD fixes<br>
<strong>From:</strong> Aleksej Saushev (<em>asau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 11:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11773.php">Evan Smyth: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11771.php">Jeff Squyres: "Re: [OMPI users] configure script fails - fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11778.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>Reply:</strong> <a href="11778.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hello!
<br>
<p>Flawed logic: Linux isn't the only system with procfs.
<br>
NetBSD has procfs too and may have /proc/cpuinfo as well,
<br>
but it isn't Linux.
<br>
I didn't check if FreeBSD has &quot;cpuinfo&quot; as well,
<br>
FreeBSD 6.3 doesn't but it's being desupported soon.
<br>
<p>Difference against openmpi-1.5a1r22193 snapshot.
<br>
<p>--- opal/mca/pstat/linux/configure.m4.orig	2009-11-04 17:57:36.000000000 +0300
<br>
+++ opal/mca/pstat/linux/configure.m4	2010-01-14 02:16:08.000000000 +0300
<br>
@@ -23,7 +23,7 @@
<br>
&nbsp;AC_DEFUN([MCA_pstat_linux_CONFIG],[
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;${host}&quot; in
<br>
-   i?86-*|x86_64*|ia64-*|powerpc-*|powerpc64-*|sparc*-*)
<br>
+   i?86-*linux*|x86_64*linux*|ia64-*linux*|powerpc-*linux*|powerpc64-*linux*|sparc*-*linux*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test -r &quot;/proc/cpuinfo&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[pstat_linux_happy=&quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[pstat_linux_happy=&quot;no&quot;])
<br>
<p><p><pre>
-- 
HE CE3OH...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11773.php">Evan Smyth: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11771.php">Jeff Squyres: "Re: [OMPI users] configure script fails - fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11778.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>Reply:</strong> <a href="11778.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
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
