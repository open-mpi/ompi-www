<?
$subject_val = "Re: [OMPI users] Configuration problem or network problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 22:48:36 2009" -->
<!-- isoreceived="20090707024836" -->
<!-- sent="Mon, 6 Jul 2009 19:48:31 -0700" -->
<!-- isosent="20090707024831" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration problem or network problem?" -->
<!-- id="A0845651-E6B4-40E5-8802-4C5FF47F83C2_at_rain.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0332CB5EB6327940B291055AAD964221048FDC71_at_SHAMLVEM02.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration problem or network problem?<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 22:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9850.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9848.php">Zou, Lin (GE, Research, Consultant): "[OMPI users] Configuration problem or network problem?"</a>
<li><strong>In reply to:</strong> <a href="9848.php">Zou, Lin (GE, Research, Consultant): "[OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9853.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Reply:</strong> <a href="9853.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lin,
<br>
<p>Try -np 16 and not running on the head node.
<br>
<p>Doug Reeder
<br>
On Jul 6, 2009, at 7:08 PM, Zou, Lin (GE, Research, Consultant) wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;     The system I use is a PS3 cluster, with 16 PS3s and a PowerPC as  
</span><br>
<span class="quotelev1">&gt; a headnode, they are connected by a high speed switch.
</span><br>
<span class="quotelev1">&gt;     There are point-to-point communication functions( MPI_Send and  
</span><br>
<span class="quotelev1">&gt; MPI_Recv ), the data size is about 40KB, and a lot of computings  
</span><br>
<span class="quotelev1">&gt; which will consume a long time(about 1 sec)in a loop.The co- 
</span><br>
<span class="quotelev1">&gt; processor in PS3 can take care of the computation, the main  
</span><br>
<span class="quotelev1">&gt; processor take care of point-to-point communication,so the computing  
</span><br>
<span class="quotelev1">&gt; and communication can overlap.The communication funtions should  
</span><br>
<span class="quotelev1">&gt; return much faster than computing function.
</span><br>
<span class="quotelev1">&gt;     My question is that after some circles, the time consumed by  
</span><br>
<span class="quotelev1">&gt; communication functions in a PS3 will increase heavily, and the  
</span><br>
<span class="quotelev1">&gt; whole cluster's sync state will corrupt.When I decrease the  
</span><br>
<span class="quotelev1">&gt; computing time, this situation just disappeare.I am very confused  
</span><br>
<span class="quotelev1">&gt; about this.
</span><br>
<span class="quotelev1">&gt; I think there is a mechanism in OpenMPI that cause this case, does  
</span><br>
<span class="quotelev1">&gt; everyone get this situation before?
</span><br>
<span class="quotelev1">&gt; I use &quot;mpirun --mca btl tcp, self -np 17 --hostfile ...&quot;, is there  
</span><br>
<span class="quotelev1">&gt; something i should added?
</span><br>
<span class="quotelev1">&gt; Lin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9850.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9848.php">Zou, Lin (GE, Research, Consultant): "[OMPI users] Configuration problem or network problem?"</a>
<li><strong>In reply to:</strong> <a href="9848.php">Zou, Lin (GE, Research, Consultant): "[OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9853.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Reply:</strong> <a href="9853.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
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
