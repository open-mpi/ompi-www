<?
$subject_val = "[OMPI devel] Proposed changes to maximum size of sm btl backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 10:35:10 2008" -->
<!-- isoreceived="20080812143510" -->
<!-- sent="Tue, 12 Aug 2008 10:34:51 -0400" -->
<!-- isosent="20080812143451" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Proposed changes to maximum size of sm btl backing file" -->
<!-- id="48A19F8B.2090603_at_Sun.COM" -->
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
<strong>Subject:</strong> [OMPI devel] Proposed changes to maximum size of sm btl backing file<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 10:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4571.php">Bogdan Costescu: "Re: [OMPI devel] Proposed changes to maximum size of sm btl backing file"</a>
<li><strong>Previous message:</strong> <a href="4569.php">Jeff Squyres: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4571.php">Bogdan Costescu: "Re: [OMPI devel] Proposed changes to maximum size of sm btl backing file"</a>
<li><strong>Reply:</strong> <a href="4571.php">Bogdan Costescu: "Re: [OMPI devel] Proposed changes to maximum size of sm btl backing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have opened a ticket at <a href="https://svn.open-mpi.org/trac/ompi/ticket/1449">https://svn.open-mpi.org/trac/ompi/ticket/1449</a> 
<br>
which proposes increasing the maximum default size for the sm btl file.
<br>
<p>Currently, the file size is 32Mbytes per process with a maximum of 
<br>
512Mbytes.  This means that after np=16, the backing file no longer grows.
<br>
<p>We have seen that on some larger SMPs with the potential to run np=512 
<br>
that this maximum size is too small.  We can run out of memory and the 
<br>
program can fail, or more recently, hang.  I also think that 512Mbytes 
<br>
is just too small a number when you are talking about an SMP with many 
<br>
gigabytes of /tmp space.
<br>
<p>I propose bumping the max for 32-bit programs to 2G and for 64-bit 
<br>
programs to 8G.
<br>
<p>If any one has objections to this, please comment on the ticket where 
<br>
there are some additional details.
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4571.php">Bogdan Costescu: "Re: [OMPI devel] Proposed changes to maximum size of sm btl backing file"</a>
<li><strong>Previous message:</strong> <a href="4569.php">Jeff Squyres: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4571.php">Bogdan Costescu: "Re: [OMPI devel] Proposed changes to maximum size of sm btl backing file"</a>
<li><strong>Reply:</strong> <a href="4571.php">Bogdan Costescu: "Re: [OMPI devel] Proposed changes to maximum size of sm btl backing file"</a>
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
