<?
$subject_val = "[OMPI users] Windows: problems running on a second system.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 14 08:10:30 2010" -->
<!-- isoreceived="20100314121030" -->
<!-- sent="Sun, 14 Mar 2010 05:10:23 -0700" -->
<!-- isosent="20100314121023" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="[OMPI users] Windows: problems running on a second system." -->
<!-- id="20100314051023.0430d53b3e916c69cc97ff130928da34.40b0ad3add.wbe_at_email02.secureserver.net" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Windows: problems running on a second system.<br>
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows:%20problems%20running%20on%20a%20second%20system."><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-14 08:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12347.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system. 2nd try."</a>
<li><strong>Previous message:</strong> <a href="12345.php">Jeff Squyres: "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12355.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Reply:</strong> <a href="12355.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Maybe reply:</strong> <a href="12361.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Maybe reply:</strong> <a href="12363.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Maybe reply:</strong> <a href="12366.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>Finally got a second development system procured and up and running.</div><div><br></div><div>Got things working pretty wellon one node, installed on the second and things work there.</div><div><br></div><div>This may be a similar problem to Charles Shuller's a month ago, maybe not. Tried to launch a program from node work on node work2:<br></div><div><br></div><div><span style="color: rgb(0, 0, 255);" mce_style="color: #0000ff;"><span style="background-color: rgb(255, 255, 255);" mce_style="background-color: #ffffff;">C:\prog\mon\debug&gt;mpirun -npernode 1 -host work2 C:\prog\mon\examples\solvers\C\sjacobi.exe<br>connecting to work2<br>username:charles johnson<br>password:**********<br>Save Credential?(Y/N) y<br>[Work:03468] This feature hasn't been implemented yet.<br>[Work:03468] Could not connect to namespace cimv2 on node work2. Error code =-2147024891<br>--------------------------------------------------------------------------<br>mpirun was unable to start the specified application as it encountered an error.<br>More information may be available above.<br>--------------------------------------------------------------------------</span></span></div><div><br></div><div>So I tried some of the things you asked from him:</div><div><br></div><div><span style="color: rgb(0, 0, 255);" mce_style="color: #0000ff;">C:\prog\mon\debug&gt;wmic /node:192.168.1.37 /user:"charles johnson" process call create notepad.exe<br>Enter the password :**********<br><br>ERROR:<br>Description = Access is denied.</span><br><br>Then I tried this:</div><div><br></div><div><span style="color: rgb(0, 0, 255);" mce_style="color: #0000ff;">C:\prog\mon\debug&gt;mpirun -np 1 -host work2 notepad.exe<br>connecting to work2<br>username:charles johnson<br>password:**********<br>Save Credential?(Y/N) n<br>[Work:03108] Could not connect to namespace cimv2 on node work2. Error code =-2147024891<br>--------------------------------------------------------------------------<br>mpirun was unable to start the specified application as it encountered an error.<br>More information may be available above.<br>--------------------------------------------------------------------------</span><br></div><div><br></div><div>My case may be simpler than his, some misconfiguration or something.</div><div><br></div><div>As before: &lt;openmpi-1.4.tar.gz&gt;, built with &lt;cmake-2.6.4-win32-x86&gt;&nbsp; using the VC++ info below (probably more than you want):</div><div><br></div><div><span mce_style="color: #0000ff;" style="color: rgb(0, 0, 255);">Microsoft Visual Studio 2005<br>Version 8.0.50727.867&nbsp; (vsvista.050727-8600)<br>Microsoft .NET Framework<br>Version 2.0.50727 SP2<br><br>Installed Edition: Enterprise Architect<br><br>Microsoft Visual C++ 2005&nbsp;&nbsp; 77637-163-9000005-41563<br>Microsoft Visual C++ 2005<br><br>Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU Service Pack 1 (KB926601)&nbsp;&nbsp; <br><br>Security Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB937061)&nbsp;&nbsp; <br><br>Security Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB971023)&nbsp;&nbsp; <br><br>Security Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB971090)&nbsp;&nbsp; <br><br>Security Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB973673)&nbsp;&nbsp; <br><br>Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB932232)&nbsp;&nbsp; </span><br><br></div><div>Thanks in advance for any kind help.</div><div><br></div><div>C.S. Johnson<br></div><div><br></div></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12347.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system. 2nd try."</a>
<li><strong>Previous message:</strong> <a href="12345.php">Jeff Squyres: "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12355.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Reply:</strong> <a href="12355.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Maybe reply:</strong> <a href="12361.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Maybe reply:</strong> <a href="12363.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Maybe reply:</strong> <a href="12366.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
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
