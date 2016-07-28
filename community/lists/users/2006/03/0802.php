<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 14:49:47 2006" -->
<!-- isoreceived="20060309194947" -->
<!-- sent="Thu, 09 Mar 2006 11:51:00 -0800" -->
<!-- isosent="20060309195100" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Myrinet on linux cluster" -->
<!-- id="44108724.9050301_at_reachone.com" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-09 14:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0803.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to install OPENMPI on a Linux cluster with 22 dual Opteron 
<br>
nodes
<br>
and a Myrinet interconnect.  I am having trouble with the build with the GM
<br>
libraries.  I configured with:
<br>
<p>./configure --prefix-/users/rosmond/ompi --with-gm=/usr/lib64 
<br>
--enable-mpi2-one-sided
<br>
<p>and the environmental variables:
<br>
<p>setenv FC pgf90
<br>
setenv F77 pgf90
<br>
setenv CCPFLAGS /usr/include/gm       ! (note this non-standard location)
<br>
<p>The configure seemed to go OK, but the make failed.  As you see at the 
<br>
end of the
<br>
make output, it doesn't like the format of libgm.so.  It looks to me 
<br>
that it is using
<br>
a path (/usr/lib/.....) to 32 bit libraries, rather than 64 bit 
<br>
(/usr/lib64/....).   Is this
<br>
correct?  What's the solution?
<br>
<p>Tom Rosmond
<br>
<p>


<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0802/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0802/config_out.bz2">config_out.bz2</a>
</ul>
<!-- attachment="config_out.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0802/make_out.bz2">make_out.bz2</a>
</ul>
<!-- attachment="make_out.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0803.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0806.php">Troy Telford: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Reply:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
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
