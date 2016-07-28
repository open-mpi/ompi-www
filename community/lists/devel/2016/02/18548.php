<?
$subject_val = "Re: [OMPI devel] Use OMPI on another network interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 06:48:52 2016" -->
<!-- isoreceived="20160204114852" -->
<!-- sent="Thu, 4 Feb 2016 11:48:50 +0000" -->
<!-- isosent="20160204114850" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use OMPI on another network interface" -->
<!-- id="9AAE0ACB-6B4F-42FF-BD60-A7E0DA4132DA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5s3L8DR6HRZGOjLFpNS075kaF8yeT0J8oTD_wHHyFq4tA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use OMPI on another network interface<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 06:48:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Previous message:</strong> <a href="18547.php">Gilles Gouaillardet: "Re: [OMPI devel] Use OMPI on another network interface"</a>
<li><strong>In reply to:</strong> <a href="18547.php">Gilles Gouaillardet: "Re: [OMPI devel] Use OMPI on another network interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on what Gilles said.  A little more detail:
<br>
<p>1. You can simply write your own &quot;MPI_Bcast&quot; and interpose your version before Open MPI's version.  E.g.,:
<br>
<p>-----
<br>
$ cat your_program.c
<br>
#include &lt;mpi.h&gt;
<br>
<p>int MPI_Bcast(void *buffer, int count, MPI_Datatype datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int root, MPI_Comm comm)
<br>
{
<br>
// Whatever you want your Bcast to do
<br>
}
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
-----
<br>
<p>If you need to call MPI functions inside your MPI_Bcast, call them with &quot;PMPI&quot; instead of &quot;MPI&quot;.  E.g., call &quot;PMPI_Send(...)&quot; instead of &quot;MPI_Send(...)&quot;.  This guarantees that the back-end Open MPI versions of those functions will be called instead of your versions (if you end up overriding more than MPI_Bcast, for example).
<br>
<p>I showed a trivial example above where everything is in one file -- but you can also do more complicated examples where you group all your MPI_* function overrides in a library that you link before/to the left of the actual Open MPI library on the command line.
<br>
<p>2. As Gilles mentioned, you can write your own Open MPI collectives component.  This will have the back-end Open MPI infrastructure call your routine(s) when MPI_Bcast (and friends) are invoked by the application.
<br>
<p>Option #2 is a bit more complex than option #1.  If you're just looking to test some algorithms and generally play around a little, option #1 is probably what you want to do.
<br>
<p><p><span class="quotelev1">&gt; On Feb 4, 2016, at 5:42 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is difficult to answer such a generic request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI symbols (MPI_Bcast, ...) are defined as weak symbols, so the simplest option is to redefine them an implement them the way you like. you are always able to invoke PMPI_Bcast if you want to invoke the openmpi implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a more ompi-ish way is to create your own collective module.
</span><br>
<span class="quotelev1">&gt; for example, the default module is in ompi/mca/coll/tuned
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday, February 4, 2016, &lt;asavarym_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using a new network interface and its ad-hoc routing algorithms I would like to try my own custom implementation of some collective communication patterns(MPI_Bcast,MPI_Alltoall,...) without expanding those collective communications as series of point-to-point ones based on a given predefined process topology.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition my routing methods might require additional parameters, rather than the basic destination lists obtained from that topology and the kind of collective communication considered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How would I do that ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In which component should I modilfy something ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18546.php">http://www.open-mpi.org/community/lists/devel/2016/02/18546.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18547.php">http://www.open-mpi.org/community/lists/devel/2016/02/18547.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Previous message:</strong> <a href="18547.php">Gilles Gouaillardet: "Re: [OMPI devel] Use OMPI on another network interface"</a>
<li><strong>In reply to:</strong> <a href="18547.php">Gilles Gouaillardet: "Re: [OMPI devel] Use OMPI on another network interface"</a>
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
