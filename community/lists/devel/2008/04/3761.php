<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 17:14:10 2008" -->
<!-- isoreceived="20080425211410" -->
<!-- sent="Fri, 25 Apr 2008 17:13:54 -0400" -->
<!-- isosent="20080425211354" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303" -->
<!-- id="87BE83CC-AD02-45B6-A018-311A368D5976_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C437A0D0.4EEB%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 17:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Previous message:</strong> <a href="3760.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>In reply to:</strong> <a href="3760.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Reply:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, the port was still left open forever before the change. The  
<br>
bug damaged the port string, and it was not usable anymore, not only  
<br>
in subsequent Comm_accept, but also in Close_port or Unpublish_name.
<br>
<p>To more specifically answer to your open port concern, if the user  
<br>
does not want to have an open port anymore, he should specifically  
<br>
call MPI_Close_port and not rely on MPI_Comm_accept to close it.  
<br>
Actually the standard suggests the exact contrary: section 5.4.2  
<br>
states &quot;it must call MPI_Open_port to establish a port [...] it must
<br>
call MPI_Comm_accept to accept connections from clients&quot;. Because  
<br>
there is multiple clients AND multiple connections in that sentence, I  
<br>
assume the port can be used in multiple accepts.
<br>
<p>Aurelien
<br>
<p>Le 25 avr. 08 &#224; 16:53, Ralph Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hmmm...just to clarify, this wasn't a &quot;bug&quot;. It was my understanding  
</span><br>
<span class="quotelev1">&gt; per the
</span><br>
<span class="quotelev1">&gt; MPI folks that a separate, unique port had to be created for every
</span><br>
<span class="quotelev1">&gt; invocation of Comm_accept. They didn't want a port hanging around  
</span><br>
<span class="quotelev1">&gt; open, and
</span><br>
<span class="quotelev1">&gt; their plan was to close the port immediately after the connection was
</span><br>
<span class="quotelev1">&gt; established.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So dpm_orte was written to that specification. When I reorganized  
</span><br>
<span class="quotelev1">&gt; the code,
</span><br>
<span class="quotelev1">&gt; I left the logic as it had been written - which was actually done by  
</span><br>
<span class="quotelev1">&gt; the MPI
</span><br>
<span class="quotelev1">&gt; side of the house, not me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no problem with making the change. However, since the  
</span><br>
<span class="quotelev1">&gt; specification
</span><br>
<span class="quotelev1">&gt; was created on the MPI side, I just want to make sure that the MPI  
</span><br>
<span class="quotelev1">&gt; folks all
</span><br>
<span class="quotelev1">&gt; realize this has now been changed. Obviously, if this change in spec  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; adopted, someone needs to make sure that the C and Fortran bindings - 
</span><br>
<span class="quotelev1">&gt; do not-
</span><br>
<span class="quotelev1">&gt; close that port any more!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/25/08 2:41 PM, &quot;bouteill_at_[hidden]&quot; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bouteill
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-04-25 16:41:44 EDT (Fri, 25 Apr 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 18303
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18303">https://svn.open-mpi.org/trac/ompi/changeset/18303</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix a bug that rpevented to use the same port (as returned by  
</span><br>
<span class="quotelev2">&gt;&gt; Open_port) for
</span><br>
<span class="quotelev2">&gt;&gt; several Comm_accept)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/dpm/orte/dpm_orte.c |    19 ++++++++++---------
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 10 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c 2008-04-25 16:41:44 EDT  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 25 Apr
</span><br>
<span class="quotelev2">&gt;&gt; 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -848,8 +848,14 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     char *tmp_string, *ptr;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* copy the RML uri so we can return a malloc'd value
</span><br>
<span class="quotelev2">&gt;&gt; +     * that can later be free'd
</span><br>
<span class="quotelev2">&gt;&gt; +     */
</span><br>
<span class="quotelev2">&gt;&gt; +    tmp_string = strdup(port_name);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     /* find the ':' demarking the RML tag we added to the end */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL == (ptr = strrchr(port_name, ':'))) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == (ptr = strrchr(tmp_string, ':'))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        free(tmp_string);
</span><br>
<span class="quotelev2">&gt;&gt;         return NULL;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -863,15 +869,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;     /* see if the length of the RML uri is too long - if so,
</span><br>
<span class="quotelev2">&gt;&gt;      * truncate it
</span><br>
<span class="quotelev2">&gt;&gt;      */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (strlen(port_name) &gt; MPI_MAX_PORT_NAME) {
</span><br>
<span class="quotelev2">&gt;&gt; -        port_name[MPI_MAX_PORT_NAME] = '\0';
</span><br>
<span class="quotelev2">&gt;&gt; +    if (strlen(tmp_string) &gt; MPI_MAX_PORT_NAME) {
</span><br>
<span class="quotelev2">&gt;&gt; +        tmp_string[MPI_MAX_PORT_NAME] = '\0';
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* copy the RML uri so we can return a malloc'd value
</span><br>
<span class="quotelev2">&gt;&gt; -     * that can later be free'd
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt; -    tmp_string = strdup(port_name);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     return tmp_string;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Previous message:</strong> <a href="3760.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>In reply to:</strong> <a href="3760.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Reply:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
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
