<?
$subject_val = "[OMPI devel] Option to switch from shmem to kmem module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 11:55:17 2016" -->
<!-- isoreceived="20160713155517" -->
<!-- sent="Wed, 13 Jul 2016 21:24:57 +0530" -->
<!-- isosent="20160713155457" -->
<!-- name="Abhishek Joshi" -->
<!-- email="abhishek.joshi_at_[hidden]" -->
<!-- subject="[OMPI devel] Option to switch from shmem to kmem module" -->
<!-- id="CAK_Rsw1UJAZe2RoJqDa61ts5hp+h80rQYLBvARVMy83cHo0xVg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Option to switch from shmem to kmem module<br>
<strong>From:</strong> Abhishek Joshi (<em>abhishek.joshi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 11:54:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19201.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19199.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Is there any option in mpirun which enables us to switch dynamically from
<br>
shmem mode to  knem/xpmem mode beyond a specifiable message size?
<br>
<p>This is because, according to my tests, knem performs better than shmem
<br>
only at large message sizes.
<br>
<p><pre>
-- 
Abhishek
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19200/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19201.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19199.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
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
