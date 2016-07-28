<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 19:19:28 2008" -->
<!-- isoreceived="20080425231928" -->
<!-- sent="Fri, 25 Apr 2008 19:19:15 -0400" -->
<!-- isosent="20080425231915" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303" -->
<!-- id="2B2BC6D0-A00A-4C06-941C-6D7C57CD58D7_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C437A84F.4EF2%rhc_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 19:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3764.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Previous message:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>In reply to:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3764.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Reply:</strong> <a href="3764.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Reply:</strong> <a href="3765.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thanks for your concern regarding the level of compliance of our  
<br>
implementation of the MPI standard. I don't know who were the MPI  
<br>
gurus you talked with about this issue, but I can tell that for once  
<br>
the MPI standard is pretty clear about this.
<br>
<p>As stated by Aurelien in his last email, using the plural in several  
<br>
sentences, strongly suggest that the status of port should not be  
<br>
implicitly modified by MPI_Comm_accept or MPI_Comm_connect. Moreover,  
<br>
in the beginning of the chapter in the MPI standard, it is specified  
<br>
that comm/accept work exactly as in TCP. In other words, once the port  
<br>
is opened it stay open until the user explicitly close it.
<br>
<p>However, not all corner cases are addressed by the MPI standard. What  
<br>
happens on MPI_Finalize ... it's a good question. Personally, I think  
<br>
we should stick with the TCP similarities. The port should be not only  
<br>
closed by unpublished. This will solve all issues with people trying  
<br>
to lookup a port once the originator is gone.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 25, 2008, at 5:25 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; As I said, it makes no difference to me. I just want to ensure that  
</span><br>
<span class="quotelev1">&gt; everyone
</span><br>
<span class="quotelev1">&gt; agrees on the interpretation of the MPI standard. We have had these
</span><br>
<span class="quotelev1">&gt; discussion in the past, with differing views. My guess here is that  
</span><br>
<span class="quotelev1">&gt; the port
</span><br>
<span class="quotelev1">&gt; was left open mostly because the person who wrote the C-binding  
</span><br>
<span class="quotelev1">&gt; forgot to
</span><br>
<span class="quotelev1">&gt; close it. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, you MPI folks: do we allow multiple connections against a single  
</span><br>
<span class="quotelev1">&gt; port,
</span><br>
<span class="quotelev1">&gt; and leave the port open until explicitly closed? If so, then do we  
</span><br>
<span class="quotelev1">&gt; generate
</span><br>
<span class="quotelev1">&gt; an error if someone calls MPI_Finalize without first closing the  
</span><br>
<span class="quotelev1">&gt; port? Or do
</span><br>
<span class="quotelev1">&gt; we automatically close any open ports when finalize is called?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or do we automatically close the port after the connect/accept is  
</span><br>
<span class="quotelev1">&gt; completed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/25/08 3:13 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, the port was still left open forever before the change. The
</span><br>
<span class="quotelev2">&gt;&gt; bug damaged the port string, and it was not usable anymore, not only
</span><br>
<span class="quotelev2">&gt;&gt; in subsequent Comm_accept, but also in Close_port or Unpublish_name.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To more specifically answer to your open port concern, if the user
</span><br>
<span class="quotelev2">&gt;&gt; does not want to have an open port anymore, he should specifically
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Close_port and not rely on MPI_Comm_accept to close it.
</span><br>
<span class="quotelev2">&gt;&gt; Actually the standard suggests the exact contrary: section 5.4.2
</span><br>
<span class="quotelev2">&gt;&gt; states &quot;it must call MPI_Open_port to establish a port [...] it must
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Comm_accept to accept connections from clients&quot;. Because
</span><br>
<span class="quotelev2">&gt;&gt; there is multiple clients AND multiple connections in that  
</span><br>
<span class="quotelev2">&gt;&gt; sentence, I
</span><br>
<span class="quotelev2">&gt;&gt; assume the port can be used in multiple accepts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 25 avr. 08 &#224; 16:53, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...just to clarify, this wasn't a &quot;bug&quot;. It was my understanding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI folks that a separate, unique port had to be created for every
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invocation of Comm_accept. They didn't want a port hanging around
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their plan was to close the port immediately after the connection  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; established.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So dpm_orte was written to that specification. When I reorganized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the code,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I left the logic as it had been written - which was actually done by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; side of the house, not me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no problem with making the change. However, since the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specification
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was created on the MPI side, I just want to make sure that the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; folks all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; realize this has now been changed. Obviously, if this change in spec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adopted, someone needs to make sure that the C and Fortran  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bindings -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do not-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; close that port any more!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 4/25/08 2:41 PM, &quot;bouteill_at_[hidden]&quot; &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: bouteill
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2008-04-25 16:41:44 EDT (Fri, 25 Apr 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 18303
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18303">https://svn.open-mpi.org/trac/ompi/changeset/18303</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fix a bug that rpevented to use the same port (as returned by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open_port) for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; several Comm_accept)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/dpm/orte/dpm_orte.c |    19 ++++++++++---------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1 files changed, 10 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
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
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c (original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c 2008-04-25 16:41:44 EDT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Fri, 25 Apr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -848,8 +848,14 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    char *tmp_string, *ptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* copy the RML uri so we can return a malloc'd value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     * that can later be free'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    tmp_string = strdup(port_name);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /* find the ':' demarking the RML tag we added to the end */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    if (NULL == (ptr = strrchr(port_name, ':'))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if (NULL == (ptr = strrchr(tmp_string, ':'))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        free(tmp_string);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        return NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -863,15 +869,10 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /* see if the length of the RML uri is too long - if so,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     * truncate it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    if (strlen(port_name) &gt; MPI_MAX_PORT_NAME) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        port_name[MPI_MAX_PORT_NAME] = '\0';
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if (strlen(tmp_string) &gt; MPI_MAX_PORT_NAME) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        tmp_string[MPI_MAX_PORT_NAME] = '\0';
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    /* copy the RML uri so we can return a malloc'd value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -     * that can later be free'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    tmp_string = strdup(port_name);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    return tmp_string;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3763/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3764.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Previous message:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>In reply to:</strong> <a href="3762.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3764.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Reply:</strong> <a href="3764.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Reply:</strong> <a href="3765.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
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
