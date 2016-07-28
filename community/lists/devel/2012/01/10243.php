<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 21 21:26:08 2012" -->
<!-- isoreceived="20120122022608" -->
<!-- sent="Sat, 21 Jan 2012 21:26:02 -0500" -->
<!-- isosent="20120122022602" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762" -->
<!-- id="DAC1CD04-8371-43BB-A01B-4217F1363A7D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201201212348.q0LNmhts007717_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2012-01-21 21:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>Previous message:</strong> <a href="10242.php">Kenneth Lloyd: "[OMPI devel] OpenMPI 1.5.x and MPI 2.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>Reply:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about instead of all the patches (r25758, r25762 and r25763) we just set both LD_LIBRARY_PATH and DYLD_LIBRARY_PATH everywhere? One will get ignored on Unix while the other on Darwin?
<br>
<p>Another benefit will be to have a significantly cleaner...
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jan 21, 2012, at 18:48 , rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2012-01-21 18:48:42 EST (Sat, 21 Jan 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 25762
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25762">https://svn.open-mpi.org/trac/ompi/changeset/25762</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Expand the coverage a little when looking at remote shells for rsh. Prior patch (r25758) works only if both ends of the rsh/ssh connection are Mac. What we really want is to use the Mac version of ld_library_path when the remote end is Mac, regardless of the OS where mpirun is executing. So add a test for system type to the remote_shell test, and set the ld_library_path name to match the remote system type.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>Previous message:</strong> <a href="10242.php">Kenneth Lloyd: "[OMPI devel] OpenMPI 1.5.x and MPI 2.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>Reply:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
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
