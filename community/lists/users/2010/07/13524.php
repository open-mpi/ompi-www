<?
$subject_val = "[OMPI users] configure options";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 20:13:26 2010" -->
<!-- isoreceived="20100708001326" -->
<!-- sent="Wed, 7 Jul 2010 20:13:13 -0500" -->
<!-- isosent="20100708011313" -->
<!-- name="Zhigang Wei" -->
<!-- email="daniel.wei_at_[hidden]" -->
<!-- subject="[OMPI users] configure options" -->
<!-- id="201007072013127655858_at_nd.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] configure options<br>
<strong>From:</strong> Zhigang Wei (<em>daniel.wei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 21:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13540.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13540.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13542.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>How can I decide the configure options? I am greatly confused.
<br>
<p>I am using school's high performance computer.
<br>
But the openmpi there is version 1.3.2, old, so I want to build the new one.
<br>
<p>I am new to openmpi, I have built the openmpi and it doesn't work, I built and installed it to my own directory.
<br>
I use the following configure options,
<br>
<p>./configure --with-sge --prefix=$MY_OWN_DIR --with-psm 
<br>
<p>but it won't work and failed with somelines like 
<br>
......lib/openmpi/mca_ess_hnp: file not found (ignored) 
<br>
in the output file.
<br>
<p>I guess my configure is wrong, could you tell me the meaning of --with-psm, --with-sge, do I need to add other options? I guess the computing nodes are using infiniband, but how to build with that? If I don't have the su right, can I build it? What should I pay attettion if I want to build and use my own openmpi?
<br>
<p>You see, in a personal multicore computer, building is so easy and mpirun the program without any problems. But in school's hpc, it fails all the time.
<br>
<p>Please help. Thank you all.
<br>
<p><p>Zhigang Wei
<br>
------------
<br>
NatHaz Modeling Laboratory
<br>
University of Notre Dame
<br>
112J FitzPatrick Hall
<br>
Notre Dame, IN 46556 
<br>
<p><p><p>2010-07-07
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13540.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13540.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Reply:</strong> <a href="13542.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
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
