<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 09:39:08 2012" -->
<!-- isoreceived="20121031133908" -->
<!-- sent="Wed, 31 Oct 2012 15:38:43 +0200" -->
<!-- isosent="20121031133843" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYdZamWLCXjnmc+xJZWivjKzHSECW8hh0S3CRoEZ_dUGsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54964A9B-59C7-4DC6-A853-EFEBBF7BCD58_at_cisco.com" -->
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
<strong>Date:</strong> 2012-10-31 09:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11703.php">Jeff Squyres: "[OMPI devel] Open MPI MTT is moving"</a>
<li><strong>In reply to:</strong> <a href="11702.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 31, 2012 at 2:36 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 31, 2012, at 3:45 AM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With this patch, they'd get warnings about these uses, even though they are completely valid according to MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A suggestion was that this functionality could be disabled by default, and enabled with a magic macro.  Perhaps something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a vaild concern and a good idea for a FAQ entry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we flip the orientation such that -Wmpi-type-safety needs to be specified to enable this behavior, rather than -Wno-mpi-type-safety is required to disable it?  (or the equivalent -D's)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rationale here is that correct MPI applications should not need to add any extra compiler files to compile without warnings.
</span><br>
<p>I would disagree with this.  Compiler warnings are most useful when
<br>
they are on by default.  Only a few developers will turn on a warning
<br>
because warnings are hard to discover and enabling a warning requires
<br>
an explicit action from the developer.
<br>
<p>The pattern you described is an important one, but most MPI
<br>
applications will have matching buffer types/type tags.  Applications
<br>
that use code like that can disable the warning or silence it.
<br>
<p>If the pattern you describe is extremely frequent, we could disable
<br>
checking for 'char *' buffer type, just like for 'void *'.
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
<li><strong>Next message:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11703.php">Jeff Squyres: "[OMPI devel] Open MPI MTT is moving"</a>
<li><strong>In reply to:</strong> <a href="11702.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11705.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
