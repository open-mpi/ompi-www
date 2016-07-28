<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 08:14:45 2007" -->
<!-- isoreceived="20070607121445" -->
<!-- sent="Thu, 7 Jun 2007 08:14:37 -0400" -->
<!-- isosent="20070607121437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] making all library components static (questions about --enable-mcs-static)" -->
<!-- id="C70060ED-0B26-4854-827C-24DE957ACD38_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1626092b0706062307y5bf6513fjb0a73cc925af7904_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-06-07 08:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3394.php">Jeff Squyres: "Re: [OMPI users] open-mpi with ifort in debug..trouble"</a>
<li><strong>Previous message:</strong> <a href="3392.php">Jeff Squyres: "Re: [OMPI users] SGE and OFED1.1"</a>
<li><strong>In reply to:</strong> <a href="3391.php">Code Master: "[OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Reply:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2007, at 2:07 AM, Code Master wrote:
<br>
<p><span class="quotelev1">&gt; I wish to compile openmpi-1.2.2 so that it:
</span><br>
<span class="quotelev1">&gt; - support MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; - enable profiling (generate gmon.out for each process after my  
</span><br>
<span class="quotelev1">&gt; client app finish running) to tell apart CPU time of my client  
</span><br>
<span class="quotelev1">&gt; program from the MPI library
</span><br>
<span class="quotelev1">&gt; - static linking for everything (incl client app and all components  
</span><br>
<span class="quotelev1">&gt; of library openmpi)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the documentation, it says that --enable-mcs-static=&lt;CSV list&gt;  
</span><br>
<span class="quotelev1">&gt; will enable static linking of the modules in the list, however what  
</span><br>
<span class="quotelev1">&gt; can I specify if I want to statically link *all* mcs modules  
</span><br>
<span class="quotelev1">&gt; without knowing the list of modules available?
</span><br>
<p>You should be able to do:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --enable-static --disable-shared ...
<br>
<p>This will do 2 things:
<br>
<p>- libmpi (and friends) will be compiled as .a's (instead of .so's)
<br>
- all the MCA components will be physically contained in libmpi (and  
<br>
friends) instead of being built as standalone plugins
<br>
<p><span class="quotelev1">&gt; Also this is the plan for my command used for configuring openmpi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CFLAGS=&quot;-g -pg -O3 -static&quot; --prefix=./ --enable-mpi- 
</span><br>
<span class="quotelev1">&gt; threads --enable-progress-threads --enable-static  --disable-shared  
</span><br>
<span class="quotelev1">&gt; --enable-mcs-static --with-devel-headers
</span><br>
<p>It's actually --enable-mca-static, not --enable-mcs-static.
<br>
<p>However, that should not be necessary; the --enable-static and -- 
<br>
disable-shared should take care of pulling all the components into  
<br>
the libraries for you.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3394.php">Jeff Squyres: "Re: [OMPI users] open-mpi with ifort in debug..trouble"</a>
<li><strong>Previous message:</strong> <a href="3392.php">Jeff Squyres: "Re: [OMPI users] SGE and OFED1.1"</a>
<li><strong>In reply to:</strong> <a href="3391.php">Code Master: "[OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Reply:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
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
