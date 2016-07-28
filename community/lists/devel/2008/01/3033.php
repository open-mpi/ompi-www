<?
$subject_val = "Re: [OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 13:13:01 2008" -->
<!-- isoreceived="20080124181301" -->
<!-- sent="Thu, 24 Jan 2008 11:12:52 -0700" -->
<!-- isosent="20080124181252" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="C3BE2334.BE94%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0F737C71-B4DB-454D-863A-319528B5B56F_at_daugerresearch.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dropping a pls module into an Open MPI build<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 13:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3034.php">George Bosilca: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>In reply to:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3064.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3064.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Appreciate the clarification. I am unaware of anyone attempting that
<br>
procedure in the past, but I'm not terribly surprised to hear it would
<br>
encounter problems and/or fail. Given the myriad of configuration options in
<br>
the code base, it would seem almost miraculous that you could either (a) hit
<br>
the same config options used by Apple (whatever they were), or (b) manage to
<br>
find a combination that matched enough to let you do this without problem.
<br>
<p>Frankly, I'm surprised even this small a fix would let you work around the
<br>
problems... ;-)
<br>
<p>Unless you have some overriding reason to use the shipped binaries for
<br>
everything other than this special component, you're probably going to have
<br>
a lot more success just rebuilding from source.
<br>
<p>But that's just an opinion - either way, good luck with your efforts!
<br>
Ralph
<br>
<p><p>On 1/24/08 10:54 AM, &quot;Dean Dauger, Ph. D.&quot; &lt;d_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm sorry, but now I am totally confused. Are you saying that you
</span><br>
<span class="quotelev2">&gt;&gt; are having
</span><br>
<span class="quotelev2">&gt;&gt; problems with the default rsh component in the distributed 1.2.3
</span><br>
<span class="quotelev2">&gt;&gt; code??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or are you having a problem with your customized version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and yes.  Each exhibited the same problem, a bus error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What compiler are you using? If it's your customized version, did
</span><br>
<span class="quotelev2">&gt;&gt; you make sure to change the
</span><br>
<span class="quotelev2">&gt;&gt; names of the data structures and modules as I pointed out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc 4.0.1, the default of Leopard.  Yes, in the customized version, I
</span><br>
<span class="quotelev1">&gt; did change the names of the data structures, subroutines, support
</span><br>
<span class="quotelev1">&gt; file names, and where it says &quot;rsh&quot; just like you said.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We regularly work on Macs, both PPC and Intel based (I develop and
</span><br>
<span class="quotelev2">&gt;&gt; test on
</span><br>
<span class="quotelev2">&gt;&gt; both every day), and I have -never- seen this problem in our code
</span><br>
<span class="quotelev2">&gt;&gt; base.
</span><br>
<span class="quotelev2">&gt;&gt; Hence my confusion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry to confuse.  I'm starting with the shipping Mac OS X 10.5.1
</span><br>
<span class="quotelev1">&gt; &quot;Leopard&quot;, which contains its own build of Open MPI (v1.2.3 according
</span><br>
<span class="quotelev1">&gt; to &quot;orterun -version&quot;).  So I assumed that the v1.2.3 branch from
</span><br>
<span class="quotelev1">&gt; svn.open-mpi.org was the same code Apple used to build the Open MPI
</span><br>
<span class="quotelev1">&gt; that ships in Leopard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My motivation was to build a new pls module based on pls_rsh module's
</span><br>
<span class="quotelev1">&gt; source code, substituting the rsh with my own name like you said, but
</span><br>
<span class="quotelev1">&gt; I encountered a bus error.  So to be sure I didn't screw up somewhere
</span><br>
<span class="quotelev1">&gt; in my custom module I rebuilt the unmodified pls_rsh module and
</span><br>
<span class="quotelev1">&gt; discovered the same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, after downloading the Open MPI from opensource.apple.com
</span><br>
<span class="quotelev1">&gt; (suspecting it was different), I tried recompiling the pls_rsh module
</span><br>
<span class="quotelev1">&gt; from that source code, dropped in just the resulting mca_pls_rsh.la
</span><br>
<span class="quotelev1">&gt; and mca_pls_rsh.so into the existing /usr/lib/openmpi of Leopard,
</span><br>
<span class="quotelev1">&gt; overwriting Leopard's versions, and the bus error happened the same
</span><br>
<span class="quotelev1">&gt; as before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's where I was with my first post to this list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My last post regards the discovery that rearranging the elements of
</span><br>
<span class="quotelev1">&gt; orte_pls_rsh_component_t, without changing anything else about the
</span><br>
<span class="quotelev1">&gt; pls_rsh code, affects the bus error outcome.  Then I padded out
</span><br>
<span class="quotelev1">&gt; orte_pls_rsh_component_t and my &quot;orte_pls_dean_component_t&quot; by hand
</span><br>
<span class="quotelev1">&gt; so that it would be &quot;data alignment agnostic&quot;, if you will.
</span><br>
<span class="quotelev1">&gt; Consequently the bus error no longer occurs and both pls modules now
</span><br>
<span class="quotelev1">&gt; run as they should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My hypothesis: Apple's procedure to build Open MPI into Leopard had a
</span><br>
<span class="quotelev1">&gt; side effect requiring shared object code structures to follow a data
</span><br>
<span class="quotelev1">&gt; alignment different than if I simply recompile Open MPI straight from
</span><br>
<span class="quotelev1">&gt; its source.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not saying anyone is to blame, but I'm recognizing that those
</span><br>
<span class="quotelev1">&gt; builds have different timelines.  I predict that if I overwrite all
</span><br>
<span class="quotelev1">&gt; of Leopard's Open MPI object code, then it would all run too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For my needs, I have a sufficient workaround: realign my data
</span><br>
<span class="quotelev1">&gt; structures to be &quot;agnostic&quot;.  I'm sharing this little discovery just
</span><br>
<span class="quotelev1">&gt; in case it might help somebody else out there; for all I know it
</span><br>
<span class="quotelev1">&gt; could happen on non-Macs too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;    Dean
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
<li><strong>Next message:</strong> <a href="3034.php">George Bosilca: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>In reply to:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3064.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3064.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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
