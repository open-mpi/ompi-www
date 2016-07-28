<?
$subject_val = "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 17:17:02 2015" -->
<!-- isoreceived="20150920211702" -->
<!-- sent="Sun, 20 Sep 2015 14:16:56 -0700" -->
<!-- isosent="20150920211656" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one." -->
<!-- id="416C3264-FABB-4426-AF24-E7F5B4B13B29_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="664887843.1624.1442776760196.JavaMail.zimbra_at_intec.unl.edu.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-20 17:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27637.php">Lev Givon: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27638.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27638.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is the connection from node1 to the head node a direct one, or is there a difference in the ethernet subnets between them? Can you show us the output of ifconfig from each node?
<br>
<p><p><span class="quotelev1">&gt; On Sep 20, 2015, at 12:19 PM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have used the Open MPI distributions up to the 1.8.7 version 
</span><br>
<span class="quotelev1">&gt; without any problem in a small LINUX cluster built with diskless 
</span><br>
<span class="quotelev1">&gt; nodes (x86_64, Fedora 17, Linux version 4.1.1 (gcc version 4.7.2 
</span><br>
<span class="quotelev1">&gt; 20120921 (Red Hat 4.7.2-2) (GCC))). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, from the 1.8.8 version, we have a problem with the 
</span><br>
<span class="quotelev1">&gt; mpirun command. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance, with the 1.10.0 Open MPI version, we can launch MPI 
</span><br>
<span class="quotelev1">&gt; jobs across multiple node hosts and server sucesfully only if they 
</span><br>
<span class="quotelev1">&gt; are launched from any node but not from the server. In order to 
</span><br>
<span class="quotelev1">&gt; fix, following the hints given in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we have tried a simple test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jdelia_at_coyote ~]$ which mpirun 
</span><br>
<span class="quotelev1">&gt; /usr/beta/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [jdelia_at_coyote ~]$ mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev1">&gt; [jdelia_at_coyote ~]$ hostname
</span><br>
<span class="quotelev1">&gt; coyote
</span><br>
<span class="quotelev1">&gt; [jdelia_at_coyote ~]$ ssh node1
</span><br>
<span class="quotelev1">&gt; [jdelia_at_node1 ~]$ mpirun --host coyote hostname
</span><br>
<span class="quotelev1">&gt; coyote
</span><br>
<span class="quotelev1">&gt; [jdelia_at_node1 ~]$ exit
</span><br>
<span class="quotelev1">&gt; logout
</span><br>
<span class="quotelev1">&gt; Connection to node1 closed.
</span><br>
<span class="quotelev1">&gt; [jdelia_at_coyote ~]$ mpirun --host node1 hostname
</span><br>
<span class="quotelev1">&gt; [node1:17861] [[8026,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; ... snip ...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PATH and LD_LIBRARY_PATH in coyote (server) and node1 
</span><br>
<span class="quotelev1">&gt; were reduced to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jdelia_at_coyote ]$ ssh coyote env | grep -i PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
</span><br>
<span class="quotelev1">&gt; PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
</span><br>
<span class="quotelev1">&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev1">&gt; QT_PLUGIN_PATH=/usr/lib64/kde4/plugins:/usr/lib/kde4/plugins
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jdelia_at_coyote ]$ ssh node1  env | grep -i PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
</span><br>
<span class="quotelev1">&gt; PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
</span><br>
<span class="quotelev1">&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Until the 1.8.7 version these tests were all OK. Then, several 
</span><br>
<span class="quotelev1">&gt; openmpi distributions were rebuilt using the gcc compilers, 
</span><br>
<span class="quotelev1">&gt; both with the system version 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.7.2 20120921 (Red Hat 4.7.2-2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as with the experimental one
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 6.0.0 20150919 (experimental)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but without luck. Again, if we go back to 1.8.7 version, and 
</span><br>
<span class="quotelev1">&gt; using the same environment variables, all tests are OK. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please, any clue in order to fix this trouble?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We try to attach the configure log files of the 1.8.7 
</span><br>
<span class="quotelev1">&gt; and 1.8.10 versions using the beta gcc compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jorge.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL-CONICET), <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe, Colec. Ruta Nac. 168, 
</span><br>
<span class="quotelev1">&gt; Paraje El Pozo, S3000GLN, Santa Fe, ARGENTINA
</span><br>
<span class="quotelev1">&gt; Univ Nac Litoral (UNL). Cons Nac Inv Cient&#195;&#173;f y T&#195;&#169;cn (CONICET)
</span><br>
<span class="quotelev1">&gt; &lt;make-logs.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27633.php">http://www.open-mpi.org/community/lists/users/2015/09/27633.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27637.php">Lev Givon: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="27635.php">Ralph Castain: "Re: [OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27638.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27638.php">Jorge D'Elia: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version	but not with 1.8.7 one."</a>
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
