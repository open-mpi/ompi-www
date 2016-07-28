<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 11:49:50 2007" -->
<!-- isoreceived="20070613154950" -->
<!-- sent="Wed, 13 Jun 2007 17:49:45 +0200" -->
<!-- isosent="20070613154945" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="20070613154945.GC19009_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="70667107-3A53-4856-9855-3111D7C46DA8_at_lanl.gov" -->
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
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 11:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1680.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1680.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Galen,Gleb,
<br>
there is also something weird going on if I call the basic alltoall
<br>
during the module_init() of a collective module (I need to wire up my
<br>
own QPs in my coll component). It takes 7 seconds for 4 nodes and more
<br>
than 30 minutes for 120 nodes. It seems to be an OpenIB wireup issue
<br>
because if I start with -mca btl tcp,self this goes as fast as expected
<br>
(&lt;2 seconds). 
<br>
<p>Will this issue be fixed with your patch?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
Indiana University    | <a href="http://www.indiana.edu">http://www.indiana.edu</a>
Open Systems Lab      | <a href="http://osl.iu.edu/">http://osl.iu.edu/</a>
150 S. Woodlawn Ave.  | Bloomington, IN, 474045-7104 | USA
Lindley Hall Room 135 | +01 (812) 855-3608
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1680.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1680.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
