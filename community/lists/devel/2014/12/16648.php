<?
$subject_val = "Re: [OMPI devel] ofi/mtl causing problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 14:38:50 2014" -->
<!-- isoreceived="20141217193850" -->
<!-- sent="Wed, 17 Dec 2014 19:38:47 +0000" -->
<!-- isosent="20141217193847" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ofi/mtl causing problems" -->
<!-- id="DA358D1D-8857-4B46-AE0C-2319E34E1CEF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z_rmNigKEKJS3hMvfjKMQC85=scw+S6AuWd30Z8_fk1pQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 14:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16647.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16642.php">Joshua Ladd: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16647.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the community took that position after oshmem caused disruption for a while.
<br>
<p>The ofi MTL has been in the tree for less than 24 hours.  Please give us a little time to sort out running on other people's systems.
<br>
<p><p>On Dec 17, 2014, at 1:48 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Seem to me this should be disabled by default until folks can quiet the noise. If memory serves me, that's the position the community took with OSHMEM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 17, 2014 at 1:40 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the problem is that the libfabric configure is finding ibverbs.h header file and thinking everything is fine,
</span><br>
<span class="quotelev1">&gt; so the mtl/ofi thinks it can build, even though there will be no libfabric for it to resolve symbols when the mtl
</span><br>
<span class="quotelev1">&gt; framework is opened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you'll see from the make output, the libfabric in opal/mca/common is not built, yet its configure.m4
</span><br>
<span class="quotelev1">&gt; is telling components that rely on it that its actually going to be built.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where's the ibverbs provider in this mca/common/libfabric anyway?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached are the requested files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not statically building.  I like for
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=blah blah 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to work for me and my users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-12-17 10:09 GMT-07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Is this on a PSM-enabled cluster?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the full output from configure, the config.log, and the output from &quot;make&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you building statically (i.e., libmpi.a)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2014, at 12:04 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I noticed my MTT smoke test failed with todays master build:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; name=PMI_process_mapping, (val=(vector,(0,4,4)))
</span><br>
<span class="quotelev2">&gt; &gt; ./c_hello./c_hello: : symbol lookup errorsymbol lookup error: :
</span><br>
<span class="quotelev2">&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; : undefined symbol: fi_getinfoundefined symbol: fi_getinfo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./c_hello: ./c_hellosymbol lookup error: : symbol lookup
</span><br>
<span class="quotelev2">&gt; &gt; error/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so: :
</span><br>
<span class="quotelev2">&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined symbol:
</span><br>
<span class="quotelev2">&gt; &gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev2">&gt; &gt; ./c_hello: ./c_hello./c_hello./c_hello: : : symbol lookup errorsymbol lookup errorsymbol lookup
</span><br>
<span class="quotelev2">&gt; &gt; error: :
</span><br>
<span class="quotelev2">&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; : : undefined symbol:
</span><br>
<span class="quotelev2">&gt; &gt; fi_getinfo/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.sosymbol lookup
</span><br>
<span class="quotelev2">&gt; &gt; errorundefined symbol: fi_getinfo
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; : /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined symbol:
</span><br>
<span class="quotelev2">&gt; &gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev2">&gt; &gt; ./c_hello: symbol lookup error:
</span><br>
<span class="quotelev2">&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt; &gt; fi_getinfo
</span><br>
<span class="quotelev2">&gt; &gt; ./c_hello./c_hello: : symbol lookup errorsymbol lookup error: :
</span><br>
<span class="quotelev2">&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; : undefined symbol: fi_getinfoundefined symbol: fi_getinfo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./c_hello: symbol lookup error:
</span><br>
<span class="quotelev2">&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so: ./c_helloundefined
</span><br>
<span class="quotelev2">&gt; &gt; symbol: fi_getinfo: symbol lookup error:
</span><br>
<span class="quotelev2">&gt; &gt; ./c_hello: ./c_hellosymbol lookup error./c_hello: : : symbol lookup errorsymbol lookup error: :
</span><br>
<span class="quotelev2">&gt; &gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; : undefined symbol:
</span><br>
<span class="quotelev2">&gt; &gt; fi_getinfo/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined symbol:
</span><br>
<span class="quotelev2">&gt; &gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev2">&gt; &gt; [NID 05538] 2014-12-17 05:58:50 Apid 9226246: initiated application termination
</span><br>
<span class="quotelev2">&gt; &gt; Application 9226246 exit codes: 127
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Stderr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas on how to fix this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16638.php">http://www.open-mpi.org/community/lists/devel/2014/12/16638.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16639.php">http://www.open-mpi.org/community/lists/devel/2014/12/16639.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16641.php">http://www.open-mpi.org/community/lists/devel/2014/12/16641.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16642.php">http://www.open-mpi.org/community/lists/devel/2014/12/16642.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16647.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16642.php">Joshua Ladd: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16647.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
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
