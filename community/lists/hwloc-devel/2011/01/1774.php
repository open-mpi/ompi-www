<?
$subject_val = "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 17:52:01 2011" -->
<!-- isoreceived="20110104225201" -->
<!-- sent="Tue, 4 Jan 2011 23:51:55 +0100" -->
<!-- isosent="20110104225155" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?" -->
<!-- id="AANLkTi=yK1_E4bVDmeVnWxTV6Mwrv1NB=hz+Aqe1srQC_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20110103181953.GA5121_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 17:51:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1775.php">Samuel Thibault: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Previous message:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<li><strong>In reply to:</strong> <a href="1765.php">Samuel Thibault: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1775.php">Samuel Thibault: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>I got a crash course on s390.
<br>
<p>The main goal of the guys around emerging Fedora's s390 distribution is to
<br>
have as many packages as possible available for s390 to avoid dependency
<br>
problems. They are trying to port all x86_64 packages to s390. They do it
<br>
even for packages which are not particuarly usefull on s390. And this seems
<br>
to be the case with hwloc.
<br>
<p>They have an access to mainfraim with 18 CPUs and 128 GB of RAM. However,
<br>
the mainframe is usually divided into the smaller partitions ( LPAR) on
<br>
which virtual machines are running.
<br>
<p>In this particular case they have tested hwloc on the virtual machine
<br>
running on partition with 2GB of RAM and 4 CPUs of which only 1 was online.
<br>
This is certainly not a typical use-case for hwloc. Nevertheless, great news
<br>
is that hwloc is running just fine on this box! :-)
<br>
<p>FYI, s390 does not support NUMA (to answer the question I have posted
<br>
here:-) )
<br>
<p>For completeness I have attached output of hwloc-gather-topology as well in
<br>
case somebody would like to have a look.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p><p><p><p>On Mon, Jan 3, 2011 at 7:19 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Jiri Hladky, le Mon 03 Jan 2011 18:14:16 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I would like to check out if hwloc supports IBM's s390 architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hwloc's support on Linux is mostly linux-dependant. With the /sys stuff
</span><br>
<span class="quotelev1">&gt; being hardware-independant, it should in principle &quot;just work&quot; on s390,
</span><br>
<span class="quotelev1">&gt; provided the s390-specific part announces proper things in /sys. We
</span><br>
<span class="quotelev1">&gt; don't have our own s390, so we couldn't test. The Debian s390 testboxes
</span><br>
<span class="quotelev1">&gt; only announce 2 processors, so there's not much topology to discover
</span><br>
<span class="quotelev1">&gt; there, but it basically works, announcing the 2 processors :) I wonder
</span><br>
<span class="quotelev1">&gt; what would be discovered on bigger machines. In any case, if you have
</span><br>
<span class="quotelev1">&gt; any chance of running gather-topology on such beast, let us know :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1774/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1774/s390.tar.bz2">s390.tar.bz2</a>
</ul>
<!-- attachment="s390.tar.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1774/s390.output">s390.output</a>
</ul>
<!-- attachment="s390.output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1775.php">Samuel Thibault: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Previous message:</strong> <a href="1773.php">Jeff Squyres: "[hwloc-devel] More memory binding questions"</a>
<li><strong>In reply to:</strong> <a href="1765.php">Samuel Thibault: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1775.php">Samuel Thibault: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
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
