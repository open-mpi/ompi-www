<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 28 15:58:03 2006" -->
<!-- isoreceived="20060428195803" -->
<!-- sent="Fri, 28 Apr 2006 15:57:55 -0400" -->
<!-- isosent="20060428195755" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] missing mpi_allgather_f90.f90.shinopenmpi-1.2a1r9704" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF75436B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] missing mpi_allgather_f90.f90.shinopenmpi-1.2a1r9704" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-28 15:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1166.php">Marcus G. Daniels: "Re: [OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<li><strong>Previous message:</strong> <a href="1164.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following up for the list -- we fixed this problem in last night's
<br>
snapshot, but Michael and I are still iterating off list to fix some
<br>
other F90 issues.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 27, 2006 9:44 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] missing 
</span><br>
<span class="quotelev1">&gt; mpi_allgather_f90.f90.shinopenmpi-1.2a1r9704
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've done yet another test and found the identical problem exists  
</span><br>
<span class="quotelev1">&gt; with openmpi-1.1a3r9704.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2006, at 8:38 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ok, I am investigating -- I think I know what the problem 
</span><br>
<span class="quotelev1">&gt; is, but the
</span><br>
<span class="quotelev2">&gt; &gt; guy who did the bulk of the F90 work in OMPI is out 
</span><br>
<span class="quotelev1">&gt; traveling for a  
</span><br>
<span class="quotelev2">&gt; &gt; few
</span><br>
<span class="quotelev2">&gt; &gt; days (making these fixes take a little while).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I made another test and the problem does not occur with --with-mpi-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; f90-size=medium.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 26, 2006, at 11:50 AM, Michael Kluskens wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Open MPI 1.2a1r9704
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Summary: configure with --with-mpi-f90-size=large and then make.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; or directory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I doubt this one is system specific
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; my details:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Building OpenMPI 1.2a1r9704 with g95 (Apr 23 2006) on OS X 10.4.6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; using
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; size=large
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Configures fine but make gives the error listed above.  However no
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; error if I don't specify f90-size=large.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./scripts/mpi_allgather_f90.f90.sh /Users/mkluskens/Public/MPI/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI/openmpi-1.2a1r9704/ompi/mpi/f90 &gt; mpi_allgather_f90.f90
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; or directory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[4]: *** [mpi_allgather_f90.f90] Error 127
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  mpi_allgather_f90.f90.sh does not exist in my configured
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and built
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Open MPI 1.1a3r9704 so I can't compare between the two.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I assume it should be generated into ompi/mpi/f90/scripts.
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
<li><strong>Next message:</strong> <a href="1166.php">Marcus G. Daniels: "Re: [OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<li><strong>Previous message:</strong> <a href="1164.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
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
