<?
$subject_val = "Re: [OMPI users] OMPI seg fault by a class with weird address.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 11:27:41 2011" -->
<!-- isoreceived="20110315152741" -->
<!-- sent="Tue, 15 Mar 2011 09:27:35 -0600" -->
<!-- isosent="20110315152735" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI seg fault by a class with weird address." -->
<!-- id="34A80259-F793-4465-8DD0-BBF753F24251_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="SNT134-w4218A8A42ADDDB8F671D43CBCF0_at_phx.gbl" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 11:27:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15869.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15867.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>In reply to:</strong> <a href="15866.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15869.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15869.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15870.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I -think- setting OMPI_MCA_memory_ptmalloc2_disable to 1 will turn off  
<br>
OMPI's memory wrappers without having to rebuild.  Someone please  
<br>
correct me if I'm wrong :-).
<br>
<p>For example (bash-like shell):
<br>
<p>export OMPI_MCA_memory_ptmalloc2_disable=1
<br>
<p>Hope that helps,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Mar 15, 2011, at 9:19 AM, Jack Bryan wrote:
&gt; Thanks,
&gt;
&gt; I do not have system administrator authorization.
&gt; I am afraid that I cannot rebuild OpenMPI --without-memory-manager.
&gt;
&gt; Are there other ways to get around it ?
&gt;
&gt; For example, use other things to replace &quot;ptmalloc&quot; ?
&gt;
&gt; Any help is really appreciated.
&gt;
&gt; thanks
&gt;
&gt; From: belaid_moa_at_[hidden]
&gt; To: dtustudy68_at_[hidden]; users_at_[hidden]
&gt; Subject: RE: [OMPI users] OMPI seg fault by a class with weird  
&gt; address.
&gt; Date: Tue, 15 Mar 2011 08:00:56 +0000
&gt;
&gt; Hi Jack,
&gt;   I may need to see the whole code to decide but my quick look  
&gt; suggest that ptmalloc is causing a problem with STL-vector  
&gt; allocation. ptmalloc is the openMPI internal malloc library. Could  
&gt; you try to build openMPI without memory management (using --without- 
&gt; memory-manager) and let us know the outcome. ptmalloc is not needed  
&gt; if you are not using an RDMA interconnect.
&gt;
&gt;   With best regards,
&gt; -Belaid.
&gt;
&gt; From: dtustudy68_at_[hidden]
&gt; To: belaid_moa_at_[hidden]; users_at_[hidden]
&gt; Subject: RE: [OMPI users] OMPI seg fault by a class with weird  
&gt; address.
&gt; Date: Tue, 15 Mar 2011 00:30:19 -0600
&gt;
&gt; Hi,
&gt;
&gt; Because the code is very long, I just  show the calling relationship  
&gt; of functions.
&gt;
&gt; main()
&gt; {
&gt;     scheduler();
&gt;
&gt; }
&gt; scheduler()
&gt; {
&gt;      ImportIndices();
&gt; }
&gt;
&gt; ImportIndices()
&gt; {
&gt; 	Index IdxNode ;
&gt; 	IdxNode = ReadFile(&quot;fileName&quot;);
&gt; }
&gt;
&gt; Index ReadFile(const char* fileinput)
&gt; {
&gt; 	Index TempIndex;
&gt;         .........
&gt;
&gt; }
&gt;
&gt; vector&lt;int&gt; Index::GetPosition() const { return Position; }
&gt; vector&lt;int&gt; Index::GetColumn() const { return Column; }
&gt; vector&lt;int&gt; Index::GetYear() const { return Year; }
&gt; vector&lt;string&gt; Index::GetName() const { return Name; }
&gt; int Index::GetPosition(const int idx) const { return Position[idx]; }
&gt; int Index::GetColumn(const int idx) const { return Column[idx]; }
&gt; int Index::GetYear(const int idx) const { return Year[idx]; }
&gt; string Index::GetName(const int idx) const { return Name[idx]; }
&gt; int Index::GetSize() const { return Position.size(); }
&gt;
&gt; The sequential code works well, and there is no  scheduler().
&gt;
&gt; The parallel code output from gdb:
&gt; ----------------------------------------------
&gt; Breakpoint 1, myNeplanTaskScheduler(CNSGA2 *, int, int, int, ._85 *,  
&gt; char, int, message_para_to_workers_VecT &amp;, MPI_Datatype, int &amp;, int  
&gt; &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;,  
&gt; std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;,  
&gt; std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;,  
&gt; std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;,  
&gt; std::vector&lt;double, std::allocator&lt;double&gt; &gt; &amp;, int,  
&gt; std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;,  
&gt; std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;,  
&gt; MPI_Datatype, int, MPI_Datatype, int) (nsga2=0x118c490,
&gt;     popSize=&lt;value optimized out&gt;, nodeSize=&lt;value optimized out&gt;,
&gt;     myRank=&lt;value optimized out&gt;, myChildpop=0x1208d80,  
&gt; genCandTag=65 'A',
&gt;     generationNum=1, myPopParaVec=std::vector of length 4, capacity  
&gt; 4 = {...},
&gt;     message_to_master_type=0x7fffffffd540, myT1Flag=@0x7fffffffd68c,
&gt;     myT2Flag=@0x7fffffffd688,
&gt;     resultTaskPackageT1=std::vector of length 4, capacity 4 = {...},
&gt;     resultTaskPackageT2Pr=std::vector of length 4, capacity 4 = {...},
&gt;     xdataV=std::vector of length 4, capacity 4 = {...}, objSize=7,
&gt;     resultTaskPackageT12=std::vector of length 4, capacity 4 = {...},
&gt;     xdata_to_workers_type=0x121c410, myGenerationNum=1,
&gt;     Mpara_to_workers_type=0x121b9b0, nconNum=0)
&gt;     at src/nsga2/myNetplanScheduler.cpp:109
&gt; 109                     ImportIndices();
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Breakpoint 2, ImportIndices () at src/index.cpp:120
&gt; 120             IdxNode = ReadFile(&quot;prepdata/idx_node.csv&quot;);
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Breakpoint 4, ReadFile (fileinput=0xd8663d &quot;prepdata/idx_node.csv&quot;)
&gt;     at src/index.cpp:86
&gt; 86              Index TempIndex;
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Breakpoint 5, Index::Index (this=0x7fffffffcb80) at src/index.cpp:20
&gt; 20              Name(0) {}
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Program received signal SIGSEGV, Segmentation fault.
&gt; 0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
&gt;    from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
&gt;
&gt; ---------------------------------------
&gt; the backtrace output from the above parallel OpenMPI code:
&gt;
&gt; (gdb) bt
&gt; #0  0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
&gt;    from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
&gt; #1  0x00002aaaab3b2bd3 in opal_memory_ptmalloc2_malloc ()
&gt;    from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
&gt; #2  0x0000003f7c8bd1dd in operator new(unsigned long) ()
&gt;    from /usr/lib64/libstdc++.so.6
&gt; #3  0x00000000004646a7 in __gnu_cxx::new_allocator&lt;int&gt;::allocate (
&gt;     this=0x7fffffffcb80, __n=0)
&gt;     at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c+ 
&gt; +/4.1.2/ext/new_allocator.h:88
&gt; #4  0x00000000004646cf in std::_Vector_base&lt;int, std::allocator&lt;int&gt;  
&gt; &gt;::_M_allocate (this=0x7fffffffcb80, __n=0)
&gt;     at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c+ 
&gt; +/4.1.2/bits/stl_vector.h:127
&gt; #5  0x0000000000464701 in std::_Vector_base&lt;int, std::allocator&lt;int&gt;  
&gt; &gt;::_Vector_base (this=0x7fffffffcb80, __n=0, __a=...)
&gt;     at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c+ 
&gt; +/4.1.2/bits/stl_vector.h:113
&gt; #6  0x0000000000464d0b in std::vector&lt;int, std::allocator&lt;int&gt;  
&gt; &gt;::vector (
&gt;     this=0x7fffffffcb80, __n=0, __value=@0x7fffffffc968, __a=...)
&gt;     at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c+ 
&gt; +/4.1.2/bits/stl_vector.h:216
&gt; #7  0x00000000004890d7 in Index::Index (this=0x7fffffffcb80)
&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
&gt;     at src/index.cpp:20
&gt; #8  0x000000000048927a in ReadFile (fileinput=0xd8663d &quot;prepdata/ 
&gt; idx_node.csv&quot;)
&gt;     at src/index.cpp:86
&gt; #9  0x0000000000489533 in ImportIndices () at src/index.cpp:120
&gt; #10 0x0000000000445e0e in myNeplanTaskScheduler(CNSGA2 *, int, int,  
&gt; int, ._85 *, char, int, message_para_to_workers_VecT &amp;,  
&gt; MPI_Datatype, int &amp;, int &amp;, std::vector&lt;std::vector&lt;double,  
&gt; std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double,  
&gt; std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;std::vector&lt;double,  
&gt; std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double,  
&gt; std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;double,  
&gt; std::allocator&lt;double&gt; &gt; &amp;, int, std::vector&lt;std::vector&lt;double,  
&gt; std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double,  
&gt; std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, MPI_Datatype, int, MPI_Datatype,  
&gt; int) (nsga2=0x118c490,
&gt;     popSize=&lt;value optimized out&gt;, nodeSize=&lt;value optimized out&gt;,
&gt;     myRank=&lt;value optimized out&gt;, myChildpop=0x1208d80,  
&gt; genCandTag=65 'A',
&gt;     generationNum=1, myPopParaVec=std::vector of length 4, capacity  
&gt; 4 = {...},
&gt;     message_to_master_type=0x7fffffffd540, myT1Flag=@0x7fffffffd68c,
&gt;     myT2Flag=@0x7fffffffd688,
&gt;     resultTaskPackageT1=std::vector of length 4, capacity 4 = {...},
&gt;     resultTaskPackageT2Pr=std::vector of length 4, capacity 4 = {...},
&gt;     xdataV=std::vector of length 4, capacity 4 = {...}, objSize=7,
&gt;     resultTaskPackageT12=std::vector of length 4, capacity 4 = {...},
&gt;     xdata_to_workers_type=0x121c410, myGenerationNum=1,
&gt;     Mpara_to_workers_type=0x121b9b0, nconNum=0)
&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
&gt;     at src/nsga2/myNetplanScheduler.cpp:109
&gt; #11 0x000000000044f44b in main (argc=1, argv=0x7fffffffd998)
&gt;     at src/nsga2/main-parallel2.cpp:216
&gt; ----------------------------------------------------
&gt;
&gt; What is &quot;opal_memory_ptmalloc2_int_malloc ()&quot; ?
&gt;
&gt; The gdb output from sequential code:
&gt; -------------------------------------
&gt; Breakpoint 1, main (argc=&lt;value optimized out&gt;, argv=&lt;value  
&gt; optimized out&gt;)
&gt;     at src/nsga2/main-seq.cpp:32
&gt; 32              ImportIndices();
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Breakpoint 2, ImportIndices () at src/index.cpp:115
&gt; 115             IdxNode = ReadFile(&quot;prepdata/idx_node.csv&quot;);
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Breakpoint 4, ReadFile (fileinput=0xd6bb9d &quot;prepdata/idx_node.csv&quot;)
&gt;     at src/index.cpp:86
&gt; 86              Index TempIndex;
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Breakpoint 5, Index::Index (this=0x7fffffffd6d0) at src/index.cpp:20
&gt; 20              Name(0) {}
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Breakpoint 4, ReadFile (fileinput=0xd6bbb3 &quot;prepdata/idx_ud.csv&quot;)
&gt;     at src/index.cpp:86
&gt; 86              Index TempIndex;
&gt; (gdb) bt
&gt; #0  ReadFile (fileinput=0xd6bbb3 &quot;prepdata/idx_ud.csv&quot;) at src/ 
&gt; index.cpp:86
&gt; #1  0x0000000000471cc9 in ImportIndices () at src/index.cpp:116
&gt; #2  0x000000000043bba6 in main (argc=&lt;value optimized out&gt;,
&gt;     argv=&lt;value optimized out&gt;) at src/nsga2/main-seq.cpp:32
&gt;
&gt; --------------------------------------
&gt; thanks
&gt;
&gt;
&gt; From: belaid_moa_at_[hidden]
&gt; To: users_at_[hidden]; dtustudy68_at_[hidden]
&gt; Subject: RE: [OMPI users] OMPI seg fault by a class with weird  
&gt; address.
&gt; Date: Tue, 15 Mar 2011 06:16:35 +0000
&gt;
&gt; Hi Jack,
&gt; 1- Where is your main function to see how you called your class?
&gt; 2- I do not see the implementation of GetPosition, GetName, etc.?
&gt;
&gt; With best regards,
&gt; -Belaid.
&gt;
&gt;
&gt; From: dtustudy68_at_[hidden]
&gt; To: users_at_[hidden]
&gt; Date: Mon, 14 Mar 2011 19:04:12 -0600
&gt; Subject: [OMPI users] OMPI seg fault by a class with weird address.
&gt;
&gt; Hi,
&gt;
&gt; I got a run-time error of a Open MPI C++ program.
&gt;
&gt; The following output is from gdb:
&gt;
&gt; --------------------------------------------------------------------------
&gt; Program received signal SIGSEGV, Segmentation fault.
&gt; 0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()
&gt;    from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
&gt;
&gt; At the point
&gt;
&gt; Breakpoint 9, Index::Index (this=0x7fffffffcb80) at src/index.cpp:20
&gt; 20              Name(0) {}
&gt;
&gt; The Index has been called before this point and no problem:
&gt; -------------------------------------------------------
&gt; Breakpoint 9, Index::Index (this=0x117d800) at src/index.cpp:20
&gt; 20              Name(0) {}
&gt; (gdb) c
&gt; Continuing.
&gt;
&gt; Breakpoint 9, Index::Index (this=0x117d860) at src/index.cpp:20
&gt; 20              Name(0) {}
&gt; (gdb) c
&gt; Continuing.
&gt; ----------------------------------------------------------------------------
&gt;
&gt; It seems that the 0x7fffffffcb80 address is a problem.
&gt;
&gt; But, I donot know the reason and how to remove the bug.
&gt;
&gt; Any help is really appreciated.
&gt;
&gt; thanks
&gt;
&gt; the following is the index definition.
&gt;
&gt; ---------------------------------------------------------
&gt; class Index {
&gt;     public:
&gt;         Index();
&gt;         Index(const Index&amp; rhs);
&gt;         ~Index();
&gt;         Index&amp; operator=(const Index&amp; rhs);
&gt; 		
&gt; 		vector&lt;int&gt; GetPosition() const;
&gt; 		vector&lt;int&gt; GetColumn() const;
&gt; 		vector&lt;int&gt; GetYear() const;
&gt; 		vector&lt;string&gt; GetName() const;
&gt; 		int GetPosition(const int idx) const;
&gt; 		int GetColumn(const int idx) const;
&gt; 		int GetYear(const int idx) const;
&gt; 		string GetName(const int idx) const;
&gt; 		int GetSize() const;
&gt; 		
&gt; 		void Add(const int idx, const int col, const string&amp; name);
&gt; 		void Add(const int idx, const int col, const int year, const  
&gt; string&amp; name);
&gt; 		void Add(const int idx, const Step&amp; col, const string&amp; name);
&gt; 		void WriteFile(const char* fileinput) const;
&gt; 		
&gt;     private:
&gt; 		vector&lt;int&gt; Position;
&gt; 		vector&lt;int&gt; Column;
&gt; 		vector&lt;int&gt; Year;
&gt; 		vector&lt;string&gt; Name;
&gt; };
&gt; // Contructors and destructor for the Index class
&gt; Index::Index() :
&gt; 	Position(0),
&gt; 	Column(0),
&gt; 	Year(0),
&gt; 	Name(0) {}
&gt;
&gt; Index::Index(const Index&amp; rhs) :
&gt; 	Position(rhs.GetPosition()),
&gt; 	Column(rhs.GetColumn()),
&gt; 	Year(rhs.GetYear()),
&gt; 	Name(rhs.GetName()) {}
&gt;
&gt; Index::~Index() {}
&gt;
&gt; Index&amp; Index::operator=(const Index&amp; rhs) {
&gt;     Position = rhs.GetPosition();
&gt; 	Column = rhs.GetColumn(),
&gt; 	Year = rhs.GetYear(),
&gt; 	Name = rhs.GetName();
&gt;     return *this;
&gt; }
&gt; ----------------------------------------------------------
&gt;
&gt;
&gt;
&gt; _______________________________________________ users mailing list users_at_[hidden] 
&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15869.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15867.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>In reply to:</strong> <a href="15866.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15869.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15869.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15870.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
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
