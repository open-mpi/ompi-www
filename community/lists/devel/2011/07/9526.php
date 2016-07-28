<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 10:16:57 2011" -->
<!-- isoreceived="20110714141657" -->
<!-- sent="Thu, 14 Jul 2011 17:16:49 +0300" -->
<!-- isosent="20110714141649" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830" -->
<!-- id="4E1EFA51.9000703_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E1EF16B.4030002_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 10:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14-Jul-11 4:38 PM, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/14/2011 9:17 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 14-Jul-11 3:30 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The real question is: does Solaris have the same data structures required for Linux's dynamic SL support?  If so, this header file inquiry is worthwhile.  If not, then perhaps a separate port will be required for Solaris to support the dynamic SL functionality.
</span><br>
<span class="quotelev2">&gt;&gt; I know for sure that at some point OpenFabrics OpenSM has forked
</span><br>
<span class="quotelev2">&gt;&gt; and was used as a basis for *some* Solaris SM, which possibly
</span><br>
<span class="quotelev2">&gt;&gt; will preserve the same headers. The MAD format has to stay the
</span><br>
<span class="quotelev2">&gt;&gt; same to provide interoperability, and I doubt that someone renamed
</span><br>
<span class="quotelev2">&gt;&gt; MAD fields just for fun.
</span><br>
<span class="quotelev2">&gt;&gt; So the questions is, what header and what package contain there
</span><br>
<span class="quotelev2">&gt;&gt; structures.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Note there is no SM delivered with Solaris specifically. So there are no SM specific header files.
</span><br>
<span class="quotelev1">&gt; AFAIK, we rely on remote SM's whether it is one running on a switch or on another node (like OpenSM running on Linux).
</span><br>
<span class="quotelev1">&gt; So relying on OpenSM source headers existing on Solaris is probably a bad plan.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, it sounds like the existance of ib_types.h might help us which I have answered in a previous email that it does exist.
</span><br>
<p>Yes, I need only this header (and, of course, whatever this header
<br>
has in its include directives). It has all the packets definitions
<br>
with the right endian and with all the pack/unpack stuff. 
<br>
<p><span class="quotelev2">&gt;&gt; I'm checking this offline with Oracle IB people.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other question is do Oracle folks care about IB QoS and torus/mesh
</span><br>
<span class="quotelev2">&gt;&gt; topologies w.r.t. OMPI, because otherwise the dynamic SL is irrelevant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It is not an extreme priority of ours but we would like to support it.
</span><br>
<p>OK, I can search for /usr/include/sys/ib/ib_types.h in Solaris.
<br>
Can you send me this file, or do you have it under BSD license?
<br>
The original file has dual GPL/BSD license, so I don't know if
<br>
it's still open.
<br>
<p>Also, besides checking if compilation works (assuming that I get
<br>
this file), I have no way checking if linkage also works...
<br>
<p>-- YK
<br>
<p><p>&nbsp;
<br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9525.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
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
