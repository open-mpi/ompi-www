<?
$subject_val = "[OMPI devel] Weird problem with strace, and question about transfers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 14:11:02 2010" -->
<!-- isoreceived="20100722181102" -->
<!-- sent="22 Jul 2010 19:10:57 +0100" -->
<!-- isosent="20100722181057" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="[OMPI devel] Weird problem with strace, and question about transfers" -->
<!-- id="Prayer.1.3.3.1007221910570.26305_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B88F0F1F-A9D7-462F-9BE7-459CB33FA575_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Weird problem with strace, and question about transfers<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 14:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8212.php">nadia.derbey: "[OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<li><strong>Previous message:</strong> <a href="8210.php">Jeff Squyres: "[OMPI devel] Updated SVN permissions"</a>
<li><strong>In reply to:</strong> <a href="8210.php">Jeff Squyres: "[OMPI devel] Updated SVN permissions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8214.php">N.M. Maclaren: "Re: [OMPI devel] Weird problem with strace, and question about transfers"</a>
<li><strong>Reply:</strong> <a href="8214.php">N.M. Maclaren: "Re: [OMPI devel] Weird problem with strace, and question about transfers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As part of writing a course, I was trying to investigate how OpenMPI 
<br>
handles transfers when using bog-standard Linux and Ethernet (which I 
<br>
assume means TCP/IP). Having failed to track down the actual transfer call, 
<br>
I ran a simple test program under 'strace -f' but, in between two 
<br>
diagnostic calls (used to pinpoint the MPI_Ssend), there was nothing but 
<br>
poll() calls! Now that ain't possible ....
<br>
<p>Clearly, something odd is going on, but my test is sufficiently simple (and
<br>
checked) that I can't see much possibility of a trivial error, but that's
<br>
still the most likely possibility.  Any suggestions welcome - especially
<br>
pointers to the actual transfer call!
<br>
<p>Incidentally, the issue I am investigating is how the MPI transfers are 
<br>
likely to use the cache, and hence how much impact there is likely to be 
<br>
when overlapping memory-bound computation or GPU use, especially when using 
<br>
lots of cores. That's a long-standing and not-pretty problem with most 
<br>
MPIs.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8212.php">nadia.derbey: "[OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<li><strong>Previous message:</strong> <a href="8210.php">Jeff Squyres: "[OMPI devel] Updated SVN permissions"</a>
<li><strong>In reply to:</strong> <a href="8210.php">Jeff Squyres: "[OMPI devel] Updated SVN permissions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8214.php">N.M. Maclaren: "Re: [OMPI devel] Weird problem with strace, and question about transfers"</a>
<li><strong>Reply:</strong> <a href="8214.php">N.M. Maclaren: "Re: [OMPI devel] Weird problem with strace, and question about transfers"</a>
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
