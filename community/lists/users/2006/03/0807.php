<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 20:39:33 2006" -->
<!-- isoreceived="20060310013933" -->
<!-- sent="Thu, 09 Mar 2006 17:40:53 -0800" -->
<!-- isosent="20060310014053" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet on linux cluster" -->
<!-- id="4410D925.2090308_at_reachone.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.s559m31vies9li_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2006-03-09 20:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0808.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy Telford wrote:
<br>
<p><span class="quotelev2">&gt;&gt;The configure seemed to go OK, but the make failed.  As you see at the
</span><br>
<span class="quotelev2">&gt;&gt;end of the
</span><br>
<span class="quotelev2">&gt;&gt;make output, it doesn't like the format of libgm.so.  It looks to me
</span><br>
<span class="quotelev2">&gt;&gt;that it is using
</span><br>
<span class="quotelev2">&gt;&gt;a path (/usr/lib/.....) to 32 bit libraries, rather than 64 bit
</span><br>
<span class="quotelev2">&gt;&gt;(/usr/lib64/....).   Is this
</span><br>
<span class="quotelev2">&gt;&gt;correct?  What's the solution?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;First thing's first:  Does it compile okay with gcc?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'm not sure I understand, and besides I am strictly a Fortran guy.  
<br>
However,
<br>
I have made a successful build on this system without 'gm' support, but that
<br>
is not very interesting because its executables only run on the 
<br>
interactive node.
<br>
Therefore I don't think its a Fortran compiler problem, especially since 
<br>
there
<br>
is already an MPICH/PGI combination running on the system.
<br>
<p><span class="quotelev1">&gt;I say this because PGI's compiler has proven stubborn from time to time:   
</span><br>
<span class="quotelev1">&gt;I can compile Open MPI with PGI 6.0 just fine, but PGI 6.1 won't compile  
</span><br>
<span class="quotelev1">&gt;for me either (different reasons, though -- I posted my problem earlier  
</span><br>
<span class="quotelev1">&gt;this week).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That being said:
</span><br>
<span class="quotelev1">&gt;The distros get mixed in my mind, so I'm not sure if yours is one that:
</span><br>
<span class="quotelev1">&gt;a.)  Puts 32-bit libs in /lib32 and /usr/lib32, with 64-bit libs in /lib64  
</span><br>
<span class="quotelev1">&gt;and /usr/lib64 (and /lib points to lib64)
</span><br>
<span class="quotelev1">&gt;b.)  32-bit libs are in /lib and /usr/lib, and 64-bit are in /lib64 and  
</span><br>
<span class="quotelev1">&gt;/usr/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If your machine is a 'b' then yes, it does appear to be trying (and  
</span><br>
<span class="quotelev1">&gt;failing) to use a 32-bit libgm.so
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The answer is 'b'
<br>
<p><span class="quotelev1">&gt;The first thing I'd do is make sure you have a 64-bit version of libgm.so;  
</span><br>
<span class="quotelev1">&gt;at least that is what I suspect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Locate all instances of libgm.so, run 'file libgm.so' to ensure one of 'em  
</span><br>
<span class="quotelev1">&gt;is 64-bit, and that the 64-bit library is in a path where the linker can  
</span><br>
<span class="quotelev1">&gt;find it (ld.so.conf or LD_LIBRARY_PATH).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I checked, and '/usr/lib64/libgm.so' is definitely a 64 bit library, and
<br>
I am sure that /usr/lib64 is by default in a path where the linker 
<br>
looks, since it is
<br>
a native 64 bit (Opteron) system.  Just to be sure, however, I added 
<br>
/usr/lib64 to
<br>
LD_LIBRARY_PATH, with the same results.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0808.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
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
