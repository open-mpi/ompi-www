<?
$subject_val = "[OMPI users] Help on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 15:08:15 2016" -->
<!-- isoreceived="20160223200815" -->
<!-- sent="Tue, 23 Feb 2016 13:08:14 -0700" -->
<!-- isosent="20160223200814" -->
<!-- name="Walt Brainerd" -->
<!-- email="walt.brainerd_at_[hidden]" -->
<!-- subject="[OMPI users] Help on Windows" -->
<!-- id="CAPsJ1NbLv1yRU+NM2U07gbWS5r8agRHYRmw2qRDUETmWDQukaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Help on Windows<br>
<strong>From:</strong> Walt Brainerd (<em>walt.brainerd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-23 15:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
<li><strong>Previous message:</strong> <a href="28568.php">Ralph Castain: "Re: [OMPI users] how to specify the maximum size of the momory allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
<li><strong>Reply:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running up-to-date cygwin on W10 on a 4x i5 processor,
<br>
including gcc 5.3.
<br>
<p>I built libcaf_mpi.a provided by OpenCoarrays.
<br>
<p>$ cat hello.f90
<br>
program hello
<br>
<p>&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;print *, &quot;Hello from&quot;, this_image(), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;out of&quot;, num_images(), &quot;images.&quot;
<br>
<p>end program hello
<br>
<p>I compiled the hello.f90 with
<br>
<p>$ mpifort -fcoarray=lib hello.f90 libcaf_mpi.a
<br>
<p>and ran it with
<br>
<p>$ time mpirun -np 4 ./a
<br>
&nbsp;Hello from           1 out of           4 images.
<br>
&nbsp;Hello from           2 out of           4 images.
<br>
&nbsp;Hello from           3 out of           4 images.
<br>
&nbsp;Hello from           4 out of           4 images.
<br>
<p>real    0m42.733s           !!!!!!!!!!!!!!!!!!!!! &lt;--------------------
<br>
user    0m0.201s
<br>
sys     0m0.934s
<br>
<p>So I am getting this long startup delay. The same thing
<br>
happens with other coarray programs.
<br>
<p>Any ideas? BTW, I know almost nothing about MPI :-(.
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Walt Brainerd
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
<li><strong>Previous message:</strong> <a href="28568.php">Ralph Castain: "Re: [OMPI users] how to specify the maximum size of the momory allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
<li><strong>Reply:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
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
