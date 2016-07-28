<?
$subject_val = "Re: [OMPI users] Windows Open MPI question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 08:24:25 2012" -->
<!-- isoreceived="20121220132425" -->
<!-- sent="Thu, 20 Dec 2012 08:24:19 -0500" -->
<!-- isosent="20121220132419" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows Open MPI question" -->
<!-- id="7E25C6DE-FA78-49AB-BD4C-132DCAEC1BE6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8A9547392E2EB443894AF275470DF5E32F745EC7_at_hou150w8xmbx02.hou150.chevrontexaco.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows Open MPI question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 08:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21022.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21020.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>In reply to:</strong> <a href="21004.php">Kumar, Sudhir: "Re: [OMPI users] Windows Open MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20996.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glad you got it resolved!
<br>
<p>On Dec 18, 2012, at 8:53 PM, Kumar, Sudhir wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; The error is resolved. The solution was actually in a previous post.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/03/15954.php">http://www.open-mpi.org/community/lists/users/2011/03/15954.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Kumar, Sudhir 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, December 18, 2012 1:37 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI users] Windows Open MPI question
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt; I am getting several Linker errors while doing a build
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error	194	error LNK2001: unresolved external symbol ompi_mpi_int	
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, December 18, 2012 12:59 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Windows Open MPI question
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just curious -- what do you need this struct type for?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's an internal type; you shouldn't need the definition for MPI applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2012, at 12:05 PM, marco atzeri wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/18/2012 5:49 PM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is struct ompi_datatype_t defined only for Linux or is there a windows equivalent. If so in which header file can it be found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi/datatype/ompi_datatype.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Marco
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="21022.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21020.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>In reply to:</strong> <a href="21004.php">Kumar, Sudhir: "Re: [OMPI users] Windows Open MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20996.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
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
