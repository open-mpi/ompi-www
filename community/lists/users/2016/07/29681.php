<?
$subject_val = "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 00:28:04 2016" -->
<!-- isoreceived="20160719042804" -->
<!-- sent="Tue, 19 Jul 2016 13:28:00 +0900" -->
<!-- isosent="20160719042800" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
<!-- id="5e1355e6-1a23-a4cf-dbc5-fecf66ab5e71_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJDp2Qo1Xo4cvNWA9WyBurkh0iVoh5t6Lk5U01R8qLSL8vdszA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-07-19 00:28:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29682.php">Saliya Ekanayake: "[OMPI users] Forcing TCP btl"</a>
<li><strong>Previous message:</strong> <a href="29680.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Change compiler"</a>
<li><strong>In reply to:</strong> <a href="29673.php">M. D.: "[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How do you run the test ?
<br>
<p>you should have the same number of clients in each mpirun instance, the 
<br>
following simple shell starts the test as i think it is supposed to
<br>
<p>note the test itself is arguable since MPI_Comm_disconnect() is never 
<br>
invoked
<br>
<p>(and you will observe some related dpm_base_disconnect_init errors)
<br>
<p><p>#!/bin/sh
<br>
<p>clients=3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients 
<br>
1 2&gt;&amp;1 | tee /tmp/server.$clients&quot;
<br>
for i in $(seq $clients); do
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients 
<br>
0 2&gt;&amp;1 | tee /tmp/client.$clients.$i&quot;
<br>
done
<br>
<p><p>Ralph,
<br>
<p><p>this test fails with master.
<br>
<p>when the &quot;server&quot; (second parameter is 1), MPI_Comm_accept() fails with 
<br>
a timeout.
<br>
<p>i ompi/dpm/dpm.c, there is a hard coded 60 seconds timeout
<br>
<p>OPAL_PMIX_EXCHANGE(rc, &amp;info, &amp;pdat, 60);
<br>
<p>but this is not the timeout that is triggered ...
<br>
<p>the eviction_cbfunc timeout function is invoked, and it has been set 
<br>
when opal_hotel_init() was invoked in orte/orted/pmix/pmix_server.c
<br>
<p><p>default timeout is 2 seconds, but in this case (user invokes 
<br>
MPI_Comm_accept), i guess the timeout should be infinite or 60 seconds 
<br>
(hard coded value described above)
<br>
<p>sadly, if i set a higher timeout value (mpirun --mca 
<br>
orte_pmix_server_max_wait 180 ...), MPI_Comm_accept() does not return 
<br>
when the client invokes MPI_Comm_connect()
<br>
<p><p>could you please have a look at this ?
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/15/2016 9:20 PM, M. D. wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with basic client - server application. I tried to 
</span><br>
<span class="quotelev1">&gt; run C program from this website 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>
</span><br>
<span class="quotelev1">&gt; I saw this program mentioned in many discussions in your website, so I 
</span><br>
<span class="quotelev1">&gt; expected that it should work properly, but after more testing I found 
</span><br>
<span class="quotelev1">&gt; out that there is probably an error somewhere in connect/accept 
</span><br>
<span class="quotelev1">&gt; method. I have read many discussions and threads on your website, but 
</span><br>
<span class="quotelev1">&gt; I have not found similar problem that I am facing. It seems that 
</span><br>
<span class="quotelev1">&gt; nobody had similar problem like me. When I run this app with one 
</span><br>
<span class="quotelev1">&gt; server and more clients (3,4,5,6,...) sometimes the app hangs. It 
</span><br>
<span class="quotelev1">&gt; hangs when second or next client wants to connect to the server (it 
</span><br>
<span class="quotelev1">&gt; depends, sometimes third client hangs, sometimes fourth, sometimes 
</span><br>
<span class="quotelev1">&gt; second, and so on).
</span><br>
<span class="quotelev1">&gt; So it means that app starts to hang where server waits for accept and 
</span><br>
<span class="quotelev1">&gt; client waits for connect. And it is not possible to continue, because 
</span><br>
<span class="quotelev1">&gt; this client cannot connect to the server. It is strange, because I 
</span><br>
<span class="quotelev1">&gt; observed this behaviour only in some cases... Sometimes it works 
</span><br>
<span class="quotelev1">&gt; without any problems, sometimes it does not work. The behaviour is 
</span><br>
<span class="quotelev1">&gt; unpredictable and not stable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi 1.10.2 on my Fedora 19. I have the same 
</span><br>
<span class="quotelev1">&gt; problem with Java alternative of this application. It hangs also 
</span><br>
<span class="quotelev1">&gt; sometimes... I need this app in Java, but firstly it must work 
</span><br>
<span class="quotelev1">&gt; properly in C implementation. Because of this strange behaviour I 
</span><br>
<span class="quotelev1">&gt; assume that there can be an error maybe inside of openmpi 
</span><br>
<span class="quotelev1">&gt; implementation of connect/accept methods. I tried it also with another 
</span><br>
<span class="quotelev1">&gt; version of openmpi - 1.8.1. However, the problem did not disappear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you help me, what can cause the problem? Maybe I did not get 
</span><br>
<span class="quotelev1">&gt; something about openmpi (or connect/server) and the problem is with 
</span><br>
<span class="quotelev1">&gt; me... I will appreciate any your help, support, or interest about this 
</span><br>
<span class="quotelev1">&gt; topic.
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29673.php">http://www.open-mpi.org/community/lists/users/2016/07/29673.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29682.php">Saliya Ekanayake: "[OMPI users] Forcing TCP btl"</a>
<li><strong>Previous message:</strong> <a href="29680.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Change compiler"</a>
<li><strong>In reply to:</strong> <a href="29673.php">M. D.: "[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29687.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
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
