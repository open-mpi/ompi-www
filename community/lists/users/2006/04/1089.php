<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 18 09:49:41 2006" -->
<!-- isoreceived="20060418134941" -->
<!-- sent="Tue, 18 Apr 2006 09:49:24 -0400" -->
<!-- isosent="20060418134924" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling C++ program" -->
<!-- id="44D20C25-03CC-4DEA-8178-6850C26F1B9E_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1145365562.4444e43a5f6cf_at_mymail.tcd.ie" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-18 09:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1090.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1088.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1088.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1090.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1090.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 18, 2006, at 9:06 AM, Shekhar Tyagi wrote:
<br>
<p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; I checked with the administrator of cluster in our department and  
</span><br>
<span class="quotelev1">&gt; according to
</span><br>
<span class="quotelev1">&gt; him the MPI is of 1.2.5 version with the compilers being of PGI  
</span><br>
<span class="quotelev1">&gt; type, hope this
</span><br>
<span class="quotelev1">&gt; might help you in solving the mpiCC problem.
</span><br>
<p>In which case it is MPICH and not OpenMPI.   OpenMPI and MPICH are  
<br>
two totally separate open source MPI implementations.
<br>
<p>Michael
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting Brian Barrett &lt;brbarret_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 17, 2006, at 4:42 AM, Shekhar Tyagi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried your command but i guess its not working, there is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning and then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nothing much happens, the command window is shown below
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [styagi_at_borelli Mpi]$ mpiCC -o mathbyvec.out mathbyvec.cc -showme
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgCC-Warning-Unknown switch: -showme
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure that the mpiCC you are running is coming from Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt; The -showme flag should be supported by all wrapper compilers used by
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI, leading me to think that perhaps you're picking up the
</span><br>
<span class="quotelev2">&gt;&gt; MPICH wrapper compilers ;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1090.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1088.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1088.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1090.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1090.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
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
