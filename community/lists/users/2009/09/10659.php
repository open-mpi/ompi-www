<?
$subject_val = "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 22:39:56 2009" -->
<!-- isoreceived="20090916023956" -->
<!-- sent="Tue, 15 Sep 2009 20:39:51 -0600" -->
<!-- isosent="20090916023951" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fails to run &amp;quot;MPI_Comm_spawn&amp;quot; on remote host" -->
<!-- id="71d2d8cc0909151939p5dc52cfftf03ada35eaa32b83_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D0AC9386-C444-4259-BFEF-DF3C209C9964_at_cs.anu.edu.au" -->
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
<strong>Date:</strong> 2009-09-15 22:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Previous message:</strong> <a href="10658.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>In reply to:</strong> <a href="10658.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Reply:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't support the ability to add a new host during a comm_spawn call in
<br>
the 1.3 series. This is a feature that is being added for the upcoming new
<br>
feature series release (tagged 1.5).
<br>
<p>There are two solutions to this problem in 1.3:
<br>
<p>1. declare all hosts at the beginning of the job. You can then specify which
<br>
one to use with the &quot;host&quot; key.
<br>
<p>2. you -can- add a hostfile to the job during a comm_spawn. This is done
<br>
with the &quot;add-hostfile&quot; key. All the hosts in the hostfile will be added to
<br>
the job. You can then specify which host(s) to use for this particular
<br>
comm_spawn with the &quot;host&quot; key.
<br>
<p>All of this is documented - you should see it with a &quot;man MPI_Comm_spawn&quot;
<br>
command.
<br>
<p>If you need to dynamically add a host via &quot;host&quot; before then, you could try
<br>
downloading a copy of the developer's trunk from the OMPI web site. It is
<br>
implemented there at this time - and also documented via the man page.
<br>
<p>Ralph
<br>
<p><p>On Tue, Sep 15, 2009 at 5:14 PM, Jaison Paul &lt;jmulerik_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; I am waiting on some inputs on my query. I just wanted to know whether I
</span><br>
<span class="quotelev1">&gt; can run dynamic child processes using 'MPI_Comm_spawn' on remote hosts? (in
</span><br>
<span class="quotelev1">&gt; openmpi  1.3.2)). Has anyone did that successfully? Or OpenMPI hasnt
</span><br>
<span class="quotelev1">&gt; implemented it yet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help.
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
<span class="quotelev1">&gt; On 14/09/2009, at 8:45 AM, Jaison Paul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to create a library using OpenMPI for an SOA middleware for my
</span><br>
<span class="quotelev1">&gt; Phd research. &quot;MPI_Comm_spawn&quot;  is the one I need to go for. I got a
</span><br>
<span class="quotelev1">&gt; sample example working, but only on the local host. Whenever I try to run
</span><br>
<span class="quotelev1">&gt; the spawned children on  a remote hosts, parent cannot launch children on
</span><br>
<span class="quotelev1">&gt; remote hosts and I get the following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------BEGIN MPIRUN AND ERROR MSG------------------------
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/mpi/ompi-1.3.2/ --mca btl_tcp_if_include eth0 -np 1
</span><br>
<span class="quotelev1">&gt; /home/jaison/mpi/advanced_MPI/spawn/manager
</span><br>
<span class="quotelev1">&gt; Manager code started - host headnode -- myid &amp; world_size 0 1
</span><br>
<span class="quotelev1">&gt; Host is: myhost
</span><br>
<span class="quotelev1">&gt; WorkDir is: /home/jaison/mpi/advanced_MPI/spawn/lib
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; --------------------------END OF ERROR
</span><br>
<span class="quotelev1">&gt; MSG-----------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use the reserved keys - 'host' &amp; 'wdir' - to set the remote host and work
</span><br>
<span class="quotelev1">&gt; directory using MPI_Info. Here is the code snippet:
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
<span class="quotelev1">&gt;   MPI_Info_set(hostinfo, &quot;wdir&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;/home/jaison/mpi/advanced_MPI/spawn/lib&quot;);
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
<span class="quotelev1">&gt; I've set the LD_LIBRARY_PATH correctly. Is &quot;MPI_Comm_spawn&quot; implemented in
</span><br>
<span class="quotelev1">&gt; open mpi (I am using version 1.3.2)? If so, where am I going wrong? Any
</span><br>
<span class="quotelev1">&gt; input will be very much appreciated.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10659/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Previous message:</strong> <a href="10658.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>In reply to:</strong> <a href="10658.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Reply:</strong> <a href="10660.php">Jaison Paul: "Re: [OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
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
