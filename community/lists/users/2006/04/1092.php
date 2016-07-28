<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 18 12:15:09 2006" -->
<!-- isoreceived="20060418161509" -->
<!-- sent="Tue, 18 Apr 2006 12:15:05 -0400 (EDT)" -->
<!-- isosent="20060418161505" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling C++ program" -->
<!-- id="Pine.GSO.4.62.0604181213490.24840_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1145376364.44450e6c3efe3_at_mymail.tcd.ie" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-18 12:15:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1093.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Previous message:</strong> <a href="1091.php">John Robinson: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1090.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
&nbsp;&nbsp;try <a href="http://www-unix.mcs.anl.gov/mpi/mpich1/">http://www-unix.mcs.anl.gov/mpi/mpich1/</a>
<br>
or more probably (for mpich2) <a href="http://www-unix.mcs.anl.gov/mpi/mpich/">http://www-unix.mcs.anl.gov/mpi/mpich/</a>
<br>
as mpich 1.x is not really supported anymore.
<br>
<p>G.
<br>
On Tue, 18 Apr 2006, Shekhar Tyagi wrote:
<br>
<p><span class="quotelev1">&gt; In this case then, does anybody have any idea regarding the online forum like
</span><br>
<span class="quotelev1">&gt; OPEN-mpi.org for MPICH version of MPI. Please help
</span><br>
<span class="quotelev1">&gt; Shekhar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting Michael Kluskens &lt;mkluskens_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 18, 2006, at 9:06 AM, Shekhar Tyagi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked with the administrator of cluster in our department and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; according to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; him the MPI is of 1.2.5 version with the compilers being of PGI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type, hope this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might help you in solving the mpiCC problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In which case it is MPICH and not OpenMPI.   OpenMPI and MPICH are
</span><br>
<span class="quotelev2">&gt;&gt; two totally separate open source MPI implementations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quoting Brian Barrett &lt;brbarret_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 17, 2006, at 4:42 AM, Shekhar Tyagi wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried your command but i guess its not working, there is a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; warning and then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nothing much happens, the command window is shown below
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  [styagi_at_borelli Mpi]$ mpiCC -o mathbyvec.out mathbyvec.cc -showme
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pgCC-Warning-Unknown switch: -showme
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you sure that the mpiCC you are running is coming from Open MPI?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The -showme flag should be supported by all wrapper compilers used by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI, leading me to think that perhaps you're picking up the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH wrapper compilers ;).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1093.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Previous message:</strong> <a href="1091.php">John Robinson: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1090.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
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
