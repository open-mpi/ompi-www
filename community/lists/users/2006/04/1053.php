<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 13 07:42:26 2006" -->
<!-- isoreceived="20060413114226" -->
<!-- sent="Thu, 13 Apr 2006 07:42:05 -0400" -->
<!-- isosent="20060413114205" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while loading shared libraries" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF671BC2_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Error while loading shared libraries" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-13 07:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1052.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe in reply to:</strong> <a href="1011.php">Aniruddha Shet: "[OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using PBS, the environment of where you ran &quot;qsub&quot; is
<br>
automatically copied out to the first node in your job where your script
<br>
is run.
<br>
<p>Can you send your torque job script?
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Aniruddha Shet
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 13, 2006 12:13 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error message is coming from all nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I explicitly add the path of Intel shared library to 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH on my 
</span><br>
<span class="quotelev1">&gt; mpiexec command, in addition to it being added in my shell 
</span><br>
<span class="quotelev1">&gt; startup file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I make a batch request to PBS. The Intel shared library is on 
</span><br>
<span class="quotelev1">&gt; a common file 
</span><br>
<span class="quotelev1">&gt; system across compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----- 
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 12, 2006 11:03 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My mistake -- I missed the &quot;orted&quot; part of the error message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;orted&quot; is a helper application that is intentally launched 
</span><br>
<span class="quotelev1">&gt; by Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; during mpirun.  What is happening is that it is not able to find the
</span><br>
<span class="quotelev2">&gt; &gt; Intel libraries, and is therefore failing to launch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So why is it not finding the Intel shared library?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - is this error message coming from a remote node?
</span><br>
<span class="quotelev2">&gt; &gt; - is your LD_LIBRARY_PATH set for all your remote nodes?  
</span><br>
<span class="quotelev1">&gt; For example,
</span><br>
<span class="quotelev2">&gt; &gt; if you're using rsh or ssh to start processes (vs. a 
</span><br>
<span class="quotelev1">&gt; resource manager
</span><br>
<span class="quotelev2">&gt; &gt; such as SLURM or Torque),  you will need to ensure that your shell
</span><br>
<span class="quotelev2">&gt; &gt; startup files on all the nodes sets LD_LIBRARY_PATH 
</span><br>
<span class="quotelev1">&gt; properly (i.e., it's
</span><br>
<span class="quotelev2">&gt; &gt; not enough to &quot;setenv LD_LIBRARY_PATH ...; mpirun ...&quot; because the
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH value won't be set on all the nodes)
</span><br>
<span class="quotelev2">&gt; &gt; - Is the Intel shared library available on all your nodes? 
</span><br>
<span class="quotelev1">&gt; (you didn't
</span><br>
<span class="quotelev2">&gt; &gt; specify if the applications that you are able to run were 
</span><br>
<span class="quotelev1">&gt; on all your
</span><br>
<span class="quotelev2">&gt; &gt; compute nodes or just on the node where you compiled them)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Aniruddha Shet [mailto:shet_at_[hidden]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, April 12, 2006 12:17 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cc: Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am able to run non-OpenMPI MPI jobs where the MPI library
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is built on top
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of Intel compilers. Plus, non-MPI jobs built with Intel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compilers run just
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fine. So, I am not sure how to go about fixing this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Aniruddha
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, April 12, 2006 8:30 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Greetings.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Your logs look normal.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; The problem appears to be how you compiled / linked your final
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; executable.  You said that you used -static -- I don't know
</span><br>
<span class="quotelev3">&gt; &gt;&gt; offhand if
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; that is a supported flag for the intel compiler or not.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did you *link*
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; with -static, or just *compile* with it?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Try running &quot;ldd&quot; on your executable -- it will show which shared
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; libraries your executable links against.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I *think* that libcprts.so is a library internal to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Inter compiler
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -- so even if icc supports &quot;-static&quot;, this library may be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; exempted...?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; (that's a total guess -- I'm not familiar with the 
</span><br>
<span class="quotelev1">&gt; internals of the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Intel compilers)  If this is the case, you might try 
</span><br>
<span class="quotelev1">&gt; installing the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Intel compiler run-time libraries on all your nodes (this seems
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; unattractive, though).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Regardless, I don't think that this is an MPI problem -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you might want
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; to try playing around with compiling some simple [non-MPI]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;hello world&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; applications with your Intel compiler to figure out how 
</span><br>
<span class="quotelev1">&gt; to compile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; things statically.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Aniruddha Shet
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Sent: Monday, April 10, 2006 10:06 PM
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Subject: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; I have built OpenMPI using ifort and icc Intel compilers
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; with --enable-static --disable-shared options. I compile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; my job using
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; OpenMPI wrapper compilers, additionally with -static option.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; When I run the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; job, I get the error 'orted:error while loading shared 
</span><br>
<span class="quotelev1">&gt; libraries:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; libcprts.so.5: cannot open shared object file: No such file
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; or directory'. I
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; also have the path of Intel compiler libraries in
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; LD_LIBRARY_PATH. Please
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; find attached a tar file having config.log and 
</span><br>
<span class="quotelev1">&gt; ompi_info output.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Aniruddha
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; --------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Aniruddha Shet | Project webpage:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Graduate Research Associate | Project webpage:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; www.cs.unm.edu/~fastos
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Dept. of Comp. Sci. &amp; Engg | Personal webpage:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; www.cse.ohio-state.edu/~shet
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; The Ohio State University | Office: DL 474
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; 2015 Neil Avenue | Phone: +1 (614) 292 7036
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Columbus OH 43210-1277 | Cell: +1 (614) 446 1630
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; --------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1052.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe in reply to:</strong> <a href="1011.php">Aniruddha Shet: "[OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
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
