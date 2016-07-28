<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 10:15:40 2007" -->
<!-- isoreceived="20070319141540" -->
<!-- sent="Mon, 19 Mar 2007 10:14:44 -0400" -->
<!-- isosent="20070319141444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build problem with the pgi compiler" -->
<!-- id="DB457AEF-7FA2-4A38-9355-3FAF2EA06F6B_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5711d990703190301q1766ebf8j85366d0ef2d426b7_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 10:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2840.php">Götz Waschk: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="2838.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>In reply to:</strong> <a href="2832.php">G&#246;tz Waschk: "[OMPI users] Build problem with the pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2840.php">Götz Waschk: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Reply:</strong> <a href="2840.php">Götz Waschk: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume that this is with the 6.2 series of the PGI compiler, right?
<br>
<p>I had an exchange with PGI about this exact issue a little over a  
<br>
month ago.  This was the response from Brent Leback:
<br>
<p><span class="quotelev1">&gt; WRT this issue, I guess it is well understood by some people here,  
</span><br>
<span class="quotelev1">&gt; but news to me, that when you compile with debug, the .o files for  
</span><br>
<span class="quotelev1">&gt; the modules need to be included on the link line.
</span><br>
<span class="quotelev1">&gt; So, in your example, if you do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$ pgf90 program.f90 -I. -g test_module.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All should be fine.  I don't know if there is anything we can do  
</span><br>
<span class="quotelev1">&gt; about this without totally restructuring the dwarf info we  
</span><br>
<span class="quotelev1">&gt; generate, or the mod file format.
</span><br>
<p>(note that I had sent Brent a simplistic, non-MPI example that showed  
<br>
the same problem -- that's what he's referring to in his example, above)
<br>
<p>Open MPI does not currently list the F90 module .o files on the  
<br>
compile line.  Unfortunately, it would be a real pain to add this  
<br>
because we would need to install all the .o files for the F90 module  
<br>
(which will take a little work to do properly because Automake  
<br>
doesn't install .o files by default), and then we'd need to modify  
<br>
the wrapper compiler to add all those .o files in the link command  
<br>
line.  And of course, all of this would need to be triggered to  
<br>
*only* occur if you're both using a version of the PGI compiler that  
<br>
exhibits this behavior and are using the -g flag.
<br>
<p>Since this would be specific to a single compiler suite, and since  
<br>
it's only for debugging scenarios, and since it would be rather  
<br>
invasive/painful, we're not too excited about doing it.  You should  
<br>
be able to workaround this issue by not supplying -g in the FCFLAGS  
<br>
given to configure.
<br>
<p>That being said, patches are always welcome!  :-)
<br>
<p><p><p><p>On Mar 19, 2007, at 6:01 AM, G&#246;tz Waschk wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've stumbled upon the following problem trying to build openmpi 1.2
</span><br>
<span class="quotelev1">&gt; on RHEL4 with the Portland Group compiler  suite. The check for the
</span><br>
<span class="quotelev1">&gt; Fortran90 compiler fails if the compiler flags contain -g:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Could not determine the f90 compiler flag to
</span><br>
<span class="quotelev1">&gt; indicate where modules reside
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.log contains this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /tmp/pgf90Z2ohzWqopVcX.o(.debug_info+0x92): undefined reference to
</span><br>
<span class="quotelev1">&gt; `..Dm_ompi_mod_flag'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was the command executed by configure:
</span><br>
<span class="quotelev1">&gt; pgf90 -O2 -g conftest.f90 -Isubdir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will work if -g is not used or if the linking step is done separate
</span><br>
<span class="quotelev1">&gt; from the compilation of conftest.f90. The Portland Group support is
</span><br>
<span class="quotelev1">&gt; still trying to figure out if this is a bug in their compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, G&#246;tz Waschk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; AL I:40: Do what thou wilt shall be the whole of the Law.
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2840.php">Götz Waschk: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="2838.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>In reply to:</strong> <a href="2832.php">G&#246;tz Waschk: "[OMPI users] Build problem with the pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2840.php">Götz Waschk: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Reply:</strong> <a href="2840.php">Götz Waschk: "Re: [OMPI users] Build problem with the pgi compiler"</a>
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
