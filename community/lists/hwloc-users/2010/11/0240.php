<?
$subject_val = "Re: [hwloc-users] xmlbuffer test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 03:11:02 2010" -->
<!-- isoreceived="20101105071102" -->
<!-- sent="Fri, 05 Nov 2010 08:10:49 +0100" -->
<!-- isosent="20101105071049" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] xmlbuffer test failure" -->
<!-- id="4CD3ADF9.1070708_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=H09EPzDO9ZUGfFLfnySEqefGSRr4xwrp-WBmP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] xmlbuffer test failure<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 03:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0241.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Previous message:</strong> <a href="0239.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe in reply to:</strong> <a href="0237.php">ryuuta: "[hwloc-users] xmlbuffer test failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0241.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Reply:</strong> <a href="0241.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting, you don't have any hugepage information, it's probably
<br>
disabled in the kernel. Can you apply th attached patch and check that
<br>
the XML output only contains a single &quot;page_type&quot; line and that it looks
<br>
valid ? It should be something like
<br>
&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;256834&quot;/&gt;
<br>
If so, then rerun make check again.
<br>
<p>thanks,
<br>
Brice
<br>
<p><p><p>Le 05/11/2010 07:55, ryuuta a &#233;crit :
<br>
<span class="quotelev1">&gt; Here they are.
</span><br>
<span class="quotelev1">&gt; Thanks for the diagnosis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ryuta
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 5, 2010 at 3:46 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Looks like you have some unexpected hugepage information. Not sure
</span><br>
<span class="quotelev1">&gt;     it's the cause of the XML problem, but we need to debug this too.
</span><br>
<span class="quotelev1">&gt;     Can you send the .tar.bz2 and .output file that
</span><br>
<span class="quotelev1">&gt;     hwloc-gather-topology.sh generates ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In the meantime, I need to change this test so as to show the
</span><br>
<span class="quotelev1">&gt;     difference between the XML exports when this make check test fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     thanks,
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 05/11/2010 07:35, ryuuta a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Here you go.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Fri, Nov 5, 2010 at 3:07 PM, Brice Goglin
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Looks like there's something specific to your machine. Can
</span><br>
<span class="quotelev2">&gt;&gt;         you send the XML output of lstopo ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         thanks
</span><br>
<span class="quotelev2">&gt;&gt;         Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Le 05/11/2010 05:41, ryuuta a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I'd like to report the failure of the one of the tests run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         by 'make check':
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         exported to buffer 0x8546408 length 3070
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         re-exported to buffer 0x854ce70 length 3047
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         lt-xmlbuffer: ../../hwloc/tests/xmlbuffer.c:36: main:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Assertion `size1 == size2' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /bin/sh: line 5: 14531 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         FAIL: xmlbuffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         1 of 19 tests failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I'm using gcc-4.5.1, libxml2-2.7.7, and zlib-1.2.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         The revision of hwloc checked out from svn is: 2702
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Ryuta
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0241.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Previous message:</strong> <a href="0239.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe in reply to:</strong> <a href="0237.php">ryuuta: "[hwloc-users] xmlbuffer test failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0241.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Reply:</strong> <a href="0241.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
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
