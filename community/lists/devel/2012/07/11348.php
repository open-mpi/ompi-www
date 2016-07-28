<?
$subject_val = "Re: [OMPI devel] MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 11:17:25 2012" -->
<!-- isoreceived="20120731151725" -->
<!-- sent="Tue, 31 Jul 2012 08:17:26 -0700" -->
<!-- isosent="20120731151726" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Mprobe" -->
<!-- id="5017F706.7040101_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58756622-7575-40D6-A19D-89DF8FB48DB4_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 11:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11349.php">Jeff Squyres: "[OMPI devel] ud oob is borked"</a>
<li><strong>Previous message:</strong> <a href="11347.php">Kenneth A. Lloyd: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11385.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11385.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/31/2012 5:15 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 31, 2012, at 2:58 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The main issue is this.  If I go to ompi/mpi/fortran/mpif-h, I see six files (*recv_f and *probe_f) that take status arguments.  Normally, we do some conversion between Fortran and C status arguments.  These files test if OMPI_SIZEOF_FORTRAN_INTEGER==SIZEOF_INT, however, and bypass the conversion if the two types of integers are the same size.  The problem with this is that while the structures may be the same size, the C status has a size_t in it.  So, while the Fortran INTEGER array can start on any 4-byte alignment, the C status can end up with a 64-bit pointer on a 4-byte alignment.  That's not pleasant in general and can incur some serious hand-slapping on SPARC.  Specifically, SPARC/-m64 errors out on *probe and *recv with MPI_PROC_NULL sources.  Would it be all right if I removed these &quot;shorts cuts&quot;?
</span><br>
<span class="quotelev1">&gt; Ew.  Yes.  You're right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What specifically do you propose?  I don't remember offhand if the status conversion macros are the same as the regular int/INTEGER conversion macros -- we want to keep the no-op behavior for the regular int/INTEGER conversion macros and only handle the conversion of MPI_Status separately, I think.  Specifically: for MPI_Status, we can probably still have those shortcuts for the int/INTEGERs, but treat the copying to the size_t separately.
</span><br>
I'm embarrassingly unfamiliar with the code.  My impression is that 
<br>
internally we deal with C status structures and so our requirements for 
<br>
Fortran status are:
<br>
*)  enough bytes to hold whatever is in a C status
<br>
*)  several words are addressable via the indices MPI_SOURCE, MPI_TAG, 
<br>
and MPI_ERROR
<br>
So, I think what we do today is sufficient in most respects.  Copying 
<br>
between Fortran and C integer-by-integer is fine.  It might be a little 
<br>
nonsensical for an 8-byte size_t component to be handled as two 4-byte 
<br>
words, but if we do so only for copying and otherwise only use that 
<br>
component from the C side, things should be fine.
<br>
<p>The only problem is if we try to use the Fortran array in-place.  It's 
<br>
big enough, but its alignment might be wrong.
<br>
<p>So, specifically, what I propose is getting rid of the short-cuts that 
<br>
try to use Fortran statuses in-place if Fortran INTEGERs are as big as C 
<br>
ints.  I can make the changes.  Sanity checks on all that are welcome.
<br>
<span class="quotelev1">&gt; Thanks for fixing the ibm MPROBE tests, btw.  Further proof that I must have been clinically insane when I added all those tests.  :-(
</span><br>
Insane, no, but you might copy out long-hand 100x:
<br>
for(i=0;i&lt;N;i++) {
<br>
translates to
<br>
DO I=0,N-1
<br>
<span class="quotelev1">&gt; Related issue: do we need to (conditionally) add padding for the size_t in the Fortran array?
</span><br>
I guess so, but once again am unsure of myself.  If I look in 
<br>
ompi/config/ompi_setup_mpi_fortran.m4, we compute the size of 4 C ints 
<br>
and a size_t in units of Fortran INTEGERs.  I'm guessing that usually 
<br>
works for us today since any padding is at the very end and doesn't need 
<br>
to be copied.  If someone reorganized MPI_Status, however, there could 
<br>
be internal padding and we would start losing parts of the status.  So, 
<br>
it might make the code a little more robust if the padding were 
<br>
accounted for.  I'm not keen on making such a change myself.
<br>
<p>Meanwhile, the config code errors out if the size turns out not to be an 
<br>
even multiple of Fortran INTEGER size.  I don't get this.  I would think 
<br>
one could just round up to the next multiple.  I'm worried my 
<br>
understanding of what's going on is faulty.
<br>
<span class="quotelev2">&gt;&gt; Here are two more smaller issues.  I'm pretty sure about them and can make the appropriate changes, but if someone wants to give feedback...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1)  If I look at, say, the v1.7 MPI_Mprobe man page, it says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      A  matching  probe  with  MPI_PROC_NULL  as  source  returns
</span><br>
<span class="quotelev2">&gt;&gt;      message  =  MPI_MESSAGE_NULL...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In contrast, if I look at ibm/pt2pt/mprobe_mpifh.f90, it's checking the message to be MPI_MESSAGE_NO_PROC.  Further, if I look at the source code, mprobe.c seems to set the message to &quot;no proc&quot;.  So, I take it the man page is wrong?  It should say &quot;message = MPI_MESSAGE_NO_PROC&quot;?
</span><br>
<span class="quotelev1">&gt; Oh, yes -- I think the man page is wrong.  The issue here is that the original MPI-3 proposal said to return MESSAGE_NULL, but this turns out to be ambiguous.  So we amended the original MPI-3 proposal with the new constant MPI_MESSAGE_NO_PROC.  So I think we fixed the implementation, but accidentally left the man page saying MESSAGE_NULL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you care, here's the specifics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/38">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/38</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/328">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/328</a>
</span><br>
<span class="quotelev2">&gt;&gt; 2)  Next, looking further at mprobe.c, it looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_Mprobe(int source, int tag, MPI_Comm comm,
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_Message *message, MPI_Status *status)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     if (MPI_PROC_NULL == source) {
</span><br>
<span class="quotelev2">&gt;&gt;         if (MPI_STATUS_IGNORE != status) {
</span><br>
<span class="quotelev2">&gt;&gt;             *status = ompi_request_empty.req_status;
</span><br>
<span class="quotelev2">&gt;&gt;             *message =&amp;ompi_message_no_proc.message;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     ......
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This means that if source==MPI_PROC_NULL and status==MPI_STATUS_IGNORE, the message does not get set.  The assignment to *message should be moved outside the status check, right?
</span><br>
<span class="quotelev1">&gt; Agreed.  Good catch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do the IBM MPROBE tests check for this condition?
</span><br>
IBM?  Huh?  Okay, I know what you're talking about.  :^)
<br>
<p>No.  The tests don't exercise MPI_STATUS_IGNORE.
<br>
<span class="quotelev1">&gt; If not, we should probably extend them to do so.
</span><br>
I suppose so.  Horse having left the barn, we had better close the 
<br>
doors.  I can add to the tests, albeit making some judgment calls about 
<br>
how carried away to get with this task.  Clearly, that test suite is not 
<br>
very aggressive about exercising all code paths.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11349.php">Jeff Squyres: "[OMPI devel] ud oob is borked"</a>
<li><strong>Previous message:</strong> <a href="11347.php">Kenneth A. Lloyd: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11385.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11385.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
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
