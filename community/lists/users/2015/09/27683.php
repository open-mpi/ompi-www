<?
$subject_val = "[OMPI users] RSH agent working but no output";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 11:47:46 2015" -->
<!-- isoreceived="20150927154746" -->
<!-- sent="Sun, 27 Sep 2015 16:47:41 +0100" -->
<!-- isosent="20150927154741" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] RSH agent working but no output" -->
<!-- id="FB6637F4-9DF6-4899-8367-74AF08609975_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] RSH agent working but no output<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-27 11:47:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
<li><strong>Previous message:</strong> <a href="27682.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
<li><strong>Reply:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to run OpenMPI on a cluster where I am only allow to use RSH to spawn processes across compute nodes. I modified my mpirun command in this way:
<br>
<p>mpirun -np 48 --hostfile ./hostfile --mca plm_rsh_agent &quot;rsh&quot; /central_storage/osu_barrier
<br>
<p>the file &quot;hostfile&quot; contain the machine where I am running mpirun plus another node. Libraries and osu_barrier are located in a central storage mounted by all nodes. The processes osu_barrier are spawn correctly across two nodes but no output is returned and the command seems stuck. Any idea what can I look at to try to solve this issue?
<br>
<p>Thanks
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://fspiga.github.io">http://fspiga.github.io</a> ~ skype: filippo.spiga
&#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
<li><strong>Previous message:</strong> <a href="27682.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
<li><strong>Reply:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
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
