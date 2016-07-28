<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 10:56:05 2007" -->
<!-- isoreceived="20070529145605" -->
<!-- sent="Tue, 29 May 2007 10:56:03 -0400" -->
<!-- isosent="20070529145603" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE registry patch" -->
<!-- id="AB53438C-674B-4B9E-A3FA-1FBE8428BDC6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C27AE398.9430%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 10:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1604.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1604.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1604.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think both patches should be put in immediately. I have done some  
<br>
simple testing, and with 128 nodes of odin, with 1024 processes  
<br>
running mpi hello, these decrease our running time from about 14.2  
<br>
seconds to 10.9 seconds. This is a significant decrease, and as the  
<br>
scale increases there should be increasing benefit.
<br>
<p>I'd be happy to commit these changes if no one objects.
<br>
<p>Tim
<br>
<p>On May 24, 2007, at 8:39 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Thanks - I'll take a look at this (and the prior ones!) in the next  
</span><br>
<span class="quotelev1">&gt; couple
</span><br>
<span class="quotelev1">&gt; of weeks when time permits and get back to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/23/07 1:11 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached is another patch to the ORTE layer, more specifically the
</span><br>
<span class="quotelev2">&gt;&gt; replica. The idea is to decrease the number of strcmp by using a
</span><br>
<span class="quotelev2">&gt;&gt; small hash function before doing the strcmp. The hask key for each
</span><br>
<span class="quotelev2">&gt;&gt; registry entry is computed when it is added to the registry. When
</span><br>
<span class="quotelev2">&gt;&gt; we're doing a query, instead of comparing the 2 strings we first
</span><br>
<span class="quotelev2">&gt;&gt; check if the hash key match, and if they do match then we compare the
</span><br>
<span class="quotelev2">&gt;&gt; 2 strings in order to make sure we eliminate collisions from our
</span><br>
<span class="quotelev2">&gt;&gt; answers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is some benefit in terms of performance. It's hardly visible
</span><br>
<span class="quotelev2">&gt;&gt; for few processes, but it start showing up when the number of
</span><br>
<span class="quotelev2">&gt;&gt; processes increase. In fact the number of strcmp in the trace file
</span><br>
<span class="quotelev2">&gt;&gt; drastically decrease. The main reason it works well, is because most
</span><br>
<span class="quotelev2">&gt;&gt; of the keys start with basically the same chars (such as orte-
</span><br>
<span class="quotelev2">&gt;&gt; blahblah) which transform the strcmp on a loop over few chars.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, please consider it for inclusion on the ORTE layer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1604.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1604.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Reply:</strong> <a href="1604.php">George Bosilca: "Re: [OMPI devel] ORTE registry patch"</a>
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
