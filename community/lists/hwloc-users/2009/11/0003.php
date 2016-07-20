<?
$subject_val = "Re: [hwloc-users] Not able to compile an hwloc program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 18:59:55 2009" -->
<!-- isoreceived="20091120235955" -->
<!-- sent="Sat, 21 Nov 2009 00:59:48 +0100" -->
<!-- isosent="20091120235948" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Not able to compile an hwloc program" -->
<!-- id="20091120235948.GQ4986_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="135018.27449.qm_at_web8906.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Not able to compile an hwloc program<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-20 18:59:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2009/12/0004.php">Jeff Squyres: "[hwloc-users] Hardware Locality (hwloc) v0.9.3 released"</a>
<li><strong>Previous message:</strong> <a href="0002.php">Sanket: "[hwloc-users] Not able to compile an hwloc program"</a>
<li><strong>In reply to:</strong> <a href="0002.php">Sanket: "[hwloc-users] Not able to compile an hwloc program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sanket, le Sat 21 Nov 2009 05:24:04 +0530, a &#233;crit :
<br>
<span class="quotelev1">&gt; cc hwloc_bind.c $(CFLAGS) -o hwloc-hello $(LDLIBS)
</span><br>
<span class="quotelev1">&gt; -bash: CFLAGS: command not found
</span><br>
<span class="quotelev1">&gt; -bash: LDLIBS: command not found
</span><br>
<p>Should be ${CFLAGS} and ${LDLIBS}, not with parentheses (which are
<br>
make-ish). Note that once it's compiled, you need to define the
<br>
LD_LIBRARY_PATH environment variable to the place where libhwloc.so.0
<br>
got installed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2009/12/0004.php">Jeff Squyres: "[hwloc-users] Hardware Locality (hwloc) v0.9.3 released"</a>
<li><strong>Previous message:</strong> <a href="0002.php">Sanket: "[hwloc-users] Not able to compile an hwloc program"</a>
<li><strong>In reply to:</strong> <a href="0002.php">Sanket: "[hwloc-users] Not able to compile an hwloc program"</a>
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
