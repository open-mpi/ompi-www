<?
$subject_val = "Re: [OMPI devel] ofi/mtl causing problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 14:28:20 2014" -->
<!-- isoreceived="20141217192820" -->
<!-- sent="Wed, 17 Dec 2014 14:28:18 -0500" -->
<!-- isosent="20141217192818" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ofi/mtl causing problems" -->
<!-- id="CAG4F6z9Z1FRHoxcE3uXRcy5syyw4+7QRHxciZp9Knnaa1jm9_w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj53giP0V5v2He8+ZMkTMHEhOLadvZSkL01rCd6f_93kYw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ofi/mtl causing problems<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 14:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16647.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16645.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16645.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Then I would propose adding a &quot;.ompi_ignore&quot; to the 'ofi' component until
<br>
they get their configury straightened out.
<br>
<p>Josh
<br>
<p>On Wed, Dec 17, 2014 at 2:19 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did another mtt run with --disable-libfabric included on the configure
</span><br>
<span class="quotelev1">&gt; line and still failed with the same problem, mtl/ofi thinks its okay to
</span><br>
<span class="quotelev1">&gt; build...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-12-17 11:48 GMT-07:00 Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seem to me this should be disabled by default until folks can quiet the
</span><br>
<span class="quotelev2">&gt;&gt; noise. If memory serves me, that's the position the community took with
</span><br>
<span class="quotelev2">&gt;&gt; OSHMEM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 17, 2014 at 1:40 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the problem is that the libfabric configure is finding ibverbs.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; header file and thinking everything is fine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so the mtl/ofi thinks it can build, even though there will be no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libfabric for it to resolve symbols when the mtl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; framework is opened.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you'll see from the make output, the libfabric in opal/mca/common is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not built, yet its configure.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is telling components that rely on it that its actually going to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where's the ibverbs provider in this mca/common/libfabric anyway?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached are the requested files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not statically building.  I like for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=blah blah
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to work for me and my users.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-12-17 10:09 GMT-07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this on a PSM-enabled cluster?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you send the full output from configure, the config.log, and the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output from &quot;make&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you building statically (i.e., libmpi.a)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 17, 2014, at 12:04 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I noticed my MTT smoke test failed with todays master build:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; name=PMI_process_mapping, (val=(vector,(0,4,4)))
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ./c_hello./c_hello: : symbol lookup errorsymbol lookup error: :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; : undefined symbol: fi_getinfoundefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ./c_hello: ./c_hellosymbol lookup error: : symbol lookup
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbol:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ./c_hello: ./c_hello./c_hello./c_hello: : : symbol lookup errorsymbol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lookup errorsymbol lookup
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; error: :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; : : undefined symbol:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fi_getinfo/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.sosymbol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lookup
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; errorundefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbol:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ./c_hello: symbol lookup error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; undefined symbol:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; fi_getinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ./c_hello./c_hello: : symbol lookup errorsymbol lookup error: :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; : undefined symbol: fi_getinfoundefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ./c_hello: symbol lookup error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./c_helloundefined
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; symbol: fi_getinfo: symbol lookup error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ./c_hello: ./c_hellosymbol lookup error./c_hello: : : symbol lookup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errorsymbol lookup error: :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; : undefined symbol:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fi_getinfo/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbol:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [NID 05538] 2014-12-17 05:58:50 Apid 9226246: initiated application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; termination
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Application 9226246 exit codes: 127
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Stderr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Any ideas on how to fix this?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Howard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16638.php">http://www.open-mpi.org/community/lists/devel/2014/12/16638.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16639.php">http://www.open-mpi.org/community/lists/devel/2014/12/16639.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16641.php">http://www.open-mpi.org/community/lists/devel/2014/12/16641.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16642.php">http://www.open-mpi.org/community/lists/devel/2014/12/16642.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16645.php">http://www.open-mpi.org/community/lists/devel/2014/12/16645.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16647.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16645.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16645.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
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
