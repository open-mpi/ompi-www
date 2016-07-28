<?
$subject_val = "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 11:13:00 2008" -->
<!-- isoreceived="20080819151300" -->
<!-- sent="Tue, 19 Aug 2008 11:12:54 -0400" -->
<!-- isosent="20080819151254" -->
<!-- name="Jitendra Kumar" -->
<!-- email="jkumar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays" -->
<!-- id="48AAE2F6.8090008_at_ncsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3505.1219011031.9342.users_at_open-mpi.org" -->
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
<strong>From:</strong> Jitendra Kumar (<em>jkumar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-19 11:12:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6391.php">Robert Kubrick: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Previous message:</strong> <a href="6389.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Maybe in reply to:</strong> <a href="6302.php">Jitendra Kumar: "[OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6391.php">Robert Kubrick: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Reply:</strong> <a href="6391.php">Robert Kubrick: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Reply:</strong> <a href="6399.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
Thanks for your reply. However, I am still not able to resolve the
<br>
issue. I have been looking at one of your old post
<br>
<a href="http://www.open-mpi.org/community/lists/users/2005/08/0123.php">http://www.open-mpi.org/community/lists/users/2005/08/0123.php</a>
<br>
(I have tried to explain the issues below with snippets of codes and on
<br>
screen debugging messages)
<br>
<p>I am trying not to use MPI_BOTTOM because I wish to use the same
<br>
declared data type again and again for sending any struct of that type.
<br>
So I specified the addresses as follows.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;521         MPI_Get_address(&amp;parentPop[0].indiv, &amp;origin);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;522         printf(&quot;origin  %ld \n&quot;, origin);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;523         MPI_Get_address(&amp;parentPop[0].indiv[0].intvar[0], &amp;disp[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;524         printf(&quot;disp 0 %ld \n&quot;, disp[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;525         MPI_Get_address(&amp;parentPop[0].indiv[0].realvar[0],
<br>
&amp;disp[1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;526         printf(&quot;disp 1 %ld\n&quot;, disp[1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;527         MPI_Get_address(&amp;parentPop[0].indiv[0].binvar[0], &amp;disp[2]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;528         printf(&quot;disp 2 %ld\n&quot;, disp[2]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;529         MPI_Get_address(&amp;parentPop[0].indiv[0].gene[0][0],
<br>
&amp;disp[3]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;530         printf(&quot;disp 3 %ld\n&quot;, disp[3]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;531         MPI_Get_address(&amp;parentPop[0].indiv[0].obj[0], &amp;disp[4]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;532         printf(&quot;disp 4 %ld %ld\n&quot;, disp[4],
<br>
&amp;parentPop[0].indiv[0].obj[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;533         MPI_Get_address(&amp;parentPop[0].indiv[0].constr[0], &amp;disp[5]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;534         printf(&quot;disp 5 %ld\n&quot;, disp[5]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;535         MPI_Get_address(&amp;parentPop[0].indiv[0].constr_violation,
<br>
&amp;disp[6]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;536         printf(&quot;disp 6 %ld\n&quot;, disp[6]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;537         MPI_Get_address(&amp;parentPop[0].indiv[0].crowd_dist,
<br>
&amp;disp[7]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;538         printf(&quot;disp 7 %ld\n&quot;, disp[7]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;539         MPI_Get_address(&amp;parentPop[0].indiv[0].rank, &amp;disp[8]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;540         printf(&quot;disp 8 %ld\n&quot;, disp[8]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;541        
<br>
MPI_Get_address(&amp;parentPop[0].indiv[0].strategyParameter[0], &amp;disp[9]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;542         printf(&quot;disp 9 %ld\n&quot;, disp[9]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;543 //      base = disp[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;544         base = origin;
<br>
<p>The values of displacements looks like this:
<br>
3: origin  6088720
<br>
3: disp 0 6089648
<br>
3: disp 1 6089680
<br>
3: disp 2 6089712
<br>
3: disp 3 6089776
<br>
3: disp 4 6089808
<br>
3: disp 5 6089840
<br>
3: disp 6 6090672
<br>
3: disp 7 6090680
<br>
3: disp 8 6090688
<br>
3: disp 9 6089872
<br>
<p>after subtracting origin from the displacement to get relative
<br>
displacements.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;569         for(i=0; i&lt;10; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;570         {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;571             disp[i] -= base;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;572             fprintf(stdout, &quot;Rank %d: disp[%d] %d\n&quot;, rank, i,
<br>
disp[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;573         }
<br>
<p>3: Rank 3: disp[0] 928
<br>
3: Rank 3: disp[1] 960
<br>
3: Rank 3: disp[2] 992
<br>
3: Rank 3: disp[3] 1056
<br>
3: Rank 3: disp[4] 1088
<br>
3: Rank 3: disp[5] 1120
<br>
3: Rank 3: disp[6] 1952
<br>
3: Rank 3: disp[7] 1960
<br>
3: Rank 3: disp[8] 1968
<br>
3: Rank 3: disp[9] 1152
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;574         MPI_Type_create_struct(10, blockcounts, disp, types,
<br>
&amp;Individual);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;575
<br>
&nbsp;&nbsp;&nbsp;&nbsp;576         /* Check that the datatype has correct extent */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;577         MPI_Type_extent(Individual, &amp;extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;578         if(extent != sizeof(individual))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;579         {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;580             printf(&quot;Rank %d: adjusting the extent (%d) of the
<br>
data type %d\n&quot;, rank, extent, sizeof(individual));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;581             MPI_Datatype indold = Individual;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;582             MPI_Type_create_resized(indold, 0,
<br>
sizeof(individual), &amp;Individual);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;583             MPI_Type_free(&amp;indold);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;584         }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;585         MPI_Type_commit(&amp;Individual);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;586         /* MPI derived datatype for indivdual declared */
<br>
<p>After creating the datatype, for test I tried to send  and receive a
<br>
struct to itself and save it to a variable of the same struct type. But
<br>
the value of the variables in the receiving struct remains unchanged.
<br>
Though the MPI_Get_elements shows the correct number of elements in the
<br>
received datatype.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;588         int count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;589         individual recvind;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;590         allocateMemoryInd(&amp;parentPop[0], &amp;recvind);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;591         initializeInd(&amp;parentPop[0], &amp;recvind);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;592
<br>
&nbsp;&nbsp;&nbsp;&nbsp;593         fprintf(stdout, &quot;Rank %d: before receive recvind.nobj %f
<br>
recvind.numreal %f\n&quot;, rank, recvind.obj[0], recvind.realvar[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;594         MPI_Sendrecv(&amp;parentPop[0].indiv[0], 1, Individual,
<br>
rank, rank, &amp;recvind, 1, Individual, rank, rank, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;595         count = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;596         MPI_Get_elements(&amp;status, Individual, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;597         fprintf(stdout, &quot;Rank %d: after receive recvind.nobj %f
<br>
(expected value %f) recvind.numreal %f (expected value %f) count %d\n&quot;,
<br>
rank, recvind.obj[0], parentPo        p[0].indiv[0].obj[0],
<br>
recvind.realvar[0], parentPop[0].indiv[0].realvar[0], count);
<br>
<p>3: Rank 3: adjusting the extent (1048) of the data type 80
<br>
3: Rank 3: before receive recvind.nobj 0.000000 recvind.numreal -26.938538
<br>
3: Rank 3: after receive recvind.nobj 0.000000 (expected value 0.000000)
<br>
recvind.numreal -26.938538 (expected value -126.740479) count 16
<br>
<p>I highly appreciate your help resolving the issue.
<br>
<p>Thanks,
<br>
Jitendra
<br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Sun, 17 Aug 2008 23:30:54 +0200
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Type_struct for structs with dynamic
</span><br>
<span class="quotelev1">&gt; 	arrays
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;B9DD8054-97D1-47BA-A88C-27F0C5529622_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt; 	DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jitendra,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a problem with the addresses you provide to MPI_Type_struct.  
</span><br>
<span class="quotelev1">&gt; For all arrays instead of giving the pointer to the array, you provide  
</span><br>
<span class="quotelev1">&gt; a pointer to the pointer in the individual struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try the following
</span><br>
<span class="quotelev1">&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].intvar[0], &amp;disp[0]);
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].intvar, &amp;disp[0]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note the [0] after the array name. Please do the same to all  
</span><br>
<span class="quotelev1">&gt; arrays and I think the MPI_Type_struct will do the rest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Btw, you dont have to substract the disp[0] from all addresses.  
</span><br>
<span class="quotelev1">&gt; Instead you can use MPI_BOTTOM and all your addresses can be absolute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2008, at 1:07 AM, Jitendra Kumar wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use MPI derived datatype doutines for sending a struct
</span><br>
<span class="quotelev2">&gt;&gt; which contains dynamically allocated arrays. I tried implementing it
</span><br>
<span class="quotelev2">&gt;&gt; using MPI_Type_struct. It doesn't throws any error but messages being
</span><br>
<span class="quotelev2">&gt;&gt; received (of the declared datatype) aren't correct. Some memory
</span><br>
<span class="quotelev2">&gt;&gt; corruption seems to be going on as the value of 'rank' at receive end
</span><br>
<span class="quotelev2">&gt;&gt; are changed to 0 right after the receive . Below are the snippets of  
</span><br>
<span class="quotelev2">&gt;&gt; my
</span><br>
<span class="quotelev2">&gt;&gt; struct and implementation of the derived datatype.
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure where things are going wrong. I would highly appreciate
</span><br>
<span class="quotelev2">&gt;&gt; any pointers or suggestions. Is there any better alternative way  
</span><br>
<span class="quotelev2">&gt;&gt; instead
</span><br>
<span class="quotelev2">&gt;&gt; of MPI_Type_struct considering that  frequent communication of these
</span><br>
<span class="quotelev2">&gt;&gt; structs are needed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jitendra
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The struct looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;     51 typedef struct
</span><br>
<span class="quotelev2">&gt;&gt;     52 {
</span><br>
<span class="quotelev2">&gt;&gt;     53     int *intvar;
</span><br>
<span class="quotelev2">&gt;&gt;     54     double *realvar;
</span><br>
<span class="quotelev2">&gt;&gt;     55     double *binvar;
</span><br>
<span class="quotelev2">&gt;&gt;     56     int **gene;
</span><br>
<span class="quotelev2">&gt;&gt;     57
</span><br>
<span class="quotelev2">&gt;&gt;     58     double *obj;
</span><br>
<span class="quotelev2">&gt;&gt;     59     double *constr;
</span><br>
<span class="quotelev2">&gt;&gt;     60     double constr_violation;
</span><br>
<span class="quotelev2">&gt;&gt;     61     double crowd_dist;
</span><br>
<span class="quotelev2">&gt;&gt;     62     int rank;
</span><br>
<span class="quotelev2">&gt;&gt;     63     double *strategyParameter;
</span><br>
<span class="quotelev2">&gt;&gt;     64 }
</span><br>
<span class="quotelev2">&gt;&gt;     65 individual;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Implementation of the derived datatype:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    483         blockcounts[0] = parentPop[0].numInteger;
</span><br>
<span class="quotelev2">&gt;&gt;    484         blockcounts[1] = parentPop[0].numReal;
</span><br>
<span class="quotelev2">&gt;&gt;    485         blockcounts[2] = parentPop[0].numBinary;
</span><br>
<span class="quotelev2">&gt;&gt;    486         sum = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    487         for(i=0; i&lt;parentPop[0].numBinary; i++)
</span><br>
<span class="quotelev2">&gt;&gt;    488         {
</span><br>
<span class="quotelev2">&gt;&gt;    489             sum = sum + parentPop[0].nbits[i];
</span><br>
<span class="quotelev2">&gt;&gt;    490         }
</span><br>
<span class="quotelev2">&gt;&gt;    491
</span><br>
<span class="quotelev2">&gt;&gt;    492         blockcounts[3] = sum;
</span><br>
<span class="quotelev2">&gt;&gt;    493         blockcounts[4] = parentPop[0].nobj;
</span><br>
<span class="quotelev2">&gt;&gt;    494         blockcounts[5] = parentPop[0].ncon;
</span><br>
<span class="quotelev2">&gt;&gt;    495         blockcounts[6] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    496         blockcounts[7] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    497         blockcounts[8] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    498         blockcounts[9] = parentPop[0].numInteger +
</span><br>
<span class="quotelev2">&gt;&gt; parentPop[0].numReal;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    506         types[0] = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;    507         types[1] = MPI_DOUBLE;
</span><br>
<span class="quotelev2">&gt;&gt;    508         types[2] = MPI_DOUBLE;
</span><br>
<span class="quotelev2">&gt;&gt;    509         types[3] = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;    510         types[4] = MPI_DOUBLE;
</span><br>
<span class="quotelev2">&gt;&gt;    511         types[5] = MPI_DOUBLE;
</span><br>
<span class="quotelev2">&gt;&gt;    512         types[6] = MPI_DOUBLE;
</span><br>
<span class="quotelev2">&gt;&gt;    513         types[7] = MPI_DOUBLE;
</span><br>
<span class="quotelev2">&gt;&gt;    514         types[8] = MPI_INT;
</span><br>
<span class="quotelev2">&gt;&gt;    515         types[9] = MPI_DOUBLE;
</span><br>
<span class="quotelev2">&gt;&gt;    516
</span><br>
<span class="quotelev2">&gt;&gt;    517         MPI_Get_address(&amp;parentPop[0].indiv[0].intvar,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;disp[0]);
</span><br>
<span class="quotelev2">&gt;&gt;    518         printf(&quot;parentpop.indiv0 %ld disp %ld (%ld)\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;parentPop[0].indiv[0], disp, disp[0]);
</span><br>
<span class="quotelev2">&gt;&gt;    519         MPI_Get_address(&amp;parentPop[0].indiv[0].realvar,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;disp[1]);
</span><br>
<span class="quotelev2">&gt;&gt;    520         printf(&quot;disp 1 %ld\n&quot;, disp[1]);
</span><br>
<span class="quotelev2">&gt;&gt;    521         MPI_Get_address(&amp;parentPop[0].indiv[0].binvar,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;disp[2]);
</span><br>
<span class="quotelev2">&gt;&gt;    522         printf(&quot;disp 2 %ld\n&quot;, disp[2]);
</span><br>
<span class="quotelev2">&gt;&gt;    523         MPI_Get_address(&amp;parentPop[0].indiv[0].gene, &amp;disp[3]);
</span><br>
<span class="quotelev2">&gt;&gt;    524         MPI_Get_address(&amp;parentPop[0].indiv[0].obj, &amp;disp[4]);
</span><br>
<span class="quotelev2">&gt;&gt;    525         MPI_Get_address(&amp;parentPop[0].indiv[0].constr,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;disp[5]);
</span><br>
<span class="quotelev2">&gt;&gt;    526          
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].constr_violation,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;disp[6]);
</span><br>
<span class="quotelev2">&gt;&gt;    527         MPI_Get_address(&amp;parentPop[0].indiv[0].crowd_dist,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;disp[7]);
</span><br>
<span class="quotelev2">&gt;&gt;    528         MPI_Get_address(&amp;parentPop[0].indiv[0].rank, &amp;disp[8]);
</span><br>
<span class="quotelev2">&gt;&gt;    529
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].strategyParameter, &amp;disp[9]);
</span><br>
<span class="quotelev2">&gt;&gt;    530         base = disp[0];
</span><br>
<span class="quotelev2">&gt;&gt;    531         for(i=0; i&lt;10; i++)
</span><br>
<span class="quotelev2">&gt;&gt;    532         {
</span><br>
<span class="quotelev2">&gt;&gt;    533             disp[i] -= base;
</span><br>
<span class="quotelev2">&gt;&gt;    534         }
</span><br>
<span class="quotelev2">&gt;&gt;    535
</span><br>
<span class="quotelev2">&gt;&gt;    536         MPI_Type_create_struct(10, blockcounts, disp, types,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;Individual);
</span><br>
<span class="quotelev2">&gt;&gt;    537
</span><br>
<span class="quotelev2">&gt;&gt;    538         /* Check that the datatype has correct extent */
</span><br>
<span class="quotelev2">&gt;&gt;    539         MPI_Type_extent(Individual, &amp;extent);
</span><br>
<span class="quotelev2">&gt;&gt;    540         if(extent != sizeof(individual))
</span><br>
<span class="quotelev2">&gt;&gt;    541         {
</span><br>
<span class="quotelev2">&gt;&gt;    542             MPI_Datatype indold = Individual;
</span><br>
<span class="quotelev2">&gt;&gt;    543             MPI_Type_create_resized(indold, 0,
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(individual), &amp;Individual);
</span><br>
<span class="quotelev2">&gt;&gt;    544             MPI_Type_free(&amp;indold);
</span><br>
<span class="quotelev2">&gt;&gt;    545         }
</span><br>
<span class="quotelev2">&gt;&gt;    546         MPI_Type_commit(&amp;Individual);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6391.php">Robert Kubrick: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Previous message:</strong> <a href="6389.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Maybe in reply to:</strong> <a href="6302.php">Jitendra Kumar: "[OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6391.php">Robert Kubrick: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Reply:</strong> <a href="6391.php">Robert Kubrick: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Reply:</strong> <a href="6399.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
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
