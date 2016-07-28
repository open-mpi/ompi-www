<?
$subject_val = "Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 12:35:26 2009" -->
<!-- isoreceived="20090302173526" -->
<!-- sent="Mon, 2 Mar 2009 12:35:19 -0500" -->
<!-- isosent="20090302173519" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types" -->
<!-- id="C74B491B-9096-4D4A-894E-F33C2E032230_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090302150459.GG6790_at_catania.iwr.uni-heidelberg.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 12:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5541.php">Eugene Loh: "[OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5539.php">Jeff Squyres: "[OMPI devel] 1.3.1rc2 has been released"</a>
<li><strong>In reply to:</strong> <a href="5538.php">Markus Blatt: "[OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Markus,
<br>
<p>You're right, there was a problem in the code. I'll pass the gore  
<br>
details of the why and how. The problem is now fixed by commit r20674.  
<br>
It will be in the next release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 2, 2009, at 10:04 , Markus Blatt wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already posted this accidentally on the users list, but as it seems
</span><br>
<span class="quotelev1">&gt; like a bug I suppose this list is more appropriated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In one of my applications I am using cascaded derived MPI datatypes
</span><br>
<span class="quotelev1">&gt; created with MPI_Type_struct. One of these types is used to just send
</span><br>
<span class="quotelev1">&gt; a part (one MPI_Char) of a struct consisting of an int followed by two
</span><br>
<span class="quotelev1">&gt; chars. I.e, the int at the beginning is/should be ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works fine if I use this data type on its own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately I need to send another struct that contains an int and
</span><br>
<span class="quotelev1">&gt; the int-char-char struct from above. Again I construct a custom MPI
</span><br>
<span class="quotelev1">&gt; data type for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When sending this cascaded data type It seems that the offset of the
</span><br>
<span class="quotelev1">&gt; char in the inner custom type is disregarded on the receiving end and
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; received data ('1') is stored in the first int instead of the
</span><br>
<span class="quotelev1">&gt; following char.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested this code with both lam and mpich. There it worked as
</span><br>
<span class="quotelev1">&gt; expected (saving the '1' in the first char).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last two lines of the output of the attached test case read
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; received global=10 attribute=0 (local=1 public=0)
</span><br>
<span class="quotelev1">&gt; received  attribute=1 (local=100 public=0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for openmi instead of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; received global=10 attribute=1 (local=100 public=0)
</span><br>
<span class="quotelev1">&gt; received  attribute=1 (local=100 public=0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for lam and mpich.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem is experienced when using version 1.3-2 as well as
</span><br>
<span class="quotelev1">&gt; 1.2.7~rc2-2 of openmpi on Debian.
</span><br>
<span class="quotelev1">&gt; At first sight it seemed corellated with bug #1677. But as that should
</span><br>
<span class="quotelev1">&gt; be fixed since 1.2.9 it is probably something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Markus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include&quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include&lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct LocalIndex
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int local_;
</span><br>
<span class="quotelev1">&gt;  char attribute_;
</span><br>
<span class="quotelev1">&gt;  char public_;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct IndexPair
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int global_;
</span><br>
<span class="quotelev1">&gt;  LocalIndex local_;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if(size&lt;2)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      std::cerr&lt;&lt;&quot;no procs has to be &gt;2&quot;&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;      MPI_Abort(MPI_COMM_WORLD, 99);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype litype, ptype;
</span><br>
<span class="quotelev1">&gt;  // Create custom MPI datatypes
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    int length=1;
</span><br>
<span class="quotelev1">&gt;    MPI_Aint disp, origin, next;
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype types = MPI_CHAR;
</span><br>
<span class="quotelev1">&gt;    LocalIndex rep[2];
</span><br>
<span class="quotelev1">&gt;    MPI_Address(rep, &amp;origin); // lower bound of the datatype
</span><br>
<span class="quotelev1">&gt;    MPI_Address(&amp;(rep[0].attribute_), &amp;disp);
</span><br>
<span class="quotelev1">&gt;    MPI_Address(rep+1, &amp;next);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    disp -= origin;
</span><br>
<span class="quotelev1">&gt;    next -= origin;
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype tmptype;
</span><br>
<span class="quotelev1">&gt;    MPI_Type_struct(1, &amp;length, &amp;disp, &amp;types, &amp;litype);
</span><br>
<span class="quotelev1">&gt;    //MPI_Type_commit(&amp;tmptype);
</span><br>
<span class="quotelev1">&gt;    //MPI_Type_create_resized(tmptype, (MPI_Aint)0, next, &amp;litype);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit(&amp;litype);
</span><br>
<span class="quotelev1">&gt;    //MPI_Type_free(&amp;tmptype);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if(rank==0)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	MPI_Aint lb,extent;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_get_extent(litype, &amp;lb, &amp;extent);
</span><br>
<span class="quotelev1">&gt; 	std::cout&lt;&lt;&quot;litype: lb=&quot;&lt;&lt;lb&lt;&lt;&quot; extend=&quot;&lt;&lt;extent&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_get_true_extent(litype, &amp;lb, &amp;extent);
</span><br>
<span class="quotelev1">&gt; 	std::cout&lt;&lt;&quot;true litype: lb=&quot;&lt;&lt;lb&lt;&lt;&quot; extend=&quot;&lt;&lt;extent&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; 	int size;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_size(litype, &amp;size);
</span><br>
<span class="quotelev1">&gt; 	std::cout&lt;&lt;&quot;litype size=&quot;&lt;&lt;size&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    int length[2] ={1, 1};
</span><br>
<span class="quotelev1">&gt;    MPI_Aint disp[2], origin;
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype types[2] = {MPI_INT,
</span><br>
<span class="quotelev1">&gt; 			     litype};
</span><br>
<span class="quotelev1">&gt;    IndexPair rep[2];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Address(rep, &amp;origin); // lower bound of the datatype
</span><br>
<span class="quotelev1">&gt;    MPI_Address(&amp;(rep[0].global_), disp);
</span><br>
<span class="quotelev1">&gt;    MPI_Address(&amp;(rep[0].local_), disp+1);
</span><br>
<span class="quotelev1">&gt;    for(int i=0; i &lt; 2; ++i)
</span><br>
<span class="quotelev1">&gt;      disp[i] -= origin;
</span><br>
<span class="quotelev1">&gt;    MPI_Type_struct(2, length, disp, types, &amp;ptype);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit(&amp;ptype);
</span><br>
<span class="quotelev1">&gt;    if(rank==0)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	MPI_Aint lb,extent;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_get_extent(ptype, &amp;lb, &amp;extent);
</span><br>
<span class="quotelev1">&gt; 	std::cout&lt;&lt;&quot;ptype: lb=&quot;&lt;&lt;lb&lt;&lt;&quot; extend=&quot;&lt;&lt;extent&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_get_true_extent(ptype, &amp;lb, &amp;extent);
</span><br>
<span class="quotelev1">&gt; 	std::cout&lt;&lt;&quot;true: ptype: lb=&quot;&lt;&lt;lb&lt;&lt;&quot; extend=&quot;&lt;&lt;extent&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; 	int size;
</span><br>
<span class="quotelev1">&gt; 	MPI_Type_size(ptype, &amp;size);
</span><br>
<span class="quotelev1">&gt; 	std::cout&lt;&lt;&quot;ptype size=&quot;&lt;&lt;size&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  IndexPair pair;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if(rank==0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      pair.global_=10;
</span><br>
<span class="quotelev1">&gt;      pair.local_.local_=1;
</span><br>
<span class="quotelev1">&gt;      pair.local_.attribute_='1';
</span><br>
<span class="quotelev1">&gt;      pair.local_.public_='1';
</span><br>
<span class="quotelev1">&gt;      MPI_Send(&amp;pair, 1, ptype, 1, 199, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;      MPI_Send(&amp;pair.local_, 1, litype, 1, 199, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    }else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      pair.global_=0;
</span><br>
<span class="quotelev1">&gt;      pair.local_.local_=100;
</span><br>
<span class="quotelev1">&gt;      pair.local_.attribute_='0';
</span><br>
<span class="quotelev1">&gt;      pair.local_.public_='0';
</span><br>
<span class="quotelev1">&gt;      if(rank==1)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 	  MPI_Status status;
</span><br>
<span class="quotelev1">&gt; 	  MPI_Recv(&amp;pair, 1, ptype, 0, 199, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; 	  std::cout&lt;&lt;&quot;received global=&quot;&lt;&lt;pair.global_&lt;&lt;&quot; attribute=&quot;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 	    pair.local_.attribute_&lt;&lt;&quot; (local=&quot;&lt;&lt;pair.local_.local_
</span><br>
<span class="quotelev1">&gt; 		   &lt;&lt;&quot; public=&quot;&lt;&lt;pair.local_.public_&lt;&lt;&quot;)&quot;&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	  pair.local_.local_=100;
</span><br>
<span class="quotelev1">&gt; 	  pair.local_.attribute_='0';
</span><br>
<span class="quotelev1">&gt; 	  pair.local_.public_='0';
</span><br>
<span class="quotelev1">&gt; 	  MPI_Recv(&amp;pair.local_, 1, litype, 0, 199, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; 	  std::cout&lt;&lt;&quot;received  attribute=&quot;&lt;&lt;pair.local_.attribute_
</span><br>
<span class="quotelev1">&gt; 		   &lt;&lt;&quot; (local=&quot;&lt;&lt;pair.local_.local_
</span><br>
<span class="quotelev1">&gt; 		   &lt;&lt;&quot; public=&quot;&lt;&lt;pair.local_.public_&lt;&lt;&quot;)&quot;&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- End forwarded message -----
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; openmpistruct 
</span><br>
<span class="quotelev1">&gt; .cc&gt;&lt;ompi_info.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5541.php">Eugene Loh: "[OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5539.php">Jeff Squyres: "[OMPI devel] 1.3.1rc2 has been released"</a>
<li><strong>In reply to:</strong> <a href="5538.php">Markus Blatt: "[OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
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
