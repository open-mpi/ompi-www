<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 15:07:47 2009" -->
<!-- isoreceived="20090216200747" -->
<!-- sent="Mon, 16 Feb 2009 15:07:41 -0500" -->
<!-- isosent="20090216200741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562" -->
<!-- id="735422B0-9750-4A8D-B3EA-B17233A2F126_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4E60CDBF-675E-448F-9FFC-F3A644DAA48C_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-16 15:07:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5432.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>Previous message:</strong> <a href="5430.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>In reply to:</strong> <a href="5430.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5432.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never mind -- you just did.  Thanks!  :-)
<br>
<p>On Feb 16, 2009, at 3:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will you commit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2009, at 2:59 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Spending few minutes to understand, could have pinpointed you to  
</span><br>
<span class="quotelev2">&gt;&gt; the real culprit: the tool itself!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The assert in the code state that on finalize there is still a  
</span><br>
<span class="quotelev2">&gt;&gt; registered signal handler. A quick gdb show that this is for the  
</span><br>
<span class="quotelev2">&gt;&gt; SIG_CHLD. Tracking the signal addition in the tool (breakpoint in  
</span><br>
<span class="quotelev2">&gt;&gt; gdb on opal_event_queue_insert) clearly highlight the place where  
</span><br>
<span class="quotelev2">&gt;&gt; this happens, i.e. orte_wait_init in orte/runtime/orte_wait.c:274.  
</span><br>
<span class="quotelev2">&gt;&gt; So far so good, we're right of tracking the SIG_CHLD, but we're not  
</span><br>
<span class="quotelev2">&gt;&gt; supposed to leave it there when we're done (as the signal is  
</span><br>
<span class="quotelev2">&gt;&gt; registered with the PERSISTENT option). Leaving ... ah there is a  
</span><br>
<span class="quotelev2">&gt;&gt; function to cleanly unregister them, just by the orte_wait_init,  
</span><br>
<span class="quotelev2">&gt;&gt; with a very clear name: orte_wait_finalize. Wonderful, except that  
</span><br>
<span class="quotelev2">&gt;&gt; in the case of a tool this is never called. Strange isn't it that  
</span><br>
<span class="quotelev2">&gt;&gt; no other components in the ompi tree exhibit such a behavior. Maybe  
</span><br>
<span class="quotelev2">&gt;&gt; grep can help ... There we are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bosilca_at_dancer ompi]$ find . -name &quot;*.c&quot; -exec grep -Hn  
</span><br>
<span class="quotelev2">&gt;&gt; orte_wait_finalize {} \;
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/mca/ess/hnp/ess_hnp_module.c:486:    orte_wait_finalize();
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/mca/ess/base/ess_base_std_app.c:222:    orte_wait_finalize();
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/mca/ess/base/ess_base_std_orted.c:310:     
</span><br>
<span class="quotelev2">&gt;&gt; orte_wait_finalize();
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/runtime/orte_wait.c:280:orte_wait_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/runtime/orte_wait.c:872:orte_wait_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/runtime/orte_wait.c:1182:orte_wait_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This clearly show that with the exception of the tools everybody  
</span><br>
<span class="quotelev2">&gt;&gt; else clear their state before leaving. And here we are, a quick  
</span><br>
<span class="quotelev2">&gt;&gt; patch that really fix the problem without removing code that had a  
</span><br>
<span class="quotelev2">&gt;&gt; really good reason to be there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/mca/ess/base/ess_base_std_tool.c	(revision 20564)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/mca/ess/base/ess_base_std_tool.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -158,6 +158,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int orte_ess_base_tool_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_wait_finalize();
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    /* if I am a tool, then all I will have done is
</span><br>
<span class="quotelev2">&gt;&gt;     * a very small subset of orte_init - ensure that
</span><br>
<span class="quotelev2">&gt;&gt;     * I only back those elements out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 16, 2009, at 12:57 , Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This commit seems to have broken the tools. If I use orte-ps then  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on finalize I get an abort() with the following stack:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$ orte-ps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00002aaaabcee155 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00002aaaabcefbf0 in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00002aaaabce75d6 in __assert_fail () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00002aaaaaf734e1 in opal_evsignal_dealloc (base=0x609f50) at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal.c:295
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00002aaaaaf73f36 in poll_dealloc (base=0x609f50,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arg=0x60a9a0) at poll.c:390
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00002aaaaaf70667 in opal_event_base_free (base=0x609f50) at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; event.c:530
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x00002aaaaaf70519 in opal_event_fini () at event.c:390
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x00002aaaaaf5f624 in opal_finalize () at runtime/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_finalize.c:117
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0x00002aaaaacd4fc4 in orte_finalize () at runtime/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_finalize.c:84
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0x000000000040196a in main (argc=1, argv=0x7fffffffdf38) at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte-ps.c:275
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any thoughts on why this is happening for only the tools case?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 14, 2009, at 4:51 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2009-02-14 16:51:09 EST (Sat, 14 Feb 2009)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 20562
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20562">https://svn.open-mpi.org/trac/ompi/changeset/20562</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Release the default base on finalize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/opal/event/event.c |     4 ++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/opal/event/event.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/opal/event/event.c	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/opal/event/event.c	2009-02-14 16:51:09 EST (Sat, 14 Feb  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -386,6 +386,10 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  if (NULL != opal_event_module_include) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      opal_argv_free(opal_event_module_include);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if( NULL != opal_current_base ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        event_base_free(opal_current_base);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        opal_current_base = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="5432.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>Previous message:</strong> <a href="5430.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>In reply to:</strong> <a href="5430.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5432.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
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
