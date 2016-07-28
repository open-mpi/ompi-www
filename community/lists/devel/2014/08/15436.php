<?
$subject_val = "Re: [OMPI devel] Trunk broken for PPC64?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 02:39:46 2014" -->
<!-- isoreceived="20140801063946" -->
<!-- sent="Fri, 01 Aug 2014 15:39:39 +0900" -->
<!-- isosent="20140801063939" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken for PPC64?" -->
<!-- id="53DB362B.8010501_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="66825B47-18C8-4464-866A-8EA94D4F575A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk broken for PPC64?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 02:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15437.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15435.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15425.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15437.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Reply:</strong> <a href="15437.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul and Ralph,
<br>
<p>for what it's worth :
<br>
<p>a) i faced the very same issue on my (sloooow) qemu emulated ppc64 vm
<br>
b) i was able to run very basic programs when passing --mca coll ^ml to
<br>
mpirun
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/01 12:30, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yes, I fear this will require some effort to chase all the breakage down given that (to my knowledge, at least) we lack PPC machines in the devel group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2014, at 5:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the path to verifying George's atomics patch, I have started just by verifying that I can still build the UNPATCHED trunk on each of the platforms I listed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried two PPC64/Linux systems so far and am seeing the same problem on both.  Though I can pass &quot;make check&quot; both platforms SEGV on
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this the expected state of the trunk on big-endian systems?
</span><br>
<span class="quotelev2">&gt;&gt; I am thinking in particular of <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15365.php">http://www.open-mpi.org/community/lists/devel/2014/07/15365.php</a> in which Ralph wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah, my fix won't work for big endian machines - this is going to be an issue across the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code base now, so we'll have to troll and fix it. I was doing the minimal change required to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix the trunk in the meantime. 
</span><br>
<span class="quotelev2">&gt;&gt; If this big-endian failure is not known/expected let me know and I'll provide details.
</span><br>
<span class="quotelev2">&gt;&gt; Since testing George's patch only requires &quot;make check&quot; I can proceed with that regardless.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 31, 2014 at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Awesome, thanks Paul. When the results will be in we will fix whatever is needed for these less common architectures.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 31, 2014 at 7:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 31, 2014 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 31, 2014 at 4:13 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul, I know you have a pretty diverse range computers. Can you try to compile and run a &quot;make check&quot; with the following patch?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will see what I can do for ARMv7, MIPS, PPC and IA64 (or whatever subset of those is still supported).
</span><br>
<span class="quotelev2">&gt;&gt; The ARM and MIPS system are emulators and take forever to build OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; However, I am not even sure how soon I'll get to start this testing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Add SPARC (v8plus and v9) to that list.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15411.php">http://www.open-mpi.org/community/lists/devel/2014/07/15411.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15412.php">http://www.open-mpi.org/community/lists/devel/2014/07/15412.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15414.php">http://www.open-mpi.org/community/lists/devel/2014/07/15414.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15425.php">http://www.open-mpi.org/community/lists/devel/2014/07/15425.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15437.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15435.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15425.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15437.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Reply:</strong> <a href="15437.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
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
