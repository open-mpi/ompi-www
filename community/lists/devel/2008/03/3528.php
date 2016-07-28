<?
$subject_val = "Re: [OMPI devel] FreeBSD timer_base_open error?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 00:23:16 2008" -->
<!-- isoreceived="20080326042316" -->
<!-- sent="Wed, 26 Mar 2008 00:23:00 -0400" -->
<!-- isosent="20080326042300" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD timer_base_open error?" -->
<!-- id="AFB6621B-8BCD-4C85-8B68-FECB6B05BCD1_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D5D23ACD-B9A5-4A00-88D3-F334093337DA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] FreeBSD timer_base_open error?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-26 00:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>In reply to:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3537.php">Brian W. Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3537.php">Brian W. Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was working off-list with Brad on this. Brian is right, the logic in  
<br>
configure.m4 is wrong. It overwrite the timer_linux_happy to yes if  
<br>
the host match &quot;i?86-*|x86_64*|ia64-*|powerpc-*|powerpc64-*|sparc*-*&quot;.  
<br>
On FreeBSD host is i386-unknown-freebsd6.2.
<br>
<p>Here is a quick and dirty patch. I just move the selection logic a  
<br>
little bit around, without any major modifications.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>Index: configure.m4
<br>
===================================================================
<br>
--- configure.m4	(revision 17970)
<br>
+++ configure.m4	(working copy)
<br>
@@ -40,14 +40,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[timer_linux_happy=&quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[timer_linux_happy=&quot;no&quot;])])
<br>
<p>-    AS_IF([test &quot;$timer_linux_happy&quot; = &quot;yes&quot;],
<br>
-          [AS_IF([test -r &quot;/proc/cpuinfo&quot;],
<br>
-                 [timer_linux_happy=&quot;yes&quot;],
<br>
-                 [timer_linux_happy=&quot;no&quot;])])
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;${host}&quot; in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i?86-*|x86_64*|ia64-*|powerpc-*|powerpc64-*|sparc*-*)
<br>
-        timer_linux_happy=&quot;yes&quot;
<br>
+        AS_IF([test &quot;$timer_linux_happy&quot; = &quot;yes&quot;],
<br>
+              [AS_IF([test -r &quot;/proc/cpuinfo&quot;],
<br>
+                     [timer_linux_happy=&quot;yes&quot;],
<br>
+                     [timer_linux_happy=&quot;no&quot;])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timer_linux_happy=&quot;no&quot;
<br>
<p><p><p>On Mar 25, 2008, at 10:31 PM, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Mar 25, 2008, at 6:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;linux&quot; is the name of the component.  It looks like opal/mca/timer/
</span><br>
<span class="quotelev2">&gt;&gt; linux/timer_linux_component.c is doing some checks during component
</span><br>
<span class="quotelev2">&gt;&gt; open() and returning an error if it can't be used (e.g,. if it's not
</span><br>
<span class="quotelev2">&gt;&gt; on linux).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The timer components are a little different than normal MCA
</span><br>
<span class="quotelev2">&gt;&gt; frameworks; they *must* be compiled in libopen-pal statically, and
</span><br>
<span class="quotelev2">&gt;&gt; there will only be one of them built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this case, I'm guessing that linux was built simply because  
</span><br>
<span class="quotelev2">&gt;&gt; nothing
</span><br>
<span class="quotelev2">&gt;&gt; else was selected to be built, but then its component_open() function
</span><br>
<span class="quotelev2">&gt;&gt; failed because it didn't find /proc/cpuinfo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is actually incorrect.  The linux component looks for /proc/
</span><br>
<span class="quotelev1">&gt; cpuinfo and builds if it founds that file.  There's a base component
</span><br>
<span class="quotelev1">&gt; that's built if nothing else is found.  The configure logic for the
</span><br>
<span class="quotelev1">&gt; linux component is probably not the right thing to do -- it should
</span><br>
<span class="quotelev1">&gt; probably be modified to check both for that file (there are systems
</span><br>
<span class="quotelev1">&gt; that call themselves &quot;linux&quot; but don't have a /proc/cpuinfo) is
</span><br>
<span class="quotelev1">&gt; readable and that we're actually on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev1">&gt;   throw yourself at the ground and miss.
</span><br>
<span class="quotelev1">&gt;       Douglas Adams, 'The Hitchhikers Guide to the Galaxy'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3528/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3529.php">Lenny Verkhovsky: "[OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>In reply to:</strong> <a href="3527.php">Brian Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3537.php">Brian W. Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3537.php">Brian W. Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
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
