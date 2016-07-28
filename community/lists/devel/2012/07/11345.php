<?
$subject_val = "Re: [OMPI devel] MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 08:15:29 2012" -->
<!-- isoreceived="20120731121529" -->
<!-- sent="Tue, 31 Jul 2012 08:15:22 -0400" -->
<!-- isosent="20120731121522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Mprobe" -->
<!-- id="58756622-7575-40D6-A19D-89DF8FB48DB4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50178204.6030405_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Mprobe<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 08:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11346.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Previous message:</strong> <a href="11344.php">Eugene Loh: "[OMPI devel] MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11344.php">Eugene Loh: "[OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11348.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11348.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 31, 2012, at 2:58 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; The main issue is this.  If I go to ompi/mpi/fortran/mpif-h, I see six files (*recv_f and *probe_f) that take status arguments.  Normally, we do some conversion between Fortran and C status arguments.  These files test if OMPI_SIZEOF_FORTRAN_INTEGER==SIZEOF_INT, however, and bypass the conversion if the two types of integers are the same size.  The problem with this is that while the structures may be the same size, the C status has a size_t in it.  So, while the Fortran INTEGER array can start on any 4-byte alignment, the C status can end up with a 64-bit pointer on a 4-byte alignment.  That's not pleasant in general and can incur some serious hand-slapping on SPARC.  Specifically, SPARC/-m64 errors out on *probe and *recv with MPI_PROC_NULL sources.  Would it be all right if I removed these &quot;shorts cuts&quot;?
</span><br>
<p>Ew.  Yes.  You're right.
<br>
<p>What specifically do you propose?  I don't remember offhand if the status conversion macros are the same as the regular int/INTEGER conversion macros -- we want to keep the no-op behavior for the regular int/INTEGER conversion macros and only handle the conversion of MPI_Status separately, I think.  Specifically: for MPI_Status, we can probably still have those shortcuts for the int/INTEGERs, but treat the copying to the size_t separately.  
<br>
<p>Thanks for fixing the ibm MPROBE tests, btw.  Further proof that I must have been clinically insane when I added all those tests.  :-(
<br>
<p>Related issue: do we need to (conditionally) add padding for the size_t in the Fortran array?
<br>
<p><span class="quotelev1">&gt; Here are two more smaller issues.  I'm pretty sure about them and can make the appropriate changes, but if someone wants to give feedback...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1)  If I look at, say, the v1.7 MPI_Mprobe man page, it says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     A  matching  probe  with  MPI_PROC_NULL  as  source  returns
</span><br>
<span class="quotelev1">&gt;     message  =  MPI_MESSAGE_NULL...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In contrast, if I look at ibm/pt2pt/mprobe_mpifh.f90, it's checking the message to be MPI_MESSAGE_NO_PROC.  Further, if I look at the source code, mprobe.c seems to set the message to &quot;no proc&quot;.  So, I take it the man page is wrong?  It should say &quot;message = MPI_MESSAGE_NO_PROC&quot;?
</span><br>
<p>Oh, yes -- I think the man page is wrong.  The issue here is that the original MPI-3 proposal said to return MESSAGE_NULL, but this turns out to be ambiguous.  So we amended the original MPI-3 proposal with the new constant MPI_MESSAGE_NO_PROC.  So I think we fixed the implementation, but accidentally left the man page saying MESSAGE_NULL.
<br>
<p>If you care, here's the specifics:
<br>
<p><a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/38">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/38</a>
<br>
<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/328">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/328</a>
<br>
<p><span class="quotelev1">&gt; 2)  Next, looking further at mprobe.c, it looks like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int MPI_Mprobe(int source, int tag, MPI_Comm comm,
</span><br>
<span class="quotelev1">&gt;               MPI_Message *message, MPI_Status *status)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    if (MPI_PROC_NULL == source) {
</span><br>
<span class="quotelev1">&gt;        if (MPI_STATUS_IGNORE != status) {
</span><br>
<span class="quotelev1">&gt;            *status = ompi_request_empty.req_status;
</span><br>
<span class="quotelev1">&gt;            *message = &amp;ompi_message_no_proc.message;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    ......
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means that if source==MPI_PROC_NULL and status==MPI_STATUS_IGNORE, the message does not get set.  The assignment to *message should be moved outside the status check, right?
</span><br>
<p>Agreed.  Good catch.
<br>
<p>Do the IBM MPROBE tests check for this condition?  If not, we should probably extend them to do so.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11346.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Previous message:</strong> <a href="11344.php">Eugene Loh: "[OMPI devel] MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11344.php">Eugene Loh: "[OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11348.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11348.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
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
