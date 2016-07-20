<?
$subject_val = "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 15:13:02 2013" -->
<!-- isoreceived="20130117201302" -->
<!-- sent="Thu, 17 Jan 2013 15:12:58 -0500" -->
<!-- isosent="20130117201258" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler" -->
<!-- id="CADKQjjfd3ZY9RZqfeN2yCDAbSZHRfhuYkmjNo2gdE+ey=fLhrg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGKz=uJQLd8Vhtjn=-F-cXqSsD6cmZKHwwDDekH34Tt9dwJGwg_at_mail.gmail.com" -->
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
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 15:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0826.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler."</a>
<li><strong>Previous message:</strong> <a href="0824.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0824.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0826.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I build a software package (Cactus) where several components require
<br>
certain external libraries to be present. To simplify the build process,
<br>
Cactus can build these external packages if they are not already provided
<br>
by the system. Cactus then uses the same build environment and compiler
<br>
flags for the external packages as for its application code.
<br>
<p>If necessary, I could easily build hwloc manually, and point Cactus to it.
<br>
However, I like the automation, and since I also like hwloc I thought I'd
<br>
track down and correct the problem.
<br>
<p>-erik
<br>
<p><p><p>On Thu, Jan 17, 2013 at 3:06 PM, Jeff Hammond &lt;jhammond_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay, I'll see if I can verify this.  However, I wonder why you need
</span><br>
<span class="quotelev1">&gt; to build with Cray compilers?  hwloc has a C API, no?  A C library
</span><br>
<span class="quotelev1">&gt; built with GCC should link against an application compiled with Cray.
</span><br>
<span class="quotelev1">&gt; I really don't see any value in using the Cray optimizing compiler for
</span><br>
<span class="quotelev1">&gt; a library that clearly isn't performance critical.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 17, 2013 at 2:00 PM, Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Given that the Cray compiler aborts on this code with an incorrect error
</span><br>
<span class="quotelev2">&gt; &gt; message, I would actually call it a compiler bug. The compiler may
</span><br>
<span class="quotelev1">&gt; possibly
</span><br>
<span class="quotelev2">&gt; &gt; want to complain that it doesn't know __builtin_ffsl, but its error
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev2">&gt; &gt; (Declaration is incompatible with &quot;int ffsl(long)&quot;) indicates that there
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt; some other problem. Note that hwloc never declares ffsl; it only calls
</span><br>
<span class="quotelev2">&gt; &gt; __builtin_ffsl.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I have a work-around, and leave it up to you to report this or
</span><br>
<span class="quotelev1">&gt; not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -erik
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 17, 2013 at 2:40 PM, Jeff Hammond &lt;jhammond_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Well then, this is most certainly not a Cray bug :-)  The compiler is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; doing exactly what you asked it to do.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would configure hwloc without this flag and assume that this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; resolves the issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Jan 17, 2013 at 1:27 PM, Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I realise I did not mention the flags I used when configuring hwloc. I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; am
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; using
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -g -h gnu -O3
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; which explicitly asks to recognise GNU extensions. (I need to use -h
</span><br>
<span class="quotelev1">&gt; gnu
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; compile certain other code.) This would explain why __GNUC__ is
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; defined...
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Apologies for omitting this earlier.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -erik
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Thu, Jan 17, 2013 at 2:21 PM, Jeff Hammond &lt;jhammond_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I was not able to reproduce the behavior described by Erik on the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; NERSC Cray XE6, which is to say, Cray C does not claim to be GCC
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; there.  As I can't verify the problem, I can't report it.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I have no experience with Cray bug fix latency but I suspect this
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; needs to be worked-around (I refuse to call it a fix since there is
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; problem in hwloc) because Cray won't backport whatever fix they
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; implement to all their compilers that users might come across.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Jeff
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Thu, Jan 17, 2013 at 1:15 PM, Erik Schnetter &lt;
</span><br>
<span class="quotelev1">&gt; schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; I have no idea how fast Cray acts in such a case.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; -erik
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; On Thu, Jan 17, 2013 at 2:05 PM, Brice Goglin &lt;
</span><br>
<span class="quotelev1">&gt; brice.goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Does Cray fix such bugs quickly usually? If so, no need to change
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; hwloc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; If not, I'll need somebody to test the change on other cray
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; platforms
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; compiler versions.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Jeff Hammond &lt;jhammond_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; This is a bug in the Cray compiler.  They cannot and should not
</span><br>
<span class="quotelev1">&gt; set
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; the __GNUC__ flag unless they are fully compatible with GCC.
</span><br>
<span class="quotelev1">&gt;  There
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; are many ways to define &quot;fully compatible&quot; but at a minimum, code
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; compiles with GCC needs to compile with any compiler that elects
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; define __GNUC__.  It is prudent to impose a higher standard in
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; cases but that's not pertinent to this discussion.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; Lots of vendor compilers pretend to be __GNUC__ for any number of
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; reasons.  I believe that they are all wrong for doing it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; Regarding this specific issue, there is nothing wrong with hwloc
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; and I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; don't know why anyone should bother trying to fix Cray's problem,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; but
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; I suspect that pragmatism will prevail, as it appears to have in
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; case of Boost
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.boost.org/doc/libs/1_52_0/boost/config/select_platform_config.hpp">http://www.boost.org/doc/libs/1_52_0/boost/config/select_platform_config.hpp</a>
</span><br>
<span class="quotelev1">&gt; ).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; I'll reproduce this locally and contact Cray directly about
</span><br>
<span class="quotelev1">&gt; fixing
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; this on their end.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; Best,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; On Thu, Jan 17, 2013 at 12:19 PM, Erik Schnetter
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; hwloc-1.6.1rc2 fails to build with the Cray compiler
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Cray C : Version 8.1.2  Thu Jan 17, 2013  12:18:54
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; The error message is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; CC       bitmap.lo
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; CC-147 craycc: ERROR
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Declaration is incompatible with &quot;int ffsl(long)&quot; (declared at
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; line
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; 526
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; &quot;/opt/cray/xe-sysroot/4.1.20/usr/include/string.h&quot;).
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; (Yes, there is no line number with the error message.)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; This seems to be caused by the fact that the Cray c!
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;  ompiler
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; sets __GNUC__,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; but is not quite compatible. A work-around is to change line 56
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; include/private/misc.h from
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; #elif defined(__GNUC__)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; #elif defined(__GNUC__) &amp;&amp; !defined(_CRAYC)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; -erik
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Argonne Leadership Computing Facility
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; University of Chicago Computation Institute
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; jhammond_at_[hidden] / (630) 252-5381
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Argonne Leadership Computing Facility
</span><br>
<span class="quotelev3">&gt; &gt;&gt; University of Chicago Computation Institute
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jhammond_at_[hidden] / (630) 252-5381
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; Argonne Leadership Computing Facility
</span><br>
<span class="quotelev1">&gt; University of Chicago Computation Institute
</span><br>
<span class="quotelev1">&gt; jhammond_at_[hidden] / (630) 252-5381
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0826.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler."</a>
<li><strong>Previous message:</strong> <a href="0824.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>In reply to:</strong> <a href="0824.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0826.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler."</a>
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
