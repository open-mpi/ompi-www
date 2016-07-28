<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 14 09:30:43 2006" -->
<!-- isoreceived="20060614133043" -->
<!-- sent="Wed, 14 Jun 2006 09:30:29 -0400" -->
<!-- isosent="20060614133029" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF9F1E04_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Q: Job scheduling of MPI applications? (in general)" -->
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
<strong>Date:</strong> 2006-06-14 09:30:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0940.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Mails to open-mpi.org yesterday"</a>
<li><strong>Previous message:</strong> <a href="0938.php">Matthijs Richard Koot: "[OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0938.php">Matthijs Richard Koot: "[OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Matthijs Richard Koot
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 14, 2006 1:04 AM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Q: Job scheduling of MPI applications? 
</span><br>
<span class="quotelev1">&gt; (in general)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm new to this list, and have a question regarding the how 
</span><br>
<span class="quotelev1">&gt; MPI jobs are scheduled by JMSs. If I understand correctly, to 
</span><br>
<span class="quotelev1">&gt; have decent management/scheduling of MPI jobs, there are 
</span><br>
<span class="quotelev1">&gt; requirements for both the MPI implementation and JMS 
</span><br>
<span class="quotelev1">&gt; implementation, for them to be 'integrated':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the JMS needs to be 'parallel-aware', i.e. implement the PSCHED API;
</span><br>
<p>It is probably more precise to say that the JMS (&quot;Job Management
<br>
System&quot;?) needs to provide a mechanism to start jobs on allocated nodes.
<br>
If it provides a parallel mechanism (e.g., a caller can invoke one
<br>
command to launch many processes), so much the better -- but if the
<br>
mechanism is serial, that's ok too.  All common resource managers
<br>
provide *some* way of launching jobs on allocated notes -- indeed, that
<br>
is one of their main purposes (to start / stop jobs).
<br>
<p>The PSCHED API is one of several such interfaces.  A subset of the
<br>
PSCHED API is only in common use in the PBS line of resource managers
<br>
(Torque, PBS Pro, etc.).  I doubt that TM is the native interface that
<br>
the PBS flavors use to launch jobs (i.e., I doubt that PBS uses TM
<br>
internally for launching processes), but I have not dived into the
<br>
implementation enough to know.  Other resource managers have different
<br>
interfaces.
<br>
<p><span class="quotelev1">&gt; - the MPI needs to be 'JMS-aware', i.e. call the PSCHED 
</span><br>
<span class="quotelev1">&gt; functions at the JMS.
</span><br>
<p>That's correct in spirit, but a little more precise would be to say that
<br>
the MPI needs to be aware of and properly utilize the mechanism that the
<br>
resource manager provides to start jobs.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; My questions:
</span><br>
<span class="quotelev1">&gt; 1. Is this correct?
</span><br>
<span class="quotelev1">&gt; 2. Which question should is valid: &quot;does OpenMPI support 
</span><br>
<span class="quotelev1">&gt; SGE?&quot;, or: &quot;does SGE support OpenMPI&quot;?
</span><br>
<p>It's probably more correct to ask if Open MPI supports a given resource
<br>
manager.  
<br>
<p><span class="quotelev1">&gt; 3. How do I know which JMSs (Torque/OpenPBS, SGE, LSF, ...) 
</span><br>
<span class="quotelev1">&gt; are compatible with which MPI implementations (OpenMPI, 
</span><br>
<span class="quotelev1">&gt; MPICH, MPICH-G2, ...), and vice versa? 
</span><br>
<p>I can't speak for the other MPI implementations, but for Open MPI, you
<br>
can look here:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=supported-systems#rte">http://www.open-mpi.org/faq/?category=supported-systems#rte</a>
<br>
<p><span class="quotelev1">&gt; 4. Is it true that the PSCHED API is the 'de facto' for such 
</span><br>
<span class="quotelev1">&gt; integration?
</span><br>
<p>No.  It was an attempt to standardize such things, but it never really
<br>
caught on outside of the PBS family.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0940.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Mails to open-mpi.org yesterday"</a>
<li><strong>Previous message:</strong> <a href="0938.php">Matthijs Richard Koot: "[OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0938.php">Matthijs Richard Koot: "[OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
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
