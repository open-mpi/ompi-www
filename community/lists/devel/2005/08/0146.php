<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 13 13:34:31 2005" -->
<!-- isoreceived="20050813183431" -->
<!-- sent="Sat, 13 Aug 2005 13:34:30 -0500" -->
<!-- isosent="20050813183430" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="bbed2e7ed2a400f1c9a917959ecceadf_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B6C86C58-B5D3-4997-A79A-3B934756995E_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-13 13:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0147.php">Jeff Squyres: "frameworks in OPAL"</a>
<li><strong>Previous message:</strong> <a href="0145.php">Rich L. Graham: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>In reply to:</strong> <a href="0136.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0157.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0157.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is now fixed in SVN.  You should no longer need the 
<br>
--build=i586...  hack to compile 32 bit code on Opterons.
<br>
<p>Brian
<br>
<p>On Aug 12, 2005, at 3:17 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 12, 2005, at 3:13 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've got a 64bit Linux (SUSE) box here.  For a variety of reasons
</span><br>
<span class="quotelev2">&gt;&gt; (Java, JNI, linking in with OMPI libraries, etc which I won't get
</span><br>
<span class="quotelev2">&gt;&gt; into)
</span><br>
<span class="quotelev2">&gt;&gt; I need to compile OMPI 32 bit (or get 64bit versions of a lot of other
</span><br>
<span class="quotelev2">&gt;&gt; libraries).
</span><br>
<span class="quotelev2">&gt;&gt; I get various compile errors when I try different things, but first
</span><br>
<span class="quotelev2">&gt;&gt; let
</span><br>
<span class="quotelev2">&gt;&gt; me explain the system we have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This goes on and on and on actually.  And the 'is incompatible with
</span><br>
<span class="quotelev2">&gt;&gt; i386:x86-64 output' looks to be repeated for every line before this
</span><br>
<span class="quotelev2">&gt;&gt; error which actually caused the Make to bomb.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions at all?  Surely someone must have tried to force
</span><br>
<span class="quotelev2">&gt;&gt; OMPI to
</span><br>
<span class="quotelev2">&gt;&gt; build in 32bit mode on a 64bit machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think anyone has tried to build 32 bit on an Opteron, which
</span><br>
<span class="quotelev1">&gt; is the cause of the problems...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I know how to fix this, but won't happen until later in the
</span><br>
<span class="quotelev1">&gt; weekend.  I can't think of a good workaround until then.  Well, one
</span><br>
<span class="quotelev1">&gt; possibility is to set the target like you were doing and disable
</span><br>
<span class="quotelev1">&gt; ROMIO.  Actually, you'll also need to disable Fortran 77.  So
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ./configure [usual options] --build=i586-suse-linux --disable-io-
</span><br>
<span class="quotelev1">&gt; romio --disable-f77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; might just do the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0147.php">Jeff Squyres: "frameworks in OPAL"</a>
<li><strong>Previous message:</strong> <a href="0145.php">Rich L. Graham: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>In reply to:</strong> <a href="0136.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0157.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0157.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
