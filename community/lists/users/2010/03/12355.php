<?
$subject_val = "Re: [OMPI users] Windows: problems running on a second system.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 06:18:11 2010" -->
<!-- isoreceived="20100315101811" -->
<!-- sent="Mon, 15 Mar 2010 11:18:12 +0100" -->
<!-- isosent="20100315101812" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: problems running on a second system." -->
<!-- id="4B9E0964.4020507_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100314051023.0430d53b3e916c69cc97ff130928da34.40b0ad3add.wbe_at_email02.secureserver.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows: problems running on a second system.<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-15 06:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12356.php">Jeff Squyres: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>Previous message:</strong> <a href="12354.php">Dr. David Kirkby: "Re: [OMPI users] make check failure on Solaris 10 (SPARC)"</a>
<li><strong>In reply to:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12361.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Johnson,
<br>
<p>I was trying to reproduce it, so that I could give you a direct 
<br>
solution. The problem might be the DCOM configure is not correct. Have 
<br>
you done it as described in this link: 
<br>
<a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx, you need 
<br>
give the user &quot;remote activate&quot; permission on namespace CIMV2 and DEFAULT.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>cjohnson_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Finally got a second development system procured and up and running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Got things working pretty wellon one node, installed on the second and 
</span><br>
<span class="quotelev1">&gt; things work there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be a similar problem to Charles Shuller's a month ago, maybe 
</span><br>
<span class="quotelev1">&gt; not. Tried to launch a program from node work on node work2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\prog\mon\debug&gt;mpirun -npernode 1 -host work2 
</span><br>
<span class="quotelev1">&gt; C:\prog\mon\examples\solvers\C\sjacobi.exe
</span><br>
<span class="quotelev1">&gt; connecting to work2
</span><br>
<span class="quotelev1">&gt; username:charles johnson
</span><br>
<span class="quotelev1">&gt; password:**********
</span><br>
<span class="quotelev1">&gt; Save Credential?(Y/N) y
</span><br>
<span class="quotelev1">&gt; [Work:03468] This feature hasn't been implemented yet.
</span><br>
<span class="quotelev1">&gt; [Work:03468] Could not connect to namespace cimv2 on node work2. Error 
</span><br>
<span class="quotelev1">&gt; code =-2147024891
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered 
</span><br>
<span class="quotelev1">&gt; an error.
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I tried some of the things you asked from him:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\prog\mon\debug&gt;wmic /node:192.168.1.37 /user:&quot;charles johnson&quot; 
</span><br>
<span class="quotelev1">&gt; process call create notepad.exe
</span><br>
<span class="quotelev1">&gt; Enter the password :**********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR:
</span><br>
<span class="quotelev1">&gt; Description = Access is denied.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I tried this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\prog\mon\debug&gt;mpirun -np 1 -host work2 notepad.exe
</span><br>
<span class="quotelev1">&gt; connecting to work2
</span><br>
<span class="quotelev1">&gt; username:charles johnson
</span><br>
<span class="quotelev1">&gt; password:**********
</span><br>
<span class="quotelev1">&gt; Save Credential?(Y/N) n
</span><br>
<span class="quotelev1">&gt; [Work:03108] Could not connect to namespace cimv2 on node work2. Error 
</span><br>
<span class="quotelev1">&gt; code =-2147024891
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered 
</span><br>
<span class="quotelev1">&gt; an error.
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My case may be simpler than his, some misconfiguration or something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As before: &lt;openmpi-1.4.tar.gz&gt;, built with &lt;cmake-2.6.4-win32-x86&gt;  
</span><br>
<span class="quotelev1">&gt; using the VC++ info below (probably more than you want):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Microsoft Visual Studio 2005
</span><br>
<span class="quotelev1">&gt; Version 8.0.50727.867  (vsvista.050727-8600)
</span><br>
<span class="quotelev1">&gt; Microsoft .NET Framework
</span><br>
<span class="quotelev1">&gt; Version 2.0.50727 SP2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Installed Edition: Enterprise Architect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Microsoft Visual C++ 2005   77637-163-9000005-41563
</span><br>
<span class="quotelev1">&gt; Microsoft Visual C++ 2005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Microsoft Visual Studio 2005 Team Edition for Software Architects - 
</span><br>
<span class="quotelev1">&gt; ENU Service Pack 1 (KB926601)  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Security Update for Microsoft Visual Studio 2005 Team Edition for 
</span><br>
<span class="quotelev1">&gt; Software Architects - ENU (KB937061)  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Security Update for Microsoft Visual Studio 2005 Team Edition for 
</span><br>
<span class="quotelev1">&gt; Software Architects - ENU (KB971023)  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Security Update for Microsoft Visual Studio 2005 Team Edition for 
</span><br>
<span class="quotelev1">&gt; Software Architects - ENU (KB971090)  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Security Update for Microsoft Visual Studio 2005 Team Edition for 
</span><br>
<span class="quotelev1">&gt; Software Architects - ENU (KB973673)  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Update for Microsoft Visual Studio 2005 Team Edition for Software 
</span><br>
<span class="quotelev1">&gt; Architects - ENU (KB932232)  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any kind help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C.S. Johnson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12356.php">Jeff Squyres: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>Previous message:</strong> <a href="12354.php">Dr. David Kirkby: "Re: [OMPI users] make check failure on Solaris 10 (SPARC)"</a>
<li><strong>In reply to:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12361.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
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
