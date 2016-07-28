<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  9 07:13:50 2006" -->
<!-- isoreceived="20060609111350" -->
<!-- sent="Fri, 9 Jun 2006 07:13:41 -0400" -->
<!-- isosent="20060609111341" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] F90 interfaces again" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF9AED6E_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] F90 interfaces again" -->
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
<strong>Date:</strong> 2006-06-09 07:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1390.php">imran shaik: "[OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Previous message:</strong> <a href="1388.php">Brian W. Barrett: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe in reply to:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1392.php">Michael Kluskens: "Re: [OMPI users] F90 interfaces again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yup -- definitely a bug.
<br>
<p>For all those who care, followups will be here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/89">https://svn.open-mpi.org/trac/ompi/ticket/89</a> 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brian W. Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 08, 2006 7:11 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] F90 interfaces again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 8 Jun 2006, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;             call MPI_WAITALL(3,sp_request,MPI_STATUSES_IGNORE,ier)
</span><br>
<span class="quotelev2">&gt; &gt;                                                                   1
</span><br>
<span class="quotelev2">&gt; &gt; Error: Generic subroutine 'mpi_waitall' at (1) is not 
</span><br>
<span class="quotelev1">&gt; consistent with
</span><br>
<span class="quotelev2">&gt; &gt; a specific subroutine interface
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Issue, 3rd argument of MPI_WAITALL expects an integer array 
</span><br>
<span class="quotelev1">&gt; normally,
</span><br>
<span class="quotelev2">&gt; &gt; but this constant is permitted by the standard.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is with OpenMPI 1.2a1r10186,  I can check the details of the
</span><br>
<span class="quotelev2">&gt; &gt; scripts and generated files next week for whatever is the latest
</span><br>
<span class="quotelev2">&gt; &gt; version.  But odds are this has not been spotted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report -- it does look like this is an 
</span><br>
<span class="quotelev1">&gt; issue we haven't 
</span><br>
<span class="quotelev1">&gt; dealt with yet.  I've filed a bug in our tracking system on 
</span><br>
<span class="quotelev1">&gt; the issue, and 
</span><br>
<span class="quotelev1">&gt; hopefully Jeff will be able to take a look in the near future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm pretty sure this will also be a problem for TESTALL, 
</span><br>
<span class="quotelev1">&gt; WAITSOME, and 
</span><br>
<span class="quotelev1">&gt; WAITANY.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Graduate Student, Open Systems Lab, Indiana University
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
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
<li><strong>Next message:</strong> <a href="1390.php">imran shaik: "[OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Previous message:</strong> <a href="1388.php">Brian W. Barrett: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe in reply to:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1392.php">Michael Kluskens: "Re: [OMPI users] F90 interfaces again"</a>
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
