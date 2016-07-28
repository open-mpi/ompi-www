<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 11:23:41 2007" -->
<!-- isoreceived="20070529152341" -->
<!-- sent="Tue, 29 May 2007 11:23:05 -0400" -->
<!-- isosent="20070529152305" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE registry patch" -->
<!-- id="49E56E33-0EC1-49AF-9E94-95C77757F552_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AB53438C-674B-4B9E-A3FA-1FBE8428BDC6_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 11:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1605.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>In reply to:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1605.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1605.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd be happy to commit the patch into the trunk. But after what  
<br>
happened last time, I'm more than cautious. If the community think  
<br>
the patch is worth having it, let me know and I'll push it in the  
<br>
trunk asap.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 29, 2007, at 10:56 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; I think both patches should be put in immediately. I have done some
</span><br>
<span class="quotelev1">&gt; simple testing, and with 128 nodes of odin, with 1024 processes
</span><br>
<span class="quotelev1">&gt; running mpi hello, these decrease our running time from about 14.2
</span><br>
<span class="quotelev1">&gt; seconds to 10.9 seconds. This is a significant decrease, and as the
</span><br>
<span class="quotelev1">&gt; scale increases there should be increasing benefit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be happy to commit these changes if no one objects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 24, 2007, at 8:39 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks - I'll take a look at this (and the prior ones!) in the next
</span><br>
<span class="quotelev2">&gt;&gt; couple
</span><br>
<span class="quotelev2">&gt;&gt; of weeks when time permits and get back to you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/23/07 1:11 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached is another patch to the ORTE layer, more specifically the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replica. The idea is to decrease the number of strcmp by using a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; small hash function before doing the strcmp. The hask key for each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; registry entry is computed when it is added to the registry. When
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we're doing a query, instead of comparing the 2 strings we first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check if the hash key match, and if they do match then we compare  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 strings in order to make sure we eliminate collisions from our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; answers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is some benefit in terms of performance. It's hardly visible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for few processes, but it start showing up when the number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes increase. In fact the number of strcmp in the trace file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drastically decrease. The main reason it works well, is because most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the keys start with basically the same chars (such as orte-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blahblah) which transform the strcmp on a loop over few chars.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph, please consider it for inclusion on the ORTE layer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1604/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1605.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>In reply to:</strong> <a href="1603.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1605.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1605.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
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
