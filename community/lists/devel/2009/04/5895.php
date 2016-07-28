<?
$subject_val = "Re: [OMPI devel] Compile error - svn revision 21099";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 23:25:04 2009" -->
<!-- isoreceived="20090429032504" -->
<!-- sent="Tue, 28 Apr 2009 23:24:36 -0400" -->
<!-- isosent="20090429032436" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile error - svn revision 21099" -->
<!-- id="200904282324.36843.keller_at_ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4226a8f0904282015o3fd15f5eje14c078df430ae70_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile error - svn revision 21099<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 23:24:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5896.php">Caciano Machado: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>Previous message:</strong> <a href="5894.php">Caciano Machado: "[OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>In reply to:</strong> <a href="5894.php">Caciano Machado: "[OMPI devel] Compile error - svn revision 21099"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5896.php">Caciano Machado: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>Reply:</strong> <a href="5896.php">Caciano Machado: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Caciano,
<br>
could You please check whether the following fixes it?
<br>
Index: orte/mca/snapc/full/snapc_full_app.c
<br>
===================================================================
<br>
--- orte/mca/snapc/full/snapc_full_app.c        (revision 21099)
<br>
+++ orte/mca/snapc/full/snapc_full_app.c        (working copy)
<br>
@@ -36,6 +36,7 @@
<br>
<p>&nbsp;#include &quot;orte/runtime/orte_cr.h&quot;
<br>
&nbsp;#include &quot;orte/runtime/orte_globals.h&quot;
<br>
+#include &quot;opal/runtime/opal_cr.h&quot;
<br>
&nbsp;#include &quot;opal/util/output.h&quot;
<br>
&nbsp;#include &quot;opal/util/opal_environ.h&quot;
<br>
&nbsp;#include &quot;opal/mca/mca.h&quot;
<br>
<p><p>Thanks,
<br>
Rainer
<br>
<p><p>On Tuesday 28 April 2009 11:15:37 pm Caciano Machado wrote:
<br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting the folowing error compiling the svn trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Caciano Machado
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; root_at_debompi:/usr/local/src/ompi-trunk# make distclean &amp;&amp; ./autogen.sh &amp;&amp;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --with-blcr=/usr/local/blcr -enable-mpi-threads --enable-trace &amp;&amp; make
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -g
</span><br>
<span class="quotelev1">&gt; -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
</span><br>
<span class="quotelev1">&gt; -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -MT snapc_full_app.lo -MD
</span><br>
<span class="quotelev1">&gt; -MP -MF .deps/snapc_full_app.Tpo -c snapc_full_app.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev1">&gt; .libs/snapc_full_app.o
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:57: error: expected &#226;&#128;&#152;)&#226;&#128;&#153; before &#226;&#128;&#152;resp&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:59: error: expected declaration specifiers or &#226;&#128;&#152;...&#226;&#128;&#153; before
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#152;opal_cr_ckpt_cmd_state_t&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c: In function &#226;&#128;&#152;app_coord_init&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:75: error: &#226;&#128;&#152;opal_cr_notify_callback_fn_t&#226;&#128;&#153; undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:75: error: (Each undeclared identifier is reported only
</span><br>
<span class="quotelev1">&gt; once
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:75: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:75: error: expected &#226;&#128;&#152;;&#226;&#128;&#153; before &#226;&#128;&#152;prev_notify_func&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:76: warning: ISO C90 forbids mixed declarations and code
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:85: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#152;opal_cr_reg_notify_callback&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:85: error: &#226;&#128;&#152;snapc_full_app_notify_response&#226;&#128;&#153; undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:85: error: &#226;&#128;&#152;prev_notify_func&#226;&#128;&#153; undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:90: error: &#226;&#128;&#152;opal_cr_pipe_dir&#226;&#128;&#153; undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:90: error: &#226;&#128;&#152;OPAL_CR_NAMED_PROG_R&#226;&#128;&#153; undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:91: error: &#226;&#128;&#152;OPAL_CR_NAMED_PROG_W&#226;&#128;&#153; undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:97: error: &#226;&#128;&#152;opal_cr_entry_point_signal&#226;&#128;&#153; undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c: In function &#226;&#128;&#152;snapc_full_app_signal_handler&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:145: error: &#226;&#128;&#152;opal_cr_entry_point_signal&#226;&#128;&#153; undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:155: error: &#226;&#128;&#152;opal_cr_checkpoint_request&#226;&#128;&#153; undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:155: error: &#226;&#128;&#152;OPAL_CR_STATUS_REQUESTED&#226;&#128;&#153; undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c: At top level:
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:164: error: expected &#226;&#128;&#152;)&#226;&#128;&#153; before &#226;&#128;&#152;resp&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:366: error: expected declaration specifiers or &#226;&#128;&#152;...&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; before &#226;&#128;&#152;opal_cr_ckpt_cmd_state_t&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c: In function &#226;&#128;&#152;snapc_full_app_ckpt_handshake_start&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:383: error: &#226;&#128;&#152;resp&#226;&#128;&#153; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:394: error: &#226;&#128;&#152;OPAL_CHECKPOINT_CMD_IN_PROGRESS&#226;&#128;&#153; undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:403: error: &#226;&#128;&#152;OPAL_CHECKPOINT_CMD_NULL&#226;&#128;&#153; undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:413: error: &#226;&#128;&#152;OPAL_CHECKPOINT_CMD_ERROR&#226;&#128;&#153; undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c: In function &#226;&#128;&#152;app_coord_ft_event&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:595: error: &#226;&#128;&#152;opal_cr_pipe_dir&#226;&#128;&#153; undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:595: error: &#226;&#128;&#152;OPAL_CR_NAMED_PROG_R&#226;&#128;&#153; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:596: error: &#226;&#128;&#152;OPAL_CR_NAMED_PROG_W&#226;&#128;&#153; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; snapc_full_app.c:602: error: &#226;&#128;&#152;opal_cr_entry_point_signal&#226;&#128;&#153; undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [snapc_full_app.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/local/src/ompi-trunk/orte/mca/snapc/full'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/local/src/ompi-trunk/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5896.php">Caciano Machado: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>Previous message:</strong> <a href="5894.php">Caciano Machado: "[OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>In reply to:</strong> <a href="5894.php">Caciano Machado: "[OMPI devel] Compile error - svn revision 21099"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5896.php">Caciano Machado: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>Reply:</strong> <a href="5896.php">Caciano Machado: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
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
