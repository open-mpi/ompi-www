<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  5 15:50:16 2007" -->
<!-- isoreceived="20070405195016" -->
<!-- sent="Thu, 5 Apr 2007 21:50:04 +0200" -->
<!-- isosent="20070405195004" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi and Torque" -->
<!-- id="DF87BF78-6578-405C-A947-4DD990320946_at_sara.nl" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-05 15:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3029.php">herve PETIT Perso: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="3027.php">Xie, Hugh: "[OMPI users] Grid launcher question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;I am just try to enable  PBS /Torque support in Open MPI with the -- 
<br>
with-tm option.  My question is why the utility 'pbs-config' is not  
<br>
used to determine the location of the include/library directory.  It  
<br>
is standard included in the torque software.
<br>
<p><p># pbs-config ---cflags
<br>
{{{
<br>
-I/usr/include/torque
<br>
}}}
<br>
<p># pbs-config --libs
<br>
{{{
<br>
-ltorque
<br>
}}}
<br>
<p><pre>
--
Bas van der Vlies
basv_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3029.php">herve PETIT Perso: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="3027.php">Xie, Hugh: "[OMPI users] Grid launcher question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Reply:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
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
