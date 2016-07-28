<?
$subject_val = "[OMPI users] Is it possible for independently started processes to connect via ompi-server? (1.8.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 12:53:28 2014" -->
<!-- isoreceived="20140808165328" -->
<!-- sent="Fri, 8 Aug 2014 10:53:26 -0600" -->
<!-- isosent="20140808165326" -->
<!-- name="James Barron" -->
<!-- email="barronj_at_[hidden]" -->
<!-- subject="[OMPI users] Is it possible for independently started processes to connect via ompi-server? (1.8.1)" -->
<!-- id="CAFFSFHPeFZ-qyc8wv7=n9QjPT6GBRsT6FVfL5S7Eab1uD4akhg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Is it possible for independently started processes to connect via ompi-server? (1.8.1)<br>
<strong>From:</strong> James Barron (<em>barronj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 12:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24953.php">Jorge D'Elia: "[OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Previous message:</strong> <a href="24951.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello. I have read a couple of posts on Stackoverflow that seem to imply
<br>
that independently started processes should be able to communicate via
<br>
ompi-server, but I have not been able to accomplish this. Is this actually
<br>
possible? Here is an outline of what I have done and the error I am
<br>
receiving. I'm using version 1.8.1.
<br>
<p><span class="quotelev1">&gt; ompi-server --no-daemonize -r +
</span><br>
78512128.0;tcp://192.168.1.219:50443
<br>
<p><span class="quotelev1">&gt; mpirun -np 1 --hostfile ~/mpi-hosts --ompi-server &quot;78512128.0;tcp://
</span><br>
192.168.1.219:50443&quot; -v port_server
<br>
Master of rank 0 of 1 on kurenai
<br>
Master port is 488308736.0;tcp://192.168.1.219:60050
<br>
+488308737.0;tcp://192.168.1.219:48993:300
<br>
<p>port_server code outline:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char port[MPI::MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Intercomm intercomm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Info info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int buffer[3];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Open_port(MPI::INFO_NULL, port);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Master port is %s\n&quot;, port);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;info = MPI::Info::Create();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;info.Set(&quot;ompi_global_scope&quot;, &quot;true&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Publish_name(&quot;test_service&quot;, info, port);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;intercomm = MPI::COMM_WORLD.Accept(port, MPI::INFO_NULL, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;buffer[0] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buffer[1] = 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buffer[2] = 3;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;intercomm.Send(buffer, 3, MPI::INT, 0, PARENT_TAG);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p><span class="quotelev1">&gt; mpirun -np 1 --hostfile ~/mpi-hosts --ompi-server &quot;78512128.0;tcp://
</span><br>
192.168.1.219:50443&quot; -v port_client
<br>
barronj_at_192.168.1.219's password:
<br>
Slave of rank 0 of 1 on athena
<br>
Slave found test_service on port, 488308736.0;tcp://192.168.1.219:60050
<br>
+488308737.0;tcp://192.168.1.219:48993:300
<br>
[athena:08054] [[27027,0],0]-[[7451,0],0] mca_oob_tcp_peer_send_handler:
<br>
invalid connection state (6) on socket 19
<br>
<p>client code outline:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char port[MPI::MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Intercomm intercomm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int buffer[3];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Lookup_name(&quot;test_service&quot;, MPI::INFO_NULL, port);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Slave found test_service on port, %s\n&quot;, port);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;intercomm = MPI::COMM_WORLD.Connect(port, MPI::INFO_NULL, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;intercomm.Recv(buffer, 3, MPI::INT, 0, PARENT_TAG);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p><span class="quotelev1">&gt;From testing, it looks like it is happening within Connect. What am I doing
</span><br>
incorrectly?
<br>
<p>Thank you,
<br>
<p>James Barron
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24953.php">Jorge D'Elia: "[OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Previous message:</strong> <a href="24951.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
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
