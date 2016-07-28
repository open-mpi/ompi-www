<?
$subject_val = "Re: [OMPI users] pipe function call failed...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 22:08:39 2010" -->
<!-- isoreceived="20100310030839" -->
<!-- sent="Tue, 9 Mar 2010 20:08:31 -0700" -->
<!-- isosent="20100310030831" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pipe function call failed..." -->
<!-- id="25D56BE6-0F7A-45DF-94C9-94F2A830C2D6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100310022634.GB2090_at_lasse.mail.plastictre.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] pipe function call failed...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 22:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12292.php">Terry Frankcombe: "Re: [OMPI users] newbe question"</a>
<li><strong>Previous message:</strong> <a href="12290.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>In reply to:</strong> <a href="12290.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12294.php">马少杰: "[OMPI users] can torque support  openmpi checkpoint?"</a>
<li><strong>Reply:</strong> <a href="12294.php">马少杰: "[OMPI users] can torque support  openmpi checkpoint?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2010, at 7:26 PM, Lasse Kliemann wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your help, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --disable-pty-support indeed makes the problem go away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The system is self-made and non-standard. I have in my kernel 
</span><br>
<span class="quotelev1">&gt; config:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CONFIG_UNIX98_PTYS=y
</span><br>
<span class="quotelev1">&gt; # CONFIG_LEGACY_PTYS is not set
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe legacy PTYs are required?
</span><br>
<p>I honestly don't know - my suggestion was based solely on the glibc documentation stating that the error you got was due to the file descriptor not pointing to a pty device.
<br>
<p>Best guess: perhaps glibc isn't recognizing this pty configuration...?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moreover, the system uses UDEV (version 151). I presume that PTYs 
</span><br>
<span class="quotelev1">&gt; are in use: a directory /dev/pts/ exists and is populated with 
</span><br>
<span class="quotelev1">&gt; devices. When I do ps, it gives something like pts/1 as TTY.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Message by -Ralph Castain- from Tue 2010-03-09:
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I dug thru the glibc 2.11 manual - there doesn't appear 
</span><br>
<span class="quotelev2">&gt;&gt; to be any problem here in the code itself.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem instead, I believe, is caused by your system not 
</span><br>
<span class="quotelev2">&gt;&gt; supporting pty's, yet you are trying to use them. In this case, 
</span><br>
<span class="quotelev2">&gt;&gt; tcgetattr will return errno 22 because the file descriptor is 
</span><br>
<span class="quotelev2">&gt;&gt; not pointing to a correct terminal.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try configuring with --disable-pty-support and see if that 
</span><br>
<span class="quotelev2">&gt;&gt; fixes the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW: what system are you running this on?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2010, at 4:34 PM, Lasse Kliemann wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alas, I am by far no Glibc expert. I did a grep through the Glibc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changelog, but only found a reference to tcgetattr from 2006.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, I would also like to see a real solution here instead 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of ignoring the error condition.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Message by -Ralph Castain- from Tue 2010-03-09:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ignoring an error doesn't seem like a good idea. The real 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; question is why we are getting that error - it sounds like the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; newest Glibc release has changed the API?? Can you send us the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; revised one so we can put in a test and use the correct API for 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the installed version?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 9, 2010, at 9:40 AM, Lasse Kliemann wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpirun -n 1 ls
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun was unable to launch the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Error: pipe function call failed when setting up I/O forwarding subsystem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Node: xxxxx.xxxxxxxxxx.xxxxxxxx.xx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I receive this error constantly. I tracked it down so far that it  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; appears now certain that the 'tcgetattr' and 'tcsetattr' calls in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'orte/mca/iof/base/iof_base_setup.c' are responsible. 'errno' is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set to 22 each, which means 'invalid argument'. We can simply 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ignore the return values of these calls and continue, as done in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the attached patch. Some simple tests suggest that everything 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; else is fine, but I haven't tested thoroughly yet.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On another system, this problem is absent. The main difference 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are GCC and Glibc versions. The problematic system uses GCC 4.3.4 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and Glibc 2.11.1 -- which is the newest Glibc release and maybe 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; untested yet with OpenMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let me know which additional information I can provide to further 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; analyze this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12292.php">Terry Frankcombe: "Re: [OMPI users] newbe question"</a>
<li><strong>Previous message:</strong> <a href="12290.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>In reply to:</strong> <a href="12290.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12294.php">马少杰: "[OMPI users] can torque support  openmpi checkpoint?"</a>
<li><strong>Reply:</strong> <a href="12294.php">马少杰: "[OMPI users] can torque support  openmpi checkpoint?"</a>
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
