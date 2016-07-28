<?
$subject_val = "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 04:06:31 2016" -->
<!-- isoreceived="20160719080631" -->
<!-- sent="Tue, 19 Jul 2016 17:06:18 +0900" -->
<!-- isosent="20160719080618" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
<!-- id="388ce760-00e3-2f0c-26d3-ca9d1d500202_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJDp2QpcLgQPUWknY57yFjCgsnZ9uYKMPxrxvHDM1Z0B3qzdVQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 04:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>In reply to:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Comm_accept must be called by all the tasks of the local communicator.
<br>
<p>so if you
<br>
<p>1) mpirun -np 1 ./singleton_client_server 2 1
<br>
<p>2) mpirun -np 1 ./singleton_client_server 2 0
<br>
<p>3) mpirun -np 1 ./singleton_client_server 2 0
<br>
<p>then 3) starts after 2) has exited, so on 1), intracomm is made of 1) 
<br>
and an exited task (2)
<br>
<p>/*
<br>
<p>strictly speaking, there is a race condition, if 2) has exited, then 
<br>
MPI_Comm_accept will crash when 1) informs 2) that 3) has joined.
<br>
<p>if 2) has not yet exited, then the test will hang because 2) does not 
<br>
invoke MPI_Comm_accept
<br>
<p>*/
<br>
<p><p>there are different ways of seeing things :
<br>
<p>1) this is an incorrect usage of the test, the number of clients should 
<br>
be the same everywhere
<br>
<p>2) task 2) should not exit (because it did not call 
<br>
MPI_Comm_disconnect()) and the test should hang when
<br>
<p>starting task 3) because task 2) does not call MPI_Comm_accept()
<br>
<p><p>i do not know how you want to spawn your tasks.
<br>
<p>if 2) and 3) do not need to communicate with each other (they only 
<br>
communicate with 1)), then
<br>
<p>you can simply MPI_Comm_accept(MPI_COMM_WORLD) in 1)
<br>
<p>if 2 and 3) need to communicate with each other, it would be much easier 
<br>
to MPI_Comm_spawn or MPI_Comm_spawn_multiple only once in 1),
<br>
<p>so there is only one inter communicator with all the tasks.
<br>
<p><p>The current test program is growing incrementally the intercomm, which 
<br>
does require extra steps for synchronization.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 7/19/2016 4:37 PM, M. D. wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thank you for your interest in this topic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I normally run the test as follows:
</span><br>
<span class="quotelev1">&gt; Firstly, I run &quot;server&quot; (second parameter is 1):
</span><br>
<span class="quotelev1">&gt; *mpirun -np 1 ./singleton_client_server number_of_clients 1*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; Secondly, I run corresponding number of &quot;clients&quot; via following command:
</span><br>
<span class="quotelev1">&gt; *mpirun -np 1 ./singleton_client_server number_of_clients 0*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; So, for example with 3 clients I do:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./singleton_client_server 3 1
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It means you are right - there should be the same number of clients in 
</span><br>
<span class="quotelev1">&gt; each mpirun instance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test does not involve MPI_Comm_disconnect(), but the problem in 
</span><br>
<span class="quotelev1">&gt; the test is in the earlier position, because some of clients (in the 
</span><br>
<span class="quotelev1">&gt; most cases actually the last client) cannot sometimes connect to the 
</span><br>
<span class="quotelev1">&gt; server and therefore all clients with server are hanging (waiting for 
</span><br>
<span class="quotelev1">&gt; the connections with the last client(s) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the bahaviour of accept/connect method is a bit confusing for me.
</span><br>
<span class="quotelev1">&gt; If I understand you, according to your post - the problem is not in 
</span><br>
<span class="quotelev1">&gt; the timeout value, isn't it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-07-19 6:28 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     How do you run the test ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     you should have the same number of clients in each mpirun
</span><br>
<span class="quotelev1">&gt;     instance, the following simple shell starts the test as i think it
</span><br>
<span class="quotelev1">&gt;     is supposed to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     note the test itself is arguable since MPI_Comm_disconnect() is
</span><br>
<span class="quotelev1">&gt;     never invoked
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     (and you will observe some related dpm_base_disconnect_init errors)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     clients=3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server
</span><br>
<span class="quotelev1">&gt;     $clients 1 2&gt;&amp;1 | tee /tmp/server.$clients&quot;
</span><br>
<span class="quotelev1">&gt;     for i in $(seq $clients); do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         sleep 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server
</span><br>
<span class="quotelev1">&gt;     $clients 0 2&gt;&amp;1 | tee /tmp/client.$clients.$i&quot;
</span><br>
<span class="quotelev1">&gt;     done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     this test fails with master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     when the &quot;server&quot; (second parameter is 1), MPI_Comm_accept() fails
</span><br>
<span class="quotelev1">&gt;     with a timeout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i ompi/dpm/dpm.c, there is a hard coded 60 seconds timeout
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OPAL_PMIX_EXCHANGE(rc, &amp;info, &amp;pdat, 60);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     but this is not the timeout that is triggered ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the eviction_cbfunc timeout function is invoked, and it has been
</span><br>
<span class="quotelev1">&gt;     set when opal_hotel_init() was invoked in
</span><br>
<span class="quotelev1">&gt;     orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     default timeout is 2 seconds, but in this case (user invokes
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_accept), i guess the timeout should be infinite or 60
</span><br>
<span class="quotelev1">&gt;     seconds (hard coded value described above)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sadly, if i set a higher timeout value (mpirun --mca
</span><br>
<span class="quotelev1">&gt;     orte_pmix_server_max_wait 180 ...), MPI_Comm_accept() does not
</span><br>
<span class="quotelev1">&gt;     return when the client invokes MPI_Comm_connect()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     could you please have a look at this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 7/15/2016 9:20 PM, M. D. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have a problem with basic client - server application. I tried
</span><br>
<span class="quotelev2">&gt;&gt;     to run C program from this website
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>
</span><br>
<span class="quotelev2">&gt;&gt;     I saw this program mentioned in many discussions in your website,
</span><br>
<span class="quotelev2">&gt;&gt;     so I expected that it should work properly, but after more
</span><br>
<span class="quotelev2">&gt;&gt;     testing I found out that there is probably an error somewhere in
</span><br>
<span class="quotelev2">&gt;&gt;     connect/accept method. I have read many discussions and threads
</span><br>
<span class="quotelev2">&gt;&gt;     on your website, but I have not found similar problem that I am
</span><br>
<span class="quotelev2">&gt;&gt;     facing. It seems that nobody had similar problem like me. When I
</span><br>
<span class="quotelev2">&gt;&gt;     run this app with one server and more clients (3,4,5,6,...)
</span><br>
<span class="quotelev2">&gt;&gt;     sometimes the app hangs. It hangs when second or next client
</span><br>
<span class="quotelev2">&gt;&gt;     wants to connect to the server (it depends, sometimes third
</span><br>
<span class="quotelev2">&gt;&gt;     client hangs, sometimes fourth, sometimes second, and so on).
</span><br>
<span class="quotelev2">&gt;&gt;     So it means that app starts to hang where server waits for accept
</span><br>
<span class="quotelev2">&gt;&gt;     and client waits for connect. And it is not possible to continue,
</span><br>
<span class="quotelev2">&gt;&gt;     because this client cannot connect to the server. It is strange,
</span><br>
<span class="quotelev2">&gt;&gt;     because I observed this behaviour only in some cases... Sometimes
</span><br>
<span class="quotelev2">&gt;&gt;     it works without any problems, sometimes it does not work. The
</span><br>
<span class="quotelev2">&gt;&gt;     behaviour is unpredictable and not stable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have installed openmpi 1.10.2 on my Fedora 19. I have the same
</span><br>
<span class="quotelev2">&gt;&gt;     problem with Java alternative of this application. It hangs also
</span><br>
<span class="quotelev2">&gt;&gt;     sometimes... I need this app in Java, but firstly it must work
</span><br>
<span class="quotelev2">&gt;&gt;     properly in C implementation. Because of this strange behaviour I
</span><br>
<span class="quotelev2">&gt;&gt;     assume that there can be an error maybe inside of openmpi
</span><br>
<span class="quotelev2">&gt;&gt;     implementation of connect/accept methods. I tried it also with
</span><br>
<span class="quotelev2">&gt;&gt;     another version of openmpi - 1.8.1. However, the problem did not
</span><br>
<span class="quotelev2">&gt;&gt;     disappear.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Could you help me, what can cause the problem? Maybe I did not
</span><br>
<span class="quotelev2">&gt;&gt;     get something about openmpi (or connect/server) and the problem
</span><br>
<span class="quotelev2">&gt;&gt;     is with me... I will appreciate any your help, support, or
</span><br>
<span class="quotelev2">&gt;&gt;     interest about this topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Matus Dobrotka
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29673.php">http://www.open-mpi.org/community/lists/users/2016/07/29673.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/07/29681.php">http://www.open-mpi.org/community/lists/users/2016/07/29681.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29687.php">http://www.open-mpi.org/community/lists/users/2016/07/29687.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29688/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>In reply to:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
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
