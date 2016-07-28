<?
$subject_val = "Re: [OMPI users] non-functional mpif90 compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  1 15:07:43 2013" -->
<!-- isoreceived="20131001190743" -->
<!-- sent="Tue, 01 Oct 2013 15:07:42 -0400" -->
<!-- isosent="20131001190742" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] non-functional mpif90 compiler" -->
<!-- id="524B1D7E.7040508_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F911B69_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] non-functional mpif90 compiler<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-01 15:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Previous message:</strong> <a href="22746.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error compiling openmpi-1.9a1r29292"</a>
<li><strong>In reply to:</strong> <a href="22743.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Reply:</strong> <a href="22748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damiano
<br>
<p>Glad to know you sorted out the problem with
<br>
your environment variables.
<br>
Home-brewed Open MPI tastes much better
<br>
than those six-pack canned RPMs.
<br>
Did OpenFOAM (was it OpenFoam?) eventually compile and run?
<br>
<p>Thanks Jeff for clarifying where is the hurdle (on Infiniband)
<br>
when one tries to build Open MPI as group of static libraries.
<br>
I tried to build OMPI static, and had failures in the past.
<br>
I eventually gave up, but it was never clear why it would fail
<br>
(although the error messages suggested that IB played a role).
<br>
However, all my attempts were on machines with Infinband hardware.
<br>
<p>Good to know that one can build OMPI static on TCP/IP machines.
<br>
And presumably also on (non-IB) standalone machines that will
<br>
only use the shared memory features of OMPI).
<br>
This may (or may not?) be useful when one intends to run MPI
<br>
programs in a single box.
<br>
(I wonder if this is what Damiano plans to do.)
<br>
<p>I know these questions may be somewhat off-topic,
<br>
but from the standpoint of performance,
<br>
once upon a time there was a popular wisdom that
<br>
static linking produced faster executables
<br>
than when linking to shared libraries
<br>
(static producing larger executables, though).
<br>
Is this &quot;static is faster&quot; view still valid?
<br>
Does it apply to Open MPI in particular?
<br>
Was it ever true?
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
<p>On 10/01/2013 05:16 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; If you are using a TCP network for MPI communications,static is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if you're trying to use an OS-bypass network such as
</span><br>
<span class="quotelev1">&gt; InfiniBand, RoCE, or iWARP, using static libraries can be
</span><br>
<span class="quotelev1">&gt; somewhat of a nightmare (because of how the OpenFabrics Verbs
</span><br>
<span class="quotelev1">&gt; support libraries work).
</span><br>
<span class="quotelev1">&gt; Specifically, I don't see the &quot;openib&quot; BTL plugin in your
</span><br>
<span class="quotelev1">&gt; ompi_info output, meaning that your Open MPI installation
</span><br>
<span class="quotelev1">&gt; is not capable of using InfiniBand/RoCE/iWARP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So just be aware that with your current builds,
</span><br>
<span class="quotelev1">&gt; you're basically TCP-only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2013, at 3:34 AM, Damiano Natali&lt;damiano.natali_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus, today I noticed there was another ompi directory in my path and maybe it gave some strange errors so I put the new ompi installation at the first place in PATH and LD_LIBRARY_PATH before the building and everything went nicely!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, as you and Jeff said, the problem was in having the rigth paths!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your support!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damiano
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; p.s. Building static libraries didn't result in any problem so far!
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Previous message:</strong> <a href="22746.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error compiling openmpi-1.9a1r29292"</a>
<li><strong>In reply to:</strong> <a href="22743.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Reply:</strong> <a href="22748.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
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
