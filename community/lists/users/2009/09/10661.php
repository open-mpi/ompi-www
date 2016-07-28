<?
$subject_val = "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 09:12:04 2009" -->
<!-- isoreceived="20090916131204" -->
<!-- sent="Wed, 16 Sep 2009 06:47:25 -0600" -->
<!-- isosent="20090916124725" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fails to run &amp;quot;MPI_Comm_spawn&amp;quot; on remote host" -->
<!-- id="71d2d8cc0909160547k53b5e843wf1a319c152c8bd62_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9FFDC344-8835-480C-BE86-E274B344B47D_at_cs.anu.edu.au" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-16 08:47:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10662.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Previous message:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>In reply to:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good to hear! I'll update the man page as it should have included that info.
<br>
<p>On Tue, Sep 15, 2009 at 9:48 PM, Jaison Paul &lt;jmulerik_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you so much for your reply. Your tips worked!  The idea is to set the
</span><br>
<span class="quotelev1">&gt; hosts first and then pick them using 'host' reserved key in MPI_info. Great!
</span><br>
<span class="quotelev1">&gt; Thanks a ton. I  tried &quot;-host&quot; variable in mpirun like:
</span><br>
<span class="quotelev1">&gt;  &quot;mpirun --prefix /opt/mpi/ompi-1.3.2/  -np 1 -host myhost1,myhost2
</span><br>
<span class="quotelev1">&gt; spawner&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and set
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;MPI_info&quot; reserved key 'host' to set the remote host like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Info hostinfo;
</span><br>
<span class="quotelev1">&gt;   MPI_Info_create(&amp;hostinfo);
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(hostinfo, &quot;host&quot;, &quot;myhost2&quot;);
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(hostinfo, &quot;wdir&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;/home/jaison/mpi/advanced_MPI/spawn/lib&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I can run child processes in remote host - myhost2. I shall also try
</span><br>
<span class="quotelev1">&gt; the  &quot;add-hostfile&quot; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Btw, the man page of MPI_Comm_spawn does not give detailed information as
</span><br>
<span class="quotelev1">&gt; you have just done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jaison
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html<http://cs.anu.edu.au/%7EJaison.Mulerikkal/Home.html">http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html<http://cs.anu.edu.au/%7EJaison.Mulerikkal/Home.html</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 16/09/2009, at 12:39 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't support the ability to add a new host during a comm_spawn call in
</span><br>
<span class="quotelev1">&gt; the 1.3 series. This is a feature that is being added for the upcoming new
</span><br>
<span class="quotelev1">&gt; feature series release (tagged 1.5).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two solutions to this problem in 1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. declare all hosts at the beginning of the job. You can then specify
</span><br>
<span class="quotelev1">&gt; which one to use with the &quot;host&quot; key.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. you -can- add a hostfile to the job during a comm_spawn. This is done
</span><br>
<span class="quotelev1">&gt; with the &quot;add-hostfile&quot; key. All the hosts in the hostfile will be added to
</span><br>
<span class="quotelev1">&gt; the job. You can then specify which host(s) to use for this particular
</span><br>
<span class="quotelev1">&gt; comm_spawn with the &quot;host&quot; key.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of this is documented - you should see it with a &quot;man MPI_Comm_spawn&quot;
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need to dynamically add a host via &quot;host&quot; before then, you could try
</span><br>
<span class="quotelev1">&gt; downloading a copy of the developer's trunk from the OMPI web site. It is
</span><br>
<span class="quotelev1">&gt; implemented there at this time - and also documented via the man page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 15, 2009 at 5:14 PM, Jaison Paul &lt;jmulerik_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi All,
</span><br>
<span class="quotelev2">&gt;&gt; I am waiting on some inputs on my query. I just wanted to know whether I
</span><br>
<span class="quotelev2">&gt;&gt; can run dynamic child processes using 'MPI_Comm_spawn' on remote hosts? (in
</span><br>
<span class="quotelev2">&gt;&gt; openmpi  1.3.2)). Has anyone did that successfully? Or OpenMPI hasnt
</span><br>
<span class="quotelev2">&gt;&gt; implemented it yet?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Jaison
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html<http://cs.anu.edu.au/%7EJaison.Mulerikkal/Home.html">http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html<http://cs.anu.edu.au/%7EJaison.Mulerikkal/Home.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 14/09/2009, at 8:45 AM, Jaison Paul wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to create a library using OpenMPI for an SOA middleware for my
</span><br>
<span class="quotelev2">&gt;&gt; Phd research. &quot;MPI_Comm_spawn&quot;  is the one I need to go for. I got a
</span><br>
<span class="quotelev2">&gt;&gt; sample example working, but only on the local host. Whenever I try to run
</span><br>
<span class="quotelev2">&gt;&gt; the spawned children on  a remote hosts, parent cannot launch children on
</span><br>
<span class="quotelev2">&gt;&gt; remote hosts and I get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------BEGIN MPIRUN AND ERROR MSG------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /opt/mpi/ompi-1.3.2/ --mca btl_tcp_if_include eth0 -np 1
</span><br>
<span class="quotelev2">&gt;&gt; /home/jaison/mpi/advanced_MPI/spawn/manager
</span><br>
<span class="quotelev2">&gt;&gt; Manager code started - host headnode -- myid &amp; world_size 0 1
</span><br>
<span class="quotelev2">&gt;&gt; Host is: myhost
</span><br>
<span class="quotelev2">&gt;&gt; WorkDir is: /home/jaison/mpi/advanced_MPI/spawn/lib
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------END OF ERROR
</span><br>
<span class="quotelev2">&gt;&gt; MSG-----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use the reserved keys - 'host' &amp; 'wdir' - to set the remote host and
</span><br>
<span class="quotelev2">&gt;&gt; work directory using MPI_Info. Here is the code snippet:
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
<span class="quotelev2">&gt;&gt;   MPI_Info_set(hostinfo, &quot;wdir&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/jaison/mpi/advanced_MPI/spawn/lib&quot;);
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
<span class="quotelev2">&gt;&gt; I've set the LD_LIBRARY_PATH correctly. Is &quot;MPI_Comm_spawn&quot; implemented in
</span><br>
<span class="quotelev2">&gt;&gt; open mpi (I am using version 1.3.2)? If so, where am I going wrong? Any
</span><br>
<span class="quotelev2">&gt;&gt; input will be very much appreciated.
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
<span class="quotelev2">&gt;&gt; <a href="http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html<http://cs.anu.edu.au/%7EJaison.Mulerikkal/Home.html">http://cs.anu.edu.au/~Jaison.Mulerikkal/Home.html<http://cs.anu.edu.au/%7EJaison.Mulerikkal/Home.html</a>&gt;
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10661/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10662.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Previous message:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>In reply to:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
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
