<?
$subject_val = "[OMPI docs] Small note about MPI_Buffer_detach";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 09:00:37 2015" -->
<!-- isoreceived="20150220140037" -->
<!-- sent="Fri, 20 Feb 2015 15:00:38 +0100" -->
<!-- isosent="20150220140038" -->
<!-- name="Maximilian" -->
<!-- email="maxinator333_at_[hidden]" -->
<!-- subject="[OMPI docs] Small note about MPI_Buffer_detach" -->
<!-- id="54E73E06.2090809_at_googlemail.com" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI docs] Small note about MPI_Buffer_detach<br>
<strong>From:</strong> Maximilian (<em>maxinator333_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 09:00:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0215.php">Maximilian: "[OMPI docs] MPI_Ibarrier missing request argument"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2015/01/0213.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0217.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Small note about MPI_Buffer_detach"</a>
<li><strong>Reply:</strong> <a href="0217.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Small note about MPI_Buffer_detach"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I understand, that MPI_Buffer_detach returns the buffer address in buf. 
<br>
For that I do understand the C++ syntax:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int Detach_buffer(void*&amp; buffer)
<br>
which is a call by reference of a void*. But I find the C-Syntax misleading:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int MPI_Buffer_detach(void *buf, int *size)
<br>
Here a void pointer is given. It could be thought that the void* to the 
<br>
buffer is copied to that function, meaning there would be no return of 
<br>
the buffer address. I think it should read:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int MPI_Buffer_detach(void **buf, int *size)
<br>
for that reason.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0215.php">Maximilian: "[OMPI docs] MPI_Ibarrier missing request argument"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2015/01/0213.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0217.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Small note about MPI_Buffer_detach"</a>
<li><strong>Reply:</strong> <a href="0217.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Small note about MPI_Buffer_detach"</a>
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
