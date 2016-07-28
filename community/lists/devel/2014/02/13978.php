<?
$subject_val = "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 12:07:27 2014" -->
<!-- isoreceived="20140203170727" -->
<!-- sent="Mon, 3 Feb 2014 10:07:26 -0700" -->
<!-- isosent="20140203170726" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris" -->
<!-- id="20140203170726.GJ95843_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15Mny=66uLG0SFKJsfPZdVL521UfaRCxQv+opaoa_-sEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 12:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13979.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>In reply to:</strong> <a href="13973.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13979.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Reply:</strong> <a href="13979.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
basesmuma is calling MB directly instead of calling
<br>
opal_atomic_[rw]mb. I fixes this in trunk and the same thing could be
<br>
done in 1.7 with a simple query-replace MB -&gt; opal_atomic_wmb. ORNL was
<br>
using MB because opal_atomic_[rw]mb is a no-op on some platforms. I
<br>
don't think this should be an issue since memory access should be
<br>
ordered if opal_atomic_[rw]mb is a no-op. If not we should fix that in opal.
<br>
<p>-Nathan
<br>
<p>On Sun, Feb 02, 2014 at 01:33:41PM -0800, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    Following up on my previous reports and using 1.7.4rc3:
</span><br>
<span class="quotelev1">&gt;    The error I see only occurs with --enable-static.
</span><br>
<span class="quotelev1">&gt;    When I do enable static libs, I get a build failure when linking
</span><br>
<span class="quotelev1">&gt;    otfmerge-mpi, due to undefined symbol &quot;MB&quot;.
</span><br>
<span class="quotelev1">&gt;    When building with gcc:
</span><br>
<span class="quotelev1">&gt;      CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt;    gcc: unrecognized option `-pthread'
</span><br>
<span class="quotelev1">&gt;    Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;     symbol                             in file
</span><br>
<span class="quotelev1">&gt;    MB                                
</span><br>
<span class="quotelev1">&gt;     /home/hargrove/OMPI/openmpi-1.7.4rc3-solaris10-sparcT2-gcc346-v9/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.so
</span><br>
<span class="quotelev1">&gt;    ld: fatal: Symbol referencing errors. No output written to
</span><br>
<span class="quotelev1">&gt;    .libs/otfmerge-mpi
</span><br>
<span class="quotelev1">&gt;    collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;    *** Error code 1
</span><br>
<span class="quotelev1">&gt;    When building with Solaris Studio 12.3 compilers:
</span><br>
<span class="quotelev1">&gt;      CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt;    Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;     symbol                             in file
</span><br>
<span class="quotelev1">&gt;    MB                                
</span><br>
<span class="quotelev1">&gt;     /home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.so
</span><br>
<span class="quotelev1">&gt;    ld: fatal: Symbol referencing errors. No output written to
</span><br>
<span class="quotelev1">&gt;    .libs/otfmerge-mpi
</span><br>
<span class="quotelev1">&gt;    *** Error code 2
</span><br>
<span class="quotelev1">&gt;    This is independent of ABI (v9 vs v8plus).
</span><br>
<span class="quotelev1">&gt;    If I avoid otfmerge-mpi by configuring with --disable-vt, then the link
</span><br>
<span class="quotelev1">&gt;    failure occurs building ompi_info instead.
</span><br>
<span class="quotelev1">&gt;    So, I don't think this is a vt-specific problem.  Consistent with that, I
</span><br>
<span class="quotelev1">&gt;    found the following warnings in the make output:
</span><br>
<span class="quotelev1">&gt;    &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_bcast.c&quot;,
</span><br>
<span class="quotelev1">&gt;    line 183: warning: implicit function declaration: MB
</span><br>
<span class="quotelev1">&gt;    &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_fanin.c&quot;,
</span><br>
<span class="quotelev1">&gt;    line 66: warning: implicit function declaration: MB
</span><br>
<span class="quotelev1">&gt;    &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_fanout.c&quot;,
</span><br>
<span class="quotelev1">&gt;    line 64: warning: implicit function declaration: MB
</span><br>
<span class="quotelev1">&gt;    &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_rk_barrier.c&quot;,
</span><br>
<span class="quotelev1">&gt;    line 97: warning: implicit function declaration: MB
</span><br>
<span class="quotelev1">&gt;    &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_rd_nb_barrier.c&quot;,
</span><br>
<span class="quotelev1">&gt;    line 75: warning: implicit function declaration: MB
</span><br>
<span class="quotelev1">&gt;    &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_bcast_prime.c&quot;,
</span><br>
<span class="quotelev1">&gt;    line 156: warning: implicit function declaration: MB
</span><br>
<span class="quotelev1">&gt;    That is all the warnings I see regarding MB (all in bcoll/basesmuma).
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Wed, Jan 29, 2014 at 2:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Wed, Jan 29, 2014 at 9:19 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        For Solaris-10 with the Solaris Studio 12.3 compilers on SPARC I have
</span><br>
<span class="quotelev1">&gt;        encountered a link failure when configured with &quot;--enable-static
</span><br>
<span class="quotelev1">&gt;        --enable-shared&quot; (fine w/o &quot;--enable-static&quot;).  I have not yet tried
</span><br>
<span class="quotelev1">&gt;        this configuration with gcc.  I have started builds of 1.7.3 to
</span><br>
<span class="quotelev1">&gt;        determine if this is a regression or not before investing more deeply.
</span><br>
<span class="quotelev1">&gt;         I hope to be able to report more tonight.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The problem is also present in 1.7.3 and thus NOT a (recent) regression.
</span><br>
<span class="quotelev1">&gt;      More information will follow eventually, but knowing that this problem
</span><br>
<span class="quotelev1">&gt;      isn't new significantly reduces the urgency (at least for me).
</span><br>
<span class="quotelev1">&gt;      -Paul
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Future Technologies Group
</span><br>
<span class="quotelev1">&gt;      Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Future Technologies Group
</span><br>
<span class="quotelev1">&gt;    Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13978/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13979.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>In reply to:</strong> <a href="13973.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13979.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Reply:</strong> <a href="13979.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
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
