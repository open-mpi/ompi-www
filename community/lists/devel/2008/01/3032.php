<?
$subject_val = "Re: [OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 12:54:21 2008" -->
<!-- isoreceived="20080124175421" -->
<!-- sent="Thu, 24 Jan 2008 09:54:14 -0800" -->
<!-- isosent="20080124175414" -->
<!-- name="Dean Dauger, Ph. D." -->
<!-- email="d_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="0F737C71-B4DB-454D-863A-319528B5B56F_at_daugerresearch.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.1251.1201176783.5488.devel_at_open-mpi.org" -->
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
<strong>From:</strong> Dean Dauger, Ph. D. (<em>d_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 12:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3033.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3031.php">Jeff Squyres: "[OMPI devel] more problems with v pml"</a>
<li><strong>Maybe in reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3033.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3033.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I'm sorry, but now I am totally confused. Are you saying that you  
</span><br>
<span class="quotelev1">&gt; are having
</span><br>
<span class="quotelev1">&gt; problems with the default rsh component in the distributed 1.2.3  
</span><br>
<span class="quotelev1">&gt; code??
</span><br>
<p>Yes ...
<br>
<p><span class="quotelev1">&gt; Or are you having a problem with your customized version?
</span><br>
<p>and yes.  Each exhibited the same problem, a bus error.
<br>
<p><span class="quotelev1">&gt; What compiler are you using? If it's your customized version, did  
</span><br>
<span class="quotelev1">&gt; you make sure to change the
</span><br>
<span class="quotelev1">&gt; names of the data structures and modules as I pointed out?
</span><br>
<p>gcc 4.0.1, the default of Leopard.  Yes, in the customized version, I  
<br>
did change the names of the data structures, subroutines, support  
<br>
file names, and where it says &quot;rsh&quot; just like you said.
<br>
<p><span class="quotelev1">&gt; We regularly work on Macs, both PPC and Intel based (I develop and  
</span><br>
<span class="quotelev1">&gt; test on
</span><br>
<span class="quotelev1">&gt; both every day), and I have -never- seen this problem in our code  
</span><br>
<span class="quotelev1">&gt; base.
</span><br>
<span class="quotelev1">&gt; Hence my confusion.
</span><br>
<p>I'm sorry to confuse.  I'm starting with the shipping Mac OS X 10.5.1  
<br>
&quot;Leopard&quot;, which contains its own build of Open MPI (v1.2.3 according  
<br>
to &quot;orterun -version&quot;).  So I assumed that the v1.2.3 branch from  
<br>
svn.open-mpi.org was the same code Apple used to build the Open MPI  
<br>
that ships in Leopard.
<br>
<p>My motivation was to build a new pls module based on pls_rsh module's  
<br>
source code, substituting the rsh with my own name like you said, but  
<br>
I encountered a bus error.  So to be sure I didn't screw up somewhere  
<br>
in my custom module I rebuilt the unmodified pls_rsh module and  
<br>
discovered the same problem.
<br>
<p>Then, after downloading the Open MPI from opensource.apple.com  
<br>
(suspecting it was different), I tried recompiling the pls_rsh module  
<br>
from that source code, dropped in just the resulting mca_pls_rsh.la  
<br>
and mca_pls_rsh.so into the existing /usr/lib/openmpi of Leopard,  
<br>
overwriting Leopard's versions, and the bus error happened the same  
<br>
as before.
<br>
<p>That's where I was with my first post to this list.
<br>
<p>My last post regards the discovery that rearranging the elements of  
<br>
orte_pls_rsh_component_t, without changing anything else about the  
<br>
pls_rsh code, affects the bus error outcome.  Then I padded out  
<br>
orte_pls_rsh_component_t and my &quot;orte_pls_dean_component_t&quot; by hand  
<br>
so that it would be &quot;data alignment agnostic&quot;, if you will.   
<br>
Consequently the bus error no longer occurs and both pls modules now  
<br>
run as they should.
<br>
<p>My hypothesis: Apple's procedure to build Open MPI into Leopard had a  
<br>
side effect requiring shared object code structures to follow a data  
<br>
alignment different than if I simply recompile Open MPI straight from  
<br>
its source.
<br>
<p>I'm not saying anyone is to blame, but I'm recognizing that those  
<br>
builds have different timelines.  I predict that if I overwrite all  
<br>
of Leopard's Open MPI object code, then it would all run too.
<br>
<p>For my needs, I have a sufficient workaround: realign my data  
<br>
structures to be &quot;agnostic&quot;.  I'm sharing this little discovery just  
<br>
in case it might help somebody else out there; for all I know it  
<br>
could happen on non-Macs too.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;Dean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3033.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3031.php">Jeff Squyres: "[OMPI devel] more problems with v pml"</a>
<li><strong>Maybe in reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3033.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3033.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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
