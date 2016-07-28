<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 02:12:33 2007" -->
<!-- isoreceived="20070829061233" -->
<!-- sent="Wed, 29 Aug 2007 11:42:29 +0530" -->
<!-- isosent="20070829061229" -->
<!-- name="Amit Kumar Saha" -->
<!-- email="amitsaha.in_at_[hidden]" -->
<!-- subject="[OMPI users] Basic problems with OpenMPI" -->
<!-- id="547db2260708282312s33d93few333c12341a724078_at_mail.gmail.com" -->
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
<strong>From:</strong> Amit Kumar Saha (<em>amitsaha.in_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 02:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello all,
<br>
<p>I am just trying to get started with OpenMPI (version 1.1) on Linux.
<br>
<p>When I try to run a simple MPI - &quot;Hello World&quot; program, here is what i get:
<br>
<p>amit_at_ubuntu-desktop-1:~/junk/mpi-codes$ mpirun -np 1 --hostfile
<br>
mpi-host-file ./a.out
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: OpenIB on host ubuntu-desktop-1 was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Processor 0 of 1: Hello World!
<br>
<p>Please explain the statements above.
<br>
<p>Also, when I am trying to launch the above process on 2 processors,
<br>
instead of one, it gives me:
<br>
<p>Failed to find or execute the following executable:
<br>
<p>Host:       ubuntu-desktop-2
<br>
Executable: ./a.out
<br>
<p>Cannot continue.
<br>
<p>Does that mean I have to place a copy of the executable on the other
<br>
node as well? Where should I place the executable?
<br>
<p><p>Thanks in advance.
<br>
<p>Regards
<br>
<pre>
-- 
Amit Kumar Saha
[URL]:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3930.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
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
