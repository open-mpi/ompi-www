<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 10:18:37 2007" -->
<!-- isoreceived="20070719141837" -->
<!-- sent="Thu, 19 Jul 2007 17:18:31 +0300" -->
<!-- isosent="20070719141831" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node" -->
<!-- id="20070719141831.GG18030_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2C4CC57.A108%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-19 10:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1945.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Previous message:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1946.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1946.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1947.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 19, 2007 at 08:07:51AM -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Interesting. Apparently, it is getting a NULL back when it tries to access
</span><br>
<span class="quotelev1">&gt; the LD_LIBRARY_PATH in your environment. Here is the code involved:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      newenv = opal_os_path( false, prefix_dir, lib_base, NULL );
</span><br>
<span class="quotelev1">&gt;      oldenv = getenv(&quot;LD_LIBRARY_PATH&quot;);
</span><br>
<span class="quotelev1">&gt;      if (NULL != oldenv) {
</span><br>
<span class="quotelev1">&gt;           char* temp;
</span><br>
<span class="quotelev1">&gt;           asprintf(&amp;temp, &quot;%s:%s&quot;, newenv, oldenv);
</span><br>
<span class="quotelev1">&gt;           free(newenv);
</span><br>
<span class="quotelev1">&gt;           newenv = temp;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      opal_setenv(&quot;LD_LIBRARY_PATH&quot;, newenv, true, &amp;env);
</span><br>
<span class="quotelev1">&gt;      if (mca_pls_rsh_component.debug) {
</span><br>
<span class="quotelev1">&gt;           opal_output(0, &quot;pls:rsh: reset LD_LIBRARY_PATH: %s&quot;, newenv);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      free(newenv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you can see that the only way we can get your debugging output is for the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH in your starting environment to be NULL. Note that this
</span><br>
<span class="quotelev1">&gt; comes after we fork, so we are talking about the child process - not sure
</span><br>
<span class="quotelev1">&gt; that matters, but may as well point it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the question is: why do you not have LD_LIBRARY_PATH set in your
</span><br>
<span class="quotelev1">&gt; environment when you provide a different hostname?
</span><br>
Right I don't have LD_LIBRARY_PATH set in my environment, but I expect 
<br>
that mpirun will provide working environment for all ranks not just
<br>
remote ones. This is how it worked before. Perhaps that was a bug, but
<br>
this was useful bug :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/19/07 7:45 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jul 18, 2007 at 09:08:38PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Jul 18, 2007 at 09:08:47AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But this will lockup:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; pn1180961:~/openmpi/trunk rhc$ mpirun -n 1 -host pn1180961 printenv | grep
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The reason is that the hostname in this last command doesn't match the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hostname I get when I query my interfaces, so mpirun thinks it must be a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; remote host - and so we stick in ssh until that times out. Which could be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; quick on your machine, but takes awhile for me.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is not my case. mpirun resolves hostname and runs env but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LD_LIBRARY_PATH is not there. If I use full name like this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H elfit1.voltaire.com env | grep
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LD_LIBRARY_PATH=/home/glebn/openmpi/lib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; everything is OK.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; More info. If I provide hostname to mpirun as returned by command
</span><br>
<span class="quotelev2">&gt; &gt; &quot;hostname&quot; the LD_LIBRARY_PATH is not set:
</span><br>
<span class="quotelev2">&gt; &gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H `hostname`  env | grep LD
</span><br>
<span class="quotelev2">&gt; &gt; OLDPWD=/home/glebn/OpenMPI/ompi-tests/intel_tests
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; if I provide any other name that resolves to the same IP then
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH is set.
</span><br>
<span class="quotelev2">&gt; &gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H localhost  env | grep LD
</span><br>
<span class="quotelev2">&gt; &gt; OLDPWD=/home/glebn/OpenMPI/ompi-tests/intel_tests
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/home/glebn/openmpi/lib
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here is debug output of &quot;bad&quot; run:
</span><br>
<span class="quotelev2">&gt; &gt; /home/glebn/openmpi/bin/mpirun -np 1 -H `hostname` -mca pls_rsh_debug 1 echo
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14730] pls:rsh: launching job 1
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14730] pls:rsh: no new daemons to launch
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here is good one:
</span><br>
<span class="quotelev2">&gt; &gt; /home/glebn/openmpi/bin/mpirun -np 1 -H localhost -mca pls_rsh_debug 1 echo
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: launching job 1
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: local csh: 0, local sh: 1
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: remote csh: 0, remote sh: 1
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --name &lt;template&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --num_procs 1 --vpid_start 0 --nodename &lt;template&gt; --universe
</span><br>
<span class="quotelev2">&gt; &gt; root_at_elfit1:default-universe-14752 --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; -mca
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_file_path
</span><br>
<span class="quotelev2">&gt; &gt; /home/glebn/openmpi//share/openmpi/amca-param-sets:/home/USERS/glebn/openmpiwd
</span><br>
<span class="quotelev2">&gt; &gt; -mca mca_base_param_file_path_force /home/USERS/glebn/openmpiwd
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: reset PATH:
</span><br>
<span class="quotelev2">&gt; &gt; /home/glebn/openmpi/bin:/home/USERS/lenny/MPI/mpi/bin:/opt/vltmpi/OPENIB/mpi/b
</span><br>
<span class="quotelev2">&gt; &gt; in:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/
</span><br>
<span class="quotelev2">&gt; &gt; bin:/usr/sbin:/usr/bin:/root/bin
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: reset LD_LIBRARY_PATH: /home/glebn/openmpi/lib
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: changing to directory /root
</span><br>
<span class="quotelev2">&gt; &gt; [elfit1:14752] pls:rsh: executing: (/home/glebn/openmpi/bin/orted) [orted
</span><br>
<span class="quotelev2">&gt; &gt; --name 0.0.1 --num_procs 1 --vpid_start 0 --nodename localhost --universe
</span><br>
<span class="quotelev2">&gt; &gt; root_at_elfit1:default-universe-14752 --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; -mca
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_file_path
</span><br>
<span class="quotelev2">&gt; &gt; /home/glebn/openmpi//share/openmpi/amca-param-sets:/home/USERS/glebn/openmpiwd
</span><br>
<span class="quotelev2">&gt; &gt; -mca mca_base_param_file_path_force /home/USERS/glebn/openmpiwd --set-sid]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1945.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Previous message:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1943.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1946.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1946.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1947.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
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
