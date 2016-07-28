<?
$subject_val = "Re: [OMPI devel] test/class/opal_fifo failure on ppc64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 10:22:26 2015" -->
<!-- isoreceived="20150108152226" -->
<!-- sent="Thu, 8 Jan 2015 08:22:24 -0700" -->
<!-- isosent="20150108152224" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] test/class/opal_fifo failure on ppc64" -->
<!-- id="20150108152224.GJ1467_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150108132905.GD23217_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] test/class/opal_fifo failure on ppc64<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 10:22:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16762.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>Previous message:</strong> <a href="16760.php">Adrian Reber: "[OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>In reply to:</strong> <a href="16760.php">Adrian Reber: "[OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16762.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will take a look if you can give me ssh access.
<br>
<p>-Nathan
<br>
<p>On Thu, Jan 08, 2015 at 02:29:05PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; I am trying to build OMPI git master on ppc64 (PPC970MP) and
</span><br>
<span class="quotelev1">&gt; test/class/opal_fifo fails during make check most of the time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [adrian_at_bimini class]$ ./opal_fifo
</span><br>
<span class="quotelev1">&gt; Single thread test. Time: 0 s 99714 us 99 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 0 s 347577 us 347 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 11 s 490743 us 11490 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 11 s 567542 us 11567 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 11 s 655924 us 11655 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 11 s 786925 us 11786 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 11 s 931230 us 11931 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 12 s 11617 us 12011 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 12 s 63224 us 12063 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 12 s 65844 us 12065 nsec/poppush
</span><br>
<span class="quotelev1">&gt;  Failure :  fifo push/pop multi-threaded with atomics
</span><br>
<span class="quotelev1">&gt; All threads finished. Thread count: 8 Time: 12 s 66103 us 1508 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Exhaustive atomics thread finished. Popped 11982 items. Time: 3 s 700703 us 308855 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Exhaustive atomics thread finished. Popped 12171 items. Time: 3 s 759974 us 308928 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Exhaustive atomics thread finished. Popped 11593 items. Time: 3 s 787227 us 326682 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Exhaustive atomics thread finished. Popped 11079 items. Time: 3 s 786468 us 341769 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Exhaustive atomics thread finished. Popped 16467 items. Time: 4 s 7891 us 243389 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Exhaustive atomics thread finished. Popped 11097 items. Time: 4 s 68897 us 366666 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Exhaustive atomics thread finished. Popped 25583 items. Time: 4 s 89074 us 159835 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Exhaustive atomics thread finished. Popped 22092 items. Time: 4 s 82373 us 184789 nsec/poppush
</span><br>
<span class="quotelev1">&gt;  Failure :  fifo push/pop multi-threaded with atomics when there are insufficient items
</span><br>
<span class="quotelev1">&gt; All threads finished. Thread count: 8 Time: 4 s 93369 us 511 nsec/poppush
</span><br>
<span class="quotelev1">&gt;  Failure :  fifo pop all items
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_fifo_t (3 of 8 failed)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had a look at the memory barriers in opal/include/opal/sys/powerpc/atomic.h
</span><br>
<span class="quotelev1">&gt; and from what little I remember about PPC64 those look correct:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define MB()  __asm__ __volatile__ (&quot;sync&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; #define RMB() __asm__ __volatile__ (&quot;lwsync&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; #define WMB() __asm__ __volatile__ (&quot;eieio&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The system is running Fedora 21 with gcc 4.9.2 and if this platform
</span><br>
<span class="quotelev1">&gt; is still relevant I can provide SSH access to the machine
</span><br>
<span class="quotelev1">&gt; for further debugging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16760.php">http://www.open-mpi.org/community/lists/devel/2015/01/16760.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16761/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16762.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>Previous message:</strong> <a href="16760.php">Adrian Reber: "[OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<li><strong>In reply to:</strong> <a href="16760.php">Adrian Reber: "[OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16762.php">Nathan Hjelm: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
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
