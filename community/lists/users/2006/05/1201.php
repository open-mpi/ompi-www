<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 23:54:46 2006" -->
<!-- isoreceived="20060503035446" -->
<!-- sent="Tue, 2 May 2006 23:54:35 -0400" -->
<!-- isosent="20060503035435" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.0.2 configure problem" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A7DAE_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openmpi-1.0.2 configure problem" -->
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
<strong>Date:</strong> 2006-05-02 23:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1202.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1200.php">Ali Soleimani: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1181.php">Michael Kluskens: "[OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1203.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>Reply:</strong> <a href="1203.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_merge broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok -- let me know what you find.  I just checked and the code *looks*
<br>
right to me, but that doesn't mean that there isn't some deeper
<br>
implication that I'm missing. 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 02, 2006 6:05 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi-1.0.2 configure problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My test codes compile fine but I'm fairly certain the logical is  
</span><br>
<span class="quotelev1">&gt; being handled incorrectly.  When I merge two comm's with one having  
</span><br>
<span class="quotelev1">&gt; high=.false. and the other high=.true., the latter should go 
</span><br>
<span class="quotelev1">&gt; into the  
</span><br>
<span class="quotelev1">&gt; higher ranks and the former should contain rank 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll work it over again tomorrow and see if I can create an f77  
</span><br>
<span class="quotelev1">&gt; version or use the mpi.h file and see if I can get a clear 
</span><br>
<span class="quotelev1">&gt; difference  
</span><br>
<span class="quotelev1">&gt; and I'll compare against MPICH2 but someone else should look into  
</span><br>
<span class="quotelev1">&gt; this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 1, 2006, at 11:57 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I just fixed the INTERCOMM_MERGE/logical issue on the trunk 
</span><br>
<span class="quotelev1">&gt; and the  
</span><br>
<span class="quotelev2">&gt; &gt; v1.1
</span><br>
<span class="quotelev2">&gt; &gt; branch -- can you give it a whirl there?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I ask because this issue is a bug that we fixed on the trunk (and
</span><br>
<span class="quotelev2">&gt; &gt; therefore v1.1) and didn't back-port it to v1.0.  There's actually  
</span><br>
<span class="quotelev2">&gt; &gt; quite
</span><br>
<span class="quotelev2">&gt; &gt; a few of these F90 fixes on the trunk/v1.1 branch that we did not
</span><br>
<span class="quotelev2">&gt; &gt; back-port to v1.0 (e.g., most of the other logical fixes) mainly  
</span><br>
<span class="quotelev2">&gt; &gt; because
</span><br>
<span class="quotelev2">&gt; &gt; we thought you were the main consumer of the F90 MPI API (and  
</span><br>
<span class="quotelev2">&gt; &gt; therefore
</span><br>
<span class="quotelev2">&gt; &gt; it wasn't worth it to back port :-) ).  If you need all 
</span><br>
<span class="quotelev1">&gt; these fixes in
</span><br>
<span class="quotelev2">&gt; &gt; v1.0, we can spend the time to do the back-port, but would prefer  
</span><br>
<span class="quotelev2">&gt; &gt; not to
</span><br>
<span class="quotelev2">&gt; &gt; if possible.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Monday, May 01, 2006 6:20 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI users] openmpi-1.0.2 configure problem
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking if FORTRAN compiler supports integer(selected_int_kind
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (2))... yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking size of FORTRAN integer(selected_int_kind(2))... unknown
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Source code: openmpi-1.0.2 stable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OS X 10.4.5 with g95 (Apr 27 2006)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I find this rather surprising given that I have been regularly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; building nightly snapshots of Open MPI 1.1 and 1.2 (the 
</span><br>
<span class="quotelev1">&gt; other bug is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; preventing me from using them at the moment till either I change my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; code or the bugs gets fixed).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="1202.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1200.php">Ali Soleimani: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1181.php">Michael Kluskens: "[OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1203.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>Reply:</strong> <a href="1203.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_merge broken"</a>
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
