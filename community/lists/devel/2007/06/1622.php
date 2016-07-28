<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 07:53:44 2007" -->
<!-- isoreceived="20070606115344" -->
<!-- sent="Wed, 6 Jun 2007 07:53:27 -0400" -->
<!-- isosent="20070606115327" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jnysal-openib-wireup branch" -->
<!-- id="8A2330A0-3018-418D-B2F3-4108EB9252A6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5d5f7eba0706060402p74bcafc4t85ffd54d3394b9a3_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-06-06 07:53:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1623.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>In reply to:</strong> <a href="1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1630.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Reply:</strong> <a href="1630.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok -- so did you want to go ahead and make these changes, or did you  
<br>
want me to do it?
<br>
<p>Either way, I'd be in favor of all this stuff coming to the trunk in  
<br>
the Very Near Future.  :-)
<br>
<p><p><p>On Jun 6, 2007, at 7:02 AM, Nysal Jan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The logic for if_exclude was not correct.  I committed a fix for
</span><br>
<span class="quotelev1">&gt; it.  <a href="https://svn.open-mpi.org/trac/ompi/changeset/14748">https://svn.open-mpi.org/trac/ompi/changeset/14748</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I'm a bit confused on a) how the new MCA params mca_num_hcas and
</span><br>
<span class="quotelev1">&gt; map_num_procs_per_hca are supposed to be used and b) what their
</span><br>
<span class="quotelev1">&gt; default values shoulant code)d be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably these params(and relevant code) should be removed now,  
</span><br>
<span class="quotelev1">&gt; since there is a plan for generic Socket/Core to HCA mapping  
</span><br>
<span class="quotelev1">&gt; scheme. mca_num_hcas is the maximum number of HCAs a task can use.  
</span><br>
<span class="quotelev1">&gt; Eg. If mpa_num_procs_per_hca is 3 and max_num_hcas is 2. On any  
</span><br>
<span class="quotelev1">&gt; node, task 1/2/3 are mapped to hca1 &amp; hca2, task 4/5/6 are mapped  
</span><br>
<span class="quotelev1">&gt; to hca3 &amp; hca4 ....
</span><br>
<span class="quotelev1">&gt; Default values were set as 1(thats what we needed at that point in  
</span><br>
<span class="quotelev1">&gt; time).It needs to be modified so that ompi's default behaviour  
</span><br>
<span class="quotelev1">&gt; remains unchanged (ie. use all hcas)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2a. I don't quite understand the logic of is_hca_allowed(); I could
</span><br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Explained above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2b. The default values of max_num_hcas and map_num_procs_per_hca are
</span><br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes,  the defaults need to be changed. I'll also make the selection  
</span><br>
<span class="quotelev1">&gt; logic more granular (eg. -mca mca_btl_openib_if_include  
</span><br>
<span class="quotelev1">&gt; mthca0:1,mthca1:1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Nysal
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
<li><strong>Next message:</strong> <a href="1623.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>In reply to:</strong> <a href="1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1630.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Reply:</strong> <a href="1630.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
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
