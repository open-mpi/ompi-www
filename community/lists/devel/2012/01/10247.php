<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 23 15:36:55 2012" -->
<!-- isoreceived="20120123203655" -->
<!-- sent="Mon, 23 Jan 2012 15:07:58 -0500" -->
<!-- isosent="20120123200758" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762" -->
<!-- id="3E1F005E-6533-4683-A4DB-4449896412CE_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="176CA691-C8CD-4B99-BC02-3A322A5E1D0A_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-23 15:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Previous message:</strong> <a href="10246.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.5.x and MPI 2.2"</a>
<li><strong>In reply to:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 21, 2012, at 23:33 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We could - but the cmd line is already quite long, and that would make it worse.
</span><br>
<p>We have up to 16k on most ssh-aware OSes (32k on most of the Linux), so today we're still a light-year away from that. The extra 40 chars (&quot;export DYLD_LIBRARY_PATH=LD_LIBRARY_PATH&quot;) will certainly take us closer to the limit, but not by a significant amount.
<br>
<p>Moreover, the solution I proposed will work in any cases, without having to have prior knowledge about the peer (aka ping the remote host with a uname command).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; &lt;shrug&gt; Doesn't strike me as all that complicated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2012, at 7:26 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How about instead of all the patches (r25758, r25762 and r25763) we just set both LD_LIBRARY_PATH and DYLD_LIBRARY_PATH everywhere? One will get ignored on Unix while the other on Darwin?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another benefit will be to have a significantly cleaner...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 21, 2012, at 18:48 , rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2012-01-21 18:48:42 EST (Sat, 21 Jan 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 25762
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25762">https://svn.open-mpi.org/trac/ompi/changeset/25762</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Expand the coverage a little when looking at remote shells for rsh. Prior patch (r25758) works only if both ends of the rsh/ssh connection are Mac. What we really want is to use the Mac version of ld_library_path when the remote end is Mac, regardless of the OS where mpirun is executing. So add a test for system type to the remote_shell test, and set the ld_library_path name to match the remote system type.
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
<li><strong>Next message:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>Previous message:</strong> <a href="10246.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.5.x and MPI 2.2"</a>
<li><strong>In reply to:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
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
