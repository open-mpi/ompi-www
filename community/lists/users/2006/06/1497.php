<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 13:03:42 2006" -->
<!-- isoreceived="20060629170342" -->
<!-- sent="Thu, 29 Jun 2006 13:03:26 -0400" -->
<!-- isosent="20060629170326" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun and ncurses" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9C23_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] mpirun and ncurses" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 13:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1498.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Previous message:</strong> <a href="1496.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Why does it suddenly not run?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1414.php">Ross Lance: "[OMPI users] mpirun and ncurses"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It doesn't look like you ever got an answer to this question -- sorry!
<br>
We sometimes get very bad at mail management.  :-(
<br>
&nbsp;
<br>
I'm guessing that this is always going to be a problematic scenario for
<br>
Open MPI.  We have to do forwarding of stdin/out/err between the MPI
<br>
process and mpirun.  I'm guessing that -- for lack of a longer
<br>
description -- this does not play well with the ncurses model of getting
<br>
input events.
<br>
&nbsp;
<br>
So I don't have a good answer for you -- I'm guessing that this is
<br>
simply the nature of forwarding I/O around (and reading via ptys -- or
<br>
not -- and all the complications therein).
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Ross Lance
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Tuesday, June 13, 2006 7:38 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] mpirun and ncurses
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have been using termios.h to detect a keypress and then deal
<br>
with it inside of a loop and when porting it over to mpi, and using
<br>
mpirun it now will wait and the loop is paused waiting for a carrige
<br>
return checking for a keypress. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I then tried ncurses with nodelay() function and the loop
<br>
continues but still requires a return before it deals with the input
<br>
inside of mpirun. Where alone it would respond to a keypress without a
<br>
return.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Both methods above are contained within if( rank == 0 ) { } and
<br>
in a for(;;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And I am using svn checkout of OpenMPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I would like to be able to press a key within a loop in main to
<br>
change values and exit the loop. Very easy with both methods above. But
<br>
mpirun seems to alter the behavior.  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do any of you know of a method to acomplish this within an mpi
<br>
application. I want to loop forever and respong to keyboard input when
<br>
it comes in or shortly there after.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ross
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1497/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1498.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Previous message:</strong> <a href="1496.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Why does it suddenly not run?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1414.php">Ross Lance: "[OMPI users] mpirun and ncurses"</a>
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
