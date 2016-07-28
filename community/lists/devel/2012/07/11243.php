<?
$subject_val = "Re: [OMPI devel] openib max_cqe";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 06:21:26 2012" -->
<!-- isoreceived="20120706102126" -->
<!-- sent="Fri, 06 Jul 2012 06:21:28 -0400" -->
<!-- isosent="20120706102128" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib max_cqe" -->
<!-- id="4FF6BC28.6020007_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A6C79FDD-3B91-4F49-9F83-A65F9ED20BEA_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib max_cqe<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 06:21:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11244.php">Fluder, Eugene: "[OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11242.php">George Bosilca: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11237.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11257.php">Brad Benton: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11257.php">Brad Benton: "Re: [OMPI devel] openib max_cqe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/5/2012 5:47 PM, Shamis, Pavel wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; I mentioned on the call that for Mellanox devices (+OFA verbs) this resource is really cheap. Do you run mellanox hca + OFA verbs ?
</span><br>
<span class="quotelev2">&gt;&gt; (I'll reply because I know Terry is offline for the rest of the day)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, he does.
</span><br>
<span class="quotelev1">&gt; I asked because SUN used to have own verbs driver.
</span><br>
I noticed this on a Solaris machine, I am not sure I have the same set 
<br>
up for Linux but I'll look and see if I can reproduce the same issue on 
<br>
Linux.
<br>
<p>--td
<br>
<span class="quotelev2">&gt;&gt; The heart of the question: is it incorrect to assume that we'll consume (num CQE * CQE size) registered memory for each QP opened?
</span><br>
<span class="quotelev1">&gt; QP or CQ ?  I think you don't want to assume anything there. Verbs (user and kernel) do their own magic there.
</span><br>
<span class="quotelev1">&gt; I think Mellanox should address this question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11244.php">Fluder, Eugene: "[OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11242.php">George Bosilca: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11237.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11257.php">Brad Benton: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11257.php">Brad Benton: "Re: [OMPI devel] openib max_cqe"</a>
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
