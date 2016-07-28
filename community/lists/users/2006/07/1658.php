<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 01:43:09 2006" -->
<!-- isoreceived="20060720054309" -->
<!-- sent="Thu, 20 Jul 2006 13:42:41 +0800 (CST)" -->
<!-- isosent="20060720054241" -->
<!-- name="shen T.T." -->
<!-- email="life_floating_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SEGV in libopal during MPI_Alltoall" -->
<!-- id="20060720054241.58564.qmail_at_web17901.mail.tpe.yahoo.com" -->
<!-- charset="big5" -->
<!-- inreplyto="44BE7A70.3060007_at_megware.com" -->
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
<strong>From:</strong> shen T.T. (<em>life_floating_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 01:42:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1659.php">esaifu: "[OMPI users] OPEN_MPI with Intel Compiler  -regards"</a>
<li><strong>Previous message:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>In reply to:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1662.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1662.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have the same error message:&quot;forrtl: severe (174): SIGSEGV, segmentation fault occurred&quot;. I run my paralled code on single node or multi nodes, the error existes. Then i try three Intel compilers : 8.1.037, 9.0.032 and 9.1.033 , but the error still existes. But my code work correctly on Windows XP with Visual Fortran 6.6. I doubt whether the intel compiler has some bugs. I also try to solve the problem, maybe the bug is in my code.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Do you have the other compiler? Could you check the error and report it ?
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;T.T. Shen
<br>
&nbsp;&nbsp;
<br>
<p>Frank Gruellich &lt;frank.gruellich_at_[hidden]&gt; &#187;&#161;&#161;G
<br>
&nbsp;&nbsp;Hi,
<br>
<p>I'm running OFED 1.0 with OpenMPI 1.1b1-1 compiled for Intel Compiler
<br>
9.1. I get this error message during an MPI_Alltoall call:
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x1cd04fe0
<br>
[0] func:/usr/ofed/mpi/intel/openmpi-1.1b1-1/lib64/libopal.so.0 [0x2b56964acc75]
<br>
[1] func:/lib64/libpthread.so.0 [0x2b569739b140]
<br>
[2] func:/software/intel/fce/9.1.032/lib/libirc.so(__intel_new_memcpy+0x1540) [0x2b5697278cf0]
<br>
*** End of error message ***
<br>
<p>and have no idea about the problem. It arises if I exceed a specific
<br>
number (10) of MPI nodes. The error occures in this code:
<br>
<p>do i = 1,npuntos
<br>
print *,'puntos',i
<br>
tam = 2**(i-1)
<br>
tmin = 1e5
<br>
tavg = 0.0d0
<br>
do j = 1,rep
<br>
envio = 8.0d0*j
<br>
call mpi_barrier(mpi_comm_world,ierr)
<br>
time1 = mpi_wtime()
<br>
do k = 1,rep2
<br>
call mpi_alltoall(envio,tam,mpi_byte,recibe,tam,mpi_byte,mpi_comm_world,ierr)
<br>
end do
<br>
call mpi_barrier(mpi_comm_world,ierr)
<br>
time2 = mpi_wtime()
<br>
time = (time2 - time1)/(rep2)
<br>
if (time &lt; tmin) tmin = time
<br>
tavg = tavg + time
<br>
end do
<br>
m_tmin(i) = tmin
<br>
m_tavg(i) = tavg/rep
<br>
end do
<br>
<p>this code is said to be running on another system (running IBGD 1.8.x).
<br>
I already tested mpich_mlx_intel-0.9.7_mlx2.1.0-1, but get a similar
<br>
error message when using 13 nodes:
<br>
<p>forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image PC Routine Line Source
<br>
libpthread.so.0 00002B65DA39B140 Unknown Unknown Unknown
<br>
main.out 0000000000448BDB Unknown Unknown Unknown
<br>
[9] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
[6] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
9 - MPI_ALLTOALL : Unknown error
<br>
[9] [] Aborting Program!
<br>
6 - MPI_ALLTOALL : Unknown error
<br>
[6] [] Aborting Program!
<br>
[2] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
[11] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
11 - MPI_ALLTOALL : Unknown error
<br>
[11] [] Aborting Program!
<br>
2 - MPI_ALLTOALL : Unknown error
<br>
[2] [] Aborting Program!
<br>
[10] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
10 - MPI_ALLTOALL : Unknown error
<br>
[10] [] Aborting Program!
<br>
[5] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
5 - MPI_ALLTOALL : Unknown error
<br>
[5] [] Aborting Program!
<br>
[3] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
[8] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
3 - MPI_ALLTOALL : Unknown error
<br>
[3] [] Aborting Program!
<br>
8 - MPI_ALLTOALL : Unknown error
<br>
[8] [] Aborting Program!
<br>
[4] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
4 - MPI_ALLTOALL : Unknown error
<br>
[4] [] Aborting Program!
<br>
[7] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
7 - MPI_ALLTOALL : Unknown error
<br>
[7] [] Aborting Program!
<br>
[0] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
0 - MPI_ALLTOALL : Unknown error
<br>
[0] [] Aborting Program!
<br>
[1] Registration failed, file : intra_rdma_alltoall.c, line : 163
<br>
1 - MPI_ALLTOALL : Unknown error
<br>
[1] [] Aborting Program!
<br>
<p>I don't know wether this is a problem with MPI or Intel Compiler.
<br>
Please, can anybody point me in the right direction what I could have
<br>
done wrong? This is my first post (so be gentle) and at this time I'm
<br>
not very used to the verbosity of this list, so if you need any further
<br>
informations do not hesitate do request them.
<br>
<p>Thanks in advance and kind regards,
<br>
<pre>
-- 
Frank Gruellich
HPC-Techniker
Tel.: +49 3722 528 42
Fax: +49 3722 528 15
E-Mail: frank.gruellich_at_[hidden]
MEGWARE Computer GmbH
Vertrieb und Service
Nordstrasse 19
09247 Chemnitz/Roehrsdorf
Germany
<a href="http://www.megware.com/">http://www.megware.com/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 ___________________________________________________ 
 &#179;&#204;&#183;s&#170;&#169; Yahoo!&#169;_&#188;&#175;&#167;Y&#174;&#201;&#179;q&#176;T 7.0&#161;A&#167;K&#182;O&#186;&#244;&#184;&#244;&#185;q&#184;&#220;&#165;&#244;&#167;A&#165;&#180;&#161;I 
 <a href="http://messenger.yahoo.com.tw/">http://messenger.yahoo.com.tw/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1659.php">esaifu: "[OMPI users] OPEN_MPI with Intel Compiler  -regards"</a>
<li><strong>Previous message:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>In reply to:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1662.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="1662.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
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
