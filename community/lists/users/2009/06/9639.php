<?
$subject_val = "[OMPI users] Bug in 1.3.2?: sm btl and isend is serializes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 10:18:24 2009" -->
<!-- isoreceived="20090619141824" -->
<!-- sent="Fri, 19 Jun 2009 10:18:19 -0400" -->
<!-- isosent="20090619141819" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in 1.3.2?: sm btl and isend is serializes" -->
<!-- id="82dde0906190718h6a70ed7i936efee09943445e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes<br>
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 10:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9638.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a small test code that I've managed to duplicate the results from a
<br>
larger code. In essence, using the sm btl with ISend, I wind up with the
<br>
communication being completely serialized, i.e., all the calls from process
<br>
1 complete, then all from 2, ...
<br>
<p>This is version 1.3.2, vanilla compile. I get the same results on my RHEL5
<br>
nehalem and an OS X laptop.
<br>
Here's an example of the output (note: there is a usleep in the code to
<br>
mimick my computation loop, and ensure that this is not a simple I/O
<br>
sequencing issue):
<br>
<p>---- Ignore the &quot;next&quot; in the output below, it was a broadcast test.
<br>
<p>mpirun -np 5 ./mpi_split_test
<br>
Master [id = 0 of 5] is running on bolstadm-lm1
<br>
[0] next = 10
<br>
Server [id = 3, 2, 1 of 5] is running on bolstadm-lm1
<br>
Compositor [id = 1, 0 of 5] is running on bolstadm-lm1
<br>
[1] next = 10
<br>
Sending buffer 0 from 1
<br>
Server [id = 2, 1, 0 of 5] is running on bolstadm-lm1
<br>
[2] next = 10
<br>
Sending buffer 0 from 2
<br>
[3] next = 10
<br>
Server [id = 4, 3, 2 of 5] is running on bolstadm-lm1
<br>
[4] next = 10
<br>
Sending buffer 0 from 3
<br>
Sending buffer 1 from 1
<br>
Sending buffer 1 from 2
<br>
Sending buffer 1 from 3
<br>
Sending buffer 2 from 1
<br>
Sending buffer 2 from 2
<br>
Sending buffer 2 from 3
<br>
Sending buffer 3 from 1
<br>
Sending buffer 3 from 2
<br>
Sending buffer 4 from 1
<br>
Receiving buffer from 1, buffer = hello from 1 for the 0 time
<br>
Receiving buffer from 1, buffer = hello from 1 for the 1 time
<br>
Sending buffer 4 from 2
<br>
Sending buffer 4 from 3
<br>
Sending buffer 5 from 1
<br>
Receiving buffer from 1, buffer = hello from 1 for the 2 time
<br>
Sending buffer 6 from 1
<br>
Receiving buffer from 1, buffer = hello from 1 for the 3 time
<br>
<p>-----At this point, processes 2 &amp; 3 are stuck in an MPI_Wait
<br>
...
<br>
Sending buffer 9 from 1
<br>
Receiving buffer from 1, buffer = hello from 1 for the 6 time
<br>
Receiving buffer from 1, buffer = hello from 1 for the 7 time
<br>
Receiving buffer from 1, buffer = hello from 1 for the 8 time
<br>
Receiving buffer from 1, buffer = hello from 1 for the 9 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 0 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 1 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 2 time
<br>
Sending buffer 5 from 2
<br>
Sending buffer 6 from 2
<br>
Receiving buffer from 2, buffer = hello from 2 for the 3 time
<br>
<p>---- Now process 2 is now running, 1 is in a barrier, 3 is still in Wait
<br>
....
<br>
Sending buffer 9 from 2
<br>
Receiving buffer from 2, buffer = hello from 2 for the 6 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 7 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 8 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 9 time
<br>
Receiving buffer from 3, buffer = hello from 3 for the 0 time
<br>
Sending buffer 5 from 3
<br>
Receiving buffer from 3, buffer = hello from 3 for the 1 time
<br>
Receiving buffer from 3, buffer = hello from 3 for the 2 time
<br>
<p>---- And now process 3 goes
<br>
...
<br>
Receiving buffer from 3, buffer = hello from 3 for the 8 time
<br>
Receiving buffer from 3, buffer = hello from 3 for the 9 time
<br>
<p><p><p>Now running under TCP:
<br>
<p>mpirun --mca btl tcp,self -np 5 ./mpi_split_test
<br>
Compositor [id = 1, 0 of 5] is running on bolstadm-lm1
<br>
Master [id = 0 of 5] is running on bolstadm-lm1
<br>
[0] next = 10
<br>
Server [id = 2, 1, 0 of 5] is running on bolstadm-lm1
<br>
Server [id = 3, 2, 1 of 5] is running on bolstadm-lm1
<br>
Server [id = 4, 3, 2 of 5] is running on bolstadm-lm1
<br>
[4] next = 10
<br>
Sending buffer 0 from 3
<br>
Sending buffer 0 from 1
<br>
[2] next = 10
<br>
[1] next = 10
<br>
Sending buffer 0 from 2
<br>
[3] next = 10
<br>
Receiving buffer from 1, buffer = hello from 1 for the 0 time
<br>
Receiving buffer from 3, buffer = hello from 3 for the 0 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 0 time
<br>
Sending buffer 1 from 3
<br>
Sending buffer 1 from 1
<br>
Sending buffer 1 from 2
<br>
Receiving buffer from 1, buffer = hello from 1 for the 1 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 1 time
<br>
Receiving buffer from 3, buffer = hello from 3 for the 1 time
<br>
Sending buffer 2 from 3
<br>
Sending buffer 2 from 2
<br>
Sending buffer 2 from 1
<br>
Receiving buffer from 1, buffer = hello from 1 for the 2 time
<br>
Receiving buffer from 2, buffer = hello from 2 for the 2 time
<br>
Receiving buffer from 3, buffer = hello from 3 for the 2 time
<br>
...
<br>
<p>So, has this been reported before? I've seen some messages on the developer
<br>
list about hanging with the sm btl.
<br>
<p>I'll post the test code if requested (this email is already long)
<br>
<p>Mark
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9639/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9638.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9640.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
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
