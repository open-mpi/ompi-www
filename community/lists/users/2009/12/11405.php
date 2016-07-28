<?
$subject_val = "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 17:56:16 2009" -->
<!-- isoreceived="20091203225616" -->
<!-- sent="Thu, 3 Dec 2009 17:56:11 -0500" -->
<!-- isosent="20091203225611" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library" -->
<!-- id="F78DE076-A292-4BA2-AC1A-75FFC2BBBD81_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DB9D408FA0D8F144B7F6B12AF454A97A7C23A260_at_WS-BCO-MBX1.milky-way.battelle.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 17:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11406.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11404.php">Cupp, Matthew R: "[OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>In reply to:</strong> <a href="11404.php">Cupp, Matthew R: "[OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11414.php">Cupp, Matthew R: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Reply:</strong> <a href="11414.php">Cupp, Matthew R: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of Open MPI are you using?  We just made a minor-but-potentially-important change to how we handle our dlopen code in 1.3.4.
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
<span class="quotelev1">&gt; I&#146;m having an issue with the MPI version of application and the dynamic relocation of symbols from plugin shared libraries. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There are duplicate symbols in both the main executable (Engine) and a shared library that opened at runtime using dlopen (Plugin).  The plugin is opened with the command dlopen(pFilepath, RTLD_LAZY | RTLD_LOCAL).  When I run the entry point function that I get using dlsym, there is a segmentation violation that occurs during the execution of that function.  The mpirun outputs the backtrace of the segfault, and in it I can see that execution goes from the engine to the plugin and back to the engine.  The plugin is statically linked to a class library that is also statically linked to the engine (but a different version) and contains a couple of files found in the engine (again a different version).  The plugin should be completely self sufficient, meaning it has everything it needs to function independently of the engine, and should never need to have symbols dynamically linked to the engine. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I run the single (non-MPI) version of the application, it runs fine (apparently without plugin symbol relocation).  When I run the MPI version, I get the segfault.  The code that handles plugins is the same in both versions, and doesn&#146;t rely on any MPI functionality.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there some way to change how the MPI runtime uses the executable so it doesn&#146;t export the symbols?  Or any way to prevent the dynamical symbol relocation when loading the shared library?  Or linker flags that I could use with plugin shared library so it does list its internal symbols?
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11406.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11404.php">Cupp, Matthew R: "[OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>In reply to:</strong> <a href="11404.php">Cupp, Matthew R: "[OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11414.php">Cupp, Matthew R: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Reply:</strong> <a href="11414.php">Cupp, Matthew R: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
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
