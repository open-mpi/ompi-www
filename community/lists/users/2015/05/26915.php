<?
$subject_val = "Re: [OMPI users] Default value of btl_openib_memalign_threshold";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 06:04:28 2015" -->
<!-- isoreceived="20150525100428" -->
<!-- sent="Mon, 25 May 2015 12:04:13 +0200" -->
<!-- isosent="20150525100413" -->
<!-- name="Xavier Besseron" -->
<!-- email="xavier.besseron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default value of btl_openib_memalign_threshold" -->
<!-- id="CABgOZMYV06MUJm7PaVveTKPQF6Ce4o5kD+mzWg5bf-uP4XF8Fw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="125fe3d77a1f488ab1399798157e1287_at_ARCHER.uni.lux" -->
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
<strong>From:</strong> Xavier Besseron (<em>xavier.besseron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-25 06:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26916.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Maybe in reply to:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26916.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Reply:</strong> <a href="26916.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your reply Ralph.
<br>
<p>The option only I'm using when configuring OpenMPI is '--prefix'.
<br>
When checking the config.log file, I see
<br>
<p>configure:208504: checking whether the openib BTL will use malloc hooks
<br>
configure:208510: result: yes
<br>
<p>so I guess it is properly enabled (full config.log in attachment of this
<br>
email).
<br>
<p><p><p>However, I think I have the reason of the bug (lines refer to source code
<br>
of OpenMPI 1.8.5):
<br>
<p>The default value of memalign_threshold is taken from eager_limit in
<br>
function btl_openib_register_mca_params() in btl_openib_mca.c line 717.
<br>
But the default value is eager_limit is set in btl_openib_component.c at
<br>
line 193 right after the call to btl_openib_register_mca_params().
<br>
<p>To summarize, memalign_threshold gets its value from eager_limit before
<br>
this one gets its value assigned.
<br>
<p><p><p>Best regards,
<br>
<p>Xavier
<br>
<p><p><p><p><p><p><p><p>On Mon, May 25, 2015 at 2:27 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Looking at the code, we do in fact set the memalign_threshold =
</span><br>
<span class="quotelev1">&gt; eager_limit by default, but only if you configured with
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;enable-btl-openib-malloc-alignment AND/OR we found the malloc hook
</span><br>
<span class="quotelev1">&gt; functions were available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  You might check config.log to see if the openib malloc hooks were
</span><br>
<span class="quotelev1">&gt; enabled. My guess is that they weren&#226;&#128;&#153;t, for some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On May 24, 2015, at 9:07 AM, Xavier Besseron &lt;xavier.besseron_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dear OpenMPI developers / users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is much more a comment than a question since I believe I have already
</span><br>
<span class="quotelev1">&gt; solved my issue. But I would like to report it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have noticed my code performed very badly with OpenMPI when Infinand is
</span><br>
<span class="quotelev1">&gt; enabled, sometime +50% or even +100% overhead.
</span><br>
<span class="quotelev1">&gt; I also have this slowdown when running with one thread and one process. In
</span><br>
<span class="quotelev1">&gt; such case, there is no other MPI call than MPI_Init() and MPI_Finalize().
</span><br>
<span class="quotelev1">&gt; This overhead disappears if I disable at runtime the openib btl, ie with '--mca
</span><br>
<span class="quotelev1">&gt; btl ^openib'.
</span><br>
<span class="quotelev1">&gt; After further investigation, I figured out it comes from the memory
</span><br>
<span class="quotelev1">&gt; allocator which is aligning every memory allocation when Infiniband is
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev1">&gt; This makes sense because my code is a large irregular C++ code creating
</span><br>
<span class="quotelev1">&gt; and deleting many objects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just below is the documentation of the relevant MCA parameters coming
</span><br>
<span class="quotelev1">&gt; ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;*btl_openib_memalign*&quot; (current value: &quot;32&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;          [64 | 32 | 0] - Enable (64bit or 32bit)/Disable(0)
</span><br>
<span class="quotelev1">&gt; memoryalignment for all malloc calls if btl openib is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;*btl_openib_memalign_threshold*&quot; (current value: &quot;*0*&quot;,
</span><br>
<span class="quotelev1">&gt; data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;          Allocating memory more than btl_openib_memalign_threshholdbytes
</span><br>
<span class="quotelev1">&gt; will automatically be algined to the value of btl_openib_memalign bytes.*memalign_threshhold
</span><br>
<span class="quotelev1">&gt; defaults to the same value as mca_btl_openib_eager_limit*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;*btl_openib_eager_limit*&quot; (current value: &quot;*12288*&quot;,
</span><br>
<span class="quotelev1">&gt; data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;          Maximum size (in bytes, including header) of &quot;short&quot; messages
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the end, the problem is that the default value for
</span><br>
<span class="quotelev1">&gt; btl_openib_memalign_threshold is 0, which means that *all* memory
</span><br>
<span class="quotelev1">&gt; allocations are aligned to 32 bits.
</span><br>
<span class="quotelev1">&gt; The documentation says that the default value of
</span><br>
<span class="quotelev1">&gt; btl_openib_memalign_threshold should be the the same as
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_limit, ie 12288 instead of 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On my side, changing btl_openib_memalign_threshold to 12288 fixes my
</span><br>
<span class="quotelev1">&gt; performance issue.
</span><br>
<span class="quotelev1">&gt; However, I believe that the default value of btl_openib_memalign_threshold
</span><br>
<span class="quotelev1">&gt; should be fixed in the OpenMPI code (or at least the documentation should
</span><br>
<span class="quotelev1">&gt; be fixed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I tried OpenMPI 1.8.5, 1.7.3 and 1.6.4 and it's all the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Bonus question:
</span><br>
<span class="quotelev1">&gt; As this issue might impact other users, I'm considering applying a global
</span><br>
<span class="quotelev1">&gt; fix on our clusters by setting this default value
</span><br>
<span class="quotelev1">&gt; etc/openmpi-mca-params.conf.
</span><br>
<span class="quotelev1">&gt; Do you see any good reason not doing it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you for your comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Xavier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;  Dr Xavier BESSERON
</span><br>
<span class="quotelev1">&gt; Research associate
</span><br>
<span class="quotelev1">&gt; FSTC, University of Luxembourg
</span><br>
<span class="quotelev1">&gt; Campus Kirchberg, Office E-007
</span><br>
<span class="quotelev1">&gt; Phone: +352 46 66 44 5418
</span><br>
<span class="quotelev1">&gt; <a href="http://luxdem.uni.lu/">http://luxdem.uni.lu/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26913.php">http://www.open-mpi.org/community/lists/users/2015/05/26913.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dr Xavier BESSERON
Research associate
FSTC, University of Luxembourg
Campus Kirchberg, Office E-007
Phone: +352 46 66 44 5418
<a href="http://luxdem.uni.lu/">http://luxdem.uni.lu/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26915/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26916.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Maybe in reply to:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26916.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Reply:</strong> <a href="26916.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
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
