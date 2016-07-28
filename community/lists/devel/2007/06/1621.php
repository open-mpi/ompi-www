<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 07:02:17 2007" -->
<!-- isoreceived="20070606110217" -->
<!-- sent="Wed, 6 Jun 2007 16:32:13 +0530" -->
<!-- isosent="20070606110213" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jnysal-openib-wireup branch" -->
<!-- id="5d5f7eba0706060402p74bcafc4t85ffd54d3394b9a3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5B1FBDB0-936E-40E3-872F-6ADDDCFD376C_at_cisco.com" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 07:02:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1622.php">Jeff Squyres: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Previous message:</strong> <a href="1620.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1576.php">Jeff Squyres: "[OMPI devel] jnysal-openib-wireup branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1622.php">Jeff Squyres: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Reply:</strong> <a href="1622.php">Jeff Squyres: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; 1. The logic for if_exclude was not correct.  I committed a fix for
</span><br>
<span class="quotelev1">&gt; it.  <a href="https://svn.open-mpi.org/trac/ompi/changeset/14748">https://svn.open-mpi.org/trac/ompi/changeset/14748</a>
</span><br>
<p><p>Thanks
<br>
<p>2. I'm a bit confused on a) how the new MCA params mca_num_hcas and
<br>
<span class="quotelev1">&gt; map_num_procs_per_hca are supposed to be used and b) what their
</span><br>
<span class="quotelev1">&gt; default values shoulant code)d be.
</span><br>
<p><p>Probably these params(and relevant code) should be removed now, since there
<br>
is a plan for generic Socket/Core to HCA mapping scheme. mca_num_hcas is the
<br>
maximum number of HCAs a task can use. Eg. If mpa_num_procs_per_hca is 3 and
<br>
max_num_hcas is 2. On any node, task 1/2/3 are mapped to hca1 &amp; hca2, task
<br>
4/5/6 are mapped to hca3 &amp; hca4 ....
<br>
Default values were set as 1(thats what we needed at that point in time).It
<br>
needs to be modified so that ompi's default behaviour remains unchanged (ie.
<br>
use all hcas)
<br>
<p>2a. I don't quite understand the logic of is_hca_allowed(); I could
<br>
<span class="quotelev1">&gt; not get it to work properly.  Specifically, I have 2 machines each
</span><br>
<span class="quotelev1">&gt; with 2 HCAs (mthca0 has 1 port, mthca1 has 2 ports).  If I ran 2
</span><br>
<span class="quotelev1">&gt; procs (regardless of byslot or bynode), is_hca_allowed() would always
</span><br>
<span class="quotelev1">&gt; return false for the 2nd proc.  So I put a temporary override in
</span><br>
<span class="quotelev1">&gt; is_hca_allowed() to simply always return true.  Can you explain how
</span><br>
<span class="quotelev1">&gt; the logic is supposed to work in that function?
</span><br>
<p><p>Explained above
<br>
<p>2b. The default values of max_num_hcas and map_num_procs_per_hca are
<br>
<span class="quotelev1">&gt; both 1.  Based on my (potentially flawed) understanding of how these
</span><br>
<span class="quotelev1">&gt; MCA params are meant to be used, this is different than the current
</span><br>
<span class="quotelev1">&gt; default behavior.  The current default is that all procs use all
</span><br>
<span class="quotelev1">&gt; ACTIVE ports on all HCAs.  I *think* your new default param values
</span><br>
<span class="quotelev1">&gt; will set each proc to use the ACTIVE ports on exactly one HCA,
</span><br>
<span class="quotelev1">&gt; regardless how many there are in the host.  Did you mean to do that?
</span><br>
<span class="quotelev1">&gt; Also: both values must currently be &gt;=1; should we allow -1 for both
</span><br>
<span class="quotelev1">&gt; of these values, meaning that they can be &quot;infinite&quot; ( i.e., based on
</span><br>
<span class="quotelev1">&gt; the number of HCAs in the host)?
</span><br>
<p><p>Yes,  the defaults need to be changed. I'll also make the selection logic
<br>
more granular (eg. -mca mca_btl_openib_if_include mthca0:1,mthca1:1)
<br>
<p>--Nysal
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1622.php">Jeff Squyres: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Previous message:</strong> <a href="1620.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1576.php">Jeff Squyres: "[OMPI devel] jnysal-openib-wireup branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1622.php">Jeff Squyres: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Reply:</strong> <a href="1622.php">Jeff Squyres: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
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
