<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 08:30:51 2006" -->
<!-- isoreceived="20060412123051" -->
<!-- sent="Wed, 12 Apr 2006 08:30:44 -0400" -->
<!-- isosent="20060412123044" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while loading shared libraries" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF671775_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-04-12 08:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1031.php">liuliang_at_[hidden]: "[OMPI users] running a job problem"</a>
<li><strong>Previous message:</strong> <a href="1029.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Maybe in reply to:</strong> <a href="1011.php">Aniruddha Shet: "[OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1039.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="1039.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings.
<br>
<p>Your logs look normal.
<br>
<p>The problem appears to be how you compiled / linked your final
<br>
executable.  You said that you used -static -- I don't know offhand if
<br>
that is a supported flag for the intel compiler or not.  Did you *link*
<br>
with -static, or just *compile* with it?
<br>
<p>Try running &quot;ldd&quot; on your executable -- it will show which shared
<br>
libraries your executable links against.
<br>
<p>I *think* that libcprts.so is a library internal to the Inter compiler
<br>
-- so even if icc supports &quot;-static&quot;, this library may be exempted...?
<br>
(that's a total guess -- I'm not familiar with the internals of the
<br>
Intel compilers)  If this is the case, you might try installing the
<br>
Intel compiler run-time libraries on all your nodes (this seems
<br>
unattractive, though).
<br>
<p>Regardless, I don't think that this is an MPI problem -- you might want
<br>
to try playing around with compiling some simple [non-MPI] &quot;hello world&quot;
<br>
applications with your Intel compiler to figure out how to compile
<br>
things statically.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Aniruddha Shet
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 10, 2006 10:06 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Error while loading shared libraries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built OpenMPI using ifort and icc Intel compilers 
</span><br>
<span class="quotelev1">&gt; with --enable-static --disable-shared options. I compile my job using 
</span><br>
<span class="quotelev1">&gt; OpenMPI wrapper compilers, additionally with -static option. 
</span><br>
<span class="quotelev1">&gt; When I run the 
</span><br>
<span class="quotelev1">&gt; job, I get the error 'orted:error while loading shared libraries: 
</span><br>
<span class="quotelev1">&gt; libcprts.so.5: cannot open shared object file: No such file 
</span><br>
<span class="quotelev1">&gt; or directory'. I 
</span><br>
<span class="quotelev1">&gt; also have the path of Intel compiler libraries in 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH. Please 
</span><br>
<span class="quotelev1">&gt; find attached a tar file having config.log and ompi_info output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Aniruddha
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------
</span><br>
<span class="quotelev1">&gt; Aniruddha Shet | Project webpage: 
</span><br>
<span class="quotelev1">&gt; <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
</span><br>
<span class="quotelev1">&gt; Graduate Research Associate | Project webpage: www.cs.unm.edu/~fastos
</span><br>
<span class="quotelev1">&gt; Dept. of Comp. Sci. &amp; Engg | Personal webpage: 
</span><br>
<span class="quotelev1">&gt; www.cse.ohio-state.edu/~shet
</span><br>
<span class="quotelev1">&gt; The Ohio State University | Office: DL 474
</span><br>
<span class="quotelev1">&gt; 2015 Neil Avenue | Phone: +1 (614) 292 7036
</span><br>
<span class="quotelev1">&gt; Columbus OH 43210-1277 | Cell: +1 (614) 446 1630
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1031.php">liuliang_at_[hidden]: "[OMPI users] running a job problem"</a>
<li><strong>Previous message:</strong> <a href="1029.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Maybe in reply to:</strong> <a href="1011.php">Aniruddha Shet: "[OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1039.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="1039.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
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
