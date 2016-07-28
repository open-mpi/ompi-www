<?
$subject_val = "[OMPI devel] Question on MPI_Info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 06:25:56 2009" -->
<!-- isoreceived="20090716102556" -->
<!-- sent="Thu, 16 Jul 2009 15:55:52 +0530" -->
<!-- isosent="20090716102552" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="[OMPI devel] Question on MPI_Info" -->
<!-- id="610ca1a30907160325ia512ffdlb161bdd58f0a13cf_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Question on MPI_Info<br>
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 06:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6446.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6444.php">neeraj_at_[hidden]: "Re: [OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6494.php">Jeff Squyres: "Re: [OMPI devel] Question on MPI_Info"</a>
<li><strong>Reply:</strong> <a href="6494.php">Jeff Squyres: "Re: [OMPI devel] Question on MPI_Info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I have been trying some simple code to write a file using Parallel I/O on
<br>
Open MPI. Here I specify the MPI_Info value as 0 and the execution
<br>
terminates with this messge for any number of processes:
<br>
<p>*** An error occurred in MPI_File_open
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_INFO: invalid info object
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>The src file is attached here .And im using openmpi-1.3.3a1r21566 build.
<br>
<pre>
-- 
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6445/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6445/file_test.cc">file_test.cc</a>
</ul>
<!-- attachment="file_test.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6446.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6444.php">neeraj_at_[hidden]: "Re: [OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6494.php">Jeff Squyres: "Re: [OMPI devel] Question on MPI_Info"</a>
<li><strong>Reply:</strong> <a href="6494.php">Jeff Squyres: "Re: [OMPI devel] Question on MPI_Info"</a>
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
