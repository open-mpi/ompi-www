<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 10:30:17 2010" -->
<!-- isoreceived="20100709143017" -->
<!-- sent="Fri, 9 Jul 2010 08:24:31 -0600" -->
<!-- isosent="20100709142431" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="B1FFEA7B-9B00-4A77-9793-528E57642688_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C372D6C.1040205_at_cscs.ch" -->
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
<strong>Subject:</strong> Re: [OMPI devel] alps ras patch for SLURM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 10:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8160.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8158.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8156.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8161.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Appreciate your explanation, but it doesn't align with your patch. Your patch doesn't do anything because it patches the slurm ras module, but the system is selecting the alps ras module - so your patch never runs.
<br>
<p>What am I missing?
<br>
<p>On Jul 9, 2010, at 8:08 AM, Jerome Soumagne wrote:
<br>
<p><span class="quotelev1">&gt; Ok I may have not explained very clearly. In our case we only use SLURM for the resource manager.
</span><br>
<span class="quotelev1">&gt; The difference here is that the SLURM version that we use has support for ALPS. Therefore when we run our job using the mpirun command, since we have the alps environment loaded, it's the ALPS RAS which is selected, and the ALPS PLM as well. I think I could even not compile the OpenMPI slurm support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what we do for example: here is my batch script (with the patched version) 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #SBATCH --job-name=HelloOMPI 
</span><br>
<span class="quotelev1">&gt; #SBATCH --nodes=2
</span><br>
<span class="quotelev1">&gt; #SBATCH --time=00:30:00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; set -ex
</span><br>
<span class="quotelev1">&gt; cd /users/soumagne/gele/hello
</span><br>
<span class="quotelev1">&gt; mpirun --mca ras_base_verbose 10 --mca plm_base_verbose 10 -np 2 --bynode `pwd`/hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here is the output that I get:
</span><br>
<span class="quotelev1">&gt; soumagne_at_gele1:~/gele/hello&gt; more slurm-165.out 
</span><br>
<span class="quotelev1">&gt; + cd /users/soumagne/gele/hello
</span><br>
<span class="quotelev1">&gt; ++ pwd
</span><br>
<span class="quotelev1">&gt; + mpirun --mca ras_base_verbose 10 --mca plm_base_verbose 10 --bynode -np 2 /use
</span><br>
<span class="quotelev1">&gt; rs/soumagne/gele/hello/hello
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: found loaded component alps
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component alps has no register functio
</span><br>
<span class="quotelev1">&gt; n
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component alps open function successfu
</span><br>
<span class="quotelev1">&gt; l
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component slurm has no register functi
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component slurm open function successf
</span><br>
<span class="quotelev1">&gt; ul
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  plm) Querying component [alps]
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  plm) Query of component [alps] set priority to 
</span><br>
<span class="quotelev1">&gt; 75
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  plm) Query of component [slurm] set priority to
</span><br>
<span class="quotelev1">&gt;  75
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  plm) Selected component [alps]
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: found loaded component cm
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component cm has no register function
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component cm open function successful
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: found loaded component alps
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component alps has no register functio
</span><br>
<span class="quotelev1">&gt; n
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component alps open function successfu
</span><br>
<span class="quotelev1">&gt; l
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component slurm has no register functi
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: components_open: component slurm open function successf
</span><br>
<span class="quotelev1">&gt; ul
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  ras) Querying component [cm]
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  ras) Skipping component [cm]. Query failed to r
</span><br>
<span class="quotelev1">&gt; eturn a module
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  ras) Querying component [alps]
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps: available for selection
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  ras) Query of component [alps] set priority to 
</span><br>
<span class="quotelev1">&gt; 75
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  ras) Query of component [slurm] set priority to
</span><br>
<span class="quotelev1">&gt;  75
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca:base:select:(  ras) Selected component [alps]
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: close: unloading component cm
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:allocate: Using ALPS configuration file: &quot;/etc/sysconfig/
</span><br>
<span class="quotelev1">&gt; alps&quot;
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:allocate: Located ALPS scheduler file: &quot;/ufs/alps_shared/
</span><br>
<span class="quotelev1">&gt; appinfo&quot;
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:orte_ras_alps_get_appinfo_attempts: 10
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: added NID 16 to list
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: added NID 20 to list
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev1">&gt; [gele2:15844] ras:alps:allocate: success
</span><br>
<span class="quotelev1">&gt; I am nid00020 process 2/2
</span><br>
<span class="quotelev1">&gt; I am nid00016 process 1/2
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: close: unloading component alps
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: close: component alps closed
</span><br>
<span class="quotelev1">&gt; [gele2:15844] mca: base: close: unloading component alps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that in this case you would not break anything since it's really a basic patch which enables you to directly do an mpirun, without having to manually select any reservation id (assuming that the user has the SLURM version with ALPS support which will be available soon).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/09/2010 03:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Afraid I'm now even more confused. You use SLURM to do the allocation, and then use ALPS to launch the job?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm just trying to understand because I'm the person who generally maintains this code area. We have two frameworks involved here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. RAS - determines what nodes were allocated to us. There are both slurm and alps modules here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. PLM - actually launches the job. There are both slurm and alps modules here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Up until now, we have always seen people running with either alps or slurm, but never both together, so the module selection of these two frameworks is identical - if you select slurm for the RAS module, you will definitely get slurm for the launcher. Ditto for alps. Are you sure that mpirun is actually using the modules you think? Have you run this with -mca ras_base_verbose 10 -mca plm_base_verbose 10 and seen what modules are being used?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In any event, this seems like a very strange combination, but I assume you have some reason for doing this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm always leery of fiddling with the SLURM modules as (a) there aren't very many slurm users out there, (b) the primary users are the DOE national labs themselves, using software provided by LLNL (who controls slurm), and (c) there are major disconnects between the various slurm releases, so we wind up breaking things for someone rather easily.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So the more I can understand what you are doing, the easier it is to determine how to use your patch without breaking slurm support for others.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 9, 2010, at 6:46 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well we actually use a patched version of SLURM, 2.2.0-pre8. It is planned to submit the modifications made internally at CSCS for the next SLURM release in November. We implement ALPS support based on the basic architecture of SLURM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM is only used to do the ALPS ressource allocation. We then use mpirun based on the portals and on the alps libaries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We don't use mca parameters to direct selection and the alps RAS is automatically well selected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 07/09/2010 01:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Forgive my confusion, but could you please clarify something? You are using ALPS as the resource manager doing the allocation, and then using SLURM as the launcher (instead of ALPS)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's a combination we've never seen or heard about. I suspect our module selection logic would be confused by such a combination - are you using mca params to direct selection?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 9, 2010, at 4:19 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We've recently installed OpenMPI on one of our Cray XT5 machines, here at CSCS. This machine uses SLURM for launching jobs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Doing an salloc defines this environment variable:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               BASIL_RESERVATION_ID
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               The reservation ID on Cray systems running ALPS/BASIL only.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since the alps ras module tries to find a variable called OMPI_ALPS_RESID which is set using a script, we thought that for SLURM systems it would be a good idea to directly integrate this BASIL_RESERVATION_ID variable in the code, rather than using a script. The small patch is attached.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jerome
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CSCS, Swiss National Supercomputing Centre 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;patch_slurm_alps.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CSCS, Swiss National Supercomputing Centre 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8160.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8158.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8156.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8161.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
