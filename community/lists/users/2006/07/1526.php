<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  3 10:35:23 2006" -->
<!-- isoreceived="20060703143523" -->
<!-- sent="Mon,  3 Jul 2006 10:35:15 -0400 (EDT)" -->
<!-- isosent="20060703143515" -->
<!-- name="Jack Howarth" -->
<!-- email="howarth_at_[hidden]" -->
<!-- subject="[OMPI users] open-mpi on MacOS X" -->
<!-- id="20060703143515.6B6FB1000D_at_bromo.msbb.uc.edu" -->
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
<strong>From:</strong> Jack Howarth (<em>howarth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-03 10:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1527.php">Brock Palen: "Re: [OMPI users] open-mpi on MacOS X"</a>
<li><strong>Previous message:</strong> <a href="1525.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1527.php">Brock Palen: "Re: [OMPI users] open-mpi on MacOS X"</a>
<li><strong>Reply:</strong> <a href="1527.php">Brock Palen: "Re: [OMPI users] open-mpi on MacOS X"</a>
<li><strong>Maybe reply:</strong> <a href="1549.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] open-mpi on MacOS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;I have created simple fink (<a href="http://fink.sourceforge.net">http://fink.sourceforge.net</a>) packaging 
<br>
for open-mpi v1.1 on MacOS X. The packaging builds open-mpi with its
<br>
default settings in configure and appears to pass all of its make check
<br>
without problems. However, the lack of clear documentation for open-mpi
<br>
still is a problem. I seem able to manually run the test programs from
<br>
the open-mpi distribution using...
<br>
<p>mdrun -np 2 ...
<br>
<p>after starting the orted daemon with....
<br>
<p>orted --seed --persistent --scope public 
<br>
<p>I can see both cpus spike when I do the mdrun's so I think
<br>
that works. However, I can't figure how the proper way to
<br>
monitor the status of the available nodes. Specifically,
<br>
what is the equivalent to the lamnodes program in open-mpi?
<br>
Also, is there a simple test program that runs for a significant
<br>
period of time that I can use to test the different options to
<br>
monitor and control the open-mpi jobs that are running under
<br>
orted? Thanks in advance for any clarifications.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
ps I assume that at v1.1, open-mpi is considered to be a usable
<br>
replacement for lam? Certainly, gromacs 3.3.1 seems to compile
<br>
its mpi support against open-mpi.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1527.php">Brock Palen: "Re: [OMPI users] open-mpi on MacOS X"</a>
<li><strong>Previous message:</strong> <a href="1525.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1527.php">Brock Palen: "Re: [OMPI users] open-mpi on MacOS X"</a>
<li><strong>Reply:</strong> <a href="1527.php">Brock Palen: "Re: [OMPI users] open-mpi on MacOS X"</a>
<li><strong>Maybe reply:</strong> <a href="1549.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] open-mpi on MacOS X"</a>
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
