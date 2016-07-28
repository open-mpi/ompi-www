<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 03:38:03 2007" -->
<!-- isoreceived="20070719073803" -->
<!-- sent="Thu, 19 Jul 2007 09:37:53 +0200" -->
<!-- isosent="20070719073753" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DataTypes with &amp;quot;holes&amp;quot; for writing files" -->
<!-- id="9b0da5ce0707190037v3d6e95ffwc7b3b9b44da2da21_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070718154324.GW8439_at_mcs.anl.gov" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 03:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3723.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3709.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Robert
<br>
Thanks for the infos.
<br>
<p>In the meantime I found a workaround.
<br>
Instead of resized datatypes with holes I use simple vectors
<br>
with appropriately calculated offsets in MPI_FILE_WRITE_AT.
<br>
Probably not as elegant, but seems to work OK.
<br>
<p>Jody
<br>
<p><p>On 7/18/07, Robert Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 10, 2007 at 04:36:01PM +0000, jody wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I think there is still some problem.
</span><br>
<span class="quotelev2">&gt; &gt; I create different datatypes by resizing MPI_SHORT with
</span><br>
<span class="quotelev2">&gt; &gt; different negative lower bounds (depending on the rank)
</span><br>
<span class="quotelev2">&gt; &gt; and the same extent (only depending on the number of processes).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I get an error as soon as  MPI_File_set_view is called with my
</span><br>
<span class="quotelev1">&gt; new
</span><br>
<span class="quotelev2">&gt; &gt; datatype:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Error: Unsupported datatype passed to ADIOI_Count_contiguous_blocks
</span><br>
<span class="quotelev2">&gt; &gt; [aim-nano_02:22229] MPI_ABORT invoked on rank 0 in communicator
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD with errorcode 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was wrong about this being a problem with OpenMPI's version of
</span><br>
<span class="quotelev1">&gt; ROMIO.  The OpenMPI guys have synced up fairly recently with the
</span><br>
<span class="quotelev1">&gt; OpenMPI in MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ROMIO, even the very latest in CVS version, doesn't support resized
</span><br>
<span class="quotelev1">&gt; types yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like you'll have to take George's alternate idea of MPI_UB and
</span><br>
<span class="quotelev1">&gt; MPI_LB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll let the OpenMPI guys know when resized support is in place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion.
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3722/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3723.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3709.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
