<?
$subject_val = "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 11:24:13 2009" -->
<!-- isoreceived="20091204162413" -->
<!-- sent="Fri, 04 Dec 2009 11:24:03 -0500" -->
<!-- isosent="20091204162403" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library" -->
<!-- id="DB9D408FA0D8F144B7F6B12AF454A97A7C2922F6_at_WS-BCO-MBX1.milky-way.battelle.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F78DE076-A292-4BA2-AC1A-75FFC2BBBD81_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library<br>
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 11:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11405.php">Jeff Squyres: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are using 1.3.3.  I found the linker flag -Bsymbolic, and applying it to the plugin appears to have fixed the issue.  The problem is a result of not properly structuring the plugin's code and having duplicate symbol names, the behavior of Open MPI just brought them to the light.
<br>
<p>Thanks for your help,
<br>
Matt
<br>
______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Thursday, December 03, 2009 5:56 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library
<br>
<p>What version of Open MPI are you using?  We just made a minor-but-potentially-important change to how we handle our dlopen code in 1.3.4.
<br>
<p>Additionally, you might try configuring Open MPI with the --disable-dlopen configure switch.  This switch does two things:
<br>
<p>1. Slurps all of Open MPI's plugins up into normal libraries (e.g., libmpi.so or libmpi.a)
<br>
2. Disables / compiles out all of Open MPI's dlopen (and related) code
<br>
<p>If 1.3.4 doesn't fix your problem, then --disable-dlopen should.
<br>
<p><p>On Dec 3, 2009, at 2:56 PM, Cupp, Matthew R wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm having an issue with the MPI version of application and the dynamic relocation of symbols from plugin shared libraries. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There are duplicate symbols in both the main executable (Engine) and a shared library that opened at runtime using dlopen (Plugin).  The plugin is opened with the command dlopen(pFilepath, RTLD_LAZY | RTLD_LOCAL).  When I run the entry point function that I get using dlsym, there is a segmentation violation that occurs during the execution of that function.  The mpirun outputs the backtrace of the segfault, and in it I can see that execution goes from the engine to the plugin and back to the engine.  The plugin is statically linked to a class library that is also statically linked to the engine (but a different version) and contains a couple of files found in the engine (again a different version).  The plugin should be completely self sufficient, meaning it has everything it needs to function independently of the engine, and should never need to have symbols dynamically linked to the engine. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I run the single (non-MPI) version of the application, it runs fine (apparently without plugin symbol relocation).  When I run the MPI version, I get the segfault.  The code that handles plugins is the same in both versions, and doesn't rely on any MPI functionality.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there some way to change how the MPI runtime uses the executable so it doesn't export the symbols?  Or any way to prevent the dynamical symbol relocation when loading the shared library?  Or linker flags that I could use with plugin shared library so it does list its internal symbols?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have a Stack Overflow question on this here:
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/1821153/segfault-on-c-plugin-library-with-duplicate-symbols">http://stackoverflow.com/questions/1821153/segfault-on-c-plugin-library-with-duplicate-symbols</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ______________________________
</span><br>
<span class="quotelev1">&gt; Matt Cupp
</span><br>
<span class="quotelev1">&gt; Battelle Memorial Institute
</span><br>
<span class="quotelev1">&gt; Statistics and Information Analysis
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
Jeff Squyres
jsquyres_at_[hidden]
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11405.php">Jeff Squyres: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
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
