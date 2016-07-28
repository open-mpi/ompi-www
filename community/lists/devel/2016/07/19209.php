<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 09:03:34 2016" -->
<!-- isoreceived="20160714130334" -->
<!-- sent="Thu, 14 Jul 2016 09:03:17 -0400" -->
<!-- isosent="20160714130317" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="c016681b-d035-b2b8-826b-95327e41f2f1_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="78647b6b-83aa-6ed3-a61b-72392e5f50d2_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-07-14 09:03:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19210.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19208.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19206.php">Gilles Gouaillardet: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>On 13/07/16 08:01 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 2.0.0 has been released, so the fix should land into the v2.x
</span><br>
<span class="quotelev1">&gt; branch shortly.
</span><br>
<p>ok, thanks again.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i understand correctly, you script download/compile OpenMPI and then
</span><br>
<span class="quotelev1">&gt; download/compile PETSc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
More precisely, for OpenMPI I am cloning 
<br>
<a href="https://github.com/open-mpi/ompi.git">https://github.com/open-mpi/ompi.git</a> and for Petsc, I just compile the 
<br>
latest proved stable with our code which is now 3.7.2.
<br>
<p><span class="quotelev1">&gt; In this is correct, and for the time being, feel free to patch Open MPI
</span><br>
<span class="quotelev1">&gt; v2.x before compiling it, the fix can be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; downloaded ad
</span><br>
<span class="quotelev1">&gt; <a href="https://patch-diff.githubusercontent.com/raw/open-mpi/ompi-release/pull/1263.patch">https://patch-diff.githubusercontent.com/raw/open-mpi/ompi-release/pull/1263.patch</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok but I think it is already included into the master of the clone I 
<br>
get... :)
<br>
<p>Cheers,
<br>
<p>Eric
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/14/2016 3:37 AM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Howard,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ok, I will wait for 2.0.1rcX... ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've put in place a script to download/compile OpenMPI+PETSc(3.7.2)
</span><br>
<span class="quotelev2">&gt;&gt; and our code from the git repos.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I am in a somewhat uncomfortable situation where neither the
</span><br>
<span class="quotelev2">&gt;&gt; ompi-release.git or ompi.git repos are working for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first gives me the errors with MPI_File_write_all_end I reported,
</span><br>
<span class="quotelev2">&gt;&gt; but the former gives me errors like these:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [lorien:106919] [[INVALID],INVALID] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev2">&gt;&gt; file ess_singleton_module.c at line 167
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; [lorien:106919] Local abort before MPI_INIT completed completed
</span><br>
<span class="quotelev2">&gt;&gt; successfully, but am not able to aggregate error messages, and not
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, for my continuous integration of OpenMPI I am in a no man's
</span><br>
<span class="quotelev2">&gt;&gt; land... :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks anyway for the follow-up!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 13/07/16 07:49 AM, Howard Pritchard wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Eric,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks very much for finding this problem.   We decided in order to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a reasonably timely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release, that we'd triage issues and turn around a new RC if something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drastic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appeared.  We want to fix this issue (and it will be fixed), but we've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decided to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defer the fix for this issue to a 2.0.1 bug fix release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-07-12 13:51 GMT-06:00 Eric Chamberland
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi Edgard,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I just saw that your patch got into ompi/master... any chances it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     goes into ompi-release/v2.x before rc5?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 08/07/16 03:14 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I think I found the problem, I filed a pr towards master, and if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         passes I will file a pr for the 2.x branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On 7/8/2016 1:14 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On 08/07/16 01:44 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ok, but just to be able to construct a test case,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 basically what you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 doing is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MPI_File_write_all_begin (fh, NULL, 0, some datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MPI_File_write_all_end (fh, NULL, &amp;status),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 is this correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Yes, but with 2 processes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             rank 0 writes something, but not rank 1...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             other info: rank 0 didn't wait for rank1 after
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_File_write_all_end so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             it continued to the next MPI_File_write_all_begin with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             different
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             datatype but on the same file...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19173.php">http://www.open-mpi.org/community/lists/devel/2016/07/19173.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19192.php">http://www.open-mpi.org/community/lists/devel/2016/07/19192.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19201.php">http://www.open-mpi.org/community/lists/devel/2016/07/19201.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19206.php">http://www.open-mpi.org/community/lists/devel/2016/07/19206.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19210.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19208.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19206.php">Gilles Gouaillardet: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
