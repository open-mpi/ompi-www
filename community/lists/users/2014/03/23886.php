<?
$subject_val = "Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 10:37:57 2014" -->
<!-- isoreceived="20140318143757" -->
<!-- sent="Tue, 18 Mar 2014 08:37:54 -0600" -->
<!-- isosent="20140318143754" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn" -->
<!-- id="20140318143754.GF28767_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAOgG+Pe3qEBTy_6mXTz-ah7BYV=X0NMraDDAQ4Z4ysCR2bykeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 10:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Previous message:</strong> <a href="23885.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>In reply to:</strong> <a href="23878.php">Ramesh Vinayagam: "[OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The short answer is no. You can not at this time create a window with
<br>
an intercommunicator. You can use MPI_Intercomm_merge to join the two
<br>
groups and make a window using that communicator.
<br>
<p>There has been some discussion in the MPI Forum about allowing windows
<br>
to be created on intercommunicators. More work is needed to determine
<br>
what the semantics should be so it will not be available in MPI 3.1.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>On Mon, Mar 17, 2014 at 04:48:49PM -0700, Ramesh Vinayagam wrote:
<br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Can comm_spawn be used with win_create?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    For ex:
</span><br>
<span class="quotelev1">&gt;    Master process:
</span><br>
<span class="quotelev1">&gt;    -----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_spawn(worker_program,MPI_ARGV_NULL, world_size-1,
</span><br>
<span class="quotelev1">&gt;                     info, 0, MPI_COMM_SELF, &amp;everyone,
</span><br>
<span class="quotelev1">&gt;                     MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      MPI_Win_create(&amp;testval, sizeof(double), 1,
</span><br>
<span class="quotelev1">&gt;                     MPI_INFO_NULL, everyone,
</span><br>
<span class="quotelev1">&gt;                     &amp;nwin);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Worker process:
</span><br>
<span class="quotelev1">&gt;    ------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev1">&gt;      if (parent == MPI_COMM_NULL) error(&quot;No parent!&quot;);
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_remote_size(parent, &amp;size);
</span><br>
<span class="quotelev1">&gt;      if (size != 1) error(&quot;Something's wrong with the parent&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      MPI_Win_create(MPI_BOTTOM, 0,
</span><br>
<span class="quotelev1">&gt;                     1, MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt;                     parent, &amp;nwin);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This one fails currently. Am I doing something wrong. It would be great if
</span><br>
<span class="quotelev1">&gt;    someone could help me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt;    Ramesh
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23886/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Previous message:</strong> <a href="23885.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>In reply to:</strong> <a href="23878.php">Ramesh Vinayagam: "[OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
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
