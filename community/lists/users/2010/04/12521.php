<?
$subject_val = "Re: [OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 00:54:27 2010" -->
<!-- isoreceived="20100402045427" -->
<!-- sent="Fri, 2 Apr 2010 11:54:13 +0700" -->
<!-- isosent="20100402045413" -->
<!-- name="Huynh Thuc Cuoc" -->
<!-- email="htcuoc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help om Openmpi" -->
<!-- id="j2q5903bc431004012154h93408b7euc484abdba1119997_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-04-02 00:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12522.php">longbow leo: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12520.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12522.php">longbow leo: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12522.php">longbow leo: "Re: [OMPI users] Help om Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much.
<br>
After that I try with the mpirun:
<br>
[guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 10 --hostfile myhosts
<br>
ring_cxx
<br>
guser1_at_[hidden]'s
<br>
password:guser1_at_[hidden]&lt;password%3Aguser1_at_[hidden]&gt;'s
<br>
password:
<br>
<p>This request passwd to login to nodes, but 2 massages in the line, I can
<br>
only success with one node, the 2sd. refussed.
<br>
So, how I can do as you advise, to login to each node without being prompted
<br>
for a password. ?
<br>
What I need to do. Help me.
<br>
I run openmpi 1.2.9 supporting SGE (when I buil with --with-sge). I had
<br>
tested to buil with 1.3. or 1.4. with this option I saw the error no
<br>
recognize --with-sge. Why ? bug or ? While docs README shows that this is
<br>
supported. I need this because I run SUN gridengine on may cluster. You have
<br>
some ideals ?
<br>
Thank you very much.
<br>
Sincerely.
<br>
HTCuoc
<br>
<p>On Wed, Mar 31, 2010 at 5:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12522.php">longbow leo: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12520.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12522.php">longbow leo: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12522.php">longbow leo: "Re: [OMPI users] Help om Openmpi"</a>
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
