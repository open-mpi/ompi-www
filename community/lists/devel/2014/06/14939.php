<?
$subject_val = "Re: [OMPI devel] trunk failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 03:19:46 2014" -->
<!-- isoreceived="20140602071946" -->
<!-- sent="Mon, 2 Jun 2014 16:19:44 +0900" -->
<!-- isosent="20140602071944" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk failure" -->
<!-- id="CAAkFZ5vFkcm-jUJy890XG_f=eiYqdy+26o0o1Qq0mMiMkTt0gA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vci7PSCyCrT7k6U7NkMS8mqR2F0=J=Jj4AZ-xH9=SGqA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk failure<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 03:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14940.php">Manuel Rodriguez Pascual: "[OMPI devel] already founded stay at your institution"</a>
<li><strong>Previous message:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14944.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14944.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike and Ralph,
<br>
<p>i could not find a simple workaround.
<br>
<p>for the time being, i commited r31926 and invite those who face a similar
<br>
issue to use the following workaround :
<br>
export OMPI_MCA_rtc_freq_priority=0
<br>
/* or mpirun --mca rtc_freq_priority 0 ... */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Mon, Jun 2, 2014 at 3:45 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; in orte/mca/rtc/freq/rtc_freq.c at line 187
</span><br>
<span class="quotelev1">&gt; fp = fopen(filename, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt; and filename is &quot;/sys/devices/system/cpu/cpu0/cpufreq/scaling_governor&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there is no error check, so if fp is NULL, orte_getline() will call
</span><br>
<span class="quotelev1">&gt; fgets() that will crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14940.php">Manuel Rodriguez Pascual: "[OMPI devel] already founded stay at your institution"</a>
<li><strong>Previous message:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14944.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14944.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
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
