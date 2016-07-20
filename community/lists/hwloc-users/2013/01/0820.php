<?
$subject_val = "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 14:21:51 2013" -->
<!-- isoreceived="20130117192151" -->
<!-- sent="Thu, 17 Jan 2013 13:21:26 -0600" -->
<!-- isosent="20130117192126" -->
<!-- name="Jeff Hammond" -->
<!-- email="jhammond_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler" -->
<!-- id="CAGKz=uL0TSBiavUKBjsECzpL9bqh3kd53DDBcmcmKOHMcoAYqw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjcNNCSFxNOhvbwnS2Bi_4vd16LaOyT7U31C+R50VeQzNQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jhammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 14:21:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0821.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Previous message:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0821.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0821.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was not able to reproduce the behavior described by Erik on the
<br>
NERSC Cray XE6, which is to say, Cray C does not claim to be GCC
<br>
there.  As I can't verify the problem, I can't report it.
<br>
<p>I have no experience with Cray bug fix latency but I suspect this
<br>
needs to be worked-around (I refuse to call it a fix since there is no
<br>
problem in hwloc) because Cray won't backport whatever fix they
<br>
implement to all their compilers that users might come across.
<br>
<p>Jeff
<br>
<p>On Thu, Jan 17, 2013 at 1:15 PM, Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have no idea how fast Cray acts in such a case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 17, 2013 at 2:05 PM, Brice Goglin &lt;brice.goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does Cray fix such bugs quickly usually? If so, no need to change hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; If not, I'll need somebody to test the change on other cray platforms and
</span><br>
<span class="quotelev2">&gt;&gt; compiler versions.
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond &lt;jhammond_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a bug in the Cray compiler.  They cannot and should not set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the __GNUC__ flag unless they are fully compatible with GCC.  There
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are many ways to define &quot;fully compatible&quot; but at a minimum, code that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiles with GCC needs to compile with any compiler that elects to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; define __GNUC__.  It is prudent to impose a higher standard in some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cases but that's not pertinent to this discussion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lots of vendor compilers pretend to be __GNUC__ for any number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reasons.  I believe that they are all wrong for doing it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regarding this specific issue, there is nothing wrong with hwloc and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't know why anyone should bother trying to fix Cray's problem, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect that pragmatism will prevail, as it appears to have in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case of Boost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (<a href="http://www.boost.org/doc/libs/1_52_0/boost/config/select_platform_config.hpp">http://www.boost.org/doc/libs/1_52_0/boost/config/select_platform_config.hpp</a>).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll reproduce this locally and contact Cray directly about fixing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this on their end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jan 17, 2013 at 12:19 PM, Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-1.6.1rc2 fails to build with the Cray compiler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cray C : Version 8.1.2  Thu Jan 17, 2013  12:18:54
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The error message is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC       bitmap.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC-147 craycc: ERROR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Declaration is incompatible with &quot;int ffsl(long)&quot; (declared at line 526
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/cray/xe-sysroot/4.1.20/usr/include/string.h&quot;).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Yes, there is no line number with the error message.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This seems to be caused by the fact that the Cray c!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ompiler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sets __GNUC__,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but is not quite compatible. A work-around is to change line 56 of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include/private/misc.h from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #elif defined(__GNUC__) &amp;&amp; !defined(_CRAYC)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -erik
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
Argonne Leadership Computing Facility
University of Chicago Computation Institute
jhammond_at_[hidden] / (630) 252-5381
<a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
<a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0821.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Previous message:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0819.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0821.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0821.php">Erik Schnetter: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
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
