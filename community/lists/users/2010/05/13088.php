<?
$subject_val = "Re: [OMPI users] openmpi + share points";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 11:41:10 2010" -->
<!-- isoreceived="20100519154110" -->
<!-- sent="Wed, 19 May 2010 11:12:20 +0200" -->
<!-- isosent="20100519091220" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi + share points" -->
<!-- id="2F52DFFD-09F4-4944-9B26-1294BC7328F9_at_onera.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] openmpi + share points" -->
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
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 05:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13089.php">Yves Caniou: "[OMPI users] Execution don't go back to shell after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13087.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Maybe in reply to:</strong> <a href="12998.php">Christophe Peyret: "[OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13090.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Reply:</strong> <a href="13090.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thank for the advice, it works with NFS !
<br>
<p>But :
<br>
<p>1) it doesn't work anymore, if I remove --prefix /Network/opt/openmpi-1.4.2 (is there a way to remove it on OSX, already declared  ?)
<br>
<p>2) I must use the option -static-intel at link else i have a problem with libiomp5.dylib not found
<br>
<p>Christophe
<br>
<p><p>Message: 3
<br>
Date: Sat, 15 May 2010 08:14:42 -0400
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] openmpi + share points
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;6B0CFD91-0E2A-498C-97BD-C6EB974F90BC_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=us-ascii
<br>
<p>Sorry for the delay in replying.
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
<span class="quotelev1">&gt; mpirun --prefix /Network/opt/openmpi-1.4.2 -n 4 -hostfile ~peyret/hostfile  space64 -f Test/cfm56_hp_Rigid/cfm56_hp_Rigid.def -fast
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
--------------------------------------------------------
ONERA - DSNA - PS3A
Christophe Peyret - Ing&#233;nieur de Recherche
29 ave de la Division Leclerc F92320 Chatillon
Tel. : +331 4673 4778   Fax : +331 4673 4166
Blog intranet : <a href="http://santafe.onera">http://santafe.onera</a>
--------------------------------------------------------
N'imprimez ce document que si n&#233;cessaire.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13089.php">Yves Caniou: "[OMPI users] Execution don't go back to shell after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13087.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Maybe in reply to:</strong> <a href="12998.php">Christophe Peyret: "[OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13090.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Reply:</strong> <a href="13090.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
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
