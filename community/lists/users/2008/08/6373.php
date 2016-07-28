<?
$subject_val = "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 17:49:44 2008" -->
<!-- isoreceived="20080817214944" -->
<!-- sent="Sun, 17 Aug 2008 23:49:29 +0200" -->
<!-- isosent="20080817214929" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?" -->
<!-- id="FE1DEA02-A6D1-47C5-AAED-341FA2740195_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2b5e0c120808161240h54be8806se5db96a4b776dfe9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-17 17:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Previous message:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>In reply to:</strong> <a href="6366.php">Brian Dobbins: "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6378.php">Ralph Castain: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Some of these files are used for startup, while others are used during  
<br>
application execution (such as the back-end for shared memory files).  
<br>
Over the years we had a lot of discussions about this topic, and so  
<br>
far we have two ways to help people deal with such situations.  
<br>
However, from my personal experience I don't think that mounting the / 
<br>
tmp over any kind of shared filesystem is a  good idea. Anyway, here  
<br>
are two MCA parameters that might help you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_tmpdir_base&quot; (current  
<br>
value: &lt;none&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base of the session directory tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_no_session_dirs&quot; (current  
<br>
value: &lt;none&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prohibited locations for session  
<br>
directories (multiple locations separated by ',', default=NULL)
<br>
<p>I suggest using the first one as a startup.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 16, 2008, at 9:40 PM, Brian Dobbins wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I was hoping someone here could shed some light on OpenMPI's use  
</span><br>
<span class="quotelev1">&gt; of /tmp (or, I guess, TMPDIR) and save me from diving into the  
</span><br>
<span class="quotelev1">&gt; source.. ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The background is that I'm trying to run some applications on a  
</span><br>
<span class="quotelev1">&gt; system which has a flaky parallel file system which TMPDIR is mapped  
</span><br>
<span class="quotelev1">&gt; to - so, on start up, OpenMPI creates it's 'openmpi-sessions-&lt;user&gt;'  
</span><br>
<span class="quotelev1">&gt; directory there, and under that, a few files.  Sometimes I see 1  
</span><br>
<span class="quotelev1">&gt; subdirectory (usually a 0), sometimes a 0 and a 1, etc.  In one of  
</span><br>
<span class="quotelev1">&gt; these, sometimes I see files such as 'shared_memory_pool.&lt;host&gt;',  
</span><br>
<span class="quotelev1">&gt; and 'shared_memory_module.&lt;host&gt;'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   My questions are, one, what are the various numbers / files for?   
</span><br>
<span class="quotelev1">&gt; (If there's a write-up on this somewhere, just point me towards it!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   And two, the real question, are these 'files' used during runtime,  
</span><br>
<span class="quotelev1">&gt; or only upon startup / shutdown?  I'm having issues with various  
</span><br>
<span class="quotelev1">&gt; codes, especially those heavy on messages and I/O, failing to  
</span><br>
<span class="quotelev1">&gt; complete a run, and haven't resorted to sifting through strace's  
</span><br>
<span class="quotelev1">&gt; output yet.  This doesn't happen all the time, but I've seen it  
</span><br>
<span class="quotelev1">&gt; happen reliably now with one particular code - it's success rate (it  
</span><br>
<span class="quotelev1">&gt; DOES succeed sometimes) is about 25% right now.  My best guess is  
</span><br>
<span class="quotelev1">&gt; that this is because the file system is overloaded, thus not  
</span><br>
<span class="quotelev1">&gt; allowing timely I/O or access to OpenMPI's files, but I wanted to  
</span><br>
<span class="quotelev1">&gt; get a quick understanding of how these files are used by OpenMPI and  
</span><br>
<span class="quotelev1">&gt; whether the FS does indeed seem a likely culprit before going with  
</span><br>
<span class="quotelev1">&gt; that theory for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks very much,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Dobbins
</span><br>
<span class="quotelev1">&gt; Yale Engineering HPC
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6373/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Previous message:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>In reply to:</strong> <a href="6366.php">Brian Dobbins: "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6378.php">Ralph Castain: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
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
