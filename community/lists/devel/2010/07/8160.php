<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 11:02:29 2010" -->
<!-- isoreceived="20100709150229" -->
<!-- sent="Fri, 9 Jul 2010 17:02:23 +0200" -->
<!-- isosent="20100709150223" -->
<!-- name="Jerome Soumagne" -->
<!-- email="soumagne_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="4C3739FF.7080809_at_cscs.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9733FFF0-ACC7-4594-8739-22D1BD5EF48D_at_open-mpi.org" -->
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
<strong>From:</strong> Jerome Soumagne (<em>soumagne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 11:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8161.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8158.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8162.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8162.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not invented, it's a SLURM standard name. Sorry for not having said 
<br>
that, my first e-mail was really too short.
<br>
<a href="http://manpages.ubuntu.com/manpages/lucid/man1/sbatch.1.html">http://manpages.ubuntu.com/manpages/lucid/man1/sbatch.1.html</a>
<br>
<a href="http://slurm-llnl.sourcearchive.com/documentation/2.1.1/basil__interface_8c-source.html">http://slurm-llnl.sourcearchive.com/documentation/2.1.1/basil__interface_8c-source.html</a>
<br>
...
<br>
<p>google could have been your friend in this case... ;) (but I agree, 
<br>
that's really a strange name)
<br>
<p>Jerome
<br>
<p>On 07/09/2010 04:27 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; To clarify: what I'm trying to understand is what the heck a 
</span><br>
<span class="quotelev1">&gt; &quot;BASIL_RESERVATION_ID&quot; is - it isn't a standard slurm thing, nor can I 
</span><br>
<span class="quotelev1">&gt; find it defined in alps, so it appears to just be a local name you 
</span><br>
<span class="quotelev1">&gt; invented. True?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I would rather see some standard name instead of something 
</span><br>
<span class="quotelev1">&gt; local to one organization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2010, at 8:08 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok I may have not explained very clearly. In our case we only use 
</span><br>
<span class="quotelev2">&gt;&gt; SLURM for the resource manager.
</span><br>
<span class="quotelev2">&gt;&gt; The difference here is that the SLURM version that we use has support 
</span><br>
<span class="quotelev2">&gt;&gt; for ALPS. Therefore when we run our job using the mpirun command, 
</span><br>
<span class="quotelev2">&gt;&gt; since we have the alps environment loaded, it's the ALPS RAS which is 
</span><br>
<span class="quotelev2">&gt;&gt; selected, and the ALPS PLM as well. I think I could even not compile 
</span><br>
<span class="quotelev2">&gt;&gt; the OpenMPI slurm support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is what we do for example: here is my batch script (with the 
</span><br>
<span class="quotelev2">&gt;&gt; patched version)
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --job-name=HelloOMPI
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --nodes=2
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --time=00:30:00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set -ex
</span><br>
<span class="quotelev2">&gt;&gt; cd /users/soumagne/gele/hello
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca ras_base_verbose 10 --mca plm_base_verbose 10 -np 2 
</span><br>
<span class="quotelev2">&gt;&gt; --bynode `pwd`/hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And here is the output that I get:
</span><br>
<span class="quotelev2">&gt;&gt; soumagne_at_gele1:~/gele/hello&gt; more slurm-165.out
</span><br>
<span class="quotelev2">&gt;&gt; + cd /users/soumagne/gele/hello
</span><br>
<span class="quotelev2">&gt;&gt; ++ pwd
</span><br>
<span class="quotelev2">&gt;&gt; + mpirun --mca ras_base_verbose 10 --mca plm_base_verbose 10 --bynode 
</span><br>
<span class="quotelev2">&gt;&gt; -np 2 /use
</span><br>
<span class="quotelev2">&gt;&gt; rs/soumagne/gele/hello/hello
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: found loaded component alps
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component alps has no 
</span><br>
<span class="quotelev2">&gt;&gt; register functio
</span><br>
<span class="quotelev2">&gt;&gt; n
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component alps open 
</span><br>
<span class="quotelev2">&gt;&gt; function successfu
</span><br>
<span class="quotelev2">&gt;&gt; l
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component slurm has no 
</span><br>
<span class="quotelev2">&gt;&gt; register functi
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component slurm open 
</span><br>
<span class="quotelev2">&gt;&gt; function successf
</span><br>
<span class="quotelev2">&gt;&gt; ul
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  plm) Querying component [alps]
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  plm) Query of component [alps] set 
</span><br>
<span class="quotelev2">&gt;&gt; priority to
</span><br>
<span class="quotelev2">&gt;&gt; 75
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  plm) Query of component [slurm] set 
</span><br>
<span class="quotelev2">&gt;&gt; priority to
</span><br>
<span class="quotelev2">&gt;&gt;  75
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  plm) Selected component [alps]
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: close: component slurm closed
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: found loaded component cm
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component cm has no 
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component cm open function 
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: found loaded component alps
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component alps has no 
</span><br>
<span class="quotelev2">&gt;&gt; register functio
</span><br>
<span class="quotelev2">&gt;&gt; n
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component alps open 
</span><br>
<span class="quotelev2">&gt;&gt; function successfu
</span><br>
<span class="quotelev2">&gt;&gt; l
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component slurm has no 
</span><br>
<span class="quotelev2">&gt;&gt; register functi
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: components_open: component slurm open 
</span><br>
<span class="quotelev2">&gt;&gt; function successf
</span><br>
<span class="quotelev2">&gt;&gt; ul
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  ras) Querying component [cm]
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  ras) Skipping component [cm]. Query 
</span><br>
<span class="quotelev2">&gt;&gt; failed to r
</span><br>
<span class="quotelev2">&gt;&gt; eturn a module
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  ras) Querying component [alps]
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps: available for selection
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  ras) Query of component [alps] set 
</span><br>
<span class="quotelev2">&gt;&gt; priority to
</span><br>
<span class="quotelev2">&gt;&gt; 75
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  ras) Query of component [slurm] set 
</span><br>
<span class="quotelev2">&gt;&gt; priority to
</span><br>
<span class="quotelev2">&gt;&gt;  75
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca:base:select:(  ras) Selected component [alps]
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: close: unloading component cm
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:allocate: Using ALPS configuration file: 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/etc/sysconfig/
</span><br>
<span class="quotelev2">&gt;&gt; alps&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:allocate: Located ALPS scheduler file: 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/ufs/alps_shared/
</span><br>
<span class="quotelev2">&gt;&gt; appinfo&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:orte_ras_alps_get_appinfo_attempts: 10
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: added NID 16 to list
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 16
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: added NID 20 to list
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:read_appinfo: got NID 20
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] ras:alps:allocate: success
</span><br>
<span class="quotelev2">&gt;&gt; I am nid00020 process 2/2
</span><br>
<span class="quotelev2">&gt;&gt; I am nid00016 process 1/2
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: close: unloading component alps
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: close: component alps closed
</span><br>
<span class="quotelev2">&gt;&gt; [gele2:15844] mca: base: close: unloading component alps
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that in this case you would not break anything since it's 
</span><br>
<span class="quotelev2">&gt;&gt; really a basic patch which enables you to directly do an mpirun, 
</span><br>
<span class="quotelev2">&gt;&gt; without having to manually select any reservation id (assuming that 
</span><br>
<span class="quotelev2">&gt;&gt; the user has the SLURM version with ALPS support which will be 
</span><br>
<span class="quotelev2">&gt;&gt; available soon).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jerome
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/09/2010 03:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Afraid I'm now even more confused. You use SLURM to do the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation, and then use ALPS to launch the job?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm just trying to understand because I'm the person who generally 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maintains this code area. We have two frameworks involved here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. RAS - determines what nodes were allocated to us. There are both 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm and alps modules here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. PLM - actually launches the job. There are both slurm and alps 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modules here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Up until now, we have always seen people running with either alps or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm, but never both together, so the module selection of these two 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frameworks is identical - if you select slurm for the RAS module, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you will definitely get slurm for the launcher. Ditto for alps. Are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you sure that mpirun is actually using the modules you think? Have 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you run this with -mca ras_base_verbose 10 -mca plm_base_verbose 10 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and seen what modules are being used?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In any event, this seems like a very strange combination, but I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume you have some reason for doing this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm always leery of fiddling with the SLURM modules as (a) there 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aren't very many slurm users out there, (b) the primary users are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the DOE national labs themselves, using software provided by LLNL 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (who controls slurm), and (c) there are major disconnects between 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the various slurm releases, so we wind up breaking things for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone rather easily.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the more I can understand what you are doing, the easier it is to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; determine how to use your patch without breaking slurm support for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; others.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 9, 2010, at 6:46 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well we actually use a patched version of SLURM, 2.2.0-pre8. It is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; planned to submit the modifications made internally at CSCS for the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; next SLURM release in November. We implement ALPS support based on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the basic architecture of SLURM.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM is only used to do the ALPS ressource allocation. We then use 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun based on the portals and on the alps libaries.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We don't use mca parameters to direct selection and the alps RAS is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically well selected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 07/09/2010 01:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Forgive my confusion, but could you please clarify something? You 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are using ALPS as the resource manager doing the allocation, and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then using SLURM as the launcher (instead of ALPS)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That's a combination we've never seen or heard about. I suspect 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; our module selection logic would be confused by such a combination 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - are you using mca params to direct selection?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 9, 2010, at 4:19 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We've recently installed OpenMPI on one of our Cray XT5 machines, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; here at CSCS. This machine uses SLURM for launching jobs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Doing an salloc defines this environment variable:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;               BASIL_RESERVATION_ID
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;               The reservation ID on Cray systems running 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ALPS/BASIL only.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Since the alps ras module tries to find a variable called 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI_ALPS_RESID which is set using a script, we thought that for 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM systems it would be a good idea to directly integrate this 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; BASIL_RESERVATION_ID variable in the code, rather than using a 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; script. The small patch is attached.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jerome
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CSCS, Swiss National Supercomputing Centre
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;patch_slurm_alps.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
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
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CSCS, Swiss National Supercomputing Centre
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8161.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8158.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8162.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8162.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
