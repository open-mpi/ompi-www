<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 26 15:38:05 2006" -->
<!-- isoreceived="20060426193805" -->
<!-- sent="Wed, 26 Apr 2006 15:37:52 -0400" -->
<!-- isosent="20060426193752" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704" -->
<!-- id="BFE0B6E0-E374-4E98-98E4-956B4C8B5B60_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72B9F7FD-B0EB-4E6B-B7CE-806A9343D501_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-26 15:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1155.php">Brian Barrett: "Re: [OMPI users] Make and config error"</a>
<li><strong>Previous message:</strong> <a href="1153.php">Michael Kluskens: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="1148.php">Michael Kluskens: "[OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I made another test and the problem does not occur with --with-mpi- 
<br>
f90-size=medium.
<br>
<p>Michael
<br>
<p>On Apr 26, 2006, at 11:50 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI 1.2a1r9704
</span><br>
<span class="quotelev1">&gt; Summary: configure with --with-mpi-f90-size=large and then make.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file  
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I doubt this one is system specific
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; my details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building OpenMPI 1.2a1r9704 with g95 (Apr 23 2006) on OS X 10.4.6  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
</span><br>
<span class="quotelev1">&gt; size=large
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configures fine but make gives the error listed above.  However no  
</span><br>
<span class="quotelev1">&gt; error if I don't specify f90-size=large.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./scripts/mpi_allgather_f90.f90.sh /Users/mkluskens/Public/MPI/ 
</span><br>
<span class="quotelev1">&gt; OpenMPI/openmpi-1.2a1r9704/ompi/mpi/f90 &gt; mpi_allgather_f90.f90
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file  
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt; make[4]: *** [mpi_allgather_f90.f90] Error 127
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpi_allgather_f90.f90.sh does not exist in my configured and built  
</span><br>
<span class="quotelev1">&gt; Open MPI 1.1a3r9704 so I can't compare between the two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume it should be generated into ompi/mpi/f90/scripts.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1155.php">Brian Barrett: "Re: [OMPI users] Make and config error"</a>
<li><strong>Previous message:</strong> <a href="1153.php">Michael Kluskens: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="1148.php">Michael Kluskens: "[OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704"</a>
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
