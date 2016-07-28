<?
$subject_val = "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 13:20:54 2009" -->
<!-- isoreceived="20090513172054" -->
<!-- sent="Wed, 13 May 2009 10:20:48 -0700 (PDT)" -->
<!-- isosent="20090513172048" -->
<!-- name="Le Duy Khanh" -->
<!-- email="khanhtn24_at_[hidden]" -->
<!-- subject="[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..." -->
<!-- id="863786.46893.qm_at_web58206.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...<br>
<strong>From:</strong> Le Duy Khanh (<em>khanhtn24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 13:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9325.php">Durga Choudhury: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9323.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9325.php">Durga Choudhury: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Reply:</strong> <a href="9325.php">Durga Choudhury: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Reply:</strong> <a href="9326.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Maybe reply:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear,
<br>
<p>&#160;I intend to override some MPI functions such as MPI_Init, MPI_Recv... but I don't want to dig into OpenMPI source code.Therefore, I am thinking of a way to create a lib called &quot;mympi.h&quot; in which I will #include &quot;mpi.h&quot; to override those functions. I will create a new interface with exactly the same signatures like MPI_Init (because users are familiar with those functions). However, the problem is that I don't know how to override those functions because as I know, C/C++ doesn't allow us to override functions (only overload them).
<br>
<p>&#160;Could you please show me how to override OMPI functions but still keep the same function names and signatures?
<br>
<p>&#160;Thank you so much for your time and consideration
<br>
<p>Le , Duy Khanh
<br>
Cellphone: (+84)958521704
<br>
Faculty of Computer Science and Engineering
<br>
Ho Chi Minh city University of Technology , Viet Nam
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9324/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9325.php">Durga Choudhury: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9323.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9325.php">Durga Choudhury: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Reply:</strong> <a href="9325.php">Durga Choudhury: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Reply:</strong> <a href="9326.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Maybe reply:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
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
