<?
$subject_val = "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 16 23:36:53 2010" -->
<!-- isoreceived="20100517033653" -->
<!-- sent="Mon, 17 May 2010 14:52:08 +1200" -->
<!-- isosent="20100517025208" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The&amp;quot; Missing Symbol&amp;quot; issue and OpenMPI on NetBSD" -->
<!-- id="aa64b9c365c7ce0d1320a1259a527279.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="21E7C156-8815-49AA-8729-7F81A8EC5ECD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20The&amp;amp;quot;%20Missing%20Symbol&amp;amp;quot;%20issue%20and%20OpenMPI%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-05-16 22:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7942.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7940.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cc'd Aleksej as I'm not sure he's on the &quot;devel&quot; list, and Mark
<br>
Davies, as he is certainly not.
<br>
<p>I'll also post this back onto the R HPC SIG list which is
<br>
where I came in.
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Now, all this being said, IIRC (and I very well may not!), the real
</span><br>
<span class="quotelev1">&gt; underlying issue here is that R is dlopening libmpi.so, which, in turn, is
</span><br>
<span class="quotelev1">&gt; dlopening its own DSOs.  Given the global linker scoping issues, OMPI's
</span><br>
<span class="quotelev1">&gt; DSOs are unable to find the symbols they need to resolve in the process
</span><br>
<span class="quotelev1">&gt; (because libmpi.so's was opened in a private scope).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This probably is unfortunately larger than us (Open MPI) -- it's really a
</span><br>
<span class="quotelev1">&gt; POSIX issue.  What would be ideal is if different linker namespaces could
</span><br>
<span class="quotelev1">&gt; be something more fine-grained than &quot;global&quot; or &quot;private&quot; within a
</span><br>
<span class="quotelev1">&gt; process.  E.g., if the private namespace of libmpi.so in the process could
</span><br>
<span class="quotelev1">&gt; selectively make its symbol namespace available to the DSOs that it
</span><br>
<span class="quotelev1">&gt; dlopens.  Right now, the only option libmpi.so has is to be opened
</span><br>
<span class="quotelev1">&gt; with a public scope, which somewhat defeats the point of private
</span><br>
<span class="quotelev1">&gt; scoping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Tying in with the suggestions you make above, there would seem to
<br>
be a work-around fix for this, in the case of the Rmpi package
<br>
on NetBSD anyway.
<br>
<p>Furthermore, the fix does not require any alterations to OpenMPI.
<br>
<p>Apparently, there has been a similar issue, symbol visibility
<br>
when chaining shared library loading, within PAM on NetBSD.
<br>
<p>Mark Davies has now determined a way to force the Rmpi package
<br>
to load libmpi.so, ahead of loading the Rmpi shared library itself,
<br>
so that what appear to be the missing symbols are then available,
<br>
for any future loads of the OpenMPI component libraries.
<br>
<p><p>On the version of Rmpi that I have been using, 0.5-8, the &quot;fix&quot;
<br>
can be effected by the following, one, line, patch
<br>
<p>--- Rmpi/R/zzz.R        2009-02-04 05:27:08.000000000 +1300
<br>
+++ Rmpi.local/R/zzz.R  2010-05-17 14:25:27.000000000 +1200
<br>
@@ -7,6 +7,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#    cat(vertxt)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Check if lam-mpi is running
<br>
+    dyn.load(&quot;/usr/pkg/lib/libmpi.so&quot;, local=FALSE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;library.dynam(&quot;Rmpi&quot;, pkg, lib)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!TRUE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop(&quot;Fail to load Rmpi dynamic library.&quot;)
<br>
<p><p>Note that this currently hard codes the path to the libmpi.so,
<br>
which for our system is in the standard NetBSD PkgSrc location,
<br>
though there are probably &quot;nicer&quot; ways to achieve the same end,
<br>
and greater flexibility, using R internals.
<br>
<p>Having said that, this &quot;fix&quot; does not seem to be needed on
<br>
plaforms that have a global scope for shared library symbols,
<br>
so maybe attempts to make it generic may be pointless.
<br>
<p>Thanks for everyone's time on this issue. I'll certainly be
<br>
watching attempts to resolve the &quot;larger than us (Open MPI)&quot;
<br>
issue,
<br>
<p>Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7942.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7940.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
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
