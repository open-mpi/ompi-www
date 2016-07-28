<?
$subject_val = "Re: [OMPI users] how to tell if opempi is using rsh or ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 30 04:07:42 2010" -->
<!-- isoreceived="20100930080742" -->
<!-- sent="Thu, 30 Sep 2010 10:07:24 +0200" -->
<!-- isosent="20100930080724" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to tell if opempi is using rsh or ssh" -->
<!-- id="ED2983D1-E190-44C9-BA71-0C256F24D9C4_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="86452700B9094A47B93B8DD616E3927E0332365B59_at_XCH-SW-06V.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to tell if opempi is using rsh or ssh<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-30 04:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14362.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem"</a>
<li><strong>Previous message:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
<li><strong>In reply to:</strong> <a href="14359.php">Borenstein, Bernard S: "[OMPI users] how to tell if opempi is using rsh or ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 30.09.2010 um 01:40 schrieb Borenstein, Bernard S:
<br>
<p><span class="quotelev1">&gt; We are eliminating the use of rsh at our company and I'm trying to test out openmpi with the Nasa Overflow program using ssh.
</span><br>
<span class="quotelev1">&gt; I've been testing other MPI's (MPICH1 and LAM/MPI) and if I tried to use rsh the programs would just die when running
</span><br>
<span class="quotelev1">&gt; using PBS.  I submitted my Overflow job using  --mca plm_rsh_agent rsh and was surprised to see the job run.
</span><br>
<p>You can check the real used communication method with on a node:
<br>
<p>$ ps -e f
<br>
<p>(f w/o -) which will give you the process tree layout. It might even be possible that you use the TM (task manager) which is built into PBS and even don't need ssh. For SGE I operate our clusters w/o rsh and ssh limited to admin staff, but with a tight integration it's still possible for users to run parallel programs (and they don't need passphraseless keys which I would suggest to replace with hostbased authentication anyway).
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; Does this setting fail over to ssh if rsh is not available or should it just use rsh only???  Also is there any command
</span><br>
<span class="quotelev1">&gt; (this is a linux cluster) to see if ssh is being used.  I'm trying to definitely make sure that it is using ssh and not rsh.
</span><br>
<span class="quotelev1">&gt; rsh has been turned off on these nodes, so I'm pretty sure it's using ssh, but want to make sure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanx in advance for any help that can be provided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; The Boeing Company
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14362.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem"</a>
<li><strong>Previous message:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
<li><strong>In reply to:</strong> <a href="14359.php">Borenstein, Bernard S: "[OMPI users] how to tell if opempi is using rsh or ssh"</a>
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
