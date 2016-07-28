<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 14:17:28 2006" -->
<!-- isoreceived="20060412181728" -->
<!-- sent="Wed, 12 Apr 2006 14:17:11 -0400" -->
<!-- isosent="20060412181711" -->
<!-- name="Aniruddha Shet" -->
<!-- email="shet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while loading shared libraries" -->
<!-- id="008601c65e5d$512fe2a0$3401a8c0_at_dl474swarup" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF671775_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-04-12 14:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1040.php">Jeffrey B. Layton: "[OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1038.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>In reply to:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1049.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am able to run non-OpenMPI MPI jobs where the MPI library is built on top
<br>
of Intel compilers. Plus, non-MPI jobs built with Intel compilers run just
<br>
fine. So, I am not sure how to go about fixing this.
<br>
<p>Thanks,
<br>
Aniruddha
<br>
<p>----- Original Message -----
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Wednesday, April 12, 2006 8:30 AM
<br>
Subject: Re: [OMPI users] Error while loading shared libraries
<br>
<p><p><span class="quotelev1">&gt; Greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your logs look normal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem appears to be how you compiled / linked your final
</span><br>
<span class="quotelev1">&gt; executable.  You said that you used -static -- I don't know offhand if
</span><br>
<span class="quotelev1">&gt; that is a supported flag for the intel compiler or not.  Did you *link*
</span><br>
<span class="quotelev1">&gt; with -static, or just *compile* with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try running &quot;ldd&quot; on your executable -- it will show which shared
</span><br>
<span class="quotelev1">&gt; libraries your executable links against.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I *think* that libcprts.so is a library internal to the Inter compiler
</span><br>
<span class="quotelev1">&gt; -- so even if icc supports &quot;-static&quot;, this library may be exempted...?
</span><br>
<span class="quotelev1">&gt; (that's a total guess -- I'm not familiar with the internals of the
</span><br>
<span class="quotelev1">&gt; Intel compilers)  If this is the case, you might try installing the
</span><br>
<span class="quotelev1">&gt; Intel compiler run-time libraries on all your nodes (this seems
</span><br>
<span class="quotelev1">&gt; unattractive, though).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, I don't think that this is an MPI problem -- you might want
</span><br>
<span class="quotelev1">&gt; to try playing around with compiling some simple [non-MPI] &quot;hello world&quot;
</span><br>
<span class="quotelev1">&gt; applications with your Intel compiler to figure out how to compile
</span><br>
<span class="quotelev1">&gt; things statically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Aniruddha Shet
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, April 10, 2006 10:06 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have built OpenMPI using ifort and icc Intel compilers
</span><br>
<span class="quotelev2">&gt; &gt; with --enable-static --disable-shared options. I compile my job using
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI wrapper compilers, additionally with -static option.
</span><br>
<span class="quotelev2">&gt; &gt; When I run the
</span><br>
<span class="quotelev2">&gt; &gt; job, I get the error 'orted:error while loading shared libraries:
</span><br>
<span class="quotelev2">&gt; &gt; libcprts.so.5: cannot open shared object file: No such file
</span><br>
<span class="quotelev2">&gt; &gt; or directory'. I
</span><br>
<span class="quotelev2">&gt; &gt; also have the path of Intel compiler libraries in
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH. Please
</span><br>
<span class="quotelev2">&gt; &gt; find attached a tar file having config.log and ompi_info output.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Aniruddha
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------
</span><br>
<span class="quotelev2">&gt; &gt; Aniruddha Shet | Project webpage:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; Graduate Research Associate | Project webpage: www.cs.unm.edu/~fastos
</span><br>
<span class="quotelev2">&gt; &gt; Dept. of Comp. Sci. &amp; Engg | Personal webpage:
</span><br>
<span class="quotelev2">&gt; &gt; www.cse.ohio-state.edu/~shet
</span><br>
<span class="quotelev2">&gt; &gt; The Ohio State University | Office: DL 474
</span><br>
<span class="quotelev2">&gt; &gt; 2015 Neil Avenue | Phone: +1 (614) 292 7036
</span><br>
<span class="quotelev2">&gt; &gt; Columbus OH 43210-1277 | Cell: +1 (614) 446 1630
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1040.php">Jeffrey B. Layton: "[OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1038.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>In reply to:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1049.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
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
