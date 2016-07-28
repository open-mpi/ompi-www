<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 16:06:47 2007" -->
<!-- isoreceived="20070801200647" -->
<!-- sent="Wed, 1 Aug 2007 15:06:56 -0500" -->
<!-- isosent="20070801200656" -->
<!-- name="Adams, Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque and openmpi" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E1D7724F_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="89F28D44-6D72-4C23-99A4-1825CCE47F59_at_cisco.com" -->
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
<strong>From:</strong> Adams, Samuel D Contr AFRL/HEDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-01 16:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3795.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Previous message:</strong> <a href="3793.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I reran the configure script with the --with-tm flag this time.  Thanks
<br>
for the info.  It was working before for clients with ssh properly
<br>
configured (i.e. my account only).  But now it is working without having
<br>
to use ssh for all accounts (i.e. biologist and physicists users).  
<br>
<p>Sam Adams
<br>
General Dynamics Information Technology
<br>
Phone: 210.536.5945
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Friday, July 27, 2007 2:58 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] torque and openmpi
<br>
<p>On Jul 27, 2007, at 2:48 PM, Galen Shipman wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I set up ompi before I configured Torque.  Do I need to recompile  
</span><br>
<span class="quotelev2">&gt;&gt; ompi
</span><br>
<span class="quotelev2">&gt;&gt; with appropriate torque configure options to get better integration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If libtorque wasn't present on the machine at configure then yes, you
</span><br>
<span class="quotelev1">&gt; need to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-tm=&lt;path&gt;
</span><br>
<p>You don't *have* to do this, of course.  If you've got it working  
<br>
with ssh, that's fine.  But the integration with torque can be better:
<br>
<p>- you can disable ssh for non-root accounts (assuming no other  
<br>
services need rsh/ssh)
<br>
- users don't have to setup ssh keys to run MPI jobs (a small thing,  
<br>
but sometimes nice when the users aren't computer scientists)
<br>
- torque knows about all processes on all nodes (not just the mother  
<br>
superior) and can therefore both track and kill them if necessary
<br>
<p>Just my $0.02...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3795.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Previous message:</strong> <a href="3793.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3785.php">Jeff Squyres: "Re: [OMPI users] torque and openmpi"</a>
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
