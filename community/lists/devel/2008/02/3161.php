<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 16:46:56 2008" -->
<!-- isoreceived="20080207214656" -->
<!-- sent="Thu, 07 Feb 2008 16:46:45 -0500" -->
<!-- isosent="20080207214645" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398" -->
<!-- id="47AB7C45.9080309_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200802071528.m17FSTfD005729_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 16:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3162.php">Ralph Castain: "[OMPI devel] 3rd party code contributions"</a>
<li><strong>Previous message:</strong> <a href="3160.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3176.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<li><strong>Reply:</strong> <a href="3176.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, without the preconnect flag set the output is inaccurate. 
<br>
As the connections between peers are made in a lazy way, in the best 
<br>
case you will see the BTL that is supposed to be used, and not the one 
<br>
that will be used.
<br>
<p>In order to give an accurate view of the connections, you will have to 
<br>
force all the connections. This is currently impossible. There is 
<br>
nothing that guarantee that all connections have been established. The 
<br>
most probable way to achieve this is to send a small and then a large 
<br>
message between all peers.
<br>
<p>The main problem we have with showing the connection table is that there 
<br>
is no requirement in the add_proc to connect to the remote proc. What 
<br>
you get from add_proc is a bitmap of possible connections. The real 
<br>
connection is established only when a message is sent to the peer.
<br>
<p>In one of your example with openib and tcp, where only openib was showed 
<br>
(because of the exclusivity), the PML will automatically reroute the 
<br>
traffic over the TCP if the first send over openib fails. openib might 
<br>
be available it do not necessarily means it will be used.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>jjhursey_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2008-02-07 10:28:28 EST (Thu, 07 Feb 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17398
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17398">https://svn.open-mpi.org/trac/ompi/changeset/17398</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; A quick try at ticket refs #1207.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here we are processing the BML structure attached to ompi_proc_t well after
</span><br>
<span class="quotelev1">&gt; add_procs has been called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently only Rank 0 displays data, and makes no attempt to gather information
</span><br>
<span class="quotelev1">&gt; from other ranks. I still need to add the MCA parameters to enable/disable this
</span><br>
<span class="quotelev1">&gt; feature along with a bunch of other stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Examples from this commit on 2 nodes of IU's Odin Machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; shell$ mpirun -np 6 -mca btl tcp,sm,self hello
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Connected to Process 0 on odin001 via: self
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Connected to Process 1 on odin001 via: sm
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Connected to Process 2 on odin001 via: sm
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Connected to Process 3 on odin001 via: sm
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Connected to Process 4 on odin002 via: tcp
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Connected to Process 4 on odin002 via: tcp
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Connected to Process 5 on odin002 via: tcp
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Connected to Process 5 on odin002 via: tcp
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28548] Unique connection types: self,sm,tcp
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 0 of 6 running on odin001.cs.indiana.edu (PID 28548)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 1 of 6 running on odin001.cs.indiana.edu (PID 28549)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 2 of 6 running on odin001.cs.indiana.edu (PID 28550)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 3 of 6 running on odin001.cs.indiana.edu (PID 28551)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 4 of 6 running on odin002.cs.indiana.edu (PID 7809)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 5 of 6 running on odin002.cs.indiana.edu (PID 7810)
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this example you can see that we have 2 tcp connections to odin002 for each
</span><br>
<span class="quotelev1">&gt; process, since Odin has 2 tcp interfaces to each machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; shell$ mpirun -np 6 -mca btl tcp,sm,openib,self hello
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28566] Connected to Process 0 on odin001 via: self
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28566] Connected to Process 1 on odin001 via: sm
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28566] Connected to Process 2 on odin001 via: sm
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28566] Connected to Process 3 on odin001 via: sm
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28566] Connected to Process 4 on odin002 via: openib
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28566] Connected to Process 5 on odin002 via: openib
</span><br>
<span class="quotelev1">&gt; [odin001.cs.indiana.edu:28566] Unique connection types: self,sm,openib
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 0 of 6 running on odin001.cs.indiana.edu (PID 28566)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 1 of 6 running on odin001.cs.indiana.edu (PID 28567)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 2 of 6 running on odin001.cs.indiana.edu (PID 28568)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 3 of 6 running on odin001.cs.indiana.edu (PID 28569)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 4 of 6 running on odin002.cs.indiana.edu (PID 7820)
</span><br>
<span class="quotelev1">&gt; (Hello World) I am 5 of 6 running on odin002.cs.indiana.edu (PID 7821)
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above also occurs when passing no mca arguments. But here you can see that
</span><br>
<span class="quotelev1">&gt; tcp is not being used due to exclucivity rules in Open MPI. So even though
</span><br>
<span class="quotelev1">&gt; we specified {{{-mca btl tcp,sm,openib,self}}} only {{{self,sm,openib}}} are
</span><br>
<span class="quotelev1">&gt; being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    tmp-public/connect-map/ompi/runtime/ompi_mpi_init.c   |     6 +++                                     
</span><br>
<span class="quotelev1">&gt;    tmp-public/connect-map/ompi/runtime/ompi_mpi_params.c |    65 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    tmp-public/connect-map/ompi/runtime/params.h          |     8 ++++                                    
</span><br>
<span class="quotelev1">&gt;    3 files changed, 79 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp-public/connect-map/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp-public/connect-map/ompi/runtime/ompi_mpi_init.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp-public/connect-map/ompi/runtime/ompi_mpi_init.c	2008-02-07 10:28:28 EST (Thu, 07 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -749,6 +749,12 @@
</span><br>
<span class="quotelev1">&gt;          opal_progress_set_event_poll_rate(value);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /*
</span><br>
<span class="quotelev1">&gt; +     * Display connectivity information
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    ompi_show_connectivity_info();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* At this point, we are fully configured and in MPI mode.  Any
</span><br>
<span class="quotelev1">&gt;         communication calls here will work exactly like they would in
</span><br>
<span class="quotelev1">&gt;         the user's code.  Setup the connections between procs and warm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp-public/connect-map/ompi/runtime/ompi_mpi_params.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp-public/connect-map/ompi/runtime/ompi_mpi_params.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp-public/connect-map/ompi/runtime/ompi_mpi_params.c	2008-02-07 10:28:28 EST (Thu, 07 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -33,6 +33,10 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/bml/bml.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Global variables
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; @@ -335,3 +339,64 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int ompi_show_connectivity_info(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int exit_status = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    ompi_proc_t** procs = NULL;
</span><br>
<span class="quotelev1">&gt; +    size_t nprocs, p, nbtls, b;
</span><br>
<span class="quotelev1">&gt; +    char *unique_set = NULL;
</span><br>
<span class="quotelev1">&gt; +    size_t new_size;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* JJH: Add MCA parameter here */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if( 0 == ORTE_PROC_MY_NAME-&gt;vpid ) {
</span><br>
<span class="quotelev1">&gt; +        /* Get all ompi_proc_t's */
</span><br>
<span class="quotelev1">&gt; +        if (NULL == (procs = ompi_proc_world(&amp;nprocs))) {
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;ompi_proc_world() failed\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        for(p = 0; p &lt; nprocs; ++p ) {
</span><br>
<span class="quotelev1">&gt; +            if( NULL != procs[p]-&gt;proc_bml ) {
</span><br>
<span class="quotelev1">&gt; +                mca_bml_base_btl_t *bml_btl = NULL;
</span><br>
<span class="quotelev1">&gt; +                nbtls = mca_bml_base_btl_array_get_size(&amp;(procs[p]-&gt;proc_bml-&gt;btl_send));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                /* For each btl */
</span><br>
<span class="quotelev1">&gt; +                for(b = 0; b &lt; nbtls; ++b) {
</span><br>
<span class="quotelev1">&gt; +                    char *component_name = NULL;
</span><br>
<span class="quotelev1">&gt; +                    bml_btl = mca_bml_base_btl_array_get_index(&amp;(procs[p]-&gt;proc_bml-&gt;btl_send), b);
</span><br>
<span class="quotelev1">&gt; +                    component_name = strdup(bml_btl-&gt;btl-&gt;btl_component-&gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    opal_output(0, &quot;Connected to Process %ld on %s via: %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                                (long)procs[p]-&gt;proc_name.vpid,
</span><br>
<span class="quotelev1">&gt; +                                procs[p]-&gt;proc_hostname,
</span><br>
<span class="quotelev1">&gt; +                                component_name);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    if( NULL == unique_set ) {
</span><br>
<span class="quotelev1">&gt; +                        unique_set = strdup(component_name);
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                    else {
</span><br>
<span class="quotelev1">&gt; +                        /* Add this component if it is not already included */
</span><br>
<span class="quotelev1">&gt; +                        if( NULL == strstr(unique_set, component_name) ) {
</span><br>
<span class="quotelev1">&gt; +                            new_size = sizeof(char)*(strlen(unique_set) + strlen(component_name) + 1);
</span><br>
<span class="quotelev1">&gt; +                            unique_set = (char *)realloc(unique_set, new_size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                            strncat(unique_set, &quot;,&quot;, strlen(&quot;,&quot;));
</span><br>
<span class="quotelev1">&gt; +                            strncat(unique_set,
</span><br>
<span class="quotelev1">&gt; +                                    component_name,
</span><br>
<span class="quotelev1">&gt; +                                    strlen(component_name));
</span><br>
<span class="quotelev1">&gt; +                        }
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        opal_output(0, &quot;Unique connection types: %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                    unique_set);
</span><br>
<span class="quotelev1">&gt; +        free(unique_set);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + cleanup:
</span><br>
<span class="quotelev1">&gt; +    return exit_status;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp-public/connect-map/ompi/runtime/params.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp-public/connect-map/ompi/runtime/params.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp-public/connect-map/ompi/runtime/params.h	2008-02-07 10:28:28 EST (Thu, 07 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -170,6 +170,14 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  int ompi_show_all_mca_params(int32_t, int, char *);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * Display Connectivity information
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @returns OMPI_SUCCESS
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +int ompi_show_connectivity_info(void);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  END_C_DECLS
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #endif /* OMPI_RUNTIME_PARAMS_H */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3162.php">Ralph Castain: "[OMPI devel] 3rd party code contributions"</a>
<li><strong>Previous message:</strong> <a href="3160.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3176.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<li><strong>Reply:</strong> <a href="3176.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
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
