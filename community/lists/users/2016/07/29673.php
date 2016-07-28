<?
$subject_val = "[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 08:20:10 2016" -->
<!-- isoreceived="20160715122010" -->
<!-- sent="Fri, 15 Jul 2016 14:20:08 +0200" -->
<!-- isosent="20160715122008" -->
<!-- name="M. D." -->
<!-- email="matus.dobrotka_at_[hidden]" -->
<!-- subject="[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
<!-- id="CAJDp2Qo1Xo4cvNWA9WyBurkh0iVoh5t6Lk5U01R8qLSL8vdszA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server<br>
<strong>From:</strong> M. D. (<em>matus.dobrotka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-15 08:20:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29674.php">John Hearns: "[OMPI users] Affinity settings for hyperthreading"</a>
<li><strong>Previous message:</strong> <a href="29672.php">David A. Schneider: "[OMPI users] resolving warnings about OpenFabrics not being found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29681.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29681.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Maybe reply:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a problem with basic client - server application. I tried to run C
<br>
program from this website
<br>
<a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>
<br>
I saw this program mentioned in many discussions in your website, so I
<br>
expected that it should work properly, but after more testing I found out
<br>
that there is probably an error somewhere in connect/accept method. I have
<br>
read many discussions and threads on your website, but I have not found
<br>
similar problem that I am facing. It seems that nobody had similar problem
<br>
like me. When I run this app with one server and more clients (3,4,5,6,...)
<br>
sometimes the app hangs. It hangs when second or next client wants to
<br>
connect to the server (it depends, sometimes third client hangs, sometimes
<br>
fourth, sometimes second, and so on).
<br>
So it means that app starts to hang where server waits for accept and
<br>
client waits for connect. And it is not possible to continue, because this
<br>
client cannot connect to the server. It is strange, because I observed this
<br>
behaviour only in some cases... Sometimes it works without any problems,
<br>
sometimes it does not work. The behaviour is unpredictable and not stable.
<br>
<p>I have installed openmpi 1.10.2 on my Fedora 19. I have the same problem
<br>
with Java alternative of this application. It hangs also sometimes... I
<br>
need this app in Java, but firstly it must work properly in C
<br>
implementation. Because of this strange behaviour I assume that there can
<br>
be an error maybe inside of openmpi implementation of connect/accept
<br>
methods. I tried it also with another version of openmpi - 1.8.1. However,
<br>
the problem did not disappear.
<br>
<p>Could you help me, what can cause the problem? Maybe I did not get
<br>
something about openmpi (or connect/server) and the problem is with me... I
<br>
will appreciate any your help, support, or interest about this topic.
<br>
<p>Best regards,
<br>
Matus Dobrotka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29674.php">John Hearns: "[OMPI users] Affinity settings for hyperthreading"</a>
<li><strong>Previous message:</strong> <a href="29672.php">David A. Schneider: "[OMPI users] resolving warnings about OpenFabrics not being found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29681.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29681.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Maybe reply:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
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
