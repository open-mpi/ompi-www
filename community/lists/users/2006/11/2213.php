<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 22 15:20:57 2006" -->
<!-- isoreceived="20061122202057" -->
<!-- sent="Wed, 22 Nov 2006 12:20:30 -0800" -->
<!-- isosent="20061122202030" -->
<!-- name="Adam Moody" -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build OpenMPI for SHM only" -->
<!-- id="4564B10E.8020605_at_llnl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200611212010.12068.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Adam Moody (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-22 15:20:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2214.php">Lydia Heck: "[OMPI users] openmpi, mx"</a>
<li><strong>Previous message:</strong> <a href="2212.php">Epitropakis Mixalis 00064: "Re: [OMPI users] Advice for a cluster software"</a>
<li><strong>In reply to:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim, yes, your suggestion makes sense.  I didn't realize that would be a 
<br>
safe thing to do.
<br>
Brian, I've verified that configuring with 
<br>
&quot;--enable-mca-no-build=btl-tcp&quot; prevents the tcp btl component from 
<br>
being built in the first place.
<br>
Thanks for the help,
<br>
-Adam
<br>
<p><p>Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't know if there is a way to do it in configure, but after installing you 
</span><br>
<span class="quotelev1">&gt;can go into the $prefix/lib/openmpi directory and delete mca_btl_tcp.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This will remove the tcp component and thus users will not be able to use it. 
</span><br>
<span class="quotelev1">&gt;Note that you must NOT delete the mca_oob_tcp.* files, as these are used for 
</span><br>
<span class="quotelev1">&gt;our internal administrative messaging and we currently require it to be 
</span><br>
<span class="quotelev1">&gt;there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Tim Prins
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tuesday 21 November 2006 07:49 pm, Adam Moody wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;We have some clusters which consist of a large pool of 8-way nodes
</span><br>
<span class="quotelev2">&gt;&gt;connected via ethernet.  On these particular machines, we'd like our
</span><br>
<span class="quotelev2">&gt;&gt;users to be able to run 8-way MPI jobs on node, but we *don't* want them
</span><br>
<span class="quotelev2">&gt;&gt;to run MPI jobs across nodes via the ethernet.  Thus, I'd like to
</span><br>
<span class="quotelev2">&gt;&gt;configure and build OpenMPI to provide shared memory support (or TCP
</span><br>
<span class="quotelev2">&gt;&gt;loopback) but disable general TCP support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I realize that you can run without tcp via something like &quot;mpirun --mca
</span><br>
<span class="quotelev2">&gt;&gt;btl ^tcp&quot;, but this is up to the user's discretion.  I need a way to
</span><br>
<span class="quotelev2">&gt;&gt;disable it systematically.  Is there a way to configure it out at build
</span><br>
<span class="quotelev2">&gt;&gt;time or is there some runtime configuration file I can modify to turn it
</span><br>
<span class="quotelev2">&gt;&gt;off?  Also, when we configure &quot;--without-tcp&quot;, the configure script
</span><br>
<span class="quotelev2">&gt;&gt;doesn't complain, but TCP support is added anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;-Adam Moody
</span><br>
<span class="quotelev2">&gt;&gt;MPI Support @ LLNL
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2214.php">Lydia Heck: "[OMPI users] openmpi, mx"</a>
<li><strong>Previous message:</strong> <a href="2212.php">Epitropakis Mixalis 00064: "Re: [OMPI users] Advice for a cluster software"</a>
<li><strong>In reply to:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
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
