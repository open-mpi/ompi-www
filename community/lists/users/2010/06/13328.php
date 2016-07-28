<?
$subject_val = "Re: [OMPI users] mpirun jobs only one single node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 08:48:20 2010" -->
<!-- isoreceived="20100615124820" -->
<!-- sent="Tue, 15 Jun 2010 06:41:48 -0600" -->
<!-- isosent="20100615124148" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun jobs only one single node" -->
<!-- id="D2D69297-C9C2-47AB-A797-98CBBD39A480_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimJOhhk7geoMo9-l9gds1mmf307v-xSzx5Fl_sh_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun jobs only one single node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 08:41:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13329.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13327.php">Govind Songara: "[OMPI users] mpirun jobs only one single node"</a>
<li><strong>In reply to:</strong> <a href="13327.php">Govind Songara: "[OMPI users] mpirun jobs only one single node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Reply:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Look at the contents of $PBS_NODEFILE and see how many nodes it contains.
<br>
<p>On Jun 15, 2010, at 3:56 AM, Govind Songara wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have using openmpi build with tm support
</span><br>
<span class="quotelev1">&gt; When i run the job requesting for two nodes it run only on single node.
</span><br>
<span class="quotelev1">&gt; Here is my script.
</span><br>
<span class="quotelev2">&gt; &gt;cat mpipbs-script.sh
</span><br>
<span class="quotelev1">&gt; #PBS -N mpipbs-script
</span><br>
<span class="quotelev1">&gt; #PBS -q short
</span><br>
<span class="quotelev1">&gt; ### Number of nodes: resources per node
</span><br>
<span class="quotelev1">&gt; ### (4 cores/node, so ppn=4 is ALL resources on the node)
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/bin/mpirun /scratch0/gsongara/mpitest/hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; torque config
</span><br>
<span class="quotelev1">&gt; set queue short resources_max.nodes = 4
</span><br>
<span class="quotelev1">&gt; set queue short resources_default.nodes = 1
</span><br>
<span class="quotelev1">&gt; set server resources_default.neednodes = 1
</span><br>
<span class="quotelev1">&gt; set server resources_default.nodect = 1
</span><br>
<span class="quotelev1">&gt; set server resources_default.nodes = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone please advise if i missing anything here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Govind
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13329.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13327.php">Govind Songara: "[OMPI users] mpirun jobs only one single node"</a>
<li><strong>In reply to:</strong> <a href="13327.php">Govind Songara: "[OMPI users] mpirun jobs only one single node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Reply:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
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
