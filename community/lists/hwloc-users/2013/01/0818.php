<?
$subject_val = "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 14:06:28 2013" -->
<!-- isoreceived="20130117190628" -->
<!-- sent="Thu, 17 Jan 2013 20:05:12 +0100" -->
<!-- isosent="20130117190512" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler" -->
<!-- id="ee030021-b5d3-46e4-a399-ffcd19bf8d49_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAGKz=uKZoBpACXTd5kzjvk+0ABROTmFyLXXmo0RKh0-4z_ut3w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 14:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Previous message:</strong> <a href="0817.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0815.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does Cray fix such bugs quickly usually? If so, no need to change hwloc. If not, I'll need somebody to test the change on other cray platforms and compiler versions.
<br>
Brice
<br>
<p><p><p>Jeff Hammond &lt;jhammond_at_[hidden]&gt; a &#195;&#169;crit&#194;&#160;:
<br>
<p><span class="quotelev1">&gt;This is a bug in the Cray compiler.  They cannot and should not set
</span><br>
<span class="quotelev1">&gt;the __GNUC__ flag unless they are fully compatible with GCC.  There
</span><br>
<span class="quotelev1">&gt;are many ways to define &quot;fully compatible&quot; but at a minimum, code that
</span><br>
<span class="quotelev1">&gt;compiles with GCC needs to compile with any compiler that elects to
</span><br>
<span class="quotelev1">&gt;define __GNUC__.  It is prudent to impose a higher standard in some
</span><br>
<span class="quotelev1">&gt;cases but that's not pertinent to this discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Lots of vendor compilers pretend to be __GNUC__ for any number of
</span><br>
<span class="quotelev1">&gt;reasons.  I believe that they are all wrong for doing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Regarding this specific issue, there is nothing wrong with hwloc and I
</span><br>
<span class="quotelev1">&gt;don't know why anyone should bother trying to fix Cray's problem, but
</span><br>
<span class="quotelev1">&gt;I suspect that pragmatism will prevail, as it appears to have in the
</span><br>
<span class="quotelev1">&gt;case of Boost
</span><br>
<span class="quotelev1">&gt;(<a href="http://www.boost.org/doc/libs/1_52_0/boost/config/select_platform_config.hpp">http://www.boost.org/doc/libs/1_52_0/boost/config/select_platform_config.hpp</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'll reproduce this locally and contact Cray directly about fixing
</span><br>
<span class="quotelev1">&gt;this on their end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Thu, Jan 17, 2013 at 12:19 PM, Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-1.6.1rc2 fails to build with the Cray compiler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cray C : Version 8.1.2  Thu Jan 17, 2013  12:18:54
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error message is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   CC       bitmap.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC-147 craycc: ERROR
</span><br>
<span class="quotelev2">&gt;&gt;   Declaration is incompatible with &quot;int ffsl(long)&quot; (declared at line
</span><br>
<span class="quotelev1">&gt;526 of
</span><br>
<span class="quotelev2">&gt;&gt;           &quot;/opt/cray/xe-sysroot/4.1.20/usr/include/string.h&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Yes, there is no line number with the error message.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to be caused by the fact that the Cray compiler sets
</span><br>
<span class="quotelev1">&gt;__GNUC__,
</span><br>
<span class="quotelev2">&gt;&gt; but is not quite compatible. A work-around is to change line 56 of
</span><br>
<span class="quotelev2">&gt;&gt; include/private/misc.h from
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #elif defined(__GNUC__) &amp;&amp; !defined(_CRAYC)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Hammond
</span><br>
<span class="quotelev1">&gt;Argonne Leadership Computing Facility
</span><br>
<span class="quotelev1">&gt;University of Chicago Computation Institute
</span><br>
<span class="quotelev1">&gt;jhammond_at_[hidden] / (630) 252-5381
</span><br>
<span class="quotelev1">&gt;<a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
</span><br>
<span class="quotelev1">&gt;<a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Previous message:</strong> <a href="0817.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0815.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
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
