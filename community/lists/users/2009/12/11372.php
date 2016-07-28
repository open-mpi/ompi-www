<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 12:25:19 2009" -->
<!-- isoreceived="20091202172519" -->
<!-- sent="Wed, 2 Dec 2009 10:24:54 -0700" -->
<!-- isosent="20091202172454" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="dcf611bd0912020924t2b4a32a4g4a0adde40a7c2fe9_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dcf611bd0912011958m64c9303bkb60cc5c385aad1d4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-02 12:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11373.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11371.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11360.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 1, 2009 at 20:58, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 18:03, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may want to check your limits as defined by the shell/system. I can
</span><br>
<span class="quotelev2">&gt;&gt; also run this for as long as I'm willing to let it run, so something else
</span><br>
<span class="quotelev2">&gt;&gt; appears to be going on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Is that with 1.3.3? I found that with 1.3.4 I can run the example much
</span><br>
<span class="quotelev1">&gt; longer until I hit this error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [master] (31996) forking processes
</span><br>
<span class="quotelev1">&gt; [mujo:14273] opal_os_dirpath_create: Error: Unable to create the
</span><br>
<span class="quotelev1">&gt; sub-directory (/tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/13386/31998)
</span><br>
<span class="quotelev1">&gt; of (/tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/13386/31998/0),
</span><br>
<span class="quotelev1">&gt; mkdir failed [1]
</span><br>
<span class="quotelev1">&gt; [mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; util/session_dir.c at line 101
</span><br>
<span class="quotelev1">&gt; [mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; util/session_dir.c at line 425
</span><br>
<span class="quotelev1">&gt; [mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; base/ess_base_std_app.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_session_dir failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
After some googling I found that this is apparently an ext3 filesystem
<br>
limitation, i.e. there can be only 31998 subdirectories in a directory. Why
<br>
is openmpi creating all of these directories in the first place? Is there a
<br>
way to &quot;recycle&quot; them?
<br>
<p>nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11373.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11371.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11360.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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
