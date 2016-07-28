<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 23:36:06 2006" -->
<!-- isoreceived="20060310043606" -->
<!-- sent="Thu, 09 Mar 2006 20:37:21 -0800" -->
<!-- isosent="20060310043721" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet on linux cluster" -->
<!-- id="44110281.30304_at_reachone.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F7138DEA-2A8B-4DE6-9009-494B97131B1F_at_open-mpi.org" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-09 23:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0814.php">Ravi Manumachu: "[OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached are output files from a build with the adjustments you suggested.
<br>
<p>setenv FC pgf90
<br>
setenv F77 pgf90
<br>
setenv CCPFLAGS -I/usr/include/gm
<br>
<p>./configure --prefix=/users/rosmond/ompi --with-gm
<br>
<p>The results are the same.
<br>
<p>P.S. I understand that the mpi2 option is just a dummy. I use it because 
<br>
I am
<br>
porting a code from an SGI Origin, which has full mpi2 one-sided 
<br>
support. This
<br>
options makes it unnecessary to add my own dummy MPI2 routines to my source.
<br>
My code has both MPI1 and MPI2 message passing options, so it's one of the
<br>
reasons I like OPENMPI over MPICH.
<br>
<p><p><p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;On Mar 9, 2006, at 2:51 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I am trying to install OPENMPI on a Linux cluster with 22 dual  
</span><br>
<span class="quotelev2">&gt;&gt;Opteron nodes
</span><br>
<span class="quotelev2">&gt;&gt;and a Myrinet interconnect.  I am having trouble with the build  
</span><br>
<span class="quotelev2">&gt;&gt;with the GM
</span><br>
<span class="quotelev2">&gt;&gt;libraries.  I configured with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;./configure --prefix-/users/rosmond/ompi --with-gm=/usr/lib64 -- 
</span><br>
<span class="quotelev2">&gt;&gt;enable-mpi2-one-sided
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you try configuring with --with-gm (no argument) and send the  
</span><br>
<span class="quotelev1">&gt;output from configure and make again?  The --with-gm flag takes as an  
</span><br>
<span class="quotelev1">&gt;argument the installation prefix, not the library prefix.  So in this  
</span><br>
<span class="quotelev1">&gt;case, it would be --with-gm=/usr, which is kind of pointless, as  
</span><br>
<span class="quotelev1">&gt;that's a default search location anyway.  Open MPI's configure script  
</span><br>
<span class="quotelev1">&gt;should automatically look in /usr/lib64.  In fact, it looks like  
</span><br>
<span class="quotelev1">&gt;configure looked there and found the right libgm, but something went  
</span><br>
<span class="quotelev1">&gt;amuck later in the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Also, you really don't want to configure with the --enable-mpi2-one- 
</span><br>
<span class="quotelev1">&gt;sided flag.  It will not do anything useful and will likely cause  
</span><br>
<span class="quotelev1">&gt;very bad things to happen.  Open MPI 1.0.x does not have any MPI-2  
</span><br>
<span class="quotelev1">&gt;onesided support.  Open MPI 1.1 should have a complete implementation  
</span><br>
<span class="quotelev1">&gt;of the onesided chapter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;and the environmental variables:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;setenv FC pgf90
</span><br>
<span class="quotelev2">&gt;&gt;setenv F77 pgf90
</span><br>
<span class="quotelev2">&gt;&gt;setenv CCPFLAGS /usr/include/gm       ! (note this non-standard  
</span><br>
<span class="quotelev2">&gt;&gt;location)
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I assume you mean CPPFLAGS=-I/usr/include/gm, which shouldn't cause  
</span><br>
<span class="quotelev1">&gt;any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The configure seemed to go OK, but the make failed.  As you see at  
</span><br>
<span class="quotelev2">&gt;&gt;the end of the
</span><br>
<span class="quotelev2">&gt;&gt;make output, it doesn't like the format of libgm.so.  It looks to  
</span><br>
<span class="quotelev2">&gt;&gt;me that it is using
</span><br>
<span class="quotelev2">&gt;&gt;a path (/usr/lib/.....) to 32 bit libraries, rather than 64 bit (/ 
</span><br>
<span class="quotelev2">&gt;&gt;usr/lib64/....).   Is this
</span><br>
<span class="quotelev2">&gt;&gt;correct?  What's the solution?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not sure at this point, but I need a build without the incorrect  
</span><br>
<span class="quotelev1">&gt;flag to be able to determine what went wrong.  We've built Open MPI  
</span><br>
<span class="quotelev1">&gt;with 64 bit builds of GM before, so I'm surprised there were any  
</span><br>
<span class="quotelev1">&gt;problems...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0813/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0813/config_out.bz2">config_out.bz2</a>
</ul>
<!-- attachment="config_out.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0813/makeall_out.bz2">makeall_out.bz2</a>
</ul>
<!-- attachment="makeall_out.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0814.php">Ravi Manumachu: "[OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
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
