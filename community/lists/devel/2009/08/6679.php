<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 10:01:39 2009" -->
<!-- isoreceived="20090819140139" -->
<!-- sent="Wed, 19 Aug 2009 10:02:10 -0400" -->
<!-- isosent="20090819140210" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834" -->
<!-- id="200908191002.10581.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EBCB8BB3-E1F7-467E-821D-89F187E5A4EB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 10:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6680.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6678.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>In reply to:</strong> <a href="6678.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>Reply:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
On Wednesday 19 August 2009 09:31:42 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Can you update the top-level README as appropriate, too?  There's a
</span><br>
<span class="quotelev1">&gt; section about ob1 vs. cm priority, etc.
</span><br>
Err, I'd be happy to update, but there is no need, as it is the perfectly same 
<br>
behavior, just now the prioity reported in ompi_info are actually valid ,-)
<br>
<p>Maybe I am missing something?
<br>
<p>Thanks,
<br>
Rainer
<br>
<p>PS: from README:
<br>
---------------------------------------------------------------------
<br>
&nbsp;&nbsp;Open MPI will, by default, choose to use &quot;cm&quot; when the InfiniPath
<br>
&nbsp;&nbsp;PSM MTL can be used.  Otherwise, OB1 will be used and the
<br>
&nbsp;&nbsp;corresponding BTLs will be selected.  Users can force the use of ob1
<br>
&nbsp;&nbsp;or cm if desired by setting the &quot;pml&quot; MCA parameter at run-time:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml ob1 ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml cm ...
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6680.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6678.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>In reply to:</strong> <a href="6678.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>Reply:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
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
