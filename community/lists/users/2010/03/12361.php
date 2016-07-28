<?
$subject_val = "Re: [OMPI users] Windows: problems running on a second system.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 03:37:15 2010" -->
<!-- isoreceived="20100316073715" -->
<!-- sent="Tue, 16 Mar 2010 00:37:09 -0700" -->
<!-- isosent="20100316073709" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: problems running on a second system." -->
<!-- id="20100316003709.0430d53b3e916c69cc97ff130928da34.f549e31881.wbe_at_email02.secureserver.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Windows: problems running on a second system." -->
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
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows:%20problems%20running%20on%20a%20second%20system."><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-16 03:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12362.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12360.php">John R Cary: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Maybe in reply to:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12362.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Reply:</strong> <a href="12362.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>I went and did this in every conceivable combination of ways. I did the <b>DCOMCNFG</b> thing with both the launch and the remote access permissions, granting my local logon on each node everything. Then I did the namespaces with <b>wmimgmt.msc</b>, first on every object in both the CIMV2 (which had ms_409 and Applications branches) and DEFAULT (which had an ms_409 branch), and then on the CIMV2 and DEFAULT namespaces themselves, granting every checkbox permission.</div><div><br></div><div>Nothing changed, same error code which is a "DCOM access denied" error.</div><div><br></div><div>I noticed that the name mentioned in the error from mpirun is cimv2 in lower case, while the namespace in WMI security box is upper case CIMV2. Is that a problem?</div><div><br></div><div>Charlie ...</div><div><br></div>
<blockquote id="replyBlockquote" style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;" mce_style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;">
<div id="wmQuoteWrapper">
-------- Original Message --------<br>
Subject: Re: [OMPI users] Windows: problems running on a second system.<br>
From: Shiqing Fan &lt;fan@hlrs.de&gt;<br>
Date: Mon, March 15, 2010 3:18 am<br>
To: cjohnson@valverdecomputing.com<br>
Cc: Open MPI Users &lt;users@open-mpi.org&gt;<br>
<br>
<br>
Hi Johnson,<br>
<br>
I was trying to reproduce it, so that I could give you a direct <br>
solution. The problem might be the DCOM configure is not correct. Have <br>
you done it as described in this link: <br>
<a href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx" mce_href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx" target="_blank">http://msdn.microsoft.com/en-us/library/aa393266(VS.85).aspx</a>, you need <br>
give the user "remote activate" permission on namespace CIMV2 and DEFAULT.<br>
<br>
<br>
Regards,<br>
Shiqing<br>
<br>
<br>
cjohnson@valverdecomputing.com wrote:<br>
&gt; Finally got a second development system procured and up and running.<br>
&gt;<br>
&gt; Got things working pretty wellon one node, installed on the second and <br>
&gt; things work there.<br>
&gt;<br>
&gt; This may be a similar problem to Charles Shuller's a month ago, maybe <br>
&gt; not. Tried to launch a program from node work on node work2:<br>
&gt;<br>
&gt; C:\prog\mon\debug&gt;mpirun -npernode 1 -host work2 <br>
&gt; C:\prog\mon\examples\solvers\C\sjacobi.exe<br>
&gt; connecting to work2<br>
&gt; username:charles johnson<br>
&gt; password:**********<br>
&gt; Save Credential?(Y/N) y<br>
&gt; [Work:03468] This feature hasn't been implemented yet.<br>
&gt; [Work:03468] Could not connect to namespace cimv2 on node work2. Error <br>
&gt; code =-2147024891<br>
&gt; --------------------------------------------------------------------------<br>
&gt; mpirun was unable to start the specified application as it encountered <br>
&gt; an error.<br>
&gt; More information may be available above.<br>
&gt; --------------------------------------------------------------------------<br>
&gt;<br>
&gt; So I tried some of the things you asked from him:<br>
&gt;<br>
&gt; C:\prog\mon\debug&gt;wmic /node:192.168.1.37 /user:"charles johnson" <br>
&gt; process call create notepad.exe<br>
&gt; Enter the password :**********<br>
&gt;<br>
&gt; ERROR:<br>
&gt; Description = Access is denied.<br>
&gt;<br>
&gt; Then I tried this:<br>
&gt;<br>
&gt; C:\prog\mon\debug&gt;mpirun -np 1 -host work2 notepad.exe<br>
&gt; connecting to work2<br>
&gt; username:charles johnson<br>
&gt; password:**********<br>
&gt; Save Credential?(Y/N) n<br>
&gt; [Work:03108] Could not connect to namespace cimv2 on node work2. Error <br>
&gt; code =-2147024891<br>
&gt; --------------------------------------------------------------------------<br>
&gt; mpirun was unable to start the specified application as it encountered <br>
&gt; an error.<br>
&gt; More information may be available above.<br>
&gt; --------------------------------------------------------------------------<br>
&gt;<br>
&gt; My case may be simpler than his, some misconfiguration or something.<br>
&gt;<br>
&gt; As before: &lt;openmpi-1.4.tar.gz&gt;, built with &lt;cmake-2.6.4-win32-x86&gt;  <br>
&gt; using the VC++ info below (probably more than you want):<br>
&gt;<br>
&gt; Microsoft Visual Studio 2005<br>
&gt; Version 8.0.50727.867  (vsvista.050727-8600)<br>
&gt; Microsoft .NET Framework<br>
&gt; Version 2.0.50727 SP2<br>
&gt;<br>
&gt; Installed Edition: Enterprise Architect<br>
&gt;<br>
&gt; Microsoft Visual C++ 2005   77637-163-9000005-41563<br>
&gt; Microsoft Visual C++ 2005<br>
&gt;<br>
&gt; Microsoft Visual Studio 2005 Team Edition for Software Architects - <br>
&gt; ENU Service Pack 1 (KB926601)  <br>
&gt;<br>
&gt; Security Update for Microsoft Visual Studio 2005 Team Edition for <br>
&gt; Software Architects - ENU (KB937061)  <br>
&gt;<br>
&gt; Security Update for Microsoft Visual Studio 2005 Team Edition for <br>
&gt; Software Architects - ENU (KB971023)  <br>
&gt;<br>
&gt; Security Update for Microsoft Visual Studio 2005 Team Edition for <br>
&gt; Software Architects - ENU (KB971090)  <br>
&gt;<br>
&gt; Security Update for Microsoft Visual Studio 2005 Team Edition for <br>
&gt; Software Architects - ENU (KB973673)  <br>
&gt;<br>
&gt; Update for Microsoft Visual Studio 2005 Team Edition for Software <br>
&gt; Architects - ENU (KB932232)  <br>
&gt;<br>
&gt; Thanks in advance for any kind help.<br>
&gt;<br>
&gt; C.S. Johnson<br>
&gt;<br>
&gt; ------------------------------------------------------------------------<br>
&gt;<br>
&gt; _______________________________________________<br>
&gt; users mailing list<br>
&gt; users@open-mpi.org<br>
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" mce_href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
<br>
<br>
-- <br>
--------------------------------------------------------------<br>
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan" mce_href="http://www.hlrs.de/people/fan" target="_blank">http://www.hlrs.de/people/fan</a><br>
High Performance Computing           Tel.: +49 711 685 87234<br>
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832<br>
Address:Allmandring 30               email: fan@hlrs.de    <br>
70569 Stuttgart<br>
<br>

</div>
</blockquote></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12362.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12360.php">John R Cary: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Maybe in reply to:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12362.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Reply:</strong> <a href="12362.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
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
