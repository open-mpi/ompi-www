<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 16:30:55 2006" -->
<!-- isoreceived="20060601203055" -->
<!-- sent="Thu, 1 Jun 2006 16:30:45 -0400" -->
<!-- isosent="20060601203045" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C383_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions" -->
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
<strong>Date:</strong> 2006-06-01 16:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1347.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1345.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1326.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Reply:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael --
<br>
<p>You're right again.  Thanks for keeping us honest!
<br>
<p>We clearly did not think through all the issues for the &quot;large&quot; F90
<br>
interface; I've opened ticket #55 for the issue.  I'm inclined to take
<br>
the same approach as for the other issues you discovered -- disable
<br>
&quot;large&quot; for v1.1 and push the fixes to v1.2.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/55">https://svn.open-mpi.org/trac/ompi/ticket/55</a>
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 30, 2006 3:40 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI_GATHER: missing f90 interfaces for 
</span><br>
<span class="quotelev1">&gt; mixed dimensions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at limitations of the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --with-mpi-f90-size=SIZE
</span><br>
<span class="quotelev1">&gt;                            specify the types of functions in the  
</span><br>
<span class="quotelev1">&gt; Fortran 90 MPI
</span><br>
<span class="quotelev1">&gt;                            module, where size is one of: 
</span><br>
<span class="quotelev1">&gt; trivial (MPI-2
</span><br>
<span class="quotelev1">&gt;                            F90-specific functions only), small  
</span><br>
<span class="quotelev1">&gt; (trivial + all
</span><br>
<span class="quotelev1">&gt;                            MPI functions without choice buffers),  
</span><br>
<span class="quotelev1">&gt; medium (small
</span><br>
<span class="quotelev1">&gt;                            + all MPI functions with one choice  
</span><br>
<span class="quotelev1">&gt; buffer), large
</span><br>
<span class="quotelev1">&gt;                            (medium + all MPI functions with 2 choice  
</span><br>
<span class="quotelev1">&gt; buffers,
</span><br>
<span class="quotelev1">&gt;                            but only when both buffers are the 
</span><br>
<span class="quotelev1">&gt; same type)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure what &quot;same type&quot; was intended to mean here, if same type  
</span><br>
<span class="quotelev1">&gt; than reasonable, but if same type and dimension (and as implemented)  
</span><br>
<span class="quotelev1">&gt; then I can't see where any generic installation, i.e. more than one  
</span><br>
<span class="quotelev1">&gt; user, could use --with-mpi-f90-size=large.  If fact I found one case  
</span><br>
<span class="quotelev1">&gt; where a bunch of the generated interfaces are a waste of space and a  
</span><br>
<span class="quotelev1">&gt; really bad idea as far as I can tell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Gather0DI4(sendbuf, sendcount, sendtype, recvbuf,  
</span><br>
<span class="quotelev1">&gt; recvcount, &amp;
</span><br>
<span class="quotelev1">&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev1">&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev1">&gt;    integer*4, intent(in) :: sendbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendcount
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendtype
</span><br>
<span class="quotelev1">&gt;    integer*4, intent(out) :: recvbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: recvcount
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: recvtype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Gather0DI4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think about it, all processes are sending data back to root, if each  
</span><br>
<span class="quotelev1">&gt; sends a single integer where does the second, third, fourth, etc.  
</span><br>
<span class="quotelev1">&gt; integer go?
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The interfaces for MPI_GATHER do not include the possibility 
</span><br>
<span class="quotelev1">&gt; that the  
</span><br>
<span class="quotelev1">&gt; sendbuf is an integer and the recvbuffer is an integer array, for  
</span><br>
<span class="quotelev1">&gt; example the following does not exist but seems legal or should be  
</span><br>
<span class="quotelev1">&gt; legal (and should at the very least replace the above interface):
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Gather01DI4(sendbuf, sendcount, sendtype, recvbuf,  
</span><br>
<span class="quotelev1">&gt; recvcount, &amp;
</span><br>
<span class="quotelev1">&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev1">&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev1">&gt;    integer*4, intent(in) :: sendbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendcount
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendtype
</span><br>
<span class="quotelev1">&gt;    integer*4, dimension(:), intent(out) :: recvbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: recvcount
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: recvtype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Gather01DI4
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, consider that there may be no reason to restrict sendbuf and  
</span><br>
<span class="quotelev1">&gt; recvbuf have the same number of dimensions, but it is reasonable to  
</span><br>
<span class="quotelev1">&gt; expect sendbuf to have the same or less dimensions as recvbuf 
</span><br>
<span class="quotelev1">&gt; (except  
</span><br>
<span class="quotelev1">&gt; both being a scalar seems unreasonable).  This does complicate the  
</span><br>
<span class="quotelev1">&gt; issue from an order (N+1) problem to an order (N+1)*(N+2)/2 problem,  
</span><br>
<span class="quotelev1">&gt; where is N = 4 unless otherwise restricted, but should be doable and  
</span><br>
<span class="quotelev1">&gt; certain functions should have the 0,0 case eliminated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing OpenMPI 1.2a1r10111 (g95 on OS X 10.4.6), configured with &quot;./ 
</span><br>
<span class="quotelev1">&gt; configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
</span><br>
<span class="quotelev1">&gt; size=large --enable-static&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; call MPI_GATHER(nn,1,MPI_INTEGER,nno,1,MPI_INTEGER,0,allmpi,ier)
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;            
</span><br>
<span class="quotelev1">&gt;   1
</span><br>
<span class="quotelev1">&gt; Error: Generic subroutine 'mpi_gather' at (1) is not consistent with  
</span><br>
<span class="quotelev1">&gt; a specific subroutine interface
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm doing my development on four different machines each with a  
</span><br>
<span class="quotelev1">&gt; different compiler and a different MPI library, one of those (not  
</span><br>
<span class="quotelev1">&gt; OpenMPI) spotted that I had forgotten ierr so it definitely was  
</span><br>
<span class="quotelev1">&gt; checking the interfaces but was able to handle this problem (and  
</span><br>
<span class="quotelev1">&gt; quickly too).  In my Fortran 90 experience I'm not aware of a better  
</span><br>
<span class="quotelev1">&gt; way to handle these generic interfaces but I have not studied this  
</span><br>
<span class="quotelev1">&gt; issue closely enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is my solution for the generating scripts for MPI_Gather for  
</span><br>
<span class="quotelev1">&gt; F90 (also switched to --with-f90-max-array-dim=2).  It might be  
</span><br>
<span class="quotelev1">&gt; acceptable to reduce the combinations to just equal or one dimension  
</span><br>
<span class="quotelev1">&gt; less (00,01,11,12,22) but I pushed the limits of my shell scripting  
</span><br>
<span class="quotelev1">&gt; abilities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- mpi-f90-interfaces.h.sh
</span><br>
<span class="quotelev1">&gt; #-------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; output_120() {
</span><br>
<span class="quotelev1">&gt;      if test &quot;$output&quot; = &quot;0&quot;; then
</span><br>
<span class="quotelev1">&gt;          return 0
</span><br>
<span class="quotelev1">&gt;      fi
</span><br>
<span class="quotelev1">&gt;      procedure=$1
</span><br>
<span class="quotelev1">&gt;      rank=$2
</span><br>
<span class="quotelev1">&gt;      rank2=$3
</span><br>
<span class="quotelev1">&gt;      type=$5
</span><br>
<span class="quotelev1">&gt;      type2=$6
</span><br>
<span class="quotelev1">&gt;      proc=&quot;$1$2$3D$4&quot;
</span><br>
<span class="quotelev1">&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; subroutine ${proc}(sendbuf, sendcount, sendtype, recvbuf, recvcount, &amp;
</span><br>
<span class="quotelev1">&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev1">&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev1">&gt;    ${type}, intent(in) :: sendbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendcount
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendtype
</span><br>
<span class="quotelev1">&gt;    ${type2}, intent(out) :: recvbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: recvcount
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: recvtype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine ${proc}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; start MPI_Gather large
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for rank in $allranks
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  0)  dim=''  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for rank2 in $allranks
</span><br>
<span class="quotelev1">&gt;    do
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  0)  dim2=''  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  1)  dim2=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  2)  dim2=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  3)  dim2=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  4)  dim2=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  5)  dim2=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  6)  dim2=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  7)  dim2=', dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if [ ${rank2} != &quot;0&quot; ] &amp;&amp; [ ${rank2} -ge ${rank} ]; then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      output_120 MPI_Gather ${rank} ${rank2} CH &quot;character${dim}&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;character${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;      output_120 MPI_Gather ${rank} ${rank2} L &quot;logical${dim}&quot; 
</span><br>
<span class="quotelev1">&gt; &quot;logical 
</span><br>
<span class="quotelev1">&gt; ${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;      for kind in $ikinds
</span><br>
<span class="quotelev1">&gt;      do
</span><br>
<span class="quotelev1">&gt;        output_120 MPI_Gather ${rank} ${rank2} I${kind} &quot;integer*$ 
</span><br>
<span class="quotelev1">&gt; {kind}${dim}&quot;  &quot;integer*${kind}${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;      done
</span><br>
<span class="quotelev1">&gt;      for kind in $rkinds
</span><br>
<span class="quotelev1">&gt;      do
</span><br>
<span class="quotelev1">&gt;        output_120 MPI_Gather ${rank} ${rank2} R${kind} &quot;real*${kind}$ 
</span><br>
<span class="quotelev1">&gt; {dim}&quot; &quot;real*${kind}${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;      done
</span><br>
<span class="quotelev1">&gt;      for kind in $ckinds
</span><br>
<span class="quotelev1">&gt;      do
</span><br>
<span class="quotelev1">&gt;        output_120 MPI_Gather ${rank} ${rank2} C${kind} &quot;complex*$ 
</span><br>
<span class="quotelev1">&gt; {kind}${dim}&quot;  &quot;complex*${kind}${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;      done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      fi
</span><br>
<span class="quotelev1">&gt;    done
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; end MPI_Gather
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; --- mpi_gather_f90.f90.sh
</span><br>
<span class="quotelev1">&gt; output() {
</span><br>
<span class="quotelev1">&gt;      procedure=$1
</span><br>
<span class="quotelev1">&gt;      rank=$2
</span><br>
<span class="quotelev1">&gt;      rank2=$3
</span><br>
<span class="quotelev1">&gt;      type=$5
</span><br>
<span class="quotelev1">&gt;      type2=$6
</span><br>
<span class="quotelev1">&gt;      proc=&quot;$1$2$3D$4&quot;
</span><br>
<span class="quotelev1">&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; subroutine ${proc}(sendbuf, sendcount, sendtype, recvbuf, recvcount, &amp;
</span><br>
<span class="quotelev1">&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev1">&gt;    include &quot;mpif-common.h&quot;
</span><br>
<span class="quotelev1">&gt;    ${type}, intent(in) :: sendbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendcount
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendtype
</span><br>
<span class="quotelev1">&gt;    ${type2}, intent(out) :: recvbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: recvcount
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: recvtype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt;    call ${procedure}(sendbuf, sendcount, sendtype, recvbuf, 
</span><br>
<span class="quotelev1">&gt; recvcount, &amp;
</span><br>
<span class="quotelev1">&gt;          recvtype, root, comm, ierr)
</span><br>
<span class="quotelev1">&gt; end subroutine ${proc}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for rank in $allranks
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  0)  dim=''  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;    case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for rank2 in $allranks
</span><br>
<span class="quotelev1">&gt;    do
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  0)  dim2=''  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  1)  dim2=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  2)  dim2=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  3)  dim2=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  4)  dim2=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  5)  dim2=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  6)  dim2=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;      case &quot;$rank2&quot; in  7)  dim2=', dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if [ ${rank2} != &quot;0&quot; ] &amp;&amp; [ ${rank2} -ge ${rank} ]; then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        output MPI_Gather ${rank} ${rank2} CH &quot;character${dim}&quot;  
</span><br>
<span class="quotelev1">&gt; &quot;character${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;        output MPI_Gather ${rank} ${rank2} L &quot;logical${dim}&quot; &quot;logical$ 
</span><br>
<span class="quotelev1">&gt; {dim2}&quot;
</span><br>
<span class="quotelev1">&gt;        for kind in $ikinds
</span><br>
<span class="quotelev1">&gt;        do
</span><br>
<span class="quotelev1">&gt;          output MPI_Gather ${rank} ${rank2} I${kind} 
</span><br>
<span class="quotelev1">&gt; &quot;integer*${kind}$ 
</span><br>
<span class="quotelev1">&gt; {dim}&quot;  &quot;integer*${kind}${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;        done
</span><br>
<span class="quotelev1">&gt;        for kind in $rkinds
</span><br>
<span class="quotelev1">&gt;        do
</span><br>
<span class="quotelev1">&gt;          output MPI_Gather ${rank} ${rank2} R${kind} &quot;real*${kind}$ 
</span><br>
<span class="quotelev1">&gt; {dim}&quot; &quot;real*${kind}${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;        done
</span><br>
<span class="quotelev1">&gt;        for kind in $ckinds
</span><br>
<span class="quotelev1">&gt;        do
</span><br>
<span class="quotelev1">&gt;          output MPI_Gather ${rank} ${rank2} C${kind} 
</span><br>
<span class="quotelev1">&gt; &quot;complex*${kind}$ 
</span><br>
<span class="quotelev1">&gt; {dim}&quot;  &quot;complex*${kind}${dim2}&quot;
</span><br>
<span class="quotelev1">&gt;        done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      fi
</span><br>
<span class="quotelev1">&gt;    done
</span><br>
<span class="quotelev1">&gt; done
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
<li><strong>Next message:</strong> <a href="1347.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1345.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1326.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Reply:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
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
