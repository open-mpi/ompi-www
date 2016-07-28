<?
$subject_val = "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 17:51:11 2008" -->
<!-- isoreceived="20081112225111" -->
<!-- sent="Wed, 12 Nov 2008 16:51:07 -0600" -->
<!-- isosent="20081112225107" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&amp;gt;array_of_gsizes[1]" -->
<!-- id="20081112225106.GK16693_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D4A0263B-0703-4EAD-90F6-E24BEF9CB374_at_mit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 17:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7299.php">Antonio Molins: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Previous message:</strong> <a href="7297.php">Robert Latham: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7299.php">Antonio Molins: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Reply:</strong> <a href="7299.php">Antonio Molins: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 31, 2008 at 11:19:39AM -0400, Antonio Molins wrote:
<br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem in a nutshell: it looks like, when I use  
</span><br>
<span class="quotelev1">&gt; MPI_Type_create_darray with an argument array_of_gsizes where  
</span><br>
<span class="quotelev1">&gt; array_of_gsizes[0]&gt;array_of_gsizes[1], the datatype returned goes  
</span><br>
<span class="quotelev1">&gt; through MPI_Type_commit() just fine, but then it causes  
</span><br>
<span class="quotelev1">&gt; MPI_File_set_view to crash!! Any idea as to why this is happening?
</span><br>
<p>Hi.  It sounds like from your description (and confirmed in your
<br>
backtrace) that this is a ROMIO bug.  
<br>
<p>Do you happen to have a small test case for this crash?
<br>
<p>Thanks
<br>
==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7299.php">Antonio Molins: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Previous message:</strong> <a href="7297.php">Robert Latham: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7299.php">Antonio Molins: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Reply:</strong> <a href="7299.php">Antonio Molins: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
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
