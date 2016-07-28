<?
$subject_val = "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 11:53:19 2015" -->
<!-- isoreceived="20150306165319" -->
<!-- sent="Fri, 6 Mar 2015 16:52:58 +0000" -->
<!-- isosent="20150306165258" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015" -->
<!-- id="CAAbhqc4PEJtRw1BYvzqvR2bwduG+En=ZqDsDXERDgYQXhBxm8Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADTPv6EKiy9sbt9dGPTbbUZFabz+Rn5np1S9_WA6VzQzAjs-Kg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 11:52:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26438.php">Irena Johnson: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>In reply to:</strong> <a href="26438.php">Irena Johnson: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26442.php">Aurélien Bouteiller: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I said, BLACS is shipped with scalapack since version 2.0.0.
<br>
Do not expect the scalapack FAQ to be updated, instead download scalapack
<br>
2.0.2 and read the README file :)
<br>
<p>2015-03-06 16:37 GMT+00:00 Irena Johnson &lt;ijohnson_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi, thank you for your quick response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am puzzled because Scalapack requires BLACS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;When you install ScaLAPACK, the installation assumes that the user has
</span><br>
<span class="quotelev1">&gt; available a low-level message passing layer (like MPI, PVM, or a native
</span><br>
<span class="quotelev1">&gt; message-passing library), a BLACS library (MPIBLACS or PVMBLACS, etc), and
</span><br>
<span class="quotelev1">&gt; a BLAS library. If any of these required components is not available, then
</span><br>
<span class="quotelev1">&gt; the user must build the needed component before proceeding with the
</span><br>
<span class="quotelev1">&gt; ScaLAPACK installation.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 6, 2015 at 9:36 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you plan to use BLACS for anything else than scalapack?
</span><br>
<span class="quotelev2">&gt;&gt; Else I would highly recommend you to just compile scalapack 2.0.2 which
</span><br>
<span class="quotelev2">&gt;&gt; has BLACS shipped with it :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-03-06 15:31 GMT+01:00 Irena Johnson &lt;ijohnson_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to build BLACS for openmpi-1.8.4  and intel/2015.u1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The compilation was successful, but I am getting the following error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when building the examples:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( cd TESTING ; make  )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory `/l/sunfire28/ijohnson/BLACS/TESTING'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif77   -o /pfs/tmp/ijohnson/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacstest.o btprim_MPI.o tools.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacs_MPI-LINUX-0.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacstest.o: In function `MAIN__':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacstest.f:(.text+0x8e): undefined reference to `blacs_pinfo_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacstest.o: In function `runtests_':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacstest.f:(.text+0x1236): undefined reference to `blacs_pinfo_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacstest.o: In function `auxtest_':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacstest.f:(.text+0x7cd9): undefined reference to `blacs_pinfo_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacstest.f:(.text+0xb28b): undefined reference to `blacs_pinfo_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a(Cblacs_pinfo.o):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function `Cblacs_pinfo':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacs_pinfo_.c:(.text+0x73): undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `bi_f77_get_constants__'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blacs_pinfo_.c:(.text+0xaa): undefined reference to `bi_f77_init__'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [/pfs/tmp/ijohnson/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/l/sunfire28/ijohnson/BLACS/TESTING'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [tester] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have attached Bmake.inc and log.make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please advise. Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Irena
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26436.php">http://www.open-mpi.org/community/lists/users/2015/03/26436.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26437.php">http://www.open-mpi.org/community/lists/users/2015/03/26437.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Irena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26438.php">http://www.open-mpi.org/community/lists/users/2015/03/26438.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26438.php">Irena Johnson: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>In reply to:</strong> <a href="26438.php">Irena Johnson: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26442.php">Aurélien Bouteiller: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
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
