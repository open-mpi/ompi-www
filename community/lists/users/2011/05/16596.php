<?
$subject_val = "Re: [OMPI users] Openib with &gt; 32 cores per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 10:49:58 2011" -->
<!-- isoreceived="20110520144958" -->
<!-- sent="Fri, 20 May 2011 10:49:33 -0400" -->
<!-- isosent="20110520144933" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openib with &amp;gt; 32 cores per node" -->
<!-- id="801FAAFE-A3C2-422C-8649-1B4152FE4A0B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1305901195.9663.164.camel_at_moelwyn" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 10:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16597.php">Gus Correa: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16595.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16595.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16614.php">Dave Love: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16614.php">Dave Love: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're using QLogic, you might want to try the native PSM Open MPI support rather than the verbs support.  QLogic cards only &quot;sorta&quot; support verbs in order to say that they're OFED-complaint; their native PSM interface is more performant than verbs for MPI.
<br>
<p>Assuming you built OMPI with PSM support:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pml cm --mca mtl psm ....
<br>
<p>(although probably just the pml/cm setting is sufficient -- the mtl/psm option will probably happen automatically)
<br>
<p>See the OMPI README file for some more details about MTLs, PMLs, etc. (look for &quot;psm&quot;/i in the file)
<br>
<p><p><p>On May 20, 2011, at 10:19 AM, Robert Horton wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for getting back to me (and thanks to Jeff for the explanation
</span><br>
<span class="quotelev1">&gt; too).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 2011-05-19 at 09:59 -0600, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 19, 2011, at 9:37 AM, Robert Horton wrote
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try the following QP parameters that only use shared receive queues.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for that. If I run the job over 2 x 48 cores it now works and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance seems reasonable (I need to do some more tuning) but when I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go up to 4 x 48 cores I'm getting the same problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-7.local:18106] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How much memory does each node have?  Does this happen at startup?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each node has 64GB of RAM. The error happens fairly soon after the job
</span><br>
<span class="quotelev1">&gt; starts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try adding:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah - that looks much better. I can now run hpcc over all 15x48 cores. I
</span><br>
<span class="quotelev1">&gt; need to look at the performance in a bit more detail but it seems to be
</span><br>
<span class="quotelev1">&gt; &quot;reasonable&quot; at least :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One thing is puzzling me - when I compile OpenMPI myself it seems to
</span><br>
<span class="quotelev1">&gt; lack rdmamc support - however the one compiled by the OFED install
</span><br>
<span class="quotelev1">&gt; process does include it. I'm compiling with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; '--prefix=/share/apps/openmpi/1.4.3/gcc' '--with-sge' '--with-openib' '--enable-openib-rdmacm'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what might be going on there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if your version of OFED supports this feature, but maybe using XRC may help.  I **think** other tweaks are needed to get this going, but I'm not familiar with the details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using the QLogic (QLE7340) rather than Mellanox cards so that
</span><br>
<span class="quotelev1">&gt; doesn't seem to be an option to me (?). It would be interesting to know
</span><br>
<span class="quotelev1">&gt; how much difference it would make though...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for your help and have a good weekend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rob
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16597.php">Gus Correa: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16595.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16595.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16614.php">Dave Love: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16614.php">Dave Love: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
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
