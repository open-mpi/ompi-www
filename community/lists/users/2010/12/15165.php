<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 05:14:44 2010" -->
<!-- isoreceived="20101216101444" -->
<!-- sent="Thu, 16 Dec 2010 11:14:56 +0100" -->
<!-- isosent="20101216101456" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="4D09E6A0.3080704_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CFD01DC.1090005_at_oracle.com" -->
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
<strong>Date:</strong> 2010-12-16 05:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15166.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15166.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15166.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We have lead some tests and the option btl_sm_eager_limit has a positive 
<br>
consequence on the performance. Eugene, thank you for your links.
<br>
<p>Now, to offer a good support to our users, we would like to get the 
<br>
value of this parameters at the runtime. I am aware I can have the value 
<br>
running ompi_info like following:
<br>
ompi_info --param btl all | grep btl_sm_eager_limit
<br>
<p>but can I get the value during the computation when I run mpirun -np 12 
<br>
--mca btl_sm_eager_limit 8192 my_binary? This value could be compared 
<br>
with the buffer size into my code and some warning put into the output.
<br>
<p>Any idea?
<br>
<p>On 12/06/2010 04:31 PM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Mathieu Gontier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nevertheless, one can observed some differences between MPICH and 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI from 25% to 100% depending on the options we are using into 
</span><br>
<span class="quotelev2">&gt;&gt; our software. Tests are lead on a single SGI node on 6 or 12 
</span><br>
<span class="quotelev2">&gt;&gt; processes, and thus, I am focused on the sm option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to narrow our focus here a little?  E.g., are there 
</span><br>
<span class="quotelev1">&gt; particular MPI calls that are much more expensive with OMPI than 
</span><br>
<span class="quotelev1">&gt; MPICH?  Is the performance difference observable with simple ping-pong 
</span><br>
<span class="quotelev1">&gt; tests?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I have two questions:
</span><br>
<span class="quotelev2">&gt;&gt; 1/ does the option--mca mpool_sm_max_size=XXXX can change something 
</span><br>
<span class="quotelev2">&gt;&gt; (I am wondering if the value is not too small and, as consequence, a 
</span><br>
<span class="quotelev2">&gt;&gt; set of small messages is sent instead of a big one)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was recent related discussion on this mail list.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/11/14910.php">http://www.open-mpi.org/community/lists/users/2010/11/14910.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check the OMPI FAQ for more info.  E.g.,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This particular parameter disappeared with OMPI 1.3.2.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=sm#how-much-use">http://www.open-mpi.org/faq/?category=sm#how-much-use</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To move messages as bigger chunks, try btl_sm_eager_limit and 
</span><br>
<span class="quotelev1">&gt; btl_sm_max_send_size:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2/ is there a difference between --mca btl tcp,sm,self and --mca btl 
</span><br>
<span class="quotelev2">&gt;&gt; self,sm,tcp (or not put any explicit mca option)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think tcp,sm,self and self,sm,tcp will be the same.  Without an 
</span><br>
<span class="quotelev1">&gt; explicit MCA btl choice, it depends on what BTL choices are available.
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
<li><strong>Next message:</strong> <a href="15166.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15166.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15166.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
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
