<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 11:42:04 2010" -->
<!-- isoreceived="20100630154204" -->
<!-- sent="Wed, 30 Jun 2010 08:43:47 -0700" -->
<!-- isosent="20100630154347" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="4C2B6633.4010308_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimhAZH-jzKsQvHdZ6ouBHApJ5XpI2xnTpZTHs9p_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Persistent Communication Question<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 11:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13448.php">Jack Bryan: "[OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13446.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13446.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13450.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13450.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
amjad ali wrote:<br>
<blockquote
 cite="midAANLkTimhAZH-jzKsQvHdZ6ouBHApJ5XpI2xnTpZTHs9p@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div bgcolor="#ffffff" text="#000000">and it's conceivable that you
might have better performance with<br>
    <br>
&nbsp;&nbsp;&nbsp; CALL MPI_ISEND()<br>
&nbsp;&nbsp;&nbsp; DO I = 1, N<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call do_a_little_of_my_work()&nbsp; ! no MPI progress is being made
here<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_TEST()&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! enough MPI progress is being made
here that the receiver has something to do<br>
&nbsp;&nbsp;&nbsp; END DO<br>
&nbsp;&nbsp;&nbsp; CALL MPI_WAIT()<br>
    <br>
Whether performance improves or not is not guaranteed by the MPI
standard.<br>
    <div class="im">
    <blockquote
 cite="http://midAANLkTinls8gUyzGkYEfPKYN_eKDw6lhjPUQpancykqzA@mail.gmail.com"
 type="cite">And the SECOND desire is to use Persistent communication
for even better speedup.<br>
    </blockquote>
    </div>
Right.&nbsp; That's a separate issue.</div>
  </blockquote>
  <div><br>
So actually I am focusing on the persistent communication at this time.
Based on your suggestions, I developed:<br>
  </div>
  </div>
  <br>
sending, receiving buffers, and the request array is defined in
declared in the global module. And their sizes are allocated in the
main program. But following is not working. Segmentation fault messages
at just from the underline blue line lace.<br>
</blockquote>
Well, the problem must be in the details of how you're implementing
this.&nbsp; I've attached a program that works for me.<br>
<blockquote
 cite="midAANLkTimhAZH-jzKsQvHdZ6ouBHApJ5XpI2xnTpZTHs9p@mail.gmail.com"
 type="cite"><br>
  <b style="color: rgb(51, 204, 0);">Main program
starts------@@@@@@@@@@@@@@@@@@@@@@@.</b><br
 style="color: rgb(51, 204, 0);">
  <b style="color: rgb(51, 204, 0);"><br>
  </b><b style="color: rgb(51, 51, 255);"><u>CALL MPI_RECV_INIT for
each neighboring process&nbsp; </u></b><b style="color: rgb(51, 204, 0);"><br>
CALL MPI_SEND_INIT for each neighboring process</b><br>
  <b style="color: rgb(51, 204, 0);">Loop Calling the
subroutine1--------------------(10000 times in the main program).<br>
  <br>
  </b><b style="color: rgb(51, 204, 0);"> Call subroutine1</b><br
 style="color: rgb(51, 204, 0);">
  <b style="color: rgb(204, 0, 0);"><br>
  </b><b style="color: rgb(204, 0, 0);">Subroutine1
starts===================================</b><br>
  <b style="color: rgb(204, 0, 0);">
  <div class="im">&nbsp;&nbsp; Loop A starts here
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
(three passes)<br>
  </div>
&nbsp;&nbsp; Call subroutine2<br>
  <br>
&nbsp;&nbsp; Subroutine2 starts----------------------------
  <div class="im"><br>
&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; <span style="color: rgb(255, 0, 0);">Pick local data from
array U in separate arrays for each neighboring processor</span><br
 style="color: rgb(255, 0, 0);">
  </div>
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; CALL MPI_STARTALL</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);"></span><span
 style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; -------perform work that could
be done with local data</span><br style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; CALL MPI_WAITALL( )</span><br
 style="color: rgb(255, 0, 0);">
  <span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; -------perform work
using the received data</span><br style="color: rgb(255, 0, 0);">
&nbsp;&nbsp; Subroutine</b><b style="color: rgb(204, 0, 0);">2</b><b
 style="color: rgb(204, 0, 0);"> ends</b><b
 style="color: rgb(204, 0, 0);">----------------------------</b>
  <div class="im"><br>
  <br>
  <b style="color: rgb(204, 0, 0);"><span style="color: rgb(255, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-------perform work to update array U</span></b><br>
  <b style="color: rgb(204, 0, 0);">&nbsp;&nbsp; Loop A ends here
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;</b><br>
  </div>
  <b style="color: rgb(204, 0, 0);">Subroutine1
