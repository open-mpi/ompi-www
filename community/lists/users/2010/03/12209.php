<?
$subject_val = "[OMPI users] noob warning - problems testing MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 00:37:31 2010" -->
<!-- isoreceived="20100303053731" -->
<!-- sent="Tue, 02 Mar 2010 22:37:12 -0700" -->
<!-- isosent="20100303053712" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="[OMPI users] noob warning - problems testing MPI_Comm_spawn" -->
<!-- id="4B8DF588.3010707_at_khubla.com" -->
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
<strong>Subject:</strong> [OMPI users] noob warning - problems testing MPI_Comm_spawn<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 00:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12210.php">Yuanyuan ZHANG: "[OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12239.php">Shiqing Fan: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="12239.php">Shiqing Fan: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm playing around with MPI_Comm_spawn, trying to do something simple 
<br>
with a master-slave example.  I get a LOCAL DAEMON SPAWN IS CURRENTLY 
<br>
UNSUPPORTED error when it tries to spawn the slave.  This is on Windows, 
<br>
OpenMPI version 1.4.1, r22421.
<br>
<p>Here's the master code:
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int myid, ierr;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm maincomm;
<br>
&nbsp;&nbsp;&nbsp;ierr = MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;if (myid == 0)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;\n Hello from the boss &quot; &lt;&lt; myid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout.flush();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;MPI_Info* spawninfo;
<br>
&nbsp;&nbsp;&nbsp;MPI_Info_create(spawninfo);
<br>
&nbsp;&nbsp;&nbsp;MPI_Info_set(*spawninfo, &quot;add-host&quot;, &quot;127.0.0.1&quot;);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;if (myid == 0)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;\n About to MPI_Comm_spawn.&quot; &lt;&lt; myid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout.flush();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(&quot;slave.exe&quot;, MPI_ARGV_NULL, 1, *spawninfo, 0, 
<br>
MPI_COMM_SELF, &amp;maincomm, MPI_ERRCODES_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;if (myid == 0)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;\n MPI_Comm_spawn successful.&quot; &lt;&lt; myid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout.flush();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;ierr = MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Here's the slave code:
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int myid, ierr;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm parent;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;ierr = MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;if (parent == MPI_COMM_NULL)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;\n No parent.&quot;;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;\n Hello from a worker &quot; &lt;&lt; myid;
<br>
&nbsp;&nbsp;&nbsp;std::cout.flush();   
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;ierr = MPI_Finalize();
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Also, this only starts up correctly if I kick it off with orterun.  
<br>
Ideally I'd like to run it as &quot;master.exe&quot; and have it initialise the 
<br>
MPI environment from there.  Can anyone tell me what setup I need to do 
<br>
that? 
<br>
<p>Thanks in advance,
<br>
<p>Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12210.php">Yuanyuan ZHANG: "[OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12239.php">Shiqing Fan: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="12239.php">Shiqing Fan: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
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
