<?
$subject_val = "[OMPI users] OMPI free() error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 02:07:55 2011" -->
<!-- isoreceived="20110318060755" -->
<!-- sent="Fri, 18 Mar 2011 00:07:49 -0600" -->
<!-- isosent="20110318060749" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI free() error" -->
<!-- id="SNT134-w838315735C901E9B74C3FCBB00_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] OMPI free() error<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-18 02:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15909.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15907.php">Jack Bryan: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15910.php">Ashley Pittman: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>Reply:</strong> <a href="15910.php">Ashley Pittman: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>Reply:</strong> <a href="15911.php">Jeff Squyres: "Re: [OMPI users] OMPI free() error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
I am running a C++ program with OMPI.I got error: 
<br>
*** glibc detected *** /nsga2b: free(): invalid next size (fast): 0x0000000001817a90 ***
<br>
I used GDB: 
<br>
======= Backtrace: =========Program received signal SIGABRT, Aborted.0x00000038b8830265 in raise () from /lib64/libc.so.6(gdb) bt#0  0x00000038b8830265 in raise () from /lib64/libc.so.6#1  0x00000038b8831d10 in abort () from /lib64/libc.so.6#2  0x00000038b886a99b in __libc_message () from /lib64/libc.so.6#3  0x00000038b887245f in _int_free () from /lib64/libc.so.6#4  0x00000038b88728bb in free () from /lib64/libc.so.6#5  0x000000000044a4e3 in workerRunTask (message_to_master_type=0x38c06efe18,     nodeSize=2, myRank=1, xVSize=84, objSize=7,     xdata_to_workers_type=0x1206350,     recvXDataVec=std::vector of length 0, capacity 84, myNsga2=...,     Mpara_to_workers_type=0x1205390, events=0x7fffffffb1f0, netplan=...)    at src/nsga2/workerRunTask.cpp:447#6  0x00000000004514d9 in main (argc=1, argv=0x7fffffffcb48)    at src/nsga2/main-parallel2.cpp:425-------------------------------------------------
<br>
In valgrind, 
<br>
there are some invalid read and write butno errors about this  free(): invalid next size .
<br>
-----------------------------------------------(populp.ind)-&gt;xreal 	= new double[nreal];		(populp.ind)-&gt;obj 	= new double[nobj];		(populp.ind)-&gt;constr 	= new double[ncon];		(populp.ind)-&gt;xbin 	= new double[nbin];		if ((populp.ind)-&gt;xreal == NULL || (populp.ind)-&gt;obj == NULL || (populp.ind)-&gt;constr == NULL || (populp.ind)-&gt;xbin == NULL )		{			#ifdef DEBUG_workerRunTask			cout &lt;&lt; &quot;In workerRunTask(), I am rank &quot;&lt;&lt; myRank &lt;&lt; &quot; (populp.ind)-&gt;xreal or (populp.ind)-&gt;obj or (populp.ind)-&gt;constr or (populp.ind)-&gt;xbin is NULL .\n\n&quot; &lt;&lt; endl;  			#endif		}	
<br>
delete [] (populp.ind)-&gt;xreal ;		delete [] (populp.ind)-&gt;xbin ;		delete [] (populp.ind)-&gt;obj ;		delete [] (populp.ind)-&gt;constr ;		delete [] sendResultArrayPr;
<br>
----------------------------------------
<br>
thanks
<br>
Any help is really appreciated. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15909.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15907.php">Jack Bryan: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15910.php">Ashley Pittman: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>Reply:</strong> <a href="15910.php">Ashley Pittman: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>Reply:</strong> <a href="15911.php">Jeff Squyres: "Re: [OMPI users] OMPI free() error"</a>
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
