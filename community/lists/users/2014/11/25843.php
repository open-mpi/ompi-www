<?
$subject_val = "Re: [OMPI users] collective algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 15:46:51 2014" -->
<!-- isoreceived="20141118204651" -->
<!-- sent="Tue, 18 Nov 2014 14:46:50 -0600" -->
<!-- isosent="20141118204650" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective algorithms" -->
<!-- id="CAMJJpkWvmxGAhSiXTU7AoN+uA6SPvQP1TXpfyYmLmFPjWocBBA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9119B351DC3E914DB262CE51CCDF87CA095ED915_at_CRSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective algorithms<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-18 15:46:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25842.php">Jerry Mersel: "Re: [OMPI users] UC  job running out of memory"</a>
<li><strong>In reply to:</strong> <a href="25831.php">Faraj, Daniel A: "[OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>Many papers have been published about the performance modeling of different
<br>
collective communications algorithms (and fortunately these models are
<br>
implementation independent). I can pinpoint you to our research in
<br>
collective modeling which is the underlying infrastructure behind the
<br>
decision function in the tuned collective module in Open MPI (
<br>
<a href="http://link.springer.com/article/10.1007/s10586-007-0012-0">http://link.springer.com/article/10.1007/s10586-007-0012-0</a>). However,
<br>
Google Scholar can help with discovering other interesting approaches.
<br>
<p>George.
<br>
<p><p>On Mon, Nov 17, 2014 at 9:53 PM, Faraj, Daniel A &lt;daniel.a.faraj_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  I am trying to survey the collective algorithms in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked at the src code but could not make out the guts of the
</span><br>
<span class="quotelev1">&gt; communication algorithms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are some open mpi papers but not detailed, where they talk about
</span><br>
<span class="quotelev1">&gt; what algorithms are using in certain collectives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anybody done this sort of work, or point me to a paper?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically, for a given collective operation, what are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a)      Communication algorithm being used for a given criteria (i.e.
</span><br>
<span class="quotelev1">&gt; message size or np)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b)      What is theoretical algorithm cost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx
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
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel Faraj
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25831.php">http://www.open-mpi.org/community/lists/users/2014/11/25831.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25843/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25842.php">Jerry Mersel: "Re: [OMPI users] UC  job running out of memory"</a>
<li><strong>In reply to:</strong> <a href="25831.php">Faraj, Daniel A: "[OMPI users] collective algorithms"</a>
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
