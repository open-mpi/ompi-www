<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 11:10:08 2007" -->
<!-- isoreceived="20070719151008" -->
<!-- sent="Thu, 19 Jul 2007 11:09:59 -0400" -->
<!-- isosent="20070719150959" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node" -->
<!-- id="7A02CB5D-3CFC-4D43-BD9A-C1197071D5B5_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43D30B4F-E378-4656-A597-A7BD4DAB6F20_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 11:09:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1949.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1947.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1946.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1947.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem occurs in the following situation. In the rsh PLS the  
<br>
number of daemons that have to be spawned is set to zero (as mpirun  
<br>
act now as a daemon). Therefore, the PLS rsh don't do anything except  
<br>
sending the launch order to the daemons. Then the remaining of the  
<br>
work is done in the ODLS. However, as we will not spawn new daemons,  
<br>
the new application will inherit exactly the same environment as the  
<br>
mpirun application. The PATH and LD_LIBRARY_PATH is not set except in  
<br>
the case where -x LD_LIBRARY_PATH is used by the user.
<br>
<p>voyager$ mpirun --prefix /Users/bosilca/opt/mpi -np 1 -host voyager  
<br>
printenv | grep LD_
<br>
&lt;**there is no output here**&gt;
<br>
voyager$ mpirun -x LD_LIBRARY_PATH=/toto --prefix /Users/bosilca/opt/ 
<br>
mpi -np 1 -host voyager printenv | grep LD_
<br>
LD_LIBRARY_PATH=/Users/bosilca/opt/mpi/lib:/toto
<br>
<p>However, using localhost seems to make the problem vanish, as the rsh  
<br>
PLS will always be used.
<br>
voyager$ mpirun -x LD_LIBRARY_PATH=/toto --prefix /Users/bosilca/opt/ 
<br>
mpi -np 1 -host localhost printenv | grep LD_
<br>
LD_LIBRARY_PATH=/Users/bosilca/opt/mpi/lib:/toto
<br>
voyager$ mpirun --prefix /Users/bosilca/opt/mpi -np 1 -host localhost  
<br>
printenv | grep LD_
<br>
LD_LIBRARY_PATH=/Users/bosilca/opt/mpi/lib
<br>
<p>Digging a little bit deeper, shows that the problem is coming from  
<br>
the fact that rmaps_node-&gt;nodename != orte_system_info.nodename when  
<br>
anything else than localhost is provided.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jul 19, 2007, at 10:35 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; It wasn't a bug. There is a bunch of code there just to make sure
</span><br>
<span class="quotelev1">&gt; PATH and LD_LIBRARY_PATH are set correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yesterday we discovered that even if you force the --prefix in a
</span><br>
<span class="quotelev1">&gt; similar execution environment the LD_LIBRARY_PATH doesn't get set.
</span><br>
<span class="quotelev1">&gt; However, using localhost always solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 19, 2007, at 10:18 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 19, 2007 at 08:07:51AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting. Apparently, it is getting a NULL back when it tries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to access
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the LD_LIBRARY_PATH in your environment. Here is the code involved:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      newenv = opal_os_path( false, prefix_dir, lib_base, NULL );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      oldenv = getenv(&quot;LD_LIBRARY_PATH&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (NULL != oldenv) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           char* temp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           asprintf(&amp;temp, &quot;%s:%s&quot;, newenv, oldenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           free(newenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           newenv = temp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      opal_setenv(&quot;LD_LIBRARY_PATH&quot;, newenv, true, &amp;env);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (mca_pls_rsh_component.debug) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           opal_output(0, &quot;pls:rsh: reset LD_LIBRARY_PATH: %s&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; newenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      free(newenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So you can see that the only way we can get your debugging output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH in your starting environment to be NULL. Note that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comes after we fork, so we are talking about the child process -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that matters, but may as well point it out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the question is: why do you not have LD_LIBRARY_PATH set in your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment when you provide a different hostname?
</span><br>
<span class="quotelev2">&gt;&gt; Right I don't have LD_LIBRARY_PATH set in my environment, but I  
</span><br>
<span class="quotelev2">&gt;&gt; expect
</span><br>
<span class="quotelev2">&gt;&gt; that mpirun will provide working environment for all ranks not just
</span><br>
<span class="quotelev2">&gt;&gt; remote ones. This is how it worked before. Perhaps that was a bug,  
</span><br>
<span class="quotelev2">&gt;&gt; but
</span><br>
<span class="quotelev2">&gt;&gt; this was useful bug :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/19/07 7:45 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Jul 18, 2007 at 09:08:38PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, Jul 18, 2007 at 09:08:47AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But this will lockup:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pn1180961:~/openmpi/trunk rhc$ mpirun -n 1 -host pn1180961
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printenv | grep
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The reason is that the hostname in this last command doesn't
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; match the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostname I get when I query my interfaces, so mpirun thinks it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; must be a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; remote host - and so we stick in ssh until that times out.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Which could be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; quick on your machine, but takes awhile for me.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is not my case. mpirun resolves hostname and runs env but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH is not there. If I use full name like this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H elfit1.voltaire.com
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; env | grep
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/home/glebn/openmpi/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; everything is OK.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; More info. If I provide hostname to mpirun as returned by command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;hostname&quot; the LD_LIBRARY_PATH is not set:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H `hostname`  env | grep LD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OLDPWD=/home/glebn/OpenMPI/ompi-tests/intel_tests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if I provide any other name that resolves to the same IP then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH is set.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # /home/glebn/openmpi/bin/mpirun -np 1 -H localhost  env | grep LD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OLDPWD=/home/glebn/OpenMPI/ompi-tests/intel_tests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/home/glebn/openmpi/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is debug output of &quot;bad&quot; run:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/glebn/openmpi/bin/mpirun -np 1 -H `hostname` -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls_rsh_debug 1 echo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14730] pls:rsh: launching job 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14730] pls:rsh: no new daemons to launch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is good one:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/glebn/openmpi/bin/mpirun -np 1 -H localhost -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls_rsh_debug 1 echo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: launching job 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: local csh: 0, local sh: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: remote csh: 0, remote sh: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: final template argv:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;template&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --num_procs 1 --vpid_start 0 --nodename &lt;template&gt; --universe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root_at_elfit1:default-universe-14752 --nsreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gprreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_param_file_path
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/glebn/openmpi//share/openmpi/amca-param-sets:/home/USERS/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; glebn/openmpiwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca mca_base_param_file_path_force /home/USERS/glebn/openmpiwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: reset PATH:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/glebn/openmpi/bin:/home/USERS/lenny/MPI/mpi/bin:/opt/vltmpi/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPENIB/mpi/b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local/bin:/sbin:/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bin:/usr/sbin:/usr/bin:/root/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: reset LD_LIBRARY_PATH: /home/glebn/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: changing to directory /root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elfit1:14752] pls:rsh: executing: (/home/glebn/openmpi/bin/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted) [orted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --name 0.0.1 --num_procs 1 --vpid_start 0 --nodename localhost --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; universe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root_at_elfit1:default-universe-14752 --nsreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gprreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://172.30.7.187:43017;tcp://192.168.7.187:43017&quot; -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_param_file_path
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/glebn/openmpi//share/openmpi/amca-param-sets:/home/USERS/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; glebn/openmpiwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca mca_base_param_file_path_force /home/USERS/glebn/openmpiwd --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set-sid]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gleb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1949.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1947.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1946.php">George Bosilca: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1947.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
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
