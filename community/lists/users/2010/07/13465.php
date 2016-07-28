<?
$subject_val = "Re: [OMPI users] is OpenMPI 1.4 thread-safe?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  2 08:50:28 2010" -->
<!-- isoreceived="20100702125028" -->
<!-- sent="Fri, 2 Jul 2010 08:50:28 -0400" -->
<!-- isosent="20100702125028" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is OpenMPI 1.4 thread-safe?" -->
<!-- id="AEE8BF38-0E4A-49EE-8269-5D20D03E58E5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTintgPSLTJ4fhTAzy-lryx__fqd-BNzTE7Nkycnv_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] is OpenMPI 1.4 thread-safe?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-02 08:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13466.php">Jack Bryan: "[OMPI users] OpenMPI error MPI_ERR_TRUNCATE"</a>
<li><strong>Previous message:</strong> <a href="13464.php">Simone Pellegrini: "[OMPI users] Open MPI runtime parameter tuning on a custom cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13454.php">Riccardo Murri: "[OMPI users] is OpenMPI 1.4 thread-safe?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What would software be without conflicting documentation?  :-)
<br>
<p>The first statement is true; THREAD_MULTIPLE was designed in from the beginning.  But it has never been much of a priority -- simply not enough people are asking for it.  As of 1.4.1, the following is true (from the README -- I'll go update the man page):
<br>
<p>&nbsp;&nbsp;o MPI_THREAD_MULTIPLE support for point-to-point messaging in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;following BTLs (note that only MPI point-to-point messaging API
<br>
&nbsp;&nbsp;&nbsp;&nbsp;functions support MPI_THREAD_MULTIPLE; other API functions likely
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do not):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- tcp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- sm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- mx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- elan
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- self
<br>
<p><p><p>On Jun 30, 2010, at 5:28 PM, Riccardo Murri wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The FAQ states: &quot;Support for MPI_THREAD_MULTIPLE [...] has been
</span><br>
<span class="quotelev1">&gt; designed into Open MPI from its first planning meetings.  Support for
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE is included in the first version of Open MPI, but
</span><br>
<span class="quotelev1">&gt; it is only lightly tested and likely still has some bugs.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The man page of &quot;mpirun&quot; from v1.4.3a1r23323 in addition says &quot;Open
</span><br>
<span class="quotelev1">&gt; MPI is, currently, neither thread-safe nor async-signal-safe&quot; (section
</span><br>
<span class="quotelev1">&gt; &quot;Process Termination / Signal Handling&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are these statements up-to-date?  What is the status of
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE in OMPI 1.4?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any info!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Riccardo
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13466.php">Jack Bryan: "[OMPI users] OpenMPI error MPI_ERR_TRUNCATE"</a>
<li><strong>Previous message:</strong> <a href="13464.php">Simone Pellegrini: "[OMPI users] Open MPI runtime parameter tuning on a custom cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13454.php">Riccardo Murri: "[OMPI users] is OpenMPI 1.4 thread-safe?"</a>
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
