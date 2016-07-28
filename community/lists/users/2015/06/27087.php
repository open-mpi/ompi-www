<?
$subject_val = "Re: [OMPI users] Default value of btl_openib_memalign_threshold";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 16:16:01 2015" -->
<!-- isoreceived="20150610201601" -->
<!-- sent="Wed, 10 Jun 2015 13:15:56 -0700" -->
<!-- isosent="20150610201556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default value of btl_openib_memalign_threshold" -->
<!-- id="DA725EAF-5C41-4F44-B49F-49C5A130F0F7_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="17B249B1-04C2-4402-A4F1-3B793F92959B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Default value of btl_openib_memalign_threshold<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 16:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="27086.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>In reply to:</strong> <a href="27086.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Reply:</strong> <a href="27088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Odd - without that setting, the value is essentially undefined, so it&#226;&#128;&#153;s hard to understand how that is any better. Maybe the whole alignment thing is busted, and leaving it undefined (which usually defaults to zero, but not always) causes it to be turned &#226;&#128;&#156;off&#226;&#128;&#157;?
<br>
<p>I don&#226;&#128;&#153;t really care, mind you - but it is clearly an error the way it was before.
<br>
<p><p><span class="quotelev1">&gt; On Jun 10, 2015, at 12:39 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This change was not correct (<a href="https://github.com/open-mpi/ompi/commit/ce915b5757d428d3e914dcef50bd4b2636561bca">https://github.com/open-mpi/ompi/commit/ce915b5757d428d3e914dcef50bd4b2636561bca</a>).  It is causing memory corruption in the openib BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 25, 2015, at 11:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don&#226;&#128;&#153;t see a problem with it. FWIW: I&#226;&#128;&#153;m getting ready to release 1.8.6 in the next week
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 25, 2015, at 8:46 AM, Xavier Besseron &lt;xavier.besseron_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good that it will be fixed in the next release!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the meantime, and because it might impact other users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to ask my sysadmins to set btl_openib_memalign_threshold=12288 in etc/openmpi-mca-params.conf on our clusters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you see any good reason not doing it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xavier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, May 25, 2015 at 4:12 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found the problem - someone had a typo in btl_openib_mca.c. The threshold need to be set to the module eager limit as that is the only thing defined at that point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for bringing it to our attention! I&#226;&#128;&#153;ll set it up to go into 1.8.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 25, 2015, at 3:04 AM, Xavier Besseron &lt;xavier.besseron_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your reply Ralph.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The option only I'm using when configuring OpenMPI is '--prefix'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When checking the config.log file, I see 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure:208504: checking whether the openib BTL will use malloc hooks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure:208510: result: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so I guess it is properly enabled (full config.log in attachment of this email).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, I think I have the reason of the bug (lines refer to source code of OpenMPI 1.8.5):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The default value of memalign_threshold is taken from eager_limit in function btl_openib_register_mca_params() in btl_openib_mca.c line 717.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But the default value is eager_limit is set in btl_openib_component.c at line 193 right after the call to btl_openib_register_mca_params().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To summarize, memalign_threshold gets its value from eager_limit before this one gets its value assigned.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Xavier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, May 25, 2015 at 2:27 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the code, we do in fact set the memalign_threshold = eager_limit by default, but only if you configured with &#226;&#128;&#148;enable-btl-openib-malloc-alignment AND/OR we found the malloc hook functions were available.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You might check config.log to see if the openib malloc hooks were enabled. My guess is that they weren&#226;&#128;&#153;t, for some reason.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 24, 2015, at 9:07 AM, Xavier Besseron &lt;xavier.besseron_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear OpenMPI developers / users,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is much more a comment than a question since I believe I have already solved my issue. But I would like to report it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have noticed my code performed very badly with OpenMPI when Infinand is enabled, sometime +50% or even +100% overhead.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I also have this slowdown when running with one thread and one process. In such case, there is no other MPI call than MPI_Init() and MPI_Finalize().
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This overhead disappears if I disable at runtime the openib btl, ie with '--mca btl ^openib'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After further investigation, I figured out it comes from the memory allocator which is aligning every memory allocation when Infiniband is used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This makes sense because my code is a large irregular C++ code creating and deleting many objects.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just below is the documentation of the relevant MCA parameters coming ompi_info:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MCA btl: parameter &quot;btl_openib_memalign&quot; (current value: &quot;32&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         [64 | 32 | 0] - Enable (64bit or 32bit)/Disable(0) memoryalignment for all malloc calls if btl openib is used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MCA btl: parameter &quot;btl_openib_memalign_threshold&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Allocating memory more than btl_openib_memalign_threshholdbytes will automatically be algined to the value of btl_openib_memalign bytes.memalign_threshhold defaults to the same value as mca_btl_openib_eager_limit.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In the end, the problem is that the default value for btl_openib_memalign_threshold is 0, which means that all memory allocations are aligned to 32 bits.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The documentation says that the default value of btl_openib_memalign_threshold should be the the same as btl_openib_eager_limit, ie 12288 instead of 0.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On my side, changing btl_openib_memalign_threshold to 12288 fixes my performance issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, I believe that the default value of btl_openib_memalign_threshold should be fixed in the OpenMPI code (or at least the documentation should be fixed).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried OpenMPI 1.8.5, 1.7.3 and 1.6.4 and it's all the same.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bonus question:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As this issue might impact other users, I'm considering applying a global fix on our clusters by setting this default value etc/openmpi-mca-params.conf.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you see any good reason not doing it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you for your comments.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Xavier
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dr Xavier BESSERON
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Research associate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FSTC, University of Luxembourg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Campus Kirchberg, Office E-007
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Phone: +352 46 66 44 5418
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://luxdem.uni.lu/">http://luxdem.uni.lu/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26913.php">http://www.open-mpi.org/community/lists/users/2015/05/26913.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dr Xavier BESSERON
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research associate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FSTC, University of Luxembourg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Campus Kirchberg, Office E-007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phone: +352 46 66 44 5418
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://luxdem.uni.lu/">http://luxdem.uni.lu/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26915.php">http://www.open-mpi.org/community/lists/users/2015/05/26915.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr Xavier BESSERON
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FSTC, University of Luxembourg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Campus Kirchberg, Office E-007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: +352 46 66 44 5418
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://luxdem.uni.lu/">http://luxdem.uni.lu/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26918.php">http://www.open-mpi.org/community/lists/users/2015/05/26918.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26920.php">http://www.open-mpi.org/community/lists/users/2015/05/26920.php</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27086.php">http://www.open-mpi.org/community/lists/users/2015/06/27086.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="27086.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>In reply to:</strong> <a href="27086.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Reply:</strong> <a href="27088.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
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
