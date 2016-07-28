<?
$subject_val = "[OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 00:37:11 2012" -->
<!-- isoreceived="20120118053711" -->
<!-- sent="Wed, 18 Jan 2012 14:36:26 +0900" -->
<!-- isosent="20120118053626" -->
<!-- name="Victor Pomponiu" -->
<!-- email="victor.pomponiu_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes" -->
<!-- id="CA+4bJf1323=Caqy0JKykCJih=nzSVGFdiE3fqxzXr6o1ZH=MPA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes<br>
<strong>From:</strong> Victor Pomponiu (<em>victor.pomponiu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 00:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18199.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Previous message:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18218.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<li><strong>Reply:</strong> <a href="18218.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>for several days I am trying to create MPI derived datatype in order to
<br>
send/receive an user defined object. I'm trying to implement it using
<br>
MPI::Datatype::Create_struct.
<br>
I have consulted several threads from the archive
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2012/01/18093.php">http://www.open-mpi.org/community/lists/users/2012/01/18093.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2005/08/0123.php">http://www.open-mpi.org/community/lists/users/2005/08/0123.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/08/6302.php">http://www.open-mpi.org/community/lists/users/2008/08/6302.php</a>
<br>
<p>but I'm still havening difficulties to solve this issue.
<br>
There are some particular features that makes the task more difficult. Let
<br>
me explain: the obj. that I want to transmit is instantiated from a class
<br>
called MemberBlock. This class is a template class and contains: dynamic
<br>
allocating arrays, and objs. instantiated from other classes. Bellow is the
<br>
class declaration.
<br>
<p>Therefore how can I construct a MPI dervied data type in this situation?
<br>
Any suggestions are highly appreciated
<br>
<p>Thank you,
<br>
Victor Pomponiu
<br>
<p>-------------------------------------------------------------------------------------------------------------------------
<br>
/**
<br>
&nbsp;* VecData.h:         Interface class for data appearing in vector format.
<br>
&nbsp;*/
<br>
# include &quot;DistData.h&quot;         //Interface class for data having a pairwise
<br>
distance measure.
<br>
<p>class VecData: public DistData {
<br>
<p>public:
<br>
// no properties, only public/private methods;
<br>
.........
<br>
}
<br>
<p>/**
<br>
&nbsp;* VecDataBlock.h:    Base class for storable data having a pairwise
<br>
&nbsp;*                             distance measure.
<br>
*/
<br>
<p>class VecDataBlock {
<br>
<p>public:
<br>
&nbsp;&nbsp;VecData** dataList;           // Array of data items for this
<br>
block.
<br>
&nbsp;&nbsp;int numItems;                   // Number of data items assigned to the
<br>
block.
<br>
&nbsp;&nbsp;int blockID;                      // Integer identifier for this block.
<br>
&nbsp;&nbsp;int sampleID;                   // The sample identifier for this
<br>
block
<br>
&nbsp;&nbsp;int globalOffset;               // Index of the first block item relative
<br>
to the full data set.
<br>
&nbsp;&nbsp;char* fileNamePrefix;       // The file name prefix used for saving data
<br>
to disk.
<br>
&nbsp;&nbsp;char commentChar;         // The character denoting input comment lines.
<br>
<p>// methods ..........
<br>
}
<br>
<p><p>/**
<br>
&nbsp;* MemberBlock.h:   Class storing and managing member lists for a given
<br>
&nbsp;*                            block of data objects.
<br>
&nbsp;*/
<br>
<p>class MemberBlock_base {
<br>
public:
<br>
&nbsp;&nbsp;virtual ~MemberBlock_base () {};
<br>
};
<br>
<p>template &lt;class ScoreType&gt;
<br>
class MemberBlock: public MemberBlock_base {
<br>
<p>public:
<br>
&nbsp;&nbsp;char* fileNamePrefix;         // The file name prefix for the block save
<br>
file.
<br>
&nbsp;&nbsp;ofstream* saveFile;           // refers to an open file currently being
<br>
used for accumulating
<br>
&nbsp;&nbsp;VecDataBlock* dataBlock; // The block of data items upon
<br>
which
<br>
&nbsp;&nbsp;int globalOffset;                // The position of this block with
<br>
respect to the global ordering.
<br>
&nbsp;&nbsp;int numItems;                  // The number of data items assigned to
<br>
the block.
<br>
&nbsp;&nbsp;int sampleLevel;              // The sample level from
<br>
which
<br>
&nbsp;&nbsp;ScoreType** memberScoreLList;  // the scores of members associated with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//   each data the
<br>
item.
<br>
&nbsp;&nbsp;int** memberIndexLList;    //  for each data item a list of global
<br>
indices of its members.
<br>
&nbsp;&nbsp;int* memberSizeList;        //   the number of list members.
<br>
<p>&nbsp;&nbsp;int memberListBufferSize;   // buffer size for storing an individual
<br>
member list.
<br>
&nbsp;&nbsp;int saveCount;                // Keeps track of the number of member
<br>
lists  saved
<br>
&nbsp;&nbsp;float* tempDistBuffer;      // A temporary buffer for storing distances,
<br>
used for breaking
<br>
<p>//methods....
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18198/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18199.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Previous message:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18218.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<li><strong>Reply:</strong> <a href="18218.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
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
