<?
$subject_val = "Re: [OMPI users] Openib with &gt; 32 cores per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 10:20:01 2011" -->
<!-- isoreceived="20110520142001" -->
<!-- sent="Fri, 20 May 2011 15:19:55 +0100" -->
<!-- isosent="20110520141955" -->
<!-- name="Robert Horton" -->
<!-- email="r.horton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openib with &amp;gt; 32 cores per node" -->
<!-- id="1305901195.9663.164.camel_at_moelwyn" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B3E83138-9AF0-48C0-871C-DBBB2E712E12_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openib with &gt; 32 cores per node<br>
<strong>From:</strong> Robert Horton (<em>r.horton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 10:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16596.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Previous message:</strong> <a href="16594.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16596.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16596.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for getting back to me (and thanks to Jeff for the explanation
<br>
too).
<br>
<p>On Thu, 2011-05-19 at 09:59 -0600, Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 19, 2011, at 9:37 AM, Robert Horton wrote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Try the following QP parameters that only use shared receive queues.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for that. If I run the job over 2 x 48 cores it now works and the
</span><br>
<span class="quotelev2">&gt; &gt; performance seems reasonable (I need to do some more tuning) but when I
</span><br>
<span class="quotelev2">&gt; &gt; go up to 4 x 48 cores I'm getting the same problem:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local:18106] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How much memory does each node have?  Does this happen at startup?
</span><br>
<p>Each node has 64GB of RAM. The error happens fairly soon after the job
<br>
starts.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try adding:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_cpc_include rdmacm
</span><br>
<p>Ah - that looks much better. I can now run hpcc over all 15x48 cores. I
<br>
need to look at the performance in a bit more detail but it seems to be
<br>
&quot;reasonable&quot; at least :)
<br>
<p>One thing is puzzling me - when I compile OpenMPI myself it seems to
<br>
lack rdmamc support - however the one compiled by the OFED install
<br>
process does include it. I'm compiling with:
<br>
<p>'--prefix=/share/apps/openmpi/1.4.3/gcc' '--with-sge' '--with-openib' '--enable-openib-rdmacm'
<br>
<p>Any idea what might be going on there?
<br>
<p><span class="quotelev1">&gt; I'm not sure if your version of OFED supports this feature, but maybe using XRC may help.  I **think** other tweaks are needed to get this going, but I'm not familiar with the details.
</span><br>
<p>I'm using the QLogic (QLE7340) rather than Mellanox cards so that
<br>
doesn't seem to be an option to me (?). It would be interesting to know
<br>
how much difference it would make though...
<br>
<p>Thanks again for your help and have a good weekend.
<br>
<p>Rob
<br>
<p><pre>
-- 
Robert Horton
System Administrator (Research Support) - School of Mathematical Sciences
Queen Mary, University of London
r.horton_at_[hidden]  -  +44 (0) 20 7882 7345
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16596.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Previous message:</strong> <a href="16594.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16596.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16596.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
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
