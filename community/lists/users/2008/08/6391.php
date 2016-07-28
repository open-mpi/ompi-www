<?
$subject_val = "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 14:29:01 2008" -->
<!-- isoreceived="20080819182901" -->
<!-- sent="Tue, 19 Aug 2008 14:27:42 -0400" -->
<!-- isosent="20080819182742" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays" -->
<!-- id="640E7AB3-E828-4F6B-A6F9-813C3DF2BE31_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48AAE2F6.8090008_at_ncsu.edu" -->
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
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-19 14:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6392.php">Gabriele Fatigati: "[OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>In reply to:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6399.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 19, 2008, at 11:12 AM, Jitendra Kumar wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; Thanks for your reply. However, I am still not able to resolve the
</span><br>
<span class="quotelev1">&gt; issue. I have been looking at one of your old post
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2005/08/0123.php">http://www.open-mpi.org/community/lists/users/2005/08/0123.php</a>
</span><br>
<span class="quotelev1">&gt; (I have tried to explain the issues below with snippets of codes  
</span><br>
<span class="quotelev1">&gt; and on
</span><br>
<span class="quotelev1">&gt; screen debugging messages)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying not to use MPI_BOTTOM because I wish to use the same
</span><br>
<span class="quotelev1">&gt; declared data type again and again for sending any struct of that  
</span><br>
<span class="quotelev1">&gt; type.
</span><br>
<span class="quotelev1">&gt; So I specified the addresses as follows.
</span><br>
<span class="quotelev1">&gt;     521         MPI_Get_address(&amp;parentPop[0].indiv, &amp;origin);
</span><br>
<span class="quotelev1">&gt;     522         printf(&quot;origin  %ld \n&quot;, origin);
</span><br>
<span class="quotelev1">&gt;     523         MPI_Get_address(&amp;parentPop[0].indiv[0].intvar[0],  
</span><br>
<span class="quotelev1">&gt; &amp;disp[0]);
</span><br>
<span class="quotelev1">&gt;     524         printf(&quot;disp 0 %ld \n&quot;, disp[0]);
</span><br>
<span class="quotelev1">&gt;     525         MPI_Get_address(&amp;parentPop[0].indiv[0].realvar[0],
</span><br>
<span class="quotelev1">&gt; &amp;disp[1]);
</span><br>
<span class="quotelev1">&gt;     526         printf(&quot;disp 1 %ld\n&quot;, disp[1]);
</span><br>
<span class="quotelev1">&gt;     527         MPI_Get_address(&amp;parentPop[0].indiv[0].binvar[0],  
</span><br>
<span class="quotelev1">&gt; &amp;disp[2]);
</span><br>
<span class="quotelev1">&gt;     528         printf(&quot;disp 2 %ld\n&quot;, disp[2]);
</span><br>
<span class="quotelev1">&gt;     529         MPI_Get_address(&amp;parentPop[0].indiv[0].gene[0][0],
</span><br>
<span class="quotelev1">&gt; &amp;disp[3]);
</span><br>
<span class="quotelev1">&gt;     530         printf(&quot;disp 3 %ld\n&quot;, disp[3]);
</span><br>
<span class="quotelev1">&gt;     531         MPI_Get_address(&amp;parentPop[0].indiv[0].obj[0], &amp;disp 
</span><br>
<span class="quotelev1">&gt; [4]);
</span><br>
<span class="quotelev1">&gt;     532         printf(&quot;disp 4 %ld %ld\n&quot;, disp[4],
</span><br>
<span class="quotelev1">&gt; &amp;parentPop[0].indiv[0].obj[0]);
</span><br>
<span class="quotelev1">&gt;     533         MPI_Get_address(&amp;parentPop[0].indiv[0].constr[0],  
</span><br>
<span class="quotelev1">&gt; &amp;disp[5]);
</span><br>
<span class="quotelev1">&gt;     534         printf(&quot;disp 5 %ld\n&quot;, disp[5]);
</span><br>
<span class="quotelev1">&gt;     535         MPI_Get_address(&amp;parentPop[0].indiv 
</span><br>
<span class="quotelev1">&gt; [0].constr_violation,
</span><br>
<span class="quotelev1">&gt; &amp;disp[6]);
</span><br>
<span class="quotelev1">&gt;     536         printf(&quot;disp 6 %ld\n&quot;, disp[6]);
</span><br>
<span class="quotelev1">&gt;     537         MPI_Get_address(&amp;parentPop[0].indiv[0].crowd_dist,
</span><br>
<span class="quotelev1">&gt; &amp;disp[7]);
</span><br>
<span class="quotelev1">&gt;     538         printf(&quot;disp 7 %ld\n&quot;, disp[7]);
</span><br>
<span class="quotelev1">&gt;     539         MPI_Get_address(&amp;parentPop[0].indiv[0].rank, &amp;disp 
</span><br>
<span class="quotelev1">&gt; [8]);
</span><br>
<span class="quotelev1">&gt;     540         printf(&quot;disp 8 %ld\n&quot;, disp[8]);
</span><br>
<span class="quotelev1">&gt;     541
</span><br>
<span class="quotelev1">&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].strategyParameter[0], &amp;disp 
</span><br>
<span class="quotelev1">&gt; [9]);
</span><br>
<span class="quotelev1">&gt;     542         printf(&quot;disp 9 %ld\n&quot;, disp[9]);
</span><br>
<span class="quotelev1">&gt;     543 //      base = disp[0];
</span><br>
<span class="quotelev1">&gt;     544         base = origin;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The values of displacements looks like this:
</span><br>
<span class="quotelev1">&gt; 3: origin  6088720
</span><br>
<span class="quotelev1">&gt; 3: disp 0 6089648
</span><br>
<span class="quotelev1">&gt; 3: disp 1 6089680
</span><br>
<span class="quotelev1">&gt; 3: disp 2 6089712
</span><br>
<span class="quotelev1">&gt; 3: disp 3 6089776
</span><br>
<span class="quotelev1">&gt; 3: disp 4 6089808
</span><br>
<span class="quotelev1">&gt; 3: disp 5 6089840
</span><br>
<span class="quotelev1">&gt; 3: disp 6 6090672
</span><br>
<span class="quotelev1">&gt; 3: disp 7 6090680
</span><br>
<span class="quotelev1">&gt; 3: disp 8 6090688
</span><br>
<span class="quotelev1">&gt; 3: disp 9 6089872
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after subtracting origin from the displacement to get relative
</span><br>
<span class="quotelev1">&gt; displacements.
</span><br>
<span class="quotelev1">&gt;     569         for(i=0; i&lt;10; i++)
</span><br>
<span class="quotelev1">&gt;     570         {
</span><br>
<span class="quotelev1">&gt;     571             disp[i] -= base;
</span><br>
<span class="quotelev1">&gt;     572             fprintf(stdout, &quot;Rank %d: disp[%d] %d\n&quot;, rank, i,
</span><br>
<span class="quotelev1">&gt; disp[i]);
</span><br>
<span class="quotelev1">&gt;     573         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[0] 928
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[1] 960
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[2] 992
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[3] 1056
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[4] 1088
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[5] 1120
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[6] 1952
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[7] 1960
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[8] 1968
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: disp[9] 1152
</span><br>
<p><p>Jitendra,
<br>
<p>1) The memory in the structure you're using to declare the derived  
<br>
data type must be contiguous. In your struct declaration you have a  
<br>
pointer to a dynamically allocated area, so the number you're getting  
<br>
from MPI_Get_address is the location of the pointer itself, not the  
<br>
dynamically allocated memory which I think you want to use. That  
<br>
memory is not part of the structure and MPI_Type_create_struct can't  
<br>
create the definition you're expecting.
<br>
<p>2) disp[0] must be 0. I see you subtract base from disp[0] but for  
<br>
some reason the output says disp[0] = 928?
<br>
<p>3) Although it shouldn't change the value returned by  
<br>
MPI_Get_address, try to remove the indexing of your pointers, just to  
<br>
isolate the problem for now:
<br>
<p>MPI_Get_address(parentPop[0].indiv[0].intvar, &amp;disp[0]);
<br>
MPI_Get_address(parentPop[0].indiv[0].realvar, &amp;disp[1]);
<br>
...
<br>
<p>4) I would first try to send the message to a different process to  
<br>
make sure the derived type is correct (the 'canonical' use for  
<br>
MPI_Send + derived data type), then try with the same process through  
<br>
MPI_Sendrecv as per your example.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     574         MPI_Type_create_struct(10, blockcounts, disp, types,
</span><br>
<span class="quotelev1">&gt; &amp;Individual);
</span><br>
<span class="quotelev1">&gt;     575
</span><br>
<span class="quotelev1">&gt;     576         /* Check that the datatype has correct extent */
</span><br>
<span class="quotelev1">&gt;     577         MPI_Type_extent(Individual, &amp;extent);
</span><br>
<span class="quotelev1">&gt;     578         if(extent != sizeof(individual))
</span><br>
<span class="quotelev1">&gt;     579         {
</span><br>
<span class="quotelev1">&gt;     580             printf(&quot;Rank %d: adjusting the extent (%d) of the
</span><br>
<span class="quotelev1">&gt; data type %d\n&quot;, rank, extent, sizeof(individual));
</span><br>
<span class="quotelev1">&gt;     581             MPI_Datatype indold = Individual;
</span><br>
<span class="quotelev1">&gt;     582             MPI_Type_create_resized(indold, 0,
</span><br>
<span class="quotelev1">&gt; sizeof(individual), &amp;Individual);
</span><br>
<span class="quotelev1">&gt;     583             MPI_Type_free(&amp;indold);
</span><br>
<span class="quotelev1">&gt;     584         }
</span><br>
<span class="quotelev1">&gt;     585         MPI_Type_commit(&amp;Individual);
</span><br>
<span class="quotelev1">&gt;     586         /* MPI derived datatype for indivdual declared */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After creating the datatype, for test I tried to send  and receive a
</span><br>
<span class="quotelev1">&gt; struct to itself and save it to a variable of the same struct type.  
</span><br>
<span class="quotelev1">&gt; But
</span><br>
<span class="quotelev1">&gt; the value of the variables in the receiving struct remains unchanged.
</span><br>
<p><p><p><p><span class="quotelev1">&gt; Though the MPI_Get_elements shows the correct number of elements in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; received datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     588         int count;
</span><br>
<span class="quotelev1">&gt;     589         individual recvind;
</span><br>
<span class="quotelev1">&gt;     590         allocateMemoryInd(&amp;parentPop[0], &amp;recvind);
</span><br>
<span class="quotelev1">&gt;     591         initializeInd(&amp;parentPop[0], &amp;recvind);
</span><br>
<span class="quotelev1">&gt;     592
</span><br>
<span class="quotelev1">&gt;     593         fprintf(stdout, &quot;Rank %d: before receive  
</span><br>
<span class="quotelev1">&gt; recvind.nobj %f
</span><br>
<span class="quotelev1">&gt; recvind.numreal %f\n&quot;, rank, recvind.obj[0], recvind.realvar[0]);
</span><br>
<span class="quotelev1">&gt;     594         MPI_Sendrecv(&amp;parentPop[0].indiv[0], 1, Individual,
</span><br>
<span class="quotelev1">&gt; rank, rank, &amp;recvind, 1, Individual, rank, rank, MPI_COMM_WORLD,  
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev1">&gt;     595         count = 0;
</span><br>
<span class="quotelev1">&gt;     596         MPI_Get_elements(&amp;status, Individual, &amp;count);
</span><br>
<span class="quotelev1">&gt;     597         fprintf(stdout, &quot;Rank %d: after receive  
</span><br>
<span class="quotelev1">&gt; recvind.nobj %f
</span><br>
<span class="quotelev1">&gt; (expected value %f) recvind.numreal %f (expected value %f) count %d 
</span><br>
<span class="quotelev1">&gt; \n&quot;,
</span><br>
<span class="quotelev1">&gt; rank, recvind.obj[0], parentPo        p[0].indiv[0].obj[0],
</span><br>
<span class="quotelev1">&gt; recvind.realvar[0], parentPop[0].indiv[0].realvar[0], count);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: adjusting the extent (1048) of the data type 80
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: before receive recvind.nobj 0.000000 recvind.numreal  
</span><br>
<span class="quotelev1">&gt; -26.938538
</span><br>
<span class="quotelev1">&gt; 3: Rank 3: after receive recvind.nobj 0.000000 (expected value  
</span><br>
<span class="quotelev1">&gt; 0.000000)
</span><br>
<span class="quotelev1">&gt; recvind.numreal -26.938538 (expected value -126.740479) count 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I highly appreciate your help resolving the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jitendra
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sun, 17 Aug 2008 23:30:54 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_Type_struct for structs with dynamic
</span><br>
<span class="quotelev2">&gt;&gt; 	arrays
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;B9DD8054-97D1-47BA-A88C-27F0C5529622_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; 	DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jitendra,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a problem with the addresses you provide to MPI_Type_struct.
</span><br>
<span class="quotelev2">&gt;&gt; For all arrays instead of giving the pointer to the array, you  
</span><br>
<span class="quotelev2">&gt;&gt; provide
</span><br>
<span class="quotelev2">&gt;&gt; a pointer to the pointer in the individual struct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try the following
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].intvar[0], &amp;disp[0]);
</span><br>
<span class="quotelev2">&gt;&gt; instead of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].intvar, &amp;disp[0]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please note the [0] after the array name. Please do the same to all
</span><br>
<span class="quotelev2">&gt;&gt; arrays and I think the MPI_Type_struct will do the rest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Btw, you dont have to substract the disp[0] from all addresses.
</span><br>
<span class="quotelev2">&gt;&gt; Instead you can use MPI_BOTTOM and all your addresses can be  
</span><br>
<span class="quotelev2">&gt;&gt; absolute.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 11, 2008, at 1:07 AM, Jitendra Kumar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to use MPI derived datatype doutines for sending a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which contains dynamically allocated arrays. I tried implementing it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using MPI_Type_struct. It doesn't throws any error but messages  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received (of the declared datatype) aren't correct. Some memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corruption seems to be going on as the value of 'rank' at receive  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are changed to 0 right after the receive . Below are the snippets of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; struct and implementation of the derived datatype.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure where things are going wrong. I would highly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any pointers or suggestions. Is there any better alternative way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of MPI_Type_struct considering that  frequent communication of these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; structs are needed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jitendra
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The struct looks like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     51 typedef struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     52 {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     53     int *intvar;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     54     double *realvar;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     55     double *binvar;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     56     int **gene;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     57
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     58     double *obj;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     59     double *constr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     60     double constr_violation;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     61     double crowd_dist;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     62     int rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     63     double *strategyParameter;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     64 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     65 individual;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Implementation of the derived datatype:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    483         blockcounts[0] = parentPop[0].numInteger;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    484         blockcounts[1] = parentPop[0].numReal;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    485         blockcounts[2] = parentPop[0].numBinary;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    486         sum = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    487         for(i=0; i&lt;parentPop[0].numBinary; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    488         {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    489             sum = sum + parentPop[0].nbits[i];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    490         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    491
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    492         blockcounts[3] = sum;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    493         blockcounts[4] = parentPop[0].nobj;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    494         blockcounts[5] = parentPop[0].ncon;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    495         blockcounts[6] = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    496         blockcounts[7] = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    497         blockcounts[8] = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    498         blockcounts[9] = parentPop[0].numInteger +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parentPop[0].numReal;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    506         types[0] = MPI_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    507         types[1] = MPI_DOUBLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    508         types[2] = MPI_DOUBLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    509         types[3] = MPI_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    510         types[4] = MPI_DOUBLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    511         types[5] = MPI_DOUBLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    512         types[6] = MPI_DOUBLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    513         types[7] = MPI_DOUBLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    514         types[8] = MPI_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    515         types[9] = MPI_DOUBLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    516
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    517         MPI_Get_address(&amp;parentPop[0].indiv[0].intvar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;disp[0]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    518         printf(&quot;parentpop.indiv0 %ld disp %ld (%ld)\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;parentPop[0].indiv[0], disp, disp[0]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    519         MPI_Get_address(&amp;parentPop[0].indiv[0].realvar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;disp[1]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    520         printf(&quot;disp 1 %ld\n&quot;, disp[1]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    521         MPI_Get_address(&amp;parentPop[0].indiv[0].binvar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;disp[2]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    522         printf(&quot;disp 2 %ld\n&quot;, disp[2]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    523         MPI_Get_address(&amp;parentPop[0].indiv[0].gene, &amp;disp 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    524         MPI_Get_address(&amp;parentPop[0].indiv[0].obj, &amp;disp 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    525         MPI_Get_address(&amp;parentPop[0].indiv[0].constr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;disp[5]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    526
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].constr_violation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;disp[6]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    527         MPI_Get_address(&amp;parentPop[0].indiv[0].crowd_dist,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;disp[7]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    528         MPI_Get_address(&amp;parentPop[0].indiv[0].rank, &amp;disp 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [8]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    529
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Get_address(&amp;parentPop[0].indiv[0].strategyParameter, &amp;disp[9]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    530         base = disp[0];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    531         for(i=0; i&lt;10; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    532         {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    533             disp[i] -= base;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    534         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    535
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    536         MPI_Type_create_struct(10, blockcounts, disp, types,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;Individual);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    537
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    538         /* Check that the datatype has correct extent */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    539         MPI_Type_extent(Individual, &amp;extent);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    540         if(extent != sizeof(individual))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    541         {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    542             MPI_Datatype indold = Individual;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    543             MPI_Type_create_resized(indold, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sizeof(individual), &amp;Individual);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    544             MPI_Type_free(&amp;indold);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    545         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    546         MPI_Type_commit(&amp;Individual);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6392.php">Gabriele Fatigati: "[OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>In reply to:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6399.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
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
