<?
$subject_val = "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 17:12:31 2013" -->
<!-- isoreceived="20130221221231" -->
<!-- sent="Thu, 21 Feb 2013 22:12:27 +0000" -->
<!-- isosent="20130221221227" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows C++ Linker Error &amp;quot;unresolved symbol&amp;quot; for MPI::Datatype::Free" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F51C82_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51269ADF.4030100_at_khubla.com" -->
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
<strong>Date:</strong> 2013-02-21 17:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21441.php">Geoffrey Irving: "[OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If someone wants to submit a patch and/or make 1.6.4 binaries, we could move forward with that.
<br>
<p>Please do so on the devel list, however -- not the users list (we've been a bit sloppy about separating users/devel recently; let's try to be better).
<br>
<p><p>On Feb 21, 2013, at 5:08 PM, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Found it.  The MPI::Datatype class isn't exported in a Win dll (no dllexport wrappers on the class), so on a shared-libs build it's not in the library symbols for anything else to see.  The Windows CMAKE &quot;BUILD_SHARED_LIBS&quot; option is therefore busted.  On a static lib build everything's in there, a dumpbin shows all the MPI::Datatype symbols.  Those symbols are missing all the way back into 1.5 shared-lib builds as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 21/02/2013 12:19 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 21, 2013, at 10:59 AM, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well this is interesting.  The linker can't find that because MPI::Datatype::Free isn't implemented on the Windows build (in datatype_inln.h).  It's declared in datatype.h though.  It's not there in the Linux version either, so I don't know where the Linux build is getting that symbol from, that link should fail too.  Is the C++ version of OpenMPI actually broken overall?
</span><br>
<span class="quotelev2">&gt;&gt; It's implemented in Datatype.cc.  I'm don't remember offhand why we didn't put it in the inline versions.  But it's definitely in the generated libmpi_cxx.so:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; % nm -C libmpi_cxx.so | grep MPI::Datatype::Free
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000016ed8 T MPI::Datatype::Free()
</span><br>
<span class="quotelev2">&gt;&gt; %
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21441.php">Geoffrey Irving: "[OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21439.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
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
