<?
$subject_val = "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 14:19:58 2013" -->
<!-- isoreceived="20130221191958" -->
<!-- sent="Thu, 21 Feb 2013 19:19:53 +0000" -->
<!-- isosent="20130221191953" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows C++ Linker Error &amp;quot;unresolved symbol&amp;quot; for MPI::Datatype::Free" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F5165F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5126446D.9060109_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 14:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21437.php">damien_at_[hidden]: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2013, at 10:59 AM, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well this is interesting.  The linker can't find that because MPI::Datatype::Free isn't implemented on the Windows build (in datatype_inln.h).  It's declared in datatype.h though.  It's not there in the Linux version either, so I don't know where the Linux build is getting that symbol from, that link should fail too.  Is the C++ version of OpenMPI actually broken overall?
</span><br>
<p>It's implemented in Datatype.cc.  I'm don't remember offhand why we didn't put it in the inline versions.  But it's definitely in the generated libmpi_cxx.so:
<br>
<p>------
<br>
% nm -C libmpi_cxx.so | grep MPI::Datatype::Free 
<br>
0000000000016ed8 T MPI::Datatype::Free()
<br>
%
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21437.php">damien_at_[hidden]: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
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
