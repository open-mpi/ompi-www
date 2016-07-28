<?
$subject_val = "Re: [OMPI devel] running Open MPI with different install paths";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 09:48:06 2015" -->
<!-- isoreceived="20150417134806" -->
<!-- sent="Fri, 17 Apr 2015 13:48:03 +0000" -->
<!-- isosent="20150417134803" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running Open MPI with different install paths" -->
<!-- id="449D2F4D-D806-4367-A788-9853556BACDA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tuYdNx1bANxjDsMDy2vHAxscDOzEteXig9=0Tagb4ayg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] running Open MPI with different install paths<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 09:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>In reply to:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will these kinds of things work in all launchers, or just ssh?
<br>
<p>I'm a little uncomfortable with going to extraordinary measures for a fairly uncommon scenario, especially when there are mechanisms that already exist that are designed for this kind of use case (i.e., logic in shell login/startup files).
<br>
<p>That being said, if there's a core community member who has an itch to scratch (e.g., because said core community member runs into this case all the time :-) ), or if this is poised to become a more common user scenario, then I think patches would be gratefully accepted.  :-) :-) :-)
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 17, 2015, at 8:58 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; right now, I am using ssh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one way to go is to extend the machine file syntax
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt; user_at_host
</span><br>
<span class="quotelev1">&gt; we could have
</span><br>
<span class="quotelev1">&gt; user_at_host:port//prefix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an other way would be to do this on the command line :
</span><br>
<span class="quotelev1">&gt; mpirun --host host1 --prefix prefix1 a.out : -- host host2 --prefix prefix2 b.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an other really nice feature would be to have a suffix per arch, intel MPI is doing this for mic :
</span><br>
<span class="quotelev1">&gt; mpirun --host cpu,mic a.out 
</span><br>
<span class="quotelev1">&gt; a.out runs on the Xeon and a.out.mic runs on the Xeon phi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for the time being, I use a very cheap hack :
</span><br>
<span class="quotelev1">&gt; replace orted with a shell scripts that exec the right binary,
</span><br>
<span class="quotelev1">&gt; and replace a.out with a wrapper that
</span><br>
<span class="quotelev1">&gt; 1. sets LD_LIBRARY_PATH according to the right arch
</span><br>
<span class="quotelev1">&gt; since open MPI sets this for the arch on which mpirun is invoked, which might not be the expected one
</span><br>
<span class="quotelev1">&gt; 2. invoke the right binary for this arch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an other really nice feature would be to have mpirun invoke this wrapper &quot;under the hood&quot; :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --wrapper wrapper.sh a.out
</span><br>
<span class="quotelev1">&gt; would invoke
</span><br>
<span class="quotelev1">&gt; wrapper.sh a.out
</span><br>
<span class="quotelev1">&gt; on all the nodes, and in this script, I can manually execs a.out from the right path (e.g. one path per arch)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an alternative to extending the machine file syntax would be to invoke an other wrapper for orted :
</span><br>
<span class="quotelev1">&gt; mpirun --orted-wrapper ortedwrapper.sh --wrapper binwrapper.sh a.out
</span><br>
<span class="quotelev1">&gt; that would allow the end user to &quot;implement&quot; self discovery
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday, April 17, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What launch environment? We don't currently have a simple way of doing this outside of ensuring the paths on those nodes point to the correct default place (i.e., you can't use prefix). However, it might be possible to add such support if we knew which nodes were what type. Unfortunately, we would need to know that prior to launching the daemons, so we can't self-discover it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 17, 2015 at 2:32 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am trying to run heterogeneous Open MPI.
</span><br>
<span class="quotelev1">&gt; all my nodes use NFS everything is shared, so i need to manually specify
</span><br>
<span class="quotelev1">&gt; x86_64 nodes must use /.../ompi-x86_64 and sparcv9 nodes must use /.../ompi-sparcv9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there a simple way to achieve this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17237.php">http://www.open-mpi.org/community/lists/devel/2015/04/17237.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17242.php">http://www.open-mpi.org/community/lists/devel/2015/04/17242.php</a>
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
<li><strong>Next message:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>In reply to:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
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
