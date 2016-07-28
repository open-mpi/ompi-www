<?
$subject_val = "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 23:49:14 2009" -->
<!-- isoreceived="20090916034914" -->
<!-- sent="Wed, 16 Sep 2009 13:48:52 +1000" -->
<!-- isosent="20090916034852" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fails to run &amp;quot;MPI_Comm_spawn&amp;quot; on remote host" -->
<!-- id="9FFDC344-8835-480C-BE86-E274B344B47D_at_cs.anu.edu.au" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0909151939p5dc52cfftf03ada35eaa32b83_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-09-15 23:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10661.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Previous message:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>In reply to:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10661.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Reply:</strong> <a href="10661.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thank you so much for your reply. Your tips worked!  The idea is to  
<br>
set the hosts first and then pick them using 'host' reserved key in  
<br>
MPI_info. Great! Thanks a ton. I  tried &quot;-host&quot; variable in mpirun like:
<br>
<p>&nbsp;&nbsp;&quot;mpirun --prefix /opt/mpi/ompi-1.3.2/  -np 1 -host myhost1,myhost2  
<br>
spawner&quot;
<br>
<p>and set
<br>
<p>&quot;MPI_info&quot; reserved key 'host' to set the remote host like:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Info hostinfo;
<br>
&nbsp;&nbsp;&nbsp;MPI_Info_create(&amp;hostinfo);
<br>
&nbsp;&nbsp;&nbsp;MPI_Info_set(hostinfo, &quot;host&quot;, &quot;myhost2&quot;);
<br>
&nbsp;&nbsp;&nbsp;MPI_Info_set(hostinfo, &quot;wdir&quot;, &quot;/home/jaison/mpi/advanced_MPI/ 
<br>
spawn/lib&quot;);
<br>
<p>Now I can run child processes in remote host - myhost2. I shall also  
<br>
try the  &quot;add-hostfile&quot; option.
<br>
<p>Btw, the man page of MPI_Comm_spawn does not give detailed  
<br>
information as you have just done.
<br>
<p>Jaison
<br>
<a href="http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html">http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html</a>
<br>
<p><p><p><p>On 16/09/2009, at 12:39 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We don't support the ability to add a new host during a comm_spawn  
</span><br>
<span class="quotelev1">&gt; call in the 1.3 series. This is a feature that is being added for  
</span><br>
<span class="quotelev1">&gt; the upcoming new feature series release (tagged 1.5).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two solutions to this problem in 1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. declare all hosts at the beginning of the job. You can then  
</span><br>
<span class="quotelev1">&gt; specify which one to use with the &quot;host&quot; key.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. you -can- add a hostfile to the job during a comm_spawn. This is  
</span><br>
<span class="quotelev1">&gt; done with the &quot;add-hostfile&quot; key. All the hosts in the hostfile  
</span><br>
<span class="quotelev1">&gt; will be added to the job. You can then specify which host(s) to use  
</span><br>
<span class="quotelev1">&gt; for this particular comm_spawn with the &quot;host&quot; key.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of this is documented - you should see it with a &quot;man  
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn&quot; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need to dynamically add a host via &quot;host&quot; before then, you  
</span><br>
<span class="quotelev1">&gt; could try downloading a copy of the developer's trunk from the OMPI  
</span><br>
<span class="quotelev1">&gt; web site. It is implemented there at this time - and also  
</span><br>
<span class="quotelev1">&gt; documented via the man page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 15, 2009 at 5:14 PM, Jaison Paul  
</span><br>
<span class="quotelev1">&gt; &lt;jmulerik_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am waiting on some inputs on my query. I just wanted to know  
</span><br>
<span class="quotelev1">&gt; whether I can run dynamic child processes using 'MPI_Comm_spawn' on  
</span><br>
<span class="quotelev1">&gt; remote hosts? (in openmpi  1.3.2)). Has anyone did that  
</span><br>
<span class="quotelev1">&gt; successfully? Or OpenMPI hasnt implemented it yet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jaison
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
<span class="quotelev1">&gt; On 14/09/2009, at 8:45 AM, Jaison Paul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to create a library using OpenMPI for an SOA  
</span><br>
<span class="quotelev2">&gt;&gt; middleware for my Phd research. &quot;MPI_Comm_spawn&quot;  is the one I  
</span><br>
<span class="quotelev2">&gt;&gt; need to go for. I got a sample example working, but only on the  
</span><br>
<span class="quotelev2">&gt;&gt; local host. Whenever I try to run the spawned children on  a  
</span><br>
<span class="quotelev2">&gt;&gt; remote hosts, parent cannot launch children on remote hosts and I  
</span><br>
<span class="quotelev2">&gt;&gt; get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------BEGIN MPIRUN AND ERROR MSG------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /opt/mpi/ompi-1.3.2/ --mca btl_tcp_if_include eth0  
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 /home/jaison/mpi/advanced_MPI/spawn/manager
</span><br>
<span class="quotelev2">&gt;&gt; Manager code started - host headnode -- myid &amp; world_size 0 1
</span><br>
<span class="quotelev2">&gt;&gt; Host is: myhost
</span><br>
<span class="quotelev2">&gt;&gt; WorkDir is: /home/jaison/mpi/advanced_MPI/spawn/lib
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev2">&gt;&gt;   /home/jaison/mpi/advanced_MPI/spawn//lib
</span><br>
<span class="quotelev2">&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while  
</span><br>
<span class="quotelev2">&gt;&gt; attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev2">&gt;&gt; above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev2">&gt;&gt; have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------END OF ERROR  
</span><br>
<span class="quotelev2">&gt;&gt; MSG-----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use the reserved keys - 'host' &amp; 'wdir' - to set the remote host  
</span><br>
<span class="quotelev2">&gt;&gt; and work directory using MPI_Info. Here is the code snippet:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------BEGIN Code  
</span><br>
<span class="quotelev2">&gt;&gt; Snippet-----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Info hostinfo;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Info_create(&amp;hostinfo);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Info_set(hostinfo, &quot;host&quot;, &quot;myhost&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Info_set(hostinfo, &quot;wdir&quot;, &quot;/home/jaison/mpi/advanced_MPI/ 
</span><br>
<span class="quotelev2">&gt;&gt; spawn/lib&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   // Checking for 'hostinfo'. The results are okay (see above)
</span><br>
<span class="quotelev2">&gt;&gt;   int test0 = MPI_Info_get(hostinfo, &quot;host&quot;, valuelen, value, &amp;flag);
</span><br>
<span class="quotelev2">&gt;&gt;   int test = MPI_Info_get(hostinfo, &quot;wdir&quot;, valuelen, value1, &amp;flag);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Host is: %s\n&quot;, value);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;WorkDir is: %s\n&quot;, value1);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   sprintf( launched_program, &quot;launched_program&quot; );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_spawn( launched_program, MPI_ARGV_NULL , number_to_spawn,
</span><br>
<span class="quotelev2">&gt;&gt;                   hostinfo, 0, MPI_COMM_SELF, &amp;everyone,
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_ERRCODES_IGNORE );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------END OF Code  
</span><br>
<span class="quotelev2">&gt;&gt; Snippet-----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've set the LD_LIBRARY_PATH correctly. Is &quot;MPI_Comm_spawn&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; implemented in open mpi (I am using version 1.3.2)? If so, where  
</span><br>
<span class="quotelev2">&gt;&gt; am I going wrong? Any input will be very much appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanking you in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jaison
</span><br>
<span class="quotelev2">&gt;&gt; jmulerik_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html">http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10660/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10661.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Previous message:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>In reply to:</strong> <a href="10659.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10661.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Reply:</strong> <a href="10661.php">Ralph Castain: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
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
