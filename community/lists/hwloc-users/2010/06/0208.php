<?
$subject_val = "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 12:54:15 2010" -->
<!-- isoreceived="20100622165415" -->
<!-- sent="Tue, 22 Jun 2010 18:35:44 +0200" -->
<!-- isosent="20100622163544" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D" -->
<!-- id="201006221835.45326.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100621235026.GJ5207_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 12:35:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0209.php">Norman Lo: "[hwloc-users] hwloc on cray"</a>
<li><strong>Previous message:</strong> <a href="0207.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, June 22, 2010 01:50:26 am Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Jirka Hladky, le Mon 21 Jun 2010 23:40:14 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; processor	: 0
</span><br>
<span class="quotelev2">&gt; &gt; &lt;nothing&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; processor	: 1
</span><br>
<span class="quotelev2">&gt; &gt; physical id	: 0
</span><br>
<span class="quotelev2">&gt; &gt; siblings	: 2
</span><br>
<span class="quotelev2">&gt; &gt; core id		: 1
</span><br>
<span class="quotelev2">&gt; &gt; cpu cores	: 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks bogus indeed.
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
<p><p>Hi Samuel,
<br>
<p>this is indeed kernel bug. It seems to affect only Pentium-D cpus. It's fixed in 
<br>
the new kernel. 
<br>
<p>I work with kernel developers to back-port the fix into the older kernels. 
<br>
(RHEL 4.8 and RHEL5.5)
<br>
<p>FYI, hwloc works on RHEL4 (kernel 2.6.9) just fine. It does not report cache 
<br>
information but otherwise CPU topology is reported correctly! :-) It's 
<br>
impressive given that it's based only on /proc/cpuinfo (there are no 
<br>
/sys/devices/system/cpu/*
<br>
entries on this old kernel version).
<br>
<p>Thanks
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0209.php">Norman Lo: "[hwloc-users] hwloc on cray"</a>
<li><strong>Previous message:</strong> <a href="0207.php">Jirka Hladky: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D"</a>
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
