<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 15:39:59 2006" -->
<!-- isoreceived="20060530193959" -->
<!-- sent="Tue, 30 May 2006 15:39:39 -0400" -->
<!-- isosent="20060530193939" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions" -->
<!-- id="1718C72B-EF67-4C6E-A124-C60D70781DC0_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-30 15:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1327.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support (g95) not installing"</a>
<li><strong>Previous message:</strong> <a href="1325.php">Troy Telford: "[OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1346.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1346.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at limitations of the following:
<br>
<p>&nbsp;&nbsp;&nbsp;--with-mpi-f90-size=SIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specify the types of functions in the  
<br>
Fortran 90 MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module, where size is one of: trivial (MPI-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F90-specific functions only), small  
<br>
(trivial + all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI functions without choice buffers),  
<br>
medium (small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ all MPI functions with one choice  
<br>
buffer), large
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(medium + all MPI functions with 2 choice  
<br>
buffers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but only when both buffers are the same type)
<br>
<p>Not sure what &quot;same type&quot; was intended to mean here, if same type  
<br>
than reasonable, but if same type and dimension (and as implemented)  
<br>
then I can't see where any generic installation, i.e. more than one  
<br>
user, could use --with-mpi-f90-size=large.  If fact I found one case  
<br>
where a bunch of the generated interfaces are a waste of space and a  
<br>
really bad idea as far as I can tell.
<br>
<p>------------------------------------------------------------------------ 
<br>
------------------------------------------------
<br>
subroutine MPI_Gather0DI4(sendbuf, sendcount, sendtype, recvbuf,  
<br>
recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif-common.h'
<br>
&nbsp;&nbsp;&nbsp;integer*4, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendcount
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendtype
<br>
&nbsp;&nbsp;&nbsp;integer*4, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvcount
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvtype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Gather0DI4
<br>
<p>Think about it, all processes are sending data back to root, if each  
<br>
sends a single integer where does the second, third, fourth, etc.  
<br>
integer go?
<br>
------------------------------------------------------------------------ 
<br>
------------------------------------------------
<br>
<p>The interfaces for MPI_GATHER do not include the possibility that the  
<br>
sendbuf is an integer and the recvbuffer is an integer array, for  
<br>
example the following does not exist but seems legal or should be  
<br>
legal (and should at the very least replace the above interface):
<br>
------------------------------------------------------------------------ 
<br>
------------------------------------------------
<br>
subroutine MPI_Gather01DI4(sendbuf, sendcount, sendtype, recvbuf,  
<br>
recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif-common.h'
<br>
&nbsp;&nbsp;&nbsp;integer*4, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendcount
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendtype
<br>
&nbsp;&nbsp;&nbsp;integer*4, dimension(:), intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvcount
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvtype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Gather01DI4
<br>
------------------------------------------------------------------------ 
<br>
------------------------------------------------
<br>
<p>Also, consider that there may be no reason to restrict sendbuf and  
<br>
recvbuf have the same number of dimensions, but it is reasonable to  
<br>
expect sendbuf to have the same or less dimensions as recvbuf (except  
<br>
both being a scalar seems unreasonable).  This does complicate the  
<br>
issue from an order (N+1) problem to an order (N+1)*(N+2)/2 problem,  
<br>
where is N = 4 unless otherwise restricted, but should be doable and  
<br>
certain functions should have the 0,0 case eliminated.
<br>
<p>Testing OpenMPI 1.2a1r10111 (g95 on OS X 10.4.6), configured with &quot;./ 
<br>
configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
<br>
size=large --enable-static&quot;
<br>
<p>------------
<br>
call MPI_GATHER(nn,1,MPI_INTEGER,nno,1,MPI_INTEGER,0,allmpi,ier)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;1
<br>
Error: Generic subroutine 'mpi_gather' at (1) is not consistent with  
<br>
a specific subroutine interface
<br>
----------
<br>
<p>I'm doing my development on four different machines each with a  
<br>
different compiler and a different MPI library, one of those (not  
<br>
OpenMPI) spotted that I had forgotten ierr so it definitely was  
<br>
checking the interfaces but was able to handle this problem (and  
<br>
quickly too).  In my Fortran 90 experience I'm not aware of a better  
<br>
way to handle these generic interfaces but I have not studied this  
<br>
issue closely enough.
<br>
<p>Below is my solution for the generating scripts for MPI_Gather for  
<br>
F90 (also switched to --with-f90-max-array-dim=2).  It might be  
<br>
acceptable to reduce the combinations to just equal or one dimension  
<br>
less (00,01,11,12,22) but I pushed the limits of my shell scripting  
<br>
abilities.
<br>
<p>Michael
<br>
<p>---------- mpi-f90-interfaces.h.sh
<br>
#----------------------------------------------------------------------- 
<br>
-
<br>
<p>output_120() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$output&quot; = &quot;0&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procedure=$1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank=$2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank2=$3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=$5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type2=$6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc=&quot;$1$2$3D$4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;EOF
<br>
<p>subroutine ${proc}(sendbuf, sendcount, sendtype, recvbuf, recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif-common.h'
<br>
&nbsp;&nbsp;&nbsp;${type}, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendcount
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendtype
<br>
&nbsp;&nbsp;&nbsp;${type2}, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvcount
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvtype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine ${proc}
<br>
<p>EOF
<br>
}
<br>
<p>start MPI_Gather large
<br>
<p>for rank in $allranks
<br>
do
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  0)  dim=''  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
<br>
<p>&nbsp;&nbsp;&nbsp;for rank2 in $allranks
<br>
&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  0)  dim2=''  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  1)  dim2=', dimension(:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  2)  dim2=', dimension(:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  3)  dim2=', dimension(:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  4)  dim2=', dimension(:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  5)  dim2=', dimension(:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  6)  dim2=', dimension(:,:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  7)  dim2=', dimension(:,:,:,:,:,:,:)'  ;  esac
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if [ ${rank2} != &quot;0&quot; ] &amp;&amp; [ ${rank2} -ge ${rank} ]; then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} CH &quot;character${dim}&quot;  
<br>
&quot;character${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} L &quot;logical${dim}&quot; &quot;logical 
<br>
${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $ikinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} I${kind} &quot;integer*$ 
<br>
{kind}${dim}&quot;  &quot;integer*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $rkinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} R${kind} &quot;real*${kind}$ 
<br>
{dim}&quot; &quot;real*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $ckinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} C${kind} &quot;complex*$ 
<br>
{kind}${dim}&quot;  &quot;complex*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;done
<br>
done
<br>
end MPI_Gather
<br>
----------
<br>
--- mpi_gather_f90.f90.sh
<br>
output() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procedure=$1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank=$2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank2=$3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=$5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type2=$6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc=&quot;$1$2$3D$4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;EOF
<br>
<p>subroutine ${proc}(sendbuf, sendcount, sendtype, recvbuf, recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include &quot;mpif-common.h&quot;
<br>
&nbsp;&nbsp;&nbsp;${type}, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendcount
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendtype
<br>
&nbsp;&nbsp;&nbsp;${type2}, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvcount
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvtype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
&nbsp;&nbsp;&nbsp;call ${procedure}(sendbuf, sendcount, sendtype, recvbuf, recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
end subroutine ${proc}
<br>
<p>EOF
<br>
}
<br>
<p>for rank in $allranks
<br>
do
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  0)  dim=''  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
<br>
<p>&nbsp;&nbsp;&nbsp;for rank2 in $allranks
<br>
&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  0)  dim2=''  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  1)  dim2=', dimension(:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  2)  dim2=', dimension(:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  3)  dim2=', dimension(:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  4)  dim2=', dimension(:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  5)  dim2=', dimension(:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  6)  dim2=', dimension(:,:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  7)  dim2=', dimension(:,:,:,:,:,:,:)'  ;  esac
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if [ ${rank2} != &quot;0&quot; ] &amp;&amp; [ ${rank2} -ge ${rank} ]; then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} CH &quot;character${dim}&quot;  
<br>
&quot;character${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} L &quot;logical${dim}&quot; &quot;logical$ 
<br>
{dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $ikinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} I${kind} &quot;integer*${kind}$ 
<br>
{dim}&quot;  &quot;integer*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $rkinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} R${kind} &quot;real*${kind}$ 
<br>
{dim}&quot; &quot;real*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $ckinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} C${kind} &quot;complex*${kind}$ 
<br>
{dim}&quot;  &quot;complex*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;done
<br>
done
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1327.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support (g95) not installing"</a>
<li><strong>Previous message:</strong> <a href="1325.php">Troy Telford: "[OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1346.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1346.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
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
