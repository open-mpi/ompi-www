<?
$subject_val = "Re: [OMPI devel] Totalview broken with 1.5/trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 20:53:17 2011" -->
<!-- isoreceived="20111215015317" -->
<!-- sent="Wed, 14 Dec 2011 18:53:08 -0700" -->
<!-- isosent="20111215015308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Totalview broken with 1.5/trunk" -->
<!-- id="414AC559-5432-4382-92E6-86AAB5FC489A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3FEF7A70-C76B-433B-84D1-096CA2922F32_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Totalview broken with 1.5/trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 20:53:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10128.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>Previous message:</strong> <a href="10126.php">George Bosilca: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>In reply to:</strong> <a href="10125.php">George Bosilca: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 14, 2011, at 6:44 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; A comment in the commit suggest that the symbols were not linked  into the orterun if they were not accessed there. I guess this was the trick to make sure MPIR_Breakpoint is in there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that you pointed me to this commit I have to disagree with. Why the MPI debugging symbols have been deleted in favor of using the one on ORTE?
</span><br>
<p>IIRC, there was some issue with getting debuggers attached to running jobs? Been too long. Someone is welcome to play with it again - it was a royal pita to get working. I have no bone in this fight, and no time to go thru that mess again. :-)
<br>
<p><span class="quotelev1">&gt; Why the ompi header files contains declarations starting with ORTE_DECLSPEC?
</span><br>
<p>Obviously a typo - should be OMPI_DECLSPEC
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2011, at 20:24 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looks like that line came over in <a href="https://svn.open-mpi.org/trac/ompi/changeset/24561">https://svn.open-mpi.org/trac/ompi/changeset/24561</a>, which was bringing over the debugger ORTE framework from the trunk (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2688">https://svn.open-mpi.org/trac/ompi/ticket/2688</a>).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph -- do you remember why that line is there?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 14, 2011, at 7:21 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There still seems to be an issue with using mpirun --debug with totalview. For some reason totalview is not breaking on MPIR_Breakpoint. Removing the foo = MPIR_Breakpoint line from orterun.c fixes this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any reason I shouldn't remove that line? Any other debuggers that might break?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
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
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="10128.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>Previous message:</strong> <a href="10126.php">George Bosilca: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>In reply to:</strong> <a href="10125.php">George Bosilca: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
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
