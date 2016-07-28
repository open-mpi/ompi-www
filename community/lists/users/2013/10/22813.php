<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 12:25:21 2013" -->
<!-- isoreceived="20131021162521" -->
<!-- sent="Mon, 21 Oct 2013 18:25:15 +0200" -->
<!-- isosent="20131021162515" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity" -->
<!-- id="5265556B.9090604_at_legi.grenoble-inp.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F981B00_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 12:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22814.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22812.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22812.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22814.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Reply:</strong> <a href="22814.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Can you manually install a recent version of hwloc (<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>) on kareline, and run lstopo on it?  Send the output here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of machine is kareline?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2013, at 11:09 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
kareline (front-end) is a R720XD and the nodes are C6100 sleds from DELL. All is 
<br>
running with Rocks-Cluster (based on RHEL6).
<br>
The install of hwloc and numactl was requested I think for OpenMPI 1.7.x. It was 
<br>
installed on the front-end (without the devel packages that OpenMPI seams to 
<br>
request at compile time) but not  on the nodes.
<br>
<p>At this time I was using cpusets and fake numa in the kernel to control  cpu and 
<br>
memory use by the users (if someone request 2 cores and uses the whole node 
<br>
memory it can break other people's jobs).
<br>
<p>Now OpenMPI 1.7.3 compiles and --bind-to-core or --bind-to-socket seams to work 
<br>
fine (I still have to check in death tomorrow).
<br>
<p>I was needing to compile OpenMPI
<br>
- to use my Intel infiniband architecture
<br>
- because I have started to modify OpenMPI to interface it with my job scheduler 
<br>
(<a href="http://oar.imag.fr/dokuwiki/doku.php">http://oar.imag.fr/dokuwiki/doku.php</a>). My small modifications are working but I 
<br>
think they do not agree with the development concept of OpenMPI as I put all the 
<br>
stuff (20 lines) in orte/tools/orterun/orterun.c. I have to understand many 
<br>
concepts in OpenMPI development to contribute safely to this software (with a 
<br>
--use-oar may be) and it should be discussed later on the developper's forum.
<br>
<p>Thanks all for your help.
<br>
<p>Patrick
<br>
<p><pre>
-- 
===================================================================
|  Equipe M.O.S.T.         |                                      |
|  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
|  LEGI                    |                                      |
|  BP 53 X                 | Tel 04 76 82 51 35                   |
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
===================================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22814.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22812.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22812.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22814.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Reply:</strong> <a href="22814.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
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
