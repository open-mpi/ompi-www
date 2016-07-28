<?
$subject_val = "Re: [OMPI users] An error occurred in MPI_comm_size";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 22:20:33 2008" -->
<!-- isoreceived="20080408022033" -->
<!-- sent="Tue, 08 Apr 2008 12:20:19 +1000" -->
<!-- isosent="20080408022019" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An error occurred in MPI_comm_size" -->
<!-- id="1207621219.16067.41.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="33113.43340.qm_at_web53403.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] An error occurred in MPI_comm_size<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-07 22:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5339.php">yacob sen: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Previous message:</strong> <a href="5337.php">Tim Mattox: "[OMPI users] Open MPI v1.2.6 released"</a>
<li><strong>In reply to:</strong> <a href="5335.php">yacob sen: "[OMPI users] An error occurred in MPI_comm_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5339.php">yacob sen: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2008-04-07 at 09:08 -0700, yacob sen wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have just installed openmpi/mpich in ubuntu 7.10 in my linux machine
</span><br>
<span class="quotelev1">&gt; which has  a dual processor. 
</span><br>
<p>That's a little bit like saying you've installed Ubuntu/Red Hat on your
<br>
machine.
<br>
<p>OpenMPI and MPICH are different versions of the same thing.  You don't
<br>
need to/probably shouldn't install both.  Having to copy mpif.h locally
<br>
sounds like MPICH.  You certainly don't want to do this with OpenMPI.
<br>
You need to work out exactly which mpif90 you're invoking.  If it's
<br>
OpenMPI, then continue here, the OpenMPI mailing list.  If it's MPICH,
<br>
try the MPICH mailing lists.  Either way, what's happening will
<br>
certainly be clearer if you uninstall one of OpenMPI/MPICH.
<br>
<p><p><span class="quotelev1">&gt; I compiled my fortran program as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90  add.f90 -o add_n
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I, however, forced to copy &quot;mpif.h&quot; library in my working directory
</span><br>
<span class="quotelev1">&gt; where i run my program and also I  inserted an additional line inside
</span><br>
<span class="quotelev1">&gt; the file &quot;/etc/openmpi/openmpi-mca-params.conf&quot;, the following :
</span><br>
<span class="quotelev1">&gt; btl=^openib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have then run the program as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./add_n  (here I use 2 processor as my dual laptop has
</span><br>
<span class="quotelev1">&gt; two processor)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I got is the following error message :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [geosl063:13781] *** An error occurred in MPI_comm_size
</span><br>
<span class="quotelev1">&gt; [geosl063:13780] *** An error occurred in MPI_comm_size
</span><br>
<span class="quotelev1">&gt; [geosl063:13780] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [geosl063:13780] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [geosl063:13780] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [geosl063:13781] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [geosl063:13781] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used  MPI commands to program my fortran code. The program has been
</span><br>
<span class="quotelev1">&gt; running in a linux cluster. The point here is to develop my parallel
</span><br>
<span class="quotelev1">&gt; program in my linux laptop before I go and run it in a Linux cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments. I appreciate any comments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you so much
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yacob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; You rock. That's why Blockbuster's offering you one month of
</span><br>
<span class="quotelev1">&gt; Blockbuster Total Access, No Cost.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5339.php">yacob sen: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Previous message:</strong> <a href="5337.php">Tim Mattox: "[OMPI users] Open MPI v1.2.6 released"</a>
<li><strong>In reply to:</strong> <a href="5335.php">yacob sen: "[OMPI users] An error occurred in MPI_comm_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5339.php">yacob sen: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
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
