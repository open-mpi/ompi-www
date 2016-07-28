<?
$subject_val = "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 03:37:33 2016" -->
<!-- isoreceived="20160719073733" -->
<!-- sent="Tue, 19 Jul 2016 09:37:30 +0200" -->
<!-- isosent="20160719073730" -->
<!-- name="M. D." -->
<!-- email="matus.dobrotka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
<!-- id="CAJDp2QpcLgQPUWknY57yFjCgsnZ9uYKMPxrxvHDM1Z0B3qzdVQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5e1355e6-1a23-a4cf-dbc5-fecf66ab5e71_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server<br>
<strong>From:</strong> M. D. (<em>matus.dobrotka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 03:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29688.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29686.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29681.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29688.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29688.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
thank you for your interest in this topic.
<br>
<p>So, I normally run the test as follows:
<br>
Firstly, I run &quot;server&quot; (second parameter is 1):
<br>
*mpirun -np 1 ./singleton_client_server number_of_clients 1*
<br>
<p>Secondly, I run corresponding number of &quot;clients&quot; via following command:
<br>
*mpirun -np 1 ./singleton_client_server number_of_clients 0*
<br>
<p>So, for example with 3 clients I do:
<br>
mpirun -np 1 ./singleton_client_server 3 1
<br>
mpirun -np 1 ./singleton_client_server 3 0
<br>
mpirun -np 1 ./singleton_client_server 3 0
<br>
mpirun -np 1 ./singleton_client_server 3 0
<br>
<p>It means you are right - there should be the same number of clients in each
<br>
mpirun instance.
<br>
<p>The test does not involve MPI_Comm_disconnect(), but the problem in the
<br>
test is in the earlier position, because some of clients (in the most cases
<br>
actually the last client) cannot sometimes connect to the server and
<br>
therefore all clients with server are hanging (waiting for the connections
<br>
with the last client(s) ).
<br>
<p>So, the bahaviour of accept/connect method is a bit confusing for me.
<br>
If I understand you, according to your post - the problem is not in the
<br>
timeout value, isn't it?
<br>
<p>Cheers,
<br>
<p>Matus
<br>
<p>2016-07-19 6:28 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; How do you run the test ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you should have the same number of clients in each mpirun instance, the
</span><br>
<span class="quotelev1">&gt; following simple shell starts the test as i think it is supposed to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note the test itself is arguable since MPI_Comm_disconnect() is never
</span><br>
<span class="quotelev1">&gt; invoked
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (and you will observe some related dpm_base_disconnect_init errors)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; clients=3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients 1
</span><br>
<span class="quotelev1">&gt; 2&gt;&amp;1 | tee /tmp/server.$clients&quot;
</span><br>
<span class="quotelev1">&gt; for i in $(seq $clients); do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sleep 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients 0
</span><br>
<span class="quotelev1">&gt; 2&gt;&amp;1 | tee /tmp/client.$clients.$i&quot;
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this test fails with master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when the &quot;server&quot; (second parameter is 1), MPI_Comm_accept() fails with a
</span><br>
<span class="quotelev1">&gt; timeout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i ompi/dpm/dpm.c, there is a hard coded 60 seconds timeout
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OPAL_PMIX_EXCHANGE(rc, &amp;info, &amp;pdat, 60);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but this is not the timeout that is triggered ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the eviction_cbfunc timeout function is invoked, and it has been set when
</span><br>
<span class="quotelev1">&gt; opal_hotel_init() was invoked in orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; default timeout is 2 seconds, but in this case (user invokes
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept), i guess the timeout should be infinite or 60 seconds
</span><br>
<span class="quotelev1">&gt; (hard coded value described above)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sadly, if i set a higher timeout value (mpirun --mca
</span><br>
<span class="quotelev1">&gt; orte_pmix_server_max_wait 180 ...), MPI_Comm_accept() does not return when
</span><br>
<span class="quotelev1">&gt; the client invokes MPI_Comm_connect()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please have a look at this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/15/2016 9:20 PM, M. D. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with basic client - server application. I tried to run C
</span><br>
<span class="quotelev1">&gt; program from this website
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>
</span><br>
<span class="quotelev1">&gt; I saw this program mentioned in many discussions in your website, so I
</span><br>
<span class="quotelev1">&gt; expected that it should work properly, but after more testing I found out
</span><br>
<span class="quotelev1">&gt; that there is probably an error somewhere in connect/accept method. I have
</span><br>
<span class="quotelev1">&gt; read many discussions and threads on your website, but I have not found
</span><br>
<span class="quotelev1">&gt; similar problem that I am facing. It seems that nobody had similar problem
</span><br>
<span class="quotelev1">&gt; like me. When I run this app with one server and more clients (3,4,5,6,...)
</span><br>
<span class="quotelev1">&gt; sometimes the app hangs. It hangs when second or next client wants to
</span><br>
<span class="quotelev1">&gt; connect to the server (it depends, sometimes third client hangs, sometimes
</span><br>
<span class="quotelev1">&gt; fourth, sometimes second, and so on).
</span><br>
<span class="quotelev1">&gt; So it means that app starts to hang where server waits for accept and
</span><br>
<span class="quotelev1">&gt; client waits for connect. And it is not possible to continue, because this
</span><br>
<span class="quotelev1">&gt; client cannot connect to the server. It is strange, because I observed this
</span><br>
<span class="quotelev1">&gt; behaviour only in some cases... Sometimes it works without any problems,
</span><br>
<span class="quotelev1">&gt; sometimes it does not work. The behaviour is unpredictable and not stable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi 1.10.2 on my Fedora 19. I have the same problem
</span><br>
<span class="quotelev1">&gt; with Java alternative of this application. It hangs also sometimes... I
</span><br>
<span class="quotelev1">&gt; need this app in Java, but firstly it must work properly in C
</span><br>
<span class="quotelev1">&gt; implementation. Because of this strange behaviour I assume that there can
</span><br>
<span class="quotelev1">&gt; be an error maybe inside of openmpi implementation of connect/accept
</span><br>
<span class="quotelev1">&gt; methods. I tried it also with another version of openmpi - 1.8.1. However,
</span><br>
<span class="quotelev1">&gt; the problem did not disappear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you help me, what can cause the problem? Maybe I did not get
</span><br>
<span class="quotelev1">&gt; something about openmpi (or connect/server) and the problem is with me... I
</span><br>
<span class="quotelev1">&gt; will appreciate any your help, support, or interest about this topic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Matus Dobrotka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29673.php">http://www.open-mpi.org/community/lists/users/2016/07/29673.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29681.php">http://www.open-mpi.org/community/lists/users/2016/07/29681.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29688.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29686.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29681.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29688.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29688.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
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
