<?
$subject_val = "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 15:25:49 2008" -->
<!-- isoreceived="20081111202549" -->
<!-- sent="Tue, 11 Nov 2008 15:25:40 -0500" -->
<!-- isosent="20081111202540" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers" -->
<!-- id="4919EA44.2070900_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4919DAE8.5090002_at_aem.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 15:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7293.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7291.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ray and list
<br>
<p>One solution that I also use is to compile with the &quot;-static-intel&quot; flag 
<br>
(or pass it to the MPI wrappers).
<br>
This will link *only* the Intel libraries statically,
<br>
the other shared libraries (mostly GNU) continue to be dynamically linked.
<br>
PGI compilers have a similar flag, &quot;-Bstatic_pgi&quot;.
<br>
<p>The nightmares with inconsistent LD_LIBRARY_PATH mostly go away,
<br>
as GNU shared libraries tend to be in standard places, whereas Intel and 
<br>
other
<br>
commercial compiler shared libraries are installed in exquisite directories.
<br>
The executable size overhead is also acceptable.
<br>
<p>I presume that on Linux what is really shared during execution are the 
<br>
GNU shared libraries,
<br>
not the Intel ones.
<br>
Hence the impact of linking Intel statically is likely to be small.
<br>
Anyway, somebody else may have a clearer insight on this.
<br>
<p>Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Ray Muno wrote:
&gt; Gus Correa wrote:
&gt;
&gt;&gt; Hi Ray and list
&gt;&gt;
&gt;&gt; I have Intel ifort 10.1.017 on a Rocks 4.3 cluster.
&gt;&gt; The OpenMPI compiler wrappers (i.e. &quot;opal_wrapper&quot;) work fine,
&gt;&gt; and find the shared libraries (Intel or other) without a problem.
&gt;&gt;
&gt;&gt; My guess is that this is not an OpenMPI problem, but an Intel 
&gt;&gt; compiler environment glitch.
&gt;&gt; I wonder if your .profile/.tcshrc/.bashrc files initialize the Intel 
&gt;&gt; compiler environment properly.
&gt;&gt; I.e., &quot;source /share/apps/intel/fce/10.1.018/bin/ifortvars.csh&quot; or 
&gt;&gt; similar, to get the right
&gt;&gt; Intel environment variables inserted on
&gt;&gt; PATH, LD_LIBRARY_PATH, MANPATH. and INTEL_LICENSE_FILE.
&gt;&gt;
&gt;&gt; Not doing this caused trouble for me in the past.
&gt;&gt; Double or inconsistent assignment of LD_LIBRARY_PATH and PATH
&gt;&gt; (say on the ifortvars.csh and on the user login files) also caused 
&gt;&gt; conflicts.
&gt;&gt;
&gt;&gt; I am not sure if this needs to be done before you configure and 
&gt;&gt; install OpenMPI,
&gt;&gt; but doing it after you build OpenMPI may still be OK.
&gt;&gt;
&gt;&gt; I hope this helps,
&gt;&gt; Gus Correa
&gt;&gt;
&gt;
&gt; That does help. I confirmed that what I added needs to be in the 
&gt; environment (LD_LIBRARY_PATH).  Must have missed that in the docs. I 
&gt; have now added the appropriate variables to our modules environment.
&gt;
&gt; Seems strange that OpenMPI built without these being set at all. I 
&gt; could also compile test codes with the compilers, just not with mpicc 
&gt; and mpif90.
&gt;
&gt;
&gt; -Ray Muno
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7293.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7291.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
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
