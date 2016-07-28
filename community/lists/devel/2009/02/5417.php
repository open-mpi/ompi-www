<?
$subject_val = "Re: [OMPI devel] svn commit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 15:54:36 2009" -->
<!-- isoreceived="20090213205436" -->
<!-- sent="Fri, 13 Feb 2009 12:53:40 -0800" -->
<!-- isosent="20090213205340" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] svn commit" -->
<!-- id="4995DDD4.5000905_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8097B537-A586-4D91-BAF7-8DA4F6E9088E_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] svn commit<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 15:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5418.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>Previous message:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>In reply to:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5418.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>Reply:</strong> <a href="5418.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Once you have them in the hg repo, you can do an &quot;svn st&quot; to see if  
</span><br>
<span class="quotelev1">&gt; you need to do anything further before committing back to the svn 
</span><br>
<span class="quotelev1">&gt; repo  - e.g., add or remove files. When you are ready, just do an &quot;svn 
</span><br>
<span class="quotelev1">&gt; ci&quot;  to commit your changes to the svn repo.
</span><br>
<p>Thanks, but I get:
<br>
<p>Authentication realm: &lt;<a href="https://svn.open-mpi.org:443">https://svn.open-mpi.org:443</a>&gt; Open MPI Subversion 
<br>
repositories access
<br>
Password for 'eloh':
<br>
Authentication realm: &lt;<a href="https://svn.open-mpi.org:443">https://svn.open-mpi.org:443</a>&gt; Open MPI Subversion 
<br>
repositories access
<br>
Username: eloh
<br>
Password for 'eloh':
<br>
Authentication realm: &lt;<a href="https://svn.open-mpi.org:443">https://svn.open-mpi.org:443</a>&gt; Open MPI Subversion 
<br>
repositories access
<br>
Username: eloh
<br>
Password for 'eloh':
<br>
svn: Commit failed (details follow):
<br>
svn: CHECKOUT of 
<br>
'/svn/ompi/!svn/ver/20515/trunk/ompi/mca/btl/sm/btl_sm.c': authorization 
<br>
failed (<a href="https://svn.open-mpi.org">https://svn.open-mpi.org</a>)
<br>
svn: Your commit message was left in a temporary file:
<br>
svn:    '/nfs/rontok/xraid/users/eloh/hg/sm_latency/svn-commit.tmp'
<br>
[eloh_at_milliways sm_latency]$
<br>
<p>Do I need some other authorization for a trunk putback?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5418.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>Previous message:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>In reply to:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5418.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>Reply:</strong> <a href="5418.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
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
