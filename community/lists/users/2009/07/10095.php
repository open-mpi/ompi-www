<?
$subject_val = "Re: [OMPI users] Missmatch between sent and recieved data";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 03:57:53 2009" -->
<!-- isoreceived="20090727075753" -->
<!-- sent="Mon, 27 Jul 2009 11:57:53 +0400" -->
<!-- isosent="20090727075753" -->
<!-- name="Alexey Sokolov" -->
<!-- email="gabbear_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missmatch between sent and recieved data" -->
<!-- id="1248681473.3081.11.camel_at_localhost.localdomain" -->
<!-- inreplyto="4A69C981.2090406_at_web.de" -->
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
<strong>From:</strong> Alexey Sokolov (<em>gabbear_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 03:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10094.php">Gijsbert Wiesenekker: "[OMPI users] GFS2 and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10087.php">Dorian Krause: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Thank you for advising, but my problem disappeared after rebooting as it
<br>
has never been. I really don't know why it was in this way, but I didn't
<br>
change anything and now it works correctly. May be it was connected with
<br>
system update without rebooting after it (I use Fedora 10), don't truly
<br>
know.
<br>
<p>Anyway thank you for your help and paying me attention.
<br>
<p>PS: I typed you a little bit wrong code. In the original code i get the
<br>
string length with strlen(chdata[i]), so the null-terminator should be
<br>
counted.
<br>
<p>Sincerely yours, Alexey.
<br>
<p>On Fri, 2009-07-24 at 16:47 +0200, Dorian Krause wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you do not send the trailing '0' which is used to determine the 
</span><br>
<span class="quotelev1">&gt; stringlength. I assume that chdata[i] has at least length 5 (otherwise 
</span><br>
<span class="quotelev1">&gt; you overrun your memory). Replace the &quot;4&quot; by &quot;5&quot; in MPI_Isend and 
</span><br>
<span class="quotelev1">&gt; MPI_Recv and everything should work (If I get the problem right).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dorian.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alexey Sokolov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm sorry if the answer to my question is very simple, but I'm really
</span><br>
<span class="quotelev2">&gt; &gt; confused with this situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I got a program that now contains 1 master and 1 slave processes. Master
</span><br>
<span class="quotelev2">&gt; &gt; process sends few similar chars to the slave process with this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         for (unsigned i = 0; i &lt; SomeVariable; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;           strcpy(chdata[i], &quot;asdf&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;           MPI_Isend(chdata[i], 4, MPI_CHAR, SLAVE, 1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt; &gt;         &amp;req[i]);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And the slave process receives them with this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         for (unsigned i = 0; i &lt; SomeVariable; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;           char * buf = new char[10];
</span><br>
<span class="quotelev2">&gt; &gt;           MPI_Recv(buf, 4, MPI_CHAR, MASTER, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev2">&gt; &gt;           printf(&quot;Received data [%s] of length %d\n&quot;, buf, strlen(buf));
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I understand output should be &quot;Received data [asdf] of length 4&quot;, but
</span><br>
<span class="quotelev2">&gt; &gt; instead of this I got my 'asdf' with additional 3 random ANSI characters
</span><br>
<span class="quotelev2">&gt; &gt; in string of length 7.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've already spent few hours to find the mistake out but unsuccessfully.
</span><br>
<span class="quotelev2">&gt; &gt; I do successfully transfer int data in the similar way, but this case
</span><br>
<span class="quotelev2">&gt; &gt; make me crazy. Could you help me to find out where did I fail in this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sincerely yours, Alexey. 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10094.php">Gijsbert Wiesenekker: "[OMPI users] GFS2 and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10087.php">Dorian Krause: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
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
