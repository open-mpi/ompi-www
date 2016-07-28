<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 11:25:20 2007" -->
<!-- isoreceived="20070117162520" -->
<!-- sent="Wed, 17 Jan 2007 09:25:07 -0700" -->
<!-- isosent="20070117162507" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi on altix" -->
<!-- id="F5C43855-0611-4650-89BA-71449F310124_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A6E08567B268FE4FA825D4683B20018A78C51C_at_exvicn2-mel.nexus.csiro.au" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 11:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2480.php">Brian W. Barrett: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would guess that for Open MPI v1.1, we will use more vmem than  
<br>
MPT.  Our strategy early on was get a huge buffer and never run out  
<br>
of resources.  Obviously, that's not a good long term plan ;).  We've  
<br>
scaled this down considerably in v1.2 (now in beta), where we by  
<br>
default use about 16MB/process for shared memory, up to 512MB.  THis  
<br>
can be tuned down quite a bit -- we need about 128KB / process of  
<br>
shared memory space to successfully run, and probably 4-8MB to run  
<br>
with any efficiency.
<br>
<p>Brian
<br>
<p>On Jan 16, 2007, at 10:49 PM, &lt;aaron.mcdonough_at_[hidden]&gt;  
<br>
&lt;aaron.mcdonough_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I found that MPT uses a *lot* of vmem for buffering/mem mapping. We
</span><br>
<span class="quotelev1">&gt; schedule based on requested vmem, so this can be a problem. Do you  
</span><br>
<span class="quotelev1">&gt; know
</span><br>
<span class="quotelev1">&gt; how vmem usage for buffering compares with OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Aaron
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Brian W. Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, 17 January 2007 1:49 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi on altix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2007, at 4:29 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the state of openMPI on a sgi altix?  How does it compare to
</span><br>
<span class="quotelev2">&gt;&gt; mpt.  I assume for all operations OMPI will use the sm btl thus all
</span><br>
<span class="quotelev2">&gt;&gt; others (other than self)  could be disabled.  Is there any other
</span><br>
<span class="quotelev2">&gt;&gt; tweaks users use?  Or is OMPI even recommend on at Altix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've run Open MPI on the Altix here at Los Alamos.  For point-to-
</span><br>
<span class="quotelev1">&gt; point communication, we're slightly slower than MPT.  But for
</span><br>
<span class="quotelev1">&gt; collectives, we're much slower.  We just haven't done any work on
</span><br>
<span class="quotelev1">&gt; shared memory collectives, especially on platforms where the memory
</span><br>
<span class="quotelev1">&gt; hierarchies are as deep as they are on the Altix.  That being said,
</span><br>
<span class="quotelev1">&gt; it should work and is a viable option if there's a feature of Open
</span><br>
<span class="quotelev1">&gt; MPI that a user needs that is not available in MPT.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;    Open MPI Team, CCS-1
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
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
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2480.php">Brian W. Barrett: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
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
