<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 13:00:52 2006" -->
<!-- isoreceived="20060525170052" -->
<!-- sent="Thu, 25 May 2006 10:02:53 -0700" -->
<!-- isosent="20060525170253" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wont run with 1.0.2" -->
<!-- id="4475E33D.4060804_at_reachone.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D53ABC39-4215-48DD-84C1-4AFF1F61BCB3_at_ieee.org" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-25 13:02:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1297.php">George Bosilca: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Previous message:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>In reply to:</strong> <a href="1289.php">Michael Kluskens: "Re: [OMPI users] Wont run with 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1360.php">Peter Kjellström: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1360.php">Peter Kjellström: "Re: [OMPI users] Wont run with 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I didn't do a formal uninstall as you demonstate below, but instead went
<br>
into the 'prefix' directory and renamed 'bin','lib','etc','include', and 
<br>
'share'
<br>
before running the 1.0.2 build and install. That way I didn't blow up my
<br>
1.0.1 installation, and it was easy to switch back in case the 1.0.2 
<br>
install
<br>
didn't work. I was sure this procedure was legitimate, but maybe I missed
<br>
something? As far as I know all executable, library, and include paths
<br>
are identical between the two, so what else should I change?
<br>
<p>T. Rosmond
<br>
<p><p>Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt;One possibility is that you didn't properly uninstall version 1.0.1  
</span><br>
<span class="quotelev1">&gt;before installing version 1.0.2 &amp; 1.0.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There was a change with some of the libraries a while back that  
</span><br>
<span class="quotelev1">&gt;caused me a similar problem.  An install of later versions of OpenMPI  
</span><br>
<span class="quotelev1">&gt;do not remove certain libraries from 1.0.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You absolutely have to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;cd openmpi1.0.1
</span><br>
<span class="quotelev1">&gt;sudo make uninstall
</span><br>
<span class="quotelev1">&gt;cd ../openmpi1.0.2
</span><br>
<span class="quotelev1">&gt;sudo make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have had no trouble in the past with PGF90 version 6.1-3 and  
</span><br>
<span class="quotelev1">&gt;OpenMPI 1.1a on a dual Operton 1.4 GHz machine running Debian Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On May 24, 2006, at 7:43 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;After using OPENMPI Ver 1.0.1 for several months without trouble,  
</span><br>
<span class="quotelev2">&gt;&gt;last week
</span><br>
<span class="quotelev2">&gt;&gt;I decided to upgrade to Ver 1.0.2.  My primary motivation was  
</span><br>
<span class="quotelev2">&gt;&gt;curiosity,
</span><br>
<span class="quotelev2">&gt;&gt;to see if
</span><br>
<span class="quotelev2">&gt;&gt;there was any performance benefit.  To my surprise, several of my F90
</span><br>
<span class="quotelev2">&gt;&gt;applications
</span><br>
<span class="quotelev2">&gt;&gt;refused to run with the newer version.  I also tried Ver 1.0.3a1r10036
</span><br>
<span class="quotelev2">&gt;&gt;with the same
</span><br>
<span class="quotelev2">&gt;&gt;result.  In all 3 cases I configured the build identically.  Even that
</span><br>
<span class="quotelev2">&gt;&gt;old chestnut 'hello.f'
</span><br>
<span class="quotelev2">&gt;&gt;will not run with the newer versions.  I ran it in the totalview
</span><br>
<span class="quotelev2">&gt;&gt;debugger and can see
</span><br>
<span class="quotelev2">&gt;&gt;that it is hanging in the MPI initialization code before it gets to  
</span><br>
<span class="quotelev2">&gt;&gt;the
</span><br>
<span class="quotelev2">&gt;&gt;F90 application.
</span><br>
<span class="quotelev2">&gt;&gt; I am using the Ver 6.1 PGF90 64bit compiler on a Linux Opteron
</span><br>
<span class="quotelev2">&gt;&gt;workstation with 2
</span><br>
<span class="quotelev2">&gt;&gt;dual core 2.4 GHZ processors.  If you think it it is worthwhile to
</span><br>
<span class="quotelev2">&gt;&gt;pursue this problem
</span><br>
<span class="quotelev2">&gt;&gt;further, what could I send you to help troubleshoot the problem?
</span><br>
<span class="quotelev2">&gt;&gt;Meanwhile I have
</span><br>
<span class="quotelev2">&gt;&gt;gone back to 1.0.1, which works fine on everything.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1297.php">George Bosilca: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Previous message:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>In reply to:</strong> <a href="1289.php">Michael Kluskens: "Re: [OMPI users] Wont run with 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1360.php">Peter Kjellström: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1360.php">Peter Kjellström: "Re: [OMPI users] Wont run with 1.0.2"</a>
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
