<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 15:18:12 2005" -->
<!-- isoreceived="20050812201812" -->
<!-- sent="Fri, 12 Aug 2005 15:17:49 -0500" -->
<!-- isosent="20050812201749" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="B6C86C58-B5D3-4997-A79A-3B934756995E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="42FD02E9.4060902_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-08-12 15:17:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0135.php">Nathan DeBardeleben: "OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0135.php">Nathan DeBardeleben: "OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 12, 2005, at 3:13 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; We've got a 64bit Linux (SUSE) box here.  For a variety of reasons
</span><br>
<span class="quotelev1">&gt; (Java, JNI, linking in with OMPI libraries, etc which I won't get  
</span><br>
<span class="quotelev1">&gt; into)
</span><br>
<span class="quotelev1">&gt; I need to compile OMPI 32 bit (or get 64bit versions of a lot of other
</span><br>
<span class="quotelev1">&gt; libraries).
</span><br>
<span class="quotelev1">&gt; I get various compile errors when I try different things, but first  
</span><br>
<span class="quotelev1">&gt; let
</span><br>
<span class="quotelev1">&gt; me explain the system we have:
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; This goes on and on and on actually.  And the 'is incompatible with
</span><br>
<span class="quotelev1">&gt; i386:x86-64 output' looks to be repeated for every line before this
</span><br>
<span class="quotelev1">&gt; error which actually caused the Make to bomb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions at all?  Surely someone must have tried to force  
</span><br>
<span class="quotelev1">&gt; OMPI to
</span><br>
<span class="quotelev1">&gt; build in 32bit mode on a 64bit machine.
</span><br>
<p>I don't think anyone has tried to build 32 bit on an Opteron, which  
<br>
is the cause of the problems...
<br>
<p>I think I know how to fix this, but won't happen until later in the  
<br>
weekend.  I can't think of a good workaround until then.  Well, one  
<br>
possibility is to set the target like you were doing and disable  
<br>
ROMIO.  Actually, you'll also need to disable Fortran 77.  So  
<br>
something like:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure [usual options] --build=i586-suse-linux --disable-io- 
<br>
romio --disable-f77
<br>
<p>might just do the trick.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0135.php">Nathan DeBardeleben: "OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0135.php">Nathan DeBardeleben: "OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0137.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
