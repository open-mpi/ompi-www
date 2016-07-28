<?
$subject_val = "[OMPI users] Question on shmem MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 13:10:25 2012" -->
<!-- isoreceived="20121107181025" -->
<!-- sent="Wed, 7 Nov 2012 18:09:25 +0000" -->
<!-- isosent="20121107180925" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Question on shmem MCA parameter" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F168D48_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Question on shmem MCA parameter<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 13:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20652.php">Blosch, Edwin L: "[OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20650.php">George Bosilca: "Re: [OMPI users] Communication round-trip time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using this parameter &quot;shmem_mmap_relocate_backing_file&quot; and noticed that the relocation variable is identified as &quot;shmem_mmap_opal_shmem_mmap_backing_file_base_dir&quot; in its documentation, but then the next parameter that appears from ompi_info is spelled differently, namely &quot;shmem_mmap_backing_file_base_dir&quot;. 
<br>
<p>Is the first name just a typo?
<br>
<p><p><span class="quotelev1">&gt; MCA shmem: parameter &quot;shmem_mmap_relocate_backing_file&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source: default value) 
</span><br>
<span class="quotelev1">&gt; Whether to change the default placement of 
</span><br>
<span class="quotelev1">&gt; backing files or not 
</span><br>
<span class="quotelev1">&gt; (Negative = try to relocate backing files to 
</span><br>
<span class="quotelev1">&gt; an area rooted at 
</span><br>
<span class="quotelev1">&gt; the path specified by 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shmem_mmap_opal_shmem_mmap_backing_file_base_dir, but continue 
</span><br>
<span class="quotelev1">&gt; with the default path if the relocation 
</span><br>
<span class="quotelev1">&gt; fails, 0 = do not 
</span><br>
<span class="quotelev1">&gt; relocate, Positive = same as the negative 
</span><br>
<span class="quotelev1">&gt; option, but will fail 
</span><br>
<span class="quotelev1">&gt; if the relocation fails. 
</span><br>
<span class="quotelev1">&gt; MCA shmem: parameter &quot;shmem_mmap_backing_file_base_dir&quot; 
</span><br>
<span class="quotelev1">&gt; (current value: 
</span><br>
<span class="quotelev1">&gt; &lt;/dev/shm&gt;, data source: default value) 
</span><br>
<span class="quotelev1">&gt; Specifies where backing files will be created when 
</span><br>
<span class="quotelev1">&gt; shmem_mmap_relocate_backing_file is in use.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20652.php">Blosch, Edwin L: "[OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20650.php">George Bosilca: "Re: [OMPI users] Communication round-trip time"</a>
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
