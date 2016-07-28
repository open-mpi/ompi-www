<?
$subject_val = "[OMPI devel] Removing error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 10:36:14 2011" -->
<!-- isoreceived="20111019143614" -->
<!-- sent="Wed, 19 Oct 2011 10:36:09 -0400" -->
<!-- isosent="20111019143609" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Removing error message" -->
<!-- id="DF14B756-2C45-42AB-8883-10BF795115EA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201110191304.p9JD4lsQ019282_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Removing error message<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 10:36:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9848.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9846.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Can you put this back?
<br>
<p>I don't think the error message is meaningless.  It's there because people typically copy-n-paste the error message to the user's list (or whatever their support channel is).  That error message will mean something to an OMPI developer; (I'm guessing/assuming) that's why it was there.
<br>
<p><p>On Oct 19, 2011, at 9:04 AM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2011-10-19 09:04:46 EDT (Wed, 19 Oct 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25324
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25324">https://svn.open-mpi.org/trac/ompi/changeset/25324</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; The error here is meaningless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/debuggers/ompi_debuggers.c |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/debuggers/ompi_debuggers.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/debuggers/ompi_debuggers.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/debuggers/ompi_debuggers.c	2011-10-19 09:04:46 EDT (Wed, 19 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -260,8 +260,8 @@
</span><br>
<span class="quotelev1">&gt;             /* if it failed for some reason, then we are in trouble -
</span><br>
<span class="quotelev1">&gt;              * for now, just report the problem and give up waiting
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt; -            opal_output(0, &quot;Debugger_attach[rank=%ld]: could not wait for debugger - error %s!&quot;,
</span><br>
<span class="quotelev1">&gt; -                        (long)ORTE_PROC_MY_NAME-&gt;vpid, ORTE_ERROR_NAME(rc));
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;Debugger_attach[rank=%ld]: could not wait for debugger!&quot;,
</span><br>
<span class="quotelev1">&gt; +                        (long)ORTE_PROC_MY_NAME-&gt;vpid);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9848.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9846.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
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
