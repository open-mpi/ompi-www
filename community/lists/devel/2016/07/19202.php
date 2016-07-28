<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 15:01:57 2016" -->
<!-- isoreceived="20160713190157" -->
<!-- sent="Wed, 13 Jul 2016 12:01:45 -0700" -->
<!-- isosent="20160713190145" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="8297C99D-25A7-414D-8AEA-CFFA6034273B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="c5e5c6cd-d276-4b94-8444-789ae91a4d22_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 15:01:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19201.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19201.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;I see where the singleton on master might be broken - will check later today
<br>
<p><span class="quotelev1">&gt; On Jul 13, 2016, at 11:37 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Howard,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ok, I will wait for 2.0.1rcX... ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've put in place a script to download/compile OpenMPI+PETSc(3.7.2) and our code from the git repos.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I am in a somewhat uncomfortable situation where neither the ompi-release.git or ompi.git repos are working for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first gives me the errors with MPI_File_write_all_end I reported, but the former gives me errors like these:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [lorien:106919] [[INVALID],INVALID] ORTE_ERROR_LOG: Bad parameter in file ess_singleton_module.c at line 167
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [lorien:106919] Local abort before MPI_INIT completed completed successfully, but am not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, for my continuous integration of OpenMPI I am in a no man's land... :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks anyway for the follow-up!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 13/07/16 07:49 AM, Howard Pritchard wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eric,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much for finding this problem.   We decided in order to have
</span><br>
<span class="quotelev2">&gt;&gt; a reasonably timely
</span><br>
<span class="quotelev2">&gt;&gt; release, that we'd triage issues and turn around a new RC if something
</span><br>
<span class="quotelev2">&gt;&gt; drastic
</span><br>
<span class="quotelev2">&gt;&gt; appeared.  We want to fix this issue (and it will be fixed), but we've
</span><br>
<span class="quotelev2">&gt;&gt; decided to
</span><br>
<span class="quotelev2">&gt;&gt; defer the fix for this issue to a 2.0.1 bug fix release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2016-07-12 13:51 GMT-06:00 Eric Chamberland
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Eric.Chamberland_at_[hidden] &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Hi Edgard,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    I just saw that your patch got into ompi/master... any chances it
</span><br>
<span class="quotelev2">&gt;&gt;    goes into ompi-release/v2.x before rc5?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Eric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    On 08/07/16 03:14 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        I think I found the problem, I filed a pr towards master, and if
</span><br>
<span class="quotelev2">&gt;&gt;        that
</span><br>
<span class="quotelev2">&gt;&gt;        passes I will file a pr for the 2.x branch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;        Edgar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        On 7/8/2016 1:14 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            On 08/07/16 01:44 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                ok, but just to be able to construct a test case,
</span><br>
<span class="quotelev2">&gt;&gt;                basically what you are
</span><br>
<span class="quotelev2">&gt;&gt;                doing is
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_File_write_all_begin (fh, NULL, 0, some datatype);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_File_write_all_end (fh, NULL, &amp;status),
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                is this correct?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            Yes, but with 2 processes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            rank 0 writes something, but not rank 1...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            other info: rank 0 didn't wait for rank1 after
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_File_write_all_end so
</span><br>
<span class="quotelev2">&gt;&gt;            it continued to the next MPI_File_write_all_begin with a
</span><br>
<span class="quotelev2">&gt;&gt;            different
</span><br>
<span class="quotelev2">&gt;&gt;            datatype but on the same file...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;            Eric
</span><br>
<span class="quotelev2">&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;            devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;            devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;            <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;            <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19173.php">http://www.open-mpi.org/community/lists/devel/2016/07/19173.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19173.php">http://www.open-mpi.org/community/lists/devel/2016/07/19173.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19192.php">http://www.open-mpi.org/community/lists/devel/2016/07/19192.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19192.php">http://www.open-mpi.org/community/lists/devel/2016/07/19192.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19201.php">http://www.open-mpi.org/community/lists/devel/2016/07/19201.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19201.php">http://www.open-mpi.org/community/lists/devel/2016/07/19201.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19201.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19201.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
