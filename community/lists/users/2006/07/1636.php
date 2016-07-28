<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 14:07:42 2006" -->
<!-- isoreceived="20060717180742" -->
<!-- sent="Mon, 17 Jul 2006 14:07:39 -0400" -->
<!-- isosent="20060717180739" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TM fixes on trunk" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFBB49C0_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] TM fixes on trunk" -->
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
<strong>Date:</strong> 2006-07-17 14:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1637.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<li><strong>Previous message:</strong> <a href="1635.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="1634.php">Jeff Squyres \(jsquyres\): "[OMPI users] TM fixes on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1637.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<li><strong>Reply:</strong> <a href="1637.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For lack of a longer explanation, let's call it &quot;internal accounting
<br>
errors&quot; :-).  In an attempt to speed up the TM launcher, we made some
<br>
changes in Open MPI 1.1 which ended up using the TM API the wrong way.
<br>
So it was clearly a bug.  It *might* work in 1.1, but I wouldn't
<br>
recommend it (i.e., it's a timing issue -- sometimes it might work,
<br>
sometimes it might not).
<br>
<p>More specifically -- if it's working for you, then it will probably
<br>
continue to work for you.  
<br>
<p>There is a 1.1.1b2 tarball currently available
<br>
(<a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>), and there are nightly
<br>
snapshots of the 1.1 branch available as well
<br>
(<a href="http://www.open-mpi.org/nightly/v1.1/">http://www.open-mpi.org/nightly/v1.1/</a>).  
<br>
<p>You can see a full list of the changes in the 1.1 branch in the &quot;1.1.1&quot;
<br>
section of NEWS:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/svn/ompi/trunk/NEWS">http://svn.open-mpi.org/svn/ompi/trunk/NEWS</a>
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Caird, Andrew J
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 17, 2006 11:10 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] TM fixes on trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What were the details of the problem/fixes?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it worth us moving to the trunk or using what we have until 1.1.1
</span><br>
<span class="quotelev1">&gt; arrives?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; --andy
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres 
</span><br>
<span class="quotelev2">&gt; &gt; (jsquyres)
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, July 17, 2006 10:22 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] TM fixes on trunk
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; All --
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Martin Schaffoner reported some TM problems to this list a 
</span><br>
<span class="quotelev2">&gt; &gt; little while ago.  It took a long time for he and I to synch 
</span><br>
<span class="quotelev2">&gt; &gt; up, but we finally identified and fixed the problem.  This 
</span><br>
<span class="quotelev2">&gt; &gt; only affects Open MPI 1.1 installs -- it is not an issue for 
</span><br>
<span class="quotelev2">&gt; &gt; 1.0.x installs.  The fix has been included in both the trunk 
</span><br>
<span class="quotelev2">&gt; &gt; and the 1.1 branch, and will be included in the upcoming 
</span><br>
<span class="quotelev2">&gt; &gt; 1.1.1 release.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="1637.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<li><strong>Previous message:</strong> <a href="1635.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="1634.php">Jeff Squyres \(jsquyres\): "[OMPI users] TM fixes on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1637.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<li><strong>Reply:</strong> <a href="1637.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
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
