<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 08:36:47 2012" -->
<!-- isoreceived="20121031123647" -->
<!-- sent="Wed, 31 Oct 2012 08:36:42 -0400" -->
<!-- isosent="20121031123642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="54964A9B-59C7-4DC6-A853-EFEBBF7BCD58_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYeq5RKx=9CEw-fbDqAWMMyZiN5koFSpQ3UwhYSYbP-21Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 08:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11703.php">Jeff Squyres: "[OMPI devel] Open MPI MTT is moving"</a>
<li><strong>Previous message:</strong> <a href="11701.php">Matsumoto, Yuki: "[OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>In reply to:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11704.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11704.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2012, at 3:45 AM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev2">&gt;&gt; With this patch, they'd get warnings about these uses, even though they are completely valid according to MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A suggestion was that this functionality could be disabled by default, and enabled with a magic macro.  Perhaps something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a vaild concern and a good idea for a FAQ entry.
</span><br>
<p>Can we flip the orientation such that -Wmpi-type-safety needs to be specified to enable this behavior, rather than -Wno-mpi-type-safety is required to disable it?  (or the equivalent -D's)
<br>
<p>The rationale here is that correct MPI applications should not need to add any extra compiler files to compile without warnings.
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
<li><strong>Next message:</strong> <a href="11703.php">Jeff Squyres: "[OMPI devel] Open MPI MTT is moving"</a>
<li><strong>Previous message:</strong> <a href="11701.php">Matsumoto, Yuki: "[OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>In reply to:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11704.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11704.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
