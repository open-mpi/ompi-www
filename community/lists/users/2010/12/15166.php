<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 05:17:14 2010" -->
<!-- isoreceived="20101216101714" -->
<!-- sent="Thu, 16 Dec 2010 11:17:27 +0100" -->
<!-- isosent="20101216101727" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="4D09E737.2060806_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D09E6A0.3080704_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between single and double precision<br>
<strong>From:</strong> Mathieu Gontier (<em>mathieu.gontier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 05:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15167.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does the env. var. works to overload it:
<br>
export OMPI_MCA_btl_sm_eager_limit=40960
<br>
<p>In that case, I can deal with it.
<br>
<p>On 12/16/2010 11:14 AM, Mathieu Gontier wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have lead some tests and the option btl_sm_eager_limit has a 
</span><br>
<span class="quotelev1">&gt; positive consequence on the performance. Eugene, thank you for your 
</span><br>
<span class="quotelev1">&gt; links.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, to offer a good support to our users, we would like to get the 
</span><br>
<span class="quotelev1">&gt; value of this parameters at the runtime. I am aware I can have the 
</span><br>
<span class="quotelev1">&gt; value running ompi_info like following:
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl all | grep btl_sm_eager_limit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but can I get the value during the computation when I run mpirun -np 
</span><br>
<span class="quotelev1">&gt; 12 --mca btl_sm_eager_limit 8192 my_binary? This value could be 
</span><br>
<span class="quotelev1">&gt; compared with the buffer size into my code and some warning put into 
</span><br>
<span class="quotelev1">&gt; the output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/06/2010 04:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Mathieu Gontier wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nevertheless, one can observed some differences between MPICH and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI from 25% to 100% depending on the options we are using into 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; our software. Tests are lead on a single SGI node on 6 or 12 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes, and thus, I am focused on the sm option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to narrow our focus here a little?  E.g., are there 
</span><br>
<span class="quotelev2">&gt;&gt; particular MPI calls that are much more expensive with OMPI than 
</span><br>
<span class="quotelev2">&gt;&gt; MPICH?  Is the performance difference observable with simple 
</span><br>
<span class="quotelev2">&gt;&gt; ping-pong tests?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I have two questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1/ does the option--mca mpool_sm_max_size=XXXX can change something 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I am wondering if the value is not too small and, as consequence, a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set of small messages is sent instead of a big one)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There was recent related discussion on this mail list.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/11/14910.php">http://www.open-mpi.org/community/lists/users/2010/11/14910.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check the OMPI FAQ for more info.  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This particular parameter disappeared with OMPI 1.3.2.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=sm#how-much-use">http://www.open-mpi.org/faq/?category=sm#how-much-use</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To move messages as bigger chunks, try btl_sm_eager_limit and 
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_max_send_size:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2/ is there a difference between --mca btl tcp,sm,self and --mca btl 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; self,sm,tcp (or not put any explicit mca option)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think tcp,sm,self and self,sm,tcp will be the same.  Without an 
</span><br>
<span class="quotelev2">&gt;&gt; explicit MCA btl choice, it depends on what BTL choices are available.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15167.php">Bernard Secher - SFME/LGLS: "[OMPI users] [SPAM:### 83%] problem when compiling ompenmpi V1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
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
