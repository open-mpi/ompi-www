<?
$subject_val = "Re: [OMPI users] Regression in MPI_File_close?!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 10:18:22 2016" -->
<!-- isoreceived="20160531141822" -->
<!-- sent="Tue, 31 May 2016 09:18:23 -0500" -->
<!-- isosent="20160531141823" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression in MPI_File_close?!" -->
<!-- id="6b32fd49-257b-4afb-e4ae-1e31d89cdaae_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="d66cce00-4fa4-ec91-c08b-7a77d6e51f95_at_rist.or.jp" -->
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
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-31 10:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29336.php">Blair Climenhaga: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>Previous message:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>In reply to:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29337.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29337.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
just for my understanding, which bug in ompio are you referring? I am 
<br>
only aware of a single (pretty minor) pending issue in the 2.x series
<br>
<p>Thanks
<br>
<p>Edgar
<br>
<p><p>On 5/31/2016 1:28 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the romio included in the v1.10 series is a bit old and did not 
</span><br>
<span class="quotelev1">&gt; include the fix,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i made PR #1206 for that 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; feel free to manually apply the patch available at 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/commit/a0ea9fb6cbe4cf71567c9fc7fd8f4be384617ad4.diff">https://github.com/open-mpi/ompi-release/commit/a0ea9fb6cbe4cf71567c9fc7fd8f4be384617ad4.diff</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note that the issue is already fixed in romio of the v2.x series and 
</span><br>
<span class="quotelev1">&gt; master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, the default io module here is ompio, and it is 
</span><br>
<span class="quotelev1">&gt; currently buggy, so if you are using these series, you need to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca io romio314 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for the time being
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/31/2016 2:27 PM, Cihan Altinay wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I recently upgraded my distribution-supplied OpenMPI packages 
</span><br>
<span class="quotelev2">&gt;&gt; (debian) from 1.6.5 to 1.10.2 and the attached test is no longer 
</span><br>
<span class="quotelev2">&gt;&gt; guaranteed to produce the expected output.
</span><br>
<span class="quotelev2">&gt;&gt; In plain English what the test is doing is:
</span><br>
<span class="quotelev2">&gt;&gt; 1) open a file in parallel (all on the same local ext3/4 filesystem),
</span><br>
<span class="quotelev2">&gt;&gt; 2) use MPI_File_write_at() or MPI_File_write_shared() to write to it,
</span><br>
<span class="quotelev2">&gt;&gt; 3) close the file using MPI_File_close(),
</span><br>
<span class="quotelev2">&gt;&gt; 4) then check the file size (either by stat(), or by fseek+ftell)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My reading of the standard is that MPI_File_close() is a collective 
</span><br>
<span class="quotelev2">&gt;&gt; operation so I should reliably get the correct file size in step 4. 
</span><br>
<span class="quotelev2">&gt;&gt; However, while this worked with version 1.6.5 and with Intel MPI this 
</span><br>
<span class="quotelev2">&gt;&gt; is no longer the case with the current OpenMPI version.
</span><br>
<span class="quotelev2">&gt;&gt; I was able to confirm the same behaviour on a fresh Ubuntu 16.0.4 
</span><br>
<span class="quotelev2">&gt;&gt; install in a VM.
</span><br>
<span class="quotelev2">&gt;&gt; The more ranks I use the more likely I get a wrong file size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything I'm missing or is this a regression?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Cihan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29336.php">Blair Climenhaga: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>Previous message:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>In reply to:</strong> <a href="29334.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29337.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29337.php">Gilles Gouaillardet: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
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
