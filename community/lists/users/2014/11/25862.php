<?
$subject_val = "Re: [OMPI users] Noob installation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 24 10:19:43 2014" -->
<!-- isoreceived="20141124151943" -->
<!-- sent="Mon, 24 Nov 2014 08:19:41 -0700" -->
<!-- isosent="20141124151941" -->
<!-- name="Timothy Brown" -->
<!-- email="Timothy.Brown-1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Noob installation problem" -->
<!-- id="7BD939D7-CC88-42EA-AA3A-2B4A5FDA76DF_at_colorado.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB127-W3496FD2623560C562DCB5DD720_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Noob installation problem<br>
<strong>From:</strong> Timothy Brown (<em>Timothy.Brown-1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-24 10:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25863.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25861.php">Wildes Andrew: "[OMPI users] Noob installation problem"</a>
<li><strong>In reply to:</strong> <a href="25861.php">Wildes Andrew: "[OMPI users] Noob installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25905.php">Wildes Andrew: "Re: [OMPI users] Noob installation problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25905.php">Wildes Andrew: "Re: [OMPI users] Noob installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 24, 2014, at 3:45 AM, Wildes Andrew &lt;andywildes_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been trying to install OpenMPI (v. 1.8.3) on my mac (OS 10.6.8).  I have gcc in my path (v. 4.6.0).  The ./configure routine finds it, but says that it doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking through config.log (attached), I see that it's trying to access 'conftest.c'.  This file isn't found (it doesn't seem to be in the openmpi compressed file, nor is it anywhere to be found elsewhere on my mac), and I suspect that it's at this point that the compilation attempt terminates.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry to bother you with what is probably a trivial problem.  Any help would be greatly appreciated.
</span><br>
<p><p>In looking through your log, there are a couple of things.
<br>
<p>Firstly, it complains that gcc can not create executables. Line 16:
<br>
<p>configure: error: C compiler cannot create executables
<br>
<p>Secondly, line 114:
<br>
<p>gcc: error trying to exec 'as': execvp: No such file or directory
<br>
<p>I'm thinking the first error is from stderr/stdout, while your config.log starts at line 25. Yes?
<br>
<p>So on OS X have you installed Xcode and all it's dependencies? Are you using MacPorts, HomeBrew or Fink? Or any other package manager?
<br>
Are you able to compile anything? A simple (non-mpi) hello world or some such?
<br>
<p>The program `as` is an assembler (translates assembly code to object code). 
<br>
<p>Hope this helps.
<br>
<p>Timothy<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25863.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25861.php">Wildes Andrew: "[OMPI users] Noob installation problem"</a>
<li><strong>In reply to:</strong> <a href="25861.php">Wildes Andrew: "[OMPI users] Noob installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25905.php">Wildes Andrew: "Re: [OMPI users] Noob installation problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25905.php">Wildes Andrew: "Re: [OMPI users] Noob installation problem"</a>
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
