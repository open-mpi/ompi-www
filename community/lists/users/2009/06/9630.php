<?
$subject_val = "Re: [OMPI users] vfs_write returned -14";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 20:42:12 2009" -->
<!-- isoreceived="20090617004212" -->
<!-- sent="Tue, 16 Jun 2009 20:42:07 -0400" -->
<!-- isosent="20090617004207" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vfs_write returned -14" -->
<!-- id="9C525533-C220-4BBB-A988-4E8CFB0D8AB0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="473300.68178.qm_at_web31005.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] vfs_write returned -14<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 20:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9631.php">Benjamin Lamptey: "[OMPI users] Check out my photos on Facebook"</a>
<li><strong>Previous message:</strong> <a href="9629.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9629.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9635.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you try checkpointing a non-MPI application with BLCR on the  
<br>
cluster? If that does not work then I would suspect that BLCR is not  
<br>
working properly on the system.
<br>
<p>However if a non-MPI application can be checkpointed and restarted  
<br>
correctly on this machine then it may be something odd with the Open  
<br>
MPI installation or runtime environment. To help debug here I would  
<br>
need to know how Open MPI was configured and how the application was  
<br>
ran on the machine (command line arguments, environment variables, ...).
<br>
<p>I should note that for the program that you sent it is important that  
<br>
you compile Open MPI with the Fault Tolerance Thread enabled to ensure  
<br>
a timely checkpoint. Otherwise the checkpoint will be delayed until  
<br>
the MPI program enters the MPI_Finalize function.
<br>
<p>Let me know what you find out.
<br>
<p>Josh
<br>
<p>On Jun 16, 2009, at 5:08 PM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the email. I have install BLCR 0.8.1 and openmpi 1.3 on  
</span><br>
<span class="quotelev1">&gt; my laptop with Ubuntu 8.04 on it. It works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now tried the installation on the cluster ( on one machine for  
</span><br>
<span class="quotelev1">&gt; now) in my university. ( the administrator installed it) i am not  
</span><br>
<span class="quotelev1">&gt; sure if he followed the steps i gave him.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am checkpointing a simple mpi application which looks as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int rank,size;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 30&quot;);
</span><br>
<span class="quotelev1">&gt; printf(&quot;bye \n&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you think its better to re install BLCR?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt; --- On Tue, 6/16/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] vfs_write returned -14
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tuesday, June 16, 2009, 6:42 PM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These are errors from BLCR. It may be a problem with your
</span><br>
<span class="quotelev2">&gt;&gt; BLCR installation and/or your application. Are you able to
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint/restart a non-MPI application with BLCR on these
</span><br>
<span class="quotelev2">&gt;&gt; machines?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What kind of MPI application are you trying to checkpoint?
</span><br>
<span class="quotelev2">&gt;&gt; Some of the MPI interfaces are not fully supported at the
</span><br>
<span class="quotelev2">&gt;&gt; moment (outlined in the FT User Document that I mentioned in
</span><br>
<span class="quotelev2">&gt;&gt; a previous email).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 16, 2009, at 11:30 AM, Kritiraj Sajadah wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           I have install
</span><br>
<span class="quotelev2">&gt;&gt; openmpi 1.3 and blcr 0.8.1 on a linux machine (ubuntu).
</span><br>
<span class="quotelev2">&gt;&gt; however, when i try checkpointing an MPI application, I get
</span><br>
<span class="quotelev2">&gt;&gt; the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - vfs_write returned -14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - file_header: write returned -14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone help please.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Raj
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9631.php">Benjamin Lamptey: "[OMPI users] Check out my photos on Facebook"</a>
<li><strong>Previous message:</strong> <a href="9629.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9629.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9635.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
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
