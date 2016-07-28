<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 16:13:10 2006" -->
<!-- isoreceived="20060602201310" -->
<!-- sent="Fri, 02 Jun 2006 14:12:42 -0600" -->
<!-- isosent="20060602201242" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib /compiler issue?" -->
<!-- id="op.tajbrgadies9li_at_rygel.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C744_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 16:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1371.php">Ralph Castain: "Re: [OMPI users] OpenMPI on VxWorks?"</a>
<li><strong>Previous message:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>In reply to:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 02 Jun 2006 13:37:07 -0600, Jeff Squyres (jsquyres)  
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Troy --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make sure I understand the issues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 1.1
</span><br>
<span class="quotelev1">&gt;   - presta com works fine
</span><br>
<span class="quotelev1">&gt;   - presta allred fails with the MPI_Gather error
</span><br>
<span class="quotelev1">&gt; - 1.0.3
</span><br>
<span class="quotelev1">&gt;   - presta com fails with MPI_Gather error
</span><br>
<span class="quotelev1">&gt;   - presta allred fails with the MPI_Gather error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And these all *only* fail on the pre-production Linux version you've
</span><br>
<span class="quotelev1">&gt; got; they all pass on FC4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<p>Quite correct.  (well, with caveats -- FC4 has shown some scaling issues  
<br>
that are in tickets #40 &amp; #41; but Open MPI/FC4 works fine with -np 4)
<br>
<p>If I didn't say so already, here's what I would add:
<br>
&nbsp;&nbsp;&nbsp;* If I add -mca btl tcp,sm,self (effectively disabling the openib mca),  
<br>
and allred works fine.  If I use -mca btl openib,sm,self, it breaks.
<br>
&nbsp;&nbsp;&nbsp;* If I use -mca btl tcp,sm,self with com, the error is the same as with  
<br>
-mca btl openib,sm,self.  		(And com works fine in either case with 1.1,  
<br>
but breaks with 1.0.3)
<br>
<p>A bit of additional info:  I am able to run linpack (hpl), HPCC, and IMB  
<br>
on Open MPI 1.1, 1.0.3, and 1.0.2 on this pre-production distro.
<br>
<p>All tests were done with two nodes, each having two CPUs per node. (-np 4)
<br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Troy Telford
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, June 02, 2006 12:46 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] openib /compiler issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 01 Jun 2006 17:49:53 -0600, Troy Telford
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ttelford_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the 'com' test ends with:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n1:04941] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n1:04941] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n1:04941] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n1:04941] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And yes, I'm going to try out the dev snapshots of 1.0.3
</span><br>
<span class="quotelev2">&gt;&gt; and 1.1... I'm
</span><br>
<span class="quotelev3">&gt;&gt; &gt; just not there yet...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've now tried it on 1.0.3 and 1.1 nightly builds:
</span><br>
<span class="quotelev2">&gt;&gt; ***presta 'com'***
</span><br>
<span class="quotelev2">&gt;&gt; 1.1 works fine (hooray!!!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.0.3 doesn't work fine (booo!!!!)
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28313] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28313] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28313] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28313] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***presta 'allred' (allreduce)***
</span><br>
<span class="quotelev2">&gt;&gt; 1.0.3 has the following error:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 -machinefile machines -prefix $MPIHOME allred 10 10 10
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28366] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28366] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28366] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28366] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28367] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28367] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28367] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28367] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.1 has the following error:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 -machinefile machines -prefix $MPIHOME allred 10 10 10
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28536] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28537] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28537] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28537] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28537] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28536] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28536] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [n1:28536] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<p><pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1371.php">Ralph Castain: "Re: [OMPI users] OpenMPI on VxWorks?"</a>
<li><strong>Previous message:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>In reply to:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
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
