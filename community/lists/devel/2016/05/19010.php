<?
$subject_val = "Re: [OMPI devel] Use non-cpu frequency for timers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 13:47:16 2016" -->
<!-- isoreceived="20160520174716" -->
<!-- sent="Fri, 20 May 2016 10:47:11 -0700" -->
<!-- isosent="20160520174711" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use non-cpu frequency for timers" -->
<!-- id="CAAvDA14BLa0jNc2MEOuv8EdYAGMPy_6Z5Dt6WuczjzyLbKE5KA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAK_Rsw0jvFWX2DFy2oE8W5+YCE6WKx7VMViLRYTmN-=7yrW9qw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use non-cpu frequency for timers<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-20 13:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19011.php">Ralph Castain: "[OMPI devel] v1.10.3rc2 ready for final testing"</a>
<li><strong>Previous message:</strong> <a href="19009.php">George Bosilca: "Re: [OMPI devel] Datatype flag?"</a>
<li><strong>In reply to:</strong> <a href="19006.php">Abhishek Joshi: "[OMPI devel] Use non-cpu frequency for timers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abhishek,
<br>
<p>That frequency variable doesn't need to be the CPU frequency.
<br>
<p>If you look at
<br>
opal/mca/timer/linux/timer_linux_component.c:opal_timer_linux_find_freq()
<br>
you will see the initialization for opal_timer_linux_freq.
<br>
In the case of PPC the time stamp counter runs at a frequency, distinct
<br>
from that of the CPU, known as the timebase.
<br>
The code checks for that setting in /proc/cpuinfo before looking for the
<br>
cpu frequency (also in /proc/cpuinfo).
<br>
Of course, something like sysctl() or ioctl() might be needed on some
<br>
platforms to find the same information.
<br>
<p>-Paul
<br>
<p>On Fri, May 20, 2016 at 2:25 AM, Abhishek Joshi &lt;abhishek.joshi_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In amd64, we have rdtsc instruction which uses a timer updated at cpu
</span><br>
<span class="quotelev1">&gt; frequency.  The frequency is given by variable, opal_timer_linux_freq which
</span><br>
<span class="quotelev1">&gt; is the cpu frequency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Consider the case where a timer updated at non-cpu frequency is to be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question: In this case, how do we specify the frequency of the timer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Abhishek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19006.php">http://www.open-mpi.org/community/lists/devel/2016/05/19006.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19011.php">Ralph Castain: "[OMPI devel] v1.10.3rc2 ready for final testing"</a>
<li><strong>Previous message:</strong> <a href="19009.php">George Bosilca: "Re: [OMPI devel] Datatype flag?"</a>
<li><strong>In reply to:</strong> <a href="19006.php">Abhishek Joshi: "[OMPI devel] Use non-cpu frequency for timers"</a>
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
