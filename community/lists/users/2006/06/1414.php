<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 19:37:50 2006" -->
<!-- isoreceived="20060613233750" -->
<!-- sent="Tue, 13 Jun 2006 16:37:44 -0700" -->
<!-- isosent="20060613233744" -->
<!-- name="Ross Lance" -->
<!-- email="ross.lance_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun and ncurses" -->
<!-- id="d00a315b0606131637t7ce777c9h6896b5cccbbcd832_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Ross Lance (<em>ross.lance_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-13 19:37:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1415.php">Jose Quiroga: "[OMPI users] OpenMPI C++ examples of user defined MPI types (inherited classes)?"</a>
<li><strong>Previous message:</strong> <a href="1413.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Where are the nightly tarballs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1497.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpirun and ncurses"</a>
<li><strong>Maybe reply:</strong> <a href="1497.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpirun and ncurses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been using termios.h to detect a keypress and then deal with it
<br>
inside of a loop and when porting it over to mpi, and using mpirun it now
<br>
will wait and the loop is paused waiting for a carrige return checking for a
<br>
keypress.
<br>
<p>I then tried ncurses with nodelay() function and the loop continues but
<br>
still requires a return before it deals with the input inside of mpirun.
<br>
Where alone it would respond to a keypress without a return.
<br>
<p>Both methods above are contained within if( rank == 0 ) { } and in a for(;;)
<br>
<p>And I am using svn checkout of OpenMPI.
<br>
<p>I would like to be able to press a key within a loop in main to change
<br>
values and exit the loop. Very easy with both methods above. But mpirun
<br>
seems to alter the behavior.
<br>
<p>Do any of you know of a method to acomplish this within an mpi application.
<br>
I want to loop forever and respong to keyboard input when it comes in or
<br>
shortly there after.
<br>
<p>Ross
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1415.php">Jose Quiroga: "[OMPI users] OpenMPI C++ examples of user defined MPI types (inherited classes)?"</a>
<li><strong>Previous message:</strong> <a href="1413.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Where are the nightly tarballs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1497.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpirun and ncurses"</a>
<li><strong>Maybe reply:</strong> <a href="1497.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpirun and ncurses"</a>
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
