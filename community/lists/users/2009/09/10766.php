<?
$subject_val = "[OMPI users] segfault on finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 09:47:53 2009" -->
<!-- isoreceived="20090925134753" -->
<!-- sent="Fri, 25 Sep 2009 15:49:16 +0200" -->
<!-- isosent="20090925134916" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="[OMPI users] segfault on finalize" -->
<!-- id="4ABCCA5C.6010901_at_irisa.fr" -->
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
<strong>Subject:</strong> [OMPI users] segfault on finalize<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 09:49:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10767.php">Pacey, Mike: "[OMPI users] Help tracing casue of readv errors"</a>
<li><strong>Previous message:</strong> <a href="10765.php">Blosch, Edwin L: "[OMPI users] &quot;Failed to find the following executable&quot; problem under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>Reply:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm using r21970 of the trunk on Linux  2.6.18-3-amd64 and gcc version 
<br>
4.2.3 (Debian 4.2.3-2).
<br>
<p>When I compile open mpi with the default options, it works.
<br>
But if I use --with-platform=optimized option, then I get a segfault for 
<br>
every program I run.
<br>
<p>==3073==  Access not within mapped region at address 0x30
<br>
==3073==    at 0x535544D: mca_base_param_finalize (in 
<br>
/home/tropars/open-mpi/install/lib/libopen-pal.so.0.0.0)
<br>
==3073==    by 0x5339D55: opal_finalize_util (in 
<br>
/home/tropars/open-mpi/install/lib/libopen-pal.so.0.0.0)
<br>
==3073==    by 0x4E5A228: ompi_mpi_finalize (in 
<br>
/home/tropars/open-mpi/install/lib/libmpi.so.0.0.0)
<br>
==3073==    by 0x400BF2: main (in /home/tropars/open-mpi/tests/ring)
<br>
<p>Regards,
<br>
<p>Thomas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10767.php">Pacey, Mike: "[OMPI users] Help tracing casue of readv errors"</a>
<li><strong>Previous message:</strong> <a href="10765.php">Blosch, Edwin L: "[OMPI users] &quot;Failed to find the following executable&quot; problem under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>Reply:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
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
