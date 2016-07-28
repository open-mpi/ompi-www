<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 21 23:33:16 2012" -->
<!-- isoreceived="20120122043316" -->
<!-- sent="Sat, 21 Jan 2012 21:33:06 -0700" -->
<!-- isosent="20120122043306" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762" -->
<!-- id="176CA691-C8CD-4B99-BC02-3A322A5E1D0A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DAC1CD04-8371-43BB-A01B-4217F1363A7D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-21 23:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10245.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10243.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>In reply to:</strong> <a href="10243.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10247.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>Reply:</strong> <a href="10247.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We could - but the cmd line is already quite long, and that would make it worse. &lt;shrug&gt; Doesn't strike me as all that complicated.
<br>
<p>On Jan 21, 2012, at 7:26 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; How about instead of all the patches (r25758, r25762 and r25763) we just set both LD_LIBRARY_PATH and DYLD_LIBRARY_PATH everywhere? One will get ignored on Unix while the other on Darwin?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another benefit will be to have a significantly cleaner...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2012, at 18:48 , rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-01-21 18:48:42 EST (Sat, 21 Jan 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25762
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25762">https://svn.open-mpi.org/trac/ompi/changeset/25762</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Expand the coverage a little when looking at remote shells for rsh. Prior patch (r25758) works only if both ends of the rsh/ssh connection are Mac. What we really want is to use the Mac version of ld_library_path when the remote end is Mac, regardless of the OS where mpirun is executing. So add a test for system type to the remote_shell test, and set the ld_library_path name to match the remote system type.
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
<li><strong>Next message:</strong> <a href="10245.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10243.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>In reply to:</strong> <a href="10243.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10247.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>Reply:</strong> <a href="10247.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
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
