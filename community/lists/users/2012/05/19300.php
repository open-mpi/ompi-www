<?
$subject_val = "Re: [OMPI users] MPI - memory sharing?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 17 19:06:37 2012" -->
<!-- isoreceived="20120517230637" -->
<!-- sent="Thu, 17 May 2012 19:06:32 -0400" -->
<!-- isosent="20120517230632" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI - memory sharing?" -->
<!-- id="10A6F97D-797E-4A5E-8258-1447E7E52F6B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAE9jjuYQ9WnVnKO+b5GdO1DSELkbPat5=TTBChJ0TuwNrKfw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI - memory sharing?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-17 19:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19301.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<li><strong>Previous message:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19292.php">Rohan Deshpande: "[OMPI users] MPI - memory sharing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19302.php">Rohan Deshpande: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>Reply:</strong> <a href="19302.php">Rohan Deshpande: "Re: [OMPI users] MPI - memory sharing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI 2 does not say anything about memory sharing.
<br>
<p>In Open MPI, each MPI process (i.e., each unique rank in MPI_COMM_WORLD) will have a completely separate memory space.  So the malloc() that you do in MCW rank 0 will be totally different than the malloc() that you do in MCW rank 1.
<br>
<p>Make sense?
<br>
<p>On May 16, 2012, at 8:08 AM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; I have following structure of  MPI code - 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(){
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MPI_INIT.....
</span><br>
<span class="quotelev1">&gt; //initialize MPI
</span><br>
<span class="quotelev1">&gt; data = malloc(sizeof(int)*200);
</span><br>
<span class="quotelev1">&gt;     //initialize data
</span><br>
<span class="quotelev1">&gt;    /*--------Master---------*/
</span><br>
<span class="quotelev1">&gt;   if(taskid == 0){
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     //send data to each slave
</span><br>
<span class="quotelev1">&gt;     MPI_SEND....
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /*----Slaves-------*/  
</span><br>
<span class="quotelev1">&gt;   if(taskid &gt; 0){
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    //accept data from master  
</span><br>
<span class="quotelev1">&gt;   MPI_RECV....
</span><br>
<span class="quotelev1">&gt;   //do some calculations
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize()
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have few doubts about the code above. 
</span><br>
<span class="quotelev1">&gt; In above code, the data is allocated memory in the main program. If I run this program on cluster where
</span><br>
<span class="quotelev1">&gt; node 1 is slave and node 0 is master, does node 1 actually shares the memory location of node 0 to perform the calculations?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I do not want to share the memory, how can i make task on node 1 work independently ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19301.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<li><strong>Previous message:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19292.php">Rohan Deshpande: "[OMPI users] MPI - memory sharing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19302.php">Rohan Deshpande: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>Reply:</strong> <a href="19302.php">Rohan Deshpande: "Re: [OMPI users] MPI - memory sharing?"</a>
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
