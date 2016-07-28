<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 16:56:37 2005" -->
<!-- isoreceived="20050825215637" -->
<!-- sent="Thu, 25 Aug 2005 12:41:14 -0400" -->
<!-- isosent="20050825164114" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] How pass an structure" -->
<!-- id="44090F1E-187F-4A3B-8E4E-34662DA867AE_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050825153849.10978.qmail_at_web50713.mail.yahoo.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-25 11:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0123.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Previous message:</strong> <a href="0121.php">Raul Mosquera: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>In reply to:</strong> <a href="0121.php">Raul Mosquera: "Re: [O-MPI users] How pass an structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0123.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First of all with your approach you're not sending all the structure.  
<br>
You will just send the num_Rocs and the elements, missing the  
<br>
num_Cols member off the structure. The problem come from the fact  
<br>
that lena[0] is set to 1 not 2.
<br>
<p>Another problem (which I don't think it can happens with this  
<br>
particular structure) is that we don't know how the compiler will  
<br>
create the structure in memory. For this particular structure, as you  
<br>
just use ints I don't think that will be a problem as the alignment  
<br>
will be correct and no padding should be inserted in order to have  
<br>
all elements correctly aligned. Anyway, I'll give you a general  
<br>
example who should work in all cases.
<br>
<p>There is another bug in your code. When you create the  
<br>
MPI_Type_struct you set the count to 1. This count is not the number  
<br>
of data you plan to send, but the number of elements you describe in  
<br>
the arrays used to create the type_struct.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: Here is a piece of code that do what you expect ... I think ...
<br>
<p>struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_Rows;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_Cols;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int element[NELEM];
<br>
} send_pack;
<br>
<p>send_pack sp[2];
<br>
MPI_Datatype typa[3], temp_type, final_type;
<br>
MPI_Aint loca[3], origin, extent;
<br>
int lena[3];
<br>
<p>/* Get the pointer to the sp structure */
<br>
MPI_Address( &amp;(sp[0]), &amp;origin );
<br>
<p>/* Fill-up the arrays used to create the MPI_Struct */
<br>
type[0] = MPI_INT;
<br>
lena[0] = 1;
<br>
MPI_Address( &amp;(sp[0].num_Rows), &amp;(loca[0]) );
<br>
<p>type[1] = MPI_INT;
<br>
lena[1] = 1;
<br>
MPI_Address( &amp;(sp[0].num_Cols), &amp;(loca[1]) );
<br>
<p>type[2] = MPI_INT;
<br>
lena[2] = 1;
<br>
MPI_Address( &amp;(sp[0].elements[0]), &amp;(loca[2]) );
<br>
<p>/* Now compute the correct displacement for the elements. Everything  
<br>
depend on the origin */
<br>
loca[0] -= origin;
<br>
loca[1] -= origin;
<br>
loca[2] -= origin;
<br>
<p>MPI_Type_struct( 3, lena, loca, typa, temp_type );
<br>
<p>/* There is just one more thing left. Setting the correct bound for  
<br>
one element of the structure
<br>
&nbsp;&nbsp;* This can be achieved using different ways. The one I prefer is  
<br>
not MPI 1 specific but MPI-2
<br>
&nbsp;&nbsp;* but it's a lot more cleaner and user &quot;friendly&quot; (and I think it  
<br>
make the code a lot more readable).
<br>
&nbsp;&nbsp;* If you want to be MPI-1 specific, you should add one more element  
<br>
to you array (with the type MPI_UB)
<br>
&nbsp;&nbsp;* and the same displacement as in the following code.
<br>
&nbsp;&nbsp;*/
<br>
MPI_Address( &amp;(sp[1]), &amp;extent );
<br>
extent -= origin;
<br>
MPI_Type_create_resized( temp_type, (MPI_Aint)0, extent, &amp;final_type );
<br>
<p>/* A little bit of cleanup ... */
<br>
MPI_Type_free( &amp;temp_type );
<br>
<p>/* Here we are. The datatype is correctly set now we just have to  
<br>
commit it in order to be allowed
<br>
&nbsp;&nbsp;* to use it in MPI communications.
<br>
&nbsp;&nbsp;*/
<br>
MPI_Type_commit( &amp;final_type );
<br>
<p>if( my_rank == sender ) {
<br>
&nbsp;&nbsp;&nbsp;MPI_Send( &amp;(sp[0]), 1, final_type, receiver, tag, MPI_COMM_WORLD );
<br>
} else idd( my_rank == receiver ) {
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv( &amp;sp[0]), 1, final_type, sender, tag, MPI_COMM_WORLD,  
<br>
MPI_STATUS_IGNORE );
<br>
} else {
<br>
&nbsp;&nbsp;&nbsp;/* blah blah */
<br>
}
<br>
<p>On Aug 25, 2005, at 11:38 AM, Raul Mosquera wrote:
<br>
<p><span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to pass an structure which is defined like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define NELEM 6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  struct{
</span><br>
<span class="quotelev1">&gt;    int num_Rows;
</span><br>
<span class="quotelev1">&gt;    int num_Cols;
</span><br>
<span class="quotelev1">&gt;    int element[NELEM];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    }send_pack;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //num_Rows and num_Cols identify the matrix being passed in the  
</span><br>
<span class="quotelev1">&gt; array element.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // Variable declaration
</span><br>
<span class="quotelev1">&gt;    int rank,size,tag=1,source=0,dest;
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int lena[2] ; // This is for the length of the elements holding
</span><br>
<span class="quotelev1">&gt;    MPI_Aint  loca[2], extent; //localization
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype typa[2];
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype MY_TYPE;
</span><br>
<span class="quotelev1">&gt;    //MPI_Type_extent(MPI_INT,&amp;extent);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    typa[0]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;    typa[1]=MPI_INT;
</span><br>
<span class="quotelev1">&gt;    lena[0]=1;
</span><br>
<span class="quotelev1">&gt;    lena[1]=NELEM;
</span><br>
<span class="quotelev1">&gt;    loca[0]=0;
</span><br>
<span class="quotelev1">&gt;    loca[1]= 2 * extent;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The structure is being created like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Type_struct(1,lena,loca,typa,&amp;MY_TYPE);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_commit(&amp;MY_TYPE); //creates the structure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When sending ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Send(&amp;send_pack,1,MY_TYPE,1,tag,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When Receiving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;send_pack,1,MY_TYPE,0,tag,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program sends the message but it shows errors on the other side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My guess is that the parameters in the MPI_Send are not declare in  
</span><br>
<span class="quotelev1">&gt; the proper way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you guys help me understandig what I'm doing wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam? Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0123.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Previous message:</strong> <a href="0121.php">Raul Mosquera: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>In reply to:</strong> <a href="0121.php">Raul Mosquera: "Re: [O-MPI users] How pass an structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0123.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
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
