<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 16:53:18 2008" -->
<!-- isoreceived="20080425205318" -->
<!-- sent="Fri, 25 Apr 2008 14:53:04 -0600" -->
<!-- isosent="20080425205304" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303" -->
<!-- id="C437A0D0.4EEB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200804252041.m3PKfjIt018142_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 16:53:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3761.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Previous message:</strong> <a href="3759.php">S&#233;rgio Durigan J&#250;nior: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3761.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Reply:</strong> <a href="3761.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...just to clarify, this wasn't a &quot;bug&quot;. It was my understanding per the
<br>
MPI folks that a separate, unique port had to be created for every
<br>
invocation of Comm_accept. They didn't want a port hanging around open, and
<br>
their plan was to close the port immediately after the connection was
<br>
established.
<br>
<p>So dpm_orte was written to that specification. When I reorganized the code,
<br>
I left the logic as it had been written - which was actually done by the MPI
<br>
side of the house, not me.
<br>
<p>I have no problem with making the change. However, since the specification
<br>
was created on the MPI side, I just want to make sure that the MPI folks all
<br>
realize this has now been changed. Obviously, if this change in spec is
<br>
adopted, someone needs to make sure that the C and Fortran bindings -do not-
<br>
close that port any more!
<br>
<p>Ralph
<br>
<p><p><p>On 4/25/08 2:41 PM, &quot;bouteill_at_[hidden]&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bouteill
</span><br>
<span class="quotelev1">&gt; Date: 2008-04-25 16:41:44 EDT (Fri, 25 Apr 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 18303
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18303">https://svn.open-mpi.org/trac/ompi/changeset/18303</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix a bug that rpevented to use the same port (as returned by Open_port) for
</span><br>
<span class="quotelev1">&gt; several Comm_accept)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/dpm/orte/dpm_orte.c |    19 ++++++++++---------
</span><br>
<span class="quotelev1">&gt;    1 files changed, 10 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c 2008-04-25 16:41:44 EDT (Fri, 25 Apr
</span><br>
<span class="quotelev1">&gt; 2008)
</span><br>
<span class="quotelev1">&gt; @@ -848,8 +848,14 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      char *tmp_string, *ptr;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; +    /* copy the RML uri so we can return a malloc'd value
</span><br>
<span class="quotelev1">&gt; +     * that can later be free'd
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    tmp_string = strdup(port_name);
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt;      /* find the ':' demarking the RML tag we added to the end */
</span><br>
<span class="quotelev1">&gt; -    if (NULL == (ptr = strrchr(port_name, ':'))) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL == (ptr = strrchr(tmp_string, ':'))) {
</span><br>
<span class="quotelev1">&gt; +        free(tmp_string);
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; @@ -863,15 +869,10 @@
</span><br>
<span class="quotelev1">&gt;      /* see if the length of the RML uri is too long - if so,
</span><br>
<span class="quotelev1">&gt;       * truncate it
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if (strlen(port_name) &gt; MPI_MAX_PORT_NAME) {
</span><br>
<span class="quotelev1">&gt; -        port_name[MPI_MAX_PORT_NAME] = '\0';
</span><br>
<span class="quotelev1">&gt; +    if (strlen(tmp_string) &gt; MPI_MAX_PORT_NAME) {
</span><br>
<span class="quotelev1">&gt; +        tmp_string[MPI_MAX_PORT_NAME] = '\0';
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    /* copy the RML uri so we can return a malloc'd value
</span><br>
<span class="quotelev1">&gt; -     * that can later be free'd
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; -    tmp_string = strdup(port_name);
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +        
</span><br>
<span class="quotelev1">&gt;      return tmp_string;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
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
<li><strong>Next message:</strong> <a href="3761.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Previous message:</strong> <a href="3759.php">S&#233;rgio Durigan J&#250;nior: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3761.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Reply:</strong> <a href="3761.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
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
