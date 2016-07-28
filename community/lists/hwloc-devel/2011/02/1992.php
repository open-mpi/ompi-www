<?
$subject_val = "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 21:44:55 2011" -->
<!-- isoreceived="20110223024455" -->
<!-- sent="Tue, 22 Feb 2011 20:43:05 -0600" -->
<!-- isosent="20110223024305" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1" -->
<!-- id="AANLkTimv+ogEPQAftyWJ0siEDDcdTZC+gHAPctvTEJB8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D04EA48D-C780-484E-8ADA-B9E6F1EC3C8F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 21:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1993.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1991.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3202)"</a>
<li><strong>In reply to:</strong> <a href="1989.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1993.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 22, 2011 at 6:24 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Done!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we still need that info from Brad.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (just in case he's only lightly reading this thread...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Attached are two sets of info...one for the case when SMT
<br>
(Simultaneous MultiThreading) is off, and the other for when it is on.
<br>
<p>This is on a 32-core Power6 system running RHEL5.4 with a 2.6.18 kernel.
<br>
<p>Thanks,
<br>
--Brad
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2011, at 7:05 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres, le Wed 23 Feb 2011 00:20:42 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 22, 2011, at 6:02 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note the &quot;/* TODO: how to report? */&quot; comment in the code: we
</span><br>
<span class="quotelev1">&gt; definitely
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _want_ to get users to see the warning and report it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ah, ok.  Could we make that message a little more clear, then?  Maybe
</span><br>
<span class="quotelev1">&gt; something like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That'd be much more clear yes :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Samuel
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1992/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1992/hwloc-gather-topo-smtoff.output">hwloc-gather-topo-smtoff.output</a>
</ul>
<!-- attachment="hwloc-gather-topo-smtoff.output" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1992/hwloc-gather-topo-smtoff.tar.bz2">hwloc-gather-topo-smtoff.tar.bz2</a>
</ul>
<!-- attachment="hwloc-gather-topo-smtoff.tar.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1992/hwloc-gather-topo-smton.output">hwloc-gather-topo-smton.output</a>
</ul>
<!-- attachment="hwloc-gather-topo-smton.output" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1992/hwloc-gather-topo-smton.tar.bz2">hwloc-gather-topo-smton.tar.bz2</a>
</ul>
<!-- attachment="hwloc-gather-topo-smton.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1993.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1991.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3202)"</a>
<li><strong>In reply to:</strong> <a href="1989.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1993.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
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
