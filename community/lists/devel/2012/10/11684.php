<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 15:52:34 2012" -->
<!-- isoreceived="20121030195234" -->
<!-- sent="Tue, 30 Oct 2012 15:52:30 -0400" -->
<!-- isosent="20121030195230" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh" -->
<!-- id="37E9A05C-27D2-4049-9D7A-45AD1D60D7CB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121030194005.486D015F965_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 15:52:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11685.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<li><strong>Previous message:</strong> <a href="11683.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
<li><strong>Reply:</strong> <a href="11686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WAIT.
<br>
<p>This contradicts the intent of what I said on the call this morning.
<br>
<p>The point is that any env variable that begins with &quot;OMPI_&quot; is supposed to be propagated out to all the remote processes.  It's a cheap/easy way for users to propagate their env variables to remote nodes (without needing to &quot;mpirun -x&quot; every variable they want to export).  
<br>
<p>Specifically, I should be able to do something like this:
<br>
<p>-----
<br>
$ hostname
<br>
my_localhost
<br>
$ cat myscript
<br>
:
<br>
echo `hostname`: $OMPI_foo
<br>
$ export OMPI_foo=bar
<br>
$ cat hostfile
<br>
some_remote_host
<br>
$ mpirun --hostfile hostfile -np 1 myscript
<br>
some_remote_host: bar
<br>
$
<br>
-----
<br>
<p>This behavior has been in OMPI for a long time; please do not take it out.
<br>
<p>If exporting non-MCA OMPI_&lt;foo&gt; env variables causes the problem, then it's a side effect.
<br>
<p><p><p>On Oct 30, 2012, at 3:40 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2012-10-30 15:40:04 EDT (Tue, 30 Oct 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 27526
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27526">https://svn.open-mpi.org/trac/ompi/changeset/27526</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fix bug in plm/rsh that could add extraneous mca options to the orted argv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr:v1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/rsh/plm_rsh_module.c |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/rsh/plm_rsh_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/rsh/plm_rsh_module.c	Tue Oct 30 15:23:15 2012	(r27525)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/rsh/plm_rsh_module.c	2012-10-30 15:40:04 EDT (Tue, 30 Oct 2012)	(r27526)
</span><br>
<span class="quotelev1">&gt; @@ -586,7 +586,7 @@
</span><br>
<span class="quotelev1">&gt;          * only if they aren't already present
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         for (i = 0; NULL != environ[i]; ++i) {
</span><br>
<span class="quotelev1">&gt; -            if (0 == strncmp(&quot;OMPI_&quot;, environ[i], 5)) {
</span><br>
<span class="quotelev1">&gt; +            if (0 == strncmp(&quot;OMPI_MCA&quot;, environ[i], 8)) {
</span><br>
<span class="quotelev1">&gt;                 /* check for duplicate in app-&gt;env - this
</span><br>
<span class="quotelev1">&gt;                  * would have been placed there by the
</span><br>
<span class="quotelev1">&gt;                  * cmd line processor. By convention, we
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11685.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<li><strong>Previous message:</strong> <a href="11683.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
<li><strong>Reply:</strong> <a href="11686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27526 - trunk/orte/mca/plm/rsh"</a>
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
