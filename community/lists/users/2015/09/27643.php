<?
$subject_val = "Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 06:34:44 2015" -->
<!-- isoreceived="20150921103444" -->
<!-- sent="Mon, 21 Sep 2015 07:38:11 -0300 (ART)" -->
<!-- isosent="20150921103811" -->
<!-- name="Jorge D'Elia" -->
<!-- email="jdelia_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one." -->
<!-- id="1412037793.587.1442831891552.JavaMail.zimbra_at_intec.unl.edu.ar" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F92365E2-F403-405E-B7FD-5E1947F78E67_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] send() to socket 9 failed with the 1.10.0	version	but not with 1.8.7 one.<br>
<strong>From:</strong> Jorge D'Elia (<em>jdelia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-21 06:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27644.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27642.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27713.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Mensaje original -----
<br>
<span class="quotelev1">&gt; De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Enviado: Lunes, 21 de Septiembre 2015 1:42:08
</span><br>
<span class="quotelev1">&gt; Asunto: Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, let&#226;&#128;&#153;s try doing this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca oob_tcp_if_include br0 &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will restrict us to the br0 interface that is common to the two nodes. 
</span><br>
<p>It works fine! Here I copy and paste a session using 
<br>
the hello_usempi_f08.f90 sample:
<br>
<p>[jdelia_at_coyote 1.10.0]$ mpifort --version 
<br>
GNU Fortran (GCC) 6.0.0 20150919 (experimental)
<br>
Copyright (C) 2015 Free Software Foundation, Inc.
<br>
<p>[jdelia_at_coyote 1.10.0]$ mpirun --version 
<br>
mpirun (Open MPI) 1.10.0
<br>
Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>[jdelia_at_coyote 1.10.0]$ mpifort -o hello_usempi_f08.exe hello_usempi_f08.f90
<br>
<p>[jdelia_at_coyote 1.10.0]$ cat ~/machi-openmpi.dat
<br>
coyote slots=2 max_slots=2
<br>
node1  slots=2 max_slots=6
<br>
node2  slots=2 max_slots=8
<br>
<p>[jdelia_at_coyote 1.10.0]$ mpirun --mca btl self,tcp --map-by node 
<br>
&nbsp;&nbsp;--mca oob_tcp_if_include br0 --np 5 --report-bindings --machinefile 
<br>
&nbsp;&nbsp;~/machi-openmpi.dat hello_usempi_f08.exe 
<br>
[coyote:28957] MCW rank 3 is not bound (or bound to all available processors)
<br>
[coyote:28957] MCW rank 0 is not bound (or bound to all available processors)
<br>
[node2:11855] MCW rank 2 is not bound (or bound to all available processors)
<br>
[node1:24048] MCW rank 4 is not bound (or bound to all available processors)
<br>
[node1:24048] MCW rank 1 is not bound (or bound to all available processors)
<br>
<p>Hello, world, I am  0 of  5: Open MPI v1.10, package: Open MPI jdelia_at_coyote 
<br>
Distribution, ident: 1.10.0, repo rev: v1.10-dev-293-gf694355, Aug 24, 2015
<br>
<p>Hello, world, I am  3 of  5: Open MPI v1.10, package: Open MPI jdelia_at_coyote 
<br>
Distribution, ident: 1.10.0, repo rev: v1.10-dev-293-gf694355, Aug 24, 2015
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Hello, world, I am  2 of  5: Open MPI v1.10, package: Open MPI jdelia_at_coyote 
<br>
Distribution, ident: 1.10.0, repo rev: v1.10-dev-293-gf694355, Aug 24, 2015      
<br>
<p>Hello, world, I am  1 of  5: Open MPI v1.10, package: Open MPI jdelia_at_coyote 
<br>
Distribution, ident: 1.10.0, repo rev: v1.10-dev-293-gf694355, Aug 24, 2015
<br>
<p>Hello, world, I am  4 of  5: Open MPI v1.10, package: Open MPI jdelia_at_coyote 
<br>
Distribution, ident: 1.10.0, repo rev: v1.10-dev-293-gf694355, Aug 24, 2015
<br>
<p><p><span class="quotelev1">&gt; I note that your &#226;&#128;&#156;node1&#226;&#128;&#157; has two interfaces on the same subnet (192.168.1),
</span><br>
<span class="quotelev1">&gt; which is usually a &#226;&#128;&#156;no-no&#226;&#128;&#157; that can cause trouble. Let&#226;&#128;&#153;s see if removing
</span><br>
<span class="quotelev1">&gt; that confusion helps.
</span><br>
<p>OK. Thanks for noticing. We will try to remove it and will let you know.
<br>
<p>Regards,
<br>
Jorge.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; On Sep 20, 2015, at 3:45 PM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Many thanks for your fast answer!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ----- Mensaje original -----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Enviado: Domingo, 20 de Septiembre 2015 18:16:56
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Asunto: Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but not with 1.8.7 one.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is the connection from node1 to the head node a direct one,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or is there a difference in the ethernet subnets between them?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The connection from node1 to the head node is a direct one,
</span><br>
<span class="quotelev2">&gt; &gt; i.e. from the head node to the switch and from the switch to
</span><br>
<span class="quotelev2">&gt; &gt; the computing nodes.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you show us the output of ifconfig from each node?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes of course! Please see attached tgz file that also
</span><br>
<span class="quotelev2">&gt; &gt; contains the ompi_info logs.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; Jorge.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 20, 2015, at 12:19 PM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We have used the Open MPI distributions up to the 1.8.7 version
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; without any problem in a small LINUX cluster built with diskless
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nodes (x86_64, Fedora 17, Linux version 4.1.1 (gcc version 4.7.2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 20120921 (Red Hat 4.7.2-2) (GCC))).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; However, from the 1.8.8 version, we have a problem with the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun command.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For instance, with the 1.10.0 Open MPI version, we can launch MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jobs across multiple node hosts and server sucesfully only if they
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; are launched from any node but not from the server. In order to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fix, following the hints given in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we have tried a simple test:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_coyote ~]$ which mpirun
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/beta/openmpi/bin/mpirun
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_coyote ~]$ mpirun --version
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_coyote ~]$ hostname
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; coyote
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_coyote ~]$ ssh node1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_node1 ~]$ mpirun --host coyote hostname
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; coyote
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_node1 ~]$ exit
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; logout
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Connection to node1 closed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_coyote ~]$ mpirun --host node1 hostname
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node1:17861] [[8026,0],1] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This usually is caused by:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ... snip ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The PATH and LD_LIBRARY_PATH in coyote (server) and node1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; were reduced to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_coyote ]$ ssh coyote env | grep -i PATH
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; QT_PLUGIN_PATH=/usr/lib64/kde4/plugins:/usr/lib/kde4/plugins
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [jdelia_at_coyote ]$ ssh node1  env | grep -i PATH
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Until the 1.8.7 version these tests were all OK. Then, several
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi distributions were rebuilt using the gcc compilers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; both with the system version
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gcc (GCC) 4.7.2 20120921 (Red Hat 4.7.2-2)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; as with the experimental one
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gcc (GCC) 6.0.0 20150919 (experimental)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; but without luck. Again, if we go back to 1.8.7 version, and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; using the same environment variables, all tests are OK.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Please, any clue in order to fix this trouble?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We try to attach the configure log files of the 1.8.7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and 1.8.10 versions using the beta gcc compiler.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jorge.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CIMEC (UNL-CONICET), <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Predio CONICET-Santa Fe, Colec. Ruta Nac. 168,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Paraje El Pozo, S3000GLN, Santa Fe, ARGENTINA
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Univ Nac Litoral (UNL). Cons Nac Inv Cient&#195;&#173;f y T&#195;&#169;cn (CONICET)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; logs.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27633.php">http://www.open-mpi.org/community/lists/users/2015/09/27633.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27633.php">http://www.open-mpi.org/community/lists/users/2015/09/27633.php</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27636.php">http://www.open-mpi.org/community/lists/users/2015/09/27636.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27636.php">http://www.open-mpi.org/community/lists/users/2015/09/27636.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ifconfig-ompi-info-log.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27638.php">http://www.open-mpi.org/community/lists/users/2015/09/27638.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27638.php">http://www.open-mpi.org/community/lists/users/2015/09/27638.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27641.php">http://www.open-mpi.org/community/lists/users/2015/09/27641.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27644.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27642.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27713.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
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
