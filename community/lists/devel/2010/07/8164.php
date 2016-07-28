<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 12:25:00 2010" -->
<!-- isoreceived="20100709162500" -->
<!-- sent="Fri, 09 Jul 2010 12:24:54 -0400" -->
<!-- isosent="20100709162454" -->
<!-- name="Matney Sr, Kenneth D." -->
<!-- email="matneykdsr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="66518E78-FCC4-4F41-8B1C-E75E4D85E0F5_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="92D661B6-7CA2-4BEE-A33C-C154391FB411_at_open-mpi.org" -->
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
<strong>From:</strong> Matney Sr, Kenneth D. (<em>matneykdsr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 12:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8163.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8163.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8170.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8170.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>His patch only modifies the ALPS RAS mca.  And, it causes the environmental
<br>
variable BASIL_RESERVATION_ID to be a synonym for OMPI_ALPS_RESID.
<br>
It makes it convenient for the version of SLURM that they are proposing.  But,
<br>
it does not invoke any side-effects.
<br>
<pre>
--
Ken Matney, Sr.
Oak Ridge National Laboratory
On Jul 9, 2010, at 12:15 PM, Ralph Castain wrote:
Actually, this patch doesn't have anything to do with slurm according to the documentation in the links. It has to do with Cray's batch allocator system, which slurm is just interfacing to. So what you are really saying is that you want the alps ras to run if we either detect the presence of alps acting as a resource manager, or we detect that the Cray batch allocator has assigned an id.
However that latter id was assigned is irrelevant to the patch.
True?
You Cray guys out there: is this going to cause a conflict with other Cray installations?
On Jul 9, 2010, at 9:44 AM, Jerome Soumagne wrote:
another link which can be worth mentioning: <a href="https://computing.llnl.gov/linux/slurm/cray.html">https://computing.llnl.gov/linux/slurm/cray.html</a>
it says at the top of the page NOTE: As of January 2009, the SLURM interface to Cray systems is incomplete.
but what we have now on our system is something which is reasonably stable and a good part of the SLURM interface to Cray is now complete.
What we have at CSCS is a list of patches which improve and complete the interface. As I said, these modifications will be submitted for the November release of SLURM. Again, there is nothing non-standard in it.
I hope that it helps,
Jerome
On 07/09/2010 05:02 PM, Jerome Soumagne wrote:
It's not invented, it's a SLURM standard name. Sorry for not having said that, my first e-mail was really too short.
<a href="http://manpages.ubuntu.com/manpages/lucid/man1/sbatch.1.html">http://manpages.ubuntu.com/manpages/lucid/man1/sbatch.1.html</a>
<a href="http://slurm-llnl.sourcearchive.com/documentation/2.1.1/basil__interface_8c-source.html">http://slurm-llnl.sourcearchive.com/documentation/2.1.1/basil__interface_8c-source.html</a>
...
google could have been your friend in this case... ;) (but I agree, that's really a strange name)
Jerome
On 07/09/2010 04:27 PM, Ralph Castain wrote:
To clarify: what I'm trying to understand is what the heck a &quot;BASIL_RESERVATION_ID&quot; is - it isn't a standard slurm thing, nor can I find it defined in alps, so it appears to just be a local name you invented. True?
If so, I would rather see some standard name instead of something local to one organization.
On Jul 9, 2010, at 8:08 AM, Jerome Soumagne wrote:
Ok I may have not explained very clearly. In our case we only use SLURM for the resource manager.
The difference here is that the SLURM version that we use has support for ALPS. Therefore when we run our job using the mpirun command, since we have the alps environment loaded, it's the ALPS RAS which is selected, and the ALPS PLM as well. I think I could even not compile the OpenMPI slurm support.
Here is what we do for example: here is my batch script (with the patched version)
#!/bin/bash
#SBATCH --job-name=HelloOMPI
#SBATCH --nodes=2
#SBATCH --time=00:30:00
set -ex
cd /users/soumagne/gele/hello
mpirun --mca ras_base_verbose 10 --mca plm_base_verbose 10 -np 2 --bynode `pwd`/hello
And here is the output that I get:
soumagne_at_gele1:~/gele/hello&gt; more slurm-165.out
+ cd /users/soumagne/gele/hello
++ pwd
+ mpirun --mca ras_base_verbose 10 --mca plm_base_verbose 10 --bynode -np 2 /use
rs/soumagne/gele/hello/hello
[gele2:15844] mca: base: components_open: Looking for plm components
[gele2:15844] mca: base: components_open: opening plm components
[gele2:15844] mca: base: components_open: found loaded component alps
[gele2:15844] mca: base: components_open: component alps has no register functio
n
[gele2:15844] mca: base: components_open: component alps open function successfu
l
[gele2:15844] mca: base: components_open: found loaded component slurm
[gele2:15844] mca: base: components_open: component slurm has no register functi
on
[gele2:15844] mca: base: components_open: component slurm open function successf
ul
[gele2:15844] mca:base:select: Auto-selecting plm components
[gele2:15844] mca:base:select:(  plm) Querying component [alps]
[gele2:15844] mca:base:select:(  plm) Query of component [alps] set priority to
75
[gele2:15844] mca:base:select:(  plm) Querying component [slurm]
[gele2:15844] mca:base:select:(  plm) Query of component [slurm] set priority to
 75
[gele2:15844] mca:base:select:(  plm) Selected component [alps]
[gele2:15844] mca: base: close: component slurm closed
[gele2:15844] mca: base: close: unloading component slurm
[gele2:15844] mca: base: components_open: Looking for ras components
[gele2:15844] mca: base: components_open: opening ras components
[gele2:15844] mca: base: components_open: found loaded component cm
[gele2:15844] mca: base: components_open: component cm has no register function
[gele2:15844] mca: base: components_open: component cm open function successful
[gele2:15844] mca: base: components_open: found loaded component alps
[gele2:15844] mca: base: components_open: component alps has no register functio
n
[gele2:15844] mca: base: components_open: component alps open function successfu
l
[gele2:15844] mca: base: components_open: found loaded component slurm
[gele2:15844] mca: base: components_open: component slurm has no register functi
on
[gele2:15844] mca: base: components_open: component slurm open function successf
ul
[gele2:15844] mca:base:select: Auto-selecting ras components
[gele2:15844] mca:base:select:(  ras) Querying component [cm]
[gele2:15844] mca:base:select:(  ras) Skipping component [cm]. Query failed to r
eturn a module
[gele2:15844] mca:base:select:(  ras) Querying component [alps]
[gele2:15844] ras:alps: available for selection
[gele2:15844] mca:base:select:(  ras) Query of component [alps] set priority to
75
[gele2:15844] mca:base:select:(  ras) Querying component [slurm]
[gele2:15844] mca:base:select:(  ras) Query of component [slurm] set priority to
 75
[gele2:15844] mca:base:select:(  ras) Selected component [alps]
[gele2:15844] mca: base: close: unloading component cm
[gele2:15844] mca: base: close: unloading component slurm
[gele2:15844] ras:alps:allocate: Using ALPS configuration file: &quot;/etc/sysconfig/
alps&quot;
[gele2:15844] ras:alps:allocate: Located ALPS scheduler file: &quot;/ufs/alps_shared/
appinfo&quot;
[gele2:15844] ras:alps:orte_ras_alps_get_appinfo_attempts: 10
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: added NID 16 to list
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 16
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: added NID 20 to list
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:read_appinfo: got NID 20
[gele2:15844] ras:alps:allocate: success
I am nid00020 process 2/2
I am nid00016 process 1/2
[gele2:15844] mca: base: close: unloading component alps
[gele2:15844] mca: base: close: component alps closed
[gele2:15844] mca: base: close: unloading component alps
I think that in this case you would not break anything since it's really a basic patch which enables you to directly do an mpirun, without having to manually select any reservation id (assuming that the user has the SLURM version with ALPS support which will be available soon).
Jerome
On 07/09/2010 03:06 PM, Ralph Castain wrote:
Afraid I'm now even more confused. You use SLURM to do the allocation, and then use ALPS to launch the job?
I'm just trying to understand because I'm the person who generally maintains this code area. We have two frameworks involved here:
1. RAS - determines what nodes were allocated to us. There are both slurm and alps modules here.
2. PLM - actually launches the job. There are both slurm and alps modules here.
Up until now, we have always seen people running with either alps or slurm, but never both together, so the module selection of these two frameworks is identical - if you select slurm for the RAS module, you will definitely get slurm for the launcher. Ditto for alps. Are you sure that mpirun is actually using the modules you think? Have you run this with -mca ras_base_verbose 10 -mca plm_base_verbose 10 and seen what modules are being used?
In any event, this seems like a very strange combination, but I assume you have some reason for doing this?
I'm always leery of fiddling with the SLURM modules as (a) there aren't very many slurm users out there, (b) the primary users are the DOE national labs themselves, using software provided by LLNL (who controls slurm), and (c) there are major disconnects between the various slurm releases, so we wind up breaking things for someone rather easily.
So the more I can understand what you are doing, the easier it is to determine how to use your patch without breaking slurm support for others.
Thanks!
Ralph
On Jul 9, 2010, at 6:46 AM, Jerome Soumagne wrote:
Well we actually use a patched version of SLURM, 2.2.0-pre8. It is planned to submit the modifications made internally at CSCS for the next SLURM release in November. We implement ALPS support based on the basic architecture of SLURM.
SLURM is only used to do the ALPS ressource allocation. We then use mpirun based on the portals and on the alps libaries.
We don't use mca parameters to direct selection and the alps RAS is automatically well selected.
On 07/09/2010 01:59 PM, Ralph Castain wrote:
Forgive my confusion, but could you please clarify something? You are using ALPS as the resource manager doing the allocation, and then using SLURM as the launcher (instead of ALPS)?
That's a combination we've never seen or heard about. I suspect our module selection logic would be confused by such a combination - are you using mca params to direct selection?
On Jul 9, 2010, at 4:19 AM, Jerome Soumagne wrote:
Hi,
We've recently installed OpenMPI on one of our Cray XT5 machines, here at CSCS. This machine uses SLURM for launching jobs.
Doing an salloc defines this environment variable:
              BASIL_RESERVATION_ID
              The reservation ID on Cray systems running ALPS/BASIL only.
Since the alps ras module tries to find a variable called OMPI_ALPS_RESID which is set using a script, we thought that for SLURM systems it would be a good idea to directly integrate this BASIL_RESERVATION_ID variable in the code, rather than using a script. The small patch is attached.
Regards,
Jerome
--
J&#233;r&#244;me Soumagne
Scientific Computing Research Group
CSCS, Swiss National Supercomputing Centre
Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
&lt;patch_slurm_alps.txt&gt;_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
J&#233;r&#244;me Soumagne
Scientific Computing Research Group
CSCS, Swiss National Supercomputing Centre
Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&lt;ATT00001..txt&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8163.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8163.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8170.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8170.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
