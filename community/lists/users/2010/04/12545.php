<?
$subject_val = "Re: [OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 03:33:39 2010" -->
<!-- isoreceived="20100406073339" -->
<!-- sent="Tue, 6 Apr 2010 02:33:45 -0500" -->
<!-- isosent="20100406073345" -->
<!-- name="Trent Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help om Openmpi" -->
<!-- id="COL117-DS5D1E0CEA07E290F64AE0DE9180_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="r2q5903bc431004051918o3e34ee24q43964e5af8ff0293_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help om Openmpi<br>
<strong>From:</strong> Trent Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 03:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12546.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12544.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12541.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12546.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12546.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12547.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SSH means SECURE Shell. That being said, it would not be very secure without
<br>
a password, now would it?
<br>
<p>&nbsp;
<br>
<p>Besides it is the user account that requires passwords, not SHH.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Huynh Thuc Cuoc
<br>
Sent: Monday, April 05, 2010 9:19 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Help om Openmpi
<br>
<p>&nbsp;
<br>
<p>Dear friends,
<br>
I am try to follo the advices about to do login to remote by ssh without
<br>
password, for example:
<br>
This is one of ...:
<br>
SSH without password
<br>
<p>Using the below steps, you can ssh to the server from client without the
<br>
entering any password.
<br>
The machine which run the ssh command is the client
<br>
The machine that the client access using ssh is the server
<br>
<p>&nbsp;&nbsp;&nbsp;1. Run the following command on the client
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* -&gt; ssh-keygen -t dsa
<br>
&nbsp;&nbsp;&nbsp;2. File id_dsa and id_dsa.pub will be created inside $HOME/.ssh
<br>
&nbsp;&nbsp;&nbsp;3. Copy id_dsa.pub to the server's .ssh directory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* -&gt; scp $HOME/.ssh/id_dsa.pub user_at_server:/home/user/.ssh
<br>
&nbsp;&nbsp;&nbsp;4. Change to /root/.ssh and create file authorized_keys containing id_dsa
<br>
content
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* -&gt; cd /home/user/.ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* -&gt; cat id_dsa &gt;&gt; authorized_keys
<br>
&nbsp;&nbsp;&nbsp;5. You can try ssh to the server from the client and no password will be
<br>
needed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* -&gt; ssh user_at_server
<br>
<p>BUT, when I test login to remote host, alway passwd request.
<br>
How ang what I have to do. I runs all (headnode and nodes ) with ConOS 5.4.
<br>
Have anyone IDEALS !
<br>
HT Cuoc
<br>
<p><p><p>On Wed, Mar 31, 2010 at 5:43 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>Yes, you need to install open mpi on all nodes and you need to be able to
<br>
login to each node without being prompted for a password. 
<br>
<p>Also, not that v1.2.7 is pretty ancient. If you're juist starting with open
<br>
mpi, can you upgrade to the latest version? 
<br>
<p>-jms 
<br>
Sent from my PDA. No type good.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;_____  
<br>
<p>From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt; 
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt; 
<br>
Sent: Wed Mar 31 03:39:08 2010
<br>
Subject: [OMPI users] Help om Openmpi 
<br>
<p>Dear all,
<br>
I had install my cluster which the configuration as following:
<br>
- headnode : 
<br>
&nbsp;&nbsp;+ linux CenOS 5.4, 4 CPUs, 3G RAM
<br>
&nbsp;&nbsp;+ sun gridengine sge6.0u12. The headnode is admin and submit node too.
<br>
&nbsp;&nbsp;+ Openmpi 1.2.9. In the installation openmpi :.configure
<br>
--prefix=/opt/openmpi --with-sge ...Processes complilation and make was
<br>
fine.
<br>
&nbsp;&nbsp;+ I have 2 others nodes which confg. are: 4 CPU, 1 G RAM and on which run
<br>
sgeexecd.
<br>
Testing for SGE on headnode and nodes by qsub was fine.
<br>
When testing openmpi with as folowing:
<br>
[guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 4 --hostfile myhosts
<br>
hello_cxx
<br>
Hello, world!  I am 0 of 4
<br>
Hello, world!  I am 1 of 4
<br>
Hello, world!  I am 3 of 4
<br>
Hello, world!  I am 2 of 4
<br>
[guser1_at_ioitg2 examples]$ 
<br>
<p>The openmpi runs well.
<br>
My file myhosts:
<br>
ioitg2.ioit-grid.ac.vn slots=4
<br>
node1.ioit-grid.ac.vn slots=4
<br>
node2.ioit-grid.ac.vn slots=4
<br>
<p>Now for more processes:
<br>
[guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 6 --hostfile myhosts
<br>
hello_cxx
<br>
guser1_at_[hidden]'s password: 
<br>
--------------------------------------------------------------------------
<br>
Failed to find the following executable:
<br>
<p>Host:       node1.ioit-grid.ac.vn
<br>
Executable: hello_cxx
<br>
<p>Cannot continue.
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that job rank 0 with PID 19164 on node ioitg2.ioit-grid.ac.vn
<br>
exited on signal 15 (Terminated). 
<br>
3 additional processes aborted (not shown)
<br>
[guser1_at_ioitg2 examples]$ 
<br>
<p>This is error massage. I was login on node1 successful.
<br>
<p>PLS, Help me. What problems I have 9installation, configurations, ...). Have
<br>
I install openmpi on all nodes ?
<br>
<p>Thank you very much and I am waitting your helps.
<br>
<p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12545/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12546.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12544.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12541.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12546.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12546.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12547.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
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
