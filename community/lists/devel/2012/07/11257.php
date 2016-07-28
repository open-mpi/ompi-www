<?
$subject_val = "Re: [OMPI devel] openib max_cqe";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 12:20:06 2012" -->
<!-- isoreceived="20120709162006" -->
<!-- sent="Mon, 9 Jul 2012 11:20:01 -0500" -->
<!-- isosent="20120709162001" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib max_cqe" -->
<!-- id="CAOELebbMe8xbvk0D4mGCF-1YODoks885-B6duCOMhJ1WkWcdHQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FF6BC28.6020007_at_oracle.com" -->
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
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 12:20:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11258.php">Nathan Hjelm: "[OMPI devel] Opal wrappers question"</a>
<li><strong>Previous message:</strong> <a href="11256.php">Jeff Squyres: "Re: [OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>In reply to:</strong> <a href="11243.php">TERRY DONTJE: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running into similar issues with both Mellanox and IBM HCAs.
<br>
<p>On a node installed with RHEL6.2 and MLNX_OFED-1.5.3-3.0.0, there is a
<br>
significant hit to locked memory when going with the device's max_cqe.
<br>
Here, for comparison's sake is the memory utilization for a simple MPI
<br>
process when using the new cq_size default, and when restricting it to 1500:
<br>
<p>cq_size = max_cqe:
<br>
VmPeak:   348736 kB
<br>
VmSize:   348352 kB
<br>
VmLck:    292096 kB
<br>
VmHWM:    304896 kB
<br>
VmRSS:    304896 kB
<br>
VmData:   333504 kB
<br>
<p>cq_size = 1500
<br>
VmPeak:    86720 kB
<br>
VmSize:    86336 kB
<br>
VmLck:     30080 kB
<br>
VmHWM:     42880 kB
<br>
VmRSS:     42880 kB
<br>
VmData:    71488 kB
<br>
<p>For our Power systems using the IBM eHCA, the default value exhausts memory
<br>
and we can't even run.
<br>
<p>--Brad
<br>
<p><p>On Fri, Jul 6, 2012 at 5:21 AM, TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/5/2012 5:47 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I mentioned on the call that for Mellanox devices (+OFA verbs) this resource is really cheap. Do you run mellanox hca + OFA verbs ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (I'll reply because I know Terry is offline for the rest of the day)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, he does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I asked because SUN used to have own verbs driver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I noticed this on a Solaris machine, I am not sure I have the same set up
</span><br>
<span class="quotelev1">&gt; for Linux but I'll look and see if I can reproduce the same issue on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The heart of the question: is it incorrect to assume that we'll consume (num CQE * CQE size) registered memory for each QP opened?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  QP or CQ ?  I think you don't want to assume anything there. Verbs (user and kernel) do their own magic there.
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
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11258.php">Nathan Hjelm: "[OMPI devel] Opal wrappers question"</a>
<li><strong>Previous message:</strong> <a href="11256.php">Jeff Squyres: "Re: [OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>In reply to:</strong> <a href="11243.php">TERRY DONTJE: "Re: [OMPI devel] openib max_cqe"</a>
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
