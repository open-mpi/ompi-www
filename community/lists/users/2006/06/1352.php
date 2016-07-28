<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 17:40:36 2006" -->
<!-- isoreceived="20060601214036" -->
<!-- sent="Thu, 1 Jun 2006 17:40:25 -0400" -->
<!-- isosent="20060601214025" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixeddimensions" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C3EA_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_GATHER: missing f90 interfaces for mixeddimensions" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 17:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1353.php">Troy Telford: "[OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1351.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95Compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a snipit from the README file:
<br>
<p>- The Fortran 90 MPI bindings can now be built in one of four sizes
<br>
&nbsp;&nbsp;using --with-mpi-f90-size=SIZE (see description below).  These sizes
<br>
&nbsp;&nbsp;reflect the number of MPI functions included in the &quot;mpi&quot; Fortran 90
<br>
&nbsp;&nbsp;module and therefore which functions will be subject to strict type
<br>
&nbsp;&nbsp;checking.  All functions not included in the Fortran 90 module can
<br>
&nbsp;&nbsp;still be invoked from F90 applications, but will fall back to
<br>
&nbsp;&nbsp;Fortran-77 style checking (i.e., little/none).
<br>
<p>&nbsp;&nbsp;- trivial: Only includes F90-specific functions from MPI-2.  This
<br>
&nbsp;&nbsp;&nbsp;&nbsp;means overloaded versions of MPI_SIZEOF for all the MPI-supported
<br>
&nbsp;&nbsp;&nbsp;&nbsp;F90 intrinsic types.
<br>
<p>&nbsp;&nbsp;- small (default): All the functions in &quot;trivial&quot; plus all MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;functions that take no choice buffers (meaning buffers that are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;specified by the user and are of type (void*) in the C bindings --
<br>
&nbsp;&nbsp;&nbsp;&nbsp;generally buffers specified for message passing).  Hence,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;functions like MPI_COMM_RANK are included, but functions like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_SEND are not.
<br>
<p>&nbsp;&nbsp;- medium: All the functions in &quot;small&quot; plus all MPI functions that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;take one choice buffer (e.g., MPI_SEND, MPI_RECV, ...).  All
<br>
&nbsp;&nbsp;&nbsp;&nbsp;one-choice-buffer functions have overloaded variants for each of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the MPI-supported Fortran intrinsic types up to the number of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dimensions specified by --with-f90-max-array-dim (default value is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;4).
<br>
<p>&nbsp;&nbsp;- large: All MPI functions (i.e., all the functions in &quot;medium&quot; plus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all MPI functions that take two choice buffers, such as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_SCATTER, MPI_GATHER, etc.).  All the two-choice-buffer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;functions will have variants for each of the MPI-supported Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;intrinsic types up to the number of dimensions specified by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-f90-max-array-dim, but both buffers will be of the same
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type.
<br>
<p>&nbsp;&nbsp;Increasing the size of the F90 module (in order from trivial, small,
<br>
&nbsp;&nbsp;medium, and large) will generally increase the length of time
<br>
&nbsp;&nbsp;required to compile user MPI applications.  Specifically, &quot;trivial&quot;-
<br>
&nbsp;&nbsp;and &quot;small&quot;-sized F90 modules generally allow user MPI applications
<br>
&nbsp;&nbsp;to be compiled fairly quickly but lose type safety for all MPI
<br>
&nbsp;&nbsp;functions with choice buffers.  &quot;medium&quot;- and &quot;large&quot;-sized F90
<br>
&nbsp;&nbsp;modules generally take longer to compile user applications but
<br>
&nbsp;&nbsp;provide greater type safety for MPI functions. 
<br>
<p>-----
<br>
<p>The issues that Michael identified mean that I'll probably be disabling
<br>
the &quot;large&quot; interface in v1.1 (and fixing it properly in v1.2).
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 01, 2006 4:41 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_GATHER: missing f90 interfaces 
</span><br>
<span class="quotelev1">&gt; for mixeddimensions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are these &quot;small&quot; and &quot;large&quot;  modules?  What would they provide?
</span><br>
<span class="quotelev1">&gt; Brock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2006, at 4:30 PM, Jeff Squyres ((jsquyres)) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Michael --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You're right again.  Thanks for keeping us honest!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We clearly did not think through all the issues for the &quot;large&quot; F90
</span><br>
<span class="quotelev2">&gt; &gt; interface; I've opened ticket #55 for the issue.  I'm 
</span><br>
<span class="quotelev1">&gt; inclined to take
</span><br>
<span class="quotelev2">&gt; &gt; the same approach as for the other issues you discovered -- disable
</span><br>
<span class="quotelev2">&gt; &gt; &quot;large&quot; for v1.1 and push the fixes to v1.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/55">https://svn.open-mpi.org/trac/ompi/ticket/55</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Tuesday, May 30, 2006 3:40 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI users] MPI_GATHER: missing f90 interfaces for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mixed dimensions
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looking at limitations of the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    --with-mpi-f90-size=SIZE
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            specify the types of functions in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fortran 90 MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            module, where size is one of:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; trivial (MPI-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            F90-specific functions only), small
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (trivial + all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            MPI functions without choice buffers),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; medium (small
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            + all MPI functions with one choice
</span><br>
<span class="quotelev3">&gt; &gt;&gt; buffer), large
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            (medium + all MPI functions 
</span><br>
<span class="quotelev1">&gt; with 2 choice
</span><br>
<span class="quotelev3">&gt; &gt;&gt; buffers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            but only when both buffers are the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; same type)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not sure what &quot;same type&quot; was intended to mean here, if same type
</span><br>
<span class="quotelev3">&gt; &gt;&gt; than reasonable, but if same type and dimension (and as 
</span><br>
<span class="quotelev1">&gt; implemented)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then I can't see where any generic installation, i.e. more than one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; user, could use --with-mpi-f90-size=large.  If fact I 
</span><br>
<span class="quotelev1">&gt; found one case
</span><br>
<span class="quotelev3">&gt; &gt;&gt; where a bunch of the generated interfaces are a waste of 
</span><br>
<span class="quotelev1">&gt; space and a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; really bad idea as far as I can tell.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; subroutine MPI_Gather0DI4(sendbuf, sendcount, sendtype, recvbuf,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recvcount, &amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer*4, intent(in) :: sendbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: sendcount
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: sendtype
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer*4, intent(out) :: recvbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: recvcount
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: recvtype
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end subroutine MPI_Gather0DI4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Think about it, all processes are sending data back to 
</span><br>
<span class="quotelev1">&gt; root, if each
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sends a single integer where does the second, third, fourth, etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; integer go?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The interfaces for MPI_GATHER do not include the possibility
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sendbuf is an integer and the recvbuffer is an integer array, for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; example the following does not exist but seems legal or should be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; legal (and should at the very least replace the above interface):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; subroutine MPI_Gather01DI4(sendbuf, sendcount, sendtype, recvbuf,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recvcount, &amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer*4, intent(in) :: sendbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: sendcount
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: sendtype
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer*4, dimension(:), intent(out) :: recvbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: recvcount
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: recvtype
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end subroutine MPI_Gather01DI4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, consider that there may be no reason to restrict sendbuf and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recvbuf have the same number of dimensions, but it is reasonable to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; expect sendbuf to have the same or less dimensions as recvbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (except
</span><br>
<span class="quotelev3">&gt; &gt;&gt; both being a scalar seems unreasonable).  This does complicate the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; issue from an order (N+1) problem to an order 
</span><br>
<span class="quotelev1">&gt; (N+1)*(N+2)/2 problem,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; where is N = 4 unless otherwise restricted, but should be 
</span><br>
<span class="quotelev1">&gt; doable and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; certain functions should have the 0,0 case eliminated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Testing OpenMPI 1.2a1r10111 (g95 on OS X 10.4.6), 
</span><br>
<span class="quotelev1">&gt; configured with &quot;./
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; size=large --enable-static&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; call MPI_GATHER(nn,1,MPI_INTEGER,nno,1,MPI_INTEGER,0,allmpi,ier)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Error: Generic subroutine 'mpi_gather' at (1) is not 
</span><br>
<span class="quotelev1">&gt; consistent with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a specific subroutine interface
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm doing my development on four different machines each with a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; different compiler and a different MPI library, one of those (not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI) spotted that I had forgotten ierr so it definitely was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking the interfaces but was able to handle this problem (and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; quickly too).  In my Fortran 90 experience I'm not aware 
</span><br>
<span class="quotelev1">&gt; of a better
</span><br>
<span class="quotelev3">&gt; &gt;&gt; way to handle these generic interfaces but I have not studied this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; issue closely enough.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Below is my solution for the generating scripts for MPI_Gather for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; F90 (also switched to --with-f90-max-array-dim=2).  It might be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; acceptable to reduce the combinations to just equal or one 
</span><br>
<span class="quotelev1">&gt; dimension
</span><br>
<span class="quotelev3">&gt; &gt;&gt; less (00,01,11,12,22) but I pushed the limits of my shell scripting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; abilities.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------- mpi-f90-interfaces.h.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; output_120() {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      if test &quot;$output&quot; = &quot;0&quot;; then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          return 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      fi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      procedure=$1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      rank=$2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      rank2=$3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      type=$5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      type2=$6
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      proc=&quot;$1$2$3D$4&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; subroutine ${proc}(sendbuf, sendcount, sendtype, recvbuf,  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recvcount, &amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ${type}, intent(in) :: sendbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: sendcount
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: sendtype
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ${type2}, intent(out) :: recvbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: recvcount
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: recvtype
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end subroutine ${proc}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; EOF
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; start MPI_Gather large
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for rank in $allranks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  0)  dim=''  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    for rank2 in $allranks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  0)  dim2=''  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  1)  dim2=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  2)  dim2=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  3)  dim2=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  4)  dim2=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  5)  dim2=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  6)  dim2=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  7)  dim2=', 
</span><br>
<span class="quotelev1">&gt; dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      if [ ${rank2} != &quot;0&quot; ] &amp;&amp; [ ${rank2} -ge ${rank} ]; then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      output_120 MPI_Gather ${rank} ${rank2} CH &quot;character${dim}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;character${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      output_120 MPI_Gather ${rank} ${rank2} L &quot;logical${dim}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;logical
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      for kind in $ikinds
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        output_120 MPI_Gather ${rank} ${rank2} I${kind} &quot;integer*$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {kind}${dim}&quot;  &quot;integer*${kind}${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      done
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      for kind in $rkinds
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        output_120 MPI_Gather ${rank} ${rank2} R${kind} 
</span><br>
<span class="quotelev1">&gt; &quot;real*${kind}$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {dim}&quot; &quot;real*${kind}${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      done
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      for kind in $ckinds
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        output_120 MPI_Gather ${rank} ${rank2} C${kind} &quot;complex*$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {kind}${dim}&quot;  &quot;complex*${kind}${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      done
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      fi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    done
</span><br>
<span class="quotelev3">&gt; &gt;&gt; done
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end MPI_Gather
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- mpi_gather_f90.f90.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; output() {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      procedure=$1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      rank=$2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      rank2=$3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      type=$5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      type2=$6
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      proc=&quot;$1$2$3D$4&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; subroutine ${proc}(sendbuf, sendcount, sendtype, recvbuf,  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recvcount, &amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    include &quot;mpif-common.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ${type}, intent(in) :: sendbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: sendcount
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: sendtype
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ${type2}, intent(out) :: recvbuf
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: recvcount
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: recvtype
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    call ${procedure}(sendbuf, sendcount, sendtype, recvbuf,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recvcount, &amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end subroutine ${proc}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; EOF
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for rank in $allranks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  0)  dim=''  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    for rank2 in $allranks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  0)  dim2=''  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  1)  dim2=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  2)  dim2=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  3)  dim2=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  4)  dim2=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  5)  dim2=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  6)  dim2=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      case &quot;$rank2&quot; in  7)  dim2=', 
</span><br>
<span class="quotelev1">&gt; dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      if [ ${rank2} != &quot;0&quot; ] &amp;&amp; [ ${rank2} -ge ${rank} ]; then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        output MPI_Gather ${rank} ${rank2} CH &quot;character${dim}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;character${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        output MPI_Gather ${rank} ${rank2} L 
</span><br>
<span class="quotelev1">&gt; &quot;logical${dim}&quot; &quot;logical$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        for kind in $ikinds
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          output MPI_Gather ${rank} ${rank2} I${kind}
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;integer*${kind}$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {dim}&quot;  &quot;integer*${kind}${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        done
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        for kind in $rkinds
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          output MPI_Gather ${rank} ${rank2} R${kind} &quot;real*${kind}$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {dim}&quot; &quot;real*${kind}${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        done
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        for kind in $ckinds
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          output MPI_Gather ${rank} ${rank2} C${kind}
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;complex*${kind}$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {dim}&quot;  &quot;complex*${kind}${dim2}&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        done
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      fi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    done
</span><br>
<span class="quotelev3">&gt; &gt;&gt; done
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="1353.php">Troy Telford: "[OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1351.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95Compiler"</a>
<!-- nextthread="start" -->
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
