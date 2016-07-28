<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 10:58:29 2012" -->
<!-- isoreceived="20120202155829" -->
<!-- sent="Thu, 2 Feb 2012 17:58:05 +0200" -->
<!-- isosent="20120202155805" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYeaUgNCrbCrtVbkBDcpuE=S29Vfn_J0CCfMj_Lrh71EBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F2A1FC8.9030507_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2012-02-02 10:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10310.php">Jeff Squyres: "[OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Previous message:</strong> <a href="10308.php">Christopher Samuel: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="10308.php">Christopher Samuel: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 2, 2012 at 7:31 AM, Christopher Samuel
<br>
&lt;samuel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 29/01/12 10:07, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev2">&gt;&gt; My colleague and I want to implement a compile-time check (warning)
</span><br>
<span class="quotelev2">&gt;&gt; for clang compiler that specified buffer type matches passed
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting, is it possible to do the same for GCC with its plugin
</span><br>
<span class="quotelev1">&gt; architecture ?
</span><br>
<p>I haven't worked with GCC plugins, but after looking at the
<br>
documentation I think it is possible.
<br>
<p>Dmitri Gribenko
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
<li><strong>Next message:</strong> <a href="10310.php">Jeff Squyres: "[OMPI devel] MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>Previous message:</strong> <a href="10308.php">Christopher Samuel: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="10308.php">Christopher Samuel: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
