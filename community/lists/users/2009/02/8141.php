<?
$subject_val = "Re: [OMPI users] WRF, OpenMPI and PGI 7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 10:30:40 2009" -->
<!-- isoreceived="20090220153040" -->
<!-- sent="Fri, 20 Feb 2009 08:30:17 -0700" -->
<!-- isosent="20090220153017" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF, OpenMPI and PGI 7.2" -->
<!-- id="35EE0450-CC07-4C3D-8ABA-176BDAAD6F60_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499ECAE2.3050905_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF, OpenMPI and PGI 7.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 10:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8142.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8140.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>In reply to:</strong> <a href="8140.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that (beginning with 1.3) you can also use &quot;platform files&quot; to  
<br>
save configure and default mca params so that you build consistently.  
<br>
Check the examples in contrib/platform. Most of us developers use  
<br>
these religiously, as do our host organizations, for precisely this  
<br>
reason.
<br>
<p>I believe there should be something on the FAQ about platform files -  
<br>
if not, I'll try to add it in the next few days.
<br>
<p>If you want to contribute platform files to support some community  
<br>
with similar configurations, please send them to me - we shouldn't  
<br>
need a contributors agreement for them as there is no code involved.
<br>
<p>Ralph
<br>
<p><p>On Feb 20, 2009, at 8:23 AM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gerry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I usually put configure commands (and environment variables)
</span><br>
<span class="quotelev1">&gt; on little shell scripts, which I edit to fit the combination
</span><br>
<span class="quotelev1">&gt; of hardware/compiler(s), and keep them in the build directory.
</span><br>
<span class="quotelev1">&gt; Otherwise I would forget the details next time I need to build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If Myrinet and GigE are on separate clusters,
</span><br>
<span class="quotelev1">&gt; you'll have to install OpenMPI on each one, sorry.
</span><br>
<span class="quotelev1">&gt; However, if Myrinet and GigE are available on the same cluster,
</span><br>
<span class="quotelev1">&gt; you can build a single OpenMPI,
</span><br>
<span class="quotelev1">&gt; and choose the &quot;byte transport layer (BTL)&quot;
</span><br>
<span class="quotelev1">&gt; to be Myrinet or GigE (or IB, for that matter),
</span><br>
<span class="quotelev1">&gt; and even the NICs/networks to use,
</span><br>
<span class="quotelev1">&gt; on your job submission script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check the OpenMPI FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl-gm">http://www.open-mpi.org/faq/?category=myrinet#myri-btl-gm</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-btl">http://www.open-mpi.org/faq/?category=tcp#tcp-btl</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network">http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS - BTW - Our old non-Rocks cluster has Myrinet-2000 (GM).
</span><br>
<span class="quotelev1">&gt; After I get the new cluster up and running and in production,
</span><br>
<span class="quotelev1">&gt; I am thinking of revamping the old cluster, and install Rocks on it.
</span><br>
<span class="quotelev1">&gt; I would love to learn from your experience with your
</span><br>
<span class="quotelev1">&gt; Rocks+Myrinet cluster, if you have the time to post a short
</span><br>
<span class="quotelev1">&gt; &quot;bullet list&quot; of &quot;do's and don'ts&quot;.
</span><br>
<span class="quotelev1">&gt; (The Rocks list may be more appropriate than the OpenMPI for this.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last I checked Myrinet had a roll only for Rocks 5.0,
</span><br>
<span class="quotelev1">&gt; not 5.1, right?
</span><br>
<span class="quotelev1">&gt; Did you install it with on top of Rocks 5.0 or 5.1?
</span><br>
<span class="quotelev1">&gt; (For instance, my recollection of old postings on the list,
</span><br>
<span class="quotelev1">&gt; is that the Torque 5.0 roll worked with Rocks 5.1,
</span><br>
<span class="quotelev1">&gt; but it is always a risky business to mix different releases.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gerry Creager wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gus,
</span><br>
<span class="quotelev2">&gt;&gt; I'll give that a try real quick (or as quickly as the compiles can  
</span><br>
<span class="quotelev2">&gt;&gt; run.
</span><br>
<span class="quotelev2">&gt;&gt; I'd not thought of this solution.  I've been context-switching too  
</span><br>
<span class="quotelev2">&gt;&gt; much lately.  I've gotta look at this for a gigabit cluster as well.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gerry
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may need to compile a hybrid OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using gcc for C, PGI f90 for Fortran on the OpenMPI configure  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should give you the required mpicc and mpif90 to do the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess this is what Elvedin meant on his message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have these hybrids for OpenMPI and MPICH2 here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (not Myrinet but GigE), and they work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine with a WRF relative (CAM3, atmospheric climate).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Two cents from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gerry Creager wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Elvedin,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yeah, I thought about that after finding a reference to this in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the archives, so I redirected the path to MPI toward the gnu- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiled version.  It died in THIS manner:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RSL_LITE'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc -cc=gcc -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgcc-Error-Unknown switch: -cc=gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: [c_code.o] Error 1 (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Methinks the wrf configuration script and make file will need  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some tweeks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interesting thing: I have another system (alas, with mpich) where  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it compiles just fine.  I'm trying to sort this out, as on 2  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; systems, with openMPI, it does odd dances before dying.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm still trying things.  I've gotta get this up both for MY  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; research and to support other users.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, Gerry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Elvedin Trnjanin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WRF almost requires that you use gcc for the C/C++ part and the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PGI Fortran compilers, if you choose that option. I'd suggest  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compiling OpenMPI in the same way as that has resolved our  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; various issues. Have you tried that with the same result?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gerry Creager wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Howdy,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm new to this list.  I've done a little review but likely  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; missed something specific to what I'm asking.  I'll keep  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; looking but need to resolve this soon.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm running a Rocks cluster (centos 5), with PGI 7.2-3  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compilers, Myricom MX2 hardware and drivers, and OpenMPI1.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I installed the Myricom roll which has OpenMPI compiled with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gcc.  I recently compiled the openmpi code w/ PGI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've the MPICH_F90 pointing to the right place, and we're  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; looking for the right includes and libs by means of  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH, etc.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I tried to run, I got the following error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; RSL_LITE'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PGC/x86-64 Linux 7.2-3: compilation completed with warnings
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c buf_for_proc.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; identifier .Z0000 before '(' (/share/apps/openmpi-1.3-pgi/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; include/mpi.h: 889)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PGC-S-0082-Function returning array not allowed (/share/apps/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PGC-S-0043-Redefinition of symbol, MPI_Comm (/share/apps/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3-pgi/include/mpi.h: 903)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PGC/x86-64 Linux 7.2-3: compilation completed with severe errors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: [buf_for_proc.o] Error 2 (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Note that I had modified the makefile to use PGI in place of  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gcc, and thus, the PGI-compiled openMPI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks, Gerry
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="8142.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8140.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>In reply to:</strong> <a href="8140.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
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
