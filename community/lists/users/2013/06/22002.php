<?
$subject_val = "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  3 08:11:08 2013" -->
<!-- isoreceived="20130603121108" -->
<!-- sent="Mon, 3 Jun 2013 14:06:47 +0200" -->
<!-- isosent="20130603120647" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set" -->
<!-- id="51AC86D7.1090904_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51A82340.3000203_at_earthlink.net" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-03 08:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Previous message:</strong> <a href="22001.php">Gustavo Correa: "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>In reply to:</strong> <a href="../../2013/05/21985.php">W Spector: "[OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22006.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Reply:</strong> <a href="22006.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>It is more or less well-known that MPI_THREAD_MULTIPLE disable the OpenFabric / 
<br>
InfiniBand networking in Open MPI:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=supported-systems#thread-support">http://www.open-mpi.org/faq/?category=supported-systems#thread-support</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/03/12345.php">http://www.open-mpi.org/community/lists/users/2010/03/12345.php</a>
<br>
<p>On our system not only the 'openib' BTL is off, but also the IPoIB denies to 
<br>
work, leading to error.
<br>
<p>But I was able to run your programm error-free when completely disabling using 
<br>
the InfiniBand: either both processes on same node (using shared memory), or use 
<br>
&quot;-mca btl ^openib -mca btl_tcp_if_exclude ib0,lo&quot; parameter to the 'mpiexec' in 
<br>
order to disable InfiniBand and IPoIB.
<br>
Well; this is disappinting due to some 20x loss of performance using Gigagbit 
<br>
Ethernet, comparing the actual InfiniBand...
<br>
<p>Note: Intel MPI support MPI_THREAD_MULTIPLE when linked with -mt_mpi (Intel and 
<br>
GCC compilers) or -lmpi_mt instead of -lmpi (other compilers). However, Intel 
<br>
MPI is not free.
<br>
<p>Best,
<br>
<p>Paul Kapinos
<br>
<p><p><p>Also, I recommend to _always_ check what kinda of threading lievel you ordered 
<br>
and what did you get:
<br>
&nbsp;&nbsp;&nbsp;print *, 'hello, world!', MPI_THREAD_MULTIPLE, provided
<br>
<p><p><p><p><p><p><p>On 05/31/13 06:12, W Spector wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI group,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following trivial program hangs on the mpi_barrier call with 1.7.1.  I am
</span><br>
<span class="quotelev1">&gt; using gfortran/gcc 4.6.3 on Ubuntu linux.  OpenMPI was built with
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple support and no other options (other than --prefix).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there additional options we should be telling configure about?  Or have we
</span><br>
<span class="quotelev1">&gt; done something very silly?  Mpich2 works just fine...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Walter Spector
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program hang
</span><br>
<span class="quotelev1">&gt;    use mpi
</span><br>
<span class="quotelev1">&gt;    implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    integer :: me, npes
</span><br>
<span class="quotelev1">&gt;    integer :: mpierr, provided
</span><br>
<span class="quotelev1">&gt;    logical :: iampe0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call mpi_init_thread (  &amp;
</span><br>
<span class="quotelev1">&gt;        MPI_THREAD_MULTIPLE,  &amp;
</span><br>
<span class="quotelev1">&gt;        provided,  &amp;
</span><br>
<span class="quotelev1">&gt;        mpierr)
</span><br>
<span class="quotelev1">&gt;    print *, 'hello, world!'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ! Hangs here with MPI_THREAD_MULTIPLE set...
</span><br>
<span class="quotelev1">&gt;    call mpi_barrier (MPI_COMM_WORLD, mpierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call mpi_comm_rank (MPI_COMM_WORLD, me, mpierr)
</span><br>
<span class="quotelev1">&gt;    iampe0 = me == 0
</span><br>
<span class="quotelev1">&gt;    call mpi_comm_size (MPI_COMM_WORLD, npes, mpierr)
</span><br>
<span class="quotelev1">&gt;    print *, 'pe:', me, ', total comm size:', npes
</span><br>
<span class="quotelev1">&gt;    print *, 'I am ', trim (merge ('PE 0    ', 'not PE 0', iampe0))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call mpi_finalize (mpierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="../../att-22002/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22003.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Previous message:</strong> <a href="22001.php">Gustavo Correa: "Re: [OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>In reply to:</strong> <a href="../../2013/05/21985.php">W Spector: "[OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22006.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Reply:</strong> <a href="22006.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
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
