<?
$subject_val = "Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 18 14:00:13 2012" -->
<!-- isoreceived="20120518180013" -->
<!-- sent="Fri, 18 May 2012 14:00:08 -0400" -->
<!-- isosent="20120518180008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?" -->
<!-- id="5FE493AB-47E1-4E12-87C1-175946AC177E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1337363334.79689.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-18 14:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19311.php">Sergiy Bubin: "[OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Previous message:</strong> <a href="19309.php">devendra rai: "Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?"</a>
<li><strong>In reply to:</strong> <a href="19309.php">devendra rai: "Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've seen this happen when you build on a networked filesystem and the time is not well synced between the machine that you're building on and the network filesystem server.  Open MPI's build system relies on precise timestamps and make dependency rules; they can go completely awry if the timestamps are off.
<br>
<p><p>On May 18, 2012, at 1:48 PM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nevermind, after a couple of fresh install attempts, I got the build to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems like building on the cluster machines may fail, but I am not sure why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra Rai
</span><br>
<span class="quotelev1">&gt; From: devendra rai &lt;dev641_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 18 May 2012, 12:59
</span><br>
<span class="quotelev1">&gt; Subject: Make OpenMPI-1.6 fails: Missing files?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to build OpenMPI-1.6. The ./config part went fine, however the make fails telling me that some file is missing from orte/ folder. Something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte/mca/iof/Makefile.am:41:   `orte/mca/iof/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/notifier/Makefile.am:32: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/odls/Makefile.am:32: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/odls/base/Makefile.am:25: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/odls/Makefile.am:39:   `orte/mca/odls/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/oob/Makefile.am:31: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/oob/base/Makefile.am:25: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/oob/Makefile.am:38:   `orte/mca/oob/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/Makefile.am:32: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/base/Makefile.am:28: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/Makefile.am:39:   `orte/mca/plm/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/Makefile.am:32: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/base/Makefile.am:27: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/Makefile.am:39:   `orte/mca/ras/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/rmaps/Makefile.am:31: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/rmaps/base/Makefile.am:26: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/rmaps/Makefile.am:38:   `orte/mca/rmaps/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/rmcast/Makefile.am:34: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/rmcast/base/Makefile.am:19: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/rmcast/Makefile.am:41:   `orte/mca/rmcast/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/rml/Makefile.am:33: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/rml/base/Makefile.am:26: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/rml/Makefile.am:40:   `orte/mca/rml/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/routed/Makefile.am:25: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/routed/base/Makefile.am:17: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/routed/Makefile.am:32:   `orte/mca/routed/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/Makefile.am:44: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/base/Makefile.am:25: ORTE_DISABLE_FULL_SUPPORT does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc/Makefile.am:51:   `orte/mca/snapc/base/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; make: *** [Makefile.in] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My build steps are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #setup paths
</span><br>
<span class="quotelev1">&gt; PATH=/home/raid/private/Customizations_NODELETE/gcc-4.6/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/home/raid/private/Customizations_NODELETE/gcc-4.6/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mkdir ../ompi-output
</span><br>
<span class="quotelev1">&gt; ./configure CC=/home/raid/private/Customizations_NODELETE/gcc-4.6/bin/gcc CXX=/home/raid/private/Customizations_NODELETE/gcc-4.6/bin/g++ -prefix=/home/raid/private/Customizations_NODELETE/OpenMPI-1.6 --enable-mem-profile --enable-mem-debug --enable-heterogeneous --enable-ipv6 --enable-mpirun-prefix-by-default --enable-multicast --enable-mpi-interface-warning --enable-mpi-cxx --enable-mpi-cxx-seek --enable-cxx-exceptions --enable-smp-locks --enable-opal-multi-threads --enable-mpi-thread-multiple --enable-debug --enable-trace --enable-memchecker --with-sge --with-valgrind=/usr --with-threads=posix  --disable-mpi-f77 --disable-mpi-f90 |&amp; tee ../ompi-output/configure.out 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cp config.log opal/include/opal_config.h ../ompi-output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make all |&amp; tee ../ompi-output/make.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make install |&amp; tee ../ompi-output/make-install.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running without privileges on the server, and I am trying to use a custom version of gcc (4.6). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All logs are attached. I had a similar looking strange problem before, and that was somehow a bug in the package that I downloaded from <a href="http://www.open-mpi.org">http://www.open-mpi.org</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone provide a clue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19311.php">Sergiy Bubin: "[OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Previous message:</strong> <a href="19309.php">devendra rai: "Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?"</a>
<li><strong>In reply to:</strong> <a href="19309.php">devendra rai: "Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?"</a>
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
