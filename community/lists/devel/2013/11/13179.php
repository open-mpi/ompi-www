<?
$subject_val = "[OMPI devel] unable to open mca_shmem_mmap";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 02:45:17 2013" -->
<!-- isoreceived="20131101064517" -->
<!-- sent="Fri, 1 Nov 2013 02:45:16 -0400" -->
<!-- isosent="20131101064516" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="[OMPI devel] unable to open mca_shmem_mmap" -->
<!-- id="CANFHntA-c_yFcuqjjTrE_ODDmB7GEqDhTt1J9i2BNcZyNFV4kg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] unable to open mca_shmem_mmap<br>
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 02:45:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] unable to open mca_shmem_mmap"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13178.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] unable to open mca_shmem_mmap"</a>
<li><strong>Reply:</strong> <a href="13180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] unable to open mca_shmem_mmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have this developers version of openmpi1.9 installed on my system.
<br>
The helloword program works but on another program it throws these
<br>
errors.
<br>
<p>Any help?
<br>
<p>mca: base: component_find: unable to open
<br>
/export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_mmap:
<br>
/export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_mmap.so:
<br>
undefined symbol: opal_show_help (ignored)
<br>
<p>mca: base: component_find: unable to open
<br>
/export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_posix:
<br>
/export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_posix.so:
<br>
undefined symbol: opal_show_help (ignored)
<br>
<p>mca: base: component_find: unable to open
<br>
/export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_sysv:
<br>
/export/home2/SEECS/bibrak/work/programs/installs/openmpi1.9/lib/openmpi/mca_shmem_sysv.so:
<br>
undefined symbol: opal_show_help (ignored)
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
<p><p>Thanks
<br>
<pre>
-- 
Bibrak Qamar
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] unable to open mca_shmem_mmap"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13178.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] unable to open mca_shmem_mmap"</a>
<li><strong>Reply:</strong> <a href="13180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] unable to open mca_shmem_mmap"</a>
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
