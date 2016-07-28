<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 11:35:29 2012" -->
<!-- isoreceived="20121119163529" -->
<!-- sent="Mon, 19 Nov 2012 11:35:24 -0500" -->
<!-- isosent="20121119163524" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking" -->
<!-- id="F98F66E5-A40A-429C-AF54-E71A6EB3E604_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD239DCB36_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 11:35:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11803.php">Jeff Squyres: "[OMPI devel] Dec. devel meeting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11718.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(SC is now over, and, aside from the US holiday later this week, I'm picking up the items that I've let fall on the floor for the past 1-2 months...)
<br>
<p><p>On Oct 31, 2012, at 3:51 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; That said, if we didn't throw a warning if the pointer is of type void* or
</span><br>
<span class="quotelev1">&gt; char*, I think I'd be mostly ok with the patch being on by default.  I'm
</span><br>
<span class="quotelev1">&gt; not sure if that's possible or not...
</span><br>
<p><p>This might be a good compromise.  How about the following (assuming this all only happens for compilers that support this stuff, which, at the moment, will be clang version &gt;= X.Y.Z, for some values of X, Y, and Z):
<br>
<p>1. the warnings are enabled by default in mpi.h
<br>
2. the warnings can be disabled by a magic -D (e.g., -DDISABLE_MPI_TYPE_CHECKING or whatever -- the -Wno-type-safety option sounds scary; does it really disable *ALL* type safety?)
<br>
3. the warnings are disabled for buffer types of (char*) or (void*)
<br>
<p>Howzat?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11803.php">Jeff Squyres: "[OMPI devel] Dec. devel meeting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11718.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11805.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
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
