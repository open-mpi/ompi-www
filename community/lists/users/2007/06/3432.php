<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 15:12:10 2007" -->
<!-- isoreceived="20070610191210" -->
<!-- sent="Sun, 10 Jun 2007 15:11:58 -0400" -->
<!-- isosent="20070610191158" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Library Definitions" -->
<!-- id="43C022C7-6CC9-4F8D-A078-78A1CFC61C86_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="466C4C18.4000406_at_uark.edu" -->
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
<strong>Date:</strong> 2007-06-10 15:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3433.php">Ralph Castain: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3431.php">Jeff Pummill: "[OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3431.php">Jeff Pummill: "[OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3434.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3434.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just remove the -L and -l arguments -- OMPI's &quot;mpif90&quot; (and other  
<br>
wrapper compilers) will do all that magic for you.
<br>
<p>Many -L/-l arguments in MPI application Makefiles are throwbacks to  
<br>
older versions of MPICH wrapper compilers that didn't always work  
<br>
properly.  Those days are long gone; most (all?) MPI wrapper  
<br>
compilers do not need you to specify -L/-l these days.
<br>
<p><p><p>On Jun 10, 2007, at 3:08 PM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; Maybe the &quot;dumb question&quot; of the week, but here goes...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile a piece of code (NPB) under OpenMPI and I am  
</span><br>
<span class="quotelev1">&gt; having a problem with specifying the right library. Possibly  
</span><br>
<span class="quotelev1">&gt; something I need to define in a LD_LIBRARY_PATH statement?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using Gnu mpich, the line looked like this...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FMPI_LIB  = -L/opt/mpich/gnu/lib/ -lmpich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to replace this with...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FMPI_LIB  = -L/usr/lib/openmpi/ -llibmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to which the make responded...
</span><br>
<span class="quotelev1">&gt; mpif90 -O -o ../bin/cg.A.2 cg.o ../common/print_results.o ../common/ 
</span><br>
<span class="quotelev1">&gt; randdp.o ../common/timers.o -L/usr/lib/openmpi/ -llibmpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -llibmpi
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wrong library file? Setup or path issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev1">&gt; University of Arkansas
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
<li><strong>Next message:</strong> <a href="3433.php">Ralph Castain: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3431.php">Jeff Pummill: "[OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3431.php">Jeff Pummill: "[OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3434.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3434.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
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
