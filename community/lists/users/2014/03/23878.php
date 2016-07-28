<?
$subject_val = "[OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 19:48:50 2014" -->
<!-- isoreceived="20140317234850" -->
<!-- sent="Mon, 17 Mar 2014 16:48:49 -0700" -->
<!-- isosent="20140317234849" -->
<!-- name="Ramesh Vinayagam" -->
<!-- email="rvinayagam.85_at_[hidden]" -->
<!-- subject="[OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn" -->
<!-- id="CAOgG+Pe3qEBTy_6mXTz-ah7BYV=X0NMraDDAQ4Z4ysCR2bykeg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn<br>
<strong>From:</strong> Ramesh Vinayagam (<em>rvinayagam.85_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 19:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23879.php">Saliya Ekanayake: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Previous message:</strong> <a href="23877.php">Oscar Vega-Gisbert: "Re: [OMPI users] OpenMpi-java Examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23886.php">Nathan Hjelm: "Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="23886.php">Nathan Hjelm: "Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Can comm_spawn be used with win_create?
<br>
<p>For ex:
<br>
Master process:
<br>
-----------------------
<br>
<p>&nbsp;&nbsp;MPI_Comm_spawn(worker_program,MPI_ARGV_NULL, world_size-1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info, 0, MPI_COMM_SELF, &amp;everyone,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRCODES_IGNORE);
<br>
<p>&nbsp;&nbsp;MPI_Win_create(&amp;testval, sizeof(double), 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, everyone,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;nwin);
<br>
<p><p>Worker process:
<br>
------------------------
<br>
<p>&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
&nbsp;&nbsp;if (parent == MPI_COMM_NULL) error(&quot;No parent!&quot;);
<br>
&nbsp;&nbsp;MPI_Comm_remote_size(parent, &amp;size);
<br>
&nbsp;&nbsp;if (size != 1) error(&quot;Something's wrong with the parent&quot;);
<br>
<p>&nbsp;&nbsp;MPI_Win_create(MPI_BOTTOM, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1, MPI_INFO_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent, &amp;nwin);
<br>
<p><p><p>This one fails currently. Am I doing something wrong. It would be great if
<br>
someone could help me.
<br>
<p>Thanks
<br>
Ramesh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23879.php">Saliya Ekanayake: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Previous message:</strong> <a href="23877.php">Oscar Vega-Gisbert: "Re: [OMPI users] OpenMpi-java Examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23886.php">Nathan Hjelm: "Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="23886.php">Nathan Hjelm: "Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
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
