<?
$subject_val = "Re: [OMPI users] Openib with &gt; 32 cores per node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 11:59:18 2011" -->
<!-- isoreceived="20110519155918" -->
<!-- sent="Thu, 19 May 2011 09:59:13 -0600" -->
<!-- isosent="20110519155913" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openib with &amp;gt; 32 cores per node" -->
<!-- id="B3E83138-9AF0-48C0-871C-DBBB2E712E12_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1305819476.9663.148.camel_at_moelwyn" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 11:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16578.php">Zhangping Wei: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Previous message:</strong> <a href="16576.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16576.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16583.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16583.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16595.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On May 19, 2011, at 9:37 AM, Robert Horton wrote
<br>
<p><span class="quotelev1">&gt; On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try the following QP parameters that only use shared receive queues.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for that. If I run the job over 2 x 48 cores it now works and the
</span><br>
<span class="quotelev1">&gt; performance seems reasonable (I need to do some more tuning) but when I
</span><br>
<span class="quotelev1">&gt; go up to 4 x 48 cores I'm getting the same problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [compute-1-7.local:18106] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<p>How much memory does each node have?  Does this happen at startup?
<br>
<p>Try adding:
<br>
<p>-mca btl_openib_cpc_include rdmacm
<br>
<p>I'm not sure if your version of OFED supports this feature, but maybe using XRC may help.  I **think** other tweaks are needed to get this going, but I'm not familiar with the details.
<br>
<p>Hope that helps,
<br>
<p>Samuel K. Gutierrez
<br>
Los Alamos National Laboratory
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rob
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Robert Horton
</span><br>
<span class="quotelev1">&gt; System Administrator (Research Support) - School of Mathematical Sciences
</span><br>
<span class="quotelev1">&gt; Queen Mary, University of London
</span><br>
<span class="quotelev1">&gt; r.horton_at_[hidden]  -  +44 (0) 20 7882 7345
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
<li><strong>Next message:</strong> <a href="16578.php">Zhangping Wei: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Previous message:</strong> <a href="16576.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16576.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16583.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16583.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16595.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
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
