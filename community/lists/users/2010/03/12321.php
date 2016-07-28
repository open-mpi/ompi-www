<?
$subject_val = "[OMPI users] mpi error?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 10:14:52 2010" -->
<!-- isoreceived="20100311151452" -->
<!-- sent="Thu, 11 Mar 2010 07:14:27 -0800" -->
<!-- isosent="20100311151427" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="[OMPI users] mpi error?" -->
<!-- id="76aeda4a1003110714m52f27626j9bda18f07e43d3c0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi error?<br>
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 10:14:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12322.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12320.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12323.php">Peter Kjellstrom: "Re: [OMPI users] mpi error?"</a>
<li><strong>Reply:</strong> <a href="12323.php">Peter Kjellstrom: "Re: [OMPI users] mpi error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can anybody tell me if this is an error associated with openmpi, versus an
<br>
issue with the program I am running (MRBAYES,
<br>
<a href="https://sourceforge.net/projects/mrbayes/">https://sourceforge.net/projects/mrbayes/</a>)
<br>
<p>We are trying to run a large simulated dataset using 1,000,000 bases divided
<br>
up into 1000 genes, 5 taxa.. An error is occurring, but we are not sure why.
<br>
We are using the MPI version of MRBAYES v3.2-cvs on a linux 16core 24GB RAM
<br>
machine. It does not appear as if the program runs out of memory (max memory
<br>
usage is 13gb).  Maybe this is an OpenMPI problem and not related to
<br>
MrBayes...
<br>
<p>See snippet of error message below. Can anybody give me any hints about the
<br>
source of the problem?
<br>
<p>I am using OPENMPI version 1.4.1.
<br>
<p>...
<br>
Defining charset called gene997
<br>
Defining charset called gene998
<br>
Defining charset called gene999
<br>
Defining charset called gene1000
<br>
Defining partition called Genes
<br>
[macmanes:02546] *** Process received signal ***
<br>
[macmanes:02546] Signal: Segmentation fault (11)
<br>
[macmanes:02546] Signal code: Address not mapped (1)
<br>
[macmanes:02546] Failing at address: (nil)
<br>
[macmanes:02546] [ 0] /lib/libpthread.so.0 [0x7ffd0f322190]
<br>
[macmanes:02546] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 13 with PID 2546 on node macmanes exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
macmanes_at_macmanes:~/mrbayes$
<br>
<p>Thanks for any help!
<br>
Matt
<br>
<p><p>_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12321/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12322.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12320.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12323.php">Peter Kjellstrom: "Re: [OMPI users] mpi error?"</a>
<li><strong>Reply:</strong> <a href="12323.php">Peter Kjellstrom: "Re: [OMPI users] mpi error?"</a>
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
