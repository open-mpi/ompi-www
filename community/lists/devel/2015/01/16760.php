<?
$subject_val = "[OMPI devel] test/class/opal_fifo failure on ppc64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 08:29:07 2015" -->
<!-- isoreceived="20150108132907" -->
<!-- sent="Thu, 8 Jan 2015 14:29:05 +0100" -->
<!-- isosent="20150108132905" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] test/class/opal_fifo failure on ppc64" -->
<!-- id="20150108132905.GD23217_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] test/class/opal_fifo failure on ppc64<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 08:29:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16761.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>Previous message:</strong> <a href="16759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16761.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>Reply:</strong> <a href="16761.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>Reply:</strong> <a href="16762.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build OMPI git master on ppc64 (PPC970MP) and
<br>
test/class/opal_fifo fails during make check most of the time.
<br>
<p>[adrian_at_bimini class]$ ./opal_fifo
<br>
Single thread test. Time: 0 s 99714 us 99 nsec/poppush
<br>
Atomics thread finished. Time: 0 s 347577 us 347 nsec/poppush
<br>
Atomics thread finished. Time: 11 s 490743 us 11490 nsec/poppush
<br>
Atomics thread finished. Time: 11 s 567542 us 11567 nsec/poppush
<br>
Atomics thread finished. Time: 11 s 655924 us 11655 nsec/poppush
<br>
Atomics thread finished. Time: 11 s 786925 us 11786 nsec/poppush
<br>
Atomics thread finished. Time: 11 s 931230 us 11931 nsec/poppush
<br>
Atomics thread finished. Time: 12 s 11617 us 12011 nsec/poppush
<br>
Atomics thread finished. Time: 12 s 63224 us 12063 nsec/poppush
<br>
Atomics thread finished. Time: 12 s 65844 us 12065 nsec/poppush
<br>
&nbsp;Failure :  fifo push/pop multi-threaded with atomics
<br>
All threads finished. Thread count: 8 Time: 12 s 66103 us 1508 nsec/poppush
<br>
Exhaustive atomics thread finished. Popped 11982 items. Time: 3 s 700703 us 308855 nsec/poppush
<br>
Exhaustive atomics thread finished. Popped 12171 items. Time: 3 s 759974 us 308928 nsec/poppush
<br>
Exhaustive atomics thread finished. Popped 11593 items. Time: 3 s 787227 us 326682 nsec/poppush
<br>
Exhaustive atomics thread finished. Popped 11079 items. Time: 3 s 786468 us 341769 nsec/poppush
<br>
Exhaustive atomics thread finished. Popped 16467 items. Time: 4 s 7891 us 243389 nsec/poppush
<br>
Exhaustive atomics thread finished. Popped 11097 items. Time: 4 s 68897 us 366666 nsec/poppush
<br>
Exhaustive atomics thread finished. Popped 25583 items. Time: 4 s 89074 us 159835 nsec/poppush
<br>
Exhaustive atomics thread finished. Popped 22092 items. Time: 4 s 82373 us 184789 nsec/poppush
<br>
&nbsp;Failure :  fifo push/pop multi-threaded with atomics when there are insufficient items
<br>
All threads finished. Thread count: 8 Time: 4 s 93369 us 511 nsec/poppush
<br>
&nbsp;Failure :  fifo pop all items
<br>
SUPPORT: OMPI Test failed: opal_fifo_t (3 of 8 failed)
<br>
<p>I had a look at the memory barriers in opal/include/opal/sys/powerpc/atomic.h
<br>
and from what little I remember about PPC64 those look correct:
<br>
<p>#define MB()  __asm__ __volatile__ (&quot;sync&quot; : : : &quot;memory&quot;)
<br>
#define RMB() __asm__ __volatile__ (&quot;lwsync&quot; : : : &quot;memory&quot;)
<br>
#define WMB() __asm__ __volatile__ (&quot;eieio&quot; : : : &quot;memory&quot;)
<br>
<p>The system is running Fedora 21 with gcc 4.9.2 and if this platform
<br>
is still relevant I can provide SSH access to the machine
<br>
for further debugging.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16761.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>Previous message:</strong> <a href="16759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16761.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>Reply:</strong> <a href="16761.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>Reply:</strong> <a href="16762.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
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
