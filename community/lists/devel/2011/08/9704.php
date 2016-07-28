<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 26 19:47:57 2011" -->
<!-- isoreceived="20110826234757" -->
<!-- sent="Fri, 26 Aug 2011 19:47:52 -0400" -->
<!-- isosent="20110826234752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093" -->
<!-- id="619145EF-9E36-4254-89A1-46299123EB4A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="685839DC-0476-4402-B339-CB77274F469A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-26 19:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9705.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25098"</a>
<li><strong>Previous message:</strong> <a href="9703.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>In reply to:</strong> <a href="9701.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9729.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange -- I don't see where ORTE_ENABLE_EPOCH is defined at all, other than some warnings about it not being defined in autom4te.cache (which is weird in itself -- it means that things in configure were complaining that it wasn't defined; but the wording might imply that it was looking for an AM_CONDITIONAL by that name...?  I'm not sure):
<br>
<p>-----
<br>
[16:45] svbu-mpi:~/svn/ompi4 % grep -r ORTE_ENABLE_EPOCH * | grep -v /.svn/ | grep define
<br>
autom4te.cache/output.1:  as_fn_error &quot;conditional \&quot;ORTE_ENABLE_EPOCH\&quot; was never defined.
<br>
autom4te.cache/output.0:  as_fn_error &quot;conditional \&quot;ORTE_ENABLE_EPOCH\&quot; was never defined.
<br>
autom4te.cache/output.2:  as_fn_error &quot;conditional \&quot;ORTE_ENABLE_EPOCH\&quot; was never defined.
<br>
configure:  as_fn_error &quot;conditional \&quot;ORTE_ENABLE_EPOCH\&quot; was never defined.
<br>
[16:45] svbu-mpi:~/svn/ompi4 % 
<br>
-----
<br>
<p>Is there a new file that accidentally didn't get committed, perchance?
<br>
<p><p>On Aug 26, 2011, at 7:38 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Wesley --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting a bazillion &quot;warning: &quot;ORTE_ENABLE_EPOCH&quot; is not defined&quot; warnings.  By &quot;bazillion&quot;, I mean:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % grep ORTE_ENABLE_EPOCH make.out | grep warning | wc -l
</span><br>
<span class="quotelev1">&gt;    8695
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's my configure statement on both OS X and Linux:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/tmp/bogus --disable-mpi-f77 --disable-vt --disable-io-romio --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please fix...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2011, at 6:18 PM, Wesley Bland wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The epoch and resilient rote code is now macro'd away. To enable use
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-resilient-orte
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which defines:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RESIL_ORTE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Wesley
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 26, 2011, at 6:16 PM, wbland_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: wbland
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2011-08-26 18:16:14 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 25093
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25093">https://svn.open-mpi.org/trac/ompi/changeset/25093</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By popular demand the epoch code is now disabled by default. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To enable the epochs and the resilient orte code, use the configure flag:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-resilient-orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will define both:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ENABLE_EPOCH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_RESIL_ORTE
</span><br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9705.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25098"</a>
<li><strong>Previous message:</strong> <a href="9703.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>In reply to:</strong> <a href="9701.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9729.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
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
