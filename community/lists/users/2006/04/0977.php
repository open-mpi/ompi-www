<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr  8 07:10:27 2006" -->
<!-- isoreceived="20060408111027" -->
<!-- sent="Sat, 8 Apr 2006 07:10:29 -0400" -->
<!-- isosent="20060408111029" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Torque error" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FB01D_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI and Torque error" -->
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
<strong>Date:</strong> 2006-04-08 07:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0978.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Previous message:</strong> <a href="0976.php">David Gunter: "[OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Prakash Velayutham: "[OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0980.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am also curious as to why this would not work -- I was not under the
<br>
impression that tm_init() would fail from a non mother-superior node...?
<br>
<p>FWIW: It has been our experience with both Torque and the various
<br>
flavors of PBS that you can repeatedly call tm_init() and tm_finalize()
<br>
within a single process, so I would be surprised if that was the issue.
<br>
Indeed, I'd have to double check, but I'm pretty sure that our MPI
<br>
processes do not call tm_init() (I believe that only mpirun does).
<br>
<p>Prakash: are you running an unmodified version of Torque 2.0.0p7?
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Prakash Velayutham
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 07, 2006 10:13 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Pak.Lui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI and Torque error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pak Lui wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Prakash,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tm_poll: protocol number dis error 11
</span><br>
<span class="quotelev2">&gt; &gt; ret is 17002 instead of 0: tm_init failed
</span><br>
<span class="quotelev2">&gt; &gt; 3 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I encountered similar problem with OpenPBS before, which 
</span><br>
<span class="quotelev1">&gt; also uses the 
</span><br>
<span class="quotelev2">&gt; &gt; TM interfaces. It returns a TM_ENOTCONNECTED (17002) when I 
</span><br>
<span class="quotelev1">&gt; tried to 
</span><br>
<span class="quotelev2">&gt; &gt; call tm_init for the second time (which in turns call tm_poll and 
</span><br>
<span class="quotelev2">&gt; &gt; returned that errno).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think what you did to start tm_init from another node and 
</span><br>
<span class="quotelev1">&gt; connect to 
</span><br>
<span class="quotelev2">&gt; &gt; another mom which I do not think is allowed. The TM module 
</span><br>
<span class="quotelev1">&gt; in OpenMPI 
</span><br>
<span class="quotelev2">&gt; &gt; already called tm_init once. I am curious to know about the 
</span><br>
<span class="quotelev1">&gt; reason that 
</span><br>
<span class="quotelev2">&gt; &gt; you need to call tm_init again?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you are curious to know about the implementation for 
</span><br>
<span class="quotelev1">&gt; PBS, you can 
</span><br>
<span class="quotelev2">&gt; &gt; download the source from openpbs.org. OpenPBS source: 
</span><br>
<span class="quotelev2">&gt; &gt; v2.3.16/src/lib/Libifl/tm.c
</span><br>
<span class="quotelev1">&gt; I am interested in getting this to work as I am working on 
</span><br>
<span class="quotelev1">&gt; implementing 
</span><br>
<span class="quotelev1">&gt; support for dynamic scheduling in Torque. I want any node in an MPI-2 
</span><br>
<span class="quotelev1">&gt; job (basically Open MPI implementation) to be able to request the 
</span><br>
<span class="quotelev1">&gt; Torque/PBS server for more nodes. I am doing a little study in that 
</span><br>
<span class="quotelev1">&gt; right now. Instead of nodes talking directly to the server, I 
</span><br>
<span class="quotelev1">&gt; want them 
</span><br>
<span class="quotelev1">&gt; to be able to talk to Mother Superior and MS instead will talk to the 
</span><br>
<span class="quotelev1">&gt; Server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please explain why this does not work now? And why it works 
</span><br>
<span class="quotelev1">&gt; when I do the tm_init from MS, and only does not work from 
</span><br>
<span class="quotelev1">&gt; any other MOM?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
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
<li><strong>Next message:</strong> <a href="0978.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Previous message:</strong> <a href="0976.php">David Gunter: "[OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Prakash Velayutham: "[OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0980.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
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
