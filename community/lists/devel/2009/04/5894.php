<?
$subject_val = "[OMPI devel] Compile error - svn revision 21099";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 23:15:43 2009" -->
<!-- isoreceived="20090429031543" -->
<!-- sent="Wed, 29 Apr 2009 00:15:37 -0300" -->
<!-- isosent="20090429031537" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="[OMPI devel] Compile error - svn revision 21099" -->
<!-- id="4226a8f0904282015o3fd15f5eje14c078df430ae70_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Compile error - svn revision 21099<br>
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 23:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>Previous message:</strong> <a href="5893.php">Rainer Keller: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>Reply:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi,
<br>
<p>I'm getting the folowing error compiling the svn trunk.
<br>
<p>Regards,
<br>
Caciano Machado
<br>
<p>root_at_debompi:/usr/local/src/ompi-trunk# make distclean &amp;&amp; ./autogen.sh &amp;&amp;
<br>
./configure --prefix=/usr/local/openmpi --with-ft=cr
<br>
--with-blcr=/usr/local/blcr -enable-mpi-threads --enable-trace &amp;&amp; make
<br>
...
<br>
&nbsp;gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -g
<br>
-Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
<br>
-Wstrict-prototypes -Wcomment -pedantic
<br>
-Werror-implicit-function-declaration -finline-functions
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden -MT snapc_full_app.lo -MD
<br>
-MP -MF .deps/snapc_full_app.Tpo -c snapc_full_app.c  -fPIC -DPIC -o
<br>
.libs/snapc_full_app.o
<br>
snapc_full_app.c:57: error: expected &#145;)&#146; before &#145;resp&#146;
<br>
snapc_full_app.c:59: error: expected declaration specifiers or &#145;...&#146; before
<br>
&#145;opal_cr_ckpt_cmd_state_t&#146;
<br>
snapc_full_app.c: In function &#145;app_coord_init&#146;:
<br>
snapc_full_app.c:75: error: &#145;opal_cr_notify_callback_fn_t&#146; undeclared (first
<br>
use in this function)
<br>
snapc_full_app.c:75: error: (Each undeclared identifier is reported only
<br>
once
<br>
snapc_full_app.c:75: error: for each function it appears in.)
<br>
snapc_full_app.c:75: error: expected &#145;;&#146; before &#145;prev_notify_func&#146;
<br>
snapc_full_app.c:76: warning: ISO C90 forbids mixed declarations and code
<br>
snapc_full_app.c:85: error: implicit declaration of function
<br>
&#145;opal_cr_reg_notify_callback&#146;
<br>
snapc_full_app.c:85: error: &#145;snapc_full_app_notify_response&#146; undeclared
<br>
(first use in this function)
<br>
snapc_full_app.c:85: error: &#145;prev_notify_func&#146; undeclared (first use in this
<br>
function)
<br>
snapc_full_app.c:90: error: &#145;opal_cr_pipe_dir&#146; undeclared (first use in this
<br>
function)
<br>
snapc_full_app.c:90: error: &#145;OPAL_CR_NAMED_PROG_R&#146; undeclared (first use in
<br>
this function)
<br>
snapc_full_app.c:91: error: &#145;OPAL_CR_NAMED_PROG_W&#146; undeclared (first use in
<br>
this function)
<br>
snapc_full_app.c:97: error: &#145;opal_cr_entry_point_signal&#146; undeclared (first
<br>
use in this function)
<br>
snapc_full_app.c: In function &#145;snapc_full_app_signal_handler&#146;:
<br>
snapc_full_app.c:145: error: &#145;opal_cr_entry_point_signal&#146; undeclared (first
<br>
use in this function)
<br>
snapc_full_app.c:155: error: &#145;opal_cr_checkpoint_request&#146; undeclared (first
<br>
use in this function)
<br>
snapc_full_app.c:155: error: &#145;OPAL_CR_STATUS_REQUESTED&#146; undeclared (first
<br>
use in this function)
<br>
snapc_full_app.c: At top level:
<br>
snapc_full_app.c:164: error: expected &#145;)&#146; before &#145;resp&#146;
<br>
snapc_full_app.c:366: error: expected declaration specifiers or &#145;...&#146; before
<br>
&#145;opal_cr_ckpt_cmd_state_t&#146;
<br>
snapc_full_app.c: In function &#145;snapc_full_app_ckpt_handshake_start&#146;:
<br>
snapc_full_app.c:383: error: &#145;resp&#146; undeclared (first use in this function)
<br>
snapc_full_app.c:394: error: &#145;OPAL_CHECKPOINT_CMD_IN_PROGRESS&#146; undeclared
<br>
(first use in this function)
<br>
snapc_full_app.c:403: error: &#145;OPAL_CHECKPOINT_CMD_NULL&#146; undeclared (first
<br>
use in this function)
<br>
snapc_full_app.c:413: error: &#145;OPAL_CHECKPOINT_CMD_ERROR&#146; undeclared (first
<br>
use in this function)
<br>
snapc_full_app.c: In function &#145;app_coord_ft_event&#146;:
<br>
snapc_full_app.c:595: error: &#145;opal_cr_pipe_dir&#146; undeclared (first use in
<br>
this function)
<br>
snapc_full_app.c:595: error: &#145;OPAL_CR_NAMED_PROG_R&#146; undeclared (first use in
<br>
this function)
<br>
snapc_full_app.c:596: error: &#145;OPAL_CR_NAMED_PROG_W&#146; undeclared (first use in
<br>
this function)
<br>
snapc_full_app.c:602: error: &#145;opal_cr_entry_point_signal&#146; undeclared (first
<br>
use in this function)
<br>
make[2]: *** [snapc_full_app.lo] Error 1
<br>
make[2]: Leaving directory `/usr/local/src/ompi-trunk/orte/mca/snapc/full'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/usr/local/src/ompi-trunk/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5894/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>Previous message:</strong> <a href="5893.php">Rainer Keller: "Re: [OMPI devel] Branching for 1.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
<li><strong>Reply:</strong> <a href="5895.php">Rainer Keller: "Re: [OMPI devel] Compile error - svn revision 21099"</a>
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
