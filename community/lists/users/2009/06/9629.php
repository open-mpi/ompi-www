<?
$subject_val = "Re: [OMPI users] vfs_write returned -14";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 17:08:08 2009" -->
<!-- isoreceived="20090616210808" -->
<!-- sent="Tue, 16 Jun 2009 14:08:00 -0700 (PDT)" -->
<!-- isosent="20090616210800" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vfs_write returned -14" -->
<!-- id="473300.68178.qm_at_web31005.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] vfs_write returned -14" -->
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
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 17:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9630.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9628.php">Rob Latham: "Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
<li><strong>Maybe in reply to:</strong> <a href="9624.php">Kritiraj Sajadah: "[OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9630.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Reply:</strong> <a href="9630.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Thanks for the email. I have install BLCR 0.8.1 and openmpi 1.3 on my laptop with Ubuntu 8.04 on it. It works fine.
<br>
<p>I now tried the installation on the cluster ( on one machine for now) in my university. ( the administrator installed it) i am not sure if he followed the steps i gave him.
<br>
<p>I am checkpointing a simple mpi application which looks as follows:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
int rank,size;
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 30&quot;);
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 30&quot;);
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 30&quot;);
<br>
printf(&quot;bye \n&quot;);
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p>Do you think its better to re install BLCR?
<br>
<p><p>Thanks 
<br>
<p>Raj
<br>
--- On Tue, 6/16/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] vfs_write returned -14
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, June 16, 2009, 6:42 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are errors from BLCR. It may be a problem with your
</span><br>
<span class="quotelev1">&gt; BLCR installation and/or your application. Are you able to
</span><br>
<span class="quotelev1">&gt; checkpoint/restart a non-MPI application with BLCR on these
</span><br>
<span class="quotelev1">&gt; machines?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What kind of MPI application are you trying to checkpoint?
</span><br>
<span class="quotelev1">&gt; Some of the MPI interfaces are not fully supported at the
</span><br>
<span class="quotelev1">&gt; moment (outlined in the FT User Document that I mentioned in
</span><br>
<span class="quotelev1">&gt; a previous email).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2009, at 11:30 AM, Kritiraj Sajadah wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160; &#160; &#160; &#160; I have install
</span><br>
<span class="quotelev1">&gt; openmpi 1.3 and blcr 0.8.1 on a linux machine (ubuntu).
</span><br>
<span class="quotelev1">&gt; however, when i try checkpointing an MPI application, I get
</span><br>
<span class="quotelev1">&gt; the following error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - vfs_write returned -14
</span><br>
<span class="quotelev2">&gt; &gt; - file_header: write returned -14
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can someone help please.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Raj
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9630.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9628.php">Rob Latham: "Re: [OMPI users] MPI-IO: reading an unformatted binary fortran file"</a>
<li><strong>Maybe in reply to:</strong> <a href="9624.php">Kritiraj Sajadah: "[OMPI users] vfs_write returned -14"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9630.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Reply:</strong> <a href="9630.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
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
