<?
$subject_val = "Re: [OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 02:30:16 2010" -->
<!-- isoreceived="20100402063016" -->
<!-- sent="Fri, 2 Apr 2010 14:30:10 +0800" -->
<!-- isosent="20100402063010" -->
<!-- name="longbow leo" -->
<!-- email="longbow0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help om Openmpi" -->
<!-- id="q2x148acf931004012330ida89abd1w657d23fcd7e3a7f5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="j2q5903bc431004012154h93408b7euc484abdba1119997_at_mail.gmail.com" -->
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
<strong>From:</strong> longbow leo (<em>longbow0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 02:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12523.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12527.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12527.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There're lots of tutorials for ssh login without password available online.
<br>
such as
<br>
<p><a href="http://linuxproblem.org/art_9.html">http://linuxproblem.org/art_9.html</a>
<br>
<a href="http://linuxwave.blogspot.com/2007/07/ssh-without-password.html">http://linuxwave.blogspot.com/2007/07/ssh-without-password.html</a>
<br>
<p><p>HZ Liu
<br>
<p>2010/4/2 Huynh Thuc Cuoc &lt;htcuoc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; After that I try with the mpirun:
</span><br>
<span class="quotelev1">&gt; [guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 10 --hostfile
</span><br>
<span class="quotelev1">&gt; myhosts ring_cxx
</span><br>
<span class="quotelev1">&gt; guser1_at_[hidden]'s password:guser1_at_[hidden]&lt;password%3Aguser1_at_[hidden]&gt;'s
</span><br>
<span class="quotelev1">&gt; password:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This request passwd to login to nodes, but 2 massages in the line, I can
</span><br>
<span class="quotelev1">&gt; only success with one node, the 2sd. refussed.
</span><br>
<span class="quotelev1">&gt; So, how I can do as you advise, to login to each node without being
</span><br>
<span class="quotelev1">&gt; prompted for a password. ?
</span><br>
<span class="quotelev1">&gt; What I need to do. Help me.
</span><br>
<span class="quotelev1">&gt; I run openmpi 1.2.9 supporting SGE (when I buil with --with-sge). I had
</span><br>
<span class="quotelev1">&gt; tested to buil with 1.3. or 1.4. with this option I saw the error no
</span><br>
<span class="quotelev1">&gt; recognize --with-sge. Why ? bug or ? While docs README shows that this is
</span><br>
<span class="quotelev1">&gt; supported. I need this because I run SUN gridengine on may cluster. You have
</span><br>
<span class="quotelev1">&gt; some ideals ?
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; Sincerely.
</span><br>
<span class="quotelev1">&gt; HTCuoc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 31, 2010 at 5:43 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, you need to install open mpi on all nodes and you need to be able to
</span><br>
<span class="quotelev2">&gt;&gt; login to each node without being prompted for a password.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, not that v1.2.7 is pretty ancient. If you're juist starting with
</span><br>
<span class="quotelev2">&gt;&gt; open mpi, can you upgrade to the latest version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -jms
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  *From*: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *To*: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Sent*: Wed Mar 31 03:39:08 2010
</span><br>
<span class="quotelev2">&gt;&gt; *Subject*: [OMPI users] Help om Openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; I had install my cluster which the configuration as following:
</span><br>
<span class="quotelev2">&gt;&gt; - headnode :
</span><br>
<span class="quotelev2">&gt;&gt;   + linux CenOS 5.4, 4 CPUs, 3G RAM
</span><br>
<span class="quotelev2">&gt;&gt;   + sun gridengine sge6.0u12. The headnode is admin and submit node too.
</span><br>
<span class="quotelev2">&gt;&gt;   + Openmpi 1.2.9. In the installation openmpi :.configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi --with-sge ...Processes complilation and make was
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt;   + I have 2 others nodes which confg. are: 4 CPU, 1 G RAM and on which
</span><br>
<span class="quotelev2">&gt;&gt; run sgeexecd.
</span><br>
<span class="quotelev2">&gt;&gt; Testing for SGE on headnode and nodes by qsub was fine.
</span><br>
<span class="quotelev2">&gt;&gt; When testing openmpi with as folowing:
</span><br>
<span class="quotelev2">&gt;&gt; [guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 4 --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; myhosts hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world!  I am 0 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world!  I am 1 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world!  I am 3 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world!  I am 2 of 4
</span><br>
<span class="quotelev2">&gt;&gt; [guser1_at_ioitg2 examples]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The openmpi runs well.
</span><br>
<span class="quotelev2">&gt;&gt; My file myhosts:
</span><br>
<span class="quotelev2">&gt;&gt; ioitg2.ioit-grid.ac.vn slots=4
</span><br>
<span class="quotelev2">&gt;&gt; node1.ioit-grid.ac.vn slots=4
</span><br>
<span class="quotelev2">&gt;&gt; node2.ioit-grid.ac.vn slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now for more processes:
</span><br>
<span class="quotelev2">&gt;&gt; [guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 6 --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; myhosts hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt; guser1_at_[hidden]'s password:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Failed to find the following executable:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Host:       node1.ioit-grid.ac.vn
</span><br>
<span class="quotelev2">&gt;&gt; Executable: hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cannot continue.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 19164 on node
</span><br>
<span class="quotelev2">&gt;&gt; ioitg2.ioit-grid.ac.vn exited on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; [guser1_at_ioitg2 examples]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is error massage. I was login on node1 successful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PLS, Help me. What problems I have 9installation, configurations, ...).
</span><br>
<span class="quotelev2">&gt;&gt; Have I install openmpi on all nodes ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much and I am waitting your helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12522/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12523.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12527.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12527.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
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
