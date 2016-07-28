<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 08:28:52 2009" -->
<!-- isoreceived="20090314122852" -->
<!-- sent="Sat, 14 Mar 2009 08:28:47 -0400" -->
<!-- isosent="20090314122847" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="3D5D6AF7-F8ED-432E-8301-C6437428782D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0FCA3A65-D3F9-4183-B3F9-77D053380E11_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 08:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8444.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8457.php">Samuel Sarholz: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8457.php">Samuel Sarholz: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  I sent the patch to George but didn't send it to everyone  
<br>
else.  Here's a patch showing how I propose to fix this problem:
<br>
<p>Index: ompi/mca/op/op.h
<br>
===================================================================
<br>
--- ompi/mca/op/op.h	(revision 20777)
<br>
+++ ompi/mca/op/op.h	(working copy)
<br>
@@ -258,14 +258,41 @@
<br>
&nbsp;&nbsp;typedef ompi_op_base_handler_fn_1_0_0_t ompi_op_base_handler_fn_t;
<br>
<p>&nbsp;&nbsp;/*
<br>
+ * Per the thread starting here:
<br>
+ *
<br>
+ * <a href="http://www.open-mpi.org/community/lists/users/2009/03/8402.php">http://www.open-mpi.org/community/lists/users/2009/03/8402.php</a>
<br>
+ *
<br>
+ * We [re-]discovered that AC_C_RESTRICT only checks for &quot;restrict&quot; in
<br>
+ * the C compiler.  But this header file is included in components.cc
<br>
+ * (i.e., ompi_info), so the &quot;restrict&quot; here may be problematic for
<br>
+ * the C++ compiler.
<br>
+ *
<br>
+ * Since we *know* that this function is only used in C code in OMPI
<br>
+ * (e.g., it's not used in ompi_info or the C++ bindings), just
<br>
+ * have an &quot;alternate&quot;
<br>
+ */
<br>
+#if defined(c_plusplus) || defined(__cplusplus)
<br>
+#define OMPI_SAFE_RESTRICT
<br>
+#else
<br>
+#define OMPI_SAFE_RESTRICT restrict
<br>
+#endif
<br>
+/*
<br>
&nbsp;&nbsp;&nbsp;* Typedef for 3-buffer (two input and one output) op functions.
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
-typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *,
<br>
-                                                      void *,
<br>
-                                                      void *, int *,
<br>
+typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void  
<br>
*OMPI_SAFE_RESTRICT,
<br>
+                                                      void  
<br>
*OMPI_SAFE_RESTRICT,
<br>
+                                                      void  
<br>
*OMPI_SAFE_RESTRICT,
<br>
+                                                      int *,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct  
<br>
ompi_datatype_t **,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct  
<br>
ompi_op_base_module_1_0_0_t *);
<br>
<p>+/*
<br>
+ * We don't want anyone else using OMPI_SAFE_RESTRICT elsewhere in the
<br>
+ * code base; this hack is only because we don't have an
<br>
+ * AC_CXX_RESTRICT Autoconf test.
<br>
+ */
<br>
+#undef OMPI_SAFE_RESTRICT
<br>
+
<br>
&nbsp;&nbsp;typedef ompi_op_base_3buff_handler_fn_1_0_0_t  
<br>
ompi_op_base_3buff_handler_fn_t;
<br>
<p>&nbsp;&nbsp;/**
<br>
<p><p><p>On Mar 14, 2009, at 8:22 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Yes, it does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It re-looking at this problem, it seemed to me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The real fix is to talk to the AC people and get something like
</span><br>
<span class="quotelev1">&gt; AC_CXX_RESTRICT.  The PGI compiler is one place where &quot;restrict&quot;
</span><br>
<span class="quotelev1">&gt; support may be different in the C and C++ compilers.  I'm not sure
</span><br>
<span class="quotelev1">&gt; what the Right answer is there, but I'll ask them about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. In this specific case, the use of &quot;restrict&quot; *does not matter* in
</span><br>
<span class="quotelev1">&gt; components.cc.  This particular part of the file is not what
</span><br>
<span class="quotelev1">&gt; components.cc needs/uses.  So it's ok to #define it away to nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Since this problem now exists in at least *2* compilers that we
</span><br>
<span class="quotelev1">&gt; know about (Sun, PGI), it seemed that -- at least while waiting for
</span><br>
<span class="quotelev1">&gt; some kind of proper fix from AC -- just #define restrict away for C++
</span><br>
<span class="quotelev1">&gt; for this particular case was ok, rather than try to adapt to every
</span><br>
<span class="quotelev1">&gt; compiler.  Rolf's fix was ok previously because we thought it was
</span><br>
<span class="quotelev1">&gt; specific to one compiler.  But now the door is open to other
</span><br>
<span class="quotelev1">&gt; compilers, so let's use a broad stroke to work around it for all C++
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's why I coded it up this way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 14, 2009, at 7:39 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; You know this all looks very similar to the reason why rolfv putback
</span><br>
<span class="quotelev2">&gt; &gt; r20351 which essentially defined out restrict within
</span><br>
<span class="quotelev2">&gt; &gt; opal_config_bottom.h when using Sun Studio.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 13 Mar 2009 16:40:49 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;2ACA69AB-5F23-4AE9-8826-77A6348E934A_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 13, 2009, at 4:37 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;From config.log
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; configure:21522: checking for C/C++ restrict keyword
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; configure:21558: pgcc -c -DNDEBUG -fast -Msignextend -tp  
</span><br>
<span class="quotelev1">&gt; p7-64   &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; conftest.c &gt;&amp;5
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; configure:21564: $? = 0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; configure:21582: result: restrict
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; So you only check using pgcc (not pgCC)?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The AC_C_RESTRICT test only checks the C compiler, yet.  It's an
</span><br>
<span class="quotelev2">&gt; &gt; Autoconf-builtin test; we didn't write it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Odd that you get &quot;restrict&quot; and I get &quot;__restrict&quot;.  Hrm.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, I suppose that one solution might be to disable those  
</span><br>
<span class="quotelev1">&gt; prototypes
</span><br>
<span class="quotelev2">&gt; &gt; in the op.h header file when they're included in components.cc  
</span><br>
<span class="quotelev1">&gt; (that's
</span><br>
<span class="quotelev2">&gt; &gt; a source file in the ompi_info executable; it shouldn't need the
</span><br>
<span class="quotelev2">&gt; &gt; specific MPI_Op callback prototypes).  Fortunately, we have very
</span><br>
<span class="quotelev2">&gt; &gt; little
</span><br>
<span class="quotelev2">&gt; &gt; C++ code in OMPI, so this isn't a huge issue (C++ is only used  for
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; MPI C++ bindings -- of course -- and in some of the command  line
</span><br>
<span class="quotelev2">&gt; &gt; executables).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me see what I can cook up, and then let me see if I can convince
</span><br>
<span class="quotelev2">&gt; &gt; George that it's the correct answer.   ;-)
</span><br>
<span class="quotelev2">&gt; &gt; -- Jeff Squyres Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8444.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8457.php">Samuel Sarholz: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8457.php">Samuel Sarholz: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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
