<?
$subject_val = "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 10:50:14 2009" -->
<!-- isoreceived="20090305155014" -->
<!-- sent="Thu, 05 Mar 2009 10:50:11 -0500" -->
<!-- isosent="20090305155011" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?" -->
<!-- id="49AFF4B3.4040808_at_scalableinformatics.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D3C4D85A-FE49-4010-A68A-77C41168C72D_at_cisco.com" -->
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
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 10:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8319.php">Shanyuan Gao: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8322.php">Ralph Castain: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8322.php">Ralph Castain: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 5, 2009, at 10:33 AM, Gerry Creager wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've been playing with it in a coupled atmosphere-ocean model to allow
</span><br>
<span class="quotelev2">&gt;&gt; the two to synchronize and exchange data.  The models have differing
</span><br>
<span class="quotelev2">&gt;&gt; levels of physics complexity and the time step requirements are
</span><br>
<span class="quotelev2">&gt;&gt; significantly different.  To sync them up we have to know where the
</span><br>
<span class="quotelev2">&gt;&gt; timesteps are identical, stop the process, exchange data and continue.
</span><br>
<span class="quotelev2">&gt;&gt; We've been playing with barrier to help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand -- &quot;help&quot; meaning what?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're exchanging data at the end of an iteration, then you 
</span><br>
<span class="quotelev1">&gt; effectively have a synchronization anyway -- no need for an extra 
</span><br>
<span class="quotelev1">&gt; barrier synchronization.
</span><br>
<p>Hi Jeff and Gerry:
<br>
<p>&nbsp;&nbsp;&nbsp;I think what Gerry means is that they have 2 distinct models running 
<br>
as different processes, and every now and then, the time steps of the 
<br>
models agree ... so both models register the same time to within some 
<br>
uncertainty or pre-defined accuracy.  At that point, they exchange 
<br>
information.  So it is not necessarily a synchronization at every time 
<br>
step, its likely at every Nth time step for one code, and every Mth for 
<br>
the other code.  Of course this assumes fixed size time steps which 
<br>
might not be the case.
<br>
<p>&nbsp;&nbsp;&nbsp;Regardless, at the point where the times are determined to be equal, 
<br>
the models need to exchange data.  Which means if one got there sooner 
<br>
than the other, that one has to wait for the other.  Continuing 
<br>
calculating without the data exchange would be, I am guessing, a waste 
<br>
of processor cycles as the models are coupled, and continuing without 
<br>
the coupling would be incorrect.
<br>
<p>&nbsp;&nbsp;&nbsp;Joe
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8319.php">Shanyuan Gao: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8322.php">Ralph Castain: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8322.php">Ralph Castain: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
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
