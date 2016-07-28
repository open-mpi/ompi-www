<?
$subject_val = "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 00:50:57 2010" -->
<!-- isoreceived="20100105055057" -->
<!-- sent="Mon, 4 Jan 2010 22:50:51 -0700" -->
<!-- isosent="20100105055051" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2" -->
<!-- id="F26D96D8-BECB-45D5-B93A-56A91091B2F5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8abd09e1001032149p56c1364nd5295f363288a03_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 00:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11689.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Previous message:</strong> <a href="11687.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.4 and pgi 10"</a>
<li><strong>In reply to:</strong> <a href="11673.php">chih lee: "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11689.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Reply:</strong> <a href="11689.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suggest you contact the Torque user list about this - it is a Torque configuration issue, not something to do with OMPI.
<br>
<p>On Jan 3, 2010, at 10:49 PM, chih lee wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I followed the instructions on the FAQ page to configure and compile openmpi so that it should work with Torque.
</span><br>
<span class="quotelev1">&gt; ./configure --with-tm=/usr/local --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt; The option --disable-server was used to configure torque on the compute nodes.
</span><br>
<span class="quotelev1">&gt; I got openmpi compiled without any error message on the head and compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can use
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --host node1,node2 a.out
</span><br>
<span class="quotelev1">&gt; to run parallel programs without any problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However,  when I submit the following script with qsub
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ____________________________________________________________________
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; PBS -N Test
</span><br>
<span class="quotelev1">&gt; PBS -o /home2/user2/test.sh.o
</span><br>
<span class="quotelev1">&gt; PBS -l nodes=8
</span><br>
<span class="quotelev1">&gt; mpirun /home2/user2/a.out  # a.out simply prints out # of procs and its ID
</span><br>
<span class="quotelev1">&gt; ____________________________________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the following output and error messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; N. of procs = 1, proc ID = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error messages:
</span><br>
<span class="quotelev1">&gt; /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 3: PBS: not found
</span><br>
<span class="quotelev1">&gt; /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 4: PBS: not found
</span><br>
<span class="quotelev1">&gt; /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 5: PBS: not found
</span><br>
<span class="quotelev1">&gt; /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 6: PBS: not found
</span><br>
<span class="quotelev1">&gt; /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 7: PBS: not found
</span><br>
<span class="quotelev1">&gt; /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 8: PBS: not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm new to OpenMPI and Torque. I really appreciate it if you can give me some insights. Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Steve
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11688/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11689.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Previous message:</strong> <a href="11687.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.4 and pgi 10"</a>
<li><strong>In reply to:</strong> <a href="11673.php">chih lee: "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11689.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Reply:</strong> <a href="11689.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
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
