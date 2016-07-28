<?
$subject_val = "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 18:42:20 2015" -->
<!-- isoreceived="20150920224220" -->
<!-- sent="Sun, 20 Sep 2015 19:45:47 -0300 (ART)" -->
<!-- isosent="20150920224547" -->
<!-- name="Jorge D'Elia" -->
<!-- email="jdelia_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one." -->
<!-- id="521774403.2832.1442789147874.JavaMail.zimbra_at_intec.unl.edu.ar" -->
<!-- charset="utf-8" -->
<!-- inreplyto="416C3264-FABB-4426-AF24-E7F5B4B13B29_at_open-mpi.org" -->
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
<strong>From:</strong> Jorge D'Elia (<em>jdelia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-20 18:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="27637.php">Lev Givon: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="27636.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Many thanks for your fast answer!
<br>
<p>----- Mensaje original -----
<br>
<span class="quotelev1">&gt; De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Enviado: Domingo, 20 de Septiembre 2015 18:16:56
</span><br>
<span class="quotelev1">&gt; Asunto: Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the connection from node1 to the head node a direct one, 
</span><br>
<span class="quotelev1">&gt; or is there a difference in the ethernet subnets between them? 
</span><br>
<p>The connection from node1 to the head node is a direct one, 
<br>
i.e. from the head node to the switch and from the switch to 
<br>
the computing nodes.
<br>
<p><span class="quotelev1">&gt; Can you show us the output of ifconfig from each node?
</span><br>
<p>Yes of course! Please see attached tgz file that also 
<br>
contains the ompi_info logs.
<br>
<p>Thanks.
<br>
Jorge.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; On Sep 20, 2015, at 12:19 PM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We have used the Open MPI distributions up to the 1.8.7 version
</span><br>
<span class="quotelev2">&gt; &gt; without any problem in a small LINUX cluster built with diskless
</span><br>
<span class="quotelev2">&gt; &gt; nodes (x86_64, Fedora 17, Linux version 4.1.1 (gcc version 4.7.2
</span><br>
<span class="quotelev2">&gt; &gt; 20120921 (Red Hat 4.7.2-2) (GCC))).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, from the 1.8.8 version, we have a problem with the
</span><br>
<span class="quotelev2">&gt; &gt; mpirun command.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For instance, with the 1.10.0 Open MPI version, we can launch MPI
</span><br>
<span class="quotelev2">&gt; &gt; jobs across multiple node hosts and server sucesfully only if they
</span><br>
<span class="quotelev2">&gt; &gt; are launched from any node but not from the server. In order to
</span><br>
<span class="quotelev2">&gt; &gt; fix, following the hints given in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; we have tried a simple test:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_coyote ~]$ which mpirun
</span><br>
<span class="quotelev2">&gt; &gt; /usr/beta/openmpi/bin/mpirun
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_coyote ~]$ mpirun --version
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_coyote ~]$ hostname
</span><br>
<span class="quotelev2">&gt; &gt; coyote
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_coyote ~]$ ssh node1
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_node1 ~]$ mpirun --host coyote hostname
</span><br>
<span class="quotelev2">&gt; &gt; coyote
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_node1 ~]$ exit
</span><br>
<span class="quotelev2">&gt; &gt; logout
</span><br>
<span class="quotelev2">&gt; &gt; Connection to node1 closed.
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_coyote ~]$ mpirun --host node1 hostname
</span><br>
<span class="quotelev2">&gt; &gt; [node1:17861] [[8026,0],1] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt; &gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev2">&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev2">&gt; &gt; ... snip ...
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The PATH and LD_LIBRARY_PATH in coyote (server) and node1
</span><br>
<span class="quotelev2">&gt; &gt; were reduced to
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_coyote ]$ ssh coyote env | grep -i PATH
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
</span><br>
<span class="quotelev2">&gt; &gt; PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
</span><br>
<span class="quotelev2">&gt; &gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev2">&gt; &gt; QT_PLUGIN_PATH=/usr/lib64/kde4/plugins:/usr/lib/kde4/plugins
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [jdelia_at_coyote ]$ ssh node1  env | grep -i PATH
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
</span><br>
<span class="quotelev2">&gt; &gt; PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
</span><br>
<span class="quotelev2">&gt; &gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Until the 1.8.7 version these tests were all OK. Then, several
</span><br>
<span class="quotelev2">&gt; &gt; openmpi distributions were rebuilt using the gcc compilers,
</span><br>
<span class="quotelev2">&gt; &gt; both with the system version
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; gcc (GCC) 4.7.2 20120921 (Red Hat 4.7.2-2)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; as with the experimental one
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ gcc --version
</span><br>
<span class="quotelev2">&gt; &gt; gcc (GCC) 6.0.0 20150919 (experimental)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; but without luck. Again, if we go back to 1.8.7 version, and
</span><br>
<span class="quotelev2">&gt; &gt; using the same environment variables, all tests are OK.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please, any clue in order to fix this trouble?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We try to attach the configure log files of the 1.8.7
</span><br>
<span class="quotelev2">&gt; &gt; and 1.8.10 versions using the beta gcc compiler.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Jorge.
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; CIMEC (UNL-CONICET), <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev2">&gt; &gt; Predio CONICET-Santa Fe, Colec. Ruta Nac. 168,
</span><br>
<span class="quotelev2">&gt; &gt; Paraje El Pozo, S3000GLN, Santa Fe, ARGENTINA
</span><br>
<span class="quotelev2">&gt; &gt; Univ Nac Litoral (UNL). Cons Nac Inv Cient&#195;&#173;f y T&#195;&#169;cn (CONICET)
</span><br>
<span class="quotelev2">&gt; &gt; logs.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27633.php">http://www.open-mpi.org/community/lists/users/2015/09/27633.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27636.php">http://www.open-mpi.org/community/lists/users/2015/09/27636.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27638/ifconfig-ompi-info-log.tgz">ifconfig-ompi-info-log.tgz</a>
</ul>
<!-- attachment="ifconfig-ompi-info-log.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27639.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="27637.php">Lev Givon: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="27636.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27641.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
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
