<?
$subject_val = "Re: [OMPI users] need help with a code segment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 16:28:04 2009" -->
<!-- isoreceived="20090811202804" -->
<!-- sent="Tue, 11 Aug 2009 16:27:59 -0400" -->
<!-- isosent="20090811202759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] need help with a code segment" -->
<!-- id="0ED67506-E1CB-4282-B5A7-98E308A6D0E4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F206BCE96E_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] need help with a code segment<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 16:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10309.php">Gus Correa: "Re: [OMPI users] Automated tuning tool"</a>
<li><strong>Previous message:</strong> <a href="10307.php">Borenstein, Bernard S: "[OMPI users] need help with a code segment"</a>
<li><strong>In reply to:</strong> <a href="10307.php">Borenstein, Bernard S: "[OMPI users] need help with a code segment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you including &lt;mpi.h&gt;?
<br>
<p>I notice you have a -D for OMPI_MPI_ -- perhaps &lt;mpi.h&gt; is only  
<br>
included if you -DLAM_MPI_...?  (that's a total guess)
<br>
<p><p>On Aug 11, 2009, at 4:18 PM, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build a code with OPENMPI 1.3.3 that compiles with LAM/ 
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is using mpicc and here is the code segment and error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void drt_pll_init(int my_rank,int num_processors);
</span><br>
<span class="quotelev1">&gt; #ifdef DRT_USE_MPI
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm drt_pll_mpi_split_comm_world(int key);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; int drt_pll_mpi_split_comm_world(int key);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /fltapps/boeing/cfd/mpi/openmpi1.3.3_intel91_64/bin/mpicc -I/fltapps/ 
</span><br>
<span class="quotelev1">&gt; boeing/cf
</span><br>
<span class="quotelev1">&gt; mpi/openmpi1.3.3_intel91_64/include -DDRT_PARALLEL -DDRT_USE_MPI - 
</span><br>
<span class="quotelev1">&gt; DPRECISION=2
</span><br>
<span class="quotelev1">&gt; -O -I../../P3Dlib/src -I/include  -I/fltusr/borensbs/local/include - 
</span><br>
<span class="quotelev1">&gt; DOMPI_MPI_
</span><br>
<span class="quotelev1">&gt;    -c -o drt_dv_app.o drt_dv_app.c
</span><br>
<span class="quotelev1">&gt; drt_Lib.h(336): error: identifier &quot;MPI_Comm&quot; is undefined
</span><br>
<span class="quotelev1">&gt;   MPI_Comm drt_pll_mpi_split_comm_world(int key);
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compilation aborted for drt_dv_app.c (code 2)
</span><br>
<span class="quotelev1">&gt; make[1]: *** [drt_dv_app.o] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope someone can help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; The Boeing Company
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________ Information from ESET NOD32 Antivirus, version of virus  
</span><br>
<span class="quotelev1">&gt; signature database 4326 (20090811) __________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.eset.com">http://www.eset.com</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10309.php">Gus Correa: "Re: [OMPI users] Automated tuning tool"</a>
<li><strong>Previous message:</strong> <a href="10307.php">Borenstein, Bernard S: "[OMPI users] need help with a code segment"</a>
<li><strong>In reply to:</strong> <a href="10307.php">Borenstein, Bernard S: "[OMPI users] need help with a code segment"</a>
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
