<?
$subject_val = "Re: [OMPI users] Missmatch between sent and recieved data";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 04:13:13 2009" -->
<!-- isoreceived="20090727081313" -->
<!-- sent="Mon, 27 Jul 2009 10:13:07 +0200" -->
<!-- isosent="20090727081307" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missmatch between sent and recieved data" -->
<!-- id="9b0da5ce0907270113w2a78e34codff3e975c0e5e55b_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1248681473.3081.11.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 04:13:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10097.php">Prasadcse Perera: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>In reply to:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10097.php">Prasadcse Perera: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10097.php">Prasadcse Perera: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alexey
<br>
No, strlen() does not include the '\0' - this is what 'man strlen' says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;STRLEN(3)                  Linux Programmer&#146;s Manual
<br>
&nbsp;&nbsp;STRLEN(3)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;NAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strlen - calculate the length of a string
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;SYNOPSIS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;string.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t strlen(const char *s);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;DESCRIPTION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The  strlen()  function  calculates  the  length  of  the
<br>
string s, not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;including the terminating &#146;\0&#146; character.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;RETURN VALUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The strlen() function returns the number of characters in s.
<br>
<p>If your code worked after reboot, you were just lucky that a 0-character
<br>
followed our string. The problem may appear again anytime if you don't
<br>
increase your message length to  strlen(chdata[i])+1.
<br>
<p>Jody
<br>
<p><p><p>On Mon, Jul 27, 2009 at 9:57 AM, Alexey Sokolov&lt;gabbear_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for advising, but my problem disappeared after rebooting as it
</span><br>
<span class="quotelev1">&gt; has never been. I really don't know why it was in this way, but I didn't
</span><br>
<span class="quotelev1">&gt; change anything and now it works correctly. May be it was connected with
</span><br>
<span class="quotelev1">&gt; system update without rebooting after it (I use Fedora 10), don't truly
</span><br>
<span class="quotelev1">&gt; know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway thank you for your help and paying me attention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I typed you a little bit wrong code. In the original code i get the
</span><br>
<span class="quotelev1">&gt; string length with strlen(chdata[i]), so the null-terminator should be
</span><br>
<span class="quotelev1">&gt; counted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely yours, Alexey.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 2009-07-24 at 16:47 +0200, Dorian Krause wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you do not send the trailing '0' which is used to determine the
</span><br>
<span class="quotelev2">&gt;&gt; stringlength. I assume that chdata[i] has at least length 5 (otherwise
</span><br>
<span class="quotelev2">&gt;&gt; you overrun your memory). Replace the &quot;4&quot; by &quot;5&quot; in MPI_Isend and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv and everything should work (If I get the problem right).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dorian.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alexey Sokolov wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm sorry if the answer to my question is very simple, but I'm really
</span><br>
<span class="quotelev3">&gt;&gt; &gt; confused with this situation.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I got a program that now contains 1 master and 1 slave processes. Master
</span><br>
<span class="quotelev3">&gt;&gt; &gt; process sends few similar chars to the slave process with this:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; for (unsigned i = 0; i &lt; SomeVariable; i++) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; strcpy(chdata[i], &quot;asdf&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; MPI_Isend(chdata[i], 4, MPI_CHAR, SLAVE, 1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &amp;req[i]);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And the slave process receives them with this:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; for (unsigned i = 0; i &lt; SomeVariable; i++) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; char * buf = new char[10];
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; MPI_Recv(buf, 4, MPI_CHAR, MASTER, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; printf(&quot;Received data [%s] of length %d\n&quot;, buf, strlen(buf));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; As I understand output should be &quot;Received data [asdf] of length 4&quot;, but
</span><br>
<span class="quotelev3">&gt;&gt; &gt; instead of this I got my 'asdf' with additional 3 random ANSI characters
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in string of length 7.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've already spent few hours to find the mistake out but unsuccessfully.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I do successfully transfer int data in the similar way, but this case
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make me crazy. Could you help me to find out where did I fail in this?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sincerely yours, Alexey.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10097.php">Prasadcse Perera: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>In reply to:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10097.php">Prasadcse Perera: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10097.php">Prasadcse Perera: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
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
