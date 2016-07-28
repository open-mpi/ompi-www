<?
$subject_val = "Re: [OMPI users] OMPI seg fault by a class with weird address.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 11:19:37 2011" -->
<!-- isoreceived="20110315151937" -->
<!-- sent="Tue, 15 Mar 2011 09:19:31 -0600" -->
<!-- isosent="20110315151931" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI seg fault by a class with weird address." -->
<!-- id="SNT134-w4218A8A42ADDDB8F671D43CBCF0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 11:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15867.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15865.php">Jeff Squyres: "Re: [OMPI users] PGI 10.9 build failures"</a>
<li><strong>In reply to:</strong> <a href="15861.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15868.php">Samuel K. Gutierrez: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15868.php">Samuel K. Gutierrez: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
I do not have system administrator authorization. I am afraid that I cannot rebuild OpenMPI --without-memory-manager. 
<br>
Are there other ways to get around it ? 
<br>
For example, use other things to replace &quot;ptmalloc&quot; ?
<br>
Any help is really appreciated. 
<br>
thanks 
<br>
<p>From: belaid_moa_at_[hidden]
<br>
To: dtustudy68_at_[hidden]; users_at_[hidden]
<br>
Subject: RE: [OMPI users] OMPI seg fault by a class with weird address.
<br>
Date: Tue, 15 Mar 2011 08:00:56 +0000
<br>
<p><p><p><p><p><p><p><p>Hi Jack,
<br>
&nbsp;&nbsp;I may need to see the whole code to decide but my quick look suggest that ptmalloc is causing a problem with STL-vector allocation. ptmalloc is the openMPI internal malloc library. Could you try to build openMPI without memory management (using --without-memory-manager) and let us know the outcome. ptmalloc is not needed if you are not using an RDMA interconnect.
<br>
<p>&nbsp;&nbsp;With best regards,
<br>
-Belaid.
<br>
<p>From: dtustudy68_at_[hidden]
<br>
To: belaid_moa_at_[hidden]; users_at_[hidden]
<br>
Subject: RE: [OMPI users] OMPI seg fault by a class with weird address.
<br>
Date: Tue, 15 Mar 2011 00:30:19 -0600
<br>
<p><p><p><p><p><p><p><p>Hi, 
<br>
Because the code is very long, I just  show the calling relationship of functions. 
<br>
main(){    scheduler();
<br>
}scheduler(){     ImportIndices();}
<br>
ImportIndices(){	Index IdxNode ;	IdxNode = ReadFile(&quot;fileName&quot;);}
<br>
Index ReadFile(const char* fileinput) {	Index TempIndex;        .........
<br>
}
<br>
vector&lt;int&gt; Index::GetPosition() const { return Position; }vector&lt;int&gt; Index::GetColumn() const { return Column; }vector&lt;int&gt; Index::GetYear() const { return Year; }vector&lt;string&gt; Index::GetName() const { return Name; }int Index::GetPosition(const int idx) const { return Position[idx]; }int Index::GetColumn(const int idx) const { return Column[idx]; }int Index::GetYear(const int idx) const { return Year[idx]; }string Index::GetName(const int idx) const { return Name[idx]; }int Index::GetSize() const { return Position.size(); }
<br>
The sequential code works well, and there is no  scheduler(). 
<br>
The parallel code output from gdb:----------------------------------------------Breakpoint 1, myNeplanTaskScheduler(CNSGA2 *, int, int, int, ._85 *, char, int, message_para_to_workers_VecT &amp;, MPI_Datatype, int &amp;, int &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;double, std::allocator&lt;double&gt; &gt; &amp;, int, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, MPI_Datatype, int, MPI_Datatype, int) (nsga2=0x118c490,     popSize=&lt;value optimized out&gt;, nodeSize=&lt;value optimized out&gt;,     myRank=&lt;value optimized out&gt;, myChildpop=0x1208d80, genCandTag=65 'A',     generationNum=1, myPopParaVec=std::vector of length 4, capacity 4 = {...},     message_to_master_type=0x7fffffffd540, myT1Flag=@0x7fffffffd68c,     myT2Flag=@0x7fffffffd688,     resultTaskPackageT1=std::vector of length 4, capacity 4 = {...},     resultTaskPackageT2Pr=std::vector of length 4, capacity 4 = {...},     xdataV=std::vector of length 4, capacity 4 = {...}, objSize=7,     resultTaskPackageT12=std::vector of length 4, capacity 4 = {...},     xdata_to_workers_type=0x121c410, myGenerationNum=1,     Mpara_to_workers_type=0x121b9b0, nconNum=0)    at src/nsga2/myNetplanScheduler.cpp:109109                     ImportIndices();(gdb) cContinuing.
<br>
Breakpoint 2, ImportIndices () at src/index.cpp:120120             IdxNode = ReadFile(&quot;prepdata/idx_node.csv&quot;);(gdb) cContinuing.
<br>
Breakpoint 4, ReadFile (fileinput=0xd8663d &quot;prepdata/idx_node.csv&quot;)    at src/index.cpp:8686              Index TempIndex;(gdb) cContinuing.
<br>
Breakpoint 5, Index::Index (this=0x7fffffffcb80) at src/index.cpp:2020              Name(0) {}(gdb) cContinuing.
<br>
Program received signal SIGSEGV, Segmentation fault.0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()   from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
<br>
---------------------------------------the backtrace output from the above parallel OpenMPI code:
<br>
(gdb) bt#0  0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()   from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0#1  0x00002aaaab3b2bd3 in opal_memory_ptmalloc2_malloc ()   from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0#2  0x0000003f7c8bd1dd in operator new(unsigned long) ()   from /usr/lib64/libstdc++.so.6#3  0x00000000004646a7 in __gnu_cxx::new_allocator&lt;int&gt;::allocate (    this=0x7fffffffcb80, __n=0)    at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/ext/new_allocator.h:88#4  0x00000000004646cf in std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_M_allocate (this=0x7fffffffcb80, __n=0)    at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:127#5  0x0000000000464701 in std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_Vector_base (this=0x7fffffffcb80, __n=0, __a=...)    at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:113#6  0x0000000000464d0b in std::vector&lt;int, std::allocator&lt;int&gt; &gt;::vector (    this=0x7fffffffcb80, __n=0, __value=@0x7fffffffc968, __a=...)    at /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../include/c++/4.1.2/bits/stl_vector.h:216#7  0x00000000004890d7 in Index::Index (this=0x7fffffffcb80)---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---    at src/index.cpp:20#8  0x000000000048927a in ReadFile (fileinput=0xd8663d &quot;prepdata/idx_node.csv&quot;)    at src/index.cpp:86#9  0x0000000000489533 in ImportIndices () at src/index.cpp:120#10 0x0000000000445e0e in myNeplanTaskScheduler(CNSGA2 *, int, int, int, ._85 *, char, int, message_para_to_workers_VecT &amp;, MPI_Datatype, int &amp;, int &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, std::vector&lt;double, std::allocator&lt;double&gt; &gt; &amp;, int, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt; &amp;, MPI_Datatype, int, MPI_Datatype, int) (nsga2=0x118c490,     popSize=&lt;value optimized out&gt;, nodeSize=&lt;value optimized out&gt;,     myRank=&lt;value optimized out&gt;, myChildpop=0x1208d80, genCandTag=65 'A',     generationNum=1, myPopParaVec=std::vector of length 4, capacity 4 = {...},     message_to_master_type=0x7fffffffd540, myT1Flag=@0x7fffffffd68c,     myT2Flag=@0x7fffffffd688,     resultTaskPackageT1=std::vector of length 4, capacity 4 = {...},     resultTaskPackageT2Pr=std::vector of length 4, capacity 4 = {...},     xdataV=std::vector of length 4, capacity 4 = {...}, objSize=7,     resultTaskPackageT12=std::vector of length 4, capacity 4 = {...},     xdata_to_workers_type=0x121c410, myGenerationNum=1,     Mpara_to_workers_type=0x121b9b0, nconNum=0)---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---    at src/nsga2/myNetplanScheduler.cpp:109#11 0x000000000044f44b in main (argc=1, argv=0x7fffffffd998)    at src/nsga2/main-parallel2.cpp:216----------------------------------------------------
<br>
What is &quot;opal_memory_ptmalloc2_int_malloc ()&quot; ?
<br>
The gdb output from sequential code: -------------------------------------Breakpoint 1, main (argc=&lt;value optimized out&gt;, argv=&lt;value optimized out&gt;)    at src/nsga2/main-seq.cpp:3232              ImportIndices();(gdb) cContinuing.
<br>
Breakpoint 2, ImportIndices () at src/index.cpp:115115             IdxNode = ReadFile(&quot;prepdata/idx_node.csv&quot;);(gdb) cContinuing.
<br>
Breakpoint 4, ReadFile (fileinput=0xd6bb9d &quot;prepdata/idx_node.csv&quot;)    at src/index.cpp:8686              Index TempIndex;(gdb) cContinuing.
<br>
Breakpoint 5, Index::Index (this=0x7fffffffd6d0) at src/index.cpp:2020              Name(0) {}(gdb) cContinuing.
<br>
Breakpoint 4, ReadFile (fileinput=0xd6bbb3 &quot;prepdata/idx_ud.csv&quot;)    at src/index.cpp:8686              Index TempIndex;(gdb) bt#0  ReadFile (fileinput=0xd6bbb3 &quot;prepdata/idx_ud.csv&quot;) at src/index.cpp:86#1  0x0000000000471cc9 in ImportIndices () at src/index.cpp:116#2  0x000000000043bba6 in main (argc=&lt;value optimized out&gt;,     argv=&lt;value optimized out&gt;) at src/nsga2/main-seq.cpp:32
<br>
--------------------------------------thanks
<br>
<p>From: belaid_moa_at_[hidden]
<br>
To: users_at_[hidden]; dtustudy68_at_[hidden]
<br>
Subject: RE: [OMPI users] OMPI seg fault by a class with weird address.
<br>
Date: Tue, 15 Mar 2011 06:16:35 +0000
<br>
<p><p><p><p><p><p><p><p>Hi Jack,
<br>
1- Where is your main function to see how you called your class?
<br>
2- I do not see the implementation of GetPosition, GetName, etc.?
<br>
<p>With best regards,
<br>
-Belaid.
<br>
&nbsp;&nbsp;
<br>
<p>From: dtustudy68_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Date: Mon, 14 Mar 2011 19:04:12 -0600
<br>
Subject: [OMPI users] OMPI seg fault by a class with weird address.
<br>
<p><p><p><p><p><p><p><p>Hi, 
<br>
I got a run-time error of a Open MPI C++ program. 
<br>
The following output is from gdb: 
<br>
--------------------------------------------------------------------------Program received signal SIGSEGV, Segmentation fault.0x00002aaaab3b0b81 in opal_memory_ptmalloc2_int_malloc ()   from /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0
<br>
At the point 
<br>
Breakpoint 9, Index::Index (this=0x7fffffffcb80) at src/index.cpp:2020              Name(0) {}
<br>
The Index has been called before this point and no problem:-------------------------------------------------------Breakpoint 9, Index::Index (this=0x117d800) at src/index.cpp:2020              Name(0) {}(gdb) cContinuing.
<br>
Breakpoint 9, Index::Index (this=0x117d860) at src/index.cpp:2020              Name(0) {}(gdb) cContinuing.----------------------------------------------------------------------------
<br>
It seems that the 0x7fffffffcb80 address is a problem. 
<br>
But, I donot know the reason and how to remove the bug. 
<br>
Any help is really appreciated. 
<br>
thanks
<br>
the following is the index definition.
<br>
---------------------------------------------------------class Index {    public:        Index();        Index(const Index&amp; rhs);        ~Index();        Index&amp; operator=(const Index&amp; rhs);				vector&lt;int&gt; GetPosition() const;		vector&lt;int&gt; GetColumn() const;		vector&lt;int&gt; GetYear() const;		vector&lt;string&gt; GetName() const;		int GetPosition(const int idx) const;		int GetColumn(const int idx) const;		int GetYear(const int idx) const;		string GetName(const int idx) const;		int GetSize() const;				void Add(const int idx, const int col, const string&amp; name);		void Add(const int idx, const int col, const int year, const string&amp; name);		void Add(const int idx, const Step&amp; col, const string&amp; name);		void WriteFile(const char* fileinput) const;		    private:		vector&lt;int&gt; Position;		vector&lt;int&gt; Column;		vector&lt;int&gt; Year;		vector&lt;string&gt; Name;};// Contructors and destructor for the Index classIndex::Index() :	Position(0),	Column(0),	Year(0),	Name(0) {}
<br>
Index::Index(const Index&amp; rhs) :	Position(rhs.GetPosition()),	Column(rhs.GetColumn()),	Year(rhs.GetYear()),	Name(rhs.GetName()) {}
<br>
Index::~Index() {}
<br>
Index&amp; Index::operator=(const Index&amp; rhs) {    Position = rhs.GetPosition();	Column = rhs.GetColumn(),	Year = rhs.GetYear(),	Name = rhs.GetName();    return *this;}----------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15866/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15867.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15865.php">Jeff Squyres: "Re: [OMPI users] PGI 10.9 build failures"</a>
<li><strong>In reply to:</strong> <a href="15861.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15868.php">Samuel K. Gutierrez: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15868.php">Samuel K. Gutierrez: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
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
