<?
$subject_val = "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 17:31:11 2008" -->
<!-- isoreceived="20080817213111" -->
<!-- sent="Sun, 17 Aug 2008 23:30:54 +0200" -->
<!-- isosent="20080817213054" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays" -->
<!-- id="B9DD8054-97D1-47BA-A88C-27F0C5529622_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="489F7494.9010100_at_ncsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-17 17:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6370.php">Yvan Fournier: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>In reply to:</strong> <a href="6302.php">Jitendra Kumar: "[OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jitendra,
<br>
<p>There is a problem with the addresses you provide to MPI_Type_struct.  
<br>
For all arrays instead of giving the pointer to the array, you provide  
<br>
a pointer to the pointer in the individual struct.
<br>
<p>Try the following
<br>
MPI_Get_address(&amp;parentPop[0].indiv[0].intvar[0], &amp;disp[0]);
<br>
instead of
<br>
MPI_Get_address(&amp;parentPop[0].indiv[0].intvar, &amp;disp[0]);
<br>
<p>Please note the [0] after the array name. Please do the same to all  
<br>
arrays and I think the MPI_Type_struct will do the rest.
<br>
<p>Btw, you dont have to substract the disp[0] from all addresses.  
<br>
Instead you can use MPI_BOTTOM and all your addresses can be absolute.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 11, 2008, at 1:07 AM, Jitendra Kumar wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to use MPI derived datatype doutines for sending a struct
</span><br>
<span class="quotelev1">&gt; which contains dynamically allocated arrays. I tried implementing it
</span><br>
<span class="quotelev1">&gt; using MPI_Type_struct. It doesn't throws any error but messages being
</span><br>
<span class="quotelev1">&gt; received (of the declared datatype) aren't correct. Some memory
</span><br>
<span class="quotelev1">&gt; corruption seems to be going on as the value of 'rank' at receive end
</span><br>
<span class="quotelev1">&gt; are changed to 0 right after the receive . Below are the snippets of  
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev1">&gt; struct and implementation of the derived datatype.
</span><br>
<span class="quotelev1">&gt; I am not sure where things are going wrong. I would highly appreciate
</span><br>
<span class="quotelev1">&gt; any pointers or suggestions. Is there any better alternative way  
</span><br>
<span class="quotelev1">&gt; instead
</span><br>
<span class="quotelev1">&gt; of MPI_Type_struct considering that  frequent communication of these
</span><br>
<span class="quotelev1">&gt; structs are needed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jitendra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The struct looks like this:
</span><br>
<span class="quotelev1">&gt;     51 typedef struct
</span><br>
<span class="quotelev1">&gt;     52 {
</span><br>
<span class="quotelev1">&gt;     53     int *intvar;
</span><br>
<span class="quotelev1">&gt;     54     double *realvar;
</span><br>
<span class="quotelev1">&gt;     55     double *binvar;
</span><br>
<span class="quotelev1">&gt;     56     int **gene;
</span><br>
<span class="quotelev1">&gt;     57
</span><br>
<span class="quotelev1">&gt;     58     double *obj;
</span><br>
<span class="quotelev1">&gt;     59     double *constr;
</span><br>
<span class="quotelev1">&gt;     60     double constr_violation;
</span><br>
<span class="quotelev1">&gt;     61     double crowd_dist;
</span><br>
<span class="quotelev1">&gt;     62     int rank;
</span><br>
<span class="quotelev1">&gt;     63     double *strategyParameter;
</span><br>
<span class="quotelev1">&gt;     64 }
</span><br>
<span class="quotelev1">&gt;     65 individual;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Implementation of the derived datatype:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    483         blockcounts[0] = parentPop[0].numInteger;
</span><br>
<span class="quotelev1">&gt;    484         blockcounts[1] = parentPop[0].numReal;
</span><br>
<span class="quotelev1">&gt;    485         blockcounts[2] = parentPop[0].numBinary;
</span><br>
<span class="quotelev1">&gt;    486         sum = 0;
</span><br>
<span class="quotelev1">&gt;    487         for(i=0; i&lt;parentPop[0].numBinary; i++)
</span><br>
<span class="quotelev1">&gt;    488         {
</span><br>
<span class="quotelev1">&gt;    489             sum = sum + parentPop[0].nbits[i];
</span><br>
<span class="quotelev1">&gt;    490         }
</span><br>
<span class="quotelev1">&gt;    491
</span><br>
<span class="quotelev1">&gt;    492         blockcounts[3] = sum;
</span><br>
<span class="quotelev1">&gt;    493         blockcounts[4] = parentPop[0].nobj;
</span><br>
<span class="quotelev1">&gt;    494         blockcounts[5] = parentPop[0].ncon;
</span><br>
<span class="quotelev1">&gt;    495         blockcounts[6] = 1;
</span><br>
<span class="quotelev1">&gt;    496         blockcounts[7] = 1;
</span><br>
<span class="quotelev1">&gt;    497         blockcounts[8] = 1;
</span><br>
<span class="quotelev1">&gt;    498         blockcounts[9] = parentPop[0].numInteger +
</span><br>
<span class="quotelev1">&gt; parentPop[0].numReal;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    506         types[0] = MPI_INT;
</span><br>
<span class="quotelev1">&gt;    507         types[1] = MPI_DOUBLE;
</span><br>
<span class="quotelev1">&gt;    508         types[2] = MPI_DOUBLE;
</span><br>
<span class="quotelev1">&gt;    509         types[3] = MPI_INT;
</span><br>
<span class="quotelev1">&gt;    510         types[4] = MPI_DOUBLE;
</span><br>
<span class="quotelev1">&gt;    511         types[5] = MPI_DOUBLE;
</span><br>
<span class="quotelev1">&gt;    512         types[6] = MPI_DOUBLE;
</span><br>
<span class="quotelev1">&gt;    513         types[7] = MPI_DOUBLE;
</span><br>
<span class="quotelev1">&gt;    514         types[8] = MPI_INT;
</span><br>
<span class="quotelev1">&gt;    515         types[9] = MPI_DOUBLE;
</span><br>
<span class="quotelev1">&gt;    516
</span><br>
<span class="quotelev1">&gt;    517         MPI_Get_address(&amp;parentPop[0].indiv[0].intvar,  
</span><br>
<span class="quotelev1">&gt; &amp;disp[0]);
</span><br>
<span class="quotelev1">&gt;    518         printf(&quot;parentpop.indiv0 %ld disp %ld (%ld)\n&quot;,
</span><br>
<span class="quotelev1">&gt; &amp;parentPop[0].indiv[0], disp, disp[0]);
</span><br>
<span class="quotelev1">&gt;    519         MPI_Get_address(&amp;parentPop[0].indiv[0].realvar,  
</span><br>
<span class="quotelev1">&gt; &amp;disp[1]);
</span><br>
<span class="quotelev1">&gt;    520         printf(&quot;disp 1 %ld\n&quot;, disp[1]);
</span><br>
<span class="quotelev1">&gt;    521         MPI_Get_address(&amp;parentPop[0].indiv[0].binvar,  
</span><br>
<span class="quotelev1">&gt; &amp;disp[2]);
</span><br>
<span class="quotelev1">&gt;    522         printf(&quot;disp 2 %ld\n&quot;, disp[2]);
</span><br>
<span class="quotelev1">&gt;    523         MPI_Get_address(&amp;parentPop[0].indiv[0].gene, &amp;disp[3]);
</span><br>
<span class="quotelev1">&gt;    524         MPI_Get_address(&amp;parentPop[0].indiv[0].obj, &amp;disp[4]);
</span><br>
<span class="quotelev1">&gt;    525         MPI_Get_address(&amp;parentPop[0].indiv[0].constr,  
</span><br>
<span class="quotelev1">&gt; &amp;disp[5]);
</span><br>
<span class="quotelev1">&gt;    526          
</span><br>
<span class="quotelev1">&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].constr_violation,
</span><br>
<span class="quotelev1">&gt; &amp;disp[6]);
</span><br>
<span class="quotelev1">&gt;    527         MPI_Get_address(&amp;parentPop[0].indiv[0].crowd_dist,
</span><br>
<span class="quotelev1">&gt; &amp;disp[7]);
</span><br>
<span class="quotelev1">&gt;    528         MPI_Get_address(&amp;parentPop[0].indiv[0].rank, &amp;disp[8]);
</span><br>
<span class="quotelev1">&gt;    529
</span><br>
<span class="quotelev1">&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].strategyParameter, &amp;disp[9]);
</span><br>
<span class="quotelev1">&gt;    530         base = disp[0];
</span><br>
<span class="quotelev1">&gt;    531         for(i=0; i&lt;10; i++)
</span><br>
<span class="quotelev1">&gt;    532         {
</span><br>
<span class="quotelev1">&gt;    533             disp[i] -= base;
</span><br>
<span class="quotelev1">&gt;    534         }
</span><br>
<span class="quotelev1">&gt;    535
</span><br>
<span class="quotelev1">&gt;    536         MPI_Type_create_struct(10, blockcounts, disp, types,
</span><br>
<span class="quotelev1">&gt; &amp;Individual);
</span><br>
<span class="quotelev1">&gt;    537
</span><br>
<span class="quotelev1">&gt;    538         /* Check that the datatype has correct extent */
</span><br>
<span class="quotelev1">&gt;    539         MPI_Type_extent(Individual, &amp;extent);
</span><br>
<span class="quotelev1">&gt;    540         if(extent != sizeof(individual))
</span><br>
<span class="quotelev1">&gt;    541         {
</span><br>
<span class="quotelev1">&gt;    542             MPI_Datatype indold = Individual;
</span><br>
<span class="quotelev1">&gt;    543             MPI_Type_create_resized(indold, 0,
</span><br>
<span class="quotelev1">&gt; sizeof(individual), &amp;Individual);
</span><br>
<span class="quotelev1">&gt;    544             MPI_Type_free(&amp;indold);
</span><br>
<span class="quotelev1">&gt;    545         }
</span><br>
<span class="quotelev1">&gt;    546         MPI_Type_commit(&amp;Individual);
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6371/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6370.php">Yvan Fournier: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>In reply to:</strong> <a href="6302.php">Jitendra Kumar: "[OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
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
