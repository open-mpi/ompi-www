<?
$subject_val = "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 15:16:19 2015" -->
<!-- isoreceived="20150920191619" -->
<!-- sent="Sun, 20 Sep 2015 16:19:20 -0300 (ART)" -->
<!-- isosent="20150920191920" -->
<!-- name="Jorge D'Elia" -->
<!-- email="jdelia_at_[hidden]" -->
<!-- subject="[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one." -->
<!-- id="664887843.1624.1442776760196.JavaMail.zimbra_at_intec.unl.edu.ar" -->
<!-- charset="utf-8" -->
<!-- inreplyto="06C4489D-C31D-4E2C-A858-2719AE20DEC1_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one.<br>
<strong>From:</strong> Jorge D'Elia (<em>jdelia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-20 15:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27634.php">Lev Givon: "[OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>In reply to:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27636.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27636.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We have used the Open MPI distributions up to the 1.8.7 version 
<br>
without any problem in a small LINUX cluster built with diskless 
<br>
nodes (x86_64, Fedora 17, Linux version 4.1.1 (gcc version 4.7.2 
<br>
20120921 (Red Hat 4.7.2-2) (GCC))). 
<br>
<p>However, from the 1.8.8 version, we have a problem with the 
<br>
mpirun command. 
<br>
<p>For instance, with the 1.10.0 Open MPI version, we can launch MPI 
<br>
jobs across multiple node hosts and server sucesfully only if they 
<br>
are launched from any node but not from the server. In order to 
<br>
fix, following the hints given in
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
<br>
<p>we have tried a simple test:
<br>
<p>[jdelia_at_coyote ~]$ which mpirun 
<br>
/usr/beta/openmpi/bin/mpirun
<br>
[jdelia_at_coyote ~]$ mpirun --version
<br>
mpirun (Open MPI) 1.10.0
<br>
[jdelia_at_coyote ~]$ hostname
<br>
coyote
<br>
[jdelia_at_coyote ~]$ ssh node1
<br>
[jdelia_at_node1 ~]$ mpirun --host coyote hostname
<br>
coyote
<br>
[jdelia_at_node1 ~]$ exit
<br>
logout
<br>
Connection to node1 closed.
<br>
[jdelia_at_coyote ~]$ mpirun --host node1 hostname
<br>
[node1:17861] [[8026,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
... snip ...
<br>
--------------------------------------------------------------------------
<br>
<p>The PATH and LD_LIBRARY_PATH in coyote (server) and node1 
<br>
were reduced to
<br>
&nbsp;
<br>
[jdelia_at_coyote ]$ ssh coyote env | grep -i PATH
<br>
LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
<br>
PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
<br>
MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
<br>
QT_PLUGIN_PATH=/usr/lib64/kde4/plugins:/usr/lib/kde4/plugins
<br>
<p>[jdelia_at_coyote ]$ ssh node1  env | grep -i PATH
<br>
LD_LIBRARY_PATH=/usr/beta/openmpi/lib:/usr/beta/gcc-trunk/lib:/usr/beta/gcc-trunk/lib64:/usr/lib:/usr/lib64:/usr/local/lib:/usr/local/lib64
<br>
PATH=.:/usr/beta/openmpi/bin:/usr/beta/gcc-trunk/bin:/usr/lib64/ccache:/usr/bin:/usr/sbin/usr/local/bin:/usr/local/sbin
<br>
MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
<br>
<p>Until the 1.8.7 version these tests were all OK. Then, several 
<br>
openmpi distributions were rebuilt using the gcc compilers, 
<br>
both with the system version 
<br>
<p>gcc (GCC) 4.7.2 20120921 (Red Hat 4.7.2-2)
<br>
<p>as with the experimental one
<br>
<p>$ gcc --version
<br>
gcc (GCC) 6.0.0 20150919 (experimental)
<br>
<p>but without luck. Again, if we go back to 1.8.7 version, and 
<br>
using the same environment variables, all tests are OK. 
<br>
<p>Please, any clue in order to fix this trouble?
<br>
<p>We try to attach the configure log files of the 1.8.7 
<br>
and 1.8.10 versions using the beta gcc compiler.
<br>
<p>Thanks in advance.
<br>
<p>Regards,
<br>
Jorge.
<br>
<pre>
-- 
CIMEC (UNL-CONICET), <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
Predio CONICET-Santa Fe, Colec. Ruta Nac. 168, 
Paraje El Pozo, S3000GLN, Santa Fe, ARGENTINA
Univ Nac Litoral (UNL). Cons Nac Inv Cient&#195;&#173;f y T&#195;&#169;cn (CONICET)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27633/make-logs.tgz">make-logs.tgz</a>
</ul>
<!-- attachment="make-logs.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27634.php">Lev Givon: "[OMPI users] reported number of processes emitting error much larger than number started/spawned by mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>In reply to:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27636.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27636.php">Ralph Castain: "Re: [OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
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
