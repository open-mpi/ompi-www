<?
$subject_val = "Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 10:38:37 2012" -->
<!-- isoreceived="20120119153837" -->
<!-- sent="Thu, 19 Jan 2012 10:38:32 -0500" -->
<!-- isosent="20120119153832" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes" -->
<!-- id="9DC76A48-F851-491A-B3E1-935DDFF5B224_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+4bJf1323=Caqy0JKykCJih=nzSVGFdiE3fqxzXr6o1ZH=MPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 10:38:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18219.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18217.php">Jeff Squyres: "Re: [OMPI users] Bug Report for MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="18198.php">Victor Pomponiu: "[OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you looked at boost.mpi?  They have some nice C++-friendly constructors for different types to send/receive via MPI.
<br>
<p>If boost.mpi doesn't do what you want, you'll likely need to have a custom MPI datatype constructed for each instance that you want to send/receive (and have that same datatype at both the sender and receiver), because both the internal types in the instance and the sizes of the arrays may differ in each instance.
<br>
<p><p>On Jan 18, 2012, at 12:36 AM, Victor Pomponiu wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for several days I am trying to create MPI derived datatype in order to send/receive an user defined object. I'm trying to implement it using MPI::Datatype::Create_struct. 
</span><br>
<span class="quotelev1">&gt; I have consulted several threads from the archive
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/01/18093.php">http://www.open-mpi.org/community/lists/users/2012/01/18093.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2005/08/0123.php">http://www.open-mpi.org/community/lists/users/2005/08/0123.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/08/6302.php">http://www.open-mpi.org/community/lists/users/2008/08/6302.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I'm still havening difficulties to solve this issue.
</span><br>
<span class="quotelev1">&gt; There are some particular features that makes the task more difficult. Let me explain: the obj. that I want to transmit is instantiated from a class called MemberBlock. This class is a template class and contains: dynamic allocating arrays, and objs. instantiated from other classes. Bellow is the class declaration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore how can I construct a MPI dervied data type in this situation? Any suggestions are highly appreciated 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Victor Pomponiu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * VecData.h:         Interface class for data appearing in vector format.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; # include &quot;DistData.h&quot;         //Interface class for data having a pairwise distance measure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; class VecData: public DistData {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt; // no properties, only public/private methods;
</span><br>
<span class="quotelev1">&gt; .........
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * VecDataBlock.h:    Base class for storable data having a pairwise 
</span><br>
<span class="quotelev1">&gt;  *                             distance measure.
</span><br>
<span class="quotelev1">&gt; */ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; class VecDataBlock {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;   VecData** dataList;           // Array of data items for this block.                                                                      
</span><br>
<span class="quotelev1">&gt;   int numItems;                   // Number of data items assigned to the block.
</span><br>
<span class="quotelev1">&gt;   int blockID;                      // Integer identifier for this block.
</span><br>
<span class="quotelev1">&gt;   int sampleID;                   // The sample identifier for this block                             
</span><br>
<span class="quotelev1">&gt;   int globalOffset;               // Index of the first block item relative to the full data set.
</span><br>
<span class="quotelev1">&gt;   char* fileNamePrefix;       // The file name prefix used for saving data to disk.
</span><br>
<span class="quotelev1">&gt;   char commentChar;         // The character denoting input comment lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // methods ..........
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * MemberBlock.h:   Class storing and managing member lists for a given
</span><br>
<span class="quotelev1">&gt;  *                            block of data objects.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; class MemberBlock_base {
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;   virtual ~MemberBlock_base () {};
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; template &lt;class ScoreType&gt;
</span><br>
<span class="quotelev1">&gt; class MemberBlock: public MemberBlock_base {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public:
</span><br>
<span class="quotelev1">&gt;   char* fileNamePrefix;         // The file name prefix for the block save file.
</span><br>
<span class="quotelev1">&gt;   ofstream* saveFile;           // refers to an open file currently being used for accumulating
</span><br>
<span class="quotelev1">&gt;   VecDataBlock* dataBlock; // The block of data items upon which                               
</span><br>
<span class="quotelev1">&gt;   int globalOffset;                // The position of this block with respect to the global ordering.
</span><br>
<span class="quotelev1">&gt;   int numItems;                  // The number of data items assigned to the block.
</span><br>
<span class="quotelev1">&gt;   int sampleLevel;              // The sample level from which                                
</span><br>
<span class="quotelev1">&gt;   ScoreType** memberScoreLList;  // the scores of members associated with
</span><br>
<span class="quotelev1">&gt;                                                    //   each data the item.                             
</span><br>
<span class="quotelev1">&gt;   int** memberIndexLList;    //  for each data item a list of global indices of its members.                               
</span><br>
<span class="quotelev1">&gt;   int* memberSizeList;        //   the number of list members.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   int memberListBufferSize;   // buffer size for storing an individual member list.
</span><br>
<span class="quotelev1">&gt;   int saveCount;                // Keeps track of the number of member lists  saved 
</span><br>
<span class="quotelev1">&gt;   float* tempDistBuffer;      // A temporary buffer for storing distances, used for breaking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //methods....
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
<li><strong>Next message:</strong> <a href="18219.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18217.php">Jeff Squyres: "Re: [OMPI users] Bug Report for MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="18198.php">Victor Pomponiu: "[OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
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
