<?
$subject_val = "[MTT devel] MTT DB Archive 2011-2013";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 21:58:45 2015" -->
<!-- isoreceived="20150825015845" -->
<!-- sent="Mon, 24 Aug 2015 20:58:44 -0500" -->
<!-- isosent="20150825015844" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] MTT DB Archive 2011-2013" -->
<!-- id="CAANzjEm-8iNTkisd-8u2Z=+-UhtjZs0Wi02Q7CcvxuZj_RGxGw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [MTT devel] MTT DB Archive 2011-2013<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 21:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/10/0653.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [OMPI devel] mtt-submit, etc."</a>
<li><strong>Previous message:</strong> <a href="0651.php">Josh Hursey: "Re: [MTT devel] Detail link error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Noting this here for the mailing list archives)
<br>
<p>To free up some space on the MTT Server I archived the 2011-2013 tables
<br>
(adding to the archive from 2006-2010). The archived tables are located at
<br>
the /nfs/data/jjhursey/mtt-archive mount on the MTT server. I like keeping
<br>
the old tables around in case we ever want to use them for research or
<br>
stress testing.
<br>
<p>To archive a year of data run the archive-partitions.pl script from the MTT
<br>
repo:
<br>
&nbsp;&nbsp;./server/sql/support/archive-paritions.pl 2013 XX
<br>
The &quot;XX&quot; means all months in that year.
<br>
<p>The current database has records from 2014-01-01 to present. This amounts
<br>
to about 32 GB of data.
<br>
<p>-- Josh
<br>
<p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/10/0653.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [OMPI devel] mtt-submit, etc."</a>
<li><strong>Previous message:</strong> <a href="0651.php">Josh Hursey: "Re: [MTT devel] Detail link error"</a>
<!-- nextthread="start" -->
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
