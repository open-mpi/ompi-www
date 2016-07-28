<?
$subject_val = "Re: [OMPI users] Windows: problems running on a second system.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 12:48:27 2010" -->
<!-- isoreceived="20100316164827" -->
<!-- sent="Tue, 16 Mar 2010 17:48:32 +0100" -->
<!-- isosent="20100316164832" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: problems running on a second system." -->
<!-- id="4B9FB660.5000500_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100316094114.0430d53b3e916c69cc97ff130928da34.e6d20b2c52.wbe_at_email02.secureserver.net" -->
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
<strong>Date:</strong> 2010-03-16 12:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12368.php">Vedran Coralic: "[OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>Previous message:</strong> <a href="12366.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>In reply to:</strong> <a href="12366.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have Windows 7 by hand right now, but I'll try it later today.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p>cjohnson_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Like I said initially, these are two Windows 7 boxes. Could that be a 
</span><br>
<span class="quotelev1">&gt; difference?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charlie ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -------- Original Message --------
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Windows: problems running on a second
</span><br>
<span class="quotelev1">&gt;     system.
</span><br>
<span class="quotelev1">&gt;     From: Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Date: Tue, March 16, 2010 5:52 am
</span><br>
<span class="quotelev1">&gt;     To: cjohnson_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Charlie,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have tested with creating a new user on my Windows XP box, and
</span><br>
<span class="quotelev1">&gt;     everything works just fine, wmic can launch remote process without
</span><br>
<span class="quotelev1">&gt;     problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     There are several possibilities that the &quot;Access is denied&quot; could
</span><br>
<span class="quotelev1">&gt;     happen. It could be the DCOM setting is wrong, i.e. the user doesn't
</span><br>
<span class="quotelev1">&gt;     have the permission to use it; or it could also be that the user
</span><br>
<span class="quotelev1">&gt;     name/password provided is not correct, so that the authentication
</span><br>
<span class="quotelev1">&gt;     just
</span><br>
<span class="quotelev1">&gt;     fails. However, your settings look good to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     cjohnson_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; No, I granted everything, clicked all the boxes.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; In DCOMCNFG.exe, got to the COM Security tab, there are two &quot;edit
</span><br>
<span class="quotelev2">&gt;     &gt; limits&quot; sections, for Access Permissions and for Launch and
</span><br>
<span class="quotelev1">&gt;     Activation
</span><br>
<span class="quotelev2">&gt;     &gt; Permissions. I added myself as a user in both, and granted all 2
</span><br>
<span class="quotelev2">&gt;     &gt; permissions in the first, and all 4 permissions in the second.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Charlie ...
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; -------- Original Message --------
</span><br>
<span class="quotelev2">&gt;     &gt; Subject: Re: [OMPI users] Windows: problems running on a second
</span><br>
<span class="quotelev2">&gt;     &gt; system.
</span><br>
<span class="quotelev2">&gt;     &gt; From: Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Date: Tue, March 16, 2010 2:33 am
</span><br>
<span class="quotelev2">&gt;     &gt; To: cjohnson_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Hi,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The lower case in the mpirun warning message shouldn't matter, as
</span><br>
<span class="quotelev2">&gt;     &gt; long
</span><br>
<span class="quotelev2">&gt;     &gt; as the wmic launch doesn't work, mpirun doesn't neither.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; According to your description, I think you missed some settings in
</span><br>
<span class="quotelev2">&gt;     &gt; DCOMCNFG, that you probably have to grant the user &quot;remote
</span><br>
<span class="quotelev2">&gt;     &gt; activation&quot;
</span><br>
<span class="quotelev2">&gt;     &gt; and &quot;remote launch&quot; permissions in the &quot;launch and activation
</span><br>
<span class="quotelev2">&gt;     &gt; permissions&quot; section; the local/remote access permissions don't help.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Regards,
</span><br>
<span class="quotelev2">&gt;     &gt; Shiqing
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; cjohnson_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; I went and did this in every conceivable combination of ways. I did
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; the *DCOMCNFG* thing with both the launch and the remote access
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; permissions, granting my local logon on each node everything.
</span><br>
<span class="quotelev1">&gt;     Then I
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; did the namespaces with *wmimgmt.msc*, first on every object in
</span><br>
<span class="quotelev1">&gt;     both
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; the CIMV2 (which had ms_409 and Applications branches) and DEFAULT
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; (which had an ms_409 branch), and then on the CIMV2 and DEFAULT
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; namespaces themselves, granting every checkbox permission.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Nothing changed, same error code which is a &quot;DCOM access denied&quot;
</span><br>
<span class="quotelev2">&gt;     &gt; error.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; I noticed that the name mentioned in the error from mpirun is
</span><br>
<span class="quotelev2">&gt;     &gt; cimv2 in
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; lower case, while the namespace in WMI security box is upper case
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; CIMV2. Is that a problem?
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Charlie ...
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; -------- Original Message --------
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Subject: Re: [OMPI users] Windows: problems running on a second
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; system.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; From: Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Date: Mon, March 15, 2010 3:18 am
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; To: cjohnson_at_[hidden]
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Hi Johnson,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; I was trying to reproduce it, so that I could give you a direct
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; solution. The problem might be the DCOM configure is not correct.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Have
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; you done it as described in this link:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; <a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx">http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx</a>&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &lt;<a href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx">http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx</a>&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; &lt;<a href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx">http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx</a>&gt;,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; you need
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; give the user &quot;remote activate&quot; permission on namespace CIMV2 and
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; DEFAULT.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Shiqing
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; cjohnson_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Finally got a second development system procured and up and
</span><br>
<span class="quotelev2">&gt;     &gt; running.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Got things working pretty wellon one node, installed on the
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; second and
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; things work there.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; This may be a similar problem to Charles Shuller's a month ago,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; maybe
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; not. Tried to launch a program from node work on node work2:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; C:\prog\mon\debug&gt;mpirun -npernode 1 -host work2
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; C:\prog\mon\examples\solvers\C\sjacobi.exe
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; connecting to work2
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; username:charles johnson
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; password:**********
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Save Credential?(Y/N) y
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; [Work:03468] This feature hasn't been implemented yet.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; [Work:03468] Could not connect to namespace cimv2 on node work2.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Error
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; code =-2147024891
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; encountered
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; an error.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; More information may be available above.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; So I tried some of the things you asked from him:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; C:\prog\mon\debug&gt;wmic /node:192.168.1.37 /user:&quot;charles johnson&quot;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; process call create notepad.exe
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Enter the password :**********
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; ERROR:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Description = Access is denied.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Then I tried this:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; C:\prog\mon\debug&gt;mpirun -np 1 -host work2 notepad.exe
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; connecting to work2
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; username:charles johnson
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; password:**********
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Save Credential?(Y/N) n
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; [Work:03108] Could not connect to namespace cimv2 on node work2.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Error
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; code =-2147024891
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; encountered
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; an error.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; More information may be available above.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; My case may be simpler than his, some misconfiguration or
</span><br>
<span class="quotelev2">&gt;     &gt; something.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; As before: &lt;openmpi-1.4.tar.gz&gt;, built with
</span><br>
<span class="quotelev1">&gt;     &lt;cmake-2.6.4-win32-x86&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; using the VC++ info below (probably more than you want):
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Microsoft Visual Studio 2005
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Version 8.0.50727.867 (vsvista.050727-8600)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Microsoft .NET Framework
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Version 2.0.50727 SP2
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Installed Edition: Enterprise Architect
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Microsoft Visual C++ 2005 77637-163-9000005-41563
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Microsoft Visual C++ 2005
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Microsoft Visual Studio 2005 Team Edition for Software
</span><br>
<span class="quotelev1">&gt;     Architects -
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; ENU Service Pack 1 (KB926601)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Security Update for Microsoft Visual Studio 2005 Team Edition for
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Software Architects - ENU (KB937061)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Security Update for Microsoft Visual Studio 2005 Team Edition for
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Software Architects - ENU (KB971023)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Security Update for Microsoft Visual Studio 2005 Team Edition for
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Software Architects - ENU (KB971090)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Security Update for Microsoft Visual Studio 2005 Team Edition for
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Software Architects - ENU (KB973673)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Update for Microsoft Visual Studio 2005 Team Edition for Software
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Architects - ENU (KB932232)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Thanks in advance for any kind help.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; C.S. Johnson
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Shiqing Fan <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; High Performance Computing Tel.: +49 711 685 87234
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Center Stuttgart (HLRS) Fax.: +49 711 685 65832
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Address:Allmandring 30 email: fan_at_[hidden]
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;     &gt; Shiqing Fan <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev2">&gt;     &gt; High Performance Computing Tel.: +49 711 685 87234
</span><br>
<span class="quotelev2">&gt;     &gt; Center Stuttgart (HLRS) Fax.: +49 711 685 65832
</span><br>
<span class="quotelev2">&gt;     &gt; Address:Allmandring 30 email: fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; 70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Shiqing Fan <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt;     High Performance Computing Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;     Center Stuttgart (HLRS) Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt;     Address:Allmandring 30 email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="12368.php">Vedran Coralic: "[OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>Previous message:</strong> <a href="12366.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>In reply to:</strong> <a href="12366.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
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
