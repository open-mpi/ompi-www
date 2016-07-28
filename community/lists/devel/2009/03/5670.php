<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20759";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 20:49:15 2009" -->
<!-- isoreceived="20090320004915" -->
<!-- sent="Thu, 19 Mar 2009 20:48:56 -0400" -->
<!-- isosent="20090320004856" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20759" -->
<!-- id="3246AA45-2545-4715-8897-2134D2328A7D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200903200041.n2K0fLji007271_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20759<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 20:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Previous message:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a glitch in the SVN server this evening; you can tell that  
<br>
this r number is far lower than it should be.
<br>
<p>IU is fixing it right now.  This commit will occur again with a new,  
<br>
higher SVN r number shortly...
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: March 19, 2009 8:41:21 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r20759
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2009-03-19 20:41:21 EDT (Thu, 19 Mar 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20759
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20759">https://svn.open-mpi.org/trac/ompi/changeset/20759</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Per a comment on the users list, don't try to install our own signal
</span><br>
<span class="quotelev1">&gt; handlers if there are already non-default handlers installed.  Print a
</span><br>
<span class="quotelev1">&gt; warning if that situation arises.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; '''NOTE:''' This is a definite target for OPAL_SOS conversion -- as it
</span><br>
<span class="quotelev1">&gt; is right now, this message will be displayed for ''every'' MPI
</span><br>
<span class="quotelev1">&gt; process.  We want this to be OPAL_SOS'ed when that becomes available
</span><br>
<span class="quotelev1">&gt; so that the error message can be aggregated nicely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/util/help-opal-util.txt
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/util/Makefile.am  |     4 +++-
</span><br>
<span class="quotelev1">&gt;    trunk/opal/util/stacktrace.c |    22 ++++++++++++++++++++--
</span><br>
<span class="quotelev1">&gt;    2 files changed, 23 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/Makefile.am
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
<span class="quotelev1">&gt; --- trunk/opal/util/Makefile.am (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/Makefile.am 2009-03-19 20:41:21 EDT (Thu, 19 Mar  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev1">&gt;  #                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -# Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -19,6 +19,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  SUBDIRS = keyval
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +dist_pkgdata_DATA = help-opal-util.txt
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  AM_LFLAGS = -Popal_show_help_yy
</span><br>
<span class="quotelev1">&gt;  LEX_OUTPUT_ROOT = lex.opal_show_help_yy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: trunk/opal/util/help-opal-util.txt
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
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/help-opal-util.txt  2009-03-19 20:41:21 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 19 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,25 @@
</span><br>
<span class="quotelev1">&gt; +# -*- text -*-
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# This is the US/English general help file for Open MPI.
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +[stacktrace signal override]
</span><br>
<span class="quotelev1">&gt; +Open MPI was insertting a signal handler for signal %d but noticed
</span><br>
<span class="quotelev1">&gt; +that there is already a non-default handler installer.  Open MPI's
</span><br>
<span class="quotelev1">&gt; +handler was therefore not installed; your job will continue.  This
</span><br>
<span class="quotelev1">&gt; +warning message will only be displayed once, even if Open MPI
</span><br>
<span class="quotelev1">&gt; +encounters this situation again.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +To avoid displaying this warning message, you can either not install
</span><br>
<span class="quotelev1">&gt; +the error handler for signal %d or you can have Open MPI not try to
</span><br>
<span class="quotelev1">&gt; +install its own signal handler for this signal by setting the
</span><br>
<span class="quotelev1">&gt; +&quot;opal_signals&quot; MCA parameter.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Signal: %d
</span><br>
<span class="quotelev1">&gt; +  Current opal_signals value: %s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/stacktrace.c
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
<span class="quotelev1">&gt; --- trunk/opal/util/stacktrace.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/stacktrace.c        2009-03-19 20:41:21 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 19 Mar 2009)
</span><br>
<span class="quotelev1">&gt; @@ -38,6 +38,7 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/backtrace/backtrace.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #ifndef _NSIG
</span><br>
<span class="quotelev1">&gt;  #define _NSIG 32
</span><br>
<span class="quotelev1">&gt; @@ -410,11 +411,12 @@
</span><br>
<span class="quotelev1">&gt;  int opal_util_register_stackhandlers (void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;  #if OMPI_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp; ! defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; -    struct sigaction act;
</span><br>
<span class="quotelev1">&gt; +    struct sigaction act, old;
</span><br>
<span class="quotelev1">&gt;      char * string_value;
</span><br>
<span class="quotelev1">&gt;      char * tmp;
</span><br>
<span class="quotelev1">&gt;      char * next;
</span><br>
<span class="quotelev1">&gt;      int param, i;
</span><br>
<span class="quotelev1">&gt; +    bool showed_help = false;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      gethostname(stacktrace_hostname, sizeof(stacktrace_hostname));
</span><br>
<span class="quotelev1">&gt;      stacktrace_hostname[sizeof(stacktrace_hostname) - 1] = '\0';
</span><br>
<span class="quotelev1">&gt; @@ -459,10 +461,26 @@
</span><br>
<span class="quotelev1">&gt;          return OPAL_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -      ret = sigaction (sig, &amp;act, NULL);
</span><br>
<span class="quotelev1">&gt; +      ret = sigaction (sig, &amp;act, &amp;old);
</span><br>
<span class="quotelev1">&gt;        if (ret != 0) {
</span><br>
<span class="quotelev1">&gt;          return OPAL_ERR_IN_ERRNO;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; +      if (SIG_IGN != old.sa_handler &amp;&amp; SIG_DFL != old.sa_handler) {
</span><br>
<span class="quotelev1">&gt; +          if (!showed_help) {
</span><br>
<span class="quotelev1">&gt; +              /* JMS This is icky; there is no error message
</span><br>
<span class="quotelev1">&gt; +                 aggregation here so this message may be repeated for
</span><br>
<span class="quotelev1">&gt; +                 every single MPI process...  This should be replaced
</span><br>
<span class="quotelev1">&gt; +                 with OPAL_SOS when that is done so that it can be
</span><br>
<span class="quotelev1">&gt; +                 properly aggregated. */
</span><br>
<span class="quotelev1">&gt; +              opal_show_help(&quot;help-opal-util.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                             &quot;stacktrace signal override&quot;,
</span><br>
<span class="quotelev1">&gt; +                             true, sig, sig, sig, string_value);
</span><br>
<span class="quotelev1">&gt; +              showed_help = true;
</span><br>
<span class="quotelev1">&gt; +          }
</span><br>
<span class="quotelev1">&gt; +          if (0 != sigaction(sig, &amp;old, NULL)) {
</span><br>
<span class="quotelev1">&gt; +              return OPAL_ERR_IN_ERRNO;
</span><br>
<span class="quotelev1">&gt; +          }
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      free(string_value);
</span><br>
<span class="quotelev1">&gt;  #endif /* OMPI_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp; !  
</span><br>
<span class="quotelev1">&gt; defined(__WINDOWS__) */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Previous message:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
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
