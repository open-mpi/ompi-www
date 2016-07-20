<?
$subject_val = "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 21:11:13 2015" -->
<!-- isoreceived="20150708011113" -->
<!-- sent="Wed, 8 Jul 2015 01:11:11 +0000" -->
<!-- isosent="20150708011111" -->
<!-- name="D'Alessandro, Luke K" -->
<!-- email="ldalessa_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Difficulty embedding hwloc 1.11.0" -->
<!-- id="04A54B17-EAB2-4C6C-A044-DDA8BC927CE0_at_indiana.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F4450965-4995-461D-BEA0-06578C256847_at_indiana.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Difficulty embedding hwloc 1.11.0<br>
<strong>From:</strong> D'Alessandro, Luke K (<em>ldalessa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-07 21:11:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1185.php">Åke Sandgren: "[hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1183.php">Brice Goglin: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="1182.php">D'Alessandro, Luke K: "[hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>

<br>
<span class="quotelev1">&gt; On Jul 7, 2015, at 9:01 PM, D'Alessandro, Luke K &lt;ldalessa_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see any significant change in v1.11 regarding embedding, 
</span><br>
<span class="quotelev1">&gt; especially with respect to CONFIGURE_DEPENDENCIES. 
</span><br>

<br>
Okay. It didn&#226;&#128;&#153;t seem likely. I must be doing something wrong. The actual project is in <a href="https://gitlab.crest.iu.edu/extreme/hpx/commits/develop">https://gitlab.crest.iu.edu/extreme/hpx/commits/develop</a>, HWLOC_SETUP_CORES is called conditionally here <a href="https://gitlab.crest.iu.edu/extreme/hpx/blob/develop/config/hpx_config_hwloc.m4#L124">https://gitlab.crest.iu.edu/extreme/hpx/blob/develop/config/hpx_config_hwloc.m4#L124</a>, and HWLOC_DO_AM_CONDITIONALS is called unconditionally here <a href="https://gitlab.crest.iu.edu/extreme/hpx/blob/develop/config/hpx_do_am_conditionals.m4#L7">https://gitlab.crest.iu.edu/extreme/hpx/blob/develop/config/hpx_do_am_conditionals.m4#L7</a>. They're both called from the top-level configure.ac though AC_DEFUN macros. 
<br>

<br>
I&#226;&#128;&#153;m building out-of-tree&#226;&#128;&#166; perhaps that makes a difference?
<br>

<br>
<span class="quotelev1">&gt; Does v1.10 work when running autogen with the same versions of 
</span><br>
<span class="quotelev1">&gt; automake/libtool/autoconf?
</span><br>

<br>
It did, yes, though some other changes in our m4 structure happened in between the two points. Our new structure is basically
<br>

<br>
toplevel configure
<br>
&nbsp;&nbsp;macro 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_SETUP_CORE
<br>
&nbsp;&nbsp;macro 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_DO_AM_CONDITIONALS
<br>

<br>
The previous structure didn&#226;&#128;&#153;t use macro 1 and macro 2.
<br>

<br>
<span class="quotelev1">&gt; I am using 1.14.1/2.4.2/2.69 here. 
</span><br>

<br>
I&#226;&#128;&#153;m using 1.15, 2.4.6, and 2.69.
<br>

<br>
<span class="quotelev1">&gt; If you enter hwloc-1.11.0/tests/embedded, does &quot;./run-embedded-tests.sh 
</span><br>
<span class="quotelev1">&gt; ../../hwloc-1.11.0.tar.gz&quot; fail? 
</span><br>

<br>
That works fine.
<br>

<br>
<span class="quotelev1">&gt; After running autogen.sh, I get hwloc-1.11.0/Makefile.in without the 
</span><br>
<span class="quotelev1">&gt; line CONFIGURE_DEPENDENCIES = @CONFIGURE_DEPENDENCIES@ here. 
</span><br>

<br>
I bootstrapped our contrib with that same autogen.sh with no luck.
<br>

<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you look at 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/blob/v1.11/tests/embedded/configure.ac">https://github.com/open-mpi/hwloc/blob/v1.11/tests/embedded/configure.ac</a> 
</span><br>
<span class="quotelev1">&gt; and see if you're missing something from there? Maybe we forgot to 
</span><br>
<span class="quotelev1">&gt; specify that some other configure lines are required. 
</span><br>

<br>
I don&#226;&#128;&#153;t know. We don&#226;&#128;&#153;t use HWLOC_SET_SYMBOL_PREFIX because we&#226;&#128;&#153;re only embedding when there is no libhwloc.so in the path. And our HWLOC_SETUP_CORE is conditional.
<br>

<br>
Thanks for looking at this. I&#226;&#128;&#153;m trying to get some other people here to confirm the problem I&#226;&#128;&#153;m having.
<br>

<br>
Luke
<br>

<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 7, 2015, at 2:28 PM, D'Alessandro, Luke K &lt;ldalessa_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;ve recently tried to update our embedded hwloc from 1.10.0 to 1.11.0 and I&#226;&#128;&#153;m running into an issue. I essentially have:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; AS_IF([&#226;&#128;&#166;], 
</span><br>
<span class="quotelev2">&gt;&gt;   [HWLOC_SETUP_CORE([contrib/hwloc-1.11.0], [&#226;&#128;&#166;], [AC_MSG_WARN(&#226;&#128;&#166;)], [1])])
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_DO_AM_CONDITIONALS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have `ACLOCAL_AMFLAGS = -I config -I contrib/hwloc-1.11.0/config` in the top level Makefile.am.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It appears that, for whatever reason, (at least) @CONFIGURE_DEPENDENCIES@ isn&#226;&#128;&#153;t being replaced in Makefile.in.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ make
</span><br>
<span class="quotelev2">&gt;&gt; Making all in contrib
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/home/ldalessa/obj/test/contrib'
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:755: warning: overriding commands for target `check-recursive'
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:487: warning: ignoring old commands for target `check-recursive'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in hwloc-1.11.0
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/ldalessa/obj/test/contrib/hwloc-1.11.0'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `@CONFIGURE_DEPENDENCIES@', needed by `/u/ldalessa/src/contrib/hwloc-1.11.0/Makefile.in'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/ldalessa/obj/test/contrib/hwloc-1.11.0'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/ldalessa/obj/test/contrib'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; $ 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am by no means an AC/AM expert. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am I likely doing something obviously wrong? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has the embedding protocol changed since the 1.10 series?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Luke
</span><br>
<span class="quotelev1">&gt; 
</span><br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1185.php">Åke Sandgren: "[hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1183.php">Brice Goglin: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="1182.php">D'Alessandro, Luke K: "[hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
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
