<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 16:37:34 2009" -->
<!-- isoreceived="20090216213734" -->
<!-- sent="Mon, 16 Feb 2009 16:37:05 -0500" -->
<!-- isosent="20090216213705" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562" -->
<!-- id="6BFBED83-A901-44B9-8DC3-0FC1F35BA454_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A047281D-5D5D-462D-A347-A740B1F02F2B_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-16 16:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5433.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5431.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>In reply to:</strong> <a href="5429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the fix.
<br>
-- Josh
<br>
<p>On Feb 16, 2009, at 2:59 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Spending few minutes to understand, could have pinpointed you to  
</span><br>
<span class="quotelev1">&gt; the real culprit: the tool itself!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The assert in the code state that on finalize there is still a  
</span><br>
<span class="quotelev1">&gt; registered signal handler. A quick gdb show that this is for the  
</span><br>
<span class="quotelev1">&gt; SIG_CHLD. Tracking the signal addition in the tool (breakpoint in  
</span><br>
<span class="quotelev1">&gt; gdb on opal_event_queue_insert) clearly highlight the place where  
</span><br>
<span class="quotelev1">&gt; this happens, i.e. orte_wait_init in orte/runtime/orte_wait.c:274.  
</span><br>
<span class="quotelev1">&gt; So far so good, we're right of tracking the SIG_CHLD, but we're not  
</span><br>
<span class="quotelev1">&gt; supposed to leave it there when we're done (as the signal is  
</span><br>
<span class="quotelev1">&gt; registered with the PERSISTENT option). Leaving ... ah there is a  
</span><br>
<span class="quotelev1">&gt; function to cleanly unregister them, just by the orte_wait_init,  
</span><br>
<span class="quotelev1">&gt; with a very clear name: orte_wait_finalize. Wonderful, except that  
</span><br>
<span class="quotelev1">&gt; in the case of a tool this is never called. Strange isn't it that  
</span><br>
<span class="quotelev1">&gt; no other components in the ompi tree exhibit such a behavior. Maybe  
</span><br>
<span class="quotelev1">&gt; grep can help ... There we are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bosilca_at_dancer ompi]$ find . -name &quot;*.c&quot; -exec grep -Hn  
</span><br>
<span class="quotelev1">&gt; orte_wait_finalize {} \;
</span><br>
<span class="quotelev1">&gt; ./orte/mca/ess/hnp/ess_hnp_module.c:486:    orte_wait_finalize();
</span><br>
<span class="quotelev1">&gt; ./orte/mca/ess/base/ess_base_std_app.c:222:    orte_wait_finalize();
</span><br>
<span class="quotelev1">&gt; ./orte/mca/ess/base/ess_base_std_orted.c:310:    orte_wait_finalize();
</span><br>
<span class="quotelev1">&gt; ./orte/runtime/orte_wait.c:280:orte_wait_finalize(void)
</span><br>
<span class="quotelev1">&gt; ./orte/runtime/orte_wait.c:872:orte_wait_finalize(void)
</span><br>
<span class="quotelev1">&gt; ./orte/runtime/orte_wait.c:1182:orte_wait_finalize(void)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This clearly show that with the exception of the tools everybody  
</span><br>
<span class="quotelev1">&gt; else clear their state before leaving. And here we are, a quick  
</span><br>
<span class="quotelev1">&gt; patch that really fix the problem without removing code that had a  
</span><br>
<span class="quotelev1">&gt; really good reason to be there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/ess/base/ess_base_std_tool.c	(revision 20564)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/ess/base/ess_base_std_tool.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -158,6 +158,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int orte_ess_base_tool_finalize(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; +    orte_wait_finalize();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* if I am a tool, then all I will have done is
</span><br>
<span class="quotelev1">&gt;       * a very small subset of orte_init - ensure that
</span><br>
<span class="quotelev1">&gt;       * I only back those elements out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2009, at 12:57 , Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This commit seems to have broken the tools. If I use orte-ps then  
</span><br>
<span class="quotelev2">&gt;&gt; on finalize I get an abort() with the following stack:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shell$ orte-ps
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002aaaabcee155 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002aaaabcefbf0 in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002aaaabce75d6 in __assert_fail () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002aaaaaf734e1 in opal_evsignal_dealloc (base=0x609f50) at  
</span><br>
<span class="quotelev2">&gt;&gt; signal.c:295
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002aaaaaf73f36 in poll_dealloc (base=0x609f50,  
</span><br>
<span class="quotelev2">&gt;&gt; arg=0x60a9a0) at poll.c:390
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00002aaaaaf70667 in opal_event_base_free (base=0x609f50) at  
</span><br>
<span class="quotelev2">&gt;&gt; event.c:530
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00002aaaaaf70519 in opal_event_fini () at event.c:390
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00002aaaaaf5f624 in opal_finalize () at runtime/ 
</span><br>
<span class="quotelev2">&gt;&gt; opal_finalize.c:117
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00002aaaaacd4fc4 in orte_finalize () at runtime/ 
</span><br>
<span class="quotelev2">&gt;&gt; orte_finalize.c:84
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x000000000040196a in main (argc=1, argv=0x7fffffffdf38) at  
</span><br>
<span class="quotelev2">&gt;&gt; orte-ps.c:275
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on why this is happening for only the tools case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 14, 2009, at 4:51 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2009-02-14 16:51:09 EST (Sat, 14 Feb 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 20562
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20562">https://svn.open-mpi.org/trac/ompi/changeset/20562</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Release the default base on finalize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/event/event.c |     4 ++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/event/event.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/event/event.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/event/event.c	2009-02-14 16:51:09 EST (Sat, 14 Feb  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -386,6 +386,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (NULL != opal_event_module_include) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        opal_argv_free(opal_event_module_include);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if( NULL != opal_current_base ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        event_base_free(opal_current_base);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        opal_current_base = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5433.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5431.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>In reply to:</strong> <a href="5429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
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
