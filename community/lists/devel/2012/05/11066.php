<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 07:29:32 2012" -->
<!-- isoreceived="20120531112932" -->
<!-- sent="Thu, 31 May 2012 07:29:28 -0400" -->
<!-- isosent="20120531112928" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="763CDCF5-ACF9-4479-B8C5-67118D490C84_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYd-kSp5RfYVBnZgMRwM37F_UL2Ajpo85iTuMER3fKp7dw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-05-31 07:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11067.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11067.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11067.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 31, 2012, at 7:22 AM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I can't think of a case offhand where it's acceptable to pass MPI_DATATYPE_NULL to an MPI function.  I could be missing something, though...  (actually, I guess I can think of some cases -- we have some regression test programs that specifically pass MPI_DATATYPE_NULL, just to ensure that it properly invokes an MPI exception)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I usually pass &lt;NULL, MPI_DATATYPE_NULL&gt; as arguments which are
</span><br>
<span class="quotelev1">&gt; &quot;significant only at root&quot; and that function call is not in the root
</span><br>
<span class="quotelev1">&gt; process code path.
</span><br>
<p>Ah, good point.  But in those cases, MPI specifically defines that those arguments are wholly ignored on non-root processes.  So you could still even pass &lt;&amp;foo, MPI_DATATYPE_NULL&gt;, or &lt;NULL, MPI_INT&gt;, and it would be ok.
<br>
<p><span class="quotelev2">&gt;&gt; But even so, if one passes MPI_DATATYPE_NULL, the buffer and count arguments will be ignored.  So I don't think that we want to require that MPI_DATATYPE_NULL *requires* a NULL pointer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It just doesn't make sense to pass non-null pointer and
</span><br>
<span class="quotelev1">&gt; MPI_DATATYPE_NULL (because null pointer will be ignored).  Hence the
</span><br>
<span class="quotelev1">&gt; warning.
</span><br>
<p>Hmm.  I'm still a bit torn about this.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; *** JMS I'm a bit confused as to why 2int got a tag, but the others
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    did not.  We do have C equivalents for all types -- do you need a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    listing of the configure results where we figured out all the C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    equivalents?  (i.e., I can look them up for you -- our configury
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    is a bit... deep :-) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did not annotate them because those are Fortran types.  If there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some known C equivalents in OpenMPI, I will happily add them.  But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please note that if these equivalents are discovered during configure,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we can not hardcode them into mpi.h.in.  Some autoconf macros will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needed probably.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We should have AC macros for all of these already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, I'll try find them to support (1) usecase described below.
</span><br>
<p>No, I'll find them -- sorry, I meant to look them up before I sent the last mail.  Let me look them up and get back to you.  Our configury is quite complicated, and I know the right places to look.  :-)
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
<li><strong>Next message:</strong> <a href="11067.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11065.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11067.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11067.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11068.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
