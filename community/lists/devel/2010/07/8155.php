<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 09:06:24 2010" -->
<!-- isoreceived="20100709130624" -->
<!-- sent="Fri, 9 Jul 2010 07:06:12 -0600" -->
<!-- isosent="20100709130612" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="4C227A4D-DC14-4DA1-A135-F13A8B4F560F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C371A2A.6090408_at_cscs.ch" -->
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
<strong>Date:</strong> 2010-07-09 09:06:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8156.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8154.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8154.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8156.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8156.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I'm now even more confused. You use SLURM to do the allocation, and then use ALPS to launch the job?
<br>
<p>I'm just trying to understand because I'm the person who generally maintains this code area. We have two frameworks involved here:
<br>
<p>1. RAS - determines what nodes were allocated to us. There are both slurm and alps modules here.
<br>
<p>2. PLM - actually launches the job. There are both slurm and alps modules here.
<br>
<p>Up until now, we have always seen people running with either alps or slurm, but never both together, so the module selection of these two frameworks is identical - if you select slurm for the RAS module, you will definitely get slurm for the launcher. Ditto for alps. Are you sure that mpirun is actually using the modules you think? Have you run this with -mca ras_base_verbose 10 -mca plm_base_verbose 10 and seen what modules are being used?
<br>
<p>In any event, this seems like a very strange combination, but I assume you have some reason for doing this?
<br>
<p>I'm always leery of fiddling with the SLURM modules as (a) there aren't very many slurm users out there, (b) the primary users are the DOE national labs themselves, using software provided by LLNL (who controls slurm), and (c) there are major disconnects between the various slurm releases, so we wind up breaking things for someone rather easily.
<br>
<p>So the more I can understand what you are doing, the easier it is to determine how to use your patch without breaking slurm support for others.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><p>On Jul 9, 2010, at 6:46 AM, Jerome Soumagne wrote:
<br>
<p><span class="quotelev1">&gt; Well we actually use a patched version of SLURM, 2.2.0-pre8. It is planned to submit the modifications made internally at CSCS for the next SLURM release in November. We implement ALPS support based on the basic architecture of SLURM.
</span><br>
<span class="quotelev1">&gt; SLURM is only used to do the ALPS ressource allocation. We then use mpirun based on the portals and on the alps libaries.
</span><br>
<span class="quotelev1">&gt; We don't use mca parameters to direct selection and the alps RAS is automatically well selected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/09/2010 01:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Forgive my confusion, but could you please clarify something? You are using ALPS as the resource manager doing the allocation, and then using SLURM as the launcher (instead of ALPS)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's a combination we've never seen or heard about. I suspect our module selection logic would be confused by such a combination - are you using mca params to direct selection?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 9, 2010, at 4:19 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've recently installed OpenMPI on one of our Cray XT5 machines, here at CSCS. This machine uses SLURM for launching jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doing an salloc defines this environment variable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               BASIL_RESERVATION_ID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               The reservation ID on Cray systems running ALPS/BASIL only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since the alps ras module tries to find a variable called OMPI_ALPS_RESID which is set using a script, we thought that for SLURM systems it would be a good idea to directly integrate this BASIL_RESERVATION_ID variable in the code, rather than using a script. The small patch is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jerome
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
<span class="quotelev3">&gt;&gt;&gt; &lt;patch_slurm_alps.txt&gt;_______________________________________________
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev1">&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev1">&gt; CSCS, Swiss National Supercomputing Centre 
</span><br>
<span class="quotelev1">&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev1">&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8156.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8154.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8154.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8156.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8156.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
