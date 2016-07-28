<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 29 17:55:07 2006" -->
<!-- isoreceived="20060929215507" -->
<!-- sent="Fri, 29 Sep 2006 16:54:56 -0500" -->
<!-- isosent="20060929215456" -->
<!-- name="Josh Durham" -->
<!-- email="joshdurham_at_[hidden]" -->
<!-- subject="[OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support" -->
<!-- id="B6EB93FF-0E5D-44FF-8A5F-0D22DB597132_at_mac.com" -->
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
<strong>From:</strong> Josh Durham (<em>joshdurham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-29 17:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1910.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Previous message:</strong> <a href="1908.php">Prakash Velayutham: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/1948.php">Jeff Squyres: "Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/1948.php">Jeff Squyres: "Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below are the changes needed to build OMPI on OSX with ifort and  
<br>
icc.  Basically, the Xgrid component doesn't have a libtool tag  
<br>
defined for ObjC code.  Adding this makes it consistent with the rest  
<br>
of the build - all the other Makefiles has --tag=CC.  This was  
<br>
configured with './configure CC=icc CXX=icpc'
<br>
<p>In orte/mca/pls/xgrid/Makefile.in:
<br>
215c215
<br>
&lt; LTOBJCCOMPILE = $(LIBTOOL) --mode=compile $(OBJC) $(DEFS) \
<br>
<pre>
---
 &gt; LTOBJCCOMPILE = $(LIBTOOL) --tag=CC --mode=compile $(OBJC) $(DEFS) \
219c219
&lt; OBJCLINK = $(LIBTOOL) --mode=link $(OBJCLD) $(AM_OBJCFLAGS) \
---
 &gt; OBJCLINK = $(LIBTOOL) --tag=CC --mode=link $(OBJCLD) $ 
(AM_OBJCFLAGS) \
I'll leave it up to the developers to figure out how to get the  
automake stuff to generate this properly.  I have no clue.
- Josh
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1909/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1910.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Previous message:</strong> <a href="1908.php">Prakash Velayutham: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/1948.php">Jeff Squyres: "Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/1948.php">Jeff Squyres: "Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
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
