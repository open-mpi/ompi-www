<?
$subject_val = "[OMPI users] pax glitch when building on Tsubame 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 17:28:10 2012" -->
<!-- isoreceived="20120823212810" -->
<!-- sent="Thu, 23 Aug 2012 23:28:04 +0200" -->
<!-- isosent="20120823212804" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="[OMPI users] pax glitch when building on Tsubame 2.0" -->
<!-- id="20120823212804.GA11639_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] pax glitch when building on Tsubame 2.0<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 17:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19987.php">Lloyd Brown: "[OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19985.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19989.php">Reuti: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
<li><strong>Reply:</strong> <a href="19989.php">Reuti: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I noticed that pax will ask me for an archive name when I run
<br>
configure on Tsubame 2.0 (log see below). It doesn't break the build
<br>
(I can just enter a dot to quit pax), but I thought I might just as
<br>
well report it as it put me off and I feel this isn't the expected
<br>
behavior. I don't see this on any other system I build on.
<br>
<p>Cheers
<br>
-Andreas
<br>
<p><p>=========================== 8&lt; *snip* ======================
<br>
<p>~/openmpi-1.6 $ ./configure 
<br>
<p>============================================================================                                                                                                                         
<br>
== Configuring Open MPI                                                                                                                                                                              
<br>
============================================================================                                                                                                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
*** Startup tests                                                                                                                                                                                    
<br>
checking build system type... x86_64-unknown-linux-gnu                                                                                                                                               
<br>
checking host system type... x86_64-unknown-linux-gnu                                                                                                                                                
<br>
checking target system type... x86_64-unknown-linux-gnu                                                                                                                                              
<br>
checking for gcc... gcc                                                                                                                                                                              
<br>
checking whether the C compiler works... yes                                                                                                                                                         
<br>
checking for C compiler default output file name... a.out                                                                                                                                            
<br>
checking for suffix of executables...                                                                                                                                                                
<br>
checking whether we are cross compiling... no                                                                                                                                                        
<br>
checking for suffix of object files... o                                                                                                                                                             
<br>
checking whether we are using the GNU C compiler... yes                                                                                                                                              
<br>
checking whether gcc accepts -g... yes                                                                                                                                                               
<br>
checking for gcc option to accept ISO C89... none needed                                                                                                                                             
<br>
checking how to run the C preprocessor... gcc -E                                                                                                                                                     
<br>
checking for grep that handles long lines and -e... /usr/bin/grep                                                                                                                                    
<br>
checking for egrep... /usr/bin/grep -E                                                                                                                                                               
<br>
checking for ANSI C header files... yes                                                                                                                                                              
<br>
checking for sys/types.h... yes                                                                                                                                                                      
<br>
checking for sys/stat.h... yes                                                                                                                                                                       
<br>
checking for stdlib.h... yes                                                                                                                                                                         
<br>
checking for string.h... yes                                                                                                                                                                         
<br>
checking for memory.h... yes                                                                                                                                                                         
<br>
checking for strings.h... yes                                                                                                                                                                        
<br>
checking for inttypes.h... yes                                                                                                                                                                       
<br>
checking for stdint.h... yes                                                                                                                                                                         
<br>
checking for unistd.h... yes
<br>
checking minix/config.h usability... no
<br>
checking minix/config.h presence... no
<br>
checking for minix/config.h... no
<br>
checking whether it is safe to define __EXTENSIONS__... yes
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking for style of include used by make... GNU
<br>
checking how to create a ustar tar archive... 
<br>
ATTENTION! pax archive volume change required.
<br>
Ready for archive volume: 1
<br>
Input archive name or &quot;.&quot; to quit pax.
<br>
Archive name &gt;
<br>
<p>=========================== 8&lt; *snip* ======================
<br>
<p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19986/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19987.php">Lloyd Brown: "[OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19985.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19989.php">Reuti: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
<li><strong>Reply:</strong> <a href="19989.php">Reuti: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
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
