<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 12:36:09 2007" -->
<!-- isoreceived="20070710163609" -->
<!-- sent="Tue, 10 Jul 2007 16:36:01 +0000" -->
<!-- isosent="20070710163601" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DataTypes with &amp;quot;holes&amp;quot; for writing files" -->
<!-- id="9b0da5ce0707100936l6709dde1u7c89264ca3432eb5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1FE84985-4AFD-45A6-B6F0-F70180CC23B4_at_cs.utk.edu" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 12:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3619.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>In reply to:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3676.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3676.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3709.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think there is still some problem.
<br>
I create different datatypes by resizing MPI_SHORT with
<br>
different negative lower bounds (depending on the rank)
<br>
and the same extent (only depending on the number of processes).
<br>
<p>However, I get an error as soon as  MPI_File_set_view is called with my new
<br>
datatype:
<br>
<p>Error: Unsupported datatype passed to ADIOI_Count_contiguous_blocks
<br>
[aim-nano_02:22229] MPI_ABORT invoked on rank 0 in communicator
<br>
MPI_COMM_WORLD with errorcode 1
<br>
<p>The same error occurs, if i set the lower bounds to 0.
<br>
Is it perhaps not possible to use resized datatypes in MPI_File_set_view?
<br>
<p><p>Here's my code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>//-----------------------------------------------------------------------------
<br>
// main
<br>
//
<br>
//
<br>
int main(int iArgC, char *apArgV[]) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int iNumProcs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iID;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;iArgC, &amp;apArgV);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;iNumProcs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;iID);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// get the size of a MPI_SHORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint lbs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint exts;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_extent(MPI_SHORT, &amp;lbs, &amp;exts);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// resize the MPI_SHORT datatype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// same extent but differennt position of the MPI_SHORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype dtWHoles;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint lb  = -iID * exts;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint ext =  iNumProcs * exts;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_resized(MPI_SHORT, lb, ext, &amp;dtWHoles);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// commit the datatype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;dtWHoles);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// open the file for writing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File fh;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(MPI_COMM_WORLD, &quot;testwrite.dat&quot;, MPI_MODE_WRONLY |
<br>
MPI_MODE_CREATE, MPI_INFO_NULL, &amp;fh);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// set the file view
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_set_view(fh, 0, MPI_SHORT, dtWHoles, &quot;native&quot;, MPI_INFO_NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// here we would do some writing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// close the file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// clean  up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;dtWHoles);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p>On 7/10/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_LB and MPI_UB is what you're looking for. Or better, for MPI-2
</span><br>
<span class="quotelev1">&gt; compliant libraries such as Open MPI and MPICH2, you can use
</span><br>
<span class="quotelev1">&gt; MPI_Type_create_resized. This will allow you to create the gap at the
</span><br>
<span class="quotelev1">&gt; beginning and/or the end of a data-type description.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2007, at 10:53 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; hi
</span><br>
<span class="quotelev2">&gt; &gt; I want to create datatypes of the form
</span><br>
<span class="quotelev2">&gt; &gt; XX000000...
</span><br>
<span class="quotelev2">&gt; &gt; 00XX0000...
</span><br>
<span class="quotelev2">&gt; &gt; 0000XX00...
</span><br>
<span class="quotelev2">&gt; &gt; etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried MPI_Type_indexed(1, ais, ait, MPI_SHORT, &amp;dtNewType)
</span><br>
<span class="quotelev2">&gt; &gt; where ais= {2} and ait = {2} but this only gives me a datatype of
</span><br>
<span class="quotelev2">&gt; &gt; the form
</span><br>
<span class="quotelev2">&gt; &gt; 00XX, i.e. no holes at the end.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess MPI_Type_vector won't work, because there seems to be
</span><br>
<span class="quotelev2">&gt; &gt; no way to create holes at the beginning of the datatype
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need these datatypes to let each process write its data into the
</span><br>
<span class="quotelev2">&gt; &gt; file
</span><br>
<span class="quotelev2">&gt; &gt; in the following way:
</span><br>
<span class="quotelev2">&gt; &gt; XXYYZZXXYYZZXXYYZZ....
</span><br>
<span class="quotelev2">&gt; &gt; (X is data from proc 0, Y is data from proc 1,  Z is data from proc 2)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My intended approach was to define  datatypes of the form XX0000,
</span><br>
<span class="quotelev2">&gt; &gt; 00XX00, 0000XX
</span><br>
<span class="quotelev2">&gt; &gt; for the respective processors, and then  call  MPI_File_set_view
</span><br>
<span class="quotelev2">&gt; &gt; with displacement 0 and the respective datatypes fo the &quot;filetype&quot;
</span><br>
<span class="quotelev2">&gt; &gt; parameter,
</span><br>
<span class="quotelev2">&gt; &gt; and finally let each  processor write its stuff to file
</span><br>
<span class="quotelev2">&gt; &gt; sequentially using MPI_File_write.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, my plan failed since i am unable to create datatypes with
</span><br>
<span class="quotelev2">&gt; &gt; holes in front and at the end.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What function should i use to create the desired datatypes?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank You
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Jody
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3619.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>In reply to:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3676.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3676.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3709.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
