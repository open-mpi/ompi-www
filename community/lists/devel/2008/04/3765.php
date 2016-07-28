<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 19:45:05 2008" -->
<!-- isoreceived="20080425234505" -->
<!-- sent="Fri, 25 Apr 2008 17:44:53 -0600" -->
<!-- isosent="20080425234453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303" -->
<!-- id="C437C915.4F01%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B2BC6D0-A00A-4C06-941C-6D7C57CD58D7_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-04-25 19:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3766.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Previous message:</strong> <a href="3764.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>In reply to:</strong> <a href="3763.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds fine with me, George.
<br>
<p>Just to clarify: My comment about differing interpretations didn't pertain
<br>
to this specific question, but was more an observation of some discussions
<br>
we have had about such issues in other areas. I didn't talk to anyone about
<br>
this particular question, just noted that someone on the MPI side originally
<br>
wrote the code and probably had some interpretation of how it should work in
<br>
mind.
<br>
<p>Or maybe not... :-)
<br>
<p>Anyway, I can easily add some code in the DPM to ensure we close any still
<br>
open ports at finalize of that framework, if you feel that is the right
<br>
place to do it. Since people are -supposed- to call MPI_Close_port to close
<br>
the port, and since that code calls the DPM to execute that function, that
<br>
framework should have a clear picture of what is still open.
<br>
<p>Make sense?
<br>
Ralph
<br>
<p><p><p>On 4/25/08 5:19 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your concern regarding the level of compliance of our
</span><br>
<span class="quotelev1">&gt; implementation of the MPI standard. I don't know who were the MPI
</span><br>
<span class="quotelev1">&gt; gurus you talked with about this issue, but I can tell that for once
</span><br>
<span class="quotelev1">&gt; the MPI standard is pretty clear about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As stated by Aurelien in his last email, using the plural in several
</span><br>
<span class="quotelev1">&gt; sentences, strongly suggest that the status of port should not be
</span><br>
<span class="quotelev1">&gt; implicitly modified by MPI_Comm_accept or MPI_Comm_connect. Moreover,
</span><br>
<span class="quotelev1">&gt; in the beginning of the chapter in the MPI standard, it is specified
</span><br>
<span class="quotelev1">&gt; that comm/accept work exactly as in TCP. In other words, once the port
</span><br>
<span class="quotelev1">&gt; is opened it stay open until the user explicitly close it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, not all corner cases are addressed by the MPI standard. What
</span><br>
<span class="quotelev1">&gt; happens on MPI_Finalize ... it's a good question. Personally, I think
</span><br>
<span class="quotelev1">&gt; we should stick with the TCP similarities. The port should be not only
</span><br>
<span class="quotelev1">&gt; closed by unpublished. This will solve all issues with people trying
</span><br>
<span class="quotelev1">&gt; to lookup a port once the originator is gone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2008, at 5:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I said, it makes no difference to me. I just want to ensure that
</span><br>
<span class="quotelev2">&gt;&gt; everyone
</span><br>
<span class="quotelev2">&gt;&gt; agrees on the interpretation of the MPI standard. We have had these
</span><br>
<span class="quotelev2">&gt;&gt; discussion in the past, with differing views. My guess here is that
</span><br>
<span class="quotelev2">&gt;&gt; the port
</span><br>
<span class="quotelev2">&gt;&gt; was left open mostly because the person who wrote the C-binding
</span><br>
<span class="quotelev2">&gt;&gt; forgot to
</span><br>
<span class="quotelev2">&gt;&gt; close it. ;-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, you MPI folks: do we allow multiple connections against a single
</span><br>
<span class="quotelev2">&gt;&gt; port,
</span><br>
<span class="quotelev2">&gt;&gt; and leave the port open until explicitly closed? If so, then do we
</span><br>
<span class="quotelev2">&gt;&gt; generate
</span><br>
<span class="quotelev2">&gt;&gt; an error if someone calls MPI_Finalize without first closing the
</span><br>
<span class="quotelev2">&gt;&gt; port? Or do
</span><br>
<span class="quotelev2">&gt;&gt; we automatically close any open ports when finalize is called?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or do we automatically close the port after the connect/accept is
</span><br>
<span class="quotelev2">&gt;&gt; completed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 4/25/08 3:13 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, the port was still left open forever before the change. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bug damaged the port string, and it was not usable anymore, not only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in subsequent Comm_accept, but also in Close_port or Unpublish_name.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To more specifically answer to your open port concern, if the user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not want to have an open port anymore, he should specifically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Close_port and not rely on MPI_Comm_accept to close it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually the standard suggests the exact contrary: section 5.4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; states &quot;it must call MPI_Open_port to establish a port [...] it must
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Comm_accept to accept connections from clients&quot;. Because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is multiple clients AND multiple connections in that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sentence, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume the port can be used in multiple accepts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 25 avr. 08 &#224; 16:53, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm...just to clarify, this wasn't a &quot;bug&quot;. It was my understanding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; per the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI folks that a separate, unique port had to be created for every
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; invocation of Comm_accept. They didn't want a port hanging around
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; their plan was to close the port immediately after the connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; established.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So dpm_orte was written to that specification. When I reorganized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the code,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I left the logic as it had been written - which was actually done by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; side of the house, not me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have no problem with making the change. However, since the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specification
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was created on the MPI side, I just want to make sure that the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; folks all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; realize this has now been changed. Obviously, if this change in spec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; adopted, someone needs to make sure that the C and Fortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bindings -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do not-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; close that port any more!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 4/25/08 2:41 PM, &quot;bouteill_at_[hidden]&quot; &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Author: bouteill
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: 2008-04-25 16:41:44 EDT (Fri, 25 Apr 2008)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; New Revision: 18303
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18303">https://svn.open-mpi.org/trac/ompi/changeset/18303</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fix a bug that rpevented to use the same port (as returned by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open_port) for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; several Comm_accept)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  trunk/ompi/mca/dpm/orte/dpm_orte.c |    19 ++++++++++---------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  1 files changed, 10 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c (original)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c 2008-04-25 16:41:44 EDT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Fri, 25 Apr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2008)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -848,8 +848,14 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    char *tmp_string, *ptr;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    /* copy the RML uri so we can return a malloc'd value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +     * that can later be free'd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +     */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    tmp_string = strdup(port_name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /* find the ':' demarking the RML tag we added to the end */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    if (NULL == (ptr = strrchr(port_name, ':'))) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    if (NULL == (ptr = strrchr(tmp_string, ':'))) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        free(tmp_string);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        return NULL;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -863,15 +869,10 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /* see if the length of the RML uri is too long - if so,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     * truncate it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    if (strlen(port_name) &gt; MPI_MAX_PORT_NAME) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        port_name[MPI_MAX_PORT_NAME] = '\0';
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    if (strlen(tmp_string) &gt; MPI_MAX_PORT_NAME) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        tmp_string[MPI_MAX_PORT_NAME] = '\0';
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    /* copy the RML uri so we can return a malloc'd value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -     * that can later be free'd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -     */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    tmp_string = strdup(port_name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    return tmp_string;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3766.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>Previous message:</strong> <a href="3764.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<li><strong>In reply to:</strong> <a href="3763.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
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
