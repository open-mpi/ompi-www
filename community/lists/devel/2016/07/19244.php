<?
$subject_val = "Re: [OMPI devel] autogen.pl broken on master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 16:24:09 2016" -->
<!-- isoreceived="20160719202409" -->
<!-- sent="Tue, 19 Jul 2016 20:24:06 +0000" -->
<!-- isosent="20160719202406" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen.pl broken on master" -->
<!-- id="0D6C3793-931A-428E-99DE-F02EA3760839_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AD212675-2ECF-490B-A26B-F91DCE85BEB7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autogen.pl broken on master<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 16:24:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19245.php">Jeff Squyres (jsquyres): "[OMPI devel] This list is migrating!"</a>
<li><strong>Previous message:</strong> <a href="19243.php">Ralph Castain: "[OMPI devel] autogen.pl broken on master"</a>
<li><strong>In reply to:</strong> <a href="19243.php">Ralph Castain: "[OMPI devel] autogen.pl broken on master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mmm... I see that even ./autogen.pl --no-ompi (just by itself) fails.
<br>
<p>I'm pretty sure that I used --no-ompi in the not-distant past (i.e., within the last month or three?).  I ran an automated git bisect and it found this:
<br>
<p>-----
<br>
dc5adc5a91b4682a8e0de492350745eb01fa37d0 is the first bad commit
<br>
commit dc5adc5a91b4682a8e0de492350745eb01fa37d0
<br>
Author: Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
Date:   Wed Jan 13 11:58:14 2016 +0900
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;configury: pass -Wl,-Wl,,--enable-new-dtags when NAG compiler is used for linking
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks Paul Hargrove for the report
<br>
-----
<br>
<p>I don't have time to look at this ATM; I'll file an issue...
<br>
<p><p><span class="quotelev1">&gt; On Jul 19, 2016, at 3:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When trying to run autogen.pl --no-ompi --no-oshmem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure.ac:1307: error: m4_require: circular dependency of AC_LANG_COMPILER(Fortran)
</span><br>
<span class="quotelev1">&gt; ../../lib/autoconf/lang.m4:329: AC_LANG_COMPILER_REQUIRE is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/autoconf/general.m4:2678: AC_LINK_IFELSE is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/autoconf/general.m4:2031: AC_CACHE_VAL is expanded from...
</span><br>
<span class="quotelev1">&gt; /home/common/local/share/aclocal/libtool.m4:1152: _LT_SYS_MODULE_PATH_AIX is expanded from...
</span><br>
<span class="quotelev1">&gt; /home/common/local/share/aclocal/libtool.m4:4896: _LT_LINKER_SHLIBS is expanded from...
</span><br>
<span class="quotelev1">&gt; /home/common/local/share/aclocal/libtool.m4:7791: _LT_LANG_FC_CONFIG is expanded from...
</span><br>
<span class="quotelev1">&gt; /home/common/local/share/aclocal/libtool.m4:841: _LT_LANG is expanded from...
</span><br>
<span class="quotelev1">&gt; /home/common/local/share/aclocal/libtool.m4:823: LT_LANG is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/autoconf/fortran.m4:261: AC_LANG_COMPILER(Fortran) is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/autoconf/lang.m4:329: AC_LANG_COMPILER_REQUIRE is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/autoconf/general.m4:2678: AC_LINK_IFELSE is expanded from...
</span><br>
<span class="quotelev1">&gt; config/opal_setup_wrappers.m4:219: OPAL_SETUP_RUNPATH is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
</span><br>
<span class="quotelev1">&gt; config/opal_setup_wrappers.m4:137: OPAL_SETUP_RPATH is expanded from...
</span><br>
<span class="quotelev1">&gt; ../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
</span><br>
<span class="quotelev1">&gt; config/opal_setup_wrappers.m4:320: OPAL_SETUP_WRAPPER_FINAL is expanded from...
</span><br>
<span class="quotelev1">&gt; configure.ac:1307: the top level
</span><br>
<span class="quotelev1">&gt; autom4te: /home/common/local/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; aclocal: error: echo failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; autoreconf: aclocal failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; Command failed: autoreconf -ivf --warnings=all,no-obsolete,no-override -I config
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I gather someone modified something recently?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19243.php">http://www.open-mpi.org/community/lists/devel/2016/07/19243.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19245.php">Jeff Squyres (jsquyres): "[OMPI devel] This list is migrating!"</a>
<li><strong>Previous message:</strong> <a href="19243.php">Ralph Castain: "[OMPI devel] autogen.pl broken on master"</a>
<li><strong>In reply to:</strong> <a href="19243.php">Ralph Castain: "[OMPI devel] autogen.pl broken on master"</a>
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
