<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 07:33:38 2006" -->
<!-- isoreceived="20060720113338" -->
<!-- sent="Thu, 20 Jul 2006 13:35:23 +0200 (Romance Daylight Time)" -->
<!-- isosent="20060720113523" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SEGV in libopal during MPI_Alltoall" -->
<!-- id="Pine.WNT.4.64.0607201328010.1980_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44BF2AB6.508_at_megware.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 07:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1665.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>Previous message:</strong> <a href="1663.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1663.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1671.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1671.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is what I suspected. You can see that the envio array is smaller than 
<br>
it should. It was created as an array of doubles with the size t_max, when 
<br>
it should have been created as an array of double with the size t_max * 
<br>
nprocs. If you look how the recibe array is created you can notice that 
<br>
it's size if t_max * nprocs (allocate(recibe(t_max*nproc))). As on the 
<br>
all-to-all operation everybody send and receive exactly the same amount of 
<br>
data, both the send and receive array should have the same size.
<br>
<p>I propose the following fix:
<br>
<p>- instead of
<br>
<span class="quotelev1">&gt;  double precision,dimension(t_max)::envio
</span><br>
<span class="quotelev1">&gt;  double precision,dimension(:),allocatable::recibe
</span><br>
do a
<br>
<span class="quotelev1">&gt;  double precision,dimension(:),allocatable::envio
</span><br>
<span class="quotelev1">&gt;  double precision,dimension(:),allocatable::recibe
</span><br>
<p>- then, when the recibe array is created add the allocation for envio too
<br>
<span class="quotelev1">&gt;  allocate(recibe(t_max*nproc))
</span><br>
<span class="quotelev1">&gt;  allocate(envio(t_max*nproc))
</span><br>
<p>Now your program should work just fine.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Thu, 20 Jul 2006, Frank Gruellich wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On the all-to-all collective the send and receive buffers has to be able
</span><br>
<span class="quotelev2">&gt;&gt; to contain all the information you try to send. On this particular case,
</span><br>
<span class="quotelev2">&gt;&gt; as you initialize the envio variable to a double I suppose it is defined
</span><br>
<span class="quotelev2">&gt;&gt; as a double. If it's the case then the error is that the send operation
</span><br>
<span class="quotelev2">&gt;&gt; will send more data than the amount available on the envio variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to be able to do correctly the all-to-all in your example,
</span><br>
<span class="quotelev2">&gt;&gt; make sure the envio variable has a size at least equal to:
</span><br>
<span class="quotelev2">&gt;&gt; tam * sizeof(byte) * NPROCS, where NPROCS is the number of procs available
</span><br>
<span class="quotelev2">&gt;&gt; on the mpi_comm_world communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unfortunately not that Fortran guy.  Maybe the best would be to
</span><br>
<span class="quotelev1">&gt; submit the whole function at the beginning, it's neither secret nor big:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module alltoall
</span><br>
<span class="quotelev1">&gt;  use globales
</span><br>
<span class="quotelev1">&gt;  implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt; subroutine All_to_all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  integer,parameter :: npuntos = 24
</span><br>
<span class="quotelev1">&gt;  integer,parameter :: t_max = 2**(npuntos-1)
</span><br>
<span class="quotelev1">&gt;  integer siguiente,anterior,tam,rep,p_1,p_2,i,j,ndatos,rep2,o,k
</span><br>
<span class="quotelev1">&gt;  double precision time1,time2,time,ov,tmin,tavg
</span><br>
<span class="quotelev1">&gt;  double precision,dimension(t_max)::envio
</span><br>
<span class="quotelev1">&gt;  double precision,dimension(:),allocatable::recibe
</span><br>
<span class="quotelev1">&gt;  double precision,dimension(npuntos)::m_tmin,m_tavg
</span><br>
<span class="quotelev1">&gt;  double precision,dimension(npuntos)::tams
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  rep2 = 10
</span><br>
<span class="quotelev1">&gt;  tag1 = 1
</span><br>
<span class="quotelev1">&gt;  tag2 = 2
</span><br>
<span class="quotelev1">&gt;  rep = 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  allocate(recibe(t_max*nproc))
</span><br>
<span class="quotelev1">&gt;  siguiente = my_id + 1
</span><br>
<span class="quotelev1">&gt;  if (my_id == nproc -1) siguiente = 0
</span><br>
<span class="quotelev1">&gt;  anterior = my_id - 1
</span><br>
<span class="quotelev1">&gt;  if (my_id == 0) anterior = nproc- 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  do i = 1,npuntos
</span><br>
<span class="quotelev1">&gt;    print *,'puntos',i
</span><br>
<span class="quotelev1">&gt;    tam = 2**(i-1)
</span><br>
<span class="quotelev1">&gt;    tmin = 1e5
</span><br>
<span class="quotelev1">&gt;    tavg = 0.0d0
</span><br>
<span class="quotelev1">&gt;    do j = 1,rep
</span><br>
<span class="quotelev1">&gt;      envio = 8.0d0*j
</span><br>
<span class="quotelev1">&gt;      call mpi_barrier(mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;      time1 = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;      do k = 1,rep2
</span><br>
<span class="quotelev1">&gt;        call mpi_alltoall(envio,tam,mpi_byte,recibe,tam,mpi_byte,mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;      end do
</span><br>
<span class="quotelev1">&gt;      call mpi_barrier(mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;      time2 = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;      time = (time2 - time1)/(rep2)
</span><br>
<span class="quotelev1">&gt;      if (time &lt; tmin) tmin = time
</span><br>
<span class="quotelev1">&gt;      tavg = tavg + time
</span><br>
<span class="quotelev1">&gt;    end do
</span><br>
<span class="quotelev1">&gt;    m_tmin(i) = tmin
</span><br>
<span class="quotelev1">&gt;    m_tavg(i) = tavg/rep
</span><br>
<span class="quotelev1">&gt;  end do
</span><br>
<span class="quotelev1">&gt;  call mpi_barrier(mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;  print *,&quot;acaba&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (my_id == 0) then
</span><br>
<span class="quotelev1">&gt;    open (1,file='Alltoall.dat')
</span><br>
<span class="quotelev1">&gt;    write (1,*) &quot;#Prueba All to all entre todos los procesadores(&quot;,nproc,&quot;)&quot;
</span><br>
<span class="quotelev1">&gt;    write (1,*) &quot;#Precision del reloj:&quot;,mpi_wtick()*1.0d6,&quot;(muS)&quot;
</span><br>
<span class="quotelev1">&gt;    do i =1,npuntos
</span><br>
<span class="quotelev1">&gt;      write(1,900) 2*nproc*2**(i-1),m_tmin(i),m_tavg(i)!,ov
</span><br>
<span class="quotelev1">&gt;    end do
</span><br>
<span class="quotelev1">&gt;    close(1)
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<span class="quotelev1">&gt;  900 FORMAT(I10,F14.8,F14.8)
</span><br>
<span class="quotelev1">&gt;  800 FORMAT(I10,F14.8,F14.8)
</span><br>
<span class="quotelev1">&gt; end subroutine
</span><br>
<span class="quotelev1">&gt; end module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you read this?  (Sorry, I can't.) But the size_of envio seems to be
</span><br>
<span class="quotelev1">&gt; 2**32 = 8388608 doubles, isn't it?  I don't understand, why it should
</span><br>
<span class="quotelev1">&gt; depend on the number of MPI nodes, as you said.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.  Kind regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1665.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>Previous message:</strong> <a href="1663.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1663.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1671.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1671.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
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
