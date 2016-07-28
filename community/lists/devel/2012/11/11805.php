<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 11:48:05 2012" -->
<!-- isoreceived="20121119164805" -->
<!-- sent="Mon, 19 Nov 2012 18:47:37 +0200" -->
<!-- isosent="20121119164737" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYfhdijkueBJRoQPtr3MQU2_38ABaT97kf4d9NWP-QV=Bg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F98F66E5-A40A-429C-AF54-E71A6EB3E604_at_cisco.com" -->
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
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 11:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11804.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11804.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 19, 2012 at 6:35 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; (SC is now over, and, aside from the US holiday later this week, I'm picking up the items that I've let fall on the floor for the past 1-2 months...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2012, at 3:51 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That said, if we didn't throw a warning if the pointer is of type void* or
</span><br>
<span class="quotelev2">&gt;&gt; char*, I think I'd be mostly ok with the patch being on by default.  I'm
</span><br>
<span class="quotelev2">&gt;&gt; not sure if that's possible or not...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might be a good compromise.  How about the following (assuming this all only happens for compilers that support this stuff, which, at the moment, will be clang version &gt;= X.Y.Z, for some values of X, Y, and Z):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the warnings are enabled by default in mpi.h
</span><br>
<p>Awesome!
<br>
<p><span class="quotelev1">&gt; 2. the warnings can be disabled by a magic -D (e.g., -DDISABLE_MPI_TYPE_CHECKING or whatever -- the -Wno-type-safety option sounds scary; does it really disable *ALL* type safety?)
</span><br>
<p>-Wno-type-safety just turns off warnings from 'type-safety' group.
<br>
Just like -Wno-unitialize turns off warnings about 'uninitialized'.
<br>
<p><span class="quotelev1">&gt; 3. the warnings are disabled for buffer types of (char*) or (void*)
</span><br>
<p>I think that disabling warnings for char* might make sense.  But
<br>
during the LLVM developer meeting I talked with Hal Finkel (MPICH2
<br>
developer) about this.  These annotations are already integrated into
<br>
MPICH2.  Hal said that he found real bugs with these warnings
<br>
involving char* buffers.
<br>
<p>Is it really not an option for the codebase in question to build with
<br>
-D... or -Wno-...?
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11804.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11804.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
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
