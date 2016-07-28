<?
$subject_val = "Re: [OMPI users] init failing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  8 07:37:26 2009" -->
<!-- isoreceived="20090808113726" -->
<!-- sent="Sat, 08 Aug 2009 13:37:22 +0200" -->
<!-- isosent="20090808113722" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] init failing" -->
<!-- id="1249731442.3831.105.camel_at_eddy" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E8B3280F-633C-4A39-BC09-409C2C7A8ABE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] init failing<br>
<strong>From:</strong> Dominik T&#225;borsk&#253; (<em>bremby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-08 07:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10261.php">Kenneth Yoshimoto: "Re: [OMPI users] bin/orted: Command not found."</a>
<li><strong>Previous message:</strong> <a href="10259.php">Matthieu Brucher: "Re: [OMPI users] bin/orted: Command not found."</a>
<li><strong>In reply to:</strong> <a href="10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10336.php">Dominik Táborský: "Re: [OMPI users] init failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres p&#195;&#173;&#197;&#161;e v P&#195;&#161; 07. 08. 2009 v 15:24 +0200:
<br>
<span class="quotelev1">&gt; I'm way behind on my mail; apologies for the delay in replying.
</span><br>
<p>Totally OK. At least you replied at all! :-)
<br>
<p><span class="quotelev1">&gt; Did you figure this out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Unfortunately no. Lately I've been a bit busy so I didn't work on it.
<br>
Now I'm getting loose again :-)
<br>
<p><span class="quotelev1">&gt; As a pure guess, it sounds like you have a heterogeneous setup --  
</span><br>
<span class="quotelev1">&gt; nodes have different distros and/or versions.  As such, your glibc's  
</span><br>
<span class="quotelev1">&gt; may be different, etc.  In such situations, it is definitely  
</span><br>
<span class="quotelev1">&gt; recommended to have a separate installation of Open MPI *on each node*  
</span><br>
<span class="quotelev1">&gt; (i.e., compiled/built for that distro/version/platform).
</span><br>
<p>Problem is, there are no distros :)
<br>
Every system is built from sources and Ubuntu's Glibc. As I described
<br>
before, I'm using Ubuntu's Glibc to make things easy and not to compile
<br>
them (that would mean creating a new toolchain and since this approach
<br>
worked for me with another project, there's no obvious reason why to
<br>
compile Glibc). Everything else is compile from sources (eg. kernel,
<br>
bash, utilities, runit, everything but Glibc libraries).
<br>
<p>Each system is the same but for hostname and SSH keys. They boot up over
<br>
network.
<br>
<p><p><span class="quotelev1">&gt; If you're copying the files from system A to system B and A and B are  
</span><br>
<span class="quotelev1">&gt; different distros/versions, it could be a good reason why it fails to  
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<p>So you recommend to compile OpenMPI. Ok, I'll get on it, hopefully it
<br>
won't be such a headache like with Glibc :-)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<p>In any case, I appreaciate your time and patience!
<br>
<p>Dominik - bremby
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2009, at 4:07 AM, Dominik T&#195;&#161;borsk&#195;&#189; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to build my own system for my nodes - minimalistic. I  
</span><br>
<span class="quotelev2">&gt; &gt; tried
</span><br>
<span class="quotelev2">&gt; &gt; to make things easy so I didn't even recompile openMPI for it, I just
</span><br>
<span class="quotelev2">&gt; &gt; copied everything from my Ubuntu installation (I know, it's very  
</span><br>
<span class="quotelev2">&gt; &gt; dirty,
</span><br>
<span class="quotelev2">&gt; &gt; but I stick to KISS :) ). Before, things just worked perfectly with  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; libraries. I only recompile executable binaries, not Glibc (not  
</span><br>
<span class="quotelev2">&gt; &gt; openMPI,
</span><br>
<span class="quotelev2">&gt; &gt; I also didn't succeed compiling openMPI but that's a different story).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, as I keep trying to run Hello world! program, I keep getting the
</span><br>
<span class="quotelev2">&gt; &gt; same error message every time. Everything in the system is fine from  
</span><br>
<span class="quotelev2">&gt; &gt; my
</span><br>
<span class="quotelev2">&gt; &gt; point of view. The error message is this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [user:24307] mca: base: components_open: component timer / linux open
</span><br>
<span class="quotelev2">&gt; &gt; function failed
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel  
</span><br>
<span class="quotelev2">&gt; &gt; process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   opal_carto_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [user:24307] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt; &gt; file ../../../orte/runtime/orte_init.c at line 77
</span><br>
<span class="quotelev2">&gt; &gt; [user:24307] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt; &gt; file ../../../orte/orted/orted_main.c at line 315
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried googling and searching the archives, nothing gave me a hint.
</span><br>
<span class="quotelev2">&gt; &gt; What might be missing? Should I really try to recompile openMPI? What
</span><br>
<span class="quotelev2">&gt; &gt; needs to be on/off in the kernel? Any ideas?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bremby
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10261.php">Kenneth Yoshimoto: "Re: [OMPI users] bin/orted: Command not found."</a>
<li><strong>Previous message:</strong> <a href="10259.php">Matthieu Brucher: "Re: [OMPI users] bin/orted: Command not found."</a>
<li><strong>In reply to:</strong> <a href="10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10336.php">Dominik Táborský: "Re: [OMPI users] init failing"</a>
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
