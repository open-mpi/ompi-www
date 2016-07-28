<?
$subject_val = "[OMPI users] undefined symbol: MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 10:22:13 2008" -->
<!-- isoreceived="20081208152213" -->
<!-- sent="Mon, 8 Dec 2008 13:22:08 -0200" -->
<!-- isosent="20081208152208" -->
<!-- name="Heitor Florido" -->
<!-- email="heitorflorido_at_[hidden]" -->
<!-- subject="[OMPI users] undefined symbol: MPI_Send" -->
<!-- id="27329b10812080722w44ad2fbdh3e1d4f8b3e90107b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] undefined symbol: MPI_Send<br>
<strong>From:</strong> Heitor Florido (<em>heitorflorido_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 10:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7457.php">jody: "Re: [OMPI users] mca parameter"</a>
<li><strong>Previous message:</strong> <a href="7455.php">Ralph Castain: "Re: [OMPI users] mca parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7468.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Maybe reply:</strong> <a href="7468.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Maybe reply:</strong> <a href="7470.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>My program keeps throwing this error after I created a child process with
<br>
MPI_comm_spawn:
<br>
<p>*./../../Desktop/computacaoDistribuida/src/server/server: symbol lookup
<br>
error: ./../../Desktop/computacaoDistribuida/src/server/server: undefined
<br>
symbol: MPI_Send*
<br>
<p>I've already used MPI_Send on other parts of the program...
<br>
I've tried to print the message recieved from child process, but a similar
<br>
message appears:
<br>
<p>*./../../Desktop/computacaoDistribuida/src/server/server: symbol lookup
<br>
error: ./../../Desktop/computacaoDistribuida/src/server/server: undefined
<br>
symbol: printf, version GLIBC_2.0
<br>
<p>*This printf is executed if MPI_Comm_spawn returned MPI_SUCESS, so I guess
<br>
this is working.
<br>
<p>It appears that my libs (glibc, mpi) were unload after the MPI_comm_spawn.
<br>
<p>Does anyone knows what's this??
<br>
<p>Heitor Florido
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7457.php">jody: "Re: [OMPI users] mca parameter"</a>
<li><strong>Previous message:</strong> <a href="7455.php">Ralph Castain: "Re: [OMPI users] mca parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7468.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Maybe reply:</strong> <a href="7468.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Maybe reply:</strong> <a href="7470.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
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
