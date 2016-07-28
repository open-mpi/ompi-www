<?
$subject_val = "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 21:18:06 2010" -->
<!-- isoreceived="20100121021806" -->
<!-- sent="Wed, 20 Jan 2010 21:18:14 -0500" -->
<!-- isosent="20100121021814" -->
<!-- name="Peter Thompson" -->
<!-- email="peter.thompson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin" -->
<!-- id="4B57B966.4060000_at_totalviewtech.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="018CFC07-C234-4F35-8AC3-6FA37407FD56_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin<br>
<strong>From:</strong> Peter Thompson (<em>peter.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 21:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11838.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11836.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11781.php">Jeff Squyres: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView onDarwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11855.php">Ashley Pittman: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<li><strong>Reply:</strong> <a href="11855.php">Ashley Pittman: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sorry, speaking in shorthand again.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 8, 2010, at 5:03 PM, Peter Thompson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've tried a few builds of 1.4 on Snow Leopard, and trying to start up TotalView
</span><br>
<span class="quotelev2">&gt;&gt; gets some of the more 'standard' problems.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't quite know what you mean by &quot;standard&quot; problems...?
</span><br>
<p>That's more or less 'standard problems' that I hear described when someone tries 
<br>
to build and MPI (not just OpenMPI) and things don't work on first try.  I don't 
<br>
know if you've worked on the interface directly, but you are probably aware that 
<br>
TotalView has an API where we set up a structure, MPIR_PROCTABLE, based on a 
<br>
typedef MPIR_PROCDESC, which gets filled in as to what processes are started up 
<br>
on which nodes.  Which allows the debugger to attach to things automatically. 
<br>
If the build is done so that the files that hold these structures are optimized, 
<br>
sometimes the typedef is optimized away.  Or in the case of other builds, the 
<br>
file may have the correct optimization (none) but the symbol info is stripped in 
<br>
the link phase.  So it's a typical, or 'standard' issue I face, but hopefully 
<br>
not for you.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Either the typdef for MPIR_PROCDESC
</span><br>
<span class="quotelev2">&gt;&gt; can't be found, or MPIR_PROCTABLE is missing.  You can get things to work if you
</span><br>
<span class="quotelev2">&gt;&gt; start up TotalView first and then pick your program and go to the Parallel tab
</span><br>
<span class="quotelev2">&gt;&gt; and pick OpenMPI.  But it would be nice to get the classic launch working as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unclear on how you could find these symbols if you start TV first, etc., but it won't work automatically.
</span><br>
<p>One of the solutions we came up to work around this problem was to start up 
<br>
TotalView a different way, so that we need not rely on the symbol information at 
<br>
all.  If you start TotalView the 'classic' way, mpirun/mpiexec -tv -np 4 ./foo, 
<br>
it will look for MPIR_PROCTABLE and the others.  If you use the newer 'indirect' 
<br>
launch, we actually start up the debug servers with MPI, and then use some 
<br>
cached into to figure the correct process to start up with the debug servers and 
<br>
how many processes to start.  With this method, the symbol information is not 
<br>
needed.  This method works with OpenMPI on just about all platforms.  However, 
<br>
some users prefer the classic launch with -tv, and this seems to be failing with 
<br>
the latest builds I've done on Darwin.  The debug info appears to be preserved 
<br>
in the .o files, but does not always seem complete.  It probably needs another 
<br>
look on my part, to make sure I'm doing it right.  The fact that Snow Leopard 
<br>
(and maybe some earlier releases) now includes OpenMPI also confuses the issue, 
<br>
as the version that comes with Darwin does NOT contain the symbol info, and it's 
<br>
easy enough to get the native OpenMPI, and not pick up the build you intended.
<br>
<p>Does that make any more sense?
<br>
<p>I'll try playing around with 1.4.1 and see if it's me, or the compilers, or 
<br>
maybe OpenMPI.
<br>
<p>PeterT
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have deeper knowledge (given your email address) on exactly what is going wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11838.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11836.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11781.php">Jeff Squyres: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView onDarwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11855.php">Ashley Pittman: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<li><strong>Reply:</strong> <a href="11855.php">Ashley Pittman: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
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
