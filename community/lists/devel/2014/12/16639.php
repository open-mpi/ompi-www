<?
$subject_val = "Re: [OMPI devel] ofi/mtl causing problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 12:09:44 2014" -->
<!-- isoreceived="20141217170944" -->
<!-- sent="Wed, 17 Dec 2014 17:09:41 +0000" -->
<!-- isosent="20141217170941" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ofi/mtl causing problems" -->
<!-- id="3B6B4F02-0E74-4A3F-8CB1-4C0833FEA3A1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj6Xp0PNMaVaLP9pfz2+eio=3hg2Mkr_HxcSZZh4STbdUQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-17 12:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16640.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16638.php">Howard Pritchard: "[OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16638.php">Howard Pritchard: "[OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16640.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16640.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16641.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this on a PSM-enabled cluster?
<br>
<p>Can you send the full output from configure, the config.log, and the output from &quot;make&quot;?
<br>
<p>Are you building statically (i.e., libmpi.a)?
<br>
<p><p><p>On Dec 17, 2014, at 12:04 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I noticed my MTT smoke test failed with todays master build:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; name=PMI_process_mapping, (val=(vector,(0,4,4)))
</span><br>
<span class="quotelev1">&gt; ./c_hello./c_hello: : symbol lookup errorsymbol lookup error: :
</span><br>
<span class="quotelev1">&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; : undefined symbol: fi_getinfoundefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./c_hello: ./c_hellosymbol lookup error: : symbol lookup
</span><br>
<span class="quotelev1">&gt; error/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so: :
</span><br>
<span class="quotelev1">&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined symbol:
</span><br>
<span class="quotelev1">&gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt; ./c_hello: ./c_hello./c_hello./c_hello: : : symbol lookup errorsymbol lookup errorsymbol lookup
</span><br>
<span class="quotelev1">&gt; error: :
</span><br>
<span class="quotelev1">&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; : : undefined symbol:
</span><br>
<span class="quotelev1">&gt; fi_getinfo/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.sosymbol lookup
</span><br>
<span class="quotelev1">&gt; errorundefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt; : 
</span><br>
<span class="quotelev1">&gt; : /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined symbol:
</span><br>
<span class="quotelev1">&gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt; ./c_hello: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; fi_getinfo
</span><br>
<span class="quotelev1">&gt; ./c_hello./c_hello: : symbol lookup errorsymbol lookup error: :
</span><br>
<span class="quotelev1">&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; : undefined symbol: fi_getinfoundefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./c_hello: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so: ./c_helloundefined
</span><br>
<span class="quotelev1">&gt; symbol: fi_getinfo: symbol lookup error: 
</span><br>
<span class="quotelev1">&gt; ./c_hello: ./c_hellosymbol lookup error./c_hello: : : symbol lookup errorsymbol lookup error: :
</span><br>
<span class="quotelev1">&gt; /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; : undefined symbol:
</span><br>
<span class="quotelev1">&gt; fi_getinfo/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined symbol:
</span><br>
<span class="quotelev1">&gt; fi_getinfo: undefined symbol: fi_getinfo
</span><br>
<span class="quotelev1">&gt; [NID 05538] 2014-12-17 05:58:50 Apid 9226246: initiated application termination
</span><br>
<span class="quotelev1">&gt; Application 9226246 exit codes: 127
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stderr	
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas on how to fix this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16638.php">http://www.open-mpi.org/community/lists/devel/2014/12/16638.php</a>
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
<li><strong>Next message:</strong> <a href="16640.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16638.php">Howard Pritchard: "[OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16638.php">Howard Pritchard: "[OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16640.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16640.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16641.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
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
