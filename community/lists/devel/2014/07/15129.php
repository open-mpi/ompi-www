<?
$subject_val = "Re: [OMPI devel] 1.8.2rc1 available for test";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 13:48:32 2014" -->
<!-- isoreceived="20140712174832" -->
<!-- sent="Sat, 12 Jul 2014 20:48:31 +0300" -->
<!-- isosent="20140712174831" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc1 available for test" -->
<!-- id="CAAO1Kyb2OviAOrvE-+Gi43jeW=nxDJMaNdKWAPrwsy4ZrYp3ZQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4EEC219F-F4E3-4DC1-9E2E-CD57A642F3CA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.2rc1 available for test<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-12 13:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15130.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15128.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15128.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ohh... sorry about that.
<br>
will be more careful next time.
<br>
<p><p>On Sat, Jul 12, 2014 at 8:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Congrats - your Makefile.am change broke it :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I reverted it so the repo can build again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 12, 2014, at 10:23 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From repo
</span><br>
<span class="quotelev1">&gt; On Jul 12, 2014 7:59 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just checked out the tarball and it builds fine for me - did you build
</span><br>
<span class="quotelev2">&gt;&gt; this from the tarball, or from the repo?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 12, 2014, at 9:29 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt/vt/extlib/otf/tools/otfinfo'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt/vt/extlib/otf/tools/otfinfo'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (cd otfmerge &amp;&amp; make
</span><br>
<span class="quotelev2">&gt;&gt; top_distdir=../../../../../../../../openmpi-1.8.2rc1
</span><br>
<span class="quotelev2">&gt;&gt; distdir=../../../../../../../../openmpi-1.8.2rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge
</span><br>
<span class="quotelev2">&gt;&gt; \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
</span><br>
<span class="quotelev2">&gt;&gt; distdir)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:530: .deps/otfmerge-handler.Po: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:531: .deps/otfmerge-otfmerge.Po: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: *** No rule to make target `.deps/otfmerge-otfmerge.Po'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: *** [distdir] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt/vt/extlib/otf/tools'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: *** [distdir] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt/vt/extlib/otf'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [distdir] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt/vt/extlib'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [distdir] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [distdir] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/hpc/newhome/hpcuser/workspace/hpc-internal-tools.git/build/dist-ompi-mellanox-v1.8-1.8/master/ompi/contrib/vt'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [distdir] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2014 11:28 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry - gave the link to my test page :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 11, 2014, at 11:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I've posted the first release candidate for 1.8.2 - please test!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://localhost/~rhc/ompi-www/software/ompi/v1.8/">http://localhost/~rhc/ompi-www/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15113.php">http://www.open-mpi.org/community/lists/devel/2014/07/15113.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15124.php">http://www.open-mpi.org/community/lists/devel/2014/07/15124.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15126.php">http://www.open-mpi.org/community/lists/devel/2014/07/15126.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15127.php">http://www.open-mpi.org/community/lists/devel/2014/07/15127.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15128.php">http://www.open-mpi.org/community/lists/devel/2014/07/15128.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15130.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15128.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15128.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<!-- nextthread="start" -->
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
