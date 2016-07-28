<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 10:40:33 2008" -->
<!-- isoreceived="20080326144033" -->
<!-- sent="Wed, 26 Mar 2008 10:40:25 -0400" -->
<!-- isosent="20080326144025" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956" -->
<!-- id="0AC3AF33-F3E4-4966-92DD-C849A135FC66_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200803251718.m2PHIH8d015491_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-26 10:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3536.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Previous message:</strong> <a href="3534.php">Lenny Verkhovsky: "[OMPI devel] trunk segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3536.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Reply:</strong> <a href="3536.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I think this commit is not quite correct. I'm working on a patch to  
<br>
fix it at the moment, but just wanted to give a heads up for anyone  
<br>
that is experience the same problem I am.
<br>
<p>Before this commit I could set &quot;opal_event_include=select&quot; in  
<br>
my .openmpi/mca-params.conf file and the event engine would only use  
<br>
'select' for all OMPI/ORTE processes. This commit overrides this  
<br>
selection by forcing that all MPI apps use &quot;all&quot;. I noticed the break  
<br>
since the FT builds (which require 'select' at the moment) were failing.
<br>
<p>The fix might be as easy as checking to see if the user specified  
<br>
anything other than the default then forcing only if the user did not  
<br>
define anything. Thoughts?
<br>
<p>-- Josh
<br>
<p>On Mar 25, 2008, at 1:18 PM, jsquyres_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2008-03-25 13:18:17 EDT (Tue, 25 Mar 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17956
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17956">https://svn.open-mpi.org/trac/ompi/changeset/17956</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix #1253: default libevent to use select/poll and only use the other
</span><br>
<span class="quotelev1">&gt; mechanisms (such as epoll) if someone (ompi_mpi_init()) requests
</span><br>
<span class="quotelev1">&gt; otherwise.  See big comment in opal/event/event.c for a full
</span><br>
<span class="quotelev1">&gt; explanation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_mpi_init.c |    32 ++++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +++-----
</span><br>
<span class="quotelev1">&gt;   trunk/opal/event/event.c           |    37 ++++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++-----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/orted/orted_main.c      |    31  
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt;   3 files changed, 59 insertions(+), 41 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/runtime/ompi_mpi_init.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/runtime/ompi_mpi_init.c	2008-03-25 13:18:17 EDT (Tue,  
</span><br>
<span class="quotelev1">&gt; 25 Mar 2008)
</span><br>
<span class="quotelev1">&gt; @@ -234,15 +234,37 @@
</span><br>
<span class="quotelev1">&gt;     /* see comment below about sched_yield */
</span><br>
<span class="quotelev1">&gt;     int num_processors;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* Join the run-time environment - do the things that don't hit
</span><br>
<span class="quotelev1">&gt; -       the registry */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = opal_init())) {
</span><br>
<span class="quotelev1">&gt; -        error = &quot;ompi_mpi_init: opal_init failed&quot;;
</span><br>
<span class="quotelev1">&gt; +    /* Setup enough to check get/set MCA params */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = opal_init_util())) {
</span><br>
<span class="quotelev1">&gt; +        error = &quot;ompi_mpi_init: opal_init_util failed&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /* _After_ opal_init_util() but _before_ orte_init(), we need to
</span><br>
<span class="quotelev1">&gt; +       set an MCA param that tells libevent that it's ok to use any
</span><br>
<span class="quotelev1">&gt; +       mechanism in libevent that si available on this platform  
</span><br>
<span class="quotelev1">&gt; (e.g.,
</span><br>
<span class="quotelev1">&gt; +       epoll and friends).  Per opal/event/event.s, we default to
</span><br>
<span class="quotelev1">&gt; +       select/poll -- but we know that MPI processes won't be using
</span><br>
<span class="quotelev1">&gt; +       pty's with the event engine, so it's ok to relax this
</span><br>
<span class="quotelev1">&gt; +       constraint and let any fd-monitoring mechanism be used. */
</span><br>
<span class="quotelev1">&gt; +    ret = mca_base_param_reg_string_name(&quot;opal&quot;, &quot;event_include&quot;,
</span><br>
<span class="quotelev1">&gt; +                                         &quot;Internal orted MCA param:  
</span><br>
<span class="quotelev1">&gt; tell opal_init() to use a specific mechanism in libevent&quot;,
</span><br>
<span class="quotelev1">&gt; +                                         false, false, &quot;all&quot;, NULL);
</span><br>
<span class="quotelev1">&gt; +    if (ret &gt;= 0) {
</span><br>
<span class="quotelev1">&gt; +        /* We have to explicitly &quot;set&quot; the MCA param value here
</span><br>
<span class="quotelev1">&gt; +           because libevent initialization will re-register the MCA
</span><br>
<span class="quotelev1">&gt; +           param and therefore override the default. Setting the  
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev1">&gt; +           here puts the desired value (&quot;all&quot;) in different storage
</span><br>
<span class="quotelev1">&gt; +           that is not overwritten if/when the MCA param is
</span><br>
<span class="quotelev1">&gt; +           re-registered.  Note that we do *NOT* set this value as an
</span><br>
<span class="quotelev1">&gt; +           environment variable, just so that it won't be inherited  
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt; +           any spawned processes and potentially cause unintented
</span><br>
<span class="quotelev1">&gt; +           side-effects with launching ORTE tools... */
</span><br>
<span class="quotelev1">&gt; +        mca_base_param_set_string(ret, &quot;all&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* check to see if we want timing information */
</span><br>
<span class="quotelev1">&gt;     param = mca_base_param_reg_int_name(&quot;ompi&quot;, &quot;timing&quot;,
</span><br>
<span class="quotelev1">&gt;                                         &quot;Request that critical  
</span><br>
<span class="quotelev1">&gt; timing loops be measured&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/event/event.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/event/event.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/event/event.c	2008-03-25 13:18:17 EDT (Tue, 25 Mar  
</span><br>
<span class="quotelev1">&gt; 2008)
</span><br>
<span class="quotelev1">&gt; @@ -256,15 +256,42 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OPAL_HAVE_WORKING_EVENTOPS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /**
</span><br>
<span class="quotelev1">&gt; -     * Retrieve the upper level specified event system, if any.
</span><br>
<span class="quotelev1">&gt; +    /* Retrieve the upper level specified event system, if any.
</span><br>
<span class="quotelev1">&gt; +     * Default to select() on OS X and poll() everywhere else because
</span><br>
<span class="quotelev1">&gt; +     * various parts of OMPI / ORTE use libevent with pty's.  pty's
</span><br>
<span class="quotelev1">&gt; +     * *only* work with select on OS X (tested on Tiger and Leopard);
</span><br>
<span class="quotelev1">&gt; +     * we *know* that both select and poll works with pty's  
</span><br>
<span class="quotelev1">&gt; everywhere
</span><br>
<span class="quotelev1">&gt; +     * else we care about (other mechansisms such as epoll *may* work
</span><br>
<span class="quotelev1">&gt; +     * with pty's -- we have not tested comprehensively with newer
</span><br>
<span class="quotelev1">&gt; +     * versions of Linux, etc.).  So the safe thing to do is:
</span><br>
<span class="quotelev1">&gt; +     *
</span><br>
<span class="quotelev1">&gt; +     * - On OS X, default to using &quot;select&quot; only
</span><br>
<span class="quotelev1">&gt; +     * - Everywhere else, default to using &quot;poll&quot; only (because poll
</span><br>
<span class="quotelev1">&gt; +     *   is more scalable than select)
</span><br>
<span class="quotelev1">&gt; +     *
</span><br>
<span class="quotelev1">&gt; +     * An upper layer may override this setting if it knows that  
</span><br>
<span class="quotelev1">&gt; pty's
</span><br>
<span class="quotelev1">&gt; +     * won't be used with libevent.  For example, we currently have
</span><br>
<span class="quotelev1">&gt; +     * ompi_mpi_init() set to use &quot;all&quot; (to include epoll and  
</span><br>
<span class="quotelev1">&gt; friends)
</span><br>
<span class="quotelev1">&gt; +     * so that the TCP BTL can be a bit more scalable -- because we
</span><br>
<span class="quotelev1">&gt; +     * *know* that MPI apps don't use pty's with libevent.
</span><br>
<span class="quotelev1">&gt; +     * Note that other tools explicitly *do* use pty's with libevent:
</span><br>
<span class="quotelev1">&gt; +     *
</span><br>
<span class="quotelev1">&gt; +     * - orted
</span><br>
<span class="quotelev1">&gt; +     * - orterun (probably only if it launches locally)
</span><br>
<span class="quotelev1">&gt; +     * - ...?
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     mca_base_param_reg_string_name(&quot;opal&quot;, &quot;event_include&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   &quot;Comma-delimited list of  
</span><br>
<span class="quotelev1">&gt; libevent subsystems to use (kqueue, devpoll, epoll, poll, select,  
</span><br>
<span class="quotelev1">&gt; and rtsig)&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   false, false, &quot;all&quot;,  
</span><br>
<span class="quotelev1">&gt; &amp;event_module_include);
</span><br>
<span class="quotelev1">&gt; +                                   &quot;Comma-delimited list of  
</span><br>
<span class="quotelev1">&gt; libevent subsystems to use (kqueue, devpoll, epoll, poll, select,  
</span><br>
<span class="quotelev1">&gt; and rtsig -- depending on your platform)&quot;,
</span><br>
<span class="quotelev1">&gt; +                                   false, false,
</span><br>
<span class="quotelev1">&gt; +#ifdef __APPLE__
</span><br>
<span class="quotelev1">&gt; +                                   &quot;select&quot;,
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +                                   &quot;poll&quot;,
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +                                   &amp;event_module_include);
</span><br>
<span class="quotelev1">&gt;     if (NULL == event_module_include) {
</span><br>
<span class="quotelev1">&gt;         /* Shouldn't happen, but... */
</span><br>
<span class="quotelev1">&gt; -        event_module_include = strdup(&quot;all&quot;);
</span><br>
<span class="quotelev1">&gt; +        event_module_include = strdup(&quot;select&quot;);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     opal_event_module_include =  
</span><br>
<span class="quotelev1">&gt; opal_argv_split(event_module_include,',');
</span><br>
<span class="quotelev1">&gt;     free(event_module_include);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/orted/orted_main.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/orted/orted_main.c	2008-03-25 13:18:17 EDT (Tue, 25  
</span><br>
<span class="quotelev1">&gt; Mar 2008)
</span><br>
<span class="quotelev1">&gt; @@ -178,7 +178,6 @@
</span><br>
<span class="quotelev1">&gt;     char log_file[PATH_MAX];
</span><br>
<span class="quotelev1">&gt;     char *jobidstring;
</span><br>
<span class="quotelev1">&gt;     char *rml_uri;
</span><br>
<span class="quotelev1">&gt; -    char *tmp1, *tmp2;
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t *buffer;
</span><br>
<span class="quotelev1">&gt;     char hostname[100];
</span><br>
<span class="quotelev1">&gt; @@ -264,36 +263,6 @@
</span><br>
<span class="quotelev1">&gt;         if (1000 &lt; i) i=0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* _After_ opal_init_util() (and various other bookkeeping) but
</span><br>
<span class="quotelev1">&gt; -       _before_ orte_init(), we need to set an MCA param that tells
</span><br>
<span class="quotelev1">&gt; -       the orted not to use any other libevent mechanism except
</span><br>
<span class="quotelev1">&gt; -       &quot;select&quot; or &quot;poll&quot; (per potential pty issues with scalable
</span><br>
<span class="quotelev1">&gt; -       fd-monitoring mechanisms such as epoll() and friends -- these
</span><br>
<span class="quotelev1">&gt; -       issues *may* have been fixed in later OS releases and/or newer
</span><br>
<span class="quotelev1">&gt; -       versions of libevent, but we weren't willing to do all the
</span><br>
<span class="quotelev1">&gt; -       testing to figure it out.  So force the orted to use
</span><br>
<span class="quotelev1">&gt; -       select()/poll() *only* -- there's so few fd's in the orted  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; -       it really doesn't matter.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       Note that pty's work fine with poll() on most systems, so we
</span><br>
<span class="quotelev1">&gt; -       prefer that (because it's more scalable than select()).
</span><br>
<span class="quotelev1">&gt; -       However, poll() does *not* work with ptys on OS X, so we use
</span><br>
<span class="quotelev1">&gt; -       select() there. */
</span><br>
<span class="quotelev1">&gt; -    mca_base_param_reg_string_name(&quot;opal&quot;, &quot;event_include&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   &quot;Internal orted MCA param: tell  
</span><br>
<span class="quotelev1">&gt; opal_init() to use a specific mechanism in libevent&quot;,
</span><br>
<span class="quotelev1">&gt; -                                   true, true,
</span><br>
<span class="quotelev1">&gt; -#ifdef __APPLE__
</span><br>
<span class="quotelev1">&gt; -                                   &quot;select&quot;,
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -                                   &quot;poll&quot;,
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -                                   NULL);
</span><br>
<span class="quotelev1">&gt; -    tmp1 = mca_base_param_environ_variable(&quot;opal&quot;, NULL,  
</span><br>
<span class="quotelev1">&gt; &quot;event_include&quot;);
</span><br>
<span class="quotelev1">&gt; -    asprintf(&amp;tmp2, &quot;%s=select&quot;, tmp1);
</span><br>
<span class="quotelev1">&gt; -    putenv(tmp2);
</span><br>
<span class="quotelev1">&gt; -    free(tmp1);
</span><br>
<span class="quotelev1">&gt; -    free(tmp2);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     /* Okay, now on to serious business! */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (orted_globals.hnp) {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3536.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Previous message:</strong> <a href="3534.php">Lenny Verkhovsky: "[OMPI devel] trunk segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3536.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Reply:</strong> <a href="3536.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
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
