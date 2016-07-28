<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 12:28:00 2007" -->
<!-- isoreceived="20071031162800" -->
<!-- sent="Wed, 31 Oct 2007 09:27:48 -0700" -->
<!-- isosent="20071031162748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems running parallel program" -->
<!-- id="C2AC0DBF-C7BD-4F42-8C12-94B10BAF3EF3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071031160028.GG8920_at_dbmail.dk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 12:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4363.php">Oleg Morajko: "[OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4361.php">Karsten Bolding: "[OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4361.php">Karsten Bolding: "[OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you should use the MPI_PROC_NULL constant itself, not a hard- 
<br>
coded value of -1.
<br>
<p>Specifically: the value of MPI_PROC_NULL is not set in the MPI  
<br>
standard -- so implementations are free to choose whatever value they  
<br>
want.  In Open MPI, MPI_PROC_NULL is -2.  So using -1 is an illegal  
<br>
destination, and you therefore get the error that you described.
<br>
<p><p>On Oct 31, 2007, at 9:00 AM, Karsten Bolding wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've just introduced the possibility to use OpenMPI instead of  
</span><br>
<span class="quotelev1">&gt; MPICH in
</span><br>
<span class="quotelev1">&gt; an ocean model. The code is quite well tested and has being run in
</span><br>
<span class="quotelev1">&gt; various parallel setups by various groups.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compiled the program using mpif90 (instead of ifort). When I  
</span><br>
<span class="quotelev1">&gt; run I
</span><br>
<span class="quotelev1">&gt; get the error - shown at the end of this mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see all 13 jobs are started - but then ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One problem with ocean models using domain decomposition in  
</span><br>
<span class="quotelev1">&gt; relation to
</span><br>
<span class="quotelev1">&gt; load balancing is that the computational burden of the equal sized
</span><br>
<span class="quotelev1">&gt; domain is not the same (the different domains have different
</span><br>
<span class="quotelev1">&gt; land-fractions). To overcome this a matlab tool has been developed  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; allows for assigning more sub-doamins to one processor/core based  
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; sum of water-points in the sub-domains. Attached is a figure  
</span><br>
<span class="quotelev1">&gt; showing the
</span><br>
<span class="quotelev1">&gt; actual setup in this case. The neighbor relation is read from a file
</span><br>
<span class="quotelev1">&gt; produced by said matlab-tool. Non-existing neighbors are set to -1
</span><br>
<span class="quotelev1">&gt; - MPI_PROC_NULL in MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The setup is run on a quad-core machine for testing purposes only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas what goes wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====  error ======
</span><br>
<span class="quotelev1">&gt; kb_at_gate:~/DK/setups/north_sea_fine$ mpirun -np 13
</span><br>
<span class="quotelev1">&gt; bin/getm_prod_IFORT.96x96
</span><br>
<span class="quotelev1">&gt;  Process            0  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18564] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18564] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18564] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18564] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process            1  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18565] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18565] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18565] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18565] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process            2  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt;  Process            3  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18567] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18567] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18567] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18567] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process            4  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18568] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18568] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18568] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18568] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process            5  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18569] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18569] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18569] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18569] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process            7  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18571] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18571] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18571] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18571] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process            8  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt;  Process            9  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18573] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18573] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18573] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18573] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process           10  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18574] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18574] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18574] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18574] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process           11  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt;  Process           12  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18576] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18576] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18576] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18576] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [gate:18566] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18566] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18566] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18566] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [gate:18572] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18572] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18572] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18572] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [gate:18575] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18575] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18575] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18575] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  Process            6  of           13  is alive on gate
</span><br>
<span class="quotelev1">&gt; [gate:18570] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [gate:18570] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [gate:18570] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [gate:18570] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [gate:18561] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [gate:18561] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at
</span><br>
<span class="quotelev1">&gt; line 1166
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
</span><br>
<span class="quotelev1">&gt; Strandgyden 25                     Phone: +45 64422058
</span><br>
<span class="quotelev1">&gt; DK-5466 Asperup                    Fax:   +45 64422068
</span><br>
<span class="quotelev1">&gt; Denmark                            Email: karsten_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;mask.fine.size0096x0096_offset-0078x-0022_nodes004.distribution_on_no 
</span><br>
<span class="quotelev1">&gt; des.png&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4363.php">Oleg Morajko: "[OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4361.php">Karsten Bolding: "[OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4361.php">Karsten Bolding: "[OMPI users] problems running parallel program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Reply:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
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
