<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 15:47:12 2016" -->
<!-- isoreceived="20160713194712" -->
<!-- sent="Wed, 13 Jul 2016 19:47:00 +0000" -->
<!-- isosent="20160713194700" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="5874B97E-F390-4C3F-B356-2EEBD7923A24_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8297C99D-25A7-414D-8AEA-CFFA6034273B_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 15:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19204.php">Pritchard Jr., Howard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19204.php">Pritchard Jr., Howard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19204.php">Pritchard Jr., Howard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19208.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I literally just noticed that this morning (that singleton was broken on master), but hadn't gotten to bisecting / reporting it yet...
<br>

<br>
I also haven't tested 2.0.0.  I really hope singletons aren't broken then...
<br>

<br>
/me goes to test 2.0.0...
<br>

<br>
Whew -- 2.0.0 singletons are fine.  :-)
<br>

<br>

<br>
<span class="quotelev1">&gt; On Jul 13, 2016, at 3:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;I see where the singleton on master might be broken - will check later today
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 13, 2016, at 11:37 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Howard,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ok, I will wait for 2.0.1rcX... ;)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've put in place a script to download/compile OpenMPI+PETSc(3.7.2) and our code from the git repos.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now I am in a somewhat uncomfortable situation where neither the ompi-release.git or ompi.git repos are working for me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first gives me the errors with MPI_File_write_all_end I reported, but the former gives me errors like these:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [lorien:106919] [[INVALID],INVALID] ORTE_ERROR_LOG: Bad parameter in file ess_singleton_module.c at line 167
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; [lorien:106919] Local abort before MPI_INIT completed completed successfully, but am not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, for my continuous integration of OpenMPI I am in a no man's land... :(
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
<span class="quotelev3">&gt;&gt;&gt;    Hi Edgard,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I just saw that your patch got into ompi/master... any chances it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    goes into ompi-release/v2.x before rc5?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On 08/07/16 03:14 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I think I found the problem, I filed a pr towards master, and if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        passes I will file a pr for the 2.x branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        On 7/8/2016 1:14 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            On 08/07/16 01:44 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                ok, but just to be able to construct a test case,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                basically what you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                doing is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MPI_File_write_all_begin (fh, NULL, 0, some datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MPI_File_write_all_end (fh, NULL, &amp;status),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                is this correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Yes, but with 2 processes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            rank 0 writes something, but not rank 1...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            other info: rank 0 didn't wait for rank1 after
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MPI_File_write_all_end so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            it continued to the next MPI_File_write_all_begin with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            different
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            datatype but on the same file...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19173.php">http://www.open-mpi.org/community/lists/devel/2016/07/19173.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19192.php">http://www.open-mpi.org/community/lists/devel/2016/07/19192.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19201.php">http://www.open-mpi.org/community/lists/devel/2016/07/19201.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19202.php">http://www.open-mpi.org/community/lists/devel/2016/07/19202.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19204.php">Pritchard Jr., Howard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19202.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19204.php">Pritchard Jr., Howard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19204.php">Pritchard Jr., Howard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19208.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
