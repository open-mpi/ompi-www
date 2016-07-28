<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 21 23:14:24 2007" -->
<!-- isoreceived="20071022031424" -->
<!-- sent="Sun, 21 Oct 2007 23:13:14 -0400" -->
<!-- isosent="20071022031314" -->
<!-- name="Tony Sheh" -->
<!-- email="sheh_at_[hidden]" -->
<!-- subject="[OMPI users] xcode and ompi" -->
<!-- id="4F9EA32D-80A1-40DD-AD62-6E609C3FFE16_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Tony Sheh (<em>sheh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-21 23:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4260.php">Bill Johnstone: "[OMPI users] SLURM vs. Torque?"</a>
<li><strong>Previous message:</strong> <a href="4258.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4315.php">Jeff Squyres: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>Reply:</strong> <a href="4315.php">Jeff Squyres: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>Reply:</strong> <a href="4325.php">Brian W. Barrett: "Re: [OMPI users] xcode and ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm working in xcode and i'm trying to build an application that  
<br>
links against the OMPI libraries. So far i've included the following  
<br>
files in the build:
<br>
<p>libmpi.dylib
<br>
libopen-pal.dylib
<br>
libopen-rte.dylib
<br>
<p>and the errors i get are
<br>
<p>Undefined symbols:
<br>
.... all the MPI functions you can think of......
<br>
<p><p>as well as a warning: &quot;suggest use of -bind_at_load, as lazy binding  
<br>
may result in errors or different symbols being used
<br>
<p>I've compiled and linked to the static libraries (using ./configure -- 
<br>
enable-static) and i get the same errors. Also, i previously the  
<br>
latest version of lam/mpi installed. I didn't uninstall it since i  
<br>
lost the original directory as well as the make and configure  
<br>
settings. If that is the conflict then any information about how to  
<br>
resolve it would be good.
<br>
<p>Thanks!
<br>
Tony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4260.php">Bill Johnstone: "[OMPI users] SLURM vs. Torque?"</a>
<li><strong>Previous message:</strong> <a href="4258.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4315.php">Jeff Squyres: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>Reply:</strong> <a href="4315.php">Jeff Squyres: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>Reply:</strong> <a href="4325.php">Brian W. Barrett: "Re: [OMPI users] xcode and ompi"</a>
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
