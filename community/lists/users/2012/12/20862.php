<?
$subject_val = "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 11:55:19 2012" -->
<!-- isoreceived="20121203165519" -->
<!-- sent="Mon, 03 Dec 2012 16:55:09 +0000" -->
<!-- isosent="20121203165509" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903C2BC7E_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2E47DDD62F84E4CAF40AFFA65C0843C01E1F39AB85C_at_MAILBOX2.umb.sk" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-03 11:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20863.php">damien_at_[hidden]: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20861.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20859.php">Ilias Miroslav: "[OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20865.php">Damien: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>Reply:</strong> <a href="20865.php">Damien: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>0xC000007B is STATUS_INVALID_IMAGE_FORMAT. It mostly means that some of the
<br>
dynamic link libraries (DLLs) that the executable is linked against are of
<br>
different &quot;bitness&quot;, e.g. 32-bit. It could be a packaging error in Open MPI,
<br>
or it could be messed up installation. You could use the Dependency Walker
<br>
tool to examine the list of DLLs that the executable depends upon and see
<br>
which one is the culprit. Dependency Walker is available here:
<br>
<p><a href="http://www.dependencywalker.com/">http://www.dependencywalker.com/</a>
<br>
<p>Which brings me to the question: why the win64 version of Open MPI is
<br>
installed in &quot;Program Files (x86)&quot;, where 32-bit things go?!
<br>
<p>Hope that helps.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On Behalf Of Ilias Miroslav
&gt; Sent: Monday, December 03, 2012 3:40 PM
&gt; To: users_at_[hidden]
&gt; Subject: [OMPI users] 0xc000007b error exit on 64-bit Windows 7
&gt; 
&gt; Dear experts,
&gt; 
&gt; I just installed <a href="http://www.open">http://www.open</a>-
&gt; mpi.org/software/ompi/v1.6/downloads/OpenMPI_v1.6.1-1_win64.exe on
&gt; our Intel i7 64-bit Windows 7 system.
&gt; 
&gt; 
&gt; When I try to run  some executable, I am getting error &quot;Application Error
The
&gt; application was unable to start correctly (0xc000007b)...&quot;
&gt; 
&gt; Any help please ? The &quot;C:\Program Files (x86)\OpenMPI_v1.6.1-x64\bin&quot;
&gt; string is in my %Path% variable.
&gt; 
&gt; Yours, Miro
&gt; 
&gt; PS: On 32-bit Windows 7 the 32-bit OpenMPI application works fine.
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20862/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20863.php">damien_at_[hidden]: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20861.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20859.php">Ilias Miroslav: "[OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20865.php">Damien: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
<li><strong>Reply:</strong> <a href="20865.php">Damien: "Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7"</a>
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
