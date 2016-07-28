<?
$subject_val = "[OMPI users] iof, readline, lost stdin buffering";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 14:36:48 2008" -->
<!-- isoreceived="20080401183648" -->
<!-- sent="Tue, 1 Apr 2008 14:36:37 -0400" -->
<!-- isosent="20080401183637" -->
<!-- name="Will Portnoy" -->
<!-- email="will.portnoy_at_[hidden]" -->
<!-- subject="[OMPI users] iof, readline, lost stdin buffering" -->
<!-- id="e1ac6ccc0804011136le37e417g6eebe9385a6171d5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] iof, readline, lost stdin buffering<br>
<strong>From:</strong> Will Portnoy (<em>will.portnoy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-01 14:36:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5288.php">Danesh Daroui: "[OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5286.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Reply:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using MPI in a somewhat nontraditional fashion.  My program calls
<br>
MPI_Comm_Spawn to start worker processes that are driven by my
<br>
shell-like program.  My program uses readline for input, and is *not*
<br>
started by mpirun.
<br>
<p>I have a problem where if I paste large amounts of text to my program
<br>
in my terminal, much of it is lost (where large is still less than
<br>
1K).  Without MPI, this normal input buffering worked, and the program
<br>
processed the buffered input as it finished processing earlier input.
<br>
<p>I understand that the i/o forwarding system may not interact well with
<br>
the readline library, and I'm guessing this may the cause. (It's
<br>
probably not relevant, but I'm using putty as a ssh client to reach
<br>
the linux machine).
<br>
<p>Is this likely?  I can try to put together a reproduction case, though
<br>
it will require quite a bit of work.
<br>
<p>Is it possible to disable the iof system?  I only need stdin, stdout,
<br>
stderr from my non-mpirun-started program and none of the worker
<br>
processes.
<br>
<p>Any other suggestions?
<br>
<p>thank you,
<br>
<p>Will
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5288.php">Danesh Daroui: "[OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5286.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Reply:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
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
