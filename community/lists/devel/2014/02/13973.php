<?
$subject_val = "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  2 16:33:43 2014" -->
<!-- isoreceived="20140202213343" -->
<!-- sent="Sun, 2 Feb 2014 13:33:41 -0800" -->
<!-- isosent="20140202213341" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris" -->
<!-- id="CAAvDA15Mny=66uLG0SFKJsfPZdVL521UfaRCxQv+opaoa_-sEw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] 1.7.4rc3 static link failure on Solaris" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-02 16:33:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13974.php">Paul Hargrove: "[OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13972.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13978.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Reply:</strong> <a href="13978.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following up on my previous reports and using 1.7.4rc3:
<br>
<p>The error I see only occurs with --enable-static.
<br>
When I do enable static libs, I get a build failure when linking
<br>
otfmerge-mpi, due to undefined symbol &quot;MB&quot;.
<br>
<p>When building with gcc:
<br>
<p>&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
gcc: unrecognized option `-pthread'
<br>
Undefined                       first referenced
<br>
&nbsp;symbol                             in file
<br>
MB
<br>
&nbsp;/home/hargrove/OMPI/openmpi-1.7.4rc3-solaris10-sparcT2-gcc346-v9/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.so
<br>
ld: fatal: Symbol referencing errors. No output written to
<br>
.libs/otfmerge-mpi
<br>
collect2: ld returned 1 exit status
<br>
*** Error code 1
<br>
<p>When building with Solaris Studio 12.3 compilers:
<br>
<p>&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
Undefined                       first referenced
<br>
&nbsp;symbol                             in file
<br>
MB
<br>
&nbsp;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.so
<br>
ld: fatal: Symbol referencing errors. No output written to
<br>
.libs/otfmerge-mpi
<br>
*** Error code 2
<br>
<p>This is independent of ABI (v9 vs v8plus).
<br>
<p>If I avoid otfmerge-mpi by configuring with --disable-vt, then the link
<br>
failure occurs building ompi_info instead.
<br>
So, I don't think this is a vt-specific problem.  Consistent with that, I
<br>
found the following warnings in the make output:
<br>
<p>&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_bcast.c&quot;,
<br>
line 183: warning: implicit function declaration: MB
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_fanin.c&quot;,
<br>
line 66: warning: implicit function declaration: MB
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_fanout.c&quot;,
<br>
line 64: warning: implicit function declaration: MB
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_rk_barrier.c&quot;,
<br>
line 97: warning: implicit function declaration: MB
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_rd_nb_barrier.c&quot;,
<br>
line 75: warning: implicit function declaration: MB
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/ompi/mca/bcol/basesmuma/bcol_basesmuma_bcast_prime.c&quot;,
<br>
line 156: warning: implicit function declaration: MB
<br>
<p>That is all the warnings I see regarding MB (all in bcoll/basesmuma).
<br>
<p>-Paul
<br>
<p><p>On Wed, Jan 29, 2014 at 2:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 29, 2014 at 9:19 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For Solaris-10 with the Solaris Studio 12.3 compilers on SPARC I have
</span><br>
<span class="quotelev2">&gt;&gt; encountered a link failure when configured with &quot;--enable-static
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared&quot; (fine w/o &quot;--enable-static&quot;).  I have not yet tried this
</span><br>
<span class="quotelev2">&gt;&gt; configuration with gcc.  I have started builds of 1.7.3 to determine if
</span><br>
<span class="quotelev2">&gt;&gt; this is a regression or not before investing more deeply.  I hope to be
</span><br>
<span class="quotelev2">&gt;&gt; able to report more tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is also present in 1.7.3 and thus NOT a (recent) regression.
</span><br>
<span class="quotelev1">&gt; More information will follow eventually, but knowing that this problem
</span><br>
<span class="quotelev1">&gt; isn't new significantly reduces the urgency (at least for me).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13973/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13974.php">Paul Hargrove: "[OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13972.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13978.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Reply:</strong> <a href="13978.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
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
