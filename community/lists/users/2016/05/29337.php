<?
$subject_val = "Re: [OMPI users] Regression in MPI_File_close?!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 22:34:04 2016" -->
<!-- isoreceived="20160601023404" -->
<!-- sent="Wed, 1 Jun 2016 11:33:59 +0900" -->
<!-- isosent="20160601023359" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression in MPI_File_close?!" -->
<!-- id="392262f3-0c58-8b64-04aa-271446b4e6b1_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6b32fd49-257b-4afb-e4ae-1e31d89cdaae_at_central.uh.edu" -->
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
<strong>Date:</strong> 2016-05-31 22:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29338.php">Cihan Altinay: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29336.php">Blair Climenhaga: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>In reply to:</strong> <a href="29335.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29338.php">Cihan Altinay: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29338.php">Cihan Altinay: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/06/29348.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar,
<br>
<p><p>this is the bug reported at 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
<br>
<p><p>now i am having some second thoughts about it ...
<br>
<p>per the MPI_File_close man page :
<br>
<p>&quot;MPI_File_close  first  synchronizes  file  state, then closes the file 
<br>
associated with fh.
<br>
<p>MPI_File_close is a collective routine. The user is responsible for 
<br>
ensuring that all outstanding requests associated with fh have completed 
<br>
before calling MPI_File_close.&quot;
<br>
<p><p>does this implies MPI_File_close() internally performs a MPI_Barrier() ?
<br>
<p>or am i over-interpreting the man page ?
<br>
<p><p>My point is if all tasks but one call MPI_File_close() *before* the 
<br>
other one calls MPI_File_write_at(), there is really nothing to flush, 
<br>
and though MPI_File_close() is a collective routine (just like 
<br>
MPI_Bcast() ) that does not necessarily means it has a MPI_Barrier() 
<br>
semantic.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/31/2016 11:18 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just for my understanding, which bug in ompio are you referring? I am 
</span><br>
<span class="quotelev1">&gt; only aware of a single (pretty minor) pending issue in the 2.x series
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/31/2016 1:28 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the report.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the romio included in the v1.10 series is a bit old and did not 
</span><br>
<span class="quotelev2">&gt;&gt; include the fix,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i made PR #1206 for that 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; feel free to manually apply the patch available at 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/commit/a0ea9fb6cbe4cf71567c9fc7fd8f4be384617ad4.diff">https://github.com/open-mpi/ompi-release/commit/a0ea9fb6cbe4cf71567c9fc7fd8f4be384617ad4.diff</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; note that the issue is already fixed in romio of the v2.x series and 
</span><br>
<span class="quotelev2">&gt;&gt; master.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that being said, the default io module here is ompio, and it is 
</span><br>
<span class="quotelev2">&gt;&gt; currently buggy, so if you are using these series, you need to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca io romio314 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for the time being
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/31/2016 2:27 PM, Cihan Altinay wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I recently upgraded my distribution-supplied OpenMPI packages 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (debian) from 1.6.5 to 1.10.2 and the attached test is no longer 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guaranteed to produce the expected output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In plain English what the test is doing is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) open a file in parallel (all on the same local ext3/4 filesystem),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) use MPI_File_write_at() or MPI_File_write_shared() to write to it,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) close the file using MPI_File_close(),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) then check the file size (either by stat(), or by fseek+ftell)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My reading of the standard is that MPI_File_close() is a collective 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operation so I should reliably get the correct file size in step 4. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, while this worked with version 1.6.5 and with Intel MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is no longer the case with the current OpenMPI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was able to confirm the same behaviour on a fresh Ubuntu 16.0.4 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install in a VM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The more ranks I use the more likely I get a wrong file size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there anything I'm missing or is this a regression?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cihan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/05/29333.php">http://www.open-mpi.org/community/lists/users/2016/05/29333.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab<a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29335.php">http://www.open-mpi.org/community/lists/users/2016/05/29335.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29337/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29338.php">Cihan Altinay: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29336.php">Blair Climenhaga: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>In reply to:</strong> <a href="29335.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29338.php">Cihan Altinay: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="29338.php">Cihan Altinay: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/06/29348.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
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
