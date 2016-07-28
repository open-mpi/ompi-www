<?
$subject_val = "Re: [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 18:09:38 2010" -->
<!-- isoreceived="20100618220938" -->
<!-- sent="Sat, 19 Jun 2010 00:09:27 +0200" -->
<!-- isosent="20100618220927" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc and rpath" -->
<!-- id="201006190009.28084.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C1BD4C8.1010001_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc and rpath<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 18:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0171.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0169.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0171.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0171.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>On Friday, June 18, 2010 10:19:20 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 18/06/2010 22:09, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I'm in process to pack hwloc into rpm for Fedora.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great, thanks!
</span><br>
hwloc deserves it to have a rpm! :-) It's a very nice tool.
<br>
<p><span class="quotelev2">&gt; &gt; <a href="http://wiki.debian.org/RpathIssue">http://wiki.debian.org/RpathIssue</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It says that a recent libtool &quot;no longer sets RPATH for any directories
</span><br>
<span class="quotelev1">&gt; in the dynamic linker search path&quot;.
</span><br>
<span class="quotelev1">&gt; Any idea why the above wouldn't be true in hwloc?
</span><br>
I'm not quite sure. Check this:
<br>
<p><a href="http://sourceware.org/automake/automake.html#A-Shared-Library">http://sourceware.org/automake/automake.html#A-Shared-Library</a>
<br>
==============================================
<br>
A package can build and install such a library along with other programs that 
<br>
use it. This dependency should be specified using LDADD. The following example 
<br>
builds a program named hello that is linked with libgettext.la. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lib_LTLIBRARIES = libgettext.la
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgettext_la_SOURCES = gettext.c ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bin_PROGRAMS = hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hello_SOURCES = hello.c ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hello_LDADD = libgettext.la
<br>
==============================================
<br>
<p>find ./ -name Makefile.am -exec grep bin_PROGRAMS {} \+
<br>
./utils/Makefile.am:bin_PROGRAMS = lstopo hwloc-calc hwloc-bind hwloc-distrib
<br>
<p>Based on the manual above I think you should have
<br>
<p>lstopo_LDADD = libhwloc.la
<br>
hwloc-calc_LDADD = libhwloc.la
<br>
hwloc-bind_LDADD = libhwloc.la
<br>
hwloc-distrib_LDADD = libhwloc.la
<br>
<p>in ./utils/Makefile.am
<br>
=======================================
<br>
# Only build the utilities if we're building in standalone mode
<br>
if HWLOC_BUILD_UTILS
<br>
bin_PROGRAMS = lstopo hwloc-calc hwloc-bind hwloc-distrib
<br>
lstopo_LDADD = libhwloc.la  ---&gt;added
<br>
hwloc-calc_LDADD = libhwloc.la ---&gt;added
<br>
hwloc-bind_LDADD = libhwloc.la ---&gt;added 
<br>
hwloc-distrib_LDADD = libhwloc.la ---&gt;added
<br>
endif
<br>
========================================
<br>
<p>Please gave it a try. 
<br>
<p>Thanks
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0170/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0171.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0169.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0171.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0171.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
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
