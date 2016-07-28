<?
$subject_val = "Re: [OMPI devel] FreeBSD timer_base_open error?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 08:00:22 2008" -->
<!-- isoreceived="20080327120022" -->
<!-- sent="Thu, 27 Mar 2008 08:00:12 -0400" -->
<!-- isosent="20080327120012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD timer_base_open error?" -->
<!-- id="C0F90231-D352-4D2E-A765-5DAB32397C23_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0803260953060.12086_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 08:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3546.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3544.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3537.php">Brian W. Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Added as <a href="https://svn.open-mpi.org/trac/ompi/ticket/1261">https://svn.open-mpi.org/trac/ompi/ticket/1261</a>.
<br>
<p>On Mar 26, 2008, at 11:07 AM, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good catch -- that's going to cause a problem :).  But I think we  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; add yet another check to also make sure that we're on Linux.  So the  
</span><br>
<span class="quotelev1">&gt; three
</span><br>
<span class="quotelev1">&gt; tests would be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1) Am I on a platform that we have timer assembly support for?
</span><br>
<span class="quotelev1">&gt;      (That's the long list of architectures that we recently,
</span><br>
<span class="quotelev1">&gt;      and incorrectly, added).
</span><br>
<span class="quotelev1">&gt;   2) Am I on Linux (since we really only know how to parse
</span><br>
<span class="quotelev1">&gt;      /proc/cpuinfo on Linux)
</span><br>
<span class="quotelev1">&gt;   3) Is /proc/cpuinfo readable (Because we have a couple architectures
</span><br>
<span class="quotelev1">&gt;      that are reported by config.guess as Linux, but don't have
</span><br>
<span class="quotelev1">&gt;      /proc/cpuinfo).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 26 Mar 2008, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was working off-list with Brad on this. Brian is right, the logic  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; configure.m4 is wrong. It overwrite the timer_linux_happy to yes if  
</span><br>
<span class="quotelev2">&gt;&gt; the host
</span><br>
<span class="quotelev2">&gt;&gt; match &quot;i?86-*|x86_64*|ia64-*|powerpc-*|powerpc64-*|sparc*-*&quot;. On  
</span><br>
<span class="quotelev2">&gt;&gt; FreeBSD host
</span><br>
<span class="quotelev2">&gt;&gt; is i386-unknown-freebsd6.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a quick and dirty patch. I just move the selection logic a  
</span><br>
<span class="quotelev2">&gt;&gt; little bit
</span><br>
<span class="quotelev2">&gt;&gt; around, without any major modifications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- configure.m4	(revision 17970)
</span><br>
<span class="quotelev2">&gt;&gt; +++ configure.m4	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -40,14 +40,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;                [timer_linux_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                [timer_linux_happy=&quot;no&quot;])])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    AS_IF([test &quot;$timer_linux_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; -          [AS_IF([test -r &quot;/proc/cpuinfo&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; -                 [timer_linux_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; -                 [timer_linux_happy=&quot;no&quot;])])
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;  case &quot;${host}&quot; in
</span><br>
<span class="quotelev2">&gt;&gt;  i?86-*|x86_64*|ia64-*|powerpc-*|powerpc64-*|sparc*-*)
</span><br>
<span class="quotelev2">&gt;&gt; -        timer_linux_happy=&quot;yes&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +        AS_IF([test &quot;$timer_linux_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +              [AS_IF([test -r &quot;/proc/cpuinfo&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +                     [timer_linux_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +                     [timer_linux_happy=&quot;no&quot;])])
</span><br>
<span class="quotelev2">&gt;&gt;       ;;
</span><br>
<span class="quotelev2">&gt;&gt;  *)
</span><br>
<span class="quotelev2">&gt;&gt;       timer_linux_happy=&quot;no&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2008, at 10:31 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 25, 2008, at 6:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;linux&quot; is the name of the component.  It looks like opal/mca/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; timer/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linux/timer_linux_component.c is doing some checks during component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open() and returning an error if it can't be used (e.g,. if it's  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on linux).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The timer components are a little different than normal MCA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; frameworks; they *must* be compiled in libopen-pal statically, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there will only be one of them built.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In this case, I'm guessing that linux was built simply because  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nothing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; else was selected to be built, but then its component_open()  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed because it didn't find /proc/cpuinfo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is actually incorrect.  The linux component looks for /proc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuinfo and builds if it founds that file.  There's a base component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that's built if nothing else is found.  The configure logic for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux component is probably not the right thing to do -- it should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably be modified to check both for that file (there are systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that call themselves &quot;linux&quot; but don't have a /proc/cpuinfo) is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readable and that we're actually on Linux.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; throw yourself at the ground and miss.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Douglas Adams, 'The Hitchhikers Guide to the Galaxy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3546.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3544.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3537.php">Brian W. Barrett: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
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
