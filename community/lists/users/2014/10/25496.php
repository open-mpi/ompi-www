<?
$subject_val = "Re: [OMPI users] static for tools dynamic for libs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 17:48:39 2014" -->
<!-- isoreceived="20141014214839" -->
<!-- sent="Tue, 14 Oct 2014 21:48:38 +0000" -->
<!-- isosent="20141014214838" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static for tools dynamic for libs" -->
<!-- id="6F6EA3A3-36F4-4AD8-BB25-29244A8C625B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="543D96B7.5030301_at_ssc-spc.gc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] static for tools dynamic for libs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-14 17:48:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25497.php">Gus Correa: "[OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25495.php">John Marshall: "[OMPI users] static for tools dynamic for libs"</a>
<li><strong>In reply to:</strong> <a href="25495.php">John Marshall: "[OMPI users] static for tools dynamic for libs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not a common use case because the LD_LIBRARY_PATH requirements for the orted and friends are the same as for the MPI executables.  So reducing the dependency requirements for the orted doesn't really buy you much.
<br>
<p>However, you could probably do this manually:
<br>
<p>-----
<br>
# Build static executables
<br>
cd $srcdir
<br>
./configure --enable-static --disable-shared --prefix=$foo
<br>
make all install
<br>
cd $foo
<br>
# Save the static executables
<br>
tar cf $HOME/foo-bin.tar bin
<br>
<p># Build shared libs
<br>
cd $srcdir
<br>
rm -rf $foo
<br>
./configure --prefix=$foo
<br>
make all install
<br>
<p># Restore the static executables
<br>
cd $foo
<br>
tar xf $HOME/foo-bin.tar
<br>
-----
<br>
<p>(this is off the top of my head -- may not be entirely right)
<br>
<p><p><p>On Oct 14, 2014, at 2:33 PM, John Marshall &lt;John.Marshall_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps I've missed something but is it possible to build openmpi (any version) so that:
</span><br>
<span class="quotelev1">&gt; * tools (e.g., orted) are statically linked
</span><br>
<span class="quotelev1">&gt; * shared libs are built
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would help avoid lib dependencies on orted at start up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25495.php">http://www.open-mpi.org/community/lists/users/2014/10/25495.php</a>
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
<li><strong>Next message:</strong> <a href="25497.php">Gus Correa: "[OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25495.php">John Marshall: "[OMPI users] static for tools dynamic for libs"</a>
<li><strong>In reply to:</strong> <a href="25495.php">John Marshall: "[OMPI users] static for tools dynamic for libs"</a>
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
