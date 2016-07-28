<?
$subject_val = "Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 09:23:45 2012" -->
<!-- isoreceived="20120421132345" -->
<!-- sent="Sat, 21 Apr 2012 09:23:39 -0400" -->
<!-- isosent="20120421132339" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves" -->
<!-- id="6DA3DD52-AB6A-44FF-A603-A1514022AEAC_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3DPcf=9fz+e_hEnozXYcOZC=6X75up1W-sKohpEZVHv4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 09:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19065.php">McGehee, Robert: "[OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Previous message:</strong> <a href="19063.php">Jeffrey Squyres: "Re: [OMPI users] Array version of MPI_Iprobe?"</a>
<li><strong>In reply to:</strong> <a href="19060.php">seshendra seshu: "[OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2012, at 10:01 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Am new to MPI i was trying to install OpenMPI on 1 master and 16 slaves i could not find the correct correct installation steps and configurations needed  for before installing open MPI , so can any help me in installation procedure.
</span><br>
<p><p>I'm not entirely sure what you're asking.
<br>
<p>Open MPI is typically installed from source as follows:
<br>
<p>&nbsp;&nbsp;./configure --prefix=/whatever/you/want ...
<br>
&nbsp;&nbsp;make -j 4 all
<br>
&nbsp;&nbsp;sudo make install
<br>
&nbsp;&nbsp;# ^^ if elevated privs are needed to install
<br>
<p>Also, many distros have binary packages of Open MPI available.  Check your favorite distro binary repository.
<br>
<p>There's two typical ways to install OMPI on a cluster:
<br>
<p>- install it in the same filesystem location on each node: i.e., install from source or from binary on each of your 16+1 nodes
<br>
<p>- install it on the master node and export that installation via NFS to the 16 slaves
<br>
<p>The key in both situations is to ensure that Open MPI shows up in the same filesystem location on the master and all 16 nodes.  E.g., if you install to /opt/openmpi-1.5.5 on the master, then make sure it shows up on /opt/openmpi-1.5.5 on the slaves, too.
<br>
<p>Open MPI doesn't actually require this, but it tremendously simplifies cluster setup / maintenance if you follow that convention.
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
<li><strong>Next message:</strong> <a href="19065.php">McGehee, Robert: "[OMPI users] Absolute/relative paths of orted"</a>
<li><strong>Previous message:</strong> <a href="19063.php">Jeffrey Squyres: "Re: [OMPI users] Array version of MPI_Iprobe?"</a>
<li><strong>In reply to:</strong> <a href="19060.php">seshendra seshu: "[OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
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
