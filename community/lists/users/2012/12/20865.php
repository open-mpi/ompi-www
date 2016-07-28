<?
$subject_val = "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 12:19:50 2012" -->
<!-- isoreceived="20121203171950" -->
<!-- sent="Mon, 03 Dec 2012 10:19:39 -0700" -->
<!-- isosent="20121203171939" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7" -->
<!-- id="50BCDF2B.4040502_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC903C2BC7E_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-03 12:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20866.php">Damien: "[OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20864.php">damien_at_[hidden]: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20862.php">Iliev, Hristo: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried it on a clean VM, the 64-bit OpenMPI installer does install 
<br>
to Program Files (x86).  That's not the end of the world, but you have 
<br>
to watch your paths.
<br>
<p>Miroslav, when you ran the installer did you say yes to adding OpenMPI 
<br>
to the system path?  If you installed both 32 and 64-bit binaries, and 
<br>
added both to the system path, it will typically just append the paths.  
<br>
So if you installed 32-bit first, then 64-bit, whenever you run 
<br>
something it will load the 32-bit OpenMPI runtime first, even running 
<br>
64-bit, which will cause that bad image error. I think that's why your 
<br>
32-bit run works and 64-bit doesn't.
<br>
<p>I suggest uninstalling both 32 and 64-bit OpenMPIs, make sure they're 
<br>
removed from the path, then reinstall them *without* putting them into 
<br>
the system path, and try again from there.  You'll have to set your 
<br>
paths manually, but you'll be running with the right binaries each time.
<br>
<p>Damien
<br>
<p>On 03/12/2012 9:55 AM, Iliev, Hristo wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0xC000007B is STATUS_INVALID_IMAGE_FORMAT. It mostly means that some of the
</span><br>
<span class="quotelev1">&gt; dynamic link libraries (DLLs) that the executable is linked against are of
</span><br>
<span class="quotelev1">&gt; different &quot;bitness&quot;, e.g. 32-bit. It could be a packaging error in Open MPI,
</span><br>
<span class="quotelev1">&gt; or it could be messed up installation. You could use the Dependency Walker
</span><br>
<span class="quotelev1">&gt; tool to examine the list of DLLs that the executable depends upon and see
</span><br>
<span class="quotelev1">&gt; which one is the culprit. Dependency Walker is available here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.dependencywalker.com/">http://www.dependencywalker.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which brings me to the question: why the win64 version of Open MPI is
</span><br>
<span class="quotelev1">&gt; installed in &quot;Program Files (x86)&quot;, where 32-bit things go?!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Ilias Miroslav
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, December 03, 2012 3:40 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] 0xc000007b error exit on 64-bit Windows 7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear experts,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just installed <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/software/ompi/v1.6/downloads/OpenMPI_v1.6.1-1_win64.exe on
</span><br>
<span class="quotelev2">&gt;&gt; our Intel i7 64-bit Windows 7 system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try to run  some executable, I am getting error &quot;Application Error
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev2">&gt;&gt; application was unable to start correctly (0xc000007b)...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help please ? The &quot;C:\Program Files (x86)\OpenMPI_v1.6.1-x64\bin&quot;
</span><br>
<span class="quotelev2">&gt;&gt; string is in my %Path% variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yours, Miro
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: On 32-bit Windows 7 the 32-bit OpenMPI application works fine.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20866.php">Damien: "[OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20864.php">damien_at_[hidden]: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20862.php">Iliev, Hristo: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<!-- nextthread="start" -->
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
