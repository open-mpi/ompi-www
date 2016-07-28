<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 15:08:41 2006" -->
<!-- isoreceived="20060717190841" -->
<!-- sent="Mon, 17 Jul 2006 15:08:40 -0400" -->
<!-- isosent="20060717190840" -->
<!-- name="Caird, Andrew J" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TM fixes on trunk" -->
<!-- id="34A2103EAA952D42A158D34F30AF14CF0147FBED_at_engin-mail5.engin.umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFBB49C0_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Caird, Andrew J (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-17 15:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1638.php">s anwar: "[OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1636.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] TM fixes on trunk"</a>
<li><strong>In reply to:</strong> <a href="1636.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] TM fixes on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's excellent, thanks.
<br>
<p>--andy
<br>
&nbsp;&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres 
</span><br>
<span class="quotelev1">&gt; (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 17, 2006 2:08 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] TM fixes on trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For lack of a longer explanation, let's call it &quot;internal 
</span><br>
<span class="quotelev1">&gt; accounting errors&quot; :-).  In an attempt to speed up the TM 
</span><br>
<span class="quotelev1">&gt; launcher, we made some changes in Open MPI 1.1 which ended up 
</span><br>
<span class="quotelev1">&gt; using the TM API the wrong way.
</span><br>
<span class="quotelev1">&gt; So it was clearly a bug.  It *might* work in 1.1, but I 
</span><br>
<span class="quotelev1">&gt; wouldn't recommend it (i.e., it's a timing issue -- sometimes 
</span><br>
<span class="quotelev1">&gt; it might work, sometimes it might not).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically -- if it's working for you, then it will 
</span><br>
<span class="quotelev1">&gt; probably continue to work for you.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a 1.1.1b2 tarball currently available 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>), and there are 
</span><br>
<span class="quotelev1">&gt; nightly snapshots of the 1.1 branch available as well 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/nightly/v1.1/">http://www.open-mpi.org/nightly/v1.1/</a>).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can see a full list of the changes in the 1.1 branch in 
</span><br>
<span class="quotelev1">&gt; the &quot;1.1.1&quot;
</span><br>
<span class="quotelev1">&gt; section of NEWS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	<a href="http://svn.open-mpi.org/svn/ompi/trunk/NEWS">http://svn.open-mpi.org/svn/ompi/trunk/NEWS</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Caird, Andrew J
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, July 17, 2006 11:10 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] TM fixes on trunk
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What were the details of the problem/fixes?  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it worth us moving to the trunk or using what we have 
</span><br>
<span class="quotelev1">&gt; until 1.1.1 
</span><br>
<span class="quotelev2">&gt; &gt; arrives?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; --andy
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (jsquyres)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Monday, July 17, 2006 10:22 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [OMPI users] TM fixes on trunk
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; All --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Martin Schaffoner reported some TM problems to this list a little 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; while ago.  It took a long time for he and I to synch up, but we 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; finally identified and fixed the problem.  This only affects Open 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI 1.1 installs -- it is not an issue for 1.0.x 
</span><br>
<span class="quotelev1">&gt; installs.  The fix 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; has been included in both the trunk and the 1.1 branch, 
</span><br>
<span class="quotelev1">&gt; and will be 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; included in the upcoming
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.1.1 release.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
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
<li><strong>Next message:</strong> <a href="1638.php">s anwar: "[OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1636.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] TM fixes on trunk"</a>
<li><strong>In reply to:</strong> <a href="1636.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] TM fixes on trunk"</a>
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
