<?
$subject_val = "Re: [OMPI users] Help with some fundamentals";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 12:00:04 2011" -->
<!-- isoreceived="20110120170004" -->
<!-- sent="Thu, 20 Jan 2011 08:59:32 -0800" -->
<!-- isosent="20110120165932" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with some fundamentals" -->
<!-- id="AANLkTimbxDeEUVw8j_jzu6M_E7miShccHtg3d16e+HLp_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CACA1C4D94C3374F81C530763A09DBF036A85DFB0D_at_ex-adg-01.addinggroup.lan" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with some fundamentals<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 11:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15383.php">dj M: "[OMPI users] FW: Open MPI on HPUX"</a>
<li><strong>Previous message:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15384.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you would probably want some kind of cluster managing software like torque
<br>
<p>On Thu, Jan 20, 2011 at 8:50 AM, Olivier SANNIER &lt;
<br>
Olivier.SANNIER_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; First of all, thank you for answers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a bit more questions, added below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the behavior in case a node dies or becomes unreachable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your run will be aborted. However there is checkpoint/restart support for
</span><br>
<span class="quotelev1">&gt; Linux <a href="http://www.open-mpi.org/faq/?category=ft">http://www.open-mpi.org/faq/?category=ft</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As this is a Win32 program, I&#146;ll have to take into account that there is
</span><br>
<span class="quotelev1">&gt; only the &#171; abort &#187; behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What makes any given machine become a node available for tasks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You define it in a host file or a batch system tells it OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there is no dynamic discovery of nodes available on the network. Unless,
</span><br>
<span class="quotelev1">&gt; of course, if I was to write a tool that would do it before the actual run
</span><br>
<span class="quotelev1">&gt; is started.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a monitoring tool that would give me indications of the status and
</span><br>
<span class="quotelev1">&gt; health of the nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This has nothing to do with MPI. Nagios or Ganglia can do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was more thinking of a tool that would tell me a node is already
</span><br>
<span class="quotelev1">&gt; performing a task, so that I can avoid having it oversubscribed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m quite sure all these are trivial questions for those with more
</span><br>
<span class="quotelev1">&gt; experience, but I&#146;m having a hard time finding resources that would answer
</span><br>
<span class="quotelev1">&gt; those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Read an introduction on programming with MPI and another one on Beowulf
</span><br>
<span class="quotelev1">&gt; clusters (batch systems, monitoring, shared file systems). This should give
</span><br>
<span class="quotelev1">&gt; you enough information on the topic. If you don't mind spending more money
</span><br>
<span class="quotelev1">&gt; on software you can also take a look at Microsofts HPC Server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve started looking at beowulf clusters, and that lead me to PBS. Am I
</span><br>
<span class="quotelev1">&gt; right in assuming that PBS (PBSPro or TORQUE) could be used to do the
</span><br>
<span class="quotelev1">&gt; monitoring and the load balancing I thought of?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15382/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15383.php">dj M: "[OMPI users] FW: Open MPI on HPUX"</a>
<li><strong>Previous message:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15384.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
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
