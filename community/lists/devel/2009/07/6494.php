<?
$subject_val = "Re: [OMPI devel] Question on MPI_Info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 09:22:09 2009" -->
<!-- isoreceived="20090722132209" -->
<!-- sent="Wed, 22 Jul 2009 09:22:04 -0400" -->
<!-- isosent="20090722132204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question on MPI_Info" -->
<!-- id="14F14F34-2D27-445A-857B-AD6817EBA1C2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="610ca1a30907160325ia512ffdlb161bdd58f0a13cf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question on MPI_Info<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 09:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6495.php">Jeff Squyres: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Previous message:</strong> <a href="6493.php">Bernard Secher - SFME/LGLS: "[OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<li><strong>In reply to:</strong> <a href="6445.php">Prasadcse Perera: "[OMPI devel] Question on MPI_Info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to either initialize the info object that you are passing  
<br>
down (with MPI_Info_create, and later free it with MPI_Info_free) to  
<br>
MPI_File_open or pass in MPI_INFO_NULL.
<br>
<p><p>On Jul 16, 2009, at 6:25 AM, Prasadcse Perera wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I have been trying some simple code to write a file using Parallel I/ 
</span><br>
<span class="quotelev1">&gt; O on Open MPI. Here I specify the MPI_Info value as 0 and the  
</span><br>
<span class="quotelev1">&gt; execution terminates with this messge for any number of processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_File_open
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_INFO: invalid info object
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The src file is attached here .And im using openmpi-1.3.3a1r21566  
</span><br>
<span class="quotelev1">&gt; build.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</span><br>
<span class="quotelev1">&gt; &lt;file_test.cc&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6495.php">Jeff Squyres: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Previous message:</strong> <a href="6493.php">Bernard Secher - SFME/LGLS: "[OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<li><strong>In reply to:</strong> <a href="6445.php">Prasadcse Perera: "[OMPI devel] Question on MPI_Info"</a>
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
