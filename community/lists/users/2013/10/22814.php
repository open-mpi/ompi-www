<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 14:49:49 2013" -->
<!-- isoreceived="20131021184949" -->
<!-- sent="Mon, 21 Oct 2013 18:49:47 +0000" -->
<!-- isosent="20131021184947" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9824ED_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5265556B.9090604_at_legi.grenoble-inp.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 14:49:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22815.php">Gerlach, Charles A.: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Previous message:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2013, at 12:25 PM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; kareline (front-end) is a R720XD and the nodes are C6100 sleds from DELL. All is running with Rocks-Cluster (based on RHEL6).
</span><br>
<p>Are these AMD- or Intel-based systems?  (I don't follow the model/series of non-Cisco servers, sorry...)
<br>
<p><span class="quotelev1">&gt; The install of hwloc and numactl was requested I think for OpenMPI 1.7.x. It was installed on the front-end (without the devel packages that OpenMPI seams to request at compile time) but not  on the nodes.
</span><br>
<p>FWIW: Open MPI 1.7.x includes its own embedded copy of hwloc; it shouldn't need another standalone hwloc installation.
<br>
<p><span class="quotelev1">&gt; At this time I was using cpusets and fake numa in the kernel to control  cpu and memory use by the users (if someone request 2 cores and uses the whole node memory it can break other people's jobs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now OpenMPI 1.7.3 compiles and --bind-to-core or --bind-to-socket seams to work fine (I still have to check in death tomorrow).
</span><br>
<p>K.
<br>
<p><span class="quotelev1">&gt; I was needing to compile OpenMPI
</span><br>
<span class="quotelev1">&gt; - to use my Intel infiniband architecture
</span><br>
<span class="quotelev1">&gt; - because I have started to modify OpenMPI to interface it with my job scheduler (<a href="http://oar.imag.fr/dokuwiki/doku.php">http://oar.imag.fr/dokuwiki/doku.php</a>). My small modifications are working but I think they do not agree with the development concept of OpenMPI as I put all the stuff (20 lines) in orte/tools/orterun/orterun.c. I have to understand many concepts in OpenMPI development to contribute safely to this software (with a --use-oar may be) and it should be discussed later on the developper's forum.
</span><br>
<p>Ok.  If you want to discuss that in detail, please ask over on the devel list.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22815.php">Gerlach, Charles A.: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Previous message:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22813.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
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
