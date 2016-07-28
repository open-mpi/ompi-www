<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 13:12:09 2009" -->
<!-- isoreceived="20090507171209" -->
<!-- sent="Thu, 7 May 2009 13:11:46 -0400" -->
<!-- isosent="20090507171146" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="531893A968B34D40B36C7A6445BC828A025C5848_at_catoexm06.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="728C53A0-FC6A-48D1-80F0-A3C1122F78A7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 13:11:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9263.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>Previous message:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about the typo, yes, I meant OMPI 1.3.2.
<br>
<p>Mehdi
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: May-07-09 12:07 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] LSF launch with OpenMPI
<br>
<p>Did you mean OMPI 1.3.2?
<br>
<p>OMPI 1.2.3 did not have LSF support.
<br>
<p><p>On May 7, 2009, at 9:50 AM, Mehdi Bozzo-Rey wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried several combinations and:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - LIBS=... does not work for OpenMPI 1.2.3 / LSF 7.0.5
</span><br>
<span class="quotelev1">&gt; - the winner for now is LSF 7.0.4 / OpenMPI 1.2.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mehdi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: May-06-09 3:12 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] LSF launch with OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 5, 2009, at 10:01 AM, Matthieu Brucher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What Terry said is correct.  It means that &quot;mpirun&quot; will use,
</span><br>
<span class="quotelev2">&gt; &gt; under the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; covers, the &quot;native&quot; launching mechanism of LSF to launch jobs
</span><br>
<span class="quotelev2">&gt; &gt; (vs., say,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rsh or ssh).  It'll also discover the hosts to use for this job
</span><br>
<span class="quotelev2">&gt; &gt; without the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; use of a hostfile -- it'll query LSF directly to see what hosts it
</span><br>
<span class="quotelev2">&gt; &gt; should
</span><br>
<span class="quotelev3">&gt; &gt; &gt; use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OK, so I have to do something like:
</span><br>
<span class="quotelev2">&gt; &gt; bsub -n ${CPUS} mpirun myapplication
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it what I think?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what you think.  ;-)  But I think that your above command
</span><br>
<span class="quotelev1">&gt; might be correct.  You want *1* copy of mpirun to execute.  Hence, if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsub -n ${CPUS} uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; launches ${CPUS} copies of uptime, then the above command is not
</span><br>
<span class="quotelev1">&gt; correct.  You want to submit an ${CPUS} processor job to LSF and have
</span><br>
<span class="quotelev1">&gt; *one* copy of &quot;mpirun myapplication&quot; run -- mpirun will then invoke
</span><br>
<span class="quotelev1">&gt; the underlying stuff to launch ${CPUS} copies of myapplication and
</span><br>
<span class="quotelev1">&gt; join them together into a single MPI job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've enclosed the configure output as well as the config.log. The
</span><br>
<span class="quotelev2">&gt; &gt; problem is that my LSF (I didn't install it) 7.0.3 need libbat to be
</span><br>
<span class="quotelev2">&gt; &gt; linked against llsbstream (I modified the configure script to add
</span><br>
<span class="quotelev2">&gt; &gt; -llsbstream, and it compiled).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Huh!  Odd -- we didn't need that before.  Let me check with  
</span><br>
<span class="quotelev1">&gt; Platform...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you should be able to run like this without modifying configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ./configure LIBS=-llsbstream ....etc....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should add -llsbstream in the Right places.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9263.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>Previous message:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
