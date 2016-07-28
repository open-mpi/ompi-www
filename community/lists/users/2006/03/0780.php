<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar  4 09:29:17 2006" -->
<!-- isoreceived="20060304142917" -->
<!-- sent="Sat, 4 Mar 2006 09:29:10 -0500" -->
<!-- isosent="20060304142910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?" -->
<!-- id="46F0CA5A-8C20-4E51-9B82-32D2B7E2127A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="505DC0CF-07D8-4824-A64B-47D60DE184F6_at_nrl.navy.mil" -->
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
<strong>Date:</strong> 2006-03-04 09:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0781.php">Jeff Squyres: "Re: [OMPI users] C++ bool type reduction failing"</a>
<li><strong>Previous message:</strong> <a href="0779.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0790.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0790.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0794.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael --
<br>
<p>Sorry for the delay in replying.
<br>
<p>Many thanks for your report!  You are exactly right -- our types are  
<br>
wrong and will not match in the F90 bindings.  I have committed a fix  
<br>
to the trunk for this (it involved changing some types in mpif.h and  
<br>
adding another interface function for MPI_COMM_SPAWN_MULTIPLE so that  
<br>
MPI_ARGVS_NULL could be unambiguously matched).
<br>
<p>It was also just pointed out to us on this list the other day that we  
<br>
are missing all the places where MPI choice buffers could be of type  
<br>
CHARACTER (e.g., MPI_SEND).  We're working on fixing that -- it's  
<br>
just a bunch of menial labor to fix.
<br>
<p>I'm hesitant to put these fixes in the 1.0.x series simply because  
<br>
we're trying to finish that series and advance towards 1.1.  Would  
<br>
you be amenable to using a 1.1.x snapshot?  My commit should show up  
<br>
in any 1.1 snapshot &gt;= r9198.
<br>
<p><p>On Mar 1, 2006, at 12:30 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2006, at 9:56 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I look into this problem more and your right it's a missing
</span><br>
<span class="quotelev2">&gt;&gt; interface. Somehow, it didn't get compiled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From &quot;openmpi-1.0.1/ompi/mpi/f90/mpi-f90-interfaces.h&quot; the interface
</span><br>
<span class="quotelev1">&gt; says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Comm_spawn(command, argv, maxprocs, info, root, &amp;
</span><br>
<span class="quotelev1">&gt;          comm, intercomm, array_of_errcodes, ierr)
</span><br>
<span class="quotelev1">&gt;    use mpi_kinds
</span><br>
<span class="quotelev1">&gt;    character(len=*), intent(in) :: command
</span><br>
<span class="quotelev1">&gt;    character(len=*), dimension(*), intent(in) :: argv
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: maxprocs
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: info
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: intercomm
</span><br>
<span class="quotelev1">&gt;    integer, dimension(*), intent(out) :: array_of_errcodes
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My call is (mostly from the Using MPI-2 book):
</span><br>
<span class="quotelev1">&gt;    call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, 0, &amp;
</span><br>
<span class="quotelev1">&gt;      MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; looking at &quot;mpif.h&quot; included by mpi_kinds.f90:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double complex  MPI_ARGV_NULL
</span><br>
<span class="quotelev1">&gt; integer MPI_INFO_NULL
</span><br>
<span class="quotelev1">&gt; integer MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; double complex MPI_ERRCODES_IGNORE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I don't understand how the &quot;double complex&quot; MPI_ARGV_NULL could
</span><br>
<span class="quotelev1">&gt; work with the &quot;character(len=*), dimension(*), intent(in) :: argv&quot;
</span><br>
<span class="quotelev1">&gt; interface or how the &quot;double complex&quot; MPI_ERRCODES_IGNORE could work
</span><br>
<span class="quotelev1">&gt; with the &quot;integer, dimension(*), intent(out) :: array_of_errcodes&quot;
</span><br>
<span class="quotelev1">&gt; interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following for my variables:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    integer :: ierr,slavecomm
</span><br>
<span class="quotelev1">&gt;    integer  (kind=MPI_ADDRESS_KIND) :: universe_size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My usage of  MPI_ADDRESS_KIND and MPI_Comm_spawn is based on pages
</span><br>
<span class="quotelev1">&gt; 236 and 244 of &quot;Using MPI-2&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd to resolve the specific error involving the f90 interfaces so I
</span><br>
<span class="quotelev1">&gt; can continue to &quot;USE MPI&quot; in order to check my interface errors
</span><br>
<span class="quotelev1">&gt; quickly as I move forward on my project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0781.php">Jeff Squyres: "Re: [OMPI users] C++ bool type reduction failing"</a>
<li><strong>Previous message:</strong> <a href="0779.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0790.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0790.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0794.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
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
