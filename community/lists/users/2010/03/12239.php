<?
$subject_val = "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 09:29:44 2010" -->
<!-- isoreceived="20100304142944" -->
<!-- sent="Thu, 04 Mar 2010 15:29:46 +0100" -->
<!-- isosent="20100304142946" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn" -->
<!-- id="4B8FC3DA.5070802_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B8DF588.3010707_at_khubla.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 09:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12240.php">François Trahay: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12238.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12209.php">Damien Hocking: "[OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12245.php">Damien Hocking: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="12245.php">Damien Hocking: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>Sorry for late reply, I was trying to dig inside the code and got some 
<br>
information.
<br>
<p>First of all, in your example, it's not correct to define the MPI_Info 
<br>
as an pointer, it will cause the initialization violation at run time. 
<br>
The message &quot;LOCAL DAEMON SPAWN IS CURRENTLY UNSUPPORTED&quot; is just a 
<br>
warning which won't block the execution. In order to make the 
<br>
master-slave work, you have to disable the CCP support, it seems to have 
<br>
conflicts with comm_spawn operation, I'm still checking it.
<br>
<p>To disable CCP in Open MPI 1.4.1, you have to exclude the source files 
<br>
manually, i.e. excluding ccp files in orte/mca/plm/ccp and 
<br>
orte/mca/ras/ccp, then also remove the ccp related lines in 
<br>
orte/mca/plm/base/static-components.h and 
<br>
orte/mca/ras/base/static-components.h. There is an option to do so in 
<br>
the trunk version, but not for 1.4.1. Sorry for the inconvenience.
<br>
<p>For the &quot;singleton&quot; run with master.exe, it's still not working under 
<br>
Windows.
<br>
<p><p>Best Regards,
<br>
Shiqing
<br>
<p><p>Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm playing around with MPI_Comm_spawn, trying to do something simple 
</span><br>
<span class="quotelev1">&gt; with a master-slave example.  I get a LOCAL DAEMON SPAWN IS CURRENTLY 
</span><br>
<span class="quotelev1">&gt; UNSUPPORTED error when it tries to spawn the slave.  This is on 
</span><br>
<span class="quotelev1">&gt; Windows, OpenMPI version 1.4.1, r22421.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the master code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int myid, ierr;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm maincomm;
</span><br>
<span class="quotelev1">&gt;   ierr = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   if (myid == 0)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;\n Hello from the boss &quot; &lt;&lt; myid;
</span><br>
<span class="quotelev1">&gt;      std::cout.flush();
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   MPI_Info* spawninfo;
</span><br>
<span class="quotelev1">&gt;   MPI_Info_create(spawninfo);
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(*spawninfo, &quot;add-host&quot;, &quot;127.0.0.1&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   if (myid == 0)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;\n About to MPI_Comm_spawn.&quot; &lt;&lt; myid;
</span><br>
<span class="quotelev1">&gt;      std::cout.flush();
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_spawn(&quot;slave.exe&quot;, MPI_ARGV_NULL, 1, *spawninfo, 0, 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SELF, &amp;maincomm, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;   if (myid == 0)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;\n MPI_Comm_spawn successful.&quot; &lt;&lt; myid;
</span><br>
<span class="quotelev1">&gt;      std::cout.flush();
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   ierr = MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the slave code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int myid, ierr;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   MPI_Comm parent;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   ierr = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   if (parent == MPI_COMM_NULL)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;\n No parent.&quot;;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   std::cout &lt;&lt; &quot;\n Hello from a worker &quot; &lt;&lt; myid;
</span><br>
<span class="quotelev1">&gt;   std::cout.flush();    
</span><br>
<span class="quotelev1">&gt;   ierr = MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, this only starts up correctly if I kick it off with orterun.  
</span><br>
<span class="quotelev1">&gt; Ideally I'd like to run it as &quot;master.exe&quot; and have it initialise the 
</span><br>
<span class="quotelev1">&gt; MPI environment from there.  Can anyone tell me what setup I need to 
</span><br>
<span class="quotelev1">&gt; do that?
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12240.php">François Trahay: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12238.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12209.php">Damien Hocking: "[OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12245.php">Damien Hocking: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="12245.php">Damien Hocking: "Re: [OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
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
