<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 21:36:19 2006" -->
<!-- isoreceived="20060301023619" -->
<!-- sent="Tue, 28 Feb 2006 21:36:12 -0500" -->
<!-- isosent="20060301023612" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question and possible bugfix patches..." -->
<!-- id="E6C86D73-46CD-4E56-B7C2-AB15666FF309_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0602281645j38b28da8q7751f425a4add49c_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-02-28 21:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0731.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0729.php">Durga Choudhury: "[OMPI users] Question and possible bugfix patches..."</a>
<li><strong>In reply to:</strong> <a href="0729.php">Durga Choudhury: "[OMPI users] Question and possible bugfix patches..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Reply:</strong> <a href="0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2006, at 7:45 PM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; When I downloaded openMPI and tried to compile it for our MIPS64  
</span><br>
<span class="quotelev1">&gt; platform, it broke at 3 places.
</span><br>
<p>I'm guessing since you call it MIPS64 that you aren't running IRIX,  
<br>
since most SGI users just call it MIPS ;).  We don't really support  
<br>
the MIPS platform at this time, due to lack of resources.  None of  
<br>
the institutions involved in Open MPI have MIPS-based clusters, so it  
<br>
hasn't been on our to-do list.  If someone were to offer a temporary  
<br>
guest account for a week or two, it would help immensely.  Or, even  
<br>
better, I'm happy to guide someone through cleaning up the port...
<br>
<p><span class="quotelev1">&gt; 1. The configure script in the root directory did not have a case  
</span><br>
<span class="quotelev1">&gt; for MIPS64. That is fixed in the attached patch.configure patch file.
</span><br>
<p>Thanks.  For future reference, configure is generated from a bunch  
<br>
of .m4 macro files, so those are what need to be patched.  The one in  
<br>
this case is config/ompi_config_asm.m4.  I've committed a patch for  
<br>
this in our SVN trunk - it should be in the nightly tarballs tonight.
<br>
<p><span class="quotelev1">&gt; 2. The Makefile.am in opal/asm/ directory is incorrect. It creates  
</span><br>
<span class="quotelev1">&gt; a platform-dependent file called atomic-asm.s that has #include's  
</span><br>
<span class="quotelev1">&gt; in it. According to gcc manual, .s assembly files are NOT  
</span><br>
<span class="quotelev1">&gt; preprocessed and hence none of the macros in the atomic-asm.s file  
</span><br>
<span class="quotelev1">&gt; were expanded.
</span><br>
<span class="quotelev1">&gt; Note that it works fine for IA32 platforms because that version of  
</span><br>
<span class="quotelev1">&gt; atomic-asm.s file does not have macros in it. The patch.Makefile.am  
</span><br>
<span class="quotelev1">&gt; fixes this. Note that you need to rerun automake after patching  
</span><br>
<span class="quotelev1">&gt; this file.
</span><br>
<p>Yes, the MIPS assembly is IRIX specific and (I believe) requires the  
<br>
use of the SGI compilers.  Using a capital S for the suffix isn't  
<br>
really a fix, as some compilers we have to support don't like that  
<br>
suffix (I can't remember offhand which, but there definitely are a  
<br>
couple).
<br>
<p>The right solution is to remove the short-cuts we took for the MIPS  
<br>
assembly and make it like all the other platforms.  This is unlikely  
<br>
to happen within the OMPI development team unless someone provides us  
<br>
with access to machines.
<br>
<p><span class="quotelev1">&gt; 3. I don't remember the third place it broke right now. I can give  
</span><br>
<span class="quotelev1">&gt; out a third patch later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the question is: Is there a benchmark program I can run for the  
</span><br>
<span class="quotelev1">&gt; openMPI suite of library? I tried NetPipe from Ameslab.gov. It  
</span><br>
<span class="quotelev1">&gt; seems to run, but it terminates without producing any output,  
</span><br>
<span class="quotelev1">&gt; either to the console or to any file. I tried specifying the output  
</span><br>
<span class="quotelev1">&gt; file explicitly with the -o option, but to no avail.
</span><br>
<p>NetPIPE should produce output to both standard output and a file  
<br>
np.out.  If it is failing to do so, you might want to check if it  
<br>
started in the first place.  I think some versions of NetPIPE get  
<br>
unhappy unless you run with exactly two processes (mpirun -np 2 ./ 
<br>
NPmpi), but I could be mistaken there.  If you aren't seeing the  
<br>
output, there are some fairly serious issues with the Open MPI  
<br>
build.  First step would be to make sure the NetPIPE processes are  
<br>
starting.  Assuming they are, I would start them in a debugger,  
<br>
something like:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 2 -d xterm -e gdb ./NPMpi
<br>
<p>and see if they produce output that way (which would indicate that  
<br>
there's a problem with our standard output forwarding).  If they  
<br>
produce no output, you might want to step through MPI_INIT and figure  
<br>
out where they are getting hung up.  If you can get some information  
<br>
about where things are getting stuck, I can probably help with  
<br>
narrowing down the issue.
<br>
<p>By the way, if you are interested in continuing to work on getting  
<br>
Open MPI ported to your platform, I'd recommend subscribing to the  
<br>
devel mailing list - the discussions tend to get much more technical,  
<br>
as we're less worried about boring a bunch of people who just want to  
<br>
use Open MPI.  The mailing list URL is:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/ompi.php">http://www.open-mpi.org/community/lists/ompi.php</a>
<br>
<p>I'd also recommend working from a Subversion checkout of the trunk -  
<br>
it's much easier to feed patches back (and they're much more likely  
<br>
to be accepted) if you are working from the same source as all the  
<br>
core developers.  More information is available at this URL:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a>
<br>
<p>Good luck!
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0731.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0729.php">Durga Choudhury: "[OMPI users] Question and possible bugfix patches..."</a>
<li><strong>In reply to:</strong> <a href="0729.php">Durga Choudhury: "[OMPI users] Question and possible bugfix patches..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Reply:</strong> <a href="0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
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
