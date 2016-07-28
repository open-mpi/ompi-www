<?
$subject_val = "Re: [hwloc-devel] gather-topology.sh and rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 11:59:14 2010" -->
<!-- isoreceived="20101104155914" -->
<!-- sent="Thu, 4 Nov 2010 16:59:05 +0100" -->
<!-- isosent="20101104155905" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] gather-topology.sh and rpm" -->
<!-- id="201011041659.05606.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CCEBE01.3040708_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] gather-topology.sh and rpm<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 11:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1415.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="1413.php">Jeff Squyres: "[hwloc-devel] doxygen CSS change?"</a>
<li><strong>In reply to:</strong> <a href="1406.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1418.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1418.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, November 01, 2010 02:17:53 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 01/11/2010 13:22, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Thanks! Please let me know where I can download tarball for testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need a tarball containing svn r2679 or later. Nightly snapshots are
</span><br>
<span class="quotelev1">&gt; available:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/software/hwloc/nightly/">http://www.open-mpi.org/software/hwloc/nightly/</a>
</span><br>
<span class="quotelev1">&gt; There are updated at 9pm EDT from what I see in the logs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BTW, what is the status of 1.1? Any plan to release it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we're ready for rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p><p>Hi Brice,
<br>
<p>I have tested
<br>
<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.2a1r2694.tar.gz">http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.2a1r2694.tar.gz</a>
<br>
<p>It looks good, no trouble.
<br>
<p>Using rpmbuild I got
<br>
/usr/bin/hwloc-gather-topology.sh
<br>
as expected! Great!
<br>
<p>Couple of comments:
<br>
<p>1) Could we remove following line
<br>
abs_top_builddir=&quot;/home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694&quot;
<br>
during make install ?
<br>
<p>It's not used anymore. It's just to make the code look nicer.
<br>
<p>2) $hwloc-gather-topology.sh /tmp/A/hwloc
<br>
works nicely, too.
<br>
<p>However, if I do something nasty like
<br>
$touch /tmp/c
<br>
<p>/tmp/c is a regular file
<br>
<p>then
<br>
<p>$hwloc-gather-topology.sh /tmp/c/hwloc
<br>
mkdir: cannot create directory `/tmp/c': File exists
<br>
mv: accessing `/tmp/c/hwloc.tar.bz2': Not a directory
<br>
Hierarchy gathered in /tmp/c/hwloc.tar.bz2 and kept in 
<br>
/tmp/tmp.anx1tIvmak/hwloc/
<br>
./hwloc-gather-topology.sh: line 75: /tmp/c/hwloc.output: Not a directory
<br>
Expected topology output stored in /tmp/c/hwloc.output
<br>
<p>which is nonsense. Neither /tmp/c/hwloc.tar.bz2 nor   /tmp/c/hwloc.output 
<br>
exists. It can be fixed easily by replacing
<br>
<p>&nbsp;mkdir -p &quot;$dirname&quot;
<br>
<p>with
<br>
<p>if ! mkdir -p &quot;$dirname&quot;
<br>
then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit 1
<br>
fi
<br>
<p>3) Whenever I run lstopo using X output and I close lstopo window I will get
<br>
<p>$lstopo
<br>
XIO:  fatal IO error 11 (Resource temporarily unavailable) on X server &quot;:0.0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;after 121 requests (121 known processed) with 0 events remaining.
<br>
<p>Is there something wrong with my X-server settings? Can it be suppressed?
<br>
<p>I'm sorry to always bring up some complains.... These are not real issues. I 
<br>
have to say that I really really like hwloc and I appreciate how quickly you 
<br>
address any issues. I'm trying to spread a word among users so that there are 
<br>
aware of this great tool.
<br>
<p>GOOD NEWS - hwloc will be included in RHEL 6.1 as official (supported) package. 
<br>
AMD has asked for it.
<br>
<p>Keep up the GREAT work!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1415.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="1413.php">Jeff Squyres: "[hwloc-devel] doxygen CSS change?"</a>
<li><strong>In reply to:</strong> <a href="1406.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1418.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1418.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
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
