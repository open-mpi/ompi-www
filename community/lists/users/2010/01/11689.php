<?
$subject_val = "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 07:30:17 2010" -->
<!-- isoreceived="20100105123017" -->
<!-- sent="Tue, 5 Jan 2010 06:29:50 -0600" -->
<!-- isosent="20100105122950" -->
<!-- name="pat.o'bryant_at_[hidden]" -->
<!-- email="pat.o'bryant_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2" -->
<!-- id="OF72CB36BF.5608F73D-ON862576A2.00446C40-862576A2.0044AC31_at_exxonmobil.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F26D96D8-BECB-45D5-B93A-56A91091B2F5_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:pat.o'bryant_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Cannot%20get%20OpenMPI%201.3.3%20to%20work%20with%20Torque%202.4.2"><em>pat.o'bryant_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-05 07:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11690.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>In reply to:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11694.php">chih lee: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the problem is a missing &quot;#&quot; character. So, the correct way to
<br>
specify aTorque/PBS parameter is:
<br>
<p>#PBS -N Test
<br>
<p>Since you specified &quot;PBS -N Test&quot; you are getting the message &quot;PBS&quot; not
<br>
found. &quot;PBS&quot; is being interpreted as a command and not a parameter.
<br>
<p><p>J.W. (Pat) O'Bryant,Jr.
<br>
Business Line Infrastructure
<br>
Technical Systems, HPC
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ralph Castain                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;rhc_at_open-mpi.                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;org&gt;                                                       To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                 Open MPI Users &lt;users_at_[hidden]&gt;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces@                                             cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open-mpi.org                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [OMPI users] Cannot get OpenMPI  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01/04/10 11:50           1.3.3 to work with Torque 2.4.2      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PM                                                            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to                                                      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mp                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.org&gt;                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p>I suggest you contact the Torque user list about this - it is a Torque
<br>
configuration issue, not something to do with OMPI.
<br>
<p>On Jan 3, 2010, at 10:49 PM, chih lee wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I followed the instructions on the FAQ page to configure and compile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi so that it should work with Torque.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --with-tm=/usr/local --prefix=/usr/local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The option --disable-server was used to configure torque on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute nodes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I got openmpi compiled without any error message on the head and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute nodes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I can use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np 2 --host node1,node2 a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to run parallel programs without any problem.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;However,  when I submit the following script with qsub
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#!/bin/sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBS -N Test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBS -o /home2/user2/test.sh.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBS -l nodes=8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun /home2/user2/a.out  # a.out simply prints out # of procs and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;its ID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I got the following output and error messages.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Output:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N. of procs = 1, proc ID = 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error messages:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 3: PBS: not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 4: PBS: not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 5: PBS: not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 6: PBS: not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 7: PBS: not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 8: PBS: not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;found
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm new to OpenMPI and Torque. I really appreciate it if you can give
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;me some insights. Thanks!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Best,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Steve
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11690.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>In reply to:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11694.php">chih lee: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
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
