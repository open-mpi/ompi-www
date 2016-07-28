<?
$subject_val = "Re: [OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  5 22:19:02 2010" -->
<!-- isoreceived="20100406021902" -->
<!-- sent="Tue, 6 Apr 2010 09:18:55 +0700" -->
<!-- isosent="20100406021855" -->
<!-- name="Huynh Thuc Cuoc" -->
<!-- email="htcuoc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help om Openmpi" -->
<!-- id="r2q5903bc431004051918o3e34ee24q43964e5af8ff0293_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA1705674C_at_XMB-RCD-205.cisco.com" -->
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
<strong>From:</strong> Huynh Thuc Cuoc (<em>htcuoc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-05 22:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12542.php">Peter Kjellstrom: "Re: [OMPI users] Trouble building openmpi 1.2.8 with intel compilers 10.0.23"</a>
<li><strong>Previous message:</strong> <a href="12540.php">Ralph Castain: "Re: [OMPI users] IPoIB"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12545.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12545.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear friends,
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
<p><p>On Wed, Mar 31, 2010 at 5:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Yes, you need to install open mpi on all nodes and you need to be able to
</span><br>
<span class="quotelev1">&gt; login to each node without being prompted for a password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, not that v1.2.7 is pretty ancient. If you're juist starting with open
</span><br>
<span class="quotelev1">&gt; mpi, can you upgrade to the latest version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;  *From*: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To*: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent*: Wed Mar 31 03:39:08 2010
</span><br>
<span class="quotelev1">&gt; *Subject*: [OMPI users] Help om Openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I had install my cluster which the configuration as following:
</span><br>
<span class="quotelev1">&gt; - headnode :
</span><br>
<span class="quotelev1">&gt;   + linux CenOS 5.4, 4 CPUs, 3G RAM
</span><br>
<span class="quotelev1">&gt;   + sun gridengine sge6.0u12. The headnode is admin and submit node too.
</span><br>
<span class="quotelev1">&gt;   + Openmpi 1.2.9. In the installation openmpi :.configure
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi --with-sge ...Processes complilation and make was
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt;   + I have 2 others nodes which confg. are: 4 CPU, 1 G RAM and on which run
</span><br>
<span class="quotelev1">&gt; sgeexecd.
</span><br>
<span class="quotelev1">&gt; Testing for SGE on headnode and nodes by qsub was fine.
</span><br>
<span class="quotelev1">&gt; When testing openmpi with as folowing:
</span><br>
<span class="quotelev1">&gt; [guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 4 --hostfile myhosts
</span><br>
<span class="quotelev1">&gt; hello_cxx
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 0 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 1 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 3 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 2 of 4
</span><br>
<span class="quotelev1">&gt; [guser1_at_ioitg2 examples]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openmpi runs well.
</span><br>
<span class="quotelev1">&gt; My file myhosts:
</span><br>
<span class="quotelev1">&gt; ioitg2.ioit-grid.ac.vn slots=4
</span><br>
<span class="quotelev1">&gt; node1.ioit-grid.ac.vn slots=4
</span><br>
<span class="quotelev1">&gt; node2.ioit-grid.ac.vn slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now for more processes:
</span><br>
<span class="quotelev1">&gt; [guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 6 --hostfile myhosts
</span><br>
<span class="quotelev1">&gt; hello_cxx
</span><br>
<span class="quotelev1">&gt; guser1_at_[hidden]'s password:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       node1.ioit-grid.ac.vn
</span><br>
<span class="quotelev1">&gt; Executable: hello_cxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 19164 on node
</span><br>
<span class="quotelev1">&gt; ioitg2.ioit-grid.ac.vn exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; [guser1_at_ioitg2 examples]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is error massage. I was login on node1 successful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PLS, Help me. What problems I have 9installation, configurations, ...).
</span><br>
<span class="quotelev1">&gt; Have I install openmpi on all nodes ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much and I am waitting your helps.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12541/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12542.php">Peter Kjellstrom: "Re: [OMPI users] Trouble building openmpi 1.2.8 with intel compilers 10.0.23"</a>
<li><strong>Previous message:</strong> <a href="12540.php">Ralph Castain: "Re: [OMPI users] IPoIB"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12545.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12545.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
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
