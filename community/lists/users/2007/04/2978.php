<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 12:45:52 2007" -->
<!-- isoreceived="20070402164552" -->
<!-- sent="Mon, 02 Apr 2007 10:45:40 -0600" -->
<!-- isosent="20070402164540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error when using MPI_Comm_spawn" -->
<!-- id="C2368F54.24D7%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46113092.1020107_at_irisa.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 12:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2979.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2977.php">Jeremy Buisson: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2977.php">Jeremy Buisson: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2976.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No offense, but I would definitely advise against that path. There are
<br>
other, much simpler solutions to dynamically add hosts.
<br>
<p>We *do* allow dynamic allocation changes - you just have to know how to do
<br>
them. Nobody asked before... ;-)  Future variations will include an even
<br>
simpler, single API solution.
<br>
<p>I'll pass the current solution along in response to the other user's last
<br>
note.
<br>
Ralph
<br>
<p><p>On 4/2/07 10:34 AM, &quot;Jeremy Buisson&quot; &lt;jbuisson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The runtime underneath Open MPI (called OpenRTE) will not allow you to spawn
</span><br>
<span class="quotelev2">&gt;&gt; processes on nodes outside of your allocation. This is for several reasons,
</span><br>
<span class="quotelev2">&gt;&gt; but primarily because (a) we only know about the nodes that were allocated,
</span><br>
<span class="quotelev2">&gt;&gt; so we have no idea how to spawn a process anywhere else, and (b) most
</span><br>
<span class="quotelev2">&gt;&gt; resource managers wouldn't let us do it anyway.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I gather you have some node that you know about and have hard-coded into
</span><br>
<span class="quotelev2">&gt;&gt; your application? How do you know the name of the node if it isn't in your
</span><br>
<span class="quotelev2">&gt;&gt; allocation??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because I can give that names to OpenMPI (or OpenRTE, or whatever). I
</span><br>
<span class="quotelev1">&gt; also would like to do the same, and I don't want OpenMPI to restrict to
</span><br>
<span class="quotelev1">&gt; what it thinks to be the allocation, while I'm sure to know better than
</span><br>
<span class="quotelev1">&gt; it what I am doing.
</span><br>
<span class="quotelev1">&gt; The concept of nodes being in allocations fixed at launch-time is really
</span><br>
<span class="quotelev1">&gt; rigid; and it prevents the application (or whatever else) to modify the
</span><br>
<span class="quotelev1">&gt; allocation at runtime, which may be quite nice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an ugly patch I've quickly done for my own use, which changes
</span><br>
<span class="quotelev1">&gt; the round-robin rmaps such that is first allocates the hosts to the
</span><br>
<span class="quotelev1">&gt; rmgr, as a copy&amp;paste of some code in the dash_host ras component. It's
</span><br>
<span class="quotelev1">&gt; far from being bugfree, but it can be a startpoint to hack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeremy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 4/2/07 10:05 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have built Open MPI (1.2) with run-time environment enabled for Torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2.1.6) resource manager. Initially I am requesting 4 nodes (1 CPU each)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from Torque. The from inside of my MPI code I am trying to spawn more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes to nodes outside of Torque-assigned nodes using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_spawn, but this is failing with an error below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [wins04:13564] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [wins04:13564] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [wins04:13564] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [wins04:13564] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 1 with PID 15070 on node wins03 exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Info info;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm comm, *intercomm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char *key, *value;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         key = &quot;host&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         value = &quot;wins08&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rc1 = MPI_Info_create(&amp;info);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rc1 = MPI_Info_set(info, key, value);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rc1 = MPI_Comm_spawn(slave,MPI_ARGV_NULL, 1, info, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD, intercomm, arr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ###################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would this work as it is or is something wrong with my assumption? Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenRTE stopping me from spawning processes outside of the initially
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated nodes through Torque?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prakash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -ru openmpi-1.2/ompi/mca/btl/tcp/btl_tcp.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.2-custom/ompi/mca/btl/tcp/btl_tcp.c
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.2/ompi/mca/btl/tcp/btl_tcp.c 2006-11-09 19:53:44.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.2-custom/ompi/mca/btl/tcp/btl_tcp.c 2007-03-28
</span><br>
<span class="quotelev1">&gt; 14:02:10.000000000 +0200
</span><br>
<span class="quotelev1">&gt; @@ -117,8 +117,8 @@
</span><br>
<span class="quotelev1">&gt;          tcp_endpoint-&gt;endpoint_btl = tcp_btl;
</span><br>
<span class="quotelev1">&gt;          rc = mca_btl_tcp_proc_insert(tcp_proc, tcp_endpoint);
</span><br>
<span class="quotelev1">&gt;          if(rc != OMPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; -            OBJ_RELEASE(tcp_endpoint);
</span><br>
<span class="quotelev1">&gt;              OPAL_THREAD_UNLOCK(&amp;tcp_proc-&gt;proc_lock);
</span><br>
<span class="quotelev1">&gt; +            OBJ_RELEASE(tcp_endpoint);
</span><br>
<span class="quotelev1">&gt;              continue;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; diff -ru openmpi-1.2/opal/threads/mutex.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.2-custom/opal/threads/mutex.c
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.2/opal/threads/mutex.c 2006-11-09 19:53:32.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.2-custom/opal/threads/mutex.c 2007-03-28 15:59:25.000000000
</span><br>
<span class="quotelev1">&gt; +0200
</span><br>
<span class="quotelev1">&gt; @@ -54,6 +54,8 @@
</span><br>
<span class="quotelev1">&gt;  #elif OMPI_ENABLE_DEBUG &amp;&amp; OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK
</span><br>
<span class="quotelev1">&gt;      /* set type to ERRORCHECK so that we catch recursive locks */
</span><br>
<span class="quotelev1">&gt;      pthread_mutexattr_settype(&amp;attr, PTHREAD_MUTEX_ERRORCHECK);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +    pthread_mutexattr_settype(&amp;attr, PTHREAD_MUTEX_RECURSIVE);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      pthread_mutex_init(&amp;m-&gt;m_lock_pthread, &amp;attr);
</span><br>
<span class="quotelev1">&gt; diff -ru openmpi-1.2/opal/threads/mutex_unix.h
</span><br>
<span class="quotelev1">&gt; openmpi-1.2-custom/opal/threads/mutex_unix.h
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.2/opal/threads/mutex_unix.h 2006-11-09 19:53:32.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.2-custom/opal/threads/mutex_unix.h 2007-03-28 15:36:13.000000000
</span><br>
<span class="quotelev1">&gt; +0200
</span><br>
<span class="quotelev1">&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  static inline int opal_mutex_trylock(opal_mutex_t *m)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -#if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; +#if 1 // OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;      int ret = pthread_mutex_trylock(&amp;m-&gt;m_lock_pthread);
</span><br>
<span class="quotelev1">&gt;      if (ret == EDEADLK) {
</span><br>
<span class="quotelev1">&gt;          errno = ret;
</span><br>
<span class="quotelev1">&gt; @@ -91,7 +91,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  static inline void opal_mutex_lock(opal_mutex_t *m)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -#if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; +#if 1 // OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;      int ret = pthread_mutex_lock(&amp;m-&gt;m_lock_pthread);
</span><br>
<span class="quotelev1">&gt;      if (ret == EDEADLK) {
</span><br>
<span class="quotelev1">&gt;          errno = ret;
</span><br>
<span class="quotelev1">&gt; diff -ru openmpi-1.2/opal/util/stacktrace.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.2-custom/opal/util/stacktrace.c
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.2/opal/util/stacktrace.c 2007-01-24 19:16:07.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.2-custom/opal/util/stacktrace.c 2007-03-28 14:02:10.000000000
</span><br>
<span class="quotelev1">&gt; +0200
</span><br>
<span class="quotelev1">&gt; @@ -344,6 +344,8 @@
</span><br>
<span class="quotelev1">&gt;                     stacktrace_hostname, getpid());
</span><br>
<span class="quotelev1">&gt;      write(fileno(stderr), print_buffer, ret);
</span><br>
<span class="quotelev1">&gt;      fflush(stderr);
</span><br>
<span class="quotelev1">&gt; +    for(;;)
</span><br>
<span class="quotelev1">&gt; +      pause();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #endif /* OMPI_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp; ! defined(__WINDOWS__) */
</span><br>
<span class="quotelev1">&gt; diff -ru openmpi-1.2/orte/mca/rmaps/round_robin/rmaps_rr.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.2-custom/orte/mca/rmaps/round_robin/rmaps_rr.c
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.2/orte/mca/rmaps/round_robin/rmaps_rr.c 2007-01-24
</span><br>
<span class="quotelev1">&gt; 19:16:10.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.2-custom/orte/mca/rmaps/round_robin/rmaps_rr.c 2007-03-28
</span><br>
<span class="quotelev1">&gt; 15:11:57.000000000 +0200
</span><br>
<span class="quotelev1">&gt; @@ -265,6 +265,134 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static bool orte_rmaps_rr_is_host_allocated(char* name)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  orte_ras_node_t* node;
</span><br>
<span class="quotelev1">&gt; +  node = orte_ras_base_node_lookup(0, name);
</span><br>
<span class="quotelev1">&gt; +  OBJ_RELEASE(node);
</span><br>
<span class="quotelev1">&gt; +  return node != NULL;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int orte_rmaps_rr_host_allocate(orte_jobid_t jobid)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_list_t nodes;
</span><br>
<span class="quotelev1">&gt; +    opal_list_item_t* item;
</span><br>
<span class="quotelev1">&gt; +    orte_app_context_t **context;
</span><br>
<span class="quotelev1">&gt; +    size_t i, j, k;
</span><br>
<span class="quotelev1">&gt; +    orte_std_cntr_t num_context = 0;
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt; +    char **mapped_nodes = NULL, **mini_map;
</span><br>
<span class="quotelev1">&gt; +    orte_ras_node_t *node;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* get the context */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    rc = orte_rmgr.get_app_context(jobid, &amp;context, &amp;num_context);
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +        return rc;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    OBJ_CONSTRUCT(&amp;nodes, opal_list_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* If there's nothing to do, skip to the end */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (0 == num_context) {
</span><br>
<span class="quotelev1">&gt; +        rc = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +        goto cleanup;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Otherwise, go through the contexts */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt; num_context; ++i) {
</span><br>
<span class="quotelev1">&gt; +      if (context[i] != 0) {
</span><br>
<span class="quotelev1">&gt; +        if (context[i]-&gt;num_map &gt; 0) {
</span><br>
<span class="quotelev1">&gt; +            orte_app_context_map_t** map = context[i]-&gt;map_data;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* Accumulate all of the host name mappings */
</span><br>
<span class="quotelev1">&gt; +            for (j = 0; j &lt; context[i]-&gt;num_map; ++j) {
</span><br>
<span class="quotelev1">&gt; +                if (ORTE_APP_CONTEXT_MAP_HOSTNAME == map[j]-&gt;map_type) {
</span><br>
<span class="quotelev1">&gt; +                    mini_map = opal_argv_split(map[j]-&gt;map_data, ',');
</span><br>
<span class="quotelev1">&gt; +      for (k = 0; NULL != mini_map[k]; ++k) {
</span><br>
<span class="quotelev1">&gt; +        if(!orte_rmaps_rr_is_host_allocated(mini_map[k]))
</span><br>
<span class="quotelev1">&gt; +   {
</span><br>
<span class="quotelev1">&gt; +     rc = opal_argv_append_nosize(&amp;mapped_nodes,
</span><br>
<span class="quotelev1">&gt; +             mini_map[k]);
</span><br>
<span class="quotelev1">&gt; +     if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; +       goto cleanup;
</span><br>
<span class="quotelev1">&gt; +     }
</span><br>
<span class="quotelev1">&gt; +   }
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +      opal_argv_free(mini_map);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Did we find anything? */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (NULL != mapped_nodes) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* Go through the names found and add them to the host list.
</span><br>
<span class="quotelev1">&gt; +           If they're not unique, then bump the slots count for each
</span><br>
<span class="quotelev1">&gt; +           duplicate */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        for (i = 0; NULL != mapped_nodes[i]; ++i) {
</span><br>
<span class="quotelev1">&gt; +            for (item = opal_list_get_first(&amp;nodes);
</span><br>
<span class="quotelev1">&gt; +                 item != opal_list_get_end(&amp;nodes);
</span><br>
<span class="quotelev1">&gt; +                 item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; +                node = (orte_ras_node_t*) item;
</span><br>
<span class="quotelev1">&gt; +                if (0 == strcmp(node-&gt;node_name, mapped_nodes[i])) {
</span><br>
<span class="quotelev1">&gt; +                    ++node-&gt;node_slots;
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* If we didn't find it, add it to the list */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if (item == opal_list_get_end(&amp;nodes)) {
</span><br>
<span class="quotelev1">&gt; +                node = OBJ_NEW(orte_ras_node_t);
</span><br>
<span class="quotelev1">&gt; +                if (NULL == node) {
</span><br>
<span class="quotelev1">&gt; +                    return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                node-&gt;node_name = strdup(mapped_nodes[i]);
</span><br>
<span class="quotelev1">&gt; +                node-&gt;node_arch = NULL;
</span><br>
<span class="quotelev1">&gt; +                node-&gt;node_state = ORTE_NODE_STATE_UP;
</span><br>
<span class="quotelev1">&gt; +                /* JMS: this should not be hard-wired to 0, but there's no
</span><br>
<span class="quotelev1">&gt; +                   other value to put it to [yet]... */
</span><br>
<span class="quotelev1">&gt; +                node-&gt;node_cellid = 0;
</span><br>
<span class="quotelev1">&gt; +                node-&gt;node_slots_inuse = 0;
</span><br>
<span class="quotelev1">&gt; +                node-&gt;node_slots_max = 0;
</span><br>
<span class="quotelev1">&gt; +                node-&gt;node_slots = 1;
</span><br>
<span class="quotelev1">&gt; +                opal_list_append(&amp;nodes, &amp;node-&gt;super);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* Put them on the segment and allocate them */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; +            (rc = orte_ras_base_node_insert(&amp;nodes)) ||
</span><br>
<span class="quotelev1">&gt; +            ORTE_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; +            (rc = orte_ras_base_allocate_nodes(jobid, &amp;nodes))) {
</span><br>
<span class="quotelev1">&gt; +            goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +cleanup:
</span><br>
<span class="quotelev1">&gt; +    if (NULL != mapped_nodes) {
</span><br>
<span class="quotelev1">&gt; +        opal_argv_free(mapped_nodes);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    while (NULL != (item = opal_list_remove_first(&amp;nodes))) {
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt; num_context; i++) {
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(context[i]);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    free(context);
</span><br>
<span class="quotelev1">&gt; +    return rc;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; @@ -367,6 +495,11 @@
</span><br>
<span class="quotelev1">&gt;      orte_attribute_t *attr;
</span><br>
<span class="quotelev1">&gt;      orte_std_cntr_t slots_per_node;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    if(ORTE_SUCCESS != (rc = orte_rmaps_rr_host_allocate(jobid))) {
</span><br>
<span class="quotelev1">&gt; +      ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +      return rc;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      OPAL_TRACE(1);
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      /* setup the local environment from the attributes */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2979.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2977.php">Jeremy Buisson: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2977.php">Jeremy Buisson: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2976.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
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
