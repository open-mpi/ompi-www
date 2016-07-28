<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 14:28:09 2012" -->
<!-- isoreceived="20120209192809" -->
<!-- sent="Thu, 09 Feb 2012 11:27:59 -0800" -->
<!-- isosent="20120209192759" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F341E3F.6030806_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B95DE678-4B1F-4AD8-97CE-6AC8D8C146EE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 has escaped<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 14:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2846.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2844.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>What you have for the &quot;Make sure...&quot; is wrong in the same way as the one 
<br>
that was in rc1.
<br>
The problem is that the AC_COMPILE_IFELSE code tests too-few and 
<br>
too-many args together.
<br>
Since xlc makes too many an error by default, we don't notice its 
<br>
MISbehavior when given too few.
<br>
So, one needs to split the too-many and too-few tests as I did in the 
<br>
patch I sent.
<br>
<p>I don't think we should drop that AC_COMPILE_IFELSE entirely (or rather 
<br>
we shouldn't drop the TWO once split).
<br>
If we were to encounter another Linux compiler that didn't STOP on 
<br>
too-few arguments the binding code would get silently broken again.
<br>
<p>I was also partial to the &quot;structure&quot; of my patch which needed to test 
<br>
$hwloc_c_vendor only once.
<br>
This would allow adding compiler-specific logic in exactly one place if 
<br>
other cases arise.
<br>
<p>I *do* like the way you've run the AC_COMPILE_IFELSE test AFTER adding 
<br>
the compiler-specific flag (thus confirming that it actually resolved 
<br>
the problem).  However, as noted above you will need to split the 
<br>
too-few and too-many arg tests for that to be effective.
<br>
<p>And regarding the &quot;older, buggy&quot; comment:
<br>
This is a recent XLC compiler, and this behavior is NOT a bug because 
<br>
the C spec doesn't require a fatal error here.
<br>
That is why I commented (with &lt;rant&gt; delimiters) on the evils of 
<br>
configure probes that try to determine how many arguments appear in a 
<br>
prototype.
<br>
<p>-Paul
<br>
<p>On 2/9/2012 5:08 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; How's this patch (against v1.3, assuming
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4285">https://svn.open-mpi.org/trac/hwloc/changeset/4285</a>)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the test that checks to see if compilers error when the wrong number of params are passed now mooot?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/hwloc.m4	(revision 4285)
</span><br>
<span class="quotelev1">&gt; +++ config/hwloc.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -268,22 +268,24 @@
</span><br>
<span class="quotelev1">&gt;       AS_IF([test &quot;$HWLOC_VISIBILITY_CFLAGS&quot; != &quot;&quot;],
</span><br>
<span class="quotelev1">&gt;             [AC_MSG_WARN([&quot;$HWLOC_VISIBILITY_CFLAGS&quot; has been added to the hwloc CFLAGS])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    # make sure the compiler returns an error code when function arg count is wrong,
</span><br>
<span class="quotelev1">&gt; -    # otherwise sched_setaffinity checks may fail
</span><br>
<span class="quotelev1">&gt; +    # Make sure the compiler returns an error code when function arg
</span><br>
<span class="quotelev1">&gt; +    # count is wrong, otherwise sched_setaffinity checks may fail.
</span><br>
<span class="quotelev1">&gt; +    # For older, buggy versions of the xlc compilers, we need to set
</span><br>
<span class="quotelev1">&gt; +    # an additional compiler flag to catch these situations.
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$hwloc_c_vendor&quot; = &quot;ibm&quot;],
</span><br>
<span class="quotelev1">&gt; +          [HWLOC_CFLAGS_save=$CFLAGS
</span><br>
<span class="quotelev1">&gt; +           CFLAGS=&quot;$CFLAGS -qhalt=e&quot;])
</span><br>
<span class="quotelev1">&gt;       AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt;           extern int one_arg(int x);
</span><br>
<span class="quotelev1">&gt;           extern int two_arg(int x, int y);
</span><br>
<span class="quotelev1">&gt;           int foo(void) { return one_arg(1, 2) + two_arg(3); }
</span><br>
<span class="quotelev1">&gt;       ]])], [
</span><br>
<span class="quotelev1">&gt;           AC_MSG_WARN([Your C compiler does not consider incorrect argument counts to be a fatal error.])
</span><br>
<span class="quotelev1">&gt; -        if test &quot;$hwloc_check_compiler_vendor_result&quot; = &quot;ibm&quot;; then
</span><br>
<span class="quotelev1">&gt; -            AC_MSG_WARN([For XLC you may try appending '-qhalt=-e' to the value of CFLAGS.])
</span><br>
<span class="quotelev1">&gt; -            AC_MSG_WARN([Alternatively you may configure with a different compiler.])
</span><br>
<span class="quotelev1">&gt; -        else
</span><br>
<span class="quotelev1">&gt; -            AC_MSG_WARN([Please report this failure, and configure using a different C compiler if possible.])
</span><br>
<span class="quotelev1">&gt; -        fi
</span><br>
<span class="quotelev1">&gt;           AC_MSG_ERROR([Cannot continue.])
</span><br>
<span class="quotelev1">&gt;       ])
</span><br>
<span class="quotelev1">&gt; +    # Restore the CFLAGS if we modified them above
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$hwloc_c_vendor&quot; = &quot;ibm&quot;],
</span><br>
<span class="quotelev1">&gt; +          [CFLAGS=HWLOC_CFLAGS])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       #
</span><br>
<span class="quotelev1">&gt;       # Now detect support
</span><br>
<span class="quotelev1">&gt; @@ -387,6 +389,12 @@
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE_UNQUOTED(hwloc_thread_t, $hwloc_thread_t, [Define this to the thread ID type])
</span><br>
<span class="quotelev1">&gt;       fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    # For older, buggy versions of the xlc compilers, we need to set
</span><br>
<span class="quotelev1">&gt; +    # an additional compiler flag to catch cases where the wrong
</span><br>
<span class="quotelev1">&gt; +    # number of parameters are passed.
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$hwloc_c_vendor&quot; = &quot;ibm&quot;],
</span><br>
<span class="quotelev1">&gt; +          [HWLOC_CFLAGS_save=$CFLAGS
</span><br>
<span class="quotelev1">&gt; +           CFLAGS=&quot;$CFLAGS -qhalt=e&quot;])
</span><br>
<span class="quotelev1">&gt;       _HWLOC_CHECK_DECL([sched_setaffinity], [
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE([HWLOC_HAVE_SCHED_SETAFFINITY], [1], [Define to 1 if glibc provides a prototype of sched_setaffinity()])
</span><br>
<span class="quotelev1">&gt;         AC_MSG_CHECKING([for old prototype of sched_setaffinity])
</span><br>
<span class="quotelev1">&gt; @@ -403,6 +411,9 @@
</span><br>
<span class="quotelev1">&gt;   #define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt;   #include&lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt;   ]])
</span><br>
<span class="quotelev1">&gt; +    # Restore the CFLAGS if we modified them above
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$hwloc_c_vendor&quot; = &quot;ibm&quot;],
</span><br>
<span class="quotelev1">&gt; +          [CFLAGS=HWLOC_CFLAGS])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       AC_MSG_CHECKING([for working CPU_SET])
</span><br>
<span class="quotelev1">&gt;       AC_LINK_IFELSE([
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2012, at 7:47 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/8/2012 4:41 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do agree w/ Samuel that the BEST solution is to apply &quot;-qhalt=e&quot; ONLY to the test(s) where one expects the compiler to through errors (rather than warnings) for function calls with argument counts which don't match the prototypes.  At the moment, I am 90% certain that the &quot;old sched_setaffinity()&quot; probe is the only one fitting that description.
</span><br>
<span class="quotelev2">&gt;&gt; I am hoping to be able contribute  patch for this soon.
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2846.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2844.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
