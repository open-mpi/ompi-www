<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 15:08:15 2007" -->
<!-- isoreceived="20070608190815" -->
<!-- sent="Fri, 08 Jun 2007 15:08:00 -0400" -->
<!-- isosent="20070608190800" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm" -->
<!-- id="AF3852B8E5337749823CCFC6889EA8AA04C3FB91_at_WS-BCO-MSE7.milky-way.battelle.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FB0D09B0-A226-4EFD-97B5-690B47224DC9_at_cisco.com" -->
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
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 15:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3420.php">Brian Barrett: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>In reply to:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3420.php">Brian Barrett: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3420.php">Brian Barrett: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I either have to uninstall torque, make the shared libraries
<br>
available on all nodes, or have torque as static libraries on the head
<br>
node?
<br>
<p>______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis
<br>
&nbsp;
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Friday, June 08, 2007 2:21 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm
<br>
<p>On Jun 8, 2007, at 2:06 PM, Cupp, Matthew R wrote:
<br>
<p><span class="quotelev1">&gt; Yes.  But the /opt/torque directory is just the source, not the actual
</span><br>
<span class="quotelev1">&gt; installed directory.  The actual installed directory on the head  
</span><br>
<span class="quotelev1">&gt; node is
</span><br>
<span class="quotelev1">&gt; the default location of /usr/lib/something.  And that is not  
</span><br>
<span class="quotelev1">&gt; accessable
</span><br>
<span class="quotelev1">&gt; by every node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But should it matter if it's not accessable if I don't specify
</span><br>
<span class="quotelev1">&gt; --with-tm?  I was wondering if ./configure detects torque has been
</span><br>
<span class="quotelev1">&gt; installed, and then builds the associated components under the
</span><br>
<span class="quotelev1">&gt; assumption that it's available.
</span><br>
<p>This is what OMPI does.
<br>
<p>However, if you only have static libraries for Torque, the issue  
<br>
should be moot -- the relevant bits should be statically linked into  
<br>
the OMPI tm plugins.  But if your Torque libraries are shared, then  
<br>
you do need to have them available on all nodes for OMPI to be able  
<br>
to leverage native Torque/TM support.
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="3420.php">Brian Barrett: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>In reply to:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3420.php">Brian Barrett: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3420.php">Brian Barrett: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
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
