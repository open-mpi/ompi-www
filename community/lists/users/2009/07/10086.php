<?
$subject_val = "[OMPI users] Missmatch between sent and recieved data";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 10:41:05 2009" -->
<!-- isoreceived="20090724144105" -->
<!-- sent="Fri, 24 Jul 2009 18:41:06 +0400" -->
<!-- isosent="20090724144106" -->
<!-- name="Alexey Sokolov" -->
<!-- email="gabbear_at_[hidden]" -->
<!-- subject="[OMPI users] Missmatch between sent and recieved data" -->
<!-- id="1248446466.3067.76.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> [OMPI users] Missmatch between sent and recieved data<br>
<strong>From:</strong> Alexey Sokolov (<em>gabbear_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 10:41:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10087.php">Dorian Krause: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10085.php">jimkress_58: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10087.php">Dorian Krause: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10087.php">Dorian Krause: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I'm sorry if the answer to my question is very simple, but I'm really
<br>
confused with this situation.
<br>
<p>I got a program that now contains 1 master and 1 slave processes. Master
<br>
process sends few similar chars to the slave process with this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (unsigned i = 0; i &lt; SomeVariable; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(chdata[i], &quot;asdf&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(chdata[i], 4, MPI_CHAR, SLAVE, 1, MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;req[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>And the slave process receives them with this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (unsigned i = 0; i &lt; SomeVariable; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char * buf = new char[10];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, 4, MPI_CHAR, MASTER, 1, MPI_COMM_WORLD, &amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Received data [%s] of length %d\n&quot;, buf, strlen(buf));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>As I understand output should be &quot;Received data [asdf] of length 4&quot;, but
<br>
instead of this I got my 'asdf' with additional 3 random ANSI characters
<br>
in string of length 7.
<br>
<p>I've already spent few hours to find the mistake out but unsuccessfully.
<br>
I do successfully transfer int data in the similar way, but this case
<br>
make me crazy. Could you help me to find out where did I fail in this?
<br>
<p>Sincerely yours, Alexey. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10087.php">Dorian Krause: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10085.php">jimkress_58: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10087.php">Dorian Krause: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10087.php">Dorian Krause: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
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
