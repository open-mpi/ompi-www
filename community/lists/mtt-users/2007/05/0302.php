<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 18:42:08 2007" -->
<!-- isoreceived="20070521224208" -->
<!-- sent="Mon, 21 May 2007 18:42:28 -0400" -->
<!-- isosent="20070521224228" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] Failure tracking (RE: #70: Show &amp;quot;new&amp;quot; failures)" -->
<!-- id="20070521224228.GE6879_at_sun.com" -->
<!-- charset="unknown-8bit" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-21 18:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Jeff Squyres: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Reply:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have something to help filter out (in reporter.php) old
<br>
known OMPI failures, though this feature is still in an
<br>
embryonic stage.
<br>
<p>E.g., here's a link that shows *all* of Sun's recent Test
<br>
Run failures.
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=199">http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=199</a>
<br>
<p>If I don't care to sift through all the SPARC &quot;alignment&quot;
<br>
errors that are already in our bug tracking system, I can
<br>
add that failure here at the below link. 
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Insert">http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Insert</a>
<br>
<p>The HTML form would like something like this:
<br>
<p>&nbsp;&nbsp;Field: &quot;Hardware&quot; Value: _sun4u_
<br>
&nbsp;&nbsp;Field: &quot;Stdout&quot;   Value: _invalid address alignment_
<br>
&nbsp;&nbsp;(The remaining 8 rows of the form would be left blank)
<br>
<p>One can see the entire database of failures in 
<br>
&quot;Delete Mode&quot;. E.g.,
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Delete">http://www.open-mpi.org/~emallove/mtt_/track-failures/?screen=Delete</a>
<br>
<p>E.g., now if I don't care to see the alignment errors, I can
<br>
checkbox the &quot;Filter tracked failures&quot; box in Preferences.
<br>
Voil&#224;:
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=200">http://www.open-mpi.org/~emallove/mtt_/reporter.php?do_redir=200</a>
<br>
<p>Thoughts?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Jeff Squyres: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Reply:</strong> <a href="0303.php">Jeff Squyres: "Re: [MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
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
