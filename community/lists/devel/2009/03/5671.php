<?
$subject_val = "Re: [OMPI devel] opal_util_register_stackhandlers()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 21:22:11 2009" -->
<!-- isoreceived="20090320012211" -->
<!-- sent="Thu, 19 Mar 2009 21:20:39 -0400" -->
<!-- isosent="20090320012039" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_util_register_stackhandlers()" -->
<!-- id="DA9EF33C-A053-4A55-9054-4A4AF6ECD06D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C26126.2030508_at_cs.vu.nl" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_util_register_stackhandlers()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 21:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5672.php">Jeff Squyres: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5670.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20759"</a>
<li><strong>In reply to:</strong> <a href="5668.php">Kees Verstoep: "[OMPI devel] opal_util_register_stackhandlers()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5674.php">Kees Verstoep: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report!
<br>
<p>I've just changed the behavior to emit a warning and *not* intercept a  
<br>
signal if the old signal action is neither SIG_DFL nor SIG_IGN.  The  
<br>
opal_signal MCA parameter can be set to determine which signals you  
<br>
want to intercept; it defaults to the integer values of SIGABRT,  
<br>
SIGBUS, SIGFPE, SIGSEGV on your system.
<br>
<p>We can probably get this in OMPI v1.3.2.
<br>
<p><p>On Mar 19, 2009, at 11:13 AM, Kees Verstoep wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, opal_util_register_stackhandlers() in opal/util/ 
</span><br>
<span class="quotelev1">&gt; stacktrace.c
</span><br>
<span class="quotelev1">&gt; calls sigaction() with a third NULL argument, meaning you don't look
</span><br>
<span class="quotelev1">&gt; at possibly previously installed signal handlers, and always override
</span><br>
<span class="quotelev1">&gt; them with print_stackframe().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But there are actually realistic scenarios where an application  
</span><br>
<span class="quotelev1">&gt; actively
</span><br>
<span class="quotelev1">&gt; uses these signals, and also wants to use MPI.  As an example, the  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; opal &quot;signal&quot; parameter settings are such that SIG_SEGV is redirected.
</span><br>
<span class="quotelev1">&gt; Typically, indeed, SIG_SEGV indicates a bug somewhere, and the  
</span><br>
<span class="quotelev1">&gt; stacktrace
</span><br>
<span class="quotelev1">&gt; from Open MPI is a nice bonus.   However, the Sun Java JDK uses  
</span><br>
<span class="quotelev1">&gt; SIG_SEGV
</span><br>
<span class="quotelev1">&gt; to detect when stacks should be automatically extended, and it stops  
</span><br>
<span class="quotelev1">&gt; working
</span><br>
<span class="quotelev1">&gt; rather ungracefully when that handler gets replaced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (BTW, we stumbled on this recently when we added an MPI backend for  
</span><br>
<span class="quotelev1">&gt; our
</span><br>
<span class="quotelev1">&gt; Ibis grid programming environment.  It took a bit of time to figure  
</span><br>
<span class="quotelev1">&gt; out
</span><br>
<span class="quotelev1">&gt; what was happening, since we got no usable stacktrace for the thread  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; got bitten.  We suspected a bug in our native code mapping at first,
</span><br>
<span class="quotelev1">&gt; but MPICH did not have this problem).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In most cases, you can of course work around it by manually changing
</span><br>
<span class="quotelev1">&gt; the opal &quot;signal&quot; list, but it would be nicer if Open MPI would detect
</span><br>
<span class="quotelev1">&gt; the situation, and e.g. only install the stack printer when there is
</span><br>
<span class="quotelev1">&gt; no handler yet, or at least warn about the possible clash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Kees Verstoep
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
<li><strong>Next message:</strong> <a href="5672.php">Jeff Squyres: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5670.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20759"</a>
<li><strong>In reply to:</strong> <a href="5668.php">Kees Verstoep: "[OMPI devel] opal_util_register_stackhandlers()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5674.php">Kees Verstoep: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
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
