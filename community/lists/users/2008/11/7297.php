<?
$subject_val = "Re: [OMPI users] ADIOI_GEN_DELETE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 17:41:28 2008" -->
<!-- isoreceived="20081112224128" -->
<!-- sent="Wed, 12 Nov 2008 16:41:23 -0600" -->
<!-- isosent="20081112224123" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ADIOI_GEN_DELETE" -->
<!-- id="20081112224123.GJ16693_at_mcs.anl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="dd4eed670810221941r7db90891v2f0136e851b81aab_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ADIOI_GEN_DELETE<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 17:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Previous message:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7079.php">Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;): "[OMPI users] ADIOI_GEN_DELETE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 23, 2008 at 12:41:45AM -0200, Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;) wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run a code using OpenMPI and I'm getting this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ADIOI_GEN_DELETE (line 22): **io No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know why this occurs, I only know this happens when I use more
</span><br>
<span class="quotelev1">&gt; than one process.
</span><br>
<p>Hey, sorry, I don't check in here very often, but I'm the &quot;ROMIO guy&quot;
<br>
around these parts. This is a harmless warning message. 
<br>
<p>You see this with more than one process because one process &quot;won&quot; and
<br>
deleted the file, and the other N-1 processes then try to delete a
<br>
file that doesn't exist.  
<br>
<p>If you ignore errors from MPI_File_delete, then you won't see this
<br>
error :&gt;
<br>
<p>MPI_FILE_DELETE is not a collective operation, so you can also just call
<br>
this from one process.
<br>
<p>==rob
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
<li><strong>Next message:</strong> <a href="7298.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Previous message:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7079.php">Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;): "[OMPI users] ADIOI_GEN_DELETE"</a>
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
