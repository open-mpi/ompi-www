<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 07:34:46 2007" -->
<!-- isoreceived="20070607113446" -->
<!-- sent="Thu, 7 Jun 2007 07:34:38 -0400" -->
<!-- isosent="20070607113438" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jnysal-openib-wireup branch" -->
<!-- id="BE135871-6D71-4090-9F25-C907F46DF420_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5d5f7eba0706070425h79819040oee795bce22511680_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 07:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1630.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>In reply to:</strong> <a href="1630.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>On Jun 7, 2007, at 7:25 AM, Nysal Jan wrote:
<br>
<p><span class="quotelev1">&gt; I'll cleanup the code and add the granular selction part. It should  
</span><br>
<span class="quotelev1">&gt; be ready by monday.
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/6/07, Jeff Squyres &lt; jsquyres_at_[hidden]&gt; wrote:Ok -- so did  
</span><br>
<span class="quotelev1">&gt; you want to go ahead and make these changes, or did you
</span><br>
<span class="quotelev1">&gt; want me to do it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, I'd be in favor of all this stuff coming to the trunk in
</span><br>
<span class="quotelev1">&gt; the Very Near Future.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2007, at 7:02 AM, Nysal Jan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. The logic for if_exclude was not correct.  I committed a fix for
</span><br>
<span class="quotelev2">&gt; &gt; it.  <a href="https://svn.open-mpi.org/trac/ompi/changeset/14748">https://svn.open-mpi.org/trac/ompi/changeset/14748</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. I'm a bit confused on a) how the new MCA params mca_num_hcas and
</span><br>
<span class="quotelev2">&gt; &gt; map_num_procs_per_hca are supposed to be used and b) what their
</span><br>
<span class="quotelev2">&gt; &gt; default values shoulant code)d be.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Probably these params(and relevant code) should be removed now,
</span><br>
<span class="quotelev2">&gt; &gt; since there is a plan for generic Socket/Core to HCA mapping
</span><br>
<span class="quotelev2">&gt; &gt; scheme. mca_num_hcas is the maximum number of HCAs a task can use.
</span><br>
<span class="quotelev2">&gt; &gt; Eg. If mpa_num_procs_per_hca is 3 and max_num_hcas is 2. On any
</span><br>
<span class="quotelev2">&gt; &gt; node, task 1/2/3 are mapped to hca1 &amp; hca2, task 4/5/6 are mapped
</span><br>
<span class="quotelev2">&gt; &gt; to hca3 &amp; hca4 ....
</span><br>
<span class="quotelev2">&gt; &gt; Default values were set as 1(thats what we needed at that point in
</span><br>
<span class="quotelev2">&gt; &gt; time).It needs to be modified so that ompi's default behaviour
</span><br>
<span class="quotelev2">&gt; &gt; remains unchanged (ie. use all hcas)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2a. I don't quite understand the logic of is_hca_allowed(); I could
</span><br>
<span class="quotelev2">&gt; &gt; not get it to work properly.  Specifically, I have 2 machines each
</span><br>
<span class="quotelev2">&gt; &gt; with 2 HCAs (mthca0 has 1 port, mthca1 has 2 ports).  If I ran 2
</span><br>
<span class="quotelev2">&gt; &gt; procs (regardless of byslot or bynode), is_hca_allowed() would  
</span><br>
<span class="quotelev1">&gt; always
</span><br>
<span class="quotelev2">&gt; &gt; return false for the 2nd proc.  So I put a temporary override in
</span><br>
<span class="quotelev2">&gt; &gt; is_hca_allowed() to simply always return true.  Can you explain how
</span><br>
<span class="quotelev2">&gt; &gt; the logic is supposed to work in that function?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Explained above
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2b. The default values of max_num_hcas and map_num_procs_per_hca are
</span><br>
<span class="quotelev2">&gt; &gt; both 1.  Based on my (potentially flawed) understanding of how these
</span><br>
<span class="quotelev2">&gt; &gt; MCA params are meant to be used, this is different than the current
</span><br>
<span class="quotelev2">&gt; &gt; default behavior.  The current default is that all procs use all
</span><br>
<span class="quotelev2">&gt; &gt; ACTIVE ports on all HCAs.  I *think* your new default param values
</span><br>
<span class="quotelev2">&gt; &gt; will set each proc to use the ACTIVE ports on exactly one HCA,
</span><br>
<span class="quotelev2">&gt; &gt; regardless how many there are in the host.  Did you mean to do that?
</span><br>
<span class="quotelev2">&gt; &gt; Also: both values must currently be &gt;=1; should we allow -1 for both
</span><br>
<span class="quotelev2">&gt; &gt; of these values, meaning that they can be &quot;infinite&quot; ( i.e.,  
</span><br>
<span class="quotelev1">&gt; based on
</span><br>
<span class="quotelev2">&gt; &gt; the number of HCAs in the host)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes,  the defaults need to be changed. I'll also make the selection
</span><br>
<span class="quotelev2">&gt; &gt; logic more granular (eg. -mca mca_btl_openib_if_include
</span><br>
<span class="quotelev2">&gt; &gt; mthca0:1,mthca1:1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --Nysal
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1630.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>In reply to:</strong> <a href="1630.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
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
