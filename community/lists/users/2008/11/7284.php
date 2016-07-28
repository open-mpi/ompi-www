<?
$subject_val = "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 14:08:59 2008" -->
<!-- isoreceived="20081111190859" -->
<!-- sent="Tue, 11 Nov 2008 14:08:50 -0500" -->
<!-- isosent="20081111190850" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers" -->
<!-- id="4919D842.5030505_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4919CC65.1060902_at_aem.umn.edu" -->
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
<strong>Date:</strong> 2008-11-11 14:08:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7283.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7282.php">Ray Muno: "[OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ray and list
<br>
<p>I have Intel ifort 10.1.017 on a Rocks 4.3 cluster.
<br>
The OpenMPI compiler wrappers (i.e. &quot;opal_wrapper&quot;) work fine,
<br>
and find the shared libraries (Intel or other) without a problem.
<br>
<p>My guess is that this is not an OpenMPI problem, but an Intel compiler 
<br>
environment glitch.
<br>
I wonder if your .profile/.tcshrc/.bashrc files initialize the Intel 
<br>
compiler environment properly.
<br>
I.e., &quot;source /share/apps/intel/fce/10.1.018/bin/ifortvars.csh&quot; or 
<br>
similar, to get the right
<br>
Intel environment variables inserted on
<br>
PATH, LD_LIBRARY_PATH, MANPATH. and INTEL_LICENSE_FILE.
<br>
<p>Not doing this caused trouble for me in the past.
<br>
Double or inconsistent assignment of LD_LIBRARY_PATH and PATH
<br>
(say on the ifortvars.csh and on the user login files) also caused 
<br>
conflicts.
<br>
<p>I am not sure if this needs to be done before you configure and install 
<br>
OpenMPI,
<br>
but doing it after you build OpenMPI may still be OK.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Ray Muno wrote:
&gt; We have recently installed the Intel 10,1 compiler suite on our cluster.
&gt;
&gt; I built OpenMPI (1.2.7 and 1.2.8) with
&gt;
&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort
&gt;
&gt; It configures, builds and installs.
&gt;
&gt; However, the MPI compiler drivers (mpicc, mpif90, etc) fail 
&gt; immediately with error of the sort
&gt;
&gt; mpif90: error while loading shared libraries: libimf.so: cannot open 
&gt; shared object file: No such file or directory
&gt;
&gt; I updated the LD_LIBRARY_PATH to point to the directories that contain 
&gt; the installed copies of libimf.so. (this is not something I have not 
&gt; had to do for other compiler/OpenMpi combinations)
&gt;
&gt; At that point, the program will compile but I get warnings like:
&gt;
&gt; [muno_at_titan ~]$ mpif90 test.f
&gt;
&gt; /share/apps/Intel/fce/10.1.018/lib/libimf.so: warning: warning: 
&gt; feupdateenv is not implemented and will always fail
&gt;
&gt; In a google search, I found a reference to this in the OpenMPI lists. 
&gt; When I follow the link, it is a different thread. Searching the 
&gt; OpenMPI lists from the web page does not find any matches. Strange.
&gt;
&gt; I found some references to this at some other sites using OpenMPI on 
&gt; clusters and they said to use
&gt;
&gt; -i_dynamic
&gt;
&gt; on the compile line.
&gt;
&gt; This removes the warning.
&gt;
&gt; Is there something I should be doing at OpenMPI configure time to take 
&gt; care of these issues?
&gt;
&gt; -- 
&gt; Ray Muno
&gt; University of Minnesota
&gt; Aerospace Engineering
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7283.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7282.php">Ray Muno: "[OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
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
