<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  7 15:23:21 2006" -->
<!-- isoreceived="20060307202321" -->
<!-- sent="Tue, 7 Mar 2006 15:23:10 -0500" -->
<!-- isosent="20060307202310" -->
<!-- name="Michael Kluskens" -->
<!-- email="michael.kluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?" -->
<!-- id="0CDBF977-96E7-4E2F-9AC1-89B277F28550_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F0CA5A-8C20-4E51-9B82-32D2B7E2127A_at_open-mpi.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>michael.kluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-07 15:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0795.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0793.php">Cezary Sliwa: "[OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>In reply to:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0796.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0796.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0797.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the mpi_comm_spawn issues with the 1.0.x releases I started using  
<br>
1.1r9212, with my sample code I'm getting a messages of
<br>
<p>[-:13327] mca: base: component_find: unable to open: dlopen(/usr/ 
<br>
local/lib/openmpi/mca_pml_teg.so, 9): Symbol not found:  
<br>
_mca_ptl_base_recv_request_t_class
<br>
&nbsp;&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_pml_teg.so
<br>
&nbsp;&nbsp;&nbsp;Expected in: flat namespace
<br>
(ignored)
<br>
...
<br>
[-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
soh_base_get_proc_soh.c at line 100
<br>
[-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
[-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
soh_base_get_proc_soh.c at line 100
<br>
[-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[-:13323] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
<p>OS X 10.4.5 with g95 from current fink install for FC &amp; F77.  Running  
<br>
on a single machine and launching a single spawned subprocess as a  
<br>
test case for now.  Also on Debian Sarge on Operton built using &quot;./ 
<br>
configure --with-gnu-ld F77=pgf77 FFLAGS=-fastsse FC=pgf90 FCFLAGS=- 
<br>
fastsse&quot;  with PG 6.1.
<br>
<p>Are these diagnostic messages of errors in OpenMPI 1.1r9212 or  
<br>
related to errors in my test code?
<br>
<p>Is this information helpful for development purposes?
<br>
<p>Michael.
<br>
<p>On Mar 4, 2006, at 9:29 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Michael --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks for your report!  You are exactly right -- our types are
</span><br>
<span class="quotelev1">&gt; wrong and will not match in the F90 bindings.  I have committed a fix
</span><br>
<span class="quotelev1">&gt; to the trunk for this (it involved changing some types in mpif.h and
</span><br>
<span class="quotelev1">&gt; adding another interface function for MPI_COMM_SPAWN_MULTIPLE so that
</span><br>
<span class="quotelev1">&gt; MPI_ARGVS_NULL could be unambiguously matched).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was also just pointed out to us on this list the other day that we
</span><br>
<span class="quotelev1">&gt; are missing all the places where MPI choice buffers could be of type
</span><br>
<span class="quotelev1">&gt; CHARACTER (e.g., MPI_SEND).  We're working on fixing that -- it's
</span><br>
<span class="quotelev1">&gt; just a bunch of menial labor to fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm hesitant to put these fixes in the 1.0.x series simply because
</span><br>
<span class="quotelev1">&gt; we're trying to finish that series and advance towards 1.1.  Would
</span><br>
<span class="quotelev1">&gt; you be amenable to using a 1.1.x snapshot?  My commit should show up
</span><br>
<span class="quotelev1">&gt; in any 1.1 snapshot &gt;= r9198.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2006, at 12:30 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 1, 2006, at 9:56 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I look into this problem more and your right it's a missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface. Somehow, it didn't get compiled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From &quot;openmpi-1.0.1/ompi/mpi/f90/mpi-f90-interfaces.h&quot; the interface
</span><br>
<span class="quotelev2">&gt;&gt; says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; subroutine MPI_Comm_spawn(command, argv, maxprocs, info, root, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;          comm, intercomm, array_of_errcodes, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    use mpi_kinds
</span><br>
<span class="quotelev2">&gt;&gt;    character(len=*), intent(in) :: command
</span><br>
<span class="quotelev2">&gt;&gt;    character(len=*), dimension(*), intent(in) :: argv
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: maxprocs
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: info
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(out) :: intercomm
</span><br>
<span class="quotelev2">&gt;&gt;    integer, dimension(*), intent(out) :: array_of_errcodes
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev2">&gt;&gt; end subroutine MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My call is (mostly from the Using MPI-2 book):
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INFO_NULL, 0, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; looking at &quot;mpif.h&quot; included by mpi_kinds.f90:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; double complex  MPI_ARGV_NULL
</span><br>
<span class="quotelev2">&gt;&gt; integer MPI_INFO_NULL
</span><br>
<span class="quotelev2">&gt;&gt; integer MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; double complex MPI_ERRCODES_IGNORE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I don't understand how the &quot;double complex&quot; MPI_ARGV_NULL could
</span><br>
<span class="quotelev2">&gt;&gt; work with the &quot;character(len=*), dimension(*), intent(in) :: argv&quot;
</span><br>
<span class="quotelev2">&gt;&gt; interface or how the &quot;double complex&quot; MPI_ERRCODES_IGNORE could work
</span><br>
<span class="quotelev2">&gt;&gt; with the &quot;integer, dimension(*), intent(out) :: array_of_errcodes&quot;
</span><br>
<span class="quotelev2">&gt;&gt; interface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the following for my variables:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    integer :: ierr,slavecomm
</span><br>
<span class="quotelev2">&gt;&gt;    integer  (kind=MPI_ADDRESS_KIND) :: universe_size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My usage of  MPI_ADDRESS_KIND and MPI_Comm_spawn is based on pages
</span><br>
<span class="quotelev2">&gt;&gt; 236 and 244 of &quot;Using MPI-2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd to resolve the specific error involving the f90 interfaces so I
</span><br>
<span class="quotelev2">&gt;&gt; can continue to &quot;USE MPI&quot; in order to check my interface errors
</span><br>
<span class="quotelev2">&gt;&gt; quickly as I move forward on my project.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0795.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0793.php">Cezary Sliwa: "[OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>In reply to:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0796.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0796.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0797.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
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
