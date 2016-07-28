<?
$subject_val = "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 06:11:51 2013" -->
<!-- isoreceived="20130904101151" -->
<!-- sent="Wed, 4 Sep 2013 12:11:47 +0200" -->
<!-- isosent="20130904101147" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED" -->
<!-- id="FE00F0AE-ADCC-4563-9E2F-804A315DA5FC_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwBbxJ2WYoqeMG8YMLUSOS4vKFr-JKcFsCdh82i_P4Ss5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 06:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12863.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>Previous message:</strong> <a href="12861.php">Lisandro Dalcin: "[OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>In reply to:</strong> <a href="12861.php">Lisandro Dalcin: "[OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12863.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>Reply:</strong> <a href="12863.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're in the SERIALIZED mode, so any thread can make MPI calls. As in such mode there is no notion of thread_main, consistently returning true out of MPI_Is_thread_main seem like a reasonable approach.
<br>
<p>This function will have a different behavior in the FUNNELED mode.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Sep 4, 2013, at 12:06 , Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm using Open MPI 1.6.5 as packaged in Fedora 19. This build does not
</span><br>
<span class="quotelev1">&gt; enable THREAD_MULTIPLE support:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info | grep Thread
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my code I call MPI_Init_thread(required=MPI_THREAD_MULTIPLE). After
</span><br>
<span class="quotelev1">&gt; that, MPI_Query_thread() returns MPI_THREAD_SERIALIZED. But calling
</span><br>
<span class="quotelev1">&gt; MPI_Is_thread_main() always return TRUE, either in the main thread or
</span><br>
<span class="quotelev1">&gt; in newly spawned threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this code is wrong for the case provided==MPI_THREAD_SERIALIZED :
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/ompiteam/ompi-svn-mirror/src/0a159982d7204d4b4b9fa61771d0fc7e9dc16771/ompi/mpi/c/is_thread_main.c?at=default#cl-50">https://bitbucket.org/ompiteam/ompi-svn-mirror/src/0a159982d7204d4b4b9fa61771d0fc7e9dc16771/ompi/mpi/c/is_thread_main.c?at=default#cl-50</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (INTEC/CONICET-UNL)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1011)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12863.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>Previous message:</strong> <a href="12861.php">Lisandro Dalcin: "[OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>In reply to:</strong> <a href="12861.php">Lisandro Dalcin: "[OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12863.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>Reply:</strong> <a href="12863.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
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
