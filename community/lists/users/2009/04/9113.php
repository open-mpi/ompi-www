<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 08:22:51 2009" -->
<!-- isoreceived="20090428122251" -->
<!-- sent="Tue, 28 Apr 2009 09:22:16 -0300" -->
<!-- isosent="20090428122216" -->
<!-- name="Sergiy Khan" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="49F6F4F8.5050807_at_ap.smu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="196322D8-B9AE-43F7-A964-5DFC60E7DD2F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3<br>
<strong>From:</strong> Sergiy Khan (<em>skhan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 08:22:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9114.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Previous message:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; due to other reasons) -- he has two separate installs of OMPI:
</span><br>
<span class="quotelev1">&gt; /opt/ompi-1.2
</span><br>
<span class="quotelev1">&gt; /opt/ompi-1.3
</span><br>
<p>Jeff, that is correct.
<br>
<p><span class="quotelev1">&gt; He builds his app with /opt/ompi-1.2/bin/mpicc.
</span><br>
<span class="quotelev1">&gt; But then he sets his LD_LIBRARY_PATH to /opt/ompi-1.3/lib/ and runs his 
</span><br>
<span class="quotelev1">&gt; app with /opt/ompi-1.3/bin/mpirun.  This means his app will run-time 
</span><br>
<p>That is also correct, but it does *not* work, that is why we could not 
<br>
easily upgrade from v1.2 to v1.3, due to error messages like &quot;different 
<br>
size in shared object&quot;.
<br>
<p>But the opposite works, i.e. building an app with v1.3 and running it 
<br>
with v1.2. But I was concerned it was even possible. However, Brian gave 
<br>
an explanation why it could work.
<br>
<p>It also seems that while running an app, it's not even necessary to set 
<br>
LD_LIBRARY_PATH, as long as I call proper mpirun (for example using an 
<br>
absolute path, such as /opt/ompi-1.3/bin/mpirun). It will find its own 
<br>
libraries, even if LD_LIBRARY_PATH points to a different location (v1.2) 
<br>
or not set at all, as you explained, due to explicit linker dependencies.
<br>
<p><span class="quotelev1"> &gt; I'd be fascinated to understand how this works.
</span><br>
<p>Ralph, I hope you see now how it can work.
<br>
<p>= Serge
<br>
<p><p><span class="quotelev1">&gt; link against /opt/ompi-1.3/lib/libmpi.so.  That libmpi.so has an 
</span><br>
<span class="quotelev1">&gt; explicit linker dependency on the /opt/ompi-1.3/lib/libopen-rte.so, 
</span><br>
<span class="quotelev1">&gt; which then depends on /opt/ompi-1.3/lib/libopen-pal.so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, he's pulling in the libopen-rte.so and libopen-pal that 
</span><br>
<span class="quotelev1">&gt; correspond with the libmpi.so that he's linking against.  So at least 
</span><br>
<span class="quotelev1">&gt; he'll get internal consistency there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I mentioned before, I think it'll fail for other reasons :-), but I 
</span><br>
<span class="quotelev1">&gt; *think* it should pick up a consistent set of libmpi.so, libopen-rte.so, 
</span><br>
<span class="quotelev1">&gt; and libopen-pal.so...
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9114.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Previous message:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
