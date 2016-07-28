<?
$subject_val = "Re: [OMPI devel] Compile error - svn revision 21099";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 00:04:15 2009" -->
<!-- isoreceived="20090429040415" -->
<!-- sent="Wed, 29 Apr 2009 01:04:10 -0300" -->
<!-- isosent="20090429040410" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile error - svn revision 21099" -->
<!-- id="4226a8f0904282104o4d468f6chb925e1797976a423_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="200904282324.36843.keller_at_ornl.gov" -->
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
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 00:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5897.php">Jeff Squyres: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Previous message:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>In reply to:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, now that seems to be fixed, but I had to put that header in two another
<br>
files:
<br>
<p>ompi/tools/ompi-server/ompi-server.c
<br>
ompi/tools/ompi-probe/ompi-probe.c
<br>
<p>Now the trunk version is up and running :-).
<br>
<p>Thanks,
<br>
Caciano Machado
<br>
<p>On Wed, Apr 29, 2009 at 12:24 AM, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Caciano,
</span><br>
<span class="quotelev1">&gt; could You please check whether the following fixes it?
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/snapc/full/snapc_full_app.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/snapc/full/snapc_full_app.c        (revision 21099)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/snapc/full/snapc_full_app.c        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -36,6 +36,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/runtime/orte_cr.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/runtime/opal_cr.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/opal_environ.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 28 April 2009 11:15:37 pm Caciano Machado wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm getting the folowing error compiling the svn trunk.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Caciano Machado
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; root_at_debompi:/usr/local/src/ompi-trunk# make distclean &amp;&amp; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local/openmpi --with-ft=cr
</span><br>
<span class="quotelev2">&gt; &gt; --with-blcr=/usr/local/blcr -enable-mpi-threads --enable-trace &amp;&amp; make
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev2">&gt; &gt; -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev2">&gt; &gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -g
</span><br>
<span class="quotelev2">&gt; &gt; -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
</span><br>
<span class="quotelev2">&gt; &gt; -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev2">&gt; &gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev2">&gt; &gt; -fno-strict-aliasing -pthread -fvisibility=hidden -MT snapc_full_app.lo
</span><br>
<span class="quotelev1">&gt; -MD
</span><br>
<span class="quotelev2">&gt; &gt; -MP -MF .deps/snapc_full_app.Tpo -c snapc_full_app.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt; &gt; .libs/snapc_full_app.o
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:57: error: expected &#145;)&#146; before &#145;resp&#146;
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:59: error: expected declaration specifiers or &#145;...&#146;
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev2">&gt; &gt; &#145;opal_cr_ckpt_cmd_state_t&#146;
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c: In function &#145;app_coord_init&#146;:
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:75: error: &#145;opal_cr_notify_callback_fn_t&#146; undeclared
</span><br>
<span class="quotelev2">&gt; &gt; (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:75: error: (Each undeclared identifier is reported only
</span><br>
<span class="quotelev2">&gt; &gt; once
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:75: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:75: error: expected &#145;;&#146; before &#145;prev_notify_func&#146;
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:76: warning: ISO C90 forbids mixed declarations and code
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:85: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt; &gt; &#145;opal_cr_reg_notify_callback&#146;
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:85: error: &#145;snapc_full_app_notify_response&#146; undeclared
</span><br>
<span class="quotelev2">&gt; &gt; (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:85: error: &#145;prev_notify_func&#146; undeclared (first use in
</span><br>
<span class="quotelev2">&gt; &gt; this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:90: error: &#145;opal_cr_pipe_dir&#146; undeclared (first use in
</span><br>
<span class="quotelev2">&gt; &gt; this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:90: error: &#145;OPAL_CR_NAMED_PROG_R&#146; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev2">&gt; &gt; this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:91: error: &#145;OPAL_CR_NAMED_PROG_W&#146; undeclared (first use
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev2">&gt; &gt; this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:97: error: &#145;opal_cr_entry_point_signal&#146; undeclared
</span><br>
<span class="quotelev1">&gt; (first
</span><br>
<span class="quotelev2">&gt; &gt; use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c: In function &#145;snapc_full_app_signal_handler&#146;:
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:145: error: &#145;opal_cr_entry_point_signal&#146; undeclared
</span><br>
<span class="quotelev1">&gt; (first
</span><br>
<span class="quotelev2">&gt; &gt; use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:155: error: &#145;opal_cr_checkpoint_request&#146; undeclared
</span><br>
<span class="quotelev1">&gt; (first
</span><br>
<span class="quotelev2">&gt; &gt; use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:155: error: &#145;OPAL_CR_STATUS_REQUESTED&#146; undeclared (first
</span><br>
<span class="quotelev2">&gt; &gt; use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c: At top level:
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:164: error: expected &#145;)&#146; before &#145;resp&#146;
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:366: error: expected declaration specifiers or &#145;...&#146;
</span><br>
<span class="quotelev2">&gt; &gt; before &#145;opal_cr_ckpt_cmd_state_t&#146;
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c: In function &#145;snapc_full_app_ckpt_handshake_start&#146;:
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:383: error: &#145;resp&#146; undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:394: error: &#145;OPAL_CHECKPOINT_CMD_IN_PROGRESS&#146; undeclared
</span><br>
<span class="quotelev2">&gt; &gt; (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:403: error: &#145;OPAL_CHECKPOINT_CMD_NULL&#146; undeclared (first
</span><br>
<span class="quotelev2">&gt; &gt; use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:413: error: &#145;OPAL_CHECKPOINT_CMD_ERROR&#146; undeclared
</span><br>
<span class="quotelev1">&gt; (first
</span><br>
<span class="quotelev2">&gt; &gt; use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c: In function &#145;app_coord_ft_event&#146;:
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:595: error: &#145;opal_cr_pipe_dir&#146; undeclared (first use in
</span><br>
<span class="quotelev2">&gt; &gt; this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:595: error: &#145;OPAL_CR_NAMED_PROG_R&#146; undeclared (first use
</span><br>
<span class="quotelev2">&gt; &gt; in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:596: error: &#145;OPAL_CR_NAMED_PROG_W&#146; undeclared (first use
</span><br>
<span class="quotelev2">&gt; &gt; in this function)
</span><br>
<span class="quotelev2">&gt; &gt; snapc_full_app.c:602: error: &#145;opal_cr_entry_point_signal&#146; undeclared
</span><br>
<span class="quotelev1">&gt; (first
</span><br>
<span class="quotelev2">&gt; &gt; use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [snapc_full_app.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/usr/local/src/ompi-trunk/orte/mca/snapc/full'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/usr/local/src/ompi-trunk/orte'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5897.php">Jeff Squyres: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Previous message:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>In reply to:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
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
