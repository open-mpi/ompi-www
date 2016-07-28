<?
$subject_val = "Re: [OMPI users] Noob installation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 16:42:52 2014" -->
<!-- isoreceived="20141202214252" -->
<!-- sent="Tue, 2 Dec 2014 22:42:50 +0100" -->
<!-- isosent="20141202214250" -->
<!-- name="Wildes Andrew" -->
<!-- email="andywildes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Noob installation problem" -->
<!-- id="DUB127-W114B79879FC92814B4A34ADD7A0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D5A124FC-B263-44BB-A65D-335B0F5C5194_at_cisco.com" -->
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
<strong>From:</strong> Wildes Andrew (<em>andywildes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 16:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Noob installation problem"</a>
<li><strong>Previous message:</strong> <a href="25908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Noob installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Noob installation problem"</a>
<li><strong>Reply:</strong> <a href="25910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Noob installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Many thanks for your rapid reply.
<br>
Please find the relevant file attached.
<br>
Thanks again,
<br>
Andrew
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 2 Dec 2014 19:50:35 +0000
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Noob installation problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is new -- I haven't seen configure fail for libevent before.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the file opal/mca/event/libevent2021/libevent/config.log?  (please compress)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2014, at 2:20 PM, Wildes Andrew &lt;andywildes_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Timothy,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Many thanks for your e-mail, and my apologies for replying so late.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You were quite right - the GCC compiler installation is faulty.  I downloaded and reinstalled Xcode, and now am substantially further.  Compiling &quot;Hello World&quot; now works :)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm still running into some sort of compiler problem, though, as it tells me that &quot;C compiler cannot create executables&quot; for the libevent2021 MCA component event.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Looking in the config.log (attached), I see a bunch of routines that apparently cannot compile, while there are others that can.  It seems I'm still missing something.  If anyone had any ideas I'd be most grateful to hear them.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Again, my apologies for asking such basic questions, and many many thanks in advance for any help you can give.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With warm regards,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Timothy.Brown-1_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Mon, 24 Nov 2014 08:19:41 -0700
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] Noob installation problem
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Nov 24, 2014, at 3:45 AM, Wildes Andrew &lt;andywildes_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I've been trying to install OpenMPI (v. 1.8.3) on my mac (OS 10.6.8). I have gcc in my path (v. 4.6.0). The ./configure routine finds it, but says that it doesn't work.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Looking through config.log (attached), I see that it's trying to access 'conftest.c'. This file isn't found (it doesn't seem to be in the openmpi compressed file, nor is it anywhere to be found elsewhere on my mac), and I suspect that it's at this point that the compilation attempt terminates.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm sorry to bother you with what is probably a trivial problem. Any help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In looking through your log, there are a couple of things.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Firstly, it complains that gcc can not create executables. Line 16:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Secondly, line 114:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; gcc: error trying to exec 'as': execvp: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm thinking the first error is from stderr/stdout, while your config.log starts at line 25. Yes?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So on OS X have you installed Xcode and all it's dependencies? Are you using MacPorts, HomeBrew or Fink? Or any other package manager?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Are you able to compile anything? A simple (non-mpi) hello world or some such?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The program `as` is an assembler (translates assembly code to object code). 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hope this helps.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Timothy
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25862.php">http://www.open-mpi.org/community/lists/users/2014/11/25862.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; &lt;NewCompileProbs.tar&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25905.php">http://www.open-mpi.org/community/lists/users/2014/12/25905.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25906.php">http://www.open-mpi.org/community/lists/users/2014/12/25906.php</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25909/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25909/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Noob installation problem"</a>
<li><strong>Previous message:</strong> <a href="25908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Noob installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Noob installation problem"</a>
<li><strong>Reply:</strong> <a href="25910.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Noob installation problem"</a>
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
