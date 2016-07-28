<?
$subject_val = "Re: [OMPI users] MPI Finalize hangs!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 05:32:02 2013" -->
<!-- isoreceived="20130621093202" -->
<!-- sent="Fri, 21 Jun 2013 10:31:58 +0100" -->
<!-- isosent="20130621093158" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Finalize hangs!" -->
<!-- id="CAHCaCkKWoEP8OaNmiCHYEWb8Qm82guHXRXp3CvTPYgS+R6b+LQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1371806748.82725.YahooMailNeo_at_web125702.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Finalize hangs!<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 05:31:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22181.php">Salvatore Podda: "[OMPI users]  no daemonizing orted."</a>
<li><strong>Previous message:</strong> <a href="22179.php">Mohamad Ali Rostami: "[OMPI users] MPI Finalize hangs!"</a>
<li><strong>In reply to:</strong> <a href="22179.php">Mohamad Ali Rostami: "[OMPI users] MPI Finalize hangs!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22183.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>Reply:</strong> <a href="22183.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Finalize hangs!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I guess you have another problem in your application, surely a memory error
<br>
somewhere else.
<br>
<p>Cheers,
<br>
<p><p>2013/6/21 Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi there
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My MPI program works completely without any problem in the interactive
</span><br>
<span class="quotelev1">&gt; mode, i.e. before submitting to HPC. However when I submit it with &quot;bsub&quot;,
</span><br>
<span class="quotelev1">&gt; everything works again until &quot;MPI_FINALIZE&quot; hangs and following error comes
</span><br>
<span class="quotelev1">&gt; up:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 2 with PID 8620 on node ... exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is not for sure an error in the code because
</span><br>
<span class="quotelev1">&gt; I have commented all of the code (except MPI part) but the problem is
</span><br>
<span class="quotelev1">&gt; still there. Then I think it can be from submitting the code, the bash
</span><br>
<span class="quotelev1">&gt; script or compiling/linking libraries/headers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone seen this error before? any idea to correct it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ali
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
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22180/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22181.php">Salvatore Podda: "[OMPI users]  no daemonizing orted."</a>
<li><strong>Previous message:</strong> <a href="22179.php">Mohamad Ali Rostami: "[OMPI users] MPI Finalize hangs!"</a>
<li><strong>In reply to:</strong> <a href="22179.php">Mohamad Ali Rostami: "[OMPI users] MPI Finalize hangs!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22183.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>Reply:</strong> <a href="22183.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Finalize hangs!"</a>
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
