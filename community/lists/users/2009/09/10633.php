<?
$subject_val = "[OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 18:45:56 2009" -->
<!-- isoreceived="20090913224556" -->
<!-- sent="Mon, 14 Sep 2009 08:45:03 +1000" -->
<!-- isosent="20090913224503" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="[OMPI users] Fails to run &amp;quot;MPI_Comm_spawn&amp;quot; on remote host" -->
<!-- id="C43A2666-A3EB-4537-8E36-ECD15B1E22D7_at_cs.anu.edu.au" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host<br>
<strong>From:</strong> Jaison Paul (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-13 18:45:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10634.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Previous message:</strong> <a href="10632.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10658.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Reply:</strong> <a href="10658.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to create a library using OpenMPI for an SOA middleware  
<br>
for my Phd research. &quot;MPI_Comm_spawn&quot;  is the one I need to go for. I  
<br>
got a sample example working, but only on the local host. Whenever I  
<br>
try to run the spawned children on  a remote hosts, parent cannot  
<br>
launch children on remote hosts and I get the following error message:
<br>
<p>------------------BEGIN MPIRUN AND ERROR MSG------------------------
<br>
mpirun --prefix /opt/mpi/ompi-1.3.2/ --mca btl_tcp_if_include eth0 - 
<br>
np 1 /home/jaison/mpi/advanced_MPI/spawn/manager
<br>
Manager code started - host headnode -- myid &amp; world_size 0 1
<br>
Host is: myhost
<br>
WorkDir is: /home/jaison/mpi/advanced_MPI/spawn/lib
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
There are no allocated resources for the application
   /home/jaison/mpi/advanced_MPI/spawn//lib
that match the requested mapping:
Verify that you have mapped the allocated resources properly using the
--host or --hostfile specification.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
A daemon (pid unknown) died unexpectedly on signal 1  while  
attempting to
launch so we are aborting.
There may be more information reported by the environment (see above).
This may be because the daemon was unable to find all the needed shared
libraries on the remote node. You may set your LD_LIBRARY_PATH to  
have the
location of the shared libraries on the remote nodes and this will
automatically be forwarded to the remote nodes.
------------------------------------------------------------------------ 
--
mpirun: clean termination accomplished
--------------------------END OF ERROR  
MSG-----------------------------------
I use the reserved keys - 'host' &amp; 'wdir' - to set the remote host  
and work directory using MPI_Info. Here is the code snippet:
--------------------------BEGIN Code  
Snippet-----------------------------------
   MPI_Info hostinfo;
   MPI_Info_create(&amp;hostinfo);
   MPI_Info_set(hostinfo, &quot;host&quot;, &quot;myhost&quot;);
   MPI_Info_set(hostinfo, &quot;wdir&quot;, &quot;/home/jaison/mpi/advanced_MPI/ 
spawn/lib&quot;);
   // Checking for 'hostinfo'. The results are okay (see above)
   int test0 = MPI_Info_get(hostinfo, &quot;host&quot;, valuelen, value, &amp;flag);
   int test = MPI_Info_get(hostinfo, &quot;wdir&quot;, valuelen, value1, &amp;flag);
   printf(&quot;Host is: %s\n&quot;, value);
   printf(&quot;WorkDir is: %s\n&quot;, value1);
   sprintf( launched_program, &quot;launched_program&quot; );
   MPI_Comm_spawn( launched_program, MPI_ARGV_NULL , number_to_spawn,
                   hostinfo, 0, MPI_COMM_SELF, &amp;everyone,
                   MPI_ERRCODES_IGNORE );
--------------------------END OF Code  
Snippet-----------------------------------
I've set the LD_LIBRARY_PATH correctly. Is &quot;MPI_Comm_spawn&quot;  
implemented in open mpi (I am using version 1.3.2)? If so, where am I  
going wrong? Any input will be very much appreciated.
Thanking you in advance.
Jaison
jmulerik_at_[hidden]
<a href="http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html">http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10634.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Previous message:</strong> <a href="10632.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10658.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Reply:</strong> <a href="10658.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
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
