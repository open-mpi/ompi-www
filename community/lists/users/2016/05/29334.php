<?
$subject_val = "Re: [OMPI users] Regression in MPI_File_close?!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 02:28:50 2016" -->
<!-- isoreceived="20160531062850" -->
<!-- sent="Tue, 31 May 2016 15:28:35 +0900" -->
<!-- isosent="20160531062835" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression in MPI_File_close?!" -->
<!-- id="d66cce00-4fa4-ec91-c08b-7a77d6e51f95_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="574D20AD.2080704_at_uq.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regression in MPI_File_close?!<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-31 02:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29335.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29333.php">Cihan Altinay: "[OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>In reply to:</strong> <a href="29333.php">Cihan Altinay: "[OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29335.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29335.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report.
<br>
<p>the romio included in the v1.10 series is a bit old and did not include 
<br>
the fix,
<br>
<p>i made PR #1206 for that 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
<br>
<p>feel free to manually apply the patch available at 
<br>
<a href="https://github.com/open-mpi/ompi-release/commit/a0ea9fb6cbe4cf71567c9fc7fd8f4be384617ad4.diff">https://github.com/open-mpi/ompi-release/commit/a0ea9fb6cbe4cf71567c9fc7fd8f4be384617ad4.diff</a>
<br>
<p><p>note that the issue is already fixed in romio of the v2.x series and master.
<br>
<p>that being said, the default io module here is ompio, and it is 
<br>
currently buggy, so if you are using these series, you need to
<br>
<p>mpirun --mca io romio314 ...
<br>
<p>for the time being
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/31/2016 2:27 PM, Cihan Altinay wrote:
<br>
<span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently upgraded my distribution-supplied OpenMPI packages (debian) 
</span><br>
<span class="quotelev1">&gt; from 1.6.5 to 1.10.2 and the attached test is no longer guaranteed to 
</span><br>
<span class="quotelev1">&gt; produce the expected output.
</span><br>
<span class="quotelev1">&gt; In plain English what the test is doing is:
</span><br>
<span class="quotelev1">&gt; 1) open a file in parallel (all on the same local ext3/4 filesystem),
</span><br>
<span class="quotelev1">&gt; 2) use MPI_File_write_at() or MPI_File_write_shared() to write to it,
</span><br>
<span class="quotelev1">&gt; 3) close the file using MPI_File_close(),
</span><br>
<span class="quotelev1">&gt; 4) then check the file size (either by stat(), or by fseek+ftell)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My reading of the standard is that MPI_File_close() is a collective 
</span><br>
<span class="quotelev1">&gt; operation so I should reliably get the correct file size in step 4. 
</span><br>
<span class="quotelev1">&gt; However, while this worked with version 1.6.5 and with Intel MPI this 
</span><br>
<span class="quotelev1">&gt; is no longer the case with the current OpenMPI version.
</span><br>
<span class="quotelev1">&gt; I was able to confirm the same behaviour on a fresh Ubuntu 16.0.4 
</span><br>
<span class="quotelev1">&gt; install in a VM.
</span><br>
<span class="quotelev1">&gt; The more ranks I use the more likely I get a wrong file size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything I'm missing or is this a regression?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Cihan
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29335.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29333.php">Cihan Altinay: "[OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>In reply to:</strong> <a href="29333.php">Cihan Altinay: "[OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29335.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29335.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
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
