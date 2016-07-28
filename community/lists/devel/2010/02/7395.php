<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 11:40:56 2010" -->
<!-- isoreceived="20100210164056" -->
<!-- sent="Wed, 10 Feb 2010 08:42:43 -0800" -->
<!-- isosent="20100210164243" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL" -->
<!-- id="4B72E203.8050606_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="58A20ECD-3D04-4BA2-8298-39E2D03629A7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 11:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7396.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is a related case.
<br>
<p>If I remember correctly, the HPCC pingpong test synchronizes 
<br>
occasionally by having one process send a zero-byte broadcast to all 
<br>
other processes.  What's a zero-byte broadcast?  Well, some MPIs 
<br>
apparently send no data, but do have synchronization semantics.  (No 
<br>
non-root process can exit before the root process has entered.)  Other 
<br>
MPIs treat the zero-byte broadcasts as no-ops;  there is no 
<br>
synchronization and then timing results from the HPCC pingpong test are 
<br>
very misleading.  So far as I can tell, the MPI standard doesn't address 
<br>
which behavior is correct.  The test strikes me as deficient:  it would 
<br>
have been just as easy to have a single-word broadcast to implement the 
<br>
synchronization they were looking for.
<br>
<p>Sigh.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7396.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
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
