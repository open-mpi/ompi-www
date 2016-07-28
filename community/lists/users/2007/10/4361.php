<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 12:00:41 2007" -->
<!-- isoreceived="20071031160041" -->
<!-- sent="Wed, 31 Oct 2007 16:00:28 +0000" -->
<!-- isosent="20071031160028" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="[OMPI users] problems running parallel program" -->
<!-- id="20071031160028.GG8920_at_dbmail.dk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Karsten Bolding (<em>karsten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 12:00:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4360.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I've just introduced the possibility to use OpenMPI instead of MPICH in
<br>
an ocean model. The code is quite well tested and has being run in
<br>
various parallel setups by various groups.
<br>
<p>I've compiled the program using mpif90 (instead of ifort). When I run I
<br>
get the error - shown at the end of this mail.
<br>
<p>As you can see all 13 jobs are started - but then ...
<br>
<p>One problem with ocean models using domain decomposition in relation to 
<br>
load balancing is that the computational burden of the equal sized
<br>
domain is not the same (the different domains have different
<br>
land-fractions). To overcome this a matlab tool has been developed that
<br>
allows for assigning more sub-doamins to one processor/core based on the
<br>
sum of water-points in the sub-domains. Attached is a figure showing the
<br>
actual setup in this case. The neighbor relation is read from a file
<br>
produced by said matlab-tool. Non-existing neighbors are set to -1
<br>
- MPI_PROC_NULL in MPICH.
<br>
<p>The setup is run on a quad-core machine for testing purposes only.
<br>
<p>Any ideas what goes wrong?
<br>
<p><p>====  error ======
<br>
kb_at_gate:~/DK/setups/north_sea_fine$ mpirun -np 13
<br>
bin/getm_prod_IFORT.96x96 
<br>
&nbsp;Process            0  of           13  is alive on gate
<br>
[gate:18564] *** An error occurred in MPI_Isend
<br>
[gate:18564] *** on communicator MPI_COMM_WORLD
<br>
[gate:18564] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18564] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process            1  of           13  is alive on gate
<br>
[gate:18565] *** An error occurred in MPI_Isend
<br>
[gate:18565] *** on communicator MPI_COMM_WORLD
<br>
[gate:18565] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18565] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process            2  of           13  is alive on gate
<br>
&nbsp;Process            3  of           13  is alive on gate
<br>
[gate:18567] *** An error occurred in MPI_Isend
<br>
[gate:18567] *** on communicator MPI_COMM_WORLD
<br>
[gate:18567] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18567] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process            4  of           13  is alive on gate
<br>
[gate:18568] *** An error occurred in MPI_Isend
<br>
[gate:18568] *** on communicator MPI_COMM_WORLD
<br>
[gate:18568] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18568] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process            5  of           13  is alive on gate
<br>
[gate:18569] *** An error occurred in MPI_Isend
<br>
[gate:18569] *** on communicator MPI_COMM_WORLD
<br>
[gate:18569] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18569] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process            7  of           13  is alive on gate
<br>
[gate:18571] *** An error occurred in MPI_Isend
<br>
[gate:18571] *** on communicator MPI_COMM_WORLD
<br>
[gate:18571] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18571] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process            8  of           13  is alive on gate
<br>
&nbsp;Process            9  of           13  is alive on gate
<br>
[gate:18573] *** An error occurred in MPI_Isend
<br>
[gate:18573] *** on communicator MPI_COMM_WORLD
<br>
[gate:18573] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18573] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process           10  of           13  is alive on gate
<br>
[gate:18574] *** An error occurred in MPI_Isend
<br>
[gate:18574] *** on communicator MPI_COMM_WORLD
<br>
[gate:18574] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18574] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process           11  of           13  is alive on gate
<br>
&nbsp;Process           12  of           13  is alive on gate
<br>
[gate:18576] *** An error occurred in MPI_Isend
<br>
[gate:18576] *** on communicator MPI_COMM_WORLD
<br>
[gate:18576] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18576] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[gate:18566] *** An error occurred in MPI_Isend
<br>
[gate:18566] *** on communicator MPI_COMM_WORLD
<br>
[gate:18566] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18566] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[gate:18572] *** An error occurred in MPI_Isend
<br>
[gate:18572] *** on communicator MPI_COMM_WORLD
<br>
[gate:18572] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18572] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[gate:18575] *** An error occurred in MPI_Isend
<br>
[gate:18575] *** on communicator MPI_COMM_WORLD
<br>
[gate:18575] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18575] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;Process            6  of           13  is alive on gate
<br>
[gate:18570] *** An error occurred in MPI_Isend
<br>
[gate:18570] *** on communicator MPI_COMM_WORLD
<br>
[gate:18570] *** MPI_ERR_RANK: invalid rank
<br>
[gate:18570] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[gate:18561] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[gate:18561] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
<br>
line 1166
<br>
<p><p><p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------

</pre>
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-4361/mask.fine.size0096x0096_offset-0078x-0022_nodes004.distribution_on_nodes.png" alt="mask.fine.size0096x0096_offset-0078x-0022_nodes004.distribution_on_nodes.png">
<!-- attachment="mask.fine.size0096x0096_offset-0078x-0022_nodes004.distribution_on_nodes.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4360.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4362.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
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
