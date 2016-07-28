<?
$subject_val = "Re: [OMPI users] problem with sctp.h on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  7 13:17:00 2012" -->
<!-- isoreceived="20120607171700" -->
<!-- sent="Thu, 7 Jun 2012 19:16:36 +0200 (CEST)" -->
<!-- isosent="20120607171636" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with sctp.h on Solaris" -->
<!-- id="201206071716.q57HGZlK025876_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with sctp.h on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with sctp.h on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-07 13:16:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19479.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19477.php">TERRY DONTJE: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="19450.php">Siegmar Gross: "[OMPI users] problem with sctp.h on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><span class="quotelev1">&gt; Can you try the attached patch and tell me if you get sctp configured?
</span><br>
<p>Yes, it works! Thank you very much for your help.
<br>
<p><p><span class="quotelev2">&gt; &gt; This looks like a missing check in the sctp configure.m4.  I am 
</span><br>
<span class="quotelev2">&gt; &gt; working on a patch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 6/5/2012 10:10 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I compiled &quot;openmpi-1.6&quot; on &quot;Solaris 10 sparc&quot; and &quot;Solaris 10 x86&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with &quot;gcc-4.6.2&quot; and &quot;Sun C 5.12&quot;. Today I searched my log-files for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;WARNING&quot; and found the following message.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: netinet/sctp.h: present but cannot be compiled
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: netinet/sctp.h:     check for missing prerequisite headers?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: netinet/sctp.h: see the Autoconf documentation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: netinet/sctp.h:     section &quot;Present But Cannot Be Compiled&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: netinet/sctp.h: proceeding with the compiler's result
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING:     ## ------------------------------------------------------ ##
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING:     ## Report this to<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>  ##
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING:     ## ------------------------------------------------------ ##
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looking in &quot;config.log&quot; showed that some types are undefined.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr openmpi-1.6-SunOS.sparc.64_cc 323 grep sctp config.log
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:119568: result: elan, mx, ofud, openib, portals, sctp, sm, tcp,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; udapl
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:125730: checking for MCA component btl:sctp compile mode
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:125752: checking --with-sctp value
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:125862: checking --with-sctp-libdir value
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:125946: checking netinet/sctp.h usability
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 228:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    incomplete struct/union/enum sockaddr_storage: spc_aaddr
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 530: syntax error before or at:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socklen_t
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 533: syntax error before or at:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socklen_t
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 537: syntax error before or at:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socklen_t
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 772: syntax error before or at:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ipaddr_t
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 779: syntax error before or at:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in6_addr_t
</span><br>
<span class="quotelev3">&gt; &gt;&gt; | #include&lt;netinet/sctp.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The missing types are defined via&lt;netinet/in.h&gt;. In which files must
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I include this header file to avoid the warning? Thank you very much
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for any help in advance.
</span><br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<p>
Index: ompi/mca/btl/sctp/configure.m4
<br>
===================================================================
<br>
--- ompi/mca/btl/sctp/configure.m4	(revision 26562)
<br>
+++ ompi/mca/btl/sctp/configure.m4	(working copy)
<br>
@@ -11,6 +11,7 @@
<br>
&nbsp;# Copyright (c) 2004-2005 The Regents of the University of California.
<br>
&nbsp;#                         All rights reserved.
<br>
&nbsp;# Copyright (c) 2009      Cisco Systems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2012      Oracle and/or its affiliates.  All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -100,6 +101,18 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test ! -z &quot;$with_sctp_libdir&quot; -a &quot;$with_sctp_libdir&quot; != &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ompi_check_sctp_libdir=&quot;$with_sctp_libdir&quot;])
<br>
&nbsp;
<br>
+            # Check for in.h dependency outside OMPI_CHECK_PACKAGE because it cannot
<br>
+            # handle non-system detected dependencies.  This is specifically an issue
<br>
+            # with Oracale Solaris because sctp.h requires in.h to define some types where
<br>
+            # Linux does not.
<br>
+            AC_CHECK_HEADER([netinet/in.h])
<br>
+            AC_CHECK_HEADER([netinet/sctp.h],
<br>
+                            [],
<br>
+                            [],
<br>
+                            [
<br>
+#ifdef HAVE_NETINET_IN_H
<br>
+#include &lt;netinet/in.h&gt;
<br>
+#endif])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CHECK_PACKAGE([$1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[netinet/sctp.h],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$ompi_sctp_api_libname],
<br>
Index: config/ompi_check_package.m4
<br>
===================================================================
<br>
--- config/ompi_check_package.m4	(revision 26562)
<br>
+++ config/ompi_check_package.m4	(working copy)
<br>
@@ -10,6 +10,7 @@
<br>
&nbsp;#                         University of Stuttgart.  All rights reserved.
<br>
&nbsp;# Copyright (c) 2004-2005 The Regents of the University of California.
<br>
&nbsp;#                         All rights reserved.
<br>
+# Copyright (c) 2012      Oracle and/or its affiliates.  All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -35,18 +36,31 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$3&quot; = &quot;/usr&quot; -o &quot;$3&quot; = &quot;/usr/local&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ # try as is...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_VERBOSE([looking for header without includes])
<br>
-            AC_CHECK_HEADER([$2], [ompi_check_package_header_happy=&quot;yes&quot;],
<br>
-                            [ompi_check_package_header_happy=&quot;no&quot;])
<br>
+            # check to see if the header file was detected previously and only
<br>
+            # do a check if it was not.  This is necessary to do for
<br>
+            # things like sctp.h that has a dependency that we cannot detect
<br>
+            # in this part of the code.
<br>
+            AS_IF(AS_VAR_IF([ompi_Header], [no],
<br>
+                  [AC_CHECK_HEADER([$2], [ompi_check_package_header_happy=&quot;yes&quot;],
<br>
+                                   [ompi_check_package_header_happy=&quot;no&quot;])
<br>
+                  ]))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$ompi_check_package_header_happy&quot; = &quot;no&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[# no go on the as is - reset the cache and try again
<br>
-                   unset ompi_Header])])
<br>
+                   unset ompi_Header])
<br>
+            ])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$ompi_check_package_header_happy&quot; = &quot;no&quot;],
<br>
-          [AS_IF([test &quot;$3&quot; != &quot;&quot;],
<br>
+	  AS_IF([test &quot;$3&quot; != &quot;&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1_CPPFLAGS=&quot;$$1_CPPFLAGS -I$3/include&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPPFLAGS=&quot;$CPPFLAGS -I$3/include&quot;])
<br>
-           AC_CHECK_HEADER([$2], [$4], [$5])],
<br>
-          [$4])
<br>
+           # check to see if the header file was detected previously and only
<br>
+           # do a check if it was not.  This is necessary to do for
<br>
+           # things like sctp.h that has a dependency that we cannot detect
<br>
+           # in this part of the code.
<br>
+           AS_IF(AS_VAR_IF([ompi_Header], [no],
<br>
+                 [AC_CHECK_HEADER([$2], [$4], [$5])]),
<br>
+                 [$4])
<br>
+          )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset ompi_check_package_header_happy])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dnl AS_VAR_POPDEF([ompi_Header])dnl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19479.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19477.php">TERRY DONTJE: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="19450.php">Siegmar Gross: "[OMPI users] problem with sctp.h on Solaris"</a>
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
