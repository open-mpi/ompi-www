<?
$subject_val = "Re: [OMPI users] Default value of btl_openib_memalign_threshold";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 24 20:27:12 2015" -->
<!-- isoreceived="20150525002712" -->
<!-- sent="Sun, 24 May 2015 17:27:05 -0700" -->
<!-- isosent="20150525002705" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default value of btl_openib_memalign_threshold" -->
<!-- id="E29B42D1-3D79-4859-A7C2-30800F5FD00C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABgOZMb-s1wCm3qcL54W5B3X=9Bf86oUPqwbm=7=jSTp8dcz-Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-24 20:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26915.php">Xavier Besseron: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="26913.php">Xavier Besseron: "[OMPI users] Fwd: Default value of btl_openib_memalign_threshold"</a>
<li><strong>In reply to:</strong> <a href="26913.php">Xavier Besseron: "[OMPI users] Fwd: Default value of btl_openib_memalign_threshold"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26915.php">Xavier Besseron: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Maybe reply:</strong> <a href="26915.php">Xavier Besseron: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Maybe reply:</strong> <a href="26918.php">Xavier Besseron: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at the code, we do in fact set the memalign_threshold = eager_limit by default, but only if you configured with &#226;&#128;&#148;enable-btl-openib-malloc-alignment AND/OR we found the malloc hook functions were available.
<br>
<p>You might check config.log to see if the openib malloc hooks were enabled. My guess is that they weren&#226;&#128;&#153;t, for some reason.
<br>
<p><p><span class="quotelev1">&gt; On May 24, 2015, at 9:07 AM, Xavier Besseron &lt;xavier.besseron_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI developers / users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is much more a comment than a question since I believe I have already solved my issue. But I would like to report it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have noticed my code performed very badly with OpenMPI when Infinand is enabled, sometime +50% or even +100% overhead.
</span><br>
<span class="quotelev1">&gt; I also have this slowdown when running with one thread and one process. In such case, there is no other MPI call than MPI_Init() and MPI_Finalize().
</span><br>
<span class="quotelev1">&gt; This overhead disappears if I disable at runtime the openib btl, ie with '--mca btl ^openib'.
</span><br>
<span class="quotelev1">&gt; After further investigation, I figured out it comes from the memory allocator which is aligning every memory allocation when Infiniband is used.
</span><br>
<span class="quotelev1">&gt; This makes sense because my code is a large irregular C++ code creating and deleting many objects.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just below is the documentation of the relevant MCA parameters coming ompi_info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_memalign&quot; (current value: &quot;32&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;          [64 | 32 | 0] - Enable (64bit or 32bit)/Disable(0) memoryalignment for all malloc calls if btl openib is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_memalign_threshold&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;          Allocating memory more than btl_openib_memalign_threshholdbytes will automatically be algined to the value of btl_openib_memalign bytes.memalign_threshhold defaults to the same value as mca_btl_openib_eager_limit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;          Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the end, the problem is that the default value for btl_openib_memalign_threshold is 0, which means that all memory allocations are aligned to 32 bits.
</span><br>
<span class="quotelev1">&gt; The documentation says that the default value of btl_openib_memalign_threshold should be the the same as btl_openib_eager_limit, ie 12288 instead of 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my side, changing btl_openib_memalign_threshold to 12288 fixes my performance issue.
</span><br>
<span class="quotelev1">&gt; However, I believe that the default value of btl_openib_memalign_threshold should be fixed in the OpenMPI code (or at least the documentation should be fixed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried OpenMPI 1.8.5, 1.7.3 and 1.6.4 and it's all the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bonus question:
</span><br>
<span class="quotelev1">&gt; As this issue might impact other users, I'm considering applying a global fix on our clusters by setting this default value etc/openmpi-mca-params.conf.
</span><br>
<span class="quotelev1">&gt; Do you see any good reason not doing it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Xavier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr Xavier BESSERON
</span><br>
<span class="quotelev1">&gt; Research associate
</span><br>
<span class="quotelev1">&gt; FSTC, University of Luxembourg
</span><br>
<span class="quotelev1">&gt; Campus Kirchberg, Office E-007
</span><br>
<span class="quotelev1">&gt; Phone: +352 46 66 44 5418
</span><br>
<span class="quotelev1">&gt; <a href="http://luxdem.uni.lu/">http://luxdem.uni.lu/</a> &lt;<a href="http://luxdem.uni.lu/">http://luxdem.uni.lu/</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26913.php">http://www.open-mpi.org/community/lists/users/2015/05/26913.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26914/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26915.php">Xavier Besseron: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="26913.php">Xavier Besseron: "[OMPI users] Fwd: Default value of btl_openib_memalign_threshold"</a>
<li><strong>In reply to:</strong> <a href="26913.php">Xavier Besseron: "[OMPI users] Fwd: Default value of btl_openib_memalign_threshold"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26915.php">Xavier Besseron: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Maybe reply:</strong> <a href="26915.php">Xavier Besseron: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Maybe reply:</strong> <a href="26918.php">Xavier Besseron: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
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
