<?
$subject_val = "Re: [OMPI users] openmpi + share points";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 08:14:47 2010" -->
<!-- isoreceived="20100515121447" -->
<!-- sent="Sat, 15 May 2010 08:14:42 -0400" -->
<!-- isosent="20100515121442" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi + share points" -->
<!-- id="6B0CFD91-0E2A-498C-97BD-C6EB974F90BC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="07397866-B6F4-42FA-A46C-325742796A51_at_onera.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi + share points<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 08:14:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13050.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Previous message:</strong> <a href="13048.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>In reply to:</strong> <a href="12998.php">Christophe Peyret: "[OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13088.php">Christophe Peyret: "Re: [OMPI users] openmpi + share points"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>It is probably much easier to NFS share the installation directory so that the exact same installation directory is available on all nodes.  For example, if you installed OMPI into /opt/openmpi-1.4.2, then make /opt/openmpi-1.4.2 available on all nodes (even if they're mounted network shares).
<br>
<p>Can you try that?
<br>
<p><p>On May 10, 2010, at 9:04 AM, Christophe Peyret wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am building a cluster with 6 Apple xserve running OSX Server 10.6 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node1.cluster
</span><br>
<span class="quotelev1">&gt; node2.cluster
</span><br>
<span class="quotelev1">&gt; node3.cluster
</span><br>
<span class="quotelev1">&gt; node4.cluster
</span><br>
<span class="quotelev1">&gt; node5.cluster
</span><br>
<span class="quotelev1">&gt; node6.cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've intalled openmpi in directory /opt/openmpi-1.4.2 of node1 then I made a share point of /opt -&gt; /Network/opt and define variables
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export MPI_HOME=/Network/opt/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; export OPAL_PREFIX=/Network/opt/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can access to openmpi from all nodes. However, I still face a problem when I launch a computation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun --prefix /Network/opt/openmpi-1.4.2 -n 4 -hostfile ~peyret/hostfile  space64 -f Test/cfm56_hp_Rigid/cfm56_hp_Rigid.def -fast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is returns me the error message :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node2.cluster:09163] mca: base: component_find: unable to open /Network/opt/openmpi-1.4.2/lib/openmpi/mca_odls_default: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [node4.cluster:08867] mca: base: component_find: unable to open /Network/opt/openmpi-1.4.2/lib/openmpi/mca_odls_default: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [node3.cluster:08880] mca: base: component_find: unable to open /Network/opt/openmpi-1.4.2/lib/openmpi/mca_odls_default: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any idea ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christophe
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13050.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Previous message:</strong> <a href="13048.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>In reply to:</strong> <a href="12998.php">Christophe Peyret: "[OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13088.php">Christophe Peyret: "Re: [OMPI users] openmpi + share points"</a>
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
