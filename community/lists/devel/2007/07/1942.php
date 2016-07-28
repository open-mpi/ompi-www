<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 09:45:10 2007" -->
<!-- isoreceived="20070719134510" -->
<!-- sent="Thu, 19 Jul 2007 16:45:05 +0300" -->
<!-- isosent="20070719134505" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node" -->
<!-- id="20070719134505.GE18030_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070718180838.GF12861_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 09:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>In reply to:</strong> <a href="1934.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 18, 2007 at 09:08:38PM +0300, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Wed, Jul 18, 2007 at 09:08:47AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; But this will lockup:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; pn1180961:~/openmpi/trunk rhc$ mpirun -n 1 -host pn1180961 printenv | grep
</span><br>
<span class="quotelev2">&gt; &gt; LD
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The reason is that the hostname in this last command doesn't match the
</span><br>
<span class="quotelev2">&gt; &gt; hostname I get when I query my interfaces, so mpirun thinks it must be a
</span><br>
<span class="quotelev2">&gt; &gt; remote host - and so we stick in ssh until that times out. Which could be
</span><br>
<span class="quotelev2">&gt; &gt; quick on your machine, but takes awhile for me.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; This is not my case. mpirun resolves hostname and runs env but
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH is not there. If I use full name like this
</span><br>
<span class="quotelev1">&gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H elfit1.voltaire.com env | grep LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/glebn/openmpi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; everything is OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
More info. If I provide hostname to mpirun as returned by command
<br>
&quot;hostname&quot; the LD_LIBRARY_PATH is not set:
<br>
# /home/glebn/openmpi/bin/mpirun -np 1 -H `hostname`  env | grep LD
<br>
OLDPWD=/home/glebn/OpenMPI/ompi-tests/intel_tests
<br>
<p>if I provide any other name that resolves to the same IP then
<br>
LD_LIBRARY_PATH is set.
<br>
# /home/glebn/openmpi/bin/mpirun -np 1 -H localhost  env | grep LD
<br>
OLDPWD=/home/glebn/OpenMPI/ompi-tests/intel_tests
<br>
LD_LIBRARY_PATH=/home/glebn/openmpi/lib
<br>
<p>Here is debug output of &quot;bad&quot; run:
<br>
/home/glebn/openmpi/bin/mpirun -np 1 -H `hostname` -mca pls_rsh_debug 1 echo
<br>
[elfit1:14730] pls:rsh: launching job 1
<br>
[elfit1:14730] pls:rsh: no new daemons to launch
<br>
<p>Here is good one:
<br>
/home/glebn/openmpi/bin/mpirun -np 1 -H localhost -mca pls_rsh_debug 1 echo
<br>
[elfit1:14752] pls:rsh: launching job 1
<br>
[elfit1:14752] pls:rsh: local csh: 0, local sh: 1
<br>
[elfit1:14752] pls:rsh: assuming same remote shell as local shell
<br>
[elfit1:14752] pls:rsh: remote csh: 0, remote sh: 1
<br>
[elfit1:14752] pls:rsh: final template argv:
<br>
[elfit1:14752] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --name &lt;template&gt; --num_procs 1 --vpid_start 0 --nodename &lt;template&gt; --universe root_at_elfit1:default-universe-14752 --nsreplica &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; --gprreplica &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; -mca mca_base_param_file_path /home/glebn/openmpi//share/openmpi/amca-param-sets:/home/USERS/glebn/openmpiwd -mca mca_base_param_file_path_force /home/USERS/glebn/openmpiwd
<br>
[elfit1:14752] pls:rsh: launching on node localhost
<br>
[elfit1:14752] pls:rsh: localhost is a LOCAL node
<br>
[elfit1:14752] pls:rsh: reset PATH: /home/glebn/openmpi/bin:/home/USERS/lenny/MPI/mpi/bin:/opt/vltmpi/OPENIB/mpi/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/root/bin
<br>
[elfit1:14752] pls:rsh: reset LD_LIBRARY_PATH: /home/glebn/openmpi/lib
<br>
[elfit1:14752] pls:rsh: changing to directory /root
<br>
[elfit1:14752] pls:rsh: executing: (/home/glebn/openmpi/bin/orted) [orted --name 0.0.1 --num_procs 1 --vpid_start 0 --nodename localhost --universe root_at_elfit1:default-universe-14752 --nsreplica &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; --gprreplica &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; -mca mca_base_param_file_path /home/glebn/openmpi//share/openmpi/amca-param-sets:/home/USERS/glebn/openmpiwd -mca mca_base_param_file_path_force /home/USERS/glebn/openmpiwd --set-sid]
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>In reply to:</strong> <a href="1934.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
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
