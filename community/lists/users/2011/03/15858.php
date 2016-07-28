<?
$subject_val = "[OMPI users] OMPI seg fault by a class with weird address.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 21:04:17 2011" -->
<!-- isoreceived="20110315010417" -->
<!-- sent="Mon, 14 Mar 2011 19:04:12 -0600" -->
<!-- isosent="20110315010412" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI seg fault by a class with weird address." -->
<!-- id="SNT134-w837F0D9A659880B22BCF8CBCF0_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] OMPI seg fault by a class with weird address.<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-14 21:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15859.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15857.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15859.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15859.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15859.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15857.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15859.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15859.php">Belaid MOA: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
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
