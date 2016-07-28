<?
$subject_val = "[OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 16 14:40:11 2012" -->
<!-- isoreceived="20120816184011" -->
<!-- sent="Thu, 16 Aug 2012 20:35:57 +0200" -->
<!-- isosent="20120816183557" -->
<!-- name="eatdirt" -->
<!-- email="dirteat_at_[hidden]" -->
<!-- subject="[OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)" -->
<!-- id="k0jeie$s52$1_at_ger.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)<br>
<strong>From:</strong> eatdirt (<em>dirteat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-16 14:35:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19960.php">EatDirt: "Re: [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<li><strong>Reply:</strong> <a href="19960.php">EatDirt: "Re: [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
I have attached a little piece of code which summarizes a &quot;bug?&quot; that 
<br>
annoys me ultimately. Issuing various calls to MPI_WIN_LOCK/UNLOCK seems 
<br>
to hang some processes until a MPI_BARRIER is encountered!??
<br>
<p>My experience with MPI is very modest, so I apologize in advance if I 
<br>
misread the MPI-2 specs, but it looks that what I want to do is correct.
<br>
<p>If you look to the file hangs.F90; the code starts with various call to 
<br>
LOCK/UNLOCK and then goes on with, let's say, a big piece of work, in 
<br>
between the comment &quot; start action&quot; and &quot;action done&quot;. For the purpose 
<br>
of this example, that's a do loop of 10s.
<br>
<p>I don't want to put a barrier after the various calls to LOCK/UNLOCK 
<br>
because I want it to run asynchronously. Also notice that I don't need 
<br>
some mutex or so, all that calls can be done simultaneously and in any 
<br>
order. My only pb is the following hangs:
<br>
<p>Here the output when the code run on a SMP machine (8 cores) by 
<br>
increasing the number of processus (the same occurs with distributed 
<br>
memory).
<br>
<p>mpirun -np 1 ./hangs
<br>
start action for rank=            0
<br>
(10 secondes later)
<br>
action done for rank=            0
<br>
<p>&lt;----works as I expect.
<br>
<p>mpirun -np 2 ./hangs
<br>
start action for rank=            1
<br>
start action for rank=            0
<br>
(10 secs later)
<br>
action done for rank=            1
<br>
action done for rank=            0
<br>
<p>&lt;----so far so good; but with more processus the &quot;bug?&quot; appears:
<br>
<p>mpirun -np 3 ./hangs
<br>
start action for rank=            1
<br>
start action for rank=            0
<br>
(10 secs later)
<br>
action done for rank=            0
<br>
action done for rank=            1
<br>
start action for rank=            2
<br>
(10 secs later)
<br>
action done for rank=            2
<br>
<p>The processus 2 remained stuck on the MPI_UNLOCK statement until 0 and 1 
<br>
reached the MPI_BARRIER instruction; which actually renders the 
<br>
execution serial :)
<br>
<p>I tested with up to 8 processes and the problem becomes even worse; a 
<br>
random number of processes are stuck on the MPI_UNLOCK. However, this 
<br>
does not occur at each execution. Sometime, rarely though, all the 
<br>
processes get released as expected from the UNLOCK.
<br>
<p>Additionally, if a MPI_BARRIER is issued just after the MPI_UNLOCK, 
<br>
there is no problem any more; but I never read in the MPI-2 specs that 
<br>
it should be the case, and this would completely kills the interest of 
<br>
performing asynchronous operations.
<br>
<p>gcc/gfortran is 4.6.3
<br>
(Open MPI) 1.4.5
<br>
<p>Please let me know if this behaviour can be fixed and if you need 
<br>
additional information!
<br>
<p>Thanks in advance,
<br>
Cheers,
<br>
Chris.
<br>
<p><p><p>

<br><p>
<p><hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19950/hangs.F90">hangs.F90</a>
</ul>
<!-- attachment="hangs.F90" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19950/Makefile">Makefile</a>
</ul>
<!-- attachment="Makefile" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19960.php">EatDirt: "Re: [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<li><strong>Reply:</strong> <a href="19960.php">EatDirt: "Re: [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
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
