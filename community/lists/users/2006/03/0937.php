<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 10:25:25 2006" -->
<!-- isoreceived="20060330152525" -->
<!-- sent="Thu, 30 Mar 2006 10:25:24 -0500" -->
<!-- isosent="20060330152524" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sed :36: unescaped newline in pattern substitution" -->
<!-- id="1824E010-8237-4540-928C-F885F61A24BF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44270163-1D14-4E03-8553-DCA46713018D_at_euclid.colorado.edu" -->
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
<strong>Date:</strong> 2006-03-30 10:25:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0938.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Previous message:</strong> <a href="0936.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0931.php">Jeffrey Fox: "[OMPI users] sed :36: unescaped newline in pattern substitution"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2006, at 5:11 PM, Jeffrey Fox wrote:
<br>
<p><span class="quotelev1">&gt; I tried building openmpi on two different powerbooks, a titanium G4 
</span><br>
<span class="quotelev1">&gt; (800mhz) and an aluminum G4 (1.6ghz) both running Mac OS X 10.4.5  
</span><br>
<span class="quotelev1">&gt; and Xcode 2.2. The sed error ONLY occurs if I try and build the  
</span><br>
<span class="quotelev1">&gt; Fortran 90 bindings ( yes I do need them).
</span><br>
<span class="quotelev1">&gt; I am using Absoft 8.0 with service pack 6.
</span><br>
<span class="quotelev1">&gt; 	In the mailing list I saw that someone else solved this problem by  
</span><br>
<span class="quotelev1">&gt; rebooting the machine, so I tried it on both machines. No luck.
</span><br>
<span class="quotelev1">&gt; 	I set  F77=&quot;/Applications/Absoft/bin/f77 -f -N15&quot; and
</span><br>
<span class="quotelev1">&gt; FC=&quot;/Applications/Absoft/bin/f95  -YEXT_NAMES=LCS -YEXT_SFX=_&quot;
</span><br>
<span class="quotelev1">&gt; While I don't see how this could be the problem, if I don't include  
</span><br>
<span class="quotelev1">&gt; the flags with the name of the compiler,
</span><br>
<span class="quotelev1">&gt; the FFLAGS get passed to both the f77 and the f95 compiler and the  
</span><br>
<span class="quotelev1">&gt; FCFLAGS are ignored.
</span><br>
<p>I'm unfortunately unable to replicate your problems on my PowerMac  
<br>
with Absoft 9.2.  I don't think it's a problem, but note that Absoft  
<br>
doesn't support the 8.0 compilers on OS X 10.4.5, only the 9.x  
<br>
series.  I see that somewhere along the way during configure, some  
<br>
bogus output ended up in the environment for configure, which is what  
<br>
is causing the problems you are seeing.  I can't figure out where  
<br>
it's coming from, but the quick and easy solution (and indeed, the  
<br>
right solution) is to not specify compiler flags in the compiler  
<br>
variable, but in the compiler flags variables.  Something like:
<br>
<p>&nbsp;&nbsp;&nbsp;F77=f77
<br>
&nbsp;&nbsp;&nbsp;FC=f90
<br>
&nbsp;&nbsp;&nbsp;FFLAGS=&quot;-f -N15&quot;
<br>
&nbsp;&nbsp;&nbsp;FCFLAGS=&quot;-YEXT_NAMES=LCS -YEXT_SFX=_&quot;
<br>
<p>That should do the trick, I think.  If not, please send the  
<br>
config.status file emitted from configure.  It might include enough  
<br>
information to track the problem down.
<br>
<p>Thanks,
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
<li><strong>Next message:</strong> <a href="0938.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Previous message:</strong> <a href="0936.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0931.php">Jeffrey Fox: "[OMPI users] sed :36: unescaped newline in pattern substitution"</a>
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
