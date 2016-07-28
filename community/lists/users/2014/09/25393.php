<?
$subject_val = "[OMPI users] Binary distribution of my program possible using OpenMPI+Torque?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 17:01:58 2014" -->
<!-- isoreceived="20140926210158" -->
<!-- sent="Fri, 26 Sep 2014 14:01:55 -0700" -->
<!-- isosent="20140926210155" -->
<!-- name="Amos Anderson" -->
<!-- email="amos.anderson_at_[hidden]" -->
<!-- subject="[OMPI users] Binary distribution of my program possible using OpenMPI+Torque?" -->
<!-- id="B7CC52EF-DD6A-4EDF-9F46-7B2B4DE453A5_at_protabit.com" -->
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
<strong>Subject:</strong> [OMPI users] Binary distribution of my program possible using OpenMPI+Torque?<br>
<strong>From:</strong> Amos Anderson (<em>amos.anderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-26 17:01:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25394.php">Howard Pritchard: "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<li><strong>Previous message:</strong> <a href="25392.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI User List --
<br>
<p>I'm looking into making a binary distribution of my software. On my system, I link it to OpenMPI compiled with `--with-tm=/opt/torque/` to get Torque integration as suggested [here][1]. How do I accomplish this in a binary distribution of my program for use in an arbitrary user's environment?
<br>
<p>&nbsp;- I can distribute my binary files as compiled on my system, but I worry I'll get link errors if the version of OpenMPI my code linked to during compile time doesn't match the OpenMPI on their system.
<br>
&nbsp;- I can bundle OpenMPI with my software. I could compile my bundled OpenMPI **with** `--with-tm` for Torque support. This way, my program running on their system will link just fine to OpenMPI; but will it work with their Torque environment (if they use Torque)? It looks like maybe it only uses the file `include/tm.h` which is stable between versions of Torque? But if this was straight forward, I'd have though the OpenMPI developers could have incorporated this into OpenMPI itself w/o my help.
<br>
&nbsp;- I can bundle OpenMPI with my software. I could compile my bundled OpenMPI **without** Torque support. I don't think there would be a problem running on their system, but would they be able to get Torque support with a `--hostfiles` parameter to `mpirun` as described [here][2]? And that link doesn't confirm that `--hostfiles` works.
<br>
&nbsp;- I haven't researched this at all, but is it reasonable to bundle Torque with my program? I'd think not...
<br>
&nbsp;- I could distribute the source of my code so users can integrate whatever compatibility they desire. I could also compile without MPI support at all which would disable some of my features.
<br>
<p>Maybe some of the link errors I'm describing are not likely given recent versions of dependencies? I don't want to have to figure out which systems this will work on *after* releasing my binary distribution.
<br>
<p>Thanks for any suggestions!
<br>
<p>Amos.
<br>
<p><p>&nbsp;&nbsp;[1]: <a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>
<br>
&nbsp;&nbsp;[2]: <a href="https://www.open-mpi.org/faq/?category=tm#tm-use-hostfile">https://www.open-mpi.org/faq/?category=tm#tm-use-hostfile</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25394.php">Howard Pritchard: "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<li><strong>Previous message:</strong> <a href="25392.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
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
