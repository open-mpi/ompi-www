<?
$subject_val = "[OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 06:06:47 2013" -->
<!-- isoreceived="20130904100647" -->
<!-- sent="Wed, 4 Sep 2013 13:06:07 +0300" -->
<!-- isosent="20130904100607" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED" -->
<!-- id="CAEcYPwBbxJ2WYoqeMG8YMLUSOS4vKFr-JKcFsCdh82i_P4Ss5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 06:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12862.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>Previous message:</strong> <a href="12860.php">George Bosilca: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12862.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>Reply:</strong> <a href="12862.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using Open MPI 1.6.5 as packaged in Fedora 19. This build does not
<br>
enable THREAD_MULTIPLE support:
<br>
<p>$ ompi_info | grep Thread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
<br>
<p>In my code I call MPI_Init_thread(required=MPI_THREAD_MULTIPLE). After
<br>
that, MPI_Query_thread() returns MPI_THREAD_SERIALIZED. But calling
<br>
MPI_Is_thread_main() always return TRUE, either in the main thread or
<br>
in newly spawned threads.
<br>
<p>I think this code is wrong for the case provided==MPI_THREAD_SERIALIZED :
<br>
<a href="https://bitbucket.org/ompiteam/ompi-svn-mirror/src/0a159982d7204d4b4b9fa61771d0fc7e9dc16771/ompi/mpi/c/is_thread_main.c?at=default#cl-50">https://bitbucket.org/ompiteam/ompi-svn-mirror/src/0a159982d7204d4b4b9fa61771d0fc7e9dc16771/ompi/mpi/c/is_thread_main.c?at=default#cl-50</a>
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12862.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>Previous message:</strong> <a href="12860.php">George Bosilca: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12862.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>Reply:</strong> <a href="12862.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
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
