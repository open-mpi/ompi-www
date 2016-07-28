<?
$subject_val = "[OMPI users] How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  1 19:32:26 2011" -->
<!-- isoreceived="20111101233226" -->
<!-- sent="Tue, 01 Nov 2011 17:31:48 -0600" -->
<!-- isosent="20111101233148" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB27C538DB11_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-01 19:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>Previous message:</strong> <a href="17654.php">Mudassar Majeed: "[OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting this message below which is observing correctly that /tmp is NFS-mounted.   But there is no other directory which has user or group write permissions.  So I think I'm kind of stuck, and it sounds like a serious issue.
<br>
<p>Before I ask the administrators to change their image, i.e. mount this partition under /work instead of /tmp, I'd like to ask if anyone is using OpenMPI on a state-less cluster, and are there any gotchas with regards to performance of OpenMPI, i.e. like handling of /tmp, that one would need to know?
<br>
<p>Thank you,
<br>
<p>Ed
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: Open MPI will create a shared memory backing file in a
<br>
directory that appears to be mounted on a network filesystem.
<br>
Creating the shared memory backup file on a network file system, such
<br>
as NFS or Lustre is not recommended -- it may cause excessive network
<br>
traffic to your file servers and/or cause shared memory traffic in
<br>
Open MPI to be much slower than expected.
<br>
<p>You may want to check your compute nodes, what the typical temporari
<br>
directory: node.  Possible sources of the location of this temporary
<br>
directory include the $TEMPDIR, $TEMP, and $TMP environment variables.
<br>
<p>Note, too, that system administrators can set a list of filesystems
<br>
where Open MPI is disallowed from creating temporary files by settings
<br>
the MCA parameter &quot;orte_no_session_dir&quot;.
<br>
<p>Local host: e8332
<br>
File Name:  /tmp/159313.1.e8300/openmpi-sessions-bloscel_at_e8332_0/53301/1/shared_mem_pool.e8332&lt;mailto:/tmp/159313.1.e8300/openmpi-sessions-bloscel_at_e8332_0/53301/1/shared_mem_pool.e8332&gt;
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-17655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>Previous message:</strong> <a href="17654.php">Mudassar Majeed: "[OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
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
