<?
$subject_val = "[OMPI users] Sending vector elements of type T using MPI_Ssend, plz help.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  1 14:56:15 2011" -->
<!-- isoreceived="20111101185615" -->
<!-- sent="Tue, 1 Nov 2011 11:56:10 -0700 (PDT)" -->
<!-- isosent="20111101185610" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="[OMPI users] Sending vector elements of type T using MPI_Ssend, plz help." -->
<!-- id="1320173770.53115.YahooMailNeo_at_web121718.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help.<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-01 14:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17663.php">Blosch, Edwin L: "[OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17661.php">amine mrabet: "[OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17664.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>Reply:</strong> <a href="17664.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear MPI people, 

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I have a vector class with template as follows,

template &lt;typename T&gt;
class Vector

It is a wrapper on the STL vector class. The element type is T that will be replaced by the actual instantiated type on the runtime. I have not seen any support in C++ templates for checking the type of T. I need to send elements of type T that are in the Vector v; using the MPI_Ssend ........ plz help me how can I do that. How can I send few elements may be starting from 4th element to the 10th element in the vector.

regards,
Mudassar

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17662/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17663.php">Blosch, Edwin L: "[OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17661.php">amine mrabet: "[OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17664.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>Reply:</strong> <a href="17664.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
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
