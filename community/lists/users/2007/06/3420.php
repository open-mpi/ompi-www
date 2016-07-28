<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 15:15:21 2007" -->
<!-- isoreceived="20070608191521" -->
<!-- sent="Fri, 8 Jun 2007 13:15:01 -0600" -->
<!-- isosent="20070608191501" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm" -->
<!-- id="27C3BFD3-BB13-41E8-B124-D29342F42E2C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF3852B8E5337749823CCFC6889EA8AA04C3FB91_at_WS-BCO-MSE7.milky-way.battelle.org" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 15:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3421.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or tell Open MPI not to build torque support, which can be done at  
<br>
configure time with the --without-tm option.
<br>
<p>Open MPI tries to build support for whatever it finds in the default  
<br>
search paths, plus whatever things you specify the location of.  Most  
<br>
of the time, this is what the user wants.  In this case, however,  
<br>
it's not what you wanted so you'll have to add the --without-tm option.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p>On Jun 8, 2007, at 1:08 PM, Cupp, Matthew R wrote:
<br>
<p><span class="quotelev1">&gt; So I either have to uninstall torque, make the shared libraries
</span><br>
<span class="quotelev1">&gt; available on all nodes, or have torque as static libraries on the head
</span><br>
<span class="quotelev1">&gt; node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________
</span><br>
<span class="quotelev1">&gt; Matt Cupp
</span><br>
<span class="quotelev1">&gt; Battelle Memorial Institute
</span><br>
<span class="quotelev1">&gt; Statistics and Information Analysis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 08, 2007 2:21 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2007, at 2:06 PM, Cupp, Matthew R wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes.  But the /opt/torque directory is just the source, not the  
</span><br>
<span class="quotelev2">&gt;&gt; actual
</span><br>
<span class="quotelev2">&gt;&gt; installed directory.  The actual installed directory on the head
</span><br>
<span class="quotelev2">&gt;&gt; node is
</span><br>
<span class="quotelev2">&gt;&gt; the default location of /usr/lib/something.  And that is not
</span><br>
<span class="quotelev2">&gt;&gt; accessable
</span><br>
<span class="quotelev2">&gt;&gt; by every node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But should it matter if it's not accessable if I don't specify
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm?  I was wondering if ./configure detects torque has been
</span><br>
<span class="quotelev2">&gt;&gt; installed, and then builds the associated components under the
</span><br>
<span class="quotelev2">&gt;&gt; assumption that it's available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what OMPI does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if you only have static libraries for Torque, the issue
</span><br>
<span class="quotelev1">&gt; should be moot -- the relevant bits should be statically linked into
</span><br>
<span class="quotelev1">&gt; the OMPI tm plugins.  But if your Torque libraries are shared, then
</span><br>
<span class="quotelev1">&gt; you do need to have them available on all nodes for OMPI to be able
</span><br>
<span class="quotelev1">&gt; to leverage native Torque/TM support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3421.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
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
