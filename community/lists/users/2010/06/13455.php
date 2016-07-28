<?
$subject_val = "[OMPI users] Parallel Tempering with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 19:45:10 2010" -->
<!-- isoreceived="20100630234510" -->
<!-- sent="Thu, 1 Jul 2010 11:45:06 +1200" -->
<!-- isosent="20100630234506" -->
<!-- name="Asad Ali" -->
<!-- email="asad06_at_[hidden]" -->
<!-- subject="[OMPI users] Parallel Tempering with MPI" -->
<!-- id="AANLkTilWhUCgeTpl7HpTv6mCZj47krNshaiNUWtb2j4-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Parallel Tempering with MPI<br>
<strong>From:</strong> Asad Ali (<em>asad06_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 19:45:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13454.php">Riccardo Murri: "[OMPI users] is OpenMPI 1.4 thread-safe?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am working on a parallel tempering MCMC code using OpenMPI scripts. I am a
<br>
bit confused about proposing swaps between chains running on different
<br>
cores.
<br>
I know how to propose swaps but I am not sure as to where to to do it (i.e.
<br>
how to specify an independent node or core for it.). If some body is/was
<br>
working on parallel tempering MCMC using MPI then please help me. An example
<br>
code would be really helpful.
<br>
<p>Cheers,
<br>
<p>Asad
<br>
<p>On Thu, Jul 1, 2010 at 9:28 AM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;wrote:
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
<p><p><p><pre>
-- 
&quot;Statistical thinking will one day be as necessary for efficient citizenship
as the ability to read and write.&quot; - H.G. Wells
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13454.php">Riccardo Murri: "[OMPI users] is OpenMPI 1.4 thread-safe?"</a>
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
