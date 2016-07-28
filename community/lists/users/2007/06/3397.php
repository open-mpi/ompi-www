<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 11:42:52 2007" -->
<!-- isoreceived="20070607154252" -->
<!-- sent="Thu, 7 Jun 2007 11:42:42 -0400" -->
<!-- isosent="20070607154242" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886" -->
<!-- id="EAF091C2-4534-4E0F-A689-FAA045BB1593_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6DB5216C-A47D-46F5-8122-C84AC0604900_at_rpi.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 11:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3398.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Previous message:</strong> <a href="3396.php">Charles Williams: "[OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<li><strong>In reply to:</strong> <a href="3396.php">Charles Williams: "[OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it is the correct approach.  This code was just changed and then  
<br>
fixed in the immediate past (yesterday? or perhaps the day before?),  
<br>
and the fix was exactly as you described.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/14939">https://svn.open-mpi.org/trac/ompi/changeset/14939</a>
<br>
<p><p>On Jun 7, 2007, at 11:26 AM, Charles Williams wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been using openmpi-1.1.5 with no problems, but I decided to  
</span><br>
<span class="quotelev1">&gt; move up to version 1.2 yesterday.  I am working with the  
</span><br>
<span class="quotelev1">&gt; developers' version of PETSc, so I attempted to configure it using  
</span><br>
<span class="quotelev1">&gt; the newly-installed open-mpi.  When I tried this, though, I ran  
</span><br>
<span class="quotelev1">&gt; into the following problem (from PETsc's configure.log):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Possible ERROR while running preprocessor: In file included from / 
</span><br>
<span class="quotelev1">&gt; Users/willic3/
</span><br>
<span class="quotelev1">&gt; geoframe/tools/openmpi-debug/include/mpi.h:1783,
</span><br>
<span class="quotelev1">&gt;                  from /Users/willic3/geoframe/tools/petsc-dev-new/ 
</span><br>
<span class="quotelev1">&gt; include/petsc.
</span><br>
<span class="quotelev1">&gt; h:138,
</span><br>
<span class="quotelev1">&gt;                  from /Users/willic3/geoframe/tools/petsc-dev-new/ 
</span><br>
<span class="quotelev1">&gt; src/dm/mesh/si
</span><br>
<span class="quotelev1">&gt; eve/ALE.hh:4,
</span><br>
<span class="quotelev1">&gt;                  from /Users/willic3/geoframe/tools/petsc-dev-new/ 
</span><br>
<span class="quotelev1">&gt; src/dm/mesh/si
</span><br>
<span class="quotelev1">&gt; eve/Sifter.hh:15,
</span><br>
<span class="quotelev1">&gt;                  from /Users/willic3/geoframe/tools/petsc-dev-new/ 
</span><br>
<span class="quotelev1">&gt; src/dm/mesh/si
</span><br>
<span class="quotelev1">&gt; eve/Sieve.hh:12,
</span><br>
<span class="quotelev1">&gt;                  from /Users/willic3/geoframe/tools/petsc-dev-new/ 
</span><br>
<span class="quotelev1">&gt; src/dm/mesh/si
</span><br>
<span class="quotelev1">&gt; eve/Topology.hh:5,
</span><br>
<span class="quotelev1">&gt;                  from /Users/willic3/geoframe/tools/petsc-dev-new/ 
</span><br>
<span class="quotelev1">&gt; src/dm/mesh/si
</span><br>
<span class="quotelev1">&gt; eve/SectionCompletion.hh:5,
</span><br>
<span class="quotelev1">&gt;                  from /Users/willic3/geoframe/tools/petsc-dev-new/ 
</span><br>
<span class="quotelev1">&gt; src/dm/mesh/si
</span><br>
<span class="quotelev1">&gt; eve/Numbering.hh:5,
</span><br>
<span class="quotelev1">&gt;                  from /Users/willic3/geoframe/tools/petsc-dev-new/ 
</span><br>
<span class="quotelev1">&gt; src/dm/mesh/si
</span><br>
<span class="quotelev1">&gt; eve/Mesh.hh:5,
</span><br>
<span class="quotelev1">&gt;                  from conftest.cc:3:
</span><br>
<span class="quotelev1">&gt; /Users/willic3/geoframe/tools/openmpi-debug/include/openmpi/ompi/ 
</span><br>
<span class="quotelev1">&gt; mpi/cxx/mpicxx.
</span><br>
<span class="quotelev1">&gt; h:162:36: error: ompi/mpi/cxx/constants.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; /Users/willic3/geoframe/tools/openmpi-debug/include/openmpi/ompi/ 
</span><br>
<span class="quotelev1">&gt; mpi/cxx/mpicxx.
</span><br>
<span class="quotelev1">&gt; h:163:36: error: ompi/mpi/cxx/functions.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; /Users/willic3/geoframe/tools/openmpi-debug/include/openmpi/ompi/ 
</span><br>
<span class="quotelev1">&gt; mpi/cxx/mpicxx.
</span><br>
<span class="quotelev1">&gt; h:164:35: error: ompi/mpi/cxx/datatype.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; ret = 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I have for my mpicxx:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx --show
</span><br>
<span class="quotelev1">&gt; g++ -D_REENTRANT -I/Users/willic3/geoframe/tools/openmpi-debug/ 
</span><br>
<span class="quotelev1">&gt; include -g -mcpu=G5 -Wl,-u,_munmap -Wl,-multiply_defined,suppress - 
</span><br>
<span class="quotelev1">&gt; L/Users/willic3/geoframe/tools/openmpi-debug/lib -lmpi_cxx -lmpi - 
</span><br>
<span class="quotelev1">&gt; lopen-rte -lopen-pal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can make a change to mpicxx.h that fixes the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff mpicxx-orig.h mpicxx.h
</span><br>
<span class="quotelev1">&gt; 162,164c162,164
</span><br>
<span class="quotelev1">&gt; &lt; #include &quot;ompi/mpi/cxx/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; &lt; #include &quot;ompi/mpi/cxx/functions.h&quot;
</span><br>
<span class="quotelev1">&gt; &lt; #include &quot;ompi/mpi/cxx/datatype.h&quot;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;openmpi/ompi/mpi/cxx/constants.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;openmpi/ompi/mpi/cxx/functions.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;openmpi/ompi/mpi/cxx/datatype.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if this is the correct approach, though.  Are the  
</span><br>
<span class="quotelev1">&gt; paths actually incorrect or have I configured open-mpi incorrectly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles A. Williams
</span><br>
<span class="quotelev1">&gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev1">&gt; Science Center, 2C01B
</span><br>
<span class="quotelev1">&gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev1">&gt; Troy, NY  12180
</span><br>
<span class="quotelev1">&gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev1">&gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev1">&gt; e-mail:    willic3_at_[hidden]
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3398.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Previous message:</strong> <a href="3396.php">Charles Williams: "[OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<li><strong>In reply to:</strong> <a href="3396.php">Charles Williams: "[OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
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
