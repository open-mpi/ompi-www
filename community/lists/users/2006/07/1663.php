<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 03:03:20 2006" -->
<!-- isoreceived="20060720070320" -->
<!-- sent="Thu, 20 Jul 2006 09:03:18 +0200" -->
<!-- isosent="20060720070318" -->
<!-- name="Frank Gruellich" -->
<!-- email="frank.gruellich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SEGV in libopal during MPI_Alltoall" -->
<!-- id="44BF2AB6.508_at_megware.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.WNT.4.64.0607200251160.1980_at_bosilca" -->
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
<strong>From:</strong> Frank Gruellich (<em>frank.gruellich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 03:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1662.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1656.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; On the all-to-all collective the send and receive buffers has to be able
</span><br>
<span class="quotelev1">&gt; to contain all the information you try to send. On this particular case,
</span><br>
<span class="quotelev1">&gt; as you initialize the envio variable to a double I suppose it is defined
</span><br>
<span class="quotelev1">&gt; as a double. If it's the case then the error is that the send operation
</span><br>
<span class="quotelev1">&gt; will send more data than the amount available on the envio variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to be able to do correctly the all-to-all in your example,
</span><br>
<span class="quotelev1">&gt; make sure the envio variable has a size at least equal to:
</span><br>
<span class="quotelev1">&gt; tam * sizeof(byte) * NPROCS, where NPROCS is the number of procs available
</span><br>
<span class="quotelev1">&gt; on the mpi_comm_world communicator.
</span><br>
<p>I'm unfortunately not that Fortran guy.  Maybe the best would be to
<br>
submit the whole function at the beginning, it's neither secret nor big:
<br>
<p>module alltoall
<br>
&nbsp;&nbsp;use globales
<br>
&nbsp;&nbsp;implicit none
<br>
<p>contains
<br>
subroutine All_to_all
<br>
<p>&nbsp;&nbsp;integer,parameter :: npuntos = 24
<br>
&nbsp;&nbsp;integer,parameter :: t_max = 2**(npuntos-1)
<br>
&nbsp;&nbsp;integer siguiente,anterior,tam,rep,p_1,p_2,i,j,ndatos,rep2,o,k
<br>
&nbsp;&nbsp;double precision time1,time2,time,ov,tmin,tavg
<br>
&nbsp;&nbsp;double precision,dimension(t_max)::envio
<br>
&nbsp;&nbsp;double precision,dimension(:),allocatable::recibe
<br>
&nbsp;&nbsp;double precision,dimension(npuntos)::m_tmin,m_tavg
<br>
&nbsp;&nbsp;double precision,dimension(npuntos)::tams
<br>
<p>&nbsp;&nbsp;rep2 = 10
<br>
&nbsp;&nbsp;tag1 = 1
<br>
&nbsp;&nbsp;tag2 = 2
<br>
&nbsp;&nbsp;rep = 3
<br>
<p>&nbsp;&nbsp;allocate(recibe(t_max*nproc))
<br>
&nbsp;&nbsp;siguiente = my_id + 1
<br>
&nbsp;&nbsp;if (my_id == nproc -1) siguiente = 0
<br>
&nbsp;&nbsp;anterior = my_id - 1
<br>
&nbsp;&nbsp;if (my_id == 0) anterior = nproc- 1
<br>
<p>&nbsp;&nbsp;do i = 1,npuntos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;print *,'puntos',i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tam = 2**(i-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmin = 1e5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tavg = 0.0d0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do j = 1,rep
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;envio = 8.0d0*j
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(mpi_comm_world,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time1 = mpi_wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do k = 1,rep2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_alltoall(envio,tam,mpi_byte,recibe,tam,mpi_byte,mpi_comm_world,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(mpi_comm_world,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time2 = mpi_wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time = (time2 - time1)/(rep2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (time &lt; tmin) tmin = time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tavg = tavg + time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m_tmin(i) = tmin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m_tavg(i) = tavg/rep
<br>
&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;call mpi_barrier(mpi_comm_world,ierr)
<br>
&nbsp;&nbsp;print *,&quot;acaba&quot;
<br>
<p>&nbsp;&nbsp;if (my_id == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;open (1,file='Alltoall.dat')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write (1,*) &quot;#Prueba All to all entre todos los procesadores(&quot;,nproc,&quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write (1,*) &quot;#Precision del reloj:&quot;,mpi_wtick()*1.0d6,&quot;(muS)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do i =1,npuntos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(1,900) 2*nproc*2**(i-1),m_tmin(i),m_tavg(i)!,ov
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;close(1)
<br>
&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;900 FORMAT(I10,F14.8,F14.8)
<br>
&nbsp;&nbsp;800 FORMAT(I10,F14.8,F14.8)
<br>
end subroutine
<br>
end module
<br>
<p>Can you read this?  (Sorry, I can't.) But the size_of envio seems to be
<br>
2**32 = 8388608 doubles, isn't it?  I don't understand, why it should
<br>
depend on the number of MPI nodes, as you said.
<br>
<p>Thanks for your help.  Kind regards,
<br>
<pre>
-- 
Frank Gruellich
HPC-Techniker
Tel.:   +49 3722 528 42
Fax:    +49 3722 528 15
E-Mail: frank.gruellich_at_[hidden]
MEGWARE Computer GmbH
Vertrieb und Service
Nordstrasse 19
09247 Chemnitz/Roehrsdorf
Germany
<a href="http://www.megware.com/">http://www.megware.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1662.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1656.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
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
