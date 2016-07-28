<?
$subject_val = "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 10:46:39 2010" -->
<!-- isoreceived="20100304154639" -->
<!-- sent="Thu, 04 Mar 2010 08:46:22 -0700" -->
<!-- isosent="20100304154622" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn" -->
<!-- id="4B8FD5CE.3070408_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B8FC3DA.5070802_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 10:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12246.php">Joshua Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="12244.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12239.php">Shiqing Fan: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Shiqing.  I'll checkout a trunk copy and try that.
<br>
<p>Damien
<br>
<p>On 04/03/2010 7:29 AM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Damien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for late reply, I was trying to dig inside the code and got some 
</span><br>
<span class="quotelev1">&gt; information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, in your example, it's not correct to define the MPI_Info 
</span><br>
<span class="quotelev1">&gt; as an pointer, it will cause the initialization violation at run time. 
</span><br>
<span class="quotelev1">&gt; The message &quot;LOCAL DAEMON SPAWN IS CURRENTLY UNSUPPORTED&quot; is just a 
</span><br>
<span class="quotelev1">&gt; warning which won't block the execution. In order to make the 
</span><br>
<span class="quotelev1">&gt; master-slave work, you have to disable the CCP support, it seems to 
</span><br>
<span class="quotelev1">&gt; have conflicts with comm_spawn operation, I'm still checking it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To disable CCP in Open MPI 1.4.1, you have to exclude the source files 
</span><br>
<span class="quotelev1">&gt; manually, i.e. excluding ccp files in orte/mca/plm/ccp and 
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/ccp, then also remove the ccp related lines in 
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/base/static-components.h and 
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/base/static-components.h. There is an option to do so in 
</span><br>
<span class="quotelev1">&gt; the trunk version, but not for 1.4.1. Sorry for the inconvenience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the &quot;singleton&quot; run with master.exe, it's still not working under 
</span><br>
<span class="quotelev1">&gt; Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien Hocking wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm playing around with MPI_Comm_spawn, trying to do something simple 
</span><br>
<span class="quotelev2">&gt;&gt; with a master-slave example.  I get a LOCAL DAEMON SPAWN IS CURRENTLY 
</span><br>
<span class="quotelev2">&gt;&gt; UNSUPPORTED error when it tries to spawn the slave.  This is on 
</span><br>
<span class="quotelev2">&gt;&gt; Windows, OpenMPI version 1.4.1, r22421.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the master code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int myid, ierr;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm maincomm;
</span><br>
<span class="quotelev2">&gt;&gt;   ierr = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (myid == 0)
</span><br>
<span class="quotelev2">&gt;&gt;   {
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout &lt;&lt; &quot;\n Hello from the boss &quot; &lt;&lt; myid;
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout.flush();
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Info* spawninfo;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Info_create(spawninfo);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Info_set(*spawninfo, &quot;add-host&quot;, &quot;127.0.0.1&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (myid == 0)
</span><br>
<span class="quotelev2">&gt;&gt;   {
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout &lt;&lt; &quot;\n About to MPI_Comm_spawn.&quot; &lt;&lt; myid;
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout.flush();
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_spawn(&quot;slave.exe&quot;, MPI_ARGV_NULL, 1, *spawninfo, 0, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_SELF, &amp;maincomm, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;   if (myid == 0)
</span><br>
<span class="quotelev2">&gt;&gt;   {
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout &lt;&lt; &quot;\n MPI_Comm_spawn successful.&quot; &lt;&lt; myid;
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout.flush();
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   ierr = MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the slave code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int myid, ierr;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm parent;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ierr = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (parent == MPI_COMM_NULL)
</span><br>
<span class="quotelev2">&gt;&gt;   {
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout &lt;&lt; &quot;\n No parent.&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   std::cout &lt;&lt; &quot;\n Hello from a worker &quot; &lt;&lt; myid;
</span><br>
<span class="quotelev2">&gt;&gt;   std::cout.flush();      ierr = MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, this only starts up correctly if I kick it off with orterun.  
</span><br>
<span class="quotelev2">&gt;&gt; Ideally I'd like to run it as &quot;master.exe&quot; and have it initialise the 
</span><br>
<span class="quotelev2">&gt;&gt; MPI environment from there.  Can anyone tell me what setup I need to 
</span><br>
<span class="quotelev2">&gt;&gt; do that?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12246.php">Joshua Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="12244.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12239.php">Shiqing Fan: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
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
