<?
$subject_val = "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 19:14:28 2009" -->
<!-- isoreceived="20090915231428" -->
<!-- sent="Wed, 16 Sep 2009 09:14:09 +1000" -->
<!-- isosent="20090915231409" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fails to run &amp;quot;MPI_Comm_spawn&amp;quot; on remote host" -->
<!-- id="D0AC9386-C444-4259-BFEF-DF3C209C9964_at_cs.anu.edu.au" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C43A2666-A3EB-4537-8E36-ECD15B1E22D7_at_cs.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host<br>
<strong>From:</strong> Jaison Paul (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 19:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Previous message:</strong> <a href="10657.php">Jonathan Dursi: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10633.php">Jaison Paul: "[OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Reply:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am waiting on some inputs on my query. I just wanted to know  
<br>
whether I can run dynamic child processes using 'MPI_Comm_spawn' on  
<br>
remote hosts? (in openmpi  1.3.2)). Has anyone did that successfully?  
<br>
Or OpenMPI hasnt implemented it yet?
<br>
<p>Please help.
<br>
<p>Jaison
<br>
<a href="http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html">http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html</a>
<br>
<p><p><p><p>On 14/09/2009, at 8:45 AM, Jaison Paul wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to create a library using OpenMPI for an SOA middleware  
</span><br>
<span class="quotelev1">&gt; for my Phd research. &quot;MPI_Comm_spawn&quot;  is the one I need to go for.  
</span><br>
<span class="quotelev1">&gt; I got a sample example working, but only on the local host.  
</span><br>
<span class="quotelev1">&gt; Whenever I try to run the spawned children on  a remote hosts,  
</span><br>
<span class="quotelev1">&gt; parent cannot launch children on remote hosts and I get the  
</span><br>
<span class="quotelev1">&gt; following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------BEGIN MPIRUN AND ERROR MSG------------------------
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/mpi/ompi-1.3.2/ --mca btl_tcp_if_include eth0 - 
</span><br>
<span class="quotelev1">&gt; np 1 /home/jaison/mpi/advanced_MPI/spawn/manager
</span><br>
<span class="quotelev1">&gt; Manager code started - host headnode -- myid &amp; world_size 0 1
</span><br>
<span class="quotelev1">&gt; Host is: myhost
</span><br>
<span class="quotelev1">&gt; WorkDir is: /home/jaison/mpi/advanced_MPI/spawn/lib
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev1">&gt;   /home/jaison/mpi/advanced_MPI/spawn//lib
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while  
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; --------------------------END OF ERROR  
</span><br>
<span class="quotelev1">&gt; MSG-----------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use the reserved keys - 'host' &amp; 'wdir' - to set the remote host  
</span><br>
<span class="quotelev1">&gt; and work directory using MPI_Info. Here is the code snippet:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------BEGIN Code  
</span><br>
<span class="quotelev1">&gt; Snippet-----------------------------------
</span><br>
<span class="quotelev1">&gt;   MPI_Info hostinfo;
</span><br>
<span class="quotelev1">&gt;   MPI_Info_create(&amp;hostinfo);
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(hostinfo, &quot;host&quot;, &quot;myhost&quot;);
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(hostinfo, &quot;wdir&quot;, &quot;/home/jaison/mpi/advanced_MPI/ 
</span><br>
<span class="quotelev1">&gt; spawn/lib&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   // Checking for 'hostinfo'. The results are okay (see above)
</span><br>
<span class="quotelev1">&gt;   int test0 = MPI_Info_get(hostinfo, &quot;host&quot;, valuelen, value, &amp;flag);
</span><br>
<span class="quotelev1">&gt;   int test = MPI_Info_get(hostinfo, &quot;wdir&quot;, valuelen, value1, &amp;flag);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Host is: %s\n&quot;, value);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;WorkDir is: %s\n&quot;, value1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   sprintf( launched_program, &quot;launched_program&quot; );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_spawn( launched_program, MPI_ARGV_NULL , number_to_spawn,
</span><br>
<span class="quotelev1">&gt;                   hostinfo, 0, MPI_COMM_SELF, &amp;everyone,
</span><br>
<span class="quotelev1">&gt;                   MPI_ERRCODES_IGNORE );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------END OF Code  
</span><br>
<span class="quotelev1">&gt; Snippet-----------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've set the LD_LIBRARY_PATH correctly. Is &quot;MPI_Comm_spawn&quot;  
</span><br>
<span class="quotelev1">&gt; implemented in open mpi (I am using version 1.3.2)? If so, where am  
</span><br>
<span class="quotelev1">&gt; I going wrong? Any input will be very much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jaison
</span><br>
<span class="quotelev1">&gt; jmulerik_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html">http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Previous message:</strong> <a href="10657.php">Jonathan Dursi: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10633.php">Jaison Paul: "[OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Reply:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
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
