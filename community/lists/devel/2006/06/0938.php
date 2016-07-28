<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 14 04:04:36 2006" -->
<!-- isoreceived="20060614080436" -->
<!-- sent="Wed, 14 Jun 2006 10:04:26 +0200" -->
<!-- isosent="20060614080426" -->
<!-- name="Matthijs Richard Koot" -->
<!-- email="matthijs.richard.koot_at_[hidden]" -->
<!-- subject="[OMPI devel] Q: Job scheduling of MPI applications? (in general)" -->
<!-- id="25205A0A0D598D4DB80DECB9D4D622D3194F1B_at_cernxchg04.cern.ch" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Matthijs Richard Koot (<em>matthijs.richard.koot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-14 04:04:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0939.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<li><strong>Previous message:</strong> <a href="0937.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r10331"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0939.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<li><strong>Maybe reply:</strong> <a href="0939.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I'm new to this list, and have a question regarding the how MPI jobs are scheduled by JMSs. If I understand correctly, to have decent management/scheduling of MPI jobs, there are requirements for both the MPI implementation and JMS implementation, for them to be 'integrated':
<br>
<p>- the JMS needs to be 'parallel-aware', i.e. implement the PSCHED API;
<br>
- the MPI needs to be 'JMS-aware', i.e. call the PSCHED functions at the JMS.
<br>
<p>My questions:
<br>
1. Is this correct?
<br>
2. Which question should is valid: &quot;does OpenMPI support SGE?&quot;, or: &quot;does SGE support OpenMPI&quot;?
<br>
3. How do I know which JMSs (Torque/OpenPBS, SGE, LSF, ...) are compatible with which MPI implementations (OpenMPI, MPICH, MPICH-G2, ...), and vice versa? 
<br>
4. Is it true that the PSCHED API is the 'de facto' for such integration?
<br>
<p>Don't feel obligated to answer all questions, I'm happy with ANY of them answered :-)
<br>
<p>Friendly regards,
<br>
Matthijs Koot
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0939.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<li><strong>Previous message:</strong> <a href="0937.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r10331"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0939.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<li><strong>Maybe reply:</strong> <a href="0939.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
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
