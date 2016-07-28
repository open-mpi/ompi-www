<?
$subject_val = "Re: [OMPI devel] FreeBSD timer_base_open error?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 11:07:59 2008" -->
<!-- isoreceived="20080326150759" -->
<!-- sent="Wed, 26 Mar 2008 10:07:48 -0500 (CDT)" -->
<!-- isosent="20080326150748" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD timer_base_open error?" -->
<!-- id="Pine.LNX.4.64.0803260953060.12086_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AFB6621B-8BCD-4C85-8B68-FECB6B05BCD1_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-26 11:07:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3538.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Previous message:</strong> <a href="3536.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>In reply to:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3545.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3545.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -
<br>
<p>Good catch -- that's going to cause a problem :).  But I think we should 
<br>
add yet another check to also make sure that we're on Linux.  So the three 
<br>
tests would be:
<br>
<p>&nbsp;&nbsp;&nbsp;1) Am I on a platform that we have timer assembly support for?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(That's the long list of architectures that we recently,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and incorrectly, added).
<br>
&nbsp;&nbsp;&nbsp;2) Am I on Linux (since we really only know how to parse
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/proc/cpuinfo on Linux)
<br>
&nbsp;&nbsp;&nbsp;3) Is /proc/cpuinfo readable (Because we have a couple architectures
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that are reported by config.guess as Linux, but don't have
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/proc/cpuinfo).
<br>
<p>Make sense?
<br>
<p>Brian
<br>
<p>On Wed, 26 Mar 2008, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I was working off-list with Brad on this. Brian is right, the logic in 
</span><br>
<span class="quotelev1">&gt; configure.m4 is wrong. It overwrite the timer_linux_happy to yes if the host 
</span><br>
<span class="quotelev1">&gt; match &quot;i?86-*|x86_64*|ia64-*|powerpc-*|powerpc64-*|sparc*-*&quot;. On FreeBSD host 
</span><br>
<span class="quotelev1">&gt; is i386-unknown-freebsd6.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a quick and dirty patch. I just move the selection logic a little bit 
</span><br>
<span class="quotelev1">&gt; around, without any major modifications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: configure.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- configure.m4	(revision 17970)
</span><br>
<span class="quotelev1">&gt; +++ configure.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -40,14 +40,12 @@
</span><br>
<span class="quotelev1">&gt;                 [timer_linux_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;                 [timer_linux_happy=&quot;no&quot;])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    AS_IF([test &quot;$timer_linux_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; -          [AS_IF([test -r &quot;/proc/cpuinfo&quot;],
</span><br>
<span class="quotelev1">&gt; -                 [timer_linux_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; -                 [timer_linux_happy=&quot;no&quot;])])
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;   case &quot;${host}&quot; in
</span><br>
<span class="quotelev1">&gt;   i?86-*|x86_64*|ia64-*|powerpc-*|powerpc64-*|sparc*-*)
</span><br>
<span class="quotelev1">&gt; -        timer_linux_happy=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt; +        AS_IF([test &quot;$timer_linux_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +              [AS_IF([test -r &quot;/proc/cpuinfo&quot;],
</span><br>
<span class="quotelev1">&gt; +                     [timer_linux_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +                     [timer_linux_happy=&quot;no&quot;])])
</span><br>
<span class="quotelev1">&gt;        ;;
</span><br>
<span class="quotelev1">&gt;   *)
</span><br>
<span class="quotelev1">&gt;        timer_linux_happy=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2008, at 10:31 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2008, at 6:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;linux&quot; is the name of the component.  It looks like opal/mca/timer/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux/timer_linux_component.c is doing some checks during component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open() and returning an error if it can't be used (e.g,. if it's not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on linux).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The timer components are a little different than normal MCA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frameworks; they *must* be compiled in libopen-pal statically, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there will only be one of them built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case, I'm guessing that linux was built simply because nothing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else was selected to be built, but then its component_open() function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed because it didn't find /proc/cpuinfo.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is actually incorrect.  The linux component looks for /proc/
</span><br>
<span class="quotelev2">&gt;&gt; cpuinfo and builds if it founds that file.  There's a base component
</span><br>
<span class="quotelev2">&gt;&gt; that's built if nothing else is found.  The configure logic for the
</span><br>
<span class="quotelev2">&gt;&gt; linux component is probably not the right thing to do -- it should
</span><br>
<span class="quotelev2">&gt;&gt; probably be modified to check both for that file (there are systems
</span><br>
<span class="quotelev2">&gt;&gt; that call themselves &quot;linux&quot; but don't have a /proc/cpuinfo) is
</span><br>
<span class="quotelev2">&gt;&gt; readable and that we're actually on Linux.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev2">&gt;&gt;  throw yourself at the ground and miss.
</span><br>
<span class="quotelev2">&gt;&gt;      Douglas Adams, 'The Hitchhikers Guide to the Galaxy'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3538.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Previous message:</strong> <a href="3536.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>In reply to:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3545.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Reply:</strong> <a href="3545.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
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
