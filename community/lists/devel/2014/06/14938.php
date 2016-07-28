<?
$subject_val = "Re: [OMPI devel] trunk failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 02:45:40 2014" -->
<!-- isoreceived="20140602064540" -->
<!-- sent="Mon, 2 Jun 2014 15:45:37 +0900" -->
<!-- isosent="20140602064537" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk failure" -->
<!-- id="CAAkFZ5vci7PSCyCrT7k6U7NkMS8mqR2F0=J=Jj4AZ-xH9=SGqA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1E021CCC-A3E6-4EF7-A504-A2AB4FA3537B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-06-02 02:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14939.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14937.php">Gilles Gouaillardet: "[OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="14936.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14939.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14939.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike and Ralph,
<br>
<p>i got the very same error.
<br>
<p>in orte/mca/rtc/freq/rtc_freq.c at line 187
<br>
fp = fopen(filename, &quot;r&quot;);
<br>
and filename is &quot;/sys/devices/system/cpu/cpu0/cpufreq/scaling_governor&quot;
<br>
<p>there is no error check, so if fp is NULL, orte_getline() will call fgets()
<br>
that will crash.
<br>
<p>that can happen for example if the intel_pstate (or similar) kernel module
<br>
is not loaded on a CentOS 6, or if the intel_pstate kernel module is not
<br>
even present (depending on how the linux kernel was built)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Mon, Jun 2, 2014 at 1:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It's merrily passing all my MTT tests, so it appears to be fine for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would help if you provided *some* information along with these reports
</span><br>
<span class="quotelev1">&gt; - like how was this configured, what environment are you running under, how
</span><br>
<span class="quotelev1">&gt; many nodes were you using, etc. Otherwise, it's a totally useless report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14938/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14939.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14937.php">Gilles Gouaillardet: "[OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="14936.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14939.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14939.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
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
