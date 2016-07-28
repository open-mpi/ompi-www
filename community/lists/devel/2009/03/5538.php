<?
$subject_val = "[OMPI devel] Bug (wrong LB?) when using cascading derived data types";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 10:04:03 2009" -->
<!-- isoreceived="20090302150403" -->
<!-- sent="Mon, 2 Mar 2009 16:04:59 +0100" -->
<!-- isosent="20090302150459" -->
<!-- name="Markus Blatt" -->
<!-- email="Markus.Blatt_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug (wrong LB?) when using cascading derived data types" -->
<!-- id="20090302150459.GG6790_at_catania.iwr.uni-heidelberg.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Bug (wrong LB?) when using cascading derived data types<br>
<strong>From:</strong> Markus Blatt (<em>Markus.Blatt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 10:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5539.php">Jeff Squyres: "[OMPI devel] 1.3.1rc2 has been released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5540.php">George Bosilca: "Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
<li><strong>Reply:</strong> <a href="5540.php">George Bosilca: "Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I already posted this accidentally on the users list, but as it seems
<br>
like a bug I suppose this list is more appropriated.
<br>
<p>In one of my applications I am using cascaded derived MPI datatypes
<br>
created with MPI_Type_struct. One of these types is used to just send
<br>
a part (one MPI_Char) of a struct consisting of an int followed by two
<br>
chars. I.e, the int at the beginning is/should be ignored.
<br>
<p>This works fine if I use this data type on its own. 
<br>
<p>Unfortunately I need to send another struct that contains an int and
<br>
the int-char-char struct from above. Again I construct a custom MPI
<br>
data type for this.
<br>
<p>When sending this cascaded data type It seems that the offset of the
<br>
char in the inner custom type is disregarded on the receiving end and
<br>
the
<br>
received data ('1') is stored in the first int instead of the
<br>
following char.
<br>
<p>I have tested this code with both lam and mpich. There it worked as
<br>
expected (saving the '1' in the first char).
<br>
<p>The last two lines of the output of the attached test case read
<br>
<p>received global=10 attribute=0 (local=1 public=0)
<br>
received  attribute=1 (local=100 public=0)
<br>
<p>for openmi instead of
<br>
<p>received global=10 attribute=1 (local=100 public=0)
<br>
received  attribute=1 (local=100 public=0)
<br>
<p>for lam and mpich.
<br>
<p>This problem is experienced when using version 1.3-2 as well as
<br>
1.2.7~rc2-2 of openmpi on Debian.
<br>
At first sight it seemed corellated with bug #1677. But as that should
<br>
be fixed since 1.2.9 it is probably something else.
<br>
<p><p>Cheers,
<br>
<p>Markus
<br>
<p><p><p>#include&quot;mpi.h&quot;
<br>
#include&lt;iostream&gt;
<br>
<p>struct LocalIndex
<br>
{
<br>
&nbsp;&nbsp;int local_;
<br>
&nbsp;&nbsp;char attribute_;
<br>
&nbsp;&nbsp;char public_;
<br>
};
<br>
<p><p>struct IndexPair
<br>
{
<br>
&nbsp;&nbsp;int global_;
<br>
&nbsp;&nbsp;LocalIndex local_;
<br>
};
<br>
&nbsp;&nbsp;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;if(size&lt;2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr&lt;&lt;&quot;no procs has to be &gt;2&quot;&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 99);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}  
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Datatype litype, ptype;
<br>
&nbsp;&nbsp;// Create custom MPI datatypes
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int length=1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint disp, origin, next;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype types = MPI_CHAR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LocalIndex rep[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address(rep, &amp;origin); // lower bound of the datatype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address(&amp;(rep[0].attribute_), &amp;disp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address(rep+1, &amp;next);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;disp -= origin;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;next -= origin;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype tmptype;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_struct(1, &amp;length, &amp;disp, &amp;types, &amp;litype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//MPI_Type_commit(&amp;tmptype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//MPI_Type_create_resized(tmptype, (MPI_Aint)0, next, &amp;litype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;litype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//MPI_Type_free(&amp;tmptype);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(rank==0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint lb,extent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_extent(litype, &amp;lb, &amp;extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;litype: lb=&quot;&lt;&lt;lb&lt;&lt;&quot; extend=&quot;&lt;&lt;extent&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_true_extent(litype, &amp;lb, &amp;extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;true litype: lb=&quot;&lt;&lt;lb&lt;&lt;&quot; extend=&quot;&lt;&lt;extent&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_size(litype, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;litype size=&quot;&lt;&lt;size&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int length[2] ={1, 1};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint disp[2], origin;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype types[2] = {MPI_INT, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;litype};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;IndexPair rep[2];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address(rep, &amp;origin); // lower bound of the datatype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address(&amp;(rep[0].global_), disp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Address(&amp;(rep[0].local_), disp+1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(int i=0; i &lt; 2; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disp[i] -= origin;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_struct(2, length, disp, types, &amp;ptype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;ptype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(rank==0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint lb,extent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_extent(ptype, &amp;lb, &amp;extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;ptype: lb=&quot;&lt;&lt;lb&lt;&lt;&quot; extend=&quot;&lt;&lt;extent&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_true_extent(ptype, &amp;lb, &amp;extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;true: ptype: lb=&quot;&lt;&lt;lb&lt;&lt;&quot; extend=&quot;&lt;&lt;extent&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_size(ptype, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;ptype size=&quot;&lt;&lt;size&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;IndexPair pair;
<br>
<p>&nbsp;&nbsp;if(rank==0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.global_=10;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.local_=1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.attribute_='1';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.public_='1';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;pair, 1, ptype, 1, 199, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;pair.local_, 1, litype, 1, 199, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.global_=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.local_=100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.attribute_='0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.public_='0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rank==1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;pair, 1, ptype, 0, 199, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;received global=&quot;&lt;&lt;pair.global_&lt;&lt;&quot; attribute=&quot;&lt;&lt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.attribute_&lt;&lt;&quot; (local=&quot;&lt;&lt;pair.local_.local_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt;&quot; public=&quot;&lt;&lt;pair.local_.public_&lt;&lt;&quot;)&quot;&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.local_=100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.attribute_='0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pair.local_.public_='0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;pair.local_, 1, litype, 0, 199, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout&lt;&lt;&quot;received  attribute=&quot;&lt;&lt;pair.local_.attribute_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt;&quot; (local=&quot;&lt;&lt;pair.local_.local_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt;&quot; public=&quot;&lt;&lt;pair.local_.public_&lt;&lt;&quot;)&quot;&lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;
<br>
}
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>----- End forwarded message -----
<br>
<p>

<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5538/openmpistruct.cc">openmpistruct.cc</a>
</ul>
<!-- attachment="openmpistruct.cc" -->
<hr>
<ul>
<li>application/x-gtar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5538/ompi_info.tgz">ompi_info.tgz</a>
</ul>
<!-- attachment="ompi_info.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5539.php">Jeff Squyres: "[OMPI devel] 1.3.1rc2 has been released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5540.php">George Bosilca: "Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
<li><strong>Reply:</strong> <a href="5540.php">George Bosilca: "Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
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
