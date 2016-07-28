<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 11:08:53 2006" -->
<!-- isoreceived="20060410150853" -->
<!-- sent="Mon, 10 Apr 2006 09:08:47 -0600" -->
<!-- isosent="20060410150847" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform" -->
<!-- id="A8B2396F-F461-4283-977F-55A0DC3F9913_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FB237_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 11:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0995.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>Previous message:</strong> <a href="0993.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="0992.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0995.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is what I have just discovered - mpicc didn't have -m32 in it.
<br>
<p>Thanks for the other info (config list)!
<br>
<p>-david
<br>
<p>On Apr 10, 2006, at 8:56 AM, Jeff Squyres ((jsquyres)) wrote:
<br>
<p><span class="quotelev1">&gt; The extra &quot;-m32&quot; was necessary because the wrapper compiler did not
</span><br>
<span class="quotelev1">&gt; include the CFLAGS from the configure line (we don't do this by  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; on the assumption that you may want to build Open MPI with different
</span><br>
<span class="quotelev1">&gt; flags than your MPI executables).  You can get the wrapper  
</span><br>
<span class="quotelev1">&gt; compilers to
</span><br>
<span class="quotelev1">&gt; automatically include additional flags by supplying
</span><br>
<span class="quotelev1">&gt; --with-wrapper-[cflags|cxxflags|...].
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0995.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>Previous message:</strong> <a href="0993.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="0992.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0995.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
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
