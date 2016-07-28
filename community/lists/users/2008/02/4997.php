<?
$subject_val = "Re: [OMPI users] Infinipath context limit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 14:34:07 2008" -->
<!-- isoreceived="20080206193407" -->
<!-- sent="Wed, 6 Feb 2008 11:34:00 -0800" -->
<!-- isosent="20080206193400" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infinipath context limit" -->
<!-- id="20080206193400.GC9818_at_mv.qlogic.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0802061151590.12335_at_druifje.clustervision.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infinipath context limit<br>
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 14:34:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4998.php">Torje Henriksen: "[OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Previous message:</strong> <a href="4996.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>In reply to:</strong> <a href="4992.php">Dani&#235;l Mantione: "[OMPI users] Infinipath context limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5001.php">Daniël Mantione: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>Reply:</strong> <a href="5001.php">Daniël Mantione: "Re: [OMPI users] Infinipath context limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Daniel --
<br>
<p>&nbsp;&nbsp;PSM should determine your node setup and enable shared contexts
<br>
&nbsp;&nbsp;accordingly, but it looks like something isn't working right.  You
<br>
&nbsp;&nbsp;can apply the patch I've attached to this e-mail and things should
<br>
&nbsp;&nbsp;work again.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;However, it would be useful to identify what's going wrong.  Can
<br>
&nbsp;&nbsp;you compile a hello world program and run it with the machinefile
<br>
&nbsp;&nbsp;you're trying to use.  Send me the output from:
<br>
<p>&nbsp;&nbsp;mpirun -machinefile .... env PSM_TRACEMASK=0x101 ./hello_world
<br>
<p>&nbsp;&nbsp;I understand your failure mode only if somehow the 8-core node is
<br>
&nbsp;&nbsp;detected to be a 4-core node.  The output should tell us this.
<br>
<p>&nbsp;&nbsp;cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
&nbsp;&nbsp;
<br>
<p><p>On Wed, 06 Feb 2008, Dani?l Mantione wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to use OpenMPI on a cluster with Infinipath and 8 core nodes. 
</span><br>
<span class="quotelev1">&gt; I get these errors when using more than 4 processes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node017.13311ipath_userinit: assign_port command failed: Device or 
</span><br>
<span class="quotelev1">&gt; resource busy
</span><br>
<span class="quotelev1">&gt; [node017:13311] Open MPI failed to open a PSM endpoint: No free InfiniPath 
</span><br>
<span class="quotelev1">&gt; contexts available on /dev/ipath
</span><br>
<span class="quotelev1">&gt; [node017:13311] Error in psm_ep_open (error No free ports could be 
</span><br>
<span class="quotelev1">&gt; obtained)
</span><br>
<span class="quotelev1">&gt; node017.13315ipath_userinit: assign_port command failed: Device or 
</span><br>
<span class="quotelev1">&gt; resource busy
</span><br>
<span class="quotelev1">&gt; [node017:13315] Open MPI failed to open a PSM endpoint: No free InfiniPath 
</span><br>
<span class="quotelev1">&gt; contexts available on /dev/ipath
</span><br>
<span class="quotelev1">&gt; [node017:13315] Error in psm_ep_open (error No free ports could be 
</span><br>
<span class="quotelev1">&gt; obtained)
</span><br>
<span class="quotelev1">&gt; node017.13314ipath_userinit: assign_port command failed: Device or 
</span><br>
<span class="quotelev1">&gt; resource busy
</span><br>
<span class="quotelev1">&gt; node017.13313ipath_userinit: assign_port command failed: Device or 
</span><br>
<span class="quotelev1">&gt; resource busy
</span><br>
<span class="quotelev1">&gt; [node017:13313] Open MPI failed to open a PSM endpoint: No free InfiniPath 
</span><br>
<span class="quotelev1">&gt; contexts available on /dev/ipath
</span><br>
<span class="quotelev1">&gt; [node017:13313] Error in psm_ep_open (error No free ports could be 
</span><br>
<span class="quotelev1">&gt; obtained)
</span><br>
<span class="quotelev1">&gt; [node017:13314] Open MPI failed to open a PSM endpoint: No free InfiniPath 
</span><br>
<span class="quotelev1">&gt; contexts available on /dev/ipath
</span><br>
<span class="quotelev1">&gt; [node017:13314] Error in psm_ep_open (error No free ports could be 
</span><br>
<span class="quotelev1">&gt; obtained)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Infinipath User Guide writes this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Context Sharing Enabled: The MPI library provides PSM the local process layout
</span><br>
<span class="quotelev1">&gt; so that InfiniPath contexts available on each node can be shared if necessary; for
</span><br>
<span class="quotelev1">&gt; example, when running more node programs than contexts. By default, the
</span><br>
<span class="quotelev1">&gt; QLE7140 and QHT7140 have a maximum of four and eight sharable InfiniPath
</span><br>
<span class="quotelev1">&gt; contexts, respectively. Up to 4 node programs (from the same MPI job) can share
</span><br>
<span class="quotelev1">&gt; an InfiniPath context, for a total of 16 node programs per node for each QLE7140
</span><br>
<span class="quotelev1">&gt; and 32 node programs per node for each QHT7140.
</span><br>
<span class="quotelev1">&gt; The error message when this limit is exceeded is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No free InfiniPath contexts available on /dev/ipath
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like OpenMPI is running into the context limit, apparently 4 
</span><br>
<span class="quotelev1">&gt; inthis case. Can I do the context sharing mentioned with OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dani&#235;l Mantione
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
christian.bell_at_[hidden]
(QLogic Host Solutions Group, formerly Pathscale)

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4997/context-sharing-ompi.patch">context-sharing-ompi.patch</a>
</ul>
<!-- attachment="context-sharing-ompi.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4998.php">Torje Henriksen: "[OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Previous message:</strong> <a href="4996.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>In reply to:</strong> <a href="4992.php">Dani&#235;l Mantione: "[OMPI users] Infinipath context limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5001.php">Daniël Mantione: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>Reply:</strong> <a href="5001.php">Daniël Mantione: "Re: [OMPI users] Infinipath context limit"</a>
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
