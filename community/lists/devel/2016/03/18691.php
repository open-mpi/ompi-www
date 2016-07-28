<?
$subject_val = "[OMPI devel] Thread safety in the BTL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  6 15:31:10 2016" -->
<!-- isoreceived="20160306203110" -->
<!-- sent="Sun, 6 Mar 2016 15:31:09 -0500" -->
<!-- isosent="20160306203109" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] Thread safety in the BTL layer" -->
<!-- id="CAHXxYDiYpkBhShJ3-6T1eOa9Y1QriKhBoeBONsG82=y0-qxwsg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Thread safety in the BTL layer<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-06 15:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18692.php">George Bosilca: "Re: [OMPI devel] Thread safety in the BTL layer"</a>
<li><strong>Previous message:</strong> <a href="18690.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18692.php">George Bosilca: "Re: [OMPI devel] Thread safety in the BTL layer"</a>
<li><strong>Reply:</strong> <a href="18692.php">George Bosilca: "Re: [OMPI devel] Thread safety in the BTL layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>sorry for asking too many 101 questions; hopefully someone won't mind
<br>
answering.
<br>
<p>It looks like, as of the current release, some BTLs (e.g. openib) are not
<br>
thread safe, and the code explicitly bails out if it finds that MIT_Init()
<br>
was called with THREAD_MULTIPLE. Then there are some BTLs, such as TCP,
<br>
that can handle THREAD_MULTIPLE. Here are the questions:
<br>
<p>1. There must be global (shared) variables that the BTL layer is accessing,
<br>
which is giving rise to the thread safety. Is there a list of such
<br>
variables, the code path in which they are accessed, and/or any
<br>
documentation on them (including any past mailing list post)?
<br>
<p>2. Browsing through the mailing list (I have been a subscriber to the
<br>
*user* list for quite a while), it looks like a lot of people have stumbled
<br>
on to the issue that the openib BTL is not thread safe. Given that, I'd
<br>
presume, it is the most popular BTL, since infiniband-like fabrics holds a
<br>
lion's share of the HPC interconnect market, it must be quite difficult to
<br>
make it thread safe. Any comments on the level of work it would take to
<br>
make sure a new BTL would be thread safe? Something along the line of a
<br>
'do-this' or 'don't-do-that' would be greatly appreciated.
<br>
<p>3. It looks like the openib BTL bailing out if called with THREAD_MULTIPLE
<br>
has been removed in the master branch (at least from a cursory look.) Does
<br>
that mean that the openib BTL is now thread safe, of is it that the check
<br>
has simply been moved to another location?
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18691/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18692.php">George Bosilca: "Re: [OMPI devel] Thread safety in the BTL layer"</a>
<li><strong>Previous message:</strong> <a href="18690.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18692.php">George Bosilca: "Re: [OMPI devel] Thread safety in the BTL layer"</a>
<li><strong>Reply:</strong> <a href="18692.php">George Bosilca: "Re: [OMPI devel] Thread safety in the BTL layer"</a>
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
