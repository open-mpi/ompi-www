<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 16:11:53 2009" -->
<!-- isoreceived="20091202211153" -->
<!-- sent="Wed, 2 Dec 2009 14:11:28 -0700" -->
<!-- isosent="20091202211128" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="dcf611bd0912021311x3213969fy6ab5b8aefe6e5ff4_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54D60543-DCC0-4A84-ACED-DF63195733F1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn lots of times<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 16:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11378.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11376.php">Jeff Squyres: "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector"</a>
<li><strong>In reply to:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11378.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11378.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 2, 2009 at 12:12, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2009, at 10:24 AM, Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 20:58, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 1, 2009 at 18:03, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may want to check your limits as defined by the shell/system. I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also run this for as long as I'm willing to let it run, so something else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears to be going on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that with 1.3.3? I found that with 1.3.4 I can run the example much
</span><br>
<span class="quotelev2">&gt;&gt; longer until I hit this error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [master] (31996) forking processes
</span><br>
<span class="quotelev2">&gt;&gt; [mujo:14273] opal_os_dirpath_create: Error: Unable to create the
</span><br>
<span class="quotelev2">&gt;&gt; sub-directory (/tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/13386/31998)
</span><br>
<span class="quotelev2">&gt;&gt; of (/tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/13386/31998/0),
</span><br>
<span class="quotelev2">&gt;&gt; mkdir failed [1]
</span><br>
<span class="quotelev2">&gt;&gt; [mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; util/session_dir.c at line 101
</span><br>
<span class="quotelev2">&gt;&gt; [mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; util/session_dir.c at line 425
</span><br>
<span class="quotelev2">&gt;&gt; [mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; base/ess_base_std_app.c at line 132
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   orte_session_dir failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; After some googling I found that this is apparently an ext3 filesystem
</span><br>
<span class="quotelev1">&gt; limitation, i.e. there can be only 31998 subdirectories in a directory. Why
</span><br>
<span class="quotelev1">&gt; is openmpi creating all of these directories in the first place? Is there a
</span><br>
<span class="quotelev1">&gt; way to &quot;recycle&quot; them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The session directories are built to house shared memory backing files,
</span><br>
<span class="quotelev1">&gt; plus other potential entries depending upon options. They should be deleted
</span><br>
<span class="quotelev1">&gt; upon finalize of each process, so you shouldn't be running out of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can check to see that the code is cleaning them out (or at least,
</span><br>
<span class="quotelev1">&gt; attempting to do so). Not sure if there is something about ext3 that might
</span><br>
<span class="quotelev1">&gt; retain the directory entries until the &quot;parent&quot; process terminates, even
</span><br>
<span class="quotelev1">&gt; though the files have been deleted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do an ls on the directory tree, do you see 32k subdirectories? Or do
</span><br>
<span class="quotelev1">&gt; you only see the ones for the active processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a good point. As the master process is running I can see the
</span><br>
directory fill up. When I Ctrl-C the master, the directory completely
<br>
disappears. When I let it run all the way to 32K directories, the directory
<br>
does not disappear and contains 32K directories even after master gets
<br>
killed by MPI.
<br>
<p>Some process must not be closing some file in these directories which would
<br>
prevent them from being unlinked, if I understand ext3 correctly.
<br>
<p>nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11378.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11376.php">Jeff Squyres: "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector"</a>
<li><strong>In reply to:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11378.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11378.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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
