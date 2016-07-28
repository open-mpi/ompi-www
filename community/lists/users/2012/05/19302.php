<?
$subject_val = "Re: [OMPI users] MPI - memory sharing?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 17 20:29:09 2012" -->
<!-- isoreceived="20120518002909" -->
<!-- sent="Fri, 18 May 2012 08:29:04 +0800" -->
<!-- isosent="20120518002904" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI - memory sharing?" -->
<!-- id="CAFAE9jh069nyDYdQDyn9N4F43E3iA-wSs4mwoBdE=Xxe3R-NQw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10A6F97D-797E-4A5E-8258-1447E7E52F6B_at_cisco.com" -->
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
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-17 20:29:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19303.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Previous message:</strong> <a href="19301.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<li><strong>In reply to:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. thanks :)
<br>
<p>On Fri, May 18, 2012 at 7:06 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; MPI 2 does not say anything about memory sharing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Open MPI, each MPI process (i.e., each unique rank in MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; will have a completely separate memory space.  So the malloc() that you do
</span><br>
<span class="quotelev1">&gt; in MCW rank 0 will be totally different than the malloc() that you do in
</span><br>
<span class="quotelev1">&gt; MCW rank 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 16, 2012, at 8:08 AM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have following structure of  MPI code -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(){
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_INIT.....
</span><br>
<span class="quotelev2">&gt; &gt; //initialize MPI
</span><br>
<span class="quotelev2">&gt; &gt; data = malloc(sizeof(int)*200);
</span><br>
<span class="quotelev2">&gt; &gt;     //initialize data
</span><br>
<span class="quotelev2">&gt; &gt;    /*--------Master---------*/
</span><br>
<span class="quotelev2">&gt; &gt;   if(taskid == 0){
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     //send data to each slave
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_SEND....
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    /*----Slaves-------*/
</span><br>
<span class="quotelev2">&gt; &gt;   if(taskid &gt; 0){
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    //accept data from master
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_RECV....
</span><br>
<span class="quotelev2">&gt; &gt;   //do some calculations
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize()
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have few doubts about the code above.
</span><br>
<span class="quotelev2">&gt; &gt; In above code, the data is allocated memory in the main program. If I
</span><br>
<span class="quotelev1">&gt; run this program on cluster where
</span><br>
<span class="quotelev2">&gt; &gt; node 1 is slave and node 0 is master, does node 1 actually shares the
</span><br>
<span class="quotelev1">&gt; memory location of node 0 to perform the calculations?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I do not want to share the memory, how can i make task on node 1 work
</span><br>
<span class="quotelev1">&gt; independently ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19303.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Previous message:</strong> <a href="19301.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<li><strong>In reply to:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<!-- nextthread="start" -->
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
