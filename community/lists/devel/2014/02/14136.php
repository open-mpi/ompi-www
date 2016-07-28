<?
$subject_val = "Re: [OMPI devel] 1.7.5 status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 02:09:46 2014" -->
<!-- isoreceived="20140213070946" -->
<!-- sent="Thu, 13 Feb 2014 08:09:34 +0100" -->
<!-- isosent="20140213070934" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 status" -->
<!-- id="52FC6FAE.4010009_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="41542F3D-D0B3-4D37-ADEF-91943E466794_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 status<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 02:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14137.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Previous message:</strong> <a href="14135.php">Mike Dubman: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="14107.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14139.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Reply:</strong> <a href="14139.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/02/2014 04:18, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Things are looking relatively good - I see two recurring failures:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. idx_null - no idea what that test does, but it routinely fails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. intercomm_create - this is the 3-way connect/accept/merge. Nathan - I believe you had a fix for that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>openmpi-1.7.5a1r30692-1 builds fine con cygwin64
<br>
only failure the already know
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4195">https://svn.open-mpi.org/trac/ompi/ticket/4195</a>
<br>
<p><p>Attached patch equivalent to what is already on trunk for ohsmem
<br>
<p>Regards
<br>
Marco
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14136/openmpi-1.7.5a1r30692.patch">openmpi-1.7.5a1r30692.patch</a>
</ul>
<!-- attachment="openmpi-1.7.5a1r30692.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14137.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Previous message:</strong> <a href="14135.php">Mike Dubman: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="14107.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14139.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Reply:</strong> <a href="14139.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 status"</a>
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
