<?
$subject_val = "[OMPI users] crash with mpiBLAST";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 10:08:21 2008" -->
<!-- isoreceived="20080507140821" -->
<!-- sent="Wed, 07 May 2008 10:08:27 -0400" -->
<!-- isosent="20080507140827" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="[OMPI users] crash with mpiBLAST" -->
<!-- id="4821B7DB.8050805_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] crash with mpiBLAST<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 10:08:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Previous message:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5627.php">Tim Mattox: "Re: [OMPI users] crash with mpiBLAST"</a>
<li><strong>Reply:</strong> <a href="5627.php">Tim Mattox: "Re: [OMPI users] crash with mpiBLAST"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open-MPI team:
<br>
<p>&nbsp;&nbsp;&nbsp;I am working on a build of mpiBLAST 1.5.0-pio, and found that the 
<br>
code crashes immediately after launch with a seg fault.  I used Open-MPI 
<br>
1.2.6 built from the tarball (with just a --prefix directive).
<br>
<p>&nbsp;&nbsp;&nbsp;I did just try the code with MPICH 1.2.7p1, and it runs fine.   What 
<br>
steps should I try to help isolate the issue in Open-MPI?  Would it help 
<br>
to provide the call stack reported by Open-MPI on crash?  Do you need 
<br>
rebuild of application and Open-MPI with the -g option (for debugging 
<br>
symbols)?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks!
<br>
<p>Joe
<br>
<p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Previous message:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5627.php">Tim Mattox: "Re: [OMPI users] crash with mpiBLAST"</a>
<li><strong>Reply:</strong> <a href="5627.php">Tim Mattox: "Re: [OMPI users] crash with mpiBLAST"</a>
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
