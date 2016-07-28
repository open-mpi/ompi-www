<?
$subject_val = "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  6 14:05:50 2012" -->
<!-- isoreceived="20120606180550" -->
<!-- sent="Wed, 6 Jun 2012 18:05:21 +0000" -->
<!-- isosent="20120606180521" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault." -->
<!-- id="CBF4E88D.D098%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACTdByyUd4+XJTwWEkDfzLPQZ27L1a_Fkss846reXbn4C6Gy8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault.<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-06 14:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19462.php">Ziaul Haque Olive: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Previous message:</strong> <a href="19460.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>In reply to:</strong> <a href="19458.php">Ziaul Haque Olive: "[OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19462.php">Ziaul Haque Olive: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Reply:</strong> <a href="19462.php">Ziaul Haque Olive: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ziaul -
<br>
<p>Your program is erroneous; you can not modify the local communication
<br>
buffer of an MPI_ACCUMULATE call until after the next synchronization call
<br>
(Section 11.3 of MPI 2.2).  In your example, that would be after the
<br>
MPI_FENCE call following the call to MPI_ACCUMULATE.
<br>
<p>Brian
<br>
<p>On 6/6/12 9:44 AM, &quot;Ziaul Haque Olive&quot; &lt;mzh.olive_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am not sure, if my code is correct according to Open MPI(v1.6). the
</span><br>
<span class="quotelev1">&gt; code is given as follows, I am doing MPI one-sided communication inside
</span><br>
<span class="quotelev1">&gt; a function - data_transfer. this function is being called inside a
</span><br>
<span class="quotelev1">&gt;fence epoch. inside data_transfer, I am allocating memory for
</span><br>
<span class="quotelev1">&gt;non-contiguous data, creating derived data type, using this datatype in
</span><br>
<span class="quotelev1">&gt;MPI_Accumulate, and after calling MPI_Accumulate, freeing the indexed
</span><br>
<span class="quotelev1">&gt;data type and also freeing the memory containing indices for indexed
</span><br>
<span class="quotelev1">&gt;data type. is it okay that I am freeing memory for derived datatype
</span><br>
<span class="quotelev1">&gt;before the closing
</span><br>
<span class="quotelev1">&gt;fence?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am getting segmentation fault with this code. if I comment out the
</span><br>
<span class="quotelev1">&gt;MPI_Accumulate call, then no seg-fault occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;void data_transfer(void *data, int
</span><br>
<span class="quotelev1">&gt;*sources_disp, int *targets_disp, int *target, int size, int *blength,
</span><br>
<span class="quotelev1">&gt;int func, MPI_Op op, MPI_Win win, MPI_Datatype dtype){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int i,j, index;
</span><br>
<span class="quotelev1">&gt;    int tmp_target;
</span><br>
<span class="quotelev1">&gt;    int *flag;
</span><br>
<span class="quotelev1">&gt;    int *source_disp;
</span><br>
<span class="quotelev1">&gt;    int *target_disp;
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype source_type, target_type;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    MPI_Alloc_mem( size*sizeof(int), MPI_INFO_NULL, &amp;source_disp);
</span><br>
<span class="quotelev1">&gt;    MPI_Alloc_mem( size*sizeof(int), MPI_INFO_NULL, &amp;target_disp);
</span><br>
<span class="quotelev1">&gt;    MPI_Alloc_mem( size*sizeof(int), MPI_INFO_NULL, &amp;flag );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    memset(flag, 0, size*sizeof(int));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for(i=0;i&lt;size;i++){
</span><br>
<span class="quotelev1">&gt;        if(flag[i]==0){
</span><br>
<span class="quotelev1">&gt;            tmp_target = target[i];
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;            index = 0;
</span><br>
<span class="quotelev1">&gt;            for(j=i; j&lt;size; j++){
</span><br>
<span class="quotelev1">&gt;                if(flag[j]==0 &amp;&amp; tmp_target == target[j] ){
</span><br>
<span class="quotelev1">&gt;                    source_disp[index] = sources_disp[j];
</span><br>
<span class="quotelev1">&gt;                    target_disp[index] = targets_disp[j];
</span><br>
<span class="quotelev1">&gt;                    //printf(&quot;src, target disp %d  %d\n&quot;, j, disp[j]);
</span><br>
<span class="quotelev1">&gt;                    index++;
</span><br>
<span class="quotelev1">&gt;                    flag[j] = 1;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MPI_Type_indexed(index, blength , source_disp, dtype,
</span><br>
<span class="quotelev1">&gt;&amp;source_type);
</span><br>
<span class="quotelev1">&gt;            MPI_Type_commit(&amp;source_type);
</span><br>
<span class="quotelev1">&gt;            MPI_Type_indexed(index, blength , target_disp, dtype,
</span><br>
<span class="quotelev1">&gt;&amp;target_type);
</span><br>
<span class="quotelev1">&gt;            MPI_Type_commit(&amp;target_type);
</span><br>
<span class="quotelev1">&gt;            
</span><br>
<span class="quotelev1">&gt;            
</span><br>
<span class="quotelev1">&gt;            MPI_Accumulate( data, 1, source_type, tmp_target, 0, 1,
</span><br>
<span class="quotelev1">&gt;target_type , op, win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MPI_Type_free(&amp;source_type);
</span><br>
<span class="quotelev1">&gt;            MPI_Type_free(&amp;target_type);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Free_mem(source_disp);
</span><br>
<span class="quotelev1">&gt;    MPI_Free_mem(target_disp);
</span><br>
<span class="quotelev1">&gt;    MPI_Free_mem(flag);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;void main(){
</span><br>
<span class="quotelev1">&gt;    int i;
</span><br>
<span class="quotelev1">&gt;    while(i&lt;N){
</span><br>
<span class="quotelev1">&gt;             MPI_Win_fence(MPI_MODE_NOPRECEDE, queue2_win);
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;             data_transfer();
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;             MPI_Win_fence(MPI_MODE_NOSUCCEED, queue2_win);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;thanks,
</span><br>
<span class="quotelev1">&gt;Ziaul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19462.php">Ziaul Haque Olive: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Previous message:</strong> <a href="19460.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>In reply to:</strong> <a href="19458.php">Ziaul Haque Olive: "[OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19462.php">Ziaul Haque Olive: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Reply:</strong> <a href="19462.php">Ziaul Haque Olive: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
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
