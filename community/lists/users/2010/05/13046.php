<?
$subject_val = "[OMPI users] ompi-restart fails with &quot;found pid in use&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 14 11:35:13 2010" -->
<!-- isoreceived="20100514153513" -->
<!-- sent="Fri, 14 May 2010 08:34:11 -0700" -->
<!-- isosent="20100514153411" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-restart fails with &amp;quot;found pid in use&amp;quot;" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70719099A_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> [OMPI users] ompi-restart fails with &quot;found pid in use&quot;<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ompi-restart%20fails%20with%20&amp;amp;quot;found%20pid%20in%20use&amp;amp;quot;"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-05-14 11:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>Previous message:</strong> <a href="13045.php">Paul-Michael Agapow: "[OMPI users] Segmentation fault at program end with 2+ processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13074.php">Josh Hursey: "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>Reply:</strong> <a href="13074.php">Josh Hursey: "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>&nbsp;
<br>
<p>I am using open mpi v1.3.4 with BLCR 0.8.2. I have been testing my
<br>
openmpi based program on a 3-node cluster (each node is a Intel Nehalem
<br>
based dual quad core) and I have been successful in checkpointing and
<br>
restarting the program successfully multiple times.
<br>
<p>&nbsp;
<br>
<p>Recently I moved to a 15 node cluster with the same configuration and I
<br>
started seeing the problem with ompi-restart.
<br>
<p>&nbsp;
<br>
<p>Ompi-checkpoint gets completed successfully and I terminate the program
<br>
after that. I have ensured that there are no MPI processes before I
<br>
restarted. When I restart using ompi-restart, I get the error in
<br>
restarting few of the MPI processes and the error message is &quot;found pid
<br>
4185 in use; Restart failed: Device or Resource busy&quot; (of course with
<br>
different pid numbers). What I found was that when the MPI process was
<br>
restarted, it got restarted on a different node than what it was running
<br>
before termination and found that it cannot reuse the pid. 
<br>
<p>&nbsp;
<br>
<p>Unlike cr_restart (BLCR), ompi-restart doesn't have an option to say not
<br>
to use the same pid with option such as &quot;--no-restore-pid&quot;. Since
<br>
ompi-restart in turn calls cr_restart, I tried to alias cr_restart to
<br>
&quot;cr_restart --no-restore-pid&quot;. This actually made the problem &quot;pid in
<br>
use&quot; go away and the process completes successfully. However if I call
<br>
ompi-checkpoint on the restarted open MPI job, both the openMPI job (all
<br>
MPI processes) and the checkpoint command hang forever. I guess this is
<br>
because of the fact that ompi-restart has different set of pids compared
<br>
to the actual pids that are running.
<br>
<p>&nbsp;
<br>
<p>Long story short, I am stuck with this problem as I cannot get the
<br>
original pids during restart.
<br>
<p>&nbsp;
<br>
<p>I really appreciate if you have any other options to share with me which
<br>
I can use to overcome this problem. 
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>Previous message:</strong> <a href="13045.php">Paul-Michael Agapow: "[OMPI users] Segmentation fault at program end with 2+ processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13074.php">Josh Hursey: "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>Reply:</strong> <a href="13074.php">Josh Hursey: "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
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
