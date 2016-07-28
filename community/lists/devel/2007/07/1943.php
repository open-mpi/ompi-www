<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 10:08:00 2007" -->
<!-- isoreceived="20070719140800" -->
<!-- sent="Thu, 19 Jul 2007 08:07:51 -0600" -->
<!-- isosent="20070719140751" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node" -->
<!-- id="C2C4CC57.A108%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070719134505.GE18030_at_minantech.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 10:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1944.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1944.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1944.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. Apparently, it is getting a NULL back when it tries to access
<br>
the LD_LIBRARY_PATH in your environment. Here is the code involved:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newenv = opal_os_path( false, prefix_dir, lib_base, NULL );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oldenv = getenv(&quot;LD_LIBRARY_PATH&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != oldenv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* temp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;temp, &quot;%s:%s&quot;, newenv, oldenv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(newenv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newenv = temp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_setenv(&quot;LD_LIBRARY_PATH&quot;, newenv, true, &amp;env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_pls_rsh_component.debug) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;pls:rsh: reset LD_LIBRARY_PATH: %s&quot;, newenv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(newenv);
<br>
<p>So you can see that the only way we can get your debugging output is for the
<br>
LD_LIBRARY_PATH in your starting environment to be NULL. Note that this
<br>
comes after we fork, so we are talking about the child process - not sure
<br>
that matters, but may as well point it out.
<br>
<p>So the question is: why do you not have LD_LIBRARY_PATH set in your
<br>
environment when you provide a different hostname?
<br>
<p><p>On 7/19/07 7:45 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jul 18, 2007 at 09:08:38PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 18, 2007 at 09:08:47AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But this will lockup:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pn1180961:~/openmpi/trunk rhc$ mpirun -n 1 -host pn1180961 printenv | grep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason is that the hostname in this last command doesn't match the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname I get when I query my interfaces, so mpirun thinks it must be a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote host - and so we stick in ssh until that times out. Which could be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quick on your machine, but takes awhile for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is not my case. mpirun resolves hostname and runs env but
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH is not there. If I use full name like this
</span><br>
<span class="quotelev2">&gt;&gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H elfit1.voltaire.com env | grep
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/home/glebn/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; everything is OK.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; More info. If I provide hostname to mpirun as returned by command
</span><br>
<span class="quotelev1">&gt; &quot;hostname&quot; the LD_LIBRARY_PATH is not set:
</span><br>
<span class="quotelev1">&gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H `hostname`  env | grep LD
</span><br>
<span class="quotelev1">&gt; OLDPWD=/home/glebn/OpenMPI/ompi-tests/intel_tests
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if I provide any other name that resolves to the same IP then
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH is set.
</span><br>
<span class="quotelev1">&gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H localhost  env | grep LD
</span><br>
<span class="quotelev1">&gt; OLDPWD=/home/glebn/OpenMPI/ompi-tests/intel_tests
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/glebn/openmpi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is debug output of &quot;bad&quot; run:
</span><br>
<span class="quotelev1">&gt; /home/glebn/openmpi/bin/mpirun -np 1 -H `hostname` -mca pls_rsh_debug 1 echo
</span><br>
<span class="quotelev1">&gt; [elfit1:14730] pls:rsh: launching job 1
</span><br>
<span class="quotelev1">&gt; [elfit1:14730] pls:rsh: no new daemons to launch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is good one:
</span><br>
<span class="quotelev1">&gt; /home/glebn/openmpi/bin/mpirun -np 1 -H localhost -mca pls_rsh_debug 1 echo
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: launching job 1
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: local csh: 0, local sh: 1
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: remote csh: 0, remote sh: 1
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --name &lt;template&gt;
</span><br>
<span class="quotelev1">&gt; --num_procs 1 --vpid_start 0 --nodename &lt;template&gt; --universe
</span><br>
<span class="quotelev1">&gt; root_at_elfit1:default-universe-14752 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; -mca
</span><br>
<span class="quotelev1">&gt; mca_base_param_file_path
</span><br>
<span class="quotelev1">&gt; /home/glebn/openmpi//share/openmpi/amca-param-sets:/home/USERS/glebn/openmpiwd
</span><br>
<span class="quotelev1">&gt; -mca mca_base_param_file_path_force /home/USERS/glebn/openmpiwd
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: reset PATH:
</span><br>
<span class="quotelev1">&gt; /home/glebn/openmpi/bin:/home/USERS/lenny/MPI/mpi/bin:/opt/vltmpi/OPENIB/mpi/b
</span><br>
<span class="quotelev1">&gt; in:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/
</span><br>
<span class="quotelev1">&gt; bin:/usr/sbin:/usr/bin:/root/bin
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: reset LD_LIBRARY_PATH: /home/glebn/openmpi/lib
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: changing to directory /root
</span><br>
<span class="quotelev1">&gt; [elfit1:14752] pls:rsh: executing: (/home/glebn/openmpi/bin/orted) [orted
</span><br>
<span class="quotelev1">&gt; --name 0.0.1 --num_procs 1 --vpid_start 0 --nodename localhost --universe
</span><br>
<span class="quotelev1">&gt; root_at_elfit1:default-universe-14752 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; -mca
</span><br>
<span class="quotelev1">&gt; mca_base_param_file_path
</span><br>
<span class="quotelev1">&gt; /home/glebn/openmpi//share/openmpi/amca-param-sets:/home/USERS/glebn/openmpiwd
</span><br>
<span class="quotelev1">&gt; -mca mca_base_param_file_path_force /home/USERS/glebn/openmpiwd --set-sid]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1944.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1944.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1944.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
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
