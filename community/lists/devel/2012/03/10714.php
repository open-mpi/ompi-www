<?
$subject_val = "[OMPI devel] v1.5 r26132 broken on multiple nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 01:27:32 2012" -->
<!-- isoreceived="20120315052732" -->
<!-- sent="Thu, 15 Mar 2012 01:27:25 -0400" -->
<!-- isosent="20120315052725" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.5 r26132 broken on multiple nodes?" -->
<!-- id="4F617DBD.6000607_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.5 r26132 broken on multiple nodes?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 01:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10713.php">Ralph Castain: "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10719.php">Ralph Castain: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Reply:</strong> <a href="10719.php">Ralph Castain: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm quitting for the day, but happened to notice that all our v1.5 MTT 
<br>
runs are failing with r26133, though tests ran fine as of r26129.  
<br>
Things run fine on-node, but if you run even just &quot;hostname&quot; on a remote 
<br>
node, the job fails with
<br>
<p>orted: Command not found
<br>
<p>I get this problem whether I include &quot;--prefix $OPAL_PREFIX&quot; or not.
<br>
<p>Looking at recent putbacks, I see r26132 pulls in r26081 to fix #3047.  
<br>
According to both the trac ticket and 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/03/10672.php">http://www.open-mpi.org/community/lists/devel/2012/03/10672.php</a> , r26081 
<br>
alone isn't enough, but... whatever, I'm going to bed.  It does seem 
<br>
like r26132 isn't quite right.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10715.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10713.php">Ralph Castain: "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10719.php">Ralph Castain: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Reply:</strong> <a href="10719.php">Ralph Castain: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
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
