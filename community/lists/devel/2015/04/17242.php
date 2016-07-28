<?
$subject_val = "Re: [OMPI devel] running Open MPI with different install paths";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 08:58:25 2015" -->
<!-- isoreceived="20150417125825" -->
<!-- sent="Fri, 17 Apr 2015 21:58:22 +0900" -->
<!-- isosent="20150417125822" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running Open MPI with different install paths" -->
<!-- id="CAAkFZ5tuYdNx1bANxjDsMDy2vHAxscDOzEteXig9=0Tagb4ayg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57odABt3=7y3zvMMkyBbdb8XLkqPzFrdDkG6aqQuF6nWueQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 08:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Previous message:</strong> <a href="17241.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17238.php">Ralph Castain: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Reply:</strong> <a href="17243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>right now, I am using ssh
<br>
<p>one way to go is to extend the machine file syntax
<br>
instead of
<br>
user_at_host
<br>
we could have
<br>
user_at_host:port//prefix
<br>
<p>an other way would be to do this on the command line :
<br>
mpirun --host host1 --prefix prefix1 a.out : -- host host2 --prefix prefix2
<br>
b.out
<br>
<p>an other really nice feature would be to have a suffix per arch, intel MPI
<br>
is doing this for mic :
<br>
mpirun --host cpu,mic a.out
<br>
a.out runs on the Xeon and a.out.mic runs on the Xeon phi
<br>
<p>for the time being, I use a very cheap hack :
<br>
replace orted with a shell scripts that exec the right binary,
<br>
and replace a.out with a wrapper that
<br>
1. sets LD_LIBRARY_PATH according to the right arch
<br>
since open MPI sets this for the arch on which mpirun is invoked, which
<br>
might not be the expected one
<br>
2. invoke the right binary for this arch
<br>
<p>an other really nice feature would be to have mpirun invoke this wrapper
<br>
&quot;under the hood&quot; :
<br>
<p>mpirun --wrapper wrapper.sh a.out
<br>
would invoke
<br>
wrapper.sh a.out
<br>
on all the nodes, and in this script, I can manually execs a.out from the
<br>
right path (e.g. one path per arch)
<br>
<p>an alternative to extending the machine file syntax would be to invoke an
<br>
other wrapper for orted :
<br>
mpirun --orted-wrapper ortedwrapper.sh --wrapper binwrapper.sh a.out
<br>
that would allow the end user to &quot;implement&quot; self discovery
<br>
<p>cheers,
<br>
<p>Gilles
<br>
<p>On Friday, April 17, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What launch environment? We don't currently have a simple way of doing
</span><br>
<span class="quotelev1">&gt; this outside of ensuring the paths on those nodes point to the correct
</span><br>
<span class="quotelev1">&gt; default place (i.e., you can't use prefix). However, it might be possible
</span><br>
<span class="quotelev1">&gt; to add such support if we knew which nodes were what type. Unfortunately,
</span><br>
<span class="quotelev1">&gt; we would need to know that prior to launching the daemons, so we can't
</span><br>
<span class="quotelev1">&gt; self-discover it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 17, 2015 at 2:32 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i am trying to run heterogeneous Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; all my nodes use NFS everything is shared, so i need to manually specify
</span><br>
<span class="quotelev2">&gt;&gt; x86_64 nodes must use /.../ompi-x86_64 and sparcv9 nodes must use
</span><br>
<span class="quotelev2">&gt;&gt; /.../ompi-sparcv9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is there a simple way to achieve this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17237.php">http://www.open-mpi.org/community/lists/devel/2015/04/17237.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Previous message:</strong> <a href="17241.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17238.php">Ralph Castain: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Reply:</strong> <a href="17243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
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
