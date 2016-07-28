<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 10 11:12:45 2012" -->
<!-- isoreceived="20120410151245" -->
<!-- sent="Tue, 10 Apr 2012 17:12:39 +0200" -->
<!-- isosent="20120410151239" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="zarafa.4f844de7.619e.78012b75343457e6_at_mail.fft" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="105182EF-8D4D-4F76-A25F-C045903C4688_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight intregration leads to bad allocation<br>
<strong>From:</strong> Eloi Gaudry (<em>eloi.gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-10 11:12:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18982.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18980.php">Ralph Castain: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18980.php">Ralph Castain: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18984.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; This might be of interest to Reuti and you : it seems that we cannot reproduce the problem anymore if we don't provide the &quot;-np N&quot; option on the orterun command line. Of course, we need to launch a few other runs to be really sure because the allocation error was not always observable. Actually, I recently understood (from Reuti) that the tight integration mode would supply every necessary bits to the launcher and thus I removed the '-np N' that was around... Could it be that using the '-np N' while using the sge tight integration mode is pathologic ?
</span><br>
<p>No, it should work just fine. Sounds like something weird is going on.
<br>
<p><p>[eg: ] ok, then let me know when you'll got some time to spend on this issue, I'll be glad to help.
<br>
<p><p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18982.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18980.php">Ralph Castain: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18980.php">Ralph Castain: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18984.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
