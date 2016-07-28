<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 17 12:34:33 2005" -->
<!-- isoreceived="20050617173433" -->
<!-- sent="Fri, 17 Jun 2005 13:34:31 -0400" -->
<!-- isosent="20050617173431" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="49fb5c97518849a345c5b80ba0d2309f_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050617171108.GB29041_at_flying-walenda.ca.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-17 12:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/07/0093.php">Koray Berk: "[O-MPI users] late comers not welcome?"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Ben Allan: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>In reply to:</strong> <a href="0090.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0076.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
'tis already in the README.
<br>
<p>Someday we'll have nice glossy PDF's like LAM, but for the beta, the 
<br>
README is what you get.  :-)
<br>
<p><p>On Jun 17, 2005, at 1:11 PM, Ben Allan wrote:
<br>
<p><span class="quotelev1">&gt; Please paste the quoted text (appropriately expanded)
</span><br>
<span class="quotelev1">&gt; into a readme or install or some other prominent doc location/appendix
</span><br>
<span class="quotelev1">&gt; as soon as possible if it isn't there already.
</span><br>
<span class="quotelev1">&gt; Details like this matter a lot to a few of us,
</span><br>
<span class="quotelev1">&gt; and many of us haven't drunk completely the 3000 gallons of twisted 
</span><br>
<span class="quotelev1">&gt; logic
</span><br>
<span class="quotelev1">&gt; that is the autotool conventions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 16, 2005 at 08:44:48PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The default build is to make libmpi be a shared library and build all
</span><br>
<span class="quotelev2">&gt;&gt; the components as dynamic shared objects (think &quot;plugins&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But we currently use Autoconf+Automake+Libtool, so to build everything
</span><br>
<span class="quotelev2">&gt;&gt; static, the standard flags suffice:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will make libmpi.a, all the components are statically linked into
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.a, etc.  There's more esoteric configure flags that allow
</span><br>
<span class="quotelev2">&gt;&gt; building some components as DSOs and others statically linked into
</span><br>
<span class="quotelev2">&gt;&gt; libmpi, but most people want entirely one way or the other, so I won't
</span><br>
<span class="quotelev2">&gt;&gt; provide the [uninteresting] details here.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/07/0093.php">Koray Berk: "[O-MPI users] late comers not welcome?"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Ben Allan: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>In reply to:</strong> <a href="0090.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0076.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
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
