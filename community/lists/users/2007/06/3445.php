<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 09:13:00 2007" -->
<!-- isoreceived="20070611131300" -->
<!-- sent="Mon, 11 Jun 2007 09:12:38 -0400" -->
<!-- isosent="20070611131238" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm" -->
<!-- id="FD8464D2-035B-4FBB-85A5-0BABE544FDEC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF3852B8E5337749823CCFC6889EA8AA04C3FF74_at_WS-BCO-MSE7.milky-way.battelle.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 09:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3446.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3444.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2007, at 8:55 AM, Cupp, Matthew R wrote:
<br>
<p><span class="quotelev1">&gt; Ah ha!  I didn't know that option was available as I didn't see it in
</span><br>
<span class="quotelev1">&gt; the documentation or in ./configure --help.
</span><br>
<p>FWIW, the GNU Autoconf application creates configure scripts that  
<br>
automatically accept &quot;without&quot; and &quot;disable&quot; versions of all of its  
<br>
&quot;with&quot; and &quot;enable&quot; options as negation operators.  This is not Open  
<br>
MPI-specific functionality.
<br>
<p><span class="quotelev1">&gt; I just ended up rebuilding and installing torque to my /opt/torque
</span><br>
<span class="quotelev1">&gt; share.  Thank you for your help with this.
</span><br>
<p>This will likely be best; Open MPI will use the native Torque  
<br>
launching mechanisms for running MPI applications, which has a number  
<br>
of advantages for system monitoring and control.
<br>
<p><span class="quotelev1">&gt; Matt
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
<span class="quotelev1">&gt; Behalf Of Brian Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 08, 2007 3:15 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or tell Open MPI not to build torque support, which can be done at
</span><br>
<span class="quotelev1">&gt; configure time with the --without-tm option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI tries to build support for whatever it finds in the default
</span><br>
<span class="quotelev1">&gt; search paths, plus whatever things you specify the location of.  Most
</span><br>
<span class="quotelev1">&gt; of the time, this is what the user wants.  In this case, however,
</span><br>
<span class="quotelev1">&gt; it's not what you wanted so you'll have to add the --without-tm  
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2007, at 1:08 PM, Cupp, Matthew R wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I either have to uninstall torque, make the shared libraries
</span><br>
<span class="quotelev2">&gt;&gt; available on all nodes, or have torque as static libraries on the  
</span><br>
<span class="quotelev2">&gt;&gt; head
</span><br>
<span class="quotelev2">&gt;&gt; node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________
</span><br>
<span class="quotelev2">&gt;&gt; Matt Cupp
</span><br>
<span class="quotelev2">&gt;&gt; Battelle Memorial Institute
</span><br>
<span class="quotelev2">&gt;&gt; Statistics and Information Analysis
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, June 08, 2007 2:21 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 8, 2007, at 2:06 PM, Cupp, Matthew R wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes.  But the /opt/torque directory is just the source, not the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed directory.  The actual installed directory on the head
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the default location of /usr/lib/something.  And that is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accessable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by every node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But should it matter if it's not accessable if I don't specify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-tm?  I was wondering if ./configure detects torque has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed, and then builds the associated components under the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assumption that it's available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is what OMPI does.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if you only have static libraries for Torque, the issue
</span><br>
<span class="quotelev2">&gt;&gt; should be moot -- the relevant bits should be statically linked into
</span><br>
<span class="quotelev2">&gt;&gt; the OMPI tm plugins.  But if your Torque libraries are shared, then
</span><br>
<span class="quotelev2">&gt;&gt; you do need to have them available on all nodes for OMPI to be able
</span><br>
<span class="quotelev2">&gt;&gt; to leverage native Torque/TM support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Make sense?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3446.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3444.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3441.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
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
