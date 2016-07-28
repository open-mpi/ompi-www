<?
$subject_val = "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 11:37:31 2015" -->
<!-- isoreceived="20150306163731" -->
<!-- sent="Fri, 6 Mar 2015 11:37:20 -0500" -->
<!-- isosent="20150306163720" -->
<!-- name="Irena Johnson" -->
<!-- email="ijohnson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015" -->
<!-- id="CADTPv6EKiy9sbt9dGPTbbUZFabz+Rn5np1S9_WA6VzQzAjs-Kg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc7XDMTFhF+tsTttW29V-26AR3zwe2ga1nPsZWhDBu0rCg_at_mail.gmail.com" -->
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
<strong>From:</strong> Irena Johnson (<em>ijohnson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 11:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26439.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Previous message:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>In reply to:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26439.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Reply:</strong> <a href="26439.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, thank you for your quick response.
<br>
<p>I am puzzled because Scalapack requires BLACS
<br>
<p>&quot;When you install ScaLAPACK, the installation assumes that the user has
<br>
available a low-level message passing layer (like MPI, PVM, or a native
<br>
message-passing library), a BLACS library (MPIBLACS or PVMBLACS, etc), and
<br>
a BLAS library. If any of these required components is not available, then
<br>
the user must build the needed component before proceeding with the
<br>
ScaLAPACK installation.&quot;
<br>
<p>Thank you,
<br>
<p>On Fri, Mar 6, 2015 at 9:36 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Do you plan to use BLACS for anything else than scalapack?
</span><br>
<span class="quotelev1">&gt; Else I would highly recommend you to just compile scalapack 2.0.2 which
</span><br>
<span class="quotelev1">&gt; has BLACS shipped with it :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-03-06 15:31 GMT+01:00 Irena Johnson &lt;ijohnson_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build BLACS for openmpi-1.8.4  and intel/2015.u1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The compilation was successful, but I am getting the following error when
</span><br>
<span class="quotelev2">&gt;&gt; building the examples:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ( cd TESTING ; make  )
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/l/sunfire28/ijohnson/BLACS/TESTING'
</span><br>
<span class="quotelev2">&gt;&gt; mpif77   -o /pfs/tmp/ijohnson/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0
</span><br>
<span class="quotelev2">&gt;&gt; blacstest.o btprim_MPI.o tools.o
</span><br>
<span class="quotelev2">&gt;&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
</span><br>
<span class="quotelev2">&gt;&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacs_MPI-LINUX-0.a
</span><br>
<span class="quotelev2">&gt;&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
</span><br>
<span class="quotelev2">&gt;&gt; blacstest.o: In function `MAIN__':
</span><br>
<span class="quotelev2">&gt;&gt; blacstest.f:(.text+0x8e): undefined reference to `blacs_pinfo_'
</span><br>
<span class="quotelev2">&gt;&gt; blacstest.o: In function `runtests_':
</span><br>
<span class="quotelev2">&gt;&gt; blacstest.f:(.text+0x1236): undefined reference to `blacs_pinfo_'
</span><br>
<span class="quotelev2">&gt;&gt; blacstest.o: In function `auxtest_':
</span><br>
<span class="quotelev2">&gt;&gt; blacstest.f:(.text+0x7cd9): undefined reference to `blacs_pinfo_'
</span><br>
<span class="quotelev2">&gt;&gt; blacstest.f:(.text+0xb28b): undefined reference to `blacs_pinfo_'
</span><br>
<span class="quotelev2">&gt;&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a(Cblacs_pinfo.o):
</span><br>
<span class="quotelev2">&gt;&gt; In function `Cblacs_pinfo':
</span><br>
<span class="quotelev2">&gt;&gt; blacs_pinfo_.c:(.text+0x73): undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `bi_f77_get_constants__'
</span><br>
<span class="quotelev2">&gt;&gt; blacs_pinfo_.c:(.text+0xaa): undefined reference to `bi_f77_init__'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [/pfs/tmp/ijohnson/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0]
</span><br>
<span class="quotelev2">&gt;&gt; Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/l/sunfire28/ijohnson/BLACS/TESTING'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [tester] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have attached Bmake.inc and log.make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please advise. Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Irena
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26436.php">http://www.open-mpi.org/community/lists/users/2015/03/26436.php</a>
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
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26437.php">http://www.open-mpi.org/community/lists/users/2015/03/26437.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Irena
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26439.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Previous message:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>In reply to:</strong> <a href="26437.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26439.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Reply:</strong> <a href="26439.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
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
