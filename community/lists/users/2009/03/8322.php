<?
$subject_val = "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 11:08:58 2009" -->
<!-- isoreceived="20090305160858" -->
<!-- sent="Thu, 5 Mar 2009 09:08:28 -0700" -->
<!-- isosent="20090305160828" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?" -->
<!-- id="D18FB84F-6DC3-4BBD-806D-D8108C256DEF_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AFF4B3.4040808_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 11:08:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8323.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8321.php">Durga Choudhury: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8318.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8324.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8324.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2009, at 8:50 AM, Joe Landman wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 5, 2009, at 10:33 AM, Gerry Creager wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've been playing with it in a coupled atmosphere-ocean model to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the two to synchronize and exchange data.  The models have differing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; levels of physics complexity and the time step requirements are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; significantly different.  To sync them up we have to know where the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timesteps are identical, stop the process, exchange data and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've been playing with barrier to help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I understand -- &quot;help&quot; meaning what?
</span><br>
<span class="quotelev2">&gt;&gt; If you're exchanging data at the end of an iteration, then you  
</span><br>
<span class="quotelev2">&gt;&gt; effectively have a synchronization anyway -- no need for an extra  
</span><br>
<span class="quotelev2">&gt;&gt; barrier synchronization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff and Gerry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I think what Gerry means is that they have 2 distinct models  
</span><br>
<span class="quotelev1">&gt; running as different processes, and every now and then, the time  
</span><br>
<span class="quotelev1">&gt; steps of the models agree ... so both models register the same time  
</span><br>
<span class="quotelev1">&gt; to within some uncertainty or pre-defined accuracy.  At that point,  
</span><br>
<span class="quotelev1">&gt; they exchange information.  So it is not necessarily a  
</span><br>
<span class="quotelev1">&gt; synchronization at every time step, its likely at every Nth time  
</span><br>
<span class="quotelev1">&gt; step for one code, and every Mth for the other code.  Of course this  
</span><br>
<span class="quotelev1">&gt; assumes fixed size time steps which might not be the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Regardless, at the point where the times are determined to be  
</span><br>
<span class="quotelev1">&gt; equal, the models need to exchange data.  Which means if one got  
</span><br>
<span class="quotelev1">&gt; there sooner than the other, that one has to wait for the other.   
</span><br>
<span class="quotelev1">&gt; Continuing calculating without the data exchange would be, I am  
</span><br>
<span class="quotelev1">&gt; guessing, a waste of processor cycles as the models are coupled, and  
</span><br>
<span class="quotelev1">&gt; continuing without the coupling would be incorrect.
</span><br>
<p><p>Ummm....not to put gasoline on the fire, but...if the data exchange is  
<br>
blocking, why do you need to call a barrier op first? Just use an  
<br>
appropriate blocking data exchange call (collective or whatever) and  
<br>
it will &quot;barrier&quot; anyway.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Joe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joseph Landman, Ph.D
</span><br>
<span class="quotelev1">&gt; Founder and CEO
</span><br>
<span class="quotelev1">&gt; Scalable Informatics LLC,
</span><br>
<span class="quotelev1">&gt; email: landman_at_[hidden]
</span><br>
<span class="quotelev1">&gt; web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
</span><br>
<span class="quotelev1">&gt;       <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
</span><br>
<span class="quotelev1">&gt; phone: +1 734 786 8423 x121
</span><br>
<span class="quotelev1">&gt; fax  : +1 866 888 3112
</span><br>
<span class="quotelev1">&gt; cell : +1 734 612 4615
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
<li><strong>Next message:</strong> <a href="8323.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8321.php">Durga Choudhury: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8318.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8324.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8324.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
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
