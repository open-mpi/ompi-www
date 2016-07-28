<?
$subject_val = "[OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  6 12:44:59 2012" -->
<!-- isoreceived="20120606164459" -->
<!-- sent="Wed, 6 Jun 2012 11:44:54 -0500" -->
<!-- isosent="20120606164454" -->
<!-- name="Ziaul Haque Olive" -->
<!-- email="mzh.olive_at_[hidden]" -->
<!-- subject="[OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault." -->
<!-- id="CACTdByyUd4+XJTwWEkDfzLPQZ27L1a_Fkss846reXbn4C6Gy8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault.<br>
<strong>From:</strong> Ziaul Haque Olive (<em>mzh.olive_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-06 12:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19459.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19457.php">TERRY DONTJE: "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19461.php">Barrett, Brian W: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Reply:</strong> <a href="19461.php">Barrett, Brian W: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am not sure, if my code is correct according to Open MPI(v1.6). the code
<br>
is given as follows, I am doing MPI one-sided communication inside a
<br>
function - data_transfer. this function is being called inside a fence
<br>
epoch. inside data_transfer, I am allocating memory for non-contiguous
<br>
data, creating derived data type, using this datatype in MPI_Accumulate,
<br>
and after calling MPI_Accumulate, freeing the indexed data type and also
<br>
freeing the memory containing indices for indexed data type. is it okay
<br>
that I am freeing memory for derived datatype before the closing fence?
<br>
<p>I am getting segmentation fault with this code. if I comment out the
<br>
MPI_Accumulate call, then no seg-fault occurs.
<br>
<p><p>void data_transfer(void *data, int *sources_disp, int *targets_disp, int
<br>
*target, int size, int *blength, int func, MPI_Op op, MPI_Win win,
<br>
MPI_Datatype dtype){
<br>
<p>int i,j, index;
<br>
&nbsp;int tmp_target;
<br>
int *flag;
<br>
int *source_disp;
<br>
&nbsp;int *target_disp;
<br>
MPI_Datatype source_type, target_type;
<br>
&nbsp;&nbsp;MPI_Alloc_mem( size*sizeof(int), MPI_INFO_NULL, &amp;source_disp);
<br>
MPI_Alloc_mem( size*sizeof(int), MPI_INFO_NULL, &amp;target_disp);
<br>
&nbsp;MPI_Alloc_mem( size*sizeof(int), MPI_INFO_NULL, &amp;flag );
<br>
<p>memset(flag, 0, size*sizeof(int));
<br>
<p>for(i=0;i&lt;size;i++){
<br>
if(flag[i]==0){
<br>
tmp_target = target[i];
<br>
&nbsp;index = 0;
<br>
for(j=i; j&lt;size; j++){
<br>
&nbsp;if(flag[j]==0 &amp;&amp; tmp_target == target[j] ){
<br>
source_disp[index] = sources_disp[j];
<br>
&nbsp;target_disp[index] = targets_disp[j];
<br>
//printf(&quot;src, target disp %d  %d\n&quot;, j, disp[j]);
<br>
&nbsp;index++;
<br>
flag[j] = 1;
<br>
&nbsp;}
<br>
&nbsp;}
<br>
<p>MPI_Type_indexed(index, blength , source_disp, dtype, &amp;source_type);
<br>
&nbsp;MPI_Type_commit(&amp;source_type);
<br>
MPI_Type_indexed(index, blength , target_disp, dtype, &amp;target_type);
<br>
&nbsp;MPI_Type_commit(&amp;target_type);
<br>
&nbsp;&nbsp;MPI_Accumulate( data, 1, source_type, tmp_target, 0, 1, target_type , op,
<br>
win);
<br>
<p>MPI_Type_free(&amp;source_type);
<br>
&nbsp;MPI_Type_free(&amp;target_type);
<br>
}
<br>
}
<br>
&nbsp;MPI_Free_mem(source_disp);
<br>
MPI_Free_mem(target_disp);
<br>
MPI_Free_mem(flag);
<br>
<p>}
<br>
<p>void main(){
<br>
int i;
<br>
while(i&lt;N){
<br>
&nbsp;MPI_Win_fence(MPI_MODE_NOPRECEDE, queue2_win);
<br>
<p>&nbsp;data_transfer();
<br>
<p>&nbsp;MPI_Win_fence(MPI_MODE_NOSUCCEED, queue2_win);
<br>
}
<br>
}
<br>
<p>thanks,
<br>
Ziaul
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19458/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19459.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19457.php">TERRY DONTJE: "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19461.php">Barrett, Brian W: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Reply:</strong> <a href="19461.php">Barrett, Brian W: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
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
