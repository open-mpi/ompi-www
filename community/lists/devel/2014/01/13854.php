<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 21:20:41 2014" -->
<!-- isoreceived="20140123022041" -->
<!-- sent="Wed, 22 Jan 2014 18:20:22 -0800" -->
<!-- isosent="20140123022022" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="CAAvDA151L-DYMBtYm07Y85aM5D46T2wE9GhDsYjsqkhYrm3Hbg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BFA4C479-3B75-4482-832B-5D527B4D77C5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 21:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13855.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Previous message:</strong> <a href="13853.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 22, 2014 at 8:50 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Can you do me a favor and cd into ompi/mpi/fortran/use-mpi-f08 and try to
</span><br>
<span class="quotelev1">&gt; manually &quot;make type_create_indexed_block_f08.lo&quot; and see if it also
</span><br>
<span class="quotelev1">&gt; complains?  That's a 32 character name -- let's see if the limit is &gt;=32 or
</span><br>
<span class="quotelev2">&gt; &gt;=33...
</span><br>
<p><p><p>Jeff,
<br>
<p>Perhaps you came to the same conclusion already, but just in case:
<br>
<p>I think the simplest approach to this problem is to include a configure
<br>
check with the longest name in the interface (without regard to WHAT that
<br>
length is).  This would be added to the ever-growing list of probes of BIND
<br>
behavior.  If the compiler can't handle the longest name required, then it
<br>
is disqualified from building use-mpi-f08.
<br>
<p>Of course that solution adeptly avoids the &quot;Internal&quot; failure in PathScale
<br>
and Open64 compilers, but a configure option to disable the F08 support
<br>
addresses that and other misc cases of fortran compilers that just aren't
<br>
ready for F08 (or 03 for that matter).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13855.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Previous message:</strong> <a href="13853.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
