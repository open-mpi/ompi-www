<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 08:35:36 2006" -->
<!-- isoreceived="20060310133536" -->
<!-- sent="Fri, 10 Mar 2006 08:35:35 -0500" -->
<!-- isosent="20060310133535" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet on linux cluster" -->
<!-- id="86D61AAB-DF64-40D9-A1BD-061BAD16A9B0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44110281.30304_at_reachone.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 08:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0824.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0824.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0824.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2006, at 11:37 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; Attached are output files from a build with the adjustments you  
</span><br>
<span class="quotelev1">&gt; suggested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv FC pgf90
</span><br>
<span class="quotelev1">&gt; setenv F77 pgf90
</span><br>
<span class="quotelev1">&gt; setenv CCPFLAGS -I/usr/include/gm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure  --prefix=/users/rosmond/ompi  --with-gm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The results are the same.
</span><br>
<p>Yes, I figured the failure would still be there.  Sorry to make you  
<br>
do the extra work, but I needed a build without the extra issues so  
<br>
that I could try to get a clearer picture of what is going on.   
<br>
Unfortunately, it looks like libtool (the GNU project to build  
<br>
portable libraries) is doing something I didn't expect and causing  
<br>
issues.  I'm passing this on to a friend of Open MPI who works on the  
<br>
Libtool project and is extremely good at figuring these issues out.   
<br>
I'll relay back what he recommends, but it might not be until Monday.
<br>
<p><span class="quotelev1">&gt; P.S.  I understand that the mpi2 option is just a dummy.  I use it  
</span><br>
<span class="quotelev1">&gt; because I am
</span><br>
<span class="quotelev1">&gt; porting a code from an SGI Origin, which has full mpi2 one-sided  
</span><br>
<span class="quotelev1">&gt; support.  This
</span><br>
<span class="quotelev1">&gt; options makes it unnecessary to add my own dummy MPI2 routines to  
</span><br>
<span class="quotelev1">&gt; my source.
</span><br>
<span class="quotelev1">&gt; My code has both MPI1 and MPI2 message passing options, so it's one  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; reasons I like OPENMPI over MPICH.
</span><br>
<p>Ok, I get a little nervous when I see that option, because it doesn't  
<br>
do what most people expect ;).  As long as you're fine with any call  
<br>
to the one-sided functions invoking MPI error handlers, there should  
<br>
be no problem.  The good news is that Open MPI 1.1 will have complete  
<br>
one-sided support.
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2006, at 2:51 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to install OPENMPI on a Linux cluster with 22 dual  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Opteron nodes and a Myrinet interconnect. I am having trouble  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the build with the GM libraries. I configured with: ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure --prefix-/users/rosmond/ompi --with-gm=/usr/lib64 --   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable-mpi2-one-sided
</span><br>
<span class="quotelev2">&gt;&gt; Can you try configuring with --with-gm (no argument) and send the  
</span><br>
<span class="quotelev2">&gt;&gt; output from configure and make again? The --with-gm flag takes as  
</span><br>
<span class="quotelev2">&gt;&gt; an argument the installation prefix, not the library prefix. So in  
</span><br>
<span class="quotelev2">&gt;&gt; this case, it would be --with-gm=/usr, which is kind of pointless,  
</span><br>
<span class="quotelev2">&gt;&gt; as that's a default search location anyway. Open MPI's configure  
</span><br>
<span class="quotelev2">&gt;&gt; script should automatically look in /usr/lib64. In fact, it looks  
</span><br>
<span class="quotelev2">&gt;&gt; like configure looked there and found the right libgm, but  
</span><br>
<span class="quotelev2">&gt;&gt; something went amuck later in the process. Also, you really don't  
</span><br>
<span class="quotelev2">&gt;&gt; want to configure with the --enable-mpi2-one- sided flag. It will  
</span><br>
<span class="quotelev2">&gt;&gt; not do anything useful and will likely cause very bad things to  
</span><br>
<span class="quotelev2">&gt;&gt; happen. Open MPI 1.0.x does not have any MPI-2 onesided support.  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.1 should have a complete implementation of the onesided  
</span><br>
<span class="quotelev2">&gt;&gt; chapter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the environmental variables: setenv FC pgf90 setenv F77 pgf90  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv CCPFLAGS /usr/include/gm ! (note this non-standard location)
</span><br>
<span class="quotelev2">&gt;&gt; I assume you mean CPPFLAGS=-I/usr/include/gm, which shouldn't  
</span><br>
<span class="quotelev2">&gt;&gt; cause any problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The configure seemed to go OK, but the make failed. As you see at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the end of the make output, it doesn't like the format of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libgm.so. It looks to me that it is using a path (/usr/lib/.....)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 32 bit libraries, rather than 64 bit (/ usr/lib64/....). Is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this correct? What's the solution?
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure at this point, but I need a build without the  
</span><br>
<span class="quotelev2">&gt;&gt; incorrect flag to be able to determine what went wrong. We've  
</span><br>
<span class="quotelev2">&gt;&gt; built Open MPI with 64 bit builds of GM before, so I'm surprised  
</span><br>
<span class="quotelev2">&gt;&gt; there were any problems... Thanks, Brian
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config_out.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;makeall_out.bz2&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0824.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0824.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0824.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
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
