<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 12:48:50 2012" -->
<!-- isoreceived="20121026164850" -->
<!-- sent="Fri, 26 Oct 2012 19:48:24 +0300" -->
<!-- isosent="20121026164824" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYe05XeGMVfsGHg1tUKVJ59AtAoVR0eQQbYdzv+2MgeytQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="45D8768C-6B79-40BA-9E57-816CA7B518D8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-26 12:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11657.php">Edgar Gabriel: "[OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11655.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>In reply to:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 26, 2012 at 6:37 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This all now looks good to me
</span><br>
<p>Thank you for reviewing and helping me to get this up to the project's
<br>
standards!
<br>
<p><span class="quotelev1">&gt; For me to commit this, can you do two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I hate to do this, but this is more than a &quot;trivial&quot; patch that we could accept without attribution.  Can you do one of two things:
</span><br>
<span class="quotelev1">&gt;    1a. Sign a contributor agreement (almost identical to the Apache contributor agreement): <a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a>
</span><br>
<p>I sent it synchronously with v1 of the patch.  I understand that it
<br>
was a while ago, but it should be sitting somewhere in your mail.
<br>
IIRC, I sent a &quot;corporate&quot; one as an employee of High Performance
<br>
Computing Center at NTUU &quot;KPI&quot;. If you can not find it -- I can send
<br>
another one (but it is a bit complicated to get legal documents like
<br>
this signed, so please try to find the one I sent).
<br>
<p><span class="quotelev1">&gt;    1b. Send a v6 of your patch to this public mailing list with a BSD-compatible license at the top, thereby releasing your patch under that license (which is compatible with OMPI's).
</span><br>
<p>Attached.
<br>
<p><span class="quotelev1">&gt; 2. Give me a short description that I can use to put into the README / FAQ / etc. about what this functionality does, what prerequisites are needed (e.g., version of clang, etc.).
</span><br>
<p>Here's what I came up with.  Feel free to edit or ask for clarifications.
<br>
<p>=== NEWS entry ===
<br>
mpi.h header was annotated to enable compile-time type checking of
<br>
buffers and type tags.  These annotations are understood by Clang 3.2
<br>
and later versions.  This imposes no requirements on the compiler
<br>
which is used to compile OpenMPI itself (for example, one can compile
<br>
OpenMPI with GCC and use Clang to compile an MPI application).
<br>
<p>=== FAQ entry ===
<br>
How to diagnose mismatches between buffer type and type tag?
<br>
<p>In OpenMPI communication functions' declarations and predefined type
<br>
tags are annotated with &lt;tt&gt;pointer_with_type_tag&lt;/tt&gt; and
<br>
&lt;tt&gt;type_tag_for_datatype&lt;/tt&gt; attributes.  These attributes allow
<br>
compilers to check that buffer type matches the type tag.
<br>
<p>These attributes are understood by Clang 3.2 and later versions.
<br>
Please note that this imposes no requirements on the compiler which is
<br>
used to compile OpenMPI itself (for example, one can compile OpenMPI
<br>
with GCC and use Clang to compile an MPI application).
<br>
<p>For example, consider the following code:
<br>
<p>double *double_buf = /* ... */;
<br>
MPI_Send(double_buf, 1, MPI_INT, /* ... */);
<br>
<p>Clang produces a diagnostic:
<br>
<p>wrong.c:151:12: warning: argument type 'double *' doesn't match
<br>
specified 'mpi' type tag that requires 'int *' [-Wtype-safety]
<br>
&nbsp;&nbsp;MPI_Send(double_buf, 1, MPI_INT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~~~~~~~~     ~~~~~~~
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11656/ompi-v6.patch">ompi-v6.patch</a>
</ul>
<!-- attachment="ompi-v6.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11657.php">Edgar Gabriel: "[OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11655.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>In reply to:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
