<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 01:15:41 2008" -->
<!-- isoreceived="20081010051541" -->
<!-- sent="Fri, 10 Oct 2008 10:45:37 +0530" -->
<!-- isosent="20081010051537" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="cb60cbc40810092215xa9bcd06l17449d4540a5d2c9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="38C8C408-C1BE-42C4-8DD0-0138117CAD7F_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 01:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6933.php">Massimo Cafaro: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Previous message:</strong> <a href="6931.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>In reply to:</strong> <a href="6919.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 9, 2008 at 7:30 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Which benchmark did you use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Out of 4 benchmarks I used d.dppc benchmark.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 9, 2008, at 8:06 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 9, 2008 at 5:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 8, 2008, at 5:25 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Make sure you don't use a &quot;debug&quot; build of Open MPI. If you use trunk, the
</span><br>
<span class="quotelev2">&gt;&gt; build system detects it and turns on debug by default. It really kills
</span><br>
<span class="quotelev2">&gt;&gt; performance. --disable-debug will remove all those nasty printfs from the
</span><br>
<span class="quotelev2">&gt;&gt; critical path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can easily tell if you have a debug build of OMPI with the ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shell$ ompi_info | grep debug
</span><br>
<span class="quotelev2">&gt;&gt;  Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt; shell$
</span><br>
<span class="quotelev2">&gt;&gt; Yes. It is &quot;no&quot;
</span><br>
<span class="quotelev2">&gt;&gt; $ /opt/ompi127/bin/ompi_info -all | grep debug
</span><br>
<span class="quotelev2">&gt;&gt;  Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tested GROMACS for a single process (mpirun -np 1):
</span><br>
<span class="quotelev2">&gt;&gt; Here are the results:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI : 120m 6s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 :  67m 44s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to bulid the codes with PGI, but facing problem with
</span><br>
<span class="quotelev2">&gt;&gt; compilation of GROMACS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You want to see &quot;no&quot; for both of those.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6932/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6933.php">Massimo Cafaro: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Previous message:</strong> <a href="6931.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>In reply to:</strong> <a href="6919.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
