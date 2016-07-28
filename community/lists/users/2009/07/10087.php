<?
$subject_val = "Re: [OMPI users] Missmatch between sent and recieved data";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 10:47:35 2009" -->
<!-- isoreceived="20090724144735" -->
<!-- sent="Fri, 24 Jul 2009 16:47:29 +0200" -->
<!-- isosent="20090724144729" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missmatch between sent and recieved data" -->
<!-- id="4A69C981.2090406_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1248446466.3067.76.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missmatch between sent and recieved data<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 10:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="10086.php">Alexey Sokolov: "[OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>In reply to:</strong> <a href="10086.php">Alexey Sokolov: "[OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>you do not send the trailing '0' which is used to determine the 
<br>
stringlength. I assume that chdata[i] has at least length 5 (otherwise 
<br>
you overrun your memory). Replace the &quot;4&quot; by &quot;5&quot; in MPI_Isend and 
<br>
MPI_Recv and everything should work (If I get the problem right).
<br>
<p>Dorian.
<br>
<p><p>Alexey Sokolov wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry if the answer to my question is very simple, but I'm really
</span><br>
<span class="quotelev1">&gt; confused with this situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got a program that now contains 1 master and 1 slave processes. Master
</span><br>
<span class="quotelev1">&gt; process sends few similar chars to the slave process with this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for (unsigned i = 0; i &lt; SomeVariable; i++) {
</span><br>
<span class="quotelev1">&gt;           strcpy(chdata[i], &quot;asdf&quot;);
</span><br>
<span class="quotelev1">&gt;           MPI_Isend(chdata[i], 4, MPI_CHAR, SLAVE, 1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;         &amp;req[i]);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the slave process receives them with this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for (unsigned i = 0; i &lt; SomeVariable; i++) {
</span><br>
<span class="quotelev1">&gt;           char * buf = new char[10];
</span><br>
<span class="quotelev1">&gt;           MPI_Recv(buf, 4, MPI_CHAR, MASTER, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt;           printf(&quot;Received data [%s] of length %d\n&quot;, buf, strlen(buf));
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I understand output should be &quot;Received data [asdf] of length 4&quot;, but
</span><br>
<span class="quotelev1">&gt; instead of this I got my 'asdf' with additional 3 random ANSI characters
</span><br>
<span class="quotelev1">&gt; in string of length 7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've already spent few hours to find the mistake out but unsuccessfully.
</span><br>
<span class="quotelev1">&gt; I do successfully transfer int data in the similar way, but this case
</span><br>
<span class="quotelev1">&gt; make me crazy. Could you help me to find out where did I fail in this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely yours, Alexey. 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="10086.php">Alexey Sokolov: "[OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>In reply to:</strong> <a href="10086.php">Alexey Sokolov: "[OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
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
