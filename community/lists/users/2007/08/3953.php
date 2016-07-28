<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 13:26:02 2007" -->
<!-- isoreceived="20070830172602" -->
<!-- sent="Thu, 30 Aug 2007 11:25:53 -0600" -->
<!-- isosent="20070830172553" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Circumvent --host or dynamically read host info?" -->
<!-- id="C2FC59C1.AA86%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF4AC7422E.28B1FBAD-ONC1257347.0055F5D3-C1257347.0056EE35_at_de.ibm.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-30 13:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Previous message:</strong> <a href="3952.php">Si Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3948.php">Murat Knecht: "[OMPI users] Circumvent --host or dynamically read host info?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I take it you are running in an rsh/ssh environment (as opposed to a managed
<br>
environment like SLURM)?
<br>
<p>I'm afraid that you have to tell us -all- of the nodes that will be utilized
<br>
in your job at the beginning (i.e., to mpirun). This requirement is planned
<br>
to be relaxed in a later version, but that won't be out for some time.
<br>
<p>At the moment, there is no workaround.
<br>
<p>Ralph
<br>
<p><p><p>On 8/30/07 9:51 AM, &quot;Murat Knecht&quot; &lt;MKNECHT_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have a question regarding the --host(file) option of mpirun. Whenever I
</span><br>
<span class="quotelev1">&gt; try to fork a process on another node using Spawn(), I get the following
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host specification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand this can be fixed by providing the hostnames which will be
</span><br>
<span class="quotelev1">&gt; used either by --host or by using a hostfile containing the names and
</span><br>
<span class="quotelev1">&gt; possibly the slots available.
</span><br>
<span class="quotelev1">&gt; This may be an acceptable solution, if one wants to start the same process
</span><br>
<span class="quotelev1">&gt; on several blades, but what about starting a parent process which then
</span><br>
<span class="quotelev1">&gt; initiates different child processes on other blades?
</span><br>
<span class="quotelev1">&gt; In this scenario mpirun initially does not need the information of which
</span><br>
<span class="quotelev1">&gt; other blades exist, but is only supposed to start the parent process
</span><br>
<span class="quotelev1">&gt; locally. Surely, there must be a way not to previously specify blades, but
</span><br>
<span class="quotelev1">&gt; to load this information at runtime, especially in a changing landscape
</span><br>
<span class="quotelev1">&gt; where nodes are added at runtime.
</span><br>
<span class="quotelev1">&gt; Is there a way to avoid this --host option?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using the latest version of OpenMPI (1.2.3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Murat
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Previous message:</strong> <a href="3952.php">Si Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3948.php">Murat Knecht: "[OMPI users] Circumvent --host or dynamically read host info?"</a>
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
