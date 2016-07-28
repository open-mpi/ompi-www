<?
$subject_val = "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  3 08:36:05 2014" -->
<!-- isoreceived="20140103133605" -->
<!-- sent="Fri, 3 Jan 2014 07:36:00 -0600" -->
<!-- isosent="20140103133600" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)" -->
<!-- id="F776ADE0-BF3F-4AEA-98C6-B4826B0F0B61_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADsB1iDTq5GEcx_Og-wE6SsBiEMG3VYZrooSTbpHOvpeA4vJog_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-03 08:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23317.php">MM: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>Previous message:</strong> <a href="23315.php">MM: "[OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>In reply to:</strong> <a href="23315.php">MM: "[OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23317.php">MM: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>Reply:</strong> <a href="23317.php">MM: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unique to each process?
<br>
<p>Try this:
<br>
<p>int rank;
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
uint64_t unique = rank;
<br>
<p>To get additional unique values:
<br>
<p>int size;
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
unique += size;
<br>
<p>If this isn't insufficient, please ask to question differently. 
<br>
<p>There is no canonical method for this. 
<br>
<p>Jeff
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Jan 3, 2014, at 3:50 AM, MM &lt;finjulhich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Is there a canonical way to obtain a globally unique 64bit unsigned integer across all mpi processes, multiple times?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23316/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23317.php">MM: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>Previous message:</strong> <a href="23315.php">MM: "[OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>In reply to:</strong> <a href="23315.php">MM: "[OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23317.php">MM: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>Reply:</strong> <a href="23317.php">MM: "Re: [OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
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
