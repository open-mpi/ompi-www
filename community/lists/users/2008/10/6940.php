<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 12:58:37 2008" -->
<!-- isoreceived="20081010165837" -->
<!-- sent="Fri, 10 Oct 2008 12:57:34 -0400" -->
<!-- isosent="20081010165734" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="F072C695-C00F-4C50-B5A3-6A9C96B75E32_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40810092215xa9bcd06l17449d4540a5d2c9_at_mail.gmail.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 12:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6941.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="6932.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6941.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6941.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6942.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually I had a much differnt results,
<br>
<p>gromacs-3.3.1  one node dual core dual socket opt2218  openmpi-1.2.7   
<br>
pgi/7.2
<br>
mpich2 gcc
<br>
<p>19M OpenMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M  Mpich2
<br>
<p>So for me OpenMPI+pgi was faster, I don't know how you got such a low  
<br>
mpich2 number.
<br>
<p>On the other hand if you do this preprocess before you run:
<br>
<p>grompp -sort -shuffle -np 4
<br>
mdrun -v
<br>
<p>With -sort and -shuffle  the OpenMPI run time went down,
<br>
<p>12M OpenMPI + sort shuffle
<br>
<p>I think my install of mpich2 may be bad, I have never installed it  
<br>
before,  only mpich1, OpenMPI and LAM. So take my mpich2 numbers with  
<br>
salt, Lots of salt.
<br>
<p>On that point though -sort -shuffle may be useful for you, be sure to  
<br>
understand what they do before you use them.
<br>
Read:
<br>
<a href="http://cac.engin.umich.edu/resources/software/gromacs.html">http://cac.engin.umich.edu/resources/software/gromacs.html</a>
<br>
<p>Last,  make sure that your using the single precision version of  
<br>
gromacs for both runs.  the double is about half the speed of the  
<br>
single.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Oct 10, 2008, at 1:15 AM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 9, 2008 at 7:30 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Which benchmark did you use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Out of 4 benchmarks I used d.dppc benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 9, 2008 at 5:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2008, at 5:25 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you don't use a &quot;debug&quot; build of Open MPI. If you use  
</span><br>
<span class="quotelev1">&gt; trunk, the build system detects it and turns on debug by default.  
</span><br>
<span class="quotelev1">&gt; It really kills performance. --disable-debug will remove all those  
</span><br>
<span class="quotelev1">&gt; nasty printfs from the critical path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can easily tell if you have a debug build of OMPI with the  
</span><br>
<span class="quotelev1">&gt; ompi_info command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$ ompi_info | grep debug
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt; shell$
</span><br>
<span class="quotelev1">&gt; Yes. It is &quot;no&quot;
</span><br>
<span class="quotelev1">&gt; $ /opt/ompi127/bin/ompi_info -all | grep debug
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tested GROMACS for a single process (mpirun -np 1):
</span><br>
<span class="quotelev1">&gt; Here are the results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI : 120m 6s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPICH2 :  67m 44s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to bulid the codes with PGI, but facing problem with  
</span><br>
<span class="quotelev1">&gt; compilation of GROMACS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You want to see &quot;no&quot; for both of those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6941.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6939.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>In reply to:</strong> <a href="6932.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6941.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6941.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6942.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
