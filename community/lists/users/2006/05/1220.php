<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  9 07:23:44 2006" -->
<!-- isoreceived="20060509112344" -->
<!-- sent="Tue, 9 May 2006 07:23:34 -0400" -->
<!-- isosent="20060509112334" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and MPICH" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7FB060_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI and MPICH" -->
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
<strong>Date:</strong> 2006-05-09 07:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1221.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 Slackware Package"</a>
<li><strong>Previous message:</strong> <a href="1219.php">Richard Wait: "[OMPI users] Open MPI and MPICH"</a>
<li><strong>Maybe in reply to:</strong> <a href="1219.php">Richard Wait: "[OMPI users] Open MPI and MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1225.php">Richard Wait: "Re: [OMPI users] Open MPI and MPICH"</a>
<li><strong>Reply:</strong> <a href="1225.php">Richard Wait: "Re: [OMPI users] Open MPI and MPICH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are looking for the path of least resistance, then going back to
<br>
MPICH is probably your best bet (there is certainly merit in &quot;it ain't
<br>
broke, so don't fix it&quot;). 
<br>
<p>However, there may be a few other factors to consider:
<br>
<p>- Just because an app runs and completes with one MPI implementation
<br>
does not mean that the application is correct; running with a different
<br>
implementation can be a great way to find bugs that you were unaware of
<br>
<p>- Open MPI is under continual development.  The latest officially
<br>
released stable version of Open MPI is v1.0.2.  There are also
<br>
post-1.0.2 snapshots (what will eventually become 1.0.3).
<br>
<p>Hope this helps.
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Richard Wait
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 09, 2006 7:14 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Open MPI and MPICH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been using mpich (v1.2.6) for some time but I have 
</span><br>
<span class="quotelev1">&gt; just installed fedora
</span><br>
<span class="quotelev1">&gt; 5 which comes with Open MPI v1.0.1. Using a program that 
</span><br>
<span class="quotelev1">&gt; worked with mpich, the
</span><br>
<span class="quotelev1">&gt; code compiles with om-mpif77 but using om-mpirun the program 
</span><br>
<span class="quotelev1">&gt; aborts with the
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  before it inputs data from a file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using ssh to launch the processes. Can anybody explain 
</span><br>
<span class="quotelev1">&gt; why I should not go
</span><br>
<span class="quotelev1">&gt; back to mpich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Richard Wait
</span><br>
<span class="quotelev1">&gt;  Uppsala University
</span><br>
<span class="quotelev1">&gt;  Department of Information Technology
</span><br>
<span class="quotelev1">&gt;  Scientific Computing
</span><br>
<span class="quotelev1">&gt;  Box 337
</span><br>
<span class="quotelev1">&gt;  75105 UPPSALA
</span><br>
<span class="quotelev1">&gt;  Tel:             018-4712757
</span><br>
<span class="quotelev1">&gt;  Fax:             018-523049
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This message was sent using IMP, the Internet Messaging Program.
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
<li><strong>Next message:</strong> <a href="1221.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 Slackware Package"</a>
<li><strong>Previous message:</strong> <a href="1219.php">Richard Wait: "[OMPI users] Open MPI and MPICH"</a>
<li><strong>Maybe in reply to:</strong> <a href="1219.php">Richard Wait: "[OMPI users] Open MPI and MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1225.php">Richard Wait: "Re: [OMPI users] Open MPI and MPICH"</a>
<li><strong>Reply:</strong> <a href="1225.php">Richard Wait: "Re: [OMPI users] Open MPI and MPICH"</a>
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
