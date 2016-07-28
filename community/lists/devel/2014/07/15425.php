<?
$subject_val = "Re: [OMPI devel] Trunk broken for PPC64?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 23:30:40 2014" -->
<!-- isoreceived="20140801033040" -->
<!-- sent="Thu, 31 Jul 2014 20:30:33 -0700" -->
<!-- isosent="20140801033033" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken for PPC64?" -->
<!-- id="66825B47-18C8-4464-866A-8EA94D4F575A_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17PhOhaXiuO2B__ONQJdU_wpde5yU0P+E3BK2zPoy4-QA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 23:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15426.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15424.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="15414.php">Paul Hargrove: "[OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I fear this will require some effort to chase all the breakage down given that (to my knowledge, at least) we lack PPC machines in the devel group.
<br>
<p><p>On Jul 31, 2014, at 5:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On the path to verifying George's atomics patch, I have started just by verifying that I can still build the UNPATCHED trunk on each of the platforms I listed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried two PPC64/Linux systems so far and am seeing the same problem on both.  Though I can pass &quot;make check&quot; both platforms SEGV on
</span><br>
<span class="quotelev1">&gt;    mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the expected state of the trunk on big-endian systems?
</span><br>
<span class="quotelev1">&gt; I am thinking in particular of <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15365.php">http://www.open-mpi.org/community/lists/devel/2014/07/15365.php</a> in which Ralph wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Yeah, my fix won't work for big endian machines - this is going to be an issue across the
</span><br>
<span class="quotelev2">&gt; &gt; code base now, so we'll have to troll and fix it. I was doing the minimal change required to
</span><br>
<span class="quotelev2">&gt; &gt; fix the trunk in the meantime. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If this big-endian failure is not known/expected let me know and I'll provide details.
</span><br>
<span class="quotelev1">&gt; Since testing George's patch only requires &quot;make check&quot; I can proceed with that regardless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Awesome, thanks Paul. When the results will be in we will fix whatever is needed for these less common architectures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 7:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 4:13 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul, I know you have a pretty diverse range computers. Can you try to compile and run a &#147;make check&#148; with the following patch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will see what I can do for ARMv7, MIPS, PPC and IA64 (or whatever subset of those is still supported).
</span><br>
<span class="quotelev1">&gt; The ARM and MIPS system are emulators and take forever to build OMPI.
</span><br>
<span class="quotelev1">&gt; However, I am not even sure how soon I'll get to start this testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Add SPARC (v8plus and v9) to that list.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15411.php">http://www.open-mpi.org/community/lists/devel/2014/07/15411.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15412.php">http://www.open-mpi.org/community/lists/devel/2014/07/15412.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15414.php">http://www.open-mpi.org/community/lists/devel/2014/07/15414.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15425/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15426.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15424.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="15414.php">Paul Hargrove: "[OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
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
