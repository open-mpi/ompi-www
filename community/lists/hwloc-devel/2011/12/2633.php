<?
$subject_val = "[hwloc-devel] very sched_setaffinity support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 05:21:18 2011" -->
<!-- isoreceived="20111214102118" -->
<!-- sent="Wed, 14 Dec 2011 11:21:13 +0100" -->
<!-- isosent="20111214102113" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] very sched_setaffinity support" -->
<!-- id="4EE87899.3090202_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] very sched_setaffinity support<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 05:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2634.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<li><strong>Previous message:</strong> <a href="2632.php">Brice Goglin: "[hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2635.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe reply:</strong> <a href="2635.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe reply:</strong> <a href="2637.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe reply:</strong> <a href="2638.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've been debugging some problems on Redhat 8 with Paul Hargrove and
<br>
here's one problems that remains.
<br>
<p>&nbsp;&nbsp;CC     topology-linux.lo
<br>
../../src/topology-linux.c:71: conflicting types for `sched_setaffinity'
<br>
/usr/include/sched.h:69: previous declaration of `sched_setaffinity'
<br>
../../src/topology-linux.c:104: conflicting types for `sched_getaffinity'
<br>
/usr/include/sched.h:73: previous declaration of `sched_getaffinity'
<br>
make[1]: *** [topology-linux.lo] Error 1
<br>
<p>His sched.h defines the very old prototype of sched_setaffinity (pid,
<br>
len, ulong*). Our current code seems to assume that this prototype won't
<br>
ever appear in sched.h:
<br>
* if cpu_set and cpu_set_s do not exist in sched.h, the system uses this
<br>
ulong* based prototype, that's OK
<br>
* then, if syscall3 exist we do define the function using syscall3, but
<br>
it conflicts with the one in sched.h because we use const void* instead
<br>
of ulong*. That's not OK because we shouldn't do syscall3 if the
<br>
prototype is in the header.
<br>
<p>If we want to solve the conflict, we would have to know if the type of
<br>
the mask in the 3rd argument of the very old sched_setaffinity prototype
<br>
changed over time ? We have const void*, redhat 8 has ulong*
<br>
<p>Instead, I am thinking of doing:
<br>
* change configure to also define a HWLOC_HAVE_SCHED_SETAFFINITY when
<br>
there's a sched_setaffinity in sched.h (recent, old or very old)
<br>
* change src/topology-linux.c to check HWLOC_HAVE_SCHED_SETAFFINITY
<br>
before using syscall3
<br>
* document that HWLOC_HAVE_OLD_SCHED_SETAFFINITY is for old, not for
<br>
&quot;very old&quot; :)
<br>
<p>This is tricky so inputs are welcome.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2634.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<li><strong>Previous message:</strong> <a href="2632.php">Brice Goglin: "[hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2635.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe reply:</strong> <a href="2635.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe reply:</strong> <a href="2637.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe reply:</strong> <a href="2638.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
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
