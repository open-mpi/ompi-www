<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 08:30:22 2010" -->
<!-- isoreceived="20101220133022" -->
<!-- sent="Mon, 20 Dec 2010 14:31:09 +0100" -->
<!-- isosent="20101220133109" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="4D0F5A9D.3050304_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0A4AA7.7030808_at_oracle.com" -->
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
<strong>Date:</strong> 2010-12-20 08:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15201.php">Gilbert Grosdidier: "[OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15199.php">Sashi Balasingam: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>In reply to:</strong> <a href="15179.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am now ok with the env. var. Pretty simple to set and get into the 
<br>
code to pack the messages.
<br>
About tests, it is so dependent on the cluster, OpenMPI itself and the 
<br>
model, this way is not an industrial way of tuning the computation. But 
<br>
the env. var. is a good workaround.
<br>
<p>Thanks again to all of you for the help.
<br>
Best regards,
<br>
Mathieu.
<br>
<p>On 12/16/2010 06:21 PM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 16, 2010, at 5:14 AM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have lead some tests and the option btl_sm_eager_limit has a positive consequence on the performance. Eugene, thank you for your links.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt; Good!
</span><br>
<span class="quotelev2">&gt;&gt; Just be aware of the tradeoff you're making: space for time.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, to offer a good support to our users, we would like to get the value of this parameters at the runtime. I am aware I can have the value running ompi_info like following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --param btl all | grep btl_sm_eager_limit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but can I get the value during the computation when I run mpirun -np 12 --mca btl_sm_eager_limit 8192 my_binary? This value could be compared with the buffer size into my code and some warning put into the output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt; We don't currently have a user-exposed method of retrieving MCA parameter values.  As you noted in your 2nd email, if the value was set by setting an environment variable, then you can just getenv() it.  But if the value was set some other way (e.g., via a file), it won't necessarily be loaded in the environment.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev1">&gt; If you are desperate to get this value, I suppose you could run 
</span><br>
<span class="quotelev1">&gt; empirical tests within your application.  This would be a little ugly, 
</span><br>
<span class="quotelev1">&gt; but could work well enough if you are desperate enough.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15200/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15201.php">Gilbert Grosdidier: "[OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15199.php">Sashi Balasingam: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>In reply to:</strong> <a href="15179.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
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
