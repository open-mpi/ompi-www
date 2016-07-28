<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 18 12:06:12 2006" -->
<!-- isoreceived="20060418160612" -->
<!-- sent="Tue, 18 Apr 2006 17:06:04 +0100" -->
<!-- isosent="20060418160604" -->
<!-- name="Shekhar Tyagi" -->
<!-- email="tyagis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling C++ program" -->
<!-- id="1145376364.44450e6c3efe3_at_mymail.tcd.ie" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44D20C25-03CC-4DEA-8178-6850C26F1B9E_at_ieee.org" -->
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
<strong>From:</strong> Shekhar Tyagi (<em>tyagis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-18 12:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1091.php">John Robinson: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1089.php">Michael Kluskens: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1089.php">Michael Kluskens: "Re: [OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1091.php">John Robinson: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1091.php">John Robinson: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1092.php">Graham E Fagg: "Re: [OMPI users] Compiling C++ program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In this case then, does anybody have any idea regarding the online forum like
<br>
OPEN-mpi.org for MPICH version of MPI. Please help
<br>
Shekhar
<br>
<p><p><p>Quoting Michael Kluskens &lt;mkluskens_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 18, 2006, at 9:06 AM, Shekhar Tyagi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; I checked with the administrator of cluster in our department and
</span><br>
<span class="quotelev2">&gt; &gt; according to
</span><br>
<span class="quotelev2">&gt; &gt; him the MPI is of 1.2.5 version with the compilers being of PGI
</span><br>
<span class="quotelev2">&gt; &gt; type, hope this
</span><br>
<span class="quotelev2">&gt; &gt; might help you in solving the mpiCC problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In which case it is MPICH and not OpenMPI.   OpenMPI and MPICH are
</span><br>
<span class="quotelev1">&gt; two totally separate open source MPI implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Quoting Brian Barrett &lt;brbarret_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 17, 2006, at 4:42 AM, Shekhar Tyagi wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I tried your command but i guess its not working, there is a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; warning and then
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nothing much happens, the command window is shown below
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  [styagi_at_borelli Mpi]$ mpiCC -o mathbyvec.out mathbyvec.cc -showme
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; pgCC-Warning-Unknown switch: -showme
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are you sure that the mpiCC you are running is coming from Open MPI?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The -showme flag should be supported by all wrapper compilers used by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI, leading me to think that perhaps you're picking up the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPICH wrapper compilers ;).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="1091.php">John Robinson: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1089.php">Michael Kluskens: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1089.php">Michael Kluskens: "Re: [OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1091.php">John Robinson: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1091.php">John Robinson: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1092.php">Graham E Fagg: "Re: [OMPI users] Compiling C++ program"</a>
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
