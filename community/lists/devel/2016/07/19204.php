<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 16:01:20 2016" -->
<!-- isoreceived="20160713200120" -->
<!-- sent="Wed, 13 Jul 2016 20:01:18 +0000" -->
<!-- isosent="20160713200118" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="D3ABFA05.12EE8%howardp_at_lanl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5874B97E-F390-4C3F-B356-2EEBD7923A24_at_cisco.com" -->
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
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 16:01:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19205.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19205.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19205.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I think this was fixed in PR 1227 on v2.x
<br>
<p>Howard
<br>
<p><pre>
-- 
Howard Pritchard
HPC-DES
Los Alamos National Laboratory
On 7/13/16, 1:47 PM, &quot;devel on behalf of Jeff Squyres (jsquyres)&quot;
&lt;devel-bounces_at_[hidden] on behalf of jsquyres_at_[hidden]&gt; wrote:
&gt;I literally just noticed that this morning (that singleton was broken on
&gt;master), but hadn't gotten to bisecting / reporting it yet...
&gt;
&gt;I also haven't tested 2.0.0.  I really hope singletons aren't broken
&gt;then...
&gt;
&gt;/me goes to test 2.0.0...
&gt;
&gt;Whew -- 2.0.0 singletons are fine.  :-)
&gt;
&gt;
&gt;&gt; On Jul 13, 2016, at 3:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; Hmmm&#138;I see where the singleton on master might be broken - will check
&gt;&gt;later today
&gt;&gt; 
&gt;&gt;&gt; On Jul 13, 2016, at 11:37 AM, Eric Chamberland
&gt;&gt;&gt;&lt;Eric.Chamberland_at_[hidden]&gt; wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt; Hi Howard,
&gt;&gt;&gt; 
&gt;&gt;&gt; ok, I will wait for 2.0.1rcX... ;)
&gt;&gt;&gt; 
&gt;&gt;&gt; I've put in place a script to download/compile OpenMPI+PETSc(3.7.2)
&gt;&gt;&gt;and our code from the git repos.
&gt;&gt;&gt; 
&gt;&gt;&gt; Now I am in a somewhat uncomfortable situation where neither the
&gt;&gt;&gt;ompi-release.git or ompi.git repos are working for me.
&gt;&gt;&gt; 
&gt;&gt;&gt; The first gives me the errors with MPI_File_write_all_end I reported,
&gt;&gt;&gt;but the former gives me errors like these:
&gt;&gt;&gt; 
&gt;&gt;&gt; [lorien:106919] [[INVALID],INVALID] ORTE_ERROR_LOG: Bad parameter in
&gt;&gt;&gt;file ess_singleton_module.c at line 167
&gt;&gt;&gt; *** An error occurred in MPI_Init_thread
&gt;&gt;&gt; *** on a NULL communicator
&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
&gt;&gt;&gt;abort,
&gt;&gt;&gt; ***    and potentially your MPI job)
&gt;&gt;&gt; [lorien:106919] Local abort before MPI_INIT completed completed
&gt;&gt;&gt;successfully, but am not able to aggregate error messages, and not able
&gt;&gt;&gt;to guarantee that all other processes were killed!
&gt;&gt;&gt; 
&gt;&gt;&gt; So, for my continuous integration of OpenMPI I am in a no man's
&gt;&gt;&gt;land... :(
&gt;&gt;&gt; 
&gt;&gt;&gt; Thanks anyway for the follow-up!
&gt;&gt;&gt; 
&gt;&gt;&gt; Eric
&gt;&gt;&gt; 
&gt;&gt;&gt; On 13/07/16 07:49 AM, Howard Pritchard wrote:
&gt;&gt;&gt;&gt; Hi Eric,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Thanks very much for finding this problem.   We decided in order to
&gt;&gt;&gt;&gt;have
&gt;&gt;&gt;&gt; a reasonably timely
&gt;&gt;&gt;&gt; release, that we'd triage issues and turn around a new RC if something
&gt;&gt;&gt;&gt; drastic
&gt;&gt;&gt;&gt; appeared.  We want to fix this issue (and it will be fixed), but we've
&gt;&gt;&gt;&gt; decided to
&gt;&gt;&gt;&gt; defer the fix for this issue to a 2.0.1 bug fix release.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Howard
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 2016-07-12 13:51 GMT-06:00 Eric Chamberland
&gt;&gt;&gt;&gt; &lt;Eric.Chamberland_at_[hidden]
&gt;&gt;&gt;&gt; &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt;:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;    Hi Edgard,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;    I just saw that your patch got into ompi/master... any chances it
&gt;&gt;&gt;&gt;    goes into ompi-release/v2.x before rc5?
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;    thanks,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;    Eric
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;    On 08/07/16 03:14 PM, Edgar Gabriel wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;        I think I found the problem, I filed a pr towards master, and
&gt;&gt;&gt;&gt;if
&gt;&gt;&gt;&gt;        that
&gt;&gt;&gt;&gt;        passes I will file a pr for the 2.x branch.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;        Thanks!
&gt;&gt;&gt;&gt;        Edgar
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;        On 7/8/2016 1:14 PM, Eric Chamberland wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;            On 08/07/16 01:44 PM, Edgar Gabriel wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;                ok, but just to be able to construct a test case,
&gt;&gt;&gt;&gt;                basically what you are
&gt;&gt;&gt;&gt;                doing is
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;                MPI_File_write_all_begin (fh, NULL, 0, some datatype);
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;                MPI_File_write_all_end (fh, NULL, &amp;status),
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;                is this correct?
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;            Yes, but with 2 processes:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;            rank 0 writes something, but not rank 1...
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;            other info: rank 0 didn't wait for rank1 after
&gt;&gt;&gt;&gt;            MPI_File_write_all_end so
&gt;&gt;&gt;&gt;            it continued to the next MPI_File_write_all_begin with a
&gt;&gt;&gt;&gt;            different
&gt;&gt;&gt;&gt;            datatype but on the same file...
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;            thanks!
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;            Eric
&gt;&gt;&gt;&gt;            _______________________________________________
&gt;&gt;&gt;&gt;            devel mailing list
&gt;&gt;&gt;&gt;            devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
&gt;&gt;&gt;&gt;            Subscription:
&gt;&gt;&gt;&gt;            <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;            Link to this post:
&gt;&gt;&gt;&gt;            
&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19173.php">http://www.open-mpi.org/community/lists/devel/2016/07/19173.php</a>
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;    _______________________________________________
&gt;&gt;&gt;&gt;    devel mailing list
&gt;&gt;&gt;&gt;    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
&gt;&gt;&gt;&gt;    Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;    Link to this post:
&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19192.php">http://www.open-mpi.org/community/lists/devel/2016/07/19192.php</a>
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19201.php">http://www.open-mpi.org/community/lists/devel/2016/07/19201.php</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; Link to this post:
&gt;&gt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19202.php">http://www.open-mpi.org/community/lists/devel/2016/07/19202.php</a>
&gt;
&gt;
&gt;-- 
&gt;Jeff Squyres
&gt;jsquyres_at_[hidden]
&gt;For corporate legal information go to:
&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;_______________________________________________
&gt;devel mailing list
&gt;devel_at_[hidden]
&gt;Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;Link to this post:
&gt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19203.php">http://www.open-mpi.org/community/lists/devel/2016/07/19203.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19205.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19205.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19205.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
