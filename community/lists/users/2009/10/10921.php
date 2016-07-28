<?
$subject_val = "Re: [OMPI users] Compilation Failure on Franklin with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 16:50:38 2009" -->
<!-- isoreceived="20091016205038" -->
<!-- sent="Fri, 16 Oct 2009 14:50:23 -0600" -->
<!-- isosent="20091016205023" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation Failure on Franklin with OpenMPI" -->
<!-- id="C6FE38AF.2216%bwbarre_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AD51327.5090503_at_pnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilation Failure on Franklin with OpenMPI<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-16 16:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10922.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10920.php">nam kim: "[OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<li><strong>In reply to:</strong> <a href="10916.php">Abhinav Vishnu: "[OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
<p>I haven't built on Franklin, but generally you don't want to use cc - you
<br>
want to use the gcc which targets the backend nodes (I'm not sure what it's
<br>
called on CNL machines, as I work mostly with Catamount machines).  That
<br>
should fix the error you are seeing, as part of the problem is Libtool not
<br>
being able to figure out cc is PGI-based.
<br>
<p>Brian
<br>
<p><p>On 10/13/09 5:54 PM, &quot;Abhinav Vishnu&quot; &lt;abhinav.vishnu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPI on Franklin, and after trying out a
</span><br>
<span class="quotelev1">&gt; couple of options, I am still observing a compilation failure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the following options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CC=cc
</span><br>
<span class="quotelev1">&gt; ./configure --with-portals-libs=/u0/v/vishnu/libportals.a --enable-shared=no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default version of libportals seems to provide error, and there were
</span><br>
<span class="quotelev1">&gt; compilation errors using shared library, so I disabled these two options
</span><br>
<span class="quotelev1">&gt; as well. The error is here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/cray/xt-asyncpe/3.2/bin/cc: INFO: linux target is being used
</span><br>
<span class="quotelev1">&gt; pgcc-Error-Unknown switch: --export-dynamic
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/u0/v/vishnu/src/mpi/ompi/openmpi-1.3.3/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/u0/v/vishnu/src/mpi/ompi/openmpi-1.3.3/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; franklin-nid00092[27] openmpi-1.3.3$ ./configure
</span><br>
<span class="quotelev1">&gt; --with-portals-libs=/u0/v/vishnu/libportals.a --enable-shared=no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A compilation script for Franklin (if there is one) would be greatly
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks and best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Abhinav Vishnu, Ph.D.
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; High Performance Computing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pacific Northwest National Laboratory
</span><br>
<span class="quotelev1">&gt; 902 Battelle Boulevard
</span><br>
<span class="quotelev1">&gt; P.O. Box 999, MSIN: K7-90
</span><br>
<span class="quotelev1">&gt; Richland, WA 99352 USA
</span><br>
<span class="quotelev1">&gt; Tel.: (509)372-4794
</span><br>
<span class="quotelev1">&gt; Fax: (509)375-2520
</span><br>
<span class="quotelev1">&gt; abhinav.vishnu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.pnl.gov
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10922.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10920.php">nam kim: "[OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<li><strong>In reply to:</strong> <a href="10916.php">Abhinav Vishnu: "[OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
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
