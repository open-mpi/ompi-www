<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 21 11:36:16 2007" -->
<!-- isoreceived="20070221163616" -->
<!-- sent="Wed, 21 Feb 2007 11:35:58 -0500" -->
<!-- isosent="20070221163558" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling HPCC with OpenMPI" -->
<!-- id="200702211135.58267.kyron_at_neuralbs.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-21 11:35:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2725.php">George Bosilca: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As we all know, compiling OpenMPI is not a matter of adding -lmpi (<a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>). I have tried many different approaches on configuring the 3 crucial MPI lines in the HPCC Makefiles with no success. There seems to be no correct way to get mpicc --shome:* to return the correct info and forcing the correct paths/info seems to be incorrect (ie, what OpenMPI lib do I point to here:  MPlib = $(MPdir)/lib/libmpich.a)
<br>
<p>Any help would be greatly appreciated!
<br>
<p>Exerp from the Makefile:
<br>
<p># ----------------------------------------------------------------------
<br>
# - Message Passing library (MPI) --------------------------------------
<br>
# ----------------------------------------------------------------------
<br>
# MPinc tells the  C  compiler where to find the Message Passing library
<br>
# header files,  MPlib  is defined  to be the name of  the library to be
<br>
# used. The variable MPdir is only used for defining MPinc and MPlib.
<br>
#
<br>
MPdir        = /usr/local/mpi
<br>
MPinc        = -I$(MPdir)/include
<br>
MPlib        = $(MPdir)/lib/libmpich.a
<br>
<p><p><pre>
-- 
Eric Thibodeau
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2723.php">Laurent Nguyen: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2725.php">George Bosilca: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
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
