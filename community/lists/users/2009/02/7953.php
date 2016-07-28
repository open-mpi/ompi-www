<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 13:26:32 2009" -->
<!-- isoreceived="20090203182632" -->
<!-- sent="Tue, 03 Feb 2009 10:30:58 -0800" -->
<!-- isosent="20090203183058" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="49888D62.7000407_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="498889BF.1000704_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.3: mca_common_sm_mmap_init error<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 13:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7954.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7952.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7964.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Prentice Bisbal wrote:
<blockquote cite="mid498889BF.1000704@ias.edu" type="cite">
  <pre wrap="">Jeff Squyres wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">On Feb 2, 2009, at 4:48 PM, Prentice Bisbal wrote
    </pre>
    <blockquote type="cite">
      <pre wrap="">No. I was running just a simple "Hello, world" program to test v1.3 when
these errors occured. And as soon as I reverted to 1.2.8, the errors
disappeared.
      </pre>
    </blockquote>
    <pre wrap="">FWIW, OMPI allocates shared memory based on the number of peers on the
host.  This allocation is during MPI_INIT, not during the first
MPI_SEND/MPI_RECV call.  So even if you're running "hello world", you
could still be running out of shared memory space.
    </pre>
  </blockquote>
  <pre wrap=""><!---->Thanks for the info. Can you define peers for me?
  </pre>
</blockquote>
The number of MPI processes running on a shared-memory node.<br>
<br>
Let's say the number of MPI processes in your job on a shared-memory
node is n.&nbsp; If n=1, there is no use for shared memory and no file will
be created.&nbsp; But if n&gt;2, then the formula for the file size depends
on some MCA parameters.&nbsp; The size is something like<br>
<br>
size = mpool_sm_per_peer_size * n<br>
if ( size &lt; mpool_sm_min_size ) size = mpool_sm_min_size<br>
if ( size &lt; mpool_sm_max_size ) size = mpool_sm_max_size<br>
<br>
The defaults are per_peer=32MB, min=128MB, and max=512 MB (I think).<br>
<br>
I guess the question is whether a file of at least 100s of MB can be
created in /tmp on the nodes where you're running.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7954.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7952.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7964.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
