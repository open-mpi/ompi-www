<?
$subject_val = "Re: [OMPI users] Multiple runs interaction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 11:33:58 2014" -->
<!-- isoreceived="20140812153358" -->
<!-- sent="Tue, 12 Aug 2014 17:33:47 +0200" -->
<!-- isosent="20140812153347" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple runs interaction" -->
<!-- id="DC84EAB1-FF18-4756-82D0-8C5845FAE49A_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C04F770D-219D-494E-9767-F9004B674066_at_plymouth.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple runs interaction<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 11:33:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24995.php">Ralph Castain: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>Previous message:</strong> <a href="24993.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>In reply to:</strong> <a href="24992.php">Antonio Rago: "Re: [OMPI users] Multiple runs interaction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24995.php">Ralph Castain: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>Reply:</strong> <a href="24995.php">Ralph Castain: "Re: [OMPI users] Multiple runs interaction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.08.2014 um 16:57 schrieb Antonio Rago:
<br>
<p><span class="quotelev1">&gt; Brilliant, this works!
</span><br>
<span class="quotelev1">&gt; However I&#146;ve to say that it seems that it seems that code becomes slightly less performing.
</span><br>
<span class="quotelev1">&gt; Is there a way to instruct mpirun on which core to use, and maybe create this map automatically with grid engine?
</span><br>
<p>In the open source version of SGE the requested core binding is only a soft request. The Univa version can handle this as a hard request though, as the scheduler will do the assignment and knows which cores are used. I have no information whether this will be forwarded to Open MPI automatically. I assume not, and it must be read out of the machine file (there ought to be an extra column for it in their version) and feed to Open MPI by some measures.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Antonio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12 Aug 2014, at 14:10, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The quick and dirty answer is that in the v1.8 series, Open MPI started binding MPI processes to cores by default.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When you run 2 independent jobs on the same machine in the way in which you described, the two jobs won't have knowledge of each other, and therefore they will both starting binging MPI processes starting with logical core 0.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The easy workaround is to disable bind-to-core behavior.  For example, &quot;mpirun --bind-to none ...&quot;.  In this way, the OS will (more or less) load balance your MPI jobs to available cores (assuming you don't run more MPI processes than cores).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2014, at 7:05 AM, Antonio Rago &lt;antonio.rago_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m running into trouble in the configuration of the small cluster I&#146;m managing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;ve installed openmpi-1.8.1 with gcc 4.7 on a Centos 6.5 with infiniband support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compile and installation were all ok and i can compile and actually run parallel jobs, both directly or by submitting them with the queue manager (gridengine).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My problem is that when two different subsets of two job end on the same node, they will not spread equally and use all the cores of the node but instead they will run on a common subset of cores leaving some other totally empty.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example two 4 core jobs on a 8 core node will result in only 4 core running on the node (all of them being oversubscribed) and the other 4 cores being empty.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Clearly there must be an error in the way I&#146;ve configured stuffs but i cannot find any hint on how to solve the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;ve tried to do different map (map by core or by slot) but I&#146;ve never succeeded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you give a me suggestion on this issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Antonio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [<a href="http://www.plymouth.ac.uk/images/email_footer.gif">http://www.plymouth.ac.uk/images/email_footer.gif</a>]&lt;<a href="http://www.plymouth.ac.uk/worldclass">http://www.plymouth.ac.uk/worldclass</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This email and any files with it are confidential and intended solely for the use of the recipient to whom it is addressed. If you are not the intended recipient then copying, distribution or other use of the information contained is strictly prohibited and you should not rely on it. If you have received this email in error please let the sender know immediately and delete it from your system(s). Internet emails are not necessarily secure. While we take every care, Plymouth University accepts no responsibility for viruses and it is your responsibility to scan emails and their attachments. Plymouth University does not accept responsibility for any changes made after it was sent. Nothing in this email or its attachments constitutes an order for goods or services unless accompanied by an official order form.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24986.php">http://www.open-mpi.org/community/lists/users/2014/08/24986.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24991.php">http://www.open-mpi.org/community/lists/users/2014/08/24991.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; [<a href="http://www.plymouth.ac.uk/images/email_footer.gif">http://www.plymouth.ac.uk/images/email_footer.gif</a>]&lt;<a href="http://www.plymouth.ac.uk/worldclass">http://www.plymouth.ac.uk/worldclass</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This email and any files with it are confidential and intended solely for the use of the recipient to whom it is addressed. If you are not the intended recipient then copying, distribution or other use of the information contained is strictly prohibited and you should not rely on it. If you have received this email in error please let the sender know immediately and delete it from your system(s). Internet emails are not necessarily secure. While we take every care, Plymouth University accepts no responsibility for viruses and it is your responsibility to scan emails and their attachments. Plymouth University does not accept responsibility for any changes made after it was sent. Nothing in this email or its attachments constitutes an order for goods or services unless accompanied by an official order form.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24992.php">http://www.open-mpi.org/community/lists/users/2014/08/24992.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24995.php">Ralph Castain: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>Previous message:</strong> <a href="24993.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>In reply to:</strong> <a href="24992.php">Antonio Rago: "Re: [OMPI users] Multiple runs interaction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24995.php">Ralph Castain: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>Reply:</strong> <a href="24995.php">Ralph Castain: "Re: [OMPI users] Multiple runs interaction"</a>
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
