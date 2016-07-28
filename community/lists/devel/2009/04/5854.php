<?
$subject_val = "Re: [OMPI devel] Mtt Fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 10:18:36 2009" -->
<!-- isoreceived="20090422141836" -->
<!-- sent="Wed, 22 Apr 2009 10:18:30 -0400" -->
<!-- isosent="20090422141830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Mtt Fails" -->
<!-- id="7466C831-D424-4C18-A248-C764DB796FD5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990904220628k4f171654vf87e49f95a90fdb5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Mtt Fails<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 10:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5855.php">Ralph Castain: "[OMPI devel] Open MPI v1.3.2 released"</a>
<li><strong>Previous message:</strong> <a href="5853.php">Lenny Verkhovsky: "Re: [OMPI devel] Mtt Fails"</a>
<li><strong>In reply to:</strong> <a href="5853.php">Lenny Verkhovsky: "Re: [OMPI devel] Mtt Fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The CXX test suite was updated to reflect the fix; you need to svn up  
<br>
in your ompi-tests checkout.
<br>
<p><p>On Apr 22, 2009, at 9:28 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; As I understood it will be fixed in 1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks, Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 22, 2009 at 4:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; If you look at the code in that test, it has a --openmpi option you  
</span><br>
<span class="quotelev1">&gt; are supposed to set so that it runs properly for OMPI. Not sure if  
</span><br>
<span class="quotelev1">&gt; that's the problem here or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did this used to run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note also that the test has a hardcoded version of 2.0 in it. I'm  
</span><br>
<span class="quotelev1">&gt; not sure if that could also be part of the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 22, 2009 at 6:04 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have MTT failures complaining about MPI2, but before I am opening  
</span><br>
<span class="quotelev1">&gt; a ticket, pls, have a look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $/hpc/home/USERS/mtt/mtt-scratch/20090421220402_moo1_17859/installs/ 
</span><br>
<span class="quotelev1">&gt; oma-nightly-1.3--gcc--1.3r404/install/bin/mpirun --host  
</span><br>
<span class="quotelev1">&gt; moo1,moo1,moo2,moo2,moo3,moo3,moo4,moo4 -np 8 --mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_use_eager_rdma 1 --mca btl self,sm,openib /hpc/home/USERS/ 
</span><br>
<span class="quotelev1">&gt; mtt/mtt-scratch/20090421220402_moo1_17859/installs/ogHK/tests/mpicxx/ 
</span><br>
<span class="quotelev1">&gt; cxx-test-suite/src/mpi2c++_dynamics_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI-2 C++ bindings MPI-2 dynamics test suite
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI Version 2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** There are delays built into some of the tests
</span><br>
<span class="quotelev1">&gt; *** Please let them complete
</span><br>
<span class="quotelev1">&gt; *** No test should take more than 10 seconds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test suite running on 8 nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * MPI-2 Dynamics...
</span><br>
<span class="quotelev1">&gt;   - Looking for &quot;connect&quot; program... PASS
</span><br>
<span class="quotelev1">&gt;   - MPI::Get_version... FAIL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI2C++ test suite: NODE 0 - 2) ERROR in MPI::Get_version should be  
</span><br>
<span class="quotelev1">&gt; 2.1
</span><br>
<span class="quotelev1">&gt; MPI2C++ test suite: all ranks failed
</span><br>
<span class="quotelev1">&gt; MPI2C++ test suite: minor error
</span><br>
<span class="quotelev1">&gt; MPI2C++ test suite: attempting to finalize...
</span><br>
<span class="quotelev1">&gt; MPI2C++ test suite: terminated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5855.php">Ralph Castain: "[OMPI devel] Open MPI v1.3.2 released"</a>
<li><strong>Previous message:</strong> <a href="5853.php">Lenny Verkhovsky: "Re: [OMPI devel] Mtt Fails"</a>
<li><strong>In reply to:</strong> <a href="5853.php">Lenny Verkhovsky: "Re: [OMPI devel] Mtt Fails"</a>
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
