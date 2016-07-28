<?
$subject_val = "[OMPI devel] Trunk broken for PPC64?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 20:46:40 2014" -->
<!-- isoreceived="20140801004640" -->
<!-- sent="Thu, 31 Jul 2014 17:46:38 -0700" -->
<!-- isosent="20140801004638" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk broken for PPC64?" -->
<!-- id="CAAvDA17PhOhaXiuO2B__ONQJdU_wpde5yU0P+E3BK2zPoy4-QA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk broken for PPC64?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 20:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15415.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15413.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15425.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Reply:</strong> <a href="15425.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the path to verifying George's atomics patch, I have started just by
<br>
verifying that I can still build the UNPATCHED trunk on each of the
<br>
platforms I listed.
<br>
<p>I have tried two PPC64/Linux systems so far and am seeing the same problem
<br>
on both.  Though I can pass &quot;make check&quot; both platforms SEGV on
<br>
&nbsp;&nbsp;&nbsp;mpirun -mca btl sm,self -np 2 examples/ring_c
<br>
<p>Is this the expected state of the trunk on big-endian systems?
<br>
I am thinking in particular of
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15365.php">http://www.open-mpi.org/community/lists/devel/2014/07/15365.php</a> in which
<br>
Ralph wrote:
<br>
<span class="quotelev1">&gt; Yeah, my fix won't work for big endian machines - this is going to be an
</span><br>
issue across the
<br>
<span class="quotelev1">&gt; code base now, so we'll have to troll and fix it. I was doing the minimal
</span><br>
change required to
<br>
<span class="quotelev1">&gt; fix the trunk in the meantime.
</span><br>
<p>If this big-endian failure is not known/expected let me know and I'll
<br>
provide details.
<br>
Since testing George's patch only requires &quot;make check&quot; I can proceed with
<br>
that regardless.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jul 31, 2014 at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Awesome, thanks Paul. When the results will be in we will fix whatever is
</span><br>
<span class="quotelev1">&gt; needed for these less common architectures.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 31, 2014 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 31, 2014 at 4:13 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul, I know you have a pretty diverse range computers. Can you try to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compile and run a &quot;make check&quot; with the following patch?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will see what I can do for ARMv7, MIPS, PPC and IA64 (or whatever
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subset of those is still supported).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ARM and MIPS system are emulators and take forever to build OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I am not even sure how soon I'll get to start this testing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;  Future Technologies Group
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15411.php">http://www.open-mpi.org/community/lists/devel/2014/07/15411.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15412.php">http://www.open-mpi.org/community/lists/devel/2014/07/15412.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15415.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15413.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15425.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Reply:</strong> <a href="15425.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
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
