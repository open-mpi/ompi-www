<?
$subject_val = "Re: [OMPI users] Help with some fundamentals";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 14:37:11 2011" -->
<!-- isoreceived="20110121193711" -->
<!-- sent="Fri, 21 Jan 2011 14:36:35 -0500" -->
<!-- isosent="20110121193635" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with some fundamentals" -->
<!-- id="4D39E043.2050208_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTinYjT2FSw5hBD100aXUma+8gMnp+57Q73R_RZ7y_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 14:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15396.php">Gus Correa: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Previous message:</strong> <a href="15394.php">Avinash Malik: "[OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>In reply to:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15402.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15402.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John Hearns wrote:
<br>
<span class="quotelev1">&gt; On 20 January 2011 16:50, Olivier SANNIER &lt;Olivier.SANNIER_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;ve started looking at beowulf clusters, and that lead me to PBS. Am I
</span><br>
<span class="quotelev2">&gt;&gt; right in assuming that PBS (PBSPro or TORQUE) could be used to do the
</span><br>
<span class="quotelev2">&gt;&gt; monitoring and the load balancing I thought of?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that is correct. An alternative is Gridengine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be honest, I think you should contact a company which sells
</span><br>
<span class="quotelev1">&gt; ccomputational clusters.
</span><br>
<span class="quotelev1">&gt; They will send someone to tell you how these clusters work, and give
</span><br>
<span class="quotelev1">&gt; you an idea of how a small cluster could help with your work.
</span><br>
<span class="quotelev1">&gt; I can suggest some companies off-list.
</span><br>
<p>Hi Olivier
<br>
<p>1) Besides John's suggestions, there are some good and informative
<br>
articles on how clusters work, etc, at ClusterMonkey.net:
<br>
<p><a href="http://www.clustermonkey.net/">http://www.clustermonkey.net/</a>
<br>
<p>2) Since clusters != MPI != OpenMPI,
<br>
you may find general information about clusters
<br>
in the  Beowulf and Rocks Clusters web sites
<br>
and mailing lists:
<br>
<p><a href="http://www.beowulf.org/">http://www.beowulf.org/</a>
<br>
<a href="http://www.beowulf.org/archive/index.html">http://www.beowulf.org/archive/index.html</a>
<br>
<a href="http://www.beowulf.org/mailman/listinfo/beowulf">http://www.beowulf.org/mailman/listinfo/beowulf</a>
<br>
<p><a href="http://www.rocksclusters.org/wordpress/">http://www.rocksclusters.org/wordpress/</a>
<br>
<a href="http://marc.info/?l=npaci-rocks-discussion">http://marc.info/?l=npaci-rocks-discussion</a>
<br>
<a href="https://lists.sdsc.edu/mailman/listinfo/npaci-rocks-discussion">https://lists.sdsc.edu/mailman/listinfo/npaci-rocks-discussion</a>
<br>
<p>BTW, Rocks provides free software to setup a standard cluster with
<br>
minimal effort.  It is a NSF-supported project at UCSD:
<br>
<p><a href="http://www.rocksclusters.org/wordpress/?page_id=57">http://www.rocksclusters.org/wordpress/?page_id=57</a>
<br>
<p>3) Resource managers / job queuing systems:
<br>
<p>Torque (which we use here) is free, available to download
<br>
from the AdaptiveComputing/ClusterResources web site:
<br>
<p><a href="http://www.adaptivecomputing.com/">http://www.adaptivecomputing.com/</a>
<br>
<a href="http://www.clusterresources.com/products/torque-resource-manager.php">http://www.clusterresources.com/products/torque-resource-manager.php</a>
<br>
<a href="http://www.clusterresources.com/products/maui-cluster-scheduler.php">http://www.clusterresources.com/products/maui-cluster-scheduler.php</a>
<br>
<a href="http://www.adaptivecomputing.com/resources/docs/">http://www.adaptivecomputing.com/resources/docs/</a>
<br>
<p>Torque  was formerly called PBS,
<br>
although PBS-Pro also exists as a licensed product:
<br>
<p><a href="http://en.wikipedia.org/wiki/Portable_Batch_System">http://en.wikipedia.org/wiki/Portable_Batch_System</a>
<br>
<p>Torque performs resource management, job queuing and control,
<br>
and, along with its cousin job scheduler Maui, which is also
<br>
available from the same site (one of the links above),
<br>
gives you a handle to manage resource optimization and load balancing
<br>
in one or more clusters.
<br>
<p>There are other free resource managers, like Sun Grid Engine,
<br>
although its future is not completely clear after Sun was
<br>
bought by Oracle, and its development/maintenance
<br>
apparently has been taken over by Univa:
<br>
<p><a href="http://www.univa.com/about/contact/grid-engine-hotline.php?source=GoogleAds&amp;utm_source=google&amp;utm_medium=ppc&amp;utm_campaign=sun-grid-engine">http://www.univa.com/about/contact/grid-engine-hotline.php?source=GoogleAds&amp;utm_source=google&amp;utm_medium=ppc&amp;utm_campaign=sun-grid-engine</a>
<br>
<p>Lawrence Livermore produces another free scheduler named Slurm,
<br>
but my perception is that Slurm doesn't integrate to as many HPC
<br>
tools or as easily as Torque and SGE do:
<br>
<p><a href="https://computing.llnl.gov/linux/slurm/">https://computing.llnl.gov/linux/slurm/</a>
<br>
<p>Other licensed resource managers/batch systems also exist,
<br>
including Moab (Adaptive Computing),
<br>
LSF (Platform Computing),
<br>
Tivoli/Load Leveler (IBM),
<br>
PBS-Pro (Altair):
<br>
<p><p><a href="http://www.adaptivecomputing.com/products/">http://www.adaptivecomputing.com/products/</a>
<br>
<a href="http://www.platform.com/Products">http://www.platform.com/Products</a>
<br>
<a href="http://www-03.ibm.com/systems/software/loadleveler/">http://www-03.ibm.com/systems/software/loadleveler/</a>
<br>
<a href="http://www.pbsworks.com/Default.aspx?AspxAutoDetectCookieSupport=1">http://www.pbsworks.com/Default.aspx?AspxAutoDetectCookieSupport=1</a>
<br>
<p>There are also &quot;grid&quot; resource managers (Condor, Globus, etc):
<br>
<p><a href="http://www.globus.org/">http://www.globus.org/</a>
<br>
<a href="http://www.globus.org/grid_software/computation/condor.php">http://www.globus.org/grid_software/computation/condor.php</a>
<br>
<a href="http://www.globus.org/toolkit/">http://www.globus.org/toolkit/</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15396.php">Gus Correa: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Previous message:</strong> <a href="15394.php">Avinash Malik: "[OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>In reply to:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15402.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15402.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
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
