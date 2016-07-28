<?
$subject_val = "Re: [OMPI users] Windows: problems running on a second system.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 12:41:20 2010" -->
<!-- isoreceived="20100316164120" -->
<!-- sent="Tue, 16 Mar 2010 09:41:14 -0700" -->
<!-- isosent="20100316164114" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: problems running on a second system." -->
<!-- id="20100316094114.0430d53b3e916c69cc97ff130928da34.e6d20b2c52.wbe_at_email02.secureserver.net" -->
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
<strong>Date:</strong> 2010-03-16 12:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12367.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12365.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Maybe in reply to:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12367.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Reply:</strong> <a href="12367.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>Like I said initially, these are two Windows 7 boxes. Could that be a difference?</div><div><br></div><div>Charlie ...<br></div>
<blockquote id="replyBlockquote" webmail="1" style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;">
<div id="wmQuoteWrapper">
-------- Original Message --------<br>
Subject: Re: [OMPI users] Windows: problems running on a second system.<br>
From: Shiqing Fan &lt;fan@hlrs.de&gt;<br>
Date: Tue, March 16, 2010 5:52 am<br>
To: cjohnson@valverdecomputing.com<br>
Cc: Open MPI Users &lt;users@open-mpi.org&gt;<br>
<br>
<br>
Hi Charlie,<br>
<br>
I have tested with creating a new user on my Windows XP box, and <br>
everything works just fine, wmic can launch remote process without problem.<br>
<br>
There are several possibilities that the "Access is denied" could <br>
happen. It could be the DCOM setting is wrong, i.e. the user doesn't <br>
have the permission to use it; or it could also be that the user <br>
name/password provided is not correct, so that the authentication just <br>
fails. However, your settings look good to me.<br>
<br>
<br>
Regards,<br>
Shiqing<br>
<br>
<br>
<br>
cjohnson@valverdecomputing.com wrote:<br>
&gt; No, I granted everything, clicked all the boxes.<br>
&gt;<br>
&gt; In DCOMCNFG.exe, got to the COM Security tab, there are two "edit <br>
&gt; limits" sections, for Access Permissions and for Launch and Activation <br>
&gt; Permissions. I added myself as a user in both, and granted all 2 <br>
&gt; permissions in the first, and all 4 permissions in the second.<br>
&gt;<br>
&gt; Charlie ...<br>
&gt;<br>
&gt;     -------- Original Message --------<br>
&gt;     Subject: Re: [OMPI users] Windows: problems running on a second<br>
&gt;     system.<br>
&gt;     From: Shiqing Fan &lt;fan@hlrs.de&gt;<br>
&gt;     Date: Tue, March 16, 2010 2:33 am<br>
&gt;     To: cjohnson@valverdecomputing.com<br>
&gt;     Cc: Open MPI Users &lt;users@open-mpi.org&gt;<br>
&gt;<br>
&gt;     Hi,<br>
&gt;<br>
&gt;     The lower case in the mpirun warning message shouldn't matter, as<br>
&gt;     long<br>
&gt;     as the wmic launch doesn't work, mpirun doesn't neither.<br>
&gt;<br>
&gt;     According to your description, I think you missed some settings in<br>
&gt;     DCOMCNFG, that you probably have to grant the user "remote<br>
&gt;     activation"<br>
&gt;     and "remote launch" permissions in the "launch and activation<br>
&gt;     permissions" section; the local/remote access permissions don't help.<br>
&gt;<br>
&gt;<br>
&gt;     Regards,<br>
&gt;     Shiqing<br>
&gt;<br>
&gt;<br>
&gt;<br>
&gt;     cjohnson@valverdecomputing.com wrote:<br>
&gt;     &gt; I went and did this in every conceivable combination of ways. I did<br>
&gt;     &gt; the *DCOMCNFG* thing with both the launch and the remote access<br>
&gt;     &gt; permissions, granting my local logon on each node everything. Then I<br>
&gt;     &gt; did the namespaces with *wmimgmt.msc*, first on every object in both<br>
&gt;     &gt; the CIMV2 (which had ms_409 and Applications branches) and DEFAULT<br>
&gt;     &gt; (which had an ms_409 branch), and then on the CIMV2 and DEFAULT<br>
&gt;     &gt; namespaces themselves, granting every checkbox permission.<br>
&gt;     &gt;<br>
&gt;     &gt; Nothing changed, same error code which is a "DCOM access denied"<br>
&gt;     error.<br>
&gt;     &gt;<br>
&gt;     &gt; I noticed that the name mentioned in the error from mpirun is<br>
&gt;     cimv2 in<br>
&gt;     &gt; lower case, while the namespace in WMI security box is upper case<br>
&gt;     &gt; CIMV2. Is that a problem?<br>
&gt;     &gt;<br>
&gt;     &gt; Charlie ...<br>
&gt;     &gt;<br>
&gt;     &gt; -------- Original Message --------<br>
&gt;     &gt; Subject: Re: [OMPI users] Windows: problems running on a second<br>
&gt;     &gt; system.<br>
&gt;     &gt; From: Shiqing Fan &lt;fan@hlrs.de&gt;<br>
&gt;     &gt; Date: Mon, March 15, 2010 3:18 am<br>
&gt;     &gt; To: cjohnson@valverdecomputing.com<br>
&gt;     &gt; Cc: Open MPI Users &lt;users@open-mpi.org&gt;<br>
&gt;     &gt;<br>
&gt;     &gt;<br>
&gt;     &gt; Hi Johnson,<br>
&gt;     &gt;<br>
&gt;     &gt; I was trying to reproduce it, so that I could give you a direct<br>
&gt;     &gt; solution. The problem might be the DCOM configure is not correct.<br>
&gt;     &gt; Have<br>
&gt;     &gt; you done it as described in this link:<br>
&gt;     &gt; <a target="_blank" href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx">http://msdn.microsoft.com/en-us/library/aa393266(VS.85).aspx</a><br>
&gt;     &lt;<a target="_blank" href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx">http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx</a>&gt;<br>
&gt;     &gt; &lt;<a target="_blank" href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx">http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx</a>&gt;,<br>
&gt;     &gt; you need<br>
&gt;     &gt; give the user "remote activate" permission on namespace CIMV2 and<br>
&gt;     &gt; DEFAULT.<br>
&gt;     &gt;<br>
&gt;     &gt;<br>
&gt;     &gt; Regards,<br>
&gt;     &gt; Shiqing<br>
&gt;     &gt;<br>
&gt;     &gt;<br>
&gt;     &gt; cjohnson@valverdecomputing.com wrote:<br>
&gt;     &gt; &gt; Finally got a second development system procured and up and<br>
&gt;     running.<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Got things working pretty wellon one node, installed on the<br>
&gt;     &gt; second and<br>
&gt;     &gt; &gt; things work there.<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; This may be a similar problem to Charles Shuller's a month ago,<br>
&gt;     &gt; maybe<br>
&gt;     &gt; &gt; not. Tried to launch a program from node work on node work2:<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; C:\prog\mon\debug&gt;mpirun -npernode 1 -host work2<br>
&gt;     &gt; &gt; C:\prog\mon\examples\solvers\C\sjacobi.exe<br>
&gt;     &gt; &gt; connecting to work2<br>
&gt;     &gt; &gt; username:charles johnson<br>
&gt;     &gt; &gt; password:**********<br>
&gt;     &gt; &gt; Save Credential?(Y/N) y<br>
&gt;     &gt; &gt; [Work:03468] This feature hasn't been implemented yet.<br>
&gt;     &gt; &gt; [Work:03468] Could not connect to namespace cimv2 on node work2.<br>
&gt;     &gt; Error<br>
&gt;     &gt; &gt; code =-2147024891<br>
&gt;     &gt; &gt;<br>
&gt;     --------------------------------------------------------------------------<br>
&gt;     &gt; &gt; mpirun was unable to start the specified application as it<br>
&gt;     &gt; encountered<br>
&gt;     &gt; &gt; an error.<br>
&gt;     &gt; &gt; More information may be available above.<br>
&gt;     &gt; &gt;<br>
&gt;     --------------------------------------------------------------------------<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; So I tried some of the things you asked from him:<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; C:\prog\mon\debug&gt;wmic /node:192.168.1.37 /user:"charles johnson"<br>
&gt;     &gt; &gt; process call create notepad.exe<br>
&gt;     &gt; &gt; Enter the password :**********<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; ERROR:<br>
&gt;     &gt; &gt; Description = Access is denied.<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Then I tried this:<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; C:\prog\mon\debug&gt;mpirun -np 1 -host work2 notepad.exe<br>
&gt;     &gt; &gt; connecting to work2<br>
&gt;     &gt; &gt; username:charles johnson<br>
&gt;     &gt; &gt; password:**********<br>
&gt;     &gt; &gt; Save Credential?(Y/N) n<br>
&gt;     &gt; &gt; [Work:03108] Could not connect to namespace cimv2 on node work2.<br>
&gt;     &gt; Error<br>
&gt;     &gt; &gt; code =-2147024891<br>
&gt;     &gt; &gt;<br>
&gt;     --------------------------------------------------------------------------<br>
&gt;     &gt; &gt; mpirun was unable to start the specified application as it<br>
&gt;     &gt; encountered<br>
&gt;     &gt; &gt; an error.<br>
&gt;     &gt; &gt; More information may be available above.<br>
&gt;     &gt; &gt;<br>
&gt;     --------------------------------------------------------------------------<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; My case may be simpler than his, some misconfiguration or<br>
&gt;     something.<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; As before: &lt;openmpi-1.4.tar.gz&gt;, built with &lt;cmake-2.6.4-win32-x86&gt;<br>
&gt;     &gt; &gt; using the VC++ info below (probably more than you want):<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Microsoft Visual Studio 2005<br>
&gt;     &gt; &gt; Version 8.0.50727.867 (vsvista.050727-8600)<br>
&gt;     &gt; &gt; Microsoft .NET Framework<br>
&gt;     &gt; &gt; Version 2.0.50727 SP2<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Installed Edition: Enterprise Architect<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Microsoft Visual C++ 2005 77637-163-9000005-41563<br>
&gt;     &gt; &gt; Microsoft Visual C++ 2005<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Microsoft Visual Studio 2005 Team Edition for Software Architects -<br>
&gt;     &gt; &gt; ENU Service Pack 1 (KB926601)<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Security Update for Microsoft Visual Studio 2005 Team Edition for<br>
&gt;     &gt; &gt; Software Architects - ENU (KB937061)<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Security Update for Microsoft Visual Studio 2005 Team Edition for<br>
&gt;     &gt; &gt; Software Architects - ENU (KB971023)<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Security Update for Microsoft Visual Studio 2005 Team Edition for<br>
&gt;     &gt; &gt; Software Architects - ENU (KB971090)<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Security Update for Microsoft Visual Studio 2005 Team Edition for<br>
&gt;     &gt; &gt; Software Architects - ENU (KB973673)<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Update for Microsoft Visual Studio 2005 Team Edition for Software<br>
&gt;     &gt; &gt; Architects - ENU (KB932232)<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; Thanks in advance for any kind help.<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; C.S. Johnson<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt;<br>
&gt;     ------------------------------------------------------------------------<br>
&gt;     &gt; &gt;<br>
&gt;     &gt; &gt; _______________________________________________<br>
&gt;     &gt; &gt; users mailing list<br>
&gt;     &gt; &gt; users@open-mpi.org<br>
&gt;     &gt; &gt; <a target="_blank" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
&gt;     &gt;<br>
&gt;     &gt;<br>
&gt;     &gt; --<br>
&gt;     &gt; --------------------------------------------------------------<br>
&gt;     &gt; Shiqing Fan <a target="_blank" href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a><br>
&gt;     &gt; High Performance Computing Tel.: +49 711 685 87234<br>
&gt;     &gt; Center Stuttgart (HLRS) Fax.: +49 711 685 65832<br>
&gt;     &gt; Address:Allmandring 30 email: fan@hlrs.de<br>
&gt;     &gt; 70569 Stuttgart<br>
&gt;     &gt;<br>
&gt;<br>
&gt;<br>
&gt;     -- <br>
&gt;     --------------------------------------------------------------<br>
&gt;     Shiqing Fan <a target="_blank" href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a><br>
&gt;     High Performance Computing Tel.: +49 711 685 87234<br>
&gt;     Center Stuttgart (HLRS) Fax.: +49 711 685 65832<br>
&gt;     Address:Allmandring 30 email: fan@hlrs.de<br>
&gt;     70569 Stuttgart<br>
&gt;<br>
<br>
<br>
-- <br>
--------------------------------------------------------------<br>
Shiqing Fan                          <a target="_blank" href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a><br>
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
<li><strong>Next message:</strong> <a href="12367.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12365.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Maybe in reply to:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12367.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Reply:</strong> <a href="12367.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
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
