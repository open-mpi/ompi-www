<?
$subject_val = "Re: [OMPI users] Question on process and memory affinity with 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 12:10:32 2014" -->
<!-- isoreceived="20140722161032" -->
<!-- sent="Tue, 22 Jul 2014 09:09:21 -0700" -->
<!-- isosent="20140722160921" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on process and memory affinity with 1.8.1" -->
<!-- id="749E3BF9-C436-4D08-A5E7-507C9BB590ED_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CBCB07C_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on process and memory affinity with 1.8.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-22 12:09:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24850.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Previous message:</strong> <a href="24848.php">Ralph Castain: "Re: [OMPI users] Using the Hydra process manager to launch Open MPI applications"</a>
<li><strong>In reply to:</strong> <a href="24840.php">Blosch, Edwin L: "[OMPI users] Question on process and memory affinity with 1.8.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not aware of any way to tell using ompi_info, I'm afraid. I'd have to ponder a bit as to how we could do so since it's a link to a library down below the one we directly use.
<br>
<p><p>On Jul 21, 2014, at 3:00 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In making the leap from 1.6 to 1.8, how can I check whether or not process/memory affinity is supported?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;ve built OpenMPI on a system where the numactl-devel package was not installed, and another where it was, but I can&#146;t see anything in the output of ompi_info that suggests any difference between the two builds.  Both builds on Linux RHEL6 systems, just different hosts.  both Sandy Bridge.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I guess I can try &#150;bind-to-core on both systems and &#150;report-bindings, then see what output I get. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I was just wondering if there&#146;s a quick way to tell by using ompi_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24840.php">http://www.open-mpi.org/community/lists/users/2014/07/24840.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24850.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Previous message:</strong> <a href="24848.php">Ralph Castain: "Re: [OMPI users] Using the Hydra process manager to launch Open MPI applications"</a>
<li><strong>In reply to:</strong> <a href="24840.php">Blosch, Edwin L: "[OMPI users] Question on process and memory affinity with 1.8.1"</a>
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
