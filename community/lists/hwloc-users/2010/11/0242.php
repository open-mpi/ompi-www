<?
$subject_val = "Re: [hwloc-users] xmlbuffer test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 08:28:55 2010" -->
<!-- isoreceived="20101105122855" -->
<!-- sent="Fri, 05 Nov 2010 13:28:46 +0100" -->
<!-- isosent="20101105122846" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] xmlbuffer test failure" -->
<!-- id="4CD3F87E.7060101_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimNQb4u6186BYXL078Wjpd2LB+BFN+FEpHRurtr_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-11-05 08:28:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0243.php">Brice Goglin: "[hwloc-users] hwloc@SC10"</a>
<li><strong>Previous message:</strong> <a href="0241.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe in reply to:</strong> <a href="0237.php">ryuuta: "[hwloc-users] xmlbuffer test failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/11/2010 13:26, ryuuta a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the patch.
</span><br>
<span class="quotelev1">&gt; I applied your new patch after undoing the previous patch,
</span><br>
<span class="quotelev1">&gt; rebuilt hwloc, and 'lstopo oroppas.xml' to make sure oroppas.xml
</span><br>
<span class="quotelev1">&gt; contains a single line of &quot;page_type&quot; with the same size and count.
</span><br>
<span class="quotelev1">&gt; I double-checked 'make check' passed without an error.
</span><br>
<span class="quotelev1">&gt; I think it's good to go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the fix!
</span><br>
<p>Thanks for testing, I am pushing this to trunk and the 1.1 branch now.
<br>
<p><span class="quotelev1">&gt; Out of curiosity, how can I check whether my kernel has the hugepage
</span><br>
<span class="quotelev1">&gt; support or not?
</span><br>
<p>Look for CONFIG_HUGE is your config file (either /boot/config-$(uname
<br>
-r) or .config in the kernel source directory
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ryuta
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 5, 2010 at 6:51 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here's a proper patch that should fix your problem without
</span><br>
<span class="quotelev1">&gt;     breaking hugepages support. Can you do what's below again?
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
<span class="quotelev1">&gt;     Le 05/11/2010 08:33, ryuuta a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     OK. I applied the patch and rebuilt hwloc.
</span><br>
<span class="quotelev2">&gt;&gt;     Then, I did 'lstopo oroppas' to produce oroppas.xml.
</span><br>
<span class="quotelev2">&gt;&gt;     The output xml file only contains a single &quot;page_type&quot; lne as you
</span><br>
<span class="quotelev2">&gt;&gt;     indicated.
</span><br>
<span class="quotelev2">&gt;&gt;     And I ran 'make check' to confirm all the tests passed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thank you for the fixes!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Ryuta
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Fri, Nov 5, 2010 at 4:10 PM, Brice Goglin
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Interesting, you don't have any hugepage information, it's
</span><br>
<span class="quotelev2">&gt;&gt;         probably disabled in the kernel. Can you apply th attached
</span><br>
<span class="quotelev2">&gt;&gt;         patch and check that the XML output only contains a single
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;page_type&quot; line and that it looks valid ? It should be
</span><br>
<span class="quotelev2">&gt;&gt;         something like
</span><br>
<span class="quotelev2">&gt;&gt;           &lt;page_type size=&quot;4096&quot; count=&quot;256834&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         If so, then rerun make check again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         thanks,
</span><br>
<span class="quotelev2">&gt;&gt;         Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Le 05/11/2010 07:55, ryuuta a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Here they are.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks for the diagnosis.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Ryuta
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Fri, Nov 5, 2010 at 3:46 PM, Brice Goglin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Looks like you have some unexpected hugepage
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             information. Not sure it's the cause of the XML problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             but we need to debug this too. Can you send the .tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             and .output file that hwloc-gather-topology.sh generates ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             In the meantime, I need to change this test so as to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             show the difference between the XML exports when this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             make check test fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Le 05/11/2010 07:35, ryuuta a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Here you go.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On Fri, Nov 5, 2010 at 3:07 PM, Brice Goglin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Looks like there's something specific to your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 machine. Can you send the XML output of lstopo ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Le 05/11/2010 05:41, ryuuta a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 I'd like to report the failure of the one of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 tests run by 'make check':
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 exported to buffer 0x8546408 length 3070
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 re-exported to buffer 0x854ce70 length 3047
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 lt-xmlbuffer: ../../hwloc/tests/xmlbuffer.c:36:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 main: Assertion `size1 == size2' failed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 /bin/sh: line 5: 14531 Aborted                
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 ${dir}$tst
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 FAIL: xmlbuffer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 ========================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 1 of 19 tests failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Please report to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 ========================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 I'm using gcc-4.5.1, libxml2-2.7.7, and zlib-1.2.5.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 The revision of hwloc checked out from svn is: 2702
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Ryuta
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0243.php">Brice Goglin: "[hwloc-users] hwloc@SC10"</a>
<li><strong>Previous message:</strong> <a href="0241.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe in reply to:</strong> <a href="0237.php">ryuuta: "[hwloc-users] xmlbuffer test failure"</a>
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
