<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 10:08:57 2010" -->
<!-- isoreceived="20100709140857" -->
<!-- sent="Fri, 9 Jul 2010 16:08:44 +0200" -->
<!-- isosent="20100709140844" -->
<!-- name="Jerome Soumagne" -->
<!-- email="soumagne_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="4C372D6C.1040205_at_cscs.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C227A4D-DC14-4DA1-A135-F13A8B4F560F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-07-09 10:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8157.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8155.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8155.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8157.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8157.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8158.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok I may have not explained very clearly. In our case we only use SLURM 
<br>
for the resource manager.
<br>
The difference here is that the SLURM version that we use has support 
<br>
for ALPS. Therefore when we run our job using the mpirun command, since 
<br>
we have the alps environment loaded, it's the ALPS RAS which is 
<br>
selected, and the ALPS PLM as well. I think I could even not compile the 
<br>
OpenMPI slurm support.
<br>
<p>Here is what we do for example: here is my batch script (with the 
<br>
patched version)
<br>
#!/bin/bash
<br>
#SBATCH --job-name=HelloOMPI
<br>
#SBATCH --nodes=2
<br>
#SBATCH --time=00:30:00
<br>
<p>set -ex
<br>
cd /users/soumagne/gele/hello
<br>
mpirun --mca ras_base_verbose 10 --mca plm_base_verbose 10 -np 2 
<br>
--bynode `pwd`/hello
<br>
<p>And here is the output that I get:
<br>
soumagne_at_gele1:~/gele/hello&gt; more slurm-165.out
<br>
+ cd /users/soumagne/gele/hello
<br>
++ pwd
<br>
+ mpirun --mca ras_base_verbose 10 --mca plm_base_verbose 10 --bynode 
<br>
-np 2 /use
<br>
rs/soumagne/gele/hello/hello
<br>
[gele2:15844] mca: base: components_open: Looking for plm components
<br>
[gele2:15844] mca: base: components_open: opening plm components
<br>
[gele2:15844] mca: base: components_open: found loaded component alps
<br>
[gele2:15844] mca: base: components_open: component alps has no register 
<br>
functio
<br>
n
<br>
[gele2:15844] mca: base: components_open: component alps open function 
<br>
successfu
<br>
l
<br>
[gele2:15844] mca: base: components_open: found loaded component slurm
<br>
[gele2:15844] mca: base: components_open: component slurm has no 
<br>
register functi
<br>
on
<br>
[gele2:15844] mca: base: components_open: component slurm open function 
<br>
successf
<br>
ul
<br>
[gele2:15844] mca:base:select: Auto-selecting plm components
<br>
[gele2:15844] mca:base:select:(  plm) Querying component [alps]
<br>
[gele2:15844] mca:base:select:(  plm) Query of component [alps] set 
<br>
priority to
<br>
75
<br>
[gele2:15844] mca:base:select:(  plm) Querying component [slurm]
<br>
[gele2:15844] mca:base:select:(  plm) Query of component [slurm] set 
<br>
priority to
<br>
&nbsp;&nbsp;75
<br>
[gele2:15844] mca:base:select:(  plm) Selected component [alps]
<br>
[gele2:15844] mca: base: close: component slurm closed
<br>
[gele2:15844] mca: base: close: unloading component slurm
<br>
[gele2:15844] mca: base: components_open: Looking for ras components
<br>
[gele2:15844] mca: base: components_open: opening ras components
<br>
[gele2:15844] mca: base: components_open: found loaded component cm
<br>
[gele2:15844] mca: base: components_open: component cm has no register 
<br>
function
<br>
[gele2:15844] mca: base: components_open: component cm open function 
<br>
successful
<br>
[gele2:15844] mca: base: components_open: found loaded component alps
<br>
[gele2:15844] mca: base: components_open: component alps has no register 
<br>
functio
<br>
n
<br>
[gele2:15844] mca: base: components_open: component alps open function 
<br>
successfu
<br>
l
<br>
[gele2:15844] mca: base: components_open: found loaded component slurm
<br>
[gele2:15844] mca: base: components_open: component slurm has no 
<br>
register functi
<br>
on
<br>
[gele2:15844] mca: base: components_open: component slurm open function 
<br>
successf
<br>
ul
<br>
[gele2:15844] mca:base:select: Auto-selecting ras components
<br>
[gele2:15844] mca:base:select:(  ras) Querying component [cm]
<br>
[gele2:15844] mca:base:select:(  ras) Skipping component [cm]. Query 
<br>
failed to r
<br>
eturn a module
<br>
[gele2:15844] mca:base:select:(  ras) Querying component [alps]
<br>
[gele2:15844] ras:alps: available for selection
<br>
[gele2:15844] mca:base:select:(  ras) Query of component [alps] set 
<br>
priority to
<br>
75
<br>
[gele2:15844] mca:base:select:(  ras) Querying component [slurm]
<br>
[gele2:15844] mca:base:select:(  ras) Query of component [slurm] set 
<br>
priority to
<br>
&nbsp;&nbsp;75
<br>
[gele2:15844] mca:base:select:(  ras) Selected component [alps]
<br>
[gele2:15844] mca: base: close: unloading component cm
<br>
[gele2:15844] mca: base: close: unloading component slurm
<br>
[gele2:15844] ras:alps:allocate: Using ALPS configuration file: 
<br>
&quot;/etc/sysconfig/
<br>
alps&quot;
<br>
[gele2:15844] ras:alps:allocate: Located ALPS scheduler file: 
<br>
&quot;/ufs/alps_shared/
<br>
appinfo&quot;
<br>
[gele2:15844] ras:alps:orte_ras_alps_get_appinfo_attempts: 10
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: added NID 16 to list
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 16
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: added NID 20 to list
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:read_appinfo: got NID 20
<br>
[gele2:15844] ras:alps:allocate: success
<br>
I am nid00020 process 2/2
<br>
I am nid00016 process 1/2
<br>
[gele2:15844] mca: base: close: unloading component alps
<br>
[gele2:15844] mca: base: close: component alps closed
<br>
[gele2:15844] mca: base: close: unloading component alps
<br>
<p>I think that in this case you would not break anything since it's really 
<br>
a basic patch which enables you to directly do an mpirun, without having 
<br>
to manually select any reservation id (assuming that the user has the 
<br>
SLURM version with ALPS support which will be available soon).
<br>
<p>Jerome
<br>
<p>On 07/09/2010 03:06 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Afraid I'm now even more confused. You use SLURM to do the allocation, 
</span><br>
<span class="quotelev1">&gt; and then use ALPS to launch the job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm just trying to understand because I'm the person who generally 
</span><br>
<span class="quotelev1">&gt; maintains this code area. We have two frameworks involved here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. RAS - determines what nodes were allocated to us. There are both 
</span><br>
<span class="quotelev1">&gt; slurm and alps modules here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. PLM - actually launches the job. There are both slurm and alps 
</span><br>
<span class="quotelev1">&gt; modules here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Up until now, we have always seen people running with either alps or 
</span><br>
<span class="quotelev1">&gt; slurm, but never both together, so the module selection of these two 
</span><br>
<span class="quotelev1">&gt; frameworks is identical - if you select slurm for the RAS module, you 
</span><br>
<span class="quotelev1">&gt; will definitely get slurm for the launcher. Ditto for alps. Are you 
</span><br>
<span class="quotelev1">&gt; sure that mpirun is actually using the modules you think? Have you run 
</span><br>
<span class="quotelev1">&gt; this with -mca ras_base_verbose 10 -mca plm_base_verbose 10 and seen 
</span><br>
<span class="quotelev1">&gt; what modules are being used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any event, this seems like a very strange combination, but I assume 
</span><br>
<span class="quotelev1">&gt; you have some reason for doing this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm always leery of fiddling with the SLURM modules as (a) there 
</span><br>
<span class="quotelev1">&gt; aren't very many slurm users out there, (b) the primary users are the 
</span><br>
<span class="quotelev1">&gt; DOE national labs themselves, using software provided by LLNL (who 
</span><br>
<span class="quotelev1">&gt; controls slurm), and (c) there are major disconnects between the 
</span><br>
<span class="quotelev1">&gt; various slurm releases, so we wind up breaking things for someone 
</span><br>
<span class="quotelev1">&gt; rather easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the more I can understand what you are doing, the easier it is to 
</span><br>
<span class="quotelev1">&gt; determine how to use your patch without breaking slurm support for others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2010, at 6:46 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well we actually use a patched version of SLURM, 2.2.0-pre8. It is 
</span><br>
<span class="quotelev2">&gt;&gt; planned to submit the modifications made internally at CSCS for the 
</span><br>
<span class="quotelev2">&gt;&gt; next SLURM release in November. We implement ALPS support based on 
</span><br>
<span class="quotelev2">&gt;&gt; the basic architecture of SLURM.
</span><br>
<span class="quotelev2">&gt;&gt; SLURM is only used to do the ALPS ressource allocation. We then use 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun based on the portals and on the alps libaries.
</span><br>
<span class="quotelev2">&gt;&gt; We don't use mca parameters to direct selection and the alps RAS is 
</span><br>
<span class="quotelev2">&gt;&gt; automatically well selected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/09/2010 01:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Forgive my confusion, but could you please clarify something? You 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are using ALPS as the resource manager doing the allocation, and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then using SLURM as the launcher (instead of ALPS)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's a combination we've never seen or heard about. I suspect our 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module selection logic would be confused by such a combination - are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you using mca params to direct selection?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 9, 2010, at 4:19 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We've recently installed OpenMPI on one of our Cray XT5 machines, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here at CSCS. This machine uses SLURM for launching jobs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doing an salloc defines this environment variable:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               BASIL_RESERVATION_ID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               The reservation ID on Cray systems running ALPS/BASIL 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since the alps ras module tries to find a variable called 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_ALPS_RESID which is set using a script, we thought that for 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM systems it would be a good idea to directly integrate this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BASIL_RESERVATION_ID variable in the code, rather than using a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; script. The small patch is attached.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jerome
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
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;patch_slurm_alps.txt&gt;_______________________________________________
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev2">&gt;&gt; CSCS, Swiss National Supercomputing Centre
</span><br>
<span class="quotelev2">&gt;&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev2">&gt;&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8157.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8155.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8155.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8157.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8157.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8158.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
