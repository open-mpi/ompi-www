<?
$subject_val = "Re: [OMPI devel] running Open MPI with different install paths";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 08:41:23 2015" -->
<!-- isoreceived="20150417124123" -->
<!-- sent="Fri, 17 Apr 2015 12:41:12 +0000" -->
<!-- isosent="20150417124112" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running Open MPI with different install paths" -->
<!-- id="12F147D2-F73E-437B-AC16-72F5215D9586_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 08:41:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17240.php">Jeff Squyres (jsquyres): "[OMPI devel] VERSION numbers for v1.8.5"</a>
<li><strong>Previous message:</strong> <a href="17238.php">Ralph Castain: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>In reply to:</strong> <a href="17238.php">Ralph Castain: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Back in the days when I worked on heterogeneous machines like this, I had logic in my shell startup files to set paths properly.  E.g. (pseudocode):
<br>
<p>-----
<br>
arch=`config.guess`
<br>
switch $arch:
<br>
case *x86_64-linux*)
<br>
&nbsp;&nbsp;prefix_path=$HOME/x86_64-linux-stuff/bin
<br>
&nbsp;&nbsp;prefix_ldpath=$HOME/x86_64-linux-stuff/lib
<br>
&nbsp;&nbsp;prefix_manpath=$HOME/x86_64-linux-stuff/share/man
<br>
&nbsp;&nbsp;;;
<br>
case *sparc*)
<br>
&nbsp;&nbsp;prefix_path=$HOME/sparc/bin
<br>
&nbsp;&nbsp;prefix_ldpath=$HOME/sparc/lib
<br>
&nbsp;&nbsp;prefix_manpath=$HOME/sparc/share/man
<br>
&nbsp;&nbsp;;;
<br>
...etc.
<br>
<p>export PATH=$prefix_path:$PATH
<br>
export LD_LIBRARY_PATH=$prefix_ldpath:$LD_LIBRARY_PATH
<br>
export MANPAHE=$prefix_manpath:$MANPATH
<br>
-----
<br>
<p><p><span class="quotelev1">&gt; On Apr 17, 2015, at 5:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17238.php">http://www.open-mpi.org/community/lists/devel/2015/04/17238.php</a>
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
<li><strong>Next message:</strong> <a href="17240.php">Jeff Squyres (jsquyres): "[OMPI devel] VERSION numbers for v1.8.5"</a>
<li><strong>Previous message:</strong> <a href="17238.php">Ralph Castain: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>In reply to:</strong> <a href="17238.php">Ralph Castain: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
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
