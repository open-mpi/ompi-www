<?
$subject_val = "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  3 10:46:26 2014" -->
<!-- isoreceived="20140103154626" -->
<!-- sent="Fri, 3 Jan 2014 15:46:24 +0000" -->
<!-- isosent="20140103154624" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)" -->
<!-- id="CADsB1iDoU4982AZ7pTkeD6r5WxUzy3-_b3zZ4VU6jsNu3OLJng_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F776ADE0-BF3F-4AEA-98C6-B4826B0F0B61_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-03 10:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="23316.php">Jeff Hammond: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>In reply to:</strong> <a href="23316.php">Jeff Hammond: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>Yes thanks. I can split the 64bit universe into the number of processors
<br>
indeed, then generate in each process unique ids that will never conflict
<br>
with ids from other processors.
<br>
This will be an index into a data structure that is cloned in each
<br>
processor (and maintained cloned throughout the session)
<br>
<p><p>On 3 January 2014 13:36, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unique to each process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int rank;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; uint64_t unique = rank;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To get additional unique values:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int size;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; unique += size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this isn't insufficient, please ask to question differently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no canonical method for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2014, at 3:50 AM, MM &lt;finjulhich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Is there a canonical way to obtain a globally unique 64bit unsigned
</span><br>
<span class="quotelev1">&gt; integer across all mpi processes, multiple times?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23317/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="23316.php">Jeff Hammond: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>In reply to:</strong> <a href="23316.php">Jeff Hammond: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
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
