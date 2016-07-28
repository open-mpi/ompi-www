<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 18:57:51 2006" -->
<!-- isoreceived="20060711225751" -->
<!-- sent="Tue, 11 Jul 2006 16:57:47 -0600" -->
<!-- isosent="20060711225747" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] readline and mpirun" -->
<!-- id="C0D9890B.330E%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3e3c86f90607111526g5cebbac2i15c62291092b7f5b_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 18:57:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1617.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Previous message:</strong> <a href="1615.php">Greg Lindahl: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>In reply to:</strong> <a href="1614.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1617.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Reply:</strong> <a href="1617.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#185;m afraid that the current comm_spawn system really can&#185;t run unless
<br>
started via mpirun. I&#185;m going to take a shot at fixing it in the near future
<br>
and can let you know when that is accomplished, but it might take a little
<br>
while before I get the time.
<br>
<p>Ralph
<br>
<p><p>On 7/11/06 4:26 PM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I've tried my application with MPICH2 and OpenMPI only. The readline stuff
</span><br>
<span class="quotelev1">&gt; works in OpenMPI as long as I don't start my application with mpirun. It does
</span><br>
<span class="quotelev1">&gt; not work in MPICH2 irrespective of whether I start my application with mpirun
</span><br>
<span class="quotelev1">&gt; or not. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My application starts on a workstation and spawns slave processes on cluster
</span><br>
<span class="quotelev1">&gt; nodes. The application provides an interactive command shell and provides some
</span><br>
<span class="quotelev1">&gt; GUI functionality using X.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Do you know how bad is the MPI_Comm_spawn issue if I don't start my
</span><br>
<span class="quotelev1">&gt; application via an mpirun?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Saadat.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On 7/11/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for not replying earlier.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; It is likely that Open MPI won't work properly in this situation -- Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; provides basic I/O forwarding.  I don't know if curses-based or
</span><br>
<span class="quotelev2">&gt;&gt; readline-based applications will work through our forwarding.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Do you know if this application works with other MPI implementations?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt; ] On Behalf Of s anwar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, July 07, 2006 12:46 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] readline and mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; When I run my MPI enabled application via mpirun, my application
</span><br>
<span class="quotelev2">&gt;&gt; command-prompt looses its readline editing capability. I was wondering if
</span><br>
<span class="quotelev2">&gt;&gt; there is workaround.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Saadat.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1617.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Previous message:</strong> <a href="1615.php">Greg Lindahl: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>In reply to:</strong> <a href="1614.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1617.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Reply:</strong> <a href="1617.php">s anwar: "Re: [OMPI users] readline and mpirun"</a>
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
