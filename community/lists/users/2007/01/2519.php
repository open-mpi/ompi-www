<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 20:08:20 2007" -->
<!-- isoreceived="20070120010820" -->
<!-- sent="Fri, 19 Jan 2007 17:06:12 -0800" -->
<!-- isosent="20070120010612" -->
<!-- name="Axel Schweiger" -->
<!-- email="axel_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2" -->
<!-- id="45B16B04.6030608_at_apl.washington.edu" -->
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
<strong>From:</strong> Axel Schweiger (<em>axel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 20:06:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2520.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2518.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2522.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Reply:</strong> <a href="2522.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having a problem running pop 1.2 (Parallel Ocean Model) with
<br>
OpenMPI version 1.1.2  compiled with PGI 6.2-4  on RH EL-4 Update 4
<br>
(configure result attached)
<br>
<p>The error is as follows:
<br>
<p>mpirun -v -np 4 -machinefile node18.dat pop
<br>
[node18:11220] *** An error occurred in MPI_Cart_shift
<br>
[node18:11221] *** An error occurred in MPI_Cart_shift
<br>
[node18:11221] *** on communicator MPI_COMM_WORLD
<br>
[node18:11221] *** MPI_ERR_COMM: invalid communicator
<br>
[node18:11221] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node18:11220] *** on communicator MPI_COMM_WORLD
<br>
[node18:11220] *** MPI_ERR_COMM: invalid communicator
<br>
[node18:11220] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
3 additional processes aborted (not shown)
<br>
<p>The application runs fine with MPICH 1.2.6 and other applications (POP 
<br>
2) run fine with OpenMPI
<br>
<p>Any suggestions
<br>
<p>Thanks
<br>
<p><p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2519/configure_pgi_ext.log.gz">configure_pgi_ext.log.gz</a>
</ul>
<!-- attachment="configure_pgi_ext.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2520.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2518.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2522.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Reply:</strong> <a href="2522.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
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