ends====================================</b><br>
  <br>
  <b style="color: rgb(51, 204, 0);">Loop Calling the subroutine1
ends------------(10000 times in the main program).</b><br
 style="color: rgb(51, 204, 0);">
  <br style="color: rgb(51, 204, 0);">
  <b style="color: rgb(51, 204, 0);">CALL MPI_Request_free( )</b><br
 style="color: rgb(51, 204, 0);">
  <br style="color: rgb(51, 204, 0);">
  <b style="color: rgb(51, 204, 0);">Main program
ends------@@@@@@@@@@@@@@@@@@@@@@@.</b><br>
  <br>
How to tackle all this.<br>
</blockquote>
</body>


<p>
module my_mpi_stuff
<br>
&nbsp;&nbsp;integer, parameter :: nmsgs = 1, nwords = 8
<br>
&nbsp;&nbsp;integer me, np
<br>
&nbsp;&nbsp;integer reqs(       nmsgs,2)       ! (...,1) are for sends and (...,2) are for receives
<br>
&nbsp;&nbsp;real(8) bufs(nwords,nmsgs,2)       ! (...,1) are for sends and (...,2) are for receives
<br>
end module my_mpi_stuff
<br>
<p>program main
<br>
&nbsp;&nbsp;use my_mpi_stuff
<br>
&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
<p>&nbsp;&nbsp;call MPI_Init(ier)
<br>
&nbsp;&nbsp;call MPI_Comm_size(MPI_COMM_WORLD,np,ier)
<br>
&nbsp;&nbsp;call MPI_Comm_rank(MPI_COMM_WORLD,me,ier)
<br>
<p>&nbsp;&nbsp;! set up individual sends and receives
<br>
&nbsp;&nbsp;if ( np /= 2 ) stop &quot;np is not 2&quot;      ! this simple example works only for np==2
<br>
&nbsp;&nbsp;call MPI_Recv_init(bufs(1,1,2), nwords, MPI_REAL8, 1-me, 300, MPI_COMM_WORLD, reqs(1,2), ier)
<br>
&nbsp;&nbsp;call MPI_Send_init(bufs(1,1,1), nwords, MPI_REAL8, 1-me, 300, MPI_COMM_WORLD, reqs(1,1), ier)
<br>
<p>&nbsp;&nbsp;do i = 1, 10000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call sub1()
<br>
&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;! dump out buffers
<br>
&nbsp;&nbsp;do imsg = 1, nmsgs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(6,'(3i5,8f8.1)') me, imsg, 1, bufs(:,imsg,1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(6,'(3i5,8f8.1)') me, imsg, 2, bufs(:,imsg,2)
<br>
&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;do imsg = 1, nmsgs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Request_free(reqs(imsg,1), ier)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Request_free(reqs(imsg,2), ier)
<br>
&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;call MPI_Finalize(ier)
<br>
end program main
<br>
<p>subroutine sub1()
<br>
&nbsp;&nbsp;do i = 1, 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call sub2()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! call update(u)
<br>
&nbsp;&nbsp;end do
<br>
end subroutine sub1
<br>
<p>subroutine sub2()
<br>
&nbsp;&nbsp;use my_mpi_stuff
<br>
&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
<p>&nbsp;&nbsp;! Pick local data from array U in separate arrays for each neighboring processor
<br>
&nbsp;&nbsp;do imsg = 1, nmsgs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do iword = 1, nwords
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bufs(iword,imsg,1) = 10000 * me + 100 * imsg + iword
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;call MPI_Startall(2*nmsgs,reqs,ier)
<br>
<p>&nbsp;&nbsp;! -------perform work that could be done with local data
<br>
<p>&nbsp;&nbsp;call MPI_Waitall (2*nmsgs,reqs,MPI_STATUSES_IGNORE,ier)
<br>
<p>&nbsp;&nbsp;! -------perform work using the received data
<br>
<p>end subroutine sub2
<br>
<p><p>
<br><p>
#!/bin/csh
<br>
<p>setenv OPAL_PREFIX .....
<br>
set path = ( $OPAL_PREFIX/bin $path )
<br>
<p>mpif90 a.f90
<br>
mpirun -n 2 ./a.out
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13448.php">Jack Bryan: "[OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13446.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13446.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13450.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13450.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
