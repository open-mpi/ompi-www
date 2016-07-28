<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 11 22:01:10 2005" -->
<!-- isoreceived="20051012030110" -->
<!-- sent="Tue, 11 Oct 2005 20:01:06 -0700" -->
<!-- isosent="20051012030106" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="20051012030106.GA5387_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B7A39DBE-AB4E-4731-8AA5-1F1ED6510C4E_at_open-mpi.org" -->
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
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-11 22:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0439.php">Jeff Squyres: "Re:  NPB- FT errors"</a>
<li><strong>In reply to:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 10, 2005 at 11:26:41PM -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Oct 10, 2005, at 6:59 PM, Brooks Davis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The configure output ends with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating test/util/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating include/ompi_config.h
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating include/mpi.h
</span><br>
<span class="quotelev2">&gt; &gt; config.status: include/mpi.h is unchanged
</span><br>
<span class="quotelev2">&gt; &gt; config.status: linking ./opal/mca/timer/base/timer_base_null.h to  
</span><br>
<span class="quotelev2">&gt; &gt; opal/mca/timer/base/base_impl.h
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've attached gziped copies of the configure output and config.log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, this was a silly error on our part - a header file wasn't shipped  
</span><br>
<span class="quotelev1">&gt; as part of the distribution tarball.  I committed a patch to the  
</span><br>
<span class="quotelev1">&gt; trunk to fix this bug and it should be in the 1.0 as soon as the 1.0  
</span><br>
<span class="quotelev1">&gt; release manager gets a chance to review the commit (should be  
</span><br>
<span class="quotelev1">&gt; tomorrow).  If you want to try a nightly, they are available here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/nightly/">http://www.open-mpi.org/nightly/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, the 1.0 nightly for tomorrow morning will not have the fix  
</span><br>
<span class="quotelev1">&gt; just yet.
</span><br>
<p>Thanks.  With the following patchs and passing
<br>
--disable-pretty-print-stacktrace to configure I was able to get truck
<br>
at rev 7709 to build.  I haven't done any testing yet, but that's a good
<br>
first step.
<br>
<p>The libutil.h check is to get openpty().  The existing code checked for
<br>
the libary, but not the header.
<br>
<p>The f77_get_fortran_handle_max.m4 change is because FreeBSD's eval
<br>
appears to use ints internally so they overflow to negative numbers and
<br>
cause problems.  Fortunatly, they roll back over once properly escaped.
<br>
<p>-- Brooks
<br>
<p>Index: configure.ac
<br>
===================================================================
<br>
--- configure.ac	(revision 7709)
<br>
+++ configure.ac	(working copy)
<br>
@@ -1043,7 +1043,7 @@
<br>
&nbsp;ompi_show_title &quot;Header file tests&quot;
<br>
&nbsp;
<br>
&nbsp;AC_CHECK_HEADERS([alloca.h aio.h arpa/inet.h dirent.h \
<br>
-    dlfcn.h execinfo.h err.h fcntl.h inttypes.h libgen.h \
<br>
+    dlfcn.h execinfo.h err.h fcntl.h inttypes.h libgen.h libutil.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;net/if.h netdb.h netinet/in.h netinet/tcp.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;poll.h pthread.h pty.h pwd.h sched.h stdint.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string.h strings.h stropts.h sys/fcntl.h sys/ipc.h \
<br>
Index: config/f77_get_fortran_handle_max.m4
<br>
===================================================================
<br>
--- config/f77_get_fortran_handle_max.m4	(revision 7709)
<br>
+++ config/f77_get_fortran_handle_max.m4	(working copy)
<br>
@@ -34,7 +34,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_fint_max=`expr $ompi_fint_max \* 2`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_sizeof_fint=`expr $ompi_sizeof_fint - 1`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
-    ompi_fint_max=`expr $ompi_fint_max - 1`
<br>
+    # ompi_fint_max might be negative here due to integer rollover
<br>
+    # on some systems.  Escape it just in case.  This doesn't handle
<br>
+    # all possible cases, but hopefully it's good enough.
<br>
+    ompi_fint_max=`expr \( $ompi_fint_max \) - 1`
<br>
&nbsp;fi
<br>
&nbsp;
<br>
&nbsp;# Get INT_MAX.  Compute a SWAG if we are cross compiling or something
<br>
@@ -55,7 +58,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cint_max=`expr $ompi_cint_max \* 2`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_sizeof_cint=`expr $ompi_sizeof_cint - 1`
<br>
&nbsp;done
<br>
-ompi_cint_max=`expr $ompi_cint_max - 1`])
<br>
+# ompi_cint_max might be negative here due to integer rollover
<br>
+# on some systems.  Escape it just in case.  This doesn't handle
<br>
+# all possible cases, but hopefully it's good enough.
<br>
+ompi_cint_max=`expr \( $ompi_cint_max \) - 1`])
<br>
&nbsp;
<br>
&nbsp;if test &quot;$ompi_cint_max&quot; = &quot;0&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# wow - something went really wrong.  Be conservative
<br>
Index: orte/mca/iof/base/iof_base_setup.c
<br>
===================================================================
<br>
--- orte/mca/iof/base/iof_base_setup.c	(revision 7709)
<br>
+++ orte/mca/iof/base/iof_base_setup.c	(working copy)
<br>
@@ -47,6 +47,9 @@
<br>
&nbsp;#  include &lt;termio.h&gt;
<br>
&nbsp;# endif
<br>
&nbsp;#endif
<br>
+#ifdef HAVE_LIBUTIL_H
<br>
+#include &lt;libutil.h&gt;
<br>
+#endif
<br>
&nbsp;
<br>
&nbsp;#include &quot;mca/iof/base/iof_base_setup.h&quot;
<br>
&nbsp;
<br>
<p><pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0440/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0439.php">Jeff Squyres: "Re:  NPB- FT errors"</a>
<li><strong>In reply to:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
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
