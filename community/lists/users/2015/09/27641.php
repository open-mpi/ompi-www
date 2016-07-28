<?
$subject_val = "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 00:42:13 2015" -->
<!-- isoreceived="20150921044213" -->
<!-- sent="Sun, 20 Sep 2015 21:42:08 -0700" -->
<!-- isosent="20150921044208" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one." -->
<!-- id="F92365E2-F403-405E-B7FD-5E1947F78E67_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="521774403.2832.1442789147874.JavaMail.zimbra_at_intec.unl.edu.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-21 00:42:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27642.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27640.php">Lev Givon: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="27638.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27643.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27643.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, let&#226;&#128;&#153;s try doing this:
<br>
<p>mpirun -mca oob_tcp_if_include br0 &#226;&#128;&#166;
<br>
<p>This will restrict us to the br0 interface that is common to the two nodes. I note that your &#226;&#128;&#156;node1&#226;&#128;&#157; has two interfaces on the same subnet (192.168.1), which is usually a &#226;&#128;&#156;no-no&#226;&#128;&#157; that can cause trouble. Let&#226;&#128;&#153;s see if removing that confusion helps.
<br>
<p><p><span class="quotelev1">&gt; On Sep 20, 2015, at 3:45 PM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for your fast answer!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev2">&gt;&gt; De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Enviado: Domingo, 20 de Septiembre 2015 18:16:56
</span><br>
<span class="quotelev2">&gt;&gt; Asunto: Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is the connection from node1 to the head node a direct one, 
</span><br>
<span class="quotelev2">&gt;&gt; or is there a difference in the ethernet subnets between them? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The connection from node1 to the head node is a direct one, 
</span><br>
<span class="quotelev1">&gt; i.e. from the head node to the switch and from the switch to 
</span><br>
<span class="quotelev1">&gt; the computing nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you show us the output of ifconfig from each node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes of course! Please see attached tgz file that also 
</span><br>
<span class="quotelev1">&gt; contains the ompi_info logs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Jorge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 20, 2015, at 12:19 PM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have used the Open MPI distributions up to the 1.8.7 version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without any problem in a small LINUX cluster built with diskless
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes (x86_64, Fedora 17, Linux version 4.1.1 (gcc version 4.7.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 20120921 (Red Hat 4.7.2-2) (GCC))).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, from the 1.8.8 version, we have a problem with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For instance, with the 1.10.0 Open MPI version, we can launch MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs across multiple node hosts and server sucesfully only if they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are launched from any node but not from the server. In order to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix, following the hints given in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have tried a simple test:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_coyote ~]$ which mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/beta/openmpi/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_coyote ~]$ mpirun --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_coyote ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coyote
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_coyote ~]$ ssh node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_node1 ~]$ mpirun --host coyote hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coyote
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_node1 ~]$ exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Connection to node1 closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_coyote ~]$ mpirun --host node1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1:17861] [[8026,0],1] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually is caused by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... snip ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The PATH and LD_LIBRARY_PATH in coyote (server) and node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were reduced to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_coyote ]$ ssh coyote env | grep -i PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QT_PLUGIN_PATH=/usr/lib64/kde4/plugins:/usr/lib/kde4/plugins
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jdelia_at_coyote ]$ ssh node1  env | grep -i PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Until the 1.8.7 version these tests were all OK. Then, several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi distributions were rebuilt using the gcc compilers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both with the system version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc (GCC) 4.7.2 20120921 (Red Hat 4.7.2-2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as with the experimental one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc (GCC) 6.0.0 20150919 (experimental)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but without luck. Again, if we go back to 1.8.7 version, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the same environment variables, all tests are OK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please, any clue in order to fix this trouble?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We try to attach the configure log files of the 1.8.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 1.8.10 versions using the beta gcc compiler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jorge.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CIMEC (UNL-CONICET), <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Predio CONICET-Santa Fe, Colec. Ruta Nac. 168,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paraje El Pozo, S3000GLN, Santa Fe, ARGENTINA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Univ Nac Litoral (UNL). Cons Nac Inv Cient&#195;&#173;f y T&#195;&#169;cn (CONICET)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logs.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27633.php">http://www.open-mpi.org/community/lists/users/2015/09/27633.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27633.php">http://www.open-mpi.org/community/lists/users/2015/09/27633.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27636.php">http://www.open-mpi.org/community/lists/users/2015/09/27636.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27636.php">http://www.open-mpi.org/community/lists/users/2015/09/27636.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ifconfig-ompi-info-log.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27638.php">http://www.open-mpi.org/community/lists/users/2015/09/27638.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27638.php">http://www.open-mpi.org/community/lists/users/2015/09/27638.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27642.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27640.php">Lev Givon: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="27638.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27643.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27643.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one."</a>
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
