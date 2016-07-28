<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 00:49:38 2007" -->
<!-- isoreceived="20070117054938" -->
<!-- sent="Wed, 17 Jan 2007 16:49:32 +1100" -->
<!-- isosent="20070117054932" -->
<!-- name="aaron.mcdonough_at_[hidden]" -->
<!-- email="aaron.mcdonough_at_[hidden]" -->
<!-- subject="[OMPI users]  openmpi on altix" -->
<!-- id="A6E08567B268FE4FA825D4683B20018A78C51C_at_exvicn2-mel.nexus.csiro.au" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="94205959-6282-4B1E-9F42-3911FFB15CF0_at_lanl.gov" -->
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
<strong>From:</strong> <a href="mailto:aaron.mcdonough_at_[hidden]?Subject=Re:%20[OMPI%20users]%20%20openmpi%20on%20altix"><em>aaron.mcdonough_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-01-17 00:49:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2472.php">eddie168: "[OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2470.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>In reply to:</strong> <a href="2470.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2479.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>Reply:</strong> <a href="2479.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found that MPT uses a *lot* of vmem for buffering/mem mapping. We
<br>
schedule based on requested vmem, so this can be a problem. Do you know
<br>
how vmem usage for buffering compares with OpenMPI?
<br>
<p>Cheers,
<br>
Aaron
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Brian W. Barrett
<br>
Sent: Wednesday, 17 January 2007 1:49 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] openmpi on altix
<br>
<p>On Jan 16, 2007, at 4:29 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; What is the state of openMPI on a sgi altix?  How does it compare to
</span><br>
<span class="quotelev1">&gt; mpt.  I assume for all operations OMPI will use the sm btl thus all
</span><br>
<span class="quotelev1">&gt; others (other than self)  could be disabled.  Is there any other
</span><br>
<span class="quotelev1">&gt; tweaks users use?  Or is OMPI even recommend on at Altix?
</span><br>
<p>We've run Open MPI on the Altix here at Los Alamos.  For point-to- 
<br>
point communication, we're slightly slower than MPT.  But for  
<br>
collectives, we're much slower.  We just haven't done any work on  
<br>
shared memory collectives, especially on platforms where the memory  
<br>
hierarchies are as deep as they are on the Altix.  That being said,  
<br>
it should work and is a viable option if there's a feature of Open  
<br>
MPI that a user needs that is not available in MPT.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2472.php">eddie168: "[OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2470.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>In reply to:</strong> <a href="2470.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2479.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>Reply:</strong> <a href="2479.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
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
