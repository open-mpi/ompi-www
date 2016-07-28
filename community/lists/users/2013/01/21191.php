<?
$subject_val = "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 15:02:51 2013" -->
<!-- isoreceived="20130122200251" -->
<!-- sent="Tue, 22 Jan 2013 12:02:43 -0800" -->
<!-- isosent="20130122200243" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR" -->
<!-- id="89DD9773-121F-4072-9D5D-2E6ABD565269_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAEQVjDMUnAjOxjaQ5nDUioLKcj4Ju6c+ttRWk976wi_Tfy8C9A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 15:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21192.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21190.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>In reply to:</strong> <a href="21188.php">Ada Mancuso: "[OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21193.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Reply:</strong> <a href="21193.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems to be working fine for me with the latest 1.7 tarball (not rc5 - I didn't test that one). Could be there was a problem that has since been fixed. We are getting ready to release an updated rc, so you might want to try it (or use the latest nightly 1.7 snapshot).
<br>
<p><p>On Jan 22, 2013, at 9:57 AM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm trying to run my mpi program using open mpi 1.7 rc5 on 4 machines using the command:
</span><br>
<span class="quotelev1">&gt; mpirun -np4 -hostfile file a.out
</span><br>
<span class="quotelev1">&gt; but i get the following message errors:
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file ../../../../../ompi/orte/mca/rml/oob/rml_oob_send.c
</span><br>
<span class="quotelev1">&gt; attempted to send to [[21341,0],2]: tag 15 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file ../../../../ompi/orte/mca/grpcomm/base/grpcomm_base_xcast.c
</span><br>
<span class="quotelev1">&gt; The file etc/hosts is composed by ipaddress hostname, I have exchange ssh keys among the machines and ssh login works without requiring authentication password. Surprisingly if I try to run my program with at most 2 hosts, and so the file hosts contains only two hosts, it works but if i try to run my program with more than two hosts i have this error; mpi works well on each machine and I also tried to run my program with different couple of machines in order to be sure that no machine could be the problem.
</span><br>
<span class="quotelev1">&gt; Can you help me please?
</span><br>
<span class="quotelev1">&gt; Ada
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21191/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21192.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21190.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>In reply to:</strong> <a href="21188.php">Ada Mancuso: "[OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21193.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Reply:</strong> <a href="21193.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
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
