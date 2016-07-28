<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 05:49:33 2009" -->
<!-- isoreceived="20090422094933" -->
<!-- sent="Wed, 22 Apr 2009 15:19:28 +0530" -->
<!-- isosent="20090422094928" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904220249i37ca3659m8e1d57ad1fb5681a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904212310s69f0f750l83e6669aa02d8e8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 05:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Previous message:</strong> <a href="9020.php">vkm: "[OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9023.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9023.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@gus
<br>
we are not able to make hpl sucessfully.
<br>
<p>i think it has to do something with blas
<br>
<p>i cannot find blas tar file on the net, i found rpm but de installation
<br>
steps is with tar file.
<br>
<p>#*locate blas* gave us the following result
<br>
<p>*[root_at_ccomp1 hpl]# locate blas
<br>
/hpl/include/hpl_blas.h
<br>
/hpl/makes/Make.blas
<br>
/hpl/src/blas
<br>
/hpl/src/blas/HPL_daxpy.c
<br>
/hpl/src/blas/HPL_dcopy.c
<br>
/hpl/src/blas/HPL_dgemm.c
<br>
/hpl/src/blas/HPL_dgemv.c
<br>
/hpl/src/blas/HPL_dger.c
<br>
/hpl/src/blas/HPL_dscal.c
<br>
/hpl/src/blas/HPL_dswap.c
<br>
/hpl/src/blas/HPL_dtrsm.c
<br>
/hpl/src/blas/HPL_dtrsv.c
<br>
/hpl/src/blas/HPL_idamax.c
<br>
/hpl/src/blas/ccomp
<br>
/hpl/src/blas/i386
<br>
/hpl/src/blas/ccomp/Make.inc
<br>
/hpl/src/blas/ccomp/Makefile
<br>
/hpl/src/blas/i386/Make.inc
<br>
/hpl/src/blas/i386/Makefile
<br>
/usr/include/boost/numeric/ublas
<br>
/usr/include/boost/numeric/ublas/banded.hpp
<br>
/usr/include/boost/numeric/ublas/blas.hpp
<br>
/usr/include/boost/numeric/ublas/detail
<br>
/usr/include/boost/numeric/ublas/exception.hpp
<br>
/usr/include/boost/numeric/ublas/expression_types.hpp
<br>
/usr/include/boost/numeric/ublas/functional.hpp
<br>
/usr/include/boost/numeric/ublas/fwd.hpp
<br>
/usr/include/boost/numeric/ublas/hermitian.hpp
<br>
/usr/include/boost/numeric/ublas/io.hpp
<br>
/usr/include/boost/numeric/ublas/lu.hpp
<br>
/usr/include/boost/numeric/ublas/matrix.hpp
<br>
/usr/include/boost/numeric/ublas/matrix_expression.hpp
<br>
/usr/include/boost/numeric/ublas/matrix_proxy.hpp
<br>
/usr/include/boost/numeric/ublas/matrix_sparse.hpp
<br>
/usr/include/boost/numeric/ublas/operation.hpp
<br>
/usr/include/boost/numeric/ublas/operation_blocked.hpp
<br>
/usr/include/boost/numeric/ublas/operation_sparse.hpp
<br>
/usr/include/boost/numeric/ublas/storage.hpp
<br>
/usr/include/boost/numeric/ublas/storage_sparse.hpp
<br>
/usr/include/boost/numeric/ublas/symmetric.hpp
<br>
/usr/include/boost/numeric/ublas/traits.hpp
<br>
/usr/include/boost/numeric/ublas/triangular.hpp
<br>
/usr/include/boost/numeric/ublas/vector.hpp
<br>
/usr/include/boost/numeric/ublas/vector_expression.hpp
<br>
/usr/include/boost/numeric/ublas/vector_of_vector.hpp
<br>
/usr/include/boost/numeric/ublas/vector_proxy.hpp
<br>
/usr/include/boost/numeric/ublas/vector_sparse.hpp
<br>
/usr/include/boost/numeric/ublas/detail/concepts.hpp
<br>
/usr/include/boost/numeric/ublas/detail/config.hpp
<br>
/usr/include/boost/numeric/ublas/detail/definitions.hpp
<br>
/usr/include/boost/numeric/ublas/detail/documentation.hpp
<br>
/usr/include/boost/numeric/ublas/detail/duff.hpp
<br>
/usr/include/boost/numeric/ublas/detail/iterator.hpp
<br>
/usr/include/boost/numeric/ublas/detail/matrix_assign.hpp
<br>
/usr/include/boost/numeric/ublas/detail/raw.hpp
<br>
/usr/include/boost/numeric/ublas/detail/returntype_deduction.hpp
<br>
/usr/include/boost/numeric/ublas/detail/temporary.hpp
<br>
/usr/include/boost/numeric/ublas/detail/vector_assign.hpp
<br>
/usr/lib/libblas.so.3
<br>
/usr/lib/libblas.so.3.1
<br>
/usr/lib/libblas.so.3.1.1
<br>
/usr/lib/openoffice.org/basis3.0/share/gallery/htmlexpo/cublast.gif
<br>
/usr/lib/openoffice.org/basis3.0/share/gallery/htmlexpo/cublast_.gif
<br>
/usr/share/backgrounds/images/tiny_blast_of_red.jpg
<br>
/usr/share/doc/blas-3.1.1
<br>
/usr/share/doc/blas-3.1.1/blasqr.ps
<br>
/usr/share/man/manl/intro_blas1.l.gz*
<br>
<p>When we try to make using the following command
<br>
*# make arch=ccomp*
<br>
**
<br>
it gives error :
<br>
*Makefile:47: Make.inc: No such file or directory
<br>
make[2]: *** No rule to make target `Make.inc'.  Stop.
<br>
make[2]: Leaving directory `/hpl/src/auxil/ccomp'
<br>
make[1]: *** [build_src] Error 2
<br>
make[1]: Leaving directory `/hpl'
<br>
make: *** [build] Error 2*
<br>
**
<br>
*ccomp* folder is created but *xhpl* file is not created
<br>
is it some prob with de config file?
<br>
<p><p><p><p>On Wed, Apr 22, 2009 at 11:40 AM, Ankush Kaul &lt;ankush.rkaul_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; i feel the above problem occured due 2 installing mpich package, now even
</span><br>
<span class="quotelev1">&gt; nomal mpi programs are not running.
</span><br>
<span class="quotelev1">&gt; What should we do? we even tried *yum remove mpich* but it says no
</span><br>
<span class="quotelev1">&gt; packages to remove.
</span><br>
<span class="quotelev1">&gt; Please Help!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   On Wed, Apr 22, 2009 at 11:34 AM, Ankush Kaul &lt;ankush.rkaul_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are facing another problem, we were tryin to install different
</span><br>
<span class="quotelev2">&gt;&gt; benchmarking packages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; now whenever we try to run *mpirun* command (which was working perfectly
</span><br>
<span class="quotelev2">&gt;&gt; before) we get this error:
</span><br>
<span class="quotelev2">&gt;&gt; *usr/local/bin/mpdroot: open failed for root's mpd conf filempdtrace
</span><br>
<span class="quotelev2">&gt;&gt; (__init__ 1190): forked process failed; status=255*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; whats the problem here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 21, 2009 at 11:45 PM, Gus Correa &lt;gus_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ankush
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ankush Kaul wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @Eugene
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they are ok but we wanted something better, which would more clearly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; show de diff in using a single pc and the cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @Prakash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i had prob with running de programs as they were compiling using mpcc n
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not mpicc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @gus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we are tryin 2 figure out de hpl config, its quite complicated,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I sent you some sketchy instructions to build HPL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on my last message to this thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I built HPL and run it here yesterday that way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you try my suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where did you get stuck?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also de locate command lists lots of confusing results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would say the list is just long, not really confusing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can  find what you need if you want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pipe the output of locate through &quot;more&quot;, and search carefully.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are talking about BLAS try &quot;locate libblas.a&quot; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;locate libgoto.a&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Those are the libraries you need, and if they are not there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you need to install one of them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Read my previous email for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope it will help you get HPL working, if you are interested on HPL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  @jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i think u are correct we may have installed openmpi without VT support,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but is there anythin we can do now???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One more thing I found this program but dont know how to run it :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cis.udel.edu/~pollock/367/manual/node35.html">http://www.cis.udel.edu/~pollock/367/manual/node35.html</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks 2 all u guys 4 putting in so much efforts to help us out.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Previous message:</strong> <a href="9020.php">vkm: "[OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9023.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9023.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
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
