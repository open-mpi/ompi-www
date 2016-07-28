<?
$subject_val = "[OMPI users] Windows: problems running on a second system. 2nd try.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 14 15:52:15 2010" -->
<!-- isoreceived="20100314195215" -->
<!-- sent="Sun, 14 Mar 2010 12:52:10 -0700" -->
<!-- isosent="20100314195210" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="[OMPI users] Windows: problems running on a second system. 2nd try." -->
<!-- id="20100314125209.0430d53b3e916c69cc97ff130928da34.504662986d.wbe_at_email02.secureserver.net" -->
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
<strong>Subject:</strong> [OMPI users] Windows: problems running on a second system. 2nd try.<br>
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows:%20problems%20running%20on%20a%20second%20system.%202nd%20try."><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-14 15:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12348.php">John R. Cary: "[OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Previous message:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div    class="wmMessage_user_text_special"><span mce_style="color: #000000;" style="color: rgb(0, 0, 0);"><span mce_style="font-family: Verdana; font-size: 10pt;" style="font-family: Verdana; font-size: 10pt;"><div class="wmMessage_user_text_special"><span mce_style="font-family: Verdana; font-size: 10pt;" style="font-family: Verdana; font-size: 10pt;"><div>For some reason the OpenMPI content filter tossed this message, so I'm sending it again:</div><div>___________________________________________________________<br></div><div><br></div><div>Finally got a second development system procured and up and running.</div><div><br></div><div>Got things working pretty well on one node, installed on the second and things work there.</div><div><br></div><div>This
may be a similar problem to Charles Shuller's a month ago, maybe not.
Tried to launch a program from node work on node work2:<br></div><div><br></div><div style="padding-left: 30px;" mce_style="padding-left: 30px;"><span mce_style="background-color: #ffffff;" style="background-color: rgb(255, 255, 255);">C:\prog\mon\debug&gt;mpirun -npernode 1 -host work2 C:\prog\mon\examples\solvers\C\sjacobi.exe<br>connecting to work2<br>username:charles johnson<br>password:**********<br>Save Credential?(Y/N) y<br>[Work:03468] This feature hasn't been implemented yet.<br>[Work:03468] Could not connect to namespace cimv2 on node work2. Error code =-2147024891<br>--------------------------------------------------------------------------<br>mpirun was unable to start the specified application as it encountered an error.<br>More information may be available above.<br>--------------------------------------------------------------------------</span></div><div style="padding-left: 30px;" mce_style="padding-left: 30px;"><br></div><div>So I tried some of the things you asked from him:</div><div><br></div><div style="padding-left: 30px;">C:\prog\mon\debug&gt;wmic /node:192.168.1.37 /user:"charles johnson" process call create notepad.exe<br>Enter the password :**********<br><br>ERROR:<br>Description = Access is denied.<br></div><div style="padding-left: 30px;"><br><br><br></div><div>Then I tried this:</div><div><br></div><div style="padding-left: 30px;">C:\prog\mon\debug&gt;mpirun -np 1 -host work2 notepad.exe<br>connecting to work2<br>username:charles johnson<br>password:**********<br>Save Credential?(Y/N) n<br>[Work:03108] Could not connect to namespace cimv2 on node work2. Error code =-2147024891<br>--------------------------------------------------------------------------<br>mpirun was unable to start the specified application as it encountered an error.<br>More information may be available above.<br>--------------------------------------------------------------------------<br></div><div style="padding-left: 30px;"><br></div><div>My case may be simpler than his, some misconfiguration or something.</div><div><br></div><div>My configuration: Two Windows 7 boxes, using &lt;openmpi-1.4.tar.gz&gt;, built with &lt;cmake-2.6.4-win32-x86&gt;&nbsp; using the VC++ info below (probably more than you want):</div><div><br></div><div style="padding-left: 30px;">Microsoft Visual Studio 2005<br>Version 8.0.50727.867&nbsp; (vsvista.050727-8600)<br>Microsoft .NET Framework<br>Version 2.0.50727 SP2<br><br>Installed Edition: Enterprise Architect<br><br>Microsoft Visual C++ 2005&nbsp;&nbsp; 77637-163-9000005-41563<br>Microsoft Visual C++ 2005<br><br>Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU Service Pack 1 (KB926601)&nbsp;&nbsp; <br><br>Security Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB937061)&nbsp;&nbsp; <br><br>Security Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB971023)&nbsp;&nbsp; <br><br>Security Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB971090)&nbsp;&nbsp; <br><br>Security Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB973673)&nbsp;&nbsp; <br><br>Update for Microsoft Visual Studio 2005 Team Edition for Software Architects - ENU (KB932232)&nbsp;&nbsp; <br><br></div><div>Thanks in advance for any kind help.</div><div><br></div><div>C.S. Johnson<br></div><div><br></div></span> </div></span></span> </div></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12348.php">John R. Cary: "[OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Previous message:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
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
