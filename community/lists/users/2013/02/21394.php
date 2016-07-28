<?
$subject_val = "Re: [OMPI users] Which type of collective call is called?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 11:44:23 2013" -->
<!-- isoreceived="20130213164423" -->
<!-- sent="Wed, 13 Feb 2013 11:44:16 -0500" -->
<!-- isosent="20130213164416" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Which type of collective call is called?" -->
<!-- id="8F8FDC92-1C9A-49BB-8E5E-5D402F0E8BB3_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="78A90D3E-D652-46EF-921E-2293AE52A89B_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Which type of collective call is called?<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-13 11:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21395.php">Bharath Ramesh: "[OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21393.php">Vishwanath Venkatesan: "Re: [OMPI users] Which type of collective call is called?"</a>
<li><strong>In reply to:</strong> <a href="21393.php">Vishwanath Venkatesan: "Re: [OMPI users] Which type of collective call is called?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For each communicator OMPI manages a table of collective functions. In order to pass the communicator initialization, the table should be filled with functions.
<br>
The &quot;tuned&quot; component doesn't provide all functions (at least it used to be this way). In order fill the table
<br>
you should use tuned,basic collectives. The tuned component has higher priority, therefore if tuned function is available, it is used by default.
<br>
Otherwise basic component is used. This was a short background on collectives implementation :)
<br>
<p>By default Open MPI configured to used tuned, so you don't have to pass any special parameters.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Feb 13, 2013, at 12:56 AM, Vishwanath Venkatesan &lt;venkates_at_[hidden]&lt;mailto:venkates_at_[hidden]&gt;&gt; wrote:
Just use --mca coll tuned in the command line to force use of tuned collectives.
Best,
Vish
Vishwanath Venkatesan
Graduate Research Assistant
Parallel Software Technologies Lab
Department of Computer Science
University of Houston
TX, USA
www.cs.uh.edu/~venkates&lt;<a href="http://www.cs.uh.edu/~venkates">http://www.cs.uh.edu/~venkates</a>&gt;
On Feb 12, 2013, at 10:49 PM, Kranthi Kumar wrote:
Hello Sir,
In the implementation of MPI there are so many collective call implementations. I just want to when is the tuned collective calls called.
What is it that I need to so that always tuned collective calls are called?
Thank You
--
Kranthi _______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21395.php">Bharath Ramesh: "[OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21393.php">Vishwanath Venkatesan: "Re: [OMPI users] Which type of collective call is called?"</a>
<li><strong>In reply to:</strong> <a href="21393.php">Vishwanath Venkatesan: "Re: [OMPI users] Which type of collective call is called?"</a>
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
