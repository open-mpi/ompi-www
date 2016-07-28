<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 24 14:07:02 2006" -->
<!-- isoreceived="20061024180702" -->
<!-- sent="Tue, 24 Oct 2006 14:06:47 -0400" -->
<!-- isosent="20061024180647" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions" -->
<!-- id="8B7D7CCA-E1C5-4613-B293-87AB35FAC57E_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-24 14:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2046.php">Katherine Holcomb: "[OMPI users] Starting on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="2044.php">Tony Ladd: "[OMPI users] Dual Gigabit Ethernet Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1346.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1346.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a reminder about an issue I bought up back at the end of May  
<br>
2006 &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/55">https://svn.open-mpi.org/trac/ompi/ticket/55</a>&gt; and the solution  
<br>
was to disable with-mpi-f90-size=large till 1.2.
<br>
<p>Testing 1.3a1r12274 and I see that no progress has been made on this  
<br>
even though I submited the precise changes needed to expand large for  
<br>
MPI_Gather to handle reasonable coding practices.  I'm sure other MPI  
<br>
routines are affected by this and the solution is not difficult.
<br>
<p>Now I could manually repatch 1.3 every week but it would be better  
<br>
for everyone if I was not the only Fortran MPI programmer that could  
<br>
use with-mpi-f90-size=large and have arrays in MPI_Gather that are of  
<br>
different dimensions.
<br>
<p>Michael
<br>
<p><p>Details below (edited)
<br>
--------
<br>
<p>Look at limitations of the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-f90-size=large
<br>
(medium + all MPI functions with 2 choice buffers, but only when both  
<br>
buffers are the same type)
<br>
<p>Not sure what &quot;same type&quot; was intended to mean here, but same  
<br>
dimension is not a good idea and is what is currently implemented.
<br>
<p>------------------------------------------------------------------------
<br>
subroutine MPI_Gather0DI4(sendbuf, sendcount, sendtype, recvbuf,
<br>
recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif-common.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer*4, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendcount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendtype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer*4, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvcount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvtype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
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
subroutine MPI_Gather01DI4(sendbuf, sendcount, sendtype, recvbuf,
<br>
recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif-common.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer*4, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendcount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendtype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer*4, dimension(:), intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvcount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvtype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Gather01DI4
<br>
------------------------------------------------------------------------
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
<p>----------
<br>
<p>Below is my solution for the generating scripts for MPI_Gather for  
<br>
F90).  It might be acceptable and reasonable to reduce the  
<br>
combinations to just equal or one dimension less (00,01,11,12,22).
<br>
<p>Michael
<br>
<p>---------- mpi-f90-interfaces.h.sh
<br>
#-----------------------------------------------------------------------
<br>
<p>output_120() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$output&quot; = &quot;0&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procedure=$1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank=$2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank2=$3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=$5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type2=$6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc=&quot;$1$2$3D$4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;EOF
<br>
<p>subroutine ${proc}(sendbuf, sendcount, sendtype, recvbuf, recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif-common.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;${type}, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendcount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendtype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;${type2}, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvcount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvtype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
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
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  0)  dim=''  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for rank2 in $allranks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  0)  dim2=''  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  1)  dim2=', dimension(:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  2)  dim2=', dimension(:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  3)  dim2=', dimension(:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  4)  dim2=', dimension(:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  5)  dim2=', dimension(:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  6)  dim2=', dimension(:,:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  7)  dim2=', dimension(:,:,:,:,:,:,:)'  ;  esac
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if [ ${rank2} != &quot;0&quot; ] &amp;&amp; [ ${rank2} -ge ${rank} ]; then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} CH &quot;character${dim}&quot;
<br>
&quot;character${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} L &quot;logical${dim}&quot; &quot;logical
<br>
${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $ikinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} I${kind} &quot;integer*$
<br>
{kind}${dim}&quot;  &quot;integer*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $rkinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} R${kind} &quot;real*${kind}$
<br>
{dim}&quot; &quot;real*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $ckinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output_120 MPI_Gather ${rank} ${rank2} C${kind} &quot;complex*$
<br>
{kind}${dim}&quot;  &quot;complex*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;done
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procedure=$1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank=$2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank2=$3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=$5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type2=$6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc=&quot;$1$2$3D$4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;EOF
<br>
<p>subroutine ${proc}(sendbuf, sendcount, sendtype, recvbuf, recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;include &quot;mpif-common.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;${type}, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendcount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendtype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;${type2}, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvcount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: recvtype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call ${procedure}(sendbuf, sendcount, sendtype, recvbuf,  
<br>
recvcount, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvtype, root, comm, ierr)
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
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  0)  dim=''  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for rank2 in $allranks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  0)  dim2=''  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  1)  dim2=', dimension(:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  2)  dim2=', dimension(:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  3)  dim2=', dimension(:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  4)  dim2=', dimension(:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  5)  dim2=', dimension(:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  6)  dim2=', dimension(:,:,:,:,:,:)'  ;  esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$rank2&quot; in  7)  dim2=', dimension(:,:,:,:,:,:,:)'  ;  esac
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if [ ${rank2} != &quot;0&quot; ] &amp;&amp; [ ${rank2} -ge ${rank} ]; then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} CH &quot;character${dim}&quot;
<br>
&quot;character${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} L &quot;logical${dim}&quot; &quot;logical$
<br>
{dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $ikinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} I${kind} &quot;integer*${kind}$
<br>
{dim}&quot;  &quot;integer*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $rkinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} R${kind} &quot;real*${kind}$
<br>
{dim}&quot; &quot;real*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for kind in $ckinds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output MPI_Gather ${rank} ${rank2} C${kind} &quot;complex*${kind}$
<br>
{dim}&quot;  &quot;complex*${kind}${dim2}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
done
<br>
<p>_______________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2046.php">Katherine Holcomb: "[OMPI users] Starting on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="2044.php">Tony Ladd: "[OMPI users] Dual Gigabit Ethernet Support"</a>
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
