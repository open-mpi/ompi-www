<?
$subject_val = "Re: [OMPI users] OMPI seg fault by a class with weird address.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 06:20:12 2011" -->
<!-- isoreceived="20110315102012" -->
<!-- sent="Tue, 15 Mar 2011 06:19:53 -0400" -->
<!-- isosent="20110315101953" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI seg fault by a class with weird address." -->
<!-- id="5B4D6D65-5AEC-4D4F-808B-B180BA14C8DB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAY161-w5318BF9C10D0B881F91421F4CF0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI seg fault by a class with weird address.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 06:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15864.php">Ben Miller: "[OMPI users] PGI 10.9 build failures"</a>
<li><strong>Previous message:</strong> <a href="15862.php">Peter Kjellstr&#246;m: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="15861.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15867.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15867.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may also want to run your program through a memory-checking debugger such as valgrind to see if it turns up any other problems.
<br>
<p>AFIK, ptmalloc should be fine for use with STL vector allocation.
<br>
<p><p>On Mar 15, 2011, at 4:00 AM, Belaid MOA wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jack,
</span><br>
<span class="quotelev1">&gt;   I may need to see the whole code to decide but my quick look suggest that ptmalloc is causing a problem with STL-vector allocation. ptmalloc is the openMPI internal malloc library. Could you try to build openMPI without memory management (using --without-memory-manager) and let us know the outcome. ptmalloc is not needed if you are not using an RDMA interconnect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   With best regards,
</span><br>
<span class="quotelev1">&gt; -Belaid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: belaid_moa_at_[hidden]; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev1">&gt; Date: Tue, 15 Mar 2011 00:30:19 -0600
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because the code is very long, I just  show the calling relationship of functions. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     scheduler();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; scheduler()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      ImportIndices();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ImportIndices()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	Index IdxNode ;
</span><br>
<span class="quotelev1">&gt; 	IdxNode = ReadFile(&quot;fileName&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index ReadFile(const char* fileinput) 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	Index TempIndex;
</span><br>
<span class="quotelev1">&gt;         .........
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vector&lt;int&gt; Index::GetPosition() const { return Position; }
</span><br>
<span class="quotelev1">&gt; vector&lt;int&gt; Index::GetColumn() const { return Column; }
</span><br>
<span class="quotelev1">&gt; vector&lt;int&gt; Index::GetYear() const { return Year; }
</span><br>
<span class="quotelev1">&gt; vector&lt;string&gt; Index::GetName() const { return Name; }
</span><br>
<span class="quotelev1">&gt; int Index::GetPosition(const int idx) const { return Position[idx]; }
</span><br>
<span class="quotelev1">&gt; int Index::GetColumn(const int idx) const { return Column[idx]; }
</span><br>
<span class="quotelev1">&gt; int Index::GetYear(const int idx) const { return Year[idx]; }
</span><br>
<span class="quotelev1">&gt; string Index::GetName(const int idx) const { return Name[idx]; }
</span><br>
<span class="quotelev1">&gt; int Index::GetSize() const { return Position.size(); }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The sequential code works well, and there is no  scheduler(). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The parallel code output from gdb:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; Breakpoint 1, myNeplanTaskScheduler(CNSGA2 *, int, int, int, ._85 *, char, int, message_para_to_workers_VecT &amp;, MPI_Datatype, int &amp;, int &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;double, std::allocator&lt;double&gt; &gt; &amp;, int, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, MPI_Datatype, int, MPI_Datatype, int) (nsga2=0x118c490, 
</span><br>
<span class="quotelev1">&gt;     popSize=&lt;value optimized out&gt;, nodeSize=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;     myRank=&lt;value optimized out&gt;, myChildpop=0x1208d80, genCandTag=65 'A', 
</span><br>
<span class="quotelev1">&gt;     generationNum=1, myPopParaVec=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev1">&gt;     message_to_master_type=0x7fffffffd540, myT1Flag=@0x7fffffffd68c, 
</span><br>
<span class="quotelev1">&gt;     myT2Flag=@0x7fffffffd688, 
</span><br>
<span class="quotelev1">&gt;     resultTaskPackageT1=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev1">&gt;     resultTaskPackageT2Pr=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev1">&gt;     xdataV=std::vector of length 4, capacity 4 = {...}, objSize=7, 
</span><br>
<span class="quotelev1">&gt;     resultTaskPackageT12=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev1">&gt;     xdata_to_workers_type=0x121c410, myGenerationNum=1, 
</span><br>
<span class="quotelev1">&gt;     Mpara_to_workers_type=0x121b9b0, nconNum=0)
</span><br>
<span class="quotelev1">&gt;     at src/nsga2/myNetplanScheduler.cpp:109
</span><br>
<span class="quotelev1">&gt; 109                     ImportIndices();
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 2, ImportIndices () at src/index.cpp:120
</span><br>
<span class="quotelev1">&gt; 120             IdxNode = ReadFile(&quot;prepdata/idx_node.csv&quot;);
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 4, ReadFile (fileinput=0xd8663d &quot;prepdata/idx_node.csv&quot;)
</span><br>
<span class="quotelev1">&gt;     at src/index.cpp:86
</span><br>
<span class="quotelev1">&gt; 86              Index TempIndex;
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 5, Index::Index (this=0x7fffffffcb80) at src/index.cpp:20
</span><br>
<span class="quotelev1">&gt; 20              Name(0) {}
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------
</span><br>
<span class="quotelev1">&gt; the backtrace output from the above parallel OpenMPI code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaab3b2bd3 in opal_memory_ptmalloc2_malloc ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000003f7c8bd1dd in operator new(unsigned long) ()
</span><br>
<span class="quotelev1">&gt;    from /usr/lib64/libstdc++.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00000000004646a7 in __gnu_cxx::new_allocator&lt;int&gt;::allocate (
</span><br>
<span class="quotelev1">&gt;     this=0x7fffffffcb80, __n=0)
</span><br>
<span class="quotelev1">&gt;     at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/ext/new_allocator.h:88
</span><br>
<span class="quotelev1">&gt; #4  0x00000000004646cf in std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_M_allocate (this=0x7fffffffcb80, __n=0)
</span><br>
<span class="quotelev1">&gt;     at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:127
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000464701 in std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_Vector_base (this=0x7fffffffcb80, __n=0, __a=...)
</span><br>
<span class="quotelev1">&gt;     at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:113
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000464d0b in std::vector&lt;int, std::allocator&lt;int&gt; &gt;::vector (
</span><br>
<span class="quotelev1">&gt;     this=0x7fffffffcb80, __n=0, __value=@0x7fffffffc968, __a=...)
</span><br>
<span class="quotelev1">&gt;     at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:216
</span><br>
<span class="quotelev1">&gt; #7  0x00000000004890d7 in Index::Index (this=0x7fffffffcb80)
</span><br>
<span class="quotelev1">&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev1">&gt;     at src/index.cpp:20
</span><br>
<span class="quotelev1">&gt; #8  0x000000000048927a in ReadFile (fileinput=0xd8663d &quot;prepdata/idx_node.csv&quot;)
</span><br>
<span class="quotelev1">&gt;     at src/index.cpp:86
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000489533 in ImportIndices () at src/index.cpp:120
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000445e0e in myNeplanTaskScheduler(CNSGA2 *, int, int, int, ._85 *, char, int, message_para_to_workers_VecT &amp;, MPI_Datatype, int &amp;, int &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;double, std::allocator&lt;double&gt; &gt; &amp;, int, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, MPI_Datatype, int, MPI_Datatype, int) (nsga2=0x118c490, 
</span><br>
<span class="quotelev1">&gt;     popSize=&lt;value optimized out&gt;, nodeSize=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;     myRank=&lt;value optimized out&gt;, myChildpop=0x1208d80, genCandTag=65 'A', 
</span><br>
<span class="quotelev1">&gt;     generationNum=1, myPopParaVec=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev1">&gt;     message_to_master_type=0x7fffffffd540, myT1Flag=@0x7fffffffd68c, 
</span><br>
<span class="quotelev1">&gt;     myT2Flag=@0x7fffffffd688, 
</span><br>
<span class="quotelev1">&gt;     resultTaskPackageT1=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev1">&gt;     resultTaskPackageT2Pr=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev1">&gt;     xdataV=std::vector of length 4, capacity 4 = {...}, objSize=7, 
</span><br>
<span class="quotelev1">&gt;     resultTaskPackageT12=std::vector of length 4, capacity 4 = {...}, 
</span><br>
<span class="quotelev1">&gt;     xdata_to_workers_type=0x121c410, myGenerationNum=1, 
</span><br>
<span class="quotelev1">&gt;     Mpara_to_workers_type=0x121b9b0, nconNum=0)
</span><br>
<span class="quotelev1">&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev1">&gt;     at src/nsga2/myNetplanScheduler.cpp:109
</span><br>
<span class="quotelev1">&gt; #11 0x000000000044f44b in main (argc=1, argv=0x7fffffffd998)
</span><br>
<span class="quotelev1">&gt;     at src/nsga2/main-parallel2.cpp:216
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is &quot;opal_memory_ptmalloc2_int_malloc ()&quot; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The gdb output from sequential code: 
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; Breakpoint 1, main (argc=&lt;value optimized out&gt;, argv=&lt;value optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at src/nsga2/main-seq.cpp:32
</span><br>
<span class="quotelev1">&gt; 32              ImportIndices();
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 2, ImportIndices () at src/index.cpp:115
</span><br>
<span class="quotelev1">&gt; 115             IdxNode = ReadFile(&quot;prepdata/idx_node.csv&quot;);
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 4, ReadFile (fileinput=0xd6bb9d &quot;prepdata/idx_node.csv&quot;)
</span><br>
<span class="quotelev1">&gt;     at src/index.cpp:86
</span><br>
<span class="quotelev1">&gt; 86              Index TempIndex;
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 5, Index::Index (this=0x7fffffffd6d0) at src/index.cpp:20
</span><br>
<span class="quotelev1">&gt; 20              Name(0) {}
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 4, ReadFile (fileinput=0xd6bbb3 &quot;prepdata/idx_ud.csv&quot;)
</span><br>
<span class="quotelev1">&gt;     at src/index.cpp:86
</span><br>
<span class="quotelev1">&gt; 86              Index TempIndex;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  ReadFile (fileinput=0xd6bbb3 &quot;prepdata/idx_ud.csv&quot;) at src/index.cpp:86
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000471cc9 in ImportIndices () at src/index.cpp:116
</span><br>
<span class="quotelev1">&gt; #2  0x000000000043bba6 in main (argc=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;     argv=&lt;value optimized out&gt;) at src/nsga2/main-seq.cpp:32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: belaid_moa_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]; dtustudy68_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev1">&gt; Date: Tue, 15 Mar 2011 06:16:35 +0000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jack,
</span><br>
<span class="quotelev1">&gt; 1- Where is your main function to see how you called your class?
</span><br>
<span class="quotelev1">&gt; 2- I do not see the implementation of GetPosition, GetName, etc.?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; -Belaid.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 14 Mar 2011 19:04:12 -0600
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OMPI seg fault by a class with weird address.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got a run-time error of a Open MPI C++ program. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following output is from gdb: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
</span><br>
<span class="quotelev1">&gt;    from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the point 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 9, Index::Index (this=0x7fffffffcb80) at src/index.cpp:20
</span><br>
<span class="quotelev1">&gt; 20              Name(0) {}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Index has been called before this point and no problem:
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Breakpoint 9, Index::Index (this=0x117d800) at src/index.cpp:20
</span><br>
<span class="quotelev1">&gt; 20              Name(0) {}
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 9, Index::Index (this=0x117d860) at src/index.cpp:20
</span><br>
<span class="quotelev1">&gt; 20              Name(0) {}
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the 0x7fffffffcb80 address is a problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I donot know the reason and how to remove the bug. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the following is the index definition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; class Index {
</span><br>
<span class="quotelev1">&gt;     public:
</span><br>
<span class="quotelev1">&gt;         Index();
</span><br>
<span class="quotelev1">&gt;         Index(const Index&amp; rhs);
</span><br>
<span class="quotelev1">&gt;         ~Index();
</span><br>
<span class="quotelev1">&gt;         Index&amp; operator=(const Index&amp; rhs);
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; 		vector&lt;int&gt; GetPosition() const;
</span><br>
<span class="quotelev1">&gt; 		vector&lt;int&gt; GetColumn() const;
</span><br>
<span class="quotelev1">&gt; 		vector&lt;int&gt; GetYear() const;
</span><br>
<span class="quotelev1">&gt; 		vector&lt;string&gt; GetName() const;
</span><br>
<span class="quotelev1">&gt; 		int GetPosition(const int idx) const;
</span><br>
<span class="quotelev1">&gt; 		int GetColumn(const int idx) const;
</span><br>
<span class="quotelev1">&gt; 		int GetYear(const int idx) const;
</span><br>
<span class="quotelev1">&gt; 		string GetName(const int idx) const;
</span><br>
<span class="quotelev1">&gt; 		int GetSize() const;
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; 		void Add(const int idx, const int col, const string&amp; name);
</span><br>
<span class="quotelev1">&gt; 		void Add(const int idx, const int col, const int year, const string&amp; name);
</span><br>
<span class="quotelev1">&gt; 		void Add(const int idx, const Step&amp; col, const string&amp; name);
</span><br>
<span class="quotelev1">&gt; 		void WriteFile(const char* fileinput) const;
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt;     private:
</span><br>
<span class="quotelev1">&gt; 		vector&lt;int&gt; Position;
</span><br>
<span class="quotelev1">&gt; 		vector&lt;int&gt; Column;
</span><br>
<span class="quotelev1">&gt; 		vector&lt;int&gt; Year;
</span><br>
<span class="quotelev1">&gt; 		vector&lt;string&gt; Name;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; // Contructors and destructor for the Index class
</span><br>
<span class="quotelev1">&gt; Index::Index() :
</span><br>
<span class="quotelev1">&gt; 	Position(0),
</span><br>
<span class="quotelev1">&gt; 	Column(0),
</span><br>
<span class="quotelev1">&gt; 	Year(0),
</span><br>
<span class="quotelev1">&gt; 	Name(0) {}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index::Index(const Index&amp; rhs) :
</span><br>
<span class="quotelev1">&gt; 	Position(rhs.GetPosition()),
</span><br>
<span class="quotelev1">&gt; 	Column(rhs.GetColumn()),
</span><br>
<span class="quotelev1">&gt; 	Year(rhs.GetYear()),
</span><br>
<span class="quotelev1">&gt; 	Name(rhs.GetName()) {}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index::~Index() {}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index&amp; Index::operator=(const Index&amp; rhs) {
</span><br>
<span class="quotelev1">&gt;     Position = rhs.GetPosition();
</span><br>
<span class="quotelev1">&gt; 	Column = rhs.GetColumn(),
</span><br>
<span class="quotelev1">&gt; 	Year = rhs.GetYear(),
</span><br>
<span class="quotelev1">&gt; 	Name = rhs.GetName();
</span><br>
<span class="quotelev1">&gt;     return *this;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="15864.php">Ben Miller: "[OMPI users] PGI 10.9 build failures"</a>
<li><strong>Previous message:</strong> <a href="15862.php">Peter Kjellstr&#246;m: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="15861.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15867.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15867.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
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
