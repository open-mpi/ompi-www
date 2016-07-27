<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 04:53:37 2013" -->
<!-- isoreceived="20130618085337" -->
<!-- sent="Tue, 18 Jun 2013 10:53:31 +0200" -->
<!-- isosent="20130618085331" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi" -->
<!-- id="51C0200B.2020902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMe1=9n8sO6rerj9-9R+S=kmRhG-eoidm_q3TOsv+7niJyPmgQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 04:53:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3807.php">Jiri Hladky: "[hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3805.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.2rc1r5671)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3809.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
<li><strong>Reply:</strong> <a href="3809.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You likely need to compile and install another hwloc instance for your
<br>
MIC. I don't know where you're supposed to install this MIC library so
<br>
that the MIC compiler finds it.
<br>
<p>If your host home is available on the MIC just install the MIC-hwloc
<br>
somewhere in your home and have the MIC-compiler use this one for CFLAGS
<br>
and LDFLAGS.
<br>
<p>It looks like /opt/intel/mic/filesystem/base/ on the host contains the
<br>
MIC filesystem, so you could theorically install there. But I guess you
<br>
don't want to modify this special filesystem unless really really sure
<br>
of what you are doing.
<br>
<p>Please let us know how it goes, in case we have to document something.
<br>
<p>Brice
<br>
<p><p><p>Le 18/06/2013 10:40, pinak panigrahi a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to implement and improve performance of some MPI
</span><br>
<span class="quotelev1">&gt; Collectives based on affinity of the theads/processes. Hence, I am
</span><br>
<span class="quotelev1">&gt; using hwloc to find out about the topology,etc. I have written and
</span><br>
<span class="quotelev1">&gt; built my codes for Sandybridge. But when I compile the same for MIC,
</span><br>
<span class="quotelev1">&gt; it gives me an error : hwloc.h not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 18, 2013 at 12:37 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 18/06/2013 08:52, pinak panigrahi a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt; Hi, how do I use hwloc on Intel Xeon Phi. I have written codes that
</span><br>
<span class="quotelev2">&gt;     &gt; use it for Sandybridge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If you really mean 'inside the Xeon Phi&quot;, it should just work and
</span><br>
<span class="quotelev1">&gt;     report
</span><br>
<span class="quotelev1">&gt;     all available Phi cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If you mean managing the Phi internal topology from the host, it's
</span><br>
<span class="quotelev1">&gt;     a bit
</span><br>
<span class="quotelev1">&gt;     harder, we currently only report the Phi location within the host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What did you try, what didn't work, and what would you like to do
</span><br>
<span class="quotelev1">&gt;     exactly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pinak Panigrahi
</span><br>
<span class="quotelev1">&gt; pursuing Masters in Computer Science
</span><br>
<span class="quotelev1">&gt; at Sri Sathya Sai Institute Of Higher Learning,
</span><br>
<span class="quotelev1">&gt; Puttaparti, India.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Thank God for what you have, Trust Him for what you need !&quot;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3806/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3807.php">Jiri Hladky: "[hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3805.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.2rc1r5671)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3809.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
<li><strong>Reply:</strong> <a href="3809.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc on Xeon Phi"</a>
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
