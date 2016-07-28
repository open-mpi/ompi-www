<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 12:58:50 2010" -->
<!-- isoreceived="20100419165850" -->
<!-- sent="Mon, 19 Apr 2010 09:59:38 -0700" -->
<!-- isosent="20100419165938" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BCC8BFA.6020803_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="97B90297-F9CF-4194-9601-FBA6522B385E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 12:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7775.php">Peter Kjellstrom: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7773.php">Ralf Wildenhues: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;: Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7772.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7775.php">Peter Kjellstrom: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
Ralph Castain wrote:
<blockquote cite="mid97B90297-F9CF-4194-9601-FBA6522B385E@open-mpi.org"
 type="cite">
  <pre wrap="">On Apr 19, 2010, at 9:12 AM, Oliver Geisler wrote:
  </pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">Ah, that could do it.  Open MPI's shared memory files are under /tmp.  So if /tmp is NFS, you could get extremely high latencies because of dirty page writes out through NFS.

You don't necessarily have to make /tmp disk-full -- if you just make OMPI's session directories go into a ramdisk instead of to NFS, that should also be sufficient.
      </pre>
    </blockquote>
    <pre wrap="">I just browsed FAQ and "ompi_info --param all all", but didn't find the
answer:
How do I set the OMPI session directory to point it to a ramdisk?
    </pre>
  </blockquote>
  <pre wrap=""><!---->Set the MCA param orte_tmpdir_base to point at the ramdisk using any of the MCA parameter methods (cmd line, envar, default mca param file).
  </pre>
</blockquote>
I'll add that to <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=sm#where-sm-file">http://www.open-mpi.org/faq/?category=sm#where-sm-file</a><br>
<blockquote cite="mid97B90297-F9CF-4194-9601-FBA6522B385E@open-mpi.org"
 type="cite">
  <pre wrap=""></pre>
  <blockquote type="cite">
    <pre wrap="">And another question:
What would be a good size for the ram disk? One general value was
supposed by the FAQ with 128MB, but what is your experience?
(maybe a large topic by itself, so I have to try out, I guess)
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I don't recall the default shared memory size per process, but you can get that value from ompi_info --param btl sm. Take that value, multiply by your expected ppn, and then give yourself a fudge factor.
  </pre>
</blockquote>
Sizing proportionately to the number of processes was a poor heuristic
and starting in 1.3.2 we don't employ it any more.&nbsp; In all likelihood,
the default size of the shared-memory backing file will be set by
mpool_sm_min_size... 64 Mbytes.&nbsp; Try "ompi_info --param mpool sm".&nbsp;
There's some other stuff in addition to this backing file...&nbsp; so, need
a little fudge factor.&nbsp; Probably 128 MB will be enough for the
shared-memory stuff.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7775.php">Peter Kjellstrom: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7773.php">Ralf Wildenhues: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;: Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7772.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7775.php">Peter Kjellstrom: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
