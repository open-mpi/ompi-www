<?
$subject_val = "[OMPI devel] autosizing the shared memory backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 19:18:47 2009" -->
<!-- isoreceived="20090114001847" -->
<!-- sent="Tue, 13 Jan 2009 16:22:57 -0800" -->
<!-- isosent="20090114002257" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] autosizing the shared memory backing file" -->
<!-- id="496D3061.3040201_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] autosizing the shared memory backing file<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 19:22:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5156.php">Patrick Geoffray: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the sm BTL, there is a file that each process mmaps in for shared 
<br>
memory.
<br>
<p>I'm trying to get mpool_sm to size the file appropriately.  So, I would 
<br>
like mpool_sm to call some mca_btl_sm function that provides a good 
<br>
guess of the size.  (mpool_sm creates and mmaps the file, but the size 
<br>
depends on parameters like eager limit and max frag size that are known 
<br>
by the btl_sm.)
<br>
<p>On Solaris, this works fine.
<br>
<p>On Linux, at mpirun time, I get
<br>
<p>./a.out: symbol lookup error: 
<br>
/home/eugene/workspace/lib/openmpi/mca_mpool_sm.so: undefined symbol: 
<br>
mca_btl_sm_get_file_size
<br>
./a.out: symbol lookup error: 
<br>
/home/eugene/workspace/lib/openmpi/mca_mpool_sm.so: undefined symbol: 
<br>
mca_btl_sm_get_file_size
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 17224 on
<br>
node mynode-0 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>What's up?  How do I get mpool_sm to call btl_sm?  Why does this depend 
<br>
on OS?  (I am okay with btl_sm calling mpool_sm instead if that would help.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5156.php">Patrick Geoffray: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
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
