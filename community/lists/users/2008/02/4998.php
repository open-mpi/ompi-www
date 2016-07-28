<?
$subject_val = "[OMPI users] Oversubscribing a subset of a machine's cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 06:07:17 2008" -->
<!-- isoreceived="20080207110717" -->
<!-- sent="Thu, 7 Feb 2008 12:07:07 +0100" -->
<!-- isosent="20080207110707" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="[OMPI users] Oversubscribing a subset of a machine's cores" -->
<!-- id="F9EA8143-C111-4344-893E-2F28EB7EFA48_at_stud.cs.uit.no" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Oversubscribing a subset of a machine's cores<br>
<strong>From:</strong> Torje Henriksen (<em>torjeh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 06:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4999.php">Jeff Squyres: "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Reply:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a slightly odd problem, that you might not think is important  
<br>
at all. Anyways, here it goes:
<br>
<p>I'm using a single eight-core machine. I want to oversubscribe four of  
<br>
the cores and leave the other four idle. My approach is to make a  
<br>
hostfile:
<br>
<p>localhost slot=4 # shouldn't this limit the core count to 4?
<br>
<p><p>and run the command:
<br>
<p>$mpirun -np 8 --hostfile my_hostfile ./my_mpiprog
<br>
<p>or the command:
<br>
<p>$mpirun -np 8 --host localhost,localhost,localhost,localhost ./ 
<br>
my_mpiprog
<br>
<p><p>Still, all eight cores are being used. I can see why you would want to  
<br>
use all cores, and I can see that oversubscribing a sub-set of the  
<br>
cores might seem silly.  My question is, is it possible to do what I  
<br>
want to do without hacking the open mpi code?
<br>
<p>Guess I just wanted to know is there is a solution I overlooked before  
<br>
I start hacking like a madman :)
<br>
<p><p>Thanks
<br>
<p>Torje Henriksen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4999.php">Jeff Squyres: "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Reply:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
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
