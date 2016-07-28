<?
$subject_val = "Re: [OMPI users] OMPI free() error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 10:41:52 2011" -->
<!-- isoreceived="20110318144152" -->
<!-- sent="Fri, 18 Mar 2011 06:19:39 -0400" -->
<!-- isosent="20110318101939" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI free() error" -->
<!-- id="284315A5-3414-4BCF-BBD6-99F2020AC285_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w838315735C901E9B74C3FCBB00_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI free() error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-18 06:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15910.php">Ashley Pittman: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>In reply to:</strong> <a href="15908.php">Jack Bryan: "[OMPI users] OMPI free() error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Getting deeper into valgrind- and debugger-identified errors is somewhat outside the scope of this mailing list -- we're really here to talk about Open MPI-related things.
<br>
<p>I suggest you read the valgrind documentation and/or google around for other memory debugging resources.
<br>
<p>Good luck.
<br>
<p><p>On Mar 18, 2011, at 2:07 AM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running a C++ program with OMPI.
</span><br>
<span class="quotelev1">&gt; I got error: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** /nsga2b: free(): invalid next size (fast): 0x0000000001817a90 ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used GDB: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt; Program received signal SIGABRT, Aborted.
</span><br>
<span class="quotelev1">&gt; 0x00000038b8830265 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000038b8830265 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00000038b8831d10 in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00000038b886a99b in __libc_message () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00000038b887245f in _int_free () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00000038b88728bb in free () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x000000000044a4e3 in workerRunTask (message_to_master_type=0x38c06efe18, 
</span><br>
<span class="quotelev1">&gt;     nodeSize=2, myRank=1, xVSize=84, objSize=7, 
</span><br>
<span class="quotelev1">&gt;     xdata_to_workers_type=0x1206350, 
</span><br>
<span class="quotelev1">&gt;     recvXDataVec=std::vector of length 0, capacity 84, myNsga2=..., 
</span><br>
<span class="quotelev1">&gt;     Mpara_to_workers_type=0x1205390, events=0x7fffffffb1f0, netplan=...)
</span><br>
<span class="quotelev1">&gt;     at src/nsga2/workerRunTask.cpp:447
</span><br>
<span class="quotelev1">&gt; #6  0x00000000004514d9 in main (argc=1, argv=0x7fffffffcb48)
</span><br>
<span class="quotelev1">&gt;     at src/nsga2/main-parallel2.cpp:425
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In valgrind, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there are some invalid read and write butno errors about this 
</span><br>
<span class="quotelev1">&gt;  free(): invalid next size .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
</span><br>
<span class="quotelev1">&gt; (populp.ind)-&gt;xreal 	= new double[nreal];
</span><br>
<span class="quotelev1">&gt; 		(populp.ind)-&gt;obj 	= new double[nobj];
</span><br>
<span class="quotelev1">&gt; 		(populp.ind)-&gt;constr 	= new double[ncon];
</span><br>
<span class="quotelev1">&gt; 		(populp.ind)-&gt;xbin 	= new double[nbin];
</span><br>
<span class="quotelev1">&gt; 		if ((populp.ind)-&gt;xreal == NULL || (populp.ind)-&gt;obj == NULL || (populp.ind)-&gt;constr == NULL || (populp.ind)-&gt;xbin == NULL )
</span><br>
<span class="quotelev1">&gt; 		{
</span><br>
<span class="quotelev1">&gt; 			#ifdef DEBUG_workerRunTask
</span><br>
<span class="quotelev1">&gt; 			cout &lt;&lt; &quot;In workerRunTask(), I am rank &quot;&lt;&lt; myRank &lt;&lt; &quot; (populp.ind)-&gt;xreal or (populp.ind)-&gt;obj or (populp.ind)-&gt;constr or (populp.ind)-&gt;xbin is NULL .\n\n&quot; &lt;&lt; endl;  
</span><br>
<span class="quotelev1">&gt; 			#endif
</span><br>
<span class="quotelev1">&gt; 		}	
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; delete [] (populp.ind)-&gt;xreal ;
</span><br>
<span class="quotelev1">&gt; 		delete [] (populp.ind)-&gt;xbin ;
</span><br>
<span class="quotelev1">&gt; 		delete [] (populp.ind)-&gt;obj ;
</span><br>
<span class="quotelev1">&gt; 		delete [] (populp.ind)-&gt;constr ;
</span><br>
<span class="quotelev1">&gt; 		delete [] sendResultArrayPr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15910.php">Ashley Pittman: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>In reply to:</strong> <a href="15908.php">Jack Bryan: "[OMPI users] OMPI free() error"</a>
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
