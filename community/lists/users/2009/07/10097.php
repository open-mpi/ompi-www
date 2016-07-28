<?
$subject_val = "Re: [OMPI users] Missmatch between sent and recieved data";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 06:55:17 2009" -->
<!-- isoreceived="20090727105517" -->
<!-- sent="Mon, 27 Jul 2009 16:25:13 +0530" -->
<!-- isosent="20090727105513" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missmatch between sent and recieved data" -->
<!-- id="610ca1a30907270355x6faf3919j99c690f3e7bfdfa7_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9b0da5ce0907270113w2a78e34codff3e975c0e5e55b_at_mail.gmail.com" -->
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
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 06:55:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10098.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>In reply to:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10098.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10098.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alexey,
<br>
I tried the same line of codes in my free time and what I could see is that
<br>
when you perform strcpy the string was copied with  '/0' but since you only
<br>
receive  4 characters it can only receive the 'asdf' but not '/0' which
<br>
seems a bit strange in the nature. I think this is because the
<br>
MPI_Send/Recev isn't defined to send and recieve 'strings' but only
<br>
character buffers. So when you recieve the buffer only with 'asdf' printf
<br>
tends to print asdf + some garbage characters since theres no termination
<br>
for the string (I also saw +3 garbage charactors :)). So the solution is to
<br>
make sure you send strlen() + 1 and recieve strlen() + 1. If you arent sure
<br>
about the receiving length, do a MPI_Probe and allocate the necessary
<br>
buffer. So its really important to have enough space in the send buffer to
<br>
hold the &quot;asdf' which is strlen('asdf') + 1, and on the receive side,
<br>
recieve from a strlen('asdf') + 1 buffer. I guess this is the difference of
<br>
sending character buffers from sending 'strings' using MPI_Send/Recv.
<br>
Correct me someone if I'm wrong!
<br>
PS: I think reboot is just a trick that won't yeild to a solution :).
<br>
<p>On Mon, Jul 27, 2009 at 1:43 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Alexey
</span><br>
<span class="quotelev1">&gt; No, strlen() does not include the '\0' - this is what 'man strlen' says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    STRLEN(3)                  Linux Programmer&#146;s Manual
</span><br>
<span class="quotelev1">&gt;  STRLEN(3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    NAME
</span><br>
<span class="quotelev1">&gt;           strlen - calculate the length of a string
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    SYNOPSIS
</span><br>
<span class="quotelev1">&gt;           #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           size_t strlen(const char *s);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    DESCRIPTION
</span><br>
<span class="quotelev1">&gt;           The  strlen()  function  calculates  the  length  of  the
</span><br>
<span class="quotelev1">&gt; string s, not
</span><br>
<span class="quotelev1">&gt;           including the terminating &#146;\0&#146; character.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    RETURN VALUE
</span><br>
<span class="quotelev1">&gt;           The strlen() function returns the number of characters in s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your code worked after reboot, you were just lucky that a 0-character
</span><br>
<span class="quotelev1">&gt; followed our string. The problem may appear again anytime if you don't
</span><br>
<span class="quotelev1">&gt; increase your message length to  strlen(chdata[i])+1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 27, 2009 at 9:57 AM, Alexey Sokolov&lt;gabbear_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for advising, but my problem disappeared after rebooting as it
</span><br>
<span class="quotelev2">&gt; &gt; has never been. I really don't know why it was in this way, but I didn't
</span><br>
<span class="quotelev2">&gt; &gt; change anything and now it works correctly. May be it was connected with
</span><br>
<span class="quotelev2">&gt; &gt; system update without rebooting after it (I use Fedora 10), don't truly
</span><br>
<span class="quotelev2">&gt; &gt; know.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway thank you for your help and paying me attention.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PS: I typed you a little bit wrong code. In the original code i get the
</span><br>
<span class="quotelev2">&gt; &gt; string length with strlen(chdata[i]), so the null-terminator should be
</span><br>
<span class="quotelev2">&gt; &gt; counted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sincerely yours, Alexey.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 2009-07-24 at 16:47 +0200, Dorian Krause wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you do not send the trailing '0' which is used to determine the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; stringlength. I assume that chdata[i] has at least length 5 (otherwise
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you overrun your memory). Replace the &quot;4&quot; by &quot;5&quot; in MPI_Isend and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Recv and everything should work (If I get the problem right).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dorian.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Alexey Sokolov wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hi
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I'm sorry if the answer to my question is very simple, but I'm really
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; confused with this situation.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I got a program that now contains 1 master and 1 slave processes.
</span><br>
<span class="quotelev1">&gt; Master
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; process sends few similar chars to the slave process with this:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;         for (unsigned i = 0; i &lt; SomeVariable; i++) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;           strcpy(chdata[i], &quot;asdf&quot;);
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;           MPI_Isend(chdata[i], 4, MPI_CHAR, SLAVE, 1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;         &amp;req[i]);
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;         }
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; And the slave process receives them with this:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;         for (unsigned i = 0; i &lt; SomeVariable; i++) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;           char * buf = new char[10];
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;           MPI_Recv(buf, 4, MPI_CHAR, MASTER, 1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;stat);
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;           printf(&quot;Received data [%s] of length %d\n&quot;, buf,
</span><br>
<span class="quotelev1">&gt; strlen(buf));
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;         }
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; As I understand output should be &quot;Received data [asdf] of length 4&quot;,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; instead of this I got my 'asdf' with additional 3 random ANSI
</span><br>
<span class="quotelev1">&gt; characters
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; in string of length 7.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I've already spent few hours to find the mistake out but
</span><br>
<span class="quotelev1">&gt; unsuccessfully.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I do successfully transfer int data in the similar way, but this case
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make me crazy. Could you help me to find out where did I fail in this?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Sincerely yours, Alexey.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10098.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>In reply to:</strong> <a href="10096.php">jody: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10098.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Reply:</strong> <a href="10098.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
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
