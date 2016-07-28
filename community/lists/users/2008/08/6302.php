<?
$subject_val = "[OMPI users] MPI_Type_struct for structs with dynamic arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 10 19:06:06 2008" -->
<!-- isoreceived="20080810230606" -->
<!-- sent="Sun, 10 Aug 2008 19:07:00 -0400" -->
<!-- isosent="20080810230700" -->
<!-- name="Jitendra Kumar" -->
<!-- email="jkumar_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Type_struct for structs with dynamic arrays" -->
<!-- id="489F7494.9010100_at_ncsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.11.1218297603.25155.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Type_struct for structs with dynamic arrays<br>
<strong>From:</strong> Jitendra Kumar (<em>jkumar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-10 19:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6303.php">Thomas Ropars: "[OMPI users] Problem using VampirTrace"</a>
<li><strong>Previous message:</strong> <a href="6301.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6371.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Reply:</strong> <a href="6371.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Maybe reply:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying to use MPI derived datatype doutines for sending a struct
<br>
which contains dynamically allocated arrays. I tried implementing it
<br>
using MPI_Type_struct. It doesn't throws any error but messages being
<br>
received (of the declared datatype) aren't correct. Some memory
<br>
corruption seems to be going on as the value of 'rank' at receive end
<br>
are changed to 0 right after the receive . Below are the snippets of my
<br>
struct and implementation of the derived datatype.
<br>
I am not sure where things are going wrong. I would highly appreciate
<br>
any pointers or suggestions. Is there any better alternative way instead
<br>
of MPI_Type_struct considering that  frequent communication of these
<br>
structs are needed?
<br>
<p>Thanks,
<br>
Jitendra
<br>
<p>The struct looks like this:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;51 typedef struct
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;52 {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;53     int *intvar;                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;54     double *realvar;             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;55     double *binvar;              
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;56     int **gene;                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;58     double *obj;                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;59     double *constr;                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60     double constr_violation;      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;61     double crowd_dist;          
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;62     int rank;                      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;63     double *strategyParameter;     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64 }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65 individual;
<br>
<p>Implementation of the derived datatype:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;483         blockcounts[0] = parentPop[0].numInteger;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;484         blockcounts[1] = parentPop[0].numReal;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;485         blockcounts[2] = parentPop[0].numBinary;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;486         sum = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;487         for(i=0; i&lt;parentPop[0].numBinary; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;488         {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;489             sum = sum + parentPop[0].nbits[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;490         }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;491
<br>
&nbsp;&nbsp;&nbsp;&nbsp;492         blockcounts[3] = sum;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;493         blockcounts[4] = parentPop[0].nobj;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;494         blockcounts[5] = parentPop[0].ncon;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;495         blockcounts[6] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;496         blockcounts[7] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;497         blockcounts[8] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;498         blockcounts[9] = parentPop[0].numInteger +
<br>
parentPop[0].numReal;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;506         types[0] = MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;507         types[1] = MPI_DOUBLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;508         types[2] = MPI_DOUBLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;509         types[3] = MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;510         types[4] = MPI_DOUBLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;511         types[5] = MPI_DOUBLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;512         types[6] = MPI_DOUBLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;513         types[7] = MPI_DOUBLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;514         types[8] = MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;515         types[9] = MPI_DOUBLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;516
<br>
&nbsp;&nbsp;&nbsp;&nbsp;517         MPI_Get_address(&amp;parentPop[0].indiv[0].intvar, &amp;disp[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;518         printf(&quot;parentpop.indiv0 %ld disp %ld (%ld)\n&quot;,
<br>
&amp;parentPop[0].indiv[0], disp, disp[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;519         MPI_Get_address(&amp;parentPop[0].indiv[0].realvar, &amp;disp[1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;520         printf(&quot;disp 1 %ld\n&quot;, disp[1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;521         MPI_Get_address(&amp;parentPop[0].indiv[0].binvar, &amp;disp[2]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;522         printf(&quot;disp 2 %ld\n&quot;, disp[2]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;523         MPI_Get_address(&amp;parentPop[0].indiv[0].gene, &amp;disp[3]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;524         MPI_Get_address(&amp;parentPop[0].indiv[0].obj, &amp;disp[4]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;525         MPI_Get_address(&amp;parentPop[0].indiv[0].constr, &amp;disp[5]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;526         MPI_Get_address(&amp;parentPop[0].indiv[0].constr_violation,
<br>
&amp;disp[6]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;527         MPI_Get_address(&amp;parentPop[0].indiv[0].crowd_dist,
<br>
&amp;disp[7]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;528         MPI_Get_address(&amp;parentPop[0].indiv[0].rank, &amp;disp[8]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;529        
<br>
MPI_Get_address(&amp;parentPop[0].indiv[0].strategyParameter, &amp;disp[9]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;530         base = disp[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;531         for(i=0; i&lt;10; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;532         {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;533             disp[i] -= base;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;534         }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;535        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;536         MPI_Type_create_struct(10, blockcounts, disp, types,
<br>
&amp;Individual);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;537
<br>
&nbsp;&nbsp;&nbsp;&nbsp;538         /* Check that the datatype has correct extent */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;539         MPI_Type_extent(Individual, &amp;extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;540         if(extent != sizeof(individual))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;541         {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;542             MPI_Datatype indold = Individual;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;543             MPI_Type_create_resized(indold, 0,
<br>
sizeof(individual), &amp;Individual);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;544             MPI_Type_free(&amp;indold);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;545         }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;546         MPI_Type_commit(&amp;Individual);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6303.php">Thomas Ropars: "[OMPI users] Problem using VampirTrace"</a>
<li><strong>Previous message:</strong> <a href="6301.php">Ralph Castain: "Re: [OMPI users] Running Open MPI on Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6371.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Reply:</strong> <a href="6371.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Maybe reply:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
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
