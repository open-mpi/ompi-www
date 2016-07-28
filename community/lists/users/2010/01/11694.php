<?
$subject_val = "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 12:22:19 2010" -->
<!-- isoreceived="20100105172219" -->
<!-- sent="Wed, 6 Jan 2010 01:22:10 +0800" -->
<!-- isosent="20100105172210" -->
<!-- name="chih lee" -->
<!-- email="chihlee0214_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2" -->
<!-- id="8abd09e1001050922n56fa3583peaa63e542094bf23_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2" -->
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
<strong>From:</strong> chih lee (<em>chihlee0214_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 12:22:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11695.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11693.php">Louis Rossi: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Maybe in reply to:</strong> <a href="11673.php">chih lee: "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem has been solved and yes I accidentally deleted the #'s. Thank
<br>
you so much!
<br>
<p>Steve
<br>
<p>Date: Tue, 5 Jan 2010 06:29:50 -0600
<br>
<span class="quotelev1">&gt; From: pat.o'bryant_at_[hidden] &lt;pat.o%27bryant_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque
</span><br>
<span class="quotelev1">&gt;        2.4.2
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;
</span><br>
<span class="quotelev1">&gt; OF72CB36BF.5608F73D-ON862576A2.00446C40-862576A2.0044AC31_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the problem is a missing &quot;#&quot; character. So, the correct way to
</span><br>
<span class="quotelev1">&gt; specify aTorque/PBS parameter is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -N Test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since you specified &quot;PBS -N Test&quot; you are getting the message &quot;PBS&quot; not
</span><br>
<span class="quotelev1">&gt; found. &quot;PBS&quot; is being interpreted as a command and not a parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev1">&gt; Business Line Infrastructure
</span><br>
<span class="quotelev1">&gt; Technical Systems, HPC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Ralph Castain
</span><br>
<span class="quotelev1">&gt;             &lt;rhc_at_open-mpi.
</span><br>
<span class="quotelev1">&gt;             org&gt;                                                       To
</span><br>
<span class="quotelev1">&gt;             Sent by:                 Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             users-bounces@                                             cc
</span><br>
<span class="quotelev1">&gt;             open-mpi.org
</span><br>
<span class="quotelev1">&gt;                                                                   Subject
</span><br>
<span class="quotelev1">&gt;                                      Re: [OMPI users] Cannot get OpenMPI
</span><br>
<span class="quotelev1">&gt;             01/04/10 11:50           1.3.3 to work with Torque 2.4.2
</span><br>
<span class="quotelev1">&gt;             PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Please respond
</span><br>
<span class="quotelev1">&gt;                   to
</span><br>
<span class="quotelev1">&gt;             Open MPI Users
</span><br>
<span class="quotelev1">&gt;             &lt;users_at_open-mp
</span><br>
<span class="quotelev1">&gt;                 i.org&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest you contact the Torque user list about this - it is a Torque
</span><br>
<span class="quotelev1">&gt; configuration issue, not something to do with OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2010, at 10:49 PM, chih lee wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I followed the instructions on the FAQ page to configure and compile
</span><br>
<span class="quotelev1">&gt;      openmpi so that it should work with Torque.
</span><br>
<span class="quotelev1">&gt;      ./configure --with-tm=/usr/local --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt;      The option --disable-server was used to configure torque on the
</span><br>
<span class="quotelev1">&gt;      compute nodes.
</span><br>
<span class="quotelev1">&gt;      I got openmpi compiled without any error message on the head and
</span><br>
<span class="quotelev1">&gt;      compute nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I can use
</span><br>
<span class="quotelev1">&gt;      $ mpirun -np 2 --host node1,node2 a.out
</span><br>
<span class="quotelev1">&gt;      to run parallel programs without any problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      However,  when I submit the following script with qsub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ____________________________________________________________________
</span><br>
<span class="quotelev1">&gt;      #!/bin/sh
</span><br>
<span class="quotelev1">&gt;      #
</span><br>
<span class="quotelev1">&gt;      PBS -N Test
</span><br>
<span class="quotelev1">&gt;      PBS -o /home2/user2/test.sh.o
</span><br>
<span class="quotelev1">&gt;      PBS -l nodes=8
</span><br>
<span class="quotelev1">&gt;      mpirun /home2/user2/a.out  # a.out simply prints out # of procs and
</span><br>
<span class="quotelev1">&gt;      its ID
</span><br>
<span class="quotelev1">&gt;      ____________________________________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I got the following output and error messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Output:
</span><br>
<span class="quotelev1">&gt;      N. of procs = 1, proc ID = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Error messages:
</span><br>
<span class="quotelev1">&gt;      /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 3: PBS: not
</span><br>
<span class="quotelev1">&gt;      found
</span><br>
<span class="quotelev1">&gt;      /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 4: PBS: not
</span><br>
<span class="quotelev1">&gt;      found
</span><br>
<span class="quotelev1">&gt;      /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 5: PBS: not
</span><br>
<span class="quotelev1">&gt;      found
</span><br>
<span class="quotelev1">&gt;      /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 6: PBS: not
</span><br>
<span class="quotelev1">&gt;      found
</span><br>
<span class="quotelev1">&gt;      /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 7: PBS: not
</span><br>
<span class="quotelev1">&gt;      found
</span><br>
<span class="quotelev1">&gt;      /var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 8: PBS: not
</span><br>
<span class="quotelev1">&gt;      found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I'm new to OpenMPI and Torque. I really appreciate it if you can give
</span><br>
<span class="quotelev1">&gt;      me some insights. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Best,
</span><br>
<span class="quotelev1">&gt;      Steve
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11695.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11693.php">Louis Rossi: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Maybe in reply to:</strong> <a href="11673.php">chih lee: "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
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
