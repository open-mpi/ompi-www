<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 16:49:05 2007" -->
<!-- isoreceived="20071001204905" -->
<!-- sent="Mon, 1 Oct 2007 22:49:00 +0200" -->
<!-- isosent="20071001204900" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="[OMPI users] Tool communication" -->
<!-- id="6ab5deaf0710011349l127757f8vf4b6c8d14473ecf7_at_mail.gmail.com" -->
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
<strong>From:</strong> Oleg Morajko (<em>olegmorajko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 16:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Previous message:</strong> <a href="4121.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4139.php">Amit Kumar Saha: "Re: [OMPI users] Tool communication"</a>
<li><strong>Reply:</strong> <a href="4139.php">Amit Kumar Saha: "Re: [OMPI users] Tool communication"</a>
<li><strong>Reply:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>In the context of my PhD research, I have been developing a run-time
<br>
performance analyzer for MPI-based applications.
<br>
My tool provides a controller process for each MPI task. In particular, when
<br>
a MPI job is started, a special wrapper script is generated that first
<br>
starts my controller processes and next each controller spawns an actual MPI
<br>
task (that performs MPI_Init etc.). I use dynamic instrumentation API
<br>
(DynInst API) to control and instrument MPI tasks.
<br>
<p>The point is I need to intercommunicate my controller processes, in
<br>
particular I need a point-to-point communication between arbitrary pair of
<br>
controllers. So it seems reasonable to take advantage of MPI itself and use
<br>
it for communication. However I am not sure what would be the impact of
<br>
calling MPI_Init and communicating from controller processes taking into
<br>
account both controllers and actual MPI  processes where started with the
<br>
same mpirun invocation. Actually I would need to assure that controllers
<br>
have a separate MPI execution enviroment while the application has another
<br>
one.
<br>
<p>Any suggestions how to achive that? Obviously another option is to use
<br>
sockets to intercommunicate controllers, but having MPI this seems to be
<br>
overkill.
<br>
<p>Thank you in advance for your help.
<br>
<p>Regards,
<br>
--Oleg
<br>
<p>PhD student, Universitat Autonoma de Barcelona, Spain
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4122/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Previous message:</strong> <a href="4121.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4139.php">Amit Kumar Saha: "Re: [OMPI users] Tool communication"</a>
<li><strong>Reply:</strong> <a href="4139.php">Amit Kumar Saha: "Re: [OMPI users] Tool communication"</a>
<li><strong>Reply:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
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
