<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 23:04:45 2006" -->
<!-- isoreceived="20060301040445" -->
<!-- sent="Tue, 28 Feb 2006 21:04:44 -0700" -->
<!-- isosent="20060301040444" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question and possible bugfix patches..." -->
<!-- id="f869b68c0602282004n268ec511sfaab6751fc8d8434_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E6C86D73-46CD-4E56-B7C2-AB15666FF309_at_open-mpi.org" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 23:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0733.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Previous message:</strong> <a href="0731.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0733.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0733.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian
<br>
<p>Thanks a lot for the comments and clarifications. My responses are as
<br>
follows:
<br>
<p>We are not using Irix but Linux as the operating system. The
<br>
config.guessscript identifies the system as mips64-unknown-gnu-linux.
<br>
I guess it
<br>
identifies the platform as &quot;unknwon&quot; because it is all propritary, home
<br>
built hardware.
<br>
<p>Your offer to help us port the code to our platform is really generous. If
<br>
my supervisor allows that, I'll create an account for you and let you know
<br>
the details.
<br>
<p>Now about netpipe, you are both right and wrong. You are absolutely right
<br>
that netpipe does not like more that 2 processes (it kills itself).
<br>
Fortunately, I only have 2 boards in my test cluster so that is not a
<br>
problem. And openMPI does spawn 2 copies of the netpipe on the two boards, I
<br>
have verified it by doing a &quot;ps -ef&quot; on both boards and seeing the process
<br>
running. However, I used mpiexec instead of mpirun to create the processes.
<br>
My question is (this is something I have always wondered) what is the
<br>
difference between mpirun and mpiexec?
<br>
<p>I will run it thru the debugger tomorrow and let you know of the outcome.
<br>
<p>Best regards
<br>
Durga
<br>
<p><p>On 2/28/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2006, at 7:45 PM, Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I downloaded openMPI and tried to compile it for our MIPS64
</span><br>
<span class="quotelev2">&gt; &gt; platform, it broke at 3 places.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing since you call it MIPS64 that you aren't running IRIX,
</span><br>
<span class="quotelev1">&gt; since most SGI users just call it MIPS ;).  We don't really support
</span><br>
<span class="quotelev1">&gt; the MIPS platform at this time, due to lack of resources.  None of
</span><br>
<span class="quotelev1">&gt; the institutions involved in Open MPI have MIPS-based clusters, so it
</span><br>
<span class="quotelev1">&gt; hasn't been on our to-do list.  If someone were to offer a temporary
</span><br>
<span class="quotelev1">&gt; guest account for a week or two, it would help immensely.  Or, even
</span><br>
<span class="quotelev1">&gt; better, I'm happy to guide someone through cleaning up the port...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. The configure script in the root directory did not have a case
</span><br>
<span class="quotelev2">&gt; &gt; for MIPS64. That is fixed in the attached patch.configure patch file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.  For future reference, configure is generated from a bunch
</span><br>
<span class="quotelev1">&gt; of .m4 macro files, so those are what need to be patched.  The one in
</span><br>
<span class="quotelev1">&gt; this case is config/ompi_config_asm.m4.  I've committed a patch for
</span><br>
<span class="quotelev1">&gt; this in our SVN trunk - it should be in the nightly tarballs tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. The Makefile.am in opal/asm/ directory is incorrect. It creates
</span><br>
<span class="quotelev2">&gt; &gt; a platform-dependent file called atomic-asm.s that has #include's
</span><br>
<span class="quotelev2">&gt; &gt; in it. According to gcc manual, .s assembly files are NOT
</span><br>
<span class="quotelev2">&gt; &gt; preprocessed and hence none of the macros in the atomic-asm.s file
</span><br>
<span class="quotelev2">&gt; &gt; were expanded.
</span><br>
<span class="quotelev2">&gt; &gt; Note that it works fine for IA32 platforms because that version of
</span><br>
<span class="quotelev2">&gt; &gt; atomic-asm.s file does not have macros in it. The patch.Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; fixes this. Note that you need to rerun automake after patching
</span><br>
<span class="quotelev2">&gt; &gt; this file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, the MIPS assembly is IRIX specific and (I believe) requires the
</span><br>
<span class="quotelev1">&gt; use of the SGI compilers.  Using a capital S for the suffix isn't
</span><br>
<span class="quotelev1">&gt; really a fix, as some compilers we have to support don't like that
</span><br>
<span class="quotelev1">&gt; suffix (I can't remember offhand which, but there definitely are a
</span><br>
<span class="quotelev1">&gt; couple).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The right solution is to remove the short-cuts we took for the MIPS
</span><br>
<span class="quotelev1">&gt; assembly and make it like all the other platforms.  This is unlikely
</span><br>
<span class="quotelev1">&gt; to happen within the OMPI development team unless someone provides us
</span><br>
<span class="quotelev1">&gt; with access to machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. I don't remember the third place it broke right now. I can give
</span><br>
<span class="quotelev2">&gt; &gt; out a third patch later.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now the question is: Is there a benchmark program I can run for the
</span><br>
<span class="quotelev2">&gt; &gt; openMPI suite of library? I tried NetPipe from Ameslab.gov. It
</span><br>
<span class="quotelev2">&gt; &gt; seems to run, but it terminates without producing any output,
</span><br>
<span class="quotelev2">&gt; &gt; either to the console or to any file. I tried specifying the output
</span><br>
<span class="quotelev2">&gt; &gt; file explicitly with the -o option, but to no avail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NetPIPE should produce output to both standard output and a file
</span><br>
<span class="quotelev1">&gt; np.out.  If it is failing to do so, you might want to check if it
</span><br>
<span class="quotelev1">&gt; started in the first place.  I think some versions of NetPIPE get
</span><br>
<span class="quotelev1">&gt; unhappy unless you run with exactly two processes (mpirun -np 2 ./
</span><br>
<span class="quotelev1">&gt; NPmpi), but I could be mistaken there.  If you aren't seeing the
</span><br>
<span class="quotelev1">&gt; output, there are some fairly serious issues with the Open MPI
</span><br>
<span class="quotelev1">&gt; build.  First step would be to make sure the NetPIPE processes are
</span><br>
<span class="quotelev1">&gt; starting.  Assuming they are, I would start them in a debugger,
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun -np 2 -d xterm -e gdb ./NPMpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and see if they produce output that way (which would indicate that
</span><br>
<span class="quotelev1">&gt; there's a problem with our standard output forwarding).  If they
</span><br>
<span class="quotelev1">&gt; produce no output, you might want to step through MPI_INIT and figure
</span><br>
<span class="quotelev1">&gt; out where they are getting hung up.  If you can get some information
</span><br>
<span class="quotelev1">&gt; about where things are getting stuck, I can probably help with
</span><br>
<span class="quotelev1">&gt; narrowing down the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, if you are interested in continuing to work on getting
</span><br>
<span class="quotelev1">&gt; Open MPI ported to your platform, I'd recommend subscribing to the
</span><br>
<span class="quotelev1">&gt; devel mailing list - the discussions tend to get much more technical,
</span><br>
<span class="quotelev1">&gt; as we're less worried about boring a bunch of people who just want to
</span><br>
<span class="quotelev1">&gt; use Open MPI.  The mailing list URL is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/lists/ompi.php">http://www.open-mpi.org/community/lists/ompi.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd also recommend working from a Subversion checkout of the trunk -
</span><br>
<span class="quotelev1">&gt; it's much easier to feed patches back (and they're much more likely
</span><br>
<span class="quotelev1">&gt; to be accepted) if you are working from the same source as all the
</span><br>
<span class="quotelev1">&gt; core developers.  More information is available at this URL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI developer
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
--
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0733.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Previous message:</strong> <a href="0731.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0733.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0733.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
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
