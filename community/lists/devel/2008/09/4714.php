<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 27 20:53:15 2008" -->
<!-- isoreceived="20080928005315" -->
<!-- sent="Sat, 27 Sep 2008 18:53:05 -0600" -->
<!-- isosent="20080928005305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653" -->
<!-- id="0CD07A7F-C003-4C0F-A6EB-5FF581D46C6E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809271322.m8RDMWoM027764_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-27 20:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4715.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>Previous message:</strong> <a href="4713.php">Jeff Squyres: "[OMPI devel] HG OMPI mirror is back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4715.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>Reply:</strong> <a href="4715.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Aurelien
<br>
<p>Regarding the dpm including a &quot;route_to_port&quot; API. This actually is  
<br>
pretty close to being an exact duplicate of an already existing  
<br>
function in the RML that takes a URI as it's input, parses it to  
<br>
separate the proc name and the contact info, sets the contact info  
<br>
into the OOB, sets the route to that proc, and returns the proc name  
<br>
to the caller. Take a look at orte/mca/rml/base/rml_base_contact.c.
<br>
<p>All we need to do is add the logic to that function so that, if the  
<br>
target proc is not in our job family, we update the route and contact  
<br>
info in the HNP instead of locally.
<br>
<p>This would keep all the &quot;setting_route_to_proc&quot; functionality in one  
<br>
place, instead of duplicating it in the dpm, thus making maintenance  
<br>
much easier.
<br>
<p>Make sense?
<br>
Ralph
<br>
<p><p>On Sep 27, 2008, at 7:22 AM, bouteill_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bouteill
</span><br>
<span class="quotelev1">&gt; Date: 2008-09-27 09:22:32 EDT (Sat, 27 Sep 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 19653
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19653">https://svn.open-mpi.org/trac/ompi/changeset/19653</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add functions to access the opaque port_string and to add routes to  
</span><br>
<span class="quotelev1">&gt; a remote port. This is usefull for FT, but could also turn usefull  
</span><br>
<span class="quotelev1">&gt; when considering MPI3 extentions to the MPI2 dynamics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/base/base.h              |     3 +
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/base/dpm_base_null_fns.c |    12 ++++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/base/dpm_base_open.c     |     2
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/dpm.h                    |    20 +++++++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/orte/dpm_orte.c          |   114 +++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++------------------
</span><br>
<span class="quotelev1">&gt;   5 files changed, 99 insertions(+), 52 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/dpm/base/base.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/dpm/base/base.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/dpm/base/base.h	2008-09-27 09:22:32 EDT (Sat, 27  
</span><br>
<span class="quotelev1">&gt; Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -92,6 +92,9 @@
</span><br>
<span class="quotelev1">&gt; int ompi_dpm_base_null_dyn_finalize (void);
</span><br>
<span class="quotelev1">&gt; void ompi_dpm_base_null_mark_dyncomm (ompi_communicator_t *comm);
</span><br>
<span class="quotelev1">&gt; int ompi_dpm_base_null_open_port(char *port_name, orte_rml_tag_t  
</span><br>
<span class="quotelev1">&gt; given_tag);
</span><br>
<span class="quotelev1">&gt; +int ompi_dpm_base_null_parse_port(char *port_name,
</span><br>
<span class="quotelev1">&gt; +                                  orte_process_name_t *rproc,  
</span><br>
<span class="quotelev1">&gt; orte_rml_tag_t *tag);
</span><br>
<span class="quotelev1">&gt; +int ompi_dpm_base_null_route_to_port(char *rml_uri,  
</span><br>
<span class="quotelev1">&gt; orte_process_name_t *rproc);
</span><br>
<span class="quotelev1">&gt; int ompi_dpm_base_null_close_port(char *port_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* useful globals */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/dpm/base/dpm_base_null_fns.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/dpm/base/dpm_base_null_fns.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/dpm/base/dpm_base_null_fns.c	2008-09-27 09:22:32  
</span><br>
<span class="quotelev1">&gt; EDT (Sat, 27 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -36,6 +36,7 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; void ompi_dpm_base_null_disconnect(ompi_communicator_t *comm)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return;
</span><br>
<span class="quotelev1">&gt; @@ -70,6 +71,17 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +int ompi_dpm_base_null_parse_port(char *port_name,
</span><br>
<span class="quotelev1">&gt; +                                  orte_process_name_t *rproc,  
</span><br>
<span class="quotelev1">&gt; orte_rml_tag_t *tag)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int ompi_dpm_base_null_route_to_port(char *rml_uri,  
</span><br>
<span class="quotelev1">&gt; orte_process_name_t *rproc)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; int ompi_dpm_base_null_close_port(char *port_name)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/dpm/base/dpm_base_open.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/dpm/base/dpm_base_open.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/dpm/base/dpm_base_open.c	2008-09-27 09:22:32 EDT  
</span><br>
<span class="quotelev1">&gt; (Sat, 27 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -42,6 +42,8 @@
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_null_dyn_finalize,
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_null_mark_dyncomm,
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_null_open_port,
</span><br>
<span class="quotelev1">&gt; +    ompi_dpm_base_null_parse_port,
</span><br>
<span class="quotelev1">&gt; +    ompi_dpm_base_null_route_to_port,
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_null_close_port,
</span><br>
<span class="quotelev1">&gt;     NULL
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/dpm/dpm.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/dpm/dpm.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/dpm/dpm.h	2008-09-27 09:22:32 EDT (Sat, 27 Sep  
</span><br>
<span class="quotelev1">&gt; 2008)
</span><br>
<span class="quotelev1">&gt; @@ -58,6 +58,8 @@
</span><br>
<span class="quotelev1">&gt; #define OMPI_RML_TAG_DYNAMIC                        OMPI_RML_TAG_BASE 
</span><br>
<span class="quotelev1">&gt; +200
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Initialize a module
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; @@ -116,6 +118,20 @@
</span><br>
<span class="quotelev1">&gt; typedef int (*ompi_dpm_base_module_open_port_fn_t)(char *port_name,  
</span><br>
<span class="quotelev1">&gt; orte_rml_tag_t tag);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; + * Converts an opaque port string to a RML process nane and tag.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +typedef int (*ompi_dpm_base_module_parse_port_name_t)(char  
</span><br>
<span class="quotelev1">&gt; *port_name,
</span><br>
<span class="quotelev1">&gt; +                                                       
</span><br>
<span class="quotelev1">&gt; orte_process_name_t *rproc,
</span><br>
<span class="quotelev1">&gt; +                                                       
</span><br>
<span class="quotelev1">&gt; orte_rml_tag_t *tag);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Update the routed component to make sure that the RML can send  
</span><br>
<span class="quotelev1">&gt; messages to
</span><br>
<span class="quotelev1">&gt; + * the remote port
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +typedef int (*ompi_dpm_base_module_route_to_port_t)(char *rml_uri,  
</span><br>
<span class="quotelev1">&gt; orte_process_name_t *rproc);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt;  * Close a port
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; typedef int (*ompi_dpm_base_module_close_port_fn_t)(char *port_name);
</span><br>
<span class="quotelev1">&gt; @@ -145,6 +161,10 @@
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_module_mark_dyncomm_fn_t      mark_dyncomm;
</span><br>
<span class="quotelev1">&gt;     /* open port */
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_module_open_port_fn_t         open_port;
</span><br>
<span class="quotelev1">&gt; +    /* parse port string */
</span><br>
<span class="quotelev1">&gt; +    ompi_dpm_base_module_parse_port_name_t      parse_port;
</span><br>
<span class="quotelev1">&gt; +    /* update route to a port */
</span><br>
<span class="quotelev1">&gt; +    ompi_dpm_base_module_route_to_port_t        route_to_port;
</span><br>
<span class="quotelev1">&gt;     /* close port */
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_module_close_port_fn_t        close_port;
</span><br>
<span class="quotelev1">&gt;     /* finalize */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c	2008-09-27 09:22:32 EDT (Sat,  
</span><br>
<span class="quotelev1">&gt; 27 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -61,9 +61,6 @@
</span><br>
<span class="quotelev1">&gt;                     opal_buffer_t *buffer,
</span><br>
<span class="quotelev1">&gt;                     orte_rml_tag_t tag, void *cbdata);
</span><br>
<span class="quotelev1">&gt; static void process_cb(int fd, short event, void *data);
</span><br>
<span class="quotelev1">&gt; -static int parse_port_name(char *port_name,
</span><br>
<span class="quotelev1">&gt; -                           orte_process_name_t *rproc,
</span><br>
<span class="quotelev1">&gt; -                           orte_rml_tag_t *tag);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* API functions */
</span><br>
<span class="quotelev1">&gt; static int init(void);
</span><br>
<span class="quotelev1">&gt; @@ -78,6 +75,9 @@
</span><br>
<span class="quotelev1">&gt;                  char *port_name);
</span><br>
<span class="quotelev1">&gt; static int dyn_init(void);
</span><br>
<span class="quotelev1">&gt; static int open_port(char *port_name, orte_rml_tag_t given_tag);
</span><br>
<span class="quotelev1">&gt; +static int parse_port_name(char *port_name, orte_process_name_t  
</span><br>
<span class="quotelev1">&gt; *rproc,
</span><br>
<span class="quotelev1">&gt; +                           orte_rml_tag_t *tag);
</span><br>
<span class="quotelev1">&gt; +static int route_to_port(char *rml_uri, orte_process_name_t *rproc);
</span><br>
<span class="quotelev1">&gt; static int close_port(char *port_name);
</span><br>
<span class="quotelev1">&gt; static int finalize(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -93,6 +93,8 @@
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_dyn_finalize,
</span><br>
<span class="quotelev1">&gt;     ompi_dpm_base_mark_dyncomm,
</span><br>
<span class="quotelev1">&gt;     open_port,
</span><br>
<span class="quotelev1">&gt; +    parse_port_name,
</span><br>
<span class="quotelev1">&gt; +    route_to_port,
</span><br>
<span class="quotelev1">&gt;     close_port,
</span><br>
<span class="quotelev1">&gt;     finalize
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; @@ -145,14 +147,17 @@
</span><br>
<span class="quotelev1">&gt;      * set us up to communicate with it
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     if (NULL != port_string &amp;&amp; 0 &lt; strlen(port_string)) {
</span><br>
<span class="quotelev1">&gt; -        /* separate the string into the RML URI and tag - this  
</span><br>
<span class="quotelev1">&gt; function performs
</span><br>
<span class="quotelev1">&gt; -         * whatever route initialization is required by the  
</span><br>
<span class="quotelev1">&gt; selected routed module
</span><br>
<span class="quotelev1">&gt; -         */
</span><br>
<span class="quotelev1">&gt; +        /* separate the string into the RML URI and tag */
</span><br>
<span class="quotelev1">&gt;         if (ORTE_SUCCESS != (rc = parse_port_name(port_string,  
</span><br>
<span class="quotelev1">&gt; &amp;port, &amp;tag))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;             return rc;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    /* make sure we can route rml messages to the destination */
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = route_to_port(port_string, &amp;port))) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +        return rc;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* tell the progress engine to tick the event library more
</span><br>
<span class="quotelev1">&gt;        often, to make sure that the OOB messages get sent */
</span><br>
<span class="quotelev1">&gt; @@ -783,48 +788,11 @@
</span><br>
<span class="quotelev1">&gt;     ORTE_MESSAGE_EVENT(sender, buffer, tag, release_ack);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static int parse_port_name(char *port_name,
</span><br>
<span class="quotelev1">&gt; -                           orte_process_name_t *rproc,
</span><br>
<span class="quotelev1">&gt; -                           orte_rml_tag_t *tag)
</span><br>
<span class="quotelev1">&gt; +static int route_to_port(char *uri, orte_process_name_t *rproc)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    char *tmpstring=NULL, *ptr, *rml_uri=NULL;
</span><br>
<span class="quotelev1">&gt; -    orte_rml_cmd_flag_t cmd = ORTE_RML_UPDATE_CMD;
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t route;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* don't mangle the port name */
</span><br>
<span class="quotelev1">&gt; -    tmpstring = strdup(port_name);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* find the ':' demarking the RML tag we added to the end */
</span><br>
<span class="quotelev1">&gt; -    if (NULL == (ptr = strrchr(tmpstring, ':'))) {
</span><br>
<span class="quotelev1">&gt; -        rc = ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* terminate the port_name at that location */
</span><br>
<span class="quotelev1">&gt; -    *ptr = '\0';
</span><br>
<span class="quotelev1">&gt; -    ptr++;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* convert the RML tag */
</span><br>
<span class="quotelev1">&gt; -    sscanf(ptr,&quot;%d&quot;, (int*)tag);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* now split out the second field - the uri of the remote proc */
</span><br>
<span class="quotelev1">&gt; -    if (NULL == (ptr = strchr(tmpstring, '+'))) {
</span><br>
<span class="quotelev1">&gt; -        rc = ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    *ptr = '\0';
</span><br>
<span class="quotelev1">&gt; -    ptr++;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* save that info */
</span><br>
<span class="quotelev1">&gt; -    rml_uri = strdup(ptr);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* extract the originating proc's name */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = orte_rml_base_parse_uris(ptr, rproc,  
</span><br>
<span class="quotelev1">&gt; NULL))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    orte_rml_cmd_flag_t cmd = ORTE_RML_UPDATE_CMD;
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* if this proc is part of my job family, then I need to
</span><br>
<span class="quotelev1">&gt;      * update my RML contact hash table and my routes
</span><br>
<span class="quotelev1">&gt; @@ -835,14 +803,14 @@
</span><br>
<span class="quotelev1">&gt;                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* set the contact info into the hash table */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(rml_uri))) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc = orte_rml.set_contact_info(uri))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -            goto cleanup;
</span><br>
<span class="quotelev1">&gt; +            return rc;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (ORTE_SUCCESS != (rc = orte_routed.update_route(rproc,  
</span><br>
<span class="quotelev1">&gt; rproc))) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* the proc must be part of another job family. In this case, we
</span><br>
<span class="quotelev1">&gt; @@ -855,7 +823,7 @@
</span><br>
<span class="quotelev1">&gt;     opal_dss.pack(&amp;route, &amp;cmd, 1, ORTE_RML_CMD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* pack the HNP uri */
</span><br>
<span class="quotelev1">&gt; -    opal_dss.pack(&amp;route, &amp;tmpstring, 1, OPAL_STRING);
</span><br>
<span class="quotelev1">&gt; +    opal_dss.pack(&amp;route, &amp;uri, 1, OPAL_STRING);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((3, ompi_dpm_base_output,
</span><br>
<span class="quotelev1">&gt;                          &quot;%s dpm_parse_port: %s in diff job family -  
</span><br>
<span class="quotelev1">&gt; sending update to %s&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -867,7 +835,7 @@
</span><br>
<span class="quotelev1">&gt;                                        ORTE_RML_TAG_RML_INFO_UPDATE,  
</span><br>
<span class="quotelev1">&gt; 0))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         OBJ_DESTRUCT(&amp;route);
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; +        return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* wait right here until the HNP acks the update to ensure that
</span><br>
<span class="quotelev1">&gt; @@ -886,7 +854,49 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* our get_route function automatically routes all messages for
</span><br>
<span class="quotelev1">&gt;      * other job families via the HNP, so nothing more to do here
</span><br>
<span class="quotelev1">&gt; -     */
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    return rc;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int parse_port_name(char *port_name,
</span><br>
<span class="quotelev1">&gt; +                           orte_process_name_t *rproc,
</span><br>
<span class="quotelev1">&gt; +                           orte_rml_tag_t *tag)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    char *tmpstring=NULL, *ptr, *rml_uri=NULL;
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* don't mangle the port name */
</span><br>
<span class="quotelev1">&gt; +    tmpstring = strdup(port_name);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* find the ':' demarking the RML tag we added to the end */
</span><br>
<span class="quotelev1">&gt; +    if (NULL == (ptr = strrchr(tmpstring, ':'))) {
</span><br>
<span class="quotelev1">&gt; +        rc = ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt; +        goto cleanup;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* terminate the port_name at that location */
</span><br>
<span class="quotelev1">&gt; +    *ptr = '\0';
</span><br>
<span class="quotelev1">&gt; +    ptr++;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* convert the RML tag */
</span><br>
<span class="quotelev1">&gt; +    sscanf(ptr,&quot;%d&quot;, (int*)tag);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* now split out the second field - the uri of the remote proc */
</span><br>
<span class="quotelev1">&gt; +    if (NULL == (ptr = strchr(tmpstring, '+'))) {
</span><br>
<span class="quotelev1">&gt; +        rc = ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt; +        goto cleanup;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    *ptr = '\0';
</span><br>
<span class="quotelev1">&gt; +    ptr++;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* save that info */
</span><br>
<span class="quotelev1">&gt; +    rml_uri = strdup(ptr);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* extract the originating proc's name */
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = orte_rml_base_parse_uris(ptr, rproc,  
</span><br>
<span class="quotelev1">&gt; NULL))) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +        goto cleanup;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;     rc = ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cleanup:
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4715.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>Previous message:</strong> <a href="4713.php">Jeff Squyres: "[OMPI devel] HG OMPI mirror is back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4715.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>Reply:</strong> <a href="4715.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
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
