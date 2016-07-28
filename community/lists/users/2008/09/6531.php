<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1004, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 14 07:10:29 2008" -->
<!-- isoreceived="20080914111029" -->
<!-- sent="Sun, 14 Sep 2008 13:10:24 +0200" -->
<!-- isosent="20080914111024" -->
<!-- name="Enrico Barausse" -->
<!-- email="enrico.barausse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1004, Issue 1" -->
<!-- id="845f51b10809140410w785bf64n6cf1fe4bf863060d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.15.1221321612.1841.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1004, Issue 1<br>
<strong>From:</strong> Enrico Barausse (<em>enrico.barausse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-14 07:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6532.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6530.php">jody: "Re: [OMPI users] ompi_info command not working"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I think it's correct. what I want to to is to send a 3d array from the
<br>
process 1 to process 0 =root):
<br>
call MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
<br>
<p>in some other part of the code process 0 acts on the 3d array and
<br>
turns it into a 4d one and sends it back to process 1, which receives
<br>
it with
<br>
<p>call MPI_RECV(tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
<br>
<p>in practice, what I do i basically give by this simple code (which
<br>
doesn't give the segmentation fault unfortunately):
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a=(/1,2,3,4,5/)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, id, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(numprocs/=2) stop
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(id==0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do k=1,5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a=a+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(a,5,MPI_INTEGER,1,k,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
MPI_RECV(b,4,MPI_INTEGER,1,k,MPI_COMM_WORLD,status,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do k=1,5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
MPI_RECV(a,5,MPI_INTEGER,0,k,MPI_COMM_WORLD,status,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b=a(1:4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(b,4,MPI_INTEGER,0,k,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p><p><p><p><p><p><p><p>On Sat, Sep 13, 2008 at 6:00 PM,  &lt;users-request_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. MPI_sendrecv = MPI_Send+ MPI_RECV ? (Enrico Barausse)
</span><br>
<span class="quotelev1">&gt;   2. Re: MPI_sendrecv = MPI_Send+ MPI_RECV ? (Eric Thibodeau)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Sat, 13 Sep 2008 14:50:50 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Enrico Barausse&quot; &lt;enrico.barausse_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;845f51b10809130550l194e798bx4a3031f6f978f794_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I apologize in advance if my question is naive, but I started to use
</span><br>
<span class="quotelev1">&gt; open-mpi only one week ago.
</span><br>
<span class="quotelev1">&gt; I have a complicated fortran 90 code which is giving me a segmentation
</span><br>
<span class="quotelev1">&gt; fault (address not mapped). I tracked down the problem to the
</span><br>
<span class="quotelev1">&gt; following lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     call
</span><br>
<span class="quotelev1">&gt; MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;                                     call
</span><br>
<span class="quotelev1">&gt; MPI_RECV(tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the MPI_send is executed by a process (say 1) which sends the array
</span><br>
<span class="quotelev1">&gt; toroot to another process (say 0). Process 0 successfully receives the
</span><br>
<span class="quotelev1">&gt; array toroot (I print out its components and they are correct), does
</span><br>
<span class="quotelev1">&gt; some calculations on it and sends back an array tonode to process 1.
</span><br>
<span class="quotelev1">&gt; Nevertheless, the MPI_Send routine above never returns controls to
</span><br>
<span class="quotelev1">&gt; process 1 (although the array toroot seems to have been transmitted
</span><br>
<span class="quotelev1">&gt; alright) and gives a segmentation fault (Signal code: Address not
</span><br>
<span class="quotelev1">&gt; mapped (1))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if replace the two lines above with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                call
</span><br>
<span class="quotelev1">&gt; MPI_sendrecv(toroot,3,MPI_DOUBLE_PRECISION,root,n,tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get no errors and the code works perfectly (I tested it vs the
</span><br>
<span class="quotelev1">&gt; serial version from which I started). But, and here is my question,
</span><br>
<span class="quotelev1">&gt; shouldn't MPI_sendrecv be equivalent to MPI_Send followed by MPI_RECV?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you in advance for helping with this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; enrico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Sat, 13 Sep 2008 11:38:12 -0400
</span><br>
<span class="quotelev1">&gt; From: Eric Thibodeau &lt;kyron_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;48CBDE64.1080900_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enrico Barausse wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I apologize in advance if my question is naive, but I started to use
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi only one week ago.
</span><br>
<span class="quotelev2">&gt;&gt; I have a complicated fortran 90 code which is giving me a segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault (address not mapped). I tracked down the problem to the
</span><br>
<span class="quotelev2">&gt;&gt; following lines:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                      call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;                                      call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_RECV(tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Well, for starters, your receive count doesn't match the send count. (4
</span><br>
<span class="quotelev1">&gt; Vs 3). Is this a typo?
</span><br>
<span class="quotelev2">&gt;&gt; the MPI_send is executed by a process (say 1) which sends the array
</span><br>
<span class="quotelev2">&gt;&gt; toroot to another process (say 0). Process 0 successfully receives the
</span><br>
<span class="quotelev2">&gt;&gt; array toroot (I print out its components and they are correct), does
</span><br>
<span class="quotelev2">&gt;&gt; some calculations on it and sends back an array tonode to process 1.
</span><br>
<span class="quotelev2">&gt;&gt; Nevertheless, the MPI_Send routine above never returns controls to
</span><br>
<span class="quotelev2">&gt;&gt; process 1 (although the array toroot seems to have been transmitted
</span><br>
<span class="quotelev2">&gt;&gt; alright) and gives a segmentation fault (Signal code: Address not
</span><br>
<span class="quotelev2">&gt;&gt; mapped (1))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, if replace the two lines above with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                 call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_sendrecv(toroot,3,MPI_DOUBLE_PRECISION,root,n,tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get no errors and the code works perfectly (I tested it vs the
</span><br>
<span class="quotelev2">&gt;&gt; serial version from which I started). But, and here is my question,
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't MPI_sendrecv be equivalent to MPI_Send followed by MPI_RECV?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thank you in advance for helping with this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; enrico
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1004, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6532.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6530.php">jody: "Re: [OMPI users] ompi_info command not working"</a>
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
