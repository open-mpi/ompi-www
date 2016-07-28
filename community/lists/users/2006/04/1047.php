<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 22:52:22 2006" -->
<!-- isoreceived="20060413025222" -->
<!-- sent="Wed, 12 Apr 2006 22:52:10 -0400" -->
<!-- isosent="20060413025210" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running code with OpenMPI-1.0.1" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF671B98_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Problem running code with OpenMPI-1.0.1" -->
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
<strong>Date:</strong> 2006-04-12 22:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1048.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Previous message:</strong> <a href="1046.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe in reply to:</strong> <a href="1014.php">Jeffrey B. Layton: "[OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have a static version of libnuma available?  If not, then the
<br>
static linking will likely fail. 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeffrey B. Layton
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 12, 2006 11:31 AM
</span><br>
<span class="quotelev1">&gt; To: laytonjb_at_[hidden]; Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem running code with OpenMPI-1.0.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, this is weird. I built 1.0.2 with the following options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/jlayton/bin/OPENMPI-1.0.2-PGI6.0-OPTERON 
</span><br>
<span class="quotelev1">&gt; --disable-io-romio \
</span><br>
<span class="quotelev1">&gt;        --enable-static --enable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and installed it. When I tried to build a code with static
</span><br>
<span class="quotelev1">&gt; links (linking in the libs), it yells about not being able to
</span><br>
<span class="quotelev1">&gt; find libnuma. I see a directory opal/mca/maffinity/libnuma
</span><br>
<span class="quotelev1">&gt; but I can't find libnuma. I can build the code fine using
</span><br>
<span class="quotelev1">&gt; shared libs, but not static one. Any ideas on how to fix the
</span><br>
<span class="quotelev1">&gt; static lib problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, yes these nodes do have multiple TCP interfaces.
</span><br>
<span class="quotelev2">&gt; &gt; I'll give 1.0.2 a whirl :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you, perchance, have multiple TCP interfaces on at 
</span><br>
<span class="quotelev1">&gt; least one of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes you're running on?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We had a mistake in the TCP network matching code during 
</span><br>
<span class="quotelev1">&gt; startup -- this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is fixed in v1.0.2.  Can you give that a whirl?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeffrey B. Layton
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Tuesday, April 11, 2006 11:25 AM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: [OMPI users] Problem running code with OpenMPI-1.0.1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Good morning,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    I'm trying to run one of the NAS Parallel Benchmarks (bt) with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI-1.0.1 that was built with PGI 6.0. The code never
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; starts (at least I don't see any output) until I kill the 
</span><br>
<span class="quotelev1">&gt; code. Then
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I get the following message:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; connect() failed with 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; errno=113[0,1,4][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; omplete_connect] 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; connect() failed with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; errno=113[0,1,8][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; omplete_connect] 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; connect() failed with errno=113mpirun: killing job...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Any ideas on this one?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
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
<span class="quotelev2">&gt; &gt;   
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
<li><strong>Next message:</strong> <a href="1048.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Previous message:</strong> <a href="1046.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe in reply to:</strong> <a href="1014.php">Jeffrey B. Layton: "[OMPI users] Problem running code with OpenMPI-1.0.1"</a>
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
