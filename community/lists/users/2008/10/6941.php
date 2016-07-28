<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 13:09:16 2008" -->
<!-- isoreceived="20081010170916" -->
<!-- sent="Fri, 10 Oct 2008 13:08:13 -0400" -->
<!-- isosent="20081010170813" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="76563841-3D8C-4121-BF52-F7632164BA24_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F072C695-C00F-4C50-B5A3-6A9C96B75E32_at_umich.edu" -->
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
<strong>Date:</strong> 2008-10-10 13:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6942.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6942.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoops didn't include the mpich2 numbers,
<br>
<p>20M mpich2  same node,
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
<p><p><p>On Oct 10, 2008, at 12:57 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Actually I had a much differnt results,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gromacs-3.3.1  one node dual core dual socket opt2218   
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.7  pgi/7.2
</span><br>
<span class="quotelev1">&gt; mpich2 gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 19M OpenMPI
</span><br>
<span class="quotelev1">&gt;     M  Mpich2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So for me OpenMPI+pgi was faster, I don't know how you got such a  
</span><br>
<span class="quotelev1">&gt; low mpich2 number.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand if you do this preprocess before you run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; grompp -sort -shuffle -np 4
</span><br>
<span class="quotelev1">&gt; mdrun -v
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With -sort and -shuffle  the OpenMPI run time went down,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12M OpenMPI + sort shuffle
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think my install of mpich2 may be bad, I have never installed it  
</span><br>
<span class="quotelev1">&gt; before,  only mpich1, OpenMPI and LAM. So take my mpich2 numbers  
</span><br>
<span class="quotelev1">&gt; with salt, Lots of salt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On that point though -sort -shuffle may be useful for you, be sure  
</span><br>
<span class="quotelev1">&gt; to understand what they do before you use them.
</span><br>
<span class="quotelev1">&gt; Read:
</span><br>
<span class="quotelev1">&gt; <a href="http://cac.engin.umich.edu/resources/software/gromacs.html">http://cac.engin.umich.edu/resources/software/gromacs.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last,  make sure that your using the single precision version of  
</span><br>
<span class="quotelev1">&gt; gromacs for both runs.  the double is about half the speed of the  
</span><br>
<span class="quotelev1">&gt; single.
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
<span class="quotelev1">&gt; On Oct 10, 2008, at 1:15 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 9, 2008 at 7:30 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Which benchmark did you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Out of 4 benchmarks I used d.dppc benchmark.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 9, 2008, at 8:06 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 9, 2008 at 5:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 8, 2008, at 5:25 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Make sure you don't use a &quot;debug&quot; build of Open MPI. If you use  
</span><br>
<span class="quotelev2">&gt;&gt; trunk, the build system detects it and turns on debug by default.  
</span><br>
<span class="quotelev2">&gt;&gt; It really kills performance. --disable-debug will remove all those  
</span><br>
<span class="quotelev2">&gt;&gt; nasty printfs from the critical path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can easily tell if you have a debug build of OMPI with the  
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info command:
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6942.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6942.php">Brian Dobbins: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
