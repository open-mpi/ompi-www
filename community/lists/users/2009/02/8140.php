<?
$subject_val = "Re: [OMPI users] WRF, OpenMPI and PGI 7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 10:23:25 2009" -->
<!-- isoreceived="20090220152325" -->
<!-- sent="Fri, 20 Feb 2009 10:23:14 -0500" -->
<!-- isosent="20090220152314" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF, OpenMPI and PGI 7.2" -->
<!-- id="499ECAE2.3050905_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="499DFB2A.2090009_at_tamu.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 10:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>In reply to:</strong> <a href="8121.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Reply:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gerry
<br>
<p>I usually put configure commands (and environment variables)
<br>
on little shell scripts, which I edit to fit the combination
<br>
of hardware/compiler(s), and keep them in the build directory.
<br>
Otherwise I would forget the details next time I need to build.
<br>
<p>If Myrinet and GigE are on separate clusters,
<br>
you'll have to install OpenMPI on each one, sorry.
<br>
However, if Myrinet and GigE are available on the same cluster,
<br>
you can build a single OpenMPI,
<br>
and choose the &quot;byte transport layer (BTL)&quot;
<br>
to be Myrinet or GigE (or IB, for that matter),
<br>
and even the NICs/networks to use,
<br>
on your job submission script.
<br>
<p>Check the OpenMPI FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl-gm">http://www.open-mpi.org/faq/?category=myrinet#myri-btl-gm</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-btl">http://www.open-mpi.org/faq/?category=tcp#tcp-btl</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network">http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p><p>Gus Correa
<br>
<p><p>PS - BTW - Our old non-Rocks cluster has Myrinet-2000 (GM).
<br>
After I get the new cluster up and running and in production,
<br>
I am thinking of revamping the old cluster, and install Rocks on it.
<br>
I would love to learn from your experience with your
<br>
Rocks+Myrinet cluster, if you have the time to post a short
<br>
&quot;bullet list&quot; of &quot;do's and don'ts&quot;.
<br>
(The Rocks list may be more appropriate than the OpenMPI for this.)
<br>
<p>Last I checked Myrinet had a roll only for Rocks 5.0,
<br>
not 5.1, right?
<br>
Did you install it with on top of Rocks 5.0 or 5.1?
<br>
(For instance, my recollection of old postings on the list,
<br>
is that the Torque 5.0 roll worked with Rocks 5.1,
<br>
but it is always a risky business to mix different releases.)
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Gerry Creager wrote:
<br>
<span class="quotelev1">&gt; Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll give that a try real quick (or as quickly as the compiles can run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd not thought of this solution.  I've been context-switching too much 
</span><br>
<span class="quotelev1">&gt; lately.  I've gotta look at this for a gigabit cluster as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gerry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may need to compile a hybrid OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; using gcc for C, PGI f90 for Fortran on the OpenMPI configure script.
</span><br>
<span class="quotelev2">&gt;&gt; This should give you the required mpicc and mpif90 to do the job.
</span><br>
<span class="quotelev2">&gt;&gt; I guess this is what Elvedin meant on his message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have these hybrids for OpenMPI and MPICH2 here
</span><br>
<span class="quotelev2">&gt;&gt; (not Myrinet but GigE), and they work
</span><br>
<span class="quotelev2">&gt;&gt; fine with a WRF relative (CAM3, atmospheric climate).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Two cents from
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gerry Creager wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Elvedin,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah, I thought about that after finding a reference to this in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archives, so I redirected the path to MPI toward the gnu-compiled 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version.  It died in THIS manner:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/RSL_LITE'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -cc=gcc -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgcc-Error-Unknown switch: -cc=gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: [c_code.o] Error 1 (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Methinks the wrf configuration script and make file will need some 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tweeks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting thing: I have another system (alas, with mpich) where it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiles just fine.  I'm trying to sort this out, as on 2 systems, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with openMPI, it does odd dances before dying.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm still trying things.  I've gotta get this up both for MY research 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and to support other users.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Gerry
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Elvedin Trnjanin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WRF almost requires that you use gcc for the C/C++ part and the PGI 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran compilers, if you choose that option. I'd suggest compiling 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI in the same way as that has resolved our various issues. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have you tried that with the same result?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gerry Creager wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Howdy,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm new to this list.  I've done a little review but likely missed 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something specific to what I'm asking.  I'll keep looking but need 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to resolve this soon.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm running a Rocks cluster (centos 5), with PGI 7.2-3 compilers, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Myricom MX2 hardware and drivers, and OpenMPI1.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I installed the Myricom roll which has OpenMPI compiled with gcc.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I recently compiled the openmpi code w/ PGI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've the MPICH_F90 pointing to the right place, and we're looking 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for the right includes and libs by means of LD_LIBRARY_PATH, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I tried to run, I got the following error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `/home/gerry/WRFv3/WRFV3/external/RSL_LITE'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PGC/x86-64 Linux 7.2-3: compilation completed with warnings
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c buf_for_proc.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting identifier 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .Z0000 before '(' (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PGC-S-0082-Function returning array not allowed 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (/share/apps/openmpi-1.3-pgi/include/mpi.h: 889)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PGC-S-0043-Redefinition of symbol, MPI_Comm 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (/share/apps/openmpi-1.3-pgi/include/mpi.h: 903)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PGC/x86-64 Linux 7.2-3: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: [buf_for_proc.o] Error 2 (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note that I had modified the makefile to use PGI in place of gcc, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and thus, the PGI-compiled openMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks, Gerry
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>In reply to:</strong> <a href="8121.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Reply:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
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
