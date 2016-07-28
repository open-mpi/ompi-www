<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 26 20:38:50 2006" -->
<!-- isoreceived="20060427003850" -->
<!-- sent="Wed, 26 Apr 2006 20:38:35 -0400" -->
<!-- isosent="20060427003835" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF753B83_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704" -->
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
<strong>Date:</strong> 2006-04-26 20:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1158.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
<li><strong>Previous message:</strong> <a href="1156.php">knapper_at_[hidden]: "[OMPI users] Xgrid and Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1158.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
<li><strong>Reply:</strong> <a href="1158.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I am investigating -- I think I know what the problem is, but the
<br>
guy who did the bulk of the F90 work in OMPI is out traveling for a few
<br>
days (making these fixes take a little while). 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 26, 2006 3:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] missing mpi_allgather_f90.f90.sh 
</span><br>
<span class="quotelev1">&gt; inopenmpi-1.2a1r9704
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made another test and the problem does not occur with --with-mpi- 
</span><br>
<span class="quotelev1">&gt; f90-size=medium.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2006, at 11:50 AM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI 1.2a1r9704
</span><br>
<span class="quotelev2">&gt; &gt; Summary: configure with --with-mpi-f90-size=large and then make.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file  
</span><br>
<span class="quotelev2">&gt; &gt; or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I doubt this one is system specific
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; my details:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Building OpenMPI 1.2a1r9704 with g95 (Apr 23 2006) on OS X 10.4.6  
</span><br>
<span class="quotelev2">&gt; &gt; using
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
</span><br>
<span class="quotelev2">&gt; &gt; size=large
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Configures fine but make gives the error listed above.  However no  
</span><br>
<span class="quotelev2">&gt; &gt; error if I don't specify f90-size=large.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./scripts/mpi_allgather_f90.f90.sh /Users/mkluskens/Public/MPI/ 
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI/openmpi-1.2a1r9704/ompi/mpi/f90 &gt; mpi_allgather_f90.f90
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file  
</span><br>
<span class="quotelev2">&gt; &gt; or directory
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: *** [mpi_allgather_f90.f90] Error 127
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mpi_allgather_f90.f90.sh does not exist in my configured 
</span><br>
<span class="quotelev1">&gt; and built  
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI 1.1a3r9704 so I can't compare between the two.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I assume it should be generated into ompi/mpi/f90/scripts.
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
<li><strong>Next message:</strong> <a href="1158.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
<li><strong>Previous message:</strong> <a href="1156.php">knapper_at_[hidden]: "[OMPI users] Xgrid and Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1158.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
<li><strong>Reply:</strong> <a href="1158.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh inopenmpi-1.2a1r9704"</a>
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
