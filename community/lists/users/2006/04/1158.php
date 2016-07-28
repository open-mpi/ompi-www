<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 27 09:44:07 2006" -->
<!-- isoreceived="20060427134407" -->
<!-- sent="Thu, 27 Apr 2006 09:43:55 -0400" -->
<!-- isosent="20060427134355" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704" -->
<!-- id="0B12A5BF-BDFE-4AE2-B7E4-6A9AD0037D9D_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF753B83_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-04-27 09:43:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1159.php">sdamjad: "[OMPI users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="1157.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
<li><strong>In reply to:</strong> <a href="1157.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've done yet another test and found the identical problem exists  
<br>
with openmpi-1.1a3r9704.
<br>
<p>Michael
<br>
<p>On Apr 26, 2006, at 8:38 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I am investigating -- I think I know what the problem is, but the
</span><br>
<span class="quotelev1">&gt; guy who did the bulk of the F90 work in OMPI is out traveling for a  
</span><br>
<span class="quotelev1">&gt; few
</span><br>
<span class="quotelev1">&gt; days (making these fixes take a little while).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I made another test and the problem does not occur with --with-mpi-
</span><br>
<span class="quotelev2">&gt;&gt; f90-size=medium.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 26, 2006, at 11:50 AM, Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.2a1r9704
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Summary: configure with --with-mpi-f90-size=large and then make.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I doubt this one is system specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Building OpenMPI 1.2a1r9704 with g95 (Apr 23 2006) on OS X 10.4.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size=large
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configures fine but make gives the error listed above.  However no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error if I don't specify f90-size=large.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./scripts/mpi_allgather_f90.f90.sh /Users/mkluskens/Public/MPI/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI/openmpi-1.2a1r9704/ompi/mpi/f90 &gt; mpi_allgather_f90.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** [mpi_allgather_f90.f90] Error 127
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpi_allgather_f90.f90.sh does not exist in my configured
</span><br>
<span class="quotelev2">&gt;&gt; and built
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.1a3r9704 so I can't compare between the two.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume it should be generated into ompi/mpi/f90/scripts.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1159.php">sdamjad: "[OMPI users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="1157.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
<li><strong>In reply to:</strong> <a href="1157.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
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
