<?
$subject_val = "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 17:08:58 2013" -->
<!-- isoreceived="20130221220858" -->
<!-- sent="Thu, 21 Feb 2013 15:08:31 -0700" -->
<!-- isosent="20130221220831" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows C++ Linker Error &amp;quot;unresolved symbol&amp;quot; for MPI::Datatype::Free" -->
<!-- id="51269ADF.4030100_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F5165F_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 17:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21438.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21438.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found it.  The MPI::Datatype class isn't exported in a Win dll (no 
<br>
dllexport wrappers on the class), so on a shared-libs build it's not in 
<br>
the library symbols for anything else to see.  The Windows CMAKE 
<br>
&quot;BUILD_SHARED_LIBS&quot; option is therefore busted.  On a static lib build 
<br>
everything's in there, a dumpbin shows all the MPI::Datatype symbols.  
<br>
Those symbols are missing all the way back into 1.5 shared-lib builds as 
<br>
well.
<br>
<p>Damien
<br>
<p>On 21/02/2013 12:19 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Feb 21, 2013, at 10:59 AM, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well this is interesting.  The linker can't find that because MPI::Datatype::Free isn't implemented on the Windows build (in datatype_inln.h).  It's declared in datatype.h though.  It's not there in the Linux version either, so I don't know where the Linux build is getting that symbol from, that link should fail too.  Is the C++ version of OpenMPI actually broken overall?
</span><br>
<span class="quotelev1">&gt; It's implemented in Datatype.cc.  I'm don't remember offhand why we didn't put it in the inline versions.  But it's definitely in the generated libmpi_cxx.so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; % nm -C libmpi_cxx.so | grep MPI::Datatype::Free
</span><br>
<span class="quotelev1">&gt; 0000000000016ed8 T MPI::Datatype::Free()
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21438.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21438.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
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
