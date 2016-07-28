<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 15:37:19 2006" -->
<!-- isoreceived="20060602193719" -->
<!-- sent="Fri, 2 Jun 2006 15:37:07 -0400" -->
<!-- isosent="20060602193707" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib /compiler issue?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C744_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openib /compiler issue?" -->
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
<strong>Date:</strong> 2006-06-02 15:37:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1370.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Previous message:</strong> <a href="1368.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="1354.php">Troy Telford: "[OMPI users] openib /compiler issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1370.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Reply:</strong> <a href="1370.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy --
<br>
<p>Just to make sure I understand the issues:
<br>
<p>- 1.1
<br>
&nbsp;&nbsp;- presta com works fine
<br>
&nbsp;&nbsp;- presta allred fails with the MPI_Gather error
<br>
- 1.0.3
<br>
&nbsp;&nbsp;- presta com fails with MPI_Gather error
<br>
&nbsp;&nbsp;- presta allred fails with the MPI_Gather error
<br>
<p>And these all *only* fail on the pre-production Linux version you've
<br>
got; they all pass on FC4.
<br>
<p>Is that correct?
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Troy Telford
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 02, 2006 12:46 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openib /compiler issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 01 Jun 2006 17:49:53 -0600, Troy Telford  
</span><br>
<span class="quotelev1">&gt; &lt;ttelford_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; the 'com' test ends with:
</span><br>
<span class="quotelev2">&gt; &gt; [n1:04941] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev2">&gt; &gt; [n1:04941] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [n1:04941] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt; &gt; [n1:04941] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And yes, I'm going to try out the dev snapshots of 1.0.3 
</span><br>
<span class="quotelev1">&gt; and 1.1... I'm
</span><br>
<span class="quotelev2">&gt; &gt; just not there yet...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've now tried it on 1.0.3 and 1.1 nightly builds:
</span><br>
<span class="quotelev1">&gt; ***presta 'com'***
</span><br>
<span class="quotelev1">&gt; 1.1 works fine (hooray!!!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.0.3 doesn't work fine (booo!!!!)
</span><br>
<span class="quotelev1">&gt; [n1:28313] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev1">&gt; [n1:28313] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n1:28313] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [n1:28313] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***presta 'allred' (allreduce)***
</span><br>
<span class="quotelev1">&gt; 1.0.3 has the following error:
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -machinefile machines -prefix $MPIHOME allred 10 10 10
</span><br>
<span class="quotelev1">&gt; [n1:28366] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev1">&gt; [n1:28366] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n1:28366] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [n1:28366] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [n1:28367] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev1">&gt; [n1:28367] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n1:28367] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [n1:28367] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.1 has the following error:
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -machinefile machines -prefix $MPIHOME allred 10 10 10
</span><br>
<span class="quotelev1">&gt; [n1:28536] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev1">&gt; [n1:28537] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev1">&gt; [n1:28537] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n1:28537] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [n1:28537] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [n1:28536] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n1:28536] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [n1:28536] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Troy Telford
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
<li><strong>Next message:</strong> <a href="1370.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Previous message:</strong> <a href="1368.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Maybe in reply to:</strong> <a href="1354.php">Troy Telford: "[OMPI users] openib /compiler issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1370.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Reply:</strong> <a href="1370.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
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
