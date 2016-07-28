<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 08:13:14 2008" -->
<!-- isoreceived="20080209131314" -->
<!-- sent="Sat, 9 Feb 2008 08:12:01 -0500" -->
<!-- isosent="20080209131201" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398" -->
<!-- id="79940630-3049-46B9-B967-784B896C9BFF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47AB7C45.9080309_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-09 08:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3177.php">Jeff Squyres: "[OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3175.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openib btl problem"</a>
<li><strong>In reply to:</strong> <a href="3161.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry, George, and I had a long conversation about this on the phone  
<br>
yesterday.  I put up all the notes here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1207#comment:9">https://svn.open-mpi.org/trac/ompi/ticket/1207#comment:9</a>
<br>
<p>Short version:
<br>
<p>1. We can add a (char*) to the base endpoint struct for the BTL/MTL to  
<br>
fill in to get the basic information about interface names (e.g.,  
<br>
&quot;eth0&quot;, &quot;mthca0:1&quot;, etc.).  It should require no PML/BTL/MTL interface  
<br>
changes, but will require a little new logic in each PML/BTL/MTL (they  
<br>
are free to leave the value as NULL if the information is unavailable/ 
<br>
unsupported).
<br>
<p>2. A new &quot;preconnect all&quot; functionality is also planned that will much  
<br>
mo betta that then current one.
<br>
<p>3. How accurate the information is in the &quot;print the map&quot;  
<br>
functionality depends on whether preconnect has been invoked or not.   
<br>
In many (most?) cases (E.g., a homogeneous cluster with one high speed  
<br>
network), the &quot;best guess&quot; information that is available before the  
<br>
preconnect is likely good enough.
<br>
<p>See the ticket for more details.
<br>
<p><p><p>On Feb 7, 2008, at 4:46 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, without the preconnect flag set the output is  
</span><br>
<span class="quotelev1">&gt; inaccurate.
</span><br>
<span class="quotelev1">&gt; As the connections between peers are made in a lazy way, in the best
</span><br>
<span class="quotelev1">&gt; case you will see the BTL that is supposed to be used, and not the one
</span><br>
<span class="quotelev1">&gt; that will be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to give an accurate view of the connections, you will have to
</span><br>
<span class="quotelev1">&gt; force all the connections. This is currently impossible. There is
</span><br>
<span class="quotelev1">&gt; nothing that guarantee that all connections have been established. The
</span><br>
<span class="quotelev1">&gt; most probable way to achieve this is to send a small and then a large
</span><br>
<span class="quotelev1">&gt; message between all peers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main problem we have with showing the connection table is that  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; is no requirement in the add_proc to connect to the remote proc. What
</span><br>
<span class="quotelev1">&gt; you get from add_proc is a bitmap of possible connections. The real
</span><br>
<span class="quotelev1">&gt; connection is established only when a message is sent to the peer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In one of your example with openib and tcp, where only openib was  
</span><br>
<span class="quotelev1">&gt; showed
</span><br>
<span class="quotelev1">&gt; (because of the exclusivity), the PML will automatically reroute the
</span><br>
<span class="quotelev1">&gt; traffic over the TCP if the first send over openib fails. openib might
</span><br>
<span class="quotelev1">&gt; be available it do not necessarily means it will be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-02-07 10:28:28 EST (Thu, 07 Feb 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 17398
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17398">https://svn.open-mpi.org/trac/ompi/changeset/17398</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; A quick try at ticket refs #1207.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here we are processing the BML structure attached to ompi_proc_t  
</span><br>
<span class="quotelev2">&gt;&gt; well after
</span><br>
<span class="quotelev2">&gt;&gt; add_procs has been called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently only Rank 0 displays data, and makes no attempt to gather  
</span><br>
<span class="quotelev2">&gt;&gt; information
</span><br>
<span class="quotelev2">&gt;&gt; from other ranks. I still need to add the MCA parameters to enable/ 
</span><br>
<span class="quotelev2">&gt;&gt; disable this
</span><br>
<span class="quotelev2">&gt;&gt; feature along with a bunch of other stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Examples from this commit on 2 nodes of IU's Odin Machine:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; shell$ mpirun -np 6 -mca btl tcp,sm,self hello
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Connected to Process 0 on odin001  
</span><br>
<span class="quotelev2">&gt;&gt; via: self
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Connected to Process 1 on odin001  
</span><br>
<span class="quotelev2">&gt;&gt; via: sm
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Connected to Process 2 on odin001  
</span><br>
<span class="quotelev2">&gt;&gt; via: sm
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Connected to Process 3 on odin001  
</span><br>
<span class="quotelev2">&gt;&gt; via: sm
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Connected to Process 4 on odin002  
</span><br>
<span class="quotelev2">&gt;&gt; via: tcp
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Connected to Process 4 on odin002  
</span><br>
<span class="quotelev2">&gt;&gt; via: tcp
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Connected to Process 5 on odin002  
</span><br>
<span class="quotelev2">&gt;&gt; via: tcp
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Connected to Process 5 on odin002  
</span><br>
<span class="quotelev2">&gt;&gt; via: tcp
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28548] Unique connection types: self,sm,tcp
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 0 of 6 running on odin001.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 28548)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 1 of 6 running on odin001.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 28549)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 2 of 6 running on odin001.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 28550)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 3 of 6 running on odin001.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 28551)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 4 of 6 running on odin002.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 7809)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 5 of 6 running on odin002.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 7810)
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this example you can see that we have 2 tcp connections to  
</span><br>
<span class="quotelev2">&gt;&gt; odin002 for each
</span><br>
<span class="quotelev2">&gt;&gt; process, since Odin has 2 tcp interfaces to each machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; shell$ mpirun -np 6 -mca btl tcp,sm,openib,self hello
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28566] Connected to Process 0 on odin001  
</span><br>
<span class="quotelev2">&gt;&gt; via: self
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28566] Connected to Process 1 on odin001  
</span><br>
<span class="quotelev2">&gt;&gt; via: sm
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28566] Connected to Process 2 on odin001  
</span><br>
<span class="quotelev2">&gt;&gt; via: sm
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28566] Connected to Process 3 on odin001  
</span><br>
<span class="quotelev2">&gt;&gt; via: sm
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28566] Connected to Process 4 on odin002  
</span><br>
<span class="quotelev2">&gt;&gt; via: openib
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28566] Connected to Process 5 on odin002  
</span><br>
<span class="quotelev2">&gt;&gt; via: openib
</span><br>
<span class="quotelev2">&gt;&gt; [odin001.cs.indiana.edu:28566] Unique connection types:  
</span><br>
<span class="quotelev2">&gt;&gt; self,sm,openib
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 0 of 6 running on odin001.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 28566)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 1 of 6 running on odin001.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 28567)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 2 of 6 running on odin001.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 28568)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 3 of 6 running on odin001.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 28569)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 4 of 6 running on odin002.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 7820)
</span><br>
<span class="quotelev2">&gt;&gt; (Hello World) I am 5 of 6 running on odin002.cs.indiana.edu (PID  
</span><br>
<span class="quotelev2">&gt;&gt; 7821)
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The above also occurs when passing no mca arguments. But here you  
</span><br>
<span class="quotelev2">&gt;&gt; can see that
</span><br>
<span class="quotelev2">&gt;&gt; tcp is not being used due to exclucivity rules in Open MPI. So even  
</span><br>
<span class="quotelev2">&gt;&gt; though
</span><br>
<span class="quotelev2">&gt;&gt; we specified {{{-mca btl tcp,sm,openib,self}}} only  
</span><br>
<span class="quotelev2">&gt;&gt; {{{self,sm,openib}}} are
</span><br>
<span class="quotelev2">&gt;&gt; being used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   tmp-public/connect-map/ompi/runtime/ompi_mpi_init.c   |     6 +++
</span><br>
<span class="quotelev2">&gt;&gt;   tmp-public/connect-map/ompi/runtime/ompi_mpi_params.c |    65 ++++ 
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   tmp-public/connect-map/ompi/runtime/params.h          |     8 ++++
</span><br>
<span class="quotelev2">&gt;&gt;   3 files changed, 79 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp-public/connect-map/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- tmp-public/connect-map/ompi/runtime/ompi_mpi_init.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp-public/connect-map/ompi/runtime/ompi_mpi_init.c	2008-02-07  
</span><br>
<span class="quotelev2">&gt;&gt; 10:28:28 EST (Thu, 07 Feb 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -749,6 +749,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;         opal_progress_set_event_poll_rate(value);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /*
</span><br>
<span class="quotelev2">&gt;&gt; +     * Display connectivity information
</span><br>
<span class="quotelev2">&gt;&gt; +     */
</span><br>
<span class="quotelev2">&gt;&gt; +    ompi_show_connectivity_info();
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     /* At this point, we are fully configured and in MPI mode.  Any
</span><br>
<span class="quotelev2">&gt;&gt;        communication calls here will work exactly like they would in
</span><br>
<span class="quotelev2">&gt;&gt;        the user's code.  Setup the connections between procs and warm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp-public/connect-map/ompi/runtime/ompi_mpi_params.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- tmp-public/connect-map/ompi/runtime/ompi_mpi_params.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp-public/connect-map/ompi/runtime/ompi_mpi_params.c	 
</span><br>
<span class="quotelev2">&gt;&gt; 2008-02-07 10:28:28 EST (Thu, 07 Feb 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -33,6 +33,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/show_help.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;ompi/mca/bml/bml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt;  * Global variables
</span><br>
<span class="quotelev2">&gt;&gt;  *
</span><br>
<span class="quotelev2">&gt;&gt; @@ -335,3 +339,64 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +int ompi_show_connectivity_info(void)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    int exit_status = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +    ompi_proc_t** procs = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    size_t nprocs, p, nbtls, b;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *unique_set = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    size_t new_size;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* JJH: Add MCA parameter here */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if( 0 == ORTE_PROC_MY_NAME-&gt;vpid ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* Get all ompi_proc_t's */
</span><br>
<span class="quotelev2">&gt;&gt; +        if (NULL == (procs = ompi_proc_world(&amp;nprocs))) {
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_output(0, &quot;ompi_proc_world() failed\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +            goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        for(p = 0; p &lt; nprocs; ++p ) {
</span><br>
<span class="quotelev2">&gt;&gt; +            if( NULL != procs[p]-&gt;proc_bml ) {
</span><br>
<span class="quotelev2">&gt;&gt; +                mca_bml_base_btl_t *bml_btl = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +                nbtls = mca_bml_base_btl_array_get_size(&amp;(procs[p]- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;proc_bml-&gt;btl_send));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                /* For each btl */
</span><br>
<span class="quotelev2">&gt;&gt; +                for(b = 0; b &lt; nbtls; ++b) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    char *component_name = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +                    bml_btl =  
</span><br>
<span class="quotelev2">&gt;&gt; mca_bml_base_btl_array_get_index(&amp;(procs[p]-&gt;proc_bml-&gt;btl_send), b);
</span><br>
<span class="quotelev2">&gt;&gt; +                    component_name = strdup(bml_btl-&gt;btl- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;btl_component-&gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                    opal_output(0, &quot;Connected to Process %ld on %s  
</span><br>
<span class="quotelev2">&gt;&gt; via: %s\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                (long)procs[p]-&gt;proc_name.vpid,
</span><br>
<span class="quotelev2">&gt;&gt; +                                procs[p]-&gt;proc_hostname,
</span><br>
<span class="quotelev2">&gt;&gt; +                                component_name);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                    if( NULL == unique_set ) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        unique_set = strdup(component_name);
</span><br>
<span class="quotelev2">&gt;&gt; +                    }
</span><br>
<span class="quotelev2">&gt;&gt; +                    else {
</span><br>
<span class="quotelev2">&gt;&gt; +                        /* Add this component if it is not already  
</span><br>
<span class="quotelev2">&gt;&gt; included */
</span><br>
<span class="quotelev2">&gt;&gt; +                        if( NULL == strstr(unique_set,  
</span><br>
<span class="quotelev2">&gt;&gt; component_name) ) {
</span><br>
<span class="quotelev2">&gt;&gt; +                            new_size =  
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(char)*(strlen(unique_set) + strlen(component_name) + 1);
</span><br>
<span class="quotelev2">&gt;&gt; +                            unique_set = (char  
</span><br>
<span class="quotelev2">&gt;&gt; *)realloc(unique_set, new_size);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                            strncat(unique_set, &quot;,&quot;, strlen(&quot;,&quot;));
</span><br>
<span class="quotelev2">&gt;&gt; +                            strncat(unique_set,
</span><br>
<span class="quotelev2">&gt;&gt; +                                    component_name,
</span><br>
<span class="quotelev2">&gt;&gt; +                                    strlen(component_name));
</span><br>
<span class="quotelev2">&gt;&gt; +                        }
</span><br>
<span class="quotelev2">&gt;&gt; +                    }
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_output(0, &quot;Unique connection types: %s\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                    unique_set);
</span><br>
<span class="quotelev2">&gt;&gt; +        free(unique_set);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + cleanup:
</span><br>
<span class="quotelev2">&gt;&gt; +    return exit_status;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp-public/connect-map/ompi/runtime/params.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- tmp-public/connect-map/ompi/runtime/params.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp-public/connect-map/ompi/runtime/params.h	2008-02-07  
</span><br>
<span class="quotelev2">&gt;&gt; 10:28:28 EST (Thu, 07 Feb 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -170,6 +170,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; int ompi_show_all_mca_params(int32_t, int, char *);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +/**
</span><br>
<span class="quotelev2">&gt;&gt; + * Display Connectivity information
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + * @returns OMPI_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +int ompi_show_connectivity_info(void);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; END_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif /* OMPI_RUNTIME_PARAMS_H */
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3177.php">Jeff Squyres: "[OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3175.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openib btl problem"</a>
<li><strong>In reply to:</strong> <a href="3161.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<!-- nextthread="start" -->
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
