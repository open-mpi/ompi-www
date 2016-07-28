<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 14:37:23 2016" -->
<!-- isoreceived="20160713183723" -->
<!-- sent="Wed, 13 Jul 2016 14:37:08 -0400" -->
<!-- isosent="20160713183708" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="c5e5c6cd-d276-4b94-8444-789ae91a4d22_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAF1Cqj72+UP4EVSs6_j8Uwq_96M+WAq69XmPhdLifQBeMHw4dA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 14:37:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19200.php">Abhishek Joshi: "[OMPI devel] Option to switch from shmem to kmem module"</a>
<li><strong>In reply to:</strong> <a href="19197.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19206.php">Gilles Gouaillardet: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p>ok, I will wait for 2.0.1rcX... ;)
<br>
<p>I've put in place a script to download/compile OpenMPI+PETSc(3.7.2) and 
<br>
our code from the git repos.
<br>
<p>Now I am in a somewhat uncomfortable situation where neither the 
<br>
ompi-release.git or ompi.git repos are working for me.
<br>
<p>The first gives me the errors with MPI_File_write_all_end I reported, 
<br>
but the former gives me errors like these:
<br>
<p>[lorien:106919] [[INVALID],INVALID] ORTE_ERROR_LOG: Bad parameter in 
<br>
file ess_singleton_module.c at line 167
<br>
*** An error occurred in MPI_Init_thread
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[lorien:106919] Local abort before MPI_INIT completed completed 
<br>
successfully, but am not able to aggregate error messages, and not able 
<br>
to guarantee that all other processes were killed!
<br>
<p>So, for my continuous integration of OpenMPI I am in a no man's land... :(
<br>
<p>Thanks anyway for the follow-up!
<br>
<p>Eric
<br>
<p>On 13/07/16 07:49 AM, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt; Hi Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for finding this problem.   We decided in order to have
</span><br>
<span class="quotelev1">&gt; a reasonably timely
</span><br>
<span class="quotelev1">&gt; release, that we'd triage issues and turn around a new RC if something
</span><br>
<span class="quotelev1">&gt; drastic
</span><br>
<span class="quotelev1">&gt; appeared.  We want to fix this issue (and it will be fixed), but we've
</span><br>
<span class="quotelev1">&gt; decided to
</span><br>
<span class="quotelev1">&gt; defer the fix for this issue to a 2.0.1 bug fix release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-07-12 13:51 GMT-06:00 Eric Chamberland
</span><br>
<span class="quotelev1">&gt; &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Edgard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I just saw that your patch got into ompi/master... any chances it
</span><br>
<span class="quotelev1">&gt;     goes into ompi-release/v2.x before rc5?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 08/07/16 03:14 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I think I found the problem, I filed a pr towards master, and if
</span><br>
<span class="quotelev1">&gt;         that
</span><br>
<span class="quotelev1">&gt;         passes I will file a pr for the 2.x branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks!
</span><br>
<span class="quotelev1">&gt;         Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 7/8/2016 1:14 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On 08/07/16 01:44 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 ok, but just to be able to construct a test case,
</span><br>
<span class="quotelev1">&gt;                 basically what you are
</span><br>
<span class="quotelev1">&gt;                 doing is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MPI_File_write_all_begin (fh, NULL, 0, some datatype);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MPI_File_write_all_end (fh, NULL, &amp;status),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 is this correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Yes, but with 2 processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             rank 0 writes something, but not rank 1...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             other info: rank 0 didn't wait for rank1 after
</span><br>
<span class="quotelev1">&gt;             MPI_File_write_all_end so
</span><br>
<span class="quotelev1">&gt;             it continued to the next MPI_File_write_all_begin with a
</span><br>
<span class="quotelev1">&gt;             different
</span><br>
<span class="quotelev1">&gt;             datatype but on the same file...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Eric
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19173.php">http://www.open-mpi.org/community/lists/devel/2016/07/19173.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19192.php">http://www.open-mpi.org/community/lists/devel/2016/07/19192.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19200.php">Abhishek Joshi: "[OMPI devel] Option to switch from shmem to kmem module"</a>
<li><strong>In reply to:</strong> <a href="19197.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19206.php">Gilles Gouaillardet: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
