<?
$subject_val = "Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 15:16:52 2011" -->
<!-- isoreceived="20110629191652" -->
<!-- sent="Wed, 29 Jun 2011 15:12:42 -0400" -->
<!-- isosent="20110629191242" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)" -->
<!-- id="55F2A0E2-904C-4AB5-B1CE-8367CF384E7A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1309361508.89687.YahooMailClassic_at_web125904.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 15:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16787.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16781.php">rohan nigam: "[OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16791.php">Gus Correa: "Re: [OMPI users] Problem in static linking and usage of openmpi	with icc (and gcc)"</a>
<li><strong>Reply:</strong> <a href="16791.php">Gus Correa: "Re: [OMPI users] Problem in static linking and usage of openmpi	with icc (and gcc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2011, at 11:31 AM, rohan nigam wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to statically build open mpi libraries from a server which has intel and pgi compilers installed and copy the resulting binaries to be used on another test server since I do not have intel and pgi compilers on these test servers (only gcc). First of all, please tell me if this is possible.
</span><br>
<p>I know that it is for intel.  I don't know if it is for pgi (meaning: I don't have enough experience with pgi to know).
<br>
<p><span class="quotelev1">&gt; So far these are the three different options I have tried and ended up getting the respective errors while running the mpicc or mpirun on the test server:
</span><br>
<p>It's not quite clear from your text -- it looks like you have a combination of &quot;not able to build the OMPI tree&quot; and &quot;able to build/install the OMPI tree, but then failed when tryng to use it&quot; errors.  Right?
<br>
<p><span class="quotelev1">&gt; Option 1:  Using LDFLAGS=-Bstatic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort LDFLAGS=-Bstatic --without-memory-manager --without-libnuma --enable-static --disable-shared  --prefix=/opt/openmpi/openmpi-intel --enable-mpi-f77 --enable-mpi-f90 2&gt;&amp;1 | tee configure-intel.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error on the test server:
</span><br>
<span class="quotelev1">&gt;          ld: attempted static link of dynamic object `/cm/shared/apps/torque/2.4.11/lib/libtorque.so'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [orte-clean] Error 1
</span><br>
<p>This one is pretty clearly a &quot;not able to build the OMPI tree&quot; error, assumedly on the machine with the compilers.
<br>
<p>This means that you don't have libtorque.a.  When you use -Bstatic (IIRC), you need *all* support libraries to have .a (i.e., static) versions.
<br>
<p>Alternatively, you *might* be able to just to --enable-static --disable-shared.  This will make Open MPI be fully static, but not necessarily its support libraries.  That being said, that might not suit your needs, since the compilers will have some support libraries.  See below.
<br>
<p><span class="quotelev1">&gt; Option 2: Using LDFLAGS= -static
</span><br>
<p>I'm assuming that you were able to build/install, but then failed when trying to run on the 2nd server.
<br>
<p><span class="quotelev1">&gt; Error on the test server: 
</span><br>
<span class="quotelev1">&gt;                                                  root_at_ubuntu-server2:/opt/openmpi-intel/bin# ./mpicc
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file /opt/openmpi/openmpi-intel/share/openmpi/mpicc-wrapper-data.txt
</span><br>
<p>Does this file exist on your 2nd server?  When you copy/move/whatever the OMPI installation to the 2nd server, it is easiest to put it in exactly the same location as you installed it on the 1st server.
<br>
<p><span class="quotelev1">&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev1">&gt; root_at_ubuntu-server2:/opt/openmpi-intel/bin# mpirun
</span><br>
<span class="quotelev1">&gt;                                     mpirun: error while loading shared libraries: libtorque.so.2: cannot open shared object file: No such file or directory
</span><br>
<p>Do you have the torque libraries installed on your compute nodes?
<br>
<p>Open MPI uses them for launching / monitoring jobs (i.e., it uses native torque support, which means that you need to have libtorque.so installed on the back-end nodes, or you need to have libtorque.a available when you're building OMPI so that libtorque.so isn't necessary at run-time).
<br>
<p><span class="quotelev1">&gt; Option 3: LDFLAGS=-static-intel (same as deprecated i-static option)
</span><br>
<span class="quotelev1">&gt; Error on the test server
</span><br>
<span class="quotelev1">&gt;                              mpirun: error while loading shared libraries: libtorque.so.2:   cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;                                                  root_at_ubuntu-server2:/opt/openmpi-intel/bin# ./mpicc
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file /opt/openmpi/openmpi-intel/share/openmpi/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpicc: Not found
</span><br>
<p>This looks like pretty much the same as option 2, but I think this is the option that you want (i.e., make the intel support libraries be static, let everything else be whatever it wants to be).
<br>
<p>If you fix the libtorque.so issue that I mentioned in #2, then #3 might be the best option for you.
<br>
<p><span class="quotelev1">&gt; How do I exclude torque shared libraries. Will that solve the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI, both servers (test and the original server) are 64-bit AMD opterons and the openmpi works perfectly fine on the original server on which they were built on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments or suggestions will help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rohan
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16787.php">jody: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>Previous message:</strong> <a href="16785.php">Gus Correa: "Re: [OMPI users] data types and alignment to word boundary"</a>
<li><strong>In reply to:</strong> <a href="16781.php">rohan nigam: "[OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16791.php">Gus Correa: "Re: [OMPI users] Problem in static linking and usage of openmpi	with icc (and gcc)"</a>
<li><strong>Reply:</strong> <a href="16791.php">Gus Correa: "Re: [OMPI users] Problem in static linking and usage of openmpi	with icc (and gcc)"</a>
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
