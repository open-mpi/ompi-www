<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 28 21:01:33 2008" -->
<!-- isoreceived="20080929010133" -->
<!-- sent="Sun, 28 Sep 2008 19:01:23 -0600" -->
<!-- isosent="20080929010123" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653" -->
<!-- id="9CB2E89E-9476-4F1F-810F-3B25E9972476_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B5745C61-36CD-4638-A6B1-6A3D5DDBAE8F_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-09-28 21:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4717.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>Previous message:</strong> <a href="4715.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>In reply to:</strong> <a href="4715.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4717.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>Reply:</strong> <a href="4717.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No religious fervor on my end either :-)
<br>
<p>I have in my notes from the July meeting some thoughts/talk about  
<br>
needing a function like this, but (probably just in notes from  
<br>
thinking) some question as to the best place to put it. The dpm does  
<br>
create the port string, so having a &quot;route_to_port&quot; would make some  
<br>
sense if we are passing it the full port string (I couldn't tell from  
<br>
the commit if that is what you were planning to do, but it sounds like  
<br>
that is where you were heading). So breaking the port string into its  
<br>
component parts in that function would make sense. It also makes a lot  
<br>
of sense to provide a way to parse the port without having to create  
<br>
the route.
<br>
<p>Perhaps this stems from my own ignorance, but my thought was that  
<br>
perhaps we need to extend the existing RML function to handle the  
<br>
subsequent setting of the route to the proc itself. In the current  
<br>
dpm, we automatically assume that the route will be to a different job  
<br>
family, and hence send the routing info to the HNP. However, this may  
<br>
not be true - e.g., after a comm_spawn, there is no reason to route  
<br>
through the HNP since the job family is the same.
<br>
<p>Rather than implement all that logic in the dpm, it seems to me that  
<br>
perhaps we would be better served to let the dpm solely deal with  
<br>
parsing the port string into its component parts, and then let the RML  
<br>
or routed framework figure out what to do with each of those parts. So  
<br>
the dpm function would, for example, break out the tag and save/return/ 
<br>
ignore it, then break off the proc's and the HNP's URIs and send them  
<br>
to the RML or routed &quot;define_route_to_proc&quot;. That function would look  
<br>
at the proc to see if this is in the our job family - if so, it would  
<br>
just pass it to the appropriate routed module for handling. If it is  
<br>
in a different job family, then it sends the HNP info to its own HNP,  
<br>
passes the info to the routed module, etc.
<br>
<p>Haven't thought it all through yet, but wanted to suggest we think  
<br>
about it as we may (per the FT July discussions) need to define routes  
<br>
for things other than just DPM-related operations. Perhaps we should  
<br>
do some design discussion off-list to see what makes sense?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Sep 28, 2008, at 8:33 AM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just split the existing static function from inside the dpm and  
</span><br>
<span class="quotelev1">&gt; exposed it to the outside world. The idea is that the dpm create the  
</span><br>
<span class="quotelev1">&gt; (opaque) port strings and therefore nows how they are supposed to be  
</span><br>
<span class="quotelev1">&gt; formated. So he is responsible for parsing them. Second, I split the  
</span><br>
<span class="quotelev1">&gt; parsing and routing in two different functions because sometimes you  
</span><br>
<span class="quotelev1">&gt; might want to parse without creating a route to the target.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll check the RML function to see if it offers similar  
</span><br>
<span class="quotelev1">&gt; functionality om monday. I have no strongly religious belief on  
</span><br>
<span class="quotelev1">&gt; wether this should be a rml or dpm function. So I don't care as long  
</span><br>
<span class="quotelev1">&gt; as I have what I need :]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the feedback,
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 27 sept. 08 &#224; 20:53, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yo Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding the dpm including a &quot;route_to_port&quot; API. This actually is  
</span><br>
<span class="quotelev2">&gt;&gt; pretty close to being an exact duplicate of an already existing  
</span><br>
<span class="quotelev2">&gt;&gt; function in the RML that takes a URI as it's input, parses it to  
</span><br>
<span class="quotelev2">&gt;&gt; separate the proc name and the contact info, sets the contact info  
</span><br>
<span class="quotelev2">&gt;&gt; into the OOB, sets the route to that proc, and returns the proc  
</span><br>
<span class="quotelev2">&gt;&gt; name to the caller. Take a look at orte/mca/rml/base/ 
</span><br>
<span class="quotelev2">&gt;&gt; rml_base_contact.c.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All we need to do is add the logic to that function so that, if the  
</span><br>
<span class="quotelev2">&gt;&gt; target proc is not in our job family, we update the route and  
</span><br>
<span class="quotelev2">&gt;&gt; contact info in the HNP instead of locally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This would keep all the &quot;setting_route_to_proc&quot; functionality in  
</span><br>
<span class="quotelev2">&gt;&gt; one place, instead of duplicating it in the dpm, thus making  
</span><br>
<span class="quotelev2">&gt;&gt; maintenance much easier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Make sense?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 27, 2008, at 7:22 AM, bouteill_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bouteill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2008-09-27 09:22:32 EDT (Sat, 27 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 19653
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19653">https://svn.open-mpi.org/trac/ompi/changeset/19653</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Add functions to access the opaque port_string and to add routes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a remote port. This is usefull for FT, but could also turn  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usefull when considering MPI3 extentions to the MPI2 dynamics.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/dpm/base/base.h              |     3 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/dpm/base/dpm_base_null_fns.c |    12 ++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/dpm/base/dpm_base_open.c     |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/dpm/dpm.h                    |    20 +++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/dpm/orte/dpm_orte.c          |   114 +++++++++++++++ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++++++------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5 files changed, 99 insertions(+), 52 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/dpm/base/base.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/dpm/base/base.h	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/dpm/base/base.h	2008-09-27 09:22:32 EDT (Sat,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 27 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -92,6 +92,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int ompi_dpm_base_null_dyn_finalize (void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void ompi_dpm_base_null_mark_dyncomm (ompi_communicator_t *comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int ompi_dpm_base_null_open_port(char *port_name, orte_rml_tag_t  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given_tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +int ompi_dpm_base_null_parse_port(char *port_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                  orte_process_name_t *rproc,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml_tag_t *tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +int ompi_dpm_base_null_route_to_port(char *rml_uri,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_process_name_t *rproc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int ompi_dpm_base_null_close_port(char *port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* useful globals */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/dpm/base/dpm_base_null_fns.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/dpm/base/dpm_base_null_fns.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/dpm/base/dpm_base_null_fns.c	2008-09-27  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:22:32 EDT (Sat, 27 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -36,6 +36,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void ompi_dpm_base_null_disconnect(ompi_communicator_t *comm)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -70,6 +71,17 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +int ompi_dpm_base_null_parse_port(char *port_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                  orte_process_name_t *rproc,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml_tag_t *tag)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +int ompi_dpm_base_null_route_to_port(char *rml_uri,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_process_name_t *rproc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int ompi_dpm_base_null_close_port(char *port_name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/dpm/base/dpm_base_open.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/dpm/base/dpm_base_open.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/dpm/base/dpm_base_open.c	2008-09-27 09:22:32  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 27 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -42,6 +42,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_null_dyn_finalize,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_null_mark_dyncomm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_null_open_port,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ompi_dpm_base_null_parse_port,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ompi_dpm_base_null_route_to_port,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_null_close_port,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/dpm/dpm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/dpm/dpm.h	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/dpm/dpm.h	2008-09-27 09:22:32 EDT (Sat, 27 Sep  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -58,6 +58,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_RML_TAG_DYNAMIC                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_RML_TAG_BASE+200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Initialize a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -116,6 +118,20 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef int (*ompi_dpm_base_module_open_port_fn_t)(char  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *port_name, orte_rml_tag_t tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Converts an opaque port string to a RML process nane and tag.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +typedef int (*ompi_dpm_base_module_parse_port_name_t)(char  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *port_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                                       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_process_name_t *rproc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                                       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml_tag_t *tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Update the routed component to make sure that the RML can send  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * the remote port
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +typedef int (*ompi_dpm_base_module_route_to_port_t)(char  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *rml_uri, orte_process_name_t *rproc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Close a port
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef int (*ompi_dpm_base_module_close_port_fn_t)(char  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -145,6 +161,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_module_mark_dyncomm_fn_t      mark_dyncomm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* open port */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_module_open_port_fn_t         open_port;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* parse port string */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ompi_dpm_base_module_parse_port_name_t      parse_port;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* update route to a port */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ompi_dpm_base_module_route_to_port_t        route_to_port;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* close port */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_module_close_port_fn_t        close_port;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* finalize */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/dpm/orte/dpm_orte.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/dpm/orte/dpm_orte.c	2008-09-27 09:22:32 EDT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 27 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -61,9 +61,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   opal_buffer_t *buffer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   orte_rml_tag_t tag, void *cbdata);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static void process_cb(int fd, short event, void *data);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -static int parse_port_name(char *port_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           orte_process_name_t *rproc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           orte_rml_tag_t *tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* API functions */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int init(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -78,6 +75,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                char *port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int dyn_init(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int open_port(char *port_name, orte_rml_tag_t given_tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int parse_port_name(char *port_name, orte_process_name_t  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *rproc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           orte_rml_tag_t *tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int route_to_port(char *rml_uri, orte_process_name_t  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *rproc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int close_port(char *port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int finalize(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -93,6 +93,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_dyn_finalize,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_dpm_base_mark_dyncomm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   open_port,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    parse_port_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    route_to_port,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   close_port,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -145,14 +147,17 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * set us up to communicate with it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (NULL != port_string &amp;&amp; 0 &lt; strlen(port_string)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        /* separate the string into the RML URI and tag - this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function performs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -         * whatever route initialization is required by the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; selected routed module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -         */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* separate the string into the RML URI and tag */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if (ORTE_SUCCESS != (rc = parse_port_name(port_string,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;port, &amp;tag))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* make sure we can route rml messages to the destination */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (ORTE_SUCCESS != (rc = route_to_port(port_string, &amp;port))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* tell the progress engine to tick the event library more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      often, to make sure that the OOB messages get sent */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -783,48 +788,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ORTE_MESSAGE_EVENT(sender, buffer, tag, release_ack);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -static int parse_port_name(char *port_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           orte_process_name_t *rproc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                           orte_rml_tag_t *tag)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int route_to_port(char *uri, orte_process_name_t *rproc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    char *tmpstring=NULL, *ptr, *rml_uri=NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    orte_rml_cmd_flag_t cmd = ORTE_RML_UPDATE_CMD;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    int rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_buffer_t route;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* don't mangle the port name */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    tmpstring = strdup(port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* find the ':' demarking the RML tag we added to the end */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if (NULL == (ptr = strrchr(tmpstring, ':'))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        rc = ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* terminate the port_name at that location */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *ptr = '\0';
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ptr++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* convert the RML tag */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sscanf(ptr,&quot;%d&quot;, (int*)tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* now split out the second field - the uri of the remote  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if (NULL == (ptr = strchr(tmpstring, '+'))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        rc = ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *ptr = '\0';
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ptr++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* save that info */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    rml_uri = strdup(ptr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* extract the originating proc's name */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if (ORTE_SUCCESS != (rc = orte_rml_base_parse_uris(ptr,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rproc, NULL))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    orte_rml_cmd_flag_t cmd = ORTE_RML_UPDATE_CMD;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* if this proc is part of my job family, then I need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * update my RML contact hash table and my routes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -835,14 +803,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /* set the contact info into the hash table */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml.set_contact_info(rml_uri))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (ORTE_SUCCESS != (rc =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml.set_contact_info(uri))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if (ORTE_SUCCESS != (rc = orte_routed.update_route(rproc,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rproc))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* the proc must be part of another job family. In this case, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -855,7 +823,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_dss.pack(&amp;route, &amp;cmd, 1, ORTE_RML_CMD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* pack the HNP uri */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    opal_dss.pack(&amp;route, &amp;tmpstring, 1, OPAL_STRING);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    opal_dss.pack(&amp;route, &amp;uri, 1, OPAL_STRING);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OPAL_OUTPUT_VERBOSE((3, ompi_dpm_base_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        &quot;%s dpm_parse_port: %s in diff job family -  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending update to %s&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -867,7 +835,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      ORTE_RML_TAG_RML_INFO_UPDATE,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       OBJ_DESTRUCT(&amp;route);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* wait right here until the HNP acks the update to ensure that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -886,7 +854,49 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* our get_route function automatically routes all messages for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    * other job families via the HNP, so nothing more to do here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -     */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +     */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int parse_port_name(char *port_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           orte_process_name_t *rproc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           orte_rml_tag_t *tag)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char *tmpstring=NULL, *ptr, *rml_uri=NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* don't mangle the port name */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    tmpstring = strdup(port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* find the ':' demarking the RML tag we added to the end */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (NULL == (ptr = strrchr(tmpstring, ':'))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        rc = ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* terminate the port_name at that location */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *ptr = '\0';
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ptr++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* convert the RML tag */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    sscanf(ptr,&quot;%d&quot;, (int*)tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* now split out the second field - the uri of the remote  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (NULL == (ptr = strchr(tmpstring, '+'))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        rc = ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *ptr = '\0';
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ptr++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* save that info */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    rml_uri = strdup(ptr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* extract the originating proc's name */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (ORTE_SUCCESS != (rc = orte_rml_base_parse_uris(ptr,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rproc, NULL))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   rc = ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cleanup:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4717.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>Previous message:</strong> <a href="4715.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>In reply to:</strong> <a href="4715.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4717.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<li><strong>Reply:</strong> <a href="4717.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
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
