<?
$subject_val = "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 15:52:29 2008" -->
<!-- isoreceived="20081103205229" -->
<!-- sent="Mon, 3 Nov 2008 15:52:22 -0500" -->
<!-- isosent="20081103205222" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4" -->
<!-- id="A016B8C4-510B-4FD2-AD3B-A1B6440508F5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60811031236l32581986t5f8f87928d199a37_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 15:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7195.php">PattiMichelle: "[OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;"</a>
<li><strong>Previous message:</strong> <a href="7193.php">Rima Chaudhuri: "Re: [OMPI users] users Digest, Vol 1055, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="7192.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7199.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7199.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2008, at 3:36 PM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev2">&gt;&gt; For your fortran issue, the Fortran 90 interface needs the Fortran 77
</span><br>
<span class="quotelev2">&gt;&gt; interface.  So you need to supply an F77 as well (the output from  
</span><br>
<span class="quotelev2">&gt;&gt; configure
</span><br>
<span class="quotelev2">&gt;&gt; should indicate that the F90 interface was disabled because the F77
</span><br>
<span class="quotelev2">&gt;&gt; interface was disabled).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that what you mean (see below)?
</span><br>
<p>Ah yes -- that's another reason the f90 interface could be disabled:  
<br>
if configure detects that the f77 and f90 compilers are not link- 
<br>
compatible.
<br>
<p><span class="quotelev1">&gt; I thought the g95 compiler could
</span><br>
<span class="quotelev1">&gt; deal with F77 as well as F95... If so, could I just pass F77='g95'?
</span><br>
<p>That would probably work (F77=g95).  I don't know the g95 compiler at  
<br>
all, so I don't know if it also accepts Fortran-77-style codes.  But  
<br>
if it does, then you're set.  Otherwise, specify a different F77  
<br>
compiler that is link compatible with g95 and you should be good.
<br>
<span class="quotelev3">&gt;&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ugly hack: I have to go into those files and remove the &quot;std::&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I follow -- I don't see anywhere in OMPI where we use  
</span><br>
<span class="quotelev2">&gt;&gt; std::max.
</span><br>
<span class="quotelev2">&gt;&gt; What areas did you find that you needed to change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These files are part of the standard C++ headers. In my case, they  
</span><br>
<span class="quotelev1">&gt; sit in:
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits
</span><br>
<p>Ah, I see.
<br>
<p><span class="quotelev1">&gt; In principle, the problems that comes from those files would mean that
</span><br>
<span class="quotelev1">&gt; the OpenMPI source has some macro redefining max, but that's what I
</span><br>
<span class="quotelev1">&gt; could not find :-(
</span><br>
<p>Gotcha.  I don't think we are defining a &quot;max&quot; macro anywhere in the  
<br>
ompi_info source or related header files.  :-(
<br>
<p><span class="quotelev2">&gt;&gt; No.  We don't really maintain the &quot;make check&quot; stuff too well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh well... What do you use for testing the implementation?
</span><br>
<p><p>We have a whole pile of MPI tests in a private SVN repository.  The  
<br>
repository is only private because it contains a lot of other people's  
<br>
[public] MPI test suites and benchmarks, and we never looked into  
<br>
redistribution rights for their software.  There's nothing really  
<br>
secret about it -- we just haven't bothered to look into the IP  
<br>
issues.  :-)
<br>
<p>We use the MPI Testing Tool (MTT) for nightly regression across the  
<br>
community:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/">http://www.open-mpi.org/mtt/</a>
<br>
<p>We have weekday and weekend testing schedules.  M-Th we do nightly  
<br>
tests; F-Mon morning, we do a long weekend schedule.  This weekend,  
<br>
for example, we ran about 675k regression tests:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=875">http://www.open-mpi.org/mtt/index.php?do_redir=875</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7195.php">PattiMichelle: "[OMPI users] switch from mpich2 to openMPI &lt;newbie question&gt;"</a>
<li><strong>Previous message:</strong> <a href="7193.php">Rima Chaudhuri: "Re: [OMPI users] users Digest, Vol 1055, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="7192.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7199.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7199.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
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
