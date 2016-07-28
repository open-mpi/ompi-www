<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 13 02:12:36 2006" -->
<!-- isoreceived="20060413061236" -->
<!-- sent="Thu, 13 Apr 2006 02:12:33 -0400" -->
<!-- isosent="20060413061233" -->
<!-- name="Aniruddha Shet" -->
<!-- email="shet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while loading shared libraries" -->
<!-- id="006601c65ec1$420e2480$2402a8c0_at_Aniruddha" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF671B9E_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Aniruddha Shet (<em>shet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-13 02:12:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1053.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1051.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>In reply to:</strong> <a href="1049.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1053.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error message is coming from all nodes.
<br>
<p>I explicitly add the path of Intel shared library to LD_LIBRARY_PATH on my 
<br>
mpiexec command, in addition to it being added in my shell startup file.
<br>
<p>I make a batch request to PBS. The Intel shared library is on a common file 
<br>
system across compute nodes.
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Wednesday, April 12, 2006 11:03 PM
<br>
Subject: Re: [OMPI users] Error while loading shared libraries
<br>
<p><p><span class="quotelev1">&gt; My mistake -- I missed the &quot;orted&quot; part of the error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot; is a helper application that is intentally launched by Open MPI
</span><br>
<span class="quotelev1">&gt; during mpirun.  What is happening is that it is not able to find the
</span><br>
<span class="quotelev1">&gt; Intel libraries, and is therefore failing to launch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So why is it not finding the Intel shared library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - is this error message coming from a remote node?
</span><br>
<span class="quotelev1">&gt; - is your LD_LIBRARY_PATH set for all your remote nodes?  For example,
</span><br>
<span class="quotelev1">&gt; if you're using rsh or ssh to start processes (vs. a resource manager
</span><br>
<span class="quotelev1">&gt; such as SLURM or Torque),  you will need to ensure that your shell
</span><br>
<span class="quotelev1">&gt; startup files on all the nodes sets LD_LIBRARY_PATH properly (i.e., it's
</span><br>
<span class="quotelev1">&gt; not enough to &quot;setenv LD_LIBRARY_PATH ...; mpirun ...&quot; because the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH value won't be set on all the nodes)
</span><br>
<span class="quotelev1">&gt; - Is the Intel shared library available on all your nodes? (you didn't
</span><br>
<span class="quotelev1">&gt; specify if the applications that you are able to run were on all your
</span><br>
<span class="quotelev1">&gt; compute nodes or just on the node where you compiled them)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Aniruddha Shet [mailto:shet_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, April 12, 2006 12:17 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am able to run non-OpenMPI MPI jobs where the MPI library
</span><br>
<span class="quotelev2">&gt;&gt; is built on top
</span><br>
<span class="quotelev2">&gt;&gt; of Intel compilers. Plus, non-MPI jobs built with Intel
</span><br>
<span class="quotelev2">&gt;&gt; compilers run just
</span><br>
<span class="quotelev2">&gt;&gt; fine. So, I am not sure how to go about fixing this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Aniruddha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, April 12, 2006 8:30 AM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Greetings.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Your logs look normal.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The problem appears to be how you compiled / linked your final
</span><br>
<span class="quotelev3">&gt;&gt; &gt; executable.  You said that you used -static -- I don't know
</span><br>
<span class="quotelev2">&gt;&gt; offhand if
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that is a supported flag for the intel compiler or not.
</span><br>
<span class="quotelev2">&gt;&gt; Did you *link*
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with -static, or just *compile* with it?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Try running &quot;ldd&quot; on your executable -- it will show which shared
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libraries your executable links against.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I *think* that libcprts.so is a library internal to the
</span><br>
<span class="quotelev2">&gt;&gt; Inter compiler
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- so even if icc supports &quot;-static&quot;, this library may be
</span><br>
<span class="quotelev2">&gt;&gt; exempted...?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (that's a total guess -- I'm not familiar with the internals of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Intel compilers)  If this is the case, you might try installing the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Intel compiler run-time libraries on all your nodes (this seems
</span><br>
<span class="quotelev3">&gt;&gt; &gt; unattractive, though).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regardless, I don't think that this is an MPI problem -- 
</span><br>
<span class="quotelev2">&gt;&gt; you might want
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to try playing around with compiling some simple [non-MPI]
</span><br>
<span class="quotelev2">&gt;&gt; &quot;hello world&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; applications with your Intel compiler to figure out how to compile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; things statically.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Aniruddha Shet
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Sent: Monday, April 10, 2006 10:06 PM
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Subject: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I have built OpenMPI using ifort and icc Intel compilers
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; with --enable-static --disable-shared options. I compile
</span><br>
<span class="quotelev2">&gt;&gt; my job using
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; OpenMPI wrapper compilers, additionally with -static option.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; When I run the
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; job, I get the error 'orted:error while loading shared libraries:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; libcprts.so.5: cannot open shared object file: No such file
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; or directory'. I
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; also have the path of Intel compiler libraries in
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; LD_LIBRARY_PATH. Please
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; find attached a tar file having config.log and ompi_info output.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Aniruddha
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Aniruddha Shet | Project webpage:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Graduate Research Associate | Project webpage:
</span><br>
<span class="quotelev2">&gt;&gt; www.cs.unm.edu/~fastos
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Dept. of Comp. Sci. &amp; Engg | Personal webpage:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; www.cse.ohio-state.edu/~shet
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The Ohio State University | Office: DL 474
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 2015 Neil Avenue | Phone: +1 (614) 292 7036
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Columbus OH 43210-1277 | Cell: +1 (614) 446 1630
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="1053.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1051.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>In reply to:</strong> <a href="1049.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1053.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
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
